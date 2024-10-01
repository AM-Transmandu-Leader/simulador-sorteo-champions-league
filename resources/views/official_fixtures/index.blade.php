<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('UEFA Champions League Official Fixture') }}
        </h2>
    </x-slot>

    {{-- <div class="py-6"> --}}

            <div class="relative flex flex-col bg-purple-200 w-full mb-6 mx-5 shadow-lg rounded ">
                <div class="block w-full mx-auto overflow-x-auto shadow-lg">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('OPPONENTS FIXTURES') }} 
                    </h2>
                    <table
                        class="items-center w-full bg-transparent border-2 border-solid border-indigo-700 rounded-lg ">
                        <thead>
                            <tr
                                class="w-full px-6 py-3 bg-indigo-300 text-indigo-700 font-semibold align-middle border border-solid border-indigo-700">
                                <th class="w-full"></th>
                                <th class="w-full" colspan="2">{{ __('POT') }} 1 </th>
                                <th class="w-full" colspan="2">{{ __('POT') }} 2 </th>
                                <th class="w-full" colspan="2">{{ __('POT') }} 3 </th>
                                <th class="w-full" colspan="2">{{ __('POT') }} 4 </th>
                            </tr>
                            <tr
                                class="px-6 py-3 bg-indigo-300 text-indigo-700 font-semibold align-middle border border-solid border-indigo-700">
                                <th class="w-full" rowspan="2">{{ __('Team Name') }}</th>
                                <th class="w-full">{{ __('Home') }}</th>
                                <th class="w-full">{{ __('Away') }}</th>
                                <th class="w-full">{{ __('Home') }}</th>
                                <th class="w-full">{{ __('Away') }}</th>
                                <th class="w-full">{{ __('Home') }}</th>
                                <th class="w-full">{{ __('Away') }}</th>
                                <th class="w-full">{{ __('Home') }}</th>
                                <th class="w-full">{{ __('Away') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($fixtureData as $fixture)
                                <tr
                                    class="px-6 py-3 bg-sky-100 text-black font-semibold align-middle border border-solid border-indigo-700">
                                    <td >
                                        <div class="flex  w-full">
                                                                                         
                                                <span class="font-semibold  inline-block">{{ $fixture["teamName"] }}</span>
                                            
                                        </div>  
                                    </td>
                                    @foreach ( $fixture["opponents"] as $opponent )
                                        
                                        <td >
                                            <div class="flex justify-start w-full">
                                                @if (!$opponent["asHome"])
                                                    <span class="font-semibold  inline-block">{{ $opponent["opponentName"] }}</span>
                                                @endif
                                            </div>
                                        </td>
                                        <td >
                                            <div class="flex justify-start w-full">
                                                @if ($opponent["asHome"])
                                                    <span class="font-semibold  inline-block">{{ $opponent["opponentName"] }}</span>
                                                @endif
                                            </div>
                                        </td>                                        
                                    @endforeach

                                </tr>
                            @empty
                                <tr
                                    class="px-6 py-3 bg-sky-100 text-black font-semibold align-middle border border-solid border-indigo-700">
                                    <td colspan="9">
                                        <span class="h3"> No hay registros </span>
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

</x-app-layout>