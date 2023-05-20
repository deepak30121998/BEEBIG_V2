@include('Frontend.Front.Layouts.header')


<div class="full-width bg-gray-100">
    <div class="text-center px-5 pt-[74px] pb-[90px]">
        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-7">Our Blog
        </h1>
        <p class="font-bold font-chivo text-[14px] md:text-heading-6 text-gray-600 mx-auto md:max-w-[55ch]">From year to year we strive to invent the most innovative technology that is used by both small enterprises and space enterprises.
        </p>
    </div>
</div>


<div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] lg:mt-[138px]">

        <div class="lg:grid lg:grid-cols-3 lg:gap-x-5 xl:gap-x-[30px] gap-y-[50px] xl:gap-y-[87px]">



            @foreach ($Blogs as $blogs)
            <a class="block group" href="{{ route('front.blogs.detail', $blogs->slug) }}">
                <div class="flex items-center mb-[11px]">
                  <div class="bg-gray-500 rounded-full w-[3px] h-[3px] mr-[6px]"></div><span class="uppercase text-gray-500">Beebig Digital</span>
                </div>
                <p class="text-heading-4 font-chivo font-bold inline-block mb-[26px]">{{$blogs->title}}</p>
                <div class="relative mb-16">
                  <div class="relative">
                    <div class="pr-[26px] aspect-[430/275]"><img class="h-full w-full object-cover rounded-2xl z-10 relative" src="{{ $blogs->getFirstMediaUrl() }}" alt="Agon">
                    </div>
                    <div class="absolute w-full h-full left-0 z-0 top-0 translate-y-[30px] pl-[33px]">
                      <div class="w-full h-full rounded-2xl bg-opacity-50 transition-all duration-200 bg-bg-9 group-hover:-translate-x-[10px] group-hover:-translate-y-[10px]"></div>
                    </div>
                  </div>
                </div>
            </a>
            @endforeach



        </div>
        <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900 w-fit mx-auto mt-[70px] lg:mt-[112px]" href="#"><span class="block text-inherit w-full h-full rounded-[50px] text-lg font-chivo font-semibold">Load more posts</span><i> <img class="ml-[7px] w-[12px] filter-white group-hover:filter-black" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i></a></button>
      </div>




@include('Frontend.Front.Layouts.newsletter')
@include('Frontend.Front.Layouts.footer')
