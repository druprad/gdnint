<?php if($title):?>
<h3 class="block-title <?php if(!$subtitle){print ' no-subtitle';}?>"><?php print $title;?></h3>
<?php if($subtitle):?>
<p class="block-subtitle"><?php print $subtitle;?></p>
<?php endif;?>
<?php endif;?>