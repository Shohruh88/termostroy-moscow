<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        return view('project');
    }

    public function CapitalTowers(){
        return view('project.capital_towers');
    }
}
