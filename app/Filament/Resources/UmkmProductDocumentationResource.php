<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmkmProductDocumentationResource\Pages;
use App\Filament\Resources\UmkmProductDocumentationResource\RelationManagers;
use App\Models\UmkmProductDocumentation;
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
use Filament\Forms\Components\Select;
use Filament\Tables\Actions\CreateAction;
use Filament\Actions\Action;

class UmkmProductDocumentationResource extends Resource
{
    protected static ?string $model = UmkmProductDocumentation::class;

    protected static ?string $navigationGroup = 'Manage UMKM';
    protected static ?string $pluralLabel = 'UMKM Documentation';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = 'UMKM Documentation';


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
                SpatieMediaLibraryFileUpload::make('file_path')
                    ->collection('documentation_files')
                    ->label('File Dokumentasi')
                    ->disk('public')
                    ->required(fn($record) => $record === null)
                    ->helperText(fn($record) => $record
                        ? 'Jika Anda tidak mengupload file baru, file yang ada akan tetap digunakan.'
                        : null)
                    ->acceptedFileTypes(['image/jpeg', 'image/png', 'application/pdf', 'video/mp4'])
                    ->nullable(fn($record) => $record !== null),
                Textarea::make('description')->label('Deskripsi'),
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
                TextColumn::make('description')->label('Deskripsi'),
                ImageColumn::make('file_path')->label('File')->disk('public'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->headerActions([])
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
            'index' => Pages\ListUmkmProductDocumentations::route('/'),
            'create' => Pages\CreateUmkmProductDocumentation::route('/create'),
            'edit' => Pages\EditUmkmProductDocumentation::route('/{record}/edit'),
        ];
    }
}
