<?php

namespace App\Filament\Resources\Packages\Tables;

use Dom\Text;
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
                TextColumn::make('title')
                    ->label('Nama Paket')
                    ->searchable(),
                ImageColumn::make('image')
                    ->label('Gambar')
                    ->square(),
                TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
                TextColumn::make('guide_name')
                    ->label('Nama Pembimbing'),
                TextColumn::make('hotel_makkah')
                    ->label('Hotel Makkah'),
                TextColumn::make('hotel_madinah')
                    ->label('Hotel Madinah'),
                TextColumn::make('hotel_stars')
                    ->label('Bintang Hotel'),
                TextColumn::make('departure_date')
                    ->label('Tanggal Keberangkatan')
                    ->date()
                    ->sortable(),
                TextColumn::make('return_date')
                    ->label('Tanggal Kepulangan')
                    ->date(),
                TextColumn::make('total_pax')
                    ->label('Total Jamaah'),
                TextColumn::make('available_pax')
                    ->label('Sisa Kuota'),
                TextColumn::make('airline')
                    ->label('Maskapai'),
                TextColumn::make('departure_location')
                    ->label('Lokasi Keberangkatan'),
                TextColumn::make('airline')
                    ->label('Maskapai'),
                TextColumn::make('flight_route')
                    ->label('Rute Penerbangan'),
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
