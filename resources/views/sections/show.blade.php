<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Section Structure') }}
        </h2>
    </x-slot>
        <div class="bg-white md:mx-auto rounded-lg shadow-xl w-full mt-10 md:w-1/2 overflow-hidden dark:bg-gray-800">


                <div class="h-[140px] bg-gradient-to-r from-red-800 to-rose-800 dark:from-rose-800 dark:to-red-900"></div>
                <div class="px-5 py-2 flex flex-col gap-3 pb-6">
                <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white dark:border-white">

                                <div class="flex items-center justify-center w-full h-full rounded-full bg-red-800 text-white text-2xl font-bold dark:bg-gray-800">
                                        {{ substr($section->section_name, 0, 1) }}
                                </div>
                </div>
                    <div class="">
                        <h3 class="text-xl text-slate-900 relative font-bold leading-6 dark:text-gray-200">{{ $section->section_name}}</h3>
                        <p class="text-sm text-gray-600 dark:text-gray-400">{{$section->users->count()}} employees</p>
                    </div>
                    <h4 class="text-md font-medium leading-3 dark:text-gray-200">About</h4>
                    <p class="text-sm text-stone-500 dark:text-gray-400">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere dolores aliquid sequi sunt iusto ipsum earum natus omnis asperiores architecto praesentium dignissimos pariatur, ipsa cum? Voluptate vero eius at voluptas?</p>
                    <h4 class="text-md font-medium leading-3 dark:text-gray-200">Employees</h4>
                    <div class="flex flex-grid gap-3">
                        @foreach ($section->users as $employee)
                        <a href="{{ route('employees.show', $employee->id) }}" class="rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700">
                        <div class="flex items-center gap-3 px-3 py-3 rounded-lg border w-full dark:border-gray-700"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" class="h-8 w-8 text-slate-500 dark:text-gray-200" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                            <path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>
                            <div class="leading-3">
                                <p class=" text-sm font-bold text-slate-700 dark:text-gray-200">{{$employee->first_name}} {{$employee->last_name}}</p><span class="text-xs text-slate-600 dark:text-gray-400"> {{$employee->role->role_title}}: {{$employee->position}}</span>
                            </div>
                        </div>
                        </a>
                        @endforeach


                    </div>
                </div>
            </div>
</x-app-layout>
