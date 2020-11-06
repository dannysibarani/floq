<?php

if (! function_exists('is_int_val')) {
	function is_int_val($value){
	    if( ! preg_match( '/^-?[0-9]+$/', $value ) ){
	        return FALSE;
	    }
	    
	    /* Disallow leading 0 */
	    // cast value to string, to make index work
	    $value = (string) $value;

	    if( ( $value[0] === '-' && $value[1] == 0 ) || ( $value[0] == 0 && strlen( $value ) > 1 ) ){
	        return FALSE;
	    }
	    return TRUE;
	}
}