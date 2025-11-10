<!-- 🌴 MENÚ DE PÁGINA DE VIAJES 🌴 -->
<nav class="menu">
  <div class="logo">
    <a href="index.php">🌎 Viaja Con Nosotros</a>
  </div>

  <input type="checkbox" id="menu-toggle">
  <label for="menu-toggle" class="menu-icon">☰</label>

  <ul class="menu-links">
    <li><a href="index.php">Inicio</a></li>
    <li><a href="destinos.php">Destinos</a></li>
    <li><a href="ofertas.php">Ofertas</a></li>
    <li><a href="reservas.php">Reservas</a></li>
    <li><a href="contacto.php">Contacto</a></li>
  </ul>
</nav>

<style>
/* 🌴=== ESTILOS DEL MENÚ PRINCIPAL ===🌴 */

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', Arial, sans-serif;
}

.menu {
  background: #004d61;
  color: white;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 40px;
  position: sticky;
  top: 0;
  z-index: 1000;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
}

/* === LOGO === */
.menu .logo a {
  color: white;
  font-size: 1.5em;
  text-decoration: none;
  font-weight: bold;
  letter-spacing: 1px;
  transition: color 0.3s;
}

.menu .logo a:hover {
  color: #00b4db;
}

/* === ENLACES DEL MENÚ === */
.menu-links {
  list-style: none;
  display: flex;
  gap: 30px;
}

.menu-links li a {
  color: white;
  text-decoration: none;
  font-weight: bold;
  transition: color 0.3s, transform 0.2s;
}

.menu-links li a:hover {
  color: #f1f0ddff;
  transform: scale(1.1);
}

/* === BOTÓN RESPONSIVE (MÓVIL) === */
.menu-icon {
