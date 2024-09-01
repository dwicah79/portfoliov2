<?php

namespace App\Filament\Resources\CvResource\Pages;

use App\Filament\Resources\CvResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCvs extends ListRecords
{
    protected static string $resource = CvResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
