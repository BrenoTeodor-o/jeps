<?php

include 'includes/meta.php';
include 'includes/restyle.php';

//////////////////////////////////////////////////
############## slider
//////////////////////////////////////////////////

add_action( 'init', 'slider' );
function slider() {
	$labels = array(
		'name' 			=> __( 'Slider' ),
		'singular_name' => __( 'Slider' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title','thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'slider', $post);
}
//////////////////////////////////////////////////
############## boletins
//////////////////////////////////////////////////

add_action( 'init', 'boletins' );
function boletins() {
	$labels = array(
		'name' 			=> __( 'Boletins' ),
		'singular_name' => __( 'Boletins' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title', 'editor','thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'boletins', $post);
}
//////////////////////////////////////////////////
############## regulamento
//////////////////////////////////////////////////

add_action( 'init', 'regulamento' );
function regulamento() {
	$labels = array(
		'name' 			=> __( 'regulamento' ),
		'singular_name' => __( 'regulamento' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title', 'editor', 'thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'regulamento', $post);
}

//////////////////////////////////////////////////
############## notasOficiais
//////////////////////////////////////////////////

add_action( 'init', 'notasOficiais' );
function notasOficiais() {
	$labels = array(
		'name' 			=> __( 'notasOficiais' ),
		'singular_name' => __( 'notasOficiais' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title', 'editor', 'thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'notasOficiais', $post);
}

//////////////////////////////////////////////////
############## cronogramas
//////////////////////////////////////////////////

add_action( 'init', 'cronogramas' );
function cronogramas() {
	$labels = array(
		'name' 			=> __( 'cronogramas' ),
		'singular_name' => __( 'cronogramas' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title', 'editor', 'thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'cronogramas', $post);
}
//////////////////////////////////////////////////
############## resultados
//////////////////////////////////////////////////

add_action( 'init', 'resultados' );
function resultados() {
	$labels = array(
		'name' 			=> __( 'resultados' ),
		'singular_name' => __( 'resultados' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title', 'editor', 'thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'resultados', $post);
}

//////////////////////////////////////////////////
############## inscrições
//////////////////////////////////////////////////

add_action( 'init', 'inscrições' );
function inscrições() {
	$labels = array(
		'name' 			=> __( 'inscrições' ),
		'singular_name' => __( 'inscrições' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title','thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'inscrições', $post);
}

//////////////////////////////////////////////////
############## contatos
//////////////////////////////////////////////////

add_action( 'init', 'contatos' );
function contatos() {
	$labels = array(
		'name' 			=> __( 'contatos' ),
		'singular_name' => __( 'contatos' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title','thumbnail'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'contatos', $post);
}

//////////////////////////////////////////////////
############## informacoes
//////////////////////////////////////////////////

add_action( 'init', 'informacoes' );
function informacoes() {
	$labels = array(
		'name' 			=> __( 'Informações' ),
		'singular_name' => __( 'Informações' ),		
	);

	$post = array(
		'labels' 			=> $labels,
		'supports'	 		=> array('title'),
		'capability_type'	=> 'post',
		'public' 			=> true,
		'has_archive' 		=> false,		
	);

	register_post_type( 'informacoes', $post);
}
	