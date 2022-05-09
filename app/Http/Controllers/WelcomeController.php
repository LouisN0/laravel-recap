<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index() {
        $banners = Banner::all();
        $services = Service::all();
        $testimonials = Testimonial::all();
        
        return view('welcome', compact('banners' , 'services', 'testimonials'));
    }
}
