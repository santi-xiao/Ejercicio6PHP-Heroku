<!DOCTYPE html>
<html lang="es">

<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Tabla de multiplicar</title>
</head>

<body>
      <h1>Tabla de multiplicar</h1>
      <form>
            <label for="numero">Número</label>
            <input type="number" id="numero" name="numero" />
            <input type="submit" />
      </form>
</body>
<table>
      <tr>
            <th>Numero introducido</th>
            <th> por </th>
            <th>Resultado</th>
      </tr>
      <?php
      $numero = $_GET['numero'];
      for ($i = 1; $i < 10; $i++) {
            echo "<tr>";
            echo "<td>{$numero}</td>";
            echo "<td>{$i}</td>";
            echo "<td>" . $numero * $i . "</td>";
            echo "</tr>";
      }
      ?>
</table>

</html>