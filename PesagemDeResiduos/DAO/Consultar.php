<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;

    class Consultar{
        function consultarPesagemData(
            Conexao $conexao, int $dataPesagem
        ){
           try{

            $conn = $conexao->conectar();
            $sql = "select * from Pesagem where dataPesagem = '$dataPesagem'";
            $result = mysqli_query($conn, $sql);

            while($dados = mysqli_fetch_Array($result)){
                if($dados['dataPesagem'] == $dataPesagem){
                    echo "<br><br><br>Categoria: ".$dados['categoria'];
                    return;
                }
                return "data digitado inválido!";
            }

           }catch(Except $erro){
            echo $erro;

           }
        }

       
    }


?>