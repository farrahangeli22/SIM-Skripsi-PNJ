<x-admin-layout :title="'Dashboard Admin'">
    <div class="col-span-2 bg-white rounded-lg shadow-md p-4">
        <h3 class="text-lg font-medium">Filter by :</h3>
        <form method="post" action="{{ route('admin.dashboard-admin-filter') }}" enctype="multipart/form-data" class="flex flex-col mt-4">
            @csrf
            <div class="flex justify-between space-x-10">
                <div class="w-1/2 mb-4">
                    <label for="status" class="block text-sm font-medium text-gray-700">Status</label>
                    <select id="status" name="status" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">pilih status</option>
                        <option value="pengajuanJudul" {{ request('status') == 'pengajuanJudul' ? 'selected' : '' }}>Pengajuan Judul dan Dosen Pembimbing</option>
                        <option value="pengajuanSempro" {{ request('status') == 'pengajuanSempro' ? 'selected' : '' }}>Pengajuan Seminar Proposal</option>
                        <option value="lulusSempro" {{ request('status') == 'lulusSempro' ? 'selected' : '' }}>Lulus Seminar Proposal</option>
                        <option value="tidakLulusSempro" {{ request('status') == 'tidakLulusSempro' ? 'selected' : '' }}>Tidak Lulus Seminar Proposal</option>
                        <option value="pengajuanSidang" {{ request('status') == 'pengajuanSidang' ? 'selected' : '' }}>Pengajuan Sidang Skripsi</option>
                        <option value="lulusSidang" {{ request('status') == 'lulusSidang' ? 'selected' : '' }}>Lulus Sidang Skripsi</option>
                        <option value="tidakLulusSidang" {{ request('status') == 'tidakLulusSidang' ? 'selected' : '' }}>Tidak Lulus Sidang Skripsi</option>
                        <option value="penyerahanAlat" {{ request('status') == 'penyerahanAlat' ? 'selected' : '' }}>Penyerahan Alat</option>
                    </select>
                </div>
                <div class="w-1/2 mb-4">
                    <label for="prodi" class="block text-sm font-medium text-gray-700">Program Studi</label>
                    <select id="prodi" name="prodi" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="">Seluruh Pordi</option>
                        <option value="Teknik Informatika" {{ request('prodi') == 'Teknik Informatika' ? 'selected' : '' }}>Teknik Informatika</option>
                        <option value="Teknik Multimedia Digital" {{ request('prodi') == 'Teknik Multimedia Digital' ? 'selected' : '' }}>Teknik Multimedia Digital</option>
                    </select>
                </div>
                <div class="">
                    <button type="submit" class="mt-4 w-fit bg-edit hover:bg-hoverEdit hover:bg-font text-white font-bold py-2 px-4 rounded">
                        Cari
                    </button>
                </div>
            </div>
        </form>
    </div>

    <p class="mt-2">Total : {{count($dataMahasiswa)}}</p>
    <!-- component -->
    <table class="min-w-full border-collapse block md:table mt-4">
        <thead class="block md:table-header-group text-sm">
            <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative ">
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Prodi</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Kelas</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Status</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Pembimbing</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
            </tr>
        </thead>
        <tbody>
            @forelse($dataMahasiswa as $mahasiswa)
            <tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$mahasiswa->nama}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$mahasiswa->nim}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Prodi</span>{{$mahasiswa->prodi}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Kelas</span>{{$mahasiswa->kelas}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>{{$mahasiswa->status->nama}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>{{$mahasiswa->dosen ? $mahasiswa->dosen->nama:""}}</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$mahasiswa->skripsi ? $mahasiswa->skripsi->judul:""}}</td>
            </tr>
            @empty
            <p class="mt-4">Data mahasiswa tidak tersedia</p>
            @endforelse
        </tbody>
    </table>
</x-admin-layout>