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
                        <h1>Detail Transaction</h1>
                    </div>
                </div>
                <div class="col-lg-7">

                </div>
            </div>
        </div>
    </div>
    <!-- End Hero Section -->

    <div class="untree_co-section">
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
                    <h2 class="h3 mb-3 text-black">Billing Details</h2>
                    <div class="p-3 p-lg-5 border bg-white">
                        <div class="form-group row">
                            <div class="col-md-12">
                                <label for="address" class="text-black">Name<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $userData->name }}" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="address" class="text-black">Address<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $transaction->address }}" readonly>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="detail_address" id="detail_address"
                                    value="{{ $transaction->detail_address }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label for="state" class="text-black">State<span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="state" name="state"
                                    value="{{ $transaction->state }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="c_postal_zip" class="text-black">Posta / Zip <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="postal_code" name="postal_code"
                                    value="{{ $transaction->postal_code }}" maxlength="5" readonly>
                            </div>
                            <div class="col-md-12">
                                <label for="Payment" class="text-black">Payment Status<span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="Payment" name="Payment"
                                    value="{{ $transaction->is_paid }}" readonly>
                            </div>
                        </div>
                        <div class="form-group row mb-5">
                            <div class="col-md-6">
                                <label for="email" class="text-black">Email Address <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="email" name="email"
                                    value="{{ auth()->user()->email }}" readonly>
                            </div>
                            <div class="col-md-6">
                                <label for="phone" class="text-black">Phone <span
                                        class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="phone" name="phone"
                                    placeholder="Phone Number" value="{{ $transaction->phone }}" readonly>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="c_order_notes" class="text-black">Order Notes</label>
                            <textarea id="notes" name="notes" cols="30" rows="5" class="form-control" readonly>{{ $transaction->notes }}</textarea>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h2 class="h3 mb-3 text-black">Your Order</h2>
                            <div class="p-3 p-lg-5 border bg-white">
                                <table class="table site-block-order-table mb-5">
                                    <thead>
                                        <th>Product</th>
                                        <th>Total</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $product->product_name }}<strong class="mx-2">x</strong> 1
                                            </td>
                                            <td>${{ $product->price }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong>
                                            </td>
                                            <td class="text-black">${{ $product->price }}</td>
                                        </tr>
                                        <tr>
                                            <td class="text-black font-weight-bold amount"><strong>Order
                                                    Total</strong>
                                            </td>
                                            <td class="text-black font-weight-bold amount">
                                                <strong>${{ $product->price }}</strong>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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


</html>
