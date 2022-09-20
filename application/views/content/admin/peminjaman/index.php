<section class="section">
    <div class="card">
        <div class="card-header">
            <?= $title; ?>
        </div>
        <div class="card-body">
            <div style="text-align: right;">
                <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#modaladdpeminjam">Tambah Data</button>
            </div>
            <br>
            <?php echo validation_errors(); ?>
            <?php
            if ($this->session->flashdata('pesan')) {
                echo '<div class="alert alert-success" role="alert">
                        Success ! ';
                echo $this->session->flashdata('pesan');
                echo '</div>';
            }
            ?>
            <table class="table" id="user">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama Lengkap</td>
                        <td>Dusun</td>
                        <td>Nama Barang</td>
                        <td>Proses</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        $no = 1;
                        foreach ($pinjam as $p) {
                        ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $p->nama; ?></td>
                        <td><?= $p->dusun; ?></td>
                        <td><?= $p->namaaset; ?></td>
                        <td><?= $p->proses; ?></td>
                        <td>
                            <button class="btn icon btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#edit<?= $p->idpeminjaman ?>"><i class="bi bi-pencil"></i></button>
                            <button class="btn icon btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#delete<?= $p->idpeminjaman ?>"><i class="fa fa-trash-alt"></i></button>
                        </td>
                    </tr>
                <?php } ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

</section>

<!-- Modal Tambah Peminjam -->
<div class="modal fade text-left" id="modaladdpeminjam" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Tambah Peminjam </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <i data-feather="x"></i>
                </button>
            </div>
            <?php
            echo form_open('peminjaman/add');
            ?>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama Lengkap" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" id="nik" class="form-control" placeholder="NIK" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Dusun</label>
                            <input type="text" name="dusun" id="dusun" class="form-control" placeholder="Dusun" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <select name="idaset" class="form-control" onkeypress='return harusHuruf(event)' oninvalid="this.setCustomValidity('Input Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                                <option value="">Select</option>
                                <?php foreach ($aset as $as) { ?>
                                    <option value="<?= $as->idaset ?>"><?= $as->namaaset ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Tanggal Pinjam</label>
                            <input type="date" name="tglpinjam" id="tglpinjam" class="form-control" placeholder="Tanggal Pinjam" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Tenggal Kembali</label>
                            <input type="date" name="tglkembali" id="tglkembali" class="form-control" placeholder="Tenggal Kembali" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
                        <div class="form-group">
                            <label>Proses</label>
                            <select class="form-control" id="proses" name="proses" oninvalid="this.setCustomValidity('Status Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                <option value="">Select</option>
                                <option value="Pinjam">Pinjam</option>
                                <option value="Kembali">Kembali</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                    <i class="bx bx-x d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Close</span>
                </button>
                <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                    <i class="bx bx-check d-block d-sm-none"></i>
                    <span class="d-none d-sm-block">Simpan</span>
                </button>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->

<!-- Modal Edit Peminjam -->
<?php foreach ($pinjam as $p) { ?>
    <div class="modal fade text-left" id="edit<?= $p->idpeminjaman ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Ubah Peminjam </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <form action="<?= base_url('peminjaman/edit/' . $p->idpeminjaman) ?>" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <input type="text" name="nama" value="<?= $p->nama ?>" class="form-control" placeholder="Nama Lengkap" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="number" name="nik" value="<?= $p->nik ?>" class="form-control" placeholder="NIK" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <input type="text" name="alamat" value="<?= $p->alamat ?>" class="form-control" placeholder="Alamat" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Dusun</label>
                                    <input type="text" name="dusun" value="<?= $p->dusun ?>" class="form-control" placeholder="Dusun" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <select name="idaset" class="form-control" onkeypress='return harusHuruf(event)' oninvalid="this.setCustomValidity('Input Wajib Diisi !!!')" oninput="setCustomValidity('')" required>
                                        <?php foreach ($aset as $as) {
                                            $selected = '';
                                            if ($as->namaaset == $as->namaaset) {
                                                $selected = 'selected';
                                            }
                                        ?>
                                            <option value="<?= $as->idaset ?>" <?= $selected ?>><?= $as->namaaset ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tanggal Pinjam</label>
                                    <input type="date" name="tglpinjam" value="<?= $p->tglpinjam ?>" class="form-control" placeholder="Tanggal Pinjam" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tenggal Kembali</label>
                                    <input type="date" name="tglkembali" value="<?= $p->tglkembali ?>" class="form-control" placeholder="Tenggal Kembali" oninvalid="this.setCustomValidity('Nama Lengkap Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                </div>
                            </div>
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Proses</label>
                                    <select class="form-control" name="proses" oninvalid="this.setCustomValidity('Status Wajib Di Isi !!!')" oninput="setCustomValidity('')" required>
                                        <?php if ($p->proses == 'Pinjam') { ?>
                                            <option value="Pinjam" selected>Pinjam</option>
                                            <option value="Kembali">Kembali</option>
                                        <?php } else if ($p->proses == 'Kembali') { ?>
                                            <option value="Pinjam">Pinjam</option>
                                            <option value="Kembali" selected>Kembali</option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                            <i class="bx bx-x d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Close</span>
                        </button>
                        <button type="submit" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                            <i class="bx bx-check d-block d-sm-none"></i>
                            <span class="d-none d-sm-block">Ubah</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->

<!-- Modal Hapus -->
<?php foreach ($pinjam as $p) { ?>
    <div class="modal fade text-left" id="delete<?= $p->idpeminjaman ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel33" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel33">Hapus Data Peminjam </h4>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <i data-feather="x"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <span>Apakah Anda Yakin Ingin Menghapus Data <?= $p->nama; ?> ?</span>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Close</span>
                    </button>
                    <a href="<?= base_url('peminjaman/delete/' . $p->idpeminjaman) ?>" class="btn bg-primary text-white">Hapus</a>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- End Modal -->