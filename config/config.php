<?php








function fortisimus_Numero_to_Hach($C_PO_FORTIS)
{
	$script_decripter_fors = str_replace("1", "hgghgghghhghhhhgghhghhghhghhhghhghhghghghhhghghghgh", $C_PO_FORTIS);
	$script_decripter_fors = str_replace("2", "hgghgghghhghhhhgghhghhghhhghhghhghhghghghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("3", "hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghhhgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("4", "hgghgghghhghhhhgghhghhghhhhghghhghhghghghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("5", "hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhgghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("6", "hgghgghghhghhhhgghhghhghhhhhhhhhghhghghghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("7", "hgghgghghhghhhhgghhghhghhhhhhghgghhghghghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("8", "hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("9", "hgghgghghhghhhhgghhghhghhhhhhghhghgghghghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("0", "hgghgghghhghhhhgghhghhghhhhhhghhghhghggghhhghghghgh", $script_decripter_fors);
	$script_decripter_fors = str_replace("+", "hgghgghghhghhhhgghhghhghhhhhhghhghhghghgghhghghghgh", $script_decripter_fors);

	return $script_decripter_fors;

}








function Fortisimus_Hach_to_Numero($C_PO_VRE)
{
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhghhhghhghhghghghhhghghghgh", "1", $C_PO_VRE);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhghhghhghhghghghhhghghghgh", "2", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghhhgh", "3", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhghghhghhghghghhhghghghgh", "4", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhgghghghgh", "5", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhhhhghhghghghhhghghghgh", "6", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghgghhghghghhhghghghgh", "7", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghghgh", "8", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghgghghghhhghghghgh", "9", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghggghhhghghghgh", "0", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghgghhghghghgh", "+", $script_decripter_forsy);
	return $script_decripter_forsy;
}







function Fortisimus_letter_to_Hach($G_HNJMK)
{


	$script_validation_force = str_replace("a", "399339333393", $G_HNJMK);
	$script_validation_force = str_replace("b", "399339333999", $script_validation_force);
	$script_validation_force = str_replace("c", "399339393339", $script_validation_force);
	$script_validation_force = str_replace("d", "399339933399", $script_validation_force);
	$script_validation_force = str_replace("e", "399339333399", $script_validation_force);
	$script_validation_force = str_replace("f", "399339393399", $script_validation_force);
	$script_validation_force = str_replace("g", "393339333399", $script_validation_force);
	$script_validation_force = str_replace("h", "393339339399", $script_validation_force);
	$script_validation_force = str_replace("i", "399339333339", $script_validation_force);
	$script_validation_force = str_replace("j", "999339333393", $script_validation_force);
	$script_validation_force = str_replace("k", "399339339999", $script_validation_force);
	$script_validation_force = str_replace("l", "399339993399", $script_validation_force);
	$script_validation_force = str_replace("m", "399333993399", $script_validation_force);
	$script_validation_force = str_replace("n", "399999333399", $script_validation_force);
	$script_validation_force = str_replace("o", "393999333399", $script_validation_force);
	$script_validation_force = str_replace("p", "999339333993", $script_validation_force);
	$script_validation_force = str_replace("q", "399339333939", $script_validation_force);
	$script_validation_force = str_replace("r", "339333333399", $script_validation_force);
	$script_validation_force = str_replace("s", "339339333399", $script_validation_force);
	$script_validation_force = str_replace("t", "933339333399", $script_validation_force);
	$script_validation_force = str_replace("u", "399333333399", $script_validation_force);
	$script_validation_force = str_replace("v", "399339339393", $script_validation_force);
	$script_validation_force = str_replace("w", "939339333399", $script_validation_force);
	$script_validation_force = str_replace("x", "399339399999", $script_validation_force);
	$script_validation_force = str_replace("y", "999339333333", $script_validation_force);
	$script_validation_force = str_replace("z", "999339333399", $script_validation_force);
	$script_validation_force = str_replace("A", "622662666626", $script_validation_force);
	$script_validation_force = str_replace("B", "622662666222", $script_validation_force);
	$script_validation_force = str_replace("C", "622662626662", $script_validation_force);
	$script_validation_force = str_replace("D", "622662266622", $script_validation_force);
	$script_validation_force = str_replace("E", "622662666622", $script_validation_force);
	$script_validation_force = str_replace("F", "622662626622", $script_validation_force);
	$script_validation_force = str_replace("G", "626662666622", $script_validation_force);
	$script_validation_force = str_replace("H", "626662662622", $script_validation_force);
	$script_validation_force = str_replace("I", "622662666662", $script_validation_force);
	$script_validation_force = str_replace("J", "222662666626", $script_validation_force);
	$script_validation_force = str_replace("K", "622662662222", $script_validation_force);
	$script_validation_force = str_replace("L", "622662226622", $script_validation_force);
	$script_validation_force = str_replace("M", "622666226622", $script_validation_force);
	$script_validation_force = str_replace("N", "622222666622", $script_validation_force);
	$script_validation_force = str_replace("O", "226222662262", $script_validation_force);
	$script_validation_force = str_replace("P", "662662666666", $script_validation_force);
	$script_validation_force = str_replace("Q", "622666666262", $script_validation_force);
	$script_validation_force = str_replace("R", "662666666622", $script_validation_force);
	$script_validation_force = str_replace("S", "662662666622", $script_validation_force);
	$script_validation_force = str_replace("T", "262662626622", $script_validation_force);
	$script_validation_force = str_replace("U", "622666666622", $script_validation_force);
	$script_validation_force = str_replace("V", "662662662626", $script_validation_force);
	$script_validation_force = str_replace("W", "262662666622", $script_validation_force);
	$script_validation_force = str_replace("X", "622662622222", $script_validation_force);
	$script_validation_force = str_replace("Y", "222662666666", $script_validation_force);
	$script_validation_force = str_replace("Z", "222662666622", $script_validation_force);
	$script_validation_force = str_replace("é", "544554544544", $script_validation_force);
	$script_validation_force = str_replace("à", "544554544444", $script_validation_force);
	$script_validation_force = str_replace("è", "554554544544", $script_validation_force);
	$script_validation_force = str_replace("!", "188118111181", $script_validation_force);
	$script_validation_force = str_replace('"', "188118111888", $script_validation_force);
	$script_validation_force = str_replace("#", "188118181118", $script_validation_force);
	$script_validation_force = str_replace("$", "188118811188", $script_validation_force);
	$script_validation_force = str_replace("%", "188118111188", $script_validation_force);
	$script_validation_force = str_replace("^", "188118181188", $script_validation_force);
	$script_validation_force = str_replace("&", "188111111188", $script_validation_force);
	$script_validation_force = str_replace("*", "181118111188", $script_validation_force);
	$script_validation_force = str_replace("(", "181118118188", $script_validation_force);
	$script_validation_force = str_replace(")", "188118111118", $script_validation_force);
	$script_validation_force = str_replace("-", "888118111181", $script_validation_force);
	$script_validation_force = str_replace("_", "188118118888", $script_validation_force);
	$script_validation_force = str_replace("+", "188118881188", $script_validation_force);
	$script_validation_force = str_replace("=", "188111881188", $script_validation_force);
	$script_validation_force = str_replace("{", "188888111188", $script_validation_force);
	$script_validation_force = str_replace("}", "181888111188", $script_validation_force);
	//$script_validation_force = str_replace("|", $Q_fortisimus_script_a, $script_validation_force);
	$script_validation_force = str_replace(".", "188118111111", $script_validation_force);
	$script_validation_force = str_replace(",", "188118111818", $script_validation_force);
	$script_validation_force = str_replace("<", "118118111188", $script_validation_force);
	$script_validation_force = str_replace(">", "811118111188", $script_validation_force);
	$script_validation_force = str_replace("?", "188118188888", $script_validation_force);
	$script_validation_force = str_replace("/", "888111111188", $script_validation_force);
	$script_validation_force = str_replace("~", "818118111188", $script_validation_force);
	$script_validation_force = str_replace("@", "118118181118", $script_validation_force);

	return $script_validation_force;

}
















function Fortisimus_Hach_to_letter($F_LER_OP)
{

	$script_validation_forse = str_replace("399339333393", "a", $F_LER_OP);
	$script_validation_forse = str_replace("399339333999", "b", $script_validation_forse);
	$script_validation_forse = str_replace("399339393339", "c", $script_validation_forse);
	$script_validation_forse = str_replace("399339933399", "d", $script_validation_forse);
	$script_validation_forse = str_replace("399339333399", "e", $script_validation_forse);
	$script_validation_forse = str_replace("399339393399", "f", $script_validation_forse);
	$script_validation_forse = str_replace("393339333399", "g", $script_validation_forse);
	$script_validation_forse = str_replace("393339339399", "h", $script_validation_forse);
	$script_validation_forse = str_replace("399339333339", "i", $script_validation_forse);
	$script_validation_forse = str_replace("999339333393", "j", $script_validation_forse);
	$script_validation_forse = str_replace("399339339999", "k", $script_validation_forse);
	$script_validation_forse = str_replace("399339993399", "l", $script_validation_forse);
	$script_validation_forse = str_replace("399333993399", "m", $script_validation_forse);
	$script_validation_forse = str_replace("399999333399", "n", $script_validation_forse);
	$script_validation_forse = str_replace("393999333399", "o", $script_validation_forse);
	$script_validation_forse = str_replace("999339333993", "p", $script_validation_forse);
	$script_validation_forse = str_replace("399339333939", "q", $script_validation_forse);
	$script_validation_forse = str_replace("339333333399", "r", $script_validation_forse);
	$script_validation_forse = str_replace("339339333399", "s", $script_validation_forse);
	$script_validation_forse = str_replace("933339333399", "t", $script_validation_forse);
	$script_validation_forse = str_replace("399333333399", "u", $script_validation_forse);
	$script_validation_forse = str_replace("399339339393", "v", $script_validation_forse);
	$script_validation_forse = str_replace("939339333399", "w", $script_validation_forse);
	$script_validation_forse = str_replace("399339399999", "x", $script_validation_forse);
	$script_validation_forse = str_replace("999339333333", "y", $script_validation_forse);
	$script_validation_forse = str_replace("999339333399", "z", $script_validation_forse);
	$script_validation_forse = str_replace("622662666626", "A", $script_validation_forse);
	$script_validation_forse = str_replace("622662666222", "B", $script_validation_forse);
	$script_validation_forse = str_replace("622662626662", "C", $script_validation_forse);
	$script_validation_forse = str_replace("622662266622", "D", $script_validation_forse);
	$script_validation_forse = str_replace("622662666622", "E", $script_validation_forse);
	$script_validation_forse = str_replace("622662626622", "F", $script_validation_forse);
	$script_validation_forse = str_replace("626662666622", "G", $script_validation_forse);
	$script_validation_forse = str_replace("626662662622", "H", $script_validation_forse);
	$script_validation_forse = str_replace("622662666662", "I", $script_validation_forse);
	$script_validation_forse = str_replace("222662666626", "J", $script_validation_forse);
	$script_validation_forse = str_replace("622662662222", "K", $script_validation_forse);
	$script_validation_forse = str_replace("622662226622", "L", $script_validation_forse);
	$script_validation_forse = str_replace("622666226622", "M", $script_validation_forse);
	$script_validation_forse = str_replace("622222666622", "N", $script_validation_forse);
	$script_validation_forse = str_replace("226222662262", "O", $script_validation_forse);
	$script_validation_forse = str_replace("662662666666", "P", $script_validation_forse);
	$script_validation_forse = str_replace("622666666262", "Q", $script_validation_forse);
	$script_validation_forse = str_replace("662666666622", "R", $script_validation_forse);
	$script_validation_forse = str_replace("662662666622", "S", $script_validation_forse);
	$script_validation_forse = str_replace("262662626622", "T", $script_validation_forse);
	$script_validation_forse = str_replace("622666666622", "U", $script_validation_forse);
	$script_validation_forse = str_replace("662662662626", "V", $script_validation_forse);
	$script_validation_forse = str_replace("262662666622", "W", $script_validation_forse);
	$script_validation_forse = str_replace("622662622222", "X", $script_validation_forse);
	$script_validation_forse = str_replace("222662666666", "Y", $script_validation_forse);
	$script_validation_forse = str_replace("222662666622", "Z", $script_validation_forse);
	$script_validation_forse = str_replace("544554544544", "é", $script_validation_forse);
	$script_validation_forse = str_replace("544554544444", "à", $script_validation_forse);
	$script_validation_forse = str_replace("554554544544", "è", $script_validation_forse);
	$script_validation_forse = str_replace("188118111181", "!", $script_validation_forse);
	$script_validation_forse = str_replace("188118111888", '"', $script_validation_forse);
	$script_validation_forse = str_replace("188118181118", "#", $script_validation_forse);
	$script_validation_forse = str_replace("188118811188", "$", $script_validation_forse);
	$script_validation_forse = str_replace("188118111188", "%", $script_validation_forse);
	$script_validation_forse = str_replace("188118181188", "^", $script_validation_forse);
	$script_validation_forse = str_replace("188111111188", "&", $script_validation_forse);
	$script_validation_forse = str_replace("181118111188", "*", $script_validation_forse);
	$script_validation_forse = str_replace("181118118188", "(", $script_validation_forse);
	$script_validation_forse = str_replace("188118111118", ")", $script_validation_forse);
	$script_validation_forse = str_replace("888118111181", "-", $script_validation_forse);
	$script_validation_forse = str_replace("188118118888", "_", $script_validation_forse);
	$script_validation_forse = str_replace("188118881188", "+", $script_validation_forse);
	$script_validation_forse = str_replace("188111881188", "=", $script_validation_forse);
	$script_validation_forse = str_replace("188888111188", "{", $script_validation_forse);
	$script_validation_forse = str_replace("181888111188", "}", $script_validation_forse);
	$script_validation_forse = str_replace("188118111111", ".", $script_validation_forse);
	$script_validation_forse = str_replace("188118111818", ",", $script_validation_forse);
	$script_validation_forse = str_replace("118118111188", "<", $script_validation_forse);
	$script_validation_forse = str_replace("811118111188", ">", $script_validation_forse);
	$script_validation_forse = str_replace("188118188888", "?", $script_validation_forse);
	$script_validation_forse = str_replace("888111111188", "/", $script_validation_forse);
	$script_validation_forse = str_replace("818118111188", "~", $script_validation_forse);
	$script_validation_forse = str_replace("118118181118", "@", $script_validation_forse);

	return $script_validation_forse;
}






function fortisimus_date_to_coder($C_DT)
{

	$script_decripter_fors_machannkik = str_replace("1", "F", $C_DT);
	$script_decripter_fors_machannkik = str_replace("2", "O", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("3", "R", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("4", "A", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("5", "B", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("6", "S", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("7", "M", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("8", "T", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("9", "H", $script_decripter_fors_machannkik);
	$script_decripter_fors_machannkik = str_replace("0", "K", $script_decripter_fors_machannkik);

	return $script_decripter_fors_machannkik;


}

// dechifrement


function fortisimus_coder_to_date($F_OP_RT)
{

	$script_decripter_fors_dechidat = str_replace("F", "1", $F_OP_RT);
	$script_decripter_fors_dechidat = str_replace("O", "2", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("R", "3", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("A", "4", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("B", "5", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("S", "6", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("M", "7", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("T", "8", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("H", "9", $script_decripter_fors_dechidat);
	$script_decripter_fors_dechidat = str_replace("K", "0", $script_decripter_fors_dechidat);

	return $script_decripter_fors_dechidat;

}



function Fortisimus_ajouter_lajan_Hach_to_Numero($pipiti, $pigro)
{

	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhghhhghhghhghghghhhghghghgh", "1", $pipiti);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhghhghhghhghghghhhghghghgh", "2", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghhhgh", "3", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhghghhghhghghghhhghghghgh", "4", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhgghghghgh", "5", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhhhhghhghghghhhghghghgh", "6", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghgghhghghghhhghghghgh", "7", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghghgh", "8", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghgghghghhhghghghgh", "9", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghggghhhghghghgh", "0", $script_decripter_forsy);
	$script_decripter_forsy = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghgghhghghghgh", "+", $script_decripter_forsy);


	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhghhhghhghhghghghhhghghghgh", "1", $pigro);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhghhghhghhghghghhhghghghgh", "2", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghhhgh", "3", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhghghhghhghghghhhghghghgh", "4", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhgghghghgh", "5", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhhhhghhghghghhhghghghgh", "6", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghgghhghghghhhghghghgh", "7", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghghgh", "8", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghgghghghhhghghghgh", "9", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghggghhhghghghgh", "0", $script_decripter_forsyaa);
	$script_decripter_forsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghgghhghghghgh", "+", $script_decripter_forsyaa);

	return $script_decripter_forsy + $script_decripter_forsyaa;

}


function Fortisimus_Retirer_lajan_Hach_to_Numero($pipiti, $pigro)
{
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhghhhghhghhghghghhhghghghgh", "1", $pipiti);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhghhghhghhghghghhhghghghgh", "2", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghhhgh", "3", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhghghhghhghghghhhghghghgh", "4", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhgghghghgh", "5", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhhhhghhghghghhhghghghgh", "6", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghgghhghghghhhghghghgh", "7", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghghgh", "8", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghgghghghhhghghghgh", "9", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghggghhhghghghgh", "0", $script_decripter_faorsyaa);
	$script_decripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghgghhghghghgh", "+", $script_decripter_faorsyaa);

	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhghhhghhghhghghghhhghghghgh", "1", $pigro);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhghhghhghhghghghhhghghghgh", "2", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghhhgh", "3", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhghghhghhghghghhhghghghgh", "4", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhgghghghgh", "5", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhhhhghhghghghhhghghghgh", "6", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghgghhghghghhhghghghgh", "7", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghghhhghghghgh", "8", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghgghghghhhghghghgh", "9", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghggghhhghghghgh", "0", $script_deacripter_faorsyaa);
	$script_deacripter_faorsyaa = str_replace("hgghgghghhghhhhgghhghhghhhhhhghhghhghghgghhghghghgh", "+", $script_deacripter_faorsyaa);

	return $script_deacripter_faorsyaa - $script_decripter_faorsyaa;

}




function Fortisimus_coder_to_linck($CFT_OP)
{

	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("1", "z", $CFT_OP);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("2", "k", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("3", "q", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("4", "j", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("5", "e", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("6", "g", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("7", "x", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("8", "b", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("9", "p", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("0", "l", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("F", "w", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("O", "r", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("R", "h", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("T", "f", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("I", "n", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("M", "d", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("U", "o", $kantitekob_pou_machq13nmTyzm_code_desange);
	$kantitekob_pou_machq13nmTyzm_code_desange = str_replace("S", "v", $kantitekob_pou_machq13nmTyzm_code_desange);

	return $kantitekob_pou_machq13nmTyzm_code_desange;

}

function Fortisimus_decoder_to_linck($K_OpFt)
{

	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("z", "1", $K_OpFt);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("k", "2", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("q", "3", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("j", "4", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("e", "5", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("g", "6", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("x", "7", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("b", "8", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("p", "9", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("l", "0", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("w", "F", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("r", "O", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("h", "R", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("f", "T", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("n", "I", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("d", "M", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("o", "U", $kantitekob_pou_machq13nmTyzm_code_desangedk);
	$kantitekob_pou_machq13nmTyzm_code_desangedk = str_replace("v", "S", $kantitekob_pou_machq13nmTyzm_code_desangedk);

	return $kantitekob_pou_machq13nmTyzm_code_desangedk;
}




function fortisimus_sensur_config($S_CFG)
{

	$latablesdes_sencures_FORTISIMUS = str_replace("pute", "prostituée", $S_CFG);
	$latablesdes_sencures_FORTISIMUS = str_replace("palope", "prostituée", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("bite", "Penis", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("femme facile", "Int&eacute;r&eacute;ss&eacute;e", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("seins", "poitrine", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("nichons", "poitrine", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("fesses", "posterieurs", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("niquer", "embrasser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("baiser", "embrasser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("succer", "embrasser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("troncher", "embrasser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("défoncer", "Prendre du plaisir", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("tringler", "abuser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("violer", "abuser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("tringler", "abuser", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("sodomiser", "Prendre du plaisir", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("pédophilie", "abus sur mineur", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("pisser", "pipi", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("caca", "ses besoins", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("merde", "arreter", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("va te faire mettre", "Laisse moi tranquile", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("enculé", "tu m'ennuis", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("cocaine", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("ecstasy", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("mdma", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("crystal meth", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("champignon magique", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("lsd", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("ghb", "drogue", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("nain", "de petie taille", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("naine", "de petie taille", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("terrorisme", "actes Hinnumains", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("terroriste", "mechant", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("terroristes", "mechants", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("nazis", "occupant", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("je vais te tuer", "Laisse moi tranquile", $latablesdes_sencures_FORTISIMUS);
	$latablesdes_sencures_FORTISIMUS = str_replace("sal ordure", "mechant", $latablesdes_sencures_FORTISIMUS);
	return $latablesdes_sencures_FORTISIMUS;
}









?>