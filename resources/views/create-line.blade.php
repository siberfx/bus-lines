@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="text-center">
            <h2>Create Form</h2>
            <p class="lead">
                Below the form is to be able to create new lines
            </p>
        </div>

        <div class="row">
            <x-front.company-list />
            <div class="col-md-8 order-md-1">
                <form class="needs-validation" novalidate action="{{ route('line.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="firstName">Line Name</label>
                            <input type="hidden" name="company_id" value="{{ request()->get('company_id') }}">
                            <input type="text" class="form-control" placeholder="" name="name" required>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
                </form>
            </div>
        </div>

        <x-front.footer />
    </div>
@endsection
