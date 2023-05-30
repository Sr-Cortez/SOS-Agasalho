<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Search;

class SearchController extends Controller
{
    protected $table = "institution";
    /**
     * 
     * public function
     * 
     */
    public function search(){
        $search = request("informe_cidade");

        if($search){
            $event = Search::where([
                ['city','like','%'.$search.'%']
            ])->get();
        }else{
            $event = Search::all;
        }

        //return $event;

        return view('/search',['search' => $event]);
    }
}
