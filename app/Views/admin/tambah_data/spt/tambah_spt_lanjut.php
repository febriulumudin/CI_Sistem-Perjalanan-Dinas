<?php foreach ($surat_tugas as $key => $value) { ?>
    <div class="row">
        <div class="col-12">
            <div class="card mt-1 mb-1">
                <div class="card-body">
                    <h2 class="card-title" style="font-size: 18px;">
                        PILIH PESERTA YANG IKUT DALAM PERINTAH TUGAS
                    </h2>
                    <?php echo form_open('/spt/simpan_data_spt_lanjut_db/' . $value['no_program']) ?>
                    <div class="table-responsive" style="width: 80%;">
                        <table id="datatable" class="table table-striped table-bordered thead-primary dataTable no-footer table-hover" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th class="text-center">Check</th>
                                    <th class="text-center">Nip</th>
                                    <th class="text-center">Nama Pegawai</th>
                                    <th class="text-center">Jabatan</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                foreach ($anggota as $key => $valueuser) { ?>
                                    <tr class="text-center">
                                        <td><input type="checkbox" name="nip[]" value="<?= $valueuser['nip'] ?>" /></td>
                                        <td><?= $valueuser['nip'] ?></td>
                                        <td><?= $valueuser['nama'] ?></td>
                                        <td><?= $valueuser['nama_jabatan'] ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-md btn-outline-primary float-right mt-3 mb-2">
                            <strong>Simpan Data</strong>
                        </button>
                    </div>
                    <?php echo form_close() ?>
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->
<?php } ?>