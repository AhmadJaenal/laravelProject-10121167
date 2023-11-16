<?php

namespace App\Http\Controllers;

class InterfaceController extends Controller
{
    public function viewButtonPage()
    {
        return view('interface.buttonpage');
    }

    public function viewCardPage()
    {
        return view('interface.cardpage');
    }

    public function viewColorPage()
    {
        return view('interface.colorpage');
    }

    public function viewBorderPage()
    {
        return view('interface.borderpage');
    }

    public function viewAnimationPage()
    {
        return view('interface.animationpage');
    }

    public function viewOtherPage()
    {
        return view('interface.otherpage');
    }
}
