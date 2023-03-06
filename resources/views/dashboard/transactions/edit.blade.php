@extends('layouts.admin')
@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="{{ route('transactions.index') }}" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Update Travel Transaction</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="{{ route('transactions.index') }}">Transactions</a></div>
                <div class="breadcrumb-item">Update Transaction</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Create New Travel</h2>
            <p class="section-lead">
                On this page you can create a new travel and fill in all fields.
            </p>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Write Your Travel</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('transactions.update', $transaction->id) }}" method="post"
                                enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-5">
                                        <select class="form-control selectric" name="transaction_status">
                                            <option value="{{ $transaction->transaction_status }}">
                                                {{ $transaction->transaction_status }}
                                            </option>
                                            <option value="IN_CART">
                                                IN_CART
                                            </option>
                                            <option value="SUCCESS">
                                                SUCCESS
                                            </option>
                                            <option value="CANCEL">
                                                CANCEL
                                            </option>
                                            <option value="FAILED">
                                                FAILED
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button type="submit" class="btn btn-primary">Update Transaction</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
