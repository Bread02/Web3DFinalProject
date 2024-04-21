<?php   
class Model {
	
	// edit for coursework
	    public function __construct()
    {
		
        $dsn = 'sqlite:../db/homePage.db';

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
		
    }
	
    // create the database, insert our JSON data into here for the home page.
    public function dbCreateTableHome()
    {
        echo "Create table function";
        try {
      //      $this->dbhandle->exec("CREATE TABLE Model_3D (Id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
        //    return "Model_3D table is successfully created inside test1.db file";
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    // insert the data into the DB
    public function dbInsertDataHome()
    {
        try{
			$this->dbhandle->exec(
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (1, 'X3D Coke Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (2, 'X3D Sprite Model', 'string_2', 'string_3','string_4','string_5'); " .
			"INSERT INTO Model_3D (Id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) 
				VALUES (3, 'X3D Pepper Model', 'string_2', 'string_3','string_4','string_5'); ");
			return "X3D model data inserted successfully inside test1.db";
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
    }

    public function dbGetDataHome()
    {
        echo "Data retrieval function";
        try {
            // Prepare a statement to get all records from model_3d table
            $sql = 'SELECT * FROM Model_3D';

            $stmt = $this->dbhandle->query($sql);

            $result = null;

            $i = -0;

            while ($data = $stmt->fetch()) {
                $result[$i]['x3dModelTitle'] = $data['x3dModelTitle'];
                $result[$i]['x3dCreationMethod'] = $data['x3dCreationMethod'];
                $result[$i]['modelTitle'] = $data['modelTitle'];
                $result[$i]['modelSubtitle'] = $data['modelSubtitle'];
                $result[$i]['modelDescription'] = $data['modelDescription'];

                // increment row index
                $i++;
            }
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }

            $this->dbhandle = null;
            return $result;
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