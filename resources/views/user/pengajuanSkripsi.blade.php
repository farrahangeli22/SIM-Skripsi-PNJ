<x-user-layout :title="'Pengajuan Sidang Skripsi'">
    <div class="flex space-x-20">
        <!-- Card data mahasiswa -->
        <div class="w-80 rounded bg-cardData p-6">
            <h1 class="flex justify-center font-bold text-xl text-font mb-6">Data Mahasiswa</h1>
            <label class="block mb-4 font-bold text-sm" for="">Nama : 
                <p class="font-normal mt-2">Niyara Arinda</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">NIM : 
                <p class="font-normal mt-2">1907411032</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Program Studi : 
                <p class="font-normal mt-2">Teknik Informatika</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Kelas : 
                <p class="font-normal mt-2">TI 8A</p>
            </label>
        </div>

        <!-- Form Pengajuan -->
        <form class="w-full">
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Pengajuan Sidang Skripsi</h1>
            <div>
                <div class="flex justify-between">
                    <div>
                        <label class="block text-sm mb-2" for="">
                            Judul Skripsi
                        </label>
                        <x-text-input id="judul" class="block mt-1 w-96 border-black mb-4" type="text" name="judul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-2" for="">
                            Sub Judul Skripsi
                        </label>
                        <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-4" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                    </div>
                    <div>
                    <label class="block text-sm mb-2" for="">
                            Anggota Kelompok
                        </label>
                        <x-text-input id="anggota" class="block mt-1 w-96 border-black mb-4" type="text" name="anggota" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-2" for="">
                            Dosen Pembimbing
                        </label>
                        <div class="relative">
                            <select class="w-96 h-10 text-sm text-gray-700 border border-black rounded-md px-3 mb-4" id="">
                                <option>Dosen 1</option>
                                <option>Dosen 2</option>
                                <option>Dosen 3</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="flex justify-end">
                    <x-primary-button class="flex justify-center w-fit">
                        {{ __('Kirim') }}
                    </x-primary-button>
                </div>
            </div>
        </form>
    </div>

</x-user-layout>