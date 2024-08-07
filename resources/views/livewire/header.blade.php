<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 text-center text-lg-left">
                <!-- logo -->
                <a href="{{ route('home') }}" class="site-logo">
                    {{-- <img src="{{ asset('asset/img/logo.png') }}" alt=""> --}}
                    <h3>FashionEase</h3>
                </a>
            </div>
            <div class="col-xl-6 col-lg-5">
                <div class="header-search-form form-group ">
                    <input wire:model='keyword' wire:keydown.enter='search' id="search-input" placeholder="Ketik nama produk yang ingin km cari :)"
                        class="form-control">
                    <button wire:click='search' id="search-btn"><i class="flaticon-search"></i></button>
                </div>
                @if ($productsSearch)
                <div class="header-search-result">
                    @if (count($productsSearch) > 0)
                    @foreach ($productsSearch as $row)
                    <div class="search-result-items-wrap">
                        <a href="{{ url("product/$row->ProductName/$row->code/$row->product_id") }}" class="search-result-items">
                            <i class="flaticon-search"></i>
                            {{ $row->ProductName }}
                        </a>
                    </div>
                    @endforeach
                    @else
                    <p>Oops... Produk yang kamu cari gaada nih:(</p>
                    @endif
                </div>
                @endif
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="user-panel d-flex">
                    <div class="up-item">
                        @auth
                        <i class="flaticon-profile"></i>
                        <div class="nav-item dropdown d-inline-block">
                            <a class="nav-link dropdown-toggle profile-dropdown" id="dropdownUser"
                                data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                                {{ __('Hi! '). Auth::user()->first_name }}
                            </a>
                            <div class="dropdown-menu" aria-labelledby="dropdownUser">
                                <a class="dropdown-item" href="#">My Profile</a>
                                <a class="dropdown-item" href="{{ route('wishlist') }}">Wishlist</a>
                                <a class="dropdown-item" href="{{ route('orders') }}">Pembelian</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    Log Out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </div>
                        @else
                        <div class="anon">
                            <i class="flaticon-profile"></i>
                            <a href="{{ route('login') }}">Sign In</a> or <a href="{{ route('register') }}">Create Account</a>
                        </div>
                        @endauth
                    </div>
                    <div class="up-item">
                        <div class="shopping-card">
                            <i class="flaticon-bag"></i>
                            @if ( $cartQty > 0 )
                            <span class="qty">{{ $cartQty }}</span>
                            @endif
                        </div>
                        <a href="{{ route('cart') }}" class="orderCart">Your Cart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
<script>
    $('#search-input').focus(() => {
        $('.overlay-black').show();
        $('.header-search-result').show();
    })

    $('.overlay-black').click(() => {
        $('.header-search-result').hide();
        $('.overlay-black').hide();
    })
</script>
@endpush