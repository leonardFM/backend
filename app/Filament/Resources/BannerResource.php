<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('title')
                ->label('Title')
                ->required()
                ->maxLength(255),
            Forms\Components\FileUpload::make('image')
                ->label('Banner Image')
                ->image()
                ->directory('banners')
                ->nullable(),
            Forms\Components\Select::make('status')
                ->label('Status')
                ->options([
                    'aktif' => 'Aktif',
                    'nonaktif' => 'Nonaktif',
                ])
                ->default('aktif')
                ->required(),
            Forms\Components\Textarea::make('description')
                ->label('Description')
                ->required()
                ->maxLength(500),
            Forms\Components\TextInput::make('link')
                ->label('URL')
                ->required()
                ->maxLength(255),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('title')
                ->label('Title')
                ->sortable()
                ->searchable(),
            Tables\Columns\ImageColumn::make('image')
                ->label('Banner Image'),
            Tables\Columns\TextColumn::make('status')
                ->label('Status')
                ->sortable()
                ->badge(),
            Tables\Columns\TextColumn::make('description')
                ->label('Description')
                ->limit(50),
            Tables\Columns\TextColumn::make('link')
                ->label('URL'),
            Tables\Columns\TextColumn::make('created_at')
                ->label('Created At')
                ->dateTime('d-m-Y H:i'),
        ])
        ->filters([
            SelectFilter::make('status')
                ->label('Filter by Status')
                ->options([
                    'aktif' => 'Aktif',
                    'nonaktif' => 'Nonaktif',
                ]),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
