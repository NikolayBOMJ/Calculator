<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
  <div class="row">
  <div class="col-12 col-lg-4"></div>
  <div class="col-12 col-lg-4 calc-body card">
    <h1>Калькулятор</h1>
     <form action="result.php">
       <input type="text" name="x1" class="numbers form-control" placeholder="Цифра Первая">
       <select name="operation" class="operations form-select">
          <option value="+">+</option>
          <option value="-">-</option>
          <option value="*">*</option>
          <option value="/">/</option>
       </select>
       <input type="text" name="x2"  class="numbers form-control" placeholder="Цифра Вторая">
       <br>
       <div class="row text-center">
        <div class="knopka"><input type="submit" value="Вычислить" class="submit-form btn btn-primary btn-size-lg"></div>
       </div>
     </form>
     <div class="col-12 col-lg-4 display-none-xs"></div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>