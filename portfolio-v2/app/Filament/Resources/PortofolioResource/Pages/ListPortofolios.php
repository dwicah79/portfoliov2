<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use App\Filament\Resources\PortofolioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortofolios extends ListRecords
{
    protected static string $resource = PortofolioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
