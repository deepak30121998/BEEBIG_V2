<div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] md:mt-[150px]">
    <div class="rounded-2xl p-[30px] md:py-[53px] md:px-[48px] gap-5 mx-auto bg-orange-100 md:flex lg:gap-[40px] lg:h-[420px] xl:h-[390px] max-w-[1190px]" padding="px-[15px] py-[50px] md:px-[52px] md:py-[72px]">
      <div class="flex-1 mb-[30px]">
        <p class="text-capitalized uppercase text-gray-500 tracking-[2px] mb-[13px]">newsletter</p>
        <h4 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 mb-[20px]">Subscribe our newsletter</h4>
        <p class="text-text text-gray-500">By clicking the button, you are agreeing with our
        </p><a class="text-green-900" href="#">Term & Conditions</a>


        <form class="mt-[30px]">
            @csrf
          <div class="bg-white flex items-center justify-between p-3 rounded-[55px]">
            <input class="ml-[25px]" type="email" name="subscriber_email" id="subscriber_email" placeholder="Enter your mail ..." pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
            <button class="rounded-full bg-green-900 grid place-items-center w-[56px] h-[56px]" type="submit" onclick="addSubscriber();"> <img class="filter-white" src="assets/images/icons/icon-right.svg" alt=""></button>
          </div>
        </form>


      </div>
      <div class="relative flex-1"> <img class="h-full w-full object-cover rounded-2xl img-shadow lg:absolute lg:max-w-[332px] lg:h-[403px] lg:right-0" src="{{url('assets/images007/home/newsletter.png')}}" alt="Agon"><img class="h-full w-full object-cover absolute animate-float max-w-[225px] max-h-[170px] rounded-[14px] bottom-[-20px] left-[-10px]" src="{{url('assets/images007/home/Graph.png')}}" alt="Agon">
      </div>
    </div>
  </div>
