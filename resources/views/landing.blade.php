<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TUGAS SIG 2024</title>
    <style>
        /* Reset default margin dan padding */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Gaya dasar halaman */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            min-height: 100vh;
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 10px 0;
            font-size: 2.5rem;
            color: #007BFF;
        }

        h2 {
            font-size: 1.2rem;
            margin-bottom: 5px;
            color: #333;
            text-align: left;
        }

        ul {
            list-style: none;
            margin-top: 20px;
        }

        /* Gaya tombol */
        li {
            margin: 10px 0;
        }

        a {
            text-decoration: none;
        }

        .button {
            display: inline-block;
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
            cursor: pointer;
        }

        .info {
            text-align: left;
            margin-bottom: 20px;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            h2 {
                font-size: 1rem;
            }

            .button {
                font-size: 0.9rem;
                padding: 8px 15px;
            }
        }
    </style>
</head>
<body>
    <h1>TUGAS SIG TAHUN 2024</h1>
    <div class="info">
        <h2>Nama: I Ketut Putra Swastika</h2>
        <h2>NIM: 2105541127</h2>
    </div>
    <br><br><br> 
    <h1>Daftar Tugas</h1>
    <ul>
        <li><a href="{{ url('/map') }}" class="button">Latihan</a></li>
        <li><a href="{{ url('/tugas1') }}" class="button">Tugas-HandsOn-1</a></li>
    </ul>
</body>
</html>
