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

    <div class="row">
      <div class="col-md-offset-3 col-md-5">
        <h3 class="font-15 font-bold">Tipos de input</h3>
        <div>
          <div class="form group">
            <label>Classe comum <code>form-control</code> </label>
            <input type="text" class="form-control" placeholder="Sem edição">
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="form group">
            <label>Classe comum com estilo na pseudoclasse <code>form-control:focus</code> </label>
            <input type="text" class="form-control" placeholder="Editando">
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="form group">
            <label>Classe desenvolvida <code>has-finised</code> </label>
            <input type="text" class="form-control has-finished" value="Teste RGB">
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="form group">
            <label>Classe desenvolvida <code>has-finised-with-error</code> </label>
            <input type="text" class="form-control has-finished-with-error" placeholder="Editado com erro">
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="form group">
            <label>Classe desenvolvida <code>not-finised-with-error</code> </label>
            <input type="text" class="form-control not-finished-with-error" placeholder="Sem edição com erro">
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <span>Classe bootstrap <code>has-success</code> adaptada </span>
          <div class="form-group has-success has-feedback">
            <input type="text" class="form-control" placeholder="Editado avaliado positivo">
            <span class="icon dripicons-checkmark form-control-feedback" aria-hidden="true"></span>
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <span>Classe bootstrap <code>has-warning</code> adaptada </span>
          <div class="form-group has-warning has-feedback">
            <input type="text" class="form-control" placeholder="Editado avaliado aviso">
            <span class="icon dripicons-warning form-control-feedback" aria-hidden="true"></span>
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <span>Classe bootstrap <code>has-error</code> adaptada </span>
          <div class="form-group has-error has-feedback">
            <input type="text" class="form-control" placeholder="Editado avaliado negativo">
            <span class="icon dripicons-cross form-control-feedback" aria-hidden="true"></span>
          </div>

          <div class="spacing"></div>
          <div class="spacing"></div>

          <div class="spacing"></div>
          <div class="spacing"></div>


        </div>
      </div>
    </div>


  </div>
  <?php include 'includes/footer.php';?>