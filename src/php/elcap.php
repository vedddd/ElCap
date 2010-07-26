<?php
#header('Content-type: application/txt');
#header('Content-Disposition: attachment; filename="day.txt"');
$status = $_GET['status'];

if($status != null) { #get the camera status
  $state = elphel_get_state();
  echo "state=$state\n";
  $quality = elphel_get_P_value(ELPHEL_QUALITY);
  echo "quality=$quality\n";
  $autoexp = elphel_get_P_value(ELPHEL_AUTOEXP_ON);
  echo "autoexp=$autoexp\n";

  $dcm_hor = elphel_get_P_value(ELPHEL_DCM_HOR);
  echo "dcm_hor=$dcm_hor\n";
  $dcm_vert = elphel_get_P_value(ELPHEL_DCM_VERT);
  echo "dcm_vert=$dcm_vert\n";

  $actual_width = elphel_get_P_value(ELPHEL_ACTUAL_WIDTH);
  echo "actual_width=$actual_width\n";
  $actual_height = elphel_get_P_value(ELPHEL_ACTUAL_HEIGHT);
  echo "actual_height=$actual_height\n";

  $sensor_width = elphel_get_P_value(ELPHEL_SENSOR_WIDTH);
  echo "sensor_width=$sensor_width\n";
  $sensor_height = elphel_get_P_value(ELPHEL_SENSOR_HEIGHT);
  echo "sensor_height=$sensor_height\n";
  
  $expos = elphel_get_P_value(ELPHEL_EXPOS);
  echo "expos=$expos\n";
 }
 else {
   $autoexp = $_GET['autoexp'];
   if($autoexp != null) elphel_set_P_value(ELPHEL_AUTOEXP_ON, $autoexp); // on/off autoexp

   $dcm_hor = $_GET['dcm_hor'];
   if($dcm_hor != null) elphel_set_P_value(ELPHEL_DCM_HOR, $dcm_hor);

   $dcm_vert = $_GET['dcm_vert'];
   if($dcm_vert != null) elphel_set_P_value(ELPHEL_DCM_VERT, $dcm_vert);

   $expos = $_GET['expos'];
   if($expos != null) elphel_set_P_value(ELPHEL_EXPOS, $expos);

   elphel_program_sensor(1);
   echo "done=1\n";
 }
?>