<?php
class Controller {

	// Declare public variables for the controller class
	public $load;
	public $model;

    function __construct($pageURI = null)
    {

        $this->load = new Load();
        $this->model = new Model();
        // What page we are on
        $this->$pageURI();
    }


    function home()
	{
        $data = $this->model->model3D_info();
        $this->load->view('home');
	}

    function apiCreateTable()
    {
            $data = $this->model->dbCreateTable();
            $this->load->view('viewMessage', $data);
    }

    // Inserts the data into the table
    // view message is a PHP file in the view folder which displays whether creating a message was successful or not.
    function apiInsertData()
    {
        $data = $this->model->dbInsertData();
        $this->load->view('viewMessage', $data);
    }

    // gets the data from the table
    function apiGetData()
    {
        $data = $this->model->dbGetData();
        $this->load->view('view3DAppData', $data);
    }
}

?>