<x-layout title="Dashboard"  >

    @auth
    <div class="container">
        <div class="row">

            <div class="col-sm-3">
                <div id="Sarah_chart_div" style="border: 0px solid #ccc"></div>
            </div>

            <div class="col-sm-3">
                <div id="Anthony_chart_div" style="border: 0px solid #ccc"></div>
            </div>

            <div class="col-sm-3">
                <div id="piechart_div" style="border: 0px solid #ccc"></div>
            </div>

            <div class="col-sm-3">
                <div id="barchart_div" style="border: 0px solid #ccc"></div>
            </div>

        </div>
    </div>



    <div class="mt-16">

        <div class="card">
            <h5 class="card-header">Mensagens</h5>
            <div class="card-body">
              <h5 class="card-title">Última atualização dia 11/09/2023 b.162903</h5>
              <p class="card-text">Adicionado novos relatórios de movimentação de vendas.</p>
              <a href="#" class="btn btn-primary">Verificar</a>
            </div>
          </div>




    </div>


    <!--
    <div class="container">

        <div class="row">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Special title treatment</h5>
                  <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                  <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
              </div>
            </div>
          </div>
    </div>
    -->


    <!-- Menu topo, clicar e abrir no menu do lado esquerdo com o nome do usuário - configurações -->
    <div class="container">
        <div class="row">
            <!-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Configurações</button> -->

            <div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasTopLabel">Configurações de Permissões</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                ...
            </div>
            </div>

        </div>
    </div>
    @endauth

</x-layout
>
