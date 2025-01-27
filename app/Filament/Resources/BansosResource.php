<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BansosResource\Pages;
use App\Models\Bansos;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BansosResource extends Resource
{
    protected static ?string $model = Bansos::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';
    protected static ?string $navigationGroup = 'Information Management'; 

    // Define the form schema
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_bansos')
                    ->label('Nama Bansos')
                    ->required(),

                Forms\Components\TextInput::make('jenis_bansos')
                    ->label('Jenis Bansos')
                    ->required(),

                Forms\Components\TextInput::make('informasi_bansos')
                    ->label('Informasi Bansos')
                    ->required(),

                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
            ]);
    }

    // Define the table columns and actions
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_bansos')
                    ->label('Nama Bansos')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('jenis_bansos')
                    ->label('Jenis Bansos')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('informasi_bansos')
                    ->label('Informasi Bansos')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('deskripsi')
                    ->label('Deskripsi')
                    ->searchable()
                    ->sortable(),
            ])
            ->filters([
                // You can add filters here if needed
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

    // Define relations if needed (optional)
    public static function getRelations(): array
    {
        return [
            // Define any relations here if necessary
        ];
    }

    // Define the pages for resource CRUD operations
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBansos::route('/'),
            'create' => Pages\CreateBansos::route('/create'),
            'edit' => Pages\EditBansos::route('/{record}/edit'),
        ];
    }
}
