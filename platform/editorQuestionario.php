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
            <li class="active"><a href="editorQuestionario.php"><span class="icon dripicons-document-edit"></span> Editor de Questionário <span class="icon dripicons-chevron-right"></span></a></li>
            <li><a href="editorColetores.php"><span class="icon dripicons-direction"></span> Coletores <span class="icon dripicons-chevron-right"></span></a></li>
            <li><a href="editorResultados.php"><span class="icon dripicons-graph-bar"></span> Resultados</a></li>
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
          <ul class="nav navbar-nav navbar-left list-unstyled">
            <li class="title-quest" contenteditable="true">Adicionar título do questionário </li> <span class="icon dripicons-pencil"></span>
          </ul>
          <ul class="nav navbar-nav navbar-right nav-tabs itens-list-results">
            <li  class="active"><a href="#options" data-toggle="tab" title="Opções"><span class="icon dripicons-scale"></span><br>Opções</a></li>
            <li><a href="#layout" data-toggle="tab" title="Layout"><span class="icon dripicons-brush"></span><br>Layout</a></li>
            <li><a href="#flow" data-toggle="tab" title="Fluxo"><span class="icon dripicons-network-3"></span><br>Fluxo</a></li>
            <li><a href="#save" data-toggle="tab" title="Salvar Versões"><span class="icon dripicons-download"></span><br>Salvar versões</a></li>
            <li><a href="#" title="Pré-visualizar"><span class="icon dripicons-preview"></span><br>Pré-visualizar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="nav-quest-editor-options">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="content tab-content">
          <div role="tabpanel" class="tab-pane active" id="options">
            <div>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <div class="spacing"></div>

              <label class="switch">
                <input type="checkbox" id="toggle1">
                <div class="slider-switch round"></div>
              </label>
              <label for="toggle1" class="switch-label-inline-block">Mostrar número das perguntas</label>
              <div class="clearfix"></div>

              <label class="switch">
                <input type="checkbox" id="toggle2">
                <div class="slider-switch round"></div>
              </label>
              <label for="toggle2" class="switch-label-inline-block">Mostrar letra das alternativas</label>
              <div class="clearfix"></div>

              <label class="switch">
                <input type="checkbox" id="toggle3">
                <div class="slider-switch round"></div>
              </label>
              <label for="toggle3" class="switch-label-inline-block">Permitir voltar à questão anterior</label>
              <div class="clearfix"></div>

              <label class="switch">
                <input type="checkbox" id="toggle4">
                <div class="slider-switch round"></div>
              </label>
              <label for="toggle4" class="switch-label-inline-block">Auto-avançar quando responder</label>
              <div class="clearfix"></div>

            </div>
            <div class="buttons-settings text-center">
              <a href="#" class="btn btn-white-dash">Cancelar</a>
              <a href="#" class="btn btn-blue-dash">Salvar</a>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="layout">
            <div class="row">
              <div class="col-md-6">
                <p class="layout-title">Imagens</p>
                <div class="thumbs">
                  <div class="col-md-4">
                    <p class="layout-subtitle">Logo do projeto</p>
                    <div class="figure-img-display">
                      <p>
                        <span class="icon dripicons-cloud-upload"></span>
                        <br>
                        Arraste e solte <br>ou <a href="#">carregar</a>
                      </p>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <p class="layout-subtitle">Imagem de fundo</p>
                    <div class="figure-img-display">
                      <p>
                        <span class="icon dripicons-cloud-upload"></span>
                        <br>
                        Arraste e solte <br>ou <a href="#">carregar</a>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <p class="layout-title">Cores</p>
                <div class="col-md-4">
                  <table class="table table-responsive table-colors">
                    <tbody>
                      <tr>
                        <td class="layout-subtitle">Fundo</td>
                        <td><button class="jscolor {valueElement:null,value:'FFFFFF'} form-control-button"></button></td>
                      </tr>
                      <tr>
                        <td class="layout-subtitle">Cabeçalho</td>
                        <td><button class="jscolor {valueElement:null,value:'FFFFFF'} form-control-button"></button></td>
                      </tr>
                      <tr>
                        <td class="layout-subtitle">Rodapé</td>
                        <td><button class="jscolor {valueElement:null,value:'FFFFFF'} form-control-button"></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <div class="col-md-5">
                  <table class="table table-responsive">
                    <tbody>
                      <tr>
                        <td class="layout-subtitle">Botão Avançar: </td>
                        <td><button class="jscolor {valueElement:null,value:'00DFB3'} form-control-button"></button></td>
                      </tr>
                      <tr>
                        <td class="layout-subtitle">Botão Voltar: </td>
                        <td><button class="jscolor {valueElement:null,value:'FA2834'} form-control-button"></button></td>
                      </tr>
                      <tr>
                        <td class="layout-subtitle">Botão Concluir: </td>
                        <td><button class="jscolor {valueElement:null,value:'0EC2E9'} form-control-button"></button></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </div>

            <hr>
            <div class="fonts">
              <p class="layout-title">Fontes</p>
              <table class="table table-fonts">
                <tbody>
                  <tr>
                    <td class="font-12">Título da página</td>
                    <td>
                      <select class="quest-select">
                        <option value="000">Lato</option>
                      </select>
                    </td>
                    <td>
                      <select class="quest-select">
                        <option value="000">12px</option>
                      </select>
                    </td>
                    <td><button class="jscolor {valueElement:null,value:'464C58'} form-control-button"></button></td>
                    <td><a href="#"><span class="icon dripicons-bold"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-italic"></span></a></td>
                    <td><a href="#"><span><u>U</u></span></a></td>

                    <td><a href="#"><span class="icon dripicons-align-left"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-center"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-right"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-justify"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-list"></span></a></td>
                  </tr>
                  <tr>
                    <td class="font-17">Texto da pergunta</td>
                    <td>
                      <select class="quest-select">
                        <option value="000">Lato</option>
                      </select>
                    </td>
                    <td>
                      <select class="quest-select">
                        <option value="000">12px</option>
                      </select>
                    </td>
                    <td><button class="jscolor {valueElement:null,value:'464C58'} form-control-button"></button></td>
                    <td><a href="#"><span class="icon dripicons-bold"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-italic"></span></a></td>
                    <td><a href="#"><span><u>U</u></span></a></td>

                    <td><a href="#"><span class="icon dripicons-align-left"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-center"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-right"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-justify"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-list"></span></a></td>
                  </tr>
                  <tr>
                    <td class="font-15">Texto da resposta</td>
                    <td>
                      <select class="quest-select">
                        <option value="000">Lato</option>
                      </select>
                    </td>
                    <td>
                      <select class="quest-select">
                        <option value="000">12px</option>
                      </select>
                    </td>
                    <td><button class="jscolor {valueElement:null,value:'464C58'} form-control-button"></button></td>
                    <td><a href="#"><span class="icon dripicons-bold"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-italic"></span></a></td>
                    <td><a href="#"><span><u>U</u></span></a></td>

                    <td><a href="#"><span class="icon dripicons-align-left"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-center"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-right"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-align-justify"></span></a></td>
                    <td><a href="#"><span class="icon dripicons-list"></span></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
            <hr>
            <p class="layout-title">Temas</p>
            <div class="theme-gallery-container">
              <figure class="figure">
                <img class="figure-img active img-rounded" src="../assets/img/dashboard/tema_01.jpg" alt="" />
                <span class="badge badge-figure"><i class="fa fa-check" aria-hidden="true"></i></span>
                <figcaption class="figure-caption" contenteditable="true">Padrão</figcaption>
              </figure>
              <figure class="figure">
                <img class="figure-img img-rounded" src="../assets/img/dashboard/tema_02.jpg" alt="" />
                <figcaption class="figure-caption" contenteditable="true">Negative</figcaption>
              </figure>
              <figure class="figure">
                <img class="figure-img img-rounded" src="../assets/img/dashboard/tema_03.jpg" alt="" />
                <figcaption class="figure-caption" contenteditable="true">Journal</figcaption>
              </figure>
              <figure class="figure">
                <img class="figure-img img-rounded" src="../assets/img/dashboard/tema_04.jpg" alt="" />
                <figcaption class="figure-caption" contenteditable="true">Black</figcaption>
              </figure>

              <figure class="figure">
                <div class="fig-img-display"><p><span class="icon dripicons-download"></span><br><a href="#">Salvar</a><br>atual</p></div>
              </figure>
            </div>
            <div class="clearfix"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="buttons-settings text-center">
              <a href="#" class="btn btn-white-dash">Cancelar</a>
              <a href="#" class="btn btn-blue-dash">Salvar</a>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="flow">
            <div class="row">
              <div class="col-md-6">
                <p class="font-12">Selecione ou arraste a pergunta que você deseja mover ou copiar:</p>

                <div class="media-flow">
                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ1"  checked>
                        <label for="checkQ1">
                          <span class="font-bold">Q1.</span> Assinale a alternativa que for mais verdadeira par você: "Quando...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkbox2"  checked>
                        <label for="checkbox2">
                          <span class="font-bold">Q2.</span> Nas refeições que você faz <span class="font-bold">fora</span> de casa, <span class="font-bold">aos sábados e domingos...</span>
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ2">
                        <label for="checkQ2">
                          <span class="font-bold">Q3.</span> Em média, quantas vezes por dia você come alguma coisa? Por...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ3">
                        <label for="checkQ3">
                          <span class="font-bold">Q4.</span> De <span class="font-bold">segunda a sexta</span>, quantas refeições (ex: almoço, jantar)...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ5">
                        <label for="checkQ5">
                          <span class="font-bold">Q5.</span> Na sua opinião, você mudou a frequência de refeições que faz...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ6"  checked>
                        <label for="checkQ6">
                          <span class="font-bold">Q6.</span> Assinale a alternativa que for mais verdadeira para você: "Quando...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ7"  checked>
                        <label for="checkQ7">
                          <span class="font-bold">Q7.</span> Onde você costuma comprar os alimentos que consome na sua casa?
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ8"  checked>
                        <label for="checkQ8">
                          <span class="font-bold">Q8.</span> Você tem o hábito de pedir comida em casa (<em>delivery</em>)?
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ9"  checked>
                        <label for="checkQ9">
                          <span class="font-bold">Q9.</span> Sobre os seus hábitos e restrições alimentares, assinale a alternativa...
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkQ10"  checked>
                        <label for="checkQ10">
                          <span class="font-bold">Q10.</span> Você possui algum tipo de transtorno ou alergia alimentar? Qual(is)?
                        </label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-inline">
                  <select class="select-question">
                    <option value="">Copiar</option>
                  </select>
                  <label class="font-12 font-regular">para</label>
                  <select class="margin-left-10 select-question">
                    <option value="">após</option>
                  </select>
                  <label class="font-12 font-regular">da</label>
                </div>

                <div class="spacing"></div>
                <div class="spacing"></div>

                <div class="form-inline">
                  <select class="select-question">
                    <option value="">Q8. Você tem o hábito de pedir comida em casa (<em>delivery</em>)?</option>
                  </select>
                  <button class="btn btn-blue-dash-xs">OK</button>
                </div>
                <hr>

                <div class="buttons-settings text-center">
                  <a href="#" class="btn btn-white-dash">Cancelar</a>
                  <a href="#" class="btn btn-blue-dash">Salvar</a>
                </div>

              </div>
              <div class="col-md-6">
                <div id="flowchart">
                  <p>inserir Diagrama</p>
                </div>

              </div>
            </div>
          </div>
          <div role="tabpanel" class="tab-pane" id="save">
            <table class="table table-responsive table-save">
              <thead>
                <tr>
                  <th class="text-uppercase">Versão</th>
                  <th class="text-uppercase">Editor</th>
                  <th class="text-uppercase">Data</th>
                  <th class="text-uppercase">Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Versão 4 (v4)</td>
                  <td>Renato Chu</td>
                  <td>20/06/16</td>
                  <td>Reverter <a href="#"><span class="icon dripicons-preview"></span></a></td>
                </tr>
                <tr>
                  <td>Versão 3 (v3)</td>
                  <td>Lucas Melo</td>
                  <td>20/06/16</td>
                  <td>Reverter <a href="#"><span class="icon dripicons-preview"></span></a></td>
                </tr>
                <tr>
                  <td>Versão 2 (v2)</td>
                  <td>Renato Chu</td>
                  <td>20/06/16</td>
                  <td>Reverter <a href="#"><span class="icon dripicons-preview"></span></a></td>
                </tr>
                <tr>
                  <td>Versão 1 (v1)</td>
                  <td>Renato Chu</td>
                  <td>20/06/16</td>
                  <td>Reverter <a href="#"><span class="icon dripicons-preview"></span></a></td>
                </tr>
              </tbody>
            </table>

            <div class="buttons-settings text-center">
              <a href="#" class="btn btn-white-dash">Cancelar</a>
              <a href="#" class="btn btn-blue-dash">Salvar</a>
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
        <div class="page-container">
          <div class="questionnaireEditor">
            <div class="page-infos">
              <div class="panel" draggable="true">
                <div class="media">
                  <div class="media-left media-middle">
                    P1
                  </div>
                  <div class="media-body media-middle">
                    <p class="page-title" contenteditable="true">Adicionar título da página <span class="icon dripicons-pencil"></span> </p>
                    <div class="media-right media-middle">
                      <p><a href="#"><span class="icon dripicons-copy" data-toggle="tooltip" data-placement="bottom" title="Copiar"></span></a></p>
                      <p><a href="#"><span class="icon dripicons-trash" data-toggle="tooltip" data-placement="bottom" title="Apagar"></span></a></p>
                      <p><a href="#"><span class="icon dripicons-chevron-up"></span></a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel question-type" draggable="true">
              <div class="media">
                <div class="media-left media-middle">
                  Q1
                </div>
                <div class="media-body media-middle">
                  <select name="options" class="quest-select">
                    <option value="x">Escolher tipo de pergunta</option>
                    <option value="0">Resposta Única</option>
                    <option value="0">Resposta Múltipla</option>
                    <option value="2">Resposta Aberta</option>
                    <option value="5">Matriz de Resposta Única</option>
                    <option value="5">Matriz de Resposta Múltipla</option>
                    <option value="6">Ranqueamento</option>
                    <option value="4">Coleta de imagem</option>
                  </select>
                  <div class="media-right media-middle">
                    <p><a href="#"><span class="icon dripicons-copy" data-toggle="tooltip" data-placement="bottom" title="Copiar"></span></a></p>
                    <p><a href="#"><span class="icon dripicons-trash" data-toggle="tooltip" data-placement="bottom" title="Apagar"></span></a></p>
                    <p><a href="#" class="gray-dark"><span class="icon dripicons-chevron-up"></span></a></p>
                  </div>
                </div>
              </div>
            </div>
            <ul class="nav nav-pills nav-stacked" role="tablist" id="question-change">
              <li title="Editor de Texto" class="active"><a href="#question-text" data-toggle="tab"><span class="icon dripicons-pencil"></span></a></li>
              <li title="Editor de Imagens"><a href="#question-image" data-toggle="tab"><span class="icon dripicons-photo-group"></span></a></li>
              <li title="Opções"><a href="#question-settings" data-toggle="tab"><span class="icon dripicons-scale"></span></a></li>
              <li title="Lógica"><a href="#question-logic" data-toggle="tab"><span class="icon dripicons-network-2"></span></a></li>
              <li title="Embaralhamento" ><a href="#question-mixes" data-toggle="tab"><span class="icon dripicons-media-shuffle"></span></a></li>
            </ul>
            <div class="tab-content">
              <div class="question-group tab-pane in active" id="question-text">
                <div class="questions">
                  <div class="panel question-title" contenteditable="true">
                    Adicionar texto da pergunta
                  </div>
                  <div class="panel question-title-format-options">
                    <div class="form-inline">
                      <select name="" id="" class="quest-select">
                        <option value="01">Lato</option>
                      </select>

                      <select name="" id="" class="quest-select">
                        <option value="10">10px</option>
                        <option value="12">12px</option>
                        <option value="15">15px</option>
                      </select>

                      <select name="" id="" class="quest-select">
                        <option value="400">Regular</option>
                        <option value="500">Medium</option>
                        <option value="700">Bold</option>
                        <option value="900">Black</option>
                      </select>

                      <button class="jscolor {valueElement:null,value:'464C58'} form-control-button"></button>
                      <a href="#"><span class="icon dripicons-bold"></span></a>
                      <a href="#"><span class="icon dripicons-italic"></span></a>
                      <a href="#"><span class="icon"><u>U</u></span></a>

                      <a href="#"><span class="icon dripicons-align-left"></span></a>
                      <a href="#"><span class="icon dripicons-align-center"></span></a>
                      <a href="#"><span class="icon dripicons-align-right"></span></a>
                      <a href="#"><span class="icon dripicons-align-justify"></span></a>
                      <a href="#"><span class="icon dripicons-list"></span></a>

                    </div>
                  </div>
                  <div class="panel question-alternatives">
                    <div class="media">
                      <div class="media-left media-middle">
                        <span class="icon dripicons-dots-3"></span>
                        <span class="letter-question">A</span>
                        <span class="icon dripicons-document-edit"></span>
                      </div>
                      <div class="media-body media-middle" contenteditable="true">Adicionar texto da resposta
                        <div class="media-right media-middle"><a href="#"><span class="icon dripicons-trash"></span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="panel question-alternatives">
                    <div class="media">
                      <div class="media-left media-middle">
                        <span class="icon dripicons-dots-3"></span>

                        <span class="letter-question">B</span>
                        <span class="icon dripicons-document-edit"></span>
                      </div>
                      <div class="media-body media-middle" contenteditable="true">Adicionar texto da resposta
                        <div class="media-right media-middle"><a href="#"><span class="icon dripicons-trash"></span></a></div>
                      </div>
                    </div>
                  </div>
                  <div class="panel question-alternatives">
                    <div class="media">

                      <div class="media-left media-middle">
                        <span class="icon dripicons-dots-3"></span>
                        <span class="letter-question">C</span>
                        <span class="icon dripicons-document-edit"></span>
                      </div>

                      <div class="media-body media-middle" contenteditable="true">Adicionar texto da resposta
                        <div class="media-right media-middle"><a href="#"><span class="icon dripicons-trash"></span></a></div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="add-question">
                  <button class="btn btn-add">+</button>
                </div>
              </div>
              <div class="question-group tab-pane" id="question-image">
                <div class="image-gallery-container">
                  <figure class="figure">
                    <img class="figure-img img-rounded" src="../assets/img/dashboard/img_01.jpg" alt="">
                    <figcaption class="figure-caption" contenteditable="true">DSC001 <span class="icon dripicons-pencil"></span></figcaption>
                  </figure>
                  <figure class="figure">
                    <img class="figure-img img-rounded" src="../assets/img/dashboard/img_02.jpg" alt="">
                    <figcaption class="figure-caption" contenteditable="true">DSC001 <span class="icon dripicons-pencil"></span></figcaption>
                  </figure>
                  <figure class="figure">
                    <img class="figure-img active img-rounded" src="../assets/img/dashboard/img_03.jpg" alt="">
                    <span class="badge badge-figure"><i class="fa fa-check" aria-hidden="true"></i></span>
                    <figcaption class="figure-caption" contenteditable="true">DSC001 <span class="icon dripicons-pencil"></span></figcaption>
                  </figure>
                  <figure class="figure">
                    <img class="figure-img img-rounded" src="../assets/img/dashboard/img_04.jpg" alt="">
                    <figcaption class="figure-caption" contenteditable="true">DSC001 <span class="icon dripicons-pencil"></span></figcaption>
                  </figure>
                  <div class="figure-img-display">
                    <p>
                      <span class="icon dripicons-cloud-upload"></span>
                      <br>
                      Arraste e solte <br>ou <a href="#">carregar</a>
                    </p>
                  </div>
                  <div class="clearfix"></div>
                </div>

                <div class="buttons-add-image form-inline">
                  <select class="quest-select">
                    <option value="001">Adicionar na alternativa</option>
                  </select>
                  <select class="quest-select">
                    <option value="">A. Compro comida pronta / congelada</option>
                    <option value="">B. Eu mesmo preparo / cozinha minha comida</option>
                    <option value="">C. Alguém prepara / cozinha pra mim</option>
                    <option value="">D. Outro (Especifique) </option>
                  </select>
                  <button class="btn btn-blue-dash-xs">Adicionar</button>
                </div>

                <div class="image-question-alternatives">
                  <div class="img-placeholder-quest">
                    <span class="icon dripicons-photo"></span>
                  </div>
                  <p>Assinale a alternativa que for mais verdadeira para você: "Quando em como em <strong>em casa"...</strong></p>

                  <figure class="figure-img-filled">
                    <img src="../assets/img/dashboard/img_01.jpg">
                  </figure>
                </div>

                <hr>

                <div class="image-alternatives">
                  <div class="media">
                    <div class="media-left media-middle">
                      A.
                    </div>
                    <div class="media-body media-middle">
                      <img src="../assets/img/dashboard/img_01.jpg" alt="">
                      <p>Compro comida pronta / congelada</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      B.
                    </div>
                    <div class="media-body media-middle">
                      <div class="img-placeholder-quest active">
                        <span class="icon dripicons-photo"></span>
                      </div>
                      <p>Eu mesmo preparo / cozinho minha comida</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      C.
                    </div>
                    <div class="media-body media-middle">
                      <div class="img-placeholder-quest">
                        <span class="icon dripicons-photo"></span>
                      </div>
                      <p>Alguém prepara / cozinha para mim</p>
                    </div>
                  </div>
                  <div class="media">
                    <div class="media-left media-middle">
                      D.
                    </div>
                    <div class="media-body media-middle">
                      <div class="img-placeholder-quest">
                        <span class="icon dripicons-photo"></span>
                      </div>
                      <p>Outro (Especifique)</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="question-group tab-pane" id="question-settings">
                <h5>
                  Respondente escolhe
                  <select name="" id="" class="quest-select">
                    <option value="0">Exatamente</option>
                    <option value="1">Até</option>
                  </select>
                  <input type="text" class="quest-select-values" placeholder="2">
                </h5>
                <hr>
                <label class="switch">
                  <input type="checkbox" id="obligateAnswer" name="checkLink" checked>
                  <div class="slider-switch round"></div>
                </label>
                <label for="obligateAnswer" class="switch-label-inline-block">Resposta obrigatória</label>

                <div class="clearfix" style="height: 35px;"></div>

                <label class="switch">
                  <input type="checkbox" id="ordenateAnswers" name="checkLink">
                  <div class="slider-switch round"></div>
                </label>
                <label for="ordenateAnswers" class="switch-label-inline-block">Ordenar alternativas alfabeticamente</label>
                <div class="clearfix"></div>
                <div class="buttons-settings text-center">
                  <a href="#" class="btn btn-white-dash">Cancelar</a>
                  <a href="#" class="btn btn-blue-dash">Salvar</a>
                </div>
              </div>
              <div class="question-group tab-pane" id="question-logic">
                <ul class="nav nav-pills">
                  <li class="active"><a href="#jump" data-toggle="tab">Pulo</a></li>
                  <li><a href="#exibition" data-toggle="tab">Exibição</a></li>
                  <li class="disabled"><a href="#transport">Transportar</a></li>
                </ul>

                <div class="tab-content">
                  <div class="tab-pane active" id="jump">

                    <div class="question-after">
                      <p>Após essa questão, ir para:
                        <select class="quest-select">
                          <option value="0">Selecionar questão</option>
                          <option value="0">Selecionar questão</option>
                          <option value="0">Selecionar questão</option>
                        </select>
                      </p>
                    </div>
                    <div class="question-if-after">
                      <table class="table table-responsive">
                        <thead>
                          <tr>
                            <th>Mas se a resposta for:</th>
                            <th>Ir para:</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>A. Compro comida pronta / congelada</td>
                            <td><select class="quest-select"><option value="0">Selecionar destino</option></select></td>
                          </tr>
                          <tr>
                            <td>B. Eu mesmo preparo / cozinha minha comida</td>
                            <td><select class="quest-select"><option value="0">Selecionar destino</option></select></td>
                          </tr>
                          <tr>
                            <td>C. Alguém prepara / cozinha para mim</td>
                            <td><select class="quest-select"><option value="0">Selecionar destino</option></select></td>
                          </tr>
                          <tr>
                            <td>D. Outro (Especifique)</td>
                            <td><select class="quest-select"><option value="0">Selecionar destino</option></select></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>

                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <div class="buttons-settings text-center">
                      <a href="#" class="btn btn-white-dash">Cancelar</a>
                      <a href="#" class="btn btn-blue-dash">Salvar</a>
                    </div>
                  </div>
                  <div class="tab-pane" id="exibition">
                    <div class="question-exibitions">
                      <div class="form-inline">
                        <select name="" id="" class="quest-select">
                          <option value="">Mostrar</option>
                          <option value="">Esconder</option>
                        </select>

                        <select name="" id="" class="quest-select">
                          <option value="">Questão</option>
                          <option value="">Alternativa</option>
                        </select>

                        <select name="" id="" class="quest-select">
                          <option value="">Questão</option>
                          <option value="">Alternativa</option>
                        </select>
                      </div>
                      <div class="form-inline">
                        <label for="">se</label>

                        <select name="" id="" class="quest-select">
                          <option value="">Pergunta</option>
                        </select>

                        <select name="" id="" class="quest-select">
                          <option value="">Alternativa</option>
                        </select>

                        <label for="">estiver</label>

                        <select name="" id="" class="quest-select">
                          <option value="">Selecionado</option>
                        </select>
                      </div>
                      <div class="form-inline">
                        <select class="quest-select">
                          <option value="and">E</option>
                          <option value="or">Ou</option>
                          <option value="orif">Ou se</option>
                          <option value="andif">E se</option>
                        </select>
                      </div>
                      <div class="form-inline">
                        <select name="" id="" class="quest-select">
                          <option value="">Mostrar</option>
                          <option value="">Esconder</option>
                        </select>

                        <select name="" id="" class="quest-select">
                          <option value="">Questão</option>
                          <option value="">Alternativa</option>
                        </select>

                        <select name="" id="" class="quest-select">
                          <option value="">Questão</option>
                          <option value="">Alternativa</option>
                        </select>
                      </div>
                      <div class="form-inline">
                        <label for="">se</label>

                        <select name="" id="" class="quest-select">
                          <option value="">Pergunta</option>
                        </select>

                        <select name="" id="" class="quest-select">
                          <option value="">Alternativa</option>
                        </select>

                        <label for="">estiver</label>

                        <select name="" id="" class="quest-select">
                          <option value="">Selecionado</option>
                        </select>
                      </div>
                    </div>
                    <button class="btn btn-blue-dash">+ nova regra</button>

                    <div class="buttons-settings text-center">
                      <a href="#" class="btn btn-white-dash">Cancelar</a>
                      <a href="#" class="btn btn-blue-dash">Salvar</a>
                    </div>
                  </div>
                  <div class="tab-pane" id="transport">Em breve...</div>
                </div>
              </div>
              <div class="question-group tab-pane" id="question-mixes">
                <div class="question-mixes">
                  <p>
                    Marcar questão como :
                    <select class="quest-select">
                      <option value="">Bloco unitário</option>
                      <option value="">Início de bloco sequencial</option>
                      <option value="">Final de bloco sequencial</option>
                      <option value="">Início de bloco de embaralhamento</option>
                      <option value="">Final de bloco de embaralhamento</option>
                    </select>
                  </p>
                </div>
                <div class="question-listed">
                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkA">
                        <label for="checkA">
                          A. Compro comida pronta / congelada
                        </label>
                      </div>
                    </div>
                    <div class="media-right media-middle"><a href="#"><span class="icon dripicons-media-shuffle"></span></a></div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkB"  checked>
                        <label for="checkB">
                          B. Eu mesmo preparo / cozinho minha comida
                        </label>
                      </div>
                    </div>
                    <div class="media-right media-middle"><a href="#"><span class="icon dripicons-media-shuffle"></span></a></div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkC">
                        <label for="checkC">
                          C. Alguém prepara / cozinha para mim
                        </label>
                      </div>
                    </div>
                    <div class="media-right media-middle"><a href="#"><span class="icon dripicons-media-shuffle"></span></a></div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="checkbox checkbox-primary">
                        <input type="checkbox" id="checkD"  checked>
                        <label for="checkD">
                          D. Outro (Especifique)
                        </label>
                      </div>
                    </div>
                    <div class="media-right media-middle"><a href="#"><span class="icon dripicons-media-shuffle"></span></a></div>
                  </div>

                  <div class="media">
                    <div class="media-body media-middle">
                      <div class="radio">
                        <input type="radio" name="radio2" id="radioAll" value="option2">
                        <label for="radioAll">
                          Embaralhar todas as alternativas
                        </label>
                      </div>
                    </div>
                  </div>

                  <div class="spacing"></div>
                  <div class="spacing"></div>
                  <div class="buttons-settings text-center">
                    <a href="#" class="btn btn-white-dash">Cancelar</a>
                    <a href="#" class="btn btn-blue-dash">Salvar</a>
                  </div>
                </div>
              </div>

              <div class="page-footer">
                <div class="spacing"></div>
                <div class="spacing"></div>

                <button class="btn btn-gray-dashed">
                  <span class="icon dripicons-plus"></span> Adicionar pergunta
                </button>
                <img src="../assets/img/dashboard/mindminers_logo.png" alt="" class="center-block img-responsive">
                <p class="text-center text-footer">Copyright &copy; <script>document.write(new Date().getFullYear());</script> MindMiners. Direitos reservados <span class="copyright-link">ocultar rodapé</span></p>
              </div>
            </div>

            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <div class="add-page">
              <button class="btn btn-blue center-block">
                <span class="icon dripicons-plus"></span> Adicionar próxima página
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="../assets/js/jquery-2.2.1.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jscolor.min.js"></script>
<script src="../assets/js/dashboard.js"></script>
</body>
</html>