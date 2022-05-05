<x-layout>
    <div class="h-screen w-full justify-center items-center flex">
            <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
                <div class="w-full px-8 md:px-32 lg:px-24">
                <form method="POST" action="/register" class="bg-white rounded-md shadow-2xl p-5">
                    @csrf
                    <h1 class="text-gray-800 font-bold text-2xl mb-8 text-center">Register</h1>

                    
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" strokeWidth="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <input id="username" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required  class=" pl-2 w-full outline-none border-none" />
                    </div>
                    @error('username')
                        <p class="ml-10 text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <div class="flex items-center border-2 mt-8 py-2 px-3 rounded-2xl">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                    <input id="email" type="email" name="email" placeholder="Email Address" value="{{ old('email') }}" required class=" pl-2 w-full outline-none border-none" />
                    </div>
                    @error('email')
                        <p class="ml-10 text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <div class="flex items-center border-2  mt-8 py-2 px-3 rounded-2xl ">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                        <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
                    </svg>
                    <input type="password" name="password" id="password" placeholder="Password" required class="pl-2 w-full outline-none border-none" />
                    </div>
                    @error('password')
                    <p class="ml-10 text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror

                    <button type="submit" class="block w-full bg-indigo-600 mt-14 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Submit</button>
                    
                    {{-- <div class="flex justify-between mt-4">
                    <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Forgot Password</span>

                    <a href="#" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Don't have an account yet?</a>
                    </div> --}}
                    
                </form>
            </div>  
        </div>
    </div>
</x-layout>