<?php
    namespace PHP\Modelo\DAO;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;


    class Inserir{

        function cadastrarUsuario(Conexao $conexao, string $cpf, string $nome, string $telefone, string $email, string $senha){

            try{
                $conn = $conexao->conectar();
                $sql = "Insert into Cadastro(codigo,nome, telefone, email, senha)
                values('$cpf','$nome','$telefone','$email', '$senha')";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);

                if($result){
                    return "<br> Inserido com sucesso!";
                }
                return "<br> Não inserido!";
            } catch(Except $erro){
                return "Algo deu errado! <br><br>".$erro;
            }

        }

        function cadastrarPeso(Conexao $conexao, string $categoria, string $dataPesagem, float $peso){

            try{
                $conn = $conexao->conectar();
                $sql = "Insert into Pesagem(codigo,categoria, dataPesagem, peso)
                values('','$categoria','$dataPesagem','$peso')";

                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);

                if($result){
                    return "<br> Inserido com sucesso!";
                }
                return "<br> Não inserido!";
            } catch(Except $erro){
                return "Algo deu errado! <br><br>".$erro;
            }

        }
    }




?>