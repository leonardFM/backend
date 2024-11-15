<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceBansosResource\Pages;
use App\Filament\Resources\ServiceBansosResource\RelationManagers;
use App\Models\ServiceBansos;
use Filament\Forms;
use Filament\Forms\Form;
use App\Models\User;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceBansosResource extends Resource
{
    protected static ?string $model = ServiceBansos::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Service Management'; 
    
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->label('Pengguna')
                    ->options(User::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\Select::make('jenis_bansos')
                    ->label('Jenis Bansos')
                    ->options([
                        'sembako' => 'Sembako',
                        'uang' => 'Uang',
                        'kesehatan' => 'Kesehatan',
                        'pendidikan' => 'Pendidikan',
                    ])
                    ->required(),

                Forms\Components\Select::make('status')
                    ->label('Status')
                    ->options([
                        'menunggu' => 'Menunggu',
                        'diterima' => 'Diterima',
                        'ditolak' => 'Ditolak',
                    ])
                    ->default('menunggu'),
            ]);
    }

    public static function table(Table $table): Table
{
    return $table
        ->columns([
            Tables\Columns\TextColumn::make('user.name')->label('Pengguna')->sortable(),
            Tables\Columns\TextColumn::make('jenis_bansos')->label('Jenis Bansos'),
            Tables\Columns\TextColumn::make('status')->label('Status'),
            Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
        ])
        ->filters([
            //
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
            'index' => Pages\ListServiceBansos::route('/'),
            'create' => Pages\CreateServiceBansos::route('/create'),
            'edit' => Pages\EditServiceBansos::route('/{record}/edit'),
        ];
    }
}
