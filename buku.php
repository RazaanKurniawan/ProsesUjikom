<<<<<<< HEAD
<div class="cantainer-fluid">
=======
>>>>>>> f8503d2db7f2bea3bb32e6b99dde243438f9fa80
<div class="card">
    <div class="card-header">
        <h3 class="mt-3 text-center">Buku</h3>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <a href="?page=buku_tambah" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Data</a>
<<<<<<< HEAD
                <div class="col-md-6 mx-auto">
                <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" name="tcari" class="form-control" placeholder="Masukan Kata Kunci...">
                    <button type="submit" class="btn-success" name="bcari">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="27px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                    </svg>
                    </button>
                    <button type="reset" class="btn-danger" name="rcari">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="27px">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                    </svg>

                    </button>
                </div>
                </form>
                </div>
                <table class="table table-bordered" width="100%" id="dataTable" cellspacing="0">
=======
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
>>>>>>> f8503d2db7f2bea3bb32e6b99dde243438f9fa80
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Judul Buku</th>
<<<<<<< HEAD
=======
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Deskripsi</th>
>>>>>>> f8503d2db7f2bea3bb32e6b99dde243438f9fa80
                        <th>Aksi</th>
                    </tr>
                    <?php
                    $i = 1;
<<<<<<< HEAD

                    if(isset($_POST['bcari'])) {
                        $keyword = $_POST['tcari'];

                        $q = "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori WHERE kategori LIKE '%$keyword%' OR judul LIKE '%$keyword%' OR penulis LIKE '%$keyword%' OR penerbit LIKE '%$keyword%' OR tahun_terbit LIKE '%$keyword%' ORDER BY id_buku desc";
                    }else{
                        $q = "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori ORDER BY id_buku desc";
                    }

                    $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori ORDER BY id_buku desc");
=======
                    $query = mysqli_query($koneksi, "SELECT * FROM buku LEFT JOIN kategori on kategori.id_kategori = buku.id_kategori");
>>>>>>> f8503d2db7f2bea3bb32e6b99dde243438f9fa80
                    while ($data = mysqli_fetch_array($query)) {
                    ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $data['kategori']; ?></td>
                            <td><?php echo $data['judul']; ?></td>
<<<<<<< HEAD
                            <td>
                                <a href="?page=buku_edit&&id=<?php echo $data['id_buku']; ?>" class="btn btn-primary">Edit</a>
                                <a href="?page=buku_show&&id=<?php echo $data['id_buku']; ?>" class="btn btn-success">Show More</a>
=======
                            <td><?php echo $data['penulis']; ?></td>
                            <td><?php echo $data['penerbit']; ?></td>
                            <td><?php echo $data['tahun_terbit']; ?></td>
                            <td><?php echo $data['deskripsi']; ?></td>
                            <td>
                                <a href="?page=buku_edit&&id=<?php echo $data['id_buku']; ?>" class="btn btn-primary">Edit</a>
>>>>>>> f8503d2db7f2bea3bb32e6b99dde243438f9fa80
                                <a onclick="return confirm('Apakah anda yakin untuk menghapus kategori ini?')" href="?page=buku_hapus&&id=<?php echo $data['id_buku']; ?>" class="btn btn-danger">Hapus</a>
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
<<<<<<< HEAD
</div>
=======
>>>>>>> f8503d2db7f2bea3bb32e6b99dde243438f9fa80
</div>