<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>

  <body class="container mt-4">

  <h2>Cadastro de Cliente</h2>

  <!-- Botão para acionar modal -->
<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
  Abrir modal de demonstração
</button-->

<!-- Modal -->
<div class="modal fade" id="modalMensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Título do modal</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Digite o CEP
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <button type="button" class="btn btn-primary">Salvar mudanças</button>
      </div>
    </div>
  </div>
</div>

  

  <!-- Formulário -->
  <form class="row g-3 mt-3">

    <div class="col-md-6">
      <label for="inputNome" class="form-label">Nome</label>
      <input type="text" class="form-control" id="inputNome">
    </div>

    <div class="col-md-6">
      <label for="inputSobrenome" class="form-label">Sobrenome</label>
      <input type="text" class="form-control" id="inputSobrenome">
    </div>

    <div class="col-md-4">
      <label for="inputCEP" class="form-label">CEP</label>
      <input type="text" class="form-control" id="inputCEP">
    </div>

    <div class="col-md-8">
      <label for="inputEndereco" class="form-label">Endereço</label>
      <input type="text" class="form-control" id="inputEndereco">
    </div>

    <div class="col-md-2">
      <label for="inputNumero" class="form-label">Número</label>
      <input type="text" class="form-control" id="inputNumero">
    </div>

    <div class="col-md-4">
      <label for="inputComplemento" class="form-label">Complemento</label>
      <input type="text" class="form-control" id="inputComplemento">
    </div>

    <div class="col-md-6">
      <label for="inputBairro" class="form-label">Bairro</label>
      <input type="text" class="form-control" id="inputBairro">
    </div>

    <div class="col-md-6">
      <label for="inputCidade" class="form-label">Cidade</label>
      <input type="text" class="form-control" id="inputCidade">
    </div>

    <div class="col-md-2">
      <label for="inputuf" class="form-label">UF</label>
      <input type="text" class="form-control" id="inputuf">
    </div>

    <div class="col-md-2">
      <label for="inputestado" class="form-label">Estado</label>
      <input type="text" class="form-control" id="inputestado">
    </div>

    <div class="col-md-2">
      <label for="inputgia" class="form-label">GIA</label>
      <input type="text" class="form-control" id="inputgia">
    </div>

    <div class="col-md-2">
      <label for="inputibge" class="form-label">IBGE</label>
      <input type="text" class="form-control" id="inputibge">
    </div>

    <div class="col-md-2">
      <label for="inputddd" class="form-label">DDD</label>
      <input type="text" class="form-control" id="inputddd">
    </div>

    <div class="col-md-2">
      <label for="inputsiafi" class="form-label">SIAFI</label>
      <input type="text" class="form-control" id="inputsiafi">
    </div>

    <div class="col-md-2">
      <label for="inputregiao" class="form-label">Região</label>
      <input type="text" class="form-control" id="inputregiao">
    </div>

    <div class="col-12">
      <button type="submit" class="btn btn-primary" id="btnCadastrar">Cadastrar</button>
    </div>

  </form>
  <!-- Fim do Formulário -->

  <!-- Bootstrap JS e dependências -->
   

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.0.js" integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>