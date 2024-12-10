<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Resort;
use App\Models\Service;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $resorts = Resort::latest()->where('status', '=', Resort::STATUS_ACTIVE)->get();

        return view('frontend.home', compact('resorts'));
    }

    public function showResortPage()
    {
        $resorts = Resort::latest()->where('status', '=', Resort::STATUS_ACTIVE)->get();

        return view('frontend.pages.resorts.index', compact('resorts'));
    }

    public function showResortBySlug(string $slug)
    {
        $resort = Resort::latest()->where('slug', '=', $slug)->first();

        return view('frontend.pages.resorts.single-resort', compact('resort'));
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
        return view('frontend.pages.daily-news.index');
    }

    public function showSingleDailyNewsPage()
    {
        return view('frontend.pages.daily-news.single-news');
    }
}
