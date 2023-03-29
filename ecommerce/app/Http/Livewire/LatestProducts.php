<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Traits\addToWishlist;

class LatestProducts extends Component
{
    use addToWishlist;

    public $latestProducts;

    public function render()
    {
        $this->latestProducts = DB::table('products')
            ->join('detail_products', 'products.id', 'detail_products.dp_id')
            ->groupBy('products.id')
            ->havingRaw("SUM(detail_products.stock) != 0")
            ->orderByDesc('products.created_at')
            ->take(4)
            ->get()->toArray();

        return view('livewire.latest-products');
    }

    public function addToWishlist($productID)
    {
        $this->addToWishlistTrait($productID);
    }
}
