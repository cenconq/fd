<div class="main">
  <div class="container">
    <div class="row">
      <?php if (!empty($page['sidebar_first'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_first']); ?>
        </aside>
      <?php endif; ?>

      <section<?php print $content_column_class; ?>>
        <?php print render($page['content']); ?>
      </section>

      <?php if (!empty($page['sidebar_second'])): ?>
        <aside class="col-sm-3" role="complementary">
          <?php print render($page['sidebar_second']); ?>
        </aside>
      <?php endif; ?>
    </div>
  </div>
</div>