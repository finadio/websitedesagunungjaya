<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPosts extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 2;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Post::query()->latest('created_at')->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul')
                    ->searchable()
                    ->limit(50)
                    ->weight('semibold'),
                
                Tables\Columns\BadgeColumn::make('category')
                    ->label('Kategori')
                    ->colors([
                        'primary' => 'news',
                        'warning' => 'announcement',
                    ])
                    ->formatStateUsing(fn ($state) => match($state) {
                        'news' => 'Berita',
                        'announcement' => 'Pengumuman',
                        default => $state,
                    }),
                
                Tables\Columns\IconColumn::make('is_published')
                    ->label('Status')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('danger'),
                
                Tables\Columns\TextColumn::make('published_at')
                    ->label('Tanggal Publish')
                    ->dateTime('d M Y, H:i')
                    ->sortable(),
            ])
            ->heading('Berita & Pengumuman Terbaru')
            ->description('5 posting terbaru di website')
            ->emptyStateHeading('Belum ada berita')
            ->emptyStateDescription('Tambahkan berita pertama melalui menu Posts')
            ->recordUrl(fn (Post $record): string => route('filament.admin.resources.posts.edit', $record));
    }
}
