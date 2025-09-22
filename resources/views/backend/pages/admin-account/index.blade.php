@extends('backend.layouts.backend-master')
@section('title', 'all admin account list')
@section('content')
    @push('admin_style')
        <link rel="stylesheet" type="text/css"
            href="{{ asset('backend') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    @endpush
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>Admin</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    admin-account
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.account.create') }}">
                            Create new admin account
                        </a>

                    </div>
                </div>
            </div>

            <!-- multiple select row Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">All Admin Account List</h4>
                </div>
                <div class="pb-20">
                    <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                        <div class="row">
                            <div class="col-sm-12">
                                <table class="data-table table  nowrap dataTable no-footer dtr-inline"
                                    id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Si</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Profile</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Name</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">E-mail</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Role</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="Salart: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($alladminaccount as $admin)
                                            <tr role="row" class="odd">
                                                <td class="table-plus sorting_1" tabindex="0">{{ $loop->index + 1 }}</td>
                                                <td>
                                                    <img src="{{ asset($admin->profile) }}" class=" img-fluid img-thumbnail"
                                                        style="height: 40p;width:40px;" alt="">
                                                </td>
                                                <td>{{ $admin->name }}</td>
                                                <td>{{ $admin->email }}</td>
                                                <td>
                                                    {{ $admin->role }} 
                                                    @foreach ($admin->roles as $role)
                                                        {{ $role->name }}
                                                    @endforeach

                                                </td>
                                                <td>{{ $admin->status }}</td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="{{ route('admin.account.edit',$admin->id) }}" data-color="#265ed7"
                                                            style="color: rgb(38, 94, 215);"><i
                                                                class="icon-copy dw dw-edit2"></i></a>
                                                        <form class="ml-2 d-inline" action="{{ route('admin.account.destroy',$admin->id) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" data-color="#e95959" id="delete_alert"
                                                                style="color: rgb(233, 89, 89);border:none;"><i
                                                                    class="icon-copy dw dw-delete-3 delete_alert"></i></button>
                                                        </form>
                                                    </div>

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
            <!-- multiple select row Datatable End -->
        </div>
    </div>

@endsection
@push('admin_script')
    <script src="{{ asset('backend') }}/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('backend') }}/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('backend') }}/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('backend') }}/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <!-- Datatable Setting js -->
    <script src="{{ asset('backend') }}/vendors/scripts/datatable-setting.js"></script>
    <!-- sweet alert Setting js -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '.delete_alert', function(e) {
                e.preventDefault();
                var form = $(this).closest('form');
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to delete this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            });
        });
    </script>
@endpush
