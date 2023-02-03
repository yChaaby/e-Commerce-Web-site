<?php

include("config.php");
header("Location:home-02.html");

    $sql = " DELETE FROM user WHERE ID_User='3' ";
    $result = $conn->query($sql);

?>