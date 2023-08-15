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
            @forelse($daftarRevisiProposal as $RevisiProposal)
                <tr class="bg-white border-b">
                    <td class="px-6 py-4 border w-1/3 text-center ">
                <!-- manggil di dosen penguji -->
                    </td>
                    <td class="px-6 py-4 border">
                    {{$RevisiProposal->poin_revisi}}
                    </td>
                </tr>
                @empty
                    <p>Daftar pengajuan sidang masih kosong</p>
                @endforelse    
            </tbody>
        </table>
    </div>
</x-user-layout>