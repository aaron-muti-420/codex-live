<main>
     <div class="pt-3 px-4">
         <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
          <a href="{{route('employees.index')}}" class="">
             <div class="bg-white hover:shadow-lg hover:shadow-red-500/50 shadow rounded-lg p-4 sm:p-6 xl:p-8 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="flex items-center transition duration-300 ease-in-out hover:scale-105 ">
                     <div class="flex-shrink-0">
                         <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900 dark:text-white">{{$employees}}</span>
                         <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Employees</h3>
                     </div>
                     <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                         14.6%
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                         </svg>
                     </div>
                 </div>
             </div>
          </a>
          <a href="{{route('departments.index')}}" class="">
             <div class="bg-white hover:shadow-lg hover:shadow-red-500/50 shadow rounded-lg p-4 sm:p-6 xl:p-8 dark:bg-gray-800 dark:hover:bg-gray-700">
                 <div class="flex items-center transition duration-300 ease-in-out hover:scale-105">
                     <div class="flex-shrink-0">
                         <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900 dark:text-white">{{$departments}}</span>
                         <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Departments</h3>
                     </div>
                     <div class="ml-5 w-0 flex items-center justify-end flex-1 text-green-500 text-base font-bold">
                         32.9%
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M5.293 7.707a1 1 0 010-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 01-1.414 1.414L11 5.414V17a1 1 0 11-2 0V5.414L6.707 7.707a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                         </svg>
                     </div>
                 </div>
             </div>
          </a>
             <a href="{{route('sections.index')}}" class="">

             <div class="bg-white hover:shadow-lg hover:shadow-red-500/50 shadow rounded-lg p-4 sm:p-6 xl:p-8 dark:bg-gray-800 dark:hover:bg-gray-700">

                 <div class="flex items-center transition duration-300 ease-in-out hover:scale-105">
                     <div class="flex-shrink-0">
                         <span class="text-2xl sm:text-3xl leading-none font-bold text-gray-900 dark:text-white">{{$sections}}</span>
                         <h3 class="text-base font-normal text-gray-500 dark:text-gray-400">Sections</h3>
                     </div>
                     <div class="ml-5 w-0 flex items-center justify-end flex-1 text-red-500 text-base font-bold">
                         -2.7%
                         <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                             <path fill-rule="evenodd" d="M14.707 12.293a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l2.293-2.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                         </svg>
                     </div>
                 </div>

             </div>
          </a>

         </div>
         <div class="grid grid-cols-1 2xl:grid-cols-2 xl:gap-4 my-4">
             <div class="bg-white shadow rounded-lg mb-4 p-4 sm:p-6 h-full dark:bg-gray-800">
                 <div class="flex items-center justify-between mb-4">
                     <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Latest Employees</h3>
                     <a href="{{route('employees.index')}}" class="text-sm font-medium text-red-600 hover:bg-gray-200 rounded-lg inline-flex items-center p-2">
                     View all
                     </a>
                 </div>
                 <div class="flow-root">
                     <ul role="list" class="divide-y divide-gray-200">
                          @foreach ($latestUsers as $luser)
                          <a href="{{route('employees.show', $luser->id)}}">
                          <li class="p-3 rounded-lg sm:py-4  hover:bg-gray-100 dark:hover:bg-gray-700">
                                <div class="flex items-center space-x-4">
                                    <div class="flex-shrink-0 ">
                                     @if ($luser->profile_photo_path)
                                          <img class="h-8 w-8 rounded-full" src="profile-photos/{{asset($luser->profile_photo_path)}}" alt="User Avatar">
                                     @else
                                          <div class="h-8 w-8 rounded-full bg-red-300 flex items-center justify-center">
                                                <span class="text-gray-600 text-sm font-semibold">{{ substr($luser->first_name, 0, 1) }}{{ substr($luser->last_name, 0, 1) }}</span>
                                          </div>
                                     @endif
                                    </div>
                                    <div class="flex-1 min-w-0">
                                        <p class="text-sm font-medium text-gray-900 dark:text-white truncate">
                                            {{$luser->first_name}} {{$luser->last_name}}
                                        </p>
                                        <p class="text-sm text-gray-500 dark:text-gray-400 truncate">
                                          {{$luser->email}}
                                        </p>
                                    </div>
                                    <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                                        {{$luser->created_at->diffForHumans()}}
                                    </div>
                                </div>
                            </li>
                          </a>
                          @endforeach


                     </ul>
                 </div>
             </div>
             <div class="bg-white shadow rounded-lg p-4 sm:p-6 md:mt-4 xl:p-8 dark:bg-gray-800">

                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Operational Overview</h3>
                        <a href="{{route('roles.index')}}" class="text-sm font-medium text-red-600 hover:bg-gray-200 rounded-lg inline-flex items-center p-2">
                        View all
                        </a>
                    </div>
                 <div class="block w-full overflow-x-auto">
                     <table class="items-center w-full bg-transparent border-spacing-2">
                         <thead>
                             <tr class="p-6 text-gray-700 rounded-lg dark:bg-gray-900 dark:text-white  text-l font-semibold text-left ">
                                 <th class="">Roles</th>
                                 <th class="">Employees</th>
                                 <th class="min-w-140-px"></th>
                             </tr>
                         </thead>
                         <tbody class="divide-y divide-gray-100 ">
                          @foreach ($roles as $role)
                          <tr class="dark:bg-gray-800 dark:text-white">
                                <th class="border-t-0 px-4 align-middle text-sm font-normal whitespace-nowrap p-4 text-left">{{$role->role_title}}</th>
                                <td class="border-t-0 px-4 align-middle text-xs font-medium  whitespace-nowrap p-4">{{$role->users_count}}</td>
                                <td class="border-t-0 px-4 align-middle text-xs whitespace-nowrap p-4">
                                    <div class="flex items-center">
                                        <span class="mr-2 text-xs font-medium">{{ round($role->users_count/$employees * 100) }}%</span>
                                        <div class="relative w-full">
                                            <div class="w-full bg-gray-200 rounded-sm h-2 dark:bg-gray-700">
                                                <div class="bg-red-600 h-2 rounded-sm" style="width: {{ round($role->users_count/$employees * 100) }}%"></div>
                                            </div>
                                        </div>
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
 </main>
