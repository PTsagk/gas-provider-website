<!-- Contact us form styling  -->
<style>
  .contact-us {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .contact-us h1 {
    color: #659e31;
    text-decoration: underline;
    text-underline-offset: 10px;
    margin-bottom: 0;
  }

  .contact-us form {
    width: 50%;
    display: flex;
    flex-direction: column;
    align-items: center;
    background: linear-gradient(
      45deg,
      rgb(101, 158, 49),
      rgba(101, 158, 49, 0.8)
    );
    padding: 3rem 4rem;
    box-sizing: border-box;
    border-radius: 10px;
    margin: 2rem;
  }

  .contact-us form div {
    display: flex;
    width: 100%;
    box-sizing: border-box;
  }
  .contact-us form input,
  select {
    width: 50%;
    padding: 1rem;
    outline: none;
    border: none;
    margin: 1rem;
    box-sizing: border-box;
    border-radius: 10px;
    background-color: white;
    color: black;
  }

  #subject {
    width: 95%;
  }

  textarea {
    width: 95%;
    min-height: 20vh;
    outline: none;
    resize: none;
    border: none;
    border-radius: 10px;
    padding: 1rem;
    box-sizing: border-box;
    font-family: sans-serif;
    background-color: white;
    color: black;
  }

  .contact-us form button {
    background-color: white;
    color: #659e31;
    font-weight: bold;
    font-size: 1rem;
    border: none;
    border: 2px solid white;
    padding: 1rem 1.5rem;
    margin-top: 1rem;
    border-radius: 10px;
  }

  .contact-us form button:hover {
    background-color: transparent;
    color: white;
  }
</style>

<!-- Contact us form -->
<section class="contact-us">
  <h1 class="title">Contact us</h1>
  <form action="" method="post">
    <div>
      <input type="text" placeholder="Όνομα" name="name"/>
      <input type="number" placeholder="Τηλέφωνο" name="phone_number"/>
    </div>
    <div>
      <select id="departments" selected="customer-support" name="department">
        <option value="customer-support">Τμήμα Υποστήριξης</option>
        <option value="sales-department">Τμήμα Πωλήσεων</option>
        <option value="repairs-department">Τμήμα Επισκευών</option>
        <option value="logistics-department">Λογιστήριο</option>
      </select>
      <input type="email" placeholder="Email" name="email"/>
    </div>
    <input type="text" id="subject" placeholder="Θέμα" name="subject"/>
    <textarea name="message" id="message" placeholder="Μήνυμα" name="message"></textarea>
    <button type="submit">Submit</button>
  </form>
</section>

 <!-- Contact us page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    .contact-us form {
      padding: 1rem;
      width: 90%;
    }
    .contact-us form input,
    select {
      margin: 0.5rem;
    }
  }

  @media screen and (max-width: 780px) {
    .contact-us form {
      padding: 1rem;
      width: 90%;
    }
    .contact-us form input,
    select {
      margin: 0.5rem;
    }
  }
</style>

<!-- Add contact request to database -->
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


  // If inputs are set
  if (isset($_POST['name']) && isset($_POST['phone_number']) && isset($_POST['department']) && isset($_POST['email']) && isset($_POST['subject']) && isset($_POST['message'])) {
    
    // trim removes extra whitespace characters from both sides of the string
    $name = trim($_POST['name']);
    $phone_number = trim($_POST['phone_number']);
    $department = trim($_POST['department']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    // If inputs are not empty
    if (!empty($name) && !empty($phone_number) && !empty($department) && !empty($email) && !empty($subject) && !empty($message))  {

      // Prepare and execute insertion statment 
      $stmt = $conn->prepare("INSERT INTO requests(`name`,`phone_number`,department,email,`subject`,`message`) VALUES (?, ?, ?, ?, ?, ?)");
      $stmt->bind_param("ssssss", $name, $phone_number, $department,$email,$subject,$message);
      $result = $stmt->execute();

      if (!$result) {
        echo '<script>alert("There was an error.")</script>';
      }
      
      // Close the statement
      $stmt->close();
    }else{

      // If not all fields are set or empty show message
      echo '<script>alert("All fields are required.")</script>';
    }
      // Close the connection
      mysqli_close($conn);

  }
?>
