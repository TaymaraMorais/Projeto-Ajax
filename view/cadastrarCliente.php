<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Veterinário Online - Cadastrar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Little Closet template">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../styles/bootstrap-4.1.2/bootstrap.min.css">
<link href="../plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="../plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="../styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="../styles/responsive.css">
</head>
<body>

<!-- Menu -->



<div class="super_container">

	<!-- Header -->

	<header class="header">
		<div class="header_overlay"></div>
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo">
				<a href="../index.php">
					<div class="d-flex flex-row align-items-center justify-content-start">
						<div><img src="../img/logo_1.png" alt=""></div>
						<div>Veterinário Online</div>
					</div>
				</a>	
			</div>
		</div>
    </header>
</div>
<br> <br> <br> <br> <br>
<div class="alert" id="alert" role="alert"></div>

<div class="col-5 mx-auto">
      <div class="signup-form">
        <form action="" id="cadUsuario" method="post">
          <h2 class="text-center">Registro</h2>
          <p class="hint-text">Crie sua conta agora </p>
          <div class="form-group">
            <input type="text" class="form-control"  name="nome" id="nome" placeholder="Nome completo" required>
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="cpf" id="cpf" placeholder="CPF" required>
          </div>
          
          <div class="form-group">
            <input type="email" class="form-control"  name="email" id="email" placeholder="E-mail" required>
          </div>


          <div class="form-group">
            <input type="text" class="form-control" value="" name="usuario" id="usuario" placeholder="Nome de usuário" required>
          </div>

          <div class="form-group">
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha" required>
          </div>

            

          <div class="form-group">
            <button type="submit" id="salvar" class="btn btn-success btn-lg btn-block">Registre agora</button>
          </div>
        </form>
        <div class="text-center">Já tem uma conta? 
          <button type="link" class="btn btn-primary btn-lg btn-block"><a class="text-light" href="loginUsuario.php">Login</a>
          </button>
        </div>





      </div>

    </div>

  </div>

  


<script src="../js/jquery-3.2.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
        /// Quando usuário clicar em salvar serão feitos todos os passos abaixo
        $('#salvar').click(function() {
            var nome = $('#nome').val();
            var cpf = $('#cpf').val();
            var email = $('#email').val();
            var usuario = $('#usuario').val();
            var senha = $('#senha').val();

      $('#alert').html('');
      if (nome == '') {
        $('#alert').html('Preencher o nome.');
        $('#alert').addClass("alert-danger");
        return false;       
      }

      $('#alert').html('');
      if (cpf == '') {
        $('#alert').html('Preencher o cpf.');
        $('#alert').addClass("alert-danger");
        return false;
      }

      $('#alert').html('');
      if (email == '') {
        $('#alert').html('Preencher o email.');
        $('#alert').addClass("alert-danger");
        return false;
      }

      $('#alert').html('');
      if (usuario == '') {
        $('#alert').html('Preencher o usuário.');
        $('#alert').addClass("alert-danger");
        return false;
      }

      $('#alert').html('');
      if (senha == '') {
        $('#alert').html('Preencher a senha.');
        $('#alert').addClass("alert-danger");
        return false;
      }

      $('#alert').html('');
            var dados = $('#cadUsuario').serialize();
            
            $.ajax({
                    type: 'POST',
                    dataType: 'json',
                    url: '../controller/UsuarioController.php',
                    async: true,
                    data: dados,

                    success: function(response) {
                                  

                    },
                    error: function(req, err){ console.log('Mensagem:' + err); }
            });
            $('form').trigger("reset");
                                  $('#alert').addClass("alert-success");
                                  $('#alert').fadeIn().html('Registro salvo com sucesso');
            return false;
        });
      
    });
</script>
<script src="../styles/bootstrap-4.1.2/popper.js"></script>
<script src="../styles/bootstrap-4.1.2/bootstrap.min.js"></script>
<script src="../plugins/greensock/TweenMax.min.js"></script>
<script src="../plugins/greensock/TimelineMax.min.js"></script>
<script src="../plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="../plugins/greensock/animation.gsap.min.js"></script>
<script src="../plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="../plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="../plugins/easing/easing.js"></script>
<script src="../plugins/progressbar/progressbar.min.js"></script>
<script src="../plugins/parallax-js-master/parallax.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>