<?php  
namespace AHT_DT\Models;

class TaskRepository
{
	public $objResourceModel;

	// Khởi tạo hàm
	public function __construct()
	{
		$this->objResourceModel = new TaskResourceModel();
	}

	// Hàm add
	public function add($model)
	{
		
		$this->objResourceModel->add($model);
	}

	// Hàm edit
	public function edit($model)
	{
		$this->objResourceModel->edit($model);
	}

	// Hàm  delete
	public function delete($id)
	{
		$this->objResourceModel->delete($id);
	}

	// Get id
	public function get($id)
	{
		return $this->objResourceModel->get($id);
	}

	// Get Object
	public function getAll()
	{
		return $this->objResourceModel->getAll();
	}
}
