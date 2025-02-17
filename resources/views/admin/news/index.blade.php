<x-module.admin>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">NEWS</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="{{ url('admin/news/create') }}" class="float-right btn btn-dark"><i class="fas fa-plus"></i> Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" width=" 90px" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">JUDUL</th>
                    <th style="color: white;" class="text-center">TANGGAL</th>
                    <th style=" color: white;" class="text-center">PENULIS</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach($news as $news)
                    <tr>
                        <td class="text-center">{{ $no++ }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <x-template.button.info-button url="admin/news" id="{{ $news->id }}" />
                                <x-template.button.edit-button url="admin/news" id="{{ $news->id }}" />
                                <x-template.button.delete-button url="admin/news" id="{{ $news->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $news->judul }}</td>
                        <td class="text-center">{{ $news->tanggal }}</td>
                        <td class="text-center">{{ $news->penulis }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-module.admin>