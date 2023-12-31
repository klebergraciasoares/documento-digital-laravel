
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title  }} Principal - Salestool - Mini ERP e API Marketplaces</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <?Php
        $meuIp = $_SERVER['REMOTE_ADDR'];
        $app_9b35bda6 =     'http://'.$meuIp.':8000/build/assets/app-9b35bda6.css';
        $app_43c05ea5 =     'http://'.$meuIp.':8000/build/assets/app-43c05ea5.js';
        $app_9b35bda6_2 =   'http://'.$meuIp.':8000/build/assets/app-9b35bda6.css';
        $app_43c05ea5_2 =   'http://'.$meuIp.':8000/build/assets/app-43c05ea5.js';
    ?>

    <!-- Scripts -->
    <link rel="preload" as="style" href="<?php echo($app_9b35bda6); ?>" />
    <link rel="modulepreload" href="<?php echo($app_43c05ea5); ?>" />
    <link rel="stylesheet" href="<?php echo($app_9b35bda6_2); ?>" />
    <script type="module" src="<?php echo($app_43c05ea5_2); ?>"></script>



    <!-- Google Chart start -->
    <!-- Fonte de dados: https://developers.google.com/chart/interactive/docs/basic_multiple_charts?hl=pt-br -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load Charts and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Draw the pie chart for Sarah's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawSarahChart);

      // Draw the pie chart for the Anthony's pizza when Charts is loaded.
      google.charts.setOnLoadCallback(drawAnthonyChart);

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that draws the pie chart for Sarah's pizza.
      function drawSarahChart() {

        // Create the data table for Sarah's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mercado Livre', 1],
          ['Americanas', 1],
          ['Submarino', 2],
          ['Olist', 2],
          ['Amazon', 1]
        ]);

        // Set options for Sarah's pie chart.
        var options = {title:'MarketPlace - Vendas por Dia',
                       width:400,
                       height:300};

        // Instantiate and draw the chart for Sarah's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Sarah_chart_div'));
        chart.draw(data, options);
      }

      // Callback that draws the pie chart for Anthony's pizza.
      function drawAnthonyChart() {

        // Create the data table for Anthony's pizza.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
          ['Mercado Livre', 2],
          ['Americanas', 2],
          ['Submarino', 2],
          ['Olist', 0],
          ['Amazon', 3]
        ]);

        // Set options for Anthony's pie chart.
        var options = {title:'MarketPlace - Vendas por Mês',
                       width:400,
                       height:300};

        // Instantiate and draw the chart for Anthony's pizza.
        var chart = new google.visualization.PieChart(document.getElementById('Anthony_chart_div'));
        chart.draw(data, options);
      }





      // Barchart
    function drawChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Topping');
        data.addColumn('number', 'Slices');
        data.addRows([
        ['Mercado Livre', 3],
        ['Americanas', 1],
        ['Submarino', 1],
        ['Olist', 1],
        ['Amazon', 2]
        ]);

        var piechart_options = {title:'MerketPlace - Comparador Venda Mês',
                    width:400,
                    height:300};
        var piechart = new google.visualization.PieChart(document.getElementById('piechart_div'));
        piechart.draw(data, piechart_options);

        var barchart_options = {title:'Barchart: Evolução Comparador',
                    width:400,
                    height:300,
                    legend: 'none'};
        var barchart = new google.visualization.BarChart(document.getElementById('barchart_div'));
        barchart.draw(data, barchart_options);
    }


    </script>
    <!-- Google Chart end -->

    <!-- Admin LTE 2023
    <link type="text/css" href="http://192.168.1.117:8000/build/assets/css/vendor-morris.css" rel="stylesheet">
    <link type="text/css" href="http://192.168.1.117:8000/build/assets/css/vendor-bootstrap-datepicker.css" rel="stylesheet">
    -->

    <!-- Prevent the demo from appearing in search engines -->
    <meta name="robots" content="noindex">

    <?Php
        //$meuIp = $_SERVER['REMOTE_ADDR'];
        $app        = 'http://'.$meuIp.':8000/build/assets/css/app.css';
        $app_rtl    = 'http://'.$meuIp.':8000/build/assets/css/app.rtl.css';
        $simplebar  = 'http://'.$meuIp.':8000/build/assets/vendor/simplebar.css';
    ?>

    <!-- App CSS -->
    <link type="text/css" href="<?php echo($app); ?>" rel="stylesheet">
    <link type="text/css" href="<?php echo($app_rtl); ?>" rel="stylesheet">

    <!-- Simplebar -->
    <link type="text/css" href="<?php echo($simplebar); ?>" rel="stylesheet">
    <!-- End - Admin LTE 2023 -->

    <!-- Styles -->



    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css') }}">
    <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>



    <style>
        /*
        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            background-color: #ef3b2d;
            color: white;
            text-align: center;
        }
        body {
            background-color:  #f7fafc
        }

        body{

            background-color: #f8f9fa;
        }


        .card{

            width: 400px;
            border:none;

        }




        .btr{

            border-top-right-radius: 5px !important;
        }


        .btl{

            border-top-left-radius: 5px !important;
        }

        .btn-dark {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }


        .btn-dark:hover {
            color: #fff;
            background-color: #0d6efd;
            border-color: #0d6efd;
        }


        .nav-pills{

            display:table !important;
            width:100%;
        }

        .nav-pills .nav-link {
            border-radius: 0px;
            border-bottom: 1px solid #0d6efd40;

        }

        .nav-item{
            display: table-cell;
            background: #0d6efd2e;
        }


        .form{

            padding: 10px;
            height: 300px;
        }

        .form input{

            margin-bottom: 12px;
            border-radius: 3px;
        }


        .form input:focus{

            box-shadow: none;
        }


        .form button{

            margin-top: 20px;
        }
        */

        /*i assume your navbar size 100px*/
        /*
        .navbar {
                    height: 110px !important;
        }
        */






        .progress-container {
  position: relative;
}

.progress-bar {
}

.progress-bar:before {
  content: "0";
  position: absolute;
  left: 2px;
  bottom: 60px;
  font-size: 12px;
  color: rgba(98, 107, 114, 1);
}

.progress-bar:after {
  content: "600";
  position: absolute;
  right: -6px;
  bottom: 60px;
  font-size: 12px;
  color: rgba(98, 107, 114, 1);
}

.widget {
  padding: 25px;
  margin: 0 auto;
  width: 150px;
  margin-top: 25px;
  background-color: #fff;
  -background-color: #222d3a;
  border-radius: 5px;
  box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.3);
  position: relative;
}

.points {
  position: absolute;
  margin: 0 auto;
  left: 0;
  right: 0;
  bottom: 60px;
  text-align: center;
  text-transform: uppercase;
  color: rgba(98, 107, 114, 1);
  font-size: 12px;
}

.nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #f3f3f3;
    background-color: #010e81;
    border-color: #dee2e6 #dee2e6 #fff;
}

.form2{ /*background-color:#ebf3fa; width: 100%; height: 190px; margin: auto;
  margin-top: 12px; text-align: center; padding-top: 30px; border-radius: 10px; border: 1px #ccc solid;
  */
}

    </style>

</head>
<body class="antialiased bg-image"
style="width: 100%; height: 700px;  background-image: url('{{ ('images/backgroundErp.jpg') }}');
background-size: 85% 100%; background-repeat: no-repeat;">





<!--
<div class="row">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">

                <a class="ml-5 mb-4 navbar-brand" href="#">
                    <img src="{{ ('storage/images/logo.png') }}" >
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                @auth
                    <a href="{{ route('logout') }}">Sair</a>
                @endauth

                @guest
                    <a href="{{ route('login') }}">Entrar</a>
                @endguest

            </div>
        </nav>
    </div>
</div>
-->


<!-- A grey horizontal navbar that becomes vertical on small screens -->
@auth

 <!--
<nav class="navbar navbar-expand-lg navbar-light bg-light">

    <div class="container-fluid">
       Links
      <ul class="navbar-nav">
        <li class="nav-item ml-5">
            <a class=" navbar-brand" href="/">
                <img src="{{ ('images/logo2.png') }}" >
            </a>
        </li>

        @auth
        <li class="nav-item dropdown ml-3 mt-5">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Series
            </a>
            <ul class="dropdown-menu mt-1" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Gerenciar Séries</a></li>
              <li><a class="dropdown-item" href="#">Gerenciar Referência</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          @endauth




          @auth
          <li class="nav-item dropdown ml-3 mt-5">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Teste Aplicação
              </a>
              <ul class="dropdown-menu mt-1" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Gerenciar Referência</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            @endauth





      </ul>
    </div>

  </nav>

-->
<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">

                <!-- Logo Primeira Página -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('pagina') }}">
                        <x-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="{{ route('pagina') }}" :active="request()->routeIs('pagina')">
                        {{ __('Home') }}
                    </x-nav-link>
                </div>

                <!--
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/products">
                        Produtos
                    </x-nav-link>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link href="/teste">
                        Teste
                    </x-nav-link>

                </div>
            -->




                <!-- MENU DASHBOARD -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <!-- Teams Dropdown -->
                    <!-- Settings Dropdown -->
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                    <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                        <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                    </button>
                                @else
                                    <span class="inline-flex rounded-md no-border">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                            Tabelas
                                            <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                                @endif
                            </x-slot>

                            <x-slot name="content">
                                <!-- Account Management -->
                                <div class="block px-4 py-2 text-xs text-gray-400">
                                    Gerenciar Empresa
                                </div>

                                <x-dropdown-link href="{{ url('/emails')}}">
                                    E-Mail
                                </x-dropdown-link>

                                <x-dropdown-link href="/setores" >
                                    Setor
                                </x-dropdown-link>

                                <!-- EXEMPLO DE COMO CHAMAR UM MODAL
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Cadastrar Pedido
                                </button>
                                -->

                                <x-dropdown-link href="/filiais">
                                    Filial
                                </x-dropdown-link>

                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                    <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                        {{ __('API Tokens') }}
                                    </x-dropdown-link>
                                @endif

                                <div class="border-t border-gray-200"></div>

                                <!-- Authentication -->

                                <!--
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf
                                    <x-dropdown-link href="{{ route('logout') }}"
                                            @click.prevent="$root.submit();">
                                        {{ __('Log Out') }}
                                    </x-dropdown-link>
                                </form>
                            -->
                            <x-dropdown-link href="/tipoDocumentos">
                                Tipo Documento
                            </x-dropdown-link>

                            </x-slot>
                        </x-dropdown>
                    </div>
                </div>


               <!-- Configurações - Routes Integração -->
               <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md no-border">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        Movimento
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Movimento
                            </div>


                            <x-dropdown-link href="/routes">
                                Documento
                            </x-dropdown-link>


                        </x-slot>
                    </x-dropdown>
                </div>
            </div>


               <!-- Configurações - Segurança -->
               <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md no-border">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        Segurança
                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                Segurança
                            </div>


                            <x-dropdown-link href="/grupos">
                                Grupo de Usuários
                            </x-dropdown-link>

                            <x-dropdown-link href="/usuarios">
                                Usuários
                            </x-dropdown-link>


                        </x-slot>
                    </x-dropdown>
                </div>
            </div>






















<!-- The Modal Form -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
    <div class="modal-content">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-dark"><strong>Adicionar Produto</strong></h4>
                </div>
                <form action="#" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="row d-flex justify-content-center">
                            <div class="col-7 mt-3">
                                <div class="row">
                                    <div class="input-group input-group-lg">
                                        <select class="form-control" id="mes" name="mes">
                                            <option selected>Selecionar Mês...</option>
                                            <option value="1">Janeiro</option>
                                            <option value="2">Fevereiro</option>
                                            <option value="3">Março</option>
                                            <option value="4">Abril</option>
                                            <option value="5">Maio</option>
                                            <option value="6">Junho</option>
                                            <option value="7">Julho</option>
                                            <option value="8">Agosto</option>
                                            <option value="9">Setembro</option>
                                            <option value="10">Outubro</option>
                                            <option value="11">Novembro</option>
                                            <option value="12">Dezembro</option>
                                        </select>

                                        <div class="input-group-prepend">
                                            <span class="input-group-text">/</span>
                                        </div>

                                        <select class="form-control" id="ano" name="ano">
                                            <option selected>Selecionar Ano...</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="mx-4 text-danger"><small>* Caso o mês já tenha sido criado ele não será substituido.</small></p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal" name="button">Fechar</button>
                        <button type="submit" class="btn btn-primary" name="button">Adicionar</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fechar</button>
        </div>

    </div>
    </div>
</div>










            </div>






            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ml-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                <div class="w-60">
                                    <!-- Team Management -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Manage Team') }}
                                    </div>

                                    <!-- Team Settings -->
                                    <x-dropdown-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}">
                                        {{ __('Team Settings') }}
                                    </x-dropdown-link>

                                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                        <x-dropdown-link href="{{ route('teams.create') }}">
                                            {{ __('Create New Team') }}
                                        </x-dropdown-link>
                                    @endcan

                                    <div class="border-t border-gray-200"></div>

                                    <!-- Team Switcher -->
                                    <div class="block px-4 py-2 text-xs text-gray-400">
                                        {{ __('Switch Teams') }}
                                    </div>

                                    @foreach (Auth::user()->allTeams() as $team)
                                        <x-switchable-team :team="$team" />
                                    @endforeach
                                </div>
                            </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->name }}

                                        <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            <!-- Account Management -->
                            <div class="block px-4 py-2 text-xs text-gray-400">
                                {{ __('Gerenciar Perfil') }}
                            </div>

                            <x-dropdown-link href="{{ route('profile.show') }}">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <x-dropdown-link href="{{ route('api-tokens.index') }}">
                                    {{ __('API Tokens') }}
                                </x-dropdown-link>
                            @endif

                            <!--<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Configurações</button> -->
                            <x-dropdown-link data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" >
                                {{ __('Configurações') }}
                            </x-dropdown-link>

                            <div class="border-t border-gray-200"></div>

                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <x-dropdown-link href="{{ route('logout') }}"
                                         @click.prevent="$root.submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 mr-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                    <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <div class="border-t border-gray-200"></div>

                    <!-- Team Switcher -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Switch Teams') }}
                    </div>

                    @foreach (Auth::user()->allTeams() as $team)
                        <x-switchable-team :team="$team" component="responsive-nav-link" />
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</nav>




  @endauth



<br/>


<div class="container @auth text-dark @endauth">
    <h3>{{ $title  }} </h3>

        @isset($mensagemSucesso)
            <div class="alert alert-success">
                {{ $mensagemSucesso }}
            </div>
        @endisset


        <!-- Criado automaticamente pelo Laravel, isso é uma Coleção -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{ $slot }}
</div>


<script type="text/javascript" src="https://www.codehim.com/cdn-cgi/scripts/7d0fa10a/cloudflare-static/rocket-loader.min.js"></script>



<script>
function openModalAndSendData(a){
    //var clicado0 = $('#setEmail').val(a);
    //alert('clicado0.... ' +clicado0);

}

$('#myModalEmailNew').on('shown.bs.modal', function (e) {
        $('input[name="email"]').focus();
})

$('#myModalSetorNew').on('shown.bs.modal', function (e) {
        $('input[name="nome"]').focus();
})

$('#myModalFilialNew').on('shown.bs.modal', function (e) {
        $('input[name="codigo"]').focus();
})

$('#myModalTipoDocumentoNew').on('shown.bs.modal', function (e) {
        $('input[name="nome"]').focus();
})

$('#myModalGrupoNew').on('shown.bs.modal', function (e) {
        $('input[name="nome"]').focus();
})

$('#myModalUsuarioNew').on('shown.bs.modal', function (e) {
        $('input[name="name"]').focus();
})

$('#myModalEmailEdit').on('shown.bs.modal', function (e) {
        //alert('Dentro com e...' +e);
        var clicado = $('#setEmail').val();
        //alert('clicado.... ' +clicado);
        $('input[name="email"]').focus();
        $('input[name="email"]').val(clicado);
})

//$('#myModalSetorEdit').on('shown.bs.modal', function (e) {
        //alert('Dentro com e...' +e);
        //var clicado = $('#setNome').val();
        //alert('clicado.... ' +clicado);
        //$('input[name="nome"]').focus();
        //$('input[name="nome"]').val(clicado);
//})


$(document).ready(function(){
    setTimeout(function() {
	$(".alert").fadeOut("slow", function(){
		$(this).alert('close');
	});
    }, 5000);
});

/*
$(document).ready(function() {
    $("#btnFetch").click(function() {
      // disable button
      $(this).prop("disabled", true);
      // add spinner to button
      $(this).html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...`
      );
    });
});
*/
$(document).ready(function() {
    $("#btnFetch").click(function() {
      // disable button
      $(this).prop("disabled", true);
      // add spinner to button
      $(this).html(
        `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Aguarde...`
      );

      setTimeout(function(){
        /*submit the form after 5 secs*/
        $('#testForm').submit();
    },1000)

    });
});





</script>


</body>
</html>
