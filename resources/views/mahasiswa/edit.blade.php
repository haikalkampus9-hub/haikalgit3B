<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Data Mahasiswa
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white shadow-sm rounded-lg p-6">

                <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">

                    @csrf
                    @method('PUT')

                    {{-- NIM --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            NIM
                        </label>

                        <input type="text"
                               name="nim"
                               value="{{ old('nim', $mahasiswa->nim) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('nim')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nama Mahasiswa --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Nama Mahasiswa
                        </label>

                        <input type="text"
                               name="nama_mahasiswa"
                               value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('nama_mahasiswa')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tempat Lahir --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Tempat Lahir
                        </label>

                        <input type="text"
                               name="tempat_lahir"
                               value="{{ old('tempat_lahir', $mahasiswa->tempat_lahir) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('tempat_lahir')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tanggal Lahir --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Tanggal Lahir
                        </label>

                        <input type="date"
                               name="tanggal_lahir"
                               value="{{ old('tanggal_lahir', $mahasiswa->tanggal_lahir) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('tanggal_lahir')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Jenis Kelamin --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Jenis Kelamin
                        </label>

                        <select name="jenis_kelamin"
                                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                            <option value="Laki-laki"
                                {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>
                                Laki-laki
                            </option>

                            <option value="Perempuan"
                                {{ old('jenis_kelamin', $mahasiswa->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>
                                Perempuan
                            </option>

                        </select>

                        @error('jenis_kelamin')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Alamat --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Alamat
                        </label>

                        <textarea name="alamat"
                                  rows="3"
                                  class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">{{ old('alamat', $mahasiswa->alamat) }}</textarea>

                        @error('alamat')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Program Studi --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Program Studi
                        </label>

                        <input type="text"
                               name="program_studi"
                               value="{{ old('program_studi', $mahasiswa->program_studi) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('program_studi')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nomor HP --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Nomor HP
                        </label>

                        <input type="text"
                               name="nomor_hp"
                               value="{{ old('nomor_hp', $mahasiswa->nomor_hp) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('nomor_hp')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Email --}}
                    <div class="mb-4">
                        <label class="block font-medium text-sm text-gray-700">
                            Email
                        </label>

                        <input type="email"
                               name="email"
                               value="{{ old('email', $mahasiswa->email) }}"
                               class="mt-1 block w-full border-gray-300 rounded-md shadow-sm">

                        @error('email')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tombol --}}
                    <div class="flex items-center gap-3">

                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Update Data
                        </button>

                        <a href="{{ route('mahasiswa.index') }}"
                           class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                            Kembali
                        </a>

                    </div>

                </form>

            </div>

        </div>
    </div>

</x-app-layout>