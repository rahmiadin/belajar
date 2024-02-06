<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
            }
            
            table {
                width: 100%;
                border-collapse: collapse;
                margin: 20px;
            }

            th,td {
                border: 1px solid #ddd;
                padding: 12px;
                text-align: left;
            }

            th {
                background-color: #4caf50;
                color: white;
                text-align: center;
            }

            tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            h2 {
                text-align: center;
            }
            button {
                display: flex;
                width: 100px;
                height: 30px;
                justify-content: center;
                align-items: center;
            }
        </style>
    </head>
    <body>
    <div>
        <h2>DATA BUKU TAMU</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $sql = "SELECT*FROM tbtamu";
                $query = mysqli_query ($koneksi, $sql);

                while ($data=mysqli_fetch_array($query)){?>
                    <tr>
                        <td><?php echo $data['nama'];?></td>
                        <td><?php echo $data['email'];?></td>
                        <td><?php echo $data['pesan'];?></td>
                        <td>
                            <a href="hapus.php?id=<?php echo $data['nama'];?>"
                            onclick="return confirm('Yakin Mau Hapus .?')">
                            <span class="text"></span>Hapus</Details> </span>
                </a>
                </td>
                    </tr>
                    <?php } ?>
            </tbody>
        </table>
        <form method="post" action="index.php">
            <button type="submit">Kembali</button>
                </form>
    </div>
    </body>
</html>