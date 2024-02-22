<div class="card">
    <div class="card-header">
        <h3 class="mt-3 text-center">List Buku</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Deskripsi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori");
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['penulis']; ?></td>
                            <td><?php echo $data['penerbit']; ?></td>
                            <td><?php echo $data['tahun_terbit']; ?></td>
                            <td><?php echo $data['deskripsi']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>