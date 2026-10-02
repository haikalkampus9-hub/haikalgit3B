<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Tambah Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm sm:rounded-lg">
                <div class="p-6">

                    @if ($errors->any())
                        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
                            <strong>Terjadi kesalahan:</strong>
                            <ul class="list-disc ml-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('mahasiswa.store') }}" method="POST">
                        @csrf

                        <div class="mb-4">
                            <label class="block font-medium mb-1">NIM</label>
                            <input type="text"
                                   name="nim"
                                   value="{{ old('nim') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Nama Mahasiswa</label>
                            <input type="text"
                                   name="nama_mahasiswa"
                                   value="{{ old('nama_mahasiswa') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Tempat Lahir</label>
                            <input type="text"
                                   name="tempat_lahir"
                                   value="{{ old('tempat_lahir') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Tanggal Lahir</label>
                            <input type="date"
                                   name="tanggal_lahir"
                                   value="{{ old('tanggal_lahir') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Jenis Kelamin</label>
                            <select name="jenis_kelamin"
                                    class="w-full border-gray-300 rounded-md"
                                    required>
                                <option value="">-- Pilih Jenis Kelamin --</option>
                                <option value="Laki-laki"
                                    {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>
                                    Laki-laki
                                </option>
                                <option value="Perempuan"
                                    {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>
                                    Perempuan
                                </option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Alamat</label>
                            <textarea name="alamat"
                                      rows="4"
                                      class="w-full border-gray-300 rounded-md"
                                      required>{{ old('alamat') }}</textarea>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Program Studi</label>
                            <input type="text"
                                   name="program_studi"
                                   value="{{ old('program_studi') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="mb-4">
                            <label class="block font-medium mb-1">Nomor HP</label>
                            <input type="text"
                                   name="nomor_hp"
                                   value="{{ old('nomor_hp') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="mb-6">
                            <label class="block font-medium mb-1">Email</label>
                            <input type="email"
                                   name="email"
                                   value="{{ old('email') }}"
                                   class="w-full border-gray-300 rounded-md"
                                   required>
                        </div>

                        <div class="flex gap-3">
                            <button type="submit"
                                    class="bg-indigo-600 hover:bg-indigo-700 text-white px-5 py-2 rounded">
                                Simpan
                            </button>

                            <a href="{{ route('mahasiswa.index') }}"
                               class="bg-gray-500 hover:bg-gray-600 text-white px-5 py-2 rounded">
                                Kembali
                            </a>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</x-app-layout>