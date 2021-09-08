<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="//assets.locaweb.com.br/locastyle/edge/stylesheets/locastyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/clientes.css">
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <title>OutletNet (Clientes)</title>
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #0C1446;">
            <div class="container-fluid">
                <img width="40px" src="./images/logo.png" alt="Imagem não encontrada...">
                <a class="navbar-brand disabled" href="#">OutletNet</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item" id="nav1">
                            <a class="nav-link text-white" href="./index.php">Principal</a>
                        </li>
                        <li class="nav-item" id="nav2">
                            <a class="nav-link text-white" href="./fornecedor.php">Fornecedor</a>
                        </li>
                        <li class="nav-item" id="nav3">
                            <a class="nav-link text-light" href="./produtos.php">Produtos</a>
                        </li>
                        <li class="nav-item" id="nav4">
                            <a class="nav-link disabled text-light" aria-current="page" href="#">Clientes</a>
                        </li>
                        <li class="nav-item dropdown" id="nav5">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                              Movimento
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <li><a class="dropdown-item" href="#">Entrada de Produtos</a></li>
                              <li><a class="dropdown-item" href="#">Saída de Produtos</a></li>
                              <li><hr class="dropdown-divider"></li>
                              <li><a class="dropdown-item" href="#">Baixa de Produtos</a></li>
                              <li><a class="dropdown-item" href="#">Devolução de Produtos</a></li>
                            </ul>
                          </li>
                        <li class="nav-item" id="nav6">
                            <a class="nav-link disabled" aria-disabled="true" href="#">Relatórios</a>
                        </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Google" aria-label="Search">
                        <button class="btn btn-outline-primary" type="submit">Pesquisar</button>
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <div align="center">
        <fieldset id="fscadastrocliente" align="center">
            <h2>Cadastro de Clientes <i class="fa fa-user"></i></h2>
            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
        </fieldset>
    </div>
    <form role="form">
        <div align="center">
            <fieldset id="fs1">
                <legend align="center"><strong>Dados do Cliente</strong></legend>
                <fieldset class="fsborder">
                    <legend align="center">Identificação</legend>
                    <table align="center">
                        <tr>
                            <td>Código do Cliente*</td>
                            <td><input type="number" name="codigocliente" min="0" max="99999" id="" required>
                                <button class="btn">Consultar</button>
                        </tr>
                        <tr>
                            <td>Nome completo</td>
                            <td><input type="text" name="nomecliente" size="30" maxlength="50" id=""></td>
                        </tr>
                        <tr>
                            <td>CPF*</td>
                            <td><input data-mask="000.000.000-00" placeholder="Ex. 000.000.000-00" style="text-align: right;" type="text" name="cpfcliente" min="0" max="99999999999" id="" required></td>
                        </tr>
                        <tr>
                            <td>Data de Nascimento*</td>
                            <td><input style="text-align: right;" type="date" name="datanascimentocliente" size="10" maxlength="10" id="" required></td>
                        </tr>
                        <tr>
                            <td>Endereço</td>
                            <td><input type="text" name="enderecocliente" size="30" maxlength="50" id=""></td>
                        </tr>
                        <tr>
                            <td>Nº do Endereço</td>
                            <td><input type="text" name="numeroenderecocliente" size="3" maxlength="5" id=""></td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <fieldset class="fsborder">
                    <legend align="center">Endereço</legend>
                    <table align="center">
                        <tr>
                            <td>Bairro*</td>
                            <td><input type="text" name="bairrocliente" size="30" maxlength="30" id="" required></td>

                        </tr>
                        <tr>
                            <td style="text-align: right;">Cidade*</td>
                            <td><input type="text" name="cidadecliente" size="30" maxlength="30" id="" required></td>
                        </tr>
                        <tr>
                            <td>CEP*</td>
                            <td><input data-mask="00.000-000" placeholder="Ex. 00.000-000" class="input-form" style="text-align: right;" type="text" name="cepcliente" size="30" maxlength="30" id="" required></td>
                        </tr>
                        <tr>
                            <td>UF*</td>
                            <td>
                                <input size="2" list="ufs" />
                                <datalist id="ufs">
                                    <option value="AC">
                                    <option value="AL">
                                    <option value="AM">
                                    <option value="AP">
                                    <option value="BA">
                                    <option value="CE">
                                    <option value="DF">
                                    <option value="ES">
                                    <option value="GO">
                                    <option value="MA">
                                    <option value="PA">
                                    <option value="PB">
                                    <option value="PE">
                                    <option value="PR">
                                    <option value="RJ">
                                    <option value="RN">
                                    <option value="RS">
                                    <option value="RR">
                                    <option value="RO">
                                    <option value="SC">
                                    <option value="SP">
                                </datalist>
                            </td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <fieldset class="fsborder">
                    <legend align="center">Informações Adicionais</legend>
                    <table align="center">
                        <tr>
                            <td>Sexo*</td>
                            <td><input type="radio" name="sexocliente" id="" required>Masculino
                                <input type="radio" name="sexocliente" id="" required>Feminino
                                <input type="radio" name="sexocliente" id="" required>Não declarado</td>
                        </tr>
                        <tr>
                            <td>Telefone Celular*</td>
                            <td><input type="number" name="celcliente" min="0" max="99999999999999" maxlength="14" id="" required></td>
                        </tr>
                        <tr>
                            <td>E-mail</td>
                            <td><input type="email" size="30" maxlength="30" name="emailcliente" id=""></td>
                        </tr>
                        <tr>

                            <td>Salário Pretendido</td>
                            <td><input style="text-align: right;" type="number" name="salariocliente" min="0" max="99999" maxlength="5" id="">R$</td>
                        </tr>
                        <tr>
                            <td>Cor</td>
                            <td><input id="clrbrdr" type="color" name="corcliente" id=""></td>
                        </tr>
                        <tr>
                            <td>Cursos que fez</td>
                            <td><textarea name="cursoscliente" rows="5" cols="30" maxlength="500" id=""></textarea></td>
                        </tr>
                    </table>
                </fieldset>
                <br>
                <fieldset id="btngrvecancl" align="center">
                    <input class="btn btn-primary" type="submit" value="Gravar">
                    <button class="btn" id="btncancel">Cancelar</button>
                </fieldset>
            </fieldset>
        </div>
    </form>
    <footer style="text-align: center; height:70px; background-color: #0C1446; padding: 5px;" class="w-100">
        <p class="text-light"><i class="fa fa-map"></i> Setor Comercial Sul Quadra 2 Bloco C Edifício São Paulo, sala 208, Brasília - DF, 70297-400 
        <br><i class="fa fa-globe"></i> 6427+Q5 Brasilia, Federal District <br><i class="fa fa-phone"></i> +556132264518</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script async="" src="//www.google-analytics.com/analytics.js"></script><script type="text/javascript" src="//code.jquery.com/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="//assets.locaweb.com.br/locastyle/2.0.6/javascripts/locastyle.js"></script>
    <script type="text/javascript" src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
</body>

</html>