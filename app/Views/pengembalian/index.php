<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>
<!-- Main Content -->

<nav class="navbar navbar-dark bg-light">

    <form action="" method="GET" class="form-inline">
        <input class="form-control mr-2 " name="keyword" type="text" placeholder="cari...">
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
            <?php if( !$peminjaman ){ ?>

                <div class="row mt-4 text-center">
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            Tidak ada data Pengembalian!
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-primary" href="/pengembalian" class="btn btn-primary text-center">Kembali</a>
                    </div>
                </div>

                <?php }else{ ?>    

        <table class="table table-hover">
            <thead class="">
                <tr align="center">
                <th scope="col">#</th>
                <th scope="col">ID Buku</th>
                <th class="judul_peminjaman" scope="col">Judul Buku</th>
                <th scope="col">ID Anggota</th>
                <th class="peminjaman_nama" scope="col">Nama</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="">
                <?php csrf_field(); ?>
                <?php $i = 1 + ($DataPerPage * ($currentPage -1)); ?>
                <?php foreach($peminjaman as $pinjam):  ?>
                    <tr id="dataTabel">
                    <th scope="row"><?= esc($i); ?></th>
                    <!-- esc() = untuk bantu mencegah XSS attack-->
                    <td class="buku.id"><?= esc($pinjam['id_buku']); ?></td>
                    <td class=""><?= esc($pinjam['judul']); ?></td>
                    <td class="no_anggota"><?= esc($pinjam['no_anggota']); ?></td>
                    <td class="nama"><?= esc($pinjam['nama']); ?></td>
                            
                    <td id="button">
                    <a href="/pengembalian/detail/<?= $pinjam['id_peminjaman']; ?>" class="btn btn-primary btn-circle"><i class="fas fa-info"></i></a>
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

<!-- End of Main Content -->
<?= $this->endSection('template'); ?>