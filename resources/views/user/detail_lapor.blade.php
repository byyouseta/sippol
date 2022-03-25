@extends('layouts.app2')

@section('judul')
    Detail Pengaduan
@endsection
@section('content')
    <div class="col">
        <div class="col-xs-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="/history/pelaporan" class="btn btn-warning"><i class="fa fa-arrow-circle-left"></i> Kembali</a>
                    {{-- <h3 class="box-title">Detail Pengaduan</h3> --}}
                </div>

                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered">
                        <tr>
                            <th>Nomor Pelaporan</th>
                            <td>{{ $data->id }}</td>
                            <th>Dilaporkan Pada</th>
                            <td>{{ $data->created_at }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Pelaporan</th>
                            <td>{{ $data->pelaporan->jenis }}</td>
                            <th>Jenis Penerimaan</th>
                            <td>{{ $data->penerimaan->jenis }}</td>
                        </tr>
                        <tr>
                            <th>Jenis Peristiwa Penerimaan</th>
                            <td>{{ $data->peristiwa->nama }}</td>
                            <th>Pemberi Gratifikasi</th>
                            <td>{{ $data->nama_pemberi }}</td>
                        </tr>
                        <tr>
                            <th>Nilai /Harga Taksiran</th>
                            <td>{{ $data->nilai }}</td>
                            <th>Dokumen yang dilampirkan</th>
                            <td>{{ $data->dokumen }}</td>
                        </tr>
                        <tr>
                            <th>Uraian </th>
                            <td colspan="3">{{ $data->uraian_peristiwa }}</td>
                        </tr>
                        <tr>
                            <th>Balasan </th>
                            <td colspan="3">{{ $data2->catatan }}</td>
                        </tr>
                        <tr>
                            <th>Data Dukung</th>
                            <td colspan="5">
                                @if (!empty($data2->file))
                                    <a href="/lapor/manual/datadukung/{{ $data2->file }}" target="new_tab"> <span
                                            class="label label-success">Lihat File</span></a>
                                @else
                                    <span class="label label-default">Belum ada File</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>Status </th>
                            <td>
                                @if ($data->status == 0)
                                    <span class="label label-danger"> Pelaporan </span>
                                @elseif($data->status == 1)
                                    <span class="label label-warning">Ditangani</span>
                                @else
                                    <span class="label label-success">Selesai</span>
                                @endif
                            </td>
                            <th>Status Akhir</th>
                            <td>
                                @if ($data2->status == 1)
                                    <span class="label label-warning">Sedang Diproses UPG</span>
                                @elseif($data2->status == 2)
                                    <span class="label label-warning">Diteruskan ke UPG Pusat</span>
                                @elseif($data2->status == 3)
                                    <span class="label label-warning"> Diteruskan ke KPK</span>
                                @elseif($data2->status == 0)
                                    <span class="label label-danger"> Pelaporan Masuk</span>
                                @else
                                    <span class="label label-success">Selesai</span>
                                @endif
                            </td>
                        </tr>


                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
    </div>
@endsection
