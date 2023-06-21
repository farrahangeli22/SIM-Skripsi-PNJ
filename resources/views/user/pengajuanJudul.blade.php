<x-user-layout :title="'Pengajuan Judul dan Dosen Pembimbing'">
    <div class="flex space-x-20">
        <!-- Card data mahasiswa -->
        <div class="w-80 rounded bg-cardData p-6">
            <h1 class="flex justify-center font-bold text-xl text-font mb-6">Data Mahasiswa</h1>
            <label class="block mb-4 font-bold text-sm" for="">Nama : 
                <p class="font-normal mt-2">Farrah Dillah Angeli</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">NIM : 
                <p class="font-normal mt-2">1907411012</p>
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
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Pengajuan Judul dan Dosen Pembimbing</h1>
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
                        <label class="block text-sm mb-2" for="">
                            Anggota Kelompok
                        </label>
                        <x-text-input id="anggota" class="block mt-1 w-96 border-black mb-4" type="text" name="anggota" placeholder="Masukkan teks..." required autofocus/>
                    </div>
                    <div>
                        <label class="block text-sm mb-2" for="">
                            Calon Dosen Pembimbing 1
                        </label>
                        <div class="relative">
                            <select class="w-96 h-10 text-sm text-gray-700 border border-black rounded-md px-3 mb-4" id="">
                                <option>Dosen 1</option>
                                <option>Dosen 2</option>
                                <option>Dosen 3</option>
                            </select>
                        </div>
                        <label class="block text-sm mb-2" for="">
                            Calon Dosen Pembimbing 2
                        </label>
                        <div class="relative">
                            <select class="w-96 h-10 text-sm text-gray-700 border border-black rounded-md px-3 mb-4" id="">
                                <option>Dosen 1</option>
                                <option>Dosen 2</option>
                                <option>Dosen 3</option>
                            </select>
                        </div>
                        <label class="block text-sm mb-2" for="">
                            Calon Dosen Pembimbing 3
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
                <div class="mb-4">         
                    <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deskripsi/Abstrak</label>
                    <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Tuliskan deskripsi skripsi anda..."></textarea>
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