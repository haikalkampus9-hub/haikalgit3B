<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Pesan sukses --}}
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white shadow-sm rounded-lg overflow-x-auto">

                <table class="min-w-full border">

                    <thead>
                        <tr class="bg-gray-100">

                            <th class="border px-4 py-2">
                                No
                            </th>

                            <th class="border px-4 py-2">
                                NIM
                            </th>

                            <th class="border px-4 py-2">
                                Nama
                            </th>

                            <th class="border px-4 py-2">
                                Tempat Lahir
                            </th>

                            <th class="border px-4 py-2">
                                Tanggal Lahir
                            </th>

                            <th class="border px-4 py-2">
                                Jenis Kelamin
                            </th>

                            <th class="border px-4 py-2">
                                Program Studi
                            </th>

                            <th class="border px-4 py-2">
                                Nomor HP
                            </th>

                            <th class="border px-4 py-2">
                                Email
                            </th>

                            {{-- Kolom Aksi --}}
                            <th class="border px-4 py-2">

                                <div class="flex items-center justify-center gap-2">

                                    <span>Aksi</span>

                                    <a href="{{ route('mahasiswa.create') }}"
                                       class="inline-block px-3 py-1 bg-blue-600 text-white rounded text-xs font-semibold hover:bg-blue-700">

                                        + Tambah

                                    </a>

                                </div>

                            </th>

                        </tr>
                    </thead>

                    <tbody>

                        @forelse($mahasiswa as $item)

                            <tr>

                                <td class="border px-4 py-2">
                                    {{ $loop->iteration }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->nim }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->nama_mahasiswa }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->tempat_lahir }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->tanggal_lahir }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->jenis_kelamin }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->program_studi }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->nomor_hp }}
                                </td>

                                <td class="border px-4 py-2">
                                    {{ $item->email }}
                                </td>

                                {{-- Tombol Aksi --}}
                                <td class="border px-4 py-2 whitespace-nowrap">

                                    <a href="{{ route('mahasiswa.show', $item->id) }}"
                                       class="text-green-600 hover:text-green-800 mr-2">
                                        Detail
                                    </a>

                                    <a href="{{ route('mahasiswa.edit', $item->id) }}"
                                       class="text-blue-600 hover:text-blue-800 mr-2">
                                        Edit
                                    </a>

                                    <form action="{{ route('mahasiswa.destroy', $item->id) }}"
                                          method="POST"
                                          class="inline">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')"
                                                class="text-red-600 hover:text-red-800">

                                            Hapus

                                        </button>

                                    </form>

                                </td>

                            </tr>

                        @empty

                            <tr>

                                <td colspan="10"
                                    class="border px-4 py-6 text-center text-gray-500">

                                    Belum ada data mahasiswa.

                                </td>

                            </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>
    </div>

</x-app-layout>