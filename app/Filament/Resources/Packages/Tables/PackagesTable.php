<?php

namespace App\Filament\Resources\Packages\Tables;

use Filament\Tables\Table;
use Filament\Actions\EditAction;
use Filament\Actions\ViewAction;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ImageColumn;

class PackagesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->square(),

                TextColumn::make('title')
                    ->label('Nama Paket')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('departure_date')
                    ->label('Berangkat')
                    ->date()
                    ->sortable(),

                TextColumn::make('duration_days')
                    ->label('Durasi (Hari)')
                    ->sortable(),

                TextColumn::make('hotel_stars')
                    ->label('Bintang Hotel')
                    ->sortable(),

                TextColumn::make('airline')
                    ->label('Maskapai')
                    ->toggleable()
                    ->searchable(),

                TextColumn::make('total_pax')
                    ->label('Total Jamaah')
                    ->sortable(),

                TextColumn::make('available_pax')
                    ->label('Sisa Kuota')
                    ->color(fn($record) => $record->available_pax < 5 ? 'danger' : 'success')
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                ViewAction::make(),
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
