<x-user-layout :title="'Form Persetujuan Revisi '">
    <div class="flex w-full gap-5 space-x-10">
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
                <p class="font-normal mt-2">Eriya S.Kom., M.T.</p>
            </label>
        </div>
        <!-- Form Pengajuan -->
        <form class="w-full" enctype='multipart/form-data' action="/proses-data" method="post" onsubmit="return confirm('Apakah Anda yakin ingin mengirim data ini?')">
            @csrf
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Form Pengajuan Persetujuan</h1>
            <div class="flex justify-between space-x-10">
                <div>
                    <label class="flex flex-wrap text-sm mb-2" for="">
                        Judul Skripsi
                        <p class="text-red-600 pl-1">*</p>
                    </label>
                    <x-text-input id="judul" class="block mt-1 w-96 border-black mb-9" type="text" name="judul" placeholder="Masukkan teks..." required autofocus/>
                </div>
                <div>
                    <label class="flex flex-wrap text-sm mb-2" for="">
                        Link Vidio Demo
                        <p class="text-red-600 pl-1">*</p>
                    </label>
                    <x-text-input id="link_vidio" class="block w-96 border-black" type="text" name="link-vidio" placeholder="Masukkan link vidio.." autofocus/>
                </div>
            </div>
            <div class="mb-4">
                <label for="poin_revisi" class="flex flex-wrap mb-2 text-sm font-medium text-gray-900">
                    Poin-poin revisi
                    <p class="text-red-600 pl-1">*</p>
                </label>
                <textarea name="poin_revisi" id="poin_revisi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan poin-poin revisi anda..."></textarea>
            </div>
            <div class="flex justify-end">
                <x-primary-button class="flex justify-center w-fit">
                    {{ __('Kirim') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</x-user-layout>
