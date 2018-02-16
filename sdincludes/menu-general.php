<div class="e-menu">

  <nav class="navbar navbar-expand-lg navbar-light">
    <?php // get_template_part( 'template/header','menuresponsivo'); ?>
    <?php get_template_part( 'template/header','menumovil'); ?>
  </nav>

  <div class="menu-desk" id="menu-desk">
    <div class="container menu-coverpage">
      <div class="row">
        <div class="contenedor-lm-msc">
          <div class="or-logo-cover">
            <?php marca_sd(); ?>
          </div>
          <div class="or-menum">
            <nav class="navbar-me">
              <?php menu_sd(); ?>
            </nav>
          </div>
        </div><!-- fin contenedor-lm-msc -->
      </div><!-- Finaliza el ROW -->
    </div><!-- Finaliza el container del div menudesck -->
  </div><!--  Finaliza el div de menu-desk-->

</div><!-- Finaliza el div >> e-menu -->