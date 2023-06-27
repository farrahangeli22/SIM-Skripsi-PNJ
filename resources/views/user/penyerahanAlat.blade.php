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
        </div>

        <!-- Form Pengajuan -->
        <form class="w-full">
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Penyerahan Alat dan Dokumen Pelengkap Skripsi</h1>
            <div>
                <div class="flex justify-between">
                    <div>
                        <label class="block text-sm mb-2" for="">Judul Skripsi</label>
                        <x-text-input id="judul" class="block mt-1 w-96 border-black dark:bg-gray-300 mb-4" type="text" name="judul" placeholder="Rancang Bangun Sistem...." required autofocus id="" disabled/>
                        <label class="block text-sm mb-2" for="">Sub Judul Skripsi</label>
                        <x-text-input id="subJudul" class="block mt-1 w-96 border-black mb-4" type="text" name="subJudul" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-2" for="">Form 13</label>
                        <div class="relative">
                            <x-text-input id="form13" class="block mt-1 w-96 border border-black pl-2 pr-10 py-2" type="text" placeholder="Unggah File..." readonly />
                            <label for="file" class="absolute inset-y-0 right-0 flex items-center pr-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4.4c0 .4-.2.8-.6 1-.4.2-.8.4-1.2.4H4.8c-.4 0-.8-.2-1-.6s-.4-.8-.4-1.2V15M12 3v12"/>
                                    <polyline points="9 6 12 3 15 6"/>
                                </svg>
                            </label>
                            <input id="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" type="file" name="file" />
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Format file PDF (<a href="#" class="text-blue-500">Download disini</a>)</p>

                        <label class="block text-sm mt-4" for="">Form 14</label>
                        <div class="relative mt-3">
                            <x-text-input id="form14" class="block mt-1 w-96 border border-black pl-2 pr-10 py-2" type="text" placeholder="Unggah File..." readonly />
                            <label for="file" class="absolute inset-y-0 right-0 flex items-center pr-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4.4c0 .4-.2.8-.6 1-.4.2-.8.4-1.2.4H4.8c-.4 0-.8-.2-1-.6s-.4-.8-.4-1.2V15M12 3v12"/>
                                    <polyline points="9 6 12 3 15 6"/>
                                </svg>
                            </label>
                            <input id="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" type="file" name="file" />
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Format file PDF (<a href="#" class="text-blue-500">Download disini</a>)</p>
                    </div>
                    <div>
                        <label class="block text-sm mb-2" for="">Dosen Pembimbing</label>
                        <div class="relative">
                            <select class="w-96 h-10 text-sm text-gray-700 border border-black dark:bg-gray-300 rounded-md px-3 mb-4" id="" disabled>
                                <option selected>Eriya,S.Kom., M.T.</option>
                                <option>Dosen 2</option>
                                <option>Dosen 3</option>
                            </select>
                        </div>

                        <label class="block text-sm mb-2" for="">Anggota Kelompok</label>
                        <x-text-input id="anggota" class="block mt-1 w-96 border-black mb-4" type="text" name="anggota" placeholder="Masukkan teks..." required autofocus/>
                        <label class="block text-sm mb-2" for="">Form 15</label>
                        <div class="relative">
                            <x-text-input id="form15" class="block mt-1 w-96 border border-black pl-2 pr-10 py-2" type="text" placeholder="Unggah File..." readonly />
                            <label for="file" class="absolute inset-y-0 right-0 flex items-center pr-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4.4c0 .4-.2.8-.6 1-.4.2-.8.4-1.2.4H4.8c-.4 0-.8-.2-1-.6s-.4-.8-.4-1.2V15M12 3v12"/>
                                    <polyline points="9 6 12 3 15 6"/>
                                </svg>
                            </label>
                            <input id="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" type="file" name="file" />
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Format file PDF (<a href="#" class="text-blue-500">Download disini</a>)</p>

                        <label class="block text-sm mt-4" for="">Form 16</label>
                        <div class="relative mt-3">
                            <x-text-input id="form16" class="block mt-1 mb-3 w-96 border border-black pl-2 pr-10 py-2" type="text" placeholder="Unggah File..." readonly />
                            <label for="file" class="absolute inset-y-0 right-0 flex items-center pr-2 cursor-pointer">
                                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 15v4.4c0 .4-.2.8-.6 1-.4.2-.8.4-1.2.4H4.8c-.4 0-.8-.2-1-.6s-.4-.8-.4-1.2V15M12 3v12"/>
                                    <polyline points="9 6 12 3 15 6"/>
                                </svg>
                            </label>
                            <input id="file" class="absolute inset-0 w-full h-full opacity-0 cursor-pointer" type="file" name="file" />
                        </div>
                        <p class="text-xs text-gray-500 mt-1">Format file PDF (<a href="#" class="text-blue-500">Download disini</a>)</p>
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
