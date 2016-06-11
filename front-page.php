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
				<div class="aboutText">
					<p>Hey, I'm  Corey. I'm a Front End Web Developer based in Toronto and a graduate of the Immersive Front-End Web Development program at HackerYou.</p>
					<p>I enjoy making fun creative, useful websites using clean semantic code. When I’m not coding you can find me making sausages, playing with dogs or playing video games.</p>
					<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
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
	  						<?php the_post_thumbnail('large')?>
	  					</figure>
	  					<div class="description">
	  						<h3><?php the_title() ?></h3>
	  						<?php the_content(); ?>
	  						<h6><?php echo the_field('tools') ?></h6>
	  						<button>
	  							<a href="<?php the_field('link') ?>">View It Live</a>
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

	<section class="skills" id="skills">
		<div class="content">
			<h3>Skills</h3>
			<ul class="gallery">
				<li class="skill">
					<i class="devicons devicons-html5"></i>
					<h5>HTML5</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-css3"></i>
					<h5>CSS</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-javascript_badge" id="small"></i>
					<h5>JavaScript</h5>
				</li>
				<li class="skill">
					<i class="fa fa-mobile" aria-hidden="true"></i>
					<h5>Responsive<br> design</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-sass"></i>
					<h5>Sass</h5>
				</li>
				</ul>
				
				<ul class="gallery">
				<li class="skill">
					<i class="devicons devicons-jquery"></i>
					<h5>jQuery</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-gulp"></i>
					<h5>Gulp</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-terminal"></i>
					<h5>Terminal</h5>
				</li>

				<li class="skill">
					<i class="devicons devicons-git"></i>
					<h5>Git</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-github_badge"></i>
					<h5>Github</h5>
				</li>
				<li class="skill">
					<i class="devicons devicons-wordpress"></i>
					<h5>Wordpress</h5>
				</li>
			</ul>

		</div>
	</section>

	<section class="contact" id="contact">
		<div class="content">
				<h3>Contact</h3>
			<article class="contactText">
				<div class="social">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, quos, quasi! Ea obcaecati odit illum architecto iste, quam voluptate reiciendis, nesciunt</p>
					<p><a href="mailto:coreylantz12@gmail.com">coreylantz[at]gmail.com</a></p>
					<a href="#"><i class="fa fa-github" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
				</div>
				<div class="form">
					<?php // Start the loop ?>
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
						 <?php the_content(); ?>
					<?php endwhile; // end the loop?>
				</div>
			</article>

		</div>
	</section>


  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>