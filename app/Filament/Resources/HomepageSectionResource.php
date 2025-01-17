<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HomepageSectionResource\Pages;
use App\Filament\Resources\HomepageSectionResource\RelationManagers;
use App\Models\HomepageSection;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;

class HomepageSectionResource extends Resource
{
    protected static ?string $model = HomepageSection::class;

    protected static ?string $navigationGroup = 'Homepage Management';

    protected static ?string $pluralLabel = 'Section';

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
                        Forms\Components\RichEditor::make('profile_kelurahan')
                            ->label('Profile Kelurahan')
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
                            ->fileAttachmentsDirectory('profile_kelurahan') // Folder penyimpanan file
                            ->nullable(), // Field opsional
                        Forms\Components\RichEditor::make('profile_umkm')
                            ->label('Profile UMKM')
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
                            ->fileAttachmentsDirectory('profile_umkm') // Folder penyimpanan file
                            ->nullable(), // Field opsional
                        Forms\Components\RichEditor::make('program_csr')
                            ->label('Program CSR')
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
                            ->fileAttachmentsDirectory('program_csr') // Folder penyimpanan file
                            ->nullable(), // Field opsional
                        SpatieMediaLibraryFileUpload::make('image_url')
                            ->collection('img')
                            ->responsiveImages()
                            ->conversion('thumb')
                            ->label('Gambar')
                            ->directory('news-section') // Folder penyimpanan
                            ->disk('public') // Gunakan disk public
                            ->image() // Validasi gambar
                            ->required(fn($record) => $record === null) // Wajib saat create
                            ->helperText(fn($record) => $record
                                ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                                : null) // HelperText hanya saat edit
                            ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png'])
                            ->maxSize(2048) // Maksimal 2MB
                            ->nullable(fn($record) => $record !== null), // Izinkan kosong saat edit
                    ]),




            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image_url')->label('Gambar'),
                Tables\Columns\TextColumn::make('profile_kelurahan')->label('Profile Kelurahan')->limit(50),
                Tables\Columns\TextColumn::make('profile_umkm')->label('Profile UMKM')->limit(50),
                Tables\Columns\TextColumn::make('program_csr')->label('Program CSR')->limit(50),
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
            'index' => Pages\ListHomepageSections::route('/'),
            'create' => Pages\CreateHomepageSection::route('/create'),
            'edit' => Pages\EditHomepageSection::route('/{record}/edit'),
        ];
    }
}
