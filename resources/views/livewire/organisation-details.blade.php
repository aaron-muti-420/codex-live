<div class="">
    <div class="mt-4 w-full grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-4">
          <div class="bg-white dark:text-white dark:bg-gray-800  shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
             <div class="flex items-center overflow-hidden">
                <div class="flex-shrink-0 ">
                    <h3 class="text-base font-normal">Company</h3>

                   <span class="text-2xl sm:text-3xl leading-none font-bold text-red-500 dark:text-red-500">{{$org->organisation_name}}</span>
                </div>

             </div>
          </div>
          <div class="bg-white dark:text-white dark:bg-gray-800  shadow rounded-lg p-4 sm:p-6 xl:p-8 ">
             <div class="flex items-center overflow-hidden">
                <div class="flex-shrink-0">
                    <h3 class="text-base font-normal ">Vision</h3>

                   <span class="text-sm font-bold ">{{$org->organisation_vision}}</span>
                </div>

             </div>
          </div>

          <div class="bg-white dark:text-white dark:bg-gray-800  shadow rounded-lg p-4 sm:p-6 xl:p-8 ">

             <div class="flex items-center overflow-hidden">
                <div class="flex-shrink-0">
                    <h3 class="text-base font-normal ">Mission</h3>

                   <span class="text-sm leading-none font-bold ">{{$org->organisation_mission}}</span>
                </div>

             </div>

          </div>


       </div>
</div>
