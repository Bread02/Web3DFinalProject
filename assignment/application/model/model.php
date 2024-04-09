<?php   
class Model {
	
	// edit for coursework
	    public function __construct()
    {
		/*
        $dsn = 'sqlite:../db/test1.db';

        try {
            $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            )
            );
        } catch (PDOEXception $e) {
            echo "No database to connect to";
            // Generate an error message if connection fails
            print new Exception($e->getMessage());
        }
		*/
    }
	
   // method to simulate the model data
    public function model3D_info()
    {
    // simulate the model's data
        return array(
            'model_1' => 'Coke Can 3D Image 1',
            'image3D_1' => 'coke_1',

            'model_2' => 'Coke Can 3D Image 2',
            'image3D_2' => 'coke_2',

            'model_3' => 'Sprite Bottle 3D Image 1',
            'image3D_3' => 'sprite_1',

            'model_4' => 'Sprite Bottle 3D Image 2',
            'image3D_4' => 'sprite_2',

            'model_5' => 'Dr Pepper Cup 3D Image 1',
            'image3D_5' => 'pepper_1',

            'model_6' => 'Dr Pepper Cup 3D Image 2',
            'image3D_6' => 'pepper_2',

        );
    }
}
?>