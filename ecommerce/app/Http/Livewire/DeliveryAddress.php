<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DeliveryAddress extends Component
{
    protected $listeners = ['saveDeliveryAddress' => 'saveDeliveryAddress'];

    public function render()
    {
        $userInfo = DB::table('users')
            ->leftJoin('user_addresses', 'users.id', 'user_addresses.user_id')
            ->where('users.id', Auth::id())
            ->first();

        return view('livewire.delivery-address', ['userInfo' => $userInfo]);
    }

    public function saveDeliveryAddress($data)
    {
        $address = $data['address'];
        $province = $data['province'];
        $city = $data['city'];

        DB::table('user_addresses')
            ->insert([
                'user_id' => Auth::id(),
                'address' => $address,
                'province' => $province,
                'city' => $city,
            ]);

        $this->emit('setAddress');

        return $this->dispatchBrowserEvent('toastr', [
            'status' => 'success',
            'message' => 'Berhasil menambahkan alamat!'
        ]);
    }
}
