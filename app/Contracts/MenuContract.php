<?php

namespace App\Contracts;

interface MenuContract
{
	public function category($slug);
	public function subCategory($slug);
	public function foodList($slug);
}

?>