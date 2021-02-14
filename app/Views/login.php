
<div class="container">

    <!-- Flash Data Berhasil -->
    <div class="flash-data-berhasil" data-flashdataberhasil="<?= session()->getFlashData('success'); ?>"></div>
    <!-- Flash Data Gagal -->
    <div class="flash-data-gagal" data-flashdatagagal="<?= session()->getFlashData('gagal'); ?>"></div>
    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-7 col-lg-7 col-md-7">

            <div class="card o-hidden border-0 shadow-lg my-5 col-lg-8 mx-auto">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login</h1>
                                </div>

                                <!-- alert gagal -->
                                    <div class="flash-data-gagal" data-flashdata-gagal="<?= session()->getFlashData('gagal'); ?>"></div>
                                    
                                <!-- flash data dengan sweet alert -->
                                    <div class="flash-data-berhasil" data-flashdata-berhasil="<?= session()->getFlashData('success'); ?>"></div>

                                <form method="POST" action="/login/login" class="user">
                                    <div class="form-group">
                                        <input type="email" value="<?= old('email'); ?>" name="email" class="form-control form-control-user" placeholder="Enter Email Address..." id="email" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control form-control-user" placeholder="Password" id="password" required>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>