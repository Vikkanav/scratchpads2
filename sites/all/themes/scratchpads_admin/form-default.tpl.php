<div class='form form-layout-default clearfix'>
  <div class='column-main'>
    <?php print drupal_render_children($form); ?>
    <?php print drupal_render($actions); ?>
  </div>
  <?php if (!empty($footer)): ?>
    <div class='column-footer'><div class='column-wrapper clearfix'><?php print drupal_render($footer); ?></div></div>
  <?php endif; ?>
</div>