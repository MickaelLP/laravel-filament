<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class StudentsWidget extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'data' => [3, 2, 1, 4, 5],
                    'backgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#FF6384',
                        '#36A2EB',
                    ],
                    'hoverBackgroundColor' => [
                        '#FF6384',
                        '#36A2EB',
                        '#FFCE56',
                        '#FF6384',
                        '#36A2EB',
                    ],
                ]
            ],
            'labels' => ['Enabled', 'Disabled'],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
