<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institutions;

class InstitutionsController extends Controller
{
    protected $table = "institution";

    /**
     * 
     * public function
     * 
     */
    public function index(){
        $institutions = Institutions::paginate(4);
        return view('/search',['institutions' => $institutions]);
    }

    /**
     * 
     * public function
     * 
     */
    public function saveNewInstitutions(Request $request){

        if(!empty($request)){
            $institutions = new Institutions;
            $institutions->name = $request->nome;
            $institutions->road = $request->rua;
            $institutions->neighborhood = $request->bairro;
            $institutions->city = $request->cidade;
            $institutions->uf = $request->uf;
            $institutions->location = $request->localizacao;
    
            $institutions->save();
            return redirect('/cadastrar-instituicao')->with('msg','Instituição cadastrada com sucesso!');
        }else{
            return redirect('/cadastrar-instituicao')->with('msg-error','Instituição não cadastrada!');
        }
        
    }

    /**
     * 
     * public function
     * 
     */
    public function searchCity(Request $request){
        $search = request("informe_cidade");

        if($search){

            $institutions = Institutions::where([
                ['city','like','%'.$search.'%']
            ])->paginate(4);

            $total_institutions = Institutions::where([
                ['city','like','%'.$search.'%']
            ])->get();

        }else{
            $institutions = Institutions::all();
        }

        return view('/search',['total_institutions' => $total_institutions,'institutions' => $institutions,'search' => $search]);
    }
}