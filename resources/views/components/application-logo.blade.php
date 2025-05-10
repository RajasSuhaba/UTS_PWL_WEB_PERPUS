@if(App\Models\Setting::exists() && App\Models\Setting::first()->logo)
    <img src="{{ asset('storage/' . App\Models\Setting::first()->logo) }}" alt="Logo" style="max-width: auto; height: auto;" />
@else
    <span>logo</span>
@endif
