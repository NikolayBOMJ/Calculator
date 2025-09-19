<?php
$result = require __DIR__ . '/calc.php';
?>  
<head>
    <title>Калькулятор</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class='container text-center'>
  <div class='row'>
   <div class='col-4'></div>
    <div class=col-4>
      <div class='result text-center card  mb-3'>
      <h1>Результат вычислений:</h1>
      <?=$result ?>
      <br>
      <div class="Knopka">
      <button type="button" class="btn btn-primary btn-size-lg"><a class="btn btn-primary btn-size-lg" href="index.php" role="button">Назад</a></button>
      </div>
    </div>
   </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>