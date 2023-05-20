
{{-- Comment Form Start --}}

<h3 class="font-bold font-chivo text-[20px] leading-[26px] md:text-heading-4 text-gray-900 mb-[30px] md:mb-[42px]">Leave a comment
</h3>

<form>
  <textarea class="border border-gray-200 resize-none rounded-2xl w-full max-h-[140px] p-[26px] mb-[33px]" id="comment" name="comment" placeholder="Write a comment"></textarea>
  <div class="flex items-start justify-between w-full flex-col gap-8 md:flex-row">
    <div class="flex items-start gap-3">
      <div class="relative w-7 h-7 transition-all duration-200 p-[5px] hover:bg-gray-200 rounded-[4px]">
        <input class="opacity-0 cursor-pointer relative z-10 peer" id="post-comment" type="checkbox" name="post-comment"><img class="absolute hidden top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 peer-checked:block" src="{{url('assets/images/icons/icon-check-gray.svg')}}" alt="checked icon">
        <div class="absolute bg-transparent pointer-events-none z-0 border-[2px] rounded-[4px] w-[18px] h-[18px] top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 peer-checked:border-transparent border-[#3B4256]"></div>
      </div><span class="text-md text-gray-400 max-w-[40ch]">Save my name, email, and website in this browser for the next time I comment.</span>
    </div>
    <button class="flex items-center transition-colors duration-200 px-5 py-[14px] rounded-[8px] text-text bg-gray-900 text-white hover:bg-gray-100 hover:text-gray-900" type="submit">Post comment
    </button>
  </div>
</form>

<div class="w-full bg-gray-200 mb-7 h-[1px] md:mb-10"></div>
{{-- Comment Listing Start --}}
<h2 class="font-bold font-chivo text-[28px] leading-[32px] md:text-heading-2 text-gray-900 mb-[35px] md:mb-[52px]">Comments
</h2>
<div class="md:mb-[120px] mb-[60px]">

  @foreach ($comments as $comment)
  <div class="flex items-start flex-col gap-5 md:gap-[100px] mb-[30px] md:mb-[42px] md:flex-row">
    <div class="flex items-center gap-[15px] w-[190px]"><img class="h-full w-full object-cover rounded-full max-w-[55px]" src="{{url('assets/images/avatar-11.png')}}" alt="avatar">
      <div>
        <p class="line-clamp-2 font-bold mb-[3px] text-gray-900 text-heading-6">{{ $comment->users->name }}</p>
        <p class="text-sm font-bold">{{ date('j F, Y', strtotime($comment->created_at)) }}</p>
      </div>
    </div>
    <p class="bg-gray-100 rounded-2xl rounded-tl-none pt-7 pl-7 text-gray-900 flex-1 pr-[15px] pb-[30px]">{{ $comment->comment }}</p>
  </div>

        @if (count($comment->replies) > 0)
            <h3 class="font-bold font-chivo text-[22px] leading-[32px] md:text-heading-2 text-gray-900 mb-[20px] md:mb-[52px]" style="font-size: 28px;padding-left: 80px;">Replies<i><img class="icon-caret group-hover:filter-green" src="{{url('assets/images/icons/icon-caret.svg')}}" alt="caret"></i></h3>

            @foreach ($comment->replies as $reply)
            <div class="flex items-start flex-col gap-5 mb-[30px] md:mb-[42px] md:flex-row" style="padding-left: 150px;">
                <div class="flex items-center gap-[15px] w-[190px]"><img class="h-full w-full object-cover rounded-full max-w-[55px]" src="{{url('assets/images/avatar-11.png')}}" alt="avatar">
                  <div>
                    <p class="line-clamp-2 font-bold mb-[3px] text-gray-900 text-heading-6">{{ $reply->users->name }}</p>
                    <p class="text-sm font-bold">{{ date('j F, Y', strtotime($reply->created_at)) }}</p>
                  </div>
                </div>
                <p class="bg-gray-100 rounded-2xl rounded-tl-none pt-7 pl-7 text-gray-900 flex-1 pr-[15px] pb-[30px]" style="background-color: #ff4f4f3b;">{{ $reply->comment }}</p>
              </div>
            @endforeach
        @endif

  @endforeach

</div>

{{-- Comment Listing End --}}

