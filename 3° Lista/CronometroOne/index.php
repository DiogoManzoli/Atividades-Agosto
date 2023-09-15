<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<style>
  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  body {
    font-family: Arial, Helvetica, sans-serif;
  }

  form {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 50px;
    height: 100vh;
  }

  form div {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 5px;
  }

  form div label {
    display: flex;
    align-items: start;
    justify-content: start;
    text-align: left;
    font-size: 20px;
  }

  form input {
    width: 270px;
    border-radius: 0;
    outline: none;
    border: 1px solid gray;
    padding: 10px;
  }

  form button {
    margin-top: 10px;
    width: 120px;
    padding: 10px;
    font-weight: bold;
    background-color: white;
    border: 2px solid gray
  }

  form button:hover{
    background-color: greenyellow;
    cursor: pointer;
  }
</style>

<body>



  <form action="cronometro.php" method="post">

  <h1>CALCULAR INTERVALO</h1>

    <div>
      <label for="date">Data Inicial: </label>
      <input id="date" name="date" type="date">

      <label for="time">Hora Inicial: </label>
      <input id="time" name="time" type="time">
    </div>


    <div>

      <label for="dateFinal">Data Final: </label>
      <input id="dateFinal" name="dateFinal" type="date">

      <label for="timeFinal">Hora Final: </label>
      <input id="timeFinal" name="timeFinal" type="time">

      <button type="submit" name="submit">CALCULAR</button>

    </div>

  </form>

</body>

</html>