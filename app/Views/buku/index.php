<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>
<!-- Main Content -->

<nav class="navbar navbar-dark bg-light">

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop">
    Tambah Data
    </button>
  
  <form action="" method="GET" class="form-inline">
    <input class="form-control mr-2" name="keyword" type="text" placeholder="cari...">
    <button class="btn btn-outline-success" type="submit">Cari</button>
  </form>
</nav>

<div id="content">

<?php if(session()->getFlashdata('success')): ?>
<div class="flash-data-berhasil" data-flashdataberhasil="<?= session()->getFlashdata('success'); ?>"></div>

<?php elseif(session()->getFlashdata('gagal')) : ?>
<div class="flash-data-gagal" data-flashdatagagal="<?= session()->getFlashdata('gagal'); ?>"></div>
<?php endif; ?>

<div class="container mt-1">
    <div class="row">
        <div class="col">
            <?php if( !$books ){ ?>

                <div class="row mt-4 text-center">
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            Buku Tidak ditemukan!
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-primary" href="/books" class="btn btn-primary text-center">Kembali</a>
                    </div>
                </div>

                <?php }else{ ?>    

        <table class="table table-hover">
            <thead class="">
                <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Cover</th>
                <th scope="col">ID</th>
                <th scope="col">ISBN</th>
                <th scope="col">Judul</th>
                <th scope="col">Status</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="">
                <?php csrf_field(); ?>
                <?php $i = 1 + ($pagePerView * ($currentPage -1)) ?>
                <?php foreach($books as $book):  ?>
                    <tr id="dataTabel">
                    <th scope="row"><?= esc($i); ?></th>
                    <!-- esc() = untuk bantu mencegah XSS attack-->
                    <td><img src="/covers/<?= esc($book['cover']); ?>" class="image" alt="Cover"></td>
                    <td class="id"><?= esc($book['id']); ?></td>
                    <td class="isbn"><?= esc($book['isbn']); ?></td>
                    <td class="judul"><?= esc($book['judul']); ?></td>
                    <td class="status"><?= esc($book['status']); ?></td>
                            
                    <td id="button">
                    <a href="/books/detail/<?= $book['id']; ?>" class="btn btn-primary btn-circle"><i class="fas fa-info"></i></a>
                    <a href="/books/edit/<?= $book['id']; ?>" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                    <a href="/books/delete/<?= $book['id']; ?>" class="btn btn-danger tombol-hapus btn-circle"><i class="fas fa-trash"></i></a>
                    </td>
                    </tr>
                <?php $i ++; ?>
                <?php endforeach; ?>
                <?php }; ?>
            </tbody>
        </table>
        
        
    </div>
</div>
</div>

<?= $pager->links('buku', 'custom_pagination') ?>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Tambah Data Buku</h5>
        <button type="button" class="close danger" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
        
        <form action="/books/add" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>
            <div class="row">
                <div class="col-md-5 justify-content-center">
                    <label for="cover">Cover (Max 3MB)</label>
                    <div class="custom-file">
                        <input type="file" name="cover" class="custom-file-input <?= ($validation->hasError('cover')) ? 'is-invalid' : '' ; ?>" id="cover"  onchange="previewImage()">
                        <label id="coverName" class="custom-file-label " for="cover" aria-describedby="inputGroupFileAddon02">Choose file</label>
                    </div>
                            <div class="invalid-feedback">
                                    <!-- ambil error dari $validation -->
                                    <?= $validation->showError('cover'); ?>
                            </div>
                    <img src="" class="img-fluid mt-3 img-preview mx-auto d-block rounded" id="img-preview" width="220px" alt="">
                </div>
                <div class="col-md-7">
                    <div class="form-group">
                        <label for="isbn">Isbn</label>
                        <input type="text" class="form-control <?= ($validation->showError('isbn')) ? 'is-invalid' : '' ; ?>" name="isbn" id="isbn" value="<?= old('isbn'); ?>" >
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->showError('isbn'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control <?= ($validation->showError('judul')) ? 'is-invalid' : '' ; ?>" name="judul" id="judul" value="<?= old('judul'); ?>">
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->showError('judul'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pengarang">Pengarang</label>
                        <input type="text" class="form-control <?= ($validation->showError('pengarang')) ? 'is-invalid' : '' ; ?>" name="pengarang" id="pengarang" value="<?= old('pengarang'); ?>">
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->showError('pengarang'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control <?= ($validation->showError('penerbit')) ? 'is-invalid' : '' ; ?>" name="penerbit" id="penerbit" value="<?= old('penerbit'); ?>">
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->showError('penerbit'); ?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="section">Section</label>
                        <input type="text" class="form-control <?= ($validation->showError('section')) ? 'is-invalid' : '' ; ?>" name="section" id="section" value="<?= old('section'); ?>">
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->showError('section'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </div>
        </form>
</div>
  

<!-- End of Main Content -->
<?= $this->endSection('template'); ?>