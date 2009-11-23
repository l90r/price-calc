<?php

require_once( dirname( __FILE__ ) . '/../options.php' );

class Variation {
	function getFromRequest() {
		global $variations;
		
		$variation = price_calc_get_from_request('variation');
		if( !$variation || !array_key_exists( $variation, $variations ) ) {
			$variation_ids = array_keys( $variations );
			$variation = $variation_ids[0];
		}
		return $variation;
	}
}
?>