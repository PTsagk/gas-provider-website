 <!-- Calculate cost form styling -->
 <style>
  .calculate-cost {
    color: #659e31;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 2rem;
    box-sizing: border-box;
  }

  .calculate-cost form {
    display: flex;
    flex-direction: column;
    background: linear-gradient(
      45deg,
      rgb(101, 158, 49),
      rgba(101, 158, 49, 0.8)
    );
    width: 40%;
    box-sizing: border-box;
    padding: 4rem;
    color: white;
    border-radius: 10px;
  }

  .calculate-cost label {
    font-weight: bold;
    margin-bottom: 1rem;
  }
  .calculate-cost form input {
    margin-bottom: 2rem;
    border: none;
    padding: 1rem;
    outline: none;
    font-size: 1rem;
    border-radius: 10px;
    background-color: white;
  }

  .calculate-cost form input::-webkit-inner-spin-button,
  .calculate-cost form input::-webkit-outer-spin-button {
    -webkit-appearance: none;
  }

  .calculate-cost form button {
    border: none;
    background-color: white;
    color: #659e31;
    align-self: center;
    padding: 1rem;
    font-weight: bolder;
    font-size: 1rem;
    border-radius: 10px;
    cursor: pointer;
    border: 1px solid white;
  }

  .calculate-cost form button:hover {
    background-color: transparent;
    color: white;
  }
</style>

<!-- Calculate cost section -->
<section class="calculate-cost">
  <h1 class="title">Υπολογισμός Κόστους</h1>
  <form action="">
    <label for="kWh">Εισαγωγή αριθμού kWh: </label>
    <input type="number" id="kWh" />
    <label for="days">Εισαγωγη ημερών:</label>
    <input type="number" id="days" />
    <label for="m2">Εισαγωγή τετραγωνικών μέτρων: </label>
    <input type="number" id="m2" />
    <button type="submit">Υπολογισμός</button>
    <div class="result"></div>
  </form>
</section>

<!-- Pricing page responsive styles -->
<style>
  @media screen and (max-width: 780px) {
    .calculate-cost form {
      width: 100%;
    }
  }
</style>

<!-- Calculate cost logic -->
<script>

  // Access the form
  const costForm = document.querySelector("form");

  // On submit
  costForm.addEventListener("submit", (e) => {

    // Prevent the form from redirecting
    e.preventDefault();

    // Access the values of the form
    let kWh = document.getElementById("kWh").value;
    let days = document.getElementById("days").value;
    let m2 = document.getElementById("m2").value;

    // Initialize variables
    let energyCharges = 0.00623;
    let publicUtilityServices = 0.01315;

    // Checking based on the given table
    if (kWh >= 1601 && kWh <= 2000) {
      energyCharges = 0.00768;
      publicUtilityServices = 0.0148;
    } else if (kWh > 2000) {
      energyCharges = 0.00915;
      publicUtilityServices = 0.01625;
    }

    let municipalityCharges = 0.12;
    if (m2 >= 50 && m2 <= 90) {
      municipalityCharges = 0.2;
    } else if (m2 > 90) {
      municipalityCharges = 0.31;
    }

    // Calculate with 2 decimals accuracy
    let municipalityCost = Number(
      ((m2 * municipalityCharges * days) / 365).toFixed(2)
    );
    let totalPUScost = Number(
      ((kWh * publicUtilityServices * days) / 365).toFixed(2)
    );
    let totalCharges = Number((kWh * energyCharges).toFixed(2));

    let totalChargeCost = municipalityCost + totalPUScost + totalCharges;

    // Add the result under the form
    document.querySelector(
      ".result"
    ).innerHTML = `Το συνολικό κόστος είναι: ${totalChargeCost}€`;
  });
</script>