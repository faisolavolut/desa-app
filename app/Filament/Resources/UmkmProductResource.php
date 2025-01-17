<?php

namespace App\Filament\Resources;

use App\Models\UmkmProduct;
use App\Filament\Resources\UmkmProductResource\Pages;
use App\Filament\Resources\UmkmProductResource\RelationManagers;
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
use Filament\Tables\Actions\CreateAction;
use Pelmered\FilamentMoneyField\Forms\Components\MoneyInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Hidden;

class UmkmProductResource extends Resource
{
    protected static ?string $model = UmkmProduct::class;

    protected static ?string $navigationGroup = 'Manage UMKM';
    protected static ?string $pluralLabel = 'UMKM';
    protected static ?string $modelLabel = 'UMKM';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canViewAny(): bool
    {
        return auth()->user() && auth()->user()->roles === 'ADMIN'  || auth()->user() && auth()->user()->roles === 'UMKM';
    }
    public static function getEloquentQuery(): \Illuminate\Database\Eloquent\Builder
    {
        $user = auth()->user();
        // Terapkan filter berdasarkan role user
        return static::$model::query()->forUser($user);
    }
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Grid::make(2)
                    ->schema([
                        Select::make('product_id')
                            ->label('Pemilik UMKM')
                            ->relationship('user', 'name')
                            ->required()
                            ->searchable()
                            ->placeholder('Pilih Pemilik UMKM')
                            ->visible(fn() => auth()->user()->roles !== 'UMKM')
                            ->preload(),
                        Hidden::make('user_id')
                            ->default(fn() => auth()->id()) // Isi otomatis dengan ID user login
                            ->visible(fn() => auth()->user()->roles === 'UMKM'),
                        TextInput::make('product_name')
                            ->label('Nama UMKM')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('product_title')
                            ->label('Judul UMKM')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('short_description')
                            ->label('Deskripsi Singkat')
                            ->maxLength(65535),

                        Textarea::make('address')
                            ->label('Alamat')
                            ->required(),

                        TextInput::make('contact')
                            ->label('Kontak')
                            ->required()
                            ->maxLength(255),
                    ]),
                Grid::make(1)
                    ->schema([
                        SpatieMediaLibraryFileUpload::make('product_photo')
                            ->collection('product_photos')
                            ->responsiveImages()
                            ->conversion('thumb')
                            ->label('Foto UMKM')
                            ->directory('product-images')
                            ->disk('public')
                            ->image()
                            ->required(fn($record) => $record === null)
                            ->helperText(fn($record) => $record
                                ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                                : null)
                            ->acceptedFileTypes(['image/jpeg', 'image/jpg', 'image/png'])
                            ->maxSize(2048)
                            ->nullable(fn($record) => $record !== null),

                        Textarea::make('umkm_profile')
                            ->label('Profil UMKM')
                            ->maxLength(65535),

                        RichEditor::make('facilities')
                            ->label('Fasilitas')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ]),
                        RichEditor::make('rab')
                            ->label('Rencana Anggaran Biaya (RAB)')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ]),
                        // Tabs::make('Tabs')
                        //     ->tabs([
                        //         Tabs\Tab::make('Dokumentasi')
                        //             ->schema([
                        //                 Repeater::make('documentations')
                        //                     ->relationship('documentations')
                        //                     ->schema([
                        //                         Textarea::make('description')->label('Deskripsi'),
                        //                         SpatieMediaLibraryFileUpload::make('file_path')
                        //                             ->collection('documentation_files')
                        //                             ->responsiveImages()
                        //                             ->conversion('thumb')
                        //                             ->label('Gambar Dokumentasi')
                        //                             ->directory('documentation-files')
                        //                             ->disk('public')
                        //                             ->nullable(),
                        //                     ]),
                        //             ]),
                        //         Tabs\Tab::make('Katalog Produk')
                        //             ->schema([
                        //                 Repeater::make('catalogs')
                        //                     ->relationship('catalogs')
                        //                     ->schema([
                        //                         TextInput::make('catalog_name')->label('Nama Katalog')->nullable(),
                        //                         Textarea::make('catalog_description')->label('Deskripsi'),

                        //                         MoneyInput::make('price')
                        //                             ->label('Harga')
                        //                             ->currency('IDR')
                        //                             ->locale('id_ID'),
                        //                         SpatieMediaLibraryFileUpload::make('file_path')
                        //                             ->collection('file_path')
                        //                             ->responsiveImages()
                        //                             ->conversion('thumb')
                        //                             ->label('File Katalog')
                        //                             ->directory('catalog-files')
                        //                             ->disk('public')
                        //                             ->nullable(),
                        //                     ]),
                        //             ]),
                        //         Tabs\Tab::make('News')
                        //             ->schema([
                        //                 Repeater::make('news')
                        //                     ->relationship('news')
                        //                     ->schema([
                        //                         TextInput::make('news_title')
                        //                             ->label('Judul Berita')
                        //                             ->required(),
                        //                         RichEditor::make('news_content')
                        //                             ->label('Isi Berita')
                        //                             ->toolbarButtons([
                        //                                 'bold',
                        //                                 'italic',
                        //                                 'underline',
                        //                                 'bulletList',
                        //                                 'orderedList',
                        //                                 'link',
                        //                             ])
                        //                             ->required(),
                        //                         SpatieMediaLibraryFileUpload::make('news_photo')
                        //                             ->collection('news_photo')
                        //                             ->responsiveImages()
                        //                             ->conversion('thumb')
                        //                             ->label('Foto Berita')
                        //                             ->directory('news-photos')
                        //                             ->disk('public')
                        //                             ->image()
                        //                             ->required(fn($record) => $record === null)
                        //                             ->helperText(fn($record) => $record
                        //                                 ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                        //                                 : null)
                        //                             ->nullable(fn($record) => $record !== null),
                        //                     ])
                        //                     ->label('Daftar Berita'),
                        //             ]),
                        //     ]),
                    ]),

            ]);
    }

    public static function getActions(): array
    {
        return [
            CreateAction::make("add")
                ->label('Add') // Mengubah label tombol
                ->icon('heroicon-o-plus') // Menambahkan ikon bawaan
                ->button(), // Menentukan gaya tombol
        ];
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product_name')->label('Nama UMKM'),
                TextColumn::make('product_title')->label('Judul UMKM'),
                ImageColumn::make('product_photo')->label('Foto UMKM'),
                TextColumn::make('contact')->label('Kontak'),
                TextColumn::make('created_at')->label('Dibuat Pada')->dateTime(),
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
            'index' => Pages\ListUmkmProducts::route('/'),
            'create' => Pages\CreateUmkmProduct::route('/create'),
            'edit' => Pages\EditUmkmProduct::route('/{record}/edit'),
        ];
    }
}
