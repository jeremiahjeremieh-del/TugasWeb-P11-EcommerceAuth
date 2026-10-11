
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Commerce | Katalog Produk</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;
            color: #172b4d;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .header {
            background: #fff;
            border-bottom: 1px solid #e5eaf2;
        }

        .container {
            width: min(1180px, 92%);
            margin: auto;
        }

        .topbar {
            min-height: 82px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 22px;
        }

        .brand {
            color: #1769ef;
            font-size: 25px;
            font-weight: 800;
            white-space: nowrap;
        }

        .search {
            flex: 1;
            max-width: 490px;
            display: flex;
            gap: 8px;
        }

        .search input {
            width: 100%;
            padding: 13px 16px;
            border: 1px solid #dce3ed;
            border-radius: 10px;
            outline: none;
            background: #f8faff;
        }

        .search input:focus {
            border-color: #1769ef;
        }

        .btn {
            display: inline-block;
            border: 0;
            background: #1769ef;
            color: white;
            padding: 12px 17px;
            border-radius: 9px;
            font-weight: 600;
            cursor: pointer;
            white-space: nowrap;
        }

        .btn:hover {
            background: #0755d5;
        }

        .account {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 14px;
        }

        .account a:not(.btn) {
            color: #1769ef;
        }

        .categories {
            display: flex;
            gap: 28px;
            overflow-x: auto;
            padding: 17px 0;
            white-space: nowrap;
            color: #51617a;
            font-size: 14px;
        }

        .categories a:hover,
        .categories a.active {
            color: #1769ef;
        }

        main {
            padding: 38px 0 55px;
        }

        .intro {
            margin-bottom: 26px;
        }

        .intro h1 {
            font-size: clamp(27px, 4vw, 36px);
            margin-bottom: 10px;
        }

        .intro p {
            color: #65738a;
            line-height: 1.6;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 22px;
        }

        .product-card {
            background: white;
            border: 1px solid #e8edf4;
            border-radius: 13px;
            padding: 13px;
            box-shadow: 0 4px 14px rgba(26, 46, 80, 0.04);
            transition: transform .2s, box-shadow .2s;
        }

        .product-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 25px rgba(26, 46, 80, 0.10);
        }

        .product-image {
            height: 175px;
            background: #f1f4f8;
            border-radius: 9px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 15px;
            overflow: hidden;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .image-placeholder {
            font-size: 53px;
            color: #9aabc2;
        }

        .badge {
            display: inline-block;
            background: #e8f1ff;
            color: #1769ef;
            font-size: 11px;
            padding: 6px 10px;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .product-card h3 {
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 9px;
        }

        .description {
            color: #748198;
            font-size: 13px;
            line-height: 1.5;
            margin-bottom: 12px;
            min-height: 38px;
        }

        .price {
            color: #1769ef;
            font-size: 19px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .stock {
            color: #64748b;
            font-size: 12px;
        }

        .stock-dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: #16b978;
            border-radius: 50%;
            margin-right: 5px;
        }

        .empty {
            grid-column: 1 / -1;
            text-align: center;
            padding: 55px 20px;
            background: white;
            border-radius: 12px;
            color: #65738a;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 8px;
            margin-top: 35px;
            flex-wrap: wrap;
        }

        .pagination a,
        .pagination span {
            display: inline-block;
            padding: 10px 14px;
            border: 1px solid #dce3ed;
            background: white;
            border-radius: 8px;
            font-size: 14px;
        }

        .pagination .active {
            background: #1769ef;
            color: white;
            border-color: #1769ef;
        }

        footer {
            background: #fff;
            border-top: 1px solid #e5eaf2;
            padding: 25px 0;
            color: #748198;
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 950px) {
            .product-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }

            .topbar {
                flex-wrap: wrap;
                padding: 18px 0;
            }

            .search {
                order: 3;
                max-width: none;
                flex-basis: 100%;
            }
        }

        @media (max-width: 650px) {
            .product-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 12px;
            }

            .product-image {
                height: 130px;
            }

            .product-card {
                padding: 10px;
            }

            .product-card h3 {
                font-size: 14px;
            }

            .price {
                font-size: 16px;
            }

            .categories {
                gap: 20px;
            }

            .account {
                gap: 10px;
            }
        }

        @media (max-width: 370px) {
            .product-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <div class="topbar">
                <a href="{{ route('products.index') }}" class="brand">
                    🛒 E-Commerce
                </a>

                <form action="{{ route('products.index') }}" method="GET"
                      class="search">
                    @if(request('category'))
                        <input type="hidden" name="category"
                               value="{{ request('category') }}">
                    @endif

                    <input type="search" name="search"
                           placeholder="Cari produk..."
                           value="{{ request('search') }}">

                    <button class="btn" type="submit">Cari</button>
                </form>

                <div class="account">
                    @auth
                        <span>Halo, {{ auth()->user()->name }}</span>

                        @if(auth()->user()->role === 'admin')
                            <a href="{{ route('admin.index') }}">Admin</a>
                        @endif

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn">Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}" class="btn">
                            Daftar
                        </a>
                    @endauth
                </div>
            </div>

            <nav class="categories">
                <a href="{{ route('products.index') }}"
                   class="{{ request('category') ? '' : 'active' }}">
                    Semua Produk
                </a>

                @foreach($categories as $category)
                    <a href="{{ route('products.index', array_filter([
                        'category' => $category->slug,
                        'search' => request('search')
                    ])) }}"
                       class="{{ request('category') === $category->slug ? 'active' : '' }}">
                        {{ $category->name }}
                    </a>
                @endforeach
            </nav>
        </div>
    </header>

    <main class="container">
        <section class="intro">
            <h1>Daftar Produk</h1>
            <p>
                Temukan berbagai produk untuk memenuhi kebutuhan
                sehari-hari dengan harga yang menarik.
            </p>
        </section>

        <section class="product-grid">
            @forelse($products as $product)
                <article class="product-card">
                    <div class="product-image">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}"
                                 alt="{{ $product->name }}">
                        @else
                            <span class="image-placeholder">📦</span>
                        @endif
                    </div>

                    <span class="badge">
                        {{ $product->category->name }}
                    </span>

                    <h3>{{ $product->name }}</h3>

                    <p class="description">
                        {{ $product->description }}
                    </p>

                    <p class="price">
                        Rp {{ number_format((float)$product->price, 0, ',', '.') }}
                    </p>

                    <p class="stock">
                        <span class="stock-dot"></span>
                        Stok: {{ $product->stock }}
                    </p>
                </article>
            @empty
                <div class="empty">
                    <h2>Produk belum ditemukan</h2>
                    <p style="margin: 12px 0 20px">
                        Coba kata kunci lain atau lihat semua produk.
                    </p>
                    <a href="{{ route('products.index') }}" class="btn">
                        Lihat Semua Produk
                    </a>
                </div>
            @endforelse
        </section>

        <div class="pagination">
            {{ $products->links('pagination::simple-tailwind') }}
        </div>
    </main>

    <footer>
        <div class="container">
            &copy; {{ date('Y') }} E-Commerce — Proyek Tugas Web Laravel.
        </div>
    </footer>
</body>
</html>
