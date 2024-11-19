<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UmkmResource\Pages;
use App\Models\Umkm;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Actions\EditAction;
use Filament\Tables\Actions\DeleteAction;
use Filament\Forms\Form;

class UmkmResource extends Resource
{
    protected static ?string $model = Umkm::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Umkm & jasa Management'; 

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_umkm')
                    ->label('Nama UMKM')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('deskripsi')
                    ->label('Deskripsi')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('foto_umkm')
                    ->label('Foto UMKM')
                    ->required()
                    ->maxLength(255),
                
                Forms\Components\TextInput::make('status')
                    ->label('Status')
                    ->default('aktif')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('kategori')
                    ->label('Kategori UMKM')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    // Tabel untuk melihat daftar record
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('nama_umkm')
                    ->sortable()
                    ->searchable()
                    ->label('Nama UMKM'),

                TextColumn::make('alamat')
                    ->limit(50)
                    ->label('Alamat'),

                TextColumn::make('deskripsi')
                    ->limit(50)
                    ->label('Deskripsi'),

                ImageColumn::make('foto_umkm')
                    ->label('Foto UMKM')
                    ->rounded(),

                TextColumn::make('status')
                    ->label('Status'),

                TextColumn::make('kategori')
                    ->label('Kategori UMKM'),
            ])
            ->filters([
                // Tambahkan filter di sini jika perlu
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    // Menentukan halaman yang tersedia
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUmkms::route('/'),
            'create' => Pages\CreateUmkm::route('/create'),
            'edit' => Pages\EditUmkm::route('/{record}/edit'),
        ];
    }
}
