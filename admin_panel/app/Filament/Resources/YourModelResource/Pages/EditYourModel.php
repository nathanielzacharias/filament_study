<?php

namespace App\Filament\Resources\YourModelResource\Pages;

use App\Filament\Resources\YourModelResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditYourModel extends EditRecord
{
    protected static string $resource = YourModelResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
