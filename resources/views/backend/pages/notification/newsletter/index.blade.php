@extends('backend.layouts.backend-master')
@section('title', 'all newsletter list')
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
                            <h4>Newsletter</h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('admin.dashboard') }}">Home</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    Newsletter
                                </li>
                            </ol>
                        </nav>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <a class="btn btn-primary" href="{{ route('admin.category.create') }}">
                            Create New
                        </a>

                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="card-box height-100-p overflow-hidden">
                        <div class="profile-tab height-100-p">
                            <!-- Timeline Tab start -->
                            <div class="tab-pane fade active show" id="timeline" role="tabpanel">
                                <div class="pd-20">
                                    <form action="{{ route('admin.send.newsletter.message') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        @method('POST')

                                        <ul class="profile-edit-list row">
                                            <li class="weight-500 col-md-12">
                                                <h4 class="text-blue h5 mb-20">
                                                    Send Newsletter
                                                </h4>

                                                <div class="form-group">
                                                    <label for="subject">Subject</label>
                                                    <input id="subject" name="subject" value="{{ old('subject') }}"
                                                        class="form-control form-control-lg @error('subject') is-invalid @enderror"
                                                        type="text">
                                                    @error('subject')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>

                                                <div class="form-group">
                                                    <label for="message">Message</label>
                                                    <textarea name="message" id="message" class="form-control form-control-lg @error('message') is-invalid @enderror"
                                                        rows="5"></textarea>
                                                    @error('message')
                                                        <small class=" text-danger">{{ $message }}</small>
                                                    @enderror
                                                </div>
                                        </ul>
                                        <div class="form-group mb-0">
                                            <input type="submit" class="btn btn-primary" value="Send Newsletter">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- multiple select row Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20">
                    <h4 class="text-blue h4">All Newsletter List</h4>
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
                                                colspan="1" aria-label="Name">Name</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">E-mail</th>
                                            <th class="table-plus datatable-nosort sorting_asc" rowspan="1"
                                                colspan="1" aria-label="Name">Time</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allnewsletter as $item)
                                            <tr role="row" class="odd">
                                                <td class="table-plus sorting_1" tabindex="0">{{ $loop->index + 1 }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->created_at->diffForHumans() }}</td>
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
@endpush
