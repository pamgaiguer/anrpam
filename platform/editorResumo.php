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
            <li class="active"><a href="editorResumo.php"><span class="icon dripicons-article"></span> Resumo <span class="icon dripicons-chevron-right"></span></a></li>
            <li><a href="editorQuestionario.php"><span class="icon dripicons-document-edit"></span> Editor de Questionário <span class="icon dripicons-chevron-right"></span></a></li>
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

<div id="page-content-wrapper">
  <div class="resume-page">

    <div class="row">

      <div class="col-md-5">
        <div class="project-resume">
          <p class="project-resume-label">Nome do projeto</p>
          <h3 class="font-17 font-bold gray-dark name-project" contenteditable="true">Projeto novo produto <span class="icon dripicons-pencil"></span></h3>
          <hr>
          <p class="project-resume-label">Número de perguntas</p>
          <h3 class="font-15 font-bold font-15">10 </h3>
          <p class="project-resume-label">Formato</p>
          <h3 class="project-resume-text"> <span class="format bg-yellow-dash">Questionário</span> </h3>
          <p class="project-resume-label">Período de coleta</p>
          <h3 class="project-resume-dates"><a href="#">02/07/16/ - 12/07/16 <span class="icon dripicons-calendar"></span></a> </h3>
          <p class="project-resume-label">Saúde</p>
          <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
          </div>
          <h3 class="font-15 font-bold font-15 text-center">50%</h3>
          <p class="project-resume-label">Idiomas</p>
          <h3 class="project-resume-text">
            <select class="form-control">
              <option value="#">Português</option>
              <option value="#">Inglês</option>
            </select>
          </h3>
          <div class="spacing"></div>
          <div class="spacing"></div>
          <div class="btn-action text-center">
            <button class="btn btn-white-dash">Cancelar</button>
            <button class="btn btn-blue-dash">Salvar</button>
          </div>
        </div>
      </div>

      <div class="col-md-7">
        <div class="project-resume-blocks">

          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title pull-left">

                <label class="switch">
                  <input type="checkbox" checked>
                  <div class="slider-switch round"></div>
                  <span class="switch-label">Ativo</span>
                </label>

              </h3>
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
                <a href="#"><span class="icon dripicons-preview"></span></a>
                <a href="#"><span class="icon dripicons-document-edit"></span></a>
                <a href="#"><span class="icon dripicons-graph-bar"></span></a>
              </div>
              <div class="clearfix"></div>
            </div>
            <div class="panel-body">
              <h1 class="text-center font-50 font-bold">1.682</h1>
              <h6 class="text-center text-uppercase font-10 font-bold">respostas</h6>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title pull-left">
                    Link
                  </h3>
                  <div class="icons-title pull-right">
                    <i class="circle bg-green-dash">circle</i>
                    <span class="font-10 font-bold text-uppercase">coletor ativo</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <h1 class="text-center font-30 font-bold">348</h1>
                  <h6 class="text-center text-uppercase font-10 font-bold">respostas</h6>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title pull-left">
                    MeSeems
                  </h3>
                  <div class="icons-title pull-right">
                    <i class="circle bg-green-dash">circle</i>
                    <span class="font-10 font-bold text-uppercase">coletor ativo</span>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-body">
                  <h1 class="text-center font-30 font-bold">1.334</h1>
                  <h6 class="text-center text-uppercase font-10 font-bold">respostas</h6>
                </div>
              </div>
            </div>
          </div>

          <div class="panel-chart">
            <div class="panel">
              área reservada para o gráfico / lib-plugin TbD
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
<script src="../assets/js/googleCharts.js"></script>
<script src="../assets/js/jstree.min.js"></script>
<script src="../assets/js/nouislider.min.js"></script>
<script src="../assets/js/dashboard.js"></script>
</body>
</html>