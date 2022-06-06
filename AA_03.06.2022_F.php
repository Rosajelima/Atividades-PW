<!DOCTYPE html>
<html lang="pt-br">
  <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <title> Atividade Avaliativa </title>
  </head>
  <body>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;500;700&display=swap');
      body{
        font-family: Raleway;
        margin-top: 150pt;
        color: white;
        background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        margin-right: 30pt;
        margin-left: 30pt;
      }
    </style>

      <!-- 

      Enunciado:

      Desenvolver um script formulário em PHP que contenha os seguintes campos:
      Nome, logradouro, número, CEP, complemento, bairro, cidade, estado e um campo de Upload para envio de foto em .jpg, .png em que os campos tenha validação e que o arquivo de Upload seja colocando e um pasta chamada "IMAGEM".

      -->

      <form action="AA_03.06.2022_.php" method="post" enctype="multipart/form-data">
      
        <hr>
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="name"> Nome </label>
            <input type="text" class="form-control" name="nome" required="required">
          </div>

          <div class="form-group col-md-3">
            <label for="campo2"> Logradouro </label>
            <input type="text" class="form-control" name="logradouro" required="required">
          </div>

          <div class="form-group col-md-2">
            <label for="campo3"> Número </label>
            <input type="text" class="form-control" name="numero" placeholder="Somente Números" required="required">
          </div>

          <div class="form-group col-md-3">
            <label for="campo1"> Estado </label>
            <select name="estado" class="form-select" aria-label="Default select example" required="required">
              <option value="Acre (AC)"> Acre (AC) </option>
              <option value="Alagoas (AL)"> Alagoas (AL) </option> 
              <option value="Amapá (AP)"> Amapá (AP) </option>
              <option value="Amazonas (AM)"> Amazonas (AM) </option>
              <option value="Bahia (BA)"> Bahia (BA) </option>
              <option value="Ceará (CE)"> Ceará (CE) </option>
              <option value="Espírito Santo (ES)"> Espírito Santo (ES) </option>
              <option value="Goiás (GO)"> Goiás (GO) </option>
              <option value="Maranhão (MA)"> Maranhão (MA) </option>
              <option value="Mato Grosso (MT)"> Mato Grosso (MT) </option>
              <option value="Mato Grosso do Sul (MS)"> Mato Grosso do Sul (MS) </option>
              <option value="Minas Gerais (MG)"> Minas Gerais (MG) </option>
              <option value="Pará (PA)"> Pará (PA) </option>
              <option value="Paraíba (PB)"> Paraíba (PB) </option>
              <option value="Paraná (PR)"> Paraná (PR) </option>
              <option value="Pernambuco (PE)"> Pernambuco (PE) </option>
              <option value="Piauí (PI)"> Piauí (PI) </option>
              <option value="Rio de Janeiro (RJ)"> Rio de Janeiro (RJ) </option>
              <option value="Rio Grande do Norte (RN)"> Rio Grande do Norte (RN) </option>
              <option value="Rio Grande do Sul (RS)"> Rio Grande do Sul (RS) </option>
              <option value="Rondônia (RO)"> Rondônia (RO) </option>
              <option value="Roraima (RR)"> Roraima (RR) </option>
              <option value="Santa Catarina (SC)"> Santa Catarina (SC) </option>
              <option value="São Paulo (SP)"> São Paulo (SP) </option>
              <option value="Sergipe (SE)"> Sergipe (SE) </option>
              <option value="Tocantins (TO)"> Tocantins (TO) </option>
            </select>
          </div>
        </div>
        
        <div class="row">

          <div class="form-group col-md-3">
            <label for="campo2"> Cidade </label>
            <input type="text" class="form-control" name="cidade" required="required">
          </div>

          <div class="form-group col-md-2">
            <label for="campo2"> Bairro </label>
            <input type="text" class="form-control" name="bairro" required="required">
          </div>
          
          <div class="form-group col-md-2">
            <label for="campo3"> CEP </label>
            <input type="text" class="form-control" name="CEP" placeholder="Somente Números" required="required">
          </div>
          
          <div class="form-group col-md-2">
            <label for="campo3"> Complemento </label>
            <input type="text" class="form-control" name="complemento" required="required">
          </div>

          <div class="form-group col-md-3">
            <label for="file"> Escolher Arquivo </label>
            <input class="form-control" type="file" id="file" name="arq" required="required">
          </div>
        </div>
        
        <br>
        
        <div id="actions" class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-dark"><i class="fas fa-save"></i> Enviar </button>
          </div>
        </div>
      
        <hr>

      </form>

  </body>
</html>
