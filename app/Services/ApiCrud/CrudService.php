<?php
namespace App\Services\ApiCrud;
use App\Services\ApiCrud\CrudInterface;

class CrudService{

	public function index(CrudInterface $crudinterface){
		return $crudinterface->index();
	}
	public function store(CrudInterface $crudinterface){
		$crudinterface->store();
	}
	public function show(CrudInterface $crudinterface){
		return $crudinterface->show();
	}
	public function edit(CrudInterface $crudinterface){
		return $crudinterface->edit();
	}
	public function update(CrudInterface $crudinterface){
		$crudinterface->update();
	}
	public function delete(CrudInterface $crudinterface){
		$crudinterface->delete();
	}
}