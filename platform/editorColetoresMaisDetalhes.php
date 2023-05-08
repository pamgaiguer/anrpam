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
  <div class="collectors-page-details">
    <div class="page-content">

      <div class="indicators">
        <a href="editorColetores" class="font-10 text-uppercase font-bold pull-left">
          <span class="font-16 icon dripicons-chevron-left"></span> Voltar
        </a>

        <ol class="breadcrumb pull-left">
          <li><a href="#">Todos coletores</a></li>
          <li class="active">Coletor Fase 1 - Amostra B - Setembro</li>
        </ol>
      </div>

      <div class="clearfix"></div>

      <div class="details">

        <div class="details-panel">
          <div class="details-left">
            MeSeems
          </div>
          <div class="details-body">

        <label class="switch">
          <input type="checkbox" id="checkActive" checked>
          <div class="slider-switch round"></div>
          <label for="checkActive">Ativo</label>
        </label>

          </div>
          <div class="details-right">
            <p><a href="#"><span class="icon dripicons-trash"></span></a></p>
            <div class="icons-title pull-right">
              <ul class="list-unstyled list-inline pull-right">
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#"><span class="icon dripicons-archive"></span> Mover para pasta</a>
                    </li>
                    <li><a href="#"><span class="icon dripicons-user-group"></span> Compartilhar</a>
                    </li>
                    <li><a href="#"><span class="icon dripicons-trash"></span> Deletar</a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="details-main">

          <h3 class="font-20 font-regular">
            Coletor Fase 1 - Amostra B - Setembro
          </h3>
          <div class="spacing"></div>
          <h5 class="font-12 gray-dark">
            Criado em 27/09/16, por Andrea Napolitano
          </h5>
          <div class="spacing"></div>
          <hr>

          <div class="row">
            <div class="col-md-4">
              <p class="chart-label">
                respostas hoje
              </p>
              <p class="chart-number">
                250
                <span class="red-dash">
                  <span class="icon dripicons-arrow-down"></span>
                </span>
              </p>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <p class="chart-label">
                total de respostas
              </p>
              <p class="chart-number">
                1334
              </p>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <p class="chart-label">
                Período de coleta
              </p>
              <a href="#" class="chart-date">
                27/09/16 - 27/10/16 <span class="icon dripicons-calendar"></span>
              </a>
              <div class="spacing"></div>
              <div class="spacing"></div>
              <div class="spacing"></div>
            </div>
            <div class="col-md-8">
              <div class="details-chart">
                área reservada para o gráfico / lib-plugin TbD
              </div>
            </div>
          </div>

          <hr>

          <p class="chart-label">
            Tamanho da amostra
          </p>
          <p class="chart-text">
            300
          </p>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <p class="chart-label">
            Perfil demográfico
          </p>
          <p class="chart-text">
            Brasil - Masculino, Feminino - 25-39 - A, B1, B2, C1 - Sudeste, Centro-Oeste
          </p>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <p class="chart-label">
            Perfil complementar
          </p>
          <p class="chart-text">
            Consumo <span class="icon dripicons-chevron-right"></span>
            Alcóolicos <span class="icon dripicons-chevron-right"></span>
            Cerveja
          </p>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <p class="chart-label">
            Cotas
          </p>
          <p class="chart-text-disabled">
            Sem contas
          </p>

          <hr>

          <p class="font-15 font-regular">
            Relatório de Análise contratado <span class="green-dash font-bold"><span class="icon dripicons-checkmark"></span></span>
          </p>

          <hr>

          <p class="chart-label">
            status do pagamento
          </p>

          <div class="status-details">
            <span><i class="icon-circle"></i> Ativo</span>
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