<?php

class JSON_API_Artwork_Controller {

	public function get_collection() {
		$tax_query      = array();
		$taxonomy_names = get_custom_post_type_taxonomies();
		$queries        = array();
		$collection     = array();
		$filter         = '';
		$paged          = 0;

		foreach ( $taxonomy_names as $key => $value ) {
			$query_var = get_query_var( $key );
			if ( ! empty( $query_var ) ) {
				$query_var = explode( ",", $query_var );
			}
			if ( ! is_array( $query_var ) && empty( $query_var ) ) {
				$queries[ $key ] = array();
			} else {
				$queries[ $key ] = is_array( $query_var ) ? $query_var : array( $query_var );

				array_push( $tax_query, array(
					'taxonomy' => $key,
					'field'    => 'slug',
					'terms'    => $queries[ $key ]
				) );
				$filter .= implode( ',', $queries[ $key ] ) . ',';
			}
		}
		$filter = trim( $filter, "," );

		$page_size = 20;
		if ( $paged == 0 ) {
			$offset = 0;
		} else {
			$offset = ( $paged - 1 ) * $page_size;
		}
		$args = array(
			'post_type'      => 'artwork',
			'tax_query'      => $tax_query,
			'posts_per_page' => $page_size,
			'offset'         => $offset
		);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) :
			$loop->the_post();
			$artwork      = array( "title" => get_the_title(), "image" => get_field( 'image' ) );
			$collection[] = $artwork;
		endwhile;

		return array(
			"total"      => $loop->found_posts,
			"page"       => $paged,
			"page_size"  => $page_size,
			"filter"     => $filter,
			"collection" => $collection,
			"end"        => "</html>"
		);
	}

	public function get_taxonomies() {
		return get_custom_post_type_taxonomies();
	}

}

