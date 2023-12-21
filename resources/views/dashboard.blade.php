<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div> --}}

            {{-- <x-alert/> --}}

            {{-- <x-alert title="Hau nire titulua SLOT">
                Hau da nire alerta desde SLOT
            </x-alert> --}}

            @php
                $tipo="info";
            @endphp

            <x-alert :type="$tipo" id="alert">
                <x-slot name="title">
                    Konponente ALERT SLOT
                </x-slot>
                Hau da nire alerta desde SLOT
            </x-alert>

            <br>
            @php
                $tipo="danger";
            @endphp

            <x-alert2 :type="$tipo">
                <x-slot name="title">
                    Titulua SLOT 2
                </x-slot>
                Hau da nire alerta desde SLOT 2
            </x-alert2>

        </div>
    </div>
</x-app-layout>
