<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex  m-2 ms-0 p-2 mb-5">
                <a href="{{ route('admin.reservations.index') }}"
                    class="text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg px-4 py-2">Reservation Index
                </a>
            </div>

            <form action="{{ route('admin.reservations.store') }}" method="POST" class="shadow-lg p-3 bg-slate-100">

                @csrf
                <div class="mb-6">
                    <label for="first_name" class="block mb-2 text-sm font-medium text-black">
                        First Name</label>
                    <input type="text" id="first_name" name="first_name" value="{{ old('first_name') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('first_name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="last_name" class="block mb-2 text-sm font-medium text-black">
                        Last Name</label>
                    <input type="text" id="last_name" name="last_name" value="{{ old('last_name') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('last_name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm font-medium text-black">
                        Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('email')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="tel_number" class="block mb-2 text-sm font-medium text-black">
                        tel_number</label>
                    <input type="text" id="tel_number" name="tel_number" value="{{ old('tel_number') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('tel_number')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="res_date" class="block mb-2 text-sm font-medium text-black">
                        Reservation Date</label>
                    <input type="datetime-local" id="res_date" name="res_date" value="{{ old('res_date') }}"
                        autocomplete="res_date"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('res_date')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="guest_number" class="block mb-2 text-sm font-medium text-black">
                        Guest Number</label>
                    <input type="number" id="guest_number" name="guest_number" value="{{ old('guest_number') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                    @error('guest_number')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="table_id" class="block mb-2 text-sm font-medium text-black">Table
                    </label>
                    <select id="table_id" name="table_id" value="{{ old('table_id') }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 form-multiselect">
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}">{{ $table->name }} ({{ $table->guest_number }}
                                Guests)
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Store
                </button>

            </form>

        </div>
    </div>
</x-admin-layout>
