 <!-- Landing page styling -->
 <style>
  main {
    background: url("https://www.b2eu-consulting.eu/img/website/blog_posts/thumbs/webp.net-resizeimage-63.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    height: 92vh;
    position: relative;
    z-index: 1;
    color: white;
    display: flex;
    justify-content: center;
    flex-direction: column;
  }

  main * {
    position: relative;
    z-index: 2;
  }

  .main-container {
    width: 100%;
    height: 50%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
  }
  .black-background {
    background-color: rgba(0, 0, 0, 0.5);
    width: 100%;
    height: 100%;
    position: absolute;
    z-index: 1;
  }

  main h1 {
    margin: 0;
    font-size: 5rem;
  }

  main h3 {
    font-size: 4rem;
    font-weight: lighter;
    margin-bottom: 0;
  }

  main p {
    font-weight: 100;
    color: rgb(211, 211, 211);
    font-weight: 100;
    font-size: 1.5rem;
  }

  main button {
    background-color: transparent;
    border: none;
    color: white;
    cursor: pointer;
  }

  .learn-more {
    background-color: #659e31;
    color: white;
    padding: 1rem;
    border-radius: 10px;
    font-weight: bold;
    font-family: sans-serif;
    font-size: 1rem;
    text-decoration: none;
    width: 100px;
    text-align: center;
    border: 1px solid #659e31;
  }
  .learn-more:hover {
    background-color: white;
    color: #659e31;
  }

  .fa-chevron-right {
    font-size: 8rem;
    transition: all 0.2s ease-in-out;
    outline: none;
  }
  .fa-chevron-right:hover {
    transform: translateX(20px);
  }
  .welcome-text {
    width: 60%;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: hidden;
    box-sizing: border-box;
  }

  #text-carousel {
    font-size: 3rem;
    width: 300%;
    display: flex;
    transition: all 1s ease;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }
  #text-carousel div {
    display: inline-block;
    white-space: nowrap;
    width: 33.33%;
    padding: 0;
    margin: 0;
    box-sizing: border-box;
  }
  #circles {
    display: flex;
    width: 100%;
    justify-content: center;
    margin-top: 2rem;
  }
  .circle {
    background-color: white;
    width: 10px;
    height: 10px;
    border-radius: 100%;
    margin: 0.5rem;
  }
  .selected-circle {
    background-color: #659e31;
  }
</style>

<!-- Ladning page -->
<main>
  <!-- black transparent effect -->
  <div class="black-background"></div>

  <div class="main-container">
    <div class="welcome-text">
      <h1>PUREGAS</h1>

      <!-- Carousel of words -->
      <div id="text-carousel">
        <!-- Only one of these will be visible at a time -->
        <div>The pipeline professionals.</div>
        <div>Always at your service.</div>
        <div>Offering the lowest prices.</div>

      </div>
      <p>We provide gas like no one else does.</p>
      <a href="./profile.php" class="learn-more">Learn More</a>
    </div>

    <!-- Button that moves the carousel -->
    <button><i class="fa-solid fa-chevron-right"></i></button>
  </div>

  <!-- Circles that indicate the position of the carousel -->
  <div id="circles">
    <div class="circle"></div>
    <div class="circle"></div>
    <div class="circle"></div>
  </div>

</main>

<!-- Carousel functionality -->
<script>
  // Get the references to the html elements
  const arrowButton = document.querySelector(".fa-chevron-right");
  const carousel = document.getElementById("text-carousel");
  const circles = document.getElementById("circles").children;
  // Carousel functionality
  let position = 0; // Carousel position
  circles[0].style.backgroundColor = "#659e31"; // First cirlce is green to indicate we see the first element of the carousel

  arrowButton.addEventListener("click", (e) => {
    e.preventDefault();

    // If we haven't reach the end of the carousel go to next item
    if (position > -66.66) {
      position -= 33.33;
    }
    // Else go back to start
    else {
      position = 0;
    }

    // Index is for which cirlce we want to color
    const index = position / -33.33;

    // Moving the carousel based on the position variable
    carousel.style.transform = `translateX(${position}%)`;

    // Make all the circles white
    circles[0].style.backgroundColor = "white";
    circles[1].style.backgroundColor = "white";
    circles[2].style.backgroundColor = "white";

    // Now color the selected circle
    circles[index].style.backgroundColor = "#659e31";
  });
</script>

 <!-- Home page responsive styles -->
 <style>
  @media screen and (max-width: 780px) {
    main h1 {
      margin: 0;
      font-size: 3rem;
    }

    main p {
      font-weight: 100;
      color: rgb(211, 211, 211);
      font-weight: 100;
      font-size: 1rem;
    }
    .main-container {
      padding: 1rem;
      box-sizing: border-box;
    }
    .welcome-text {
      width: 100%;
    }
    #text-carousel {
      font-size: 1.5rem;
    }
    .fa-chevron-right {
      font-size: 4rem;
      margin: 0;
    }

  }
</style>