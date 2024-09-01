<?php

namespace App\Filament\Resources\CvResource\Pages;

use App\Filament\Resources\CvResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditCv extends EditRecord
{
    protected static string $resource = CvResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
