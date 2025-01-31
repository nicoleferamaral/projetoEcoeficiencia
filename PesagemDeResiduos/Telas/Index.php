
<?php
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesagem de Resíduos</title>
    <link rel="stylesheet" href="Style1.css">
</head>
<body>

<div class="container">
  <div class="card cart">
    <label class="title">Pesagem de resíduos</label>
    <div class="steps">
      <div class="step">
    
        <div class="promo">
          <form method="POST" class="form" >
             
                <input placeholder="Data" class="input_field " type="date" name="dataPesagem">
                <hr>
                <select placeholder="Categoria" class="input_field " name="categoria">
                <option value="opcao1">Categoria</option>
                <option value="opcao2">Não reciclável</option>
                <option value="opcao3">Reciclável</option>
                <option value="opcao4">Óleo</option>
                <option value="opcao5">Tampinhas plásticas</option>
                <option value="opcao6">Lacres de alumínio</option>
                <option value="opcao7">Tecidos</option>
                <option value="opcao8">Meias</option>
                <option value="opcao9">Material de escrita</option>
                <option value="opcao10">Esponjas</option>
                <option value="opcao11">Eletrônicos</option>
                <option value="opcao12">Pilhas e baterias</option>
                <option value="opcao13">Infectante</option>
                <option value="opcao14">Químicos</option>
                <option value="opcao15">Lâmpada fluorescente</option>
                <option value="opcao16">Tonners de impressora</option>
                <option value="opcao17">Esmaltes</option>
                <option value="opcao18">Cosméticos</option>
                <option value="opcao19">Cartela de medicamento</option>


                </select>
                <hr>
                <input placeholder="peso(KG)" class="input_field " type="number" step="0.001" name="peso">
                <hr>
                <button type="submit" class="button-confirm">Cadastrar →
                    <?php
                        $conexao = new Conexao(); //Conectar no Banco


                        if(isset($_POST['dataPesagem']) && isset($_POST['categoria']) && isset($_POST['peso'])){
                        $cpf = $_POST['cpf'];
                        $nome = $_POST['nome'];
                        $telefone = $_POST['telefone'];
                        $endereco = $_POST['endereco'];
                        $totalDeCompras = $_POST['total'];

                        $inserir = new Inserir();
                        echo $inserir->cadastrarCliente($conexao, $cpf,$nome,$telefone,$endereco,$totalDeCompras);
                    }
                    ?>
                  </button>
          </form>
        </div>
     <hr>

      </div>
    </div>
  </div>
   
 
</div>



  <!-- From Uiverse.io by eslam-hany --> 
<div class="button-container">
  <button class="button">
    <svg
      class="icon"
      stroke="currentColor"
      fill="currentColor"
      stroke-width="0"
      viewBox="0 0 1024 1024"
      height="1em"
      width="1em"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7 23.1 23.1L882 542.3h-96.1z"
      ></path>
    </svg>
  </button>
  <button class="button">
    <svg
      class="icon"
      stroke="currentColor"
      fill="none"
      stroke-width="2"
      viewBox="0 0 24 24"
      aria-hidden="true"
      height="1em"
      width="1em"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        stroke-linecap="round"
        stroke-linejoin="round"
        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"
      ></path>
    </svg>
  </button>
  <button class="button">
    <svg
      class="icon"
      stroke="currentColor"
      fill="currentColor"
      stroke-width="0"
      viewBox="0 0 24 24"
      height="1em"
      width="1em"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M12 2.5a5.5 5.5 0 0 1 3.096 10.047 9.005 9.005 0 0 1 5.9 8.181.75.75 0 1 1-1.499.044 7.5 7.5 0 0 0-14.993 0 .75.75 0 0 1-1.5-.045 9.005 9.005 0 0 1 5.9-8.18A5.5 5.5 0 0 1 12 2.5ZM8 8a4 4 0 1 0 8 0 4 4 0 0 0-8 0Z"
      ></path>
    </svg>
  </button>

  <button class="button">
     Sair
  </button>
</div>

</footer>

</body>
</html>