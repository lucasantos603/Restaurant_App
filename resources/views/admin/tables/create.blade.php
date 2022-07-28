<x-admin-layout>
    <x-slot name="header" class="dark:bg-gray-700">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex m-2 p-2">
                <a href="{{ route('admin.tables.index') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Table Index</a>
            </div>
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- incio formulario --}}
                <div class="m-2 p-2 bg-slate-100 rounded">
                    <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                        <form method="POST" action="{{ route('admin.tables.store') }}">
                            @csrf

                            {{-- Name --}}
                            <div class="sm:col-span-6 pb-1">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Name </label>
                                <div class="mt-1">
                                    <input type="text" id="name" name="name"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('name') border-red-400 @enderror" />
                                </div>
                                @error('name')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- guest_number --}}
                            <div class="sm:col-span-6 pb-1">
                                <label for="name" class="block text-sm font-medium text-gray-700"> Guest Number
                                </label>
                                <div class="mt-1">
                                    <input type="number" id="guest_number" name="guest_number"
                                        class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror" />
                                </div>
                                @error('guest_number')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- status --}}
                            <div class="sm:col-span-6 pb-1">
                                <label for="Status"
                                    class="block mb-2 text-sm font-medium text-gray-900">Status</label>
                                <select id="status" name="status"
                                    class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option selected>Choose the Status</option>
                                    @foreach (App\Enums\TableStatus::cases() as $status)
                                        <option value="{{ $status->value }}">{{ $status->name }}</option>
                                    @endforeach
                                </select>

                                @error('status')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- location --}}
                            <div class="sm:col-span-6">
                                <label for="Location"
                                    class="block mb-2 text-sm font-medium text-gray-900">Location</label>
                                <select id="location" name="location"
                                    class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                    <option selected>Choose the Location</option>
                                    @foreach (App\Enums\TableLocation::cases() as $location)
                                        <option value="{{ $location->value }}">{{ $location->name }}</option>
                                    @endforeach
                                </select>

                                @error('status')
                                    <div class="text-sm text-red-400">{{ $message }}</div>
                                @enderror
                            </div>




                            <div class="mt-6 p-4">
                                <button type="submit"
                                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Store</button>
                            </div>
                        </form>
                    </div>

                </div>

                {{-- fim formulario --}}
            </div>
        </div>
    </div>
</x-admin-layout>
