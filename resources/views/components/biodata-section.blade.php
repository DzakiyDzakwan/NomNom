<div x-data="biodata-section">
    <section class="bg-[#383838] text-white h-[323px]">
        <div class="px-4 py-10">
          <div class="ml-32 relative">
            <div class="md:w-[179px] md:h-[179px]">
                <div class="justify-center">
                    <img src="{{ asset('assets/images/profile.jpg') }}" class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">                     
                </div>
                <button class="h-10 w-10 absolute bg-white ml-36 top-28 rounded-full border-solid border-2 border-[#FFB03E] px-2" @click="$store.profile.ToggleModal()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-[#FFB03E]">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                    </svg>                                           
                </button>
            </div>
            <div class="h-60 ml-56 absolute top-8">
                <div class="text-white text-4xl font-thin mb-5">Demian Schnaffhold</div>
                <div class="text-white text-lg font-light">Seorang Mahasiswa di MIT</div>
                <ul class="flex mb-10">
                    <li class="text-white text-base font-bold mr-1">18</li>
                    <li class="text-white text-base font-extralight mr-3">Total Recipes</li>
                    <li class="h-6 w-6 rounded-full mr-1 justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="white" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-white">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                          </svg>                          
                    </li>
                    <li class="text-white text-base font-extralight mr-3">1.220 Followers</li>
                    <li class="h-6 w-6 rounded-full justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                          </svg>                                                  
                    </li>
                    <li class="text-white text-base font-extralight">Medan</li>
                </ul>
                <div class="text-white text-sm font-bold">Tentang Saya</div>
                <div class="text-white text-base font-extralight">
                    "Masakan adalah seni, dan saya senang berbagi kreativitas dan kecintaan saya pada masakan dengan dunia. Saya akan membagikan resep, ide, dan tips untuk memperluas keterampilan memasak Anda." 
                </div>
            </div>
          </div>
        </div>
      </section>


      <x-modal name="profile">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end" @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <img src="{{ asset('assets/images/logo/logo_nomnom5baru_3.png') }}" alt="NomNom Logo" class="w-40 md:w-36">
        </div>
        <form class="px-2 pt-5 pb-10 md:px-4 w-[75%] mx-auto space-y-4">
            <x-forms wire:model="counter" for="regular" id="username" text="Username" type="text" placeholder="Username" ></x-forms>
            <x-forms for="regular" id="email" text="Email" type="email" placeholder="Email"></x-forms>
            <x-forms for="regular" id="password" text="Password" type="password" placeholder="Password"></x-forms>
            <x-button type="regular" :withGradient=false text="Register" class="w-full"></x-button>
            <div class="relative flex items-center">
                <div class="flex-grow border-t border-gray-400"></div>
                <span class="flex-shrink mx-4 text-gray-400">OR</span>
                <div class="flex-grow border-t border-gray-400"></div>
            </div>
            <x-button type="regular" :withGradient=true text="Continue with Google" class="w-full !bg-transparent">
                <x-slot:icon>
                    <svg class="w-6 h-6 basis-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M19.76 10.77L19.67 10.42H12.23V13.58H16.68C16.4317 14.5443 15.8672 15.3974 15.0767 16.0029C14.2863 16.6084 13.3156 16.9313 12.32 16.92C11.0208 16.9093 9.77254 16.4135 8.81999 15.53C8.35174 15.0685 7.97912 14.5191 7.72344 13.9134C7.46777 13.3077 7.33407 12.6575 7.33 12C7.34511 10.6795 7.86792 9.41544 8.79 8.47002C9.7291 7.58038 10.9764 7.08932 12.27 7.10002C13.3779 7.10855 14.4446 7.52101 15.27 8.26002L17.47 6.00002C16.02 4.70638 14.1432 3.9941 12.2 4.00002C11.131 3.99367 10.0713 4.19793 9.08127 4.60115C8.09125 5.00436 7.19034 5.59863 6.43 6.35002C4.98369 7.8523 4.16827 9.85182 4.15152 11.9371C4.13478 14.0224 4.918 16.0347 6.34 17.56C7.12784 18.3449 8.06422 18.965 9.09441 19.3839C10.1246 19.8029 11.2279 20.0123 12.34 20C13.3484 20.0075 14.3479 19.8102 15.2779 19.42C16.2078 19.0298 17.0488 18.4549 17.75 17.73C19.1259 16.2171 19.8702 14.2347 19.83 12.19C19.8408 11.7156 19.8174 11.2411 19.76 10.77Z" fill="#000000"></path> </g></svg>
                </x-slot:icon>
            </x-button>
        </form>
    </x-modal>
</div>

@push('component-script')
<script>
    document.addEventListener('alpine:init', () =>
    {
        Alpine.data('biodata-section', () => (
        {
            open: false,
            OpenDropdown()
            {
                this.open = true;
            },

            counter: @entangle('counter').defer,

            init()
            {
                // this.$nextTick(() => 
                // { 
                //     this.counter = 1000 
                // })
            },

            // Increment()
            // {
            //     this.counter++,
            //     Livewire.emit('ShowDD')
            // }
        }))
    })
</script>
@endpush

