<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end m-2 p-2">
                    <a href="{{ route('admin.menus.create') }}"
                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">New Menu</a>
                </div>
                <div>
                    {{-- incio table --}}
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        {{-- inicio Header da Table --}}
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Image
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Price
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3">

                                </th>

                                {{-- <th scope="col" class="px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th> --}}
                            </tr>
                        </thead>
                        {{-- fim Header da Table --}}
                        {{-- inicio do Body da header --}}
                        <tbody>
                            @foreach ($menus as $menu)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                                        {{ $menu->name }}
                                    </th>
                                    <td class="px-6 py-4">
                                        <img src="{{ Storage::url($menu->image) }}" class="w-16 h-auto rounded">
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $menu->price }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $menu->description }}
                                    </td>
                                    <td class="px-6 py-4 ">
                                        <div class="flex space-x-2">
                                            <a href="{{ route('admin.menus.edit', $menu->id) }}"
                                                class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                            <form 
                                                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white" 
                                                method="POST"
                                                action="{{route('admin.menus.destroy', $menu->id)}}"
                                                onsubmit="return confirm('Are you Sure?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit">Delete</button>
                                            </form>
                                        </div>
                                    </td>


                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                {{-- fim table --}}
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>