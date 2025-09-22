@extends('backend.layouts.backend-master')
@section('title', 'all post list')
@section('content')
    @push('admin_style')
        <link rel="stylesheet" type="text/css"
            href="{{ asset('backend') }}/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
        <!-- switchery css -->
        <link rel="stylesheet" type="text/css" href="{{ asset('backend') }}/src/plugins/switchery/switchery.min.css" />
    @endpush
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4>post</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    post
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.post.create') }}">
                            Create New
                        </a>

                    </div>
                </div>
            </div>

            <!-- multiple select row Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">All post List</h4>
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
                                                colspan="1" aria-label="Name">Title</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Thumbnail</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Featured</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Post Month</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Status</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_1"
                                                rowspan="1" colspan="1"
                                                aria-label="Salart: activate to sort column ascending">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allposts as $item)
                                            <tr role="row" class="odd">
                                                <td class="table-plus sorting_1" tabindex="0">{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->title }}</td>
                                                <td>
                                                    <img class=" img-fluid img-thumbnail" style="height: 40px;width:40px;"
                                                        src="{{ asset($item->thumbnail) }}" alt="">
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="featured" data-id="{{ $item->id }}"
                                                            {{ $item->featured == '1' ? 'checked' : '' }}
                                                            data-name="featured" class="switch-btn change_status"
                                                            data-size="small" data-color="#a683eb" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="post_of_the_month"
                                                            data-id="{{ $item->id }}"
                                                            {{ $item->post_of_the_month == '1' ? 'checked' : '' }}
                                                            data-name="post_of_the_month" class="switch-btn change_status"
                                                            data-size="small" data-color="#a683eb" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="form-group">
                                                        <input type="checkbox" id="status" data-id="{{ $item->id }}"
                                                            {{ $item->status == '1' ? 'checked' : '' }} data-name="status"
                                                            class="switch-btn change_status" data-size="small"
                                                            data-color="#a683eb" />
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="table-actions">
                                                        <a href="{{ route('admin.post.edit', $item->id) }}"
                                                            data-color="#265ed7" style="color: rgb(38, 94, 215);"><i
                                                                class="icon-copy dw dw-edit2"></i></a>
                                                        <form class="ml-2 d-inline"
                                                            action="{{ route('admin.post.destroy', $item->id) }}"
                                                            method="post">
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
    <!-- switchery js -->
    <script src="{{ asset('backend') }}/src/plugins/switchery/switchery.min.js"></script>
    <script src="{{ asset('backend') }}/vendors/scripts/advanced-components.js"></script>
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

            $(document).on('change', '.change_status', function() {
                var id = $(this).data('id');
                var name = $(this).data('name');
                var status = $(this).prop('checked') ? 1 : 0;

                $.ajax({
                    type: "POST",
                    url: route('admin.change.status'),
                    data: {
                        id: id,
                        name: name,
                        status: status,
                    },
                    dataType: 'json',
                    success: function(response) {

                        // sweet alert 
                        const Toast = Swal.mixin({
                            toast: true,
                            position: 'top-end',
                            // iconColor: 'white',
                            customClass: {
                                popup: 'colored-toast',
                            },
                            showConfirmButton: false,
                            timer: 3500,
                            timerProgressBar: true,
                        });
                        Toast.fire({
                            icon: 'success',
                            title: response,
                        })
                        // sweet alert end

                    }
                });
            });
        });
    </script>
@endpush
