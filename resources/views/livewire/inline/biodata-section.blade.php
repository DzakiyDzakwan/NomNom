<div>
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
        </div>
        <p class="font-normal text-xl mx-10 mb-2 text-[#3E3E3E]">Profil Pengguna</p>
        <hr class="border-[#3E3E3E] mx-auto w-[85%]">
        <form class="px-2 pb-20 md:px-1 w-[85%] mx-auto space-y-4 relative h-auto" wire:submit.prevent="editProfile" enctype="multipart/form-data">
            <div class="relative flex py-4">
                <div class="md:w-24 md:h-24 absolute left-0">
                    <img src="{{ asset('assets/images/profile.jpg') }}" class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">                   
                </div>
                <div class="h-24 ml-32 w-[90%] mt-2">
                    <label for="foto">
                        <input type="file" class="w-full text-sm text-gray-600 
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-medium
                        file:bg-primary file:text-black
                        hover:file:bg-[#FFB03E]-600
                        " 
                        wire:model.defer="foto" id="foto">
                    </label>
                    <div class="text-black text-xs font-semibold mt-3 pl-2">
                        Gambar Profile Anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB.
                    </div>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="nama">
                  Nama Lengkap
                </label>
                <input wire:model.defer="nama" class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-[#383838]" id="nama" type="text" placeholder="Nama Lengkap">
                @error('nama')
                <div>
                    <span class="text-sm text-red-500">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="email">
                  Email
                </label>
                <input wire:model.defer="email" class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-[#383838]" id="email" type="text" placeholder="Email">
                {{-- <p id="helper-text-explanation" class="mt-2 text-sm text-black">Anda dapat merubah email anda melalui menu <a href="#" class="font-medium text-blue-600 hover:underline dark:text-blue-500">Akun</a>.</p> --}}
                @error('email')
                <div>
                    <span class="text-sm text-red-500">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                  <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="tgl">
                    Tanggal Lahir
                  </label>
                  <div class="relative max-w-sm">
                    <input wire:model.defer="tgl" type="date" class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-[#383838]" id="datepicker" placeholder="Pilih Tanggal">
                  </div>
                  @error('tgl')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                  @enderror
                </div>
                <div class="w-full md:w-1/2 px-3">
                  <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="jk">
                    Jenis Kelamin
                  </label>
                  <select wire:model.defer="jk" class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-[#383838]">
                    <option value="LK">Laki-laki</option>
                    <option value="PR">Perempuan</option>
                  </select>
                </div>
              </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="profesi">
                  Profesi
                </label>
                <input wire:model.defer="profesi" class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:outline-none focus:shadow-outline text-[#383838]" id="headline" type="text" placeholder="Headline">
                @error('profesi')
                <div>
                    <span class="text-sm text-red-500">{{ $message }}</span>
                </div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="bio">
                  Tentang Saya
                </label>
                <textarea  wire:model.defer="bio" id="bio" rows="4" class="block p-2.5 w-full text-sm rounded-lg border border-[#C5C5C5] focus:outline-none focus:shadow-outline text-[#383838] " placeholder="Tulis Hal Menarik Tentangmu..."></textarea>
            </div>
            <div class="relative">
                <button class="bg-[#FFB03E] hover:bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-10 py-3 rounded-full absolute right-0" type="submit">Simpan</button>
            </div>
        </form>
    </x-modal>

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


        $( function() {
            $( "#datepicker" ).datepicker({                  
                maxDate: moment().add('d', 0).toDate(),
            });
        });
    })
</script>
@endpush

