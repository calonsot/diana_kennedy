<?php include('menu.php') ?>

  <link rel="stylesheet" href="css/demo.css">
  <script src="js/responsiveslides.min.js"></script>
  <script>
    // You can also use "$(window).load(function() {"
    $(function () {

      $("#slider4").responsiveSlides({
        auto: true,
        pager: false,
		speed:4000,
        nav: true,
        namespace: "callbacks",
        before: function () {
          $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          $('.events').append("<li>after event fired.</li>");
        }
      });

    });
  </script>
					
		<!-- Banner -->
			<section id="banner">
            
				 <!-- Slideshow 4 -->
                  <ul class="rslides" id="slider4">
                   	<li>
                      <img src="images/banner.jpg" alt="">
                      <p class="caption">"Una receta tiene un marco, el cocinero, la cocinera, cómo vive, cual es el ambiente en que vive, cuales son los ingredientes locales."</p>
                    </li>
                    <li>
                      <img src="images/banner2.jpg" alt="">
                      <p class="caption">"Cuando piensas que por lo menos 24 chiles que se cultivan en el estado de Oaxaca, que no se dan en otras partes; entonces es tan importante."</p>
                    </li>
                    <li>
                      <img src="images/banner3.jpg" alt="">
                      <p class="caption">"Nadie se ha dedicado a la conservación de los ingredientes. Esto me preocupa mucho."</p>
                    </li>
                    <li>
                      <img src="images/banner4.jpg" alt="">
                      <p class="caption">“La clave de la comida es el mercado.”</p>
                    </li>
                     <li>
                      <img src="images/banner5.jpg" alt="">
                      <p class="caption">"Yo creo que ya es tiempo de apreciar. En su supermercado tienen ingredientes de todo el mundo, pero no tienen los ingredientes de México."</p>
                    </li>
                    
                  </ul>

			</section>


								
		

		<!-- Posts -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row">
                    <p>
                    La cocina tradicional mexicana es una manifestaci&oacute;n cultural muy antigua que tiene como base los <a href="http://www.biodiversidad.gob.mx/genes/centrosOrigen/centrosPlantas.html">productos agr&iacute;colas que se domesticaron en M&eacute;xico</a>. Entre las que destacan el ma&iacute;z, la calabaza, el frijol y el chile, entre otros m&aacute;s. Adem&aacute;s, cada uno de ellos contiene una diversidad gen&eacute;tica muy amplia resultante del proceso de selecci&oacute;n artificial, que ha sucedido desde hace miles de a&ntilde;os y contin&uacute;a hasta la fecha. Por lo que existen <a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">razas adaptadas</a> a las diversas condiciones de suelos, lluvia y temperatura del pa&iacute;s, con distintos colores, aromas y sabores que le brindan a nuestra cocina un caleidoscopio extraordinario de platillos.</p>

                    <p>Recientemente, la <a href="http://www.biodiversidad.gob.mx/usos/cocinaTradicional.html">cocina tradicional mexicana</a> fue reconocida por la UNESCO como patrimonio inmaterial de la humanidad. Sin embargo, muchos de los ingredientes originales se est&aacute;n perdiendo. La importaci&oacute;n de productos agr&iacute;colas de otros pa&iacute;ses, el desarrollo de variedades h&iacute;bridas y transg&eacute;nicas, el cambio en la cultura alimenticia y el desconocimiento de los ingredientes originales son algunas de las razones de esta lamentable p&eacute;rdida.</p>
                    </div>                


                   <div id="vintro">
                   <iframe width="400" height="225" src="http://www.youtube.com/embed/x7ftH4oXJg4?rel=0" frameborder="0" allowfullscreen></iframe>
                   </div>
                    
			  </div>
				</div>
			</section>
			
		<!-- CTA -->
			<nav id="nav">
            </nav>

		<?php include('footer.php') ?>
