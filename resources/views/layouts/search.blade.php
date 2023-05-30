<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TCC - HUGO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    
    <main class="main-conteudo-2 bg-light">
        <header>
            <nav class="navbar navbar-expand-lg bg-dark pt-1 pe-4 pb-1 ps-4">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/"><img width="60" height="60" src="/assets/images/img-header.png" alt="logo"></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item me-lg-4">
                                <a class="nav-link text-light active" aria-current="page" href="/">Home</a>
                            </li>
                            <li class="nav-item me-lg-4">
                                <a class="nav-link text-light" href="login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-light" href="register">Criar conta</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">

            @yield('content')

        </div>    

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function() {

            $('#btn_search').click(function(){
                alert('teste');
            });

            // $('#btn_search_city').click(function(){
            //     const cidade = $('.informe_cidade').val();

            //     if(cidade.length >= 5){

            //         $('#resut_search').empty();
            //         $('#lds-roller').removeClass('d-none');
            //         $('#busca').removeClass('d-none');
            //         $('#busca').addClass('d-flex justify-content-center align-items-center');

            //         $.get("{{ '/search' }}", {cidade:cidade},function(result){        
            //             setTimeout(() => {
            //                 $('#lds-roller').addClass('d-none');            
            //                 $('#resut_search').append(result);
            //             }, 2000);
            //         });

            //     }else{
            //         $('#busca').addClass('d-none');
            //         $('#busca').removeClass('d-flex justify-content-center align-items-center');
            //     }
            // });
        });
    </script>
</body>
</html>