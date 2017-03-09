<?php
/**
 * Used for both single and index/archive/search.
 *
 */
// function highlight($text, $words) {
//     preg_match_all('~\w+~', $words, $m);
//     if(!$m)
//         return $text;
//     $re = '~\\b(' . implode('|', $m[0]) . ')\\b~i';
//     return preg_replace($re, '<b>$0</b>', $text);
// }

// print highlight($text, $words);
global $houzez_local;
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-article'); ?>>
	<?php houzez_post_thumbnail(); ?>
	<?php
		$az_title = get_the_title();
		$az_text = get_the_excerpt();
		if(isset($_GET["s"])&&!empty($_GET["s"])){
			$az_key = $_GET["s"];
			$az_key = trim(implode('|',explode(' ',preg_quote($az_key))));
			$az_title = preg_replace("/($az_key)/iu","<mark>$1</mark>",$az_title);
			$az_text = preg_replace("/($az_key)/iu","<mark>$1</mark>",$az_text);
		}
		$az_title='<h1 class="article-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">'.$az_title.'</a></h1>';
	?>
	<div class="article-detail">
		<div class="pull-left az-date-style hidden-xs"><i class="fa fa-calendar"></i> <?php the_date('d.m.Y'); ?></div>
		<?=$az_title?>
		<?=$az_text?>
		<div class="article-footer-right az-right">
			<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo $houzez_local['read_more'];?></a>
		</div>
	</div>
	<?php if(0): ?>
	<div class="article-footer">

		<ul class="author-meta">
			<li>
				<?php if( get_the_author_meta( 'fave_author_custom_picture' ) != '' ) { ?>
					<img src="<?php echo esc_url( get_the_author_meta( 'fave_author_custom_picture' ) );?>" alt="Auther Image" width="40" height="40" class="meta-image img-circle">
				<?php } ?>
				<?php echo $houzez_local['by_text']; ?> <?php echo esc_attr( get_the_author() ); ?>
			</li>
			<li><i class="fa fa-calendar"></i> <?php echo esc_attr( get_the_date() ); ?> </li>

			<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && houzez_categorized_blog() ) : ?>
				<li><i class="fa fa-bookmark-o"></i> <?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'houzez' ) ); ?></li>
			<?php endif; ?>
		</ul>

		<div class="article-footer-right">
			<a href="<?php the_permalink(); ?>" class="btn btn-primary"><?php echo $houzez_local['read_more'];?></a>
		</div>
	</div>
	<?php endif; ?>
</article>
