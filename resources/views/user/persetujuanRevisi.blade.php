<x-user-layout :title="'Daftar Persetujuan Revisi '">
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
        <div class="w-3/4">
        <!-- add logbook -->
        <div class="flex justify-end mt-8">
            <a href="{{ route('user.form-revisi') }}" class="h-10 w-fit p-2 rounded-lg bg-[#4997A1] flex text-sm font-bold text-white shadow">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512" class="mr-2 mt-1" fill="white"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z" />
                </svg>
                Tambahkan Pengajuan
            </a>
        </div>

        <h1 class="font-bold"> Daftar Pengajuan Persetujuan Revisi</h1>
    <div class="w-full h-full mt-5">
      <table class="min-w-full border-collapse block md:table">
        <thead class="block md:table-header-group">
          <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
            <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>03 Juni 2023</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>Diterima</td>
            <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                <a href="{{ route('user.detail-revisi') }}" class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover">Detail</a>
            </td>     
          </tr>
        </tbody>
      </table>
    </div>
</x-user-layout>