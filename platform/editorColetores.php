<?php include 'includes/header.php';?>

<div id="nav-content-wrapper">
  <nav class="navbar navbar-default" id="navbar-editor">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-3">
          <div id="links-left">
            <a href="#menu-toggle" class="btn pull-left" id="menu-toggle"><i class="fa fa-navicon"></i></a>
            <ul class="nav navbar-nav" id="title-project">
              <li class="active"><a href="#">Projeto novo produto</a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-lg-9">
          <ul class="nav navbar-nav navbar-right" id="links-right">
            <li class="nav-border-left"><a href="#"><span class="icon dripicons-chevron-left"></span></a></li>
            <li><a href="editorResumo.php"><span class="icon dripicons-article"></span> Resumo <span class="icon dripicons-chevron-right"></span></a></li>
            <li><a href="editorQuestionario.php"><span class="icon dripicons-document-edit"></span> Editor de Questionário <span class="icon dripicons-chevron-right"></span></a></li>
            <li class="active"><a href="editorColetores.php"><span class="icon dripicons-direction"></span> Coletores <span class="icon dripicons-chevron-right"></span></a></li>
            <li><a href="editorResultados.php"><span class="icon dripicons-graph-bar"></span> Resultados</a></li>
            <li class="nav-border-right"><a href="#"><span class="icon dripicons-chevron-right"></span></a></li>
            <li class="pull-right notification-bell"><a href="#"><span class="icon dripicons-bell"><span class="badge">4</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>

<div id="page-content-wrapper">
  <div class="collectors-page">
    <div class="page-content">

      <table class="table table-collector">
        <thead>
          <tr>
            <th>Nome</th>
            <th>Coletor</th>
            <th>Respostas</th>
            <th>
              Criado em <span class="icon dripicons-arrow-thin-down"></span>
            </th>
            <th>Status</th>
            <th>Ações</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Coletor Fase 1 - Amostra B - Setembro</td>
            <td>MeSeems</td>
            <td>1.334</td>
            <td>27/09/16</td>
            <td>
              <label class="switch">
                <input type="checkbox" id="toggle1" checked>
                <div class="slider-switch round"></div>
                <label for="toggle1" class="switch-label">Ativo</label>
              </label>
            </td>
            <td>
              <a href="#"><span class="icon dripicons-trash"></span></a>
              <ul class="list-unstyled list-inline pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon dripicons-archive"></span> Mover para pasta</a></li>
                    <li><a href="#"><span class="icon dripicons-user-group"></span> Compartilhar</a></li>
                    <li><a href="#"><span class="icon dripicons-trash"></span> Deletar</a></li>
                  </ul>
                </li>
              </ul>
            </td>
          </tr>
          <tr>
            <td>Coletor Fase 2 - Amostra A - Agosto</td>
            <td>Link</td>
            <td>348</td>
            <td>18/08/16</td>
            <td>
              <label class="switch">
                <input type="checkbox" id="toggle2" checked>
                <div class="slider-switch round"></div>
                <label for="toggle2" class="switch-label">Ativo</label>
              </label>
            </td>
            <td>
              <a href="#"><span class="icon dripicons-trash"></span></a>
              <ul class="list-unstyled list-inline pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon dripicons-archive"></span> Mover para pasta</a></li>
                    <li><a href="#"><span class="icon dripicons-user-group"></span> Compartilhar</a></li>
                    <li><a href="#"><span class="icon dripicons-trash"></span> Deletar</a></li>
                  </ul>
                </li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>

      <div class="spacing"></div>
      <div class="spacing"></div>
      <div class="spacing"></div>

      <p class="text-uppercase font-10 font-bold gray-dark">
        <span class="icon dripicons-plus"></span>
        <span class="icon dripicons-direction"></span> Adicionar coletor
      </p>

      <div class="spacing"></div>
      <div class="spacing"></div>

      <div class="panel-collectors">
        <div class="panel panel-default">
          <div class="panel-body">

            <p class="font-15 font-bold">1. Selecione o coletor</p>
            <div class="spacing"></div>

            <ul class="nav nav-pills">
              <li>
                <a href="#link" class="text-center" data-toggle="tab">
                  <span class="icon dripicons-link"></span>
                  <p class="font-15 font-bold">Link</p>
                </a>
              </li>

              <li class="active">
                <a href="#meseems" class="text-center" data-toggle="tab">
                  <span class="icon dripicons-user-group"></span>
                  <p class="font-15 font-bold">
                    Painel de Pessoas <i class="icon-verified"></i>
                  </p>
                </a>
              </li>

              <li>
                <a href="#geoloc" class="text-center" data-toggle="tab">
                  <span class="icon dripicons-location"></span>
                  <p class="font-15 font-bold">Geolocalizada</p>
                </a>
              </li>

              <li>
                <a href="#email" class="text-center" data-toggle="tab">
                  <p class="font-40">@</p>
                  <p class="font-15 font-bold">E-mail</p>
                </a>
              </li>

              <li>
                <a href="#html" class="text-center" data-toggle="tab">
                  <p class="font-40">
                    &#60; &#8725; &#62;
                  </p>
                  <p class="font-15 font-bold">HTML</p>
                </a>
              </li>
            </ul>

            <div class="tab-content">
              <div class="tab-pane" id="link">
                <hr>
                <p class="font-15 font-bold">2. Crie um nome</p>
                <div class="spacing"></div>
                <p class="gray-dark font-15 collector-name" contenteditable="true">
                  Coletor Fase 2 - Amostra A - Outubro
                  <span class="icon dripicons-pencil"></span>
                </p>

                <hr>
                <p class="font-15 font-bold">3. Selecione o prazo da coleta</p>
                <p class="period">
                  <a href="#">
                    04/10/16/ - 28/10/16
                    <span class="icon dripicons-calendar"></span>
                  </a>
                </p>
                <hr>
                <p class="font-15 font-bold">4. Configure as permissões</p>
                <div class="spacing"></div>

                <label class="switch">
                  <input type="checkbox" id="checkPermission" name="checkLink" checked>
                  <div class="slider-switch round"></div>
                </label>
                <label for="checkPermission" class="switch-label-inline-block">Permitir mais de uma resposta por device</label>
                <div class="clearfix"></div>

                <label class="switch">
                  <input type="checkbox" id="checkAnonymous" name="checkLink">
                  <div class="slider-switch round"></div>
                </label>
                <label for="checkAnonymous" class="switch-label-inline-block">Respostas anônimas</label>
                <div class="clearfix"></div>

                <label class="switch">
                  <input type="checkbox" id="checkPassword" name="checkLink" checked>
                  <div class="slider-switch round"></div>
                </label>
                <label for="checkPassword" class="switch-label-inline-block">Requisitar senha</label>
                <div class="clearfix"></div>

                <div class="row">
                  <div class="form-group col-md-4">
                    <input type="text" class="form-control" value="jyk293">
                  </div>
                  <div class="col-md-1">
                    <i class="icon-checked"></i>
                  </div>
                  <div class="col-md-1">
                    <i class="icon-error"></i>
                  </div>
                </div>
                <div class="spacing"></div>
                <div class="spacing"></div>
                <div class="spacing"></div>
                <div class="text-center">
                  <button class="btn btn-blue-dash">gerar coletor</button>
                </div>
              </div>

              <div class="tab-pane active" id="meseems">
                <div class="alert alert-warning alert-blue-dash alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                  <strong>MeSeems</strong> é um painel proprietário com mais de 200 mil pessoas registradas no Brasil e prontas para responder suas pesquisas.
                  <br> Você pode escolher exatamente o perfil de pessoas que mais importam para sua pesquisa.
                  <a href="#">
                    <span class="text-uppercase font-bold">Saiba Mais</span>
                  </a>
                </div>
                <hr>
                <div>
                  <p class="font-15 font-bold">2. Crie um nome</p>
                  <div class="spacing"></div>
                  <p class="gray-dark font-15 collector-name" contenteditable="true">
                    Coletor Fase 2 - Amostra A - Outubro
                    <span class="icon dripicons-pencil"></span>
                  </p>
                </div>
                <hr>
                <div>
                  <p class="font-15 font-bold">3. Selecione o prazo da coleta</p>
                  <p class="period">
                    <a href="#">
                      04/10/16/ - 28/10/16
                      <span class="icon dripicons-calendar"></span>
                    </a>
                  </p>
                </div>
                <hr>

                <p class="font-15 font-bold">4. Simule ou contrate uma amostra</p>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingOne">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <dl class="dl-horizontal">
                          <dt>Tamanho da amostra</dt>
                          <dd>300</dd>
                        </dl>
                      </a>
                    </div>

                    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                      <p class="font-15">Selecione a quantidade de respondentes que você deseja entrevistar:</p>
                      <div class="spacing"></div>
                      <div class="spacing"></div>
                      <div class="spacing"></div>

                      <div class="panel-body">
                        <div class="slider-section">
                          <div class="col-md-1">
                            <p class="label-slider">0</p>
                          </div>

                          <div class="col-md-10">
                            <div class="slider" id="sliderSizeSample"></div>
                          </div>

                          <div class="col-md-1">
                            <select name="" id="" class="quest-select">
                              <option value="00">0</option>
                              <option value="00">1000</option>
                            </select>
                          </div>
                          <div class="clearfix"></div>
                        </div>

                        <div>
                          <input type="text" class="form-control" id="inputSizeSample">
                        </div>

                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="text-center buttons-settings">
                          <button class="btn btn-white-dash">Cancelar</button>
                          <button class="btn btn-blue-dash">Salvar</button>
                        </div>

                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                      </div>
                    </div> <!-- tamanho amostra -->
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading clearfix" role="tab" id="headingTwo">
                      <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <dl class="dl-horizontal">
                          <dt class="text-left">Perfil demográfico</dt>
                          <dd>Brasil - Masculino, Feminino - 25-39 - A,B1, B2, C1 - Sudeste, Centro-Oeste</dd>
                        </dl>
                      </a>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                      <p class="font-15 font-regular">Selecione o perfil do respondente:</p>
                      <div class="spacing"></div>
                      <div class="spacing"></div>
                      <div class="spacing"></div>

                      <div class="panel-body">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-md-4">
                              <select class="quest-select" style="width: 220px;">
                                <option value="001">Brasil</option>
                                <option value="002">Estados Unidos</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <hr>

                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Gênero:</label>
                            <div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkFem"  name="checkGen" checked>
                                <label for="checkFem">Feminino</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkMas" name="checkGen" >
                                <label for="checkMas">Masculino</label>
                              </div>

                              <div class="radio">
                                <input type="radio" name="checkGen" id="checkGenAll" value="checkGenAll">
                                <label for="checkGenAll">
                                  Todos
                                </label>
                              </div>

                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Idade:</label>
                            <div class="slider" id="sliderAgeSample"></div>
                            <div class="text-center">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4"></div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control text-center" value="entre 15 e 39 anos" disabled>
                                  </div>
                                  <div class="col-md-5"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="form-horizontal" >
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Classe:</label>
                            <div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="A">
                                <label for="A">A</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="B1">
                                <label for="B1">B1</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="B2">
                                <label for="B2">B2</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="C1">
                                <label for="C1">C1</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="C2">
                                <label for="C2">C2</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="DE">
                                <label for="DE">D ou E</label>
                              </div>
                            </div>

                              <div class="radio">
                                <input type="radio" name="checkSocial" id="checkSocialAll" value="checkSocialAll">
                                <label for="checkSocialAll">
                                  Todos
                                </label>
                              </div>

                          </div>
                        </div>

                        <hr>

                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Localização:</label>
                            <div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="norte">
                                <label for="norte">Norte</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="nordeste">
                                <label for="nordeste">Nordeste</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="centrooeste">
                                <label for="centrooeste">Centro-Oeste</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="sudeste">
                                <label for="sudeste">Sudeste</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="sul">
                                <label for="sul">Sul</label>
                              </div>
                            </div>

                              <div class="radio">
                                <input type="radio" name="checkLocal" id="checkLocalAll" value="checkLocalAll">
                                <label for="checkLocalAll">
                                  Todos
                                </label>
                              </div>

                            <div class="spacing"></div>
                            <div class="spacing"></div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <select class="quest-select" style="width: 220px">
                                  <option value="001">Estado</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <select class="quest-select" style="width: 220px">
                                  <option value="001">Cidade</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-1">
                              <div class="form-group">
                                <button class="btn btn-add">+</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="text-center buttons-settings">
                          <button class="btn btn-white-dash">Cancelar</button>
                          <button class="btn btn-blue-dash">Salvar</button>
                        </div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                      </div>
                    </div><!-- perfil demográfico -->
                  </div>

                  <div class="panel panel-default">
                    <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          <dl class="dl-horizontal">
                            <dt>Perfil complementar</dt>
                            <dd>Consumo > Alcoólicos > Cerveja</dd>
                          </dl>
                        </a>
                      </h4>
                    </div>

                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <p class="font-15">Selecione o perfil do respondente:</p>
                      <div class="panel-body">
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>

                        <div class="form-inline">
                          <div class="line-profile">
                            <select class="form-control">
                              <option value="00">Consumo</option>
                            </select>

                            <span class="icon dripicons-chevron-right"></span>

                            <select class="form-control">
                              <option value="00">Alcoólicos</option>
                            </select>
                            <span class="icon dripicons-chevron-right"></span>

                            <select class="form-control">
                              <option value="00">Cerveja</option>
                            </select>
                            <a href=""><span class="icon dripicons-trash"></span></a>
                          </div>

                          <div class="spacing"></div>

                          <select class="form-control">
                            <option value="00">E</option>
                            <option value="00">Ou</option>
                          </select>

                          <div class="spacing"></div>
                          <div class="line-profile">
                            <select class="form-control">
                              <option value="00">Consumo</option>
                            </select>

                            <span class="icon dripicons-chevron-right"></span>

                            <select class="form-control">
                              <option value="00">Alcoólicos</option>
                            </select>
                            <span class="icon dripicons-chevron-right"></span>

                            <select class="form-control">
                              <option value="00">Cerveja</option>
                            </select>
                            <a href=""><span class="icon dripicons-trash"></span></a>
                          </div>

                          <div class="spacing"></div>
                          <div class="spacing"></div>
                          <div class="spacing"></div>

                          <button class="btn btn-blue-dash-sm">
                            <span class="icon dripicons-plus"></span> Novo perfil
                          </button>

                          <div class="spacing"></div>
                          <div class="spacing"></div>
                          <div class="spacing"></div>

                          <div class="text-center buttons-settings">
                            <button class="btn btn-white-dash">Cancelar</button>
                            <button class="btn btn-blue-dash">Salvar</button>
                          </div>
                          <div class="spacing"></div>
                          <div class="spacing"></div>
                          <div class="spacing"></div>
                        </div>
                      </div>
                    </div><!-- perfil complementar -->
                  </div>

                  <div class="panel panel-default"> <!-- Cotas -->

                    <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                          <dl class="dl-horizontal">
                            <dt>Cotas</dt>
                            <dd>Sem cotas</dd>
                          </dl>
                        </a>
                      </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                      <p class="font-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>

                      <div class="spacing"></div>
                      <div class="spacing"></div>
                      <div class="spacing"></div>
                      <div class="panel-body">
                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Amostra:</label>

                            <div class="slider-section">
                              <div class="col-md-1">
                                <p class="label-slider">0</p>
                              </div>

                              <div class="col-md-10">
                                <div class="slider" id="sliderSizeSample2"></div>
                              </div>

                              <div class="col-md-1">
                                <select name="" id="" class="quest-select">
                                  <option value="00">0</option>
                                  <option value="00">1000</option>
                                </select>
                              </div>
                              <div class="clearfix"></div>
                            </div>

                            <div>
                              <input type="text" class="form-control" id="inputSizeSample">
                            </div>

                          </div>
                        </div>


                        <hr>

                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Gênero:</label>
                            <div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkFem" checked>
                                <label for="checkFem">Feminino</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="checkMas">
                                <label for="checkMas">Masculino</label>
                              </div>

                              <div class="radio">
                                <input type="radio" name="checkGen" id="checkGenAll" value="checkGenAll">
                                <label for="checkGenAll">
                                  Todos
                                </label>
                              </div>

                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Idade:</label>
                            <div class="slider" id="sliderAgeQuotaSample"></div>
                            <div class="text-center">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-md-4"></div>
                                  <div class="col-md-3">
                                    <input type="text" class="form-control text-center" value="entre 15 e 39 anos" disabled>
                                  </div>
                                  <div class="col-md-5"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="form-horizontal" >
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Classe:</label>
                            <div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="A">
                                <label for="A">A</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="B1">
                                <label for="B1">B1</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="B2">
                                <label for="B2">B2</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="C1">
                                <label for="C1">C1</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="C2">
                                <label for="C2">C2</label>
                              </div>

                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="DE">
                                <label for="DE">D ou E</label>
                              </div>

                              <div class="radio">
                                <input type="radio" name="checkGen" id="checkGenAll" value="checkGenAll">
                                <label for="checkGenAll">
                                  Todos
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>

                        <hr>

                        <div class="form-horizontal">
                          <div class="form-group">
                            <label class="gray-dark font-15 font-bold">Localização:</label>
                            <div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="norte">
                                <label for="norte">Norte</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="nordeste">
                                <label for="nordeste">Nordeste</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="centrooeste">
                                <label for="centrooeste">Centro-Oeste</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="sudeste">
                                <label for="sudeste">Sudeste</label>
                              </div>
                              <div class="checkbox checkbox-primary">
                                <input type="checkbox" id="sul">
                                <label for="sul">Sul</label>
                              </div>
                              <div class="radio">
                                <input type="radio" name="checkGen" id="checkGenAll" value="checkGenAll">
                                <label for="checkGenAll">
                                  Todos
                                </label>
                              </div>
                            </div>

                            <div class="spacing"></div>
                            <div class="spacing"></div>

                            <div class="col-md-3">
                              <div class="form-group">
                                <select class="quest-select" style="width: 220px">
                                  <option value="001">Estado</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="form-group">
                                <select class="quest-select" style="width: 220px">
                                  <option value="001">Cidade</option>
                                </select>
                              </div>
                            </div>
                            <div class="col-md-1">
                              <div class="form-group">
                                <button class="btn btn-add">+</button>
                              </div>
                            </div>

                          </div>
                        </div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="text-center buttons-settings">
                          <button class="btn btn-white-dash">Cancelar</button>
                          <button class="btn btn-blue-dash">Salvar</button>
                        </div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>
                        <div class="spacing"></div>

                      </div>
                    </div>
                  </div>
                </div>
                <hr>
                <p class="font-15 font-bold report-session">
                  5. Se desejar, contrate um Relatório de Análise
                  <i class="icon-verified"></i>
                </p>

                <div class="spacing"></div>
                <div class="spacing"></div>
                <div class="spacing"></div>

                <label class="switch">
                  <input type="checkbox" id="checkReport" checked>
                  <div class="slider-switch round"></div>
                </label>
                <label for="checkReport" class="switch-label-inline-block">Contratar Relatório de Análise</label>
                <div class="clearfix"></div>

                <hr>
                <p class="font-20 font-bold">Seu projeto está pronto para começar</p>
                <ul class="list-unstyled">
                  <li>- Prazo de 5 dias após pagamento</li>
                  <li>- Você receberá um relatório de análise</li>
                  <li>- Após pagamento, o projeto se inicia automaticamente</li>
                </ul>
                <div class="form-inline form-budget">
                  <div class="pull-left">
                    <span>
                      <i class="icon-circle bg-red-dash"></i>
                      Esperando pagamento
                    </span>
                  </div>
                  <div class="pull-right">
                    <label for="budget">
                      Orçamento
                      <input type="text" class="form-control" value="R$ 3.750,00" disabled>
                    </label>
                    <button class="btn btn-blue-dash">Solicitar boleto</button>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="geoloc">
                <hr> A ser definido
              </div>
              <div class="tab-pane" id="email">
                <hr> A ser definido
              </div>
              <div class="tab-pane" id="html">
                <hr> A ser definido
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../assets/js/jquery-2.2.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/nouislider.min.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script>
  $(document).ready(function(){
    var sizeSample = document.getElementById('sliderSizeSample');
    noUiSlider.create(sizeSample, {
      start: [10],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var sizeSample2 = document.getElementById('sliderSizeSample2');
    noUiSlider.create(sizeSample2, {
      start: [10],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var ageSlider = document.getElementById('sliderAgeSample');
    noUiSlider.create(ageSlider, {
      start: [25, 39],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    var ageQuotaSlider = document.getElementById('sliderAgeQuotaSample');
    noUiSlider.create(ageQuotaSlider, {
      start: [25, 39],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });
  });

</script>
</body>
</html>