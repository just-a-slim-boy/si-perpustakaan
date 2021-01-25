<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Pengembalian</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tb_pengembalian WHERE id ='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Nomor Buku</td> <td><?= $data['no_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengembalian</td> <td><?= $data['tgl_pengembalian'] ?></td>
                        </tr>
						<tr>
                            <td>Judul Buku</td> <td><?= $data['judul_buku'] ?></td>
                        </tr>
                        <tr>
                            <td>Pengarang</td> <td><?= $data['pengarang'] ?></td>
                        </tr>
                       
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=pengembalian&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Pengembalian </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

