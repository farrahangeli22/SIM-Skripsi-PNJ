<x-admin-layout>
     <h1 class="font-bold mt-11">Daftar Pengajuan Sidang Skripsi</h1>
      <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative text-sm">
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Anggota Kelompok</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Pembimbing</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Penguji</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
            </tr>
		</thead>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-xs">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>8 Februari 2023</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>Niyara Arinda</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>1907411032</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Anggota Kelompok</span>Farrah Dillah Angeli</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>Eriya,S.Kom., M.T.</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block md:hidden font-bold">Calon Dosen Penguji</span>
                        <ul class="list-disc ml-1 list-inside">
                        <li style="list-style-type: disc;">Penguji 1</li>
                        <li style="list-style-type: disc;">Penguji 2</li>
                        <li style="list-style-type: disc;">Penguji 3</li>
                        </ul>
                </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
					<button class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Edit</button>
				  <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center overflow-y-auto hidden">
                        <div class="bg-white p-6 rounded-lg flex flex-wrap">
                            <div class="w-2/3">
                                <h2 class="text-xl font-bold mb-4">Edit Data Mahasiswa</h2>
                                <!-- Konten kiri -->
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Nama:</label>
                                    <p>Niyara Arinda</p>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">NIM:</label>
                                    <p>1907411032</p>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Prodi:</label>
                                    <p>Teknik Informatika</p>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Kelas:</label>
                                    <p>TI 8A</p>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Judul:</label>
                                    <p>Rancang Bangun Sistem Informasi Manajemen Skripsi</p>
                                </div>
                            </div>
                            <div class="w-1/3">
                                <!-- Konten kanan -->
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Dosen Pembimbing:</label>
                                    <select class="w-full h-10 text-sm text-gray-700 border border-black rounded-md px-3">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                    </select>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Dosen Penguji 1:</label>
                                    <select class="w-full h-10 text-sm text-gray-700 border border-black rounded-md px-3">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                    </select>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Dosen Penguji 2:</label>
                                    <select class="w-full h-10 text-sm text-gray-700 border border-black rounded-md px-3">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                    </select>
                                </div>
                                <div class="flex flex-col mb-4">
                                    <label class="font-bold">Dosen Penguji 3:</label>
                                    <select class="w-full h-10 text-sm text-gray-700 border border-black rounded-md px-3">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                    </select>
                                </div>
                            </div>
                    <button id="saveModal" class="mt-4 bg-primary hover:bg-font text-white font-bold py-2 px-4 rounded">
                        Simpan
                    </button>

                    <button id="closeModal" class="mt-4 ml-4 bg-delete hover:bg-hoverDelete text-white font-bold py-2 px-4 rounded">
                        Tutup
                    </button>
                    </div>
                    </div>
                </td>
            </tr>
		</tbody>
	</table>
</div>
      
<script>
        // Ambil elemen modal dan tombol-tombolnya
  const modal = document.getElementById('modal');
  const closeModalBtn = document.getElementById('closeModal');
  const editBtns = document.querySelectorAll('.bg-edit');

  // Fungsi untuk membuka modal
  function openModal() {
    modal.classList.remove('hidden');
  }

  // Fungsi untuk menutup modal
  function closeModal() {
    modal.classList.add('hidden');
  }

  // Tambahkan event listener untuk tombol-tombol edit
  editBtns.forEach((btn) => {
    btn.addEventListener('click', openModal);
  });

  // Tambahkan event listener untuk tombol tutup modal
  closeModalBtn.addEventListener('click', closeModal);
      
</script>       
</x-admin-layout>