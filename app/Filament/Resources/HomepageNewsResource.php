<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageNewsResource\Pages;
use App\Filament\Resources\HomepageNewsResource\RelationManagers;
use App\Models\HomepageNews;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class HomepageNewsResource extends Resource
{
    protected static ?string $model = HomepageNews::class;


    protected static ?string $navigationGroup = 'Homepage Management';

    protected static ?string $pluralLabel = 'News';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canViewAny(): bool
    {
        return auth()->user() && auth()->user()->roles === 'ADMIN';
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Grid::make(1)
                    ->schema([
                        Forms\Components\TextInput::make('title')
                            ->label('Judul')
                            ->required(),

                        SpatieMediaLibraryFileUpload::make('image_url')
                            ->collection('image_url')
                            ->responsiveImages()
                            ->conversion('thumb')
                            ->label('Gambar Berita')
                            ->directory('news-images') // Folder penyimpanan
                            ->disk('public') // Gunakan disk public
                            ->image() // Validasi gambar
                            ->required(fn($record) => $record === null) // Wajib saat create
                            ->helperText(fn($record) => $record
                                ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                                : null) // HelperText hanya saat edit
                            ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png'])
                            ->maxSize(2048) // Maksimal 2MB
                            ->nullable(fn($record) => $record !== null), // Izinkan kosong saat edit
                        Forms\Components\RichEditor::make('description')
                            ->label('Deskripsi')
                            ->toolbarButtons([
                                'bold',           // Teks tebal
                                'italic',         // Teks miring
                                'strike',         // Coret teks
                                'bulletList',     // List bullet
                                'orderedList',    // List berurutan
                                'link',           // Tambahkan tautan
                                'redo',           // Ulangi
                                'undo',           // Kembali
                                'codeBlock',      // Tambahkan block code
                            ])
                            ->fileAttachmentsDisk('public') // Opsi untuk unggah file jika dibutuhkan
                            ->fileAttachmentsDirectory('news-attachments') // Folder penyimpanan file
                            ->nullable(), // Field opsional
                    ]),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Judul'),
                Tables\Columns\ImageColumn::make('image_url')->label('Gambar'),
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
            'index' => Pages\ListHomepageNews::route('/'),
            'create' => Pages\CreateHomepageNews::route('/create'),
            'edit' => Pages\EditHomepageNews::route('/{record}/edit'),
        ];
    }
}
