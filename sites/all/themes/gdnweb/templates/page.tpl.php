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
                  <span><?php print $site_slogan; ?></span></p></div><!--tagline-->
                <?php endif; ?>
                <div class="navbar-collapse collapse">
                    <div class="region-navigation navbar-header">
                        <!-- <ul class="nav navbar-nav">
                            <li><a class="home" href="#"><i class="fa fa-home"></i></a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Program</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Funders</a></li>
                            <li><a href="#">Careeers</a></li>
                            <li><a href="#">Media</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul> -->

                      <?php if ($main_menu): ?>
                          <?php print theme('links__system_main_menu', array(
                            'links' => $main_menu,
                            'attributes' => array(
                              'id' => 'main-menu-links',
                              'class' => array('nav navbar-nav', 'clearfix'),
                            ),
                            /*'heading' => array(
                              'text' => t('Main menu'),
                              'level' => 'h2',
                              'class' => array('element-invisible'),
                            ),*/
                          )); ?>
                      <?php endif; ?>

                      <?php if ($secondary_menu): ?>
                          <?php print theme('links__system_secondary_menu', array(
                            'links' => $secondary_menu,
                            'attributes' => array(
                              'id' => 'secondary-menu-links',
                              'class' => array('links', 'inline', 'clearfix'),
                            ),
                            /*'heading' => array(
                              'text' => t('Secondary menu'),
                              'level' => 'h2',
                              'class' => array('element-invisible'),
                            ),*/
                          )); ?>
                      <?php endif; ?>






                    </div>
                </div><!--navbarstatic-->
            </div><!--headerright grid item-->
        </div><!--row-->
    </div><!--container-->
</div><!--sectionheader-->

<div id="section-main-content" class="dexp-section">
  <?php print render($page['home_row_first']); ?>
  <?php print render($page['home_row_second']); ?>
  <?php print render($page['home_row_third']); ?>
  <?php print render($page['home_row_fourth']); ?>

  <!--Footer block start-->
            <div id="section-footer" class="dexp-section">
                <div class="container">
                    <div class="row">
                        <div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
                          <?php print render($page['bottom_first']); ?>
                        </div>
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
                        <?php print render($page['copyright']); ?>
                    </div><!--row-->
                    <!--Footer block end-->
                </div><!--container-->
            </div><!--section-footer-->
            <!--Footer Block end-->

</div><!--section-main-content-->


<?php
/*
<div id="page-wrapper"><div id="page">

  <div id="header" class="<?php print $secondary_menu ? 'with-secondary-menu': 'without-secondary-menu'; ?>"><div class="section clearfix">

    <?php if ($logo): ?>
      <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
      </a>
    <?php endif; ?>

    <?php if ($site_name || $site_slogan): ?>
      <div id="name-and-slogan"<?php if ($hide_site_name && $hide_site_slogan) { print ' class="element-invisible"'; } ?>>

        <?php if ($site_name): ?>
          <?php if ($title): ?>
            <div id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <strong>
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
              </strong>
            </div>
          <?php else: ?>
            <h1 id="site-name"<?php if ($hide_site_name) { print ' class="element-invisible"'; } ?>>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
            </h1>
          <?php endif; ?>
        <?php endif; ?>

        <?php if ($site_slogan): ?>
          <div id="site-slogan"<?php if ($hide_site_slogan) { print ' class="element-invisible"'; } ?>>
            <?php print $site_slogan; ?>
          </div>
        <?php endif; ?>

      </div> <!-- /#name-and-slogan -->
    <?php endif; ?>

    <?php print render($page['header']); ?>

  </div></div> <!-- /.section, /#header -->

  <?php if ($messages): ?>
    <div id="messages"><div class="section clearfix">
      <?php print $messages; ?>
    </div></div> <!-- /.section, /#messages -->
  <?php endif; ?>

  <?php if ($page['featured']): ?>
    <div id="featured"><div class="section clearfix">
      <?php print render($page['featured']); ?>
    </div></div> <!-- /.section, /#featured -->
  <?php endif; ?>

  <div id="main-wrapper" class="clearfix"><div id="main" class="clearfix">

    <?php if ($breadcrumb): ?>
      <div id="breadcrumb"><?php print $breadcrumb; ?></div>
    <?php endif; ?>

    <?php if ($page['sidebar_first']): ?>
      <div id="sidebar-first" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_first']); ?>
      </div></div> <!-- /.section, /#sidebar-first -->
    <?php endif; ?>

    <div id="content" class="column"><div class="section">
      <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): ?>
        <h1 class="title" id="page-title">
          <?php print $title; ?>
        </h1>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>
      <?php print render($page['content']); ?>
      <?php print $feed_icons; ?>

    </div></div> <!-- /.section, /#content -->

    <?php if ($page['sidebar_second']): ?>
      <div id="sidebar-second" class="column sidebar"><div class="section">
        <?php print render($page['sidebar_second']); ?>
      </div></div> <!-- /.section, /#sidebar-second -->
    <?php endif; ?>

  </div></div> <!-- /#main, /#main-wrapper -->

  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']): ?>
    <div id="triptych-wrapper"><div id="triptych" class="clearfix">
      <?php print render($page['triptych_first']); ?>
      <?php print render($page['triptych_middle']); ?>
      <?php print render($page['triptych_last']); ?>
    </div></div> <!-- /#triptych, /#triptych-wrapper -->
  <?php endif; ?>

  <div id="footer-wrapper"><div class="section">

    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']): ?>
      <div id="footer-columns" class="clearfix">
        <?php print render($page['footer_firstcolumn']); ?>
        <?php print render($page['footer_secondcolumn']); ?>
        <?php print render($page['footer_thirdcolumn']); ?>
        <?php print render($page['footer_fourthcolumn']); ?>
      </div> <!-- /#footer-columns -->
    <?php endif; ?>

    <?php if ($page['footer']): ?>
      <div id="footer" class="clearfix">
        <?php print render($page['footer']); ?>
      </div> <!-- /#footer -->
    <?php endif; ?>

  </div></div> <!-- /.section, /#footer-wrapper -->

</div></div> <!-- /#page, /#page-wrapper -->
*/
?>





<?php /*
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<title>GDN | Local Research for Better Lives</title>
</head>
<body>
<div id="section-top" class="dexp-section">
<div id="section-header" class="dexp-section">
<div class="container">
<div class="row">
<div class="dexp-grid-item col-lg-4 col-md-4 col-sm-4 col-xs-12">
<div class="dexp-logo"><a href="#"><img src="images/home-final_0.jpg" /></a></div><!--logo-->
</div><!--griditem-->

<div class="dexp-grid-item col-lg-8 col-md-8 col-sm-8 col-xs-12 headeright">
<div class="tagline"><p> <a class="search-toggle" href="#"><i class="fa fa-search"></i></a> <span>Local Research for Better Lives</span></p></div><!--tagline-->
<div class="navbar-collapse collapse">
<div class="region-navigation navbar-header">
<ul class="nav navbar-nav">
<li><a class="home" href="#"><i class="fa fa-home"></i></a></li>
<li><a href="#">About</a></li>
<li><a href="#">Program</a></li>
<li><a href="#">Blog</a></li>
<li><a href="#">Funders</a></li>
<li><a href="#">Careeers</a></li>
<li><a href="#">Media</a></li>
<li><a href="#">Contact</a></li>
</ul>
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
<div class="headerbottom container">
<div class="topbuttons"><a href="#">Research</a><a href="#">Opportunities</a><a href="#">Results</a></div>
<p><b>The Global Development Network (GDN) is public international organization that supports high quality, policy oriented, social  science research in developing and transition countries to promote better lives.</b></p>
</div>
</div>
</div><!--headerbottommain-->
<!--headerbottom block end-->


<!--Infocus block start-->
<div id="section-blocks" class="dexp-section">
<h3><a href="#">In Focus</a><div class="separator"></div></h3>
<div class="container">
<div class="row">
<div class="region-content dexp-grid-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg">
<a href="#"><img src="images/strategy.jpg" /></a>
</div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">GDN's New Organizational Strategy</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to <a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div>
</div>

<div class="region-content dexp-grid-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg">
<a href="#"><img src="images/EIB.jpg" /></a>
</div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">EIB-GDN Program in Applied Development Finance</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to scale up a unique tracking software system to protect<a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--griditem-->
</div><!--row-->
</div><!--container-->
</div><!--section-blocks-->
<!--Infocus block end-->




<!--Analysis Block Start-->
<div id="section-blocks" class="dexp-section">
<h3><a href="#">Research</a><div class="separator"></div></h3>
<div class="row" id="analysis">
<div class="container">
<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg"><a href="#"><img src="images/Education.png" /></a></div><!--blockimg-->
<div class="ablocktitle"><h5><a href="#">Education</a></h5></div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg"><a href="#"><img src="images/Economic_Growth.png" /></a></div><!--blockimg-->
<div class="ablocktitle"><h5><a href="#">Economic Growth</a></h5></div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg"><a href="#"><img src="images/Industries.png" /></a></div><!--blockimg-->
<div class="ablocktitle"><h5><a href="#">Industries</a></h5></div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg"><a href="#"><img src="images/Cities.png" /></a></div><!--blockimg-->
<div class="ablocktitle"><h5><a href="#">Cities</a></h5>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg">
<a href="#"><img src="images/Climate.png" /></a>
</div><!--blockimg-->
<div class="ablocktitle">
<h5><a href="#">Climate</a></h5>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg">
<a href="#"><img src="images/Doing_Research.png" /></a>
</div><!--blockimg-->
<div class="ablocktitle">
<h5><a href="#">Doing Research</a></h5>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg">
<a href="#"><img src="images/Migration.png" /></a>
</div><!--blockimg-->
<div class="ablocktitle">
<h5><a href="#">Migration</a></h5>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

<div class="dexp-grid-item col-lg-3 col-md-3 col-sm-6 col-xs-12">
<div class="block-main">
<div class="ablockimg">
<a href="#"><img src="images/Earth_Forests.png" /></a>
</div><!--blockimg-->
<div class="ablocktitle">
<h5><a href="#">Earth &amp; Forests</a></h5>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--dexpgrid-->

</div><!--row-->
</div><!--container-->
</div><!--section-blocks-->
<!--Analysis Block End-->




<!--Opportunities block start-->
<div id="section-blocks" class="dexp-section">
<h3><a href="#">Opportunities</a><div class="separator"></div></h3>
<div class="container">
<div class="row">
<div class="dexp-grid-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg"><a href="#"><img src="images/Kaizen_FB_ad_bff.jpg" /></a></div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">Call for Expressions of Interest</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to scale up a unique tracking software system to protect<a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--griditem-->

<div class="dexp-grid-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg"><a href="#"><img src="images/callpichardhat_d8a.jpg" /></a></div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">GDN Launches a new Call for Expressions of Interest</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to scale up a unique tracking software system to protect<a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--griditem-->
</div><!--row-->
</div><!--container-->
</div><!--section-blocks-->
<!--Opportunities Block End -->



<!--Impact block starts-->
<div id="section-blocks" class="dexp-section">
<h3><a href="#">Results</a><div class="separator"></div></h3>
<div class="container">
<div class="row">
<div class="dexp-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg">
<a href="#"><img src="images/evidenc4policypanel.jpg" /></a>
</div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">#evidence4policy</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to scale up a unique tracking software system to protect<a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--griditem-->



<div class="dexp-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg">
<a href="#"><img src="images/Philanthropy_Homepage2.jpg" /></a>
<!--<p>GDN is supporting the <a href="https://www.facebook.com/ImpulseNgoNetwork/">Impulse NGO Network</a> through the Japan Social Development Fund (JSDF) Award to scale up a unique tracking software system to protect and repatriate victims of human trafficking, on both sides of the border between India and Myanmar.</p>-->
</div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">Stopping Cross-border Human Trafficking</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to <a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--griditem-->


<div class="dexp-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12">
<div class="block-main">
<div class="blockimg">
<a href="#"><img src="images/Research_Monitor.jpg" /></a>
</div><!--blockimg-->
<div class="blocktitle">
<h5><a href="#">Research Monitor</a></h5>
<p>GDN is supporting the Impulse NGO Network through the Japan Social Development Fund (JSDF) Award to <a href="#"><span>More </span><i class="fa fa-arrow-circle-right"></i></a></p>
</div><!--blocktitle-->
</div><!--block-main-->
</div><!--griditem-->
</div><!--row-->
</div><!--container-->
</div><!--section-blocks-->
<!--Impact block end-->





<!--Inthenews block start-->
<div id="section-blocks" class="dexp-section">
<h3><a href="#">In the News</a><div class="separator"></div></h3>
<div class="container">
<div class="row">
<div class="region-content dexp-grid-item col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="blocktitle">
<h5><a href="#">Research Monitor</a></h5>
<p>Xi Jinping’s speech in defense of free trade and the global economy represents a major shift in the paradigm of the global world order since the end of the cold war, where big countries as the United States and Russia continued to battle, reach agreements, and again, agreeing-disagreeing on partnerships for development. Our beloved Europe is in trouble facing Brexit, the flow of migrants in the old continent and the lack of structures and right organization to find sustainable solutions and jobs for all, unemployment among youth, rising social inequalities, and low productivity continue to be a challenge.</p>
</div>
<ul class="news-info">
<li><i class="fa fa-angle-right"></i><a href="http://www.huffingtonpost.com/entry/587fa109e4b0474ad4874f7e?timestamp=1484765383835" target="_blank">More Researchers and Glocal Commitment</a></li>
</ul>
</div><!--region-content-->
</div><!--row-->
</div><!--container-->
</div><!--section-blocks-->
<!--Inthenews block end-->

<!--Footer block start-->
<div id="section-footer" class="dexp-section">
<div class="container">
<div class="row">
<div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
<h4>Opportunities</h4>
<ul>
<li><i class="fa fa-angle-right"></i><a href="#">New Calls</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Events</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Conferences</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Competition</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Training Material</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Advisory Positions</a></li>
</ul>
</div><!--griditem-->

<div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
<h4>Research</h4>
<ul>
<li><i class="fa fa-angle-right"></i><a href="#">Agriculture</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Date for Development</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Education</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Health</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Natural Resource</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Management</a></li>
</ul>
</div><!--griditem-->

<div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
<h4>Results</h4>
<ul>
<li><i class="fa fa-angle-right"></i><a href="#">GDNews</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Impact Stories</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Outreach (Map)</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Global Network</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Alumni</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">News Reports</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Annual Reports</a></li>
</ul>
</div><!--griditem-->

<div  class="dexp-grid-item col-lg-3 col-md-3 col-sm-3 col-xs-6">
<h4>Custom</h4>
<ul>
<li><i class="fa fa-angle-right"></i><a href="#">Aenean quis</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Dolor Sit</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Ipsum</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Lorem</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Sed finibus</a></li>
<li><i class="fa fa-angle-right"></i><a href="#">Vivamus varius</a></li>
</ul>
</div><!--griditem-->

</div><!--row-->

<div class="row intro">
<div  class="dexp-grid-item col-lg-8 col-md-8 col-sm-6 col-xs-12">
<h4>GDN Intro</h4>
<p>The Global Development (GDN) is public international organization that supports high quality, policy oriented, social science research in developing and transition countries to promote better lives.</p>
<ul class="contact-info">
<li><i class="fa fa-map-marker"></i> 2nd Floor, West Wing, ISID Complex, 4 - Vasant Kunj Institutional Area, New Delhi - 110070, INDIA</li>
<li><i class="fa fa-phone"></i>+91 11 4323 9478 / 2613 9494   &nbsp; &nbsp; &nbsp; &nbsp;  <i class="fa fa-envelope"></i>      communications@gdn.int</li>
<li>&copy; 2017 GDN. All Rights reserved.</li>
</ul>
</div><!--griditem-->

<div class="dexp-grid-item col-lg-4 col-md-4 col-sm-6 col-xs-12 footerright">
<a href="#"><i class="fa fa-facebook-square"></i></a>   <a href="#"><i class="fa fa-twitter-square"></i></a>   <a href="#"><i class="fa fa-youtube-square"></i></a>
</div><!--griditem-->
</div><!--row-->
<!--Footer block end-->
</div><!--container-->
</div><!--section-footer-->
<!--Footer Block end-->

</div><!--sectiontop-->

<script type="text/Javascript">
   $('.dropdown').hover(
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn();
        },
        function() {
            $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut();
        }
    );

    $('.dropdown-menu').hover(
        function() {
            $(this).stop(true, true);
        },
        function() {
            $(this).stop(true, true).delay(200).fadeOut();
        }
    );
</script>
</body>
</html>
*/
?>