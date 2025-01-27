<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FinancialRecordResource\Pages;
use App\Models\FinancialRecord;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class FinancialRecordResource extends Resource
{
    protected static ?string $model = FinancialRecord::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Finance Management';

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
                Forms\Components\TextInput::make('terkumpul')
                    ->label('Funds Collected')
                    ->numeric(),
                Forms\Components\TextInput::make('pengeluaran')
                    ->label('Expenditures')
                    ->numeric(),
                Forms\Components\TextInput::make('gaji_keamanan')
                    ->label('Security Salary')
                    ->numeric(),
                Forms\Components\TextInput::make('biaya_sampah')
                    ->label('Waste Cost')
                    ->numeric(),
                Forms\Components\TextInput::make('listrik')
                    ->label('Electricity Cost')
                    ->numeric(),
                Forms\Components\TextInput::make('konsumsi')
                    ->label('Consumption')
                    ->numeric(),
                Forms\Components\TextInput::make('belanja_alat')
                    ->label('Equipment Purchases')
                    ->numeric(),
                Forms\Components\TextInput::make('tenaga_kerja')
                    ->label('Labor Cost')
                    ->numeric(),
                Forms\Components\TextInput::make('kasbon_keamanan')
                    ->label('Security Cash Advance')
                    ->numeric(),
                Forms\Components\TextInput::make('dana_sosial')
                    ->label('Social Funds')
                    ->numeric(),
                Forms\Components\TextInput::make('pengembalian')
                    ->label('Return Funds')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('bulan')
                    ->label('Month')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tahun')
                    ->label('Year')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('terkumpul')
                    ->label('Funds Collected')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('pengeluaran')
                    ->label('Expenditures')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('gaji_keamanan')
                    ->label('Security Salary')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('biaya_sampah')
                    ->label('Waste Cost')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('listrik')
                    ->label('Electricity Cost')
                    ->money('IDR')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime('d-m-Y H:i'),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFinancialRecords::route('/'),
            'create' => Pages\CreateFinancialRecord::route('/create'),
            'edit' => Pages\EditFinancialRecord::route('/{record}/edit'),
        ];
    }
}
