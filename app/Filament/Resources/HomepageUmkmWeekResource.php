<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageUmkmWeekResource\Pages;
use App\Filament\Resources\HomepageUmkmWeekResource\RelationManagers;
use App\Models\HomepageUmkmWeek;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;

class HomepageUmkmWeekResource extends Resource
{
    protected static ?string $model = HomepageUmkmWeek::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Homepage Management';
    protected static ?string $navigationLabel = 'UMKM Of The Week';
    protected static ?string $pluralLabel = 'UMKM Of The Week';
    public static function canViewAny(): bool
    {
        return auth()->user() && auth()->user()->roles === 'ADMIN';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                    ->label('Title')
                    ->required(),
                Textarea::make('description')
                    ->label('Deskripsi')
                    ->rows(4)
                    ->nullable(),
                TextInput::make('position')
                    ->label('Posisi')
                    ->numeric()
                    ->default(1)
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
                TextColumn::make('position')
                    ->label('Posisi')
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListHomepageUmkmWeeks::route('/'),
            'create' => Pages\CreateHomepageUmkmWeek::route('/create'),
            'edit' => Pages\EditHomepageUmkmWeek::route('/{record}/edit'),
        ];
    }
}
