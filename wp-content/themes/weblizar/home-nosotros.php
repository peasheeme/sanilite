<?php $wl_theme_options = weblizar_get_options(); ?>


<?php if($wl_theme_options['nosotros_home'] == 'on') { ?>
<section class="nosotros">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-6">
                <h3 class="green">
                    Acerca de Sanilite  
                </h3>
                <h1 class="titulo-black">Bienvenido a <br> Sanilite</h1>
                <hr style="width:15%; text-align:center; border:2px solid #B2CA04;">

                <div class="col-xs-12 col-md-6 web-oculto ">
            <img src="<?php echo esc_url($wl_theme_options['nosotros_img']); ?>" class="img-responsive" alt="SSanilite Nutrición">
            </div>
                <p class="texto"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellat, ipsa aliquid! Enim labore id, perspiciatis mollitia nihil sapiente aspernatur cumque vitae obcaecati sint optio quod voluptate esse qui animi laborum? </p>
           <br>
           <button href="#" class="btn-slide-green3"> Ver más</button>
           
            </div>
            <div class="col-xs-12 col-md-6 movil-oculto">
            <img src="<?php echo esc_url($wl_theme_options['nosotros_img']); ?>" class="img-responsive" alt="SSanilite Nutrición">
            </div>
        </div>
    </div>
  
</section>
<?php } ?>