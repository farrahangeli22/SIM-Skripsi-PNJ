<x-penguji-layout :title="'Daftar Sidang Skripsi'">
<h1 class="font-bold mt-11">Daftar Sidang Skripsi</h1>
    <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
            <thead class="block md:table-header-group">
                <tr class="bg-primary text-white font-bold text-left block md:table-row">
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Nama</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">NIM</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Program Studi</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Judul</th>
                    <th class="p-2 md:border md:border-grey-500 block md:table-cell">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Data mahasiswa sidang skripsi akan ditampilkan di sini -->
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>Niyara Arinda</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>1907411032</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Program Studi</span>Teknik Informatika</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>Rancang Bangun Sistem Informasi Manajemen Skrpsi Terintegrasi untuk modul sidang skripsi dan penyerahan alat berbasis web</td>    
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
                    <button class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Aksi</button>
                </td>        
            </tbody>
        </table>
    </div>
</x-penguji-layout>