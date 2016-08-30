<form method="post">
    <input type="text" name="text">
    <input type="submit">
</form>

<select>
<option></option>
<?php
if($_POST){
	$var = $_POST['text'];
	$arch = fopen("text.txt","a+");	//abre archivo L/E, si no lo crea
	fputs($arch,"$var|");	//Coloca contenido
	fclose($arch);	//cierra archivo
	$arch = fopen("text.txt","a+");//abre archivo L/E, si no lo crea
	$iva = explode('|',fgets($arch)); //leemos el archivo
	foreach($iva as $elemt) {
		if(!empty($elemt)) {
		echo "<option value='$elemt'>$elemt</option>";
		}
	}
	fclose($arch);	//cierra archivo
} else {
	$arch = fopen("text.txt","a+");	//abre archivo L/E, si no lo crea
	$iva = explode('|',fgets($arch));	//leemos el archivo
	foreach($iva as $elemt) {
		if(!empty($elemt)){
		echo "<option value='$elemt'>$elemt</option>";
		}
	}
	fclose($arch); //cierra archivo
}
?>
</select>
