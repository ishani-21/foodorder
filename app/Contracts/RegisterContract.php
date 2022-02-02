<?php

namespace App\Contracts;

interface RegisterContract
{
	public function create(array $array);
	public function show($id);
	public function update(array $array, $id);
}


?>