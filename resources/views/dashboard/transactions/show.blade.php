@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <h1>Transaction Details</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item active"><a href="{{ route('transactions.index') }}">Transactions</a></div>
                <div class="breadcrumb-item">Transaction Details</div>
            </div>
        </div>

        <!-- Content -->
        <section class="section">
            <div class="section-body">
                <h2 class="section-title">Transaction</h2>
                <p class="section-lead">
                    You can manage all transaction, such as editing, deleting and more.
                </p>
                <div class="row mt-4">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>All Transaction</h4>
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
                                            <th>Update Payment</th>
                                        </tr>
                                        <?php $i = 1; ?>
                                        <tr>
                                            <td>{{ $i }}</td>
                                            <td>{{ $transaction->travel_package->title }}
                                            </td>
                                            <td>
                                                {{ $transaction->user->name }}
                                            </td>
                                            <td>
                                                ${{ $transaction->additional_visa }}
                                            </td>
                                            <td>
                                                ${{ $transaction->transaction_total }},00
                                            </td>
                                            <td>
                                                <div
                                                    class="{{ $transaction->transaction_status == 'SUCCESS' ? 'badge-success' : '' }}
                                                        {{ $transaction->transaction_status == 'IN_CART' ? 'badge-info' : '' }}
                                                        {{ ($transaction->transaction_status == 'CANCEL' ? 'badge-danger' : '' || $transaction->transaction_status == 'FAILED') ? 'badge-danger' : '' }}
                                                         badge badge-pill badge-warning">
                                                    {{ $transaction->transaction_status }}
                                                </div>
                                            </td>
                                            <td>
                                                {{ $transaction->updated_at->format('Y/m/d H:i:s') }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-header">
                                    <h4>Pembelian</h4>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama</th>
                                            <th>Nationality</th>
                                            <th>Visa</th>
                                            <th>DOE Passport</th>
                                        </tr>
                                        @forelse ($transaction->details as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}
                                                </td>
                                                <td>
                                                    {{ $item->nationality }}
                                                </td>
                                                <td>
                                                    {{ $item->is_visa ? '30 Days' : 'N/A' }}
                                                </td>
                                                <td>
                                                    {{ $item->doe_passport }}
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">
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
