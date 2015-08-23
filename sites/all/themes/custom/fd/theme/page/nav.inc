<nav id="main-menu" class="col-lg-9">
	<?php if (!empty($primary_nav) || !empty($secondary_nav) || !empty($page['navigation'])): ?>
	<div role="navigation">
	  <?php if (!empty($primary_nav)): ?>
	    <?php print render($primary_nav); ?>
	  <?php endif; ?>
	  <?php if (!empty($secondary_nav)): ?>
	    <?php print render($secondary_nav); ?>
	  <?php endif; ?>
	  <?php if (!empty($page['navigation'])): ?>
	    <?php print render($page['navigation']); ?>
	  <?php endif; ?>
	</div>
	<?php endif; ?>
</nav>