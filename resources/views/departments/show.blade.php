<x-app-layout>
    <div class="bg-white md:mx-auto rounded-lg shadow-xl w-full mt-10 md:w-1/2 overflow-hidden">



        <div class="h-[140px] bg-gradient-to-r from-red-800 to-rose-800 "></div>
        <div class="px-5 py-2 flex flex-col gap-3 pb-6">
        <div class="h-[90px] shadow-md w-[90px] rounded-full border-4 overflow-hidden -mt-14 border-white">

                <div class="flex items-center justify-center w-full h-full rounded-full bg-red-800 text-white text-2xl font-bold">
                    {{ substr($department->department_name, 0, 1) }}
                </div>
        </div>
          <div class="">
            <h3 class="text-xl text-slate-900 relative font-bold leading-6">{{ $department->department_name}}</h3>
            <p class="text-sm text-gray-600">{{$department->department_location}}</p>
          </div>
          <h4 class="text-md font-medium leading-3">About</h4>
          <p class="text-sm text-stone-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere dolores aliquid sequi sunt iusto ipsum earum natus omnis asperiores architecto praesentium dignissimos pariatur, ipsa cum? Voluptate vero eius at voluptas?</p>
          <h4 class="text-md font-medium leading-3">Sections</h4>
          <div class="flex flex-grid gap-3">
            @foreach ($department->sections as $section)
            <a href="{{ route('sections.show', $section->id) }}" class="rounded-lg hover:bg-gray-200 ">
            <div class="flex items-center gap-3 px-3 py-3 rounded-lg border w-full "><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="h-8 w-8 text-slate-500" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M208 80c0-26.5 21.5-48 48-48h64c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48h-8v40H464c30.9 0 56 25.1 56 56v32h8c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H464c-26.5 0-48-21.5-48-48V368c0-26.5 21.5-48 48-48h8V288c0-4.4-3.6-8-8-8H312v40h8c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H256c-26.5 0-48-21.5-48-48V368c0-26.5 21.5-48 48-48h8V280H112c-4.4 0-8 3.6-8 8v32h8c26.5 0 48 21.5 48 48v64c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V368c0-26.5 21.5-48 48-48h8V288c0-30.9 25.1-56 56-56H264V192h-8c-26.5 0-48-21.5-48-48V80z"/></svg>
              <div class="leading-3">
                <p class=" text-sm font-bold text-slate-700">{{$section->section_name}}</p><span class="text-xs text-slate-600">{{$section->users->count()}} Employees</span>
              </div>
            </div>
            </a>
            @endforeach


          </div>
        </div>
      </div>
</x-app-layout>
