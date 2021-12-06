<html>
    <style>
        	.floatLeft { 
		width: 79%; 
		float: left; 
		font-size:30px;
		height: 100%;
                }
                .floatRight {
		width: 20%; 
		float: right;
		height: 100%;
                }
                .space{
                    height:50%;
                }
               td{
                   width:50%;
                    padding: 20px;
                    border: 1px ridge;
                   
                 }
                 table{
                font-family: arial,sans-serif;
                border-collapse: collapse;
                width: 100%;
               height:100%;
            }
    </style>
    <body>
        <?php           try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select * from players_details');
		while($r=$query->fetch()){
                    $pname=$r['pname'];
                    $var1=$_GET['var1'];
                    if($var1==$pname)
                    {
					
                        $page=$r['page'];
                        $country=$r['country'];
                        $birthplace=$r['birthplace'];
                        $ptype=$r['ptype'];
                        $runs=$r['runs'];
                        $wickets=$r['wickets'];
                        $cost=$r['cost'];
                        $photo=$r['photo'];
                       ?>
        <center>
        <div class="floatRight">
    <?php        echo"<img src=$photo width=150 height=150>"; ?>
            <div class="space">
            </div>
            <b><a href="">Delete Player</a></b>
        </div>
        </center>
        <center>
        <div class="floatLeft">
        <table>
          <?php  
        echo"<tr><td>Player Name:</td><td>$pname</td></tr>";
        echo"<tr><td>Player Age:</td><td>$page</td></tr>" ;
        echo"<tr><td>country:</td><td>$country</td></tr>";
        echo"<tr><td>birthday:</td><td>$birthplace</td></tr>";
        echo"<tr><td>Player Type:</td><td>$ptype</td></tr>";
        echo"<tr><td>Runs:</td><td>$runs</td></tr>";
        echo"<tr><td>Wickets:</td><td>$wickets</td></tr>";
        echo"<tr><td>Cost</td><td>$cost</td></tr>";
        
                    }
                    }
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}
?>     
</table>
        </div>
        </center>
    </body>
</html>