<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Tab icon -->
    <link rel="icon" href="./reusable_components/ImagesAndVideos/logo.png" />

    <!-- Font awesome icons cdn -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>PUREGAS</title>
  </head>
  <body>

  <!-- Include Navbar -->
    <?php include "./reusable_components/php-components/navbar.php" ?>

    <!-- Include sections from ProfilePageComponents -->
    <?php include "./ProfilePageComponents/AboutUs.php"?>
    <?php include "./ProfilePageComponents/OurPeople.php"?>
    <?php include "./ProfilePageComponents/CalculateCost.php"?> 

    <!-- Include footer -->
    <?php include "./reusable_components/php-components/footer.php" ?>
   
  </body>
</html>
