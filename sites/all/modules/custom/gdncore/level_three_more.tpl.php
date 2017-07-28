<?php if(count($links)): ?>
<h3 class="block-title">More</h3>
<div class="view-content">
<div class="item-list">

<ul class="circled">
	<?php foreach($links as $title => $link): ?>
	<li>
		<span class="field-content">
			<?php echo l(ucwords($title), $link); ?>
		</span>
	</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
<?php endif; ?>
