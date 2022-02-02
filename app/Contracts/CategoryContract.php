<?php
namespace App\Contracts;

Interface CategoryContract
{
    public function create();
    public function store(array $array);
    public function show($id);
    public function edit($id);
    public function update(array $array,$id);
    public function destroy($id);
}
?>