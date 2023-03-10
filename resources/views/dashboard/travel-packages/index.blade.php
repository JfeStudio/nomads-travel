@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Paket Travel</h1>
            <div class="section-header-button">
                <a href="{{ route('travel-packages.create') }}" class="btn btn-primary">Add New</a>
            </div>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Travels</div>
            </div>
        </div>

        <!-- Content -->
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">Travels</h2>
                <p class="section-lead">
                    You can manage all travels, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Travels</h4>
                            </div>
                            <div class="card-body">
                                <div class="float-left">
                                    <select class="form-control selectric">
                                        <option>Action For Selected</option>
                                        <option>Move to Draft</option>
                                        <option>Move to Pending</option>
                                        <option>Delete Pemanently</option>
                                    </select>
                                </div>
                                <div class="float-right">
                                    <form>
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="clearfix mb-3"></div>

                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Title</th>
                                            <th>Location</th>
                                            <th>About</th>
                                            <th>Departure Date</th>
                                            <th>Type</th>
                                            <th>Price</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        @forelse ($travels as $item)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>
                                                    {{ $item->title }}
                                                    <div class="table-links">
                                                        in <a href="#">Web Development</a>
                                                        <div class="bullet"></div>
                                                        <a href="#">View</a>
                                                    </div>
                                                </td>
                                                <td>{{ $item->location }}</td>
                                                <td>
                                                    <div style='height: 60px; overflow-y: hidden'>{!! $item->about !!}
                                                    </div>
                                                </td>
                                                <td>{{ $item->departure_date }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>{{ $item->price }}</td>
                                                <td>{{ $item->type }}</td>
                                                <td>
                                                    <div class="d-inline-flex">
                                                        <a href="{{ route('travel-packages.edit', $item->id) }}"
                                                            class="btn btn-primary btn-action mr-1" data-toggle="tooltip"
                                                            title="Edit"><i class="fas fa-pencil-alt"></i></a>
                                                        <form onsubmit="return confirm('are you fucking sure?')"
                                                            action="{{ route('travel-packages.destroy', $item->id) }}"
                                                            method="POST" class="d-inline">
                                                            @csrf
                                                            @method('delete')
                                                            <button class="btn btn-danger btn-action" data-toggle="tooltip"
                                                                title="Delete">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                            </tr>
                                            <?php $i++; ?>
                                        @empty
                                            <tr>
                                                <td colspan="7" class="text-center">
                                                    Data Kosong
                                                </td>
                                            </tr>
                                        @endforelse

                                    </table>
                                </div>
                                <div class="float-right">
                                    <nav>
                                        <ul class="pagination">
                                            <li class="page-item disabled">
                                                <a class="page-link" href="#" aria-label="Previous">
                                                    <span aria-hidden="true">&laquo;</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active">
                                                <a class="page-link" href="#">1</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">2</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">3</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link" href="#" aria-label="Next">
                                                    <span aria-hidden="true">&raquo;</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
