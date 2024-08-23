<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>group members</title>
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
    h1 {
      color: var(--primary-clr);
      text-align: center;
    }
    main {
      background-color: rgba(255, 255, 255, 0.281);
      display: flex;
      flex-direction: column;
      gap: 1rem;
      padding: 1.3rem;
      border-radius: 0.55rem;
      box-shadow: 10px 7px 1rem black;
      text-align: center;
    }
    main,
    .btn {
      width: 500px;
    }
    table,
    thead,
    tr,
    tbody,
    td,
    th {
      border-collapse: collapse;
      padding: 0.2rem;
      font-size: 1.3rem;
    }
    th{
      color: var(--primary-clr);
      background-color: rgba(235, 235, 235, 0.31);
    }
    tr > td:nth-child(2){
      padding-left: .2rem;
      text-align:justify;
    }
    tr:nth-child(even) {
      background-color: #d7d7d728;
    }
    tr:nth-child(odd) {
      background-color: #d7d7e658;
    }
    tr > td:nth-child(1){
      background-color: #ffffff35;
      border-collapse: inherit;
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
       opacity: .8;
    }
  </style>
  <body>
    <main>
      <h1>group members</h1>
      <table>
        <thead>
          <tr>
            <th></th>
            <th>Name</th>
            <th>Id n<u>o</u></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1. </td>
            <td>Henok Emyaye</td>
            <td>0225/22</td>
          </tr>
          <tr>
          <td>2. </td>
            <td>Teoflos Melese</td>
            <td>0133/22</td>
          </tr>
          <tr>
          <td>3. </td>
            <td>Yeabsira Tolosa</td>
            <td>0123/22</td>
          </tr>
          <tr>
          <td>4. </td>
            <td>Haymanot G/Michael</td>
            <td>0006/22</td>
          </tr>
          <tr>
          <td>5. </td>
            <td>Hizkyas Kibret</td>
            <td>0138/22</td>
          </tr>
          <tr>
          <td>6. </td>
            <td>Amar Jafar</td>
            <td>0267/22</td>
          </tr>
        </tbody>
      </table>
    </main>
    <div class="btn">
      <a href="./form.php">
        <button>Open Calculator</button>
      </a>
    </div>
  </body>
</html>
