
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda | Tugas Rutin 9</title>

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

        .hero {
            background: #1363cc;
            color: white;
            padding: 45px 8%;
        }

        .hero h2 {
            font-size: 30px;
            margin-top: 0;
        }

        .hero p {
            line-height: 1.7;
            max-width: 650px;
        }

        main {
            max-width: 1000px;
            margin: 35px auto;
            padding: 0 20px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 14px;
            box-shadow: 0 5px 20px #0f172a12;
            margin-bottom: 25px;
        }

        .card h3 {
            color: #0169af;
            margin-top: 0;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
        }

        .info-item {
            background: #eff6ff;
            padding: 18px;
            border-radius: 10px;
            overflow-wrap: anywhere;
        }

        .info-item p {
            margin-bottom: 0;
        }

        .course-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(130px, 1fr));
            gap: 12px;
            padding: 0;
            list-style: none;
        }

        .course-list li {
            background: #e2e8f0;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            font-weight: bold;
        }

        footer {
            background: #0f172a;
            color: #cbd5e1;
            text-align: center;
            padding: 22px;
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

    <section class="hero">
        <h2>Selamat Datang di Website Saya</h2>
        <p>
            Website ini dibuat untuk memenuhi Tugas Rutin 9
            mata kuliah Pemrograman Web menggunakan framework Laravel.
        </p>
    </section>

    <main>
        <section class="card">
            <h3>Data Mahasiswa</h3>

            <div class="info-grid">
                <div class="info-item">
                    <strong>Nama</strong>
                    <p>{{ $student['name'] }}</p>
                </div>

                <div class="info-item">
                    <strong>Mata Kuliah</strong>
                    <p>{{ $student['program'] }}</p>
                </div>

                <div class="info-item">
                    <strong>Universitas</strong>
                    <p>{{ $student['university'] }}</p>
                </div>
            </div>
        </section>

        <section class="card">
            <h3>Materi yang Dipelajari</h3>

            <ul class="course-list">
                @foreach ($courses as $course)
                    <li>{{ $course }}</li>
                @endforeach
            </ul>
        </section>
    </main>

    <footer>
        &copy; 2026 Website Tugas Rutin 9 | Laravel
    </footer>
</body>
</html>