<div class="container mt-3">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Penghuni</h3>
            <div class="row">
                <div class="col-lg-6">
                    <?php Flasher::flash(); ?>
                </div>
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formodal">
                Tambah
            </button><br><br>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nama Penghuni</th>
                        <th>Alamat</th>
                        <th>Jenis Kelamin</th>
                        <th>Agama</th>
                        <th>Foto</th>
                        <th>AKsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['penghuni'] as $png) : ?>
                        <tr>
                            <td><?php echo $png['nama_penghuni']; ?></td>
                            <td><?php echo $png['alamat']; ?></td>
                            <td><?php echo $png['jenis_kelamin']; ?></td>
                            <td><?php echo $png['agama']; ?></td>
                            <td><?php echo $png['foto']; ?></td>
                            <td>
                                <form method="POST" action="http://localhost/phpmvc/public/penghuni/deletePenghuni/<?php echo $png['id_Penghuni']; ?>">
                                    <button type="submit" onclick="return confirm('apakah ingin dihapus')" class="btn btn-danger">Hapus</button>
                                </form>
                                <a href="http://localhost/phpmvc/public/penghuni/editPenghuni/<?php echo $png['id_Penghuni']; ?>" class="btn btn-success">Edit</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="formodal" tabindex="-1" role="dialog" aria-labelledby="formodal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Penghuni</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="http://localhost/phpmvc/public/penghuni/addPenghuni" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama_penghuni">Nama Penghuni</label>
                            <input type="text" class="form-control" id="nama_penghuni" name="nama_penghuni" placeholder="Masukkan Nama">
                        </div>
                        <!-- <div class="form-group">
                            <label for="nama">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tanggallhr" name="txtTglLahir">
                        </div> -->
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukkan Alamat">
                        </div>
                        <div class="form-check">
                            <label for="jenisKelmain">Jenis Kelamin</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdJK" id="jenisKelamin1" value="Laki-Laki">
                                <label class="form-check-label" for="jenisKelamin1">Laki-Laki</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="rdJK" id="jenisKelamin1" value="Laki-Laki">
                                <label class="form-check-label" for="jenisKelamin1">Perempuan</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="agama">
                                <option>Islam</option>
                                <option>Kristen</option>
                                <option>Khatolik</option>
                                <option>Hindu</option>
                                <option>Budha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Foto</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="foto">
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>