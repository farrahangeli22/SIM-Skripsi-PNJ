<x-user-layout :title="'Home'">
    <h1 class="text-xl">Daftar Pembagian Dosen Pembimbing</h1>
    <hr class="mt-2 mb-8 border-2 border-primary">
    <img src="/assets/banner.jpeg" alt="">
    <!-- timeline skripsi -->
    <h1 class="mt-8 text-xl">Timeline Skripsi JTIK 2022/2023</h1>
    <hr class="mt-2 mb-8 border-2 border-primary">
    <img src="/assets/timeline-skripsi.png" />

    <!-- tabs -->

    <div class="mb-4 border-b border-primary py-6">
        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2">
                <x-primary-button class="flex justify-center w-full" aria-selected="bg-white" id="proposal-tab" data-tabs-target="#proposal" type="button" role="tab" aria-controls="proposal">
                    {{ __('Proposal') }}
                </x-primary-button>
            </li>
            <li class="mr-2">
                <x-primary-button class="flex justify-center w-full" id="skripsi-tab" data-tabs-target="#skripsi" type="button" role="tab" aria-controls="skripsi">
                    {{ __('Skripsi') }}
                </x-primary-button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 rounded-lg" id="proposal" role="tabpanel" aria-labelledby="proposal-tab">
            <p class="text-sm text-gray-500">
                ini proposal
            </p>
        </div>
        <div class="hidden p-4 rounded-lg" id="skripsi" role="tabpanel" aria-labelledby="skripsi-tab">
            <p class="text-sm text-gray-500">ini skripsi</p>
        </div>
    </div>

</x-user-layout>