<?php

namespace App\Filament\Widgets;

use App\Models\certificate;
use App\Models\cv;
use Filament\Widgets\LineChartWidget;
use App\Models\tentangsaya;
use App\Models\Portfolio;
use App\Models\Skills;

class lineChart extends LineChartWidget
{
    protected static ?string $heading = 'Data Visualization';
    protected int|string|array $columnSpan = 'full';

    protected function getData(): array
    {
        $aboutCount = tentangsaya::count();
        $certificateCount = certificate::count();
        $cvCount = cv::count();
        $portfolio = Portfolio::count();
        $skill = Skills::count();


        return [
            'datasets' => [
                [
                    'label' => 'Data',
                    'data' => [$aboutCount, $certificateCount, $cvCount, $portfolio, $skill],
                    'backgroundColor' => ['#36A2EB'],
                    'barThickness' => 50,
                ],
            ],
            'labels' => ['Data About', 'Certificate', 'Curiculum Vitae', 'Portfolio', 'Skills'],
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
