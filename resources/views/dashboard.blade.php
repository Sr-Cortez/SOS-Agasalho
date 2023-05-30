<x-app-layout>
    <!-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard teste') }}
        </h2>
    </x-slot> -->

    <div class="" style="background-image: url(assets/images/img-secundaria.png);background-size: cover;background-repeat: no-repeat;">
        <x-dashboard :donations="$donations" />
    </div>
</x-app-layout>
