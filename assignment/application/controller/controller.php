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
        $this->home();
    }


    function home()
	{
     //   $data = $this->model->model3D_info();
        $this->load->view('home');
	}
}

?>