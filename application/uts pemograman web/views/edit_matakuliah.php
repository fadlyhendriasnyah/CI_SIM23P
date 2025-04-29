<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>form Berita</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Blank Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Update Matakuliah</h3>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            <div class="card-body">
    <form action="<?= base_url('matakuliah/update/'. $matakuliah['id']);?>" method="POST">
        <div class="box-body">
            <div class="form-group">
                <label for="kode_matakuliah">Kode Mata Kuliah</label>
                <input type="text" class="form-control" name="kode_matakuliah" value="<?= $matakuliah['kode_matakuliah'];?>" id="kode_matakuliah" placeholder="Kode Mata Kuliah" required>
            </div>
            <div class="form-group">
                <label for="nama_matakuliah">Nama Mata Kuliah</label>
                <input type="text" class="form-control" name="nama_matakuliah" value="<?= $matakuliah['nama_matakuliah'];?>" id="nama_matakuliah" placeholder="Nama Mata Kuliah" required>
            </div>
            <div class="form-group">
                <label for="sks">SKS</label>
                <input type="number" class="form-control" name="sks" value="<?= $matakuliah['sks'];?>" id="sks" placeholder="SKS" required>
            </div>
            <div class="form-group">
                <label for="semester">Semester</label>
                <input type="number" class="form-control" name="semester" value="<?= $matakuliah['semester'];?>" id="semester" placeholder="Semester" required>
            </div>
            <div class="form-group">
                <label for="jenis">Jenis</label>
                <select class="form-control" name="jenis" id="jenis" required>
                    <option value="" disabled>Pilih Jenis Mata Kuliah</option>
                    <option value="Umum" <?= ($matakuliah['jenis'] == 'Umum') ? 'selected' : ''; ?>>Umum</option>
                    <option value="Wajib" <?= ($matakuliah['jenis'] == 'Wajib') ? 'selected' : ''; ?>>Wajib</option>
                </select>
            </div>
            <div class="form-group">
                <label for="prodi">Program Studi</label>
                <select class="form-control" name="prodi" id="prodi" required>
                    <option value="" disabled>Pilih Program Studi</option>
                    <option value="Sistem Informasi" <?= ($matakuliah['prodi'] == 'Sistem Informasi') ? 'selected' : ''; ?>>Sistem Informasi</option>
                    <option value="Teknologi Informasi" <?= ($matakuliah['prodi'] == 'Teknologi Informasi') ? 'selected' : ''; ?>>Teknologi Informasi</option>
                    <option value="Komputasi Akuntansi" <?= ($matakuliah['prodi'] == 'Komputasi Akuntansi') ? 'selected' : ''; ?>>Komputasi Akuntansi</option>
                </select>
            </div>
        </div>
        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="<?= base_url('Matakuliah');?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>

