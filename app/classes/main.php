<?php
namespace app\classes;

class main{

	/**
	* @brief 	create the constructor for the web app
	* 		 	-> create the page array for the program
	*			-> figure out what page to load
	*/
	public function __construct($db){
		
		$page_request = 'app\classes\\' .'pageIndex';
		
		if(!empty($_REQUEST) && isset($_REQUEST['page'])){
			$page_request = 'app\classes\\' . $_REQUEST['page'];
			
		}
		$page = new $page_request($db);
		
		$page->get();
		
	}

}

?>