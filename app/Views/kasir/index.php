
<?= $this->extend('templates/index'); ?>

<?= $this->section('page-content'); ?>
 <title>Coffe Shop</title>
    <style>
      body{
    font-family: 'Yanone Kaffeesatz', sans-serif;
        } 
    .btn-pesan{
        background-color: #09675E;
    }
    #jenis_kopi{
      background-color: #E8DEAB;
      padding-bottom: 150px;
    }
    .text-army{
      color: #002B27;
    }
    .text-green{
    color: #09675E;
    }
    /* #menu{
      background-color: #B9B9B9;
    } */
    </style>
</head>
<body>
<?= $this->include('templates/hero'); ?>
  <section id="jenis_kopi">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 text-center mt-5">
          <h2 class="display-5 text-army">Jenis-Jenis Kopi</h2>
          <p class="text-green">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque magnam libero nihil itaque fuga, sapiente corporis nulla quos debitis iste.</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-md-6 mt-5 pt-5">       
            <img src="<?= base_url('Img/Menu_Gallery/Arabika.jpeg'); ?>" class="rounded shadow card-img-top" alt="gambar kopi 1">   
        </div>
        <div class="col-md-6 pt-5">
              <h5 class="display-3 text-army fw-semibold">Kopi Arabica</h5><hr>
              <p class="fs-5 mt-4 text-green">Kopi Arabika merupakan salah satu jenis kopi yang paling banyak dikonsumsi di seluruh dunia. Jenis kopi ini berasal dari spesies kopi Arabika yang tumbuh di daerah tropis di seluruh dunia. Kopi Arabika memiliki rasa yang lebih lembut dan kompleks dibandingkan dengan kopi jenis lainnya, seperti Robusta.
                Asal usul Kopi Arabika berasal dari Ethiopia dan ditemukan sekitar abad ke-7. Kopi Arabika kemudian menyebar ke seluruh dunia melalui perdagangan dan perjalanan yang dilakukan oleh orang-orang Arab. Namun, saat ini, beberapa negara di Amerika Latin seperti Brasil, Colombia, dan Kosta Rika merupakan produsen kopi Arabika terbesar di dunia.
                Proses pembuatan kopi Arabika dimulai dengan penanaman pohon kopi Arabika. Pohon kopi Arabika memerlukan tanah yang kaya akan nutrisi dan sinar matahari yang cukup.</p>
        </div>
       </div>
      <div class="row mt-5">
        <div class="col-md-6 pt-5">
              <h5 class="display-3 text-army fw-semibold">Kopi Robusta</h5><hr>
              <p class="fs-5 mt-4 text-green">Kopi Arabika merupakan salah satu jenis kopi yang paling banyak dikonsumsi di seluruh dunia. Jenis kopi ini berasal dari spesies kopi Arabika yang tumbuh di daerah tropis di seluruh dunia. Kopi Arabika memiliki rasa yang lebih lembut dan kompleks dibandingkan dengan kopi jenis lainnya, seperti Robusta.
                Asal usul Kopi Arabika berasal dari Ethiopia dan ditemukan sekitar abad ke-7. Kopi Arabika kemudian menyebar ke seluruh dunia melalui perdagangan dan perjalanan yang dilakukan oleh orang-orang Arab. Namun, saat ini, beberapa negara di Amerika Latin seperti Brasil, Colombia, dan Kosta Rika merupakan produsen kopi Arabika terbesar di dunia.</p>
        </div>
        <div class="col-md-6 mt-5 pt-5">       
            <img src="<?= base_url('Img/Menu_Gallery/robusta.jpg'); ?>" class="rounded shadow card-img-top" alt="gambar kopi 1">   
        </div>
       </div>
      <div class="row mt-5">
        <div class="col-md-6 mt-5 pt-5">       
            <img src="<?= base_url('Img/Menu_Gallery/Liberika.jpg'); ?>" class="rounded shadow card-img-top" alt="gambar kopi 1">   
        </div>
        <div class="col-md-6 pt-5">
              <h5 class="display-3 text-army fw-semibold">Kopi Liberica</h5><hr>
              <p class="fs-5 mt-4 text-green">Jenis kopi yang satu ini mungkin nggak sepopuler robusta dan arabica. Hal ini juga yang membuat kopi liberica termasuk salah satu jenis kopi yang jarang ditemukan. Secara umum, kopi tersebut memiliki keunikan tersendiri. Banyak yang bilang kalau rasa kopi liberica berbeda dan tidak seperti kopi pada umumnya. Hal ini juga yang membuat liberica lebih sering menjadi campuran kopi untuk memberikan lebih banyak dimensi pada rasa kopi yang disajikan.
                Tanaman kopi liberica disebut lebih tahan hama dan dapat beradaptasi saat iklim panas. Sementara itu, kandungan kafein di dalamnya cukup tinggi, yaitu sekitar 1,12-1,26%. Biarpun memiiki kadar kafein yang tinggi, tapi rasanya tidak sepahit yang dimiliki oleh robusta.</p>
        </div>
       </div>
       </div>
  </section>
  <section id="menu">
    <div class="container">
      <div class="row">
        <div class="col mt-5">
        <h2 class="menu display-5 text-center mb-3">Menu Coffee Premium</h2>      
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-md-6">
        <div class="ms-3 mt-3 plusbuttons">
          <a href="menutransaksi.html" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="85" height="30" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
            <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </svg></a>
        </div>
      </div>
      <div class="col-md-3 offset-3 mb-3">
        <form class="d-flex pt-5" role="search">
          <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
      </div>
      <div class="row gy-4 justify-content-evenly">
        <div class="col-md-3">
          <div class="card shadow pb-3 bg-danger" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/1.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h2 class="card-title text-light fw-semibold">Coffe Latte</h2>
             <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <h3 class="text-secondary">stok : <span class="stock">0</h3></span>
               <div class="input-group mt-4 px-2">
                 <button class="btn btn-secondary" type="button" id="minus-btn" disabled><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                   <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                 </svg></button>
                 <input type="text" class="form-control text-center" id="quantity" value="0">
                 <button class="btn btn-success" type="button" id="plus-btn" disabled><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                   <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                 </svg></button>
               </div>
             </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow pb-3" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/2.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h2 class="card-title text-light fw-semibold">Americano</h2>
             <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <h3 class="text-secondary">stok : <span class="stock">7</h3></span>
               <div class="input-group mt-4 px-2">
                 <button class="btn btn-danger" type="button" id="btn-kurang">-</button>
                 <input type="text" class="form-control text-center" id="jumlah" value="0">
                 <button class="btn btn-pesan" type="button" id="btn-tambah">+</button>
               </div>
             </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow pb-3" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/3.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h2 class="card-title text-light fw-semibold">Black Coffee</h2>
             <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <h3 class="text-secondary">stok : <span class="stock">2</h3></span>
               <div class="input-group mt-4 px-2">
                 <button class="btn btn-danger" type="button" id="minus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                   <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                 </svg></button>
                 <input type="text" class="form-control text-center" id="quantity" value="0">
                 <button class="btn btn-pesan" type="button" id="plus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                   <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                 </svg></button>
               </div>
             </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow pb-3" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/4.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                 <h2 class="card-title text-light fw-semibold">Cappuchino</h2>
              <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h3 class="text-secondary">stok : <span class="stock">8</h3></span>
                <div class="input-group mt-4  px-2">
                  <button class="btn btn-danger" type="button" id="minus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                  </svg></button>
                  <input type="text" class="form-control text-center" id="quantity" value="0">
                  <button class="btn btn-pesan" type="button" id="plus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></button>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow pb-3 bg-danger" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/5.png'); ?>" class="card-img-top" alt="...">
           <div class="card-body text-center">
                 <h2 class="card-title text-light fw-semibold">Affogato</h2>
              <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h3 class="text-secondary">stok : <span class="stock">0</h3></span>
                <div class="input-group mt-4  px-2">
                  <button class="btn btn-secondary" type="button" id="minus-btn" disabled><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                  </svg></button>
                  <input type="text" class="form-control text-center" id="quantity" value="0" disabled>
                  <button class="btn btn-success" type="button" id="plus-btn" disabled><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></button>
                </div>
              </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card shadow pb-3" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/6.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                 <h2 class="card-title text-light fw-semibold">Vietnam Drip</h2>
              <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h3 class="text-secondary">stok : <span class="stock">20</h3></span>
                <div class="input-group mt-4  px-2">
                  <button class="btn btn-danger" type="button" id="minus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                  </svg></button>
                  <input type="text" class="form-control text-center" id="quantity" value="0">
                  <button class="btn btn-pesan" type="button" id="plus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></button>
                </div>
              </div>
          </div>
        </div>
          <div class="col-md-3">
          <div class="card shadow pb-3 bg-danger" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/7.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                 <h2 class="card-title text-light fw-semibold">Ekspresso</h2>
              <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h3 class="text-secondary">stok : <span class="stock">0</h3></span>
                <div class="input-group mt-4  px-2">
                  <button class="btn btn-secondary" type="button" id="minus-btn" disabled><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                  </svg></button>
                  <input type="text" class="form-control text-center" id="quantity" value="0" disabled>
                  <button class="btn btn-success" type="button" id="plus-btn" disabled><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card shadow pb-3" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/8.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                <h2 class="card-title text-light fw-semibold">Flat White</h2>
             <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             <h3 class="text-secondary">stok : <span class="stock">8</h3></span>
               <div class="input-group mt-4 px-2">
                 <button class="btn btn-danger" type="button" id="minus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                   <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                 </svg></button>
                 <input type="text" class="form-control text-center" id="quantity" value="0">
                 <button class="btn btn-pesan" type="button" id="plus-btn"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                   <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                 </svg></button>
               </div>
             </div>
            </div>
          </div>
          <div class="col-md-3">
          <div class="card shadow pb-3" style="width: 19rem;">
            <img src="<?= base_url('Img/Menu_Gallery/9.png'); ?>" class="card-img-top" alt="...">
            <div class="card-body text-center">
                 <h2 class="card-title text-light fw-semibold">Doppi</h2>
              <p class="card-text textcard fw-medium mt-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <h3 class="text-secondary">stok : <span class="stock">15</h3></span>
                <div class="input-group mt-4  px-2">
                  <button class="btn btn-danger" type="button" id="btn-kurang"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                  </svg></button>
                  <input type="text" class="form-control text-center" id="jumlah" value="0">
                  <button class="btn btn-pesan" type="button" id="btn-tambah"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                  </svg></button>
                </div>
              </div>
            </div>
          </div>
    </div>
    </div>
  </section>
  <?= $this->endSection(); ?>

</body>
<script>
  var stok = 10;
  var jumlah = 0;
  
  var stokElem = document.getElementById('stok');
  var jumlahElem = document.getElementById('jumlah');
  var btnKurang = document.getElementById('btn-kurang');
  var btnTambah = document.getElementById('btn-tambah');
  var btnPesan = document.getElementById('btn-pesan');
  
  btnKurang.addEventListener('click', function() {
    if (jumlah > 0) {
      jumlah--;
      jumlahElem.value = jumlah;
    }
  });
  
  btnTambah.addEventListener('click', function() {
    if (jumlah < stok) {
      jumlah++;
      jumlahElem.value = jumlah;
    }
  });
  
  btnPesan.addEventListener('click', function() {
    if (jumlah > 0) {
      alert('Anda memesan ' + jumlah + ' cangkir kopi.');
    } else {
      alert('Anda belum memilih jumlah kopi yang ingin dipesan.');
    }
  });
</script>

</html>