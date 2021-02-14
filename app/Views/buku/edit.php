<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>
<!-- Main Content -->
<div id="content">

<div class="container mt-3">
    <div class="row">
        <div class="col">

        <form action="/books/update/<?= $book['id']; ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>
            <div class="row">
                <div class="col-md-5 justify-content-center">
                    <label for="cover">Cover</label>
                    <img src="/covers/<?= (old('cover')? old('cover') : $book['cover']); ?>" class="img-fluid mt-3 img-preview mx-auto d-block rounded" id="img-preview" width="220px" alt="">
                </div>
                <div class="col-md-7">
                    
                    <div class="row">
                        <div class="col-6">

                            <div class="form-group">
                                <label for="id">ID Buku</label>
                                <input type="text" class="form-control" name="id" value="<?= $book['id']; ?>" readonly>
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="isbn">Isbn</label>
                                <input type="text" class="form-control" name="isbn" value="<?= $book['isbn']; ?>" readonly>
                            </div>
                        </div>

                    </div>

                    <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" class="form-control" name="judul" value="<?= $book['judul']; ?>" readonly>
                    </div>

                    <div class="form-group">
                            <label for="pengarang">Pengarang</label>
                            <input type="text" class="form-control" name="pengarang" value="<?= $book['pengarang']; ?>" readonly>
                    </div>

                    <div class="form-group">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" class="form-control" name="penerbit" value="<?= $book['penerbit']; ?>" readonly>
                    </div>

                    <div class="form-group">
                        <label for="section">Section</label>
                        <input type="text" class="form-control <?= ($validation->showError('section')) ? 'is-invalid' : '' ; ?>" name="section" id="section" value="<?= (old('section')? old('section') : $book['section']); ?>">
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->showError('section'); ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="statusBuku">Status Buku</label>
                        <select class="form-control" name="status" id="statusBuku">
                            <?php foreach( $status as $s ): ?>
                                <?php if( $s == $book['status'] ): ?>
                                    <option selected value="<?= $s; ?>"><?= $s; ?></option>
                                <?php else: ?>
                                    <option value="<?= $s; ?>"><?= $s; ?></option>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="float-right mt-4">
                    <button type="submit" class="btn btn-primary " name="submit">Update</button>
                    </div>
                </div>
            </div>
        </form>

        </div>
    </div>
</div>

</div>
<!-- End of Main Content -->
<?= $this->endSection('template'); ?>