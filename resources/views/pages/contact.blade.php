@extends($model->path, ['title' => $model->pageTitle])

@section('content')

    <!--
  This example requires Tailwind CSS v2.0+

  This example requires some changes to your config:

  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
    <div class="relative bg-white">
        <div class="absolute inset-0">
            <div class="absolute inset-y-0 left-0 w-1/2 bg-gray-50"></div>
        </div>
        <div class="relative max-w-7xl mx-auto lg:grid lg:grid-cols-5">
            <div class="bg-gray-50 py-16 px-4 sm:px-6 lg:col-span-2 lg:px-8 lg:py-24 xl:pr-12">
                <div class="max-w-lg mx-auto">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl sm:tracking-tight">Neem contact met ons op</h2>
                    <p class="mt-3 text-lg leading-6 text-gray-500"></p>
                    <dl class="mt-8 text-base text-gray-500">
                        <div>
                            <dt class="sr-only">Adres</dt>
                            <dd>
                                <p>Maria Montessorilaan 3</p>
                                <p>3312 KJ, Dordrecht</p>
                            </dd>
                        </div>
                        <div class="mt-6">
                            <dt class="sr-only">Telefoonnummer</dt>
                            <dd class="flex">
                                <!-- Heroicon name: outline/phone -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                                <span class="ml-3"> +31 6 19 472 900 </span>
                            </dd>
                        </div>
                        <div class="mt-3">
                            <dt class="sr-only">E-mailadres</dt>
                            <dd class="flex">
                                <!-- Heroicon name: outline/mail -->
                                <svg class="flex-shrink-0 h-6 w-6 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <span class="ml-3"> info@ttvmerwestad.nl </span>
                            </dd>
                        </div>
                    </dl>
                    <p class="mt-6 text-base text-gray-500 hidden">
                        Looking for careers?
                        <a href="#" class="font-medium text-gray-700 underline">View all job openings</a>.
                    </p>
                </div>
            </div>
            <div class="bg-white py-16 px-4 sm:px-6 lg:col-span-3 lg:py-24 lg:px-8 xl:pl-12">
                <div class="max-w-lg mx-auto lg:max-w-none">
                    <form action="#" method="POST" class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="full-name" class="sr-only">Je naam</label>
                            <input type="text" name="name" id="name" autocomplete="name" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Full name">
                        </div>
                        <div>
                            <label for="email" class="sr-only">E-mailadres</label>
                            <input id="email" name="email" type="email" autocomplete="email" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Email">
                        </div>
                        <div>
                            <label for="phone" class="sr-only">Telefoonnummer</label>
                            <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border-gray-300 rounded-md" placeholder="Phone">
                        </div>
                        <div>
                            <label for="message" class="sr-only">Je vraag en/of opmerking</label>
                            <textarea id="message" name="message" rows="4" class="block w-full shadow-sm py-3 px-4 placeholder-gray-500 focus:ring-indigo-500 focus:border-indigo-500 border border-gray-300 rounded-md" placeholder="Message"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="inline-flex justify-center py-3 px-6 border border-transparent shadow-sm text-base font-medium rounded-md text-white bg-blue-500 hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <section class="py-12 bg-gray-50 overflow-hidden md:py-20 lg:py-24">
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative">
                <blockquote class="mt-10">
                    <div class="max-w-3xl mx-auto text-center text-2xl leading-9 font-medium text-slate-900">
                        <p>&ldquo;Het is altijd gezellig en de leden zijn zeer vriendelijk en toegankelijk. <br />
                            Ik kan het iedereen aanbevelen om een keer langs te komen bij de vereniging op één van de
                            speelavonden om dit zelf te ervaren.&rdquo;</p>
                    </div>
                    <footer class="mt-8">
                        <div class="md:flex md:items-center md:justify-center">
                            <div class="md:flex-shrink-0">
                                <img class="mx-auto h-10 w-10 rounded-full" src="https://scontent.fams2-2.fna.fbcdn.net/v/t1.6435-9/109947692_3596568003735876_2371688475419817955_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=09cbfe&_nc_ohc=B2ErBepVhwwAX8cvNXS&_nc_ht=scontent.fams2-2.fna&oh=00_AT-W4E1zBS7KrgfP4YKB9X3cdiVUoyLXThcqFuCfZAUbJA&oe=6322C000" alt="">
                            </div>
                            <div class="mt-3 text-center md:mt-0 md:ml-4 md:flex md:items-center">
                                <div class="text-base font-medium text-slate-900">Menno Tempelaar</div>

                                <svg class="hidden md:block mx-1 h-5 w-5 text-blue-500" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 0h3L9 20H6l5-20z" />
                                </svg>

                                <div class="text-base font-medium text-slate-500">Competitie spelend lid</div>
                            </div>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </section>


@endsection
