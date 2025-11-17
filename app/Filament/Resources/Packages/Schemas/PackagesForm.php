<?php

namespace App\Filament\Resources\Packages\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class PackagesForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Nama Paket'),
                FileUpload::make('image')
                    ->label('Gambar')
                    ->image()
                    ->directory('packages')
                    ->disk('public')
                    ->visibility('public'),
                TextInput::make('description')
                    ->label('Deskripsi'),
                TextInput::make('guide_name')
                    ->label('Nama Pembimbing'),
                TextInput::make('hotel_makkah')
                    ->label('Hotel Makkah'),
                TextInput::make('hotel_madinah')
                    ->label('Hotel Madinah'),
                TextInput::make('hotel_stars')
                    ->label('Bintang Hotel'),
                TextInput::make('departure_date')
                    ->label('Tanggal Keberangkatan'),
                TextInput::make('return_date')
                    ->label('Tanggal Kepulangan'),
                TextInput::make('total_pax')
                    ->label('Total Jamaah'),
                TextInput::make('available_pax')
                    ->label('Sisa Kuota'),
                TextInput::make('airline')
                    ->label('Maskapai'),
                TextInput::make('departure_location')
                    ->label('Lokasi Keberangkatan'),
                TextInput::make('flight_route')
                    ->label('Rute Penerbangan'),
            ]);
    }
}
