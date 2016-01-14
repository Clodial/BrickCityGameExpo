<?php
namespace app\classes;

abstract class pageTemplate{

	/*Main Functions*/
	public function getBody(){
		/**
		*	@brief -> creates the body of the page
		**/
	}
	

	/*Pre-Made Functions*/
	public function getHeader(){
		/**
		*	@brief -> creates the header of the page
		**/
	}
	
	public function getFooter(){
		/**
		*	@brief -> creates the footer of the page
		*
		**/
	}

	public function getBack(){
		/**
		*	@brief -> creates the background for the body
		*				-> As in, you're including this to the getBody function
		**/

	}

	public function get(){}

}

?>