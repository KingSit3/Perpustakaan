<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>
<!-- Main Content -->

<nav class="navbar navbar-dark bg-light">
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
                            Tidak ada data buku! 
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-primary" href="/bylost" class="btn btn-primary text-center">Kembali</a>
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
                    <a href="/books/edit/<?= $book['id']; ?>" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a>
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
</div>
<?= $pager->links('buku', 'custom_pagination') ?>

<!-- End of Main Content -->
<?= $this->endSection('template'); ?>