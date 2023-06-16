<!-- saving energy section styling -->
<style>
  .saving-energy {
    background: linear-gradient(
      45deg,
      rgb(101, 158, 49),
      rgba(101, 158, 49, 0.8)
    );
    padding: 2rem 5rem;
    box-sizing: border-box;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .saving-energy h1 {
    color: white;
  }
  .saving-energy p {
    color: white;
  }

  .saving-energy video {
    width: 50%;
  }
</style>

<!-- Saving energy section -->
<section class="saving-energy">
  <h1 class="title">Εξοικονόμηση</h1>
  <p>Ακολουθεί ένα βίντεο για τρόπους εξοικονόμησης ενέργειας.</p>
  <video controls>
    <source
      src="./reusable_components/ImagesAndVideos/save-energy-video.mp4"
      type="video/mp4"
    />
    Video not supported
  </video>
</section>

<!-- Home page responsive styles -->
<style>
  @media screen and (min-width: 780px) and (max-width: 1100px) {

    .saving-energy {
      text-align: center;
    }
  }

  @media screen and (max-width: 780px) {
   
    .saving-energy {
      text-align: center;
    }
    .saving-energy video {
      width: 100%;
    }

  }
</style>