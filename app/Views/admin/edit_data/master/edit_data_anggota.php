<?php foreach ($pegawai as $key => $valuepegawai) : ?>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title">
                        UBAH DATA PEGAWAI
                    </h2>
                    <?php echo form_open('master/simpan_edit_data_anggota/' . $valuepegawai['id_pegawai']) ?>
                    <div class="row pt-3">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>NIP</label>
                                <input type="text" class="form-control" name="nip" value="<?= $valuepegawai['nip'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= $valuepegawai['nama'] ?>">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nomor HP</label>
                                <input type="text" class="form-control" name="no_hp" value="<?= $valuepegawai['no_hp'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jabatan</label>
                                <select class="form-control" name="jabatan">
                                    <?php foreach ($jabatan as $key => $value) { ?>
                                        <option value="<?= $value['kode_jabatan'] ?>"><?= $value['nama_jabatan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Pendidikan Ijasah</label>
                                <input type="text" class="form-control" name="pen_ija" value="<?= $valuepegawai['pendidikan_ijasah'] ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Golongan Pegawai</label>
                                <select class="form-control" name="gol_peg">
                                    <?php foreach ($golongan as $key => $value) { ?>
                                        <option value="<?= $value['id_golongan'] ?>"><?= $value['golongan'], ' : ', $value['nama_golongan'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Status PNS</label>
                                <div class="form-check">
                                    <?php
                                    if ($valuepegawai['sts_pns'] == 'IYA') {
                                    ?>
                                        <input class="form-check-input" type="radio" name="sts_pns" id="exampleRadios1" value="IYA" checked>
                                        <label class="form-check-label pr-5" for="exampleRadios1">
                                            Ya
                                        </label>
                                        <input class="form-check-input" type="radio" name="sts_pns" id="exampleRadios2" value="TIDAK">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Tidak
                                        </label>
                                    <?php
                                    } else {
                                    ?>
                                        <input class="form-check-input" type="radio" name="sts_pns" id="exampleRadios1" value="IYA">
                                        <label class="form-check-label pr-5" for="exampleRadios1">
                                            Ya
                                        </label>
                                        <input class="form-check-input" type="radio" name="sts_pns" id="exampleRadios2" value="TIDAK" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Tidak
                                        </label>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="form-check">
                                    <?php
                                    if ($valuepegawai['jen_kel'] == 'L') {
                                    ?>
                                        <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios1" value="L" checked>
                                        <label class="form-check-label pr-5" for="exampleRadios1">
                                            Laki-laki
                                        </label>
                                        <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios2" value="P">
                                        <label class="form-check-label" for="exampleRadios2">
                                            Perempuan
                                        </label>
                                    <?php
                                    } else {
                                    ?>
                                        <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios1" value="L">
                                        <label class="form-check-label pr-5" for="exampleRadios1">
                                            Laki-laki
                                        </label>
                                        <input class="form-check-input" type="radio" name="jenkel" id="exampleRadios2" value="P" checked>
                                        <label class="form-check-label" for="exampleRadios2">
                                            Perempuan
                                        </label>
                                    <?php
                                    }
                                    ?>
                                </div>
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