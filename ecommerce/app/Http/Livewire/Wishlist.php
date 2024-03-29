<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Wishlist extends Component
{
    public $page;
    public $wishlists = [];
    public $ProductID;
    public $size;

    public $listeners = [
        'setSize' => 'setSize',
    ];

    public function render()
    {
        $sizeSubquery = DB::table('detail_products')
            ->selectRaw("dp_id, GROUP_CONCAT(size SEPARATOR ', ') AS size, GROUP_CONCAT(stock SEPARATOR ', ') AS stock")
            ->groupBy('dp_id');

        $this->wishlists = DB::table('wishlists')
            ->join('products', 'wishlists.product_id', 'products.id')
            ->joinSub($sizeSubquery, 'sizeSubquery', function ($join) {
                $join->on('sizeSubquery.dp_id', 'wishlists.product_id');
            })
            ->where('wishlists.user_id', Auth::id())
            ->select(
                'wishlists.id AS WishlistID',
                'products.id AS ProductID',
                'products.product_id',
                'products.name AS ProdName',
                'products.price',
                'sizeSubquery.size',
                'sizeSubquery.stock',
                DB::raw("DATE_FORMAT(wishlists.created_at, '%Y-%m-%d') AS created_at"),
                'products.image'
            )
            ->get()->toArray();

        foreach ($this->wishlists as $row) {
            $newSize = explode(', ', $row->size);
            $row->size = $newSize;

            $newStock = explode(', ', $row->stock);
            $row->stock = $newStock;

            $row->sizeAndStock = array_combine($newSize, $newStock);
        }

        return view('livewire.wishlist');
    }

    public function setSize($data)
    {
        $toArr = explode(', ', $data);
        $ProductID = $toArr[0];
        $size = $toArr[1];
        $this->ProductID = $ProductID;
        $this->size = $size;
    }

    public function addToCart($ProductID, $size)
    {
        if ($ProductID == $this->ProductID && $this->size) {
            $checkStock = DB::table('detail_products')
                ->where('dp_id', $ProductID)
                ->where('size', $size)
                ->first();

            if ($checkStock->stock > 0) {
                $this->emit('addToCart', $ProductID, $size, 1);
                $this->emit('refreshCart');
            }
        } else {
            return $this->dispatchBrowserEvent('toastr', [
                'status' => 'error',
                'message' => 'Kamu belum memilih size nih'
            ]);
        }
    }

    public function remove($wishlistID, $productID)
    {
        DB::table('wishlists')
            ->where('user_id', Auth::id())
            ->where('id', $wishlistID)
            ->where('product_id', $productID)
            ->delete();

        $totalWishlist = DB::table('wishlists')->where('user_id', Auth::id())->count();
        $status = 'error';
        $message = 'Berhasil menghapus produk dari wishlist kamu';

        if ($totalWishlist > 0) {
            return $this->dispatchBrowserEvent('toastr', [
                'status' => $status,
                'message' => $message
            ]);
        } else {
            $this->emit(
                'refreshWishlist',
                ['status' => $status, 'message' => $message]
            );
        }
    }
}
