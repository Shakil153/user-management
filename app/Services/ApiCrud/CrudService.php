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
	public function update(CrudInterface $crudinterface){
		$crudinterface->update();
	}
	public function delete(CrudInterface $crudinterface){
		$crudinterface->delete();
	}
}