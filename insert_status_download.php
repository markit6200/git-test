<?php
include_once("db_connect.php");
// $conn = mysqli_connect("localhost", "root", "", "report_dpa");
if(isset($_POST["RequestID"]))


{
    $RequestID = mysqli_real_escape_string($conn, $_POST["RequestID"]);
//  $query = "DELETE FROM user WHERE id = '".$_POST["id"]."'";

$query ="INSERT INTO LOG_DOWNLOAD (RequestID, DownloadAt)  VALUES('$RequestID' ,NOW())  ";
 mysqli_query($conn, $query);

}
?>