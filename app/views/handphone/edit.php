<h2>Edit handphone</h2>

<form action="<?php echo URL; ?>/handphone/update" method="post">
    <input type="hidden" name="id" value="<?php echo $data['row']['id']; ?>">
    <table>
        <tr>
            <td>MERK</td>
            <td><input type="text" name="merk" value="<?php echo $data['row']['merk']; ?>" required></td>
        </tr>
        <tr>
            <td>WARNA</td>
            <td><input type="text" name="warna" value="<?php echo $data['row']['warna']; ?>" required></td>
        </tr>
        <tr>
            <td>HARGA</td>
            <td><input type="text" name="harga" value="<?php echo $data['row']['harga']; ?>" required></td>
        </tr>
        <tr>
            <td>RAM</td>
            <td><input type="text" name="ram" value="<?php echo $data['row']['ram']; ?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_update" value="UPDATE"></td>
        </tr>
    </table>
</form>