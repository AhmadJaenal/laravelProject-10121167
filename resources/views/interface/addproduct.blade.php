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
    <title>Checkout</title>
</head>

<body>

    <!-- Start Hero Section -->
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Add new product</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section">
        <form action=" {{ route('addNewProduct') }}" method="post">
            @csrf
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <div class="border p-4 rounded" role="alert">
                            Returning customer? <a href="#">Click here</a> to login
                        </div>
                    </div>
                </div>
                <div class="row">

                    @if (session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    <div class="col-md-6 mb-5 mb-md-0">
                        <h2 class="h3 mb-3 text-black">Product Data</h2>
                        <div class="p-3 p-lg-5 border bg-white ">
                            <div class="col-md-12">
                                <label for="product_name" class="text-black">Product Name<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="product_name" name="product_name"
                                    placeholder="Nike X">
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <label for="brand" class="text-black">Brand Name<span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="brand" name="brand"
                                        placeholder="BrodXX">
                                </div>
                                <div class="col-md-6">
                                    <label for="price" class="text-black">Price <span
                                            class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="price" name="price"
                                        placeholder="">
                                </div>
                            </div>
                            <div class="col-md-12 mb-3">
                                <label for="url_image" class="text-black">Url Image<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="url_image" name="url_image"
                                    placeholder="http:image.xxxxx">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-black btn-lg py-3 btn-block">Add Product</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- </form> -->
    </div>

    <!-- Start Footer Section -->
    @include('footer.footer1')
    <!-- End Footer Section -->


    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/tiny-slider.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>


</html>
