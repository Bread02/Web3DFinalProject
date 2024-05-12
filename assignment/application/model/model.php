<?php   
class Model {
	
	// edit for coursework

        // property declaration
        public $dbhandle;

	    public function __construct()
    {
		
        $dsn = 'sqlite:./db/test1.db';

        try {
                $this->dbhandle = new PDO($dsn, 'user', 'password', array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
					
            )
            );
        } catch (PDOEXception $e) {
            echo "No database to connect to - This is an error.";
            // Generate an error message if connection fails
            print new Exception($e->getMessage());
        }		
    }
	
    // create the database, insert our JSON data into here for the home page.
    public function dbCreateTable()
    {
        echo "Create table function";
        try {
						
            $this->dbhandle->exec("CREATE TABLE Model_3D (id INTEGER PRIMARY KEY, x3dModelTitle TEXT, x3dCreationMethod TEXT, modelTitle TEXT, modelSubtitle TEXT, modelDescription TEXT)");
            return "Model_3D table is successfully created inside test1.db file";
        } catch (PD0EXception $e) {
            print new Exception($e->getMessage());
        }
        $this->dbhandle = NULL;
    }

    // insert the data into the DB
    public function dbInsertData()
    {
        try{

            // TODO: try to change the file get contents path if possible.
			$json_data = file_get_contents($_SERVER['DOCUMENT_ROOT'] .'/Web3DFinalProject/assignment/application/model/models_data.json'); // we grab the json data from the file.

            // decoding this data to turn it into an array so that it can be used.
            $data = json_decode($json_data, true, 512, JSON_THROW_ON_ERROR);

            // create a query then prepare it to insert into the database.
            $query = "INSERT INTO Model_3D (id, x3dModelTitle, x3dCreationMethod, modelTitle, modelSubtitle, modelDescription) VALUES (?, ?, ?, ?, ?, ?)";
            $stmt = $this->dbhandle->prepare($query);

			$rows = 0;
			foreach ($data as $dataItem) 
			 {
                 $id = $dataItem["id"];
				 $x3dModelTitle = $dataItem["x3dModelTitle"];
				 $x3dCreationMethod = $dataItem["x3dCreationMethod"];
				 $modelTitle = $dataItem["modelTitle"];
				 $modelSubtitle = $dataItem["modelSubtitle"];
				 $modelDescription = $dataItem["modelDescription"];

                 // insert into the database.
				 $stmt->execute([$id, $x3dModelTitle, $x3dCreationMethod, $modelTitle, $modelSubtitle, $modelDescription]);
				 $rows ++;
			 }
			 
			 if(count($data) == $rows)
			 {
				 echo "success";
			 }
			 else
			 {
				 echo "error";
			 }
		}
		catch(PD0EXception $e) {
			print new Exception($e->getMessage());
		}
		$this->dbhandle = NULL;
    }

    public function dbGetData()
    {
      //  echo "Data retrieval function";
        try {
            // Prepare a statement to get all records from model_3d table
            $sql = 'SELECT * FROM Model_3D';

            $stmt = $this->dbhandle->query($sql);

            $result = null;

            $i = -0;

            while ($data = $stmt->fetch()) {
                $result[$i]['id'] = $data['id'];
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
}
?>