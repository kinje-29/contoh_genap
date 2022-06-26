<?= $this->extend('layout/template'); ?>
<?= $this->section('dasbord'); ?>


<div class="container">
  <div class="row justify-content-between">
    <div class="col-8">
      <h2>Pendaftaran</h2>
      <form action="<?= base_url('pelayanan/simpan') ?>" method="post">
        <input type="text" name="nama" class="form-control mb-3" id="floatingInput" placeholder="Nama...">
        <input type="text" name="loket_id" class="form-control mb-3" id="floatingInput" placeholder="">
        <input type="text" name="pelayanan_id" class="form-control mb-3" id="floatingInput" placeholder="">
        <input type="text" name="kode" class="form-control mb-3" id="floatingInput" placeholder="" >
        <!-- readonly -->
        <button type="submit" class="btn btn-primary">Ambil Antrian</button>
      </form>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>