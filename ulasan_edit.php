<div class="card">
    <div class="card-header">
        <h4 class="mt4 text-center">Ulasan</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <form action="" method="POST">
                    <?php
                    $id = $_GET['id'];
                    if (isset($_POST['submit'])) {
                        $id_kategori = $_POST['id_kategori'];
                        $id_user = $_SESSION['user']['id_user'];
                        $penulis = $_POST['penulis'];
                        $query = mysqli_query($koneksi, "UPDATE buku SET id_kategori='$id_kategori', judul='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit', deskripsi='$deskripsi' WHERE id_buku=$id");

                        if ($query) {
                            echo '<script>alert("Edit data berhasil!"); location.href="?page=buku";</script>';
                        } else {
                            echo '<script>alert("Edit data gagal, Coba lagi"); location.href="?page=buku_edit"</script>';
                        }
                    }
                    $query = mysqli_query($koneksi, "SELECT * FROM ulasan WHERE id_ulasan=$id");
                    $data = mysqli_fetch_array($query);
                    ?>
                    <div class="row form-group">
                        <div class="col-md-2">Judul Buku</div>
                        <div class="col-md-8">
                            <select name="id_buku" id="id_buku" class="form-control">
                                <?php
                                $buk = mysqli_query($koneksi, "SELECT * FROM buku");
                                while ($buku = mysqli_fetch_array($buk)) {
                                ?>
                                    <option <?php if ($buku['id_buku'] == $data['id_buku']) echo 'selected'; ?> value="<?php echo $buku['id_buku'] ?>"><?php echo $buku['judul'] ?></option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Ulasan</div>
                        <div class="col-md-8"><input type="text" value="<?php echo $data['ulasan'] ?>" required name="ulasan" class="form-control"></div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-2">Rating</div>
                        <div class="col-md-8">
                            <select name="rating" id="rating" class="form-control">
                                <?php 
                                for($i = 1; $i <= 10; $i++){
                                ?>
                                <option <?php if($data['rating'] == $i) echo 'selected' ?>><?php echo $i; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-8">
                            <button type="submit" class="btn btn-primary" name="submit" value="submit">Simpan</button>
                            <button type="reset" class="btn btn-danger" name="reset" value="reset">Reset</button>
                            <a href="?page=kategori" class="btn btn-warning" name="back" value="back">Kembali</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>