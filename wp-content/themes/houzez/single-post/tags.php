<?php if( has_tag() ) { ?>
<div class="article-footer">
    <?php if(0): ?><h3 class="meta-title"><?php esc_html_e( 'Tags:', 'houzez' ); ?></h3><?php endif; ?>
    <?php the_tags( '<ul class="meta-tags"><li>', '</li><li>', '</li></ul>' ); ?>
</div>
<?php } ?>