<?php
try{
        $name=$_POST['pname'];
        $age= $_POST['page'];
        $count=$_POST['pcountry'];
        $birth= $_POST['pbirth'];
        $type=$_POST['ptype'];
        $runs=$_POST['prun'];
        $wicket=$_POST['pwicket'];
        $cost=$_POST['pcost'];
       
        $target_dir = "statics/";
        $pic_name=basename($_FILES["ppic"]["name"]);
        $target_file = $target_dir .$pic_name;
        move_uploaded_file($_FILES['ppic']['tmp_name'], $target_file); 
        printf($name,$target_file);
        $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	//echo "Connection is established...<br/>";
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql="insert into players_details (pname,page,country,birthplace,ptype,runs,wickets,cost,photo) values ('$name','$age','$count','$birth','$type',
                '$runs','$wicket','$cost','$pic_name')";
	$query=$dbhandler->query($sql);
	//echo "Data is inserted successfully";
	
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>