<x-user-layout :title="'Form Logbook Bimbingan'">
    @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
    @endif
    <form class="w-full" enctype='multipart/form-data' action="{{route('user.create-form-logbook')}}" method="POST">
        @csrf
        <h1 class="font-bold text-xl text-font">Logbook Bimbingan</h1>
        <div class="flex justify-between mb-2">
            <div>
                <label class="block text-sm mb-2" for="">
                    Tanggal Bimbingan
                </label>
                <x-text-input id="tanggal_bimbingan" class="block mt-1 w-80 border-black mb-4" type="date" name="tanggal_bimbingan" required autofocus/>
            </div>
            <div>
                <label class="block text-sm mb-2" for="">
                    Dokumentasi
                </label>
                <x-text-input id="dokumentasi" class="block w-80 h-10 p-1 border border-black cursor-pointer" type="file" name="dokumentasi" required autofocus/>
            </div>
            <div>
            <label class="block text-sm mb-2" for="">
                    Media Bimbingan
                </label>
                <x-text-input id="media" class="block mt-1 w-80 border-black mb-4" type="text" name="media" placeholder="Masukkan teks..." required autofocus/>
            </div>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Uraian Catatan Bimbingan
            </label>
            <textarea id="rincian_kegiatan" rows="4" class="block p-2.5 w-full h-60 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" name="rincian_kegiatan" placeholder="Tambahkan catatan..."></textarea>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Rencana Pencapaian
            </label>
            <textarea id="rencana_pencapaian" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" name="rencana_pencapaian" placeholder="Tuliskan target pencapaian pada bimbingan berikutnya."></textarea>
        </div>
        <div class="flex justify-end">
            <x-primary-button class="flex justify-center w-fit">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
    </form>

</x-user-layout>