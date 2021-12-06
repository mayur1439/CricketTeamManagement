<?php

    $gname=$_POST['gname'];
    $date= $_POST['date'];
    $team1=$_POST['team1'];
    $team2=$_POST['team2'];
    $stime=$_POST['stime'];
    $etime=$_POST['etime'];
    $t1=strtotime($date." ".$stime);
    $t2=strtotime($date." ".$etime);
    echo date('d/M/Y h:i:s', $t1).'<br>';
    echo date('d/M/Y h:i:s', $t2).'<br>';
try
   {
    $dbhandler = new PDO('mysql:host=127.0.0.1;dbname=php_cricket','DVM','dvm170829');
    //echo "Connection is established...<br/>";
    $dbhandler->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    $query=$dbhandler->query('select * from fixtures');
    $f=0;
    while($r=$query->fetch())
    {
        $dt1=strtotime($r['date']." ".$r['stime']);
        $dt2=strtotime($r['date']." ".$r['etime']);
        
        if($gname==$r['ground_name'])
        {
            echo date('d/M/Y h:i:s', $dt1).'<br>';
            echo date('d/M/Y h:i:s', $dt2).'<br>';
            if($t1<=$dt1 && $t2>=$dt1)
            {
                $f=1;
                break;
            }
            else if($t1<=$dt2 && $t2>=$dt2)
            {
                $f=1;
                break;
            }
            else if($t1>=$dt1 && $t2 <=$dt2)
            {
                $f=1;
                break;
            }
            else if($t1<=$dt1 && $t2>=$dt2)
            {
                $f=1;
                break;
            }
        }
       
    }
        
        if($f==1)
            echo ' ground is already booked at this time';
        else {
          $sql="insert"
                  . " into fixtures(ground_name,date,stime,etime,team1,team2) values ('$gname','$date','$stime','$etime',
                  '$team1','$team2')";
          $query=$dbhandler->query($sql);
        }
}
catch(PDOException $e){
    echo $e->getMessage();
    die();
    }
?>