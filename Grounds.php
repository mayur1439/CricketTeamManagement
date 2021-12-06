<html>
    <style>
        td{
                   width:30%;
                    padding: 40px;
                   font-size: 30px;
                   
                 }
                 table{
                font-family: arial,sans-serif;
                border-collapse: collapse;
                width: 50%;
                
                 }
    </style>
    <body>
        <center>
        <table>
             <?php           try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select * from grounds');
		while($r=$query->fetch()){
                        $gname=$r['gname'];
                        $g_photo=$r['g_photo'];
                echo"<tr><td><img src=$g_photo height=100 weight=100></td><td><a href=GroundDetails.php?var=$gname>$gname</a></td></tr>";
                    }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>
        </table>
        </center>
    </body>
</html>