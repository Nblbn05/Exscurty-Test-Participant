<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exscurty Test - Login</title>
    <!-- Tailwind CSS untuk styling cepat -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-white flex items-center justify-center min-h-screen">

    <div class="max-w-md w-full p-8 bg-slate-800 rounded-2xl shadow-xl border border-slate-700">
        <div class="text-center mb-8">
            <h1 class="text-3xl font-bold tracking-tight text-blue-400">Exscurty Test</h1>
            <p class="text-slate-400 text-sm mt-2">Silakan masuk menggunakan akun Anda</p>
        </div>

        <!-- Notifikasi Error jika Gagal Login -->
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-500/10 border border-red-500/50 rounded-lg text-red-400 text-sm">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form Login -->
        <form action="{{ route('login') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required autofocus
                    class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-lg focus:outline-none focus:border-blue-500 text-white text-sm"
                    placeholder="nama@email.com">
            </div>

            <div>
                <label class="block text-sm font-medium text-slate-300 mb-2">Password</label>
                <input type="password" name="password" required
                    class="w-full px-4 py-3 bg-slate-900 border border-slate-700 rounded-lg focus:outline-none focus:border-blue-500 text-white text-sm"
                    placeholder="••••••••">
            </div>

            <button type="submit" 
                class="w-full py-3 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-lg transition duration-200 shadow-lg shadow-blue-600/30 text-sm">
                Masuk
            </button>
        </form>
    </div>

</body>
</html>