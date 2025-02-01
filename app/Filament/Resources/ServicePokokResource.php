<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServicePokokResource\Pages;
use App\Filament\Resources\ServicePokokResource\RelationManagers;
use App\Models\ServicePokok;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class ServicePokokResource extends Resource
{
    protected static ?string $model = ServicePokok::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Service Management'; 


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                TextInput::make('type')
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('status')
                    ->options([
                        'pokok' => 'Pokok',
                        'jasa' => 'Jasa',
                        'kebugaran' => 'Kebugaran',
                        'sewa' => 'Sewa',
                        'laundry' => 'Laundry',
                        'kebersihan' => 'Kebersihan',
                    ]),
                TextInput::make('telepon')
                    ->required()
                    ->maxLength(20),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('type'),
                Tables\Columns\TextColumn::make('kanal'),
                Tables\Columns\TextColumn::make('telepon'),
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
            'index' => Pages\ListServicePokoks::route('/'),
            'create' => Pages\CreateServicePokok::route('/create'),
            'edit' => Pages\EditServicePokok::route('/{record}/edit'),
        ];
    }
}
