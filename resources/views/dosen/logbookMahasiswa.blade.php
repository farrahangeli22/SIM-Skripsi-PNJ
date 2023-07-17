<x-dosen-layout :title="'Logbook Mahasiswa'">

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-sm text-center">
            <thead class="text-xs text-white bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border">
                        15 Februari 2023
                    </td>
                    <td class="px-6 py-4 border">
                        Farrah Dillah Angeli
                    </td>
                    <td class="px-6 py-4 border">
                        Menunggu Persetujuan
                    </td>
                    <td class="px-6 py-4 flex justify-center">
                        <a class="block h-fit w-fit p-2 rounded-lg bg-primary flex text-sm font-bold text-white shadow hover:bg-hover" href="{{route('dosen.detail-logbook')}}">Detail</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-dosen-layout>