<?php
include "../../../config/database.php";
$query = mysqli_query ($koneksi, "select * from menus WHERE id_produk ='$_GET[id_produk]' ");
$row = mysqli_fetch_array($query);
?>
<form method= "POST" action="/admin/update">;
<class= table>
    <tr>
        <td>ID Produk</td>
        <td><input type="text" class="form-control form=control-sm" name="id_produk" value="<?php
        echo $row['id_produk']; ?>"></td>
    </tr>
<tr>
    <td>Nama</td>
    <td><input type="text" class="form-control form=control-sm" name="nama_produk" value="<?php
        echo $row['nama_produk']; ?>"></td>
</tr>
<tr>
    <td>Stok</td>
    <td><input type="number" class="form-control form=control-sm" name="stok" value="<?php
        echo $row['stok']; ?>"></td>
</tr>
<tr>
    <td>Harga</td>
    <td><input type="number" class="form-control form=control-sm" name="harga" value="<?php
        echo $row['harga']; ?>"></td>
</tr>
<tr>
    <td colspan="2"><input class="form-control form=control-sm" type="submit" value="simpan">
        <a href = "/admin/simpan">
            <input type="button" value="kembali">
        </a>
    </td>
</tr>
</table>
</form>