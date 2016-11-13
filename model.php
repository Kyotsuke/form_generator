<?php  
function define_damier($nb){ 
	$handle = fopen('../data.txt', 'w+');

	for ($i=0; $i < $nb; $i++) {

		for ($j=0; $j < $nb; $j++) { 

			if($j%2==1){
			    $draw = ($i%2==1)? "#": "*"; 
			}else{
			    $draw = ($i%2==1)? "*": "#"; 
			}

			fputs($handle, $draw);
		}

		fputs($handle, "\n");
	}

	fclose($handle);
}

function create_damier($nb){
	$handle = fopen('../data.txt', 'r'); // ouvre un pointeur de fichier sur la première ligne

	$line = [];

	while($line[] = fgets($handle));

	fclose($handle);

	$carre_w = 750/$nb;
	$carre_h = 750/$nb;
	$x = 0;
	$y = 0;

	foreach ($line as $row) {
		
		for ($k=0; $k < strlen($row); $k++) { 
			
			if($row[$k] == "*") echo '<rect width="'.$carre_w.'" height="'.$carre_h.'" x="'.$x.'" y="'.$y.'" class="carre blanc"></rect>';
			if($row[$k] == "#") echo '<rect width="'.$carre_w.'" height="'.$carre_h.'" x="'.$x.'" y="'.$y.'" class="carre noir"></rect>';
			$x += $carre_w;

			if ($x == $carre_w*strlen($row)) $x = 0;

		}

	$y += $carre_h;
	if ($y == $carre_h*strlen($row)) $x = 0;

	}
}