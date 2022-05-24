<!doctype html>
    <?php
//Step1
 $conn = mysqli_connect('localhost','root','','crud')
 or die('Error connecting to MySQL server.');
?>
<html lang="en" class="h-100">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">

    <title>List of User</title>
   
  </head>
  <body class="d-flex flex-column h-100">
    
    <div class="container pt-4 pb-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
            <a class="navbar-brand" href="#">HTML CRUD</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse" id="navbarsExample09">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="create.html">Create</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-md-0">
                <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                </form>
            </div>
        </nav>
    </div>
        
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <h1>List of User</h1>
<script>
function getRow(x) {
//<?php
//$sql = "DELETE FROM users WHERE id=";
//if ($conn->query($sql) === TRUE){
 // echo "Record deleted";
//}else{
//  echo "Error";
//}
//?>
}
</script>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $sql = "SELECT id, first, last FROM users";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
		    while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo '<th scope="row">'.$row["id"].'</th>';
                    echo '<td>'.$row["first"].'</td>';
                    echo '<td>'.$row["last"].'</td>';
                    echo "<td>";
			if(isset($_POST['delete'.$row["id"]])){
			$sql = "DELETE FROM users WHERE id =".$row['id'];
			if ($conn->query($sql) === TRUE){
                echo '<script>';
                echo 'location.reload();';
                echo '</script>';
			}
			}
                        echo '<a href="view.php"><button class="btn btn-primary btn-sm">View</button></a>';
                        echo '<a href="edit.php?edit=<?php echo $row['id'] ?>"><button class="btn btn-outline-primary btn-sm">Edit</button></a>';
                       
			echo '<input type="submit" name="delete'.$row["id"].'" value="Delete" class="btn btn-sm">';
			echo '</form>';
                    echo "</td>";
                    echo "</tr>";
			}
                }else{
		echo "wew no results";
}
                ?>
                </tbody>
            </table>
        </div>
    </main>
      
    <footer class="footer mt-auto py-3">
        <div class="container pb-5">
            <hr>
            <span class="text-muted">
                    Copyright &copy; 2022 | Vince Garces
            </span>
        </div>
    </footer>

    
    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
