<?php 
  require_once 'model/vaga.php';
 ?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>RayJobs &mdash; Vagas de Empregos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
  
    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>

  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    
    <header class="site-navbar py-1" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0"><a href="index.php" class="text-black h2 mb-0">Ray<strong>Jobs</strong></a></h1>
          </div>

          <div class="col-10 col-xl-10 d-none d-xl-block">
            <nav class="site-navigation text-right" role="navigation">

              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                <li class="active"><a href="index.php">Home</a></li>
                
                <li class="active"><a href="contato.php">Contato</a></li>
              
              </ul>
            </nav>
          </div>

          <div class="col-6 col-xl-2 text-right d-block">
            
            <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

          </div>

        </div>
      </div>
      
    </header>

    <div class="unit-5 overlay" style="background-image: url('images/hero_bg_2.jpg');">
      <div class="container text-center">
        <h2 class="mb-0">Vagas Cadastradas</h2>
        <p class="mb-0 unit-6"><a href="index.php">Home</a> <span class="sep"></span> <span>Empresa</span></p>
      </div>
    </div>

    
    

    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
       
          <div class="col-md-12 col-lg-8 mb-5">
          
            
 <div class="form-group col-12">
<?php 
    $vaga = new vaga();

    if (count($_POST) > 0)
    {
      //enviar o update para o BD
      $vaga->alterar($_GET['id'], $_POST);

      header('Location: lista_vaga.php');
    }

    $selecao = $vaga->selecionar($_GET['id']);

  ?>
  <form method="post">


    <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Cargo</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" id="cargo" name="cargo" class="form-control" placeholder="Nome do Cargo" value="<?php echo $selecao[0]['cargo'] ?>">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Tipo de Vaga</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="opcaoa1">
                    <input type="radio" id="opcaoa1" name="tipo_vaga" value="Tempo Integral"> Tempo Integral
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="opcao2">
                    <input type="radio" id="opcao2" name="tipo_vaga" value="Meio período"> Meio Período
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="opcao3">
                    <input type="radio" id="opcao3" name="tipo_vaga" value="Freelance"> Freelance
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="opcao4">
                    <input type="radio" id="opcao4" name="tipo_vaga" value="Estágio"> Estágio
                  </label>
                </div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <label for="opcao5">
                    <input type="radio" id="opcao5" name="tipo_vaga" value="Temporário"> Temporário
                  </label>
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Cidade</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="<?php echo $selecao[0]['cidade'] ?>">
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Descrição da Vaga</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="descricao" class="form-control" id="descricao" cols="30" rows="5" value="<?php echo $selecao[0]['descricao'] ?>"></textarea>
                </div>
              </div>

              <div class="row form-group mb-4">
                <div class="col-md-12"><h3>Requisitos</h3></div>
                <div class="col-md-12 mb-3 mb-md-0">
                  <textarea name="requisitos" class="form-control" id="requisitos" cols="30" rows="5" value="<?php echo $selecao[0]['requisitos'] ?>"></textarea>
                </div>
              </div>
   

    <button>Salvar</button>
  </form>      </div>    
       </div>
      </div>
    </div>
   
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/main.js"></script>
    
  </body>
</html>