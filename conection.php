<?php

$con=mysqli_connect("localhost","root","","mysqlicrud");
if (!$con) {
    echo "Error".mysqli_connect_error();
}else {
    echo 'Successfully!';
}
?>