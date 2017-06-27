<?php

class figura{
	public $nombre;
	public $color;
	
	
		function __construct(){
			$this -> color = "";
			
		}
	}
	
	class triangulo extends figura{
		public $base;
		public $altura;
	}
		function __construct(){
			$this -> base=0;
			$this -> altura=0;
		}
		
function area(){
		return $this -> base*$this ->altura/2;
}
		
function inicializar ($n, $c, $b, $altura) {
	$this -> nombre = $n;
	$this -> color = $c;
	$this -> base = $b;
	$this -> altura = $altura;
}

$figura = new triangulo();
$figura -> inicializar ("Triangulito", "#CCA326", 50, 25);
echo $figura -> area();
?>
