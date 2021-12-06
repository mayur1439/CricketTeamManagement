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
               height:100%
            }
    </style>
    <body>
        <?php           try{
	$dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
	$dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$query=$dbhandler->query('select * from grounds');
		while($r=$query->fetch()){
                   
			$gname=$r['gname'];
                        $var=$_GET['var'];
                     if($var==$gname)
                    {
                        $city=$r['city'];
                        $state=$r['state'];
                        $capacity=$r['capacity'];
                        $g_photo=$r['g_photo'];
                        $location=$r['location'];
                    
                       ?>
        <center>
        <div class="floatRight">
       <?php   echo"<img src=$g_photo width=150 height=150>"; ?>
            <div class="space">
            </div>
            <b><a href="">Delete Ground</a></b>
        </div>
        </center>
        <center>
        <div class="floatLeft">
        <table>
       <?php
        echo"<tr><td>Ground Name:</td><td>$gname</td></tr>"; 
        echo"<tr><td>City:</td><td>$city</td></tr>";
        echo"<tr><td>State:</td><td>$state</td></tr>";
        echo"<tr><td>Capacity:</td><td>$capacity</td></tr>";
        echo"<tr><td>Location:</td><td><a href=$location>location</a></td></tr>";

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
<?php

