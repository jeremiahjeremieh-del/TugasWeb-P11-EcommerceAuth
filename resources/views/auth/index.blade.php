
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 p-8">
    <div class="mx-auto max-w-5xl">
        <h1 class="mb-6 text-3xl font-bold">Dashboard Admin</h1>

        <p class="mb-6">
            Selamat datang, {{ auth()->user()->name }}!
        </p>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-4">
            <div class="rounded-lg bg-white p-5 shadow">
                <p>Total Produk</p>
                <p class="text-2xl font-bold">{{ $totalProducts }}</p>
            </div>

            <div class="rounded-lg bg-white p-5 shadow">
                <p>Total Kategori</p>
                <p class="text-2xl font-bold">{{ $totalCategories }}</p>
            </div>

            <div class="rounded-lg bg-white p-5 shadow">
                <p>Total Pengguna</p>
                <p class="text-2xl font-bold">{{ $totalUsers }}</p>
            </div>

            <div class="rounded-lg bg-white p-5 shadow">
                <p>Total Pesanan</p>
                <p class="text-2xl font-bold">{{ $totalOrders }}</p>
            </div>
        </div>

        <a href="{{ route('products.index') }}"
           class="mt-6 inline-block text-blue-600 underline">
            Lihat katalog produk
        </a>
    </div>
</body>
</html>
