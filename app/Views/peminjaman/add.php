<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>
<!-- Main Content -->

<?php if(session()->getFlashdata('gagal')) : ?>
<div class="flash-data-gagal" data-flashdatagagal="<?= session()->getFlashdata('gagal'); ?>"></div>
<?php endif; ?>

<div id="content">
    <div class="container mt-3">
        <div class="row">
            <div class="col">

                <form action="/peminjaman/add" method="POST">
                      <?= csrf_field(); ?>
                        <div class="row">
                            <div class="col-6">
                                
                                <div class="form-group">
                                    <label for="id_buku">ID Buku</label>
                                    <input type="text" class="form-control" name="id_buku" required>
                                </div>

                                <div class="form-group">
                                    <label for="id_user">ID User</label>
                                    <input type="text" class="form-control" name="id_user" required>
                                </div>

                                <div class="form-group">
                                    <label for="date">Tanggal Peminjaman</label>
                                    <input type="date" class="form-control" name="date">
                                    <small>*Kosongkan jika dipinjam hari ini</small>
                                </div>

                                
                                <button type="submit" class="btn btn-primary" name="submit">Tambah Data Peminjaman</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- End of Main Content -->
<?= $this->endSection('template'); ?>