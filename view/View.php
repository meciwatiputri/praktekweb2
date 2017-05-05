<?php 

class View
{
	public $title;
	public $subtitle;
	public $content;

	function __construct()
	{
		include_once 'template-depan/header.php';
		include_once 'template-depan/navigasi.php';
		
	}

	protected function end()
	{
		include_once 'template-depan/sidebar.php';
		include_once 'template-depan/footer.php';		
	}
	
}


 ?>