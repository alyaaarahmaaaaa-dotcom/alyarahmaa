    <x-app-layout>
        <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Data Produk') }}
        </h2>
        </x-slot>

        <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900">
        <table Class="w-full text-gray-500">
                        <thead Class="bg-gray-50">
                            <td Class="p-2">NO</td>
                            <td Class="p-2">Nama Produk</td>
                            <td Class="p-2">Deskripsi</td>
                            <td Class="p-2">Stok</td>
                            <td Class="p-2">Harga</td>
                            <a herf="/product/create">
                                <x-primary-button>Tambah Produk</x-primary-button>
                            </a>
                        </thead>
    <tbody>
        @foreach ($products as $p)
        <tr class="border-b">
            <td Class="p-2">{{ $loop->iteration }}</td>
            <td Class="p-2">{{ $p->name }}</td>
            <td Class="p-2">{{ $p->description }}</td>
            <td Class="p-2">{{ $p->stock }}</td>
            <td Class="p-2">{{ $p->price }}</td>
        </tr>
        @endforeach
    </tbody>
        </table>
        </div>
        </div>
        </div>
        </div>
    </x-app-layout>
