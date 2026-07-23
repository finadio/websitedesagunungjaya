<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatisticResource\Pages;
use App\Filament\Resources\StatisticResource\Schemas\StatisticForm;
use App\Filament\Resources\StatisticResource\Tables\StatisticsTable;
use App\Models\Statistic;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class StatisticResource extends Resource
{
    protected static ?string $model = Statistic::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;
    
    public static function getNavigationLabel(): string
    {
        return 'Statistik';
    }
    
    public static function getModelLabel(): string
    {
        return 'Statistik';
    }
    
    public static function getPluralModelLabel(): string
    {
        return 'Statistik';
    }
    
    public static function getNavigationGroup(): ?string
    {
        return 'Data Desa';
    }
    
    public static function getNavigationSort(): ?int
    {
        return 4;
    }

    public static function form(Schema $schema): Schema
    {
        return StatisticForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return StatisticsTable::configure($table);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListStatistics::route('/'),
            'create' => Pages\CreateStatistic::route('/create'),
            'edit' => Pages\EditStatistic::route('/{record}/edit'),
        ];
    }
}
