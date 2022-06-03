<?php
$con = mysqli_connect("localhost", "root", "", "flowerpower_cms");

if (mysqli_connect_errno()) {
    echo "The Connection was not established: " . mysqli_connect_error();
}

//$output ="";
//if (isset($_POST['zoek_product'])) {
//    $input = $_POST['input'];
//
//    if (!empty($input)) {
//        $query = "SELECT * FROM zoek_product WHERE product_title LIKE '%$input%'";
//        $res = mysqli_query($connect, $query);
//
//        $output .= "
//        <table class='table table-bordered table-striped'>
//        <tr>
//        <th>product title</th>
//</tr>";
//    }
//}


function getCats(){
    global $con;
    $get_cats = "select * from categories";

    $run_cats = mysqli_query($con, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {
        $cat_id = $row_cats['cat_id'];

    }

}

?>