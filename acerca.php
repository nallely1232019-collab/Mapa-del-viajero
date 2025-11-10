<php>
</php>
<!DOCTYPE html>
<html lang="es">
<head>
<Meta charset="UTF-8">
<Meta name="viewport" content="width=deavice-width,initial-escale=1.0">
<Title>sobre nosotros</Title>
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

    /* ====== Header ====== */
    header {
      background: #92a8caff;
      color: black;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color: black;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #facc15;
    }

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #88aedfff;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #405b7eff;
      color: black;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>
	<?php include ("menu.php") ?>;

	<Main>
<h1>¿Quién soy? </h1>
<p> Disfruta poder mapear tus rutas y hacer de esto una nueva aventura.</p>
	</Main>

	<footer>
<p>Realizado Por: Nallely Marmolejo Salas</p>
	</footer>
</body>
</html>
