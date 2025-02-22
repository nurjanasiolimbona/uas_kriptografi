<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Tanda Tangan Digital</title>
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
            max-width: 500px;
            width: 100%;
            box-sizing: border-box;
            text-align: center;
        }

        h1 {
            margin-bottom: 30px;
            font-size: 28px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
        }

        a {
            color: #ff7eb3;
            text-decoration: none;
            transition: color 0.3s;
        }

        a:hover {
            color: #ff4f81;
        }

        img {
            margin-top: 20px;
            max-width: 100%;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Detail Tanda Tangan Digital</h1>
        <p><strong>Nama:</strong> {{ $signature->name }}</p>
        <p><strong>URL Dokumen:</strong> <a href="{{ $signature->document_url }}" target="_blank">{{ $signature->document_url }}</a></p>
        <p><strong>QR Code:</strong></p>
        <img src="{{ asset('storage/' . $signature->qr_code_path) }}" alt="QR Code">
    </div>
</body>
</html>
