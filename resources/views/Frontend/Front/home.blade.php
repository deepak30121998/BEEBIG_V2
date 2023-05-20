@include('Frontend.Front.Layouts.header')

<div class="full-width banner-hero bg-orange-100 banner-1">
        <div class="px-[12px] md:px-[36px] xl:px-0 mt-0 z-10 relative mx-auto py-[60px] max-w-[1320px] lg:flex lg:items-center">
          <div class="flex-1">
            <h1 class="font-chivo font-bold lg:text-display-2 md:text-[64px] md:leading-[70px] sm:text-[50px] sm:leading-[58px] text-[40px] leading-[48px] mb-[40px]">Grow your online Business with <span class="text-green-900">BeeBig Digital</span>
            </h1>
            <p class="text-quote md:text-lead-lg text-gray-500 pr-[40px] lg:pr-[60px] mb-[40px]">Our specialist development team helps companies transform their concepts into reality.
            </p>
            <div class="flex items-center justify-start">
              <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 bg-black text-heading-6 tracking-wide mr-[22px] hover:translate-y-[-2px]" href="{{ route('front.contact') }}"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">REQUEST QUOTE</span><i> <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
            </div>
          </div>
          <div class="hidden relative flex-1 h-auto self-stretch lg:block">
            <div class="absolute w-full left-20 animate-hero-thumb-sm-animation bottom-[-60px] max-w-[526px]"><img class="h-full w-full object-cover" src="assets/images/hero-1.png" alt="Agon">
            </div>
            <div class="absolute opacity-80 animate-float max-w-[176px] bottom-[10%] -translate-x-1/3">
              <div class="relative bg-green-900 bg-opacity-80 rounded-2xl grid place-items-center"><img class="h-full w-full object-cover" src="assets/images/video-bg.png" alt="Agon">
                <p class="text-heading-4 absolute text-white font-chivo font-bold ml-[49px]">Watch intro video</p>
                <button class="rounded-full bg-white grid place-items-center absolute play-video w-[64px] h-[64px] left-[-15%]"><img src="assets/images/icons/icon-play.svg" alt="play button" width="15"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px]">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-x-[24px] lg:grid-cols-6"><a class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]" href="#"><img src="assets/images/partner-logo-1.svg" alt="partner logo"></a><a class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]" href="#"><img src="assets/images/partner-logo-2.svg" alt="partner logo"></a><a class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]" href="#"><img src="assets/images/partner-logo-3.svg" alt="partner logo"></a><a class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px]" href="#"><img src="assets/images/partner-logo-4.svg" alt="partner logo"></a><a class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px] md:col-start-2 lg:col-start-auto" href="#"><img src="assets/images/partner-logo-5.svg" alt="partner logo"></a><a class="transition-all duration-300 partner-item p-[15px] md:pr-[15px] xl:w-auto lg:w-[184px] hover:translate-y-[-3px] md:col-start-3 lg:col-start-auto" href="#"><img src="assets/images/partner-logo-6.svg" alt="partner logo"></a>
        </div>
      </div>
      <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px]">
        <div class="text-center">
          <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">We help you conquer the digital world!</h2>
          <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">Discover why we are globally respected and trusted.
          </p>
        </div>
        <div class="flex items-center gap-5 justify-center flex-wrap mx-auto w-full mt-[90px] sm:w-[80%] xl:w-full mb-[58px]">
          <p class="text-gray-600 font-bold bg-gray-100 rounded-full border-transparent transition-all duration-200 cursor-pointer tab-item font-chivo text-sm px-5 py-[10px] text-[14px] leading-[18px] lg:text-[18px] lg:leading-[22px] lg:px-[32px] lg:py-[22px] hover:bg-transparent hover:text-green-900 border-[2px] hover:border-green-900 hover:translate-y-[-2px] active" id="branding">Branding</p>
          <p class="text-gray-600 font-bold bg-gray-100 rounded-full border-transparent transition-all duration-200 cursor-pointer tab-item font-chivo text-sm px-5 py-[10px] text-[14px] leading-[18px] lg:text-[18px] lg:leading-[22px] lg:px-[32px] lg:py-[22px] hover:bg-transparent hover:text-green-900 border-[2px] hover:border-green-900 hover:translate-y-[-2px]" id="development">Development</p>
          <p class="text-gray-600 font-bold bg-gray-100 rounded-full border-transparent transition-all duration-200 cursor-pointer tab-item font-chivo text-sm px-5 py-[10px] text-[14px] leading-[18px] lg:text-[18px] lg:leading-[22px] lg:px-[32px] lg:py-[22px] hover:bg-transparent hover:text-green-900 border-[2px] hover:border-green-900 hover:translate-y-[-2px]" id="animation">Ecommerce Solution</p>
          <p class="text-gray-600 font-bold bg-gray-100 rounded-full border-transparent transition-all duration-200 cursor-pointer tab-item font-chivo text-sm px-5 py-[10px] text-[14px] leading-[18px] lg:text-[18px] lg:leading-[22px] lg:px-[32px] lg:py-[22px] hover:bg-transparent hover:text-green-900 border-[2px] hover:border-green-900 hover:translate-y-[-2px]" id="user-exp">SMO</p>
          <p class="text-gray-600 font-bold bg-gray-100 rounded-full border-transparent transition-all duration-200 cursor-pointer tab-item font-chivo text-sm px-5 py-[10px] text-[14px] leading-[18px] lg:text-[18px] lg:leading-[22px] lg:px-[32px] lg:py-[22px] hover:bg-transparent hover:text-green-900 border-[2px] hover:border-green-900 hover:translate-y-[-2px]" id="social-network">SEO</p>
          <p class="text-gray-600 font-bold bg-gray-100 rounded-full border-transparent transition-all duration-200 cursor-pointer tab-item font-chivo text-sm px-5 py-[10px] text-[14px] leading-[18px] lg:text-[18px] lg:leading-[22px] lg:px-[32px] lg:py-[22px] hover:bg-transparent hover:text-green-900 border-[2px] hover:border-green-900 hover:translate-y-[-2px]" id="marketing">Marketing</p>
        </div>
        <div class="tab-content lg:gap-[30px] lg:flex bg-bg-2 branding">
          <div class="p-5 md:p-[60px] lg:w-1/2">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">Brand it, Design it, Market it
            </h2>
            <p class="text-excerpt mb-[40px]">Create a new business model that combines high quality digital content and low cost human services in a unique package. The result will be a company that makes money by doing what it is best at - generating digital content, while it lets technology companies create the high value services it needs to get done on demand.</p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="relative lg:w-1/2"><img class="h-full w-full object-cover" src="{{url('assets/images007/home/branding.png')}}" alt="Agon"><img class="absolute top-0 right-0" src="assets/images/icons/pattern-3.svg" alt="pattern">
            {{-- <button class="rounded-full bg-white grid place-items-center absolute play-video w-[135px] h-[135px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0"><img src="assets/images/icons/icon-play.svg" alt="play button" width="30"></button> --}}
          </div>
        </div>
        <div class="tab-content lg:gap-[30px] lg:flex bg-bg-3 development !hidden">
          <div class="p-5 md:p-[60px] lg:w-1/2">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">Your website is your business card, do not underestimate it.
            </h2>
            <p class="text-excerpt mb-[40px]">The growing impact of technology in our everyday lives has made the world a global village. The need to online has pushed us to be more creative and innovative which in turn will benefits the next generation as they are empowered by technology.</p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="relative lg:w-1/2"><img class="h-full w-full object-cover" src="{{url('assets/images007/home/devlopment.png')}}" alt="Agon"><img class="absolute top-0 right-0" src="assets/images/icons/pattern-3.svg" alt="pattern">
            <button class="rounded-full bg-white grid place-items-center absolute play-video w-[135px] h-[135px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0"><img src="assets/images/icons/icon-play.svg" alt="play button" width="30"></button>
          </div>
        </div>
        <div class="tab-content lg:gap-[30px] lg:flex bg-bg-4 animation !hidden">
          <div class="p-5 md:p-[60px] lg:w-1/2">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">“Outthink. Outsell. Outshine.”
            </h2>
            <p class="text-excerpt mb-[40px]">Beebig Digital provides online solutions that help retailers to increase the traffic and fulfil their orders efficiently with few clicks. Their solutions include highly responsive commerce websites, mobile solutions and easy-to-use order management tools that help to build trusting relationships between the buyers and sellers.</p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="relative lg:w-1/2"><img class="h-full w-full object-cover" src="{{url('assets/images007/home/ecommerce-Solution.png')}}" alt="Agon"><img class="absolute top-0 right-0" src="assets/images/icons/pattern-3.svg" alt="pattern">
            <button class="rounded-full bg-white grid place-items-center absolute play-video w-[135px] h-[135px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0"><img src="assets/images/icons/icon-play.svg" alt="play button" width="30"></button>
          </div>
        </div>
        <div class="tab-content lg:gap-[30px] lg:flex bg-bg-5 user-exp !hidden">
          <div class="p-5 md:p-[60px] lg:w-1/2">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">We help small businesses grow their online presence and customer base with social media  </h2>
            <p class="text-excerpt mb-[40px]">Megaphones are so Nineteenth Century. Digital is about conversations, not broadcasts. Beebig Digital solution for small to mid-size businesses makes it easy to intelligently engage your customers and generate more revenue.</p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="relative lg:w-1/2"><img class="h-full w-full object-cover" src="{{url('assets/images007/home/smo.png')}}" alt="Agon"><img class="absolute top-0 right-0" src="assets/images/icons/pattern-3.svg" alt="pattern">
            <button class="rounded-full bg-white grid place-items-center absolute play-video w-[135px] h-[135px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0"><img src="assets/images/icons/icon-play.svg" alt="play button" width="30"></button>
          </div>
        </div>
        <div class="tab-content lg:gap-[30px] lg:flex bg-bg-6 social-network !hidden">
          <div class="p-5 md:p-[60px] lg:w-1/2">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">100% tested & proven method, 1st page on Google
            </h2>
            <p class="text-excerpt mb-[40px]"> Your ads can be read by people who need help. Tiny ads are not accessible, but Beebig Digital solves that problem. Every word is worth a click. Every click is worth an appointment. Every appointment is worth trust and success.</p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="relative lg:w-1/2"><img class="h-full w-full object-cover" src="{{url('assets/images007/home/seo.png')}}" alt="Agon"><img class="absolute top-0 right-0" src="assets/images/icons/pattern-3.svg" alt="pattern">
            <button class="rounded-full bg-white grid place-items-center absolute play-video w-[135px] h-[135px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0"><img src="assets/images/icons/icon-play.svg" alt="play button" width="30"></button>
          </div>
        </div>
        <div class="tab-content lg:gap-[30px] lg:flex bg-bg-7 marketing !hidden">
          <div class="p-5 md:p-[60px] lg:w-1/2">
            <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">Let's be together and grow our business
            </h2>
            <p class="text-excerpt mb-[40px]">Marketing strategies are changing. Where for example the old way of doing marketing was about spending more money on advertising, the new way is about being your own best customer. The new way is about giving for getting.</p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="relative lg:w-1/2"><img class="h-full w-full object-cover" src="{{url('assets/images007/home/marketing.png')}}" alt="Agon"><img class="absolute top-0 right-0" src="assets/images/icons/pattern-3.svg" alt="pattern">
            <button class="rounded-full bg-white grid place-items-center absolute play-video w-[135px] h-[135px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:left-0"><img src="assets/images/icons/icon-play.svg" alt="play button" width="30"></button>
          </div>
        </div>
      </div>
      <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] lg:mt-[100px]">
        <div class="text-center mb-[70px]">
          <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">Have an idea but need help with development?</h2>
          <p class="text-quote md:text-lead-lg text-gray-600 mx-auto max-w-[976px]">Our team of developers can take you from concept to real-life product.
          </p>
        </div>
        <div class="lg:flex lg:gap-5 xl:gap-[30px]">
          <div class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] relative mb-5 flex flex-col justify-between transition-all duration-300 bg-bg-5 hover:translate-y-[-2px]">
            <div><img class="h-full w-full object-cover mb-[30px] max-w-[80px] max-h-[80px]" src="assets/images/icons/icon-flower.svg" alt="icon">
              <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">Planning strategy
              </h2>
              <p class="text-excerpt text-gray-600 mb-[30px]">Beebig Digital is here to make your vision come to life. To ensure that your website is delivered with the highest quality and meets all of your requirements, we will follow a strict process to make sure everything is accounted for & that any changes to your design are reflected across all areas of the site. We will then create a detailed design & development plan based on your specifications and goals.</p>
            </div>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit hover:translate-y-[-3px]" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button><img class="absolute bottom-0 right-0 z-0 max-w-[90px] md:max-w-[144px] max-h-[90px] md:max-h-[144px] translate-x-[20%] translate-y-[20%] xl:translate-x-0 xl:translate-y-0" src="assets/images/icons/icon-flower-white.svg" alt="icon">
          </div>
          <div class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] relative mb-5 flex flex-col justify-between transition-all duration-300 bg-bg-9 hover:translate-y-[-2px]">
            <div><img class="h-full w-full object-cover mb-[30px] max-w-[80px] max-h-[80px]" src="assets/images/icons/icon-map.svg" alt="icon">
              <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">Design & Develop
              </h2>
              <p class="text-excerpt text-gray-600 mb-[30px]">Beebig Digital is specializing in creating stunning websites & digital products for businesses. We are not just a website design company, we build new concepts and ideas around your business or project. We provide comprehensive digital marketing services that are tailored to help brands grow their online presence and reach their target audience. Our team of experienced professionals are committed to helping you create an effective digital marketing.</p>
            </div>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit hover:translate-y-[-3px]" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button><img class="absolute bottom-0 right-0 z-0 max-w-[90px] md:max-w-[144px] max-h-[90px] md:max-h-[144px] translate-x-[20%] translate-y-[20%] xl:translate-x-0 xl:translate-y-0" src="assets/images/icons/icon-map-white.svg" alt="icon">
          </div>
          <div class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] relative mb-5 flex flex-col justify-between transition-all duration-300 bg-bg-2 hover:translate-y-[-2px]">
            <div><img class="h-full w-full object-cover mb-[30px] max-w-[80px] max-h-[80px]" src="assets/images/icons/icon-pine.svg" alt="icon">
              <h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[30px]">Launch Successfully
              </h2>
              <p class="text-excerpt text-gray-600 mb-[30px]">To ensure that your website is delivered with the highest quality and meets all of your requirements, we will follow a strict process to make sure everything is accounted for and that any changes to your design are reflected across all areas of the site. We’ll review your existing website, if any, and research your industry, competitors, and target market to determine the best approach for your website.</p>
            </div>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-white text-gray-900 hover:bg-gray-900 hover:text-white w-fit hover:translate-y-[-3px]" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button><img class="absolute bottom-0 right-0 z-0 max-w-[90px] md:max-w-[144px] max-h-[90px] md:max-h-[144px] translate-x-[20%] translate-y-[20%] xl:translate-x-0 xl:translate-y-0" src="assets/images/icons/icon-pine-white.svg" alt="icon">
          </div>
        </div>
      </div>
      <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] lg:mt-[100px]">
        <div class="lg:grid lg:grid-cols-2 lg:gap-[30px] xl:gap-[95px]">
          <div class="relative"><img class="rounded-2xl mb-[30px] lg:mb-0 lg:flex-1" src="assets/images007/home/specialized-section.png" alt="Agon"></div>
          <div class="flex-1 order-1"><span class="font-chivo inline-block bg-bg-2 text-orange-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[22px]">What We Do, What You Get</span>
            <h3 class="font-chivo font-bold lg:text-heading-1 md:text-[46px] md:leading-[52px] text-[35px] leading-[44px] mb-[22px]">We are specialized in all aspects of digital world. </h3>
            <p class="text-quote md:text-lead-lg text-gray-600 mb-[50px]">We help businesses in the digital management of their operations. From e-commerce, to websites, to the right technology and marketing campaigns - we take care of it all!
            </p>
            <div class="border border-green-900 border-dashed mb-[48px]"></div>
            <div class="md:grid md:grid-cols-2 md:gap-y-[34px] lg:gap-x-[70px]">
              <div class="mb-[30px] lg:mb-0">
                <div class="flex items-center mb-[17px]"><img class="mr-[9px]" src="assets/images/icons/icon-leaf.svg" alt="leaf icon">
                  <h4 class="text-heading-6 font-chivo font-bold">Web Development</h4>
                </div>
                <p class="text-excerpt text-gray-600">Beebig Digital is your one-stop solution for a wide range of web solutions.</p>
              </div>
              <div class="mb-[30px] lg:mb-0">
                <div class="flex items-center mb-[17px]"><img class="mr-[9px]" src="assets/images/icons/icon-leaf.svg" alt="leaf icon">
                  <h4 class="text-heading-6 font-chivo font-bold">Digital Marketing</h4>
                </div>
                <p class="text-excerpt text-gray-600">We can help your company better reach consumers and promote your products, services, or brand on the internet.</p>
              </div>
              <div class="mb-[30px] lg:mb-0">
                <div class="flex items-center mb-[17px]"><img class="mr-[9px]" src="assets/images/icons/icon-leaf.svg" alt="leaf icon">
                  <h4 class="text-heading-6 font-chivo font-bold">Ecommerce Solution</h4>
                </div>
                <p class="text-excerpt text-gray-600">We work with small to large businesses to grow your business</p>
              </div>
              <div class="mb-[30px] lg:mb-0">
                <div class="flex items-center mb-[17px]"><img class="mr-[9px]" src="assets/images/icons/icon-leaf.svg" alt="leaf icon">
                  <h4 class="text-heading-6 font-chivo font-bold">Search Engine Optimization</h4>
                </div>
                <p class="text-excerpt text-gray-600">Beebig Digital is an online marketing tool that helps businesses to get found by the largest search engines.</p>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="full-width bg-orange-100">
        <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] flex flex-col gap-6 mx-auto py-[98px] lg:flex-row max-w-[1320px]">
          <div class="flex-[1.36] mr-[90px]"><span class="font-chivo inline-block bg-bg-9 text-gray-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[36px]">Built Exclusively For You</span>
            <h1 class="font-chivo text-[35px] leading-[44px] sm:text-[46px] sm:leading-[52px] md:text-heading-1 font-extrabold mb-[25px]">Don’t take our word for it. See what our clients say.
            </h1>
            <p class="text-quote md:text-lead-lg text-gray-600 mb-[55px]">Aliquam a augue suscipit, luctus neque purus ipsum neque at dolor primis libero tempus, blandit
            </p>
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-100 text-gray-900 hover:bg-gray-900 hover:text-white w-fit" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Learn More</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
          </div>
          <div class="flex flex-col gap-8 flex-1">
            <div class="bg-white transition-all duration-300 px-[35px] pt-[33px] pb-[28px] hover:translate-y-[-3px]">
              <p class="text-text mb-[15px]">&quot;No matter where you go, It's is the coolest, most happening thing around! Not able to tell you how happy I am with it.&quot;
              </p>
              <div class="flex items-center gap-6"><img class="h-full w-full object-cover rounded-full max-w-[80px]" src="assets/images/avatar-9.png" alt="avatar">
                <div>
                  <p class="line-clamp-2 font-bold mb-[3px] text-lead">Jenny Wilson</p>
                  <p class="text-md text-gray-500">Biffco Enterprises Ltd.</p>
                </div>
              </div>
            </div>
            <div class="bg-white transition-all duration-300 px-[35px] pt-[33px] pb-[28px] hover:translate-y-[-3px]">
              <p class="text-text mb-[15px]">&quot;Wow what great service, I love it! It's is the most valuable business resource we have EVER purchased. We can't understand how we've been living without it. I couldn't have asked for more than this.&quot;
              </p>
              <div class="flex items-center gap-6"><img class="h-full w-full object-cover rounded-full max-w-[80px]" src="assets/images/avatar-10.png" alt="avatar">
                <div>
                  <p class="line-clamp-2 font-bold mb-[3px] text-lead">Jenny Wilson</p>
                  <p class="text-md text-gray-500">Biffco Enterprises Ltd.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-8 flex-1">
            <div class="bg-white transition-all duration-300 px-[35px] pt-[33px] pb-[28px] hover:translate-y-[-3px]">
              <p class="text-text mb-[15px]">&quot;Your company is truly upstanding and is behind its product 100%. It's the perfect solution for our business. It has really helped our business. Needless to say we are extremely satisfied with the results. &quot;
              </p>
              <div class="flex items-center gap-6"><img class="h-full w-full object-cover rounded-full max-w-[80px]" src="assets/images/avatar-11.png" alt="avatar">
                <div>
                  <p class="line-clamp-2 font-bold mb-[3px] text-lead">Jenny Wilson</p>
                  <p class="text-md text-gray-500">Biffco Enterprises Ltd.</p>
                </div>
              </div>
            </div>
            <div class="bg-white transition-all duration-300 px-[35px] pt-[33px] pb-[28px] hover:translate-y-[-3px]">
              <p class="text-text mb-[15px]">&quot;It's is both attractive and highly adaptable. It's exactly what I've been looking for. Definitely worth the investment.&quot;
              </p>
              <div class="flex items-center gap-6"><img class="h-full w-full object-cover rounded-full max-w-[80px]" src="assets/images/avatar-12.png" alt="avatar">
                <div>
                  <p class="line-clamp-2 font-bold mb-[3px] text-lead">Jenny Wilson</p>
                  <p class="text-md text-gray-500">Biffco Enterprises Ltd.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- Blog Section Start -->

      <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] lg:mt-[140px]">
        <div class="text-center mb-[40px] lg:mb-[73px]">
          <h2 class="font-bold font-chivo mx-auto text-[35px] leading-[44px] md:text-[46px] md:leading-[52px] lg:text-heading-1 text-gray-900 mb-5 md:mb-[30px] max-w-[725px]">From Our Blog</h2>
        </div>


        <div class="grid grid-cols-1 gap-[30px] md:grid-cols-2 gap-y-[60px] lg:grid-cols-3">



          @foreach ($blog as $article)
            <a href="{{ route('front.blogs.detail', $article->slug) }}"><div class="relative cursor-pointer">
                <div class="relative">
                <div class="pr-[26px] aspect-[458/557]"><img class="h-full w-full object-cover rounded-2xl z-10 relative" src="{{ $article->getFirstMediaUrl() }}" alt="Agon">
                </div>
                <div class="absolute w-full h-full left-0 z-0 top-0 translate-y-[30px] pl-[33px]">
                    <div class="w-full h-full rounded-2xl bg-opacity-50 transition-all duration-200 bg-bg-2 group-hover:-translate-x-[10px] group-hover:-translate-y-[10px]"></div>
                </div>
                </div>
                <h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 mt-[45px] md:mt-[73px] mb-[18px]">{{$article->title}}</h3>
                <p class="text-text text-gray-500 mb-[15px]">{{substr(preg_replace("/\r\n|\r|\n/",'',strip_tags(html_entity_decode($article->description))), 0, 200)}}...</p>
                <div class="flex items-center gap-[15px]"><img class="h-full w-full object-cover rounded-full max-w-[60px]" src="{{url('assets/images007/logo/black-logo.png')}}" alt="avatar">
                <div>
                    <p class="line-clamp-2 font-bold mb-[3px] font-chivo lg:text-heading-6">BeeBig Digital</p>
                    <p class="font-bold text-sm">{{date("M d Y", strtotime($article->created_at))}}</p>
                </div>
                </div>
            </div></a>
          @endforeach










          <div class="flex flex-col gap-8 md:col-span-2 lg:col-span-1">

            @foreach ($post as $blogs)

            <a href="{{ route('front.blogs.detail', $blogs->slug) }}">
            <div class="flex items-center gap-6 pb-12 border-b border-gray-200 justify-between cursor-pointer">
                <div class="flex-1">
                  <p class="font-bold font-chivo text-[14px] md:text-heading-6 line-clamp-2 mb-[18px]">{{$blogs->title}}</p>
                  <div class="flex items-center gap-[11px]"><img class="h-full w-full object-cover rounded-full max-w-[42px]" src="{{url('assets/images007/logo/black-logo.png')}}" alt="BeeBig Digital">
                    <div>
                      <p class="line-clamp-2 font-bold mb-[3px]">Jane Cooper</p>
                      <p class="font-bold text-sm">{{date("M d Y", strtotime($blogs->created_at))}}</p>
                    </div>
                  </div>
                </div>
                <div class="relative flex-1 max-w-[133px]">
                  <div class="pr-[13px] aspect-square"><img class="h-full w-full object-cover rounded-2xl z-10 relative" src="{{ $blogs->getFirstMediaUrl() }}" alt="Agon">
                  </div>
                  <div class="absolute w-full h-full left-0 z-0 top-0 translate-y-[13px] pl-[13px]">
                    <div class="w-full h-full rounded-2xl bg-opacity-50 transition-all duration-200 bg-bg-9 group-hover:-translate-x-[10px] group-hover:-translate-y-[10px]"></div>
                  </div>
                </div>
              </div>
            </a>

            @endforeach

        </div>
        </div>
      </div>

      <!-- Blog Section end -->

     <!-- Form Section Start -->

     <div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] lg:mt-[150px]">
        <div class="bg-gray-100 relative p-[40px] md:pt-[91px] md:pr-[98px] md:pb-[86px] md:pl-[92px] rounded-[58px]">
          <div class="mx-auto relative max-w-[1320px]"><img class="absolute right-0 max-w-[129px] top-[-50px]" src="assets/images/mail.png" alt="mail image">
            <p class="text-capitalized text-gray-500 uppercase tracking-[2px] mb-[15px]">Contact us</p>
            <h2 class="font-bold font-chivo text-[25px] leading-[30px] md:text-heading-3 mb-[22px]">Have an project in mind?
            </h2>
            <p class="text-text text-gray-600 mb-[30px] md:mb-[60px]">The right move at the right time saves your investment. live the dream of expanding your business.
            </p>
            <div class="flex flex-col gap-8 mb-[15px] md:mb-[25px] lg:flex-row lg:gap-[50px] xl:gap-[98px]">
              <div>
                <div class="flex gap-[13px] mb-[15px] md:mb-[25px]"> <i> <img src="assets/images/icons/icon-home-fill.svg" alt="home icon"></i>
                  <p class="text-heading-6 font-bold font-chivo">Agon Studio</p>
                </div>
                <p class="text-text text-gray-600">4517 Washington Ave.
                </p>
                <p class="text-text text-gray-600 mb-[10px] md:mb-[16px]">Manchester, Kentucky 39495
                </p>
                <p class="text-text text-gray-600 underline">(239) 555-0108
                </p>
                <p class="text-text text-gray-600 underline"><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="4b2824253f2a283f0b2a2c242565282426">[email&#160;protected]</a>
                </p>
              </div>
              <form class="flex-1" action="{{ route('contact.store') }}" method="POST" id="register-form">
                @csrf
              <div class="flex flex-col gap-6 mb-6 lg:flex-row xl:gap-[30px]">

                <input class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]" type="text" placeholder="Enter your name" name="name" value="{{ old('name') }}" >
                    @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                <input class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]" type="text" placeholder="Company (optional)" name="company_name" value="{{ old('company_name') }}">
                    @error('company_name')
                        <div class="alert alert-danger" >
                            {{$message}}
                        </div>
                    @enderror
              </div>
              <div class="flex flex-col gap-6 mb-6 lg:flex-row xl:gap-[30px]">
                <input class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]" type="email" placeholder="Your email" name="email" value="{{ old('email') }}" >
                    @error('email')
                        <div class="alert alert-danger" >
                            {{$message}}
                        </div>
                    @enderror


                <input class="outline-none flex-1 placeholder:text-gray-400 placeholder:text-md placeholder:font-chivo py-5 px-[30px]" type="number" placeholder="Phone number" name="mobile" value="{{ old('mobile') }}" >
                    @error('mobile')
                        <div class="alert alert-danger" >
                            {{$message}}
                        </div>
                    @enderror

            </div>
              <textarea class="w-full py-5 resize-none outline-0 px-[30px] max-h-[150px] mb-[35px] md:mb-[56px]" cols="100" rows="10" placeholder="Tell us about your Project" name="project_description" value="{{ old('project_description') }}"></textarea>
                    @error('project_description')
                        <div class="alert alert-danger" >
                            {{$message}}
                        </div>
                    @enderror

               <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
                    @error('g-recaptcha-response')
                        <div class="alert alert-danger" style="color: red;">
                            {{$message}}
                        </div>
                    @enderror

              <div class="flex flex-col gap-5">
                <button class="flex items-center transition-colors duration-200 px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] font-chivo font-semibold text-md md:text-lg text-white bg-gray-900 w-fit" onclick="onClick(event)" type="button">Send Message<i> <img class="ml-[7px] w-[12px] filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i>
                </button>
                <p class="text-md text-gray-500">By clicking contact us button, you agree our terms and policy,</p>


            </div>
            </form>
            </div>
          </div>
        </div>
      </div>

     <!-- Form Section End -->


@include('Frontend.Front.Layouts.newsletter')
@include('Frontend.Front.Layouts.footer')

