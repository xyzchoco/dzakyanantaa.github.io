<div x-data="carousel({          
    // Sets the time between each slides in milliseconds
    intervalTime: 4500,
    slides: [                
        {
            imgSrc: 'img/astech1.jpg',
            imgAlt: 'Vibrant abstract painting with swirling blue and light pink hues on a canvas.',  
            title: 'Front end developers',
            description: 'The architects of the digital world, constantly battling against their mortal enemy – browser compatibility.',    
        },                
        {                    
            imgSrc: 'img/astech1.jpg',                    
            imgAlt: 'Vibrant abstract painting with swirling red, yellow, and pink hues on a canvas.',  
            title: 'Back end developers',
            description: 'Because not all superheroes wear capes, some wear headphones and stare at terminal screens',         
        },                
        {                    
            imgSrc: 'img/astech1.jpg',                    
            imgAlt: 'Vibrant abstract painting with swirling blue and purple hues on a canvas.',    
            title: 'Full stack developers',
            description: 'Where &quot;burnout&quot; is just a fancy term for &quot;Tuesday&quot;.',
        },            
    ],             
})" x-init="autoplay" class="relative w-full rounded-md overflow-hidden">
   
    <!-- slides -->
    <!-- Change min-h-[50svh] to your preferred height size -->
    <div class="relative min-h-[65svh] w-full">
        <template x-for="(slide, index) in slides">
            <div x-cloak x-show="currentSlideIndex == index + 1" class="absolute inset-0" x-transition.opacity.duration.1000ms>
                
                <!-- Title and description -->
                <div class="lg:px-32 lg:py-14 absolute inset-0 z-10 flex flex-col items-center justify-end gap-2 bg-gradient-to-t from-slate-900/85 to-transparent px-16 py-12 text-center">
                    <h3 class="w-full lg:w-[80%] text-balance text-2xl lg:text-3xl font-bold text-white" x-text="slide.title" x-bind:aria-describedby="'slide' + (index + 1) + 'Description'"></h3>
                    <p class="lg:w-1/2 w-full text-pretty text-sm text-slate-300" x-text="slide.description" x-bind:id="'slide' + (index + 1) + 'Description'"></p>
                </div>

                <img class="absolute w-full h-full inset-0 object-cover text-slate-700 dark:text-slate-300" x-bind:src="slide.imgSrc" x-bind:alt="slide.imgAlt" />
            </div>
        </template>
    </div>
    
    <!-- indicators -->
    <div class="absolute rounded-xl bottom-3 md:bottom-5 left-1/2 z-20 flex -translate-x-1/2 gap-4 md:gap-3 px-1.5 py-1 md:px-2" role="group" aria-label="slides" >
        <template x-for="(slide, index) in slides">
            <button class="size-2 cursor-pointer rounded-full transition" x-on:click="(currentSlideIndex = index + 1), setAutoplayIntervalTime(autoplayIntervalTime)" x-bind:class="[currentSlideIndex === index + 1 ? 'bg-slate-300' : 'bg-slate-300/50']" x-bind:aria-label="'slide ' + (index + 1)"></button>
        </template>
    </div>
</div>
    
<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('carousel', (carouselData = {
            slides: [],
            intervalTime: 0,
        },) => ({
            slides: carouselData.slides,
            autoplayIntervalTime: carouselData.intervalTime,
            currentSlideIndex: 1,
            isPaused: false,
            autoplayInterval: null,
            previous() {
                if (this.currentSlideIndex > 1) {
                    this.currentSlideIndex = this.currentSlideIndex - 1
                } else {
                    // If it's the first slide, go to the last slide           
                    this.currentSlideIndex = this.slides.length
                }
            },
            next() {
                if (this.currentSlideIndex < this.slides.length) {
                    this.currentSlideIndex = this.currentSlideIndex + 1
                } else {
                    // If it's the last slide, go to the first slide    
                    this.currentSlideIndex = 1
                }
            },
            autoplay() {
                this.autoplayInterval = setInterval(() => {
                    if (! this.isPaused) {
                        this.next()
                    }
                }, this.autoplayIntervalTime)
            },
            // Updates interval time   
            setAutoplayIntervalTime(newIntervalTime) {
                clearInterval(this.autoplayInterval)
                this.autoplayIntervalTime = newIntervalTime
                this.autoplay()
            },
        }))
    })
</script>