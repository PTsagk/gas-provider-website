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
