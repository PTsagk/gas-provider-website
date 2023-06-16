 <!-- Our people styling -->
 <style>
  .our-people {
    background: linear-gradient(
      45deg,
      rgb(101, 158, 49),
      rgba(101, 158, 49, 0.8)
    );
    padding: 2rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .our-people h1 {
    width: 100%;
    margin-bottom: 2rem;
    color: white;
  }
  .departments {
    width: 75%;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    justify-items: center;
  }

  .department {
    background-color: white;
    display: flex;
    flex-direction: column;
    align-items: center;
    font-weight: bold;
    padding: 2rem 3rem;
    border-radius: 10px;
    text-align: center;
  }

  .department i {
    font-size: 3rem;
    margin-bottom: 1rem;
  }
</style>

<!-- Our people section -->
<section class="our-people">
  <h1 class="title">Ανθρώπινο Δυναμικό</h1>
  <div class="departments">

  <!-- Support department -->
    <div class="department">
      <i class="fa-solid fa-headset"></i>Τμήμα<br />Υποστήριξης
    </div>

    <!-- Sales department -->
    <div class="department">
      <i class="fa-sharp fa-solid fa-chart-simple"></i>Τμήμα<br />Πωλήσεων
    </div>

    <!-- Fixes department -->
    <div class="department">
      <i class="fa-solid fa-wrench"></i>Τμήμα<br />Επισκευών
    </div>

    <!-- Logistics department -->
    <div class="department">
      <i class="fa-sharp fa-solid fa-book"></i>Λογιστήριο<br />
    </div>
  </div>
</section>

<!-- Profile page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {

    .departments {
      grid-template-columns: 1fr 1fr;
    }
    .department {
      margin: 1rem 0;
    }
  }

  @media screen and (max-width: 780px) {
  
    .departments {
      grid-template-columns: 1fr;
    }
    .department {
      margin: 1rem 0;
    }
  }
</style>