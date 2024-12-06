<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }

    public function showContactPage()
    {
        return view('frontend.pages.contact');
    }

    public function showAboutPage()
    {
        $services = Service::query()->where('status', '=', Service::STATUS_ACTIVE)->get();

        return view('frontend.pages.about', compact('services'));
    }

    public function showAlbumPage()
    {
        return view('frontend.pages.about');
    }

    public function showDailyNewsPage()
    {
        return view('frontend.pages.daily-news');
    }
}
