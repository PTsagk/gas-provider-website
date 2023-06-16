 <!-- newsletter section styling -->
<style>
  .newsletter {
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .newsletter h1 {
    color: #659e31;
    margin-bottom: 2rem;
  }

  .newsletter form {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background-color: #659e31;
    width: 30%;
    height: 40vh;
    border-radius: 10px;
    padding: 2rem 0;
  }

  .newsletter i {
    font-size: 4rem;
    color: white;
  }

  .newsletter input {
    background-color: white;
    border: none;
    outline: none;
    margin: 1rem;
    padding: 1rem;
    width: 50%;
    border-radius: 10px;
  }

  .newsletter input::placeholder {
    color: #bbbbbb;
    font-weight: bold;
    text-align: center;
    font-size: 1rem;
  }

  .newsletter button {
    background-color: white;
    color: #659e31;
    font-weight: bold;
    border: none;
    padding: 1rem 2rem;
    border-radius: 10px;
    margin: 2rem;
    border: 2px solid white;
    text-align: center;
  }

  .newsletter button:hover {
    background-color: transparent;
    color: white;
  }
</style>

<!-- Newsletter form -->
<section class="newsletter">
  <h1 class="title">Newsletter</h1>
  <form method="post" action="">
    <i class="fa-sharp fa-solid fa-envelope"></i>
    <input type="text" placeholder="Username" name="username"/>
    <input type="text" placeholder="Name" name="name"/>
    <input type="email" placeholder="Email" name="email"/>
    <button type="submit">Submmit</button>
  </form>
</section>

 <!-- Home page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {

    .newsletter form {
      width: 50%;
    }
  }

  @media screen and (max-width: 780px) {
   
    .newsletter form {
      width: 80%;
    }
  }
</style>

<!-- Add subscribe request to database -->
<?php 

  // Connection
  $host_name = "localhost";
  $user_name = "root";
  $password = "";
  $db_name = "gasdb";

  $conn = mysqli_connect($host_name, $user_name, $password, $db_name);

  if (!$conn) {
    echo "Failure: Could not connect to database!";
    exit();
  }

  // Check if inputs are set
  if (isset($_POST['username']) && isset($_POST['name']) && isset($_POST['email'])) {

    // trim removes extra whitespace characters from both sides of the string
    $username = trim($_POST['username']);
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);

    // If inputs are not empty
    if (!empty($username) && !empty($name) && !empty($email))  {

      // Prepare and execute insertion statement
      $stmt = $conn->prepare("INSERT INTO subscribers(username, `name`, email) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $username, $name, $email);
      $result = $stmt->execute();

      if (!$result) {
        echo '<script>alert("There was an error.")</script>';
      } 

      // Close statement
      $stmt->close();
    }
    // If not all inputs are set show message
    else{
      echo '<script>alert("All fields are required.")</script>';
    }
    
    // Close connection
    mysqli_close($conn);
  
  }
?>
