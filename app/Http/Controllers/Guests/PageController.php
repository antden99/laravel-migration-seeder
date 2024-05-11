<?php
namespace App\Http\Controllers\Guests;
use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        $trainsList = Train::where('departure_date',date("Y-m-d"))->get(); //utilizzando questa funzione creiamo una query che grazie al metodo ->get() ci restituisce i dati nel db
        return view('home',compact('trainsList'));
    }

    public function trains(){  
        return view('trains');
    }

    public function price(){   
        return view('price');
    }

    public function showTrain(Train $train){
        
        return view('showTrain',compact('train'));  //train adesso contiene il singolo treno selezionato attraverso il click dell'utente 
    }
}
