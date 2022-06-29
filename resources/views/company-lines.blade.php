@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="col-md-12 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted">Company: {{ $company->name }}</span>
                <span class="badge badge-secondary badge-pill">{{ count($company->lines) ?? 0 }}</span>
            </h4>
            <a href="{{ route('line.create', ['company_id' => $company->id]) }}" class="btn btn-primary"> Create New Line</a>
            <ul class="list-group mb-3">
                @foreach($company->lines as $line)
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <a href="{{ route('line.show', ['line' => $line->id]) }}">
                            <h6 class="my-0">{{ $line->name }}</h6>
                            </a>
                        </div>
                    </li>
                @endforeach

            </ul>
        </div>
        <x-front.footer />

    </div>
@endsection
