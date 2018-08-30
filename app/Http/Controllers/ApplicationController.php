<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
class ApplicationController extends Controller
{
    protected $data=[];

    public function __construct()
    {
        $this->data['title']='MyProject';
    }

    public function index()
    {
        //$this->data['title'] = 'Home';
        $newsData=News::all();
        return view('home',compact('newsData'));
    }

    public function about()
    {
        $this->data['title'] = 'About';
        return view('about',$this->data);
    }
    public function contact()
    {

        return view('contact',$this->data);
    }
}
