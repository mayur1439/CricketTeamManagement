<html>
    <head>
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
    </head>

 <body>
        <center>
            <table>
 <?php
        try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select * from players_details');
		while($r=$query->fetch()){
                        $pname=$r['pname'];
			$photo=$r['photo'];
              echo"<tr><td><img src=$photo height=130 weight=130></td><td><a href=ManangePlayer.php?var1=$pname>$pname</a></td></tr>";
            
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