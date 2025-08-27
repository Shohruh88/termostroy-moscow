<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider; // Eloquent model import
class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::all(); // Eloquent ORM bilan DBdan ma'lumotlarni olish
        return view('home');
    }

    public function aboutUs(){
        return view('about');
    }

    public function project(){
        return view('project');
    }


    public function about(){
        return view('about');
    }

    public function inzhenernye(){
        return view('inzhenernye');
    }

}
