<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './links.php'?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        input, textarea{
            background-color: #cccccc;
        }
        #cnpj{
            background-color: #ffffff;
        }
    </style>
    <title>OutletNet (Fornecedor)</title>
</head>

<body>
    <div>
        <?php include './conexao.php'; ?>
        <?php include './cabecalho.php' ?>
    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="mostrar_fornecedores.php" method="POST">
                    
                    <div align="center">
                        <fieldset align="center">
                            <h2>Cadastro de Fornecedores <i class="fa fa-truck"></i></h2>
                            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
                        </fieldset>
                    </div>
                        <div align="center">    
                            <fieldset class="fsborder">
                                <legend align="center"><strong>Dados do Fornecedor</strong></legend>
                                <fieldset class="fsborder">
                                    <legend align="center">Identificação</legend>
                                    <table align="center">
                                        <tr>
                                            <td>CNPJ*</td>
                                            <td>
                                                <input id="cnpj" name="cnpjfornecedor" type="text" data-mask="00.000.000/0000-00" placeholder="00.000.000/0000-00" required>
                                            </td>
                                            <td>
                                                <button style="margin-left: 8px;" id="btnsub" name="btnconsultarcnpj" class="btn">Consultar</button>
                                            </td>
                                            <tr>
                                                <td>Razão*</td>
                                                <td>
                                                    <input disabled  name="razao" type="text" name="razaofornecedor" size="20" maxlength="50" id="">
                                                    
                                                </td>
                                            </tr>
                                            </form>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Contato</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Telefone 1*</td>
                                            <td><input disabled  type="text" placeholder="(00) 0000-0000" data-mask="(00) 0000-0000" name="telefone1fornecedor" size=15 maxlength="15" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Telefone 2</td>
                                            <td><input disabled  type="text" placeholder="(00) 0000-0000" data-mask="(00) 0000-0000" name="telefone2fornecedor" size=15 maxlength="15" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Celular*</td>
                                            <td><input disabled  type="text" placeholder="(00)0 0000-0000" data-mask="(00)0 0000-0000" name="celularfornecedor" size=15 maxlength="15" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Whatsapp</td>
                                            <td><input disabled  type="text" placeholder="(00)0 0000-0000" data-mask="(00)0 0000-0000" name="whatsappfornecedor" size=15 maxlength="15" id=""></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Informações Adicionais</legend>
                                    <table align="center">
                                        <tr>
                                            <td>E-mail*</td>
                                            <td><input disabled  placeholder="example@domain.com" type="email" name="emailfornecedor" size="30" maxlength="50" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Data de Compra*</td>
                                            <td><input disabled  style="text-align: center;" type="date" name="datacadastrofornecedor" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Data da Venda</td>
                                            <td><input disabled  style="text-align: center;" type="date" name="dataultcompfornecedor" id=""></td>
                                        </tr>
                                        <tr>
                                            <td>Saldo de Compras* R$</td>
                                            <td><input disabled  style="text-align: right;" type="text" name="saldocompradofornecedor" min="0" max="10000000" maxlength="12" id="" required></td>
                                        </tr>
                                        <tr>
                                            <td>Status</td>
                                            <td><input disabled  type="radio" name="statusfornecedor" value="Ativo" id="">Ativo</td>
                                            <tr>
                                                <td></td>
                                                <td><input disabled  type="radio" name="statusfornecedor" value="Inativo" id="">Inativo</td>
                                            </tr>
                                        </tr>
                                        <tr>
                                            <td>Observação</td>
                                            <td><textarea disabled rows="5" cols="30" maxlength="500" name="observacaofornecedor" id=""></textarea></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset class="fsborder">
                                    <legend align="center">Dados Bancários</legend>
                                    <table align="center">
                                        <tr>
                                            <td>Banco*</td>
                                            <td><input disabled  type="text" name="bancofornecedor" id="" size="3" maxlength="3" style="text-align: right;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Agência*</td>
                                            <td><input disabled type="text" name="agenciafornecedor" size="5" maxlength="5" id="" style="text-align: right;" required></td>
                                        </tr>
                                        <tr>
                                            <td>Conta*</td>
                                            <td><input disabled  type="text" name="contafornecedor" id="" size="10" maxlength="10" style="text-align: right;" required></td>
                                        </tr>
                                    </table>
                                </fieldset>
                                <br>
                                <fieldset align="center">
                                    <input disabled id="btnsub" class="btn btn-primary" type="submit" value="Gravar">
                                    <input class="btn" id="btncancel" type="reset"></input>
                                </fieldset>
                            </fieldset>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <?php include_once './rodape.php' ?>
    <?php include_once './scripts.php' ?> 
</body>

</html>