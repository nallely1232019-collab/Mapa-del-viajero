<php>
</php>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>contenido principal</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #5a89a5ff;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #333c49ff;
      color: black;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>
 <?php include ("menu.php") ?>;
  
  <main>
    <h1>Bienvenidos a mi página web...</h1>
    <p>Disfruta poder mapear tus rutas y hacer de esto una nueva aventura.</p>
  </main>

  <footer>
    <p>Realizado por: Nallely Marmolejo</p>
  </footer>

</body>
</html>

