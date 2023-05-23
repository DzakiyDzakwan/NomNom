<div>
    <section class="bg-[#383838] text-white h-[323px]">
        <div class="px-4 py-8">
            <div class="ml-32 relative">
                <div class="md:w-[179px] md:h-[179px]">
                    <div class="justify-center pt-8">
                        @if (Auth::user()->image)
                            <img src="storage/images/user/{{ Auth::user()->image }}"
                                class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">
                        @else
                            <img src="{{ asset('assets/images/user.png') }}"
                                class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">
                        @endif
                    </div>
                    <button
                        class="h-10 w-10 absolute bg-white ml-36 top-[160px] rounded-full border-solid border-2 border-[#FFB03E] px-2"
                        @click="$store.profile.ToggleModal()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-[#FFB03E]" fill="orange"
                            viewBox="0 0 24 24">
                            <path
                                d="M14.078 7.061l2.861 2.862-10.799 10.798-3.584.723.724-3.585 10.798-10.798zm0-2.829l-12.64 12.64-1.438 7.128 7.127-1.438 12.642-12.64-5.691-5.69zm7.105 4.277l2.817-2.82-5.691-5.689-2.816 2.817 5.69 5.692z" />
                        </svg>


                    </button>
                </div>
                <div class="h-60 ml-56 mr-24 absolute top-8">
                    <div class="text-primary text-2xl font-thin">
                        <span class="inline">@</span>{{ Auth::user()->username }}
                    </div>

                    <div class="text-white text-2xl font-semibold flex items-center">
                        {{ Auth::user()->nama }}

                        @if (Auth::user()->jenis_kelamin == 'LK')
                            <svg fill="white" class="w-6 h-6 mb-1 ml-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M15.0491 8.53666L18.5858 5H14V3H22V11H20V6.41421L16.4633 9.95088C17.4274 11.2127 18 12.7895 18 14.5C18 18.6421 14.6421 22 10.5 22C6.35786 22 3 18.6421 3 14.5C3 10.3579 6.35786 7 10.5 7C12.2105 7 13.7873 7.57264 15.0491 8.53666ZM10.5 20C13.5376 20 16 17.5376 16 14.5C16 11.4624 13.5376 9 10.5 9C7.46243 9 5 11.4624 5 14.5C5 17.5376 7.46243 20 10.5 20Z">
                                </path>
                            </svg>
                        @elseif (Auth::user()->jenis_kelamin == 'PR')
                            <svg fill="white" class="w-6 h-6 mb-1 ml-2" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24">
                                <path
                                    d="M11 15.9339C7.33064 15.445 4.5 12.3031 4.5 8.5C4.5 4.35786 7.85786 1 12 1C16.1421 1 19.5 4.35786 19.5 8.5C19.5 12.3031 16.6694 15.445 13 15.9339V18H18V20H13V24H11V20H6V18H11V15.9339ZM12 14C15.0376 14 17.5 11.5376 17.5 8.5C17.5 5.46243 15.0376 3 12 3C8.96243 3 6.5 5.46243 6.5 8.5C6.5 11.5376 8.96243 14 12 14Z">
                                </path>
                            </svg>
                        @else
                        @endif
                    </div>


                    <div class="text-white text-md font-light">
                        @if (!empty(Auth::user()->pekerjaan))
                            ({{ Auth::user()->pekerjaan }})
                        @endif
                    </div>

                    <ul class="flex my-4">
                        <li class="text-white text-base font-bold mr-1">{{ Auth::user()->recipes()->count() }}</li>
                        <li class="text-white text-base font-extralight mr-3">Total Recipes</li>
                        <li class="h-6 w-6 rounded-full mr-1 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="w-6 h-6 text-white"
                                viewBox="0 0 24 24">
                                <path
                                    d="M17.997 18h-11.995l-.002-.623c0-1.259.1-1.986 1.588-2.33 1.684-.389 3.344-.736 2.545-2.209-2.366-4.363-.674-6.838 1.866-6.838 2.491 0 4.226 2.383 1.866 6.839-.775 1.464.826 1.812 2.545 2.209 1.49.344 1.589 1.072 1.589 2.333l-.002.619zm4.811-2.214c-1.29-.298-2.49-.559-1.909-1.657 1.769-3.342.469-5.129-1.4-5.129-1.265 0-2.248.817-2.248 2.324 0 3.903 2.268 1.77 2.246 6.676h4.501l.002-.463c0-.946-.074-1.493-1.192-1.751zm-22.806 2.214h4.501c-.021-4.906 2.246-2.772 2.246-6.676 0-1.507-.983-2.324-2.248-2.324-1.869 0-3.169 1.787-1.399 5.129.581 1.099-.619 1.359-1.909 1.657-1.119.258-1.193.805-1.193 1.751l.002.463z" />
                            </svg>
                        </li>
                        <li class="text-white text-base font-extralight mr-5">
                            <span class="font-bold"> {{ Auth::user()->Followers()->count() }}</span> Followers
                        </li>

                        {{-- <li class="text-white text-base font-extralight mr-3">
                            Followers</li> --}}
                        <li class="h-6 w-6 rounded-full ml-6 mt-1 justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="white" class="w-4 h-4" width="24"
                                viewBox="0 0 24 24">
                                <path
                                    d="M20 20h-4v-4h4v4zm-6-10h-4v4h4v-4zm6 0h-4v4h4v-4zm-12 6h-4v4h4v-4zm6 0h-4v4h4v-4zm-6-6h-4v4h4v-4zm16-8v22h-24v-22h3v1c0 1.103.897 2 2 2s2-.897 2-2v-1h10v1c0 1.103.897 2 2 2s2-.897 2-2v-1h3zm-2 6h-20v14h20v-14zm-2-7c0-.552-.447-1-1-1s-1 .448-1 1v2c0 .552.447 1 1 1s1-.448 1-1v-2zm-14 2c0 .552-.447 1-1 1s-1-.448-1-1v-2c0-.552.447-1 1-1s1 .448 1 1v2z" />
                            </svg>

                        </li>
                        <li class="text-white text-base font-extralight">{{ Auth::user()->tgl_lahir }}</li>
                    </ul>
                    <div class="text-white text-sm font-bold">Bio</div>
                    <div class="text-white text-base font-extralight">
                        @if (!empty(Auth::user()->bio))
                            "{{ Auth::user()->bio }}"
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-modal name="profile">
        <div class="px-4 py-2.5 flex flex-col justify-end items-center">
            <button
                class="font-medium whitespace-normal text-lg text-main dark:text-main rounded hover:bg-secondary hover:text-plain transition-colors duration-200 self-end"
                @click="ToggleModal">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        <p class="font-normal text-xl mx-10 mb-2 text-[#3E3E3E]">Profil Pengguna</p>
        <hr class="border-[#3E3E3E] mx-auto w-[85%]">
        <form class="px-2 pb-20 md:px-1 w-[85%] mx-auto space-y-4 relative h-auto" wire:submit.prevent="editProfile"
            enctype="multipart/form-data">
            <div class="relative flex py-4">
                <div class="md:w-24 md:h-24 absolute left-0">
                    @if (Auth::user()->image)
                        @if ($foto)
                            @if (!$errors->has('foto'))
                                <img src="{{ $foto->temporaryUrl() }}" class="w-[100%] h-[100%] rounded-full relative"
                                    alt="" srcset="">
                            @else
                                <img src="storage/images/user/{{ Auth::user()->image }}"
                                    class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">
                            @endif
                        @else
                            <img src="storage/images/user/{{ Auth::user()->image }}"
                                class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">
                        @endif
                    @else
                        @if ($foto)
                            @if (!$errors->has('foto'))
                                <img src="{{ $foto->temporaryUrl() }}" class="w-[100%] h-[100%] rounded-full relative"
                                    alt="" srcset="">
                            @else
                                <img src="{{ asset('assets/images/user.png') }}"
                                    class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">
                            @endif
                        @else
                            <img src="{{ asset('assets/images/user.png') }}"
                                class="w-[100%] h-[100%] rounded-full relative" alt="" srcset="">
                        @endif
                    @endif
                </div>
                <div class="h-24 ml-32 w-[90%] mt-2">
                    <label for="foto">
                        <input type="file"
                            class="w-full text-sm text-gray-600 
                        file:mr-4 file:py-2 file:px-4
                        file:rounded-full file:border-0
                        file:text-sm file:font-medium
                        file:bg-primary file:text-black
                        hover:file:bg-[#FFB03E]-600
                        "
                            wire:model.defer="foto" id="foto">
                    </label>
                    @if (!$errors->has('foto'))
                        <div class="text-black text-xs font-semibold mt-3 pl-2">
                            Gambar Profile Anda sebaiknya memiliki rasio 1:1 dan berukuran tidak lebih dari 2MB.
                        </div>
                    @else
                        @error('foto')
                            <div class="text-red-500 text-xs font-semibold mt-3 pl-2">
                                {{ $message }}
                            </div>
                        @enderror
                    @endif
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="nama">
                    Nama Lengkap
                </label>
                <input wire:model.defer="nama"
                    class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:ring-primary focus:border-primary text-[#383838]"
                    id="nama" type="text" placeholder="Nama Lengkap">
                @error('nama')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="username">
                    Username
                </label>
                <input wire:model.defer="username"
                    class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight  focus:ring-primary focus:border-primary text-[#383838]"
                    id="username" type="text" placeholder="Username">
                @error('username')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="email">
                    Email
                </label>
                <input wire:model.defer="email"
                    class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:ring-primary focus:border-primary text-[#383838]"
                    id="email" type="text" placeholder="Email">
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
                        <input wire:model.defer="tgl" type="date"
                            class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:ring-primary focus:border-primary text-[#383838]"
                            id="datepicker" placeholder="Pilih Tanggal">
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
                    <select wire:model.defer="jk"
                        class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:ring-primary focus:border-primary text-[#383838]">
                        <option value="">Pilih disini</option>
                        <option value="LK">Laki-laki</option>
                        <option value="PR">Perempuan</option>
                    </select>
                </div>
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="profesi">
                    Profesi
                </label>
                <input wire:model.defer="profesi"
                    class="appearance-none border border-[#C5C5C5] rounded-lg w-full py-2 px-3 leading-tight focus:ring-primary focus:border-primary text-[#383838]"
                    id="headline" type="text" placeholder="Headline">
                @error('profesi')
                    <div>
                        <span class="text-sm text-red-500">{{ $message }}</span>
                    </div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block text-base font-semibold mb-2 text-[#3E3E3E]" for="bio">
                    Bio
                </label>
                <textarea wire:model.defer="bio" id="bio" rows="4"
                    class="block p-2.5 w-full text-sm rounded-lg border border-[#C5C5C5] focus:ring-primary focus:border-primary text-[#383838] "
                    placeholder="Tulis Hal Menarik Tentangmu..."></textarea>
            </div>
            <div class="relative">
                <button
                    class="bg-[#FFB03E] hover:bg-gradient-to-r from-[#FFB03E] to-[#F67356] text-white duration-500 px-10 py-3 rounded-full absolute right-0"
                    type="submit">Simpan</button>
            </div>
        </form>
    </x-modal>

    @push('component-script')
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.data('biodata-section', () => ({
                    open: false,
                    OpenDropdown() {
                        this.open = true;
                    },

                    counter: @entangle('counter').defer,

                    init() {
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


                $(function() {
                    $("#datepicker").datepicker({
                        maxDate: moment().add('d', 0).toDate(),
                    });
                });
            })
        </script>
    @endpush
