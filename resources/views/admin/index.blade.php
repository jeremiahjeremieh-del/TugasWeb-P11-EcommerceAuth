
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin - E-Commerce</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f3f6fb;
            color: #172b4d;
        }

        header {
            background: #1769ef;
            color: white;
            padding: 22px 6%;
        }

        header h1 {
            margin: 0;
        }

        main {
            width: 88%;
            max-width: 1100px;
            margin: 35px auto;
        }

        .welcome {
            margin-bottom: 25px;
            color: #64748b;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px #00000008;
        }

        .card p {
            color: #64748b;
            margin-top: 0;
        }

        .card h2 {
            font-size: 30px;
            color: #1769ef;
            margin-bottom: 0;
        }

        .actions {
            margin-top: 30px;
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }

        .btn {
            display: inline-block;
            padding: 12px 18px;
            border-radius: 8px;
            background: #1769ef;
            color: white;
            text-decoration: none;
            border: none;
            cursor: pointer;
        }

        .btn.secondary {
            background: white;
            color: #1769ef;
            border: 1px solid #1769ef;
        }

        @media (max-width: 750px) {
            .cards {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 450px) {
            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Dashboard Admin</h1>
        <p>E-Commerce Management System</p>
    </header>

    <main>
        <h2>Selamat datang, {{ auth()->user()->name }}!</h2>
        <p class="welcome">
            Berikut ringkasan data toko online kamu.
        </p>

        <section class="cards">
            <div class="card">
                <p>Total Produk</p>
                <h2>{{ $totalProducts }}</h2>
            </div>

            <div class="card">
                <p>Total Kategori</p>
                <h2>{{ $totalCategories }}</h2>
            </div>

            <div class="card">
                <p>Total Pengguna</p>
                <h2>{{ $totalUsers }}</h2>
            </div>

            <div class="card">
                <p>Total Pesanan</p>
                <h2>{{ $totalOrders }}</h2>
            </div>
        </section>

        <div class="actions">
            <a href="{{ route('products.index') }}" class="btn">
                Lihat Katalog
            </a>

            <a href="{{ route('dashboard') }}" class="btn secondary">
                Dashboard Breeze
            </a>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn secondary">
                    Logout
                </button>
            </form>
        </div>
    </main>
</body>
</html>
