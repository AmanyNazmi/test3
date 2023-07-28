<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;
use function Ramsey\Uuid\v8;

class TestController extends Controller
{
    function index(){
        return view('test.index');

    }
    function index_1(){
        return view('test.index_1');
    }
    function about(){
        return view('test.about');
    }
    function team(){
        return view('test.team');
    }
    function testimonials(){
        return view('test.testimonials');
    }
    function faq(){
        return view('test.faq');
    }
    function pricing(){
        return view('test.pricing');
    }
    function projects(){
        return view('test.projects');
    }
    function projects_single(){
        return view('test.projects_single');
    }
    function services(){
        return view('test.services');
    }
    function service_single(){
        return view('test.service_single');
    }
    function typography(){
        return view('test.typography');
    }
    function A404(){
        return view('test.A404');
    }
    function news_left_sidebar(){
        return view('test.news_left_sidebar');
    }
    function news_right_sidebar(){
        return view('test.news_right_sidebar');
    }
    function news_single(){
        return view('test.news_single');
    }
     function contact(){
        return view('test.contact');
    }
}
