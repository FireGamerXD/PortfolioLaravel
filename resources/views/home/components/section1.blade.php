<section class="py-[20vh]">
    <style>
        swiper-container {
            width: 80vw;
            height: 100%;
        }
        swiper-slide {
            height: 300px;
            background: transparent;
            line-height: 300px;
            text-align: center;
        }
    </style>

    <div class="w-full flex justify-center xl:block hidden">
        <p class="text-white text-center text-5xl font-semibold border-b border-b-primary-color shadow-sm rounded-xl shadow-primary-color xl:block hidden w-[20vw] py-2 hover:scale-110 transition-all duration-150">My Skils</p>
        <p class="text-white font-semibold text-4xl border-b-4 border-primary-color py-1 w-fit xl:hidden block">My Skills</p>
    </div>

        <swiper-container title="Drag with your mouse" class="mySwiper cursor-grab active:cursor-grabbing xl:block hidden" watch-slides-progress="true" slides-per-view="5" autoplay-delay="1000" loop="true">
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/html_logo.png") }} alt="" class="w-[10vw]"></swiper-slide>
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/css_logo.png") }} alt="" class="w-[10vw]"></swiper-slide>
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/bootstrap_logo.png") }} alt="" class="w-[15vw]"></swiper-slide>
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/tailwind_logo.png") }} alt="" class="w-[10vw]"></swiper-slide>
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/js_logov2.webp") }} alt="" class="w-[10vw]"></swiper-slide>
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/react_logo.png") }} alt="" class="w-[10vw]"></swiper-slide>
            <swiper-slide class="flex items-center justify-center"><img src={{ asset("images/laravel_logo.png") }} alt="" class="w-[10vw]"></swiper-slide>
        </swiper-container>
    
        <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    
    </body>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
    
    <!-- Initialize Swiper -->
    <script>
        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
    
        const swiperEl = document.querySelector("swiper-container");
        swiperEl.addEventListener("autoplaytimeleft", (e) => {
            const [swiper, time, progress] = e.detail;
            progressCircle.style.setProperty("--progress", 1 - progress);
            progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        });
    </script>
</section>