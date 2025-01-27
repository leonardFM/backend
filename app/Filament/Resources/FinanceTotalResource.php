<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinanceTotalResource\Pages;
use App\Filament\Resources\FinanceTotalResource\RelationManagers;
use App\Models\FinanceTotal;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FinanceTotalResource extends Resource
{
    protected static ?string $model = FinanceTotal::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('bulan')
                ->label('Month')
                ->options([
                    '1' => 'Januari',
                    '2' => 'Februari',
                    '3' => 'Maret',
                    '4' => 'April',
                    '5' => 'Mei',
                    '6' => 'Juni',
                    '7' => 'Juli',
                    '8' => 'Agustus',
                    '9' => 'September',
                    '10' => 'Oktober',
                    '11' => 'November',
                    '12' => 'Desember',
                ])                                
                ->default(now()->month)
                ->required(),
                Forms\Components\TextInput::make('tahun')
                    ->label('Year')
                    ->default(now()->year) 
                    ->required()
                    ->maxLength(4),
                Forms\Components\TextInput::make('total')
                    ->label('Total')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan')
                    ->label('Month')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->label('Year')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total')
                    ->label('Total')
                    ->money('IDR')
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
            'index' => Pages\ListFinanceTotals::route('/'),
            'create' => Pages\CreateFinanceTotal::route('/create'),
            'edit' => Pages\EditFinanceTotal::route('/{record}/edit'),
        ];
    }
}
