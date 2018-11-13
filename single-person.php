<?php get_header(); the_post(); ?>

<article class="<?php echo $post->post_status; ?> post-list-item">
	<div class="container my-5">
		<div class="row">
			<div class="col-md-4 mb-5">

				<aside class="person-contact-container">

					<div class="mb-4">
						<?php echo get_person_thumbnail( $post, 'rounded-circle' ); ?>
					</div>

					<h1 class="h5 person-title text-center mb-2">
						<?php echo get_person_name( $post ); ?>
					</h1>

					<?php if ( $job_title = get_field( 'person_jobtitle' ) ): ?>
					<div class="person-job-title text-center mb-4"><?php echo $job_title; ?></div>
					<?php endif; ?>

					<?php echo get_person_dept_markup( $post ); ?>
					<?php echo get_person_office_markup( $post ); ?>
					<?php echo get_person_email_markup( $post ); ?>
					<?php echo get_person_phones_markup( $post ); ?>

				</aside>
				<?php if ( $group_short_name = get_field( 'group_short_name' ) ): ?>
				<p><a class="btn btn-primary mt-3" href="/<?php echo $group_short_name; ?>">Research Group Members</a></p>
				<?php endif; ?>

				<?php if ( $group_website = get_field( 'group_website' ) ): ?>
				<p><a class="btn btn-primary mt-3" href="<?php echo $group_website; ?>">Research Group Website</a></p>
				<?php endif; ?>
			</div>

			<div class="col-md-8 col-lg-7 pl-md-5">

				<section class="person-content">
					<?php
					if ( $post->post_content ) {
						the_content(); } ?>

					<?php if ( $cv_url = get_field( 'person_cv' ) ): ?>
					<p>
						<a class="btn btn-primary mt-3" href="<?php echo $cv_url; ?>">Download Resume</a>
					</p>
					<?php endif; ?>

					<?php if ( have_rows( 'person_links', $post->ID ) ): ?>
						<h5 class="person-subheading mt-5">Links</h5>
						<div class="row">
						<div class="">
							<ul class="list-unstyled mb-0">
							<?php while ( have_rows( 'person_links', $post->ID ) ): the_row();
								$link_title = get_sub_field( 'title' );
								$link_url = get_sub_field( 'url' ); ?>
								<li>
									<a href="<?php echo $link_url; ?>" class="person-link" target="_blank">
										<?php echo $link_title; ?></a>
								</li>
							<?php endwhile; ?>
							</ul>
						</div>
						</div>
					<?php endif; ?>

					<?php if ( have_rows( 'person_awards', $post->ID ) ): ?>
						<h5 class="person-subheading mt-5">Awards</h5>
						<div class="row">
						<div class="">
							<ul class="list-unstyled mb-0">
							<?php while ( have_rows( 'person_awards', $post->ID ) ): the_row();
								$award = get_sub_field( 'award' ); ?>
								<li>
									<?php echo $award; ?>
								</li>
							<?php endwhile; ?>
							</ul>
						</div>
						</div>
					<?php endif; ?>
				</section>

			</div>
		</div>

		<?php echo get_person_news_publications_markup( $post ); ?>

		<?php echo get_person_videos_markup( $post ); ?>
	</div>
</article>

<?php get_footer(); ?>
