<?php
	require_once('../../common/connector/scheduler_connector.php');
	include ('../../common/config.php');

	$scheduler = new schedulerConnector($res, $dbtype);
	$scheduler->render_table("eventos","event_id","start_date,end_date,event_name,details");
?>
