<?= $this->extend('layout/template'); ?>
<?= $this->section('template'); ?>

<div id="content">

<div class="container mt-3">
    <div class="row">
        <div class="col">

        <form action="/users/update/<?= $user['id']; ?>" method="POST" enctype="multipart/form-data">
          <?= csrf_field(); ?>
            <div class="row">
                <input type="hidden" name="oldProfile" value="<?= $user['profil']; ?>">
                <div class="col-md-5 justify-content-center">
                    <label for="profil">profil (Max 3MB)</label>
                    <div class="custom-file">
                        <input type="file" id="cover" name="profil" class="custom-file-input <?= ($validation->hasError('profil')) ? 'is-invalid' : '' ; ?>" id="profil" value="<?= (old('profil')? old('profil') : $user['profil']); ?>"  onchange="previewImage()">
                        <label id="coverName" class="custom-file-label " for="profil" aria-describedby="inputGroupFileAddon02">Choose file</label>
                        <div class="invalid-feedback">
                                <!-- ambil error dari $validation -->
                                <?= $validation->getError('profil'); ?>
                        </div>
                    </div>
                    <img src="/profile/<?= (old('profil')? old('profil') : $user['profil']); ?>" class="img-fluid mt-3 img-preview mx-auto d-block rounded" id="img-preview" width="220px" alt="">
                </div>

                <div class="col-md-7">

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="no_anggota">ID Anggota</label>
                                <input type="text" class="form-control" name="no_anggota" value="<?= $user['no_anggota']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" name="email" value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nama">nama</label>
                        <input type="text" class="form-control <?= ($validation->showError('nama')) ? 'is-invalid' : '' ; ?>" name="nama" id="nama" value="<?= (old('nama') ? old('nama') : $user['nama']); ?>">
                            <div class="invalid-feedback">
                                    <!-- ambil error dari $validation -->
                                    <?= $validation->showError('nama'); ?>
                            </div>
                    </div>

                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin" id="jenis_kelamin">
                                    <?php if( $user['jenis_kelamin'] == 'L' ): ?>
                                        <option value="L" selected>Laki-Laki</option>
                                        <option value="P" >Perempuan</option>
                                    <?php else: ?>
                                        <option value="P" selected>Perempuan</option>
                                        <option value="L" >Laki-Laki</option>
                                    <?php endif; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-8">
                            <div class="form-group">
                            <label for="no_telp">Nomor Telepon</label>
                            <input type="text" class="form-control <?= ($validation->showError('no_telp')) ? 'is-invalid' : '' ; ?>" name="no_telp" id="no_telp" value="<?= (old('no_telp') ? old('no_telp') : $user['no_telp']); ?>">
                                <div class="invalid-feedback">
                                        <!-- ambil error dari $validation -->
                                        <?= $validation->showError('no_telp'); ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                            <label for="ttl">Tempat Tanggal lahir</label>
                            <input type="text" class="form-control <?= ($validation->showError('ttl')) ? 'is-invalid' : '' ; ?>" name="ttl" id="ttl" value="<?= (old('ttl') ? old('ttl') : $user['ttl']); ?>" readonly>
                                <div class="invalid-feedback">
                                        <!-- ambil error dari $validation -->
                                        <?= $validation->showError('ttl'); ?>
                                </div>
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

<?= $this->endSection('template'); ?>