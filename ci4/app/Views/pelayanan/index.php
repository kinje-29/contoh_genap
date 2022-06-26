<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>

<div class="container">
  <div class="main">
    <h1>Daftar Layana</h1>
  </div>

  <div class="row pt-3">
    <div class="col">
      <a href="/" class="btn border bg-success bg-gradient w-100 text-light p-4"><h2>Menu Antrian</h2></a>
    </div>
  </div>
  <div class="row pt-4">
    <div class="col">
      <a href="/pelayanan/daftar_layanan" class="btn border bg-primary bg-gradient w-100 text-light p-4"><h2>Coustomer Service</h2></a>
    </div>
  </div>
  <div class="row pt-4">
    <div class="col">
      <a href="/index" class="btn border bg-secondary bg-gradient w-100 text-light p-4"><h2>Permohonan Baru</h2></a>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>