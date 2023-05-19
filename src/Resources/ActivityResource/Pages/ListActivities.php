<?php

namespace Z3d0X\FilamentLogger\Resources\ActivityResource\Pages;

use Filament\Resources\Pages\ListRecords;

class ListActivities extends ListRecords
{
    public static function getResource(): string
    {
        return config('filament-logger.activity_resource');
    }

    protected function getTableRecordsPerPageSelectOptions(): array
    {
        return [50, 100, 150, 200, -1];
    }
}
