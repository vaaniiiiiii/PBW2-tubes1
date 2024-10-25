<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- css boost -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Edit Profil | Rhipus</title>
  <link rel="stylesheet" href="/css/global.css" />
  <link rel="stylesheet" href="/css/upload.css" />
  <script src="https://kit.fontawesome.com/72cab53f1b.js" crossorigin="anonymous"></script>
</head>

  <!-- END HEADER -->

<!-- MAIN -->

<body>
    <nav class="bg-background py-3">
        <div class="container">
            <div class="row">
                <div class="logo col-4 d-flex justify-content-start align-items-center">
                    <img src="/img/logoo.png" alt="logoProfil" width="70">
                </div>
                <div class="col-4 d-flex justify-content-center align-items-center"><a href="/beranda">Beranda</a></div>
                @auth
                    <div class="col-4 d-flex justify-content-center align-items-center">
                        <a href="/pengguna">
                            <img src="/img/user-avatar.png" alt="logoProfil" width="40">
                        </a>
                    </div>
                @else
                    <div class="col-4 d-flex justify-content-end align-items-center">
                        <button>
                            <a href="/login" class="bg-primary px-4 py-2 rounded text-white">Login</a>
                        </button>
                    </div>
                @endauth
            </div>
        </div>
    </nav>

  <main class="d-flex align-items-start gap-3 justify-content-center mx-auto mt-5">
    <a href="lihat-profil.php"><i class="fa-solid fa-circle-chevron-left fs-4 mt-3"></i></a>
    <div id="video-added" class="border border-dark rounded-4 p-3 w-25">
      <h5 class="fw-bold mb-3">Kelola Akun</h5>
      <div class="d-flex align-items-center justify-content-between mb-2">
        <p class="m-0 fw-medium text-muted">Hapus akun</p>
        <div class="d-flex align-items-center gap-1">
          <p class="m-0 fw-medium text-muted">Hapus</p>
          <i class="fa-solid fa-chevron-right text-muted"></i>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between mb-2">
        <p class="m-0 fw-medium text-muted">Bahasa</p>
        <div class="d-flex align-items-center gap-1">
          <p class="m-0 fw-medium text-muted">Indonesia</p>
          <i class="fa-solid fa-chevron-right text-muted"></i>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-between mb-2">
        <p class="m-0 fw-medium text-muted">Izinkan di browser</p>
        <div class="form-check form-switch">
          <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
        </div>
      </div>
    </div>
    <!-- <div id="add-video" class="border border-dark rounded-4 h-100 w-100 d-flex align-items-center justify-content-center">
      <div class="text-center">
        <i class="fa-solid fa-upload display-3 text-dark mb-3"></i>
        <p class="m-0 text-muted">Pilih video untuk diunggah</p>
        <p class="m-0 text-muted">atau tarik file ke sini</p>
        <button type="submit" class="btn button-secondary-80 rounded-pill px-3 py-1 fw-bold mt-3">Pilih video</button>
      </div>
    </div> -->
  </main>
  <!-- END MAIN -->
 <!-- Script -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

  <script>
    const profileBtn = document.querySelector('#profileBtn')
    const floatingMenu = document.querySelector('.floating-menu')
    const backLayer = document.querySelector('.back-layer')

    profileBtn.addEventListener('click', function() {
      backLayer.classList.add("show")
      floatingMenu.classList.add("show")
    })

    backLayer.addEventListener('click', function() {
      backLayer.classList.remove("show")
      floatingMenu.classList.remove("show")
    })
  </script>
</body>

</html>
