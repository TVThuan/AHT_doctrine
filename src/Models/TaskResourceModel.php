<?php 
namespace AHT_DT\Models;

use AHT_DT\Models\Tasks;
use AHT_DT\Bootstrap;

class TaskResourceModel
{
	public function __construct()
	{
		$this->objModel = new Tasks();
		$this->entityManager = Bootstrap::getEntityManager();
	}
	public function add($model)
	{
		$this->entityManager->persist($model);
		$this->entityManager->flush();
	}

	public function edit($model)
	{
		$propertiesArray = $this->objModel->getProperties($model);
		$id = $propertiesArray['id'];
		$this->objModel = $this->entityManager->find('\AHT_DT\Models\Tasks', $id);
		foreach ($propertiesArray as $key => $value) {
			$this->objModel->{'set' . ucfirst($key)}($value);
		}
		$this->entityManager->persist($this->objModel); //persist được dùng để thêm một bản ghi vào database
		$this->entityManager->flush(); // Trả về
	}

	public function delete($id)
	{
		
		$this->objModel = $this->entityManager->find('\AHT_DT\Models\Tasks', $id); // Tìm thành phần id 
		$this->entityManager->remove($this->objModel); // Xóa phần tử được xác định
		$this->entityManager->flush();
	}

	public function get($id)
	{
		$value = $this->entityManager->find('\AHT_DT\Models\Tasks', $id);
		return $this->objModel->getProperties($value);
	}

	public function getAll()
	{
		$tasksRepository = $this->entityManager->getRepository('\AHT_DT\Models\Tasks');
		$tasks = $tasksRepository->findAll();
		$value = [];
		foreach ($tasks as $task) {
			$value [] = $this->objModel->getProperties($task); 
		}      
		return $value;
	}
}
