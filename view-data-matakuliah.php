<html> 
    <head>

        <title>FORM INPUT DATA MAHASISWA</title> 
    </head> 
    <body>
    <center> 
        <table> 
            <tr> <th colspan="3"> FORM INPUT DATA MAHASISWA </th> </tr> 
            <tr> <td colspan="3"> <hr> </td> </tr> 
            <tr> <th>nim</th> <th>:</th> <td> <?= $nim; ?> </td> </tr> 
            <tr> <td>Nama</td> <td>:</td> <td> <?= $nama; ?> </td> </tr> 
            <tr> <td>alamat</td> <td>:</td> <td> <?= $alamat; ?> </td> </tr> 
            <tr> <th>usia</th> <th>:</th> <td> <?= $usia; ?> </td> </tr>
            <tr> <td colspan="3" align="center"> 
                    <a href="<?= ('matakuliah'); ?>">Kembali</a> </td>


            </tr> 
        </table> 
    </center> 
</body> 
</html>