<div class="dexp-grid-item col-lg-8 col-md-8 col-sm-8 col-xs-12 headeright">
  <div class="tagline"><p> <a class="search-toggle" href="#"><i class="fa fa-search"></i></a>
    <?php
    $site_slogan = variable_get('site_slogan');
    if ($site_slogan): ?>
      <span><?php print $site_slogan; ?></span><!--tagline-->
    <?php endif; ?></p>
  </div><!--tagline-->
  <div class="navbar-collapse collapse">
    <div class="region-navigation navbar-header">
      <?php if ($content): ?>
          <?php print $content;?>
      <?php endif; ?>
    </div>
  </div><!--navbarstatic-->
</div>
