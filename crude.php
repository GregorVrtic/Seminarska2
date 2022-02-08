<?php include 'povezava.php';
if(isset($_POST['save'])) {
    $name = $_POST["name"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $naslov = $_POST["naslov"];

    $sql="INSERT INTO crud (ime, priimek, email, naslov)
    VALUES ('$name','$lastname','$email','$naslov')";
    $result=mysqli_query($conn, $sql);
    if($result) {
        header("Location: crude.php?uspesenvnos");
        exit();
       } else {die(mysqli_error($conn));
      }
  }
?>

<!DOCTYPE html>
<html lang="eng" dir="ltr">
<head>  
    <meta charset="utf-8">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <title class="title">GregorVrtichPHP</title>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="css/style.css">
 </head>
    <nav>
        <div class="wrapper">
                <a href="index.php">
                    <img src="img/LogoVrtich.svg" alt="Blogs_logo">
                <ul class="navigation">
                    <li><a href="index.php">Domov</a></li>
                    <li><a href="ajax.php">Ajax</a></li>
                    <li><a href="restapi.php">Rest Api</a></li> 
                    <?php 
                    if(isset($_SESSION["IME"])){
                        echo"<li><a href='profile.php'>Profile page</a></li>";
                        echo"<li><a href='includes/logout.inc.php'>Log out</a></li>";
                    } else {
                      echo "<li><a href='signup.php'>Vpis</a></li>";
                      echo "<li><a href='login.php'>Prijava</a></li>";
                    }
                    ?>    
                    <li><a href="crude.php">Crude</a></li>    
               </ul>
        </div>    
        </nav>
  </head>

<body>
    <table class="table">
    <thead>
        <tr class="trid">
            <th scope="col">CRUD ID</th>
            <th scope="col">Ime</th>       
            <th scope="col">Priimek</th>      
            <th scope="col">Email</th>          
            <th scope="col">Naslov </th>    
            <th scope="col">Možnosti </th>        
            </tr>
    </thead>

    <?php 
$sql="SELECT * FROM crud";
$result = mysqli_query($conn, $sql);
if($result) {
    while($row=mysqli_fetch_assoc($result)) {
        $id=$row['crude_id'];
        $name=$row['ime'];
        $lastname=$row['priimek'];
        $email=$row['email'];
        $naslov=$row['naslov'];
        echo '<tr class="crud-vnos">
       <th scope="row">' .$id. '</th>
       <td>' .$name . '</td>
       <td>' .$lastname . '</td>
       <td>' .$email . '</td>
       <td>' .$naslov . '</td>
        <td>
        <button class="posodobi"><a href="posodobi.php?posodobiid='.$id.'">Posodobi</a></button>
        <button class="delete"><a href="includes/process.inc.php?deleteid='. $id .'">Izbriši</a></button>
        </td>
       </tr>';
    }
}
?>

<td>
<div class="crude_container">
    <form method="post">
        <div class="form-group">
          <label class="lable">Ime</label>
         <input type="text" name="name" class="label-vnos" placeholder="Vnesite vaše ime">
         </div>
            <div class="form-group">
                <label class="lable">Priimek</label>
                <input type="text" name="lastname" class="label-vnos"  placeholder="Vnesite vaš priimek">
                </div>
            <div class="form-group">
                <label class="lable">Email address</label>
                <input type="text" name="email" class="label-vnos" placeholder="Vnesite vaš email">
            </div>
            <div class="form-group">
            <label class="lable">Kraj bivanja</label>
            <input type="text" name="naslov" class="label-vnos" placeholder="Vnesite vaš kraj bivanja">
        </div>
      <button class="save" type="submit" name="save">Shrani</button>
    </form>
</div>
</td>

</body>
<?php 
    include_once 'footer.php'
    ?>