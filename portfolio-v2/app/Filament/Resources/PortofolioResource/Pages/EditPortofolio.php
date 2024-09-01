<?php

namespace App\Filament\Resources\PortofolioResource\Pages;

use App\Filament\Resources\PortofolioResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortofolio extends EditRecord
{
    protected static string $resource = PortofolioResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
