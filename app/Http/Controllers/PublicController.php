<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Post;
use App\Models\Service;
use App\Models\VillageProfile;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PublicController extends Controller
{
    public function home()
    {
        return Inertia::render('Home', [
            'villageProfile' => VillageProfile::first(),
            'latestPosts' => Post::where('is_published', true)
                ->latest('published_at')
                ->take(3)
                ->get(),
            'agendas' => Agenda::where('start_time', '>=', now())
                ->orderBy('start_time')
                ->take(3)
                ->get(),
            'services' => Service::where('is_active', true)->take(6)->get(),
        ]);
    }

    public function profile()
    {
        return Inertia::render('Profile', [
             'profile' => VillageProfile::first(),
             'officials' => \App\Models\Official::orderBy('order')->get(),
        ]);
    }

    public function news(Request $request)
    {
        $query = Post::where('is_published', true);
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%");
            });
        }
        
        if ($request->has('category')) {
            $query->where('category', $request->get('category'));
        }
        
        return Inertia::render('News', [
            'posts' => $query->latest('published_at')->paginate(9),
            'filters' => $request->only(['search', 'category']),
        ]);
    }
    
    public function newsDetail($slug)
    {
        $post = Post::where('slug', $slug)
            ->where('is_published', true)
            ->firstOrFail();
            
        // Get related posts
        $relatedPosts = Post::where('is_published', true)
            ->where('category', $post->category)
            ->where('id', '!=', $post->id)
            ->latest('published_at')
            ->take(3)
            ->get();
            
        return Inertia::render('NewsDetail', [
            'post' => $post,
            'relatedPosts' => $relatedPosts,
        ]);
    }

    public function agenda(Request $request)
    {
        $query = Agenda::query();
        
        if ($request->has('search')) {
            $search = $request->get('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('location', 'like', "%{$search}%");
            });
        }
        
        // Filter: upcoming, past, or all
        $filter = $request->get('filter', 'upcoming');
        if ($filter === 'upcoming') {
            $query->where('start_time', '>=', now());
        } elseif ($filter === 'past') {
            $query->where('start_time', '<', now());
        }
        
        return Inertia::render('Agenda', [
            'agendas' => $query->orderBy('start_time', $filter === 'past' ? 'desc' : 'asc')->paginate(9),
            'filters' => $request->only(['search', 'filter']),
        ]);
    }
    
    public function agendaDetail($id)
    {
        $agenda = Agenda::findOrFail($id);
        
        // Get upcoming agendas
        $upcomingAgendas = Agenda::where('start_time', '>=', now())
            ->where('id', '!=', $agenda->id)
            ->orderBy('start_time')
            ->take(3)
            ->get();
            
        return Inertia::render('AgendaDetail', [
            'agenda' => $agenda,
            'upcomingAgendas' => $upcomingAgendas,
        ]);
    }

    public function gallery()
    {
        return Inertia::render('Gallery', [
            'galleries' => \App\Models\Gallery::latest()->paginate(12),
        ]);
    }

    public function services()
    {
        return Inertia::render('Services', [
            'services' => Service::where('is_active', true)->get(),
        ]);
    }

    public function showPage($slug)
    {
        $page = \App\Models\Page::where('slug', $slug)->firstOrFail();
        
        // If it's complaint page, pass additional data for form
        if ($slug === 'pengaduan') {
            return Inertia::render('ComplaintPage', [
                'page' => $page,
            ]);
        }
        
        // If it's statistics page, pass statistics data
        if ($slug === 'statistik') {
            return Inertia::render('StatisticPage', [
                'page' => $page,
                'statistics' => \App\Models\Statistic::currentYear()
                    ->orderBy('order')
                    ->get()
                    ->groupBy('category'),
            ]);
        }
        
        return Inertia::render('GenericPage', [
            'page' => $page,
        ]);
    }
    
    public function submitComplaint(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);
        
        \App\Models\Complaint::create($validated);
        
        return redirect()->back()->with('success', 'Pengaduan Anda telah berhasil dikirim. Kami akan segera menindaklanjuti.');
    }
    
    public function trackComplaint(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'required|string',
        ]);
        
        $complaints = \App\Models\Complaint::where('email', $request->email)
            ->where('phone', $request->phone)
            ->latest()
            ->get();
            
        return Inertia::render('TrackComplaint', [
            'complaints' => $complaints,
        ]);
    }
}
