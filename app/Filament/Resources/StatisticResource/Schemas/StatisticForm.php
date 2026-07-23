<?php

namespace App\Filament\Resources\StatisticResource\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;

class StatisticForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('category')
                    ->label('Kategori')
                    ->options([
                        'demografi' => 'Demografi',
                        'pendidikan' => 'Pendidikan',
                        'pekerjaan' => 'Pekerjaan',
                        'ekonomi' => 'Ekonomi',
                        'kesehatan' => 'Kesehatan',
                        'sosial' => 'Sosial',
                        'lainnya' => 'Lainnya',
                    ])
                    ->required(),
                TextInput::make('label')
                    ->label('Label')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh: Jumlah Penduduk'),
                TextInput::make('value')
                    ->label('Nilai')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('Contoh: 5.234 jiwa'),
                TextInput::make('icon')
                    ->label('Icon (Heroicon)')
                    ->maxLength(255)
                    ->placeholder('heroicon-o-users')
                    ->helperText('Gunakan nama icon dari Heroicons'),
                TextInput::make('order')
                    ->label('Urutan')
                    ->numeric()
                    ->default(0)
                    ->required(),
                TextInput::make('year')
                    ->label('Tahun')
                    ->numeric()
                    ->default(date('Y'))
                    ->required()
                    ->maxLength(4),
            ]);
    }
}
