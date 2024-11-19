<?php

namespace App\Filament\Resources;

use App\Filament\Resources\IuranResource\Pages;
use App\Filament\Resources\IuranResource\RelationManagers;
use App\Models\Iuran;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class IuranResource extends Resource
{
    protected static ?string $model = Iuran::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Finance Management'; 


    public static function form(Form $form): Form
{
    return $form
        ->schema([
            Forms\Components\Select::make('user_id') // Select for user
                ->label('User')
                ->options(
                    \App\Models\User::all()->pluck('name', 'id') // Retrieve users and their ids
                )
                ->required(),

            Forms\Components\TextInput::make('bulan') // Month
                ->label('Bulan')
                ->numeric() // Ensure it’s numeric
                ->required(),

            Forms\Components\TextInput::make('tahun') // Year
                ->label('Tahun')
                ->numeric() // Ensure it’s numeric
                ->required(),

            Forms\Components\TextInput::make('jumlah') // Amount
                ->label('Jumlah')
                ->numeric() // Ensure it’s numeric
                ->required(),

            Forms\Components\Select::make('status') // Status field
                ->label('Status')
                ->options([
                    'Lunas' => 'Lunas',  // Paid
                    'Belum Lunas' => 'Belum Lunas',  // Unpaid
                ])
                ->default('Belum Lunas') // Default value
                ->required(),

            Forms\Components\DatePicker::make('tanggal_bayar') // Payment date
                ->label('Tanggal Bayar')
                ->nullable(), // Nullable field

            Forms\Components\Textarea::make('keterangan') // Description
                ->label('Keterangan')
                ->nullable(), // Nullable field
        ]);
}


public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('user.name') // Display user name (relation with User model)
                ->label('User')
                ->sortable(), // Sortable column

            Tables\Columns\TextColumn::make('jumlah') // Display amount
                ->label('Jumlah')
                ->sortable(), // Sortable column

            Tables\Columns\TextColumn::make('status') // Display status (Lunas or Belum Lunas)
                ->label('Status')
                ->sortable(), // Sortable column

            Tables\Columns\TextColumn::make('tanggal_bayar') // Display payment date
                ->label('Tanggal Bayar')
                ->sortable(), // Sortable column

        ])
        ->filters([ 
            // Add any filters if needed
        ])
        ->actions([ 
            Tables\Actions\EditAction::make(), // Allow editing of records
        ])
        ->bulkActions([ 
            // Add bulk actions (e.g., delete)
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
            'index' => Pages\ListIurans::route('/'),
            'create' => Pages\CreateIuran::route('/create'),
            'edit' => Pages\EditIuran::route('/{record}/edit'),
        ];
    }
}
