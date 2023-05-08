<?php include 'includes/header.php';?>

<div id="nav-content-wrapper">
  <nav class="navbar navbar-default" id="navbar-projects-management">
    <div class="container-fluid">
      <div class="row">

        <div class="col-lg-8">
          <a href="#menu-toggle" class="btn pull-left" id="menu-toggle">
            <i class="fa fa-navicon"></i>
          </a>
          <ul class="nav navbar-nav">
            <li>
              <input type="search" placeholder="Pesquisar projeto" class="search-field">
              <span class="icon dripicons-search"></span>
            </li>

            <li class="nav-border-left"><a href="#"><span class="icon dripicons-chevron-left"></span></a>
            </li>
            <li class="active"><a href="#"><span class="icon dripicons-folder-open"></span> Gerenciar Projetos </a>
            </li>
          </ul>
        </div>

        <div class="col-lg-4">
          <ul class="nav navbar-nav navbar-right" id="links-right">


            <li class="nav-border-right"><a href="#"><span class="icon dripicons-plus"></span><span class="icon dripicons-folder"></span> Criar pasta</a>
            </li>
            <li class="pull-right notification-bell"><a href="#"><span class="icon dripicons-bell"><span class="badge">4</span></a> </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
</div>

<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="page-content">
          <div class="projects-list">
            <table class="table">
              <thead>
                <tr>
                  <th></th>
                  <th colspan="3">Nome</th>
                  <th>Modificado em <span class="icon dripicons-arrow-thin-down"></span></th>
                  <th>Proprietário</th>
                  <th>Ações</th>
                </tr>
              </thead>
              <tbody>
                <tr class="folder-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-folder"></span></td>
                  <td><a href="">H2OH!</a></td>
                  <td></td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">A</p>
                      <p class="letter-initial initial-two">N</p>
                    </div>
                    <span>Andrea Napolitano</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-user-group"></span></a>
                    <a href="#"><span class="icon dripicons-archive"></span></a>
                    <a href="#"><span class="icon dripicons-trash"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>

                <tr class="folder-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-folder"></span>
                  </td>
                  <td><a href="">Pepsi</a></td>
                  <td></td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">F</p>
                      <p class="letter-initial initial-two">M</p>
                    </div>
                    <span>Fernando Martins</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-user-group"></span></a>
                    <a href="#"><span class="icon dripicons-archive"></span></a>
                    <a href="#"><span class="icon dripicons-trash"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>

                <tr class="folder-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-folder"></span>
                  </td>
                  <td><a href="">Ruffles</a></td>
                  <td></td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">A</p>
                      <p class="letter-initial initial-two">N</p>
                    </div>
                    <span>Andrea Napolitano</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-user-group"></span></a>
                    <a href="#"><span class="icon dripicons-archive"></span></a>
                    <a href="#"><span class="icon dripicons-trash"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>

                <tr class="folder-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-folder"></span>
                  </td>
                  <td><a href="">Toddy</a></td>
                  <td></td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">A</p>
                      <p class="letter-initial initial-two">N</p>
                    </div>
                    <span>Andrea Napolitano</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-user-group"></span></a>
                    <a href="#"><span class="icon dripicons-archive"></span></a>
                    <a href="#"><span class="icon dripicons-trash"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>

                <tr class="project-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-checklist yellow-quest"></span></td>
                  <td><a href="">How Plasma Tvs And Lcd Tvs Differ</a></td>
                  <td><span><i class="icon-circle"></i> Ativo</span>
                  </td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">A</p>
                      <p class="letter-initial initial-two">N</p>
                    </div>
                    <span>Andrea Napolitano</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-preview"></span></a>
                    <a href="#"><span class="icon dripicons-document-edit"></span></a>
                    <a href="#"><span class="icon dripicons-graph-bar"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>

                <tr class="project-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-location purple-geoloc"></span></td>
                  <td><a href="">LinkNow for Digital</a></td>
                  <td><span><i class="icon-circle bg-red-dash"></i> Inativo</span>
                  </td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">A</p>
                      <p class="letter-initial initial-two">N</p>
                    </div>
                    <span>Andrea Napolitano</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-preview"></span></a>
                    <a href="#"><span class="icon dripicons-document-edit"></span></a>
                    <a href="#"><span class="icon dripicons-graph-bar"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>

                <tr class="project-line" draggable="true">
                  <td><span class="icon dripicons-dots-3"></span></td>
                  <td><span class="icon dripicons-message blue-feedback"></span></td>
                  <td><a href="">Windows Registry Checklist</a></td>
                  <td><span><i class="icon-circle"></i> Ativo</span>
                  </td>
                  <td>27/09/16</td>
                  <td>
                    <div class="user-avatar">
                      <p class="letter-initial initial-one">A</p>
                      <p class="letter-initial initial-two">N</p>
                    </div>
                    <span>Andrea Napolitano</span>
                  </td>
                  <td>
                    <a href="#"><span class="icon dripicons-preview"></span></a>
                    <a href="#"><span class="icon dripicons-document-edit"></span></a>
                    <a href="#"><span class="icon dripicons-graph-bar"></span></a>
                    <ul class="list-unstyled" style="display: inline-block;">
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="caret"></span></a>
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
                  </td>
                </tr>
              </tbody>
            </table>

            <button class="btn btn-blue-dash-action">
              <span class="icon dripicons-document-new"></span> Começar novo projeto
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
<script src="../assets/js/dashboard.js"></script>
</body>
</html>