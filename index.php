<?php

?>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rastreamento Correios</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
<form method="post" class="row g-3 needs-validation" role="form" action="rastrear.php">
<div class="container">
    <div class="row">
  <div class="col-md-4">
    <label for="validationCustom01" class="form-label">Codígo de Rastreio</label>
    <input type="text" class="form-control" name="codigoderastreio" id="validationCustom01" placeholder="Ex: OA016913717" required="required">
    <div class="valid-feedback">
      Mandou bem!
    </div>
    <div class="invalid-feedback">
        Coloque algum codigo de rastreio.
      </div>
  </div>
  <div class="col-md-4">
    <label for="validationCustom02" class="form-label">E-mail</label>
    <input type="text" name="email" class="form-control" id="validationCustom02" placeholder="Ex: neymarjr@google.com" required="required">
    <div class="valid-feedback">
    Mandou bem!
    </div>
    <div class="invalid-feedback">
        Coloque algum e-mail valido.
      </div>
  </div>

  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required="required">
      <label class="form-check-label" for="invalidCheck">
        Você aceita nossos <b>Termos e Condições</b>.
      </label>
      <div class="invalid-feedback">
        Você precisa aceitar para rastrear
      </div>
    </div>
  </div>
  <div class="col-12">
    <button class="btn btn-primary" action="" name="submit" type="submit" required="required">Rastrear Encomenda</button>
  </div>
    <!-- Gostaria de receber por e-mail? Marque aqui se sim! -->
</form>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>