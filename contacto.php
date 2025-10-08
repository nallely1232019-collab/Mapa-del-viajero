<?php
// Incluir la conexión
include("db/Conexión.php");

// Validar que el formulario fue enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre   = $_POST['nombre'];
    $correo   = $_POST['email'];
    $telefono = $_POST['telefono'];
    $asunto   = $_POST['asunto'];
    $mensaje  = $_POST['mensaje'];  // asegúrate que sea 'mensaje' y no 'Mensaje'

    // Preparar consulta (SQL Injection seguro)
    $stmt = $conn->prepare("INSERT INTO formulario (nombre, correo, telefono, asunto, mensaje) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $nombre, $correo, $telefono, $asunto, $mensaje);

    if ($stmt->execute()) {
        $msg = "✅ Tu mensaje se envió correctamente.";
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            var m = " . json_encode($msg) . ";
            var d = document.createElement('div');
            d.textContent = m;
            Object.assign(d.style, {
                position:'fixed',
                left:'50%',
                top:'20px',
                transform:'translateX(-50%)',
                background:'#1f2937',
                color:'#fff',
                padding:'12px 18px',
                borderRadius:'6px',
                zIndex:9999,
                fontSize:'16px',
                boxShadow:'0 2px 10px rgba(0,0,0,0.2)'
            });
            document.body.appendChild(d);
            setTimeout(function() {
                try { window.close(); } catch(e) {}
                setTimeout(function() {
                    if (!window.closed) { window.location = 'Inicio.php'; }
                }, 200);
            }, 3000);
        });
        </script>";
    } else {
        $err = "❌ Error: " . $stmt->error;
        echo "<script>
        document.addEventListener('DOMContentLoaded', function() {
            var m = " . json_encode($err) . ";
            var d = document.createElement('div');
            d.textContent = m;
            Object.assign(d.style, {
                position:'fixed',
                left:'50%',
                top:'20px',
                transform:'translateX(-50%)',
                background:'#7f1d1d',
                color:'#fff',
                padding:'12px 18px',
                borderRadius:'6px',
                zIndex:9999,
                fontSize:'16px',
                boxShadow:'0 2px 10px rgba(0,0,0,0.2)'
            });
            document.body.appendChild(d);
            setTimeout(function() {
                try { window.close(); } catch(e) {}
                setTimeout(function() {
                    if (!window.closed) { window.location = 'Inicio.php'; }
                }, 200);
            }, 3000);
        });
        </script>";
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
</php>
<!DOCTYPE html>
<html lang="es">
<head>
<Meta charset="UTF-8">
<Meta name="viewport" content="width=deavice-width,initial-escale=1.0">
<Title>contactos</Title>
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

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #E8E7FE;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #BBC0FC;
      color: black;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>

<?php include ("menu.php"); ?>
  </header>
  <main>
  <div class="contact-container">
    <h2>Contacto</h2>

    <form action="contacto.php" method="post" novalidate>
      <div class="form-group">
        <label for="nombre">Nombre completo</label>
        <input id="nombre" name="nombre" type="text" placeholder="Tu nombre" required>
      </div>

      <div class="form-group">
        <label for="email">Correo electrónico</label>
        <input id="email" name="email" type="email" placeholder="Tu correo@ejemplo.com" required>
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono (opcional)</label>
        <input id="telefono" name="telefono" type="text" placeholder="+34 600 000 000">
      </div>

      <div class="form-group">
        <label for="asunto">Asunto</label>
        <input id="asunto" name="asunto" type="text" placeholder="Breve resumen" required>
      </div>

      <div class="form-group">
        <label for="mensaje">Mensaje</label>
        <textarea id="mensaje" name="mensaje" placeholder="Escribe tu mensaje..." required></textarea>
        <div class="hint">Máximo 200 caracteres.</div>
      </div>

      <div class="actions">
        <button type="reset" class="btn btn-secondary">Limpiar</button>
        <button type="submit" class="btn btn-primary">Enviar mensaje</button>
      </div>
    </form>
  </div>
</main>

  <!-- footer -->
   <footer>
  </footer>

  </body>
  </html>

  </Main>

  <footer>
<p>realizado por: Nallely Marmolejo </p>
  </footer>
</body>
</html>


            
