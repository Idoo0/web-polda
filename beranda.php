<div class="container my-5">
  <div class="row">
    <!-- Main news (Berita Utama) -->
    <div class="col-lg-8 col-md-12 main-news">
      <h3 class="">BERITA UTAMA</h3>
      <div class="line-sec"></div>
      <div class="card">
        <img
          src="assets/foto1.jpg"
          class="card-img-top"
          alt="Main News"
          height="350px"
        />
        <div class="card-body">
          <p class="card-text">
            Kapolda Sulut menerima audiensi PT Perkebunan Nusantara I (PTPN)
          </p>
        </div>
      </div>
    </div>

    <!-- Latest news (Berita Terbaru) -->
    <div class="col-lg-4 col-md-12">
      <h3 class="">BERITA TERBARU</h3>
      <div class="line-sec"></div>
      <div class="row">
        <!-- Repeat this block for each latest news -->
        <div class="col-6 col-lg-6 mb-3 thumbnail-news position-relative">
          <div class="image-wrapper">
            <img
              src="assets/foto1.jpg"
              alt="Latest News 1"
              class="img-thumbnail"
            />
            <div class="news-title-overlay">
              <div class="news-title text-center">Kapolda Sulut menerima audiensi PT Perkebunan Nusantara I (PTPN)</div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-6 mb-3 thumbnail-news position-relative">
          <div class="image-wrapper">
            <img
              src="assets/foto1.jpg"
              alt="Latest News 2"
              class="img-thumbnail"
            />
            <div class="news-title-overlay">
              <div class="news-title text-center">Kapolda Sulut menerima audiensi PT Perkebunan Nusantara I (PTPN)</div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-6 mb-3 thumbnail-news position-relative">
          <div class="image-wrapper">
            <img
              src="assets/foto1.jpg"
              alt="Latest News 3"
              class="img-thumbnail"
            />
            <div class="news-title-overlay">
              <div class="news-title text-center">Kapolda Sulut menerima audiensi PT Perkebunan Nusantara I (PTPN)</div>
            </div>
          </div>
        </div>
        <div class="col-6 col-lg-6 mb-3 thumbnail-news position-relative">
          <div class="image-wrapper">
            <img
              src="assets/foto1.jpg"
              alt="Latest News 4"
              class="img-thumbnail"
            />
            <div class="news-title-overlay">
              <div class="news-title text-center">Kapolda Sulut menerima audiensi PT Perkebunan Nusantara I (PTPN)</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<style>
  .image-wrapper {
    position: relative;
    overflow: hidden;
  }

  .news-title-overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    height: 40%;
    background: linear-gradient(to top, black, transparent);
    display: flex;
    align-items: flex-end;
    justify-content: center;
    padding-bottom: 10px;
  }

  .news-title {
    color: yellow;
    font-weight: bold;
    text-align: center;
    width: 100%;
    padding: 5px;
  }

  .img-thumbnail {
    display: block;
    width: 100%;
    height: auto;
  }
</style>
