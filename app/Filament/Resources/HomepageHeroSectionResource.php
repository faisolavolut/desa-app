<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageHeroSectionResource\Pages;
use App\Filament\Resources\HomepageHeroSectionResource\RelationManagers;
use App\Models\HomepageHeroSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class HomepageHeroSectionResource extends Resource
{
    protected static ?string $model = HomepageHeroSection::class;

    protected static ?string $navigationGroup = 'Homepage Management';

    protected static ?string $pluralLabel = 'Hero Section';

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
                    ->label('Judul')
                    ->required(),

                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->nullable(),

                SpatieMediaLibraryFileUpload::make('background_image')
                    ->collection('background_image')
                    ->responsiveImages()
                    ->conversion('thumb')
                    ->label('Background Gambar')
                    ->directory('hero-sections') // Folder penyimpanan
                    ->disk('public') // Gunakan disk public
                    ->image() // Validasi gambar
                    ->required(fn($record) => $record === null) // Wajib saat create
                    ->helperText(fn($record) => $record
                        ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                        : null) // HelperText hanya saat edit
                    ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png'])
                    ->maxSize(2048) // Maksimal 2MB
                    ->nullable(fn($record) => $record !== null), // Izinkan kosong saat edit
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul'),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi')->limit(50),
                Tables\Columns\ImageColumn::make('background_image')->label('Background Gambar'),
                Tables\Columns\TextColumn::make('created_at')->label('Dibuat Pada')->dateTime(),
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
            'index' => Pages\ListHomepageHeroSections::route('/'),
            'create' => Pages\CreateHomepageHeroSection::route('/create'),
            'edit' => Pages\EditHomepageHeroSection::route('/{record}/edit'),
        ];
    }
}
