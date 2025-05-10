<title>Peminjaman Buku</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Peminjaman Buku') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-6">
        <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
            @include('alert.alert-info')

            <div class="p-4 sm:p-6 dark:bg-gray-900 border-b border-gray-200">


                <div class="flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0 sm:space-x-4">
                    @if(auth()->user()->role !== 'admin')
                    <x-secondary-button href="{{ route('peminjaman-buku.create') }}">
                        Tambah
                    </x-secondary-button>
                @endif

                    <form action="{{ route('peminjaman-buku.index') }}" method="GET"
                        class="flex flex-col sm:flex-row items-center mt-4 sm:mt-0 space-y-2 sm:space-y-0 sm:space-x-4">
                        <input type="text" name="search" placeholder="Cari judul buku..."
                            value="{{ request('search') }}"
                            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block rounded-md p-2 w-full sm:w-auto">
                        <input type="text" name="name" placeholder="Cari nama peminjam..."
                            value="{{ request('name') }}"
                            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block rounded-md p-2 w-full sm:w-auto">
                        <select name="status"
                            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block rounded-md p-2 w-full sm:w-auto">
                            <option value="">Semua Status</option>
                            <option value="Dipinjam" {{ request('status') == 'Dipinjam' ? 'selected' : '' }}>
                                Dipinjam</option>
                            <option value="Dikembalikan" {{ request('status') == 'Dikembalikan' ? 'selected' : '' }}>
                                Dikembalikan</option>
                            <option value="ACC" {{ request('status') == 'ACC' ? 'selected' : '' }}>ACC</option>
                            <option value="PENDING" {{ request('status') == 'PENDING' ? 'selected' : '' }}>
                                PENDING</option>
                        </select>
                        <button type="submit"
                            class="px-4 py-2 bg-blue-500 hover:bg-blue-600 text-white rounded-md focus:outline-none focus:ring-2 focus:ring-blue-300">
                            Cari
                        </button>
                    </form>
                </div>

                <div class="mt-4 overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nomor Peminjaman
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nama Peminjam
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Judul Buku
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Keterangan
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($peminjaman as $item)
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->no_peminjaman }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->user->nama }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->buku->nama_buku }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->deskripsi }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->status }}</td>

                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 flex space-x-2">
                                        @if(auth()->user()->role !== 'mahasiswa')
                                        <a href="{{ route('peminjaman-buku.edit', $item->id) }}"
                                            class="text-blue-500 hover:text-blue-700 transition-transform transform hover:scale-110" title="Edit">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15.232 5.232l3.536 3.536M9 13l6-6M4 20h4l10-10-4-4-10 10v4z" />
                                            </svg>
                                        </a>

                                        <x-confirm-delete-modal>
                                            <x-slot name="trigger">
                                                <button @click="isOpen = true" title="Hapus"
                                                    class="text-red-500 hover:text-red-700 transition-transform transform hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </x-slot>

                                            <x-slot name="title">Konfirmasi Hapus</x-slot>
                                            <x-slot name="content">Apakah Anda yakin ingin menghapus peminjaman ini?</x-slot>
                                            <x-slot name="footer">
                                                <form id="deleteForm-{{ $item->id }}"
                                                    action="{{ route('peminjaman-buku.destroy', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-primary-button type="submit" class="bg-red-600 hover:bg-red-700">
                                                        Hapus
                                                    </x-primary-button>
                                                    <x-secondary-button @click="isOpen = false">
                                                        Batal
                                                    </x-secondary-button>
                                                </form>
                                            </x-slot>
                                        </x-confirm-delete-modal>
                                        @endif

                                        <a href="{{ route('peminjaman-buku.show', $item->id) }}"
                                            class="text-gray-500 hover:text-gray-700 transition-transform transform hover:scale-110" title="Detail">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-1.274 4.057-5.065 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-500" colspan="6">
                                        Tidak ada data yang ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $peminjaman->appends(request()->input())->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
