<?php 
//database connection

require_once("../includes/config.php");


$query= "SELECT * FROM Blogs ORDER BY id DESC";
$result = mysqli_query($conn, $query);





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <title>Blog - Website </title>
    <script>
      function showResults(str)
      {
        if (str.length==0)
        {
          document.getElementById("livesearch").innerHTML="";

          return;
        }
        var xmlhttp=new XMLHttpRequest();
        xmlhttp.onreadystatechange=function()
        {
          if (this.readyState==4 && this.status==200)
          {
            document.getElementById("livesearch").innerHTML=this.responseText;


          }
        }

        xmlhttp.open("GET","livesearch.php?q="+str,true);
        xmlhttp.send();
      }
    </script>
</head>
<body>
     <?php include '../includes/header.php'; ?>
    <header class="header">
      <div class="container">
        <div class="content">
          <div>
            <p class="badge">my blog</p>
            <h1>Resources and insights</h1>
            <p>
              The latest feeds, interviews, technologies, and resources.
            </p>
          </div>
          <form action="livesearch.php" method="">
            <input class="search-bar" id="livesearch" onkeyup="showResult(this.value)" type="search" placeholder="Search...." />
          </form>
        </div>
         <aside class="badge"><a href="create.php">Add Post</a></aside>
      </div>
    </header>
<?php
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
        <section class="main-content">
          <div class="container grid">
            <div class="card">
              <div class="card-header">
              <h2><?php echo $row['title']; ?></h2>
              <img src="https://picsum.photos/400/300?random=<?php echo $row['id']; ?>" alt="Blog Image" />
              <p><?php echo $row['content']; ?></p>
                      <small class="load-more">Posted on <?php echo $row['created_at']; ?></small>
              <div> <a  href="edite.php">Edit</a></div>
                     <div style="width: fit-content; background: red;"> <a  href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></div>
            </div>
          </div>
        </section>
        <div class="container load">
      <p class="load-more"><i class="fas fa-arrow-down"></i> Load more</p>
    </div>
        <?php
    }

mysqli_close($conn);
?>
  <?php include '../includes/footer.php'; ?>
</body>
</html>
