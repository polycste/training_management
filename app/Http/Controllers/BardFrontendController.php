<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Announcement;
use App\Training;
use Carbon;
use DateTime;
use App\Model\Client;


class BardFrontendController extends Controller
{
    public function index()
    {   $limit=2;
        $announcement = Announcement::orderBy('created_at','desc')->limit($limit)->get();
        $now = new Datetime();
        $now=$now->format('Y-m-d');
        $upcomingTrainings=Training::where('status','=',1)
            ->where('start_date','>',Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$now.' 00:00:00'))
            ->orderBy('start_date','asc')
            ->limit($limit)
            ->get();
        $ongoingTrainings=Training::where('status','=',1)
            ->where('start_date','<=',Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$now.' 00:00:00'))
            ->where('end_date','>=',Carbon\Carbon::createFromFormat('Y-m-d H:i:s',$now.' 00:00:00'))
            ->limit($limit)
            ->get();
        $all_slider = Slider::orderBy('position', 'asc')->get();
        $clients = Client::orderBy('created_at','desc')->limit(5)->get();

        return view('bard_frontend.index', compact('announcement','upcomingTrainings','ongoingTrainings','all_slider','clients'));
    }
    public function trainings()
    {
        return view('bard_frontend/trainings')->with('trainings', 'active');
    }
    public function faculty()
    {
        return view('bard_frontend/faculty')->with('faculty', 'active');
    }
    public function clients()
    {
        return view('bard_frontend/clients')->with('clients', 'active');
    }
    public function about()
    {
        return view('bard_frontend/about')->with('about', 'active');
    }
    public function contact()
    {
        return view('bard_frontend/contact')->with('contact', 'active');
    }

    public function trainers()
    {
        return view('bard_frontend/trainers')->with('trainings', 'active');
    }
    public function trainees()
    {
        return view('bard_frontend/trainees')->with('trainings', 'active');
    }
}
