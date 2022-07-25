<?php foreach ($user as $key => $value) : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        UBAH DATA USER
                    </h2>
                    <?php echo form_open('master/simpan_edit_data_user/' . $value['id_user']) ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" name="username" value="<?= $value['username'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" name="password" value="<?= $value['password'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hak Akses</label>
                                <input type="text" class="form-control" name="hak_akses" value="ADMIN" readonly>
                            </div>
                        </div>
                    </div>

                    <div class="pt-2 mb-2">
                        <button type="submit" class="btn btn-primary w-md">Simpan</button>
                    </div>
                    <?php echo form_close() ?>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php endforeach; ?>