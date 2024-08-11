<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Card;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload; // Import FileUpload
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Card::make()
                    ->schema([
                        TextInput::make('codeProduk')->required()->unique(ignorable: fn($record) => $record),
                        TextInput::make('namaProduk')->required(),
                        TextInput::make('deskripsiProduk')->required(),
                        TextInput::make('hargaProduk')->required(),
                        TextInput::make('stokProduk')->required(),
                        Select::make('kategoriProduk')->options([
                            'Baju' => 'Baju',
                            'Sepatu' => 'Sepatu',
                            'Celana' => 'Celana',
                            'Tas' => 'Tas',
                        ]),
                        TextInput::make('warnaProduk')->required(),
                        TextInput::make('ukuranProduk')->required(),
                        FileUpload::make('gambarProduk') // Gunakan FileUpload untuk gambar
                            ->required()
                            ->disk('public') // Disk tempat file disimpan, sesuaikan dengan konfigurasi Anda
                            ->directory('product-images') // Direktori untuk menyimpan file
                            ->image() // Validasi untuk hanya gambar
                            ->maxSize(2 * 1024) // Maksimal ukuran file dalam kilobyte
                            ->columnSpan(2), // Opsional, untuk menyesuaikan lebar kolom
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Kolom tabel lainnya
                TextColumn::make('codeProduk')->sortable()->searchable(),
                TextColumn::make('namaProduk')->sortable()->searchable(),
                TextColumn::make('stokProduk')->sortable()->searchable(),
                TextColumn::make('kategoriProduk')->sortable()->searchable(),
                TextColumn::make('updated_at')->dateTime(),
            ])
            ->filters([
                // Filter tabel lainnya
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            // Relasi lainnya
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}