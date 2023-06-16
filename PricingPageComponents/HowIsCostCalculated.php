 <!-- Cost tables calculation -->
 <style>
  .cost-calculation {
    padding: 2rem;
    box-sizing: border-box;
  }

  .tables {
    display: grid;
    grid-template-columns: 2fr 1fr;
    column-gap: 2rem;
  }

  .cost-calculation h1 {
    color: #659e31;
  }

  .cost-calculation th {
    background-color: #659e31;
    color: white;
    padding: 1rem;
    text-align: center;
  }

  .cost-calculation tr {
    text-align: center;
  }
  .cost-calculation tr :first-child {
    background-color: #659e31;
    color: white;
    padding: 1rem;
  }

  .cost-calculation tr :not(:first-child) {
    border: 2px solid #659e31;
  }

  .result {
    text-align: center;
    padding: 1rem 0;
    margin-top: 2rem;
    font-weight: bold;
    font-size: 1.5rem;
  }
</style>

<!-- How is cost calculated section -->
<section class="cost-calculation">
  <h1 class="title">Πως υπολογίζεται το κόστος</h1>
  <div class="tables">
    <table>
      <tr>
        <th>
          Κατανάλωση<br />
          σε kWh
        </th>
        <th>
          Κόστος Ενέργειας<br />
          (€/kWh)
        </th>
        <th>
          Υπηρεσίες Κοινής Ωφέλειας<br />
          (PUS) (€/kWh)
        </th>
      </tr>
      <tr>
        <td>0-1600</td>
        <td>0,00623 € / kWh</td>
        <td>0,01315 € / kWh</td>
      </tr>
      <tr>
        <td>1601-2000</td>
        <td>0,00768 € / kWh</td>
        <td>0,01480 € / kWh</td>
      </tr>
      <tr>
        <td>>2000</td>
        <td>0,00915 € / kWh</td>
        <td>0,01625 € / kWh</td>
      </tr>
    </table>
    <table>
      <tr>
        <th>
          Τετραγωνικά<br />
          Μέτρα m2
        </th>
        <th>
          Χρεώσεις<br />
          Δήμου (€/m2)
        </th>
      </tr>
      <tr>
        <td>0-50</td>
        <td>0,12 € / m2</td>
      </tr>
      <tr>
        <td>50-90</td>
        <td>0,20 € / m2</td>
      </tr>
      <tr>
        <td>>90</td>
        <td>0,31 € / m2</td>
      </tr>
    </table>
  </div>
</section>

<!-- Pricing page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    .tables {
      grid-template-columns: 1fr;
    }
    .tables table {
      margin: 1rem 0;
    }
  }

  @media screen and (max-width: 780px) {
    .calculate-cost form {
      width: 100%;
    }
    .tables {
      grid-template-columns: 1fr;
    }
    .tables table {
      margin: 1rem 0;
    }
  }
</style>