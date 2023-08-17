<x-dosen-layout :title="'Daftar Mahasiswa'">
<div class="flex space-x-10">
        <!-- Card data mahasiswa -->
        <div class="w-96 rounded bg-cardData p-6">
            <h1 class="flex justify-center font-bold text-xl text-font mb-6">Data Mahasiswa</h1>
            <label class="block mb-4 font-bold text-sm" for="">Nama : 
                <p class="font-normal mt-2">{{$mahasiswa->nama}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">NIM : 
                <p class="font-normal mt-2">{{$mahasiswa->nim}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Program Studi : 
                <p class="font-normal mt-2">{{$mahasiswa->prodi}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Kelas : 
                <p class="font-normal mt-2">{{$mahasiswa->kelas}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Status : 
                <p class="font-normal mt-2">{{$mahasiswa->status->nama}}</p>
            </label>
            <label class="block mb-4 font-bold text-sm" for="">Total Bimbingan : 
                <p class="font-normal mt-2">{{$logbook}}</p>
            </label>
        </div>

        <div>
            @if(Session::has('message'))
            <div class="w-full h-fit p-2 rounded bg-[#40C057] mb-4 font-bold text-white">
                <p>{{ Session::get('message') }}</p>
            </div>
            @endif
            <!-- Form Unggah Nilai Proposal dan Skripsi -->
            @if($sempro > 0)
            <form class="w-full" enctype="multipart/form-data" action="{{route('dosen.create-detail-mahasiswa', ['id'=>$mahasiswa->nim])}}" method="post" action="/proses-data" onsubmit="return confirm('Apakah Anda yakin ingin mengirim data ini?')">
            <h1 class="font-bold text-xl text-font mb-8">Unggah Penilaian Mahasiswa</h1>
             @csrf
                <div class="flex space-x-10">
                    <div>
                        <label class="block text-sm mb-2" for="">
                            Nilai Proposal
                        </label>
                        <x-text-input id="nilai_sempro" class="block w-60 h-10 p-1 border border-black cursor-pointer bg-white" type="number" name="nilai_sempro" autofocus/>
                    </div>
                    <div>
                        <label class="block text-sm mb-2" for="">
                            Nilai Skripsi
                        </label>
                        <x-text-input id="nilai_skripsi" class="block w-60 h-10 p-1 border border-black cursor-pointer bg-white" type="number" name="nilai_skripsi" autofocus/>
                    </div>
                    <div class="mt-7">
                        <x-primary-button class="flex justify-center w-fit h-10">
                            {{ __('Kirim') }}
                        </x-primary-button>
                    </div>
                </div>
            </form>
            @endif

            <!-- Persetujuan  -->
            {{ dd ($sempro )}}
            @if($sempro->status)
            
            <form method="POST" class="mt-8">
                <h1 class="font-bold text-xl text-font mb-8 mt-8">Berikan Persetujuan Pendaftaran Seminar</h1>
                <div class="flex space-x-10">
                    <!-- button setuju -->
                    <div class="w-full">
                        <input type="submit" name="status" value="Setuju" class="block h-fit w-fit p-2 rounded-lg bg-[#40C057] flex text-sm font-bold text-white shadow hover:bg-[#17952E]">
                    </div>

                    <!-- button tolak -->
                    <div class="w-full">
                        <input type="submit" name="status" value="Tolak" class="block h-fit w-fit p-2 rounded-lg bg-[#E03131] flex text-sm font-bold text-white shadow hover:bg-[#B51A1A]">
                    </div>
                </div>
                @csrf
                @endif
            </form>

            <!-- Dokumen Skripsi Mahsiswa-->
            <div class="mb-8">
                <h1 class="font-bold text-xl text-font mb-8 mt-8">Dokumen Skripsi Mahasiswa</h1>
                <div class="">
                    <div class="">
                        <div class="flex space-x-1 text-sm mb-2">
                            <label class="font-bold" for="" style="display: inline-block; white-space: nowrap;">
                                Judul Skripsi :
                            </label>
                            <p>{{$mahasiswa->skripsi->judul}}</p>
                        </div>
                        <div>
                            <label class="block text-sm font-bold mb-2" for="">
                                Dokumen Skripsi :
                            </label>
                            <!-- pdf viewer -->
                        <iframe src="{{ url('/storage/'. $mahasiswa->skripsi->file_skripsi) }}" width="600" height="400"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tracking Status -->
            <div>
                <h1 class="font-bold text-xl text-font mb-8">Status</h1>
                <div>
                    <ol class="flex items-center w-52">
                        <div class="flex flex-col w-44">
                            <div class="flex justify-center flex-wrap ml-10"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512">! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.
                                    <path d="M256 288A144 144 0 1 0 256 0a144 144 0 1 0 0 288zm-94.7 32C72.2 320 0 392.2 0 481.3c0 17 13.8 30.7 30.7 30.7H481.3c17 0 30.7-13.8 30.7-30.7C512 392.2 439.8 320 350.7 320H161.3z"/>
                                </svg>
                                <p class="text-center text-sm">Pengajuan Judul dan Dosen Pembimbing</p>
                            </div>
                            <div>
                                @if($mahasiswa->status_id >= 1)
                                    <li class="flex w-full ml-20 items-center text-blue-600 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#00A1A1] after:border-4 after:inline-block">
                                        <span class="flex items-center justify-center w-6 h-6 bg-[#00A1A1] rounded-full shrink-0"></span>
                                    </li>
                                @else
                                    <li class="flex w-full ml-20 items-center text-blue-600 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#D9D9D9] after:border-4 after:inline-block">
                                        <span class="flex items-center justify-center w-6 h-6 bg-[#D9D9D9] rounded-full shrink-0"></span>
                                    </li>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-col w-44">
                            <div class="flex justify-center flex-wrap ml-10 pl-6"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512" class="mb-3">! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.
                                    <path d="M320 464c8.8 0 16-7.2 16-16V160H256c-17.7 0-32-14.3-32-32V48H64c-8.8 0-16 7.2-16 16V448c0 8.8 7.2 16 16 16H320zM0 64C0 28.7 28.7 0 64 0H229.5c17 0 33.3 6.7 45.3 18.7l90.5 90.5c12 12 18.7 28.3 18.7 45.3V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64z"/>
                                </svg>
                                <p class="text-center mb-6 text-sm">Seminar Proposal</p>
                            </div>
                            <div>
                                @if($mahasiswa->status_id >= 2)
                                <li class="flex w-full ml-20 items-center text-blue-600 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#00A1A1] after:border-4 after:inline-block">
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#00A1A1] rounded-full shrink-0"></span>
                                @else
                                <li class="flex w-full ml-20 items-center text-blue-600 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#D9D9D9] after:border-4 after:inline-block">
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#D9D9D9] rounded-full shrink-0"></span>
                                @endif
                            </div>
                        </div>
                        <div class="flex flex-col w-44">
                            <div class="flex justify-center flex-wrap ml-10 pl-6"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512" class="mb-3">! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.
                                    <path d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z"/>
                                </svg>
                                <p class="text-center text-sm mb-6">Sidang Skripsi</p>
                            </div>
                            <div>
                                @if($mahasiswa->status_id >= 5)
                                    <li class="flex items-center w-full ml-20 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#00A1A1] after:border-4 after:inline-block">
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#00A1A1] rounded-full shrink-0"></span>
                                @else
                                    <li class="flex w-full ml-20 items-center after:content-[''] after:w-full after:h-1 after:border-b after:border-[#D9D9D9] after:border-4 after:inline-block">
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#D9D9D9] rounded-full shrink-0"></span>
                                @endif
                                    </li>
                            </div>
                        </div>
                        <div class="flex flex-col w-44">
                            <div class="flex justify-center flex-wrap w-12 pl-6 ml-14"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 384 512" class="mb-3"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                    <path d="M0 64C0 28.7 28.7 0 64 0H224V128c0 17.7 14.3 32 32 32H384V448c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V64zm384 64H256V0L384 128z"/>
                                </svg>
                                <p class="text-center text-sm mb-6">Revisi</p>
                            </div>
                            <div class="mt-5">
                                @if($mahasiswa->status_id >= 8)
                                <li class="flex items-center w-full ml-20 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#00A1A1] after:border-4 after:inline-block">
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#00A1A1] rounded-full shrink-0"></span>
                                @else
                                <li class="flex items-center w-full ml-20 after:content-[''] after:w-full after:h-1 after:border-b after:border-[#D9D9D9] after:border-4 after:inline-block">
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#D9D9D9] rounded-full shrink-0"></span>
                                @endif
                                </li>
                            </div>
                        </div>
                        <div class="flex flex-col w-44">
                            <div class="flex justify-center flex-wrap ml-12"> 
                                <svg xmlns="http://www.w3.org/2000/svg" height="2em" viewBox="0 0 512 512" class="mb-3">! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc.
                                    <path d="M78.6 5C69.1-2.4 55.6-1.5 47 7L7 47c-8.5 8.5-9.4 22-2.1 31.6l80 104c4.5 5.9 11.6 9.4 19 9.4h54.1l109 109c-14.7 29-10 65.4 14.3 89.6l112 112c12.5 12.5 32.8 12.5 45.3 0l64-64c12.5-12.5 12.5-32.8 0-45.3l-112-112c-24.2-24.2-60.6-29-89.6-14.3l-109-109V104c0-7.5-3.5-14.5-9.4-19L78.6 5zM19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L233.7 374.3c-7.8-20.9-9-43.6-3.6-65.1l-61.7-61.7L19.9 396.1zM512 144c0-10.5-1.1-20.7-3.2-30.5c-2.4-11.2-16.1-14.1-24.2-6l-63.9 63.9c-3 3-7.1 4.7-11.3 4.7H352c-8.8 0-16-7.2-16-16V102.6c0-4.2 1.7-8.3 4.7-11.3l63.9-63.9c8.1-8.1 5.2-21.8-6-24.2C388.7 1.1 378.5 0 368 0C288.5 0 224 64.5 224 144l0 .8 85.3 85.3c36-9.1 75.8 .5 104 28.7L429 274.5c49-23 83-72.8 83-130.5zM56 432a24 24 0 1 1 48 0 24 24 0 1 1 -48 0z"/>
                                </svg>
                                <p class="text-center text-sm mb-6">Penyerahan Alat</p>
                            </div>
                            <div>
                                <li class="flex items-center w-full ml-20">
                                @if($mahasiswa->status_id >= 9)
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#00A1A1] rounded-full shrink-0"></span>
                                @else
                                    <span class="flex items-center justify-center w-6 h-6 bg-[#D9D9D9] rounded-full shrink-0"></span>
                                @endif
                                </li>
                            </div>
                        </div>
                    </ol>
                </div>
            </div>
        </div>
    </div>

</x-dosen-layout>