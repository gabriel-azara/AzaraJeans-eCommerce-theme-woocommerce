<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package azarajeans
 */

get_header();
?>

	<main id="primary" class="site-main">

	<section class="container pb-5 pt-4">
	<div id="carouselExampleDark" class="carousel carousel-dark slide overflow-hidden rounded" data-bs-ride="carousel">
		<div class="carousel-indicators">
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
			<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
		</div>
		<div class="carousel-inner">
			<div class="carousel-item active" data-bs-interval="10000">
			<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide-1.jpeg" class="d-block w-100" alt="..."></a>
				<div class="carousel-caption d-none d-md-block">
					<h5 class="title_slide">Titulo primeira foto</h5>
					<p class="description_slide">Falar sobre a foto</p>
					<button class="btn-slide">Clique aqui para comprar</button>
				</div>
			</div>
			<div class="carousel-item" data-bs-interval="2000">
			<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide-2.png" class="d-block w-100" alt="..."></a>
				<div class="carousel-caption d-none d-md-block">
					<h5 class="title_slide">Titulo segunda foto</h5>
					<p class="description_slide">Falar sobre a foto.</p>
					<button class="btn-slide">Clique aqui para comprar</button>
				</div>
			</div>
			<div class="carousel-item">
			<a href="#"><img src="<?php echo get_template_directory_uri();?>/img/slider/slide-3.jpeg" class="d-block w-100" alt="..."></a>
				<div class="carousel-caption d-none d-md-block">
					<h5 class="title_slide">Titulo terceira foto</h5>
					<p class="description_slide">Falar sobre a foto.</p>
					<button class="btn-slide">Clique aqui para comprar</button>
				</div>
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	</section>	

	<section class="container popular-products">

		<div class="row d-flex justify-content-center">
			<h1 class="text-center pt-5">Produtos em Destaque</h1>
			<p class="text-center">Nossos produtos possuem jeans de primeira qualidade</p>
			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[products popularity columns=4 limit=12]' ); ?>
			</div>
		</div>
	</section>

	<section class="categories pt-5 pb-5">
		<div class=container> 
			<h1 class="text-center pt-5">Categorias</h1>
			<p class="text-center">Nossos produtos possuem jeans de primeira qualidade</p>
		 <div class="row pt-5">

		 		<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/img1.jpeg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Calças</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/img2.jpeg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Jaquetas</h2>
					</a>
				</div>

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/img3.jpeg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Shorts</h2>
					</a>
				</div>
		 </div>

		 <div class="row mb-3">

				<div class="categories__col col-md-4 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/categories/img3.jpeg" alt="..." loading="lazy">
						<h2 class="position-absolute bottom-0 start-0 end-0 p-2 mb-0 text-center bg-primary-opacity-8 text-white">Blusas</h2>
					</a>
				</div>

				<div class="categories__col sale col-md-8 col-sm-12 mb-3">
					<a href="#" class="col-md-12 w-100 h-100 d-inline-block p-3 position-relative rounded overflow-hidden">
						<div class="bg-sale position-absolute top-0 bottom-0 end-0 start-0" style="z-index: 1;"></div>
						<img class="position-absolute top-0 bottom-0 end-0 start-0" src="<?php echo get_template_directory_uri();?>/img/slider/slide-1.jpeg" alt="..." loading="lazy"> 
						<h2 class="position-absolute top-50 start-0 end-0 mb-0 text-center text-white" style="z-index: 2;">Ofertas</h2>
			
					</a>
				</div>
			</div>
			</div>
		 		
	</section>

	<section class="container pt-5 special-offers special-offers">
			<h1 class="text-center pt-5">Ofertas</h1>
			<p class="text-center">Temos as melhores ofertas com os melhores jeans<br> para você vestir conforto!</p>

			<div class="pt-5 pb-5">
				<?php echo do_shortcode( '[sale_products columns=4 limit=4]' ); ?>
			</div>
		</section>

	</main>

<?php
get_footer();
