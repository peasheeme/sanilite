<?php

/*
* Template Name: nosotros
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


<?php if($wl_theme_options['nosotros_home'] == 'on') { ?>
<section class="nosotros_nosotros">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-6">
                <h3 class="green">
                    Acerca de Sanilite
                </h3>
                <h1 class="titulo-black ">Bienvenido a <span class="web-oculto">Sanilite</span><br> <span >Sanilite</span></h1>
                <h1 class="titulo-black text-center"><span class="web-oculto text-center"> Bienvenido a Sanilite</span></h1>
                <hr style="width:15%;  border:2px solid #B2CA04; text-align:left">
                <div class="col-xs-12 col-md-6 web-oculto ">
            <img src="<?php echo esc_url($wl_theme_options['nosotros_img']); ?>" class="img-responsive" alt="SSanilite Nutrición">
            </div>
                <p class="texto"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, ipsa aliquid! Enim labore id, perspiciatis mollitia nihil sapiente aspernatur cumque vitae obcaecati sint optio quod voluptate esse qui animi laborum? </p>
            </div>
            <div class="col-xs-12 col-md-6 movil-oculto">
            <img src="<?php echo esc_url($wl_theme_options['nosotros_img']); ?>" class="img-responsive" alt="SSanilite Nutrición">
           
            </div>
        </div>
    </div>
  
</section>
<section class="about-me">
    <div class="container">
    <div class="col-xs-12 col-md-6">
    <h3 class="green">
                    Saber más
                </h3>
                <h1 class="titulo-black">Dra. Sandra Luz Salazar</h1>
                <hr style="width:15%;  border:2px solid #B2CA04; text-align:left">

                <img src="<?php echo esc_url($wl_theme_options['nosotros_img']); ?>" class="img-responsive" alt="SSanilite Nutrición">
              <br>  <p class="texto" >Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, cumque vitae porro a rem consequuntur exercitationem id blanditiis dolorem quia, iste minima, sed commodi voluptatibus reprehenderit assumenda! Provident, nemo quam.</p>

    </div>
    <div class="col-xs-12 col-md-6 margen-responsive-30">
    <h3 class="green">
                   Experiencia
                </h3>
                <h1 class="titulo-black">Bariatra</h1>
                <hr style="width:15%;  border:2px solid #B2CA04; text-align:left">
                <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Collapsible Group 1</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Collapsible Group 2</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Collapsible Group 3</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
      minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
      commodo consequat.</div>
    </div>
  </div>
</div>
    </div>
    </div>

</section>
<?php } ?>



<?php get_footer(); ?>