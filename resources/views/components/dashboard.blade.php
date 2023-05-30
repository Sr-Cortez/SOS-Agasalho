<div style="height: calc(100vh - 80px);display: flex;justify-content: center;align-items: center;">
    <div style="width:100%;;background-color:#00000094;">
        <br>
        <div class="d-flex">
            <div class="col-6 text-center text-light">
                <h1 style="font-size: 30px;">{{ number_format( $donations['donations'] ,0,",",".") }}</h1>
                <p class="mb-0">ARRECADAÇÔES</p>
            </div>
            <div class="col-6 text-center text-light">
                <h1 style="font-size: 30px;">{{ number_format($donations['donations_output'] ,0,",",".") }}</h1>
                <p class="mb-0">DOAÇÔES</p>
            </div>
        </div>
        <br>
    </div>    
</div>
