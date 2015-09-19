<?php
//set your email here:
$yourEmail = 'gabrielpeschl@gmail.com';
/*
 * CONTACT FORM
 */
//If the form is submitted
if(isset($_POST['submitted'])) { 
    //Check to make sure that the name field is not empty
    if($_POST['contact_name'] === '') { 
            $hasError = true;
    } else {
            $name = $_POST['contact_name'];
    }

    //Check to make sure sure that a valid email address is submitted
    if($_POST['contact_email'] === '')  { 
            $hasError = true;
    } else if (!preg_match("/^[a-z0-9]+([_\\.-][a-z0-9]+)*@([a-z0-9]+([\.-][a-z0-9]+)*)+\\.[a-z]{2,}$/i", $_POST['contact_email'])) {
            $hasError = true;
    } else {
            $email = $_POST['contact_email'];
    }

    //Check to make sure comments were entered	
    if($_POST['contact_textarea'] === '') {
            $hasError = true;
    } else {
            if(function_exists('stripslashes')) {
                    $comments = stripslashes($_POST['contact_textarea']);
            } else {
                    $comments = $_POST['contact_textarea'];
            }
    }

    //If there is no error, send the email
    if(!isset($hasError)) {

            $emailTo = $yourEmail;
            $subject = "Message From Your Website";
            $body = "Name: $name \n\nEmail: $email \n\nComments: $comments";
            $headers = 'From : my site <'.$emailTo.'>' . "\r\n" . 'answer to : ' . $email;

            mail($emailTo, $subject, $body, $headers);

            $emailSent = true; 
    }
    
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- PAGE TITLE -->
    <title>DaPaz</title>
    <!-- MAKE IT RESPONSIVE -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="./css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- MAIN STYLE -->
    <link href="./css/customize.css" rel="stylesheet" media="screen">
    <link href="./style.css" rel="stylesheet" media="screen">
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="./js/html5shiv.js"></script>
      <script src="./js/respond.min.js"></script>
    <![endif]-->
  </head>
  <!-- START BODY -->
  <body>
	<div id="page">
		<!-- PHP ALERTS FROM THE FORMS -->
	  <?php if(isset($emailSent) && $emailSent == true) { ?>
	        <div class="alert-success alert" >
	            <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
	            <strong><?php echo'Obrigado!, '. $name  .'.';?></strong>
	                <p><?php echo'Sua mensagem foi enviada e será prontamente respondida por algum hacker cívico!.'; ?></p>
	        </div><!-- .alert -->
	    <?php } ?>
	    <?php if(isset($hasError) && $hasError == true) { ?>
	        <div class="alert-danger alert">
	            <a class="close icon" data-dismiss="alert" href="#"><span class="icon icon-close"></span></a>
	            <strong><?php echo'Desculpa,'; ?></strong>
	                <p><?php echo'Isso pode ser constrangedor, mas sua mensagem não foi enviada. Por favor, confira se os campos foram preenchidos corretamente. '; ?></p>
	        </div><!-- .alert -->
	    <?php } ?>
	    <!-- END ALERT -->
		<!-- START MAIN CONTAINER -->
		<div id="main-container">
		
			<!-- START NAVIGATION -->
			<div class="sticky-wrapper">
				<nav id="navigation">
					<div class="container">
						<!-- LOGO GOES HERE -->
						<a href="#" id="logo"><img src="./images/logo.png" alt="Logo Image"></a>
						<!-- MENU -->
						<nav>
							<ul id="menu">
								<li><a href="#project">Projeto</a></li>
								<li><a href="http://dapaz.heroku.com/">CuritibaDaPaz</a></li>
								<li><a href="#team">Time</a></li>
								<li><a href="#suacidade">#DaPaz na sua cidade</a></li>
								<li><a href="#contact">Contato</a></li>
							</ul>
						</nav>
					</div>
				</nav>
			</div>
			<!-- END NAVIGATION -->
			
			<!-- START PROJECT SECTION -->
			<section id="project" class="section" >
				<span class="sequence-prev" ></span>
				<span class="sequence-next" ></span>
	            <ul class="sequence-canvas">
	            	<li class="animate-in" style="background-image: url('images/slider/codeforcuritiba.jpg');">
		            	<div class="slide-content">
			            	<h1>Bem-vindo!</h1>
			            	<h3>Nós somos #DaPaz. Nosso objetivo é ajudar você a encontrar ONGs e instituições focadas em moradores de ruas e refugiados. </h3>
		            	</div>
	            	</li>
	            	<li style="background-color: #82b440;">
		            	<div class="slide-content">
			            	<h1>Nosso projeto</h1>
			            	<h3>Através de pontos em um mapa, você pode facilmente localizar instituições que ajudam refugiados e moradores de ruas. Nós funcionamos como uma ponte, que liga você até essas instituições. <a href="http://dapaz.heroku.com/">Ir para o mapa!</a> </h3>
			                 	</div>
	            	</li>
	             </ul>
            	<ul class="sequence-pagination">
					<li>Bem-vindo</li>
					<li>Nosso projeto</li>
				</ul>
			</section>
			<!-- END PROJECT SECTION -->
		
			<!-- START TEAM SECTION -->
			<section id="team" class="center section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header">
					<h1>Quem faz parte do time?</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content section-no-top-padding">
					<div class="container">
						<h3>Somos uma equipe de <span class="colored">Hackers Cívicos</span> e prestamos serviços públicos de maneira voluntária. Nós acreditamos que, com as nossas próprias mãos, não precisamos nos candidatar a um cargo público para mudar nossa cidade! Sendo assim, nos encontramos toda a Quarta-feira, nos eventos do <span class="colored">CodeForCuritiba</span> para realizar o <span class="colored">DaPaz</span>. 
						Nosso objetivo é levar informações, através de pontos geográficos, sobre instituições que prestam serviços a refugiados e moradores de ruas. Nossos hackers garantem que essas instituições são de confiança, assim, você pode ajudar sem receio! 
						Não ficamos com nenhuma porcentagem de doação. Apenas somos uma ponte ligando você a pessoas necessitadas!
						</h3>
					</div>
				</div>
			</section>
			<!-- END TEAM SECTION -->
		
				<!-- NA SUA CIDADE -->
			<section id="suacidade" class="center section with-arrow">
				<!-- SECTION TITLE -->
					<h1>Como levar o #DaPaz para a sua cidade?</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content section-no-top-padding">
					<div class="container">
						<h3>Entre em contato e providenciaremos informações de como levar o #DaPaz em sua ciade.
						Confira as cidades com o serviço:
						<li><a href="http://dapaz.heroku.com/">CuritibaDaPaz</a></li>
									
					</h3>
					</div>
				</div>
			</section>
			<!-- END TEAM SECTION -->
		


		
			
			<!-- START CONTACT SECTION -->
			<section id="contact" class="section with-arrow">
				<!-- SECTION TITLE -->
				<div class="section-header with-arrow">
					<h1>Entre em contato!</h1>
					<hr>
				</div>
				<!-- SECTION CONTENT -->
				<div class="section-content">
					<div class="container">
						<div class="row">	
							<!-- CONTACT TEXT -->
							<div class="col-md-6">
								<p>Preecha o formulário abaixo e nossos hackers responderam prontamente!</p>
								<!-- SOCIAL BUTTTONS -->
								<ul class="social-list">
									<li><a href="https://www.facebook.com/Da-Paz-1467102053597883" class="btn btn-facebook"><span class="icon icon-facebook"></span> Like our Page on Facebook</a></li>
																	</ul>
							</div>
							<div class="col-md-6">
								<!-- CONTACT FORM -->
				                <form class="form-horizontal" method="post" action="index.php" id="form">
				                  <div class="form-group">
				                    <label for="contact_name" class="col-lg-2 control-label">Nome completo</label>
				                    <div class="col-lg-10">
				                      <input type="text" class="form-control" name="contact_name">
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label for="contact_email" class="col-lg-2 control-label">E-mail</label>
				                    <div class="col-lg-10">
				                      <input type="email" class="form-control" name="contact_email">
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <label for="contact_textarea" class="col-lg-2 control-label">Mensagem</label>
				                    <div class="col-lg-10">
				                      <textarea class="form-control" rows="3" name="contact_textarea"></textarea>
				                    </div>
				                  </div>
				                  <div class="form-group">
				                    <div class="col-lg-offset-2 col-lg-10">
				                      <input type="hidden" name="submitted" id="submitted" value="true" />
				                      <button type="submit" class="btn btn-default btn-send" name="submitted"><i data-icon="&#xe00d;"></i>Enviar ;)</button>
				                    </div>
				                  </div>
				                </form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- END CONTACT SECTION -->
			
			<!-- START FOOTER SECTION -->
			<section id="footer" class="section section-full-colored">
				<div class="section-content center">
					<p>Desenvolvido com &#9829; por hackers do <a href="http://www.openbrazil.org/">CodeForCuritiba </a></p>
				</div>
			</section>
			<!-- END FOOTER SECTION -->
		
		</div>
		<!-- END MAIN CONTAINER -->
		
		<!-- PAGE LOADING-->
		<div id="loader"></div>
  	</div>
    <!-- SCRIPTS -->
    <script src="http://code.jquery.com/jquery.js"></script>
	<script src="./js/alert.js"></script>
	<script src="./js/jquery.sequence-min.js"></script>
    <script src="./js/jquery.fancybox.pack.js"></script>
    <script src="./js/jquery.scrollUp.min.js"></script>
    <script src="./js/jquery.smoothscroll.min.js"></script>
    <script src="./js/jquery.meanmenu.min.js"></script>
    <script src="./js/pace.min.js"></script>
    <script src="./js/jquery.flexslider-min.js"></script>
    <script src="./js/custom.js"></script>
  </body>
  <!-- END BODY -->
</html>