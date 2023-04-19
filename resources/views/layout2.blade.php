<!DOCTYPE html>
<html>
<head>
    <title>Super Store</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js" defer></script>


    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="row">
        <header>

            <nav>
                <div class="site-logo">
                    <a href="#">
                        <img src="img/store_logo.png" alt="logo">
                    </a>
                </div>
            <ul>
                <li class="active"><a href="/">Accueil</a></li>
                <li class="">
                <a href="#" id="categorie-button" area="false"><div>Categorie</div><!--<img id="close-open-img2-down" src="./images/icon-arrow-down.svg" alt=""><img id="close-open-img2-up" src="./images/icon-arrow-up.svg" alt=""style="display: none;">--></a>

                    <div id="drop-down-one" class="drop-down-menu | drop-down-one" area="false">
                        <ul>
                            <li><a id="food"   href="{{route('products.index')}}">Supermarché </a></li>
                            <li><a id="sport"    href="{{route('products2.index')}}">Sports & Loisirs</a></li>
                            <li><a id="info"  href="{{route('products3.index')}}">Informatique</a></li>
                        </ul>
                    </div>
                </li>
                <li class=""><a id="mat" onclick="matchs(this)" href="#">Aide</a></li>
                <li>
                    <div class="login-register-container">
                        <li><a href="/login">login</a></li>
                        <li><a href="/sign">sign</a></li>
                    </div>
                </li>
            </ul>

            </nav>

            <div class="col-lg-12 col-sm-12 col-12">
            <div class="dropdown">
                <button type="button" class="btn btn-primary" data-toggle="dropdown"    id="cart-dis">
                <img class="valid" src="img/cart.png" alt=""> Cart <span class="badge badge-pill badge-danger">{{ count((array) session('cart')) }}</span>
                </button>

                <div class="dropdown-menu">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-info"> {{ $total }} Dh</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ asset('img') }}/{{ $details['photo'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['product_name'] }}</p>
                                    <span class="price text-info"> {{ $details['price'] }} Dh</span> <span class="count"> Quantity:{{ $details['quantity'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
        </header>

<br/>
<div class="container">

    @if(session('success'))
        <div class="alert alert-success" >
          {{ session('success') }}
        </div>
    @endif

    @yield('content')
</div>

@yield('scripts')
<footer class="footer">
        <div class="top-footer">
            <div class="site-logo">

                <a href="#">
                    <img src="img/store_logo.png" alt="logo">
                </a>
            </div>
            <div>
                <h5>Nos services</h5>
                <ul class="pages-url">
                    <a href="#"><li>Accueil</li></a>
                    <a href="#"><li>Categories</li></a>
                    <a href="#"><li>Aide</li></a>
            </div>
                </ul>
            <div>

                <h5>Adminstrateur</h5>
                <ul class="admin-info">
                    <li>+6 78 65 43 21</li>
                    <li>xyz@example.com</li>
                    <li>Tanger Maroc</li>
                </ul>
            </div>
        </div>

        <div class="copy-right">
            &copy; 2023 GI Design All rights reserved
        </div>
    </footer>
</body>
</html>
