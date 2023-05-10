<div>
    <section class="container px-10 mx-auto text-gray-600 body-font mt-12">
        <div class="h-full overflow-hidden shadow-md bg-white px-8">
            <form>
                <div class="mb-6 flex flex-wrap">
                    <div class="w-full md:w-1/2 p-4">
                        <x-forms for="input" type="text" id="email" text="Email"
                            placeholder="Masukkan Judul Resep"></x-forms>
                    </div>
                    <div class="w-full md:w-1/2 p-4">
                        <x-forms for="file" id="thumbnail" text="Thumbnail"></x-forms>
                    </div>
                </div>

                <div class="w-full mb-6 px-4">
                    <x-forms for="textarea" id="thumbnail" text="Description" placeholder="Masukkan Deskripsi Resep">
                    </x-forms>

                    <div class="w-full mb-6 px-4">
                        <x-forms for="input" type="number" id="email" text="Porsi"
                            placeholder="Masukkan Jumlah Porsi"></x-forms>
            </form>
        </div>
    </section>
</div>
