 <!-- Login form styling -->
 <style>
  .admin-login {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .admin-login h1 {
    color: #659e31;
  }

  .admin-login form {
    display: flex;
    flex-direction: column;
    align-items: start;
    width: 40%;
    max-width: 500px;
    border: 2px solid #659e31;
    padding: 2rem 6rem;
    box-sizing: border-box;
    border-radius: 10px;
  }

  .admin-login label {
    color: #659e31;
    font-weight: bold;
    width: 70%;
  }
  .admin-login input {
    padding: 0.5rem 1rem;
    border: 2px solid #659e31;
    background-color: white;
    border-radius: 10px;
    margin-bottom: 1rem;
    outline: none;
    width: 100%;
    box-sizing: border-box;
  }

  .admin-login button {
    width: 30%;
    align-self: center;
    border: 2px solid #659e31;
    background-color: #659e31;
    color: white;
    padding: 1rem 0.5rem;
    border-radius: 10px;
    cursor: pointer;
    font-weight: bold;
    font-size: 1rem;
  }

  .admin-login button:hover {
    background-color: white;
    color: #659e31;
  }
</style>


<!-- Admin login section -->
<section class="admin-login">
  <h1 class="title">Admin Login</h1>
  <form action="" method="post">
    <label for="username">Username</label>
    <input type="text" id="username" name="username"/>
    <label for="password">Password</label>
    <input type="password" name="password"/>
    <button type="submit">Login</button>
  </form>


<!-- Login and data -->
<?php 

  // If cookie is set admin has logged in the last 24 hours 
  // load data without login
  if(isset($_COOKIE["username"]) && $_COOKIE["username"]=='admin' && isset($_COOKIE["password"]) && $_COOKIE["password"]=="Root123"){
    showTable();
  }

  // If no cookie found
  else if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];  

    // Check if the login credentials are correct
    if($username=='admin' && $password=="Root123"){

      // If credentials are correct set cookie with expiration in 24 hours 
      setcookie("username","admin",time()+(86400*30),'/');
      setcookie("password","Root123",time()+(86400*30),'/');
      
      // And display data
      showTable();
    }else{
      // If credentials incorrect show message
      echo '<script>alert("Sorry you are not the admin.")</script>';
    }
  }

  // Function for geting the data from the database and displaying them in table
  function showTable(){

    //Connection
    $host_name = "localhost";
    $user_name = "root";
    $password = "";
    $db_name = "gasdb";
    $conn = mysqli_connect($host_name, $user_name, $password, $db_name);

    if (!$conn) {
        echo "Failure: Could not connect to database!";
        exit();
    }

    // Get data from table requests
    $result=mysqli_query($conn,"SELECT * FROM requests");
   
    if (!$result) {
      echo '<script>alert("There was an error.")</script>';
    }
    if($result->num_rows>0){
      // Display headers of the table
      echo "<table>";
      echo "<tr>";
      echo "<th>Όνομα</th>";
      echo "<th>Τηλέφωνο</th>";
      echo "<th>Τμήμα</th>";
      echo "<th>Email</th>";
      echo "<th>Θέμα</th>";
      echo "<th>Μήνυμα</th>";
      echo "</tr>";

      // For each reqeuest found print it in the table format
      while($data=mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$data['name']."</td>";
        echo "<td>".$data['phone_number']."</td>";
        echo "<td>".$data['department']."</td>";
        echo "<td>".$data['email']."</td>";
        echo "<td>".$data['subject']."</td>";
        echo "<td>".$data['message']."</td>";
        echo "</tr>";
      }
      echo "</table>";
    } else{
      echo "<h1>No requests found.</h1>";
    }
      
    

    // Close sql connection
    mysqli_close($conn);
  }
?>
</section>

<!-- Adming page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    .admin-login form {
      width: 90%;
      padding: 2rem;
    }
    .admin-login input {
      width: 100%;
    }
  }

  @media screen and (max-width: 780px) {
    .admin-login form {
      width: 90%;
      padding: 2rem;
    }
    .admin-login input {
      width: 100%;
    }
  }
</style>