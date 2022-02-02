<?php

namespace App\Contracts;

interface OrderContract
{
	public function store(array $array);
	public function show($id);
}


?>