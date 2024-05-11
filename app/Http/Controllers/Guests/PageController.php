<?php
namespace App\Http\Controllers\Guests;
use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index(){

        //dd(date("Y-m-d"));
        $trainsList = Train::where('departure_date',date("Y-m-d"))->get(); //utilizzando questa funzione creiamo una query che grazie al metodo ->get() ci restituisce i dati nel db
        return view('home',compact('trainsList'));
    }

    public function trains(){  

        $allTrains = Train::all();  //scrivendo questa funzione riesco a recuperare dal db tutta la lista di treni a disposizione
        return view('trains',compact('allTrains')); //utilizzando compact reindirizzo l'utente alla pagina trains, inviando ad essa i dati salvati nella variabile allTrains
    }

    public function price(){   
        return view('price');
    }

    public function showTrain(Train $train){
        
        return view('showTrain',compact('train'));  //train adesso contiene il singolo treno selezionato attraverso il click dell'utente 
    }

    public function searchTrains(Request $request){
        //dd($request->partenza);
        $newTrainsList = Train::where('departure_date',$request->partenza)->get();
        //dd($newTrainsList);


        return view('searchTrains',compact('newTrainsList'));  //train adesso contiene il singolo treno selezionato attraverso il click dell'utente 
    }
}
