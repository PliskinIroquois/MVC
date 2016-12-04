<?php
class baseDatos{
	private $usuario;
	private $password;
	private $dbName;
	private $servidor;
	private $conexion;
	
	public function __construct($usuario,$password,$dbName,$servidor){
		$this->usuario=$usuario;
		$this->password=$password;
		$this->dbName= $dbName;
		$this->servidor=$servidor;
		
	}
	
	public function connect(){
		$this->conexion = new mysqli($this->servidor, $this->usuario, $this->password, $this->dbName);
		if ($this->conexion->connect_error) {
			die("Connection failed: " . $this->conexion->connect_error);
		}
	
	}
	public function disconnect() {
		$this->conexion->close();
	}
/**************UPDATE FUNCTION *****************************************************/
	
	public function update($tabla,$columnas,$valores,$filtros){
		$columnasValuesStr='';
		$filtrosStr='';
		/*************COLUMNAS*************/
		for ($i=0;$i<count($columnas);$i++){
			if ($i < (count($columnas)-1)){
				$columnasValuesStr.=$columnasValuesStr[$i].$columnas[$i].'='."'".$valores[$i]."', ";
				
				//$columnasValuesStr.="{$columnas[$i]} = {$valores[$i]}";
			}
			else{
				$columnasValuesStr.=$columnasValuesStr[$i].$columnas[$i].'='.$valores[$i];
			}
			
			/*foreach ($filtros as $key=>$value){
				
				$filtrosStr.="$key='$value' AND";
			}*/
			/*************FILSTROS*************/
			for ($j=0; $j<count($filtros);$j++){
				if ($j<> (count($filtros)-1)){
					$filtrosStr.=$filtrosStr[$i].$columnas."=".$filtros.",";
				}else{
					$filtrosStr.=$filtrosStr[$i].$columnas."=".$filtros;
						
				}
			}
		}
		//$columnasValuesStr="col1='abc', col2='bcd'";
		$sql = "UPDATE $tabla SET $columnasValoresStr WHERE $filtrosStr;";
		$resultado=$this->conexion->query($sql) or die ("Note :".mysqli_error($this->conexion));
		return $resultado;
		
		$resultado->free();
	
	}
/**************SELECT FUNCTION *****************************************************/
	public function select ($tabla,$filtros,$campos,$isNeeded){
		
		if ($isNeeded){ //este flag es requerido para indicar si es una sentencia SELECT ALL o SELECT Campo X, Y, etc
		$camposStr='';
		$filtrosCampos='';
		$columnasStr='';
		/**************CAMPOS*********************/
		for ($i=0;$i<=(count($campos)-1);$i++){
			if ($i<(count($campos)-1)){
				$camposStr.=' '.$campos[$i].',';
			}else{
				$camposStr.=' '.$campos[$i];
			}
		}
		
		
		/*******************FILTROS****************/
		for ($j=0; $j<count($filtros);$j++){
			if ($j<> (count($filtros)-1)){
				$filtrosCampos.=' '.$campos[$j]."= '".$filtros[$j]."' AND ";
			}else{
				$filtrosCampos.=' '.$campos[$j]."= '".$filtros[$j]."';";
		
			}
		}
		
			$sql="SELECT $camposStr FROM $tabla WHERE $filtrosCampos";
		}
		else{
			$sql="SELECT * FROM $tabla";
		}
		//echo $sql; >> for testing purposes
		$resultado=$this->conexion->query($sql) or die ("Note :".mysqli_error($this->conexion));
		return $resultado;
		
		$resultado->free();
	
	}

/**************INSERT FUNCTION *****************************************************/
	
	public function insert($tabla,$campos,$valores){
		
		
		//INSERT INTO TABLE_NAME (column1, column2, column3,...columnN)] VALUES (value1, value2, value3,...valueN);
		$valoresStr='';
		$camposStr='';
		/**************CAMPOS*********************/
		for ($i=0;$i<=(count($campos)-1);$i++){
			if ($i<(count($campos)-1)){
				$camposStr.=" ".$campos[$i].",";
			}else{
				$camposStr.=" ".$campos[$i]."";
			}
		}
		
		/**************VALORES*********************/
		for ($i=0;$i<=(count($valores)-1);$i++){
			if ($i<(count($valores)-1)){
				$valoresStr.=" '".$valores[$i]."',";
			}else{
				$valoresStr.=" '".$valores[$i]."'";
			}
		}
		$sql="INSERT INTO $tabla ($camposStr) VALUES ($valoresStr);";
		echo$sql; //for testing purposes
		$resultado=$this->conexion->query($sql) or die ("Note :".mysqli_error($this->conexion));
		return $resultado;
		
		$resultado->free();
		
	}

/**************DELETE FUNCTION *****************************************************/
	
	public function delete ($tabla, $columnas,$valores){
		//DELETE FROM table_name WHERE some_column=some_value;
		
		$columnasValoresStr='';
		/**************COLUMNAS Y VALORES*********************/
		for ($i=0;$i<=(count($columnas)-1);$i++){
			if ($i<(count($columnas)-1)){
				$columnasValoresStr.=' '.$columnas[$i]."='".$valores."' AND ";
			}else{
				$columnasValoresStr.=' '.$columnas[$i].";";
			}
		}
		$sql= "DELETE FROM $tabla WHERE $columnasValoresStr";
		$resultado=$this->conexion->query($sql) or die ("Note :".mysqli_error($this->conexion));
		return $resultado;
		
		$resultado->free();
		
	}
	
	//--patron de dise_no Singleton--
	
	private static $DB=NULL;
	
	public static function getInstance()
	{
		if(is_null(self::$DB))
		{
			self::$DB= new baseDatos(BD_USUARIO, BD_CONTRASENA, BD_NOMBRE_BD,BD_SERVIDOR);
			/*
			 * define('BD_USUARIO', 'root');
			 define('BD_CONTRASENA', 'root');
			 define('BD_NOMBRE_BD', 'proyecto_p4');
			 define('BD_SERVIDOR', 'localhost');
			 *
			 *
			 */
		}
		return self::$DB;
	}
	
	
}