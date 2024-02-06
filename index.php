<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku Tamu</title>
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

    .container {
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      width: 300px;
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin: 10px 0 5px;
    }

    input {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    textarea {
      width: 100%;
      padding: 8px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }

    button {
      background-color: #4caf50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>

<div class="container">
  <h2>Buku Tamu</h2>
  <form action="simpan.php" method="post">
    <label for="nama">Nama:</label>
    <input type="text" id="nama" name="nama" required>

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>

    <label for="pesan">Pesan:</label>
    <textarea id="pesan" name="pesan" rows="4" required></textarea>

    <button type="submit">Kirim</button>
  </form>
</div>

</body>
</html>
  
