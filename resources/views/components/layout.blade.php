<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Dashboard</title>

        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/dashboard.css'])

      </head>
      <body>
        <nav class="navigation-menu">
          <h1>Perpusmu</h1>
          <ul>
            <li>Eksplor</li>
            <li>Histori</li>
            <li>Disimpan</li>
            <li>Pengaturan</li>
          </ul>
        </nav>
    
        <div class="navigation-accessories navigation-accessories-1"></div>
        <div class="navigation-accessories navigation-accessories-2"></div>
        <div class="navigation-accessories navigation-accessories-3"></div>
    
        <aside class="aside aside-1">
          <div class="selected-book">
            <p class="selected-book-type">Novel</p>
            <div class="selected-book-image">
              <img
                src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.sC7lVRS90tCQo2leAHBXHAHaK_%26pid%3DApi&f=1&ipt=0d729ab0cff745b020576e28da5d3497eec39f1e3cf29655972fb9b01a8d7879&ipo=images"
                width="200"
                height="320"
              />
            </div>
            <div class="selected-book-title"><h1 class="text-2xl m-0 leading-5">Bulan</h1></div>
            <p class="selected-book-author mb-2 ">Tere Liye</p>
            <div class="selected-book-description">
              <span class="text-gray-300">
                Bulan adalah buku kedua dari siri Bumi karya penulis Indonesia Tere
                Liye. Buku ini mengikuti kisah pengembaraan Ra, Ali dan Seli yang
                kali ni pergi ke dunia Klan Matahari untuk mengikuti Av untuk
                mengakan perbincangan diplomatik dengan kerajaan Klan Matahari.
              </span>
            </div>
            <div class="selected-book-rating">
              <div class="stars">
                <svg
                  class="icon-rating"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="size-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <svg
                  class="icon-rating"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="size-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <svg
                  class="icon-rating"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="size-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <svg
                  class="icon-rating"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="size-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd"
                  />
                </svg>
                <svg
                  class="icon-rating"
                  xmlns="http://www.w3.org/2000/svg"
                  viewBox="0 0 24 24"
                  fill="currentColor"
                  class="size-6"
                >
                  <path
                    fill-rule="evenodd"
                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                    clip-rule="evenodd"
                  />
                </svg>
              </div>
              <p>4.9</p>
            </div>
    
            <div class="selected-book-cta-read">
              <div class="flex items-center justify-center gap-2">
                Baca Sinopsis
                {{-- <svg
                  class="icon-arrow"
                  xmlns="http://www.w3.org/2000/svg"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke-width="1.5"
                  stroke="currentColor"
                  class="size-6"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"
                  />
                </svg> --}}
              </div>
            </div>
          </div>
        </aside>
        <aside class="aside aside-2"></aside>
        <aside class="aside aside-3"></aside>
    
        <div class="square square-1"></div>
        <div class="square square-2"></div>
        

        {{$slot}}
        
      </body>
    </html>