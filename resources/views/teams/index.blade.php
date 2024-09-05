<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams') }}
        </h2>
    </x-slot>

    {{-- <div class="py-6"> --}}
        <div class="w-3/4 xl:w-8/12 mb-12 xl:mb-0 px-4 mx-auto mt-24">
            <div class="relative flex flex-col min-w-0 break-words bg-purple-200 w-full mb-6 shadow-lg rounded ">
                <div class="block w-full justify-center overflow-x-auto shadow-lg">
                    <table
                        class="items-center bg-transparent w-full border-2 border-solid border-indigo-700 rounded-lg ">
                        <thead>
                            <tr
                                class="px-6 py-3 bg-indigo-300 text-indigo-700 font-semibold align-middle border border-solid border-indigo-700">
                                <th> # </th>
                                <th>{{ __('Team Name') }}</th>
                                <th>{{ __('Abbrevation') }}</th>
                                <th>{{ __('UEFA Coefficient') }}</th>
                                <th>{{ __('Country') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($teams as $team)
                                <tr
                                    class="px-6 py-3 bg-sky-100 text-black font-semibold align-middle border border-solid border-indigo-700">
                                    <td class="w-1/5 justify-center">
                                        <div class="flex justify-center w-full">
                                            <div class="basis-6 mr-3">                                               
                                                <span class="font-semibold text-lg inline-block">{{ $team->id }}</span>
                                            </div> 
                                        </div>  
                                    </td>
                                    <td class="w-1/4">
                                        <div class="flex justify-start w-full">
                                            <div class="basis-6 mr-3">
                                                <img src="{{ asset('icons/teams_emblem/' . $team->emblem) }}"
                                                    class="object-cover"
                                                    alt="{{ $team->abbrevation }}" height="96px" width="96px">
                                            </div>
                                            <div>
                                                <span class="font-semibold text-lg inline-block">{{ $team->name }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-1/5">
                                        <div class="flex justify-start w-full">
                                            <div class="basis-6 mr-3">                                               
                                                <span class="font-semibold text-lg inline-block"> {{ $team->abbrevation }}</span>
                                            </div> 
                                        </div>  
                                       
                                    </td>
                                    <td class="w-1/5">
                                        <div class="flex justify-start w-full">
                                            <div class="basis-6 mr-3">                                               
                                                <span class="font-semibold text-lg inline-block">{{ $team->UEFA_coeff }}</span>
                                            </div> 
                                        </div>                                        
                                    </td>
                                    <td class="w-1/4">
                                        <div class="flex justify-start w-full">
                                            <div class="basis-6 mr-3">
                                                <img src="{{ asset('icons/flags/' . $team->country->flag_picture) }}"
                                                    class="object-cover"
                                                    alt="{{ $team->country->abbrevation }}" height="32px" width="32px">
                                            </div>
                                            <div>
                                                <span class="font-semibold text-lg inline-block">{{ $team->country->name }}</span>
                                            </div>
                                        </div>
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
    {{-- </div> --}}
</x-app-layout>
