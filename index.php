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
"contacto" => "✉️ Contacto "
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
        $mensaje_reserva = "¡Hola **{$nombre}**! Tu reserva ha sido procesada con éxito. Pronto recibirás un email de confirmación.";
        $pagina_actual = 'reservas'; // Permanece en la sección de reservas
    } elseif (isset($_POST['form_type']) && $_POST['form_type'] === 'contacto') {
        $nombre = htmlspecialchars($_POST['nombre'] ?? 'Invitado');
        $mensaje_contacto = "¡Gracias {$nombre}! Tu mensaje ha sido enviado, estaremos resolviendo tu duda pronto...";
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
            <h2>🗺️ Destinos Increíbles 🗺️</h2>
            <p>Visita playas exóticas, montañas majestuosas y ciudades llenas de cultura. Cada destino tiene experiencias únicas esperándote. Elige el que más te inspire.</p>
            <div class="cards">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1507525428034-b723cf961d3e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Playa">
                    <div class="card-content">
                        <h3>Playa Paraíso 🏖️</h3>
                        <p>Relájate en aguas cristalinas y arenas blancas. Incluye snorkel y tour por islas.</p>
                        <a href="?page=ofertas" class="boton" style="padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Ver detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="data:image/jpeg;base64,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" alt="Montañas">
                    <div class="card-content">
                        <h3>Montañas Majestuosas 🏔️</h3>
                        <p>Explora senderos y paisajes espectaculares. Paquete de trekking con guía.</p>
                        <a href="?page=ofertas" class="boton" style="padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Ver detalles</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://img.static-kl.com/images/media/EDD567B6-661E-481F-97ACD929AB125ABA" alt="Ciudad">
                    <div class="card-content">
                        <h3>Ciudades Culturales 🗽</h3>
                        <p>Descubre historia, gastronomía y vida nocturna únicas en las capitales del mundo.</p>
                        <a href="?page=ofertas" class="boton" style="padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Ver detalles</a>
                    </div>
                </div>
            </div>
        ';
    } elseif ($page === 'ofertas') {
        return '
            <h2>💰 Ofertas y Promociones Exclusivas 💰</h2>
            <p>Aprovecha nuestras promociones de temporada y paquetes exclusivos. ¡Viaja más por menos!</p>
            <div class="cards">
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1470770841072-f978cf4d019e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Oferta 1">
                    <div class="card-content">
                        <h3>¡Último Minuto! -50%</h3>
                        <p>Viaje todo incluido a Playa Paraíso. Vuelos + Hotel 7 días.</p>
                        <a href="?page=reservas" class="boton" style="background: #5c5552ff; padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Reservar Ahora</a>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="Oferta 2">
                    <div class="card-content">
                        <h3>Paquete Familiar En Las Montañas</h3>
                        <p>3 noches en cabaña + actividades para niños. Descuento del 20%.</p>
                        <a href="?page=reservas" class="boton" style="background: hsla(9, 4%, 31%, 1.00); padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Reservar Ahora</a>
                    </div>
                </div>
                <div class="card">
                    <img src="data:image/jpeg;base64,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" alt="Oferta 3">
                    <div class="card-content">
                        <h3>Escape de Fin de Semana</h3>
                        <p>Vuelo + 2 noches de hotel 5 estrellas en una Ciudad Cultural.</p>
                        <a href="?page=reservas" class="boton" style="background: #58524fff; padding: 10px 15px; margin-top: 10px; font-size:0.9em;">Reservar Ahora</a>
                    </div>
                </div>
            </div>
        ';
    } elseif ($page === 'testimonios') {
        return '
            <h2>⭐ Lo que dicen nuestros viajeros ⭐</h2>
            <p>Miles de clientes satisfechos ya han viajado con nosotros. ¡Tu experiencia será la próxima!</p>
            <div class="testimonial-card">
                <blockquote>"El mejor viaje de mi vida. La organización fue impecable y el destino superó todas mis expectativas. ¡El equipo de Viaja Con Nosotros es increíble!"</blockquote>
                <cite>— Ana M., Viaje a Playa Paraíso.</cite>
            </div>
            <div class="testimonial-card">
                <blockquote>"Fácil, rápido y seguro. Pude reservar mi viaje a las montañas en minutos. Tienen las mejores ofertas y un excelente soporte al cliente."</blockquote>
                <cite>— Carlos L., Viaje a Montañas Majestuosas.</cite>
            </div>
        ';
    } elseif ($page === 'reservas') {
        $message_html = $msg_reserva ? "<div id='reserva-msg' class='message-box success'>{$msg_reserva}</div>" : "";
        return "
            <h2> 🗓️ Haz tu Reserva Ahora 🗓️</h2>
            <p>Rellena el formulario con tus datos para asegurar tu reservación. Recibirás una confirmación inmediata.</p>
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
            <h2>✉️ Contáctanos ✉️</h2>
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
        <h2>🚀 Bienvenido a tu próxima aventura 🚀</h2>
        <p>Explora el mundo con nosotros. Desde playas paradisíacas hasta ciudades llenas de historia. Somos expertos en crear itinerarios personalizados que se ajustan a tu estilo y presupuesto. ¡Empieza a soñar con tu viaje hoy mismo!</p>
        <p>Nuestra misión es hacer que viajar sea fácil y accesible. Garantizamos la mejor calidad y seguridad en cada paquete.</p>
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
    header { background: linear-gradient(135deg, #32557cff, #8cbed1ff); color: white; text-align: center; padding: 30px 10px; position: sticky; top: 0; z-index: 1000; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
    header h1 { font-size: 2.5em; font-weight: 700; }
    header p { font-size: 1.1em; margin-top: 5px; }
    nav { background: #0c5264ff; display: flex; justify-content: center; flex-wrap: wrap; gap: 30px; padding: 15px 0; position: sticky; top: 97px; z-index: 900; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
    nav a { color: white; text-decoration: none; font-weight: 600; padding: 8px 18px; border-radius: 20px; transition: all 0.3s; cursor: pointer; }
    nav a:hover, nav a.active { background: #577e9eff; color: #fff; box-shadow: 0 0 10px rgba(155, 152, 142, 0.85); }
    main { flex: 1; padding: 60px 20px; text-align: center; min-height: 500px; }
    main h2 { font-size: 2.5em; margin-bottom: 20px; color: #004d61; font-weight: 700; }
    main p { font-size: 1.1em; max-width: 900px; margin: 0 auto 30px auto; line-height: 1.6; }
    .boton { display: inline-block; margin-top: 15px; padding: 15px 35px; background: #493f3bff; color: white; text-decoration: none; border-radius: 50px; font-weight: 600; letter-spacing: 1px; box-shadow: 0 4px 15px rgba(116, 104, 99, 0.4); transition: background 0.3s, transform 0.3s, box-shadow 0.3s; }
    .boton:hover { background: #443c3aff; transform: translateY(-3px); box-shadow: 0 6px 20px rgba(80, 73, 71, 0.6); }
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
    input[type="submit"] { background: #5c6e72ff; color: white; font-weight: 600; border: none; cursor: pointer; padding: 15px; transition: background 0.3s, transform 0.3s; margin-top: 10px; }
    input[type="submit"]:hover { background: #0083b0; transform: translateY(-2px); }
    .testimonial-card { max-width: 800px; margin: 30px auto; padding: 30px; background: white; border-left: 5px solid #ff7f50; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); text-align: left; }
    .testimonial-card blockquote { font-style: italic; font-size: 1.2em; color: #333; margin-bottom: 15px; position: relative; line-height: 1.5; }
    .testimonial-card blockquote::before { content: '“'; font-size: 3em; color: #6a7d81ff; position: absolute; left: -25px; top: -10px; opacity: 0.5; }
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
<p> <strong><?php echo $titulo_pagina; ?></strong> | Agencia de Viajes Virtual 
</footer>

</body>
</html>