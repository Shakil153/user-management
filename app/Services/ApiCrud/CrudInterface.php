<?php
namespace App\Services\ApiCrud;

interface CrudInterface {

	public function index();
	public function store();
	public function update();
	public function delete();
}