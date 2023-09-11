<div class="flex justify-center  my-2">
    <div class=" md:w-[100%]  bg-white h-fit border border-gray-200 rounded shadow-sm overflow-hidden">
        <div class="overflow-x-auto ">
            <table class="table   " id="dataTable">
                <thead class="bg-slate-700 text-slate-50 ">
                    <tr class="w-full  md:text-sm text-[10px]">
                        <th class="text-center">No</th>
                        <th class="text-center">Nama</th>
                        <th class="text-center">Username</th>
                        <th class="text-center">Umur</th>
                        <th class="text-center">Alamat</th>
                        <th class="text-center">Telepon</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                @foreach ($pasiens as $pasien)
                    <tbody>
                        <tr id="index_{{ $pasien->id }}"
                            class="w-full  md:text-sm text-[10px] dark:text-slate-200 {{ $loop->iteration % 2 == 0 ? 'dark:bg-slate-700' : 'bg-slate-50 dark:bg-slate-600' }}">
                            <th class="">{{ $loop->iteration }}</th>
                            <td class="">{{ $pasien->nama }}</td>
                            <td class="">{{ $pasien->username }}</td>
                            <td class="">{{ $pasien->umur }}</td>
                            <td class="">{{ $pasien->alamat }}</td>
                            <td class="">{{ $pasien->telepon }}</td>
                            <td class=" text-sm flex  md:gap-0 gap-1 text-slate-500 ">
                                <button
                                    class="open-modal-button text-white mr-2 px-5 md:text-sm text-[10px] btn bg-teal-500  btn-sm"
                                    data-id="{{ $pasien->id }}">Edit</button>
                                {{-- <form class="hapus" action="{{ route('pasien.destroy', $pasien->id) }}" method="post"
                                    class="">
                                    {{ $pasien->id }}
                                    @csrf @method('delete')
                                    <input type="submit"
                                        class="md:text-sm text-white  text-[10px] btn bg-Oldgreen btn-sm"
                                        value="Delete" />
                                </form> --}}
                                <button class="md:text-sm text-white  text-[10px] btn bg-Oldgreen btn-sm"
                                    data-id="{{ $pasien->id }}"
                                    data-action="{{ route('pasien.destroy', $pasien->id) }}"
                                    onclick="deleteConfirmation({{ $pasien->id }})">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

{{-- <div class="mt-4">
                {{ $pasiens->links() }}
            </div> --}}
