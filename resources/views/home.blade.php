@include('components/header')

    <div class="mb-10">
        <div class="relative w-full h-[88vh] max-sm:h-[80vh] "><video
                class="absolute top-0 left-0 w-full h-full object-cover -z-10" autoPlay="" loop="" muted="">
                <source src="videos/Home/2675508-hd_1920_1080_24fps.mp4" type="video/mp4" />Your browser does not
                <source src="videos/Home/13188309_3840_2160_60fps.mp4" type="video/mp4" />Your browser does not
                support the video tag.
            </video>
            <div class="absolute top-0 left-0 w-full h-full bg-black opacity-60"></div>
            <div class="flex  items-center h-full relative z-10 max-w-[88vw] mx-auto" style="display: flex;justify-content: space-around; ">
                <div class=" text-white max-w-[70vw] max-sm:max-w-[80vw] mt-[62px]">
                    <div style="text-align: center; transform:translateY(-20px)">
                        <h2 class="font-semibold leading-7 lg:text-xl md:text-lg sm:text-base">We make a Difference</h2>
                        <h1 class="mt-3 lg:text-5xl md:text-4xl sm:text-4xl max-sm:text-4xl"><span
                                class="text-secondary">Empowering growth through intelligent, agile</span> 
                                <!-- <span class="text-red-600 text-6xl">Structures</span> -->
                            </h1>
                        <h2 class="mt-1 lg:text-5xl md:text-4xl sm:text-4xl max-sm:text-4xl text-secondary">solutions for a world in constant transformation.
                             <!-- <span class="text-red-600 text-6xl">Tomorrow</span> -->
                            </h2>
                    </div>
                    <p class="mt-5 font-normal leading-7 lg:text-xl md:text-lg sm:text-base max-sm:hidden text-justify"
                        style="text-align: center; will-change:opacity">At Roadx, innovation drives our approach. Whether it's through smart design, sustainable materials, or cutting-edge modeling techniques, we aim to enhance infrastructure that supports communities and fuels economic growth.
</p>
                </div>
            </div>
        </div>
        <style>
            @keyframes slide {
            0% { transform: translateX(0); }
            100% { transform: translateX(calc(-100% / 2)); }
            }

            .animate-slide {
            animation: slide 30s linear infinite;
            width: max-content; /* or calc(200%) */
            display: flex;
            }
        </style>
        <div class="bg-primary overflow-hidden" style="transform:none">
            <div class="jsx-670b3eaca42d31b6 relative overflow-hidden">
                <ul
                    class="jsx-670b3eaca42d31b6 flex gap-x-52  py-2 cursor-default whitespace-nowrap animate-slide text-white text-xl">
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/motorway.png" alt="Expressway"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Expressway</span></li>
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/tunnel.png" alt="Tunnels"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Tunnels</span></li>
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/buildings.png" alt="Urban Infrastructure"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span class="jsx-670b3eaca42d31b6 mt-2">Urban
                            Infrastructure</span></li>
                    <!-- <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/train-station.png" alt="Railway"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Railway</span></li> -->
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/vincent-thomas-bridge.png" alt="Bridges"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Bridges</span></li>
                    <!-- <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img src="images/Home/herorail/metro.png"
                            alt="Metro" class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Metro</span></li> -->
                    <!-- <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/waterfall_6735800.png" alt="Waterways"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Waterways</span></li> -->
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/motorway.png" alt="Expressway"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Expressway</span></li>
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/tunnel.png" alt="Tunnels"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Tunnels</span></li>
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/buildings.png" alt="Urban Infrastructure"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span class="jsx-670b3eaca42d31b6 mt-2">Urban
                            Infrastructure</span></li>
                    <!-- <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/train-station.png" alt="Railway"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Railway</span></li> -->
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/vincent-thomas-bridge.png" alt="Bridges"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Bridges</span></li>
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img src="images/Home/herorail/metro.png"
                            alt="Metro" class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Metro</span></li>
                    <li class="jsx-670b3eaca42d31b6 flex items-center gap-x-2"><img
                            src="images/Home/herorail/waterfall_6735800.png" alt="Waterways"
                            class="jsx-670b3eaca42d31b6 w-8 h-8 invert" /><span
                            class="jsx-670b3eaca42d31b6 mt-2">Waterways</span></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="mb-20 mt-10 relative">
        <div class="max-w-[88vw] mx-auto flex flex-wrap items-center justify-center ">
            <div class="w-full sm:w-1/2 p-2 flex justify-center relative group"><img alt="image" loading="lazy"
                    width="350" height="300" decoding="async" data-nimg="1"
                    class="object-cover max-w-full h-auto duration-300 ease-in-out  hover:scale-110 transition-transform opacity-80 hover:opacity-90"
                    style="color:transparent"
                    src="yogesh/homemap.jpg" />
            </div>
            <div class="w-full sm:w-1/2 max-lg:py-4 flex justify-center items-center">
                <div class="rounded-l-3xl text-left" style="transform:translateY(-20px)">
                    <h1 class="text-4xl  font-bold font-montserrat mb-4 text-logored">About Us</h1>
                    <h2 class=" text-lg sm:text-xl text-justify my-5"><span class="font-bold">
                            <span
                                class="text-primary">Roadx
                                <!-- <span class="text-logored">
                                   Designers
                                </span> -->
                            </span> Designers & Consultants
                        </span>
                         Roadx Designers & Consultants is a leading infrastructure design and consulting
                          firm dedicated to delivering innovative, sustainable, and cost-effective solutions
                           in the field of transportation and civil engineering. With a strong foundation in 
                           technical expertise and a commitment to excellence, we specialize in the planning,
                            design, and supervision of highways, roads, bridges, and urban infrastructure projects.
</h2>
                    <p class=" text-lg sm:text-xl text-justify my-5">
                        <!-- <span class="font-bold">
                            <span
                                class="text-primary">Civil
                                <span class="text-logored">
                                    Mantra
                                </span>
                            </span> Infracon Pvt.
                            Ltd.
                        </span> -->
                            Founded with a vision to transform connectivity and mobility, Roadx combines advanced engineering tools, deep industry knowledge, and client-centric strategies to bring every project from concept to completion with precision and efficiency. Our multidisciplinary team of experienced engineers, planners, and project managers ensures that each solution is tailored to meet the specific needs of our clients while adhering to the highest quality and safety standards.

                    </p><button>
                        <h3
                            class="text-lg sm:text-xl mt-2 font-bold hover:bg-logored transition-all duration-300 hover:translate-x-1 hover:scale-110 rounded bg-primary text-center px-5 text-white py-2">
                            <a href="/about">Read More </a></h3>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="mb-16 bg-primary">
        <div
            class="flex max-[336px]:grid-cols-1 max-lg:grid max-lg:grid-cols-2 gap-6 max-w-[88vw] mx-auto justify-between py-14 text-white">
            <div class="flex flex-col max-lg:items-center max-lg:justify-center max-lg:text-center"
                style="transform:translateY(-20px)">
                <div class="group cursor-pointer  max-lg:mt-5 lg:w-52">
                    <div class="flex items-center gap-x-2 max-lg:flex-col max-lg:items-center"> <img
                            alt="SUCCESSFULL YEARS" loading="lazy" width="50" height="40" decoding="async" data-nimg="1"
                            class="rounded-xl" style="color:transparent"
                            src="yogesh/growingscalefb38.png?url=%2Fimages%2FHome%2FProjects%2Fgrowingscale.png&amp;w=128&amp;q=75" />
                        <h1
                            class="text-[28px] sm:text-[36px] lg:text-[40px] pt-2 text-center font-extrabold transition-transform duration-300 ease-in-out group-hover:-translate-y-2">
                            +</h1>
                    </div>
                    <p class="text-[16px] sm:text-[20px] lg:text-[22px] font-bold pt-1">SUCCESSFULL YEARS</p>
                </div>
            </div>
            <div class="flex flex-col max-lg:items-center max-lg:justify-center max-lg:text-center"
                style="transform:translateY(-20px)">
                <div class="group cursor-pointer  max-lg:mt-5 lg:w-52">
                    <div class="flex items-center gap-x-2 max-lg:flex-col max-lg:items-center"> <img alt="TEAM MEMBERS"
                            loading="lazy" width="50" height="40" decoding="async" data-nimg="1" class="rounded-xl"
                            style="color:transparent"
                            src="yogesh/teammembersba68.png?url=%2Fimages%2FHome%2FProjects%2Fteammembers.png&amp;w=128&amp;q=75" />
                        <h1
                            class="text-[28px] sm:text-[36px] lg:text-[40px] pt-2 text-center font-extrabold transition-transform duration-300 ease-in-out group-hover:-translate-y-2">
                            +</h1>
                    </div>
                    <p class="text-[16px] sm:text-[20px] lg:text-[22px] font-bold pt-1">TEAM MEMBERS</p>
                </div>
            </div>
            <div class="flex flex-col max-lg:items-center max-lg:justify-center max-lg:text-center"
                style="transform:translateY(-20px)">
                <div class="group cursor-pointer  max-lg:mt-5 lg:w-52">
                    <div class="flex items-center gap-x-2 max-lg:flex-col max-lg:items-center"> <img alt="HAPPY CLIENTS"
                            loading="lazy" width="50" height="40" decoding="async" data-nimg="1" class="rounded-xl"
                            style="color:transparent"
                            src="yogesh/clients091e.png?url=%2Fimages%2FHome%2FProjects%2Fclients.png&amp;w=128&amp;q=75" />
                        <h1
                            class="text-[28px] sm:text-[36px] lg:text-[40px] pt-2 text-center font-extrabold transition-transform duration-300 ease-in-out group-hover:-translate-y-2">
                            +</h1>
                    </div>
                    <p class="text-[16px] sm:text-[20px] lg:text-[22px] font-bold pt-1">HAPPY CLIENTS</p>
                </div>
            </div>
            <div class="flex flex-col max-lg:items-center max-lg:justify-center max-lg:text-center"
                style="transform:translateY(-20px)">
                <div class="group cursor-pointer  max-lg:mt-5 lg:w-52">
                    <div class="flex items-center gap-x-2 max-lg:flex-col max-lg:items-center"> <img alt="PROJECTS"
                            loading="lazy" width="50" height="40" decoding="async" data-nimg="1" class="rounded-xl"
                            style="color:transparent"
                            src="yogesh/projects3d3e.png?url=%2Fimages%2FHome%2FProjects%2Fprojects.png&amp;w=128&amp;q=75" />
                        <h1
                            class="text-[28px] sm:text-[36px] lg:text-[40px] pt-2 text-center font-extrabold transition-transform duration-300 ease-in-out group-hover:-translate-y-2">
                            +</h1>
                    </div>
                    <p class="text-[16px] sm:text-[20px] lg:text-[22px] font-bold pt-1">PROJECTS</p>
                </div>
            </div>
        </div>
    </div> -->
    <!-- <div class="jsx-8852884a3f26d3af max-w-[88vw] mx-auto mb-10">
        <div class="jsx-8852884a3f26d3af lg:max-w-[80vw] text-center mx-auto mb-10 px-4">
            <h1 class="jsx-8852884a3f26d3af unihead my-4 ">Key Projects</h1>
            <p class="jsx-8852884a3f26d3af unip ">From concept to completion, CivilMantra Infracon offers a
                comprehensive suite of services to turn your construction goals into reality, combining expert
                engineering with innovative solutions and a commitment to the highest quality standards.</p>
        </div>
        <div class="swiper mySwiper py-10 px-4">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div
                        class="jsx-8852884a3f26d3af group  perspective-1000 mt-10 mb-8 mx-auto md:h-[250px] md:w-[250px] h-[300px] w-[300px] sm:h-[300px] sm:w-[300px] lg:h-[290px] lg:w-[290px] xl:h-[350px] xl:w-[350px]">
                        <div class="jsx-8852884a3f26d3af rotate-container">
                            <div
                                class="jsx-8852884a3f26d3af front-side  duration-1000  bg-gray-100 rounded-lg shadow-lg relative flex items-center justify-center  ">
                                <img alt="Back Side Image" loading="lazy" decoding="async" data-nimg="fill"
                                    class="rounded-lg"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    src="yogesh/Screenshot%202024-11-28%20133505828a.png?url=%2Fimages%2FHome%2FBusinessHelp%2FScreenshot%202024-11-28%20133505.png&amp;w=3840&amp;q=75" />
                                <div
                                    class="jsx-8852884a3f26d3af absolute top-0 left-0 w-full h-full bg-black opacity-50 rounded-lg">
                                </div>
                                <div class="relative z-10 text-left" style="transform:translateY(-20px)">
                                    <ul class="jsx-8852884a3f26d3af list-none space-y-1 sm:space-y-2">
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Sector : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">Expressway
                                            </span></li>
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Client : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">MSRDC</span></li>
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Location : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">Mumbai -
                                                Nagpur</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="jsx-8852884a3f26d3af back-side bg-white p-4 sm:p-6 rounded-lg shadow-md border-t-8 border-brown">
                                <div class="flex flex-col justify-between h-full"
                                    style="transform:translateY(-20px)">
                                    <div class="jsx-8852884a3f26d3af ">
                                        <ul class="jsx-8852884a3f26d3af space-y-2 sm:space-y-3">
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 sm:mb-2 font-semibold">
                                                Department : <span
                                                    class="jsx-8852884a3f26d3af text-primary font-normal">MSRDC</span>
                                            </li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2">
                                                Lane 6, expandable to 8 </li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 sm:mb-2 font-semibold">
                                                Length : <span class="jsx-8852884a3f26d3af text-primary font-normal">701
                                                    Km</span></li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1  sm:mb-2 font-semibold">
                                                Duration : <span
                                                    class="jsx-8852884a3f26d3af text-primary font-normal">Dec,2022 -
                                                    Ongoing</span></li>
                                        </ul>
                                        <p
                                            class="jsx-8852884a3f26d3af text-gray-800 pt-3 font-medium self-end text-sm sm:text-base">
                                            The Mumbai-Nagpur Expressway spans 701 kilometers, linking Mumbai and Nagpur
                                            in Maharashtra, India. It features remarkable tunnels, including
                                            India&#x27;s widest at 17.5 meters and Maharashtra&#x27;s longest,
                                            stretching 8 kilometers.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="jsx-8852884a3f26d3af group  perspective-1000 mt-10 mb-8 mx-auto md:h-[250px] md:w-[250px] h-[300px] w-[300px] sm:h-[300px] sm:w-[300px] lg:h-[290px] lg:w-[290px] xl:h-[350px] xl:w-[350px]">
                        <div class="jsx-8852884a3f26d3af rotate-container">
                            <div
                                class="jsx-8852884a3f26d3af front-side  duration-1000  bg-gray-100 rounded-lg shadow-lg relative flex items-center justify-center  ">
                                <img alt="Back Side Image" loading="lazy" decoding="async" data-nimg="fill"
                                    class="rounded-lg"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    src="yogesh/DelhiFlyover_EDITEDba37.jpg?url=%2Fimages%2FHome%2FBusinessHelp%2FDelhiFlyover_EDITED.jpg&amp;w=3840&amp;q=75" />
                                <div
                                    class="jsx-8852884a3f26d3af absolute top-0 left-0 w-full h-full bg-black opacity-50 rounded-lg">
                                </div>
                                <div class="relative z-10 text-left" style="transform:translateY(-20px)">
                                    <ul class="jsx-8852884a3f26d3af list-none space-y-1 sm:space-y-2">
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Sector : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">Expressway</span>
                                        </li>
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Client : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">NHAI</span></li>
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Location : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">Delhi-Gurugram</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="jsx-8852884a3f26d3af back-side bg-white p-4 sm:p-6 rounded-lg shadow-md border-t-8 border-brown">
                                <div class="flex flex-col justify-between h-full"
                                    style="transform:translateY(-20px)">
                                    <div class="jsx-8852884a3f26d3af ">
                                        <ul class="jsx-8852884a3f26d3af space-y-2 sm:space-y-3">
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 sm:mb-2 font-semibold">
                                                Department : <span
                                                    class="jsx-8852884a3f26d3af text-primary font-normal">NHAI</span>
                                            </li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2">
                                                6-lane elevated expressway </li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 sm:mb-2 font-semibold">
                                                Length : <span class="jsx-8852884a3f26d3af text-primary font-normal">29
                                                    Km</span></li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1  sm:mb-2 font-semibold">
                                                Duration : <span
                                                    class="jsx-8852884a3f26d3af text-primary font-normal">March,2024 -
                                                    Ongoing</span></li>
                                        </ul>
                                        <p
                                            class="jsx-8852884a3f26d3af text-gray-800 pt-3 font-medium self-end text-sm sm:text-base">
                                            The Dwarka Expressway is a 29-kilometer, 8-lane highway linking Dwarka in
                                            Delhi to Gurgaon in Haryana. It features numerous flyovers, underpasses, and
                                            bridges.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div
                        class="jsx-8852884a3f26d3af group  perspective-1000 mt-10 mb-8 mx-auto md:h-[250px] md:w-[250px] h-[300px] w-[300px] sm:h-[300px] sm:w-[300px] lg:h-[290px] lg:w-[290px] xl:h-[350px] xl:w-[350px]">
                        <div class="jsx-8852884a3f26d3af rotate-container">
                            <div
                                class="jsx-8852884a3f26d3af front-side  duration-1000  bg-gray-100 rounded-lg shadow-lg relative flex items-center justify-center  ">
                                <img alt="Back Side Image" loading="lazy" decoding="async" data-nimg="fill"
                                    class="rounded-lg"
                                    style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
                                    sizes="100vw"
                                    src="yogesh/Screenshot%202024-11-27%201453241d09.png?url=%2Fimages%2FHome%2FBusinessHelp%2FScreenshot%202024-11-27%20145324.png&amp;w=3840&amp;q=75" />
                                <div
                                    class="jsx-8852884a3f26d3af absolute top-0 left-0 w-full h-full bg-black opacity-50 rounded-lg">
                                </div>
                                <div class="relative z-10 text-left" style="transform:translateY(-20px)">
                                    <ul class="jsx-8852884a3f26d3af list-none space-y-1 sm:space-y-2">
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Sector : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">Expressway</span>
                                        </li>
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Client : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">NHAI</span></li>
                                        <li
                                            class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 font-semibold text-gray-200">
                                            Location : <span
                                                class="jsx-8852884a3f26d3af text-gray-100 font-normal">Delhi-Dehradun</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div
                                class="jsx-8852884a3f26d3af back-side bg-white p-4 sm:p-6 rounded-lg shadow-md border-t-8 border-brown">
                                <div class="flex flex-col justify-between h-full"
                                    style="transform:translateY(-20px)">
                                    <div class="jsx-8852884a3f26d3af ">
                                        <ul class="jsx-8852884a3f26d3af space-y-2 sm:space-y-3">
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 sm:mb-2 font-semibold">
                                                Department : <span
                                                    class="jsx-8852884a3f26d3af text-primary font-normal">NHAI</span>
                                            </li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl font-semibold mb-1 sm:mb-2">
                                                6-Lane </li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1 sm:mb-2 font-semibold">
                                                Length : <span class="jsx-8852884a3f26d3af text-primary font-normal">210
                                                    Km</span></li>
                                            <li
                                                class="jsx-8852884a3f26d3af text-base sm:text-lg md:text-xl mb-1  sm:mb-2 font-semibold">
                                                Duration : <span
                                                    class="jsx-8852884a3f26d3af text-primary font-normal">January,2021 -
                                                    Ongoing</span></li>
                                        </ul>
                                        <p
                                            class="jsx-8852884a3f26d3af text-gray-800 pt-3 font-medium self-end text-sm sm:text-base">
                                            The expressway, spanning 210 kilometers, will connect Delhi, Uttar Pradesh,
                                            and Uttarakhand. Initially designed with six lanes, it can be expanded to
                                            eight lanes in the future.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div> -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
        const swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 30,
            navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
            },
            breakpoints: {
            640: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
            }
        });
        });
    </script>
    <div class="overflow-hidden pb-8 md:pb-12">
        <div class="flex animate-scroll space-x-4 md:space-x-8" style="will-change:transform">
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Adani_2012ec0a.png?url=%2Fimages%2FHome%2FAssociates%2FAdani_2012.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/ARCONS7f77.png?url=%2Fimages%2FHome%2FAssociates%2FARCONS.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Border_Roads_Organisation33b9.png?url=%2Fimages%2FHome%2FAssociates%2FBorder_Roads_Organisation.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/CDS103a.png?url=%2Fimages%2FHome%2FAssociates%2FCDS.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GHV14f7.png?url=%2Fimages%2FHome%2FAssociates%2FGHV.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GMDAa984.png?url=%2Fimages%2FHome%2FAssociates%2FGMDA.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MCG7062.png?url=%2Fimages%2FHome%2FAssociates%2FMCG.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MPRDCb391.jpg?url=%2Fimages%2FHome%2FAssociates%2FMPRDC.jpg&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/NHAI-Blackcd71.png?url=%2Fimages%2FHome%2FAssociates%2FNHAI-Black.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Sadbhav_Engineeringdda7.png?url=%2Fimages%2FHome%2FAssociates%2FSadbhav_Engineering.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Adani_2012ec0a.png?url=%2Fimages%2FHome%2FAssociates%2FAdani_2012.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/ARCONS7f77.png?url=%2Fimages%2FHome%2FAssociates%2FARCONS.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Border_Roads_Organisation33b9.png?url=%2Fimages%2FHome%2FAssociates%2FBorder_Roads_Organisation.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/CDS103a.png?url=%2Fimages%2FHome%2FAssociates%2FCDS.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GHV14f7.png?url=%2Fimages%2FHome%2FAssociates%2FGHV.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GMDAa984.png?url=%2Fimages%2FHome%2FAssociates%2FGMDA.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MCG7062.png?url=%2Fimages%2FHome%2FAssociates%2FMCG.png&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MPRDCb391.jpg?url=%2Fimages%2FHome%2FAssociates%2FMPRDC.jpg&amp;w=640&amp;q=75" /></div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/NHAI-Blackcd71.png?url=%2Fimages%2FHome%2FAssociates%2FNHAI-Black.png&amp;w=640&amp;q=75" />
            </div>
            <div
                class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Sadbhav_Engineeringdda7.png?url=%2Fimages%2FHome%2FAssociates%2FSadbhav_Engineering.png&amp;w=640&amp;q=75" />
            </div>
        </div>
    </div>
    <!-- <div class="overflow-hidden pb-8 md:pb-12">
        <div class="flex animate-scroll" style="will-change:transform">
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Adani_2012ec0a.png?url=%2Fimages%2FHome%2FAssociates%2FAdani_2012.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/ARCONS7f77.png?url=%2Fimages%2FHome%2FAssociates%2FARCONS.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Border_Roads_Organisation33b9.png?url=%2Fimages%2FHome%2FAssociates%2FBorder_Roads_Organisation.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/CDS103a.png?url=%2Fimages%2FHome%2FAssociates%2FCDS.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GHV14f7.png?url=%2Fimages%2FHome%2FAssociates%2FGHV.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GMDAa984.png?url=%2Fimages%2FHome%2FAssociates%2FGMDA.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MCG7062.png?url=%2Fimages%2FHome%2FAssociates%2FMCG.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MPRDCb391.jpg?url=%2Fimages%2FHome%2FAssociates%2FMPRDC.jpg&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/NHAI-Blackcd71.png?url=%2Fimages%2FHome%2FAssociates%2FNHAI-Black.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Sadbhav_Engineeringdda7.png?url=%2Fimages%2FHome%2FAssociates%2FSadbhav_Engineering.png&amp;w=640&amp;q=75" />
            </div>
            
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Adani_2012ec0a.png?url=%2Fimages%2FHome%2FAssociates%2FAdani_2012.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/ARCONS7f77.png?url=%2Fimages%2FHome%2FAssociates%2FARCONS.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Border_Roads_Organisation33b9.png?url=%2Fimages%2FHome%2FAssociates%2FBorder_Roads_Organisation.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/CDS103a.png?url=%2Fimages%2FHome%2FAssociates%2FCDS.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GHV14f7.png?url=%2Fimages%2FHome%2FAssociates%2FGHV.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/GMDAa984.png?url=%2Fimages%2FHome%2FAssociates%2FGMDA.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MCG7062.png?url=%2Fimages%2FHome%2FAssociates%2FMCG.png&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/MPRDCb391.jpg?url=%2Fimages%2FHome%2FAssociates%2FMPRDC.jpg&amp;w=640&amp;q=75" /></div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/NHAI-Blackcd71.png?url=%2Fimages%2FHome%2FAssociates%2FNHAI-Black.png&amp;w=640&amp;q=75" />
            </div>
            <div class="flex-shrink-0 bg-white rounded-3xl my-8 md:my-16 w-[120px] h-[120px] sm:w-[150px] sm:h-[150px] md:w-[200px] md:h-[200px] flex items-center justify-center mx-2">
                <img alt="Associate logo" loading="lazy" width="200" height="200" decoding="async" data-nimg="1"
                    class="object-contain w-[100px] h-[100px] sm:w-[130px] sm:h-[130px] md:w-[180px] md:h-[180px]"
                    style="color:transparent"
                    src="yogesh/Sadbhav_Engineeringdda7.png?url=%2Fimages%2FHome%2FAssociates%2FSadbhav_Engineering.png&amp;w=640&amp;q=75" />
            </div>
        </div>
    </div> -->

<style>
    @keyframes scroll {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(calc(-100% / 2));
        }
    }
    
    .animate-scroll {
        animation: scroll 20s linear infinite;
        width: calc(200%);
        display: flex;
    }
    
    .animate-scroll:hover {
        animation-play-state: paused;
    }
</style>
     @include('components/footer')