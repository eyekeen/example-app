@foreach($statistics as $stats)
    <h6>
        {{ __('Stats for :currency', ['currency' => $stats['currency_id']]) }}
    </h6>
    <div class="row mb-3">
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Total count
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats['total_count'], $stats['currency_id']) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Sum
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats['sum_amount'], $stats['currency_id']) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>

                    <div class="mb-2 text-muted small">
                        Avg
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats['avg_amount'], $stats['currency_id']) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Min
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats['min_amount'], $stats['currency_id']) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>
        <div class="col-12 col-md-4">
            <x-card>
                <x-card-body>
                    <div class="mb-2 text-muted small">
                        Max
                    </div>

                    <h5 class="m-0">
                        {{ __money($stats['max_amount'], $stats['currency_id']) }}
                    </h5>
                </x-card-body>
            </x-card>
        </div>
    </div>

@endforeach
