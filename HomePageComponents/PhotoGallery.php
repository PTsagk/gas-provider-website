 <!-- photo gallery section styling -->
<style>
  .photo-gallery {
    padding: 2rem 5rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }
  .photo-gallery h1 {
    color: #659e31;
    margin-bottom: 5rem;
  }

  .images {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
  }

  .images img {
    width: 100%;
    height: 300px;
  }
</style>

<!-- Photo gallery section -->
<section class="photo-gallery">
  <h1 class="title">Φωτογραφίες</h1>
  <div class="images">
    <img
      src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSANtnvgTmT0HAf4M3M6-r_e2Wpn6NjnlIulQ&usqp=CAU"
      alt="gas station image1"
    />
    <img
      src="https://www.worldatlas.com/r/w1200/upload/ce/0d/fe/shutterstock-164419370.jpg"
      alt="gas station image2"
    />
    <img
      src="https://www.offshore-technology.com/wp-content/uploads/sites/20/2019/05/Tanajib-Oil-Field.jpg"
      alt="gas station image3"
    />
    <img
      src="https://www.vdicommunications.com/wp-content/uploads/2014/04/Serving-Oil-and-Gas-Companies-Since-2001.jpg"
      alt="gas station image4"
    />
  </div>
</section>

<!-- Home page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    
    .images {
      grid-template-columns: 1fr 1fr;
    }
  }

  @media screen and (max-width: 780px) {
    
    .photo-gallery {
      padding: 2rem;
    }
    .images {
      grid-template-columns: 1fr;
    }
  }
  </style>