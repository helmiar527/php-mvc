<div class="container mt-5">
  <div class="row">
    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>
    <div class="col-lg-6">
      <h1>Index Example 2</h1>
      <h2>Selamat datang di <?= $data['index']; ?></h2>
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Tambah Data
      </button>
      <br>
      <ul class="list-group">
        <?php foreach ($data['array'] as $array) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-start">
          <?= $array['nama']; ?>
          <a href="<?= BASEURL; ?>/Example/detail/<?= $array['id']; ?>" class="badge text-bg-primary">detail</a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <form action="<?= BASEURL; ?>/example2/tambah" method="post">
            <div class="form-group">
              <label for="no" class="form-label">No</label>
              <input type="text" class="form-control" id="no" name="no">
            </div>
            <div class="form-group">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" id="nama" name="nama">
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
          <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>