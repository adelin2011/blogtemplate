<h2> Sidebar </h2>

<?php dynamic_sidebar('first-widget'); ?>

<h4> Past Posts </h4> 
<ul>
<?php 

	$args = array(
	    'orderby'           => 'name', 
	    'hierarchical'      => true, 
	); 
	$terms = get_terms('webdevelopment', $args);

	if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
	    $count = count( $terms );
	    $i = 0;
	    $term_list = '<li>';
	 	foreach ( $terms as $term ) {
	        $i++;
	    	$term_list .= '<a href="' . get_term_link( $term ) . '" title="' . sprintf( __( 'View all post filed under %s', 'my_localization_domain' ), $term->name ) . '">' . $term->name . '</a>';
	    	if ( $count != $i ) {
	            $term_list .= ' &middot; ';
	        }
	        else {
	            $term_list .= '</li>';
	        }
	    }
	    echo $term_list;
	}
?>
</ul>
