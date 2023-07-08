<x-user-layout :title="'Penyerahan Alat'">
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
            <label class="block mb-4 font-bold text-sm" for="">Dosen Pembimbing : 
                <p class="font-normal mt-2">Eriya, S.Kom., M.T</p>
            </label>
        </div>

        <!-- Form Pengajuan -->
        <form class="w-full">
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Penyerahan Alat</h1>
            <div>
                <div class="flex justify-between">
                    <div>
                        <label class="block text-sm mb-1" for="">
                            Judul Skripsi
                        </label>
                        <x-text-input id="judul" class="block mt-1 w-96 border-black mb-5 bg-[#D9D9D9]" type="text" name="judul" placeholder="Masukkan teks..." readonly/>
                        <label class="block text-sm mb-1" for="">
                            Sub Judul Skripsi
                        </label>
                        <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-6" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-1" for="">
                            Anggota Kelompok
                        </label>
                        <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-6" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-1" for="">
                            Link Video Demo
                        </label>
                        <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-6" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-1" for="">
                            Sertifikat PKKP
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Sertifikat Lomba
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Sertifikat Kejuaraan (jika ada)
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                    </div>
                    <div>
                        <label class="block text-sm mb-1" for="">
                            Form F10
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Form F12
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>

                        <label class="block text-sm mb-1" for="">
                            Form F13
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Form F14
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Form F15
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Form F16
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
                        <label class="block text-sm mb-1" for="">
                            Sertifikat Organisai (jika ada)
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Download disini</a>)</p>
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