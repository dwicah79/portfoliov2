<?php

namespace App\Http\Controllers;

use App\Models\certificate;
use App\Models\cv;
use App\Models\Portfolio;
use App\Models\Skills;
use App\Models\tentangsaya;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $certificate = certificate::all();
        $cv = cv::all();
        $portfolio = Portfolio::all();
        $skills = Skills::all();
        $tentang = tentangsaya::all();
        return view('welcome', compact('certificate', 'cv', 'portfolio', 'skills', 'tentang'));
    }
}
