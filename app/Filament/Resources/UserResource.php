<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    protected static ?string $navigationGroup = 'User Management'; // Optional grouping in the navigation

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                Forms\Components\TextInput::make('email')
                    ->required()
                    ->email()
                    ->maxLength(255),

                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255)
                    ->dehydrated(fn ($state) => ! empty($state)),

                Forms\Components\Select::make('parent')
                    ->label('Parent User')
                    ->relationship('parent', 'name') // Assumes a relationship in the User model
                    ->searchable()
                    ->placeholder('Select Parent User')
                    ->options(User::whereNull('parent_id')->pluck('name', 'id')),

                Forms\Components\Select::make('status')
                    ->required()
                    ->options([
                        'active' => 'Active',
                        'blocked' => 'Blocked',
                    ]),

                Forms\Components\TextInput::make('rt')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(99),

                Forms\Components\TextInput::make('rw')
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(99),

                Forms\Components\TextInput::make('alamat')
                    ->maxLength(255),

                Forms\Components\TextInput::make('phone')
                    ->maxLength(15),

                Forms\Components\Select::make('role')
                    ->options([
                        'warga' => 'Warga',
                        'ketua' => 'Ketua',
                        'admin' => 'Admin',
                    ]),

                Forms\Components\TextInput::make('nik')
                    ->maxLength(16),

                Forms\Components\DatePicker::make('tanggal_lahir'),

                Forms\Components\Select::make('jenis_kelamin')
                    ->options([
                        'laki-laki' => 'Laki-laki',
                        'perempuan' => 'Perempuan',
                    ]),

                Forms\Components\DatePicker::make('tanggal_masuk'),

                Forms\Components\Toggle::make('aktif')
                    ->default(true),

                Forms\Components\TextInput::make('emergency_contact')
                    ->maxLength(15),

                Forms\Components\TextInput::make('foto_profil')
                    ->url()
                    ->maxLength(255),
            ]);
    
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable(),
                Tables\Columns\TextColumn::make('rt'),
                Tables\Columns\TextColumn::make('rw'),
                Tables\Columns\TextColumn::make('role')->sortable(),
            ])
            ->filters([
                // You can add filters here if needed
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}
