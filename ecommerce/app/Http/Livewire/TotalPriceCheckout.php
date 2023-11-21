<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TotalPriceCheckout extends Component
{
    public $cartItemsID;
    public $totalPriceCart;
    public $total;
    public $shippingFee;
    public $grandTotal;

    protected $listeners = ['setShippingFee' => 'setShippingFee'];

    public function render()
    {
        // $total = DB::table('carts')
        //     ->join('products', 'carts.product_id', '=', 'products.id')
        //     ->whereIn('carts.id', $this->cartItemsID)
        //     ->where('carts.user_id', '=', Auth::id())
        //     ->sum(DB::raw('products.price * carts.qty'));

        // $this->total = rupiah($total);

        if ($this->shippingFee) {
            // $grandTotal = $total + $this->shippingFee;
            $grandTotal = $this->totalPriceCart + $this->shippingFee;
            $this->grandTotal = rupiah($grandTotal);
        } else {
            // $this->grandTotal = $this->total;
            $this->grandTotal = rupiah($this->totalPriceCart);
        }

        return view('livewire.total-price-checkout');
    }


    public function setShippingFee($data)
    {
        $this->shippingFee = $data;
    }
}
