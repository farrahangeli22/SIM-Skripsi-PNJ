<x-admin-layout :title="'Dashboard Admin'">
        <div class="grid grid-cols-3 gap-3 ">
            <div class="col-span-2 bg-white rounded-lg shadow-md p-4">
                <h3 class="text-lg font-medium">Filter by :</h3>
                <div class="flex justify-end mb-4">
                    <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        Reset Filter
                    </button>
                </div>
                <div class="flex flex-col">
                    <div class="w-2/3 mb-4">
                        <label for="option1" class="block text-sm font-medium text-gray-700">Status</label>
                        <select id="option1" name="option1" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Seluruh Status</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                    <div class="w-2/3 mb-4">
                        <label for="option2" class="block text-sm font-medium text-gray-700">Prodi</label>
                        <select id="option2" name="option2" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option value="">Seluruh Pordi</option>
                            <option value="option1">Option 1</option>
                            <option value="option2">Option 2</option>
                            <option value="option3">Option 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-span-1 bg-white rounded-lg shadow-md p-4">
                <div class="grid-flow-col">
                    <div class="chart-container self-center justify-self-center">
                        <canvas id="chartPie"></canvas>
                    </div>
                </div>
            </div>
        </div>

           <!-- component -->
            <table class="w-full mt-4">
    <table class="min-w-full border-collapse block md:table">
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
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>Niyara Arinda</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>1907411032</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Prodi</span>Tenik Informatika</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Kelas</span>TI 8A</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>Lulus Sidang Skripsi</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>Eriya</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web</td>
			</tr>
			<tr class="bg-white border border-grey-500 md:border-none block md:table-row text-sm">
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nama</span>Farrah Dillah Angeli</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">NIM</span>1907411012</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Prodi</span>Tenik Informatika</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Kelas</span>TI 8A</td>
				<td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Status</span>Lulus Sidang Skripsi</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Dosen Pembimbing</span>Eriya</td>
                <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Judul</span>Rancang Bangun Sistem Informasi Manajemen Skripsi Terintegrasi Berbasis Web</td>
			</tr>
		</tbody>
	</table>
    
    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const dataPie = {
            labels: ["TI", "TMD", "TMJ"],
            datasets: [
                {
                    label: "Jumlah",
                    data: [300, 50, 100],
                    backgroundColor: [
                        "rgb(133, 105, 241)",
                        "rgb(164, 101, 241)",
                        "rgb(101, 143, 241)",
                    ],
                    hoverOffset: 4,
                },
            ],
        };

        const configPie = {
            type: "pie",
            data: dataPie,
            options: {},
        };

        var chartPie = new Chart(document.getElementById("chartPie"), configPie);
    </script>
</x-admin-layout>