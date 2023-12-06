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
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('css/tiny-slider.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <title>Cart</title>
</head>

<body>

    <!-- Start Header/Navigation -->
    @include('partials.navbar')
    <!-- End Header/Navigation -->

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>History Transaction</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section before-footer-section">
        <div class="container">
            <div class="row mb-5">

                <div class="site-blocks-table">
                    <table class="table">
                        <thead>
                            <tr>
                                <th class="product-thumbnail">Image</th>
                                <th class="product-name">Brand</th>
                                <th class="product-price">Price</th>
                                <th class="product-total">Total</th>
                                <th class="product-remove">Payment</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td class="product-thumbnail">
                                        <img src="{{ $product->url_image }}" alt="Image" class="img-fluid">
                                    </td>
                                    <td class="product-name">
                                        <h2 class="h5 text-black">{{ $product->brand }}</h2>
                                    </td>
                                    <td>{{ $product->price }}</td>
                                    @php
                                        $transaction = $transactions->where('id_product', $product->id)->first();
                                    @endphp
                                    <td>${{ $transaction->amount }}</td>
                                    <td>{{ $transaction->is_paid }}</td>

                                    @if (auth()->user()->is_admin == 1)
                                        <td>
                                            <div class="btn-group mx-4">
                                                <p data-bs-toggle="dropdown">Clik for update</p>
                                                <ul class="dropdown-menu">
                                                    <form
                                                        action="{{ route('transactionChecking', ['id' => $transaction->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-box-arrow-rigth">Checking </i>
                                                        </button>
                                                    </form>
                                                    <form
                                                        action="{{ route('transactionProcess', ['id' => $transaction->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-box-arrow-rigth">Process </i>
                                                        </button>
                                                    </form>
                                                    <form
                                                        action="{{ route('transactionSuccess', ['id' => $transaction->id]) }}"
                                                        method="post">
                                                        @csrf
                                                        <button type="submit" class="dropdown-item">
                                                            <i class="bi bi-box-arrow-rigth">Success </i>
                                                        </button>
                                                    </form>
                                                </ul>
                                            </div>
                                        </td>
                                    @else
                                        @if ($transaction->is_paid != 'success' or $transaction->is_paid != 'process')
                                            <td>
                                                <a href="/viewEditTransaction?id_tr={{ $transaction->id }}&id_product={{ $product->id }}"
                                                    class="btn btn-secondary me-2">Edit</a>
                                            </td>
                                        @else
                                            <td>
                                                Update is not available
                                            </td>
                                        @endif
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Footer Section -->
    @include('footer.footer1')
    <!-- End Footer Section -->


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
