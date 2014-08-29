<?php include('menu.php') ?>

<link rel="stylesheet" type="text/css" href="slider/css/styleslider.css" />
<script type="text/javascript" src="slider/js/s3Slider.js"></script>

<script type="text/javascript">
$(document).ready(function () {
    $('#slider1').s3Slider({
        timeOut: 5000
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $(".pane-list li").click(function () {
        window.location = $(this).find("a").attr("href");
        return false;
    });
});
</script>
<script type="text/javascript">
$(document).ready(function () {
    $('.rss').append('<span class="hover"></span>').each(function () {
        var $span = $('> span.hover', this).css('opacity', 0);
        $(this).hover(function () {
            $span.stop().fadeTo(500, 1);
        }, function () {
            $span.stop().fadeTo(500, 0);
        });
    });
    $('.facebook').append('<span class="hover"></span>').each(function () {
        var $span = $('> span.hover', this).css('opacity', 0);
        $(this).hover(function () {
            $span.stop().fadeTo(500, 1);
        }, function () {
            $span.stop().fadeTo(500, 0);
        });
    });
    $('.twitter').append('<span class="hover"></span>').each(function () {
        var $span = $('> span.hover', this).css('opacity', 0);
        $(this).hover(function () {
            $span.stop().fadeTo(500, 1);
        }, function () {
            $span.stop().fadeTo(500, 0);
        });
    });
});
</script>
					
		<!-- Banner -->
			<section id="banner">
				<!-- Slider -->
              <div id="slider1">
                <ul id="slider1Content">
                  <li class="slider1Image"> <a href="#"><img src="slider/images/photo1.jpg" alt="" /></a> <span class="right">
                    <h2>Sopa de guías</h2>
                    Esta sopa es totalmente rústica; se prepara con guias de calabacitas criollas y con hierbas y quelites silvestres
                    de distintos sabores que son, al mismo tiempo, sorprendentemente delicados. 
                        <br /><br />
                        Es muy, muy sana, económica y ademas, deliciosisima...
                    <br />
                    <br />
                    <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a></span> 
                  </li>
                  
                    <li class="slider1Image"> <a href="#"><img src="slider/images/photo2.jpg" alt="" /></a> <span class="right">
                    <h2>Empanadas de sola de vega</h2>
                    El almuerzo tradicional para dias festivos, especialmente para bodas y bautizos.
                    <br /><br />Se rellenan con el mismo picadillo que se usa para chiles de agua o pasillas rellenos y se sirven con cebolla rebanada,
                    perejil y queso desmoronado encima...<br />
                    <br />
                    <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a> </span>
                  </li>
                  
                    <li class="slider1Image"> <a href="#"><img src="slider/images/photo3.jpg" alt="" /></a> <span class="right">
                    <h2>Chichilo rojo</h2>
                    Dentro de los platillos mas populares, este chichilo es poco conocido. En los anos setenta lo cocine con una de mis primeras maestras, 
                        la senora Domitila Santiago (q.e.p.d.), pero desde entonces nunca la he vuelto a preparar. <br /> <br />
                    El sabor autentico del chichilo rojo requiere del chilhuacle rojo que tristemente es poco usado hoy en dia...
                    <br />
                    <br />
                    <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a> </span>
                  </li>
                
                  <li class="slider1Image"> <a href="#"><img src="slider/images/photo4.jpg" alt="" /></a> <span class="right">
                    <h2>Chile de agua en rajas con limón y orégano</h2>
                    El chile de agua fresco parece inofensivo pero su apariencia engaña: pica mucho. Se cultiva todo el ano, con riego
                    en tiempo de secas, principalmente en el area de Zimatlán, en el Valle de Oaxaca. 
                        <br /><br />
                        Este chile se usa mucho para rellenar, en rajas con queso, para moler en salsas o, en esta forma, para adornar o acompañar muchos platillos
                    de la region...
                    <br /><br />
                    <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a></span>
                  </li>
                  
                  <div class="clear slider1Image"></div>
                </ul>
              </div>
              <!-- end slider -->
			</section>


								
		

		<!-- Posts -->
			<section class="wrapper style1">
				<div class="container">
					<div class="row">
                    <h3>Los ingredientes de la cocina tradicional mexicana</h3>
                    <p>
                    La cocina tradicional mexicana es una manifestaci&oacute;n cultural muy antigua que tiene como base los <a href="http://www.biodiversidad.gob.mx/genes/centrosOrigen/centrosPlantas.html">productos agr&iacute;colas que se domesticaron en M&eacute;xico</a>. Entre las que destacan el ma&iacute;z, la calabaza, el frijol, y el chile, entre otros m&aacute;s. Adem&aacute;s, cada uno de ellos contiene una diversidad gen&eacute;tica muy amplia resultante del proceso de selecci&oacute;n artificial, que ha sucedido desde hace miles de a&ntilde;os y contin&uacute;a hasta la fecha. Por lo que existen <a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">razas adaptadas</a> a las diversas condiciones de suelos, lluvia y temperatura, del pa&iacute;s, con distintos colores, aromas y sabores que le brindan a nuestra cocina un caleidoscopio extraordinario de platillos.</p>

                    <p>Recientemente, la <a href="http://www.biodiversidad.gob.mx/usos/cocinaTradicional.html">cocina tradicional mexicana</a> fue reconocida por la UNESCO como patrimonio inmaterial de la humanidad. Sin embargo, muchos de los ingredientes originales se est&aacute;n perdiendo. La importaci&oacute;n de productos agr&iacute;colas de otros pa&iacute;ses, el desarrollo de variedades h&iacute;bridas y transg&eacute;nicas, el cambio en la cultura alimenticia y el desconocimiento de los ingredientes originales son algunas de las razones de esta lamentable p&eacute;rdida.</p>
                    </div>                


                    <!--<div class="row">
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria_s2.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria_s3.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                        
                        <section class="6u">
							<div class="box post">
								<a href="#" class="image left"><img src="images/categoria_s4.jpg" alt="" /></a>
								<div class="inner">
									<p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
								</div>
							</div>
						</section>
                    </div>
                      -->
                    
			  </div>
				</div>
			</section>
			
		<!-- CTA -->
			<nav id="nav">
            </nav>

		<?php include('footer.php') ?>
