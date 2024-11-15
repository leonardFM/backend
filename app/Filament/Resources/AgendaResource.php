<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AgendaResource\Pages;
use App\Models\Agenda;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Support\Str;

class AgendaResource extends Resource
{
    protected static ?string $model = Agenda::class;
    protected static ?string $navigationIcon = 'heroicon-o-calendar';
    protected static ?string $navigationGroup = 'Information Management'; 


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\Grid::make(1),
                TextInput::make('title')
                    ->required()
                    ->maxLength(255)
                    ->live(true)
                    ->afterStateUpdated(fn (callable $set, ?string $state) => $set('slug', Str::slug($state)))
                    ->label('Title'),
                    
                TextInput::make('slug')
                    ->required()
                    ->label('Slug'),

                DateTimePicker::make('start_date')
                    ->label('Start Date')
                    ->required(),

                TextInput::make('location')
                    ->label('Location')
                    ->required()
                    ->maxLength(255),

                RichEditor::make('description')
                    ->label('Description')
                    ->required()
                    ->maxLength(500),

                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable()
                    ->label('Title'),

                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->searchable()
                    ->label('Slug'),

                Tables\Columns\TextColumn::make('start_date')
                    ->label('Start Date')
                    ->dateTime('d-m-Y H:i')
                    ->sortable(),

                Tables\Columns\TextColumn::make('location')
                    ->label('Location')
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
            'index' => Pages\ListAgendas::route('/'),
            'create' => Pages\CreateAgenda::route('/create'),
            'edit' => Pages\EditAgenda::route('/{record}/edit'),
        ];
    }
}
