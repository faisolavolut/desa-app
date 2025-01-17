<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageContactResource\Pages;
use App\Filament\Resources\HomepageContactResource\RelationManagers;
use App\Models\HomepageContact;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class HomepageContactResource extends Resource
{
    protected static ?string $model = HomepageContact::class;

    protected static ?string $navigationGroup = 'Homepage Management';

    protected static ?string $pluralLabel = 'Contact';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function canViewAny(): bool
    {
        return auth()->user() && auth()->user()->roles === 'ADMIN';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->label('Judul'),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi'),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->label('Email'),

                Forms\Components\TextInput::make('phone')
                    ->label('Telepon'),

                Forms\Components\Textarea::make('address')
                    ->label('Alamat'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul'),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi')->limit(50),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('phone')->label('Telepon'),
                Tables\Columns\TextColumn::make('address')->label('Alamat')->limit(50),
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
            'index' => Pages\ListHomepageContacts::route('/'),
            'create' => Pages\CreateHomepageContact::route('/create'),
            'edit' => Pages\EditHomepageContact::route('/{record}/edit'),
        ];
    }
}
