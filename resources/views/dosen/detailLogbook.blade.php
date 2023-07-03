<x-dosen-layout :title="'Daftar Mahasiswa'">

<form class="w-full space-y-4">
        <div class="flex justify-between mb-2">
            <div>
                <label class="block text-sm mb-2" for="">
                    Tanggal Bimbingan
                </label>
                <x-text-input id="judul" class="block mt-1 w-64 border-black mb-4" type="date" name="date" required autofocus readonly/>
            </div>
            <div>
            <label class="block text-sm mb-2" for="">
                    Dokumentasi
                </label>
                <x-text-input id="judul" class="block w-64 h-10 p-1 border border-black cursor-pointer" type="file" name="judul" required autofocus readonly/>
            </div>
            <div>
            <label class="block text-sm mb-2" for="">
                    Media Bimbingan
                </label>
                <x-text-input id="judul" class="block mt-1 w-64 border-black mb-4" type="text" name="judul" placeholder="Online dengan Media Zoom" required autofocus readonly/>
            </div>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Uraian Catatan Bimbingan
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-60 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat" readonly></textarea>
        </div>
        <div>
            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                Rencana Pencapaian
            </label>
            <textarea id="message" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." readonly></textarea>
        </div>
    </form>

    <!-- button action -->
    <div class="flex space-x-4 mt-8">
        <!-- button terima -->
        <div class="flex justify-end w-full">
            <button class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">Terima</button>
        </div>

        <!-- button tolak -->
        <div class="w-full">
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"  class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]" type="button">Tolak</button>
        </div>
        
        <!-- Main modal -->
        <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto h-[calc(100%-1rem)] max-h-full">
            <div class="relative w-full max-w-md max-h-full">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center" data-modal-hide="authentication-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="px-6 py-6 lg:px-8">
                        <form class="space-y-6" action="#">
                            <div>
                                <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alasan</label>
                                <input type="text" name="" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Tuliskan sesuatu..." required>
                            </div>
                            <div class="flex justify-center">
                                <x-primary-button class="flex justify-center w-fit">
                                    {{ __('Kirim') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <!-- Feedback -->
    <div class="mt-8"> 
        <div class="flex justify-center rounded-t-lg bg-header h-10 p-2">
            <p class="font-bold text-white">Umpan Balik</p>
        </div>
        <div class="border rounded-b-lg rounded-br-lg shadow">
            <textarea id="message" rows="4" class="block p-2.5 w-full h-32 text-sm text-gray-900 rounded-b-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Tuliskan umpan balik Anda disini..."></textarea>
        </div>
    </div>

    <div class="flex justify-end mt-8">
        <x-primary-button class="flex justify-center w-fit">
            {{ __('Kirim') }}
        </x-primary-button>
    </div>

</x-dosen-layout>