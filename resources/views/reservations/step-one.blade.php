<x-guest-layout>
    <div class="container w-full px-5 py-6 mx-auto">
        <div class="flex items-center min-h-screen ">
            <div class="flex-1 h-full max-w-4xl mx-auto bg-white rounded-lg shadow-xl">
                <div class="flex flex-col md:flex-row">
                    <div class="h-32 md:h-auto md:w-1/2">
                        <img class="object-cover w-full h-full rounded-l-lg"
                            src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="img" />
                    </div>
                    <div class="flex items-center justify-center p-6 sm:p-12 md:w-1/2">
                        <div class="w-full">
                            <h3 class="mb-4 text-xl font-bold text-blue-600">Make Reservation</h3>

                            <div class="w-full bg-gray-200 rounded-full">
                                <div
                                    class="w-40 p-1 text-xs font-medium leading-none text-center text-blue-100 bg-blue-600 rounded-full">
                                    Step 1</div>
                            </div>

                            <form method="POST" action="{{ route('reservations.store.step.one') }}">
                                @csrf
                                {{-- first_name --}}
                                <div class="sm:col-span-6 pt-3">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> First Name
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="first_name" name="first_name"
                                            value="{{ $reservation->first_name ?? '' }}"
                                            class="block w-full appearance-none bg-white border border-gray-300 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('first_name') border-red-400 @enderror" />
                                    </div>
                                    @error('first_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Last Name --}}
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Last Name
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="last_name" name="last_name"
                                            value="{{ $reservation->last_name ?? '' }}"
                                            class="block w-full appearance-none bg-white border border-gray-300 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('last_name') border-red-400 @enderror" />
                                    </div>
                                    @error('last_name')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- email --}}
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Email
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="email" name="email"
                                            value="{{ $reservation->email ?? '' }}"
                                            class="block w-full appearance-none bg-white border border-gray-300 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                                    </div>
                                    @error('email')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Phone Number --}}
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Phone Number
                                    </label>
                                    <div class="mt-1">
                                        <input type="text" id="tel_number" name="tel_number"
                                            value="{{ $reservation->tel_number ?? '' }}"
                                            class="block w-full appearance-none bg-white border border-gray-300 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('email') border-red-400 @enderror" />
                                    </div>
                                    @error('tel_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Reservation Date --}}
                                <div class="sm:col-span-6">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Reservation
                                        Date </label>
                                    <div class="mt-1">
                                        <input type="datetime-local" id="res_date" name="res_date"
                                            min="{{ $mim_date->format('Y-m-d\TH:i:s') }}"
                                            max="{{ $max_date->format('Y-m-d\TH:i:s') }}"
                                            value="{{ $reservation ? $reservation->res_date->format('Y-m-d\TH:i:s') : '' }}"
                                            class="block w-full appearance-none bg-white border border-gray-300 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('res_date') border-red-400 @enderror" />
                                    </div>
                                    <span class="text-xs">Please choose the time between 17:00 and 23:00</span>
                                    @error('res_date')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                {{-- Guest Number --}}
                                <div class="sm:col-span-6 pt-1">
                                    <label for="name" class="block text-sm font-medium text-gray-700"> Guest Number
                                    </label>
                                    <div class="mt-1">
                                        <input type="number" id="guest_number" name="guest_number"
                                            value="{{ $reservation->guest_number ?? '' }}"
                                            class="block w-full appearance-none bg-white border border-gray-300 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5 @error('guest_number') border-red-400 @enderror" />
                                    </div>
                                    @error('guest_number')
                                        <div class="text-sm text-red-400">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mt-6 p-4 flex justify-end">
                                    <button type="submit"
                                        class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-lg text-white">Next</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
