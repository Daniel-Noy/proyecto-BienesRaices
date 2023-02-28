<?php 
require './includes/funciones.php';

incluirTemplate('header', true);
?>

    <main class="inicio || contenedor seccion">
        <h1>Más sobre nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="./build/img/iconos/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h2>Seguridad</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero inventore aliquam unde!</p>
            </div> <!--Icono-->

            <div class="icono">
                <img src="./build/img/iconos/icono2.svg" alt="Icono billetes" loading="lazy">
                <h2>Precio</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero inventore aliquam unde!</p>
            </div> <!--Icono-->

            <div class="icono">
                <img src="./build/img/iconos/icono3.svg" alt="Icono reloj" loading="lazy">
                <h2>A tiempo</h2>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero inventore aliquam unde!</p>
            </div> <!--Icono-->
        </div>
        
        <section class="anuncios || seccion contenedor">
            <h2>Casas y Depas en Venta</h2>

            <div class="anuncios-contenedor">
                <div class="anuncio">
                    <figure>
                        <img src="./build/img/anuncio1.webp" alt="Imagen casa lago" loading="lazy">
                    </figure>
                    <div class="anuncio-informacion">
                        <h3>Casa de Lujo en el Lago</h3>
                        <p class="descripcion">Casa en el lago con excelente vista, acabados de lujo a un exelente precio.</p>
                        <p class="costo">$3,000,000</p>

                        <div class="habitaciones">
                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_dormitorio.svg" alt="Icono dormitorio">
                                <p>4</p>
                            </div> <!--habitacion-->

                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_estacionamiento.svg" alt="Icono estacionamiento">
                                <p>3</p>
                            </div> <!--habitacion-->

                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_wc.svg" alt="Icono baño">
                                <p>3</p>
                            </div> <!--habitacion-->
                        </div>  <!--habitaciones-->

                        <a href="" class="ver-anuncio || boton-amarillo-block">Ver propiedad</a>
                    </div> <!--informacion-->
                </div> <!--anuncio-->

                <div class="anuncio">
                    <figure>
                        <img src="./build/img/anuncio2.webp" alt="Imagen casa de lujo" loading="lazy">
                    </figure>
                    <div class="anuncio-informacion">
                        <h3>Casa Terminados de Lujo</h3>
                        <p class="descripcion">Casa con diseño moderno, asi como tecnología inteligente y amueblada</p>
                        <p class="costo">$2,000,000</p>
                        <div class="habitaciones">
                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_dormitorio.svg" alt="Icono dormitorio">
                                <p>4</p>
                            </div> <!--habitacion-->

                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_estacionamiento.svg" alt="Icono estacionamiento">
                                <p>3</p>
                            </div> <!--habitacion-->

                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_wc.svg" alt="Icono baño">
                                <p>3</p>
                            </div> <!--habitacion-->
                        </div>  <!--habitaciones-->

                        <a href="" class="ver-anuncio || boton-amarillo-block">Ver propiedad</a>
                    </div> <!--informacion-->
                </div> <!--anuncio-->

                <div class="anuncio">
                    <figure>
                        <img src="./build/img/anuncio3.webp" alt="Imagen casa con alberca" loading="lazy">
                    </figure>
                    <div class="anuncio-informacion">
                        <h3>Casa con alberca</h3>
                        <p class="descripcion">Casa con alberca y acabados de Lujo en la ciudad, exelente oportunidad</p>
                        <p class="costo">$3,000,000</p>
                        <div class="habitaciones">
                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_dormitorio.svg" alt="Icono dormitorio">
                                <p>4</p>
                            </div> <!--habitacion-->

                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_estacionamiento.svg" alt="Icono estacionamiento">
                                <p>3</p>
                            </div> <!--habitacion-->

                            <div class="habitacion">
                                <img src="./build/img/iconos/icono_wc.svg" alt="Icono baño">
                                <p>3</p>
                            </div> <!--habitacion-->
                        </div>  <!--habitaciones-->

                        <a href="" class="ver-anuncio || boton-amarillo-block">Ver propiedad</a>
                    </div> <!--informacion-->
                </div> <!--anuncio-->
            </div>

            <div class="ver-todas || alinear-derecha">
                <a href="anuncios.html" class=" boton-verde">Ver todos</a>
            </div>
        </section>
    </main>

    <section class="contactanos">
        <div class="contactanos-informacion || contenedor seccion">
            <h2>Encuentra la casa de tus sueños</h2>
            <p>Llena el formulario de contacto y un asesor se pondrá en contacto contigo a la brevedad</p>
            <a href="contacto.html" class="boton-amarillo">Contactanos</a>
        </div>
    </section>

    <aside class="mas-info || contenedor seccion">
        <section class="blog">
            <h2>Nuestro Blog</h2>
            <div class="blog-contenedor">
                <article class="blog-entrada">
                    <img src="./build/img/blog1.webp" alt="Blog de una casa">
                    <div class="blog-informacion">
                        <h3>Terraza en el techo de tu casa</h3>
                        <p class="ficha">Escrito el: <span class="txt-resaltado">20/10/2022</span> por: <span class="txt-resaltado">Admin</span></p>
                        <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                    </div>
                    
                </article> <!--blog-entrada-->

                <article class="blog-entrada">
                    
                    <img src="./build/img/blog2.webp" alt="Blog de una casa">
                    <div class="blog-informacion">
                            <a href="#">
                                <h3>Guia para la decoracion del hogar</h3>
                                <p class="ficha">Escrito el: <span class="txt-resaltado">20/10/2022</span> por: <span class="txt-resaltado">Admin</span></p>
                                <p>Consejos para construir una terraza en el techo de tu casa, con los mejores materiales y ahorrando dinero</p>
                            </a>
                        </div>
                    
                </article> <!--blog-entrada-->

            </div><!--blog-contenedor-->
        </section>

        <section class="testimoniales">
            <h2>Testimoniales</h2>
            <div class="testimonial">
                <blockquote>El personal se comporto de una excelente forma, muy buena atención y la casa que me ofrecieron cumple con todas mis expectativas.</blockquote>
                <p>-Juan De la Torre</p>
            </div>
        </section>
    </aside>

<?php  incluirTemplate('footer')?>