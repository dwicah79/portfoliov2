<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use App\Filament\Widgets\ResourceStatsWidget;

class dashboard extends BaseDashboard
{
    protected static string $view = 'filament.pages.dashboard';

    protected function getWidgets(): array
    {
        return [
            ResourceStatsWidget::class,
        ];
    }
}
