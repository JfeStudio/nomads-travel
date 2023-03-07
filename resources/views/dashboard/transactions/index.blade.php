@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Data Transactions</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item">Transactions</div>
            </div>
        </div>

        <!-- Content -->
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">Transactions</h2>
                <p class="section-lead">
                    You can manage all transaction, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Transactions</h4>
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
                                            <th>Seller</th>
                                            <th>Additional Visa</th>
                                            <th>Total Transaction</th>
                                            <th>Status Transaction</th>
                                            <th>Action</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        @forelse ($transactions as $item)
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>
                                                    {{ $item->travel_package->title }}
                                                    <div class="table-links">
                                                        in <a href="#">Web Development</a>
                                                        <div class="bullet"></div>
                                                        <a href="{{ route('transactions.show', $item->id) }}">View</a>
                                                    </div>
                                                </td>
                                                <td>
                                                    {{ $item->user->name }}
                                                </td>
                                                <td>
                                                    {{ $item->additional_visa }}
                                                </td>
                                                <td>
                                                    {{ $item->transaction_total }}
                                                </td>
                                                <td>
                                                    <div
                                                        class="{{ $item->transaction_status == 'SUCCESS' ? 'badge-success' : '' }}
                                                        {{ $item->transaction_status == 'IN_CART' ? 'badge-info' : '' }}
                                                        {{ ($item->transaction_status == 'CANCEL' ? 'badge-danger' : '' || $item->transaction_status == 'FAILED') ? 'badge-danger' : '' }}
                                                         badge badge-pill badge-warning">
                                                        {{ $item->transaction_status }}
                                                    </div>
                                                </td>
                                                <td>
                                                    <a href="{{ route('transactions.edit', $item->id) }}"
                                                        class="btn btn-primary">
                                                        <i class="fas fa-pencil-alt"></i>
                                                    </a>
                                                    <form onsubmit="return confirm('are you fucking sure?')"
                                                        action="{{ route('transactions.destroy', $item->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('delete')
                                                        <button class="btn btn-danger">
                                                            <i class="fas fa-trash"></i>
                                                        </button>
                                                    </form>
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
