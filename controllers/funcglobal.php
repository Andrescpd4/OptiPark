<?php
function titulo($tit, $ico){
	$html = "";
	$html .= "<h2>";
		$html .= "<i class='".$ico."'></i>&nbsp;&nbsp;&nbsp;".$tit."<h2>";
	$html .= "</h2>";
	$html .= "<hr>";
	echo $html;
}
?>