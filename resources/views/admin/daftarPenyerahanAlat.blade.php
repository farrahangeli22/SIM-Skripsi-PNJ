<x-admin-layout>
     <h1 class="font-bold mt-11">Daftar Penyerahan Alat</h1>
      <div class="w-full h-full mt-5">
        <table class="min-w-full border-collapse block md:table">
		<thead class="block md:table-header-group">
			<tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto md:relative" style="font-size: 0.5rem;">
				<th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Tanggal</th>
				<th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Nama</th>
				<th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">NIM</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Judul</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sub Judul</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Anggota Kelompok</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F10</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F11</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F12</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F13</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F14</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F15</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Form F16</th>
                <th class="padding: 0.1rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Link Vidio Demo</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat PKKP</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat TOEIC</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat Lomba</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat Kejuaraan</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Sertifikat Organisasi</th>
                <th class="padding: 0.5rem; bg-primary p-2 text-white font-bold md:border md:border-grey-500 text-left block md:table-cell">Aksi</th>
            </tr>
		</thead>
        <tbody>
        @forelse($daftarPenyerahanAlat as $PenyerahanAlat)
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row" style="font-size: 0.5rem;">
				<td class="padding: 0.5rem;  md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Tanggal</span>{{$PenyerahanAlat->created_at}}</td>
				<td class="padding: 0.5rem;  md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>{{$PenyerahanAlat->mahasiswa->nama}}</td>
				<td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>{{$PenyerahanAlat->mahasiswa->nim}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>{{$PenyerahanAlat->judul}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Sub Judul</span>{{$PenyerahanAlat->sub_judul}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Anggota Kelompok</span>{{$PenyerahanAlat->anggota}}</td>
                <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f10) }}" target="_blank" class="text-blue-500 ">F10</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell"></td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f12) }}" target="_blank" class="text-blue-500">F12</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f13) }}" target="_blank" class="text-blue-500">F13</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f14) }}" target="_blank" class="text-blue-500">F14</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f15) }}" target="_blank" class="text-blue-500">F15</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem; text-align: center;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->file_f16) }}" target="_blank" class="text-blue-500">F16</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                    <div style="padding: 0.5rem;">
                        <a href="{{ $PenyerahanAlat->link_video }}" target="_blank" class="text-blue-500">Video</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_pkkp) }}" target="_blank" class="text-blue-500">Link Sertifikat PPKP</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_toeic) }}" target="_blank" class="text-blue-500">Link Sertifikat TOEIC</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_lomba) }}" target="_blank" class="text-blue-500">Link Sertifikat Lomba</a>
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                      @if ($PenyerahanAlat->sertifikat_kejuaraan && Storage::exists($PenyerahanAlat->sertifikat_kejuaraan)) 
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_kejuaraan) }}" target="_blank" class="text-blue-500">Link Sertifikat Kejuaraan</a>
                    @endif 
                    </div>
                    </td>
                    <td class="padding: 0.5rem; md:border md:border-grey-500 text-left block md:table-cell">
                     <div style="padding: 0.5rem;">
                    @if ($PenyerahanAlat->sertifikat_organisasi && Storage::exists($PenyerahanAlat->sertifikat_organisasi))
                        <a href="{{ url('/storage/'. $PenyerahanAlat->sertifikat_organisasi) }}" target="_blank" class="text-blue-500">Link Sertifikat Organisasi</a>
                    @endif
                    </div>
                    </td>
                   <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
					<span class="inline-block w-1/3 md:hidden font-bold">Aksi</span>
					<button onclick="editButton({{$PenyerahanAlat->id}})" class="bg-edit hover:bg-hoverEdit text-white font-bold py-1 px-2 border border-edit rounded">Edit</button>
                </td>
                    <!-- modal -->
                    <div id="modal" class="z-50 fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center overflow-y-auto hidden">
                        <form method="post" enctype="multipart/form-data">
                        <div class="bg-white p-6 rounded-lg">
                            <div class="flex ">
                                <div class="w-2/3 p-4" >
                                    <h2 class="text-xl font-bold mb-4">Edit Data Mahasiswa</h2>
                                    <!-- Konten kiri -->
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Nama:</label>
                                         <p id="namaMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">NIM:</label>
                                        <p id="nimMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Prodi:</label>
                                       <p id="prodiMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Kelas:</label>
                                        <p id="kelasMahasiswa"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Judul:</label>
                                        <p id="judul"></p>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Sub Judul:</label>
                                        <p id="subJudul"></p>
                                    </div>
                                    @csrf
                                    <input type="hidden" name="id" id="idPenyerahan">
                                    <input type="hidden" name="nim" value="" id="nim">
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F10:</label>
                                         <a href="#"  class="text-blue-500">Form-F10.pdf</a>
                                    </div>
                                     <label name="f11" class="block font-bold" for="">
                                        Form F11:
                                    </label>
                                    <input id="f11" name="f11" class="w-full h-10 text-sm block p-1 mt-1 border border-black cursor-pointer" type="file" autofocus/>
                                     <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F12:</label>
                                         <a href="#" class="text-blue-500">Form-F12.pdf</a>
                                    </div>
                                </div>
                                <div class="w-1/3">
                                    <!-- Konten kanan -->
                                     <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F13:</label>
                                         <a href="#"  class="text-blue-500">Form-F13.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F14:</label>
                                         <a href="#"  class="text-blue-500">Form-F14.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F15:</label>
                                         <a href="#" class="text-blue-500">Form-F15.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F16:</label>
                                         <a href="#"  class="text-blue-500">Form-F16.pdf</a>
                                    </div>
                                     <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Form F16:</label>
                                         <a href="#" class="text-blue-500">Form-F16.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Link Vidio Demo:</label>
                                         <a href="{{ $PenyerahanAlat->link_video }}" target="_blank" class="text-blue-500">Link Vidio Demo</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Sertifikat PKKP:</label>
                                         <a href="#"  class="text-blue-500">Sertifikat-PKKP.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Sertifikat TOEIC:</label>
                                         <a href="#" " class="text-blue-500">Sertifikat-TOEIC.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Sertifikat Lomba:</label>
                                         <a href="#"  class="text-blue-500">Sertifikat-Lomba.pdf</a>
                                    </div>
                                    <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Sertifikat Kejuaraan:</label>
                                         <a href="#"  class="text-blue-500">Sertifikat-Kejuaraan.pdf</a>
                                    </div>
                                     <div class="flex flex-col mb-4 text-xs">
                                        <label class="font-bold">Sertifikat Organisasi:</label>
                                         <a href="#" class="text-blue-500">Sertifikat-Organisasi.pdf</a>
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="flex justify-end w-full">
                                    <button id="saveModal" class="mt-4 bg-primary hover:bg-font text-white font-bold py-2 px-4 rounded text-xs">
                                        Simpan
                                    </button>
                                </div>
                              <div class="flex justify-center w-full">
                                    <button type="button" id="closeModal" class="mt-4 bg-delete hover:bg-hoverDelete text-white font-bold py-2 px-4 rounded">
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
                <p>Daftar penyerahan alat masih kosong</p>
            @endforelse
		</tbody>
	</table>
</div>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
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
      
 function editButton(id){
    $.ajax({
        type: 'GET',
        url: '/getpenyerahanAlat/'+id,
    }).done(function(res){
        console.log(res.nim)
        $('#nim').val(res.nim)
        $('#idPenyerahan').val(id)
        $('#namaMahasiswa').text(res.nama)
        $('#nimMahasiswa').text(res.nim)
        $('#prodiMahasiswa').text(res.prodi)
        $('#kelasMahasiswa').text(res.kelas)
        $('#judul').text(res.judul)
        $('#subJudul').text(res.subJudul)
    })
  }

</script>       
</x-admin-layout>