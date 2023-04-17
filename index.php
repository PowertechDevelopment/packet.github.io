<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SafeRider - Ride Sharing and Delivery Services in Nigeria</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.17/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .bg-image {
            background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIzrHk91OTl4k_kKX1S49cuj8B8BKKvkq00Q&usqp=CAU'); /* Replace with your image URL */
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center center;
            filter: brightness(90%); /* Adjust the brightness value to control the fading effect */
        }
        .cookies-alert {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 1rem;
            background-color: #333;
            color: #fff;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 9999;
        }

        .cookies-alert p {
            margin: 0;
            flex: 1;
        }

        .cookies-alert button {
            background-color: #fff;
            color: #333;
            padding: 0.5rem 1rem;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        .cookies-alert button:hover {
            background-color: #ddd;
        }
        .social-media-icons {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 1rem;
            margin-top: 2rem;
        }

        .social-media-icons a {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 40px;
            height: auto;
            background-color: #000;
            color: #fff;
            border-radius: 50%;
        }

    </style>
</head>

<body class="bg-gray-100">
       <!-- Navbar -->
       <nav class="bg-black py-4 md:flex-row flex-wrap ">
        <div class="container mx-auto flex items-center justify-between px-4">
            <a href="#" class="text-white text-2xl font-bold">SafeRider</a>
            <ul class="flex md:flex-row space-x-4 pl-8 mr-8 md-true">
                <li><a href="#" class="text-white hover:text-gray-200">Home</a></li>
                <li><a href="#forbusiness" class="text-white hover:text-gray-200">For Businesss</a></li>
                <li><a href="#services" class="text-white hover:text-gray-200">Our Services</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">Terms of Services</a></li>
                <li><a href="#" class="text-white hover:text-gray-200">About Us</a></li>
                <li><a href="#download" class="text-white hover:text-gray-200">Download</a></li>
            </ul>
           
            <!-- Social Media Icons Section -->
            <div class="social-media-icons">
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
        <div>
        <p class="text-white pl-12"><a href="https://onthewaypo.com/" target="_blank" rel="noopener noreferrer">In partnership with otw- On The Way.
    </a>
    </div>
    </nav></p>

  <!-- Hero Section with Faded Background Image -->
  <section class="bg-image bg-fixed bg-center bg-no-repeat bg-cover h-screen">
        <div class="flex justify-center text-bold items-center py-5 px-10 h-screen">
            <div class="text-center text-white">
            <h1 class="text-5xl md:text-6xl text-white font-bold mb-4">SafeRider</h1>
            <p class="text-xl bg-text-black text-white mb-2">Ride Sharing and Delivery Services in Nigeria 🇳🇬</p><br>
            <strong>No delay in traffic, Be there and right on time.</strong><br>
            SafeRider is a mobile application company specializing in delivery and transportation services in Kwara State. Our team of dedicated professionals provides fast and efficient service through our user-friendly mobile app and skilled drivers. We offer a variety of options for city delivery or transportation with well-maintained four-wheeled vehicles. Our commitment is to provide outstanding customer service, build long-term relationships with our clients, and ensure a positive experience for every delivery and transportation.
            </div>
        </div>
    </section>

 

    <!-- For Business -->
    <section id="forbusiness" class="bg-black py-24">
        <div class="container mx-auto text-center">
            <h1 class="text-4xl md:text-5xl text-white font-bold mb-4">SafeRider for Business</h1>
            <p class="text-lg text-white mb-8">Be our <strong>partner</strong> and move your <strong>business</strong> to the next level. <br> Join our Ride-sharing services as a car owner or add your store for our food and parcel delivery services.</p>
            </p>
            
            <div class="flex justify-center">
                <a href="#" class="bg-white text-black text-lg font-bold py-3 px-6 rounded-full">Partner with us Today!</a>
            </div>
        </div>
    </section>



    <!-- Services Section -->  
    <div id="services" class="container mx-auto text-center " style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png'); ">
            <h2 class="text-2xl md:text-3xl font-bold mb-4"><br><br>Our Services</h2>
            <p class="text-lg text-gray-500">We offer a wide range of transportation and delivery services</p>
    </div> 
        
        <div class="flex flex-col items-center justify-center mb-22  md:flex-row md:p-20" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png'); ">

            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <img src="data:image/png;base64,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">
                <p class="text-5xl font-medium text-slate-700 mt-3">Ride-sharing</p>
                <p class="mt-2 text-sm font-bold text-slate-500">Cruise along the street with our exclusive ride and Move without boarder.</p>
            </div>

            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT9xIUhlo7cJ4TZqp7GJSWO6dav22n2O7n2_A&usqp=CAU">
                <p class="text-5xl font-medium text-slate-700 mt-3">Food Delivery</p>
                <p class="mt-2 text-sm font-bold text-slate-500">Are you craving for food? Order food from our partnered store.</p>
            </div>

            
            <div
                class="p-10 flex flex-col items-center text-center group md:lg:xl:border-r md:lg:xl:border-b hover:bg-slate-50 cursor-pointer">
                <img src="data:image/png;base64,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">
                <p class="text-5xl font-medium text-slate-700 mt-3">Parcel Delivery</p>
                <p class="mt-2 text-sm font-bold text-slate-500">Do you need your goods to be delivered within the city? Try our Parcel service!.</p>
            </div>
         
    </div>

<!-- For Business -->


        <!-- Go Unlimited-->
<div class="flex flex-col items-center justify-center min-h-screen p-10 text-gray-700 bg-gray-100 md:p-20" style="background-image: url('https://www.toptal.com/designers/subtlepatterns/uploads/dot-grid.png');">
    <div>
<h2 class="text-2xl font-medium">Go Unlimited</h2>
    <h2  class="text-2xl flex flex-col block item-center justify-center font-medium">
        SafeRider provides a subscription plan for Students and Office workers in mind,
        <br>Never go late to school or work. </h2>
</div>

	<!-- Component Start -->
	<div class="flex flex-wrap items-center justify-center w-full max-w-4xl mt-8">
		<div class="flex flex-col flex-grow mt-8 overflow-hidden bg-white rounded-lg shadow-lg">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Students plan</span>
				<div class="flex items-center">
					<span class="text-3xl">₦</span>
					<span class="text-5xl font-bold">5,000</span>
					<span class="text-2xl text-gray-500">/mo</span>
				</div>
			</div>
			<div class="p-10">
				<ul>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Unlimited Ride</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">1-2 Kilometer range</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Car only</span>
					</li>
                    <li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Policy Insurance</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Tile 2 -->
		<div class="z-10 flex flex-col flex-grow mt-8 overflow-hidden transform bg-white rounded-lg shadow-lg md:scale-110">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Office plan</span>
				<div class="flex items-center">
					<span class="text-3xl">₦</span>
					<span class="text-6xl font-bold">8,000</span>
					<span class="text-2xl text-gray-500">/mo</span>
				</div>
			</div>
			<div class="p-10">
				<ul>
                <li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Unlimited Ride</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2 italic">1-6 Kilometer range</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Car only</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Policy Insurance</span>
					</li>
				</ul>
			</div>
		</div>

		<!-- Tile 3 -->
		<div class="flex flex-col flex-grow overflow-hidden bg-white rounded-lg shadow-lg mt-19">
			<div class="flex flex-col items-center p-10 bg-gray-200">
				<span class="font-semibold">Exclusive plan</span>
				<div class="flex items-center">
					<span class="text-3xl">₦</span>
					<span class="text-5xl font-bold">11,000</span>
					<span class="text-2xl text-gray-500">/mo</span>
				</div>
			</div>
			<div class="p-10">
				<ul>
                <li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Unlimited Ride</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2 italic">1-10 Kilometer range</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Car only</span>
					</li>
					<li class="flex items-center">
						<svg class="w-5 h-5 text-green-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
							<path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
						</svg>
						<span class="ml-2">Policy Insurance</span>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- Component End  -->

</div>
        </div>


    
<!-- Download -->
<div id="download" class=" bg-black">
    <div class="max-w-2xl mx-auto text-white py-10">
        <div class="text-center">
            <h3 class="text-3xl mb-3"> Download the SafeRider app </h3>
            <p> More than just transportation. </p>
            <div class="flex justify-center my-10">
                <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-52 mx-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888857.png" class="w-7 md:w-8">
                    <div class="text-left ml-3">
                    <a href="https://play.google.com/store/apps" target="_blank" rel="noopener noreferrer">
                        <p class='text-xs text-gray-200'>Download on </p>
                        <p class="text-sm md:text-base"> Google Play Store </p></a>
                    </div>
                </div>
                <div class="flex items-center border w-auto rounded-lg px-4 py-2 w-44 mx-2">
                    <img src="https://cdn-icons-png.flaticon.com/512/888/888841.png" class="w-7 md:w-8">
                    <div class="text-left ml-3">
                    <a href="https://www.apple.com/store" target="_blank" rel="noopener noreferrer">
                        <p class='text-xs text-gray-200'>Download on </p>
                        <p class="text-sm md:text-base"> Apple Store </p></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-28 flex flex-col md:flex-col md:justify-between items-center text-sm text-gray-400">
        <p class="order-2 md:order-1 mt-8 md:mt-0 pb-8"> &copy; SafeRider, 2023. All Rights Reservrd.<p>(NG)+2347066547997<br> help.saferider@gmail.com</p> </p>
        <div>
        <img src="https://onthewaypo.com/OTW/assets/media/OTW-MULTI.svg" class="w-7 md:w-8">
        <p class="text-white pl-12"><a href="https://onthewaypo.com/" target="_blank" rel="noopener noreferrer">In partnership with otw- On The Way.</div>
</a>
    </div>
    </div>
</div>

     <!-- Font Awesome Icons -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>

      <!-- Cookies Alert Section -->
      <div class="cookies-alert flex justify-center">
        <p>This website uses cookies to ensure you get the best experience on our website.</p>
            <button id="DismissButton">Dismiss</button>
    </div>

<!-- JavaScript for Dismiss Button -->
<script>
        document.getElementById('DismissButton').addEventListener('click', function () {
            document.querySelector('.cookies-alert').style.display = 'none';
        });

    </script>

           </body>


    </html>