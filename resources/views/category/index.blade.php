@extends('layout.app')
@section('title', 'Category')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align: center">List Category PARCELLIN</h1>
<!-- DataTales Example -->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <a href="" class="btn btn-primary btn-sm"><i class="fas fa-plus">Tambah</i></a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Category Name</th>
                        <th>Category Created Date</th>
                        <th>Category Updated Date</th>
                        <th>Category Created By</th>
                        <th>Category Updated By</th>
                        <th>Category Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($category as $row)
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->category_name }}</td>
                        <td>{{ $row->category_created_dtm }}</td>
                        <td>{{ $row->category_updated_dtm }}</td>
                        <td>{{ $row->category_created_by }}</td>
                        <td>{{ $row->category_updated_by }}</td>
                        <td>{{ $row->category_status }}</td>
                        <td>
                            <a href="" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                            <a href="" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection