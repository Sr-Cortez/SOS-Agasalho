@extends('layouts.home')

@section('title','TCC-HUGO')

@section('content')

    <div class="conteudo">
        <div class="text-center">
            <div class="d-flex justify-content-center">
                <div class="col-12 col-lg-6">
                    <form action="/search" method="get" id="form_search" style="padding-top: 2%;">
                        @csrf
                        <div class="mt-lg-5 mb-lg-5">
                            <div class="btn-group w-100" role="group" aria-label="Default button group">
                                <label for="informe_cidade" class="form-label bg-white w-100 mb-0 p-3" style="border-radius: 30px 0 0 30px!important;"> <!-- style="border-radius: 30px 0 0 30px !important;" -->
                                    <input type="text" class="informe_cidade w-100 border-0 ps-3 pe-3" name="informe_cidade" id="informe_cidade" placeholder="Informe uma cidade" required style="outline: none!important;">
                                </label>
                                <button type="submit" class="d-flex align-items-center btn btn-dark" id="btn_search_city" style="border-radius:0 30px 30px 0!important;"> <!-- style="border-radius:0 30px 30px 0 !important;" -->
                                    <i class="fa fa-search me-2" aria-hidden="true"></i> Buscar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    <div class="busca d-none ps-3 pe-3" id="busca">
        <div class="col-12 col-lg-6 text-center" style="width:100%;">
            <br>
            <div class="lds-roller" id="lds-roller"><div></div><div></div><div></div><div></div><div></div>
        </div>
        <div class="result_search" id="resut_search"></div>
    </div>



@endsection()
