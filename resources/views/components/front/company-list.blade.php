<div class="col-md-4 order-md-2 mb-4">
    <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Lines</span>
        <span class="badge badge-secondary badge-pill">{{ $lines?->count() ?? 0 }}</span>
    </h4>
    <ul class="list-group mb-3">
        @foreach($lines as $line)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">{{ $line->name }}</h6>
                    <em class="text-muted">Company: {{ $line->company?->name ?? '-' }}</em>
                </div>
            </li>
        @endforeach

    </ul>

</div>
