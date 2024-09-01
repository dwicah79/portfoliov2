<?php
namespace App\Filament\Widgets;

use App\Models\Certificate;
use App\Models\Cv;
use App\Models\Portfolio;
use App\Models\Skills;
use App\Models\TentangSaya;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Card;

class DataWidget extends BaseWidget
{
    protected function getCards(): array
    {
        return [
            Card::make('Tentang Saya', TentangSaya::count())
                ->description('Total About Me Data')
                ->descriptionIcon('heroicon-o-collection')
                ->color('primary'),

            Card::make('Certificates', Certificate::count())
                ->description('Total Certificates')
                ->descriptionIcon('heroicon-o-collection')
                ->color('success'),

            Card::make('Curriculum Vitae', Cv::count())
                ->description('Total CVs')
                ->descriptionIcon('heroicon-o-collection')
                ->color('warning'),

            Card::make('Portfolios', Portfolio::count())
                ->description('Total Portfolios')
                ->descriptionIcon('heroicon-o-collection')
                ->color('info'),

            Card::make('Skills', Skills::count())
                ->description('Total Skills')
                ->descriptionIcon('heroicon-o-collection')
                ->color('danger'),
        ];
    }
}
