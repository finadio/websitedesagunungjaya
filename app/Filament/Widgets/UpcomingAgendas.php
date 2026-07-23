<?php

namespace App\Filament\Widgets;

use App\Models\Agenda;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class UpcomingAgendas extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    
    protected static ?int $sort = 3;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Agenda::query()
                    ->where('start_time', '>=', now())
                    ->orderBy('start_time', 'asc')
                    ->limit(5)
            )
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul Kegiatan')
                    ->searchable()
                    ->weight('semibold')
                    ->limit(40),
                
                Tables\Columns\TextColumn::make('location')
                    ->label('Lokasi')
                    ->icon('heroicon-o-map-pin')
                    ->limit(30),
                
                Tables\Columns\TextColumn::make('start_time')
                    ->label('Waktu Mulai')
                    ->dateTime('d M Y, H:i')
                    ->sortable()
                    ->color('success'),
                
                Tables\Columns\TextColumn::make('end_time')
                    ->label('Waktu Selesai')
                    ->dateTime('d M Y, H:i')
                    ->color('warning'),
            ])
            ->heading('Agenda Mendatang')
            ->description('5 kegiatan yang akan datang')
            ->emptyStateHeading('Tidak ada agenda')
            ->emptyStateDescription('Tambahkan agenda melalui menu Agendas')
            ->recordUrl(fn (Agenda $record): string => route('filament.admin.resources.agendas.edit', $record));
    }
}
