<section class="relative bg-[url(/assets/img/bg_home.jpg)] bg-cover bg-center bg-no-repeat h-screen w-full">
    <div class="absolute inset-0 bg-gradient-to-t from-white to-white-300 dark:from-dark_grey1 "></div>



    <div class="relative mx-auto max-w-screen-xl pl-10 py-20 sm:px-6 lg:flex lg:h-screen lg:items-center lg:px-1">

        <div class="max-w-[750px] w-auto">
            <div class="mt-8 flex flex-wrap gap-4 text-center w-auto flex-col ">
                <div class="flex">
                    <button class="btn-kelas rounded-2xl block -mt-[12px]  bg-navy_blue px-5 py-3  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                        Ruang Teori 5
                    </button>
                </div>
                <div class="dropdown-kelas hidden flex border ">
                    <ul class="border border-white bg-white px-5">
                        <li><a href="">Kelas 1</a></li>
                        <li><a href="">Kelas 1</a></li>
                        <li><a href="">Kelas 1</a></li>
                        <li><a href="">Kelas 1</a></li>
                        <li><a href="">Kelas 1</a></li>
                    </ul>
                </div>
                <div class='flex items-center justify-center min-h-screen fromd via-teal-300 to-teal-500 bg-gradient-to-br'>
                    <select class="outline-none focus:outline-none p-2 bg-white rounded-3xl" value={selectedValue} onChange={handleSelectChange}>
                        {genre.map((item, i) => (
                        <option value={item} key={i}>
                            Select Category
                        </option>
                        <option value={item} key={i}>
                            Sci-fi
                        </option>
                        <option value={item} key={i}>
                            Drama
                        </option>
                        <option value={item} key={i}>
                            Thriller
                        </option>
                        <option value={item} key={i}>
                            Documentary
                        </option>
                        ))}
                    </select>

                </div>
            </div>
            <h1 class="text-[36px] dark:text-gray-100 font-extrabold font-sans md:text-[72px] -ml-[2px] leading-normal ">
                ROOM
                <strong class="block font-extrabold text-biru md:-mt-[37px] -mt-[12px]">
                    SCHEDULE
                </strong>
            </h1>

            <p class=" max-w-lg text-[17px]/relaxed md:text-[25px] leading-normal dark:text-white">
                <strong>NOW</strong> TI 2G - KULIAH OOP<br>07.00 - 10.30
            </p>
            <div class="mt-8 flex flex-wrap gap-4 text-center w-auto  ">
                <a href="/booking" class="rounded-2xl block -mt-[12px]  bg-bingu px-5 py-3  md:text-[19px] text-[12px] text-white shadow hover:bg-bingu_hover focus:outline-none focus:ring active:bg-bingu ">
                    CREATE BOOKING
                </a>
            </div>
        </div>
    </div>
</section>


<!-- component -->
<!-- This is an example component -->