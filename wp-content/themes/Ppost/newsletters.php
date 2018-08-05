	<!-- News letters -->
		<div class="col-md-4">
			<div class="row" style="text-align: center;font-weight: 700;font-size: 24px;">نیوز لیٹرز</div>

			<div class="row leadremainingsotries visible-desktop">
                
                     <?php $args = array( 'posts_per_page' => 4,'post_type'=> "nl", "orderby" => "ID", "oders" => "DESC");

    $myposts = get_posts( $args );
    //var_dump($myposts);
    foreach ( $myposts as $post ) { setup_postdata( $post ); ?>
					<a href="<?php the_permalink(); ?>" style="color:black;"><div class="col-md-6 small-story">
						
                        <?php the_post_thumbnail('small'); ?>
						<p><?php the_title(); ?></p>

					</div></a>
                <?php } wp_reset_postdata(); wp_reset_query(); ?>

				</div>


		</div>
		<!-- News letters end here -->
