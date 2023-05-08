<?php include 'includes/header.php';?>
<?php include 'includes/_mainNavbar.php';?>

<div id="page-content-wrapper">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">

        <div class="page-content">
          <div class="spacing"></div>
          <div class="account-details">

            <div class="panel panel-default">
              <div class="panel-body">

                <div class="row">
                  <div class="col-lg-6">

                    <p class="font-12 font-bold gray-dark text-uppercase"><span class="icon dripicons-user-id"></span> Informações Pessoais</p>

                    <div class="spacing"></div>

                    <div class="row">
                      <div class="form-group col-lg-10">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control has-finished" placeholder="Nome" value="Jon">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-lg-10">
                        <label for="name">Sobrenome</label>
                        <input type="text" class="form-control has-finished" placeholder="Sobrenome" value="Snow">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-lg-10">
                        <label for="name">E-mail de acesso</label>
                        <input type="email" class="form-control has-finished" placeholder="E-mail de acesso" value="jon.snow@mindminers.com">
                      </div>
                      <div class="form-group col-lg-2">
                        <div class="btn-validate">
                          <button class="btn btn-link"><span class="font-10 font-bold blue-light text-uppercase"><span class="icon dripicons-checkmark"></span> validar</span></button>
                        </div>
                      </div>
                    </div>

                    <div class="row">

                      <div class="form-group col-lg-10">
                        <label for="name">CPF</label>
                        <input type="text" class="form-control cpf has-finished" placeholder="CPF" value="693.455.838-31">
                      </div>
                    </div>

                    <div class="row">
                      <div class="form-group col-lg-10">
                        <label for="name">Telefone de contato</label>
                        <input type="text" class="form-control tel has-finished" placeholder="Telefone de Contato" value="(11) 9 7624-3569">
                      </div>
                    </div>

                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <div class="clearfix"></div>

                    <p class="font-12 font-bold gray-dark text-uppercase">
                      <span class="icon dripicons-gear"></span> Configurações
                    </p>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <a href="#" class="btn btn-blue-dash-sm">Alterar senha</a>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <label class="switch">
                      <input type="checkbox" id="mailWarnsNews" name="checkLink" checked>
                      <div class="slider-switch round"></div>
                    </label>
                    <label for="mailWarnsNews" class="switch-label-inline-block">E-mails de avisos &amp; notícias</label>

                    <div class="clearfix"></div>

                    <label class="switch">
                      <input type="checkbox" id="mailsInteractions" name="checkLink" checked>
                      <div class="slider-switch round"></div>
                    </label>
                    <label for="mailsInteractions" class="switch-label-inline-block">E-mails de acompanhamento de interações</label>
                  </div>

                  <div class="col-lg-6">
                    <div class="clearfix"></div>
                    <p class="font-12 font-bold gray-dark text-uppercase"><span class="icon dripicons-blog"></span> Informações Profissionais</p>

                    <div class="spacing"></div>

                    <div class="form-group">
                      <label for="name">Empresa</label>
                      <input type="text" class="form-control has-finished" placeholder="Empresa" value="MindMiners">
                    </div>

                    <div class="form-group">
                      <label for="name">Seu cargo</label>
                      <input type="text" class="form-control has-finished" placeholder="Seu cargo" value="Analista">
                    </div>

                    <div class="form-group">
                      <label for="name">Telefone comercial</label>
                      <input type="text" class="form-control tel has-finished" placeholder="Telefone Comercial" value="(11) 9 4507-5601">
                    </div>

                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <p class="font-12 font-bold gray-dark text-uppercase"><span class="icon dripicons-article"></span> Cadastro da Empresa</p>

                    <div class="form-group">
                      <label for="name">Nome da Empresa</label>
                      <input type="text" class="form-control has-finished" placeholder="Nome da empresa" value="MindMiners" disabled>
                    </div>

                    <div class="form-group">
                      <label for="name">Área de atuação</label><br>
                      <select name="" id="" class="form-control" disabled>
                        <option value="0">Inteligência de Mercado</option>
                        <option value="1">Marketing</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="name">Website da empresa</label>
                      <input type="text" class="form-control has-finished" placeholder="Website da empresa" value="www.mindminers.com.br" disabled>
                    </div>

                    <div class="form-group">
                      <label for="name">CNPJ</label>
                      <input type="text" class="form-control cnpj has-finished" placeholder="CNPJ" value="19.381.669/0001-07" disabled>
                    </div>

                    <div class="spacing"></div>
                    <div class="spacing"></div>

                    <div class="form-group">
                      <a href="#" class="btn btn-blue-dash-sm" disabled>Editar Administradores</a>
                    </div>

                  </div>
                </div>

                <div class="spacing"></div>
                <div class="spacing"></div>
                <div class="spacing"></div>

                <div class="text-center">
                  <a href="#" class="btn btn-white-dash">Cancelar</a>
                  <a href="#" class="btn btn-blue-dash margin-left-10">Salvar</a>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>