<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Productos - Electricidad La Unión')]
class ProductsPage extends Component
{

    use WithPagination;

    #[Url]
    public $selected_categories = [];

    public $price_range = 1000;

    public function render()
    {
        $productsQuery = Product::query()->where('status', 'PUBLISH');

        if (!empty($this->selected_categories)) {
            $productsQuery->whereIn('category_id', $this->selected_categories);
        }

        if ($this->price_range) {
            $productsQuery->whereBetween('price', [0, $this->price_range]);
        }

        return view('livewire.products-page', [
            'products' => $productsQuery->paginate(6),
            'categories' => Category::all()
        ]);
    }
}
