<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Mahasiswa
                </div>
                <div class="card-body">
                    <p class="card-title">Nama : <?= $mahasiswa['nama']; ?></p>
                    <p class="card-text">Email : <?= $mahasiswa['email']; ?></p>
                    <p class="card-text">NIM : <?= $mahasiswa['nim']; ?></p>
                    <p class="card-text">Jurusan :<?= $mahasiswa['jurusan']; ?></p>
                    <a href="<?= base_url(); ?>mahasiswa" class="btn btn-primary">Kembali</a>
                </div>
            </div>
        
        </div>
    </div>
</div>