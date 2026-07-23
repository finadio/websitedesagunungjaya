<?php

namespace App\Filament\Resources\Officials\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;

class OfficialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required(),
                TextInput::make('position')
                    ->required(),
                TextInput::make('phone')
                    ->tel(),
                TextInput::make('order')
                    ->numeric()
                    ->default(0),
                FileUpload::make('photo')
                    ->image()
                    ->disk('public')
                    ->directory('officials')
                    ->columnSpanFull(),
            ]);
    }
}
