<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<!-- Required meta tags -->
	<meta charset="<?php bloginfo('charset'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

	<script src="https://kit.fontawesome.com/ed16a084b6.js"></script>
	<title><?php wp_title(); ?></title>
</head>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-149612915-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-149612915-1');
</script>



<?php 
    // Declarar Variables
    $secciones = array("portada", "sin-categoria", "escenarios", "musica", "nuevos-rostros", "personajes", "television", "teatro");

    // Si es post
    if ( is_single() ) {
        $categorias = get_the_category( $post->ID );

        for($i = 0; $i <= (count($categorias) -1); $i++ ) {

            for($s = 0; $s <= (count($secciones) - 1); $s++ ) {
                if( $secciones[$s] == $categorias[$i]->slug ) {
                    $clase_maestra = $secciones[$s];
                }
            }

        }
    }
    //Si es category
    elseif(is_category()) {

			$cat = get_category( get_query_var( 'cat' ) );

            for($s = 0; $s <= (count($secciones) - 1); $s++ ) {

                if( $secciones[$s] == $cat->slug ) {
					$clase_maestra = $secciones[$s];
					break;
                }
                else {
                    $clase_maestra = "default";
                }
            }
    } 

    else {
        $clase_maestra = "default";
    }
?>
<body class="estilo_<?php echo $clase_maestra; ?>">


<nav class="navbar navbar-expand-md navbar-light bg-light" role="navigation">
  <div class="container-fluid">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a class="navbar-brand" href="/">Stage<b>ONE</b></a>
		<?php
		wp_nav_menu( array(
			'theme_location'    => 'primary',
			'depth'             => 2,
			'container'         => 'div',
			'container_class'   => 'collapse navbar-collapse',
			'container_id'      => 'bs-example-navbar-collapse-1',
			'menu_class'        => 'nav navbar-nav',
			'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			'walker'            => new WP_Bootstrap_Navwalker(),
		) );
		?>
	</div>
</nav>


<div class="container-fluid bg-dark shadow d-none d-md-block">
	<div class="row p-3">
		<div class="col-12 col-md-4 text-center text-md-left pt-3 pt-md-1">
			<a href="/">
				<img src="<?php bloginfo('template_directory'); ?>/images/logotipo.png" class="w-50">
			</a>
		</div>


		<div class="col-12 col-md-8 pt-5 pb-2 p-md-3 text-light text-center text-md-right">
			<a target="_blank" href="https://www.facebook.com/StageOneMagazine/" class="text-light p-1 redes">
				<i class="fab fa-facebook-square"></i>
			</a>
			<a target="_blank" href="https://www.youtube.com/stageonemx/" class="text-light p-1 redes">
				<i class="fab fa-youtube"></i>
			</a>
			<a target="_blank" href="https://www.instagram.com/stageone_mag/" class="text-light p-1 redes">
				<i class="fab fa-instagram"></i>
			</a>
			<a target="_blank" href="https://twitter.com/StageOne_Mag" class="text-light p-1 redes">
				<i class="fab fa-twitter-square"></i>
			</a>
			<a target="_blank" href="https://issuu.com/stageonemagazine" class="text-light p-1 redes">
				issuu
			</a>
		</div>
	</div>
</div>