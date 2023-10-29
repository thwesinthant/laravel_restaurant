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
                    class="text-white bg-indigo-500 hover:bg-indigo-700 rounded-lg px-4 py-2">Category Index</a>
            </div>

            <form action={{ route('admin.categories.store') }} method="POST" enctype="multipart/form-data"
                class="shadow-lg p-3 bg-slate-100">
                @csrf
                <div class="mb-6">
                    <label for="name" class="block mb-2 text-sm font-medium
                        text-black">
                        Name</label>
                    <input type="text" id="name" name="name" value="{{ old('name') }}"
                        class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Your name">
                    @error('name')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6 ">
                    <label class="block mb-2  text-sm font-medium text-black" for="image">Upload
                        an image</label>
                    <input
                        class="py-2 ps-2 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none "
                        aria-describedby="user_avatar_help" id="image" name="image" type="file">
                    @error('image')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="description" class="block mb-2 text-sm font-medium text-black">Description
                    </label>
                    <textarea id="description" rows="4" value="{{ old('description') }}"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 "
                        placeholder="Writing something..." name="description"></textarea>
                    @error('description')
                        <div class="text-sm text-red-400">{{ $message }}</div>
                    @enderror
                </div>

                <input type="submit" value="Store"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
            </form>

        </div>
    </div>
</x-admin-layout>
