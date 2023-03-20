<div class="row">
    {{-- Klo gaada produk tampilkan pesan error --}}
    @if ($message)
    <h1>{{ $message }}</h1>
    @else
    <div class="col-lg-3 order-2 order-lg-1">
        <div class="border p-3">
            <form action="" method="GET">
                <div class="accordion" id="filter-accordion">
                    <h5>Filter</h5>
                    {{-- Category Fiter --}}
                    <div class="card">
                        <div class="card-header" id="category-heading">
                            <div class="mb-0 d-flex justify-content-between">
                                <span class="category-label pt-1">Kategori</span>
                                <a role="button" wire:click="setCategoryCollapse" data-bs-toggle="collapse"
                                    data-bs-target="#category-collapse" aria-controls="category-collapse">
                                    <i class="fa {{ $categoryCollapse ? 'fa-angle-down' : 'fa-angle-up'}} fa-2x text-dark"
                                        aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div id="category-collapse" class="collapse {{ $categoryCollapse ? '' : 'show' }}"
                            aria-labelledby="category-heading" data-parent="#filter-accordion">
                            <div class="card-body">
                                <ul class="category-menu">
                                    @foreach ($category as $row)
                                    <li class="form-check">
                                        <input wire:model='categoryID' wire:click='refresh' type="radio" name="category"
                                            id="category( {{ $row->id }} )" value="{{ $row->id }}">
                                        <label for="category( {{ $row->id }} )">{{ $row->name }}</label>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    {{-- Price Filter --}}
                    <div class="card">
                        <div class="card-header" id="price-range-heading">
                            <div class="mb-0">
                                <div class="mb-0 d-flex justify-content-between">
                                    <span class="price-label pt-1">Harga</span>
                                    <a role="button" wire:click="setPriceCollapse" data-bs-toggle="collapse"
                                        data-bs-target="#price-collapse" aria-controls="price-collapse">
                                        <i class="fa {{ $priceCollapse ? 'fa-angle-down' : 'fa-angle-up'}} fa-2x text-dark" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div id="price-collapse" class="collapse {{ $priceCollapse ? '' : 'show' }}"
                            aria-labelledby="price-heading" data-parent="#filter-accordion">
                            <div class="card-body">
                                <div class="col-auto">
                                    <div class="input-group mb-3 my-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="number" wire:model="minPriceFilter"
                                            class="form-control price-input-filter" id="minPriceFilter"
                                            placeholder="Harga Minimum" max="999999999">
                                    </div>
                                    <div class="input-group mb-2 my-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="number" wire:model="maxPriceFilter"
                                            class="form-control price-input-filter" id="maxPriceFilter"
                                            placeholder="Harga Maksimum" max="999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-2 my-2">
                                <ul class="price-menu">
                                    <li class="form-check">
                                        <input type="radio" name="priceOption" id="lowestPrice" wire:click="setSortByPrice('lowest')">
                                        <label for="lowestPrice">Harga Terendah</label>
                                    </li>
                                    <li class="form-check">
                                        <input type="radio" name="priceOption" id="highestPrice" wire:click="setSortByPrice('highest')">
                                        <label for="highestPrice">Harga Tertinggi</label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="col-lg-9  order-1 order-lg-2 mb-5 mb-lg-0">
        <div class="row">
            <p>Menampilkan 1 - {{ ($amount < $totalProduct) ? $amount : $totalProduct }} barang dari total {{ $totalProduct }} untuk "<b>{{ $keyword }}</b>" </p>
            @foreach ($products as $row)
            <div class="col-lg-4 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <a href="{{ url('product/'.$row->product_id) }}">
                            <img src="{{ asset('storage/products-images/'.$row->image) }}"
                                alt="{{ 'image of '.$row->name }}">
                        </a>
                        <div class="pi-links">
                            <a href="{{ url('product/'.$row->product_id) }}" class="add-card">
                                <i class="flaticon-bag"></i><span>ADD TO CART</span>
                            </a>
                            <a wire:click.prevent='addToWishlist({{$row->id}})' class="wishlist-btn">
                                <i class="flaticon-heart"></i>
                            </a>
                        </div>
                    </div>
                    <div class="pi-text">
                        <h6>{{ rupiah($row->price) }}</h6>
                        <p>{{ $row->name }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @if (count($products) < $totalProduct) 
        <div class="text-center w-100 pt-3">
            <button wire:click='load' class="site-btn sb-line sb-dark">LOAD MORE</button>
        </div>
        @endif
    </div>
    @endif
</div>

@push('script')
<script>
    $('input.price-input-filter').on('keydown', (event) => {
        const max = parseInt($(this).attr('max'));
        const value = parseInt($(this).val() + event.key);

        if (event.key === 'e' || isNaN(value) || value.toString().length >= max.toString().length) {
            event.preventDefault();
        }
    });
</script>
@endpush