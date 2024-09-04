<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-purple-200 w-full mb-6 shadow-lg rounded ">
                <div class="rounded-t mb-0 px-4 py-3 border-0">
                    <div class="flex flex-wrap items-center">
                        <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                            <h3 class="font-semibold text-base text-indigo-700">Teams</h3>
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
                                <th>{{ __('UEFA Coefficient')}}</th>
                                <th>{{ __('Emblem')}}</th>
                                <th>{{ __('Country')}}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teams as $team)
                            <tr
                                class="px-6 py-3 bg-sky-100 text-black font-semibold align-middle border border-solid border-indigo-700">
                                <td>
                                    {{ $team->id }}
                                </td>
                                <td>
                                    {{ $team->name }}
                                </td>
                                <td>
                                    {{ $team->abbrevation }}
                                </td>
                                <td>
                                    {{ $team->uefa_coeff }}
                                </td>
                                <td>
                                    {{ $team->country->name }}
                                    <img src="{{ asset('icons/teams_emblem/' . $team->emblem) }}" alt="{{ $team->abbrevation }}" height="32px" width="32px" >
                                    
                                </td>
                                <td>
                                    <ul class="bg-white rounded-lg shadow divide-y divide-gray-200 max-w-sm">
                                        AQUI VAN LOS EQUIPOS DE {{ $country->name }}
                                        {{-- @foreach ($country->teams as $team)
                                        <li class="px-6 py-4">
                                            <div class="flex justify-between">
                                                <span class="font-semibold text-lg">{{ $team->name }}</span>
                                                <span class="text-zinc-500 text-sm">{{ $team->coeff }}</span>
                                            </div>
                                        </li>
                                        @endforeach --}}
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