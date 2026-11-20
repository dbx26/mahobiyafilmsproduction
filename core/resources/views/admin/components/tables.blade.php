@extends('admin.layouts.app')

@section('title', 'DataTables & Table Components - Admin')

@section('content')
<div class="container-fluid py-3">

    <!-- Breadcrumb & Header -->
    <div class="row align-items-center mb-4">
        <div class="col-md-6">
            <h3 class="fw-bold mb-1">DataTables & Tables</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Components / Tables</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 text-md-end mt-3 mt-md-0">
            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addNewModal">
                <i class="fi fi-rr-plus me-1"></i> Add New Record
            </button>
        </div>
    </div>

    <!-- Main DataTable Card -->
    <div class="card border-0 shadow-sm mb-4">
        <div class="card-header bg-transparent border-0 d-flex justify-content-between align-items-center py-3">
            <div>
                <h5 class="card-title fw-bold mb-0">Production Film Catalog Example</h5>
                <small class="text-muted">Standard responsive DataTable with filters, status badges, and action menus.</small>
            </div>
            <div class="d-flex gap-2">
                <button class="btn btn-sm btn-outline-secondary">
                    <i class="fi fi-rr-download me-1"></i> Export
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="exampleDataTable" class="table table-hover align-middle mb-0" style="width:100%">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Poster & Title</th>
                            <th>Category / Genre</th>
                            <th>Release Year</th>
                            <th>Director</th>
                            <th>Status</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <img src="{{ asset('images/logo.png') }}" alt="Poster" class="rounded me-3" style="width: 45px; height: 45px; object-fit: contain; background: #222;">
                                    <div>
                                        <h6 class="mb-0 fw-bold">Mahakavya Shri Ramayan</h6>
                                        <small class="text-muted">Hindi • Motion Picture</small>
                                    </div>
                                </div>
                            </td>
                            <td>Mythology / Drama</td>
                            <td>2026</td>
                            <td>Prakash Mahobiya</td>
                            <td><span class="badge bg-success-subtle text-success">Teaser Released</span></td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown">
                                        <i class="fi fi-rr-menu-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                                        <li><a class="dropdown-item" href="#"><i class="fi fi-rr-eye me-2"></i> View Details</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fi fi-rr-edit me-2"></i> Edit Record</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fi fi-rr-trash me-2"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md rounded bg-primary-subtle text-primary d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fi fi-rr-clapperboard"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Katha Shri Ram Ki</h6>
                                        <small class="text-muted">Trailer 1 • Hindi</small>
                                    </div>
                                </div>
                            </td>
                            <td>Teaser / Promo</td>
                            <td>2026</td>
                            <td>Sanjay Bundela</td>
                            <td><span class="badge bg-info-subtle text-info">CBFC Certified</span></td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown">
                                        <i class="fi fi-rr-menu-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                                        <li><a class="dropdown-item" href="#"><i class="fi fi-rr-eye me-2"></i> View Details</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fi fi-rr-edit me-2"></i> Edit Record</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fi fi-rr-trash me-2"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar avatar-md rounded bg-warning-subtle text-warning d-flex align-items-center justify-content-center me-3" style="width: 45px; height: 45px;">
                                        <i class="fi fi-rr-film"></i>
                                    </div>
                                    <div>
                                        <h6 class="mb-0 fw-bold">Upcoming Regional Project</h6>
                                        <small class="text-muted">Chhattisgarhi / Hindi</small>
                                    </div>
                                </div>
                            </td>
                            <td>Regional Cinema / OTT</td>
                            <td>2027</td>
                            <td>Production Team</td>
                            <td><span class="badge bg-warning-subtle text-warning">In Pre-Production</span></td>
                            <td class="text-end">
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-icon btn-light" type="button" data-bs-toggle="dropdown">
                                        <i class="fi fi-rr-menu-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end shadow-sm border-0">
                                        <li><a class="dropdown-item" href="#"><i class="fi fi-rr-eye me-2"></i> View Details</a></li>
                                        <li><a class="dropdown-item" href="#"><i class="fi fi-rr-edit me-2"></i> Edit Record</a></li>
                                        <li><hr class="dropdown-divider"></li>
                                        <li><a class="dropdown-item text-danger" href="#"><i class="fi fi-rr-trash me-2"></i> Delete</a></li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

<!-- Sample Modal -->
<div class="modal fade" id="addNewModal" tabindex="-1" aria-labelledby="addNewModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content border-0 shadow">
            <div class="modal-header">
                <h5 class="modal-title fw-bold" id="addNewModalLabel">Add New Film / Item</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label class="form-label">Title</label>
                        <input type="text" class="form-control" placeholder="Enter title">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Category</label>
                        <select class="form-select">
                            <option value="">Select Category</option>
                            <option value="feature">Feature Film</option>
                            <option value="trailer">Trailer / Teaser</option>
                            <option value="ott">OTT Web Series</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        if ($.fn.DataTable && $('#exampleDataTable').length) {
            $('#exampleDataTable').DataTable({
                responsive: true,
                pageLength: 10,
                language: {
                    search: "_INPUT_",
                    searchPlaceholder: "Search table..."
                }
            });
        }
    });
</script>
@endsection

