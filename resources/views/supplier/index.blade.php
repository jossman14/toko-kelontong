@extends('user.template')
@section('JudulHalaman', 'Toko Mas Woko')
@section('breadcome', 'Data Supplier')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="dashtwo-order-list shadow-reset">
                    <div class="row">
                        <div class="container">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Supplier</th>
                                        <th scope="col">alamat</th>
                                        <th scope="col">no_hp</th>
                                        <th scope="col">catatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $item)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>

                                            <td>{{ $item->nama_supplier }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->no_hp }}</td>
                                            <td>{{ $item->catatan }}</td>


                                            <td>
                                                <a class="btn btn-outline-dark"
                                                    href="{{ route('supplier.edit', $item->id) }}" role="button">Edit</a>


                                                <form action="{{ route('supplier.destroy', $item) }}" method="post"
                                                    class="d-inline-block" style="margin: 0.4em 0;">
                                                    @csrf
                                                    @method("delete")
                                                    <button type="submit" class="btn btn-bordered btn-danger "
                                                        onclick="return confirm('apakah anda yakin menghapus barang {{ $item->nama_barang }}?');"><i
                                                            class="fa fa-check mr-1"></i>Hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="data-table-area mg-b-15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="sparkline13-list shadow-reset">
                        <div class="sparkline13-hd">
                            <div class="main-sparkline13-hd">
                                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                <div class="sparkline13-outline-icon">
                                    <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                    <span><i class="fa fa-wrench"></i></span>
                                    <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="sparkline13-graph">
                            <div class="datatable-dashv1-list custom-datatable-overright">
                                <div id="toolbar">
                                    <select class="form-control">
                                        <option value="">Export Basic</option>
                                        <option value="all">Export All</option>
                                        <option value="selected">Export Selected</option>
                                    </select>
                                </div>
                                <table id="table" data-toggle="table" data-pagination="true" data-search="true"
                                    data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true"
                                    data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true"
                                    data-toolbar="#toolbar">
                                    <thead>
                                        <tr>
                                            <th data-field="state" data-checkbox="true"></th>
                                            <th data-field="id">ID</th>
                                            <th data-field="name" data-editable="true">Project</th>
                                            <th data-field="email" data-editable="true">Email</th>
                                            <th data-field="phone" data-editable="true">Phone</th>
                                            <th data-field="company" data-editable="true">Company</th>
                                            <th data-field="complete">Completed</th>
                                            <th data-field="task" data-editable="true">Task</th>
                                            <th data-field="date" data-editable="true">Date</th>
                                            <th data-field="price" data-editable="true">Price</th>
                                            <th data-field="action">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td>1</td>
                                            <td>Web Development</td>
                                            <td>admin@uttara.com</td>
                                            <td>+8801962067309</td>
                                            <td>Aber Ltd.</td>
                                            <td class="datatable-ct"><span class="pie">1/6</span>
                                            </td>
                                            <td>10%</td>
                                            <td>Jul 14, 2018</td>
                                            <td>$5455</td>
                                            <td class="datatable-ct"><i class="fa fa-check"></i>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
