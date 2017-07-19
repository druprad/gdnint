<?php if(count($links)): ?>
<h3 class="block-title">More</h3>
<div class="view-content">
<div class="item-list">

<ul class="circled">
	<?php foreach($links as $title => $link): ?>
	<li>
		<span class="field-content">
			<!-- <a href="<?php //echo $link; ?>">
				<?php //echo ucwords($title); ?>
			</a>  -->
			<?php echo l(ucwords(strtolower($title)), $link); ?>
		</span>
	</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
<?php endif; ?>