<div class="col-xs-6 col-sm-3 sidebar-offcanvas" role="navigation">
  <ul class="list-group panel">
    <li class="list-group-item"><i class="glyphicon glyphicon-align-justify"></i> <b>MENU UTAMA</b></li>
    <li class="list-group-item"><input type="text" class="form-control search-query" placeholder="Search Something"></li>
    <li class="list-group-item"><a href="<?php echo base_url() ?>"><i class="glyphicon glyphicon-home"></i>Dashboard </a></li>

    <?php
    if ($this->session->userdata('level') == 'admin') {
    ?>

      <li>
        <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data Master Obat <span class="glyphicon glyphicon-chevron-right"></span></a>
      <li class="collapse" id="demo4">
        <a href="barang" class="list-group-item"> Data Obat</a>
        <a href="jenis_barang" class="list-group-item"> Jenis Obat</a>
        <a href="merk_barang" class="list-group-item"> Merk Obat</a>
        <a href="supplier" class="list-group-item"> Supplier</a>

      </li>
      </li>
      <li>
        <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi <span class="glyphicon glyphicon-chevron-right"></span></a>
      <li class="collapse" id="demo5">
        <a href="barang_masuk" class="list-group-item">Transaksi Obat Masuk</a>
        <a href="barang_keluar" class="list-group-item">Transaksi Obat Keluar</a>
        <a href="app/penjualan" class="list-group-item">Pemesanan Ke Supplier</a>

      </li>
      </li>
      <li class="list-group-item"><a href="users"><i class="glyphicon glyphicon-user"></i>Manajemen User </a></li>
      <li class="list-group-item"><a href="<?php echo base_url() ?>app/logout"><i class="glyphicon glyphicon-log-out"></i>Logout </a></li>

    <?php
    } elseif ($this->session->userdata('level') == 'manajer') {
    ?>

      <li>
        <a href="#demo4" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-th-large"></i>Data Master Obat<span class="glyphicon glyphicon-chevron-right"></span></a>
      <li class="collapse" id="demo4">
        <a href="barang" class="list-group-item"> Data Obat</a>
        <a href="jenis_barang" class="list-group-item"> Jenis Obat</a>
        <a href="merk_barang" class="list-group-item"> Merk Obat</a>
        <a href="supplier" class="list-group-item"> Supplier</a>

      </li>
      </li>
      <li>
        <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi <span class="glyphicon glyphicon-chevron-right"></span></a>
      <li class="collapse" id="demo5">
        <a href="barang_masuk" class="list-group-item">Transaksi Obat Masuk</a>
        <a href="barang_keluar" class="list-group-item">Transaksi Obat Keluar</a>
        <a href="app/penjualan" class="list-group-item">Pemesanan Ke Supplier</a>

      </li>
      </li>
      <li class="list-group-item"><a href="<?php echo base_url() ?>app/logout"><i class="glyphicon glyphicon-log-out"></i>Logout </a></li>

    <?php
    } elseif ($this->session->userdata('level') == 'petugas gudang') {
    ?>
      <li>
        <a href="#demo5" class="list-group-item " data-toggle="collapse"><i class="glyphicon glyphicon-folder-open"></i>Data Transaksi <span class="glyphicon glyphicon-chevron-right"></span></a>
      <li class="collapse" id="demo5">
        <a href="barang_masuk" class="list-group-item">Transaksi Obat Masuk</a>
        <a href="barang_keluar" class="list-group-item">Transaksi Obat Keluar</a>
        <a href="app/penjualan" class="list-group-item">Pemesanan Ke Supplier</a>

      </li>
      </li>
      <li class="list-group-item"><a href="<?php echo base_url() ?>app/logout"><i class="glyphicon glyphicon-log-out"></i>Logout </a></li>

    <?php
    } elseif ($this->session->userdata('level') == 'supplier') {
    ?>



      <li class="list-group-item"><a href="app/pemesanan_supplier"><i class="glyphicon glyphicon-tasks"></i>Daftar Pesanan Obat </a></li>
      <li class="list-group-item"><a href="<?php echo base_url() ?>app/logout"><i class="glyphicon glyphicon-log-out"></i>Logout </a></li>

    <?php } ?>
  </ul>
</div>