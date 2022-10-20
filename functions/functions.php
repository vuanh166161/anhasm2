

<?php
$con = mysqli_connect("localhost", "root","","toys_store");

if(mysqli_connect_errno()){
    echo "The connection was not established: " . mysqli_connect_error();
}

function getCats(){
    
    global $con;
    
    $get_cats="select * from category";

    $run_cats=mysqli_query($con, $get_cats);

    while($row_cats=mysqli_fetch_array($run_cats)){
        $categoryid = $row_cats['categoryid'];

        $categoryname = $row_cats['categoryname'];

        echo "<li><a href='index.php?cat=$categoryid'>$categoryname</a></li>";
    }
}

?>