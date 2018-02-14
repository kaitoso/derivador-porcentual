<?php
require_once("scheduler_connector.php");

$res=mysql_connect("localhost","root","");
mysql_select_db("horario");

$conn = new SchedulerConnector($res);

$conn->render_table("eventos","id","start_date,end_date,text");

?>
