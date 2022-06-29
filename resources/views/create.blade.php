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
                <h4 class="mb-3">Line Select</h4>
                <form class="needs-validation" novalidate action="{{ route('line.store') }}">
                    @csrf

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="country">Stations</label>
                            <select class="custom-select d-block w-100" name="line_id" required>
                                <option value="">Choose...</option>
                                @foreach($stations as $station)
                                    <option value="{{ $station->id }}">{{ $station->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-lg btn-block" type="submit">Save</button>
                </form>
            </div>
        </div>

        <x-front.footer />
    </div>
@endsection
