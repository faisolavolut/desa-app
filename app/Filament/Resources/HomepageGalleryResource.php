<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageGalleryResource\Pages;
use App\Filament\Resources\HomepageGalleryResource\RelationManagers;
use App\Models\HomepageGallery;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class HomepageGalleryResource extends Resource
{
    protected static ?string $model = HomepageGallery::class;

    protected static ?string $navigationGroup = 'Homepage Management';

    protected static ?string $pluralLabel = 'Gallery';

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

                SpatieMediaLibraryFileUpload::make('image_url')
                    ->collection('image_url')
                    ->label('Upload Gambar')
                    ->responsiveImages()
                    ->conversion('thumb')
                    ->directory('gallery-images') // Folder penyimpanan
                    ->disk('public') // Gunakan disk public
                    ->image() // Validasi gambar
                    ->required(fn($record) => $record === null) // Wajib hanya saat create
                    ->helperText(fn($context) => $context === 'edit'
                        ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                        : null) // Tampilkan helperText hanya saat edit
                    ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png'])
                    ->maxSize(2048) // Maksimal 2MB
                    ->nullable(fn($record) => $record !== null)
                    ->downloadable()
                    ->visibility('public'),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul'),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50), // Batasi teks yang ditampilkan
                Tables\Columns\ImageColumn::make('image_url')->label('Gambar'),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime(),
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
            'index' => Pages\ListHomepageGalleries::route('/'),
            'create' => Pages\CreateHomepageGallery::route('/create'),
            'edit' => Pages\EditHomepageGallery::route('/{record}/edit'),
        ];
    }
}
