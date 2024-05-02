<!-- Hero -->
<div class="max-w-[85rem] mx-auto px-4 h-1/3 sm:px-6 lg:px-8">
    <!-- Grid -->
    <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
        <div class="ms-4">
            <img class="w-full rounded-md" src="{{url('storage', $product->image)}}" alt="{{$product->name}}">
            <div class="absolute inset-0 -z-[1] bg-gradient-to-tr from-gray-200 via-white/0 to-white/0 size-full rounded-md mt-4 -mb-4 me-4 -ms-4 lg:mt-6 lg:-mb-6 lg:me-6 lg:-ms-6 dark:from-neutral-800 dark:via-neutral-900/0 dark:to-neutral-900/0"></div>
    
        </div>
      <div>
        <h1 class="block text-3xl font-bold text-gray-800 sm:text-4xl lg:text-6xl lg:leading-tight dark:text-white">{{$product->name}}</h1>
        <p class="mt-3 text-lg text-gray-800 dark:text-neutral-400">{{$product->description}}.</p>
  
        <!-- Buttons -->
        <div class="grid gap-3 w-full sm:inline-flex">
          <a class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-800" href="#">
            Contáctese con ventas
          </a>
        </div>
        <!-- End Buttons -->
  
        <!-- End Review -->
      </div>
      <!-- End Col -->
  
      
      <!-- End Col -->
    </div>
    <!-- End Grid -->
  </div>
  <!-- End Hero -->