<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">
        <div class="mx-auto max-w-2xl text-center">
          <h2 class="text-balance text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl">Register</h2>
        </div>
        <form action="#" method="POST" class="mx-auto mt-10 max-w-xl sm:mt-20">
          <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">

            <div class="sm:col-span-2">
              <label for="name" class="block text-sm/6 font-semibold text-gray-900">Name</label>
              <div class="mt-2.5">
                <input type="name" name="name" id="name" autocomplete="name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="username" class="block text-sm/6 font-semibold text-gray-900">Username</label>
              <div class="mt-2.5">
                <input type="username" name="username" id="username" autocomplete="username" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="email" class="block text-sm/6 font-semibold text-gray-900">Email</label>
              <div class="mt-2.5">
                <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>
            </div>
            <div class="sm:col-span-2">
              <label for="password" class="block text-sm/6 font-semibold text-gray-900">Password</label>
              <div class="mt-2.5">
                <input type="password" name="password" id="password" autocomplete="password" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
              </div>
            </div>
            
          </div>
          <div class="mt-10">
            <button type="submit" class="block w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Register</button>
          </div>
        </form>
        <p class="mt-5 text-center text-sm/6 text-gray-500">
            Already have an account ?
            <a href="/login" class="font-semibold text-indigo-600 hover:text-indigo-500">Login Here</a>
          </p>
      </div>
  </x-layout>