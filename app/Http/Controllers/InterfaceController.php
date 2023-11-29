<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function viewLandingPage()
    {
        return view('interface.landingpage');
    }

    public function viewShopPage()
    {
        return view('interface.shoppage');
    }

    public function viewAboutPage()
    {
        return view('interface.about');
    }

    public function viewServicePage()
    {
        return view('interface.servicepage');
    }

    public function viewBlogPage()
    {
        return view('interface.blogpage');
    }

    public function viewContactPage()
    {
        return view('interface.contact');
    }

    public function viewCheckoutPage()
    {
        return view('interface.checkout');
    }

    public function viewCartPage()
    {
        return view('interface.cartpage');
    }

    public function viewThankYouPage()
    {
        return view('interface.thankyou');
    }
}
