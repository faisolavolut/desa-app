<?php

namespace App\Filament\Resources;

use App\Models\UmkmProductCatalog;
use App\Filament\Resources\UmkmProductCatalogResource\Pages;
use App\Filament\Resources\UmkmProductCatalogResource\RelationManagers;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\BooleanColumn;
use Filament\Forms\Components\Select;

class UmkmProductCatalogResource extends Resource
{
    protected static ?string $model = UmkmProductCatalog::class;
    protected static ?string $navigationGroup = 'Manage UMKM';
    protected static ?string $pluralLabel = 'UMKM Catalog';
    protected static ?string $modelLabel = 'UMKM Catalog';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function canViewAny(): bool
    {
        return auth()->user() && auth()->user()->roles === 'ADMIN' || auth()->user() && auth()->user()->roles === 'UMKM';
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
                Select::make('product_id')
                    ->label('Pilih UMKM')
                    ->relationship('product', 'product_name')
                    ->required()
                    ->searchable()
                    ->options(function () {
                        $user = auth()->user();
                        // Jika role adalah UMKM, filter produk berdasarkan user_id
                        if ($user->roles === 'UMKM') {
                            return \App\Models\UmkmProduct::where('user_id', $user->id)
                                ->pluck('product_name', 'id');
                        }
                        // Jika bukan UMKM, tampilkan semua produk
                        return \App\Models\UmkmProduct::pluck('product_name', 'id');
                    })
                    ->placeholder('Pilih UMKM terkait')
                    ->preload(),
                TextInput::make('catalog_name')
                    ->required()
                    ->label('Nama Katalog'),
                Textarea::make('catalog_description')
                    ->label('Deskripsi Katalog'),
                SpatieMediaLibraryFileUpload::make('file_path')
                    ->collection('file_path')
                    ->responsiveImages()
                    ->conversion('thumb')
                    ->label('File Katalog')
                    ->directory('catalog-files')
                    ->disk('public')
                    ->required(fn($record) => $record === null)
                    ->helperText(fn($record) => $record
                        ? 'Jika Anda tidak mengupload file baru, file yang ada akan tetap digunakan.'
                        : null)
                    ->acceptedFileTypes(['application/pdf', 'image/jpeg', 'image/png'])
                    ->maxSize(2048)
                    ->nullable(fn($record) => $record !== null),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('product.product_name')
                    ->label('UMKM')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('catalog_name')->label('Nama Katalog')->searchable(),
                TextColumn::make('catalog_description')->label('Deskripsi'),
                BooleanColumn::make('is_active')->label('Aktif'),
                ImageColumn::make('file_path')->label('File')->disk('public'),
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
            'index' => Pages\ListUmkmProductCatalogs::route('/'),
            'create' => Pages\CreateUmkmProductCatalog::route('/create'),
            'edit' => Pages\EditUmkmProductCatalog::route('/{record}/edit'),
        ];
    }
}
