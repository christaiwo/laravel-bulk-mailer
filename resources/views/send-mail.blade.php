<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Send Email') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
                    <h1 class="text-2xl text-center font-medium text-gray-900 dark:text-white">
                        TO SEND MAIL TO MULTIPLE USERS USE COMMA TO SEPERATE EACH EMAIL
                    </h1>
                    @error('message')
                        <div class="text-center mt-4" >
                            <strong class="bg-red-500 py-2 px-2 uppercase opacity-10">All field is required</strong>
                        </div>
                    @enderror
                
                    <form action="{{ route('email.insert') }}" method="POST" class="mt-5"> 
                        @csrf
                        <div class="mt-4">
                            <label for="">EMAILS</label>
                            <textarea name="emails" id="" cols="30" rows="3" class="w-full decoration-none border-blue-200 focus:outline-none "></textarea>
                        </div>

                        <div class="mt-4">
                            <label for="">SUBJECT</label>
                            <input type="text" name="subject" class="w-full border-blue-200 focus:outline-none">
                        </div>

                        <div class="mt-4">
                            <label for="">MESSAGE</label>
                            <textarea name="message" id="" cols="30" rows="10" class="w-full decoration-none border-blue-200 focus:outline-none "></textarea>
                        </div>
                        <div class="mt-4 text-center">
                            <x-button>
                                {{ __('SEND MAIL') }}
                            </x-button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
