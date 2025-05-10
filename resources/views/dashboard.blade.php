<title>{{ config('app.titleDashboard', 'Laravel') }} - {{ $settings->webname }}</title>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-50 dark:bg-gray-900 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">

            {{-- About & Kalender --}}
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                {{-- About --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                    <h3 class="text-2xl font-bold mb-2 text-gray-800 dark:text-white">Tentang Perpustakaan</h3>
                    <p class="text-gray-600 dark:text-gray-600 text-sm">
                        Selamat datang di Perpustakaan <strong>{{ $settings->webname }}</strong>. Perpustakaan kami hadir sebagai pusat literasi dan pengetahuan yang menyediakan berbagai koleksi buku terbaru dan terbaik dari berbagai kategori, seperti fiksi, non-fiksi, buku pelajaran, referensi akademik, karya ilmiah, hingga literatur populer lainnya. Dengan koleksi yang terus diperbarui, kami berkomitmen untuk mendukung kebutuhan belajar, penelitian, serta pengembangan wawasan bagi seluruh pengunjung. Tidak hanya itu, kami juga menyediakan fasilitas membaca yang nyaman, layanan peminjaman digital, serta berbagai program literasi yang dirancang untuk meningkatkan minat baca masyarakat. Manfaatkan semua fasilitas ini sebaik mungkin untuk memperluas pengetahuan dan mencapai potensi terbaikmu melalui budaya membaca yang kuat.
                    </p>
                </div>

                {{-- Kalender --}}
                <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow text-center">
                    <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4">Kalender Perpustakaan</h3>
                    <img src="{{ asset('assets/img/kalender.png') }}" alt="Kalender" class="mx-auto w-32 h-32">
                    <p class="text-sm text-gray-600 dark:text-gray-300 mt-2">Pantau tanggal penting, jadwal pengembalian, dan event perpustakaan di sini.</p>
                </div>
            </div>

            {{-- Koleksi Buku --}}
            <div class="grid grid-cols-2 gap-6">
                <h3 class="text-xl font-semibold text-gray-800 dark:text-white mb-4 text-center">Poster Literasi</h3>
                {{-- Poster 1 --}}
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 text-center">
                    <img src="{{ asset('assets/img/poster1.jpg') }}" alt="Poster Buku 1"
                        class="w-32 h-40 object-cover mx-auto rounded mb-2">
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Buku Wawasan Ilmu</h4>
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Raihlah Kesuksesan dengan Membaca Buku</h4>
                </div>

                {{-- Poster 2 --}}
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 text-center">
                    <img src="{{ asset('assets/img/poster2.jpg') }}" alt="Poster Buku 2"
                        class="w-32 h-40 object-cover mx-auto rounded mb-2">
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Perpustakaan Sarana Penambah Pengetahuan</h4>
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Maka Gunakanlah Sarana Ini dengan Baik</h4>
                </div>

                {{-- Poster 3 --}}
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 text-center">
                    <img src="{{ asset('assets/img/poster3.jpeg') }}" alt="Poster Buku 3"
                        class="w-32 h-40 object-cover mx-auto rounded mb-2">
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Dunia Ada di Dalam Buku</h4>
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Dengan Membaca Artinya Dunia Ada di Genggamanmu</h4>
                </div>

                {{-- Poster 4 --}}
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-4 text-center">
                    <img src="{{ asset('assets/img/poster4.jpeg') }}" alt="Poster Buku 4"
                        class="w-32 h-40 object-cover mx-auto rounded mb-2">
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Kejarlah Ilmu Sampai ke Ujung Dunia</h4>
                    <h4 class="text-md font-bold text-gray-800 dark:text-white">Karena Ilmu Membawa Kepada Kemajuan</h4>
                </div>
            </div>

            {{-- Tombol Aksi --}}
            <div class="flex flex-wrap justify-center gap-6 pt-6">
                <a href="{{ route('peminjaman-buku.index') }}"
                   class="flex items-center gap-2 bg-white hover:bg-gray-100 border border-gray-400 focus:ring-4 focus:ring-gray-300 text-black px-6 py-3 rounded-lg shadow font-semibold transition duration-300 ease-in-out">
                   📚 Pinjam Buku
                </a>
                <a href="{{ route('pengembalian-buku.index') }}"
                   class="flex items-center gap-2 bg-white hover:bg-gray-100 border border-gray-400 focus:ring-4 focus:ring-gray-300 text-black px-6 py-3 rounded-lg shadow font-semibold transition duration-300 ease-in-out">
                   🔄 Kembalikan Buku
                </a>
                <a href="{{ route('profile.edit') }}"
                   class="flex items-center gap-2 bg-white hover:bg-gray-100 border border-gray-400 focus:ring-4 focus:ring-gray-300 text-black px-6 py-3 rounded-lg shadow font-semibold transition duration-300 ease-in-out">
                   👤 Profil
                </a>
            </div>

        </div>
    </div>
</x-app-layout>
