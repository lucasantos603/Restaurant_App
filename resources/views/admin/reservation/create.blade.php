<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.reservation.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Reservation Index</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- incio formulario --}}
                <div class="m-2 p-2 bg-slate-100 rounded">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.reservation.store') }}"
                            enctype="multipart/form-data">
                            @csrf

                            {{-- First Name --}}
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> First Name </label>
                                <div class="mt-1">
                                    <input type="text" id="first_name" name="first_name"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-400 @enderror" />
                                </div>
                                @error('first_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Last Name --}}
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Last Name </label>
                                <div class="mt-1">
                                    <input type="text" id="last_name" name="last_name"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-400 @enderror" />
                                </div>
                                @error('last_name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- email --}}
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Email </label>
                                <div class="mt-1">
                                    <input type="text" id="email" name="email"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                                </div>
                                @error('email')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Phone Number --}}
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Phone Number </label>
                                <div class="mt-1">
                                    <input type="text" id="tel_number" name="tel_number"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                                </div>
                                @error('tel_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Reservation Date --}}
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Reservation Date </label>
                                <div class="mt-1">
                                    <input type="datetime-local" id="res_date" name="res_date"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-400 @enderror" />
                                </div>
                                @error('res_date')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Guest Number --}}
                            <div class="sm:col-span-6">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Guest Number </label>
                                <div class="mt-1">
                                    <input type="number" id="guest_number" name="guest_number"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror" />
                                </div>
                                @error('guest_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Table --}}
                            <div class="sm:col-span-6">
                                <label for="table_id"
                                    class="block mb-2 text-sm font-medium text-gray-900">table</label>
                                <select id="table_id" name="table_id"
                                    class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option selected>Choose the Table</option>
                                    @foreach ($tables as $table)
                                        <option value="{{ $table->id }}">{{ $table->name }} ({{$table->guest_number}} Guests)</option>
                                    @endforeach
                                </select>

                                @error('table_id')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>


                            <div class="mt-6 p-4">
                                <button type="submit"
                                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                            </div>

                </div>

                {{-- fim formulario --}}
            </div>
        </div>
    </div>
</x-admin-layout>
