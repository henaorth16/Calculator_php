<?php
 session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>calculator</title>
  </head>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    html {
      color-scheme: light dark;
      --primary-clr: rgb(41, 6, 41);
    }
    body {
      background-color: var(--primary-clr);
      background-repeat: no-repeat;
      background-size: cover;
      background-blend-mode: multiply;
      min-height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      font-family: monospace, system-ui, -apple-system, BlinkMacSystemFont,
        "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, "Open Sans",
        "Helvetica Neue", sans-serif;
      position: relative;
      overflow: hidden;
    }

    main {
        width: 650px;
      background-color: rgba(255, 255, 255, 0.281);
      display: flex;
      flex-direction: column;
      gap: 1rem;
      padding: 1.3rem;
      border-radius: 0.55rem;
      box-shadow: 10px 7px 1rem black;
      z-index: 2;
    }
    h1 {
      color: var(--primary-clr);
      text-align: center;
    }
    main,
    .btn {
      width: 500px;
    }
    button {
        background-color: rgba(115, 42, 133, 0.247);
      float: right;
      padding: .4rem;
      border-radius: 0.55rem;
      margin-top: 1rem;
      font-size: 1.2rem;
      cursor: pointer;
      box-shadow: 1px 2px 5px black;
    }
    button:hover{
        opacity: .7;
    }
    .inputs, .select {
      display: flex;
      flex-direction: column;
      gap: 0.1rem;
      margin: 4px;
    }
    
    input[type="number"], select {
      all: unset;
      background-color: rgba(28, 6, 58, 0.404);
      border-radius: 0.3rem;
      padding: 0.5rem;
    }
    input[type="number"]:valid,
    input[type="number"]:focus,
    select:valid, select:focus {
      border: 2px solid var(--primary-clr);
    }
    input::placeholder {
      color: rgba(50, 24, 73, 0.603);
    }

    .result{
        float: right;
        margin: .6rem;
    }

    input[type="submit"] {
      all: unset;
      text-align: center; /*if "fit content" is not supported*/
      width: fit-content;
      width: -moz-fit-content;
      background-color: var(--primary-clr);
      padding: 0.6rem 1rem;
      margin-block: 1rem;
      cursor: pointer;
      border-radius: 0.3rem;
      box-shadow: 2px 2px 5px black;
      transition: all 200ms;
    }
    input[type="submit"]:hover {
      box-shadow: 4px 4px 5px black;
    }
  </style>
  <body>
    <main>
      <h1>calculator</h1>
      <form action="./process.php" method="post">
        <div class="select">
          <label for="ope">Operations:</label>
          <select name="ope" id="ope" required>
            <option value="" <?= !isset($_SESSION['ope']) ? "selected" : ""?> disabled>Select Operation</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "add" ? "selected" : ""?>  value="add">Addition</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "sub" ? "selected" : ""?> value="sub">Substraction</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "mul" ? "selected" : ""?> value="mul">Multiplication</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "div" ? "selected" : ""?> value="div">Division</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "rem" ? "selected" : ""?> value="rem">Remainder</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "ave" ? "selected" : ""?> value="ave">Average</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "pow" ? "selected" : ""?> value="pow">exponential</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "rec" ? "selected" : ""?> value="rec">Rectancle Area</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "tri" ? "selected" : ""?> value="tri">Triangle Area</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "cir" ? "selected" : ""?> value="cir">Circle Area</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "fib" ? "selected" : ""?> value="fib">Fibonacci</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "fac" ? "selected" : ""?> value="fac">Factorial</option>
            <option <?= isset($_SESSION['ope']) && $_SESSION['ope'] == "qua" ? "selected" : ""?> value="qua">Quadratic</option>
          </select>
        </div>

        <div class="inputs" >
          <label for="num1">number 1:</label>
          <input type="number" value="<?= isset($_SESSION['num1']) ? $_SESSION['num1'] : ''; ?>" name="num1" id="num1" />
        </div>

        <div class="inputs">
          <label for="num2" id="num2">number 2:</label>
          <input type="number" value="<?= isset($_SESSION['num2']) ? $_SESSION['num2'] : ''; ?>" name="num2" id="num2" />
        </div>
       
        <div class="inputs num3Elem">
          <label for="num3" id="num3">number 3:</label>
          <input type="number" value="<?= isset($_SESSION['num3']) ? $_SESSION['num3'] : ''; ?>" name="num3" id="num3" />
        </div>

        <h3 class="result">Result: <?= isset($_SESSION['result']) ? $_SESSION['result'] : '0'; ?></h3>
        <input type="submit" value="show result" />
      </form>
    </main>
    <div class="btn">
      <a href="./main.php">
        <button>Back to Main Page</button>
      </a>
    </div>

    <script src="script.js"></script>
  </body>
</html>
