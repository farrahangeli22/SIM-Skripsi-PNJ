<x-penguji-layout :title="'Approval Revisi Skripsi'">

    <div class="w-full space-y-4">
        <h1 class="font-bold text-xl text-font mb-8">Persetujuan Revisi</h1>
        <div class="flex justify-between space-x-20 mb-2">
            <div class="w-full">
                <label class="block text-sm mb-2" for="">
                    Tanggal Bimbingan
                </label>
                <x-text-input value="" id="judul" class="block mt-1 w-full border-black mb-4" type="date" name="date" readonly/>
            </div>
            <div class="w-full">
                <label class="block text-sm mb-2" for="">
                    Link Demo
                </label>
                <a href="youtube.com" target="_blank" >Ini link demo</a>
            </div>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Poin-poin revisi
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-60 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Catatan bimbingan blablabla" readonly></textarea>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Dokumen Skripsi
            </label>
            <iframe src="{{ asset('asset/fileSkripsi.pdf') }}" class="w-full h-80"></iframe>
        </div>
    </div>


    <!-- Feedback -->
    <form method="POST" class="mt-8">
        <div class="flex justify-center rounded-t-lg bg-header h-10 p-2">
            <p class="font-bold text-white">Umpan Balik</p>
        </div>
        <div class="border rounded-b-lg rounded-br-lg shadow">
            <textarea id="feedback" name="feedback" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-b-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan umpan balik Anda disini..."></textarea>
        </div>

        <!-- button action -->
        <div class="flex justify-center mt-8">
            <!-- button terima -->
            <div class="flex justify-center w-full">
                <input type="submit" name="status" value="terima" class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">
            </div>
        </div>
    </form>

</x-penguji-layout>