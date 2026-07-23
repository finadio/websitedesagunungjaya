<?php

namespace App\Filament\Resources\ComplaintResource\Schemas;

use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\DateTimePicker;

class ComplaintForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Pengadu')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                        TextInput::make('phone')
                            ->label('No. Telepon')
                            ->tel()
                            ->required()
                            ->maxLength(20),
                    ])->columns(3),
                    
                Section::make('Detail Pengaduan')
                    ->schema([
                        TextInput::make('subject')
                            ->label('Subjek')
                            ->required()
                            ->maxLength(255),
                        Textarea::make('message')
                            ->label('Pesan/Keluhan')
                            ->required()
                            ->rows(5)
                            ->columnSpanFull(),
                    ]),
                    
                Section::make('Tindak Lanjut')
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options([
                                'pending' => 'Menunggu',
                                'in_progress' => 'Sedang Diproses',
                                'resolved' => 'Selesai',
                                'rejected' => 'Ditolak',
                            ])
                            ->default('pending')
                            ->required(),
                        Textarea::make('response')
                            ->label('Tanggapan')
                            ->rows(4)
                            ->columnSpanFull(),
                        DateTimePicker::make('responded_at')
                            ->label('Waktu Ditanggapi'),
                    ]),
            ]);
    }
}
