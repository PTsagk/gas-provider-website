<!-- Our programms section styling -->
<style>
  .our-programms {
    background: linear-gradient(
      45deg,
      rgb(101, 158, 49),
      rgba(101, 158, 49, 0.8)
    );
    padding: 2rem 5rem;
    box-sizing: border-box;
  }

  .our-programms h1 {
    color: white;
    margin-bottom: 3rem;
  }

  .cards {
    width: 100%;
    height: 80%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    justify-items: center;
  }

  .card {
    width: 50%;
    overflow: hidden;
    border-radius: 10px;
    position: relative;
    display: flex;
    flex-direction: column;
    text-align: center;
    justify-content: center;
    align-items: center;
    padding: 2rem;
  }
  .card i {
    color: #659e31;
    font-size: 4rem;
    position: relative;
    z-index: 2;
  }
  .card h2 {
    color: white;
    position: relative;
    z-index: 2;
    margin: 2rem 0;
  }
  .card a {
    position: relative;
    z-index: 2;
    height: fit-content;
  }

  /* Images and style for cards */
  .home {
    background: url("https://www.shbarcelona.com/blog/en/wp-content/uploads/2017/08/gas-burners.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }

  .company {
    background: url("https://upload.wikimedia.org/wikipedia/commons/thumb/3/3a/M%C3%BCnster%2C_LVM%2C_B%C3%BCrogeb%C3%A4ude_--_2013_--_5149-51.jpg/1200px-M%C3%BCnster%2C_LVM%2C_B%C3%BCrogeb%C3%A4ude_--_2013_--_5149-51.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .student {
    background: url("https://thehill.com/wp-content/uploads/sites/2/2022/03/ca_collegeenrollment_istock.jpg?strip=1");
    background-repeat: no-repeat;
    background-size: cover;
  }

  .farmer {
    background: url("https://ik.imagekit.io/efarm/website/HOME_search_cover_70d0bb0592.jpg?tr=");
    background-repeat: no-repeat;
    background-size: cover;
    background-position: 20%;
  }
</style>

<!-- Our programms section -->
<section class="our-programms">
  <h1 class="title">Τα προγράμματα μας</h1>

  <!-- Cards with the programms -->
  <div class="cards">

  <!-- Home programm card -->
    <div class="home card">
      <div class="black"></div>
      <i class="fa-sharp fa-solid fa-house"></i>
      <h2>Οικιακό<br />Πρόγραμμα</h2>
      <a href="./profile.php" target="_blank" class="learn-more"
        >Learn more</a
      >
    </div>

    <!-- Company programm card -->
    <div class="company card">
      <div class="black"></div>
      <i class="fa-sharp fa-solid fa-building"></i>
      <h2>Επαγγελματικό<br />Πρόγραμμα</h2>
      <a href="./profile.php" target="_blank" class="learn-more"
        >Learn more</a
      >
    </div>

    <!-- Student programm card -->
    <div class="student card">
      <div class="black"></div>
      <i class="fa-solid fa-graduation-cap"></i>
      <h2>Φοιτητικό<br />Πρόγραμμα</h2>
      <a href="./profile.php" target="_blank" class="learn-more"
        >Learn more</a
      >
    </div>

    <!-- Farmer programm card -->
    <div class="farmer card">
      <div class="black"></div>
      <i class="fa-solid fa-tractor"></i>
      <h2>Προγράμματα για<br />Αγρότες</h2>
      <a href="./profile.php" target="_blank" class="learn-more"
        >Learn more</a
      >
    </div>
  </div>
</section>

<!-- Home page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    .cards {
      grid-template-columns: 1fr 1fr;
    }
    .card {
      margin: 1rem;
      padding: 2rem;
    }
  }

  @media screen and (max-width: 780px) {
    .our-programms {
      padding: 2rem;
    }
    .cards {
      grid-template-columns: 1fr 1fr;
      width: 100%;
    }
    .card {
      margin: 1rem;
      padding: 2rem;
    }
    .card i {
      font-size: 2rem;
    }
    .card h2 {
      font-size: 1rem;
    }
    .card a {
      padding: 0.5rem;
    }
  }
</style>