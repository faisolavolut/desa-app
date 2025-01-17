<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupportResource\Pages;
use App\Models\Support;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;

class SupportResource extends Resource
{
    protected static ?string $model = Support::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }
    public static function canCreate(): bool
    {
        return false;
    }
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $user = auth()->user();
        // Terapkan filter berdasarkan role user
        return static::$model::query()->forUser($user);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Investor')->sortable(),
                TextColumn::make('product.product_name')->label('UMKM')->sortable(),
                TextColumn::make('quantity')->label('Kuantitas'),
                TextColumn::make('total')->label('Total')->money('IDR'),
                TextColumn::make('created_at')->label('Dibuat Pada')->dateTime(),

            ])
            ->filters([])
            ->actions([])
            ->bulkActions([]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSupports::route('/'),
        ];
    }
}
