<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Tanda Tangan Digital</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            color: #fff;
        }

        .container {
            background: rgba(255, 255, 255, 0.1);
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            backdrop-filter: blur(10px);
            max-width: 400px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 28px;
        }

        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            box-sizing: border-box;
            font-size: 14px;
        }

        button {
            background: #ff7eb3;
            color: #fff;
            padding: 12px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        button:hover {
            background: #ff4f81;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Buat Tanda Tangan Digital</h1>
        <form action="{{ route('signature.store') }}" method="POST">
            @csrf
            <label for="name">Nama:</label>
            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required>

            <label for="document_url">URL Dokumen:</label>
            <input type="url" id="document_url" name="document_url" placeholder="Masukkan URL dokumen" required>

            <button type="submit">Buat QR Code</button>
        </form>
    </div>
</body>
</html>
