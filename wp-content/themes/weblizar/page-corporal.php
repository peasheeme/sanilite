<?php

/*
* Template Name: corporal
*/

get_header( );?>

<div class="top-title-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 page-info">
                <h1 class="h1-page-title"><?php the_title(); ?></h1> <br><br><br>
                <a href="#" >
                 <i class="fas fa-home"></i> </a>
                 <span style="color: #E9EAEE; font-size: 15px;"> / <?php the_title(); ?></span>
            </div>
        </div>
    </div>
</div>
<div class="space-sep20"></div>


<?php $wl_theme_options = weblizar_get_options(); ?>


<section class="nutricion">
    <div class="container">
        <div class="row" id="nutricion-clinica">

            <div class="col-xs-12 col-md-6">
               
                <h1 class="titulo-black">Mesoretapia</h1>
                <hr style="width:15%;  border:2px solid #B2CA04;">
                <p class="texto"> La mesoterapia es una técnica que consiste en microinyecciones (con agujas muy pequeñas) con sustancias que disuelven la grasa, mejoran la calidad de la piel corporal, rejuveneciéndola e hidratándola, eliminando celulitis y atenuando estrías.</p>
                <p class="texto">Se trata de una mezcla de productos no invasivos (pueden ser alópatas u homeopáticos), así como minerales, vitaminas y aminoácidos. Contamos con más de 15 distintos tipos de medicamentos para utilizar según las necesidades de cada paciente.
                <ul class="servicios-servicios">
                <li class="servicios-servicios">Para reducir la grasa abdominal, espalda, brazos, piernas, cadera.</li>
                <li class="servicios-servicios">Eficaz tratamiento para eliminar la celulitis.</li>
                <li class="servicios-servicios">Potente efecto tensor, olvídate de la flacidez.</li>
                <li class="servicios-servicios">Mejora la calidad general de tu piel</li>
               
              
               </ul>
                 </p>
            </div>
            <div class="col-xs-12 col-md-6" style="margin-top:30px;">
            <?php echo do_shortcode('[gdgallery_gallery id_gallery="3"]');?> <br>
            <p class="texto">Resultados desde la primera aplicación </p>
            <p class="texto">Vas a amar sus resultados, un cuerpo nuevo sin cirugía</p>
                
            </div>
        </div>
        <div class="margin-servicios " id="diarrea">
            <div class="row">

            <div class="col-xs-12 col-md-6" style="margin-top:30px;">
            <?php echo do_shortcode('[gdgallery_gallery id_gallery="4"]'); ?>
            
               
            </div>
            <div class="col-xs-12 col-md-6">
           
            <h1 class="titulo-black">Radiofrecuencia</h1>
                <hr style="width:15%;  border:2px solid #B2CA04;">
                <p class="texto">Indicada en el tratamiento de la celulitis y la flacidez facial y corporal <br>
                 </p>
                <p class="texto">Favorece el drenaje linfático, el aumento de la circulación local, la formación de nuevo colágeno. Dando como resultado una piel firme y joven. </p>
                <p class="texto">La radiofrecuencia produce un calentamiento profundo que podríamos decir va de dentro hacia fuera. Favoreciendo aumento en la circulación de la zona que permitirá drenar el líquido acumulado para eliminar la celulitis y permitiendo la formación de nuevo colágeno para que el tejido adquiera una firmeza natural. </p>
                <p class="texto">Un tratamiento no invasivo e indoloro que actúa selectivamente en partes de tu cuerpo, logrando su reducción volumétrica y reafirmación.
                
                </p>
            </div>
                <div class="col-xs-12">
                <p class="texto">(tensor y rejuvenecimiento) facial y corporal.
                <ul class="servicios-servicios">
                <li class="servicios-servicios">Tensa y mejora la textura de la piel</li>
                <li class="servicios-servicios">Compacta el tejido subcutáneo, reduciendo su volumen.</li>
                <li class="servicios-servicios">Favorece el drenaje linfático, disminuyendo la celulitis.</li>
                <li class="servicios-servicios">Resultados tras cada sesión y progresivos</li>
               
              
               </ul></p>
      
                </div>  

              </div>
        </div>
        
        <div class="margin-servicios" id="pierde-peso">
        <div class="row ">

        <div class="col-xs-12 col-md-6">
   
             <h1 class="titulo-black">Ultrasonido</h1>
            <hr style="width:15%;  border:2px solid #B2CA04;">
                <p class="texto text-justify">Es un método no invasivo e indoloro que rompe las células grasas.</p>
                <p class="texto text-justify">Sirve para combatir la celulitis más dura y la grasa localizada, las estrías, cicatrices, el acné y las varices. Además mejora el drenaje linfático, ayudando a eliminar líquidos, así como la circulación sanguínea. </p>
                <p class="texto">Su aplicación se centra en la zona de flancos, piernas, abdomen, glúteos y también en el rostro .</p>
                <p class="texto">Cuenta con un potente efecto desinflamatorio por lo que también lo utilizamos para evitar la formación de fibrosis después de una cirugía estética como abdominoplastia permitiendo a la piel recuperarse y desinflamarse con mayor velocidad y potencializando el efecto de la cirugía.</p>
        </div>
            <div class="col-xs-12 col-md-6" style="margin-top:30px;">
            <?php echo do_shortcode('[gdgallery_gallery id_gallery="5"]');?>
            </div>
              </div>
             <div class="col-xs-12">
             <p class="texto">Puede utilizarse en cualquier parte del cuerpo y de la cara. Es efectivo, seguro y no invasivo</strong></p>
              </div>
          
        </div> <!--end- margen-->
       
  
  
</section>
<?php get_footer( );?>