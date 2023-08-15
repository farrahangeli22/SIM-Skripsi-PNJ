<x-user-layout :title="'Daftar Revisi Proposal '">
    <h1 class="font-bold mb-2">
        Daftar Revisi Proposal
    </h1>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mb-8">
        <table class="w-full text-l">
            <thead class="text-l text-white text-center bg-primary">
                <tr>
                    <th scope="col" class="px-6 py-3 border w-1/3">
                        Penguji
                    </th>
                    <th scope="col" class="px-6 py-3 border">
                        Poin Revisi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border w-1/3 text-center ">
                        Asep Taufik Muharram, S.Kom., M.Kom.
                    </td>
                    <td class="px-6 py-4 border">
                        1. Latar belakang ditambah </br>
                        2. Batasan masalah diperbarui </br>
                        2. use case actornya ditambahkan </br>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</x-user-layout>