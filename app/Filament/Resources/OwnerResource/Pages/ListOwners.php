<?php

namespace App\Filament\Resources\OwnerResource\Pages;

use App\Filament\Resources\OwnerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;


class ListOwners extends ListRecords
{
    protected static string $resource = OwnerResource::class;
    protected static ?string $title = 'เจ้าของสัตว์เลี้ยง';
    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('เพิ่มเจ้าของ') // เปลี่ยน TExt ที่ปุ่มกด,,,

        ];
    }
}
