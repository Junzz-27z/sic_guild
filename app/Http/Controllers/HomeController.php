<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
        $infos = Card::latest()->take(6)->get();
        return view('home', compact('infos'));
    }

    public function stories() {
        $infos = Card::latest()->paginate(6);
        return view('all-stories', compact('infos'));
    }

    public function detailStories() {
        return view('detail-stories');
    }
}
