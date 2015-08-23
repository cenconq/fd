<header>
  <div class="container">
    <div class="row">
      <?php if ($logo): ?>
      <a class="logo" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
        <!-- <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /> -->
      </a>
      <?php endif; ?>
      <?php include('nav.inc'); ?>
      <?php include('search.inc'); ?>
    </div>
  </div>
</header>