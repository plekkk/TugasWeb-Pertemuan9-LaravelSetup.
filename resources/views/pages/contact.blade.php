
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak | Tugas Rutin 9</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f5f9;
            color: #1e293b;
        }

        header {
            background: #0f172a;
            color: white;
            padding: 25px 8%;
        }

        header h1 {
            margin: 0 0 18px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 22px;
        }

        nav a:hover {
            color: #93c5fd;
        }

        main {
            max-width: 850px;
            margin: 45px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 30px;
            border-radius: 14px;
            box-shadow: 0 5px 20px #0f172a12;
        }

        .card h2 {
            color: #1d4ed8;
            margin-top: 0;
        }

        .info {
            background: #eff6ff;
            padding: 15px;
            margin-top: 15px;
            border-radius: 8px;
        }

        footer {
            text-align: center;
            padding: 25px;
            color: #64748b;
        }
    </style>
</head>
<body>
    <header>
        <h1>Website Tugas Rutin 9</h1>
        <nav>
            <a href="{{ route('home') }}">Beranda</a>
            <a href="{{ route('about') }}">Tentang</a>
            <a href="{{ route('contact') }}">Kontak</a>
        </nav>
    </header>

    <main>
        <section class="card">
            <h2>Hubungi Kami</h2>
            <p>Informasi kontak untuk keperluan mata kuliah Pemrograman Web.</p>

            <div class="info">
                <strong>Email</strong>
                <p>{{ $contact['email'] }}</p>
            </div>

            <div class="info">
                <strong>Mata Kuliah</strong>
                <p>{{ $contact['course'] }}</p>
            </div>
        </section>
    </main>

    <footer>
        &copy; 2026 Website Tugas Rutin 9
    </footer>
</body>
</html>