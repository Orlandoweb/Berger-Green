<?php
use Roots\Sage\Assets;
$choose_category = get_sub_field('choose_category');
$cta = get_sub_field('cta', false, false);
?>

<div class="blog_posts__row wow fadeInUp" data-wow-duration="2s">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<h3 class="blog_posts__row__title text-uppercase text-center mb-2 mb-5">Top Stories</h3>
			</div>
			<div class="col-12">
				<div class="row mt-3">
					<?php
					$recent_news_catquery = new WP_Query( 'cat='.$choose_category.'&posts_per_page=3' );
					while($recent_news_catquery->have_posts()) : $recent_news_catquery->the_post();
						$title = get_the_title();
						$featured_image = get_the_post_thumbnail_url();
						$date = get_the_date();
						$category = get_the_category_list(', ');
						$content = get_the_excerpt();
						$link = get_permalink();
						echo '<div class="col-12 col-md-4 blog_posts__row__col pb-md-2 mb-5">
                            <figure>
                                <a href="'.$link.'"><img class="blog_posts__row__col__image" src="'.$featured_image.'" /></a>
                            </figure>
                            <h3><a class="blog_posts__row__col__link" href="'.$link.'">'.$title.'</a></h3>
                            <hr/>
                            <p class="blog_posts__row__col__meta">
                            <span class="d-block">Published: '.$date.'</span>
                            <span class="d-block">Category: '.$category.'</span>
                            </p>
                            <hr/>
                            <p class="blog_posts__row__col__content">'.$content.'</p>
                          </div>';
					endwhile;
					wp_reset_postdata();
					wp_reset_query();
					?>
				</div>
			</div>
			<div class="col-12 text-center">
				<?= $cta;?>
			</div>
		</div>
	</div>
</div>