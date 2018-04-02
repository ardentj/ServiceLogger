<?php
// check if a form was submitted
$txt = "output.txt"
if( !empty( $_POST ) ){
// convert form data to json format
//$json = json_encode( $_POST );
// make sure there were no problems
//$data = $_POST['field1'] . '-' . $_POST['field2'] . "\n";
//$data = $_POST;
$fh = fopen($txt, 'a'); 
$txt=$_POST
//$ret = fwrite('output.txt', $data, FILE_APPEND | LOCK_EX);
//if( json_last_error() != JSON_ERROR_NONE ){
//exit();  // do your error handling here instead of exiting

fwrite($fh,$txt); // Write information to the file
fclose($fh); 

//if($ret === false) {
        die('There was an error writing this file');
    }
 //   else {
  //      echo "$ret bytes written to file";

}
// write to file
//fwrite( $json, 'output.txt' );

?>