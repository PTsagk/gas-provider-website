<!-- Link the nabar.css stylesheet -->
<link rel="stylesheet" href="./reusable_components/css/navbar.css" />

<nav>
  <img src="./reusable_components/ImagesAndVideos/logo.png" alt="logo" />
  <div id="links">
    <a href="./index.php">Home</a>
    <a href="./profile.php">Profile</a>
    <a href="./pricing.php">Pricing</a>
    <a href="./contact.php">Contact</a>
    <a href="./admin.php">Admin</a>
  </div>

  <!-- This will be displayed in mobile view (widht<1100px) -->
  <div id="hamburger-menu">
    <i class="fa-solid fa-bars"></i>
  </div>
</nav>


<!-- Mobile menu functionality -->
<script>

  // Access the mobile button and the links container
  const mobileMenuButton = document.getElementById("hamburger-menu");
  const mobileMenuContainer = document.getElementById("links");

  // Menu by default will be closed
  let menuOpen = false;

  // On click of the mobile button
  mobileMenuButton.addEventListener("click", () => {

    // If menu was opened then close
    if (menuOpen) {

      // Make the button icon bars
      mobileMenuButton.innerHTML = `<i class="fa-solid fa-bars"></i>`;

      // Links slide left out of view
      mobileMenuContainer.style.left = "-100%";

      menuOpen = false;
    } 
    
    // Else if the menu was closed open
    else {

      // Make the button icon x mark
      mobileMenuButton.innerHTML = `<i class="fa-sharp fa-solid fa-xmark"></i>`;

      // Links slide in the screen
      mobileMenuContainer.style.left = 0;

      menuOpen = true;
    }
  });

</script>