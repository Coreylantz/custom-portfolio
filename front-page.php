<?php get_header();  ?>

<div class="main">
  <div class="container">

	<section class="about" id="about">
		<div class="content">
			<h3>About Me</h3>
			<article class="about">
				<figure>
					<img src="<?php the_field('about_me_photo') ?>" alt="A Picture of me smiling on a chair">
				</figure>

				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis corrupti voluptatem dicta cupiditate unde recusandae nobis ipsam porro maxime facere, laborum atque temporibus, quis aperiam magni, dolorum consequatur repellendus. Maxime.</p>
			</article>
		</div>
	</section>
	<section class="portfolio" id="portfolio">
		<div class="content">
	  		<?php 
	  		$websiteArgs = array(
	  			'post_per_page' => -1
	  		);
	  		$websiteQuery = new WP_Query($websiteArgs);
	  		if ($websiteQuery->have_posts()) {
	  			while ($websiteQuery->have_posts()) {
	  				$websiteQuery->the_post();
	  				?>
	  				<article class="website">
	  					<figure>
	  						<?php the_post_thumbnail('medium')?>

	  					</figure>
	  					<div>
	  						<h2><?php the_title() ?></h2>
	  						<?php the_content(); ?>
	  						<button>
	  							<a href="<?php the_field('link') ?>">view it</a>
	  						</button>
	  					</div>
	  				</article>
	  				<?php
	  			}
	  		}
	  		wp_reset_postdata();
	  		?>
	  	</div>
	</section>

	<section class="skills">
		<div class="content">
			<h3>Skills</h3>
			<article class="gallery">
				<div class="skill">
					<i class="devicons devicons-html5"></i>
					<p>HTML5</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-css3"></i>
					<p>CSS</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-javascript_badge"></i>
					<p>JavaScript</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-php"></i>
					<p>PHP</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-responsive"></i>
					<p>Responsive design</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-sass"></i>
					<p>Sass</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-jquery"></i>
					<p>jQuery</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-gulp"></i>
					<p>Gulp</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-terminal_badge"></i>
					<p>Terminal</p>
				</div>

				<div class="skill">
					<i class="devicons devicons-git"></i>
					<p>Git</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-github_badge"></i>
					<p>Github</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-wordpress"></i>
					<p>Wordpress</p>
				</div>
			</article>

			<h3>I am learning</h3>
			<article class="gallery">
				<div class="skill">
					<i class="devicons devicons-angular"></i>
					<p>Angular</p>
				</div>
				<div class="skill">
					<i class="devicons devicons-react"></i>
					<p>React</p>
				</div>
			</article>
		</div>
	</section>

	<section class="contact">
		<div class="content">
				<h3>Contact</h3>
			<article class="social">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quos, quasi! Ea obcaecati odit illum architecto iste, quam voluptate reiciendis, nesciunt</p>
				<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
				<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
			</article>
			<div class="form">
				<?php // Start the loop ?>
				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					 <?php the_content(); ?>
				<?php endwhile; // end the loop?>
			</div>
		</div>
	</section>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>