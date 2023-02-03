<?php
 $conn = mysqli_connect('localhost', 'root', '', 'greenstore1');

 if (!$conn) {
 	echo mysqli_connect_error() or die(mysqli_error($con));
 }