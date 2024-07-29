<x-module.cabang>
    <div class="card-header py-2">
        <h5 class="m-0 font-weight-bold text-dark" style="text-align:center; font-size: 25px">TRAINING</h5>
    </div>
    <br>
    <div class="card">
        <div class="card-body">
            <a href="#addDataModal" data-toggle="modal" class="btn btn-dark float-right"><span class="fa fa-plus"></span>
                Tambah Data</a>
            <table id="example1" class="table table-datatable table-bordered">
                <thead class="bg-dark">
                    <th style="color: white;" width=" 10px" class="text-center">NO</th>
                    <th style="color: white;" class="text-center">AKSI</th>
                    <th style="color: white;" class="text-center">TRAINING</th>
                    <th style="color: white;" class="text-center">BERKAS PDF</th>
                    <th style=" color: white;" class="text-center">BERKAS WORD</th>
                </thead>
                <tbody>
                    @foreach($trainings as $training)
                    <tr>
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="#edit{{ $training->id }}" data-toggle="modal" class="btn btn-warning float-right"><span class="fa fa-edit"></span></a>
                                <x-template.button.delete-button url="cabang/training" id="{{ $training->id }}" />
                            </div>
                        </td>
                        <td class="text-center">{{ $training->nama }}</td>
                        <td class="text-center">
                            <button class="btn btn-primary" onclick="viewPDF('{{ url('/' . $training->berkas_pdf) }}')">Lihat PDF</button>
                        </td>
                        <td class="text-center">
                            <a class="text-white btn btn-primary" href="{{ url('/') }}/{{ $training->berkas_word }}" download>
                                <span>Download Word</span>
                            </a>
                        </td>
                    </tr>
                    <div class="modal fade" id="edit{{ $training->id }}" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addDataModalLabel">Edit Data Training</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="{{ url('cabang/training', $training->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="name">NAMA TRAINING</label>
                                            <input type="text" class="form-control" id="name" value="{{ $training->nama }}" name="nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">BERKAS PDF</label>
                                            <input type="file" class="form-control" id="name" name="berkas_pdf">
                                        </div>
                                        <div class="form-group">
                                            <label for="subject">BERKAS WORD</label>
                                            <input type="file" class="form-control" id="name" name="berkas_word">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                        <button type="submit" class="btn btn-primary">Tambah</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="addDataModal" tabindex="-1" role="dialog" aria-labelledby="addDataModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addDataModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ url('cabang/training') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">NAMA TRAINING</label>
                            <input type="text" class="form-control" id="name" name="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">BERKAS PDF</label>
                            <input type="file" class="form-control" id="name" accept=".pdf" name="berkas_pdf" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">BERKAS WORD</label>
                            <input type="file" class="form-control" id="name" accept=".doc,.docx" name="berkas_word" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal for PDF -->
    <div class="modal fade" id="pdfModal" tabindex="-1" role="dialog" aria-labelledby="pdfModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="pdfModalLabel">View PDF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="pdfViewer" src="" width="100%" height="500px"></iframe>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-module.cabang>