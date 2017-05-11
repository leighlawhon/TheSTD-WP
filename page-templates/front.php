<?php
/*
Template Name: Front
*/
get_header(); ?>

<header id="front-hero" role="banner">
	<div class="marketing">
		<div class="tagline">
			<h1><?php bloginfo( 'name' ); ?></h1>
			<h4 class="subheader"><?php bloginfo( 'description' ); ?></h4>
		</div>

		<div id="watch">
			<section id="stargazers">
				<a href="https://github.com/olefredrik/foundationpress">1.5k stargazers</a>
			</section>
			<section id="twitter">
				<a href="https://twitter.com/olefredrik">@olefredrik</a>
			</section>
		</div>
	</div>

</header>
<?php do_action( 'foundationpress_before_content' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
	<div class="fp-intro">

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			<h2>A not-so secret society</h2>
			<button type="button" name="button">Hide Content</button>
			<?php do_action( 'foundationpress_page_before_entry_content' ); ?>
			<div class="entry-content">
				<?php the_content(); ?>
			</div>
			<footer>
				<?php
					wp_link_pages(
						array(
							'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
							'after'  => '</p></nav>',
						)
					);
				?>
				<p><?php the_tags(); ?></p>
			</footer>
			<?php do_action( 'foundationpress_page_before_comments' ); ?>
			<?php comments_template(); ?>
			<?php do_action( 'foundationpress_page_after_comments' ); ?>
		</div>

	</div>

</section>
<?php endwhile;?>
<?php do_action( 'foundationpress_after_content' ); ?>

<div class="section-divider">
	<hr />
</div>

<div class="article-row-section">
  <div class="article-row-section-inner">

    <h2 class="article-row-section-header">News</h2>

    <a href="#">
      <article class="article-row">
        <div class="article-row-img">
          <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
        </div>
        <div class="article-row-content">
          <h1 class="article-row-content-header">HOW SPENDING $162,301.42 ON CLOTHES MADE ME $692,500</h1>

          <p class="article-row-content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt quia sit ullam, assumenda et. est at. Minima cum enim, vero eligendi perspiciatis similique modi voluptatem officia fugiat.</p>

          <p class="article-row-content-author">By Yeti</p>
          <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>
        </div>
      </article>
    </a>

    <a href="#">
      <article class="article-row article-row-reversed">
        <div class="article-row-img">
          <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
        </div>
        <div class="article-row-content">
          <h1 class="article-row-content-header">HOW TO QUIT YOUR JOB, MOVE TO PARADISE AND GET PAID TO CHANGE THE WORLD</h1>

          <p class="article-row-content-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore accusamus sint quas, odit, enim architecto officiis culpa!</p>

          <p class="article-row-content-author">By Yeti</p>
          <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>
        </div>
      </article>
    </a>

    <a href="#">
      <article class="article-row">
        <div class="article-row-img">
          <img src="http://placehold.it/200" alt="picture of a whale eating a donkey" />
        </div>
        <div class="article-row-content">
          <h1 class="article-row-content-header">HOW I’M GOING TO LOSE ALL MY CUSTOMERS AND WRECK MY BUSINESS</h1>

          <p class="article-row-content-description">Lorem ipsum dolor sit amet, consectetur cupiditate, unde libero quisquam ipsam debitis earum omnis aperiam nulla eaque vitae error optio tempora voluptatem, quae impedit laborum placeat. Expedita!</p>

          <p class="article-row-content-author">By Yeti</p>
          <time class="article-row-content-time" datetime="2008-02-14 20:00">July 14th 2021</time>
        </div>
      </article>
    </a>

  </div>
</div>

<section class="benefits">
	<header>
		<h2>Code is magical f^#$%! fairy dust, don't let anyone keep you from it.</h2>
		<h4>Foundation is the professional choice for designers, developers and teams. <br /> WordPress is by far, <a href="http://trends.builtwith.com/cms">the world's most popular CMS</a> (currently powering 38% of the web).</h4>
	</header>

	<div class="semantic">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/semantic.svg" alt="semantic">
		<h3>Semantic</h3>
		<p>Everything is semantic. You can have the cleanest markup without sacrificing the utility and speed of Foundation.</p>
	</div>

	<div class="responsive">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/responsive.svg" alt="responsive">
		<h3>Responsive</h3>
		<p>You can build for small devices first. Then, as devices get larger and larger, layer in more complexity for a complete responsive design.</p>

	</div>

	<div class="customizable">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/customizable.svg" alt="customizable">
		<h3>Customizable</h3>
		<p>You can customize your build to include or remove certain elements, as well as define the size of columns, colors, font size and more.</p>

	</div>

	<div class="professional">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/demo/professional.svg" alt="professional">
		<h3>Professional</h3>
		<p>Millions of designers and developers depend on Foundation. We have business support, training and consulting to help grow your product or service.</p>
	</div>


</section>



<?php get_footer();
