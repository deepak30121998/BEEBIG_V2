<link rel="stylesheet" type="text/css" href="../../../../../cdn.jsdelivr.net/npm/slick-carousel%401.8.1/slick/slick.css">
    <link rel="stylesheet" href="{{url('assets/styles/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/app.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;600;700;800&amp;display=swap">



	  <div class="full-width flex">
        <div class="hidden flex-[1.2] lg:block"><img class="h-full object-cover" src="{{url('assets/images/thumbnail-18.png')}}" alt="Agon"></div>
        <div class="flex-1 bg-bg-2 text-center grid place-items-center py-[50px]">
          <div class="max-w-[400px]">
            <h2 class="font-bold font-chivo text-[25px] leading-[30px] md:text-heading-3 mb-[50px]">Welcome back.
            </h2>

            <form class="bg-white w-full p-8 shadow-3 rounded-[6px] md:p-12" action="http://127.0.0.1:8000/api/login" method="POST">
                @csrf
              <div class="relative mb-6">
                <input class="outline-none flex-1 pr-3 border caret-green-900 w-full placeholder:text-gray-400 placeholder:text-text placeholder:font-chivo border-[#C2C8D0] rounded-[4px] py-[14px] pl-[16px] focus:border-green-900 focus:border-[2px]" name="email" type="text" placeholder="Username *" required>
              </div>
              <div class="relative mb-6 last-of-type:mb-4">
                <input class="outline-none flex-1 pr-3 border caret-green-900 w-full peer placeholder:text-gray-400 placeholder:text-text placeholder:font-chivo border-[#C2C8D0] rounded-[4px] py-[14px] pl-[16px] focus:border-green-900 focus:border-[2px]" required type="password" name="password" id="password">
              </div>
              <button class="mb-6 w-full text-white bg-green-900 transition-opacity duration-200 text-heading-6 font-chivo font-bold shadow-sm py-[13px] hover:opacity-75" type="submit">Continue</button>

            </form>
          </div>
        </div>
      </div>
      <div class="bg fixed bottom-28 rounded-full grid place-items-center opacity-0 invisible transition-all duration-300 right-[20px] z-[9999] w-[48px] h-[48px]" id="backToTop"><a class="rounded-full bg-green-900 grid place-items-center w-[48px] h-[48px]" href="#top"><img src="{{url('assets/images/icons/icon-up.svg')}}" alt="to top icon"></a></div>



      <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/scripts/vendors/jquery-3.6.0.min.js"></script>
      <script type="text/javascript" src="{{url('assets/scripts/vendors/slick.min.js')}}"></script>
      <script src="{{url('assets/scripts/app.js')}}"></script>
