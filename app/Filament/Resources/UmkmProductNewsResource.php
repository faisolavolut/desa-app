<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmkmProductNewsResource\Pages;
use App\Filament\Resources\UmkmProductNewsResource\RelationManagers;
use App\Models\UmkmProductNews;
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

class UmkmProductNewsResource extends Resource
{
    protected static ?string $model = UmkmProductNews::class;

    protected static ?string $navigationGroup = 'Manage UMKM';
    protected static ?string $pluralLabel = 'UMKM News';
    protected static ?string $modelLabel = 'UMKM News';
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

                Grid::make(2)
                    ->schema([

                        TextInput::make('news_title')
                            ->label('Judul Berita')
                            ->required(),
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
                    ]),
                Grid::make(1)
                    ->schema([


                        RichEditor::make('news_content')
                            ->label('Isi Berita')
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'bulletList',
                                'orderedList',
                                'link',
                            ]),
                        SpatieMediaLibraryFileUpload::make('news_photo')
                            ->collection('news_photo')
                            ->responsiveImages()
                            ->conversion('thumb')
                            ->label('Foto Berita')
                            ->directory('news-photos')
                            ->disk('public')
                            ->image()
                            ->required(fn($record) => $record === null)
                            ->helperText(fn($record) => $record
                                ? 'Jika Anda tidak mengupload gambar baru, gambar yang ada akan tetap digunakan.'
                                : null)
                            ->nullable(fn($record) => $record !== null),
                    ]),
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
                TextColumn::make('news_title')
                    ->label('Judul Berita')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('news_content')
                    ->label('Konten Berita')
                    ->limit(50)
                    ->tooltip(fn($record) => $record->news_content),
                ImageColumn::make('news_photo')
                    ->label('Foto Berita')
                    ->disk('public')
                    ->width(50)
                    ->height(50),
                TextColumn::make('published_at')
                    ->label('Dipublikasikan Pada')
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
            'index' => Pages\ListUmkmProductNews::route('/'),
            'create' => Pages\CreateUmkmProductNews::route('/create'),
            'edit' => Pages\EditUmkmProductNews::route('/{record}/edit'),
        ];
    }
}
