<header>
    <h1>Mi Web Frontend</h1>
    <nav>
      <ul>
        <li><a href="inicio.php">Inicio</a></li>
        <li><a href="acerca.php">Acerca</a></li>
        <li><a href="contacto.php">Contacto</a></li>
      </ul>
    </nav>
  </header>

  <style>
    
    /* ====== Header ====== */
    header {
      background: #B6A9DE;
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

  </style>