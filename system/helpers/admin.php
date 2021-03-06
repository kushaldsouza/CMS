<?

//build admin panel setting input
function build_input($name, $value, $type){
	$builtstring = "";
	switch($type){
		case "option":
				$options = array();
				if($name == "template"){
					$options = get_templates();
				}else if($name == "site"){
					$options[] = "enabled";
					$options[] = "disabled";
				}
				$builtstring = build_dropdown($name, $options, $value);
				break;
		case "text":
				$builtstring = "<textarea name='$name'>$value</textarea>";
				break;
		case "input":
		default:
				$builtstring = "<input type='text' name='$name' value='$value'>";
	}
	
	return $builtstring;
}

//function to build dropdown
function build_dropdown($name, $options, $default){
	$builtstring = "<select name='$name'>";
	foreach($options as $value){
		$s = "";
		if($value == $default) $s = "selected";
		$builtstring .= "<option value='$value' $s>$value</option>";
	}
	$builtstring .= "</select>";
	
	return $builtstring;
}

//get list of available templates on server
function get_templates(){
	$templates = array();
	
	if ($handle = opendir(LOCAL_DIR."system/views")) {
		/* This is the correct way to loop over the directory. */
		while (false !== ($file = readdir($handle))) {
			//skip system files
			if($file == "." || $file == ".." || $file == "admin" || $file == "index.html") continue;
			$templates[] = $file;
		}

		closedir($handle);
	}

	return $templates;
}

?>
