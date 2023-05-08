<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>MindMiners | Dashboard</title>
  <link rel="stylesheet" href="../assets/css/jstree/themes/default/jstree.css">
  <link rel="stylesheet" href="../assets/css/platform.css">
</head>

<body>
  <div class="page-content">

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#modal-alert">
      modal Alert
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#modal-confirm">
      modal Confirm
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#modal-prompt">
      modal prompt
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#modal-upload">
      modal upload
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#modalMoveToFolder">
      mover para pasta
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#createFolder">
      criar pasta
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#changePassword">
      Alterar Senha
    </button>

    <button type="button" class="btn btn-blue-dash" data-toggle="modal" data-target="#newProject">
      Novo Projeto
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#collectorLink">
      gerar Coletor - Link
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#collectorMeSeems">
      gerar boleto - MeSeems
    </button>
    <br>
    <br>
    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#knowMoreMeSeems">
      Conheça mais - MeSeems
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#terms">
      Termos de Uso
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#privacyPolicy">
      Política de Privacidade
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#createCategory">
      Nova categoria
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#ImageAnalysis">
      Analise de Imagem
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#saveFilter">
      Resultados - Salvar Filtro
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#changeAdmin">
      Empresa - Alterar Admin
    </button>

    <button type="button" class="btn btn-blue-dash-md" data-toggle="modal" data-target="#projectDetails">
      Detalhes do projeto
    </button>

    <div id="modal-alert" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Atenção</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum possimus, quos, ad nisi asperiores magni saepe ducimus voluptatem, nemo aut ipsam. Quaerat quisquam doloribus maxime quam, quibusdam expedita voluptatem quo.</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-blue-dash">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modal-confirm" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Atenção</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum possimus, quos, ad nisi asperiores magni saepe ducimus voluptatem, nemo aut ipsam. Quaerat quisquam doloribus maxime quam, quibusdam expedita voluptatem quo.</p>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modal-prompt" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Atenção</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum possimus, quos, ad nisi asperiores magni saepe ducimus voluptatem, nemo aut ipsam. Quaerat quisquam doloribus maxime quam, quibusdam expedita voluptatem quo.</p>

            <div class="form-group">
              <label class="modal-message"></label>
              <input type="text" class="modal-input form-control" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modal-upload" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Upload de arquivo</h4>
          </div>
          <div class="modal-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum possimus, quos, ad nisi asperiores magni saepe ducimus voluptatem, nemo aut ipsam. Quaerat quisquam doloribus maxime quam, quibusdam expedita voluptatem quo.</p>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>
            <form action="" enctype="multipart/form-data" method="post">
              <input type="file" name="file" class="form-control">
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Enviar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="modalMoveToFolder" class="modal fade" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
            </button>
            <h4 class="modal-title">Modal title</h4>
          </div>

          <div class="modal-body modal-tree-folder">
            <div class="row">
              <div class="col-md-5">
                <div id="folderTree">
                </div>
              </div>
              <div class="col-md-7">
                <ol class="breadcrumb">
                  <li><a href="#"><span class="icon dripicons-folder-open"></span>Gerenciar Projetos</a>
                  </li>
                  <li class="active">Ruffles</li>
                </ol>

                <ul class="list-unstyled list-folder">
                  <li class="folder-view"><a href="#"><span class="icon dripicons-folder"></span> Julho '16</a>
                  </li>
                  <li class="folder-view"><a href="#"><span class="icon dripicons-folder"></span> Agosto '16</a>
                  </li>
                  <li class="folder-view"><a href="#"><span class="icon dripicons-folder"></span> Setembro '16</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <a href="#" class="pull-left btn btn-line-gray"><span class="font-17" style="vertical-align: middle">&#x2b;</span><span class="icon dripicons-folder"></span>Nova pasta</a>
            <a href="#" class="btn btn-white-dash" data-dismiss="modal">cancelar</a>
            <a href="#" class="btn btn-blue-dash">mover</a>
          </div>
        </div>
      </div>
    </div>

    <div id="createFolder" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Nova pasta</h4>
          </div>
          <div class="modal-body">
            <p class="font-10 text-uppercase font-bold">Nome da pasta</p>
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="changePassword" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Alterar senha</h4>
          </div>
          <div class="modal-body">
            <div class="form-group">
              <label for="password" class="font-10 font-bold text-uppercase">Senha atual:</label>
              <input type="text" class="form-control" id="password">
            </div>
            <div class="form-group">
              <label for="newpassword" class="font-10 font-bold text-uppercase">Nova senha:</label>
              <input type="text" class="form-control" id="newpassword">
            </div>
            <div class="form-group">
              <label for="confirmpassword" class="font-10 font-bold text-uppercase">Confirmar senha:</label>
              <input type="text" class="form-control" id="confirmpassword">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="newProject" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Novo projeto</h4>
          </div>
          <div class="modal-body">

            <p class="font-10 text-uppercase font-bold">Nome do projeto</p>
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
            <div class="spacing"></div>

            <div class="row">
              <div class="col-md-4">
                <p class="font-10 text-uppercase font-bold">Formato</p>
                <div class="form-group">
                  <select name="formato" class="form-control">
                    <option value="select">Selecionar</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <p class="font-10 text-uppercase font-bold">Pasta</p>
                <div class="form-group">
                  <select name="formato" class="form-control">
                    <option value="select">Selecionar</option>
                  </select>
                </div>
              </div>
              <div class="col-md-4">
                <p class="font-10 text-uppercase font-bold text-indent">Pasta</p>
                <div class="form-group">
                  <a href="" class="gray-dark">
                    <span class="icon dripicons-plus"></span><span class="icon dripicons-folder-open"></span>
                  </a>
                </div>
              </div>
            </div>

            <hr>

            <p class="font-10 text-uppercase font-bold">Objetivos e descrição</p>
            <div class="form-group">
              <textarea name="" cols="30" rows="5" class="form-control"></textarea>
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Começar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="collectorLink" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Gerar Coletor</h4>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="spacing"></div>
              <div class="spacing"></div>
              <h4 class="text-center">Seu coletor via Link foi gerado com sucesso</h4>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <p class="text-center font-15 font-regular">Coletor Fase 2 - Amostra A - Outubro</p>
              <div class="spacing"></div>

              <div class="form-inline form-link-modal">
                <input type="text" class="form-control" value="http://mindminers.com/jxuv1814" readonly>
                <button class="btn btn-blue-dash">Copiar link</button>
              </div>
              <a href="#" class="text-left blue-light font-10">Abrir em uma nova janela</a>

              <hr>
            </div>
            <p class="font-12 font-bold text-uppercase">Período de coleta</p>
            <p><a class="blue-light font-bold font-15" href="#">02/07/16 - 28/10/16 <span class="icon dripicons-calendar"></span></a>
            </p>
            <hr>

            <ul>
              <li>Permitir mais de uma resposta por device</li>
              <li>Senha
              </li>
              <div class="input-password col-md-2">
                <input type="text" class="form-control col-md-3" value="jyk293">
              </div>
            </ul>

          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>

    <div id="collectorMeSeems" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-boleto">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Gerar boleto</h4>
          </div>
          <div class="modal-body">

            <div class="row">
              <div class="col-md-7" style="border-right:2px dashed #D8D8D8">
                <div>
                  <ul class="nav nav-pills" role="tablist">
                    <li role="presentation" class="active"><a href="#pf" aria-controls="pf" role="tab" data-toggle="tab">Pessoa Física</a></li>
                    <li role="presentation"><a href="#pj" aria-controls="pj" role="tab" data-toggle="tab">Pessoa Jurídica</a></li>
                  </ul>

                  <div class="spacing"></div>
                  <div class="spacing"></div>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="pf">

                      <div class="form-group">
                        <label for="clientName" class="font-10 text-uppercase">Nome</label>
                        <input type="text" class="form-control" id="clientName">
                      </div>

                      <div class="form-group">
                        <label for="cpf" class="font-10 text-uppercase">cpf</label>
                        <input type="text" class="form-control" id="cpf">
                      </div>

                      <div class="spacing"></div>
                      <div class="spacing"></div>

                    </div>
                    <div role="tabpanel" class="tab-pane" id="pj">

                      <div class="form-group">
                        <label for="enterpriseName" class="font-10 text-uppercase">Razão social</label>
                        <input type="text" class="form-control" id="enterpriseName">
                      </div>

                      <div class="form-group">
                        <label for="cnpj" class="font-10 text-uppercase">cnpj</label>
                        <input type="text" class="form-control" id="cnpj">
                      </div>

                      <div class="spacing"></div>
                      <div class="spacing"></div>

                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <p class="font-15">Prazo para pagamento</p>

                <div class="spacing"></div>

                <p class="font-12">Prazo de <strong>5 dias úteis</strong></p>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-5">
                      <input type="text" class="form-control" value="19/06/2016" readonly>
                    </div>
                  </div>
                </div>

                <div class="spacing"></div>

                <span class="font-12">
                  Após pagamento efetuado, seu coletor será disparado <br>
                  em nossa base de respondentes.
                </span>

              </div>
            </div>

            <div class="spacing"></div>
            <div class="spacing"></div>
            <div class="spacing"></div>

            <div class="checkbox checkbox-primary">
              <input type="checkbox" id="checkModal" >
              <label for="checkModal" class="font-12 font-bold">
                Concordo com os <a href="#" class="blue-light">termos de uso</a> e com a <a href="#" class="blue-light">política de privacidade</a> para clientes MindMiners.
              </label>
            </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="knowMoreMeSeems" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg modal-charts">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">MeSeems</h4>
          </div>
          <div class="modal-body">

            <h3 class="font-20 text-center">
              Mais de 200 mil consumidores imparciais <br>prontos para responder suas pesquisas
            </h3>

            <div class="row charts-script">
              <div class="col-xs-12 col-md-3">
                <h4 class="chart-title">Gênero</h4>
                <div id="genreChart"></div>
                <div class="chart-legend">
                  <ul class="list-unstyled list-inline">
                    <li><div class="legend-circle color1"></div> Masculino</li>
                    <li><div class="legend-circle color2"></div> Feminino</li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <h4 class="chart-title">Idade</h4>
                <div id="ageChart"></div>
                <div class="chart-legend">
                  <ul class="list-unstyled list-inline">
                    <li><div class="legend-circle color1"></div> 40 ou mais</li>
                    <li><div class="legend-circle color2"></div> 30 - 40</li>
                    <li><div class="legend-circle color3"></div> 25 - 30</li>
                    <li><div class="legend-circle color4"></div> 18 - 25</li>
                    <li><div class="legend-circle color5"></div> Menor que 18</li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <h4 class="chart-title">Classe Social</h4>
                <div id="socialClassChart"></div>
                <div class="chart-legend">
                  <ul class="list-unstyled list-inline">
                    <li><div class="legend-circle color1"></div> A</li>
                    <li><div class="legend-circle color2"></div> B1</li>
                    <li><div class="legend-circle color3"></div> B2</li>
                    <li><div class="legend-circle color4"></div> C1</li>
                    <li><div class="legend-circle color5"></div> C2</li>
                    <li><div class="legend-circle color6"></div> DE</li>
                  </ul>
                </div>
              </div>
              <div class="col-xs-12 col-md-3">
                <h4 class="chart-title">Região da Residência</h4>
                <div id="residenceRegionChart"></div>
                <div class="chart-legend">
                  <ul class="list-unstyled list-inline">
                    <li><div class="legend-circle color1"></div> Sudeste</li>
                    <li><div class="legend-circle color2"></div> Nordeste</li>
                    <li><div class="legend-circle color3"></div> Sul</li>
                    <li><div class="legend-circle color4"></div> Centro Oeste</li>
                    <li><div class="legend-circle color5"></div> Norte</li>
                  </ul>
                </div>
              </div>
            </div>

          </div>
          <hr>

          <div class="modal-footer">
            <div class="row">
              <div class="col-md-6">
                <p class="font-12 gray-light text-left" style="line-height: 1;">
                  Baixe nosso Panel Book para conhecer como gerimos nosso painel de
                  respondentes e também sobre os perfis disponíveis para pesquisas.
                </p>
                <div class="spacing"></div>
                <p class="text-left"><a href="#"><span class="icon dripicons-download"></span> baixar panel book </a></p>
              </div>
              <div class="col-md-6">
                <p class="font-12 gray-light text-left">
                  Conheça na prática:
                </p>

                <ul class="list-inline list-unstyled text-left">
                  <li class="icon-applestore"><a href="#">Apple Store</a></li>
                  <li class="icon-playstore"><a href="#">Google Play Store</a></li>
                  <li class="icon-webapp"><a href="http://www.meseems.com.br" target="_blank"><span class="icon dripicons-export"></span> Webapp</a></li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="terms" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Termos de Uso</h4>
          </div>
          <div class="modal-body">
            <h4><strong>Termos de Uso</strong></h4> <br>
            <p>
              TERMO DE ADESÃO AO PROGRAMA DE BENEFÍCIOS MESEEMS<br> <br>

              O presente Termo de Adesão define as condições gerais aplicáveis à participação no Programa de Benefícios oferecido por MESEEMS SERVIÇOS DE INTELIGÊNCIA DE MERCADO LTDA. (“MeSeems”), inscrita no CNPJ nº 19.381.669/0001-07, com sede em São Paulo/SP, localizada na Rua das Sempre-Vivas, 225, Jardim das Acácias, CEP 04.704-030.<br> <br>

              Recomendamos que você leia atentamente este documento, e, mesmo que não seja obrigatório, sugerimos que seja salva uma cópia em seu computador para que você possa acessá-lo futuramente, se assim desejar.<br> <br>

              O MeSeems respeita os direitos de seus Clientes e Usuários. Recentemente foi sancionada a Lei nº 12.965/2014, conhecida como “Marco Civil da Internet”, que estabelece os princípios, garantias, direitos e deveres para o uso da Internet no Brasil. Apesar de entrar em vigor somente em 23 de junho de 2014, gostaríamos de informá-los que o Programa de Benefícios MeSeems está totalmente adequado às regras e diretrizes trazidas pela nova lei. Se você quiser saber mais, poderá acessar a lei na íntegra, no seguinte endereço: http://www.planalto.gov.br/CCIVIL_03/_Ato2011-2014/2014/Lei/L12965.htm. <br> <br>

              Para fins deste documento serão utilizados os termos abaixo indicados, com o seu respectivo significado:<br> <br>
              Programa – O Programa de Benefícios oferecido pelo MeSeems;<br> <br>
              Site – O endereço virtual do Programa (www.meseems.com.br), onde o Cliente terá acesso a sua Conta;<br> <br>
              Cliente – A pessoa, física ou jurídica, que participa do Programa e é responsável pela Interação (ver descrição de “Interação” abaixo);<br> <br>
              Usuário – A pessoa física cadastrada no Programa e que irá interagir com o Cliente através do Aplicativo;<br> <br>
              Interação – Todo e qualquer conteúdo criado pelo Cliente para ser enviado ao Usuário, como questionários, pesquisas de opinião e de comportamento, entre outros;<br> <br>
              Serviço – O conjunto de serviços oferecidos pelo MeSeems para que o Cliente faça a Interação com os Usuários, já disponibilizados ou a serem disponibilizados no futuro;<br> <br>
              Conta – Local dentro do Site onde ficam armazenadas as informações do Cliente e através do qual ele terá acesso aos Serviços oferecidos pelo Programa;<br> <br>
              Aplicativo – Aplicativo “MeSeems”, do tipo mobile (ou app), que o Usuário utiliza para participar do Programa;<br> <br>
              Login – E-mail do Cliente e senha, para ter acesso a sua conta;<br> <br>
              Pontos – Forma de retribuição aos Usuários pelas Interações realizadas, podendo ser acumulados e trocados por produtos, serviços ou benefícios, de acordo com as regras definidas no regulamento do Programa;<br> <br>
              Assinatura – Modalidade de pagamento antecipado e periódico dos Serviços escolhidos pelo Cliente.<br> <br>
              A partir de agora, você será tratado como “Cliente”.<br> <br>
              Ao fazer o cadastro no site www.meseems.com.br o Cliente declara estar de acordo com este Termo, com o Regulamento e com a Política de Privacidade do Programa, e estará apto utilizar os Serviços oferecidos pelo MeSeems.<br> <br>

              1. CADASTRO<br> <br>

              1.1. Para participar do Programa, o Cliente deverá informar seu e-mail, nome completo, número do CPF e escolher um nome de usuário e senha, pessoal e intransferível, por meio dos quais terá acesso ao Site, comprometendo-se a não informá-los a terceiros, responsabilizando-se exclusiva e pessoalmente pelo seu uso.<br> <br>

              1.2. Caso o Cliente seja pessoa jurídica, pessoa física representando uma pessoa jurídica ou funcionário, empregado, terceirizado ou de qualquer forma subordinado ou vinculado a uma empresa, negócio ou marca, fica obrigado a fazer o cadastro com o seu e-mail profissional, sob pena de ter o acesso a sua Conta bloqueado até que seja feita a alteração. O MeSeems poderá excluir a Conta do Cliente que se recusar a fazer esta alteração, incluindo todas as informações lá armazenadas, sem a possibilidade de recuperação, devolução ou transferência.<br> <br>

              1.3. Cada Cliente poderá ter somente um Login, através do qual terá acesso a sua Conta. Caso o MeSeems identifique a existência de mais de um Login para o mesmo Cliente, manterá ativa a Conta mais antiga, excluindo a(s) outra(s), sem direito à transferência ou restituição das informações porventura existentes.<br> <br>

              1.4. Escolhido o Login e aceitando o Termo de Adesão, o Regulamento e a Política de Privacidade do Programa, o Cliente terá acesso à sua Conta e poderá preencher todos os campos opcionais para completar seu cadastro.<br> <br>

              1.5. Ao finalizar o cadastro, o Cliente declara expressamente a veracidade de todas as informações prestadas, podendo ser responsabilizado civil e criminalmente, por falsidade ideológica, conforme art. 299 do Código Penal Brasileiro.<br> <br>

              1.6. O Login escolhido pelo Cliente não poderá conter palavras deselegantes ou ofensivas nem nomes de empresas, marcas, entidades, organizações ou quaisquer nomes protegidos por direitos autorais ou que violem direitos de terceiros, sob pena de ter seu cadastro negado ou cancelado pelo MeSeems.<br> <br>

              1.7. O MeSeems também poderá negar ou cancelar o cadastro ou a Conta do Cliente caso alguma informação apresentada seja irregular, insuficiente ou falsa, ou, ainda, seja identificado qualquer indício de fraude ou irregularidade no cadastro ou na utilização dos Serviços, conforme disposto nos itens 3 e 4 deste Termo.<br> <br>

              1.8. O Cliente deverá comunicar imediatamente o MeSeems, através do e-mail contato@meseems.com.br, eventual esquecimento, perda ou furto de sua senha de acesso, assim como qualquer risco de acesso a ela por terceiros.<br> <br>

              1.9. O Cliente poderá, a qualquer tempo, cancelar sua participação no Programa, mediante solicitação enviada ao MeSeems através do e-mail contato@meseems.com.br, caso em que sua Conta será excluída, juntamente com todas as informações lá armazenadas, sem a possibilidade de recuperação, devolução ou transferência.<br> <br>

              2. COBRANÇAS E PAGAMENTOS<br> <br>

              2.1. O Cliente pagará ao MeSeems por cada Serviço que adquirir ou utilizar, incluindo pagamento por excesso, se for o caso, de acordo com o método, preços e condições apresentados na página de administração de sua Conta.<br> <br>

              2.2. O MeSeems poderá cobrar diferentes preços pelo(s) mesmo(s) Serviço(s), no mesmo período, para Clientes diversos, não configurando qualquer tipo de privilégio e não havendo qualquer direito ou prerrogativa do Cliente ou obrigação do MeSeems em igualar os preços por este motivo.<br> <br>

              2.3. O Cliente pode optar pelo pagamento individual do(s) Serviço(s) ou fazer uma Assinatura, englobando um ou mais Serviços. Nesta modalidade, a contratação poderá ser mensal, semestral ou anual, dependendo do plano de Assinatura que o Cliente escolher na página de administração de sua Conta.<br> <br>

              2.4. A Assinatura será automaticamente renovada ao término de cada período contratado. Se o Cliente não desejar renovar ou quiser cancelar a Assinatura, deverá fazê-lo através da página de administração de sua Conta, a qualquer tempo e sem a cobrança de multa, desde que observado o seguinte:<br> <br>
              a) Para a Assinatura mensal, o cancelamento deverá ser realizado com antecedência mínima de 07 (sete) dias do término deste período, sob pena de multa no valor de uma Assinatura mensal;
              b) Para a Assinatura semestral, o cancelamento deverá ser realizado com antecedência mínima de 30 (trinta) dias do término deste período, sob pena multa no valor de 15% (quinze por cento) da Assinatura semestral;<br> <br>
              c) Para a Assinatura anual, o cancelamento deverá ser realizado com antecedência mínima de 45 (quarenta e cinco) dias do término deste período, sob pena de multa no valor de 20% (vinte por cento) da Assinatura anual.<br> <br>

              2.5. O MeSeems poderá alterar os valores cobrados pelos Serviços a qualquer tempo, ficando estabelecido que para os Serviços contratados através de Assinatura, a alteração terá efeitos somente após o término do período contratado. Para tanto, o MeSeems informará o Cliente por e-mail, com a mesma antecedência prevista no item 2.4 acima, permitindo que o Cliente não renove sua Assinatura.<br> <br>

              2.6. Caso o cliente tenha contratado uma Assinatura, os Serviços extras que não façam parte do plano e porventura tenham sido utilizados serão cobrados no último dia útil do mês da contratação, e deverão ser pagos em até 30 (trinta) dias após a contratação do Serviço. O não pagamento dentro do prazo pode resultar na limitação, suspensão ou cancelamento do Serviço, e poderá implicar na perda de dados associados ao Cliente.<br> <br>

              2.7. Uma vez pagos ou creditados, os valores não serão restituídos, exceto quando previsto em sentido contrário nestes Termos, quando exigido por lei ou decisão judicial, ou quando autorizado expressa ou tacitamente pelo MeSeems, através da própria página de administração da Conta do Cliente. Nesse último caso, o Cliente ficará com um crédito para ser utilizado na contratação de Serviços.<br> <br>

              3. REGRAS DE CONDUTA<br> <br>

              3.1. O Cliente se compromete a não utilizar o Site e os Serviços do MeSeems para a publicação ou divulgação de conteúdo:<br> <br>
              a) Que tenha caráter difamatório, discriminatório, obsceno, ofensivo, ameaçador, abusivo, vexatório, prejudicial, ou que contenha expressões de ódio contra pessoas ou grupos, contenha insultos ou ameaças religiosas ou raciais, ou que incentive danos morais e patrimoniais, ou que possa violar qualquer direito de terceiros;<br> <br>
              b) Protegido por direitos autorais ou que, por qualquer razão, viole direitos de terceiros;<br> <br>
              c) Difamatório, calunioso ou que seja contrário à honra, à intimidade pessoal e familiar ou à imagem das pessoas (inclusive de pessoa jurídicas, entidades e organizações e ela equiparadas);<br> <br>
              d) Que incite à violência, à criminalidade ou qualquer outro tipo de ofensa.<br> <br>

              3.2. Além disso, ficam expressamente proibidas as seguintes ações:<br> <br>
              a) Declarar ou representar falsamente sua afiliação a qualquer pessoa ou declarar ou fazer crer que o MeSeems endossa as declarações feitas pelo Cliente;<br> <br>
              b) Usar o Site ou os Serviços para publicidade sem a expressa autorização do MeSeems;
              c) Usar o Site, os Serviços, o Aplicativo, ou qualquer outra ferramenta para publicar ou transmitir vírus, worm, Cavalo de Tróia, easter egg, time bomb, spyware ou outro código, arquivo ou programa de computador malicioso que seja prejudicial ou invasivo, ou cuja intenção seja danificar, tomar controle da operação ou monitorar o uso de qualquer hardware, software ou equipamento, seja do MeSeems, dos Usuários, de outros Clientes ou de terceiros, participantes ou não do Programa;<br> <br>
              d) Usar o Site, os Serviços ou o Aplicativo para violar quaisquer direitos legais de terceiros, ou para obter ou coletar informações de identificação de outros Clientes do Programa;<br> <br>
              e) Modificar, adaptar, converter ou reverter a engenharia, descompilar, desmontar ou modificar qualquer parte do código-fonte do Site ou do Aplicativo, seja em seu front-end ou em seu back-end;<br> <br>
              f) Utilizar qualquer forma que possa ser considerada fraudulenta para obter vantagem, para si ou para outrem.<br> <br>

              3.3. O Cliente não poderá reproduzir, utilizar, copiar, distribuir, permitir o acesso ou disponibilizar ao público qualquer conteúdo relacionado aos Serviços.<br> <br>

              3.4. O não atendimento ou descumprimento de quaisquer disposiçõesinseridas neste documento poderá acarretar a interrupção dos Serviços e o bloqueio ou cancelamento imediato da Conta de quem lhe der causa ou for beneficiado, direta ou indiretamente.<br> <br>

              3.5. Poderá o MeSeems, a seu exclusivo critério, em caso de suspeita de fraude na utilização do Site, do Aplicativo ou dos Serviços, interromper e/ou excluir o acesso do Cliente responsável, temporária ou permanentemente.<br> <br>

              4. VIOLAÇÃO DOS SISTEMAS OU DA BASE DE DADOS<br> <br>

              4.1. O Cliente não poderá utilizar nenhum dispositivo de hardware, software, ou outro recurso que venha a interferir no Site, no Aplicativo, nos Serviços ou em suas bases de dados.<br> <br>

              4.2. Se for detectado qualquer tipo de fraude, artifício ou outra forma de burla na utilização do Site, do Aplicativo ou dos Serviços, o MeSeems poderá interromper o acesso, temporária ou definitivamente, e excluir a Conta do Cliente responsável ou de qualquer forma envolvido.<br> <br>

              4.3. Qualquer invasão, tentativa ou atividade que viole ou contrarie as proibições ora estipuladas tornarão o responsável passível das ações legais pertinentes, bem como das sanções aqui previstas, sendo ainda responsável pelas indenizações e reparações por eventuais danos causados.<br> <br>

              5. DIREITOS SOBRE O CONTEÚDO E DE PROPRIEDADE INTELECTUAL<br> <br>

              5.1. O MeSeems respeita os direitos de propriedade intelectual de terceiros e requer que os Clientes façam o mesmo. Todas as marcas, nomes comerciais e sinais distintivos de qualquer espécie presentes no site www.meseems.com.br, incluindo sua própria marca e designação, são pertencentes a seus respectivos titulares de direito. Para a utilização de quaisquer destes direitos é necessária a autorização expressa dos seus titulares.<br> <br>

              5.2. O Cliente reconhece e declara que as interações propostas para serem utilizadas nos Serviços disponibilizados pelo MeSeems são de sua exclusiva criação, não constituindo violação de direitos autorais, marcas, segredos, direitos de personalidade, incluindo, mas não se limitando, a honra, intimidade, vida privada e a imagem de pessoas, direitos patrimoniais e quaisquer outros direitos de terceiros.<br> <br>

              5.3. Além disso, o Cliente também reconhece e concorda que uma vez enviada a interação por meio do Site, ele transfere ao MeSeems todos os direitos patrimoniais correspondentes.<br> <br>

              5.4. O Cliente autoriza expressamente a divulgação e utilização da sua marca, nome comercial e/ou sinais distintivos de qualquer espécie no site www.meseems.com.br e nos perfis oficiais do MeSeems nas redes sociais e em peças publicitárias, respeitando o disposto no item 5.1 acima.<br> <br>

              6. VALIDADE DESTE TERMO<br> <br>

              6.1. Este Termo continuará a ser aplicável enquanto o Programa estiver vigente. O MeSeems pode encerrar a relação existente com o Cliente, a qualquer tempo, nas seguintes hipóteses:<br> <br>
              a) Se o Cliente tiver violado qualquer disposição deste Termo, especialmente aquelas previstas nos itens 3, 4 e 5 acima, ou agir de forma que claramente mostre ou evidencie que não pretende ou não pode cumprir as obrigações ora estabelecidas;<br> <br>
              b) Se assim for exigido do MeSeems por lei ou decisão judicial;
              c) Se o MeSeems decidir encerrar o Programa, total ou parcialmente, sem necessidade de qualquer justificativa.<br> <br>

              6.2. Quando o Programa for encerrado, todos os direitos, obrigações e responsabilidades que o Cliente tenha assumido enquanto da sua vigência, ou que expressamente deva continuar em vigor, não serão afetados por essa resolução e continuarão a ser aplicáveis indefinidamente.<br> <br>

              6.3. O MeSeems poderá, por sua iniciativa e a qualquer tempo, suspender ou encerrar o Programa se julgar necessário à sua segurança jurídica e/ou visando a segurança dos direitos de terceiros.<br> <br>

              6.4. No caso de encerramento do Programa, total ou parcialmente, o MeSeems não estará obrigada a manter, fornecer, devolver ou ressarcir qualquer espécie de conteúdo, dados ou informações repassadas pelo Cliente para participar do Programa.<br> <br>

              7. EXCLUSÃO DE GARANTIAS E DE RESPONSABILIDADES<br> <br>

              7.1. O Cliente é o único responsável pelo correto preenchimento de seus dados cadastrais, pelas interações propostas para serem enviadas aos Usuários através dos Serviços do Programa, bem como por manter, proteger e fazer backup de toda e qualquer informação enviada ou disponibilizada na utilização dos Serviços, isentando o MeSeems de qualquer responsabilidade sobre esses dados e interações.<br> <br>

              7.2. Por questões estritamente técnicas e operacionais, o MeSeems não pode garantir a disponibilidade e continuidade do funcionamento do Site e dos Serviços. O MeSeems poderá advertir antecipadamente quanto às interrupções de funcionamento do Site e dos Serviços, mas nunca poderá garantir que o seu uso será ininterrupto, pontual, seguro e isento de erros.<br> <br>

              7.3. O MeSeems se exime de toda e qualquer responsabilidade por eventuais perdas, danos e prejuízos de qualquer natureza, decorrentes da falta de disponibilidade ou continuidade do funcionamento do Site e dos Serviços, bem como decorrentes de quaisquer condutas ou violações dispostas nos itens 3 e 4 deste Termo.<br> <br>

              7.4. Por se tratar de conteúdo interativo, o MeSeems não garante a legalidade, confiabilidade, veracidade, precisão e utilidade das respostas, textos e demais informações enviadas pelos Usuários ao Cliente.<br> <br>

              7.5. Em nenhum caso o MeSeems poderá ser responsabilizado pelo vazamento ou uso indevido das informações enviadas pelos Usuários aos Clientes através do Aplicativo, como forma de Interação.<br> <br>

              8. MUDANÇAS NOS TERMOS DE USO<br> <br>

              8.1. Queremos que o Cliente entenda que este documento é importante para sua plena satisfação ao participar do Programa. Assim, o MeSeems, reservando-se ao direito de modificar ou remover este Termo a seu critério e sem prévio aviso, recomenda veementemente que o Cliente visite esta área periodicamente para manter-se informado sobre quaisquer alterações, que serão devidamente publicadas.<br> <br>

              8.2. Na medida do possível informaremos através de nosso Site e das nossas páginas e perfis nas redes sociais, quaisquer alterações neste documento, mas, como dito acima, o acompanhamento de tais alterações é de responsabilidade exclusiva do Cliente.<br> <br>

              9. DISPOSIÇÕES GERAIS<br> <br>

              9.1. Toda a comunicação entre o MeSeems e o Cliente se dará exclusivamente através do e-mail informado no momento do seu cadastro no Programa, de modo que a responsabilidade pelo correto preenchimento dessa e de qualquer outra informação é somente do Cliente.<br> <br>

              9.2. O MeSeems isenta-se de responsabilidades quanto a problemas com o e-mail fornecido pelo Cliente que impossibilitem a comunicação, o recebimento de prêmios ou avisos de qualquer natureza.<br> <br>

              9.3. Ao aceitar participar do Programa, o Cliente declara que leu e concorda com todas as condições do presente Termo, do Regulamento e da Política de Privacidade, que são regidos e interpretados conforme as Leis da República Federativa do Brasil.<br> <br>

              9.4. O foro da comarca da cidade de São Paulo, no estado de São Paulo, fica eleito para dirimir quaisquer questões oriundas dos Serviços contratados e da participação no Programa, com renúncia expressa a qualquer outro, por mais privilegiado que seja ou venha a ser.<br> <br>

              9.5. Para maiores esclarecimentos acesse a seção de perguntas e respostas (“FAQ”) em nosso site (www.meseems.com.br) ou entre em contato através do e-mail contato@meseems.com.br.<br> <br>
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-blue-dash">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <div id="privacyPolicy" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Política de Privacidade</h4>
          </div>
          <div class="modal-body">
            <h4><strong>Política de Privacidade  </strong><br> (19 de Janeiro de 2016)  </h4> <br>
            <p>
              Neste documento você será informado sobre como são coletados, utilizados e protegidos os dados informados para a participação no Programa de Benefícios oferecido por MESEEMS SERVIÇOS DE INTELIGÊNCIA DE MERCADO LTDA., inscrita no CNPJ nº 19.381.669/0001-07, com sede em São Paulo/SP, localizada na Rua das Sempre-Vivas, 225, Jardim das Acácias, CEP 04.704-030, a partir de agora denominada simplesmente como “MeSeems”.  <br> <br>

              Com a intenção de estabelecer uma relação de confiança e credibilidade com os interessados em participar do Programa, o MeSeems é responsável e transparente no trato das informações que recebe, transmite, usa e armazena, conforme estabelecido neste documento, e por isso nos preocupamos em esclarecer e divulgar nossa Política de Privacidade, fazendo com que você possa entender melhor quais informações obtemos e como as utilizamos. <br> <br>

              Antes de prosseguir na leitura deste documento, é essencial a leitura do Termo de Adesão ao Programa de Benefícios MeSeems, onde você poderá saber como funciona o Programa e quais as suas responsabilidades. Assim, caso você ainda não tenha lido, recomendamos que o faça. <br> <br>

              Para fins deste documento serão utilizados os termos abaixo indicados, com o seu respectivo significado: <br> <br>

              Programa – O Programa de Benefícios oferecido pelo MeSeems;  <br> <br>

              Site – O endereço virtual do Programa (www.meseems.com.br), onde o Cliente terá acesso a sua Conta; <br> <br>

              Cliente – A pessoa, física ou jurídica, cadastrada no Programa e responsável pelas Interações que serão enviadas aos Usuários; <br> <br>

              Usuário – A pessoa física cadastrada no Programa e que irá interagir com o Cliente através do Aplicativo; <br> <br>

              Interação – Todo e qualquer conteúdo criado pelo Cliente para ser enviado ao Usuário, como questionários, pesquisas de opinião e de comportamento, entre outros; <br> <br>

              Serviço – O conjunto de serviços oferecidos pelo MeSeems para que o Cliente faça a Interação com os Usuários, já disponibilizados ou a serem disponibilizados no futuro; <br> <br>

              Conta – Local dentro do Site onde ficam armazenadas as informações do Cliente e através do qual ele terá acesso aos Serviços oferecidos pelo Programa; <br> <br>

              Aplicativo – Aplicativo “MeSeems”, do tipo mobile (ou app), que o Usuário utiliza para participar do Programa; <br> <br>

              Login – E-mail do Cliente e senha, para ter acesso a sua conta; <br> <br>

              Pontos – Forma de retribuição aos Usuários pelas Interações realizadas, podendo ser acumulados e trocados por produtos, serviços ou benefícios, de acordo com as regras definidas no regulamento do Programa; <br> <br>

              A partir de agora você será tratado como “Cliente”. <br> <br>

              1. INTRODUÇÃO" +
              1.1. O MeSeems respeita os direitos de seus Clientes e Usuários. Recentemente foi sancionada a Lei nº 12.965/2014, conhecida como “Marco Civil da Internet”, que estabelece os princípios, garantias, direitos e deveres para o uso da Internet no Brasil. Apesar de entrar em vigor somente em 23 de junho de 2014, gostaríamos de informá-los que o Programa de Benefícios MeSeems está totalmente adequado às regras e diretrizes trazidas pela nova lei. Se você quiser saber mais, poderá acessar a lei na íntegra, no seguinte endereço: http://www.planalto.gov.br/CCIVIL_03/_Ato2011-2014/2014/Lei/L12965.htm.  <br> <br>

              1.2. A Política de Privacidade é o documento que estabelece quais informações o MeSeems terá acesso e como elas poderão ser utilizadas. Nos próximos tópicos você saberá como são tratados não só os seus dados pessoais, mas também todas as informações coletadas automaticamente ou enviadas por você e pelos Usuários para participar do Programa. <br> <br>

              1.3. Como você terá acesso às informações enviadas pelos Usuários através do Aplicativo, é importante saber que aos Usuários será sempre assegurado, conforme previsto no artigo 7º da Lei 12.965/2014, entre outros, os seguintes direitos: <br> <br>

              a) Inviolabilidade da intimidade e da vida privada, sua proteção e indenização pelo dano material ou moral decorrente de sua violação; <br> <br>
              b) Inviolabilidade e sigilo do fluxo de suas comunicações pela internet, salvo por ordem judicial, na forma da lei; <br> <br>
              c) Inviolabilidade e sigilo de suas comunicações privadas armazenadas, salvo por ordem judicial; <br> <br>
              d) Não fornecimento a terceiros de seus dados pessoais, inclusive registros de conexão e de acesso a aplicações de internet, salvo mediante consentimento livre, expresso e informado ou nas hipóteses previstas em lei; <br> <br>
              e) Informações claras e completas sobre coleta, uso, armazenamento, tratamento e proteção de seus dados pessoais, que somente poderão ser utilizados para finalidades que justifiquem sua coleta, não sejam vedadas pela legislação e estejam especificadas em termos de uso de aplicações de internet; <br> <br>
              f) Consentimento expresso sobre coleta, uso, armazenamento e tratamento de dados pessoais, que deverá ocorrer de forma destacada das demais cláusulas contratuais. <br> <br>

              1.4. Agora que você já conhece os seus direitos e o direito dos Usuários, passamos à Politica de Privacidade propriamente dita. <br> <br>

              2. QUE INFORMAÇÕES COLETAMOS  <br> <br>

              2.1. Para participar do Programa, o Cliente deverá informar seu e-mail, nome completo, número do CPF e escolher um nome de usuário e senha, pessoal e intransferível, por meio dos quais terá acesso ao Site, comprometendo-se a não informá-los a terceiros, responsabilizando-se exclusiva e pessoalmente pelo seu uso. O MeSeems poderá utilizar essas informações nos limites do disposto no item 2 desta Política. <br> <br>

              2.2. Caso o Cliente seja pessoa jurídica, pessoa física representando uma pessoa jurídica ou funcionário, empregado, terceirizado ou de qualquer forma subordinado ou vinculado a uma empresa, negócio ou marca, fica obrigado a fazer o cadastro com o seu e-mail profissional, sob pena de ter o acesso a sua Conta bloqueado até que seja feita a alteração. O MeSeems poderá excluir a Conta do Cliente que se recusar a fazer esta alteração, incluindo todos os dados e informações porventura existentes, sem qualquer direito de ressarcimento ou devolução ao Cliente. <br> <br>

              2.3. Escolhido o Login e aceitando o Termo de Adesão, o Regulamento e a Política de Privacidade do Programa, o Cliente terá acesso à sua Conta e poderá preencher todos os campos opcionais para completar seu cadastro. Essas informações também poderão ser utilizadas pelo MeSeems nos limites do disposto no item 2 desta Política. <br> <br>

              2.4. As informações enviadas pelos Usuários como resposta/interação dos Serviços utilizados pelos Clientes ficarão disponíveis na página de administração do Site. Essas informações são de propriedade exclusiva do Cliente responsável pela Interação, e NÃO poderá ser cedida, compartilhada, vendida ou de qualquer forma entregue ou enviada pelo MeSeems a outros Clientes, empresas ou pessoas. <br> <br>

              3. COMO USAMOS AS INFORMAÇÕES COLETADAS <br> <br>

              3.1. O MeSeems utiliza as informações coletadas para os seguintes propósitos gerais: <br> <br>
              a) Fornecer a interatividade necessária ao Programa; <br> <br>
              b) Aperfeiçoar a usabilidade e a experiência interativa durante a utilização do Aplicativo e do Site; <br> <br>
              c) Elaborar estatísticas gerais;\n" +
              d) Responder às dúvidas e solicitações dos Usuários e dos Clientes; <br> <br>
              e) Realizar pesquisas de comunicação e marketing de relacionamento com os Usuários e Clientes que se mostrem interessados em participar. <br> <br>

              3.2. O MeSeems NÃO poderá ceder, compartilhar, vender ou de qualquer forma entregar ou enviar quaisquer informações do Cliente a outros Clientes, empresas ou pessoas. A apresentação de quaisquer informações só ocorrerá através de requisição do próprio Usuário ou Cliente ou por determinação judicial. <br> <br>

              3.3. Os colaboradores, fornecedores e demais envolvidos no Programa têm conhecimento desta Política de Privacidade e somente pessoas autorizadas tem permissão para acessar as informações coletadas, sob pena de sofrer sanção disciplinar em caso de violação das normas aqui previstas. <br> <br>

              3.4. O MeSeems compromete-se a usar as informações coletadas apenas para as finalidades aqui definidas, reservando-se o direito de excluí-las após sua utilização ou mesmo de não utilizá-las. <br> <br>

              4. SEGURANÇA DAS INFORMAÇÕES E ISENÇÃO DE RESPONSABILIDADE  <br> <br>

              4.1. A segurança das informações é garantida por eficazes mecanismos de proteção, como criptografia, dispositivos de segurança, protocolos de acesso, arquivamento em servidores internos, firewall e ambiente web seguro. <br> <br>

              4.2. Apesar de adotar altos níveis de segurança para a proteção dos dados e informações coletados, é importante que os Usuários tenham ciência de que pela própria natureza e características técnicas da internet, há sempre o risco de que terceiros não autorizados, de alguma forma, consigam violar esses mecanismos de proteção e ter acesso a tais informações, motivo pelo qual o MeSeems não pode garantir a total privacidade e segurança na utilização do Site, do Aplicativo ou no armazenamento dos dados. <br> <br>

              4.3. Os dados e informações que eventualmente fiquem armazenados ou arquivados em servidores externos obedecem aos mesmos princípios de segurança adotados pelo MeSeems, uma vez que os fornecedores e parceiros estão obrigados a respeitar nossa Política de Privacidade.  <br> <br>

              5. SERVIÇOS DE TERCEIROS <br> <br>

              5.1. Apesar do Programa utilizar os serviços do Facebook (www.facebook.com), na verdade ele não é endossado nem vinculado de forma direta a esta rede social, mas respeita seus Termos de Uso e sua Política de Privacidade. <br> <br>

              5.2. Para usufruir dos Serviços ora disponibilizados o Usuário também deverá estar ciente e de acordo os Termos de Uso e a Política de Privacidade dessa rede social, contudo, podem haver previsões conflitantes ou diversas, caso em que deverá ser respeitado a presente Política de Privacidade, em detrimento da Política do Facebook. <br> <br>

              6. O QUE MAIS VOCÊ PRECISA SABER SOBRE SUA PRIVACIDADE  <br> <br>

              6.1. Estamos preocupados com sua segurança e privacidade, sendo assim, gostaríamos de fazer algumas recomendações: <br> <br>
              a) Busque estar sempre informado sobre o funcionamento de serviços e aplicativos disponibilizados na internet, leia os Regulamentos, Termos de Uso e Políticas de Privacidade disponibilizados, eles são documentos extremamente importantes; <br> <br>
              b) Use senhas complexas, com combinações de letras e números que não tenham nenhum significado; <br> <br>
              c) Se você tiver filhos ou for responsável por menores de idade, ensine-os que a internet é um ambiente perigoso, diga-lhes para não preencherem formulários online sem a sua permissão e que nunca, em hipótese alguma, podem fornecer quaisquer senhas ou informações pessoais e outras pessoas, especialmente se não forem de sua confiança; <br> <br>

              6.2. O MeSeems poderá reter as informações coletadas pelo período que entender necessário, mesmo nos casos de cancelamento de Cadastro ou exclusão de Cliente e após o encerramento do Programa. <br> <br>

              6.3. O MeSeems poderá modificar sua Política de Privacidade a qualquer momento, portanto fique atento aos informativos enviados por e-mail e às publicações do Aplicativo e do nosso site, são através deles que faremos contato com você. <br> <br>

              6.4. Se você ainda tiver questões, considerações ou dúvidas sobre privacidade e segurança das informações, entre em contato com o MeSeems através do e-mail contato@meseems.com.br.")
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-blue-dash">Ok</button>
          </div>
        </div>
      </div>
    </div>

    <div id="createCategory" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Nova categoria</h4>
          </div>
          <div class="modal-body">
            <p class="font-10 text-uppercase font-bold">Nome da categoria</p>
            <div class="form-group">
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="ImageAnalysis" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Análise de Imagem</h4>
          </div>
          <div class="modal-body">
            <img src="../assets/img/dashboard/img-modal-images-analysis.jpg" class="img-responsive" alt="">

            <div class="imageAnalysisModalOptions">
              <div class="pull-left">

                <div class="paginator">
                  <nav>
                    <ul class="pagination">
                      <li><a href="#"><span class="icon dripicons-chevron-left"></span></a></li>
                      <li><a class="no-padding-horizontal" href="#"><strong>20</strong></a></li>
                      <li><a class="no-padding-horizontal">/</a></li>
                      <li><a class="no-padding-horizontal" href="#">21</a></li>
                      <li><a href="#"><span class="icon dripicons-chevron-right"></span></a></li>
                    </ul>
                  </nav>
                </div>

              </div>
              <div class="pull-right">
                <div class="icons-image">
                  <a href="#"><img src="../assets/img/dashboard/ic_modalImage_clockwise.png" alt="" title="Girar imagem à esquerda"></a>
                  <a href="#"><img src="../assets/img/dashboard/ic_modalImage_clock.png" alt="" title="Girar imagem à direita"></a>
                  <a href="#"><img src="../assets/img/dashboard/ic_modalImage_crop.png" alt=""  title="Editar imagem"></a>
                </div>
                <div class="icon-tag">
                  <a href="#"><img src="../assets/img/dashboard/ic_modalImage_tags.png" alt=""  title="Tags"></a>

                </div>
              </div>
            </div>

          </div>
          <div class="modal-footer footer-images">
            <a href="#cancel" class="footer-icons"><img src="../assets/img/dashboard/ic_action_not@2x.png" alt=""></a>
            <a href="#cancel" class="footer-icons"><img src="../assets/img/dashboard/ic_action_check@2x.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>

    <div id="saveFilter" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Salvar visualização</h4>
          </div>
          <div class="modal-body modal-save-filter">
            <p class="font-10 text-uppercase font-bold">Expressão</p>
            <input type="text" class="form-control" id="ic-filtrar" readonly placeholder="fem-18.34-a.b1-co-se">
            <input type="text" class="form-control" id="ic-mostrar" readonly placeholder="Aprovadas">

            <hr>
            <div class="row">
              <div class="col-md-2"></div>
              <div class="col-md-8">
                <div class="form-group">
                  <label for="" class="font-10 text-uppercase font-bold">Nome da visualização</label><br>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-md-2"></div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash modal-btn-confirm">Confirmar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="changeAdmin" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Administradores da Empresa</h4>
          </div>
          <div class="modal-body modal-change-admin">
            <p class="font-15 font-regular">Favor fornecer o endereço de e-mail do usuário que você deseja conceder a função de administrador da empresa:</p>
            <div class="form-group">
              <label for="" class="font-10 text-uppercase font-bold">E-mail</label>
              <input type="text" class="form-control">
            </div>
            <div class="spacing"></div>
            <div class="pull-right">
              <a href="#" class="btn btn-blue-dash">Conceder função</a>
            </div>
            <div class="clearfix"></div>

            <hr>

            <p class="font-15 font-regular">Selecione abaixo os usuários dos quais você deseja revogar a função de administrador da empresa:</p>
            <div class="table-enterprise">
              <div class="media">
                <div class="media-body media-middle">
                  <div class="checkbox checkbox-primary">
                    <input type="checkbox" id="checkbox2"  checked>
                    <label for="checkbox2">
                      Daniel Vasques
                    </label>
                  </div>
                </div>
                <div class="media-right media-middle">
                  daniel.vasques@meseems.com.br
                </div>
              </div>
            </div>

            <div class="spacing"></div>
            <div class="pull-right">
              <a href="#" class="btn btn-blue-dash">revogar função</a>
            </div>
            <div class="clearfix"></div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Fechar</button>
          </div>
        </div>
      </div>
    </div>

    <div id="projectDetails" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Detalhes do projeto</h4>
          </div>
          <div class="modal-body modal-project-details">
            <div class="media">
              <div class="media-left">
                <a href="#">
                  <img class="media-object" src="../assets/img/dashboard/libimg_A.jpg" alt="library">
                </a>
              </div>
              <div class="media-body">
                <h4 class="media-heading">LinkNow for Digital &reg; <i class="icon-verified"></i></h4>
                <p class="media-text">
                  Know if your digital ads are strong enough to run. Test ads in a day with Millward Brown’s validated copy testing solution.
                </p>
                <br>
                <p class="media-text">
                  The zeitgeist contends that the heat is an ox. The septal harp reveals itself as a calmy opera to those who look. Few can name a decent butane that isn't a chronic plate. We can assume that any instance of a treatment can be construed as an unmailed mustard. A taste is a daffy.
                </p>
                <br>

                <p class="media-text">
                  However, the border is a scraper. This is not to discredit the idea that a trusty rail is a texture of the mind. The detailed copyright reveals itself as a bangled value to those who look. The zeitgeist contends that a caprine stop's chard comes with it the thought that the woeful scarf is a drum. The trip of a ton becomes an antlike pair of shorts.
                </p>
                <br>

                <ul class="list-left">
                  <li> Overall Summary</li>
                  <li>Observed Behavioural Metrics</li>
                  <li>Predisposition - Persuasion</li>
                </ul>
              </div>
            </div>
            <hr>

            <div class="project-explanation">
              <div class="row">

                <div class="col-md-3">
                  <p class="title-project"><span class="icon dripicons-document-edit"></span> Elaboração</p>
                  <p class="text-project">Know if your digital ads are strong enough to run. Test ads in a day with Millward Brown’s validated copy testing solution.</p>
                  <figure>
                  <img src="../assets/img/dashboard/img_detalhes_01.jpg" alt="" class="img-responsive">
                  <figcaption>Legenda A</figcaption>
                  </figure>
                </div>
                <div class="col-md-1">
                  <p><span class="icon dripicons-chevron-right"></span></p>
                </div>
                <div class="col-md-3">
                  <p class="title-project"><span class="icon dripicons-direction"></span> Coleta de respostas</p>
                  <p class="text-project">Know if your digital ads are strong enough to run. Test ads in a day with Millward Brown’s validated copy testing solution.</p>
                  <figure>
                  <img src="../assets/img/dashboard/img_detalhes_02.jpg" alt="" class="img-responsive">
                  <figcaption>Legenda B</figcaption>
                  </figure>
                </div>
                <div class="col-md-1">
                  <p><span class="icon dripicons-chevron-right"></span></p>
                </div>
                <div class="col-md-3">
                  <p class="title-project"><span class="icon dripicons-graph-bar"></span> Análise de resultados</p>
                  <p class="text-project">Know if your digital ads are strong enough to run. Test ads in a day with Millward Brown’s validated copy testing solution.</p>
                  <figure>
                  <img src="../assets/img/dashboard/img_detalhes_03.jpg" alt="" class="img-responsive">
                  <figcaption>Legenda C</figcaption>
                  </figure>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-white-dash modal-btn-cancel">Cancelar</button>
            <button type="button" class="btn btn-blue-dash-action modal-btn-confirm">Começar projeto</button>
          </div>
        </div>
      </div>
    </div>


  </div>
  <script src="../assets/js/jquery-2.2.1.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <script src="../assets/js/googleCharts.js"></script>
  <script src="../assets/js/jstree.min.js"></script>
  <script src="../assets/js/dashboard.js"></script>

  <script>
    $(document).ready(function(){

      var jsonData = [
      {
        id: 1,
        text: "Folder 1",
        type: "root",
        state: {
          selected: false
        },
        children: [{
          id: 2,
          text: "Sub Folder 1",
          type: "child",
          state: {
            selected: false
          },
        }, {
          id: 3,
          text: "Sub Folder 2",
          type: "child",
          state: {
            selected: false
          },
        }]
      }, {
        id: 4,
        text: "Folder 2",
        type: "root",
        state: {
          selected: true
        },
        children: []
      }
      ];

  $('#folderTree').jstree({ //core do jstree, manter!
    core: {
      data: jsonData
    },
    types: {
      "root": {
        "icon": "dripicons-folder"
      },
      "child": {
        "icon": "dripicons-folder"
      },
      "default": {}
    },
    plugins: ["search", "themes", "types", "wholerow"]}).on('open_node.jstree', function(e, data) {
      data.instance.set_icon(data.node, "dripicons-folder-open");}).on('close_node.jstree', function(e, data) {data.instance.set_icon(data.node, "dripicons-folder");});

  });
</script>

<script>
  $(document).ready(function(){
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(genreChart);
    function genreChart() {
     var data = google.visualization.arrayToDataTable([
      ['Gênero', 'Porcentagem'],
      ['Masculino', 52],
      ['Feminino', 48],
      ]);

     var options = {
      chartArea: {
        width: '100%',
        height: '100%',
      },
      width: 200,
      height: 150,
      forceIFrame: 'true',
      pieHole: 0.60,
      colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
      legend: 'none',
      enableInteractivity: false,
      tooltip: {trigger: 'none'},
      pieSliceBorderColor: 'transparent',
      pieSliceText: 'percentage',
      pieSliceTextStyle: {
        fontSize: 9,
        bold: 'true'
      }
    };

    var chart = new google.visualization.PieChart(document.getElementById('genreChart'));
    chart.draw(data, options);
  }

  google.charts.setOnLoadCallback(ageChart);
  function ageChart() {
    var data = google.visualization.arrayToDataTable([
      ['Idades', 'Porcentagem'],
      ['40 >', 9],
      ['30 - 40', 18],
      ['25 - 30', 17],
      ['18 - 25', 41],
      ['< 18', 15]
      ]);

    var options = {
      chartArea: {
        width: '100%',
        height: '100%',
      },
      width: 200,
      height: 150,
      forceIFrame: 'true',

      pieHole: 0.60,
      colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
      legend: 'none',
      enableInteractivity: false,
      tooltip: {trigger: 'none'},
      pieSliceBorderColor: 'transparent',
      pieSliceText: 'percentage',
      pieSliceTextStyle: {
        fontSize: 9,
        bold: 'true'
      }
    };

    var chart = new google.visualization.PieChart(document.getElementById('ageChart'));
    chart.draw(data, options);
  }

  google.charts.setOnLoadCallback(socialClassChart);
  function socialClassChart() {
    var data = google.visualization.arrayToDataTable([
      ['Classe Social', 'Porcentagem'],
      ['A', 14],
      ['B1', 15],
      ['B2', 30],
      ['C1', 22],
      ['C2', 14],
      ['DE', 5],
      ]);

    var options = {
      chartArea: {
        width: '100%',
        height: '100%',
      },
      width: 200,
      height: 150,
      forceIFrame: 'true',
      pieHole: 0.60,
      colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
      legend: 'none',
      enableInteractivity: false,
      tooltip: {trigger: 'none'},
      pieSliceBorderColor: 'transparent',
      pieSliceText: 'percentage',
      pieSliceTextStyle: {
        fontSize: 9,
        bold: 'true'
      }
    };

    var chart = new google.visualization.PieChart(document.getElementById('socialClassChart'));
    chart.draw(data, options);
  }

  google.charts.setOnLoadCallback(residenceRegionChart);
  function residenceRegionChart() {
    var data = new google.visualization.arrayToDataTable([
      ['Região', 'Porcentagem'],
      ['Sudeste', 52],
      ['Nordeste', 24],
      ['Sul', 12],
      ['Centro Oeste', 8],
      ['Norte', 4],
      ]);

    var options = {
      chartArea: {
        width: '100%',
        height: '100%',
      },
      width: 200,
      height: 150,
      forceIFrame: 'true',
      pieHole: 0.60,
      colors: [ '#4FC1E9', '#F46F7D', '#FFCE54', '#6D537A', '#53F3B1', '#F5B378', '#F57156', '#C168AC' ],
      legend: 'none',
      enableInteractivity: false,
      tooltip: {trigger: 'none'},
      pieSliceBorderColor: 'transparent',
      pieSliceText: 'percentage',
      pieSliceTextStyle: {
        fontSize: 9,
        bold: 'true'
      }
    };

    var chart = new google.visualization.PieChart(document.getElementById('residenceRegionChart'));
    chart.draw(data, options);
  }
});
</script>

</body>
</html>