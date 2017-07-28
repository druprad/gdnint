<?php if(count($terms) > 0) { ?>

<div class="block block-views title-left" id="vocabulary-terms-first-level">
	<h3 class="block-title">Categories</h3>
	<div class='content'>
		<div class='item-list'>
			<ul class="circled">
				<?php foreach($terms as $termKey => $termVal) {  ?>
					<li>
						<span class="field-content">
								<a href="<?php echo url('taxonomy/term/' . $termVal->tid); ?>">
									<?php print $termVal->name; ?>
								</a>
						</span>
					</li>
				<?php }  // end foreach ?>
			</ul>
		</div>
	</div>	
</div>

<?php
}
?>