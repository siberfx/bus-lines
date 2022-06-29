@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-md-12 order-md-2 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Companies</span>
                    <span class="badge badge-secondary badge-pill">{{ $companies?->count() ?? 0 }}</span>
                </h4>
                <ul class="list-group mb-3">
                    @foreach($companies as $company)
                        <li class="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 class="my-0">
                                    <a href="{{ route('company.show', ['company' => $company->id]) }}">
                                    {{ $company->name }}
                                    </a>
                                </h6>
                                <em class="text-muted">Lines: ( {{ $company->lines_count }} )</em>
                            </div>
                        </li>
                    @endforeach

                </ul>

            </div>
        </div>
        <x-front.footer />

    </div>
@endsection
