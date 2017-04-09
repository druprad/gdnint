
  <div id="section-header" class="dexp-section">
    <div class="container">
      <div class="row">
        <div class="dexp-grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
          <div class="dexp-logo">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div><!--logo-->
        </div><!--griditem-->

        <div class="dexp-grid-item col-lg-8 col-md-8 col-sm-8 col-xs-12 headeright">
          <div class="tagline"><p> <a class="search-toggle" href="#"><i class="fa fa-search"></i></a>
            <?php if ($site_slogan): ?>
              <span><?php print $site_slogan; ?></span><!--tagline-->
            <?php endif; ?></p>
          </div><!--tagline-->
          <div class="navbar-collapse collapse">
            <div class="region-navigation navbar-header">
              <?php if ($main_menu): ?>
                  <?php print theme('links__system_main_menu', array(
                    'links' => $main_menu,
                    'attributes' => array(
                      'id' => 'main-menu-links',
                      'class' => array('nav navbar-nav', 'clearfix'),
                    ),
                  )); ?>
              <?php endif; ?>
            </div>
          </div><!--navbarstatic-->
        </div><!--headerright grid item-->
      </div><!--row-->
    </div><!--container-->
  </div><!--sectionheader-->
  <div id="section-main-content" class="dexp-section">
    <!--headerbottom block start-->
    <div id="header-bottommain" class="dexp-section">
      <div class="row">
        <?php print render($page['banner']); ?>
      </div>
    </div><!--headerbottommain-->
    <!--headerbottom block end-->
    <!--Infocus block start-->
    <div id="section-blocks" class="dexp-section">
      <?php print render($page['home_row_first']); ?>
    </div><!--section-blocks-->
    <!--Infocus block end-->
    <!--Analysis Block Start-->
    <div id="section-blocks" class="dexp-section">
      <?php print render($page['home_row_second']); ?>
    </div><!--section-blocks-->
    <!--Analysis Block End-->
    <!--Opportunities block start-->
    <div id="section-blocks" class="dexp-section">
      <?php print render($page['home_row_third']); ?>
    </div><!--section-blocks-->
    <!--Opportunities Block End -->
    <!--Impact block starts-->
    <div id="section-blocks" class="dexp-section">
      <?php print render($page['home_row_fourth']); ?>
    </div><!--section-blocks-->
    <!--Impact block end-->
    <!--Inthenews block start-->
    <div id="section-blocks" class="dexp-section">
      <?php print render($page['content']); ?>
    </div><!--section-blocks-->
    <!--Inthenews block end-->
    <!--Footer block start-->
    <div id="section-footer" class="dexp-section">
      <div class="container">
        <div class="row">
          <div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <?php print render($page['bottom_first']); ?>
          </div><!--griditem-->
          <div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <?php print render($page['bottom_second']); ?>
          </div>
          <div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <?php print render($page['bottom_third']); ?>
          </div>
          <div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
            <?php print render($page['bottom_fourth']); ?>
          </div>
        </div><!--row-->
        <div class="row intro">
          <div  class="dexp-grid-item col-lg-8 col-md-8 col-sm-6 col-xs-12">
            <?php print render($page['footer_intro']); ?>
          </div>
          <div class="dexp-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 footerright">
            <?php print render($page['footer_social']); ?>
          </div>
        </div><!--row-->
      </div><!--container-->
    </div><!--section-footer-->
    <!--Footer Block end-->
  </div>
