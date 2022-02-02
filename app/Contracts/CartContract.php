<?php
namespace App\Contracts;
interface CartContract
{
	public function index();
	public function store(array $array);
	public function update(array $array, $id);
	public function destroy($id);
}

?>