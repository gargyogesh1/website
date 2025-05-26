@include('components/header')

    <div class="relative flex flex-col justify-center items-center text-center mb-0 max-sm:px-4 text-white "><img
            alt="Background" loading="lazy" decoding="async" data-nimg="fill"
            class="absolute top-0 left-0 w-full h-full -z-10"
            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
            sizes="100vw"
            src="yogesh/scott-graham-5fNmWej4tAA-unsplash%20(1)a6d8.jpg?url=%2Fimages%2FProjects%2Fscott-graham-5fNmWej4tAA-unsplash%20(1).jpg&amp;w=3840&amp;q=75" />
        <div class=" absolute top-[1px] left-0 w-full h-full bg-black opacity-60"></div>
        <div class="max-sm:w-full max-[1024px]:h-[35vh] max-[1024px]:w-[90%] max-sm:h-[40vh] w-[60%] h-[65vh] flex flex-col justify-center items-center max-sm:justify-start text-center gap-4 overflow-hidden z-10"
            style="will-change:opacity,transform;transform:translateY(-20px)">
            <p
                class="max-sm:text-3xl max-[1024px]:text-4xl max-sm:pt-0 pt-20  text-6xl font-semibold max-[1024px]:pt-0 max-md:mt-36 md:mt-8">
                Projects</p>
        </div>
    </div>
    <div class="px-4 md:px-16 max-w-[88vw] mx-auto mb-10">
        <div class="mb-4 space-x-4"><button
                class="px-4 py-2 mt-10 rounded transition duration-300 ease-in-out bg-blue-700 scale-110 -translate-y-1 text-white">DPR
                Projects</button></div>
        <div class="output">
            <h2 class="text-5xl font-bold my-10 text-center">DPR Projects</h2>
            <div class="overflow-x-auto">
                <table class="table-auto w-full text-left border-collapse">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
     @include('components/footer')