@extends('layouts.app')
@section('title', 'Menu Utama')

@section('content')


<!--content1-intro-->
    <div class="max-w-4xl mx-auto pt-1 sm:px-6 pb-40">
        <!--content-image-->
        <div class="hover:opacity-50 md:float-right">
            <img class="bg-contain p-10 md:flex h-3/4 py-11 " src="{{ asset('assets/logo/content-image.svg') }}" alt="" />
        </div>
        <div class="mx-auto px-4 sm:mt-12 sm:px-6 md:mt-16">
        <div class="sm:text-center lg:text-left">
            <!--content-title-->
            <h1 class="text-4xl font-bold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="flex border border-transparent text-4xl">Berbagai edukasi yang lengkap dan terpercaya.</span>
            </h1>
            <!--content-button-->
            <div class="mt-5 pt-6 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
            <div class="rounded-md shadow">
                <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-gray-700 hover:bg-gray-800 md:py-4 md:text-lg md:px-10"> Mulai Sekarang </a>
            </div>
            </div>
        </div>
        </div>
    </div>
  <!--end of content1-intro-->

  <!------------------------------------------------------------------------------------------------------------------------------------------>

  <!--content2-article-->
  <div class="pb-40">
    <div class="bg-gray-300 max-w-4xl mx-auto sm:px-6 h-auto pb-20">
      <!-- content-top(Screen Mode) -->
      <div class="ml-2 relative">
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-80">
            <!-- content-title -->
            <h1 class="mt-8 leading-6 font-medium text-gray-900 md:text-4xl sm:text-3xl">Artikel Terbaru :</h1>
            <!-- content-button-back -->
            <a href="#" class="mt-10 leading-6 font-medium text-gray-900 md:text-3xl sm:text-2xl hover:opacity-50">
              Lihat Lainnya
              <!--Icon Back-->
              <svg class="h-6 w-6 inline-flex" width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0)">
                <path d="M14.2123 0C6.61012 0 0.425365 6.05615 0.425365 13.5001C0.425365 20.9438 6.61012 27 14.2123 27C21.8144 27 27.9993 20.9438 27.9993 13.5001C27.9993 6.05615 21.8144 0 14.2123 0ZM14.2123 25.152C7.65081 25.152 2.31273 19.925 2.3126 13.5001C2.3126 7.07516 7.65069 1.84816 14.2123 1.84804C20.7738 1.84816 26.1118 7.07516 26.1118 13.5002C26.1118 19.9248 20.7738 25.152 14.2123 25.152Z" fill="black"/>
                <path d="M16.0642 7.71791C15.6957 7.35717 15.0981 7.35729 14.7297 7.71791C14.3611 8.07889 14.3611 8.66386 14.7299 9.02484L18.3561 12.5754L7.85521 12.5764C7.33404 12.5765 6.91165 12.9901 6.91165 13.5007C6.91178 14.011 7.33417 14.4244 7.85533 14.4244L18.3566 14.4235L14.7295 17.9748C14.3609 18.3356 14.3609 18.9209 14.7295 19.2816C14.9138 19.462 15.1553 19.5523 15.3969 19.5523C15.6383 19.5523 15.8798 19.462 16.0641 19.2817L21.302 14.153C21.4791 13.9798 21.5785 13.7449 21.5785 13.4997C21.5783 13.2545 21.4789 13.0197 21.3019 12.8461L16.0642 7.71791Z" fill="black"/>
                </g>
                <defs>
                <clipPath id="clip0">
                <rect width="27.5745" height="27" fill="white" transform="translate(28 27) rotate(-180)"/>
                </clipPath>
                </defs>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- content-top(Mobile Mode) -->
      <div class="sm:hidden" id="mobile-menu">
        <div class="px-3 pt-5">
          <!-- content-title -->
          <h1 class="mt-4 block px-3 py-2 leading-6 font-medium text-black text-3xl">Artikel Terbaru :</h1>
        </div>
      </div>

      <!-- content-bottom-->
      <div class="mt-20 sm:flex">
        <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10 space-x-1">
            <!-- content-box-->
            <a href="1234141" class="hover:opacity-75">
                <div class="relative shadow-md bg-white p-5 px-0 pr-5">
                    <div class="mb-14 space-x-40">
                    <!-- content-box-image-->
                    <div class="float-left flex justify-left ml-5 h-32 w-32 text-white">
                        <img class="h-30 w-30" src="{{ asset('assets/logo/content-box-article-image.svg') }}" alt="" />
                    </div>
                    <!-- content-box-title-->
                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Menjadi Game Developer dengan Mudah</p>
                    <!-- content-box-desc-author-->
                    <dd class="text-base text-gray-500">Oleh : Pihak Rantive A</dd>
                    <!-- content-box-desc-date-->
                    <dd class="ml-16 text-base text-gray-500">10/4/2021 15:00 PM</dd>
                    </div>
                </div>
            </a>

            <!-- content-box-->
            <a href="42814" class="hover:opacity-75">
                <div class="relative shadow-md bg-white p-5 px-0 pr-5">
                    <div class="mb-14 space-x-40">
                    <!-- content-box-image-->
                    <div class="float-left flex justify-left ml-5 h-32 w-32 text-white">
                        <img class="h-30 w-30" src="{{ asset('assets/logo/content-box-article-image.svg') }}" alt="" />
                    </div>
                    <!-- content-box-title-->
                    <p class="ml-16 text-lg leading-6 font-medium text-gray-900">Menjadi Game Developer dengan Mudah</p>
                    <!-- content-box-desc-author-->
                    <dd class="text-base text-gray-500">Oleh : Pihak Rantive A</dd>
                    <!-- content-box-desc-date-->
                    <dd class="ml-16 text-base text-gray-500">10/4/2021 15:00 PM</dd>
                    </div>
                </div>
            </a>

          <!-- content-top(Mobile Mode) -->
          <div class="sm:hidden" id="mobile-menu">
            <div class="px-3 pb-3 float-right">
              <!-- content-top-button-back -->
              <a href="#" class="block px-3 py-2 font-medium text-black text-2xl hover:opacity-50">
                Lihat Lainnya
                <!--Icon Back-->
                <svg class="h-6 w-6 inline-flex" width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0)">
                    <path d="M14.2123 0C6.61012 0 0.425365 6.05615 0.425365 13.5001C0.425365 20.9438 6.61012 27 14.2123 27C21.8144 27 27.9993 20.9438 27.9993 13.5001C27.9993 6.05615 21.8144 0 14.2123 0ZM14.2123 25.152C7.65081 25.152 2.31273 19.925 2.3126 13.5001C2.3126 7.07516 7.65069 1.84816 14.2123 1.84804C20.7738 1.84816 26.1118 7.07516 26.1118 13.5002C26.1118 19.9248 20.7738 25.152 14.2123 25.152Z" fill="black"/>
                    <path d="M16.0642 7.71791C15.6957 7.35717 15.0981 7.35729 14.7297 7.71791C14.3611 8.07889 14.3611 8.66386 14.7299 9.02484L18.3561 12.5754L7.85521 12.5764C7.33404 12.5765 6.91165 12.9901 6.91165 13.5007C6.91178 14.011 7.33417 14.4244 7.85533 14.4244L18.3566 14.4235L14.7295 17.9748C14.3609 18.3356 14.3609 18.9209 14.7295 19.2816C14.9138 19.462 15.1553 19.5523 15.3969 19.5523C15.6383 19.5523 15.8798 19.462 16.0641 19.2817L21.302 14.153C21.4791 13.9798 21.5785 13.7449 21.5785 13.4997C21.5783 13.2545 21.4789 13.0197 21.3019 12.8461L16.0642 7.71791Z" fill="black"/>
                    </g>
                    <defs>
                    <clipPath id="clip0">
                    <rect width="27.5745" height="27" fill="white" transform="translate(28 27) rotate(-180)"/>
                    </clipPath>
                    </defs>
                </svg>
              </a>
            </div>
          </div>
        </dl>
      </div>
    </div>
  </div>
  <!--end of content2-article-->

  <!--content3-service-->
  <div class="pb-40">
    <div class="max-w-4xl mx-auto sm:px-6 h-auto">
        <div class="relative mb-10 sm:text-left">
            <!-- content-title -->
            <h1 class="mt-8 leading-6 font-medium md:text-center text-gray-900 text-4xl">Layanan</h1>
            <!-- content-desc -->
            <h1 class="mt-5 md:mx-auto md:text-center text-2xl md:w-2/4">Menyediakan berbagai layanan untuk membantu kebutuhan.</h1>
        </div>
            <div class="max-w-4xl mx-auto sm:px-20 h-auto">
                <!--content-box-group-->
                <div class="carousel relative shadow-2xl bg-white">
                    <div class="carousel-inner relative overflow-hidden w-full hover:opacity-75">

                        <!--content-box1-->
                        <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked" />
                        <a href="123334" class="carousel-item absolute opacity-0" style="height:51vh;">
                            <img class="bg-contain bg-gray-50 h-80 w-full" src="{{ asset('assets/logo/content-box-service-image.svg') }}" alt="" />
                            <div class="relative px-5 py-2">
                                <!-- content-box-title-->
                                <p class="md:float-left text-2xl leading-6 font-medium text-gray-900">Web Developer</p>
                                <!-- content-box-desc-->
                                <dd class="md:float-right text-lg text-gray-500">Membantu dalam pembuatan struktur website</dd>
                                </div>
                        </a>
                        <!-- content-box1-button-next-->
                        <label for="carousel-2" class="absolute next control-1 w-10 h-10 mr-2 md:mr-10 cursor-pointer hover:opacity-100 hidden text-3xl font-bold text-white bg-gray-700 hover:bg-gray-800 hover:text-white rounded-full leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--content-box2-->
                        <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="" />
                        <a href="123334" class="carousel-item absolute opacity-0" style="height:51vh;">
                            <img class="bg-contain bg-gray-50  h-80 w-full" src="{{ asset('assets/logo/content-box-service-image.svg') }}" alt="" />
                            <div class="relative px-5 py-2">
                                <!--content-box-title-->
                                <p class="md:float-left text-2xl leading-6 font-medium text-gray-900">Web Designer</p>
                                <!--content-box-desc-->
                                <dd class="md:float-right text-lg text-gray-500">Membantu dalam pembuatan desain website</dd>
                                </div>
                        </a>
                        <!-- content-box2-button-back-->
                        <label for="carousel-1" class="prev control-2 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hover:opacity-100 hidden text-3xl font-bold text-white bg-gray-700 hover:bg-gray-800 hover:text-white rounded-full leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>
                        <!-- content-box2-button-next-->
                        <label for="carousel-3" class="next control-2 w-10 h-10 mr-2 md:mr-10 absolute cursor-pointer hover:opacity-100 hidden text-3xl font-bold text-white bg-gray-700 hover:bg-gray-800 hover:text-white rounded-full leading-tight text-center z-10 inset-y-0 right-0 my-auto">›</label>

                        <!--content-box3-->
                        <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="" />
                        <a href="123334" class="carousel-item absolute opacity-0" style="height:51vh;">
                            <!--content-box-title-->
                            <div class="py-44 block h-full w-full bg-gray-50  text-black text-2xl text-center">
                                Lihat Lainnya
                                <!--icon back-->
                                <svg class="h-6 w-6 inline-flex" width="28" height="27" viewBox="0 0 28 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0)">
                                    <path d="M14.2123 0C6.61012 0 0.425365 6.05615 0.425365 13.5001C0.425365 20.9438 6.61012 27 14.2123 27C21.8144 27 27.9993 20.9438 27.9993 13.5001C27.9993 6.05615 21.8144 0 14.2123 0ZM14.2123 25.152C7.65081 25.152 2.31273 19.925 2.3126 13.5001C2.3126 7.07516 7.65069 1.84816 14.2123 1.84804C20.7738 1.84816 26.1118 7.07516 26.1118 13.5002C26.1118 19.9248 20.7738 25.152 14.2123 25.152Z" fill="black"/>
                                    <path d="M16.0642 7.71791C15.6957 7.35717 15.0981 7.35729 14.7297 7.71791C14.3611 8.07889 14.3611 8.66386 14.7299 9.02484L18.3561 12.5754L7.85521 12.5764C7.33404 12.5765 6.91165 12.9901 6.91165 13.5007C6.91178 14.011 7.33417 14.4244 7.85533 14.4244L18.3566 14.4235L14.7295 17.9748C14.3609 18.3356 14.3609 18.9209 14.7295 19.2816C14.9138 19.462 15.1553 19.5523 15.3969 19.5523C15.6383 19.5523 15.8798 19.462 16.0641 19.2817L21.302 14.153C21.4791 13.9798 21.5785 13.7449 21.5785 13.4997C21.5783 13.2545 21.4789 13.0197 21.3019 12.8461L16.0642 7.71791Z" fill="black"/>
                                    </g>
                                    <defs>
                                    <clipPath id="clip0">
                                    <rect width="27.5745" height="27" fill="white" transform="translate(28 27) rotate(-180)"/>
                                    </clipPath>
                                    </defs>
                                </svg>
                            </div>
                            <!--content-box-desc-->
                            <!--Tidak ada desc-->
                        </a>
                        <!-- content-box1-button-back-->
                        <label for="carousel-2" class="prev control-3 w-10 h-10 ml-2 md:ml-10 absolute cursor-pointer hover:opacity-100 hidden text-3xl font-bold text-white bg-gray-700 hover:bg-gray-800 hover:text-white rounded-full leading-tight text-center z-10 inset-y-0 left-0 my-auto">‹</label>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of content3-service-->


@endsection
