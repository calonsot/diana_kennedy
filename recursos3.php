<!DOCTYPE HTML>
<html>
	<head>
		<title>Diana Kennedy | Biodiversidad Mexicana | Conabio</title>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.dropotron.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/menu.js"></script>
		
		<script src="js/jquery-1.9.1.js"></script>
		<script type="text/javascript">
/* <![CDATA[ */
	( function($) {
		$.fn.responsiveVideo = function() {
			// Add CSS to head
			$( 'head' ).append( '<style type="text/css">.responsive-video-wrapper{width:100%;position:relative;padding:0}.responsive-video-wrapper iframe,.responsive-video-wrapper object,.responsive-video-wrapper embed{position:absolute;top:0;left:0;width:100%;height:100%}</style>' );
			// Gather all videos
			var $all_videos = $(this).find( 'iframe[src*="player.vimeo.com"], iframe[src*="youtube.com"], iframe[src*="youtube-nocookie.com"], iframe[src*="dailymotion.com"], iframe[src*="kickstarter.com"][src*="video.html"], object, embed' );
			// Cycle through each video and add wrapper div with appropriate aspect ratio if required
			$all_videos.not( 'object object' ).each( function() {
				var $video = $(this);
				if ( $video.parents( 'object' ).length )
					return;
				if ( ! $video.prop( 'id' ) )
					$video.attr( 'id', 'rvw' + Math.floor( Math.random() * 999999 ) );
				$video
					.wrap( '<div class="responsive-video-wrapper" style="padding-top: ' + ( $video.attr( 'height' ) / $video.attr( 'width' ) * 100 ) + '%" />' )
					.removeAttr( 'height' )
					.removeAttr( 'width' )
					} );
		};
	} )(jQuery);

		$(document).ready(function() {
			$( 'body' ).responsiveVideo();
		});
		
		</script>

		
		<style>
        * {
          font-family: Arial, sans;
          margin: 0;
          padding: 0;
          box-sizing: border-box;
          -moz-box-sizing: border-box;
        }
        h1, h2 {
          margin: 1em 0 0 0;
          text-align: center;
        }
        h2 {
          margin: 0 0 1em 0;
        }
        #container {
          margin: 0 auto;
          width: 50%;
        }
        #accordion input {
          display: none;
        }
        #accordion label {
          background: #eee;
          border-radius: .25em;
          cursor: pointer;
          display: block;
          margin-bottom: .125em;
          padding: .25em 1em;
          z-index: 20;
        }
        #accordion label:hover {
          background: #ccc;
        }
        #accordion input:checked + label {
          background: #ccc;
          border-bottom-right-radius: 0;
          border-bottom-left-radius: 0;
          color: white;
          margin-bottom: 0;
        }
        #accordion article {
          background: #f7f7f7;
          height:0px;
          overflow:hidden;
          z-index:10;
        }
        #accordion article p {
          padding: 1em;
        }
        #accordion input:checked ~ article {
         border-bottom-left-radius: .25em;
         border-bottom-right-radius: .25em;
         height: auto;
         margin-bottom: .125em;
        }
		
		#izquierda {
		 float:left;
		 padding-left:1em;
		}
		
		#derecha {
		 float:left;
		 padding-left:1em;
		}
       </style>
	   
	   
	   <noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-wide.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		
		</head>
	<body>

		<!-- Header -->
			<div id="header">
						
				<!-- Logo -->
                    
              <div id="logo">
                <img src="images/logo.png" usemap="#Map">
                <map name="Map">
                  <area shape="rect" coords="36,5,357,75" href="index.php">
                  <area shape="rect" coords="674,3,762,73" href="http://www.conabio.gob.mx" target="_blank">
                </map>
              </div>
				
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php">Inicio</a></li>
							<li><a href="qs_dk.php">¿Quién es DK?</a></li>
							<li><a href="quinta.php">Quinta</a></li>
							<li><a href="proyecto.php">Proyecto</a></li>
							<li class="current"><a href="recursos.php">Recursos</a></li>
							<li><?php include('menu.php') ?></li>
						</ul>
			  </nav>

	</div>
			
		<!-- Main -->
			<section class="wrapper style1">
				<div class="container">
                <header>
						<h2>Recursos</h2>
				</header>
                
                
                <h3>Videos C<span style="font-variant:small-caps; font-size:120%">onabio</span></h3>
				
				
					<section id="accordion">
					  <div>
						<input type="radio" name="accordion-group" id="option-1" />
						<label for="option-1">En busca de los  ingredientes y las recetas tradicionales</label>
						<article>
							<div id="izquierda">
							<p>(20 minutos)</p>
							<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>
							<div id="derecha">
							<p>(30 minutos)</p>
							<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
							</div>
						</article>                               
					  </div>
					  <div>
						<input type="radio" name="accordion-group" id="option-2" />
						<label for="option-2">Rancho Quinta Diana, árboles y cultivos</label>
						<article>
							<p>(20 minutos)</p>
							<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
							<p>(27 minutos)</p>
							<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
						</article>
					  </div>
					  <div>
						<input type="radio" name="accordion-group" id="option-3" />
						<label for="option-3">El chile, pilar de la comida tradicional mexicana</label>
						<article>
							<p>(20 minutos)</p>
							<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
							<p>(25 minutos)</p>
							<iframe width="400" height="225" src="http://www.youtube.com/embed/n6Vr1DUtcpg?rel=0" frameborder="0" allowfullscreen></iframe>
						</article>
					  </div>
				</section>


                    
					<p></p>
                    <hr>
                    
                    
                    <!-- v1b -->
                     <p></p>
					 <h3>Otros videos</h3>
					 <p></p>
					 <p><strong>Cocina y cultura. Diana Kennedy</strong></p>
                    <div class="row double">
						<div class="6u">
							<div id="content">
									<article>
                                        <iframe width="400" height="225" src="http://www.youtube.com/embed/RTNVUllmYFU?rel=0" frameborder="0" allowfullscreen></iframe><p></p>
										<iframe width="400" height="225" src="http://www.youtube.com/embed/0YmCo-Wsms8?rel=0" frameborder="0" allowfullscreen></iframe>
                                    </article>
							</div>
						</div>
						<div class="6u">
						  <div id="content">
                             		<article>
                                        <iframe width="400" height="225" src="http://www.youtube.com/embed/ftdgaewlQt4?rel=0" frameborder="0" allowfullscreen></iframe><p></p>
										<iframe width="400" height="225" src="http://www.youtube.com/embed/blV-jV5Uk2E?rel=0" frameborder="0" allowfullscreen></iframe>
                                	</article>                               
						  </div>
						</div>
					</div>
                    
                    <p></p>
                    <hr>
                    			 
								  <h3><a href="http://bdi.conabio.gob.mx/fotoweb/Grid.fwx?archiveId=5062&columns=4&rows=8&search=Diana%20Kennedy" target="_blank">Galería</a></h3>
                           		  <h3>Ligas relacionadas</h3>
                                    	<ul style="padding-left:20px">
                                          <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="http://www.biodiversidad.gob.mx/usos/alimentos.html">Alimentos</a></li>
                                          <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="http://www.biodiversidad.gob.mx/genes/centrosOrigen/centrosOrig.html">Centros de domesticaci&oacute;n</a></li>
										  <li style="list-style-type:disc; list-style-position:outside; padding-bottom:.5em"><a href="https://www.academia.edu/2547625/Comida_cultura_y_modernidad_en_Mexico._Perspectivas_antropologicas_e_historicas" target="_blank">Comida, cultura y modernidad en México | Perspectivas antropológicas e históricas</a></li>
                                        </ul>
                    
                    
				</div>
			</section>			

		<!-- Footer -->
		<div id="footer">
        
		<!-- Copyright -->
					<div class="copyright">
					&copy; 2014 Comisión Nacional para el Conocimiento y Uso de la Biodiversidad (CONABIO)
                    </div>        
        
        <!-- Icons -->
					<ul class="icons">
						<li><a href="http://www.facebook.com/pages/Comision-Nacional-para-el-Conocimiento-y-uso-de-la-Biodiversidad/208239404119?v=wall" class="icon fa-facebook" target="_blank"><span class="label">Facebook</span></a></li>
                      <li><a href="http://twitter.com/conabio" class="icon fa-twitter" target="_blank"><span class="label">Twitter</span></a></li>
						<li><a href="http://www.youtube.com/biodiversidadmexico" class="icon fa-youtube" target="_blank"><span class="label">Youtube</span></a></li>
						<li><a href="https://soundcloud.com/conabio" class="icon fa-soundcloud" target="_blank"><span class="label">SoundCloud</span></a></li>
					</ul>

		
			</div>

	</body>
</html>
