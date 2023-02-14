@if (filled($brand = config('filament.brand')))
    <div @class([
        'filament-brand text-xl font-bold tracking-tight',
        'dark:text-white' => config('filament.dark_mode'),
    ])>
       {{ $brand }}
       {{-- <img src="assets/img/THZ4Wellness_logo.png" alt="THZ4Wellness_logo"> --}}
    </div>
@endif
