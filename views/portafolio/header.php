<header class="header">
    <h2 class="nombre-pagina"><a href="/">Sebastián Lugo<br><span>Desarrollador</span></a></h2>
    <p class="menu">
        <i class="fa-solid fa-align-left" id="menu-mobile"></i>
    </p>
    <nav class="nav contenedor">
        <a class="<?php echo ($titulo === "Sobre mí") ? "activo" : ''; ?>" href="/sobre-mi">Sobre Mí</a>
        <a class="<?php echo ($titulo === "Portafolio") ? "activo" : ''; ?>" href="/portafolio">Portafolio</a>
        <a class="<?php echo ($titulo === "Servicios") ? "activo" : ''; ?>" href="/servicios">Servicios</a>
        <a class="<?php echo ($titulo === "Contacto") ? "activo" : ''; ?>" href="/contacto">Contacto</a>
    </nav>
</header>

<h2 class="nombre-sitio">
    <?php echo $titulo; ?>
</h2>