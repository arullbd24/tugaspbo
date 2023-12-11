<?php

namespace App\Controllers;

use App\Core\Controller;

class Handphone extends Controller
{
     public object $model;

     public function __construct()
     {
          parent::cekLogin();

          $this->model = new \App\Models\Handphone();
     }

     public function index()
     {
          $data['rows'] = $this->model->show();
          $this->dashboard('Handphone/index', $data);
     }

     public function input()
     {
          $this->dashboard('Handphone/input');
     }

     public function save()
     {
          $this->model->save();
          header('location:' . URL . '/Handphone');
     }

     public function edit($id)
     {
          $data['row'] = $this->model->edit($id);
          $this->dashboard('Handphone/edit', $data);
     }

     public function update()
     {
          $this->model->update();
          header('location:' . URL . '/Handphone');
     }
     public function delete($id)
	{
		$this->model->delete($id);
		header('location:' . URL . '/Handphone');
	}
}
