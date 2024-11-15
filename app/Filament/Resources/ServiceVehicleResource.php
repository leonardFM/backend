<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceVehicleResource\Pages;
use App\Models\ServiceVehicle;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ServiceVehicleResource extends Resource
{
    protected static ?string $model = ServiceVehicle::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Service Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->label('Owner')
                    ->options(User::pluck('name', 'id')) // Retrieve user options
                    ->searchable()
                    ->required(),

                TextInput::make('nomor_polisi')
                    ->label('License Plate')
                    ->unique() // Ensure unique values for 'nomor_polisi'
                    ->required(),

                Select::make('jenis_kendaraan')
                    ->label('Vehicle Type')
                    ->required()
                    ->options([
                        'motor' => 'Motor',
                        'mobil' => 'Mobil',
                    ]),

                TextInput::make('warna')
                    ->label('Color')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('user.name')
                    ->label('Owner')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('nomor_polisi')
                    ->label('License Plate')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('jenis_kendaraan')
                    ->label('Vehicle Type')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('warna')
                    ->label('Color')
                    ->sortable(),
                    
                TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                // Add any filters here if needed
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
            // Define relationships here if needed
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceVehicles::route('/'),
            'create' => Pages\CreateServiceVehicle::route('/create'),
            'edit' => Pages\EditServiceVehicle::route('/{record}/edit'),
        ];
    }
}
