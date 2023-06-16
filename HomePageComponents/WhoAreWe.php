 <!-- Who are we section styling -->
 <style>
  section {
    width: 100%;
  }

  .who-are-we {
    padding: 2rem 10rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
  }

  .who-are-we h1 {
    color: #659e31;
  }

  .who-are-we img {
    width: 60%;
    min-width: 300px;
  }

  .section-body {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    align-items: center;
    justify-items: center;
  }

  .section-body .paragraphs {
    width: 100%;
    font-size: large;
  }
</style>

<!-- Who are section -->
<section class="who-are-we">
  <h1 class="title">Ποιοί Είμαστε?</h1>
  <div class="section-body">
    <div class="paragraphs">
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text
        ever since the 1500s, when an unknown printer took a galley of type
        and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy text of the printing and typesetting
        industry.
      </p>
      <p>
        Lorem Ipsum is simply dummy text of the printing and typesetting
        industry. Lorem Ipsum has been the industry's standard dummy text
        ever since the 1500s, when an unknown printer took a galley of type
        and scrambled it to make a type specimen book.
      </p>
    </div>
    <img
      src="./reusable_components/ImagesAndVideos/company_logo.png"
      alt="company logo"
    />
  </div>
  <a href="./profile.php" class="learn-more">Learn more</a>
</section>

<!-- Home page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {
    .section-body {
      grid-template-columns: 1fr;
    }
  }

  @media screen and (max-width: 780px) {
    .section-body {
      grid-template-columns: 1fr;
    }
    .who-are-we {
      padding: 2rem;
      box-sizing: border-box;
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
    }
  }
</style>