<x-user-layout :title="'Form Persetujuan Revisi '">
    <div class="pl-11 pr-6">
        @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
        @endif
        <!-- Form Pengajuan -->
        <form class="w-full" enctype="multipart/form-data" action="{{ route('user.create-form-revisi') }}" method="post">
            @csrf
            <input type="hidden" name="id" id="idRevisi">
            <input type="hidden" name="nim" value="123" id="nim">
            <h1 class="flex justify-center font-bold text-xl text-font mb-10">Form Pengajuan Persetujuan</h1>
            <div class="flex justify-between space-x-10">
                <div>
                    <label class="flex flex-wrap text-sm mb-2" for="">
                        Judul Skripsi
                        <p class="text-red-600 pl-1">*</p>
                    </label>
                    <x-text-input id="judul" class="block mt-1 w-96 border-black mb-9" type="text" name="judul" placeholder="Masukkan teks..." required autofocus value="{{ old('judul', $oldJudul) }}"/>

                </div>
                <div>
                    <label class="flex flex-wrap text-sm mb-2" for="">
                        Link Vidio Demo
                        <p class="text-red-600 pl-1">*</p>
                    </label>
                    <x-text-input id="link_vidio" class="block w-96 border-black" type="text" name="link_vidio" placeholder="Masukkan link vidio.." autofocus value="{{ old('link_vidio', $oldLinkVidio) }}"/>
                </div>
            </div>
            <div class="mb-4">
                <label for="poin_revisi" class="flex flex-wrap mb-2 text-sm font-medium text-gray-900">
                    Poin-poin revisi
                    <p class="text-red-600 pl-1">*</p>
                </label>
                <textarea name="poin_revisi" id="poin_revisi" rows="4" class="block p-2.5 w-full text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan poin-poin revisi anda..." disabled>
                    <!-- Ini ntar poin nya dari dosen penguji-->
                </textarea>
            </div>
            <!-- Umpan Balik -->
            <div class="mt-12">
                <div class="flex justify-center rounded-t-lg bg-header h-10 p-2">
                    <p class="font-bold text-white">Umpan Balik</p>
                </div>
                <div class="border rounded-b-lg rounded-br-lg shadow p-4">
                    <p>Ini adalah bagian umpan balik yang diberikan kepada Anda.</p>
                </div>
            </div>
            <div class="flex justify-end">
            <x-primary-button id="kirimButton" class="flex justify-center w-fit mt-8" data-id="id_revisi">
                    {{ __('Kirim') }}
                </x-primary-button>
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script>
        // Menyimpan data yang dimasukkan saat tombol Kirim ditekan
        $('#kirimButton').on('click', function() {
            var judul = $('#judul').val();
            var link_vidio = $('#link_vidio').val();
            
            localStorage.setItem('saved_judul', judul);
            localStorage.setItem('saved_link_vidio', link_vidio);
        });

        // Mengambil dan mengisi kembali data yang sudah disimpan saat halaman dimuat
        $(document).ready(function() {
            var savedJudul = localStorage.getItem('saved_judul');
            var savedLinkVidio = localStorage.getItem('saved_link_vidio');
            
            $('#judul').val(savedJudul);
            $('#link_vidio').val(savedLinkVidio);
        });
    </script>
</x-user-layout>
