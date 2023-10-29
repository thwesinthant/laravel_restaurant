<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="flex  m-2 ms-0 p-2 mb-5">
                <a href="{{ route('admin.categories.index') }}"
                    class="text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg px-4 py-2">Table Index</a>
            </div>

            <form action="{{ route('admin.tables.update', $table->id) }}" method="POST"
                class="shadow-lg p-3 bg-slate-100">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium text-black">
                        Name</label>
                    <input type="name" id="name" name="name"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $table->name }}">
                    @error('name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="guest_number" class="block mb-2 text-sm font-medium text-black">
                        Guest Number</label>
                    <input type="number" id="guest_number" name="guest_number"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        value="{{ $table->guest_number }}">
                    @error('guest_number')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="status" class="block mb-2 text-sm font-medium text-black">Status
                    </label>
                    <select id="status" name="status"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach (App\Enums\TableStatus::cases() as $status)
                            <option value="{{ $status->value }}" @selected($table->status->value == $status->value)>{{ $status->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-6">
                    <label for="location" class="block mb-2 text-sm font-medium text-black">Location
                    </label>
                    <select id="location" name="location"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach (App\Enums\TableLocation::cases() as $location)
                            <option value="{{ $location->value }}" @selected($table->location->value == $location->value)>{{ $location->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Update</button>
            </form>

        </div>
    </div>
</x-admin-layout>
