<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Illuminate\Support\Str;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Information Management'; 


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Card::make([
                    Forms\Components\Grid::make(1) // Single-column layout
                        ->schema([
                            Forms\Components\TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->live(true)
                                ->afterStateUpdated(fn (callable $set, ?string $state) => $set('slug', Str::slug($state)))
                                ->label('Title'),
                    
                                Forms\Components\TextInput::make('slug')
                                    ->required()
                                    ->label('Slug'),

                            Forms\Components\RichEditor::make('description')
                                ->label('Description')
                                ->required(),

                            Forms\Components\FileUpload::make('image')
                                ->label('Image')
                                ->nullable(),

                            Forms\Components\DatePicker::make('tanggal')
                                ->label('Date')
                                ->required(),

                            Forms\Components\TextInput::make('lokasi')
                                ->label('Location')
                                ->required(),
                        ]),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('tanggal')
                    ->label('Date')
                    ->date(),

                Tables\Columns\TextColumn::make('lokasi')
                    ->label('Location')
                    ->sortable()
                    ->searchable(),

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

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
