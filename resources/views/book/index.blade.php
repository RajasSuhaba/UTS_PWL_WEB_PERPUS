<title>Buku</title>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Buku') }}
        </h2>
    </x-slot>

    <div class="py-6 px-4 sm:px-6 lg:px-6">
        <div class="dark:bg-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
            @include('alert.alert-info')

            <div class="p-4 sm:p-6 dark:bg-gray-900 border-b border-gray-200">


                <div class="flex flex-col sm:flex-row justify-between items-center space-y-2 sm:space-y-0 sm:space-x-4">
                   <x-secondary-button href="{{ route('buku.create') }}" class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>
                        <span>Tambah</span>
                    </x-secondary-button>
                    <form action="{{ route('buku.index') }}" method="GET"
                        class="flex flex-col sm:flex-row items-center mt-4 sm:mt-0 space-y-2 sm:space-y-0 sm:space-x-4">
                        <input type="text" name="search" placeholder="Cari judul buku..."
                            value="{{ request('search') }}"
                            class="border-gray-300 focus:ring-indigo-500 focus:border-indigo-500 block rounded-md p-2 w-full sm:w-auto">
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
                                    Nama
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Penulis
                                </th>
                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Tahun Rilis
                                </th>

                                <th scope="col"
                                    class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($buku as $item)
                                <tr>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->nama_buku }}
                                    </td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->penulis }}</td>
                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900">
                                        {{ $item->tahun_rilis }}</td>

                                    <td class="px-4 py-3 whitespace-nowrap text-sm text-gray-900 flex space-x-2">
                                        @if(auth()->user()->role !== 'mahasiswa')
                                        {{-- <a href="{{ route('buku.edit', $item->id) }}"
                                            class="text-indigo-600 hover:text-indigo-900">Edit</a> --}}
                                        <x-confirm-delete-modal>
                                            <x-slot name="trigger">
                                                <button @click="isOpen = true" class="flex items-center space-x-1 text-red-600 hover:text-red-800 transition">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6M9 7h6m-6 0V5a2 2 0 012-2h2a2 2 0 012 2v2" />
                                                    </svg>
                                                    <span>Hapus</span>
                                                </button>
                                            </x-slot>
                                            <x-slot name="title">
                                                Konfirmasi Hapus
                                            </x-slot>

                                            <x-slot name="content">
                                                Apakah Anda yakin ingin menghapus buku ini?
                                            </x-slot>

                                            <x-slot name="footer">
                                                <form id="deleteForm-{{ $item->id }}"
                                                    action="{{ route('buku.destroy', $item->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <x-primary-button type="submit"
                                                        class="bg-red-600 hover:bg-red-700">
                                                        Hapus
                                                    </x-primary-button>
                                                    <x-secondary-button @click="isOpen = false">
                                                        Batal
                                                    </x-secondary-button>
                                                </form>

                                            </x-slot>
                                        </x-confirm-delete-modal>
                                        @endif

                                        {{-- <a href="{{ route('buku.show', $item->id) }}"
                                            class="text-gray-600 hover:text-gray-900">Detail</a> --}}
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
                    {{ $buku->appends(request()->input())->links() }}
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
