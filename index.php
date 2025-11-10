<?php
/**
 * 🌎 CONFIGURACIÓN INICIAL PHP (SERVER-SIDE)
 */
$titulo_pagina = "Viaja Con Nosotros";
$anio = date("Y");

// 1. Definición del menú
$menu = [
"inicio" => "🏠 Inicio",
"destinos" => "🗺️ Destinos",
"ofertas" => "💰 Ofertas",
"testimonios" => "⭐ Testimonios",
"reservas" => "🗓️ Reservas",
"contacto" => "✉️ Contacto"
];

// 2. Determinar la página actual (Usando la variable GET)
// Si no hay 'page' en la URL, por defecto es 'inicio'.
$pagina_actual = $_GET['page'] ?? 'inicio';

// 3. Simulación de procesamiento de formularios
$mensaje_reserva = "";
$mensaje_contacto = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['form_type']) && $_POST['form_type'] === 'reserva') {
        $nombre = htmlspecialchars($_POST['nombre'] ?? 'Invitado');
        $mensaje_reserva = "¡Hola **{$nombre}**! Tu reserva ha sido procesada con éxito. Pronto recibirás un email.";
        $pagina_actual = 'reservas'; // Permanece en la sección de reservas
    } elseif (isset($_POST['form_type']) && $_POST['form_type'] === 'contacto') {
        $nombre = htmlspecialchars($_POST['nombre'] ?? 'Invitado');
        $mensaje_contacto = "¡Gracias **{$nombre}**! Tu mensaje ha sido enviado. Te contactaremos pronto.";
        $pagina_actual = 'contacto'; // Permanece en la sección de contacto
    }
}


/**
 * 4. Contenido de las secciones (Hardcoded HTML para PHP)
 * NOTA: Los enlaces deben usar ?page=seccion_clave para recargar PHP.
 */
function getContent($page, $msg_reserva, $msg_contacto) {
    if ($page === 'destinos') {
        return '
            <h2>Destinos Increíbles 🗺️</h2>
            <p>Visita playas exóticas, montañas majestuosas y ciudades llenas de cultura. Cada destino tiene experiencias únicas esperándote. Elige el que más te inspire.</p>
            <div class="cards">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Playa">
                    <div class="card-content">
                        <h3>Playa Paraíso 🏖️</h3>
                        <p>Relájate en aguas cristalinas y arenas blancas. Incluye snorkel y tour por islas.</p>
                        <a href="?page=destinos" class="boton" style="padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Ver detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1519824145371-296894a0daa9?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Montañas">
                    <div class="card-content">
                        <h3>Montañas Majestuosas 🏔️</h3>
                        <p>Explora senderos y paisajes espectaculares. Paquete de trekking con guía.</p>
                        <a href="?page=destinos" class="boton" style="padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Ver detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1502920917128-1aa500764b2b?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Ciudad">
                    <div class="card-content">
                        <h3>Ciudades Culturales 🗽</h3>
                        <p>Descubre historia, gastronomía y vida nocturna únicas en las capitales del mundo.</p>
                        <a href="?page=destinos" class="boton" style="padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Ver detalles</a>
                    </div>
                </div>
            </div>
        ';
    } elseif ($page === 'ofertas') {
        return '
            <h2>Ofertas y Promociones Exclusivas 💰</h2>
            <p>Aprovecha nuestras promociones de temporada y paquetes exclusivos. ¡Viaja más por menos!</p>
            <div class="cards">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Oferta 1">
                    <div class="card-content">
                        <h3>¡Último Minuto! -50%</h3>
                        <p>Viaje todo incluido a Playa Paraíso. Vuelos + Hotel 7 días.</p>
                        <a href="?page=reservas" class="boton" style="background: #ff7f50; padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Reservar Ahora</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Oferta 2">
                    <div class="card-content">
                        <h3>Paquete Familiar Montañas</h3>
                        <p>3 noches en cabaña + actividades para niños. Descuento del 20%.</p>
                        <a href="?page=reservas" class="boton" style="background: #ff7f50; padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Reservar Ahora</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1534723452815-46700c25d80d?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Oferta 3">
                    <div class="card-content">
                        <h3>Escape de Fin de Semana</h3>
                        <p>Vuelo + 2 noches de hotel 5 estrellas en una Ciudad Cultural.</p>
                        <a href="?page=reservas" class="boton" style="background: #ff7f50; padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        ';
    } elseif ($page === 'testimonios') {
        return '
            <h2>Lo que dicen nuestros viajeros ⭐</h2>
            <p>Miles de clientes satisfechos ya han viajado con nosotros. ¡Tu experiencia será la próxima!</p>
            <div class="testimonial-card">
                <blockquote>"El mejor viaje de mi vida. La organización fue impecable y el destino superó todas mis expectativas. ¡El equipo de Viaja Con Nosotros es increíble!"</blockquote>
                <cite>— Ana M., Viaje a Playa Paraíso</cite>
            </div>
            <div class="testimonial-card">
                <blockquote>"Fácil, rápido y seguro. Pude reservar mi viaje a las montañas en minutos. Tienen las mejores ofertas y un excelente soporte al cliente."</blockquote>
                <cite>— Carlos L., Trekking en Montañas Majestuosas</cite>
            </div>
        ';
    } elseif ($page === 'reservas') {
        $message_html = $msg_reserva ? "<div id='reserva-msg' class='message-box success'>{$msg_reserva}</div>" : "";
        return "
            <h2>Haz tu Reserva Ahora 🗓️</h2>
            <p>Rellena el formulario con tus datos para asegurar tu plaza. Recibirás una confirmación inmediata.</p>
            <form id='reserva-form' method='POST' action='?page=reservas'>
                <input type='hidden' name='form_type' value='reserva'>
                <label for='nombre'>Nombre Completo:</label>
                <input type='text' name='nombre' placeholder='Tu nombre' required>
                <label for='email'>Correo Electrónico:</label>
                <input type='email' name='email' placeholder='ejemplo@correo.com' required>
                <label for='fecha'>Fecha de Salida:</label>
                <input type='date' name='fecha' required>
                <label for='destino'>Destino Seleccionado:</label>
                <select name='destino' required>
                    <option value=''>Selecciona un destino</option>
                    <option value='playa'>Playa Paraíso</option>
                    <option value='montanas'>Montañas Majestuosas</option>
                    <option value='ciudad'>Ciudades Culturales</option>
                    <option value='europa'>Tour por Europa (Oferta)</option>
                </select>
                <input type='submit' value='Confirmar Reserva'>
            </form>
            {$message_html}
        ";
    } elseif ($page === 'contacto') {
        $message_html = $msg_contacto ? "<div id='contacto-msg' class='message-box success'>{$msg_contacto}</div>" : "";
        return "
            <h2>Contáctanos ✉️</h2>
            <p>¿Tienes preguntas o necesitas un itinerario personalizado? Déjanos un mensaje y nuestro equipo de expertos te responderá en menos de 24 horas.</p>
            <form id='contacto-form' method='POST' action='?page=contacto'>
                <input type='hidden' name='form_type' value='contacto'>
                <label for='nombre'>Nombre Completo:</label>
                <input type='text' name='nombre' placeholder='Tu nombre' required>
                <label for='email'>Correo Electrónico:</label>
                <input type='email' name='email' placeholder='ejemplo@correo.com' required>
                <label for='mensaje'>Tu Mensaje:</label>
                <textarea name='mensaje' placeholder='Describe tus dudas o solicitud...' rows='6' required></textarea>
                <input type='submit' value='Enviar Mensaje'>
            </form>
            {$message_html}
        ";
    }
    // Default: 'inicio'
    return '
        <h2>Bienvenido a tu próxima aventura 🚀</h2>
        <p>Explora el mundo con nosotros. Desde playas paradisíacas hasta ciudades llenas de historia. Somos expertos en crear itinerarios personalizados que se ajustan a tu estilo y presupuesto. ¡Empieza a soñar con tu viaje hoy mismo!</p>
        <p>Nuestra misión es hacer que viajar sea fácil y accesible. Con más de 10 años de experiencia, garantizamos la mejor calidad y seguridad en cada paquete.</p>
        <a href="?page=destinos" class="boton">Descubrir destinos únicos</a>
    ';
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo $titulo_pagina . ' | ' . ucfirst($pagina_actual); ?></title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
    * { margin:0; padding:0; box-sizing:border-box; font-family:'Poppins', sans-serif; }
    body { display: flex; flex-direction: column; min-height: 100vh; background: #f1f0ddff; }
    header { background: linear-gradient(135deg, #00b4db, #0083b0); color: white; text-align: center; padding: 30px 10px; position: sticky; top: 0; z-index: 1000; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    header h1 { font-size: 2.5em; font-weight: 700; }
    header p { font-size: 1.1em; margin-top: 5px; }
    nav { background: #004d61; display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; padding: 15px 0; position: sticky; top: 97px; z-index: 900; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    nav a { color: white; text-decoration: none; font-weight: 600; padding: 8px 18px; border-radius: 20px; transition: all 0.3s; cursor: pointer; }
    nav a:hover, nav a.active { background: #00b4db; color: #fff; box-shadow: 0 0 10px rgba(0,180,219,0.7); }
    main { flex: 1; padding: 60px 20px; text-align: center; min-height: 500px; }
    main h2 { font-size: 2.5em; margin-bottom: 20px; color: #004d61; font-weight: 700; }
    main p { font-size: 1.1em; max-width: 900px; margin: 0 auto 30px auto; line-height: 1.6; }
    .boton { display: inline-block; margin-top: 15px; padding: 15px 35px; background: #ff7f50; color: white; text-decoration: none; border-radius: 50px; font-weight: 600; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(255,127,80,0.4); transition: background 0.3s, transform 0.3s, box-shadow 0.3s; }
    .boton:hover { background: #ff6347; transform: translateY(-3px); box-shadow: 0 6px 20px rgba(255,127,80,0.6); }
    .cards { display: flex; flex-wrap: wrap; justify-content: center; gap: 30px; margin-top: 40px; }
    .card { background: white; border-radius: 15px; width: 300px; overflow: hidden; box-shadow: 0 8px 25px rgba(0,0,0,0.15); transition: transform 0.4s, box-shadow 0.4s; }
    .card:hover { transform: translateY(-10px); box-shadow: 0 15px 30px rgba(0,0,0,0.25); }
    .card img { width: 100%; height: 180px; object-fit: cover; transition: opacity 0.3s; }
    .card:hover img { opacity: 0.9; }
    .card-content { padding: 20px; text-align: left; }
    .card-content h3 { color: #004d61; margin-bottom: 8px; font-size: 1.4em; }
    .card-content p { margin: 0; font-size: 1em; color: #555; }
    form { display: flex; flex-direction: column; gap: 20px; max-width: 500px; margin: 20px auto; padding: 30px; background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: left; }
    label { font-weight: 600; color: #004d61; margin-bottom: -10px; display: block; }
    input, textarea, select { padding: 12px; border-radius: 8px; border: 1px solid #ddd; font-size: 1em; width: 100%; transition: border-color 0.3s; }
    input:focus, textarea:focus, select:focus { border-color: #00b4db; outline: none; }
    input[type="submit"] { background: #00b4db; color: white; font-weight: 600; border: none; cursor: pointer; padding: 15px; transition: background 0.3s, transform 0.3s; margin-top: 10px; }
    input[type="submit"]:hover { background: #0083b0; transform: translateY(-2px); }
    .testimonial-card { max-width: 800px; margin: 30px auto; padding: 30px; background: white; border-left: 5px solid #ff7f50; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: left; }
    .testimonial-card blockquote { font-style: italic; font-size: 1.2em; color: #333; margin-bottom: 15px; position: relative; line-height: 1.5; }
    .testimonial-card blockquote::before { content: '“'; font-size: 3em; color: #00b4db; position: absolute; left: -25px; top: -10px; opacity: 0.5; }
    .testimonial-card cite { display: block; margin-top: 10px; font-weight: 600; color: #004d61; font-size: 1em; }
    .message-box { margin-top: 20px; padding: 10px; border-radius: 5px; font-weight: 600; }
    .success { background-color: #e6ffe6; color: green; border: 1px solid green; }
    footer { background: #b9b58dff; text-align: center; padding: 20px; font-size: 1em; color: #333; margin-top: auto; border-top: 1px solid #ccc; }
    footer a { color: #004d61; text-decoration: none; }
    @media (max-width: 768px) {
    header h1 { font-size: 2em; }
    nav { gap: 15px; top: 82px; }
    .cards { flex-direction: column; align-items: center; }
    .card { width: 90%; max-width: 400px; }
    main { padding: 40px 15px; }
    }
    </style>
</head>
<body>

<header>
<h1>🌎 <?php echo $titulo_pagina; ?> 🌴</h1>
<p>Tu Pasaporte al Mundo: Experiencias Inolvidables</p>
</header>

<nav>
<?php
// Generación dinámica del menú de navegación (PHP)
foreach ($menu as $key => $valor) {
    // Cada enlace apunta a sí mismo con el parámetro ?page=key
    $active_class = ($key === $pagina_actual) ? 'active' : '';
    echo "<a href='?page={$key}' class='nav-link {$active_class}'>{$valor}</a>";
}
?>
</nav>

<main id="contenido-principal">
<?php
// 5. Inyectar el contenido de la sección actual
echo getContent($pagina_actual, $mensaje_reserva, $mensaje_contacto);
?>
</main>

<footer>
<p>© <?php echo $anio; ?> <strong><?php echo $titulo_pagina; ?></strong> | Agencia de Viajes Virtual | <a href="#">Aviso Legal</a></p>
</footer>

</body>
</html>