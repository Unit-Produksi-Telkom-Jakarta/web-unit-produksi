<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Landing</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body style="font-family: Arial, Helvetica, sans-serif">
    <div class="drawer">
        <input id="my-drawer-3" type="checkbox" class="drawer-toggle" /> 
        <div class="drawer-content flex flex-col absolute">
          <!-- Navbar -->
          <div class="w-full navbar bg-[#00000000] text-white absolute z-2" >
            <div class="flex-none lg:hidden">
              <label for="my-drawer-3" class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="inline-block w-6 h-6 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg>
              </label>
            </div> 
            <div class="flex-1 px-2 mx-2">Navbar Title</div>
            <div class="flex-none hidden lg:block">
              <ul class="menu menu-horizontal">
                <!-- Navbar menu content here -->
                <li><a>Navbar Item 1</a></li>
                <li><a>Navbar Item 2</a></li>
              </ul>
            </div>
          </div>
          {{-- Content --}}
          <main class="mb-10">
            <section id="hero" >
              <div class="flex items-center w-full h-[700px] cover bg-no-repeat bg-cover bg-center bg-fixed shadow-xl " 
              style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1517694712202-14dd9538aa97?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')">
                <div class="flex flex-col items-center md:items-start p-5 sm:p-20 text-center md:text-left">
                  <h1 class="text-3xl text-white font-bold my-5"><strong>LOREM IPSUM DOLOR, SIT AMET</strong></h1>
                  <p class="text-xl text-white leading-loose font-normal my-5">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                  <button class="btn w-[200px] h-[50px] btn-primary my-5">PESAN</button>
                </div>
              </div>
            </section>
            <section id="about" class="my-10 px-14 ">
              <div class="flex flex-col items-center justify-center">
                <h1 class="text-3xl font-bold my-5"><strong>ABOUT US</strong></h1>
                <hr class="w-1/4 my-5">
                <div class="flex flex-col md:flex-row  items-center justify-center">
                  <img class="w-[20rem] h-[20rem] object-cover rounded-br-[40px] drop-shadow-xl mr-5 mb-10" src="https://images.unsplash.com/photo-1612299273045-362a39972259?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=871&q=80" alt="">
                  <p class="leading-loose text-base font-normal">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
                </div>
              </div>
            </section>
            <section id="products" class="my-10 px-14">
              <div class="flex flex-col items-center">
                <h1 class="text-3xl font-bold my-5">OUR PRODUCTS AND SERVICE</h1>
                <hr class="w-1/4 my-5">
              </div>
              <div class="flex flex-col items-center">
                <div class="flex flex-col md:flex-row w-full">
                  <div class="flex rounded-l-md items-end p-4 w-full md:w-1/3 h-[400px] cover bg-no-repeat bg-cover bg-center"
                  style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1461749280684-dccba630e2f6?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=869&q=80')">
                    <p class="text-white font-bold text-3xl ">Website</p>
                  </div>
                  <div class="flex items-end p-4  w-full md:w-1/3 h-[400px] cover bg-no-repeat bg-cover bg-center"
                  style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1576613109753-27804de2cba8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80')">
                    <p class="text-white font-bold text-3xl ">Repair</p>
                  </div>
                  <div class="flex rounded-r-md items-end p-4  w-full md:w-1/3 h-[400px] cover bg-no-repeat bg-cover bg-center"
                  style="background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://images.unsplash.com/photo-1554246881-d1aec048cc39?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80')">
                    <p class="text-white font-bold text-3xl ">Multimedia</p>
                  </div>
                </div>
              </div>
            </section>
          </main>
          {{-- endContent --}}
          {{-- Footer --}}
          <footer class="footer p-10 bg-base-200 text-base-content">
            <div>
              <span class="footer-title">Services</span> 
              <a class="link link-hover">Branding</a> 
              <a class="link link-hover">Design</a> 
              <a class="link link-hover">Marketing</a> 
              <a class="link link-hover">Advertisement</a>
            </div> 
            <div>
              <span class="footer-title">Company</span> 
              <a class="link link-hover">About us</a> 
              <a class="link link-hover">Contact</a> 
              <a class="link link-hover">Jobs</a> 
              <a class="link link-hover">Press kit</a>
            </div> 
            <div>
              <span class="footer-title">Legal</span> 
              <a class="link link-hover">Terms of use</a> 
              <a class="link link-hover">Privacy policy</a> 
              <a class="link link-hover">Cookie policy</a>
            </div>
          </footer> 
          <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300">
            <div class="items-center grid-flow-col">
              <svg width="24" height="24" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" class="fill-current"><path d="M22.672 15.226l-2.432.811.841 2.515c.33 1.019-.209 2.127-1.23 2.456-1.15.325-2.148-.321-2.463-1.226l-.84-2.518-5.013 1.677.84 2.517c.391 1.203-.434 2.542-1.831 2.542-.88 0-1.601-.564-1.86-1.314l-.842-2.516-2.431.809c-1.135.328-2.145-.317-2.463-1.229-.329-1.018.211-2.127 1.231-2.456l2.432-.809-1.621-4.823-2.432.808c-1.355.384-2.558-.59-2.558-1.839 0-.817.509-1.582 1.327-1.846l2.433-.809-.842-2.515c-.33-1.02.211-2.129 1.232-2.458 1.02-.329 2.13.209 2.461 1.229l.842 2.515 5.011-1.677-.839-2.517c-.403-1.238.484-2.553 1.843-2.553.819 0 1.585.509 1.85 1.326l.841 2.517 2.431-.81c1.02-.33 2.131.211 2.461 1.229.332 1.018-.21 2.126-1.23 2.456l-2.433.809 1.622 4.823 2.433-.809c1.242-.401 2.557.484 2.557 1.838 0 .819-.51 1.583-1.328 1.847m-8.992-6.428l-5.01 1.675 1.619 4.828 5.011-1.674-1.62-4.829z"></path></svg>
              <p>ACME Industries Ltd. <br/>Providing reliable tech since 1992</p>
            </div> 
            <div class="md:place-self-center md:justify-self-end">
              <div class="grid grid-flow-col gap-4">
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
                <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
              </div>
            </div>
          </footer>
          {{-- endFooter --}}
        </div> 
        <div class="drawer-side">
          <label for="my-drawer-3" class="drawer-overlay"></label> 
          <ul class="menu p-4 w-80 bg-base-100">
            <!-- Sidebar content here -->
            <li><a>Sidebar Item 1</a></li>
            <li><a>Sidebar Item 2</a></li>
            
          </ul>
          
        </div>
      </div>
</body>
</html>