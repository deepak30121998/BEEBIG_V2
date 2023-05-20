@include('Frontend.Front.Layouts.header')

<div class="full-width bg-bg-2">
    <div class="text-center px-5 pt-[74px] pb-[90px]">
        <h1 class="font-chivo font-bold lg:text-display-3 md:text-[45px] md:leading-[52px] text-[35px] leading-[42px] mb-7">Contact us
        </h1>
        <p class="font-bold font-chivo text-[14px] md:text-heading-6 text-gray-600 mx-auto md:max-w-[55ch]">From year to year we strive to invent the most innovative technology that is used by both small enterprises and space enterprises.
        </p>
    </div>
</div>


<div class="bg-gray-100 relative p-[40px] md:pt-[91px] md:pr-[98px] md:pb-[86px] md:pl-[92px] mt-[150px] rounded-[58px]">
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
          <p class="text-text text-gray-600 underline"><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385b57564c595b4c78595f5756165b5755">[email&#160;protected]</a>
          </p>
        </div>
        <form class="flex-1" action="{{ route('contact.store') }}" method="POST">
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

          <div class="flex flex-col gap-5">
            <button class="flex items-center transition-colors duration-200 px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] font-chivo font-semibold text-md md:text-lg text-white bg-gray-900 w-fit" type="submit">Send Message<i> <img class="ml-[7px] w-[12px] filter-white" src="assets/images/icons/icon-right.svg" alt="arrow right icon"></i>
            </button>
            <p class="text-md text-gray-500">By clicking contact us button, you agree our terms and policy,</p>
          </div>
        </form>
      </div>
    </div>
  </div>

@include('Frontend.Front.Layouts.newsletter')
@include('Frontend.Front.Layouts.footer')
