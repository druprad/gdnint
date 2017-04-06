<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php 
$lg_zise = round(12/$options['grid_cols_lg']);
$md_zise = round(12/$options['grid_cols_md']);
$sm_zise = round(12/$options['grid_cols_sm']);
$xs_zise = round(12/$options['grid_cols_xs']);
$span_class = $options['grid_bootstrap']?" col-lg-{$lg_zise} col-md-{$md_zise} col-sm-{$sm_zise} col-xs-{$xs_zise}" : "";
?>
  
    <?php foreach($rows as $k=>$row):?>
      <div class="dexp-grid-item col-lg-6 col-md-6 col-sm-6 col-xs-12">
      	<div class="block-main">
        	<?php print $row; ?>
        </div>
      </div>
    <?php endforeach;?>