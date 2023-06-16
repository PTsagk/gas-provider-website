 <!-- About us styling -->
 <style>
  body {
    margin: 0;
    padding: 0;
    font-family: sans-serif;
  }
  .title {
    width: 100%;
    text-align: center;
    text-decoration: underline;
    text-underline-offset: 10px;
  }

  .about-us {
    padding: 5rem 2rem;
  }
  .about-us h1 {
    color: #659e31;
  }

  .cards {
    display: grid;
    column-gap: 2rem;
    grid-template-columns: repeat(3, 1fr);
  }

  .card {
    background-color: #659e31;
    width: 100%;
    color: white;
    text-align: center;
    padding: 2rem;
    box-sizing: border-box;
  }

  .card i {
    font-size: 3rem;
  }
  .card h1 {
    color: white;
  }
</style>

<!-- About us section -->
<section class="about-us">
  <h1 class="title">Σχετικά με εμάς</h1>
  <div class="cards">
    <div class="card">
      <i class="fa-solid fa-lightbulb"></i>
      <h1 class="title">Η φιλοσοφία μας</h1>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text
        ever since the 1500s, when an unknown printer took a galley of type
        and scrambled it to make a type specimen book.
      </p>
    </div>
    <div class="card">
      <i class="fa-solid fa-eye"></i>
      <h1 class="title">Το όραμά μας</h1>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text
        ever since the 1500s, when an unknown printer took a galley of type
        and scrambled it to make a type specimen book.
      </p>
    </div>
    <div class="card">
      <i class="fa-solid fa-bullseye"></i>
      <h1 class="title">Ο στόχος μας</h1>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text
        ever since the 1500s, when an unknown printer took a galley of type
        and scrambled it to make a type specimen book.
      </p>
    </div>
  </div>
</section>

<!-- Profile page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    .cards {
      grid-template-columns: 1fr;
    }
    .card {
      margin: 1rem 0;
    }
  }

  @media screen and (max-width: 780px) {
    
    .cards {
      grid-template-columns: 1fr;
    }

    .card {
      margin: 1rem 0;
    }
  }
</style>
