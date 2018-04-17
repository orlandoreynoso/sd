<div class="e-front-page">

  <nav class="navbar navbar-expand-lg navbar-light navfronter">
    <?php get_template_part( 'template/header','buscador'); ?>
    <?php // get_template_part( 'template/header','menuresponsivo'); ?>
    <?php get_template_part( 'template/header','menumovil'); ?>
  </nav>

  <div class="menu-inicio" id="menu-inicio">
    <div class="container menu-frontpage">
      <div class="row">
        <div class="contenedor-frontpage">
          <div class="or-logo-cover">
            <?php logo_sd(); ?>
          </div>
          <div class="or-frontpage">
            <nav class="navbar-frontpage">
              <?php menu_sd(); ?>
            </nav>
          </div>
        </div><!-- fin contenedor-lm-msc -->
      </div><!-- Finaliza el ROW -->
    </div><!-- Finaliza el container del div menudesck -->
  </div><!--  Finaliza el div de menu-desk-->

</div><!-- Finaliza el div >> e-menu -->
