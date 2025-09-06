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

      public function OlimpPark(){
        return view('project.olimpiya_park');
    }

    public function Sberbank(){
        return view('project.sberbank');
    }

    public function Telegraf(){
        return view('project.telegraf');
    }

     public function Arcus(){
        return view('project.arcus');
    }

    public function Sreda(){
        return view('project.sreda');
    }

     public function Residence(){
        return view('project.residence');
    }

     public function Elektro(){
        return view('project.elektro');
    }
}
