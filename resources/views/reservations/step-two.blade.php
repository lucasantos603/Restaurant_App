<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen ">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full rounded-l-lg"
                            src="https://images.unsplash.com/photo-1544148103-0773bf10d330?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-full p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 2</div>
                            </div>

                            <form method="POST" action="{{ route('reservations.store.step.two') }}">
                                @csrf
                                {{-- first_name --}}
                                <div class="sm:col-span-6 pt-3">

                                    <label for="table_id"
                                        class="block mb-2 text-sm font-medium text-gray-900"></label>
                                    <select id="table_id" name="table_id"
                                        class="bg-gray-50 border border-gray-400 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                        {{-- <option selected>Choose the Table</option> --}}
                                        @foreach ($tables as $table)
                                            <option value="{{ $table->id }}" @selected($table->id == $reservation->table_id)>
                                                {{ $table->name }} ({{ $table->guest_number }} Guests)</option>
                                        @endforeach
                                    </select>

                                    @error('table_id')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror

                                </div>



                                <div class="mt-6 p-4 flex justify-between">
                                    <a href="{{ route('reservations.step.one') }}"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Previous</a>

                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Make Reservation</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
