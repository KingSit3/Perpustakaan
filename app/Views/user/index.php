<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>
<!-- Main Content -->

<nav class="navbar navbar-dark bg-light">

    <!-- Button trigger modal -->
    <a href="/users/adduser" class="btn btn-primary">Tambah User</a>
  
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
            <?php if( !$users ){ ?>

                <div class="row mt-4 text-center">
                    <div class="col">
                        <div class="alert alert-danger" role="alert">
                            Tidak ada data Anggota! 
                        </div>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col">
                        <a class="btn btn-primary" href="/users" class="btn btn-primary text-center">Kembali</a>
                    </div>
                </div>

                <?php }else{ ?>    

        <table class="table table-hover">
            <thead class="">
                <tr align="center">
                <th scope="col">#</th>
                <th scope="col">Profil</th>
                <th scope="col">ID Anggota</th>
                <th scope="col">Nama</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="">
                <?php csrf_field(); ?>
                <?php $i = 1 + ($dataPerPage * ($currentPage - 1)); ?>
                <?php foreach($users as $user):  ?>
                    <tr id="dataTabel">
                    <th scope="row"><?= esc($i); ?></th>
                    <!-- esc() = untuk bantu mencegah XSS attack-->
                    <td><img src="/profile/<?= esc($user['profil']); ?>" class="image" alt="profil"></td>
                    <td class="no_anggota"><?= esc($user['no_anggota']); ?></td>
                    <td class="nama"><?= esc($user['nama']); ?></td>
                    <td class="jenis_kelamin"><?= esc( (($user['jenis_kelamin'] == 'L') ? 'Laki-Laki' : 'Perempuan') ); ?></td>
                    <td class="email"><?= esc($user['email']); ?></td>
                            
                    <td id="button">
                    <a href="/users/detail/<?= $user['id']; ?>" class="btn btn-primary btn-circle"><i class="fas fa-info"></i></a>
                    <a href="/users/edit/<?= $user['id']; ?>" class="btn btn-warning btn-circle"><i class="fas fa-edit"></i></a>
                    <a href="/users/delete/<?= $user['id']; ?>" class="btn btn-danger tombol-hapus btn-circle"><i class="fas fa-trash"></i></a>
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
<?= $pager->Links('user', 'custom_pagination') ?>

<!-- End of Main Content -->
<?= $this->endSection('template'); ?>