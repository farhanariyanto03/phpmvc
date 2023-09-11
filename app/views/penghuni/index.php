<div class="container mt-5">
    <div class="row">
        <div class="col-6">
            <h3>Daftar Penghuni</h3>
            <ul class="list-group"> 
                <?php foreach( $data['penghuni'] as $png) : ?>
                    <li class="list-group-item"><?php echo $png['nama_penghuni']; ?></li>
                    <li class="list-group-item"><?php echo $png['alamat']; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
