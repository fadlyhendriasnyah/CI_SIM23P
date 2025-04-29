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
                <h3 class="card-title">Form Mata Kuliah</h3>
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
                <form action="<?php echo base_url()."Matakuliah/insert";?>" method="post">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="kode_matakuliah">Kode Mata Kuliah</label>
                            <input type="text" class="form-control" name="kode_matakuliah" id="kode_matakuliah" placeholder="Kode Mata Kuliah" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_matakuliah">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" name="nama_matakuliah" id="nama_matakuliah" placeholder="Nama Mata Kuliah" required>
                        </div>
                        <div class="form-group">
                            <label for="sks">SKS</label>
                            <select class="form-control" name="sks" id="sks" required>
                                <option value="" disabled selected>Pilih jumlah SKS</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="semester">Semester</label>
                            <select class="form-control" name="semester" id="semester" required>
                                <option value="" disabled selected>Pilih Semester</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis">Jenis</label>
                            <select class="form-control" name="jenis" id="jenis" required>
                                <option value="" disabled selected>Pilih Jenis Mata Kuliah</option>
                                <option value="Umum">Umum</option>
                                <option value="Wajib">Wajib</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="prodi">Program Studi</label>
                            <select class="form-control" name="prodi" id="prodi" required>
                                <option value="" disabled selected>Pilih Jenis Prodi</option>
                                <option value="Sistem Informasi">Sistem Informasi</option>
                                <option value="Teknologi Informasi">Teknologi Informasi</option>
                                <option value="Komputasi Akuntansi">Komputasi Akuntansi</option>
                            </select>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
            </div>
        </div>
    </section>
</div>
