<!doctype html>
<html lang="en">
    <head>
        <link rel="icon" type="image/png" sizes="16x16" href="images/icons8-livros-color-16.png">
        <link rel="icon" type="image/png" sizes="32x32" href="images/icons8-livros-color-32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="images/icons8-livros-color-96.png">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Anton&family=Dangrek&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Registre Sua Escola</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
             <style type="text/css">
            body{
                background-image: url("images/background2.jpg");
                background-position: center center;
                background-size: cover;
            }
            ola
            .navbar .navbar-nav .nav-link:hover{
                background-color:#fd7921;
                border: 5px;

            }
            
            #ui{
                background-color:#474646;
                padding:30px;
                margin-top: 80px;
                border-radius: 10px;
                opacity: 0.9;

            }
            #ui label,h1,a {
                color: #fff;
                
            }
            #h1{
                font-family: 'Anton', sans-serif;

            }
            .btn-outline-success{
                color: white;
                background-color:#fd7921;
                border-color: #fd7921;
            }
            .btn:first-child:hover, :not(.btn-check)+.btn:hover{
                background-color:#fd7921;
                border-color: #fd7921;
            }
        </style>    
            

    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img src="images/logolearn.png" style="margin-left:5px;" width="213" height="62" width="30" height="30" alt="">
              </a>
            </button>
          
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item active">
                  <a class="nav-link " href="#">In??cio</a>
                </li>
                <li class="nav-item px-md-2">
                  <a class="nav-link " href="#">Seja um parceiro</a>
                </li>
                <li class="nav-item px-md-2">
                    <a class="nav-link " href="#">Pre??os</a>
                </li>
                <li class="nav-item px-md-2">
                    <a class="nav-link " href="#">Termos e Condi????es</a>
                </li>
                <li class="nav-item px-md-2">
                    <a class="nav-link " href="#">Inscreva Sua Escola</a>
                </li>
                <li class="nav-item px-md-2">
                    <a class="nav-link " href="#">Datas e Eventos</a>
                </li>
        
              </ul>
              <form class="form-inline my-2 my-lg-0" style="margin:auto;">
                <div class="input-group mb-3 ">
                    <input class="form-control mr-sm-2 mt-3" type="search"  aria-label="Search">
                    <button class="btn btn-outline-success mr-sm-2 mt-3"  type="submit">Procurar</button>
                </div>
              </form>
            </div>
          </nav>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
            <div class="container">
            <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <div id="ui">
                            <h1 class="text-center" style="font-family: 'Dangrek', cursive;">REGISTRE SUA ESCOLA</h1>
                            <form action="conexao.php" method="POST" class="form-group text-center">
                                <div class="row">
                                        <div class="col-lg-6">
                                        <label>Nome da escola</label>
                                        <input type="text" name="nome_escola" placeholder="Escola" class="form-control">
                                    </div>   

                                    <div class="col-lg-6">
                                        <label>Telefone</label>
                                        <input type="text" name="tel_escola" placeholder="Ex: (XX)XXXX-XXXX" class="form-control">
                                    </div>   
                                </div>
                                <br>
                                <label>Endere??o, N?? e Bairro</label>
                                <input type="text" name="end_escola" placeholder="Ex: Capit??o Bastos 233, Residencial Am??rica" class="form-control">
                                <br>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <label>CNPJ</label>
                                    <input type="text" name="cnpj_escola" placeholder="Ex: XX.XXX.XXX/0001-XX." class="form-control">
                                </div>   

                                <div class="col-lg-6">
                                    <label>Senha</label>
                                    <input type="password" name="senha_escola" placeholder=" Ex: suaescola.com.br" class="form-control">
                                </div>   
                        </div>
                        <br>
                            <input type="submit" name="acao" value="cadastrar" class="btn btn-primary">
                                
                                    
                        
                            </form>
                    </div>
                    <div class="col-lg-3"></div>

                </div>



            </div>    
        </div>


    </body>
</html>