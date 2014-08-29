<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Slider</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleslider.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/s3Slider.js"></script>
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
</head>
<body>
  
  <!-- close nav -->
  <div id="slider1">
    <ul id="slider1Content">
      <li class="slider1Image"> <a href="#"><img src="images/photo1.jpg" alt="" /></a> <span class="right">
        <h2>Sopa de guías</h2>
        Esta sopa es totalmente rústica; se prepara con guias de calabacitas criollas y con hierbas y quelites silvestres
        de distintos sabores que son, al mismo tiempo, sorprendentemente delicados. 
		    <br /><br />
		    Es muy, muy sana, económica y ademas, deliciosisima...
        <br />
        <br />
        <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a></span> 
      </li>
      
	    <li class="slider1Image"> <a href="#"><img src="images/photo2.jpg" alt="" /></a> <span class="right">
        <h2>Empanadas de sola de vega</h2>
        El almuerzo tradicional para dias festivos, especialmente para bodas y bautizos.
        <br /><br />Se rellenan con el mismo picadillo que se usa para chiles de agua o pasillas rellenos y se sirven con cebolla rebanada,
        perejil y queso desmoronado encima...<br />
        <br />
        <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a> </span>
      </li>
	  
	    <li class="slider1Image"> <a href="#"><img src="images/photo3.jpg" alt="" /></a> <span class="right">
        <h2>Chichilo rojo</h2>
        Dentro de los platillos mas populares, este chichilo es poco conocido. En los anos setenta lo cocine con una de mis primeras maestras, 
		    la senora Domitila Santiago (q.e.p.d.), pero desde entonces nunca la he vuelto a preparar. <br /> <br />
        El sabor autentico del chichilo rojo requiere del chilhuacle rojo que tristemente es poco usado hoy en dia...
        <br />
        <br />
        <a href="#" style="float: right; color:#FFF; font-weight: 700">Continuar leyendo &raquo;</a> </span>
      </li>
    
      <li class="slider1Image"> <a href="#"><img src="images/photo4.jpg" alt="" /></a> <span class="right">
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

</body>
</html>