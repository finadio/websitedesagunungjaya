<?php

namespace App\Filament\Resources\Services\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;

class ServiceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Dasar')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Layanan')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('icon')
                            ->label('Icon')
                            ->placeholder('heroicon-o-document')
                            ->helperText('Gunakan icon dari Heroicons'),
                        Textarea::make('description')
                            ->label('Deskripsi')
                            ->rows(3)
                            ->columnSpanFull(),
                    ]),
                    
                Section::make('Persyaratan & Prosedur')
                    ->schema([
                        Textarea::make('requirements')
                            ->label('Persyaratan')
                            ->rows(4)
                            ->helperText('Daftar persyaratan dokumen yang diperlukan')
                            ->columnSpanFull(),
                        Textarea::make('procedure')
                            ->label('Prosedur/Langkah-langkah')
                            ->rows(4)
                            ->helperText('Langkah-langkah untuk mengajukan layanan')
                            ->columnSpanFull(),
                    ]),
                    
                Section::make('Informasi Tambahan')
                    ->schema([
                        TextInput::make('processing_time')
                            ->label('Waktu Pemrosesan')
                            ->placeholder('Contoh: 3-5 hari kerja')
                            ->maxLength(255),
                        TextInput::make('fee')
                            ->label('Biaya')
                            ->placeholder('Contoh: Gratis atau Rp 10.000')
                            ->maxLength(255),
                        FileUpload::make('form_file')
                            ->label('File Formulir')
                            ->disk('public')
                            ->directory('services')
                            ->acceptedFileTypes(['application/pdf', 'application/msword', 'application/vnd.openxmlformats-officedocument.wordprocessingml.document'])
                            ->maxSize(5120)
                            ->helperText('Upload formulir jika ada (PDF/DOC, max 5MB)'),
                        Toggle::make('is_active')
                            ->label('Aktif')
                            ->default(true)
                            ->helperText('Layanan akan muncul di website jika aktif'),
                    ])->columns(2),
            ]);
    }
}

