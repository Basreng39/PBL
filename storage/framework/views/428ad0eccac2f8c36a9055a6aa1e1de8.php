<?php echo $__env->make('admin.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  <div class="position-sticky pt-3">
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#">
          <i style="font-size:24px" class="fa">&#xf0e4;</i> Dashboard
        </a>
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link" href="#">
          <i style="font-size:24px" class="fa">&#xf236;</i> Kamar 
        </a>
      </li>
      <li class="nav-item mt-3">
        <button class="btn" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false">
          <div> <i style="font-size:24px " class="fa">&#xf0c0;</i> Penyewa <div class=" btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#orders-collapse" aria-expanded="false"></div></div> 
        </button>
        <div class="collapse" id="orders-collapse">
          <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
            <li><a href="#" class="link-dark rounded">Penyewa Aktif</a></li>
            <li><a href="#" class="link-dark rounded">Riwayat Penyewa</a></li>
            <li><a href="#" class="link-dark rounded">Tambah Penyewa</a></li>
            <li><a href="#" class="link-dark rounded">Cetak Data Penyewa</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item mt-3">
        <a class="nav-link" href="#">
          <i style="font-size:24px" class="fa">&#xf080;</i> Laporan
        </a>
      </li>
    </ul>
  </div>
</nav>


<?php /**PATH /media/ahmad/04B42BEAB42BDD44/ikal/POLINEMA/SEMESTER 3/PBL/resources/views/admin/sidebar.blade.php ENDPATH**/ ?>