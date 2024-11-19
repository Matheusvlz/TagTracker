<?php require '/var/www/html/projetoFinal4/MVC/Controller/SupplierTable_Controller.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tabela Fornecedor</title>
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

    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <style>
       .container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 20px;
  }

  .form-container {

    width: 30%; /* Definimos a largura dos formulários */
    margin: -50px auto 0; 
  }

  .table-container {
    width: 100%; /* Definimos uma largura maior para a tabela */
    margin: 0 20px;
    display: flex;
    justify-content: center;
  }

  table {
    border-collapse: collapse;
    width: 100%;
  }

  th, td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }


  /* Ajuste para centralizar a tabela */
  .table-container table {
    max-width: 800px;
  }

  .table-container {
    max-width: 800px;
    margin: -50px auto 0; /* Mover para cima com margin-top negativo */
    overflow: hidden;
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    background: #ffffff;
}


        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #e7f0ff; /* Azul claro */
            color: #333;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        th {
            background-color: #06A3DA; /* Azul mais escuro para o cabeçalho */
            color: white;
        }

        tr:hover {
            background-color: #cce5ff; /* Azul claro ao passar o mouse */
            cursor: pointer;
        }

        @media (max-width: 600px) {
            th, td {
                padding: 10px;
                font-size: 14px;
            }
        }
    </style>

</head>

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
                    <a href="User_Home_View.php" class="nav-item nav-link">Inicio</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Cadastrar</a>
                        <div class="dropdown-menu m-0">
                            <a href="NewInput_View.php" class="dropdown-item">Registar Entradas</a>
                            <a href="NewOutput_View.php" class="dropdown-item">Registrar Saídas </a>
                            <a href="NewProduct_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">Registrar Produtos </a>
                            <a href="NewSupplier_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">Registrar Fornecedores</a>
                            <a href="NewUser_View.php" class="dropdown-item" style="visibility: <?php echo ($_SESSION['nivel'] > 2) ? 'visible' : 'hidden'; ?>;">Registrar Usuários</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Visualizar</a>
                        <div class="dropdown-menu m-0">
                            <a href="InputTable_View.php" class="dropdown-item ">Vizualizar Entradas</a>
                            <a href="OutputTable_View.php" class="dropdown-item">Vizualizar Saídas </a>
                            <a href="ProductTable_View.php" class="dropdown-item ">Vizualizar Produtos </a>
                            <a href="SupplierTable_View.php" class="dropdown-item active">Vizualizar Fornecedores</a>
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
    <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
    <h1 class="mb-0">Tabela de Fornecedores</h1>
        </div>
    <div class="container">
  <!-- Formulário "Apagar Produto 1" à esquerda -->
  <div class="form-container" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">
    <form method="POST" action="" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">
      <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh; flex-grow: 1;">
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            
            <div class="formbg-outer">
              <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                  <span class="padding-bottom--15">Apague um Fornecedor</span>
                  <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                      <label for="produto">Fornecedor</label>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-3">
                      <!-- Seleção de produtos -->
                      <?php if (!empty($fornecedores)): ?>
                        <select name="caixa1">
                          <?php foreach ($fornecedores as $fornecedor): ?>
                            <option value="<?php echo htmlspecialchars($fornecedor); ?>">
                              <?php echo htmlspecialchars($fornecedor); ?>
                            </option>
                          <?php endforeach; ?>
                        </select>
                      <?php else: ?>
                        <p>Nenhum fornecedor encontrado</p>
                      <?php endif; ?>
                    </div>
                  </div>
                  <div class="field padding-bottom--24">
                    <input type="submit" name="acao" value="Apagar Fornecedor">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <!-- Tabela no centro -->
  <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fornecedor</th>
                    <th>Endereço</th>
                    <th>E-mail</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($tabela)): ?>
                    <!-- Loop pelos produtos e exibe cada um em uma linha da tabela -->
                    <?php foreach ($tabela as $produto): ?>
                        <tr>
                            <td><?= htmlspecialchars($produto['id']) ?></td>
                            <td><?= htmlspecialchars($produto['nome_fornecedor']) ?></td>
                            <td><?= htmlspecialchars($produto['endereco']) ?></td>  
                            <td><?= htmlspecialchars($produto['email']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="8">Nenhum fornecedor encontrado para essa empresa.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

  <!-- Formulário "editar Produto 2" à direita -->
  <div class="form-container" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">
    <form method="POST" action="" style="visibility: <?php echo ($_SESSION['nivel'] > 1) ? 'visible' : 'hidden'; ?>;">
      <div class="login-root">
        <div class="box-root flex-flex flex-direction--column" style="min-height: 100vh; flex-grow: 1;">
          <div class="box-root padding-top--24 flex-flex flex-direction--column" style="flex-grow: 1; z-index: 9;">
            <div class="formbg-outer">
              <div class="formbg">
                <div class="formbg-inner padding-horizontal--48">
                  <span class="padding-bottom--15">Edite um Fornecedor</span>
                  <div class="field padding-bottom--24">
                    <div class="grid--50-50">
                      <label for="produto2">Fornecedor</label>
                    </div>
                    <div class="pure-u-1 pure-u-md-1-3">
                  <?php if (!empty($fornecedores)): ?>
        <select name="caixa2">
            <?php foreach ($fornecedores as $fornecedor): ?>
                <option value="<?php echo htmlspecialchars($fornecedor); ?>">
                    <?php echo htmlspecialchars($fornecedor); ?>
                </option>
            <?php endforeach; ?>
        </select>
    <?php else: ?>
        <p>Nenhum fornecedor encontrado</p>
    <?php endif; ?>
            </div>
                    <div class="field padding-bottom--24">
                  <label for="email">Novo Nome do Fornecedor</label>
                  <input type="text" name="caixa3">
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Novo Endereço do Fornecedor</label>
                  <input type="text" name="caixa4">
                </div>
                <div class="field padding-bottom--24">
                  <label for="email">Novo E-mail do Fornecedor</label>
                  <input type="text" name="caixa5">
                </div>
                  </div>
                  <div class="field padding-bottom--24">
                    <input type="submit" name="acao" value="Editar Fornecedor">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>

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