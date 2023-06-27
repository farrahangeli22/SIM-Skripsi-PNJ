<x-user-layout :title="'Logbook'">
  <div class="flex w-full p-4 gap-5 overflow-x-hidden">
    <div class="flex flex-col w-1/4">
      <div class="p-5 bg-gray-100 text-center mt-11 flex flex-col items-center rounded" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
        <form>
          <h1 class="text-l">Dosen Pembimbing</h1>
        </form>

        <div class="w-20 h-20 mr-5 mt-5 rounded-full flex items-center justify-center overflow-hidden">
          <img class="w-full h-full object-cover" src="/assets/gambar.jpg" alt="Gambar">
        </div>

        <h4 class="mt-4 text-xs">Eriya, S.Kom., M.T.</h4>
        <h4 class="text-xs">NIP. 197802032005012002</h4>
      </div>

      <div class="text-center mt-11 bg-header p-4 rounded-t-lg rounded-tr-lg text-white" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
        <h3 class="mb-4">Dokumen Skripsi</h3>
      </div>
      <div class="text-center bg-gray-200 p-4 rounded-b-lg rounded-br-lg" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
        <p class="text-gray-400 text-sm mb-11 mt-5">Unggah dokumen skripsi anda disini</p>
        <a href="#" class="text-header text-sm underline mt-4">Unggah</a>
      </div>
    </div>
    <div class=" pl-11 pr-6">
      <div class="p-8 w-fit h-fit bg-gray-100 text-center mt-11 flex flex-col items-center rounded" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);"> 
        <form class="flex h-11">
          <p class="text-gray-400 text-sm mb-8 text-justify">Segera lengkapi logbook bimbingan anda dan kirim ke Dosen Pembimbing untuk mendapatkan persetujuan</p>
          <x-primary-button  class="text-white bg-header rounded px-2 py-2 ml-6" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">Tambah</x-primary-button>
        </form>
      </div>
      <div class="flex mt-11 bg-header p-4 rounded-t-lg rounded-tr-lg text-white justify-between">
          <h3>15 Februari</h3>
          <div class="flex">
            <svg xmlns="http://www.w3.org/2000/svg" class="mr-1 mt-1" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><style>svg{fill:#ffffff}</style><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>
          <h3>Menunggu Persetujuan</h3>  </div> 
      </div>
      <div class="text-center bg-gray-200 p-8 rounded-b-lg rounded-br-lg" style="box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.2);">
        <p class="text-gray-400 text-sm text-justify">Bimbingan hari ini adalah review proposal penelitian bab 1 yang telah dibuat oleh mahasiswa bimbingan. Dosen memberikan catatan dari kekurangan yang ada, sebagai berikut...</p>
      <a href="#" class="text-header text-sm underline flex justify-end">Detail</a>
      </div>
    </div>
  </div>
</x-user-layout>
