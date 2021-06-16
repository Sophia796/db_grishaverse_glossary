<?php
function sucheverarbeiten($search, $result_page){
    if (isset($_POST[$search])) {
        $x = $_POST[$search];
    } else {
        $x = '';
    }

    header('Location:'. $result_page .'?'. $search .'=' . $x);
}
?>