<?php include_once __DIR__ . "/header.php"; ?>

<div class="contacto">
    <?php if ($mensaje) { ?>
        <p class="alerta exito"><?php echo $mensaje; ?></p>
    <?php } else { ?>
        <p class="alerta error"><?php echo $mensaje; ?></p>
    <?php }; ?>

    <form class="formulario" action="/contacto" method="POST">
        <div data-aos="zoom-in-down" class="campo">
            <label for="nombre">Nombre</label>
            <input type="nombre" id="nombre" placeholder="Tu nombre" name="contacto[nombre]" required>
        </div>
        <div data-aos="zoom-in-left" class="campo">
            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Tu email" name="contacto[email]">
        </div>
        <div data-aos="zoom-in-right" class="campo">
            <label for="telefono">No Contacto</label>
            <input type="tel" id="telefono" placeholder="No. teléfono" name="contacto[telefono]" required>
        </div>
        <div data-aos="zoom-in-up" class="campo">
            <label for="mensaje">Mensaje</label>
            <textarea type="textarea" id="mensaje" placeholder="Tu mensaje" name="contacto[mensaje]" rows="8" required></textarea>
        </div>
        <input type="submit" class="boton" value="Contactar">
    </form>

</div>
