<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlightResource\Pages;
use App\Filament\Resources\FlightResource\RelationManagers;
use App\Models\Flight;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlightResource extends Resource
{
    protected static ?string $model = Flight::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('from_airport_id')
                    ->relationship('fromAirport', 'name'),
                Forms\Components\Select::make('to_airport_id')
                    ->relationship('toAirport', 'name'),
                Forms\Components\TextInput::make('flight_number')
                    ->required()
                    ->maxLength(10),
                Forms\Components\DateTimePicker::make('departure_time')
                    ->required(),
                Forms\Components\DateTimePicker::make('arrival_time')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('toAirport.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('fromAirport.name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('flight_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('departure_time')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('arrival_time')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }
    public static function canCreate(): bool
    {
        return auth()->user()->canAccess('admin');
    }
    public static function canEdit(Model $record): bool
    {
        return auth()->user()->canAccess('admin');
    }
    public static function canDelete(Model $record): bool
    {
        return auth()->user()->canAccess('root');
    }
    public static function canView(Model $record): bool
    {
        return auth()->user()->canAccess('user');
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFlights::route('/'),
            'create' => Pages\CreateFlight::route('/create'),
            'edit' => Pages\EditFlight::route('/{record}/edit'),
        ];
    }
}
