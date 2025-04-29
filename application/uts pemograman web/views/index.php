<div class="content-wrapper">

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Mata Kuliah</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mata Kuliah</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Mata Kuliah</h3>
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
                <a href="<?= base_url('matakuliah/tambah'); ?>" class="btn btn-primary mb-3">Tambah Mata Kuliah</a>
                <?php if (!empty($matakuliah)): ?>
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Jenis</th>
                                <th>Program Studi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($matakuliah as $m): ?>
                                <tr>
                                    <td><?= $m['kode_matakuliah']; ?></td>
                                    <td><?= $m['nama_matakuliah']; ?></td>
                                    <td><?= $m['jenis']; ?></td>
                                    <td><?= $m['prodi']; ?></td>
                                    <td>
                                        <a href="<?= base_url('matakuliah/edit/'. $m['id']); ?>" class="btn btn-sm btn-info">Edit</a>
                                        <a href="<?= base_url('matakuliah/hapus/'. $m['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus mata kuliah ini?')">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php else: ?>
                    <p>Tidak ada mata kuliah yang tersedia</p>
                <?php endif; ?>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>
</div>