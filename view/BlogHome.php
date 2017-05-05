<?php 

require_once 'View.php';

class BlogHome extends View
{
	
	public function tampilLengkap()
	{
		include_once 'pages/beranda.php';
		$this->end();
	}
}



 ?>