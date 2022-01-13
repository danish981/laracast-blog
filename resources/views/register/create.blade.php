<x-layout>

    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
            <h1 class="text-center font-bold text-xl">Register!</h1>
            <form action="/register" method="POST" autocomplete="off" class="mt-10">
                @csrf

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="name">Name</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" id="name" name="name"
                           value="{{ old('name') }}" required>
                    @error('name')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="username">Username</label>
                    <input class="border border-gray-400 p-2 w-full" type="text" id="username" name="username"
                           value="{{ old('username') }}" required>
                    @error('username')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="email">Email</label>
                    <input class="border border-gray-400 p-2 w-full" type="email" id="email" name="email"
                           value="{{ old('email') }}" required>
                    @error('email')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-700" for="password">Password</label>
                    <input class="border border-gray-400 p-2 w-full" type="password" id="password" name="password"
                           required>
                    @error('password')
                    <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <button type="submit"
                            class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">Submit
                    </button>
                </div>


                <!-- if we want to display all the error messages down below there -->
                @if ($errors->any())
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="text-xs text-red-500">{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif


            </form>
        </main>
    </section>

</x-layout>
