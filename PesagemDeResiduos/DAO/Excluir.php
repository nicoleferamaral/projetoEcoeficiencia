<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Excluir{

        function excluirPesagem(
            Conexao $conexao,
            int $data
        ){
            $conn = $conexao->conectar();
            $sql = "delete from cliente where codigo = '$cpf'";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);

            if($result){
                echo "<br><br>Deletado com sucesso";
            }else{
                echo "<br><br>Não deletado";
            }


        }


    }



?>