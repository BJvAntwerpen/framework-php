<?php

require(ROOT . "model/StudentModel.php");

function index()
{
	render("Framework/index", array(
		'students' => getAllStudents()
	));
}

function create()
{
	render("Framework/create");
}

function createSave()
{

	if (!createStudent()) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Framework/index");
}

function edit()
{

	render("Framework/edit");	
}

function editSave()
{
	
} 

function delete($id)
{
	if (!deleteStudent($id)) {
		header("Location:" . URL . "error/index");
		exit();
	}

	header("Location:" . URL . "Framework/index");
}
