<x-guest-layout>
    @if (Route::has('login'))
        <livewire:auth.navigation />
    @endif
<div>
    <livewire:task/>
</div>
</x-guest-layout>
