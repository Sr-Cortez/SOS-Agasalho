@extends('layouts.search')

@section('title','TCC-HUGO')

@section('content')

    <div class="d-flex p-4">
        <div class="col-8 d-none d-lg-block ps-3"><h2>Instituições</h2></div>
        <form action="/search" class="input-group" method="get">
            @csrf
            <input type="text" class="form-control" name="informe_cidade" id="informe_cidade" placeholder="Pesquisa...">
            <button type="submit" class="btn btn-primary"><i class="fa fa-search" aria-hidden="true"></i></button>
        </form>
    </div>
   
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 ps-4 pe-4">
        <div class="container-fluid">
            <div class="container">
                @if(count($institutions) > 0)
                    @foreach($institutions as $institution)
                        <div class="bg-white shadow mb-4 p-3">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span style="font-weight: 500;border-bottom:1.5px solid #6a6a6a;">{{ $institution->name }}</span> <!-- style="border-bottom: 2px solid #c4c4c4;" -->
                                    <p class="p-0 mt-3 mb-0">Logradouro: &nbsp; {{ $institution->road }}</p>
                                    <p class="p-0 m-0">Bairro: &nbsp; {{ $institution->neighborhood }}</p>
                                    <p class="p-0 m-0">{{ $institution->city }} - {{ $institution->uf }}</p>
                                </div>
                                <div>
                                    @if($institution->location != "" && $institution->location != null)
                                        <iframe src="{{ $institution->location }}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                    @endif    
                                </div>
                            </div>
                        </div>
                    @endforeach


                    @if(ceil(count($total_institutions) / 4) > 1)
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <!-- <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li> -->

                            @for($i = 0; $i < ceil(count($total_institutions) / 4);$i++)
                                <li class="page-item"><a class="page-link" href="search?page={{ $i + 1 }}&_token=izxXO4s0JUW0AQvfN9C1yn59KaHHXnGptRSlHmal&informe_cidade=blumenau">{{ $i + 1 }}</a></li>
                            @endfor

                            <!-- <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li> -->
                        </ul>
                    </nav>
                    @endif

                @else
                    <div class="text-center pt-5" style="height:calc(100vh - 78px);width:100%;">
                        <div class="">
                            <p>Não há registro.</p>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    <div>
        


@endsection()
