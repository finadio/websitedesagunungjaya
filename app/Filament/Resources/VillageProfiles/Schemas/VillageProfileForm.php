<?php

namespace App\Filament\Resources\VillageProfiles\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class VillageProfileForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Informasi Dasar')
                    ->schema([
                        TextInput::make('name')
                            ->label('Nama Desa')
                            ->required(),
                        TextInput::make('email')
                            ->email(),
                        TextInput::make('phone')
                            ->tel(),
                        Textarea::make('address')
                            ->label('Alamat Kantor')
                            ->columnSpanFull(),
                        FileUpload::make('logo')
                            ->image()
                            ->disk('public')
                            ->directory('village-profiles'),
                    ])->columns(2),
                
                Section::make('Detail Profil')
                    ->schema([
                        Textarea::make('description')
                            ->label('Deskripsi Singkat')
                            ->columnSpanFull(),
                        Textarea::make('vision')
                            ->label('Visi'),
                        Textarea::make('mission')
                            ->label('Misi'),
                        RichEditor::make('history')
                            ->label('Sejarah Desa')
                            ->toolbarButtons([
                                'attachFiles',
                                'blockquote',
                                'bold',
                                'bulletList',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'undo',
                            ])
                            ->fileAttachmentsDisk('public')
                            ->fileAttachmentsDirectory('attachments')
                            ->fileAttachmentsVisibility('public')
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
