<html>

<head>
    <title>Form Input Matakuliah</title>
</head>

<body>
    <center>
        <form action="<?= ('matakuliah/cetak'); ?>" method="post">
        <table>
            <tr>
                <th colspan="3">
                FORM INPUT DATA MAHASISWA
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>nim </th>
                <th>:</th>
                <td>
                    <input type="text" name="kode" id="kode">
                </td>
            </tr>
            <tr>
                <th>nama</th>
                <th>:</th>
                <td>
                    <input type="text" name="nama" id="nama">
                </td>
            </tr>
            <tr>
                <th>alamat</th>
                <th>:</th>
                <td>
                    <input type="text" name="alamat" id="alamat">
                </td>
            </tr>


            <tr>
                <th>usia </th>
                <td>:</td>
                <td>
                    <select name="usia" id="usia">
                        <option value="">MASUKAN USIA MU</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                    </select>
                    </select>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="3" align="center">
                    <input type="submit" value="submit">
                </td>
            </tr>
        </table>
</form>
</center>
</body>

</html>