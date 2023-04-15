<!DOCTYPE html>
<html>

<head>
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container ">
        <div class="row ">
            <div class="col-lg-12 col-sm-12 col-12 main-section  ">
                <div class="relative py-10 px-6">
                    <nav>
                        <a href="{{ route('winkelen') }}">Winkelen</a>
                        <a href="{{ route('bloemen.index') }}">Bleomen</a>
                        <a href="{{ route('bloemen.create') }}">Creëren</a>
                        
                        <div class="nav-item-spacer"></div>
                        <div class="dropdown ">
                            <button type="button" class="btn btn-success" data-toggle="dropdown">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i> Winkelwagen <span
                                    class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                            </button>
                            <div class="dropdown-menu ">
                                <div class="row total-header-section">
                                    <div class="col-lg-6 col-sm-6 col-6">
                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i> <span
                                            class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                                    </div>
                                    @php $total = 0 @endphp
                                    @foreach ((array) session('cart') as $id => $details)
                                        @php $total += $details['price'] * $details['quantity'] @endphp
                                    @endforeach
                                    <div class="col-lg-6 col-sm-6 col-6 total-section text-right">
                                        <p>Totaal: <span class="text-info">€ {{ $total }}</span></p>
                                    </div>
                                </div>
                                @if (session('cart'))
                                    @foreach (session('cart') as $id => $details)
                                        <div class="row cart-detail">
                                            <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                                <p>{{ $details['name'] }}</p>
                                                <span class="price text-info"> €{{ $details['price'] }}</span> <span
                                                    class="count"> Hoeveelheid:{{ $details['quantity'] }}</span>
                                            </div>
                                        </div>
                                    @endforeach
                                @endif
                                <div class="row">
                                    <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                                        <a href="{{ route('cart') }}" class="btn btn-success">Bekijk alles</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="{{ route('winkelen') }}" role="button"
                                data-toggle="dropdown" aria-expanded="false">
                                Log in
                            </a>
                            <!-- log out -->
                            <div class="dropdown-menu">
                                <div
                                    class="dropdown-item relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
                                    @if (Route::has('login'))
                                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-lift">
                                            @auth
                                                <div>{{ Auth::user()->name }}</div>
                                                <div class="dropdown-divider"></div>
                                                <div>
                                                    <x-responsive-nav-link :href="route('profile.edit')">
                                                        {{ __('Profile') }}
                                                    </x-responsive-nav-link>
                                                </div>     
                                            @else
                                                <a href="{{ route('login') }}"
                                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                                                    in</a>

                                                @if (Route::has('register'))
                                                    <a href="{{ route('register') }}"
                                                        class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                                                @endif
                                            @endauth
                                        </div>
                                    @endif
                                </div>
                                <div class="dropdown-divider"></div>
                                <!-- log out -->
                                <div class="dropdown-item">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-responsive-nav-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </form>
                                </div>
                                <div class="dropdown-item">
                                    {{-- item --}}
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <br />
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @yield('content')
    </div>
    @yield('scripts')



</body>

</html>
