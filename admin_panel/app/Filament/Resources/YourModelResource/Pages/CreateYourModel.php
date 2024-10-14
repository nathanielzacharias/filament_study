<?php

namespace App\Filament\Resources\YourModelResource\Pages;

use App\Filament\Resources\YourModelResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateYourModel extends CreateRecord
{
    protected static string $resource = YourModelResource::class;
}
