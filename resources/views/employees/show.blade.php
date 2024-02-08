<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Employee Directory') }}
        </h2>
    </x-slot>
    <div class="bg-white dark:text-white dark:bg-gray-800 md:mx-auto rounded-lg shadow-xl w-full mt-10 md:w-1/2 overflow-hidden">
        <div class="h-[140px] bg-gradient-to-r from-red-500 to-rose-500"></div>
        <div class="px-5 py-2 flex flex-col gap-3 pb-6">
            <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white">
                @if ($user->profile_photo_path)
                    <img src="{{ asset($user->profile_photo_path) }}" class="w-full h-full rounded-full object-center object-cover">
                @else
                    <div class="flex items-center justify-center w-full h-full rounded-full bg-red-300 text-black text-2xl font-bold">
                        {{ substr($user->first_name, 0, 1) }}{{ substr($user->last_name, 0, 1) }}
                    </div>
                @endif
            </div>
            <div class="">
                <h3 class="text-xl text-slate-900 dark:text-white relative font-bold leading-6">{{ $user->first_name}} {{$user->last_name}}</h3>
                <p class="text-sm text-gray-600 dark:text-gray-400">{{$user->position}}</p>
            </div>
            <div class="flex gap-3 flex-wrap"><span class="rounded-sm bg-yellow-100 px-3 py-1 text-xs font-medium text-yellow-800">{{$user->email}}</span><span class="rounded-sm bg-green-100 px-3 py-1 text-xs font-medium text-green-800">{{$user->role->role_title}}</span></div>
            <h4 class="text-md font-medium leading-3">About</h4>
            <p class="text-sm text-stone-500 dark:text-gray-300">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere dolores aliquid sequi sunt iusto ipsum earum natus omnis asperiores architecto praesentium dignissimos pariatur, ipsa cum? Voluptate vero eius at voluptas?</p>
            <h4 class="text-md font-medium leading-3">Experiences</h4>
            <div class="flex flex-col gap-3">
                <div class="flex items-center gap-3 px-2 py-3 bg-white dark:bg-gray-700 rounded border w-full "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-8 w-8 text-slate-500 dark:text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path>
                    </svg>
                    <div class="leading-3">
                        <p class=" text-sm font-bold text-slate-700 dark:text-white">Ui Designer</p><span class="text-xs text-slate-600 dark:text-gray-300">5 years</span>
                    </div>
                    <p class="text-sm text-slate-500 dark:text-gray-300 self-start ml-auto">As Ui Designer on Front Page</p>
                </div>
                <div class="flex items-center gap-3 px-2 py-3 bg-white dark:bg-gray-700 rounded border w-full "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-8 w-8 text-slate-500 dark:text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path>
                    </svg>
                    <div class="leading-3">
                        <p class=" text-sm font-bold text-slate-700 dark:text-white">Ui Designer</p><span class="text-xs text-slate-600 dark:text-gray-300">5 years</span>
                    </div>
                    <p class="text-sm text-slate-500 dark:text-gray-300 self-start ml-auto">As Ui Designer on Front Page</p>
                </div>
                <div class="flex items-center gap-3 px-2 py-3 bg-white dark:bg-gray-700 rounded border w-full "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" class="h-8 w-8 text-slate-500 dark:text-white" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path fill="none" d="M0 0h24v24H0z"></path>
                        <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path>
                    </svg>
                    <div class="leading-3">
                        <p class=" text-sm font-bold text-slate-700 dark:text-white">Ui Designer</p><span class="text-xs text-slate-600 dark:text-gray-300">5 years</span>
                    </div>
                    <p class="text-sm text-slate-500 dark:text-gray-300 self-start ml-auto">As Ui Designer on Front Page</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
