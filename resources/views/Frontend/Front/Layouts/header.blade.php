<!DOCTYPE html>
<html class="scroll-smooth" lang="en">
  <head>
    <meta charset="utf-8">

    {!! SEOMeta::generate() !!}

    <meta name="robots" content="index, follow">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    <link rel="icon" href="favicon-16x16.html" type="image/x-icon" sizes="16x16">
    <link rel="stylesheet" type="text/css" href="../../../../../cdn.jsdelivr.net/npm/slick-carousel%401.8.1/slick/slick.css">
    <link rel="stylesheet" href="{{url('assets/styles/tailwind.min.css')}}">
    <link rel="stylesheet" href="{{url('assets/styles/app.min.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    {{-- <script src="https://www.google.com/recaptcha/api.js"></script> --}}
    <script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"  async defer></script>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Chivo:wght@400;700;900&amp;family=Noto+Sans:wght@400;500;600;700;800&amp;display=swap">
  </head>



  <body class="overflow-x-hidden w-screen relative home-page">
    <div class="full-with address hidden">
      <div class="flex items-center px-3 justify-between gap-5 mx-auto max-w-[1320px] py-[10px] md:mx-8">
        <p class="text-base hidden font-bold md:block">66 avenue des Champs, 75008, Paris, France</p>
        <div class="flex items-center contact ml-auto gap-[10px] md:gap-5 md:flex-row"> <span>(+01) - 456 789</span>
          <div class="border border-dashed border-white self-stretch"></div><span><a href="http://wp.alithemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97f4f8f9e3f6f4e3d7f6f0f8f9b9f4f8fa">[email&#160;protected]</a></span>
        </div>
      </div>
    </div>
    <div class="wrapper mx-auto text-gray-900 font-normal max-w-[1320px]"><a name="top"> </a>
      <div class="absolute top-0 left-0 w-screen h-full bg-opacity-80 hidden video-iframe bg-[#0b0b0b] z-[999999]">
        <div class="mx-auto video w-1/2">
          <div class="flex justify-end">
            <button class="text-white close-video text-[20px]" type="button" title="Close (Esc)">x</button>
          </div>
          <iframe class="aspect-video w-full" src="https://www.youtube.com/embed/oRI37cOPBQQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
      <div class="overlay"></div>


    <header class="h-auto full-width relative py-[15px] first-letter:lg:py-[26px]">
        <div class="px-[12px] md:px-[36px] xl:px-0 mt-0 flex items-center justify-between mx-auto relative max-w-[1320px]"><a class="flex" href="{{ route('home') }}"><img class="logo z-50 w-[90px] md:w-[101px] lg:w-[122px] xl:w-[138px]" src="{{url('assets/images007/logo.png')}}" alt="logo image"></a>
          <nav class="z-50 absolute hidden top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 lg:block">
            <ul class="navbar flex flex-col justify-center font-chivo gap-[34px] lg:flex-row">
              <li class="flex items-center group"><a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]" href="{{ route('home') }}">Home</a></li>

              <li class="flex items-center group"><a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]" href="{{ route('about.us') }}">About</a></li>

              <li class="flex items-center group"><a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]" href="{{ route('front.blogs.show') }}">Blogs</a></li>

              <li class="flex items-center group"><a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]" href="#">Digital Marketing</a><i><img class="icon-caret group-hover:filter-green" src="{{url('assets/images/icons/icon-caret.svg')}}" alt="caret"></i>
                <ul class="menu-child opacity-0 bg-white top-full z-50 py-2 grid menu-shadow -translate-x-6 translate-y-8 transition-all duration-200 pointer-events-none group-hover:pointer-events-auto lg:absolute rounded-[4px] group-hover:grid group-hover:opacity-100 before:content-[''] before:block before:absolute before:w-full before:h-12 before:top-[-35px] before:left-0 grid-cols-1 w-[185px]">
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/website-development')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Web Devlopment</span></a></li>
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/google-ads')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Google Ads</span></a></li>
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/search-engine-optimization')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Search Engine<br> Optimization</span></a></li>
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/facebook-advertisement')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Facebook <br>Advertising<br> Campaigns</span></a></li>
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/social-media-optimization')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Social Media<br> Marketing</span></a></li>
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/email-marketing')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Email Marketing</span></a></li>
                  <li class="menu-child-item font-chivo group transition-all duration-200 py-[10px] px-[22px] hover:filter-green hover:pl-[25px] hover:opacity-100" data-menu="product"><a class="flex items-center text-[14px]" href="{{url('page/video-marketing')}}"><img class="opacity-40 w-[12px] h-[12px] mr-[8px] -translate-y-[1px]" src="{{url('assets/images/icons/icon-edit.svg')}}" alt=""><span class="whitespace-nowrap">Video Marketing</span></a></li>
                </ul>
              </li>



              <li class="flex items-center group"><a class="hover:text-green-900 text-base font-inter menu-link lg:text-heading-6 mr-[7px]" href="{{ route('front.contact') }}">Contact Us</a></li>


            </ul>
          </nav>
          <div class="hidden xl:block">
            <button type="button"> <a class="flex items-center z-10 relative transition-all duration-200 group px-[22px] py-[15px] lg:px-[32px] lg:py-[22px] rounded-[50px] bg-gray-100 text-gray-900 hover:bg-gray-900 hover:text-white" href="{{ route('front.contact') }}"><span class="block text-inherit w-full h-full rounded-[50px] text-heading-6 font-bold font-chivo">REQUEST QUOTE</span><i> <img class="ml-[7px] w-[12px] filter-black group-hover:filter-white" src="{{url('assets/images/icons/icon-right.svg')}}" alt="arrow right icon"></i></a></button>
          </div>
        </div>

        {{-- Mobile Navigation code start --}}

        <div class="burger-icon burger-icon-white menu__icon"><span class="burger-icon-top"></span><span class="burger-icon-mid"> </span><span class="burger-icon-bottom"></span></div>

        <nav class="fixed top-0 right-0 bg-white flex flex-col h-screen nav-shadow overflow-y-scroll nav-mobile opacity-0 pointer-events-none transition-all duration-200 z-[100]" style="width: 330px;">

            <div class="flex items-center border-b p-[15px] lg:p-[26px] gap-[10px] border-[#F2F4F7]">
                @auth
                    <img class="max-w-[50px]" src="{{ Avatar::create(Auth::user()->name)->toBase64() }}" alt="avatar">
                @else
                    <img class="max-w-[50px]" src="{{ url('assets/images007/logo.png') }}" alt="avatar">
                @endauth


              <div>
                @auth
                    <p class="font-bold">{{ Auth::user()->name }}</p>
                @else
                    <p class="font-bold">Beebig Digital</p>
                @endauth
              </div>
            </div>


            <div class="p-[30px]">

                <ul class="font-chivo font-medium text-[16px] leading-[16px]">
                    <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('home') }}">Home</a></li>
                    <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('about.us') }}">About Us</a></li>
                    <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('front.blogs.show') }}">Blogs</a></li>
                    <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('front.contact') }}">Contact Us</a></li>
                    <li class="group menu-mobile-item py-[13px]" style="width: 100%;height: 100%;z-index: 999999999;border: 0;">
                        <div class="flex items-center justify-between transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]">
                          <p>Services</p><img class="w-[18px] h-[18px]" src="{{url('assets/images/icons/icon-angle-down-fill.svg')}}" alt="angle icon">
                        </div>
                        <ul class="pl-5 menu-child hidden pt-[10px]">
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/website-development')}}">Web Devlopment</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/google-ads')}}">Google Ads</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/search-engine-optimization')}}">Search Engine Optimization</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/facebook-advertisement')}}">Facebook Advertising Campaigns</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/social-media-optimization')}}">Social Media Marketing</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/email-marketing')}}">Email Marketing</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/video-marketing')}}">Video Marketing</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/logo-designing')}}">Logo Designing</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/brochure-and-catalogue-designing')}}">Brochure / Catalogue</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="{{url('page/posters-and-magazines	')}}">Posters & Magzines</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="#">Calander Designing</a></li>
                          <li class="text-md py-[10px]" id="sv1"><a class="block transition-all duration-200 hover:text-green-900 hover:translate-x-1" href="#">Stationary</a></li>
                        </ul>
                    </li>
                </ul>

              {{-- Border Sepration --}}
                <div class="mt-5 border-b border-gray-100 pb-5 mb-[25px] pt-[30px]">

                    @auth
                        <p class="font-bold text-heading-6 mb-[10px]">Your Account</p>
                        <ul class="text-[15px]">
                            <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('profile.show') }}">Profile</a></li>

                            @role('super-admin')
                            <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('dashboard') }}">Admin Dashboard</a></li>
                            @endrole

                            <form method="POST" action="{{ route('logout') }}" x-data>
                                @csrf

                                <button type="submit">Sign Out</button>
                            </form>

                        </ul>
                    @else
                        <p class="font-bold text-heading-6 mb-[10px]">Your Account</p>
                        <ul class="text-[15px]">
                            <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('login') }}">Login</a></li>
                            <li class="py-[13px]"><a class="transition-all duration-200 hover:text-green-900 hover:translate-x-[2px]" href="{{ route('register') }}">Sign Up</a></li>
                        </ul>
                    @endauth

                </div>
              <div class="text-gray-400 font-chivo text-[13px]">Copyright 2023 © BeeBig Digital.</div>
            </div>
          </nav>


        {{-- Mobile Navigation code end --}}


    </header>


@include('sweetalert::alert')
