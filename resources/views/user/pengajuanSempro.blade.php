<x-user-layout :title="'Pengajuan Seminar Proposal'">
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
            <label class="block mb-4 font-bold text-sm" for="">Dosen Pembimbing : 
                <p class="font-normal mt-2">Eriya, S.Kom., M.T</p>
            </label>
        </div>

        <!-- Form Pengajuan -->
        <form class="w-full">
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Pengajuan Seminar Proposal</h1>
            <div>
                <div class="flex justify-between">
                    <div>
                        <label class="flex flex-wrap text-sm mb-2" for="">
                            Judul Skripsi
                            <p class="text-red-600 pl-1">*</p>
                        </label>
                        <x-text-input id="judul" class="block mt-1 w-96 border-black mb-5" type="text" name="judul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-2" for="">
                            Sub Judul Skripsi
                        </label>
                        <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-5" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                    </div>
                    <div>
                        <label class="block text-sm mb-2" for="">
                            Anggota Kelompok
                        </label>
                        <x-text-input id="anggota" class="block mt-1 w-96 border-black mb-5" type="text" name="anggota" placeholder="Masukkan teks..." required autofocus/>
                        <label class="flex flex-wrap text-sm mb-2" for="">
                            Form F1
                            <p class="text-red-600 pl-1">*</p>
                        </label>
                        <x-text-input id="judul" class="block w-96 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                        <p class="text-xs text-gray-500 mb-2">Format file PDF (<a href="https://s.pnj.ac.id/FormF1" target="_blank" class="text-blue-500">Download disini</a>)</p>
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