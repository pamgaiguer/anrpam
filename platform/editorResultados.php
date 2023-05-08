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
            <li><a href="editorColetores.php"><span class="icon dripicons-direction"></span> Coletores <span class="icon dripicons-chevron-right"></span></a></li>
            <li class="active"><a href="editorResultados.php"><span class="icon dripicons-graph-bar"></span> Resultados</a></li>
            <li class="nav-border-right"><a href="#"><span class="icon dripicons-chevron-right"></span></a></li>
            <li class="pull-right notification-bell"><a href="#"><span class="icon dripicons-bell"><span class="badge">4</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>

<div id="nav-quest-editor">
  <div class="navbar navbar-default">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-12">
          <ul class="nav navbar-nav navbar-left list-unstyled nav-left-results">
            <li><span class="font-12 black-medium">Visualização: </span></li>
            <li><input type="text" class="form-control" id="ic-filtrar" readonly placeholder="fem-18.34-a.b1-co-se"></li>
            <li><input type="text" class="form-control" id="ic-mostrar" readonly placeholder="17/09/16-27/10/16 - Aprovadas"></li>
          </ul>
          <ul class="nav navbar-nav navbar-right nav-tabs itens-list-results">
            <li class="active"><a href="#filter" data-toggle="tab" title="Filtrar"><span class="icon dripicons-experiment"></span><br>Filtrar</a></li>
            <li><a href="#show" data-toggle="tab" title="Mostrar"><span class="icon dripicons-browser"></span><br>Mostrar</a></li>
            <li><a href="#resultSave" data-toggle="tab" title="Salvar"><span class="icon dripicons-bookmark"></span><br>Salvar</a></li>
            <li><a href="#visualizations" data-toggle="tab" title="Visualizações"><span class="icon dripicons-bookmarks"></span><br>Visualizações</a></li>
            <li><a href="#export" data-toggle="tab" title="Exportar"><span class="icon dripicons-export"></span><br>Exportar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="nav-results-options">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="content tab-content">
          <div role="tabpanel" class="tab-pane active" id="filter">
            <div class="form-inline">
              <label for="filterBy">Filtrar por:</label>
              <select name="filterBy" id="filterBy" class="quest-select">
                <option value="1">Perfil demográfico</option>
                <option value="2">Questão</option>
                <option value="3">Coletor</option>
                <option value="4">Termo de Busca</option>
                <option value="5">Período de Coleta</option>
              </select>

              <select name="quest" id="opt-select" class="quest-select" style="display: none;">
                <option value="x">Q4. Qual é o principal fator…</option>
              </select>
            </div>
            <hr>
            <div id="perfilDemografico">
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

              <div class="form-horizontal">
                <div class="form-group">
                  <label class="gray-dark font-15 font-bold">Idade:</label>
                  <div class="slider" id="sliderResultsAgeSample"></div>
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
                  <div class="row">
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
              </div>

            </div>
            <div id="questao" style="display: none">
              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="check1"  checked>
                    <label for="check1">
                      <span class="font-bold">A.</span>
                      Preço
                    </label>
                  </div>
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-power"></span></a>
                </div>
              </div>
              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="check2"  checked>
                    <label for="check2">
                      <span class="font-bold">B.</span>
                      Marca
                    </label>
                  </div>
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-power"></span></a>
                </div>
              </div>
              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="check3"  checked>
                    <label for="check3">
                      <span class="font-bold">C.</span>
                      Sabor
                    </label>
                  </div>
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-power"></span></a>
                </div>
              </div>
              <div class="media" >
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="check4"  disabled>
                    <label for="check4">
                      <span class="font-bold">D.</span>
                      Nenhuma das opções acima
                    </label>
                  </div>
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-power"></span></a>
                </div>
              </div>
            </div>
            <div id="coletor" style="display: none">
              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="collectorMeSeems"  checked>
                    <label for="collectorMeSeems">
                      <span class="font-bold">MeSeems</span>
                      Coletor Fase 1 - Amostra B - Setembro
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="collectorLink">
                    <label for="collectorLink">
                      <span class="font-bold">Link</span>
                      Coletor Fase 1 - Amostra A - Agosto
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div id="termoDeBusca" style="display: none">
              <p class="title">Componha uma expressão utilizando os termos de busca listados abaixo e os operadores <span>e</span>, <span>ou</span> e <span>não</span>.</p>
              <div class="filter-fields">
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="1">(vazio)</option>
                    <option value="2">Não</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Categoria</label>
                  <select name="" id="" class="form-control">
                    <option value="1">Estado Civil</option>
                  </select>
                </div>
                <div class="form-group">
                  <span class="icon dripicons-chevron-right"></span>
                </div>
                <div class="form-group">
                  <label for="">Termo de Busca</label>
                  <select name="" id="" class="form-control">
                    <option value="1">Solteiro</option>
                  </select>
                </div>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="1">E</option>
                    <option value="2">Ou</option>
                    <option value="3">Não</option>
                  </select>
                </div>
              </div>
              <div class="filter-fields">
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="1">(vazio)</option>
                    <option value="2" selected>Não</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Categoria</label>
                  <select name="" id="" class="form-control">
                    <option value="1">Ensino</option>
                  </select>
                </div>
                <div class="form-group">
                  <span class="icon dripicons-chevron-right"></span>
                </div>
                <div class="form-group">
                  <label for="">Termo de Busca</label>
                  <select name="" id="" class="form-control">
                    <option value="1">Superior Incompleto</option>
                  </select>
                </div>
                <div class="form-group">
                  <select name="" id="" class="form-control">
                    <option value="1">E</option>
                    <option value="2">Ou</option>
                    <option value="3">Não</option>
                  </select>
                </div>
              </div>
            </div>
            <div id="periodoColeta" style="display: none">
              <p class="title">
                Período de coleta
              </p>
              <a href="#" class="date">
                17/09/2016 - 27/10/2016 <span class="icon dripicons-calendar"></span>
              </a>
            </div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <a href="#" class="btn btn-blue-dash-md">
              <span class="icon dripicons-plus">Adicionar ao filtro</span>
            </a>

            <hr>

            <p class="font-10 font-bold text-uppercase">Adicionados ao filtro</p>

            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <div class="form-inline filter-choosed">
              <div class="media">
                <div class="media-left media-middle">
                  <label for="pDemografico" class="gray-dark font-regular font-15">Perfil demográfico</label>
                </div>
                <div class="media-body media-middle">
                  <input type="text" class="form-control filters-fields" disabled placeholder="Feminino - 18 a 34 - A, B1 - Centro-Oeste, Sudeste">
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-trash"></span></a>
                </div>
              </div>

              <div class="media">
                <div class="media-left media-middle">
                  <label for="question" class="gray-dark font-regular font-15">Questão</label>
                </div>
                <div class="media-body media-middle">
                  <input type="text" class="form-control filters-fields" disabled placeholder="Q4. Qual é o principal fator de preferência para comprar uma bebida esportiva isotônica?">
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-trash"></span></a>
                </div>
              </div>

              <div class="media">
                <div class="media-left media-middle">
                  <label for="coletor" class="gray-dark font-regular font-15">Coletor</label>
                </div>
                <div class="media-body media-middle">
                  <input type="text" class="form-control filters-fields" disabled placeholder="MeSeems - Coletor Fase 1 - Amostra B - Setembro">
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-trash"></span></a>
                </div>
              </div>

              <div class="media">
                <div class="media-left media-middle">
                  <label for="termoBusca" class="gray-dark font-regular font-15">Termo de Busca</label>
                </div>
                <div class="media-body media-middle">
                  <input type="text" class="form-control filters-fields" disabled placeholder="Estado Civil > Solteiro - E - Não - Ensino > Superior Incompleto">
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-trash"></span></a>
                </div>
              </div>

              <div class="media">
                <div class="media-left media-middle">
                  <label for="pColeta" class="gray-dark font-regular font-15">Período de Coleta</label>
                </div>
                <div class="media-body media-middle">
                  <input type="text" class="form-control filters-fields" disabled placeholder="17/09/16 - 27/10/16">
                </div>
                <div class="media-right media-middle">
                  <a href="#"><span class="icon dripicons-trash"></span></a>
                </div>
              </div>
            </div>

            <div class="filter-expression">
              <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4">
                  <div class="form-group">
                    <label for="expression">Expressão do filtro</label>
                    <input type="text" class="form-control" disabled placeholder="fem-18.34-a.b1-co.se">
                  </div>
                </div>
                <div class="col-md-4"></div>
              </div>
            </div>

            <div class="buttons-filter text-center">
              <a href="#" class="btn btn-white-dash">Cancelar</a>
              <a href="" class="btn btn-blue-dash">Aplicar</a>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="show">
            <div class="show-fields">
              <div class="form-group">
                <label for="">Tipos de resposta</label>
                <select name="" id="" class="form-control">
                  <option value="">Aprovadas</option>
                  <option value="">Pendentes</option>
                  <option value="">Revisão</option>
                  <option value="">Descartadas</option>
                  <option value="">Rejeitadas</option>
                  <option value="">Inválidas</option>
                </select>
                <button class="btn btn-add "><span class="icon dripicons-plus"></span></button>
              </div>
            </div>

            <hr>

            <div class="show-answers">
              <p class="title">Mostrar somente</p>
              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q1.</span>
                      Olá, {FirstName}! Os questionários que você recebe no MeSeems são encomendados por grandes empresas, que buscam opiniões dos seus...
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q2.</span>
                      Qual marca de bebida esportiva isotônica você compra com maior frequência?
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q3.</span>
                      O que você acha legal e te atrai nessa marca? Por favor, responda de forma completa.
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q4.</span>
                      Qual é o principal fator de preferência para comprar uma bebida esportiva isotônica?
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q5.</span>
                      O quanto você concorda com a seguinte afirmação: "Essa nova proposta de bebida esportiva isotônica me transmite que é indicada para atletas e...
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q6.</span>
                      Independentemente se você consome ou não, qual a ocasião que você considera mais apropriada para cada um dos seguintes tipos de embalagem de…
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q7.</span>
                      O que é mais legal desse produto? Por favor, descreva as características que o tornam atraente para você.
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q8.</span>
                      Qual das 3 propostas faria com que você trocasse a bebida esportiva isotônica que você compra hoje?
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q9.</span>
                      Considerando a sua resposta anterior, explique brevemente o porquê da sua escolha.
                    </label>
                  </div>
                </div>
              </div>

              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkqt1">
                    <label for="checkqt1">
                      <span>Q10.</span>
                      Para finalizar, tire uma foto do momento onde você costuma beber bebida isotônica. ATENÇÃO: A foto deve ser tirada por você e deve ser possível...
                    </label>
                  </div>
                </div>
              </div>
            </div>

            <div class="buttons-filter text-center">
              <a href="" class="btn btn-white-dash">Cancelar</a>
              <a href="" class="btn btn-blue-dash">Aplicar</a>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="resultSave">
            modal de salvar filtro na página de modais
          </div>
          <div role="tabpanel" class="tab-pane" id="visualizations">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th>Nome</th>
                  <th>Expressão</th>
                  <th>Criado em <span class="icon dripicons-arrow-thin-down"></span></th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="radio">
                      <input type="radio" name="radio2" id="radio1">
                      <label for="radio1"></label>
                    </div>
                  </td>
                  <td>Consumo Masculino - Millennials - Perfil 3</td>
                  <td>
                    <span class="icon dripicons-experiment"></span> fem-18.34-a.b1-co.se
                    <span class="icon dripicons-browser"></span> 17/09/16-27/10/16 - Aprovadas
                  </td>
                  <td>08/11/16</td>
                  <td>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><span class="icon dripicons-clockwise"></span></a></li>
                      <li><a href="#"><span class="icon dripicons-trash"></span></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="radio">
                      <input type="radio" name="radioResults" id="radio2" checked>
                      <label for="radio2"></label>
                    </div>
                  </td>
                  <td><span class="font-bold">Consumo Masculino - Millennials - Perfil 3</span></td>
                  <td>
                    <span class="icon dripicons-experiment"></span> fem-18.34-a.b1-co.se
                    <span class="icon dripicons-browser"></span> 17/09/16-27/10/16 - Aprovadas
                  </td>
                  <td>08/11/16</td>
                  <td>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><span class="icon dripicons-clockwise"></span></a></li>
                      <li><a href="#"><span class="icon dripicons-trash"></span></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="radio">
                      <input type="radio" name="radioResults" id="radio3">
                      <label for="radio3"></label>
                    </div>
                  </td>
                  <td>Consumo Masculino - Millennials - Perfil 3</td>
                  <td>
                    <span class="icon dripicons-experiment"></span> fem-18.34-a.b1-co.se
                    <span class="icon dripicons-browser"></span> 17/09/16-27/10/16 - Aprovadas
                  </td>
                  <td>08/11/16</td>
                  <td>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><span class="icon dripicons-clockwise"></span></a></li>
                      <li><a href="#"><span class="icon dripicons-trash"></span></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="radio">
                      <input type="radio" name="radioResults" id="radio4">
                      <label for="radio4"></label>
                    </div>
                  </td>
                  <td>Consumo Masculino - Millennials - Perfil 3</td>
                  <td>
                    <span class="icon dripicons-experiment"></span> fem-18.34-a.b1-co.se
                    <span class="icon dripicons-browser"></span> 17/09/16-27/10/16 - Aprovadas
                  </td>
                  <td>08/11/16</td>
                  <td>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><span class="icon dripicons-clockwise"></span></a></li>
                      <li><a href="#"><span class="icon dripicons-trash"></span></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="radio">
                      <input type="radio" name="radioResults" id="radio5">
                      <label for="radio5"></label>
                    </div>
                  </td>
                  <td>Consumo Masculino - Millennials - Perfil 3</td>
                  <td>
                    <span class="icon dripicons-experiment"></span> fem-18.34-a.b1-co.se
                    <span class="icon dripicons-browser"></span> 17/09/16-27/10/16 - Aprovadas
                  </td>
                  <td>08/11/16</td>
                  <td>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><span class="icon dripicons-clockwise"></span></a></li>
                      <li><a href="#"><span class="icon dripicons-trash"></span></a></li>
                    </ul>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="radio">
                      <input type="radio" name="radioResults" id="radio6">
                      <label for="radio6"></label>
                    </div>
                  </td>
                  <td>Consumo Masculino - Millennials - Perfil 3</td>
                  <td>
                    <span class="icon dripicons-experiment"></span> fem-18.34-a.b1-co.se
                    <span class="icon dripicons-browser"></span> 17/09/16-27/10/16 - Aprovadas
                  </td>
                  <td>08/11/16</td>
                  <td>
                    <ul class="list-inline list-unstyled">
                      <li><a href="#"><span class="icon dripicons-clockwise"></span></a></li>
                      <li><a href="#"><span class="icon dripicons-trash"></span></a></li>
                    </ul>
                  </td>
                </tr>
              </tbody>
            </table>
            <div class="buttons-filter text-center">
              <a href="" class="btn btn-white-dash">Cancelar</a>
              <a href="" class="btn btn-blue-dash">Aplicar</a>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="export">
            <div class="form-inline">
              <div class="form-group">
                <label for="exportFilter">Exportar:</label>
                <select name="" id="exportFilter" class="form-control">
                  <option value="0">Resumo</option>
                  <option value="0">Todas as respostas</option>
                </select>
              </div>
            </div>

            <hr>

            <p class="font-15 font-bold">Selecione o formato</p>

            <div class="export-types">
              <figure>
                <img src="../assets/img/dashboard/ic_pdf.png" srcset="../assets/img/dashboard/ic_pdf@2x.png 2x,../assets/img/dashboard/ic_pdf@3x.png 3x " alt="">
                <figcaption>Compartilhamento <br>e impressão</figcaption>
              </figure>

              <figure>
                <img src="../assets/img/dashboard/ic_ppt.png" srcset="../assets/img/dashboard/ic_ppt@2x.png 2x,../assets/img/dashboard/ic_ppt@3x.png 3x " alt="">
                <figcaption>Apresentação no <br> Microsoft Power Point</figcaption>
              </figure>

              <figure>
                <img src="../assets/img/dashboard/ic_xls.png" srcset="../assets/img/dashboard/ic_xls@2x.png 2x,../assets/img/dashboard/ic_xls@3x.png 3x " alt="">
                <figcaption>Planilha no <br>Microsoft Excel</figcaption>
              </figure>

              <figure class="active">
                <img src="../assets/img/dashboard/ic_spss.png" srcset="../assets/img/dashboard/ic_spss@2x.png 2x,../assets/img/dashboard/ic_spss@3x.png 3x " alt="">
                <figcaption>IBM SPSS - IBM <br> Analytics</figcaption>
              </figure>
            </div>

            <hr>

            <div class="form-horizontal">
              <div class="radio">
                <input type="radio" name="radio2" id="radioVisualization" value="option2" checked>
                <label for="radioVisualization">
                  Visualização atual
                </label>
              </div>

              <div class="radio">
                <input type="radio" name="radio2" id="radioOriginal" value="option2">
                <label for="radioOriginal">
                  Original
                </label>
              </div>
            </div>

            <div class="buttons-filter text-center">
              <a href="#" class="btn btn-white-dash">Cancelar</a>
              <a href="" class="btn btn-blue-dash">Exportar</a>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12"">
        <div class="page-content">
          <div class="results-page">
            <?php include '_resultsPage1.php';?>
            <?php include '_resultsPage2.php';?>
            <?php include '_resultsPage3.php';?>
            <?php include '_resultsPage4.php';?>
            <?php include '_resultsPage5.php';?>
            <?php include '_resultsPage6.php';?>
            <?php include '_resultsPage7.php';?>
            <?php include '_resultsPage8.php';?>
          </div><!-- /results-page -->
        </div><!-- /page-content -->
      </div>
    </div>
  </div>
</div>
<script src="../assets/js/jquery-2.2.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jscolor.min.js"></script>
<script src="../assets/js/jqcloud.min.js"></script>
<script src="../assets/js/nouislider.min.js"></script>
<script src="../assets/js/dashboard.js"></script>
<script>
  $(document).ready(function(){

    var words = [
    {text: "Hidratração", weight: 13},
    {text: "Morango-Maracujá", weight: 10.5},
    {text: "Limão", weight: 9.4},
    {text: "Laranja", weight: 9.4},
    {text: "Sais Minerais", weight: 8},
    {text: "Carboidrato", weight: 8},
    {text: "Refrescante", weight: 6},
    {text: "Saboroso", weight: 6},
    ];

    $('#keywords').jQCloud(words);

    var ageSlider = document.getElementById('sliderResultsAgeSample');
    noUiSlider.create(ageSlider, {
      start: [25, 39],
      connect: true,
      range: {
        'min': 0,
        'max': 100
      }
    });

    $("#filterBy").change(function(){
      switch($(this).val()){
        case "1": $("#perfilDemografico").show(); $("#questao").hide(); $("#opt-select").hide(); $("#coletor").hide(); $("#termoDeBusca").hide();  $("#periodoColeta").hide(); break;
        case "2": $("#perfilDemografico").hide(); $("#questao").show(); $("#opt-select").show(); $("#coletor").hide(); $("#termoDeBusca").hide();  $("#periodoColeta").hide(); break;
        case "3": $("#perfilDemografico").hide(); $("#questao").hide(); $("#opt-select").hide(); $("#coletor").show(); $("#termoDeBusca").hide();  $("#periodoColeta").hide(); break;
        case "4": $("#perfilDemografico").hide(); $("#questao").hide(); $("#opt-select").hide(); $("#coletor").hide(); $("#termoDeBusca").show();  $("#periodoColeta").hide(); break;
        case "5": $("#perfilDemografico").hide(); $("#questao").hide(); $("#opt-select").hide(); $("#coletor").hide(); $("#termoDeBusca").hide();  $("#periodoColeta").show(); break;
        default: break;
      }
    });

  });
</script>
</body>
</html>