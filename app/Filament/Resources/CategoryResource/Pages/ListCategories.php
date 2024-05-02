<?php

namespace App\Filament\Resources\CategoryResource\Pages;

use App\Filament\Resources\CategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCategories extends ListRecords
{
    protected static string $resource = CategoryResource::class;
    protected static ?string $breadcrumb = "Listado";
    protected static ?string $title = "Categorías";


    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()->label('Agregar Categoria'),
        ];
    }
}
