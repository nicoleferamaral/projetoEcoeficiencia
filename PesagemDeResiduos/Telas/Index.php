<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesagem de Resíduos</title>
    <link rel="stylesheet" href="Style.css">
</head>
<body>

<div class="container">
  <div class="card cart">
    <label class="title">Programa Ecoeficiência</label>
    <div class="steps">
      <div class="step">
    
        <div class="promo">
          <span>Pesagem de resíduos </span>
          <form class="form" >
                <input placeholder="Nome" class="input_field " type="text" name="tNome">
                <hr>
                <input placeholder="Email" class="input" type="text" name="tEmail">
                <hr>
                <input placeholder="Data" class="input_field " type="date" name="tData">
                <hr>
                <select placeholder="Categoria" class="input_field " name="tCPF">
                <option value="opcao1">Categoria</option>

                </select>
                <hr>
                <input placeholder="peso(KG)" class="input_field " type="number" step="0.001" name="tPeso">
                <hr>
                <button>Apply</button>
          </form>
        </div>
     <hr>

      </div>
    </div>
  </div>

 
</div>
</body>
</html>