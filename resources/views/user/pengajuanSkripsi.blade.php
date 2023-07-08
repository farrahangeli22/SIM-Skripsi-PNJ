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
                        <label class="block text-sm" for="">
                            Judul Skripsi
                        </label>
                        <x-text-input id="judul" class="block mt-2 w-96 h-10 border-black mb-4" type="text" name="judul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm" for="">
                            Sub Judul Skripsi
                        </label>
                        <x-text-input id="subJudul" class="block mt-2 w-96 h-10 border-black mb-4" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm" for="">
                            Anggota Kelompok
                        </label>
                        <x-text-input id="anggota" class="block mt-2 w-96 h-10 border-black mb-4" type="text" name="anggota" placeholder="Masukkan teks..." required autofocus/>
                         <label class="block text-sm" for="">
                            Form F4
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 mt-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs mb-2 text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm" for="">
                            Form F5
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 mt-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF5" target="_blank"class="text-blue-500">Download disini</a>)</p>
                    </div>
                    <div>
                        <label class="block text-sm" for="">
                            Form F6
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs mb-4 text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF6" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm" for="">
                            Form F7
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs mb-1 text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF7" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm" for="">
                            Form F8
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs mb-2 text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF8" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm" for="">
                            Form F9
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs mb-2 text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF9" target="_blank" class="text-blue-500">Download disini</a>)</p>
                         <label class="block text-sm" for="">
                            Form F10
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs mb-2 text-gray-500">Format file PDF (<a href="https://s.pnj.ac.id/FormF10" target="_blank" class="text-blue-500">Download disini</a>)</p>
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