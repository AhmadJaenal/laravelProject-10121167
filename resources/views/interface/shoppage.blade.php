<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="" />
    <meta name="keywords" content="bootstrap, bootstrap4" />

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="css/tiny-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <title>Shop</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    @include('partials.navbar')
    <!-- End Header/Navigation -->

    <div class="untree_co-section product-section before-footer-section">
        <div class="container">
            @auth
                @if (auth()->user()->is_admin)
                    <div class=" justify-content-center">
                        <div class="col-12 col-md-4 offset-md-3 col-lg-4 offset-lg-4 mb-5">
                            <a class="product-item" href="{{ route('viewAddProduct') }}">
                                <strong class="product-price">Add new product</strong>
                                <span class="icon-cross">
                                    <img src="img/cross.svg" class="img-fluid">
                                </span>
                            </a>
                        </div>
                    </div>
                @endif
            @endauth
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="row">
                @foreach ($products as $product)
                    @if ($product->brand == 'Under Armour')
                        <div class="col-12 col-md-4 col-lg-3 mb-5 text-center">
                            <a class="product-item" href="viewCheckoutPage/{{ $product->id }}">
                                <img src="{{ $product->url_image }}" class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $product->product_name }}</h3>
                                <strong class="product-price">${{ $product->price }}</strong>
                                <span class="icon-cross">
                                    <img src="img/cross.svg" class="img-fluid">
                                </span>
                            </a>

                            @auth
                                @if (auth()->user()->is_admin)
                                    <a href="{{ route('deleteProduct', ['id' => $product->id]) }}"
                                        class="btn btn-danger mt-4"
                                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->brand == 'Nike' or $product->brand == 'nike')
                        <div class="col-12 col-md-4 col-lg-3 mb-5 text-center">
                            <a class="product-item" href="viewCheckoutPage/{{ $product->id }}">
                                <img src="{{ $product->url_image }}" class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $product->product_name }}</h3>
                                <strong class="product-price">${{ $product->price }}</strong>
                                <span class="icon-cross">
                                    <img src="img/cross.svg" class="img-fluid">
                                </span>
                            </a>

                            @auth
                                @if (auth()->user()->is_admin)
                                    <a href="{{ route('deleteProduct', ['id' => $product->id]) }}"
                                        class="btn btn-danger mt-4"
                                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="row">
                @foreach ($products as $product)
                    @if ($product->brand == 'Adidas')
                        <div class="col-12 col-md-4 col-lg-3 mb-5 text-center">
                            <a class="product-item" href="viewCheckoutPage/{{ $product->id }}">
                                <img src="{{ $product->url_image }}" class="img-fluid product-thumbnail">
                                <h3 class="product-title">{{ $product->product_name }}</h3>
                                <strong class="product-price">${{ $product->price }}</strong>
                                <span class="icon-cross">
                                    <img src="img/cross.svg" class="img-fluid">
                                </span>
                            </a>

                            @auth
                                @if (auth()->user()->is_admin)
                                    <a href="{{ route('deleteProduct', ['id' => $product->id]) }}"
                                        class="btn btn-danger mt-4"
                                        onclick="return confirm('Are you sure you want to delete this product?')">Delete</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>


    <!-- Start Footer Section -->
    @include('footer.footer1')
    <!-- End Footer Section -->


    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/tiny-slider.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>
