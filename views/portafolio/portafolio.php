<?php include_once __DIR__ . "/header.php"; ?>

<div class="portafolio contenedor-sm">
    <p data-aos="fade-down" class="descripcion contenedor-sm">He seleccionado algunos proyectos que han sido realizados utilizando tecnologias en el lado del cliente <span>FrontEnd</span> como NodeJS, NPM, HTML, CSS, JavaScript y en la parte del servidor <span>BackEnd</span> PHP, Composer, ActiveRecord, utilizando siempre buenas prácticas.</p>
    <div class="portafolio__galeria">
        <!-- Slider main container -->
        <div class="slider swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img data-aos="fade-down" class="imagen" src="build/img/sunnyside.webp" alt="Sunny Side">
                    <div data-aos="fade-up" class="contenido">
                        <a target="blank" href="https://sunnysidelandingpage.netlify.app/" class="contenido__nombre">Sunny Side</a>
                        <p class="contenido__fecha">Fecha: <span>4 Septiembre 2021</span></p>
                        <p class="contenido__tecnologia">Tecnologías: <span>HTML, JavaScript, SCSS</span></p>
                        <p class="contenido__creador">Rol: <span>FrontEnd</span></p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="imagen" src="build/img/FrontendStore.webp" alt="FrontEnd Store">
                    <div class="contenido">
                        <a target="blank" href="https://frontendstorel.netlify.app/index.html" class="contenido__nombre">FrontEnd Store</a>
                        <p class="contenido__fecha">Fecha: <span>4 Septiembre 2021</span></p>
                        <p class="contenido__tecnologia">Tecnologías: <span>HTML, JavaScript, SCSS</span></p>
                        <p class="contenido__creador">Rol: <span>FrontEnd</span></p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="imagen" src="build/img/blogCafe.webp" alt="Coffee Team">

                    <div class="contenido">
                        <a target="blank" href="https://coffeeteam.netlify.app/" class="contenido__nombre">Coffee Team</a>
                        <p class="contenido__fecha">Fecha: <span>4 Septiembre 2021</span></p>
                        <p class="contenido__tecnologia">Tecnologías: <span>HTML, JavaScript, SCSS</span></p>
                        <p class="contenido__creador">Rol: <span>FrontEnd</span></p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img class="imagen" src="build/img/geminis.webp" alt="Geminis Food">
                    <div class="contenido">
                        <a target="blank" href="https://geminisfood.netlify.app/" class="contenido__nombre">Geminis Food</a>
                        <p class="contenido__fecha">Fecha: <span>4 Septiembre 2021</span></p>
                        <p class="contenido__tecnologia">Tecnologías: <span>HTML, JavaScript, SCSS</span></p>
                        <p class="contenido__creador">Rol: <span>FrontEnd</span></p>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
</div>

<?php include_once __DIR__ . "/footer.php"; ?>