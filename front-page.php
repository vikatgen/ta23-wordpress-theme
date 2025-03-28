<?php get_header(); ?>
          <div class="relative pt-18 pb-24 sm:pb-32 lg:pt-36 lg:pb-62">
            <div class="container mx-auto px-4 relative">
              <div class="max-w-lg xl:max-w-xl mx-auto text-center">
                <h1 class="font-heading text-5xl xs:text-7xl xl:text-8xl tracking-tight text-white mb-8">Energizing a Green Future</h1>
                <p class="max-w-md xl:max-w-none text-lg text-white opacity-80 mb-10">Our commitment to green energy is paving the way for a cleaner, healthier planet. Join us on a journey towards a future where clean, renewable energy sources transform the way we power our lives.</p><a class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium text-teal-900 border border-lime-500 hover:border-white bg-lime-500 hover:bg-white rounded-full transition duration-200" href="#">See our solutions</a>
              </div>
            </div>
          </div>
          <div class="hidden fixed top-0 left-0 bottom-0 w-full xs:w-5/6 xs:max-w-md z-50" :class="{'block': mobileNavOpen, 'hidden': !mobileNavOpen}">
            <div class="fixed inset-0 bg-violet-900 opacity-20" x-on:click="mobileNavOpen = !mobileNavOpen"></div>
            <nav class="relative flex flex-col py-7 px-10 w-full h-full bg-white overflow-y-auto">
              <div class="flex items-center justify-between"><a class="inline-block" href="#"><img class="h-8" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/logos/sign-logo-flow.svg" alt=""/></a>
                <div class="flex items-center"><a class="inline-flex py-2.5 px-4 mr-6 items-center justify-center text-sm font-medium text-teal-900 hover:text-white border border-teal-900 hover:bg-teal-900 rounded-full transition duration-200" href="#">Login</a>
                  <button x-on:click="mobileNavOpen = !mobileNavOpen">
                    <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M23.2 8.79999L8.80005 23.2M8.80005 8.79999L23.2 23.2" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                </div>
              </div>
              <div class="pt-20 pb-12 mb-auto">
                <ul class="flex-col">
                  <li class="mb-6"><a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="about.html">About us</a></li>
                  <li class="mb-6"><a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="pricing.html">Pricing</a></li>
                  <li class="mb-6"><a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="contact.html">Contact us</a></li>
                  <li><a class="inline-block text-teal-900 hover:text-teal-700 font-medium" href="blog.html">Blog</a></li>
                </ul>
              </div>
              <div class="flex items-center justify-between"><a class="inline-flex items-center text-lg font-medium text-teal-900" href="#"><span>
                    <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M6.4 6.39999H25.6C26.92 6.39999 28 7.47999 28 8.79999V23.2C28 24.52 26.92 25.6 25.6 25.6H6.4C5.08 25.6 4 24.52 4 23.2V8.79999C4 7.47999 5.08 6.39999 6.4 6.39999Z" stroke="#646A69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M28 8.8L16 17.2L4 8.8" stroke="#646A69" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg></span>                  <span class="ml-2">Newsletter</span></a>
                <div class="flex items-center"><a class="inline-block mr-4" href="#">
                    <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_282_7847)">
                        <path d="M11.548 19.9999V10.8776H14.6087L15.0679 7.32146H11.548V5.05136C11.548 4.02209 11.8326 3.32066 13.3103 3.32066L15.1918 3.31988V0.139123C14.8664 0.0968385 13.7495 -0.000106812 12.4495 -0.000106812C9.73488 -0.000106812 7.87642 1.65686 7.87642 4.69916V7.32146H4.8064V10.8776H7.87642V19.9999H11.548Z" fill="#022C22"></path>
                      </g>
                    </svg></a>                  <a class="inline-block mr-4" href="#">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.8 2H16.2C19.4 2 22 4.6 22 7.8V16.2C22 17.7383 21.3889 19.2135 20.3012 20.3012C19.2135 21.3889 17.7383 22 16.2 22H7.8C4.6 22 2 19.4 2 16.2V7.8C2 6.26174 2.61107 4.78649 3.69878 3.69878C4.78649 2.61107 6.26174 2 7.8 2ZM7.6 4C6.64522 4 5.72955 4.37928 5.05442 5.05442C4.37928 5.72955 4 6.64522 4 7.6V16.4C4 18.39 5.61 20 7.6 20H16.4C17.3548 20 18.2705 19.6207 18.9456 18.9456C19.6207 18.2705 20 17.3548 20 16.4V7.6C20 5.61 18.39 4 16.4 4H7.6ZM17.25 5.5C17.5815 5.5 17.8995 5.6317 18.1339 5.86612C18.3683 6.10054 18.5 6.41848 18.5 6.75C18.5 7.08152 18.3683 7.39946 18.1339 7.63388C17.8995 7.8683 17.5815 8 17.25 8C16.9185 8 16.6005 7.8683 16.3661 7.63388C16.1317 7.39946 16 7.08152 16 6.75C16 6.41848 16.1317 6.10054 16.3661 5.86612C16.6005 5.6317 16.9185 5.5 17.25 5.5ZM12 7C13.3261 7 14.5979 7.52678 15.5355 8.46447C16.4732 9.40215 17 10.6739 17 12C17 13.3261 16.4732 14.5979 15.5355 15.5355C14.5979 16.4732 13.3261 17 12 17C10.6739 17 9.40215 16.4732 8.46447 15.5355C7.52678 14.5979 7 13.3261 7 12C7 10.6739 7.52678 9.40215 8.46447 8.46447C9.40215 7.52678 10.6739 7 12 7ZM12 9C11.2044 9 10.4413 9.31607 9.87868 9.87868C9.31607 10.4413 9 11.2044 9 12C9 12.7956 9.31607 13.5587 9.87868 14.1213C10.4413 14.6839 11.2044 15 12 15C12.7956 15 13.5587 14.6839 14.1213 14.1213C14.6839 13.5587 15 12.7956 15 12C15 11.2044 14.6839 10.4413 14.1213 9.87868C13.5587 9.31607 12.7956 9 12 9Z" fill="currentColor"></path>
                    </svg></a>                  <a class="inline-block" href="#">
                    <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M19 3C19.5304 3 20.0391 3.21071 20.4142 3.58579C20.7893 3.96086 21 4.46957 21 5V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V5C3 4.46957 3.21071 3.96086 3.58579 3.58579C3.96086 3.21071 4.46957 3 5 3H19ZM18.5 18.5V13.2C18.5 12.3354 18.1565 11.5062 17.5452 10.8948C16.9338 10.2835 16.1046 9.94 15.24 9.94C14.39 9.94 13.4 10.46 12.92 11.24V10.13H10.13V18.5H12.92V13.57C12.92 12.8 13.54 12.17 14.31 12.17C14.6813 12.17 15.0374 12.3175 15.2999 12.5801C15.5625 12.8426 15.71 13.1987 15.71 13.57V18.5H18.5ZM6.88 8.56C7.32556 8.56 7.75288 8.383 8.06794 8.06794C8.383 7.75288 8.56 7.32556 8.56 6.88C8.56 5.95 7.81 5.19 6.88 5.19C6.43178 5.19 6.00193 5.36805 5.68499 5.68499C5.36805 6.00193 5.19 6.43178 5.19 6.88C5.19 7.81 5.95 8.56 6.88 8.56ZM8.27 18.5V10.13H5.5V18.5H8.27Z" fill="currentColor"></path>
                    </svg></a></div>
              </div>
            </nav>
          </div>
        </section>
      </div>
      <section class="py-12 lg:py-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap -mx-4">
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-10 md:mb-0">
              <div class="text-center">
                <h5 class="text-2xl xs:text-3xl lg:text-4xl xl:text-5xl mb-4">5,000 Mwh</h5><span class="text-base lg:text-lg text-gray-700">Renewable Energy Generated</span>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-10 md:mb-0">
              <div class="text-center">
                <h5 class="text-2xl xs:text-3xl lg:text-4xl xl:text-5xl mb-4">2,500+</h5><span class="text-base lg:text-lg text-gray-700">Renewable Energy Generated</span>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4 mb-10 sm:mb-0">
              <div class="text-center">
                <h5 class="text-2xl xs:text-3xl lg:text-4xl xl:text-5xl mb-4">10,000+</h5><span class="text-base lg:text-lg text-gray-700">Renewable Energy Generated</span>
              </div>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 px-4">
              <div class="text-center">
                <h5 class="text-2xl xs:text-3xl lg:text-4xl xl:text-5xl mb-4">15%</h5><span class="text-base lg:text-lg text-gray-700">Renewable Energy Generated</span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="p-4 bg-white">
        <div class="pt-16 pb-24 px-5 xs:px-8 xl:px-12 bg-lime-500 rounded-3xl">
          <div class="container mx-auto px-4">
            <div class="flex mb-4 items-center">
              <svg width="8" height="8" viewbox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="4" cy="4" r="4" fill="#022C22"></circle>
              </svg><span class="inline-block ml-2 text-sm font-medium">Solutions</span>
            </div>
            <div class="border-t border-teal-900 border-opacity-25 pt-14">
              <h1 class="font-heading text-4xl sm:text-6xl mb-24">Key to clean future</h1>
              <div class="flex flex-wrap -mx-4">
                <div class="w-full sm:w-1/2 px-4 mb-16">
                  <div>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="white"></path>
                      <circle cx="16" cy="16" r="4" fill="#022C22"></circle>
                      <circle cx="24" cy="32" r="4" fill="#022C22"></circle>
                      <circle cx="32" cy="16" r="4" fill="#022C22"></circle>
                    </svg>
                    <div class="mt-6">
                      <h5 class="text-2xl font-medium mb-3">EV charging </h5>
                      <p class="mb-6">EVs use electricity as a power source, which can be generated from renewable energy sources. Our solutions help reducing greenhouse gas emissions in the transportation sector.</p><a class="inline-block text-lg  font-medium hover:text-teal-700" href="#">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 px-4 mb-16">
                  <div>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="white"></path>
                      <rect x="23" y="8" width="2" height="12" rx="1" fill="#022C22"></rect>
                      <rect x="23" y="28" width="2" height="12" rx="1" fill="#022C22"></rect>
                      <rect x="34.6066" y="11.9792" width="2" height="12" rx="1" transform="rotate(45 34.6066 11.9792)" fill="#022C22"></rect>
                      <rect x="20.4645" y="26.1213" width="2" height="12" rx="1" transform="rotate(45 20.4645 26.1213)" fill="#022C22"></rect>
                      <rect x="28" y="25" width="2" height="12" rx="1" transform="rotate(-90 28 25)" fill="#022C22"></rect>
                      <rect x="8" y="25" width="2" height="12" rx="1" transform="rotate(-90 8 25)" fill="#022C22"></rect>
                      <rect x="26.1213" y="27.5355" width="2" height="12" rx="1" transform="rotate(-45 26.1213 27.5355)" fill="#022C22"></rect>
                      <rect x="11.9792" y="13.3934" width="2" height="12" rx="1" transform="rotate(-45 11.9792 13.3934)" fill="#022C22"></rect>
                    </svg>
                    <div class="mt-6">
                      <h5 class="text-2xl font-medium mb-3">Solar Energy</h5>
                      <p class="mb-6">Solar panels convert sunlight into electricity. Photovoltaic (PV) cells on these panels capture the energy from the sun and convert it into electrical power.</p><a class="inline-block text-lg  font-medium hover:text-teal-700" href="#">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 px-4 mb-16 sm:mb-0">
                  <div>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="white"></path>
                      <path d="M25 24C25 24.5523 24.5523 25 24 25C23.4477 25 23 24.5523 23 24C23 23.4477 23.4477 23 24 23C24.5523 23 25 23.4477 25 24Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24 25C24.5523 25 25 24.5523 25 24C25 23.4477 24.5523 23 24 23C23.4477 23 23 23.4477 23 24C23 24.5523 23.4477 25 24 25Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M40 23C40.5523 23 41 23.4477 41 24C41 33.3888 33.3888 41 24 41C23.4477 41 23 40.5523 23 40C23 39.4477 23.4477 39 24 39C32.2843 39 39 32.2843 39 24C39 23.4477 39.4477 23 40 23Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24 9C15.7157 9 9 15.7157 9 24C9 24.5523 8.55228 25 8 25C7.44772 25 7 24.5523 7 24C7 14.6112 14.6112 7 24 7C24.5523 7 25 7.44772 25 8C25 8.55228 24.5523 9 24 9Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M36 23C36.5523 23 37 23.4477 37 24C37 31.1797 31.1797 37 24 37C23.4477 37 23 36.5523 23 36C23 35.4477 23.4477 35 24 35C30.0751 35 35 30.0751 35 24C35 23.4477 35.4477 23 36 23Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24 13C17.9249 13 13 17.9249 13 24C13 24.5523 12.5523 25 12 25C11.4477 25 11 24.5523 11 24C11 16.8203 16.8203 11 24 11C24.5523 11 25 11.4477 25 12C25 12.5523 24.5523 13 24 13Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M32 23C32.5523 23 33 23.4477 33 24C33 28.9706 28.9706 33 24 33C23.4477 33 23 32.5523 23 32C23 31.4477 23.4477 31 24 31C27.866 31 31 27.866 31 24C31 23.4477 31.4477 23 32 23Z" fill="#022C22"></path>
                      <path fill-rule="evenodd" clip-rule="evenodd" d="M24 17C20.134 17 17 20.134 17 24C17 24.5523 16.5523 25 16 25C15.4477 25 15 24.5523 15 24C15 19.0294 19.0294 15 24 15C24.5523 15 25 15.4477 25 16C25 16.5523 24.5523 17 24 17Z" fill="#022C22"></path>
                    </svg>
                    <div class="mt-6">
                      <h5 class="text-2xl font-medium mb-3">Wind Energy</h5>
                      <p class="mb-6">Wind turbines harness the kinetic energy of the wind to generate electricity. Wind farms with multiple turbines are commonly used to produce large amounts of clean energy.</p><a class="inline-block text-lg  font-medium hover:text-teal-700" href="#">Read more</a>
                    </div>
                  </div>
                </div>
                <div class="w-full sm:w-1/2 px-4">
                  <div>
                    <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="white"></path>
                      <path d="M23.8425 12.3779C23.9008 12.238 24.0992 12.238 24.1575 12.3779L30.1538 26.7692C31.9835 31.1605 28.7572 36 24 36Lnan nanL24 36C19.2428 36 16.0165 31.1605 17.8462 26.7692L23.8425 12.3779Z" fill="#022C22"></path>
                    </svg>
                    <div class="mt-6">
                      <h5 class="text-2xl font-medium mb-3">Hydropower</h5>
                      <p class="mb-6">This technology uses the energy from flowing water, such as rivers and dams, to turn turbines and generate electricity. It's one of the oldest forms of renewable energy.</p><a class="inline-block text-lg  font-medium hover:text-teal-700" href="#">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-12 lg:py-24 overflow-hidden">
        <div class="container mx-auto px-4">
          <div class="max-w-6xl mx-auto mb-24 text-center">
            <h1 class="font-heading text-4xl sm:text-6xl md:text-7xl tracking-sm mb-16">Our commitment to green energy is paving the way for a cleaner, healthier planet. </h1><a class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium text-white hover:text-teal-900 border border-teal-900 hover:border-lime-500 bg-teal-900 hover:bg-lime-500 rounded-full transition duration-200" href="#">Get in touch</a>
          </div>
          <div class="flex justify-center">
            <div class="flex-shrink-0 h-full max-w-xs sm:max-w-md md:max-w-xl mr-4 sm:mr-8"><img class="block w-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/about/about-image2.png" alt=""/></div>
            <div class="flex-shrink-0 h-full max-w-xs sm:max-w-md md:max-w-xl mr-4 sm:mr-8"><img class="block w-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/about/about-image3.png" alt=""/></div>
            <div class="flex-shrink-0 h-full max-w-xs sm:max-w-md md:max-w-xl mr-4 sm:mr-8"><img class="block w-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/about/about-image4.png" alt=""/></div>
            <div class="flex-shrink-0 h-full max-w-xs sm:max-w-md md:max-w-xl mr-4 sm:mr-8"><img class="block w-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/about/about-image2.png" alt=""/></div>
            <div class="hidden md:block sm:flex-shrink-0 h-full max-w-md md:max-w-xl mr-4 sm:mr-8"><img class="block w-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/about/about-image3.png" alt=""/></div>
            <div class="hidden md:block sm:flex-shrink-0 h-full max-w-md md:max-w-xl mr-4 sm:mr-8"><img class="block w-full" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/about/about-image4.png" alt=""/></div>
          </div>
        </div>
      </section>
      <section class="py-12 lg:py-24">
        <div class="container mx-auto px-4">
          <div class="text-center mb-20">
            <h1 class="font-heading text-6xl mb-6">FAQ</h1>
            <p class="text-gray-700">Here you will find the answers to the frequently asked questions.</p>
          </div>
          <div class="max-w-4xl mx-auto">
            <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
              <div>
                <div class="pr-5">
                  <h5 class="text-lg font-medium">What is green energy?</h5>
                </div>
                <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
                  <p class="text-gray-700 mt-4">We provide a range of green energy solutions, including solar power systems, wind turbines, energy-efficient appliances, and smart home technologies to enhance energy sustainability.</p>
                </div>
              </div><span class="flex-shrink-0">
                <div :class="{'hidden': accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5.69995V18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <div class="hidden" :class="{'hidden': !accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div></span>
            </button>
            <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
              <div>
                <div class="pr-5">
                  <h5 class="text-lg font-medium">How does green energy benefit the environment?</h5>
                </div>
                <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
                  <p class="text-gray-700 mt-4">We provide a range of green energy solutions, including solar power systems, wind turbines, energy-efficient appliances, and smart home technologies to enhance energy sustainability.</p>
                </div>
              </div><span class="flex-shrink-0">
                <div :class="{'hidden': accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5.69995V18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <div class="hidden" :class="{'hidden': !accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div></span>
            </button>
            <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
              <div>
                <div class="pr-5">
                  <h5 class="text-lg font-medium">What green energy solutions does your company offer?</h5>
                </div>
                <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
                  <p class="text-gray-700 mt-4">We provide a range of green energy solutions, including solar power systems, wind turbines, energy-efficient appliances, and smart home technologies to enhance energy sustainability.</p>
                </div>
              </div><span class="flex-shrink-0">
                <div :class="{'hidden': accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5.69995V18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <div class="hidden" :class="{'hidden': !accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div></span>
            </button>
            <button class="flex w-full py-6 px-8 mb-4 items-start justify-between text-left shadow-md rounded-2xl" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
              <div>
                <div class="pr-5">
                  <h5 class="text-lg font-medium">What support services do you offer after installing green energy solutions?</h5>
                </div>
                <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
                  <p class="text-gray-700 mt-4">We provide a range of green energy solutions, including solar power systems, wind turbines, energy-efficient appliances, and smart home technologies to enhance energy sustainability.</p>
                </div>
              </div><span class="flex-shrink-0">
                <div :class="{'hidden': accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5.69995V18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <div class="hidden" :class="{'hidden': !accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div></span>
            </button>
            <button class="flex w-full py-6 px-8 mb-24 items-start justify-between text-left shadow-md rounded-2xl" x-data="{ accordion: false }" x-on:click.prevent="accordion = !accordion">
              <div>
                <div class="pr-5">
                  <h5 class="text-lg font-medium">How do solar panels work?</h5>
                </div>
                <div class="overflow-hidden h-0 pr-5 duration-500" x-ref="container" :style="accordion ? 'height: ' + $refs.container.scrollHeight + 'px' : ''">
                  <p class="text-gray-700 mt-4">We provide a range of green energy solutions, including solar power systems, wind turbines, energy-efficient appliances, and smart home technologies to enhance energy sustainability.</p>
                </div>
              </div><span class="flex-shrink-0">
                <div :class="{'hidden': accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5.69995V18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div>
                <div class="hidden" :class="{'hidden': !accordion}">
                  <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M5.69995 12H18.3" stroke="#1D1F1E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </div></span>
            </button>
            <div class="sm:flex py-10 px-5 sm:px-10 bg-orange-50 rounded-2xl">
              <div class="mb-4 sm:mb-0 sm:mr-6">
                <svg width="48" height="48" viewbox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M0 8C0 3.58172 3.58172 0 8 0H40C44.4183 0 48 3.58172 48 8V40C48 44.4183 44.4183 48 40 48H8C3.58172 48 0 44.4183 0 40V8Z" fill="#BEF264"></path>
                  <path d="M13.676 15.5617C11.7951 17.8602 10.6666 20.7983 10.6666 24C10.6666 27.2017 11.7951 30.1398 13.6761 32.4383L18.9201 27.1943C18.3372 26.2694 18 25.174 18 24C18 22.8259 18.3372 21.7306 18.92 20.8057L13.676 15.5617Z" fill="#022C22"></path>
                  <path d="M15.5616 13.6761L20.8056 18.9201C21.7306 18.3372 22.8259 18 24 18C25.174 18 26.2694 18.3372 27.1943 18.9201L32.4383 13.6761C30.1398 11.7951 27.2017 10.6666 24 10.6666C20.7982 10.6666 17.8601 11.7951 15.5616 13.6761Z" fill="#022C22"></path>
                  <path d="M34.3239 15.5617L29.0799 20.8057C29.6628 21.7307 30 22.8259 30 24C30 25.174 29.6627 26.2693 29.0799 27.1943L34.3238 32.4383C36.2048 30.1398 37.3333 27.2017 37.3333 24C37.3333 20.7983 36.2048 17.8602 34.3239 15.5617Z" fill="#022C22"></path>
                  <path d="M32.4382 34.3239L27.1942 29.0799C26.2693 29.6628 25.174 30 24 30C22.8259 30 21.7307 29.6628 20.8057 29.0799L15.5617 34.3239C17.8602 36.2048 20.7983 37.3333 24 37.3333C27.2016 37.3333 30.1397 36.2048 32.4382 34.3239Z" fill="#022C22"></path>
                </svg>
              </div>
              <div>
                <h5 class="text-xl font-medium mb-4">Still have questions?</h5>
                <p class="text-gray-700"><span>For assistance, please visit our</span>                                  <a class="inline-block text-black font-medium underline" href="#">Contact Us</a>                                  <span>page or call our customer support hotline at</span>                                  <span class="text-black font-medium">(671) 555-0110</span>                                  <span>. Our dedicated team is ready to help you on your journey to a greener, more sustainable future.</span></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="py-12 lg:py-24 overflow-hidden" x-data="{ activeSlide: 1, slideCount: 3 }">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap items-center -mx-4">
            <div class="w-full md:w-1/2 px-4 mb-12 md:mb-0">
              <div class="max-w-lg mx-auto md:mx-0 overflow-hidden">
                <div class="flex -mx-4 transition-transform duration-500" :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'"><img class="block flex-shrink-0 w-full px-4" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/testimonials/photo-lg.png" alt=""/><img class="block flex-shrink-0 w-full px-4" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/testimonials/photo-lg.png" alt=""/><img class="block flex-shrink-0 w-full px-4" src="<?php echo get_template_directory_uri(); ?>/assets/fauna-assets/testimonials/photo-lg.png" alt=""/></div>
              </div>
            </div>
            <div class="w-full md:w-1/2 px-4">
              <div class="max-w-lg mx-auto md:mr-0 overflow-hidden">
                <div class="flex -mx-4 transition-transform duration-500" :style="'transform: translateX(-' + (activeSlide - 1) * 100 + '%)'">
                  <div class="flex-shrink-0 px-4 w-full">
                    <h4 class="text-3xl lg:text-4xl font-medium mb-10">“Flow transformed my energy use. Efficient, green tech, outstanding service!”</h4><span class="block text-xl font-medium">Jenny Wilson</span>                                      <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Solar energy service</span>
                  </div>
                  <div class="flex-shrink-0 px-4 w-full">
                    <h4 class="text-3xl lg:text-4xl font-medium mb-10">“Efficient, green tech, outstanding service”</h4><span class="block text-xl font-medium">John Jones</span>                                      <span class="block mb-12 lg:mb-32 text-lg text-gray-700">CE0 Solar Company</span>
                  </div>
                  <div class="flex-shrink-0 px-4 w-full">
                    <h4 class="text-3xl lg:text-4xl font-medium mb-10">“Flow transformed my energy use, efficient, green tech, outstanding service.”</h4><span class="block text-xl font-medium">James Harrison</span>                                      <span class="block mb-12 lg:mb-32 text-lg text-gray-700">Developer</span>
                  </div>
                </div>
                <div>
                  <button class="inline-block mr-4 text-gray-700 hover:text-lime-500" x-on:click="activeSlide = activeSlide &gt; 1 ? activeSlide - 1 : slideCount">
                    <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M24.4 16H7.59998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M16 24.4L7.59998 16L16 7.59998" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                  <button class="inline-block text-gray-700 hover:text-lime-500" x-on:click="activeSlide = activeSlide &lt; slideCount ? activeSlide + 1 : 1">
                    <svg width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.59998 16H24.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                      <path d="M16 7.59998L24.4 16L16 24.4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div>
        <div>
          <section>
            <div class="p-4">
              <div class="max-w-xl lg:max-w-5xl mx-auto xl:max-w-none px-5 md:px-12 xl:px-24 py-16 bg-teal-900 rounded-2xl">
                <div class="container mx-auto px-4">
                  <div class="flex flex-wrap items-center -mx-4">
                    <div class="w-full lg:w-2/3 px-4 mb-8 lg:mb-0">
                      <div class="max-w-md xl:max-w-none">
                        <h1 class="font-heading text-4xl xs:text-5xl sm:text-6xl tracking-sm text-white mb-6">Learn Frontend Web Development</h1>
                        <p class="text-lg text-white opacity-80">Visit www.pixelrocket.store and learn how to become a frontend web developer</p>
                      </div>
                    </div>
                    <div class="w-full lg:w-1/3 px-4 lg:text-right"><a class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium text-teal-900 border border-lime-500 hover:border-white bg-lime-500 hover:bg-white rounded-full transition duration-200" href="https://www.pixelrocket.store">Get Started</a></div>
                  </div>
                </div>
              </div>
            </div>
          </section>
        </div>
      </div>
      <?php get_footer(); ?>