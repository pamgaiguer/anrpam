<?php include $_SERVER['DOCUMENT_ROOT'] . '/anrriskmanagement/platform/account/includes/header.php'?>
<?php include $_SERVER['DOCUMENT_ROOT'] . '/anrriskmanagement/platform/account/includes/_mainNavbar.php'; ?>

<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="page-content ">
          <div class="main-panel">

            <p class="text-uppercase font-12 font-bold gray-dark"><span class="icon dripicons-scale"></span> Adm Geral dos Trades</p>
            <div class="spacing"></div>
            <div class="last-projects">
                <div class="row">
                  <div class="col-lg-8">Capital Operacional Disponivel</div>
                  <div class="col-lg-4">
                    <input type="text"  class="form-control"  placeholder="R$ 30,000.00" title="Capital Total">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5">Concentração máxima (R$) por trade</div>
                  <div class="col-lg-3">
                    <input type="text" class="form-control" placeholder="33%" title="Definir o % máximo de concentração de $$ por TRADE Sugestão: max 33%">
                  </div>
                  <div class="col-lg-4">
                    <p title="Investimento máximo por trade" class="text-muted margin-top-15px">R$ 9.900</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5">Prejuízo Máximo (%) <strong>por trade</strong></div>
                  <div class="col-lg-3">
                    <input type="text"  class="form-control"  placeholder="4%" title="Definir o % máximo de prejuízo por TRADE. SUGESTÃO: max 2%">
                  </div>
                  <div class="col-lg-4">
                    <p title="Prejuízo Máximo (R$) por TRADE / Valor máximo de prejuízo por TRADE." class="text-muted margin-top-15px">R$ 1.200,00</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-5">Prejuízo máximo (%) <strong>carteira no mês</strong></div>
                  <div class="col-lg-3">
                    <input type="text"  class="form-control" placeholder="8%" title="Definir o % máximo de prejuizo sobre o CAPITAL TOTAL por mês. SUGESTÃO: max 6%">
                  </div>
                  <div class="col-lg-4">
                    <p  class="text-muted margin-top-15px">R$ 2.400,00</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-lg-5">
                    <p>Corretagem - escolher opção abaixo:</p>
                  </div>
                  <div class="col-lg-3"></div>
                  <div class="col-lg-4">
                    <p title="Custo de corretagem, fixo ou variável">Custo por operação:</p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-5">
                    <p>Corretagem Fixa</p>
                  </div>
                  <div class="col-lg-3"></div>
                  <div class="col-lg-4">
                    <p title="Valor fixo cobrado pelas corretoras por operação de compra ou venda">
                      <input  class="form-control"  type="text" placeholder="R$ 15.00">                      
                    </p>
                  </div>
                </div>

                <div class="row">
                  <div class="col-lg-5">
                    <p>Corretagem Variável</p>
                  </div>
                  <div class="col-lg-3"></div>
                  <div class="col-lg-4">
                    <p title="Percentual (%) cobrado pelas corretoras por operação de compra e venda.">
                      <input  class="form-control"  type="text" placeholder="0.00%">
                    </p>
                  </div>  
                </div>

                <div class="row">
                  <div class="col-lg-8">
                    <p class="text-right">Emolumentos / Taxas</p>
                  </div>
                  <div class="col-lg-4">
                    <p title="Emolumentos / Taxas. Outros custos cobrados pela Bovespa." class="text-muted"> 0.035% </p>
                  </div>    
                </div>  
                
                <hr>

                <div class="row">
                  <div class="col-lg-8">
                    <p>Definir ( % ) venda ao atingir os objetivos </p>
                  </div>
                  <div class="col-lg-4">
                    <p>Lucro nos Objetivos</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-8">
                    <p>Objetivos para position</p>
                  </div>
                  <div class="col-lg-4">
                    <p>
                      1o objetivo:
                      <input  class="form-control" type="text" placeholder="8%">
                    </p>
                    <p>
                      2o objetivo:
                      <input  class="form-control" type="text" placeholder="10%">
                    </p>
                  </div>
                </div>                
                <div class="row">
                  <div class="col-lg-8">
                    <p>Objetivos para swing</p>
                  </div>
                  <div class="col-lg-4">
                    <p>
                      1o objetivo:
                      <input  class="form-control" type="text" placeholder="3.0%">
                    </p>
                    <p>
                      2o objetivo:
                      <input  class="form-control" type="text" placeholder="5.0%">
                    </p>
                  </div>
                </div>    
                <div class="row">
                  <div class="col-lg-8">
                    <p class="text-center">
                      Imposto de renda sobre operações de venda
                    </p> 
                    <p class="text-center">
                      (swing trade  -  position trade)
                    </p>
                  </div>
                  <div class="col-lg-2">
                    <input placeholder="R$ 20,000" class="form-control">
                  </div>
                  <div class="col-lg-2">
                    <p>15%</p>
                  </div>                  
                </div>              
                <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            </div>

            <div class="spacing"></div>
            <div class="spacing"></div>
            <!-- <button class="btn btn-blue-dash-action">
              <span class="icon dripicons-document-new"></span>
              Começar novo projeto
            </button> -->

            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <!-- <p class="text-uppercase font-12 font-bold gray-dark"><span class="icon dripicons-archive"></span>  Biblioteca de questionários</p> -->
            <div class="spacing"></div>

            <!-- <div class="questionnary-library">
              <div class="panel panel-default">
                <div class="panel-body">

                  <div class="jumbotron">
                    <h1 class="text-center">Questionários Certificados <i class="icon-verified">icon</i></h1>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <h4 class="text-center">Comece seu projeto através dos questionários certificados, modelos prontos para diversos objetivos:</h4>
                  </div>

                  <div class="form-filter-search">
                    <form class="form-inline pull-left" >
                      <div class="form-group">
                        <label>Filtrar por área:</label>
                        <select class="form-control quest-select">
                          <option value="001">Avaliação e Saúde de Marcas</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <button class="btn btn-blue-dash-xs">Aplicar</button>
                      </div>
                    </form>

                    <form class="form-inline pull-right" >
                      <div class="form-group">
                        <input type="search" placeholder="Pesquisar" class="search-field">
                        <span class="icon dripicons-search gray-dark"></span>
                      </div>
                    </form>

                    <div class="clearfix"></div>
                  </div>

                  <hr>

                  <div class="quest-panel">

                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="../assets/img/dashboard/libimg_A.jpg" alt="library">
                          <div class="spacing"></div>
                          <div class="caption">
                            <h3>LinkNow for Digital&reg; <i class="icon-verified">ola</i></h3>
                            <div class="spacing"></div>
                            <p>
                              Know if your digital ads are strong enough to run. Test ads in a day with Millward Brown's validated copy testing solution. Use these insights to optimise your communication planning strategies.
                            </p>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <ul class="list-inline links">
                              <li><a href="#"><span class="icon dripicons-document-new"></span> Começar projeto</a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-blog" title="Detalhes do projeto"></span></a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-preview" title="Visualizar projeto"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="../assets/img/dashboard/libimg_B.jpg" alt="library">
                          <div class="spacing"></div>
                          <div class="caption">
                            <h3>Pointlogic Commspoint Express <i class="icon-verified">ola</i></h3>
                            <div class="spacing"></div>
                            <p>
                              Learn which media and communication touchpoints are most effective for your brand and category. Use these insights to optimise your communication planning strategies.
                            </p>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <ul class="list-inline links">
                              <li><a href="#"><span class="icon dripicons-document-new"></span> Começar projeto</a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-blog" title="Detalhes do projeto"></span></a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-preview" title="Visualizar projeto"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="../assets/img/dashboard/libimg_C.jpg" alt="library">
                          <div class="spacing"></div>
                          <div class="caption">
                            <h3>BranJuicer FaceTrace&reg; <i class="icon-verified">ola</i></h3>
                            <div class="spacing"></div>
                            <p>
                              FaceTrace&reg; is a BranJuicer's award-winning emotional measurement solution, based on the work of psychologist Paul Eckman, which uses faces to measure emotions simply.
                            </p>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <ul class="list-inline links">
                              <li><a href="#"><span class="icon dripicons-document-new"></span> Começar projeto</a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-blog" title="Detalhes do projeto"></span></a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-preview" title="Visualizar projeto"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <div class="row">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="../assets/img/dashboard/libimg_D.jpg" alt="library">
                          <div class="spacing"></div>
                          <div class="caption">
                            <h3>MMR Impackt Lite <i class="icon-verified"></i></h3>
                            <div class="spacing"></div>
                            <p>
                              The fast track to successul new and revised pack design insights based on established and innovate quantitative techniques. Use these insights to optimise your communication.
                            </p>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <div class="spacing"></div>

                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <ul class="list-inline links">
                              <li><a href="#"><span class="icon dripicons-document-new"></span> Começar projeto</a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-blog" title="Detalhes do projeto"></span></a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-preview" title="Visualizar projeto"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="../assets/img/dashboard/libimg_E.jpg" alt="library">
                          <div class="spacing"></div>
                          <div class="caption">
                            <h3>LinkNow for Digital&reg; <i class="icon-verified">ola</i></h3>
                            <div class="spacing"></div>
                            <p>
                              Know if your digital ads are strong enough to run. Test ads in a day with Millward Brown's validated copy testing solution. Use these insights to optimise your communication planning strategies.
                            </p>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <ul class="list-inline links">
                              <li><a href="#"><span class="icon dripicons-document-new"></span> Começar projeto</a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-blog" title="Detalhes do projeto"></span></a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-preview" title="Visualizar projeto"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                          <img src="../assets/img/dashboard/libimg_F.jpg" alt="library">
                          <div class="spacing"></div>
                          <div class="caption">
                            <h3>Added Value Snapshot <i class="icon-verified"></i></h3>
                            <div class="spacing"></div>
                            <p>
                              Everyone knows brand health is critical today. What's also essential is having a clear character and being culturally vibrant. Asses brand equity, character and cultural VIBE with Snapshot.
                            </p>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <div class="spacing"></div>
                            <ul class="list-inline links">
                              <li><a href="#"><span class="icon dripicons-document-new"></span> Começar projeto</a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-blog" title="Detalhes do projeto"></span></a></li>
                              <li><span class="separate">|</span></li>
                              <li><a href="#"><span class="icon dripicons-preview" title="Visualizar projeto"></span></a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="paginator text-center">
                    <nav aria-label="Page navigation">
                      <ul class="pagination">
                        <li>
                          <a href="#" aria-label="Previous">
                            <span class="icon dripicons-chevron-left"></span>
                          </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li class="active"><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                          <a href="#" aria-label="Next">
                            <span class="icon dripicons-chevron-right"></span>
                          </a>
                        </li>
                      </ul>
                    </nav>
                  </div>

                </div>
              </div>
            </div> -->

          </div>
        </div>

      </div>
    </div>
  </div>
</div>
</div>
<script src="../assets/js/jquery-2.2.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/dashboard.js"></script>
</body>

</html>