<x-dosen-layout :title="'Daftar Mahasiswa'">

    <!-- Section Permintaan Mahasiswa Bimbingan -->

    <h1 class="font-bold mb-2">
        Daftar Permintaan Mahasiswa Bimbingan
    </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-white bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Program Studi
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Status
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        Syifa Aulia
                    </td>
                    <td class="px-6 py-4 border">
                        1907411056
                    </td>
                    <td class="px-6 py-4 border">
                        Teknik Multimedia Digital
                    </td>
                    <td class="px-6 py-4 border">
                        Perancangan Media Pembelajaran Interaktif Untuk Kemagnetan Fisika SMP Kelas IX
                    </td>
                    <td class="px-6 py-4 space-x-2 flex">
                        <button class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">Terima</button>
                        <button class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]">Tolak</button>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        Dwi Adyaksa
                    </td>
                    <td class="px-6 py-4 border">
                        1907411026
                    </td>
                    <td class="px-6 py-4 border">
                        Teknik Multimedia Digital
                    </td>
                    <td class="px-6 py-4 border">
                        RANCANG BANGUN APLIKASI 3D VIRTUAL EXHIBITION SEBAGAI MEDIA PROMOSI KARYA SENI
                    </td>
                    <td class="px-6 py-4 space-x-2 flex">
                        <button class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">Terima</button>
                        <button class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]">Tolak</button>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        M Fauzan Rizky Agusta
                    </td>
                    <td class="px-6 py-4 border">
                        1907411022
                    </td>
                    <td class="px-6 py-4 border">
                        Teknik Informatika
                    </td>
                    <td class="px-6 py-4 border">
                        Rancang Bangun Aplikasi Salon Online Muslimah Jamilah Berbasis Android dan Website
                    </td>
                    <td class="px-6 py-4 space-x-2 flex">
                        <button class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">Terima</button>
                        <button class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]">Tolak</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <!-- Section Daftar Mahasiswa Bimbingan -->

    <h1 class="font-bold mb-2">
        Daftar Mahasiswa Bimbingan
    </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-4">
        <table class="w-full text-sm text-left">
            <thead class="text-xs text-white bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        NIM
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Program Studi
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Judul
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        Farrah Dillah Angeli
                    </td>
                    <td class="px-6 py-4 border">
                        1907411012
                    </td>
                    <td class="px-6 py-4 border">
                        Teknik Informatika
                    </td>
                    <td class="px-6 py-4 border">
                        Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover"  href="{{route('dosen.detail-mahasiswa')}}">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        Niyara Arinda
                    </td>
                    <td class="px-6 py-4 border">
                        1907411032
                    </td>
                    <td class="px-6 py-4 border">
                        Teknik Informatika
                    </td>
                    <td class="px-6 py-4 border">
                        Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover"  href="{{route('dosen.detail-mahasiswa')}}">Detail</a>
                    </td>
                </tr>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        Rafiqi Auzan
                    </td>
                    <td class="px-6 py-4 border">
                        1907411067
                    </td>
                    <td class="px-6 py-4 border">
                        Teknik Informatika
                    </td>
                    <td class="px-6 py-4 border">
                        Analisis Sentimen Perbandingan Kepuasan Pelanggan Terhadap Tiap Provider Internet
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover"  href="{{route('dosen.detail-mahasiswa')}}">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-dosen-layout>