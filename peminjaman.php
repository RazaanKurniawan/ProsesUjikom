<div class="card">
    <div class="card-header">
        <h3 class="mt-3 text-center text-center">Peminjaman Buku</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=peminjaman_tambah" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
                <a href="?page=buku_list" class="btn btn-success mb-3"><i class="fa fa-eye"></i> Lihat List Buku</a>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
                    $query = mysqli_query($koneksi, "SELECT * FROM peminjaman LEFT JOIN user on user.id_user = peminjaman.id_user LEFT JOIN buku on buku.id_buku = peminjaman.id_buku WHERE peminjaman.id_user=" . $_SESSION['user']['id_user']);
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['nama']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
                            <td><?php echo $data['tanggal_peminjaman']; ?></td>
                            <td><?php echo $data['tanggal_pengembalian']; ?></td>
                            <td><?php echo $data['status_peminjaman']; ?></td>
                            <td>
                            <?php if($data['status_peminjaman'] != 'Dikembalikan'){ ?>
                                <a href="?page=peminjaman_edit&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-primary">Edit</a>
                                <a onclick="return confirm('Apakah anda yakin untuk menghapus kategori ini?')" href="?page=peminjaman_hapus&&id=<?php echo $data['id_peminjaman']; ?>" class="btn btn-danger">Hapus</a>
                            <?php } ?>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
</div>