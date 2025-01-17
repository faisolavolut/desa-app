<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SupportUMKMResource\Pages;
use App\Filament\Resources\SupportUMKMResource\RelationManagers;
use App\Models\SupportUMKM;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class SupportUMKMResource extends Resource
{
    protected static ?string $model = SupportUMKM::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralLabel = 'Support UMKM';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }
    public static function canViewAny(): bool
    {
        return false;
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')->label('Investor')->sortable(),
                TextColumn::make('product.product_name')->label('Produk')->sortable(),
                TextColumn::make('quantity')->label('Kuantitas'),
                TextColumn::make('total')->label('Total')->money('IDR'),
                TextColumn::make('notes')->label('Notes')->sortable(),
                TextColumn::make('created_at')->label('Dibuat Pada')->dateTime(),


            ])
            ->filters([
                //
            ])
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
            'index' => Pages\ListSupportUMKMS::route('/'),
        ];
    }
}
