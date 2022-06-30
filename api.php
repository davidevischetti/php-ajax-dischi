<?php
    include_once __DIR__ . '/data/data.php';

    header('Content-type: application/json');

    echo json_encode($dischi_arr);

?>