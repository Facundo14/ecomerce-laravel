<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Categorias - Electricidad La Unión')]
class CategoriesPage extends Component
{
    public function render()
    {
        $categories = Category::all();
        return view('livewire.categories-page', [
            'categories' => $categories
        ]);
    }
}
