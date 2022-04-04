<?php get_header('frontpage'); ?>

<div class="wysiwyg-content bg-white">

	<!-- HERO SLIDER from content -->
	<section class="hero-slider py-0">
		<?php echo do_shortcode('[hero-slides number="10"]'); ?>
	</section>

	<!-- THE FORM -->
	<section id="request-callback" class="w-full bg-gray-700">
		<div class="flex max-w-5xl mx-auto py-20 space-x-5 ">

			<div class="px-5 text-base">
				<h4 class="pt-6 font-semibold">Eager to get started?</h4>
				<h2 class="text-2xl uppercase">Looking for a <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">hassel-free</span> quote</h2>
				<p class="py-2">The first step is a initial consultation to discuss your garden design project and what you are looking to achieve. Get in touch on our contact page if you want a <a class="relative text-base text-white hover:underline" href="/contact">more detailed quote</a>. Alternatively, fill out this quick quote form and a member of the team with call you back.</p>
				<p>
					<!-- <a class="relative inline-flex tertiary-btn pr-6 space-x-2" href="/contact">
						Contact us
						<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
							<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
						</svg>
					</a> -->
					<!-- <a class="relative primary-link p-2 text-sm hover:underline" href="/about">
							Testimonials
						</a> -->
				</p>
				<?php echo do_shortcode('[wpforms id="153" title="false"]'); ?>

			</div>
		</div>
	</section>


	<!-- CARDS -->
	<section id="moreinfo" class="max-w-5xl mx-auto py-24">

		<div class="text-center">
			<h1 class="hidden">Budlandscapes - Design & Landscaping</h1>
			<h3 class="text-gray-600 text-2xl uppercase tracking-wide">Our clients are the ones that count</h3>
			<h4 class="pt-6 font-semibold">We do it all - we do it the best!</h4>
			<p class="mb-16 text-xs max-w-lg mx-auto text-gray-700">Find out more about the capabilities Steve and the team offer here at Bud design &amp;landscaping. See the <a href="/services" class="secondary-link text-xs underline hover:no-underline">services we offer</a> and how we can make your dream garden a reality</p>
		</div>

		<div class="mx-2 flex flex-wrap space-y-20 md:space-y-0 md:space-x-12">
			<div class="md:flex-1">

				<picture>
					<source srcset="/resources/img/pages/homepage/cabin-section.webp" type="image/webp">
					<source srcset="/resources/img/pages/homepage/cabin-section.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/homepage/cabin-section.jpg" alt="garden office and cabins">
				</picture>


				<div class="relative px-4 -mt-16">
					<div class="h-64 md:h-72 lg:h-64 bg-white p-6 rounded-lg shadow-lg">
						<div class="flex items-baseline">
							<span class="text-gray-600 text-base md:text-base lg:text-lg pr-2 inline-block  uppercase tracking-wide">
								Cabins
							</span>
							<span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
								&amp;
							</span>
							<div class="text-gray-600 text-base md:text-base lg:text-lg px-2 inline-block  uppercase tracking-wide">
								Offices
							</div>
						</div>

						<h4 class="mt-3 text-teal-600 font-semibold">Bring the home into garden</h4>

						<div class="mt-1 text-gray-600 text-sm">
							We build external offices and cabins from hard wearing materials to use all year round. With Steve and the Bud Design &amp; Landscaping team we can help you utilize your garden space.
						</div>

						<p class="inline-flex space-x-2 py-4 absolute bottom-2">
							<a class="relative inline-flex primary-btn pr-6" href="/services">
								Find out more
								<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
								</svg>
							</a>
							<a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/contact#contact-form">
								Enquiry
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="md:flex-1">

				<picture>
					<source srcset="/resources/img/pages/homepage/domestic-section.webp" type="image/webp">
					<source srcset="/resources/img/pages/homepage/domestic-section.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/homepage/domestic-section.jpg" alt="domestic garden landscaping">
				</picture>

				<div class="relative px-4 -mt-16">
					<div class="h-64 md:h-72 lg:h-64 bg-white p-6 rounded-lg shadow-lg">
						<div class="flex items-baseline">
							<span class="text-gray-600 text-base md:text-base lg:text-lg pr-2 inline-block  uppercase tracking-wide">
								Domestic
							</span>
							<span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
								&amp;
							</span>
							<div class="text-gray-600 text-base md:text-base lg:text-lg px-2 inline-block  uppercase tracking-wide">
								general
							</div>
						</div>

						<h4 class="mt-3 text-teal-600 font-semibold">No garden too big or small</h4>

						<div class="mt-1 text-gray-600 text-sm">
							We have a large portfolio and pride ourselves on making garden spaces amazing regardless of the space available. Feel free to view some <a class="primary-link text-sm" href="/projects"> past projects</a> and some before and after shots we have captured to see the magic happen.
						</div>

						<p class="inline-flex space-x-2 py-4 absolute bottom-2">
							<a class="relative inline-flex primary-btn pr-6" href="/services">
								Find out more
								<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
								</svg>
							</a>
							<a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/contact">
								Enquiry
							</a>
						</p>
					</div>
				</div>
			</div>

		</div>

		<div class="mx-2 flex flex-wrap space-y-20 md:space-y-0 md:space-x-12  mt-20">


			<div class="md:flex-1">
				<picture>
					<source srcset="/resources/img/pages/homepage/contractors-section.webp" type="image/webp">
					<source srcset="/resources/img/pages/homepage/contractors-section.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/homepage/contractors-section.jpg" alt="approved landscape contractors">
				</picture>

				<div class="relative px-4 -mt-16">
					<div class="h-64 md:h-72 lg:h-64 bg-white p-6 rounded-lg shadow-lg">
						<div class="flex items-baseline">
							<span class="text-gray-600 text-base md:text-base lg:text-lg pr-2 inline-block  uppercase tracking-wide">
								Contractors
							</span>
							<span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
								&amp;
							</span>
							<div class="text-gray-600 text-base md:text-base lg:text-lg px-2 inline-block  uppercase tracking-wide">
								Co
							</div>
						</div>

						<h4 class="mt-3 text-teal-600 font-semibold">Working alongside the best</h4>

						<div class="mt-1 text-gray-600 text-sm">
							We are the approved landscape contractors for multiple nursing homes throughout the UK, we proudly provide our services to household names like Bupa homes.
						</div>

						<p class="inline-flex space-x-2 py-4 absolute bottom-2">
							<a class="relative inline-flex primary-btn pr-6" href="/about">
								Find out more
								<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
								</svg>
							</a>
							<a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/contact">
								Enquiry
							</a>
						</p>
					</div>
				</div>
			</div>

			<div class="md:flex-1">

				<!-- <img src="https://source.unsplash.com/random/350x350" alt=" random imgee" class="w-full max-h-80 object-cover object-center rounded-lg shadow-md"> -->
				<picture>
					<source srcset="/resources/img/pages/homepage/maintenance-section.webp" type="image/webp">
					<source srcset="/resources/img/pages/homepage/maintenance-section.jpg" type="image/jpeg">
					<img class="w-full max-h-80 object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/homepage/maintenance-section.jpg" alt="garden maintenance">
				</picture>

				<div class="relative px-4 -mt-16">
					<div class="h-64 md:h-72 lg:h-64 bg-white p-6 rounded-lg shadow-lg">
						<div class="flex items-baseline">
							<span class="text-gray-600 text-base md:text-base lg:text-lg pr-2 inline-block  uppercase tracking-wide">
								Maintenance
							</span>
							<span class="bg-teal-200 text-teal-800 text-2xl px-2 inline-block rounded-full  uppercase font-semibold tracking-wide">
								&amp;
							</span>
							<div class="text-gray-600 text-base md:text-base lg:text-lg px-2 inline-block  uppercase tracking-wide">
								more
							</div>
						</div>

						<h4 class="mt-3 text-teal-600 font-semibold">Garden maintenance throughout the UK</h4>

						<div class="mt-1 text-gray-600 text-sm">
							One off, occasional or regular visits, benefit from our expert gardening knowledge and experience. We also develop low maintenance gardens for those with busy lifestyles.
						</div>

						<p class="inline-flex space-x-2 py-4 absolute bottom-2">
							<a class="relative inline-flex primary-btn pr-6" href="/services">
								Find out more
								<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
									<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
								</svg>
							</a>
							<a class="relative primary-link p-2 text-sm hover:text-teal-700 hover:underline" href="/contact">
								Enquiry
							</a>
						</p>
					</div>
				</div>
			</div>

		</div>
	</section>


	<!-- THE TEAM -->
	<section class="w-full bg-gray-700">
		<div class="mx-2 flex flex-wrap md:flex-nowrap xl:max-w-5xl xl:mx-auto py-20 space-x-5 space-y-10 md:space-y-0">
			<div class="py-0 w-4/5 mx-auto md:w-2/5">
				<picture>
					<source srcset="/resources/img/pages/homepage/bud-team.webp" type="image/webp">
					<source srcset="/resources/img/pages/homepage/bud-team.jpg" type="image/jpeg">
					<img class="m-auto object-cover object-center rounded-lg shadow-md" src="/resources/img/pages/homepage/bud-team.jpg" alt="Budlandscapes team">
				</picture>
			</div>

			<div class="py-0 w-full md:w-3/5">
				<div class="px-5">
					<h2 class="text-2xl uppercase">The Budlandscapes <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">team</span></h2>
					<p class="text-xl pb-2">Steve and his team have been creating beautiful outdoors spaces for over [XX] years and their client base keeps on growing. </p>

					<p>
						<a class="relative inline-flex tertiary-btn pr-6 space-x-2" href="/about">
							About us
							<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
								<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
							</svg>
						</a>
						<a class="relative primary-link p-2 text-sm hover:underline" href="/testimonials">
							Testimonials
						</a>
					</p>

				</div>

			</div>
	</section>


	<!-- PARTNERS -->
	<?php get_template_part('templates/partials/section', 'partners');  ?>


	<!-- TESTIMONIALS -->
	<section id="testinonials" class="w-full bg-gray-700">
		<div class="max-w-5xl mx-auto py-28">

			<div class="px-5 text-center">
				<h2 class="text-2xl uppercase">What Our <span class="bg-orange-500 px-1 text-white transform inline-block -skew-y-2">Customers</span> Say</h2>
				<p class="text-xl">Testimonials from our beloved customers and clients</p>
			</div>

			<div class="mx-2 flex flex-wrap md:flex-nowrap xl:max-w-5xl xl:mx-auto pt-5 md:pt-20 space-x-5 space-y-5 md:space-y-0">
				<div class="py-0 w-full md:w-1/5">
					<picture>
						<source srcset="/resources/img/pages/icons/testimonials.webp" type="image/webp">
						<source srcset="/resources/img/pages/icons/testimonials.svg" type="image/svg">
						<img class="m-auto object-cover object-center" src="/resources/img/pages/icons/testimonials.svg" alt="Testimonials">
					</picture>

				</div>

				<div class="py-0 w-full md:w-4/5">
					<div class="px-5">
						<p class="text-2xl pb-2 text-gray-200">"We were delighted with Bud Landscapes knowledge of all things green and the efficiency with which the work was carried out. The landscaping was completed within budget and our garden now looks cared for and managed!"</p>
						<h4 class="text-xl text-right pt-4 pr-10">- JULIE HASWELL, Windsor</h4>
						<p class="text-teal-500 text-xs text-right pr-10">
							Read more <a href="/testimonials" class="primary-link text-xs underline">feedback</a>
						</p>
					</div>
				</div>
			</div>

			<!-- <p class="text-center">
				<a class="relative inline-flex tertiary-btn pr-6 space-x-2" href="/about">
					View more
					<svg xmlns="http://www.w3.org/2000/svg" class="absolute top-3 right-1 inline-block w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
						<path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
					</svg>
				</a>
			</p> -->
		</div>
	</section>



</div>

<?php get_footer(); ?>