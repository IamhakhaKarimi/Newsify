<?php

class Model {

	protected $table = '';
	protected $pk = '';

	protected $connection = '';

	function __construct(){

		$this->connection = new mysqli('localhost', 'root', '', 'codeproject');
		
		// var_dump($this->connection);
	}


	public function select($where_data = [], $single = false){

		

		$query = " SELECT * FROM {$this->table} ";

		if(count($where_data)){
			$query .= " WHERE ";
			foreach($where_data as $column => $value){
				$query .= " {$column}='{$value}' AND ";
			}

			$query = trim($query, ' AND ');
		}

		$result = $this->connection->query($query);

		if($single){
			return $result->fetch_assoc();
		}else{
			return $result->fetch_all(MYSQLI_ASSOC);
		}
		
	}

	// $data = [ 'name' => 'Ahmad', 'email' => 'email@domain.com', 'password' => '123abc'  ];
	public function insert($data){
		
		$column_string = '';
		$value_string = "";

		foreach ($data as $column => $value) {
			$column_string .= " {$column}, ";

			$value_string .= "'{$value}', ";
		}

		$column_string = trim($column_string, ', ');
		$value_string = trim($value_string, ', ');

		$query = " INSERT INTO {$this->table} ( $column_string ) VALUES ($value_string) ";

		$this->connection->query($query);
		
		return $this->connection->insert_id;

	}


	public function delete($id){

		$query = " DELETE FROM {$this->table} WHERE {$this->pk}={$id}";

		$this->connection->query($query);
		$image_query = "SELECT image FROM posts WHERE id= $id";
        $result = $this->connection -> query($image_query);
        $post_data = $result->fetch_assoc();

        unlink('sotrage/posts/'.$post_data['image']);


	}


	public function update($data, $id){
		$update_string = "";

		foreach ($data as $column => $value) {
			$update_string .= "{$column}='$value', ";
		}

		$update_string = trim($update_string, ', ');

		$query = " UPDATE {$this->table} SET {$update_string} WHERE {$this->pk}={$id}";

		$this->connection->query($query);

	}

}