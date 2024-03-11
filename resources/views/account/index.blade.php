@extends('layout.app')
@section('title', 'Account')
@section('content')
<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800" style="text-align: center">List Account PARCELLIN</h1>
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
                        <th>Account Name</th>
                        <th>Account Username</th>
                        <th>Account Password</th>
                        <th>Account Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach ($account as $row)
                    <tr class="text-center">
                        <td>{{ $no++ }}</td>
                        <td>{{ $row->account_name }}</td>
                        <td>{{ $row->account_username }}</td>
                        <td>{{ $row->account_password }}</td>
                        <td>{{ $row->account_role }}</td>
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