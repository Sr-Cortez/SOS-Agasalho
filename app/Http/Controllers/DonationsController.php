<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Donations;

class DonationsController extends Controller
{
    public function store(){

        $donations = Donations::where('type',1)->get();
        $donations_output = Donations::where('type',2)->get();

        $d = array('donations' => count($donations),'donations_output' => count($donations_output));

        //return view('dashboard',['teste' => 1]);
        return view('/dashboard',['donations' => $d]);
    }

    /**
     * 
     * Public donations
     * 
     */
    public function saveNewDonation(Request $request){

        if(!empty($request)){
            $donations = new Donations;
            $donations->name = $request->nome;
            $donations->donor = $request->doador;
            $donations->Amount = $request->quantidade;
            $donations->type = $request->tipo;
    
            $donations->save();
    
            return redirect('/cadastrar-doacao')->with('msg','Doação cadastrada com sucesso!');
        }else{
            return redirect('/cadastrar-doacao')->with('msg','Doação não cadastrada!');
        }


    }
}
