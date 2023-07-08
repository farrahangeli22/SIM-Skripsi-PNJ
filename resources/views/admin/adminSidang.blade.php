<x-admin-layout>
     <h1 class="font-bold mt-11">Daftar Pengajuan Sidang Skripsi</h1>
      <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative text-sm"  style="font-size: 0.6rem;">
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sub Judul</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Anggota Kelompok</th>
				<th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Dosen Pembimbing</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell" style="width: 150px;">Dosen Penguji</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F4</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F5</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F6</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F7</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F8</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F9</th>
                <th class="bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
            </tr>
		</thead>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-xs" style="font-size: 0.6rem;"">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>8 Februari 2023</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>Niyara Arinda</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>1907411032</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Sub Judul</span>Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web (Modul: Pengajuan Sidang Skripsi & Penyerahan Alat)</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Anggota Kelompok</span>Farrah Dillah Angeli</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>Eriya,S.Kom., M.T.</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                    <span class="inline-block md:hidden font-bold">Calon Dosen Penguji</span>
                        <ul class="list-disc ml-1 list-inside">
                        <li style="list-style-type: disc;">Penguji 1</li>
                        <li style="list-style-type: disc;">Penguji 2</li>
                        <li style="list-style-wtype: disc;">Penguji 3</li>
                        </ul>
                </td>
                    <td>
                    <div style="text-align: center;">
                        <a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">F4</a>
                    </div>
                    </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"></td>
                    <td>
                    <div style="text-align: center;">
                        <a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">F6</a>
                    </div>
                    </td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"></td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"></td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"></td>
                    <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
					<button class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Edit</button>
                     </td>
                    <!-- modal -->
                    <div id="modal" class="max-width z-50 fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center overflow-y-auto hidden">
                        <div class="bg-white p-6 rounded-lg">
                            <div class="flex ">
                                <div class="w-1/2 p-3">
                                    <h2 class="text-xl font-bold mb-4">Edit Data Mahasiswa</h2>
                                    <!-- Konten kiri -->
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Nama:</label>
                                        <p>Niyara Arinda</p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">NIM:</label>
                                        <p>1907411032</p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Prodi:</label>
                                        <p>Teknik Informatika</p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Kelas:</label>
                                        <p>TI 8A</p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Judul:</label>
                                        <p>Rancang Bangun Sistem Informasi Manajemen Skripsi</p>
                                    </div>
                                     <div class="flex flex-col mb-6 text-xs">
                                        <label class="font-bold">Sub Judul:</label>
                                        <p>Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web (Modul: Pengajuan Sidang Skripsi & Penyerahan Alat)</p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Pembimbing:</label>
                                        <select class="h-10 text-xs text-gray-700 border border-black rounded-md">
                                        <option>Dosen 1</option>
                                        <option>Dosen 2</option>
                                        <option>Dosen 3</option>
                                        </select>

                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Penguji 1:</label>
                                        <select class="h-10 text-xs text-gray-700 border border-black rounded-md px-3">
                                            <option>Dosen 1</option>
                                            <option>Dosen 2</option>
                                            <option>Dosen 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="w-1/2">
                                    <!-- Konten kanan -->
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Penguji 2:</label>
                                        <select class="h-10 text-xs text-gray-700 border border-black rounded-md" >
                                            <option>Dosen 1</option>
                                            <option>Dosen 2</option>
                                            <option>Dosen 3</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Dosen Penguji 3:</label>
                                        <select class="h-10 text-xs text-gray-700 border border-black rounded-md px-3"
                                            <option>Dosen 1</option>
                                            <option>Dosen 2</option>
                                            <option>Dosen 3</option>
                                        </select>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F4:</label>
                                         <a href="https://s.pnj.ac.id/FormF4" target="_blank" class="text-blue-500">Form-F4.pdf</a>
                                    </div>
                                     <label class="block font-bold text-xs" for="">
                                        Form F5:
                                    </label>
                                    <x-text-input id="judul" class="w-full h-10 text-xs block p-1 mt-1 mb-3 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                                    <div class="flex flex-col mb-2 text-xs">
                                        <label class="font-bold">Form F6:</label>
                                         <a href="https://s.pnj.ac.id/FormF6" target="_blank" class="text-blue-500">Form-F6.pdf</a>
                                    </div>
                                     <label class="block font-bold text-xs" for="">
                                        Form F7:
                                    </label>
                                    <x-text-input id="judul" class="w-full h-10 text-xs block p-1 mb-2 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                                     <label class="block font-bold text-xs" for="">
                                        Form F8:
                                    </label>
                                    <x-text-input id="judul" class="w-full h-10 text-xs block p-1 mb-4 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                                     <label class="block font-bold text-xs" for="">
                                        Form F9:
                                    </label>
                                    <x-text-input id="judul" class="w-full h-10 text-xs block p-1 mb-2 border border-black cursor-pointer" type="file" name="judul" required autofocus/>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex justify-end w-full">
                                    <button id="saveModal" class="mt-4 bg-primary hover:bg-font text-white font-bold py-2 px-4 rounded text-sm">
                                        Simpan
                                    </button>
                                </div>
                                <div class="w-full">
                                    <button id="closeModal" class="mt-4 ml-4 bg-delete hover:bg-hoverDelete text-white font-bold py-2 px-4 rounded text-sm">
                                        Tutup
                                    </button>
                                </div>
                            </div>
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