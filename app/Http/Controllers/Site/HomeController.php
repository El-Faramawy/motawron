<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Models\AboutUs;
use App\Models\Counter;
use App\Models\MainAbout;
use App\Models\Portfolio;
use App\Models\Process;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $setting = Setting::first();
        $sliders = Slider::all();
        $abouts  = MainAbout::all();
        $services  = Service::all();
        $portfolios  = Portfolio::all();
        $counters  = Counter::all();
        $process  = Process::all();

        return view('Site/index',
            compact('setting','sliders','abouts','services','portfolios','counters','process'));
    }
}
