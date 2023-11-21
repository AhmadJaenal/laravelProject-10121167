<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InterfaceController extends Controller
{
    public function viewDashboard()
    {
        return view('layouts.main');
    }
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

    public function viewTablePage()
    {
        return view('interface.tablespage');
    }

    public function viewChartPage()
    {
        return view('interface.chartpage');
    }
}
