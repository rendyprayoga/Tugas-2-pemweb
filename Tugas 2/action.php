<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tugas 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form class="input-box" action="action.php" method="get">
    <center><table class="table-box"border="1">
        <tr>
            <td colspan="3"><center>Output Data produk</center></td
        </tr>
        <tr>
            <td>Username</td>
            <td>:</td>
            <td><?= $_GET["user"];  ?></td>
        <tr>
            <td>Jenis Produk</td>
            <td>:</td>
            <td><?= $_GET["jenis"];  ?></td>
        </tr>
        <tr>
            </form>
        </tr>
    </table></center>
</body>
</html>