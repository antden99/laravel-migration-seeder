<?php
namespace App\Http\Controllers\Guests;
use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $trainsList = Train::all();
        return view('home',compact('trainsList'));
    }

    public function trains(){

       
        return view('trains');
    }

    public function price(){

        
        return view('price');
    }
}
