<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Countries') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-purple-200 w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-indigo-700">Countries</h3>
                        </div>
                    </div>
                </div>
                <div class="block w-full overflow-x-auto shadow-lg">
                    <table
                        class="items-center bg-transparent w-full border-2 border-solid border-indigo-700 rounded-lg ">
                        <thead>                            
                            <tr
                                class="px-6 py-3 bg-indigo-300 text-indigo-700 font-semibold align-middle border border-solid border-indigo-700">
                                <th> # </th>
                                <th>{{ __('Name')}}</th>
                                <th>{{ __('Abbrevation')}}</th>
                                <th>{{ __('Flag')}}</th>
                                <th>{{ __('Teams')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($countries as $country)
                            <tr
                                class="px-6 py-3 bg-sky-100 text-black font-semibold align-middle border border-solid border-indigo-700">
                                <td>
                                    {{ $country->id }}
                                </td>
                                <td>
                                    {{ $country->name }}
                                </td>
                                <td>
                                    {{ $country->abbrevation }}
                                </td>
                                <td>
                                    <img src="{{ asset('icons/flags/' . $country->flag_picture) }}" alt="{{ $country->abbrevation }}" height="32px" width="32px" srcset="">
                                    
                                </td>
                                <td>
                                    <ul class="bg-white rounded-lg shadow divide-y divide-gray-200 ">
                                        
                                        @foreach ($country->teams as $team)
                                        <li class="px-4 py-2 w-full">
                                            <div class="flex justify-around w-full">
                                                <img src="{{ asset('icons/teams_emblem/' . $team->emblem) }}" alt="{{ $team->abbrevation }}" height="64px" width="64px" >
                                                <span class="font-semibold text-lg">{{ $team->name }}</span>
                                               
                                               
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>
                            @empty
                            <tr
                                class="px-6 py-3 bg-sky-100 text-black font-semibold align-middle border border-solid border-indigo-700">
                                <td colspan="5">
                                    <span class="h3"> No hay registros </span>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>