<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Pengguna</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            color: #333;
            display: flex;
            justify-content: center;
            padding: 40px 20px;
        }

        .container {
            background-color: #ffffff;
            max-width: 500px;
            width: 100%;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        h1 {
            font-size: 22px;
            color: #2c3e50;
            margin-bottom: 20px;
            text-align: center;
        }

        h2 {
            font-size: 18px;
            color: #2c3e50;
            margin-top: 30px;
            margin-bottom: 15px;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 8px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: 600;
            font-size: 14px;
            color: #34495e;
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            margin-bottom: 15px;
            font-size: 14px;
            font-family: inherit;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        .radio-group {
            margin-bottom: 15px;
        }

        .radio-group label {
            display: inline-block;
            margin-right: 15px;
            font-weight: normal;
        }

        button {
            background-color: #3498db;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            width: 100%;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #2980b9;
        }

        .hasil {
            background-color: #ecf0f1;
            padding: 15px;
            border-radius: 10px;
        }

        .hasil p {
            margin-bottom: 8px;
            font-size: 14px;
        }

        .hasil strong {
            color: #2c3e50;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1>Form Input Data Pengguna</h1>

        <form action="" method="post">
            <label for="nama">Nama</label>
            <input type="text" id="nama" name="nama" required>

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label>Jenis Kelamin</label>
            <div class="radio-group">
                <label>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki" required> Laki-laki
                </label>
                <label>
                    <input type="radio" name="jenis_kelamin" value="Perempuan" required> Perempuan
                </label>
            </div>

            <label for="alamat">Alamat</label>
            <textarea id="alamat" name="alamat" required></textarea>

            <label for="telepon">Nomor Telepon</label>
            <input type="tel" id="telepon" name="telepon" required>

            <button type="submit" name="submit">Submit</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama          = $_POST['nama'];
            $email         = $_POST['email'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $alamat        = $_POST['alamat'];
            $telepon       = $_POST['telepon'];
        ?>

            <h2>Data yang Anda Masukkan</h2>
            <div class="hasil">
                <p><strong>Nama:</strong> <?php echo $nama; ?></p>
                <p><strong>Email:</strong> <?php echo $email; ?></p>
                <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
                <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
                <p><strong>Nomor Telepon:</strong> <?php echo $telepon; ?></p>
            </div>

        <?php
        }
        ?>
    </div>

</body>
</html>