<?php

namespace App\Filament\Resources;

use App\Filament\Resources\StatistikWargaResource\Pages;
use App\Filament\Resources\StatistikWargaResource\RelationManagers;
use App\Models\StatistikWarga;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class StatistikWargaResource extends Resource
{
    protected static ?string $model = StatistikWarga::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('jumlah_warga')
                ->label('Jumlah Warga')
                ->numeric()
                ->required(),
            Forms\Components\TextInput::make('jumlah_laki_laki')
                ->label('Jumlah Laki-Laki')
                ->numeric(),
            Forms\Components\TextInput::make('jumlah_perempuan')
                ->label('Jumlah Perempuan')
                ->numeric(),
            Forms\Components\TextInput::make('jumlah_kk')
                ->label('Jumlah KK')
                ->numeric(),
            Forms\Components\TextInput::make('anak')
                ->label('Anak')
                ->numeric(),
            Forms\Components\TextInput::make('penerima_bansos')
                ->label('Penerima Bansos')
                ->numeric(),
            Forms\Components\TextInput::make('umkm')
                ->label('UMKM')
                ->numeric()
        ]);
        
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('jumlah_warga')
                    ->label('Jumlah Warga')
                    ->numeric(),
                Tables\Columns\TextColumn::make('jumlah_laki_laki')
                    ->label('Jumlah Laki-Laki')
                    ->numeric(),
                Tables\Columns\TextColumn::make('jumlah_perempuan')
                    ->label('Jumlah Perempuan')
                    ->numeric(),
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
            'index' => Pages\ListStatistikWargas::route('/'),
            'create' => Pages\CreateStatistikWarga::route('/create'),
            'edit' => Pages\EditStatistikWarga::route('/{record}/edit'),
        ];
    }
}
