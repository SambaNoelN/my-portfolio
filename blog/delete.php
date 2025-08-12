<?php 
include("../includes/config.php");

if (isset($_GET['id']))
{
    $id = $_GET['id'];
    // Perform delete operation using the $id
    $query = "DELETE FROM Blogs WHERE id = $id";
    // Execute the query
    $result = mysqli_query($conn, $query);
    if ($result) {
        echo "Post deleted successfully.";
    } else {
        echo "Error deleting post: " . mysqli_error($conn);
    }
    header("Location: index.php");
    exit();
}

?>