<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceRumahResource\Pages;
use App\Models\ServiceRumah;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\Select;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Forms\Components\TextInput;

class ServiceRumahResource extends Resource
{
    protected static ?string $model = ServiceRumah::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';
    protected static ?string $navigationGroup = 'Service Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('user_id')
                    ->required()
                    ->label('Pemilik')
                    ->options(function () {
                        return \App\Models\User::whereNull('parent_id')
                            ->pluck('name', 'id');
                    })
                    ->searchable(), // Optional: Adds a search box to the dropdown

                TextInput::make('no_rumah')
                    ->required()
                    ->label('No Rumah'),
            ]);
    }
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('pemilik.name')
                    ->label('Pemilik')
                    ->sortable()
                    ->searchable(),                

                Tables\Columns\TextColumn::make('no_rumah')
                    ->label('No Rumah'),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime()
                    ->sortable(),
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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListServiceRumahs::route('/'),
            'create' => Pages\CreateServiceRumah::route('/create'),
            'edit' => Pages\EditServiceRumah::route('/{record}/edit'),
        ];
    }
}
