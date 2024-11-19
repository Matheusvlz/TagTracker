<?php require '/var/www/html/projetoFinal4/MVC/Controller/User_Home_Controller.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tela Inicial</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<style>
body{
	margin:0;
	color:#6a6f8c;
	background:#FFFFFF;
	font:600 16px/18px 'Open Sans',sans-serif;
}
*,:after,:before{box-sizing:border-box}
.clearfix:after,.clearfix:before{content:'';display:table}
.clearfix:after{clear:both;display:block}
a{color:inherit;text-decoration:none}

.login-wrap{
	width:100%;
	margin:auto;
	max-width:525px;
	min-height:670px;
	position:relative;
	background:url(https://raw.githubusercontent.com/khadkamhn/day-01-login-form/master/img/bg.jpg) no-repeat center;
	box-shadow:0 12px 15px 0 rgba(0,0,0,.24),0 17px 50px 0 rgba(0,0,0,.19);
}
.login-html{
	width:100%;
	height:100%;
	position:absolute;
	padding:90px 70px 50px 70px;
	background:rgba(40,57,101,.9);
}
.login-html .sign-in-htm,
.login-html .sign-up-htm{
	top:0;
	left:0;
	right:0;
	bottom:0;
	position:absolute;
	transform:rotateY(180deg);
	backface-visibility:hidden;
	transition:all .4s linear;
}
.login-html .sign-in,
.login-html .sign-up,
.login-form .group .check{
	display:none;
}
.login-html .tab,
.login-form .group .label,
.login-form .group .button{
	text-transform:uppercase;
}
.login-html .tab{
	font-size:22px;
	margin-right:15px;
	padding-bottom:5px;
	margin:0 15px 10px 0;
	display:inline-block;
	border-bottom:2px solid transparent;
}
.login-html .sign-in:checked + .tab,
.login-html .sign-up:checked + .tab{
	color:#fff;
	border-color:#1161ee;
}
.login-form{
	min-height:345px;
	position:relative;
	perspective:1000px;
	transform-style:preserve-3d;
}
.login-form .group{
	margin-bottom:15px;
}
.login-form .group .label,
.login-form .group .input,
.login-form .group .button{
	width:100%;
	color:#fff;
	display:block;
}
.login-form .group .input,
.login-form .group .button{
	border:none;
	padding:15px 20px;
	border-radius:25px;
	background:rgba(255,255,255,.1);
}
.login-form .group input[data-type="password"]{
	-text-security:circle;
	-webkit-text-security:circle;
}
.login-form .group .label{
	color:#aaa;
	font-size:12px;
}
.login-form .group .button{
	background:#1161ee;
}
.login-form .group label .icon{
	width:15px;
	height:15px;
	border-radius:2px;
	position:relative;
	display:inline-block;
	background:rgba(255,255,255,.1);
}
.login-form .group label .icon:before,
.login-form .group label .icon:after{
	content:'';
	width:10px;
	height:2px;
	background:#fff;
	position:absolute;
	transition:all .2s ease-in-out 0s;
}
.login-form .group label .icon:before{
	left:3px;
	width:5px;
	bottom:6px;
	transform:scale(0) rotate(0);
}
.login-form .group label .icon:after{
	top:6px;
	right:0;
	transform:scale(0) rotate(0);
}
.login-form .group .check:checked + label{
	color:#fff;
}
.login-form .group .check:checked + label .icon{
	background:#1161ee;
}
.login-form .group .check:checked + label .icon:before{
	transform:scale(1) rotate(45deg);
}
.login-form .group .check:checked + label .icon:after{
	transform:scale(1) rotate(-45deg);
}
.login-html .sign-in:checked + .tab + .sign-up + .tab + .login-form .sign-in-htm{
	transform:rotate(0);
}
.login-html .sign-up:checked + .tab + .login-form .sign-up-htm{
	transform:rotate(0);
}

.hr{
	height:2px;
	margin:60px 0 50px 0;
	background:rgba(255,255,255,.2);
}
.foot-lnk{
	text-align:center;
}
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0">
            <a href="index.html" class="navbar-brand p-0">
                <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>TagTracker</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="User_Home_View.php" class="nav-item nav-link active">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Cadastrar</a>
                        <div class="dropdown-menu m-0">
                            <a href="NewInput_View.php" class="dropdown-item">Registar Entradas</a>
                            <a href="NewOutput_View.php" class="dropdown-item">Registrar Saídas </a>
                            <a href="NewProduct_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">Registrar Produtos </a>
                            <a href="NewSupplier_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">Registrar Fornecedores</a>
                            <a href="NewUser_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 2) ? 'visible' : 'hidden'; ?>;">Registrar Usuários</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Visualizar</a>
                        <div class="dropdown-menu m-0">
                            <a href="InputTable_View.php" class="dropdown-item">Vizualizar Entradas</a>
                            <a href="OutputTable_View.php" class="dropdown-item">Vizualizar Saídas </a>
                            <a href="ProductTable_View.php" class="dropdown-item">Vizualizar Produtos </a>
                            <a href="SupplierTable_View.php" class="dropdown-item">Vizualizar Fornecedores</a>
                            <a href="UserTable_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 2) ? 'visible' : 'hidden'; ?>;">Vizualizar Usuários</a>
                        </div>
                    </div>
                </div>
                <form action="../Model/LogOut_Model_Class.php" method="POST">
                    <button class="btn btn-primary py-2 px-4 ms-3" name='logout' type="submit">LogOut</button>
                </form>

            </div>
        </nav>
        

        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            
        </div>
    </div>
    <!-- Navbar End -->
     

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Blog Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <!-- Blog list Start -->
                <div class="col-lg-8">
                    <div class="row g-5">
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/entrada-prod.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="NewInput_View.php">Registar Entrada</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Registrar Entrada de Produtos</h4>
                                    <p>Prepare a Etiqueta RFID para a gravação de Dados</p>
                                    <a class="text-uppercase" href="NewInput_View.php">Registrar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/saida-pro.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="NewOutput_View.php">Registrar Saida</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Registrar Saída de Produto</h4>
                                    <p>Aproxime a Etiqueta do Leitor RFID</p>
                                    <a class="text-uppercase" href="NewOutput_View.php">Registrar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/entrada-prod.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="ProductTable_View.php">Visualizar</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Visualizar Produtos</h4>
                                    <p>Visualize os Dados Relacionados aos Produtos</p>
                                    <a class="text-uppercase" href="ProductTable_View.php">Visualizar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/entrada-prod.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="InputTable_View.php">Visualizar</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Visualizar Entradas de Produtos</h4>
                                    <p>Visualize os Dados Relacionados as Entradas de Produtos</p>
                                    <a class="text-uppercase" href="InputTable_View.php">Visualizar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/entrada-prod.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="OutputTable_View.php">Visualizar</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Visualizar Saídas de Produtos</h4>
                                    <p>Visualize os Dados Relacionados as Saídas de Produtos </p>
                                    <a class="text-uppercase" href="OutputTable_View.php">Visualizar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/forne-img.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="SupplierTable_View.php">Visualizar</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Visualizar Fornecedores</h4>
                                    <p>Visualize os Dados Relacionados aos Fornecedores</p>
                                    <a class="text-uppercase" href="SupplierTable_View.php">Visualizar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">
                                <div class="blog-img position-relative overflow-hidden">
            
                                        <img class="img-fluid" src="img/produtos.jpeg" alt="">
                             
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="NewProduct_View.php">Cadastrar Produto</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Cadastrar Produtos</h4>
                                    <p>Preencha Todos os Dados Relacionados ao Produto</p>
                                    <a class="text-uppercase" href="NewProduct_View.php">Cadastrar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.6s">
                            <div class="blog-item bg-light rounded overflow-hidden" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/forne-img.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="NewSupplier_View.php">Cadastrar Fornecedor</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Cadastrar Fornecedor</h4>
                                    <p>Preencha Todos os Dados Relacionados ao Fornecedor</p>
                                    <a class="text-uppercase" href="NewSupplier_View.php">Cadastrar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden" style="visibility: <?php echo ($_SESSION['nivel'] > 2) ? 'visible' : 'hidden'; ?>;">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/pessoa-img.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="NewUser_View.php">Cadastrar</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Cadastrar Usuários na Rede</h4>
                                    <p>Cadastre Novos Usuários Cadastrados em sua Rede</p>
                                    <a class="text-uppercase" href="NewUser_View.php">Cadastrar <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 wow slideInUp" data-wow-delay="0.1s">
                            <div class="blog-item bg-light rounded overflow-hidden" style="visibility: <?php echo ($_SESSION['nivel'] > 2) ? 'visible' : 'hidden'; ?>;">
                                <div class="blog-img position-relative overflow-hidden">
                                    <img class="img-fluid" src="img/pessoa-img.jpg" alt="">
                                    <a class="position-absolute top-0 start-0 bg-primary text-white rounded-end mt-5 py-2 px-4" href="UserTable_View.php">Visualizar</a>
                                </div>
                                <div class="p-4">
                                    <h4 class="mb-3">Visualizar Usuários Cadastrados</h4>
                                    <p>Visualize Todos os Usuários Cadastrados em sua Rede</p>
                                    <a class="text-uppercase" href="UserTable_View.php">Visualizar<i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                       
                    </div>
                </div>
                <!-- Blog list End -->
    
                <!-- Sidebar Start -->
                <div class="col-lg-4">
                    <!-- Search Form Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="input-group">
                            <input type="text" class="form-control p-3" placeholder="Palavra Chave">
                            <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Search Form End -->
    
                    <!-- Category Start -->
                    <div class="mb-5 wow slideInUp" data-wow-delay="0.1s">
                        <div class="section-title section-title-sm position-relative pb-3 mb-4">
                            <h3 class="mb-0">Atalhos</h3>
                        </div>
                        <div class="link-animated d-flex flex-column justify-content-start">
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="NewInput_View.php"><i class="bi bi-arrow-right me-2"></i>Registro de Entradas</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="NewOutput_View.php"><i class="bi bi-arrow-right me-2"></i>Registro de Saidas</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="InputTable_View.php"><i class="bi bi-arrow-right me-2"></i>Visualizar Entradas</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="OutputTable_View.php"><i class="bi bi-arrow-right me-2"></i>Visualizar Saídas</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="ProductTable_View.php"><i class="bi bi-arrow-right me-2"></i>Visualizar Produtos</a>
                            <a class="h5 fw-semi-bold bg-light rounded py-2 px-3 mb-2" href="SupplierTable_View.php"><i class="bi bi-arrow-right me-2"></i>Visualizar Fornecedores</a>
                        </div>
                    </div>
                    <!-- Category End -->
    
                    
                </div>
                <!-- Sidebar End -->
            </div>
        </div>
    </div>
    <!-- Blog End -->





    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light mt-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center h-100 bg-primary p-4">
                        <a href="index.html" class="navbar-brand">
                            <h1 class="m-0 text-white"><i class="fa fa-user-tie me-2"></i>TagTracker</h1>
                        </a>
                        <p class="mt-3 mb-4">Deixe seu email para contato para mais informações.</p>
                        <form action="">
                            <div class="input-group">
                                <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                                <button class="btn btn-dark">Enviar</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8 col-md-6">
                    <div class="row gx-5">
                        <div class="col-lg-4 col-md-12 pt-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Localização</h3>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-geo-alt text-primary me-2"></i>
                                <p class="mb-0">Av. Rotary, 383 - Vila Paulista, Cruzeiro - SP, 12701-170</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-envelope-open text-primary me-2"></i>
                                <p class="mb-0">matheus.santos343@fatec.sp.gov.br</p>
                            </div>
                            <div class="d-flex mb-2">
                                <i class="bi bi-telephone text-primary me-2"></i>
                                <p class="mb-0">+12 99703-5217</p>
                            </div>
                            <div class="d-flex mt-4">
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                <a class="btn btn-primary btn-square me-2" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                <a class="btn btn-primary btn-square" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Links</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Inicio</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre Nós</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Serviços</a>
                                <a class="text-light" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contato </a>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 pt-0 pt-lg-5 mb-5">
                            <div class="section-title section-title-sm position-relative pb-3 mb-4">
                                <h3 class="text-light mb-0">Links Populares</h3>
                            </div>
                            <div class="link-animated d-flex flex-column justify-content-start">
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Inicio</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Sobre Nós</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Serviços</a>
                                <a class="text-light mb-2" href="#"><i class="bi bi-arrow-right text-primary me-2"></i>Contato</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white" style="background: #061429;">
        <div class="container text-center">
            <div class="row justify-content-end">
                <div class="col-lg-8 col-md-6">
                    <div class="d-flex align-items-center justify-content-center" style="height: 75px;">
                        <p class="mb-0">&copy; <a class="text-white border-bottom" href="#">Your Site Name</a>. All Rights Reserved. 
						
						<!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
						Designed by <a class="text-white border-bottom" href="https://htmlcodex.com">HTML Codex</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>