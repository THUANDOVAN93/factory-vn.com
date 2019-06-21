<?php get_header(); ?>

<!-- contents/ -->
<div id="section_contents">
<div id="contents"><div id="contents_bgtop"><div id="contents_bgbottom" class="clearfix">

<?php get_sidebar(); ?>

<!-- ===article/=== -->
<div id="article">

				<?php 
				if (have_posts()) : // WordPress ループ
					while (have_posts()) : the_post(); // 繰り返し処理開始 ?>
						<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
							<h3><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>
				<?php 
				endwhile; // 繰り返し処理終了		
				else : // ここから記事が見つからなかった場合の処理 ?>
						<div class="post">
							<h3>記事はありません</h3>
							<p>お探しの記事は見つかりませんでした。</p>
						</div>
				<?php
				endif;
				?>

</div>
<!-- ===/article=== -->

</div></div></div>
</div>
<!-- /contents -->

<?php get_footer(); ?>