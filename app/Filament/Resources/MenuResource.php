<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Models\Menu;
use App\Models\Umkm;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Umkm & jasa Management'; 


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('umkm_id')
                    ->label('UMKM')
                    ->options(Umkm::all()->pluck('nama_umkm', 'id'))
                    ->required(), // Relasi ke UMKM
                Forms\Components\TextInput::make('name')
                    ->label('Nama Menu')
                    ->required(),
                Forms\Components\RichEditor::make('deskripsi')
                    ->label('Deskripsi Menu')
                    ->nullable(),
                Forms\Components\TextInput::make('harga')
                    ->label('Harga')
                    ->required()
                    ->numeric(),
                Forms\Components\Select::make('kategori')
                    ->label('Kategori Menu')
                    ->options([
                        'Makanan' => 'Makanan',
                        'Minuman' => 'Minuman',
                        'Lainnya' => 'Lainnya',
                    ])
                    ->required(),
                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'Tersedia' => 'Tersedia',
                        'Habis' => 'Habis',
                    ])
                    ->default('Tersedia'),
                Forms\Components\TextInput::make('foto_menu')
                    ->label('Foto Menu (URL)')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama Menu')
                    ->searchable(),
                Tables\Columns\TextColumn::make('harga')
                    ->label('Harga')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kategori')
                    ->label('Kategori'),
                Tables\Columns\TextColumn::make('status')
                    ->label('Status')
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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
