<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> -->

    <div class="" style="background-image: url(assets/images/img-secundaria.png);background-size: cover;background-repeat: no-repeat;">
        <div style="height: calc(100vh - 73px);display: flex;justify-content: center;align-items: center;">
            <div style="width:100%;;background-color:#00000094;">
                <br>
                <div class="d-flex">
                    <div class="col-6 text-center text-light">
                        <h1 style="font-size: 30px;">0</h1>
                        <p class="mb-0">ARRECADAÇÔES</p>
                    </div>
                    <div class="col-6 text-center text-light">
                        <h1 style="font-size: 30px;">{{ number_format( count($donations) ,0,",",".") }}</h1>
                        <p class="mb-0">DOAÇÔES</p>
                    </div>

                </div>
                <br>
        </div>
    </div>  
    
    </div>
</x-app-layout>
