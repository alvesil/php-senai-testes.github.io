<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php' ?>
    <link rel="icon" href="./images/logo.ico"sizes="16x16" type="image/png">
    <style>
        input{
            background-color: #cccccc;
        }
        .notgrey{
            background-color: #ffffff;
        }
    </style>
    <title>OutletNet (Movimentação)</title>
</head>

<body>
    <?php
        include './conexao.php'; 
        include './cabecalho.php';
        include './funcoes.php';
        $acao = $_GET['acao']; 
        $chave = $_POST['mov_barras'];
        $sql = "SELECT descricao, unidade, peso, custo, venda, ultimavenda, quantidade, minimo, imagem, fornecedor, 
        fornecedores.razao as razao
        FROM produtos
        INNER JOIN fornecedores
        ON produtos.fornecedor = fornecedores.cnpj
        WHERE codigodebarras = '$chave'";
        if($resultado = mysqli_query($conexao, $sql)){
            if($campo = mysqli_fetch_array($resultado)){
                $descricao = $campo['descricao'];
                $unidade = $campo['unidade'];
                $peso = $campo['peso'];
                $custo = $campo['custo'];
                $venda = $campo['venda'];
                $ultimavenda = $campo['ultimavenda'];
                $quantidade = $campo['quantidade'];
                $minimo = $campo['minimo'];
                $imagem = $campo['imagem'];
                $fornecedor = $campo['fornecedor'];
                $razao = $campo['razao'];
            }else{
                if (isset($_POST['buscar'])) {
                    # code...
                    echo 
                '
                <!-- Button trigger modal -->
                <button hidden id="teste" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Launch static backdrop modal
                </button>

                <!-- Modal -->
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Produto não encontrado no sistema.</h5>
                        
                    </div>
                    <div class="modal-body">
                        Não existe nenhum produto cadastrado para o código de barras:<h3 align="center">" '.$chave.' "</h3>
                    </div>
                    <div class="modal-footer">
                        
                        <a align="center" href="movimentacao.php?acao='.$acao.'"><button type="button" class="btn btn-primary">Entendido</button></a>
                    </div>
                    </div>
                </div>
                </div>
                ';
                }
                
                // echo "Deu errado 1";
                echo $conexao->error;
                $descricao = '';
                $unidade = '';
                $peso = '';
                $custo = '';
                $venda = '';
                $ultimavenda = '';
                $quantidade = '';
                $minimo = '';
                $imagem = '';
                $fornecedor = '';
                $razao = '';
            }
        }
        else{
            echo "Deu errado 2";
            echo $conexao->error;
        }
        
    ?>
    <div align="center">
        <fieldset id="fscadastro" align="center">
            <h2>Movimentação <?php echo $acao; ?> <i class="fa fa-barcode"></i></h2>
            <h5>Observação: Todos os campos com (*) são obrigatórios!</h5>
        </fieldset>
    </div>
    <form action="incluir_movimentacao.php?acao=<?php echo $acao; ?>" method="POST">
        <div align="center">
            <fieldset id="cabecalho1">
                <fieldset>
                    <table>
                    <tr>
                    <td>Código de Barras</td>
                    <td><input value="<?php echo $chave; ?>" type="text" name="mov_barras" size="13" maxlength="13" disabled> 
                    </td>
                    <input value="<?php echo $chave; ?>" type="text" name="mov_barras" hidden>

                    <td>Descrição</td>
                    <td><input value="<?php echo $descricao; ?>" type="text" name="descricaoproduto" size="50" maxlength="50" disabled>
                    </td>
                    </tr>


                    <tr>
                    <td>Unidade</td>
                    <td>

                    <input style="text-transform:uppercase;" value="<?php echo $unidade; ?>" type="text" size="1" maxlength="2" name="unidadeproduto" disabled >
                    </select>
                    </td>


                    <td>Peso</td>
                    <td><input value="<?php echo $peso; ?>" type="number" name="pesoproduto" size="5" maxlength="5" disabled ></td>
                    </tr>


                    <tr>
                    <td>Custo</td>
                    <td><input value="<?php echo $custo; ?>" type="number" name="custoproduto" size="10" maxlength="10" disabled></td>
                        <input value="<?php echo $custo; ?>" type="hidden" name="custoproduto">
                    <td>Venda</td>
                    <td><input value="<?php echo $venda; ?>" type="number" name="vendaproduto" size="10" maxlength="10" disabled></td>
                        <input value="<?php echo $venda; ?>" type="hidden" name="vendaproduto">
                    </tr>


                    <tr>
                    <td>Em Estoque</td>
                    <td><input value="<?php echo $quantidade; ?>" type="number" name="quantidadeproduto" size="5" maxlength="5" disabled=""></td>
                        <input value="<?php echo $quantidade; ?>" type="hidden" name="quantidadeproduto">
                    <td>Estoque Mínimo</td>
                    <td><input value="<?php echo $minimo; ?>" type="number" name="minimoproduto" size="5" maxlength="5" disabled ></td>
                    </tr>


                    <tr>
                    <td>Imagem</td>
                    <td><input value="<?php echo $imagem; ?>" type="file" name="imagemproduto" disabled></td>
                    </tr>


                    <tr>
                    <td>Fornecedor</td>
                    <td><input value="<?php echo $fornecedor; ?>" type="text" name="mov_cnpj" size="18" maxlength="18" disabled>


                    </td>
                    <td>Razão Social</td>
                    <td><input value="<?php echo $razao; ?>" type="text" name="razaofornecedores" size="50" maxlength="50" disabled></td>
                    </tr>   
                    <?php 
                        if ($acao == 'entrada') {
                            # code...
                            echo 
                            '
                            <tr>
                            <td>Custo do Produto</td>
                            <td><input required class="notgrey" type="number" step="0.01" name="mov_custo" size="10" maxlength="10"></td>
                            <td>Valor de Venda</td>
                            <td><input required class="notgrey" type="number" step="0.01" name="mov_venda" size="10" maxlength="10"></td>
                            </tr>
                            ';
                        }else{
                            echo 
                            '
                            <tr>
                            <td>Custo do Produto</td>
                            <td><input disabled type="number" step="0.01" name="mov_custo" size="10" maxlength="10"></td>
                            <td>Valor de Venda</td>
                            <td><input disabled type="number" step="0.01" name="mov_venda" size="10" maxlength="10"></td>
                            </tr>
                            ';
                        }
                    ?>
                    
                    <tr>
                    <td>Quantidade</td>
                    <td><input required class="notgrey" type="number" step="0.001" name="mov_quantidade" size="5" maxlength="5" autofocus></td>
                    </tr>


                    <tr>
                    <td>Data e Hora</td>
                    <td><input type="text" name="mov_datahora" value = "<?php echo dataSistemaTela(); ?>" disabled ></td>
                        <input value="<?php echo dataSistemaTela(); ?>" type="hidden" step="0.001" name="mov_datahora">
                    </tr>
                    </table>    
                <br>
                <input class="btn" id="btnsub" type="submit" name="botaoenviar" value="Gravar">
                <a href="./movimentacao.php?acao=<?php echo $acao; ?>" class="btn" id="btncancel">Voltar</a> 
                <br>
            </fieldset>
        </div>
    </form>
    
<footer style="margin-top:18%; text-align: center; height:100% ; background-color: #0C1446; padding: 5px; position:fixed;" class="w-100">
    <p class="text-light"><i class="fa fa-map"></i> Setor Comercial Sul Quadra 2 Bloco C Edifício São Paulo, sala 208, Brasília - DF, 70297-400 
    <br><i class="fa fa-globe"></i> 6427+Q5 Brasilia, Federal District <br><i class="fa fa-phone"></i> +556132264518</p>
</footer>
    <?php include_once './scripts.php' ?>
    <script>
        window.onload = function() {
        var hangoutButton = document.getElementById("teste");
        hangoutButton.click(); // this will trigger the click event
    };
    </script>
</body>
</html>