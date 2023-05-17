<div>
    <nav class="p-5 bg-[#FFB03E] shadow-xl md:flex md:items-center md:justify-between h-[72px]">
        <div class="flex items-center ">
          <span class="text-2xl font-[Poppins] cursor-pointer">
            <img class="h-10 inline static md:w-[210px] md:h-[48px]"
              src="{{ asset('assets/images/logo/400x100.png') }}">
          </span>
          <span class="text-3xl cursor-pointer mx-2 md:hidden block">
            <ion-icon name="menu" onclick="Menu(this)"></ion-icon>
          </span>
        </div>
        <ul class="md:flex md:items-center z-[-1] md:z-auto md:static absolute bg-[#FFB03E] w-full left-0 md:right-0 md:w-full md:py-0 py-4 md:pl-0 pl-7 md:opacity-100 opacity-0 top-[-400px] transition-all ease-in duration-500">
            <li class="mx-4 my-6 md:my-0 ml-24">
              <a href="#" class="font-Poppins font-semibold text-base text-white duration-500">Kategori</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
              <a href="#" class="font-Poppins font-semibold text-base text-white duration-500">Jenis Makanan</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
              <a href="#" class="font-Poppins font-semibold text-base text-white duration-500">Bahan</a>
            </li>
            <li class="mx-4 my-6 md:my-0">
              <a>
                <form class="flex items-center">   
                    <label for="simple-search" class="sr-only">Search</label>
                    <div class="relative w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg aria-hidden="true" class="w-5 h-5 text-[#3E3E3E] dark:text-gray-400" fill="#3E3E3E" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                        </div>
                        <input type="text" id="simple-search" class="bg-white text-[#616161] border border-white text-sm focus:ring-blue-500 focus:border-blue-500 block w-[300px] h-[40px] md:w-[360px] pl-10 p-2.5" placeholder="Cari resep..." required>
                    </div>
                </form>
              </a>
            </li>
            <li class="mx-4 my-6 md:my-0 md:flex mr-4 ml-20">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[45px] h-[45px] opacity-0 md:opacity-100 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <button id="profileButton" data-dropdown-toggle="profileMenu" data-dropdown-offset-distance="10" data-dropdown-offset-skidding="100" data-dropdown-placement="left">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-0 md:opacity-100 text-white mt-4" id="arrow1">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                </svg> 
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 opacity-0 md:opacity-100 text-white mt-4 hidden" id="arrow2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 15.75l7.5-7.5 7.5 7.5" />
                </svg>                                    
              </button>
                <div id="profileMenu" class="z-10 hidden bg-[#D9D9D9] divide-y divide-gray-100 rounded-lg shadow w-36 dark:bg-gray-700 mt-16 absolute right-24">
                  <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefault">
                    <li class="flex px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-black">
                            <path d="M11 5a3 3 0 11-6 0 3 3 0 016 0zM2.615 16.428a1.224 1.224 0 01-.569-1.175 6.002 6.002 0 0111.908 0c.058.467-.172.92-.57 1.174A9.953 9.953 0 018 18a9.953 9.953 0 01-5.385-1.572zM16.25 5.75a.75.75 0 00-1.5 0v2h-2a.75.75 0 000 1.5h2v2a.75.75 0 001.5 0v-2h2a.75.75 0 000-1.5h-2v-2z" />
                          </svg>                                                   
                      <a href="#" class="text-xs text-[#333333] font-Poppins font-medium hover:underline ml-2">18k Followers</a>
                    </li>
                    <li class="flex px-4 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="w-4 h-4">
                          <g><path d="M7,13.5A6.5,6.5,0,0,0,13.5,7H.5A6.5,6.5,0,0,0,7,13.5Z" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path>
                            <line x1="7.5" y1="5" x2="10.5" y2="0.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></line>
                            <line x1="9" y1="5.5" x2="12.5" y2="2.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></line></g></svg>                                                   
                      <a href="#" class="text-xs text-[#333333] font-Poppins font-medium hover:underline ml-2">25 Recipes</a>
                    </li>
                    <hr class="border-black mx-auto w-36">
                    <li class="flex px-4 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="w-4 h-4"><g>
                        <circle cx="5" cy="2.75" r="2.25" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></circle>
                        <path d="M3.5,12.5H.5V11A4.51,4.51,0,0,1,7,7" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path>
                        <polygon points="13.5 8.5 8.79 13.21 6.66 13.5 6.96 11.37 11.66 6.66 13.5 8.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></polygon></g></svg>                                                                      
                    <a href="#" class="text-xs text-[#333333] font-Poppins font-semibold hover:underline ml-2">Profil Saya</a>
                    </li>
                    <li class="flex px-4 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="w-4 h-4"><g>
                        <circle cx="1" cy="2.5" r="0.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></circle>
                        <line x1="4.5" y1="2.5" x2="13.5" y2="2.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></line>
                        <circle cx="1" cy="7" r="0.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></circle>
                        <line x1="4.5" y1="7" x2="13.5" y2="7" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></line>
                        <circle cx="1" cy="11.5" r="0.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></circle>
                        <line x1="4.5" y1="11.5" x2="13.5" y2="11.5" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></line></g></svg>                                                    
                    <a href="#" class="text-xs text-[#333333] font-Poppins font-semibold hover:underline ml-2">Daftar Resep</a>
                    </li>
                    <li class="flex px-4 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-black">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.324.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 011.37.49l1.296 2.247a1.125 1.125 0 01-.26 1.431l-1.003.827c-.293.24-.438.613-.431.992a6.759 6.759 0 010 .255c-.007.378.138.75.43.99l1.005.828c.424.35.534.954.26 1.43l-1.298 2.247a1.125 1.125 0 01-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.57 6.57 0 01-.22.128c-.331.183-.581.495-.644.869l-.213 1.28c-.09.543-.56.941-1.11.941h-2.594c-.55 0-1.02-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 01-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 01-1.369-.49l-1.297-2.247a1.125 1.125 0 01.26-1.431l1.004-.827c.292-.24.437-.613.43-.992a6.932 6.932 0 010-.255c.007-.378-.138-.75-.43-.99l-1.004-.828a1.125 1.125 0 01-.26-1.43l1.297-2.247a1.125 1.125 0 011.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.087.22-.128.332-.183.582-.495.644-.869l.214-1.281z" />
                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                      </svg>                                                            
                    <a href="#" class="text-xs text-[#333333] font-Poppins font-semibold hover:underline ml-2">Pengaturan</a>
                    </li>
                    <li class="flex px-4 py-2">
                      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14 14" class="w-4 h-4"><g>
                        <path d="M9.5,10.5v2a1,1,0,0,1-1,1h-7a1,1,0,0,1-1-1V1.5a1,1,0,0,1,1-1h7a1,1,0,0,1,1,1v2" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></path>
                        <line x1="6.5" y1="7" x2="13.5" y2="7" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></line>
                        <polyline points="11.5 5 13.5 7 11.5 9" fill="none" stroke="#000000" stroke-linecap="round" stroke-linejoin="round"></polyline></g></svg>           
                    <a href="#" class="text-xs text-[#333333] font-Poppins font-semibold hover:underline ml-2">Keluar</a>
                    </li>
                  </ul>
              </div>                   
            </li>
            <button>
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-[40px] h-[40px] opacity-0 md:opacity-100 text-white">
                <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0M3.124 7.5A8.969 8.969 0 015.292 3m13.416 0a8.969 8.969 0 012.168 4.5" />
              </svg>          
            </button>
          </ul>
      </nav>
</div>

<script>
    function Menu(e){
      let list = document.querySelector('ul');
      e.name === 'menu' ? (e.name = "close",list.classList.add('top-[80px]') , list.classList.add('opacity-100')) :( e.name = "menu" ,list.classList.remove('top-[80px]'),list.classList.remove('opacity-100'))
    }

    window.addEventListener('DOMContentLoaded', ()=> {
            const menuBtn = document.querySelector('#profileButton')
            const dropdown = document.querySelector('#profileMenu')
            const icon1 = document.querySelector('#arrow1')
            const icon2 = document.querySelector('#arrow2')
            
            menuBtn.addEventListener('click', () => {
                if(dropdown.classList.contains('hidden')){
                    dropdown.classList.remove('hidden');
                    dropdown.classList.add('flex');
                    icon1.classList.add('hidden');
                    icon2.classList.remove('hidden');
                }else{
                    dropdown.classList.remove('flex');
                    dropdown.classList.add('hidden');
                    icon1.classList.remove('hidden');
                    icon2.classList.add('hidden');
                }

                // dropdown.classList.toggle('hidden')
                // dropdown.classList.toggle('flex')
            })

        })
  </script>
