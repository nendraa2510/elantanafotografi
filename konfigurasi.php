<div id="hilang">
    <?= $this->session->flashdata('alert'); ?>
</div>
<form action="<?= base_url("admin/konfigurasi/update") ?>" method="post">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalCenterTitle">Konfigurasi</h5>
        </div>
        <div class="modal-body">
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">judul website</label>
                    <input type="text" class="form-control" name="judul_website" value="<?= $konfig->judul_website; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Peofil website</label>
                    <textarea name="profil_website" class="form-control"><?= $konfig->profil_website; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Instagram</label>
                    <input type="text" class="form-control"  name="instagram" value="<?= $konfig->instagram; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">facebook</label>
                    <input type="text" class="form-control"  name="facebook" value="<?= $konfig->facebook; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Emel</label>
                    <input type="email" class="form-control"  name="email" value="<?= $konfig->email; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">Alamat</label>
                    <input type="text" class="form-control"  name="alamat" value="<?= $konfig->alamat; ?>" required />
                </div>
            </div>
            <div class="row">
                <div class="col mb-3">
                    <label class="form-label">No wa</label>
                    <input type="text" class="form-control" name="no_wa" value="<?= $konfig->no_wa; ?>" required />
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">SIMPAN</button>
        </div>
    </div>
</form>