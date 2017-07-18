<?php if(count($links)): ?>
<div class="view-content">
<div class="item-list">

<ul class="circled">
	<?php foreach($links as $title => $link): ?>
	<li>
		<span class="field-content">
			<!-- <a href="<?php //echo $link; ?>">
				<?php //echo ucwords($title); ?>
			</a>  -->
			<?php echo l(ucwords($title), $link); ?>
		</span>
	</li>
	<?php endforeach; ?>
</ul>
</div>
</div>
<?php endif; ?>