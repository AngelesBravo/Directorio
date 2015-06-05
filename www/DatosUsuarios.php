<?php
header('Access-Control-Allow-Origin: *');
header("Content-Type: application/json");
 $archivo=$_GET["user"];
        chmod($archivo, 0755);
	
	$campos=explode('%META:FORM{name="%25SYSTEMWEB%25.UserForm"}%',file_get_contents("../../intellibanks/data/Main/".$archivo.".txt"));
    $n=count($campos);
	$campo=explode('%META:FIELD{',$campos[$n-1]);

	$firstname=explode('"',$campo[1]);
	$lastname=explode('"',$campo[2]);
	$titles=explode('"',$campo[3]);
	$email=explode('"',$campo[4]);
	$telephone=explode('"',$campo[5]);
	$mobile=explode('"',$campo[6]);
	$skypeid=explode('"',$campo[7]);
	$department=explode('"',$campo[8]);
	$organization=explode('"',$campo[9]);
	$url=explode('"',$campo[10]);
	$location=explode('"',$campo[11]);
	$region=explode('"',$campo[12]);
	$country= explode('"',$campo[13]);
	$image= explode('"',$campo[14]);
	$statusupdate= explode('"',$campo[15]);
        $todo=array("user"=>$archivo,"firstname"=>$firstname[7],"lastname"=>$lastname[7],"titles"=>utf8_encode ($titles[7]),"email"=>utf8_encode ($email[7]),"telephone"=>$telephone[7],"mobile"=>utf8_encode ($mobile[7]),"skypeid"=>$skypeid[7],"department"=>$department[7],"organization"=>$organization[7],"url"=>utf8_encode ($url[7]),"location"=>$location[7],"region"=>$region[7],"country"=>utf8_encode ($country[7]),"image"=>utf8_encode ("http://www.empowerlabs.com/intellibanks/pub/Main/".$archivo ."/".$image[7]),"statusupdate"=>utf8_encode ($statusupdate[7]));

echo json_encode($todo);
?>