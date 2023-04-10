<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-4 text-center">
            <a href="{{ route('email.resend', $mail->id) }}">
                <x-button>
                    {{ __('RESEND MAIL') }}
                </x-button>
            </a>
        </div>
        <div class="max-w-7xl mx-auto mt-6 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-lg text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-xl">
                                    Email
                                </th>
                                <th scope="col" class="px-6 py-3 text-xl">
                                    Date
                                </th>
                                <th scope="col" class="px-6 py-3 text-xl">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-xl">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($mail->emails as $mail)
                           <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $mail->email }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $mail->created_at }}
                                </td>
                                <td class="px-6 py-4">
                                    @if ($mail->status == 0)
                                    Pending
                                    @else
                                    Sent
                                    @endif
                                </td>
                                <td class="px-6 py-4">
                                    <div class="flex flex-row gap-4">
                                        <a href="{{ route('email.single.delete', $mail->id) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                           @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>