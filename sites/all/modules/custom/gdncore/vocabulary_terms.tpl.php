<?php if(count($terms) > 0) { ?>

<h3 class="block-title">Terms</h3>
<div class='view-content'>
	<div class='item-list'>
		<ul>
			<?php foreach($terms as $termKey => $termVal) {  ?>
				<li class="views-row">
					<div>
						<span>
							<div class="term-title">
								<a href="<?php echo url('taxonomy/term/' . $termVal->tid); ?>">
									<h5><?php print $termVal->name; ?></h5>
								</a>
							</div>
						</span>
					</div>
				</li>
			<?php }  // end foreach ?>
		</ul>
	</div>
</div>

<?php
}
?>