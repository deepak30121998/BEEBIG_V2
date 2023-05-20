@include('Frontend.Front.Layouts.header')


<div class="full-width relative">
    <div class="aspect-[384/91] h-[350px] md:h-[455px]"><img class="h-full w-full object-cover" src="{{url('assets/images/hero-single.png')}}" alt="Agon">
    </div>
    <div class="absolute w-full h-full bg-gray-900 top-0 opacity-50"></div>
    <div class="absolute text-center top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2"><span class="font-chivo inline-block bg-bg-6 text-green-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px] mb-[41px]">Beebig Digital</span>
      <h1 class="font-chivo text-[35px] leading-[44px] sm:text-[46px] sm:leading-[52px] md:text-heading-1 font-semibold text-white w-[18ch] lg:w-[25ch]">{{ $post->title }}
      </h1>
    </div>
</div>

<div class="px-[12px] md:px-[36px] xl:px-0 mt-[70px] mx-auto text-md text-gray-500 relative blog-content max-w-[830px] text-[14px] leading-[25px] md:text-[18px] md:leading-[32px]">
    <div class="flex flex-col items-center gap-6 absolute top-0 follow-scroll translate-x-[-106px]">
      <p class="text-heading-6 font-bold font-chivo text-gray-400">Share</p><a href="#"> <img src="{{url('assets/images/icons/icon-fb.svg')}}" alt=""></a><a href="#"> <img src="{{url('assets/images/icons/icon-twitter-black.svg')}}" alt=""></a><a href="#"> <img src="{{url('assets/images/icons/icon-pi.svg')}}" alt=""></a>
    </div>

    <div class="flex items-center justify-between mb-7 md:mb-[57px]">
      <div class="flex items-center gap-[15px]"><img class="h-full w-full object-cover rounded-full max-w-[55px]" src="{{url('assets/images007/logo/black-logo.png')}}" alt="avatar">
        <div>
          <p class="line-clamp-2 font-bold mb-[3px] text-gray-900 text-heading-6">Beebig Digital</p>
          <p class="text-sm font-bold">{{ date('j F, Y', strtotime($post->created_at)) }}</p>
        </div>
      </div>
      <span class="font-chivo inline-block bg-bg-6 text-green-900 py-[14px] px-[28px] rounded-[50px] text-[14px] leading-[14px]">{{count($post->comments)}} comments</span>
    </div>


    <div class="mb-6 md:mb-9"><img class="h-full w-full object-cover" src="{{ $post->getFirstMediaUrl() }}" alt="post image">
    </div>







    <p class="mb-[40px] md:mb-[71px]">{!!html_entity_decode($post->description)!!}</p>


    <div class="w-full bg-gray-200 mb-7 h-[1px] md:mb-10"></div>

    @include('Frontend.Front.comments', ['comments'=>$post->comments])


  </div>

@include('Frontend.Front.Layouts.footer')
