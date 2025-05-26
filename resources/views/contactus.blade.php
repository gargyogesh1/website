@include('components/header')

    <div class="relative flex flex-col justify-center items-center mb-0 max-sm:px-4 text-white "><img alt="Background"
            loading="lazy" decoding="async" data-nimg="fill" class="absolute top-0 left-0 w-full h-full -z-10"
            style="position:absolute;height:100%;width:100%;left:0;top:0;right:0;bottom:0;object-fit:cover;color:transparent"
            sizes="100vw"
            src="yogesh/contact-us-2993000_12807e39.jpg?url=%2Fimages%2Fcontact%2Fcontact-us-2993000_1280.jpg&amp;w=3840&amp;q=75" />
        <div class=" max-sm:hidden absolute top-[1px] left-0 w-full h-full bg-black opacity-60"></div>
        <div
            class="max-sm:w-full max-[1024px]:h-[35vh] max-[1024px]:w-[90%] max-sm:h-[40vh] w-[60%] h-[65vh] flex flex-col justify-center items-center max-sm:justify-start text-center gap-4 overflow-hidden z-10">
            <p
                class="max-sm:text-3xl max-[1024px]:text-5xl max-sm:pt-0 pt-20  text-6xl font-semibold max-[1024px]:pt-0">
                Reach out to us anytime.</p>
        </div>
    </div>
        


<style>
    @media (max-width: 1200px) {
        .card {
            flex: 1 1 calc(33.333% - 2rem) !important;
        }
    }
    
    @media (max-width: 900px) {
        .card {
            flex: 1 1 calc(50% - 2rem) !important;
        }
    }
    
    @media (max-width: 600px) {
        .card {
            flex: 1 1 100% !important;
        }
    }
</style>
    <!-- <div class="relative mt-20 lg:mr-24">
        <div class=" max-sm:hidden absolute  top-0 left-0 w-full h-full opacity-60"></div>
        <div
            class="max-sm:flex-col flex max-[1024px]:justify-around justify-center items-start max-[1024px]:gap-10 gap-28 max-sm:gap-6 max-w-[88vw] mx-auto  max-sm:py-0 max-sm:mt-0 pb-20  relative z-10 ">
            <div class="Toastify"></div>
            <div
                class=" w-1/2 max-sm:w-full max-sm:px-4 p-8 px-12 rounded-lg shadow-[0_0_45px_1px_rgba(0,0,0,0.1)]  bg-white bg-opacity-100">
                <form class="space-y-6">
                    <div><label class="block darkgray text-sm font-semibold mb-2">Name<input type="text" required=""
                                placeholder="Full Name"
                                class="w-full bg-[#F7F8FA] font-normal mt-1 p-3 border rounded-lg" name="name"
                                value="" /></label></div>
                    <div><label class="block darkgray text-sm font-semibold mb-2">Mobile<input type="text" required=""
                                placeholder="Contact No."
                                class="w-full bg-[#F7F8FA] font-normal mt-1 p-3 border rounded-lg" name="mobile"
                                value="" /></label></div>
                    <div><label class="block darkgray text-sm font-semibold mb-2">Email<input type="email" required=""
                                placeholder="Contact Email"
                                class="w-full bg-[#F7F8FA] font-normal mt-1 p-3 border rounded-lg" name="email"
                                value="" /></label></div>
                    <div><label class="block darkgray text-sm font-semibold mb-2">Message<textarea name="message"
                                placeholder="Enter your message"
                                class="w-full bg-[#F7F8FA] max-[1024px]:min-h-[13vw] min-h-[15vh] resize-y outline-none font-normal mt-1 p-3 border rounded-lg"></textarea></label>
                    </div>
                    <div class="flex justify-center"><button type="submit"
                            class="bg-primary hover:bg-brown text-white py-3 px-12 rounded-lg transition-transform duration-300 ">Send
                            Message</button></div>
                </form>
            </div>
            <div
                class="max-md:mb-10 w-1/2 max-sm:w-full bg-white px-8 max-sm:px-2  rounded-lg  py-7  shadow-[0_0_45px_1px_rgba(0,0,0,0.1)] ">
                <h2 class=" blue text-4xl font-semibold mb-4 text-primary">Connect with us</h2>
                <p class=" darkgray mb-6 lg:w-[26vw]">For any kind of query, contact us with the details below.</p>
                <div class="max-[1024px]:w-full max-sm:w-full w-[20vw] my-6 flex gap-2 items-start"><img
                        src="https://civilmantra.s3.ap-south-1.amazonaws.com/civilmantra-website-images/CivilmantraAssets%5B1%5D/CivilmantraAssets/Contact/Call.svg"
                        alt="Call" class="w-12" />
                    <div>
                        <p class="darkgray block blue text-lg cursor-pointer">+91 8120444777</p>
                    </div>
                </div>
                <div class="max-[1024px]:w-full max-sm:w-full w-[20vw] mb-8 flex gap-2 items-start"><img
                        src="https://civilmantra.s3.ap-south-1.amazonaws.com/civilmantra-website-images/CivilmantraAssets%5B1%5D/CivilmantraAssets/Contact/email.svg"
                        alt="Email" class="w-12" />
                    <div>
                        <p class="darkgray block blue text-lg cursor-pointer">services@civilmantra.com,
                            hr@civilmantra.com</p>
                    </div>
                </div>
                <div class="max-[1024px]:w-full max-sm:w-full w-[20vw] mb-8 flex gap-2 items-start"><img
                        src="https://civilmantra.s3.ap-south-1.amazonaws.com/civilmantra-website-images/CivilmantraAssets%5B1%5D/CivilmantraAssets/Contact/location.svg"
                        alt="Location" class="w-12" />
                    <div>
                        <p class="darkgray block blue text-lg cursor-pointer">3rd Floor, Tower 3A, Dlf Corporate Greens,
                            Sector 74A, Gurugram- 122004, India.</p>
                    </div>
                </div>
                <div id="Mapdiv" class=" flex justify-center items-center"><iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14000.589839642906!2d77.0280247!3d28.3945449!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1971e56c7b4d%3A0x213d8b8e1e7f2296!2sDLF%20Corporate%20Greens%2C%20Sector%2074A%2C%20Gurugram%2C%20Haryana%20122004%2C%20India!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin"
                        width="100%" height="120" style="border:0" allowFullScreen="" loading="lazy"
                        referrerPolicy="no-referrer-when-downgrade" title="Google Map"
                        class="mx-auto max-w-[82vw] rounded-lg"></iframe></div>
            </div>
        </div>
    </div> -->
        <section class="contact-form-section" style="padding: 3rem 1rem; background-color: #f4f4f4;">
			<div class="form-container"
				style="max-width: 800px; margin: auto; background-color: #fff; padding: 2.5rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); animation: slideUp 1s ease-out forwards; opacity: 1; transform: translateY(50px); margin-bottom: 50px !important;">
				<h2 style="font-size:40px; text-align: center; margin-bottom: 1rem; color: #2c3e50; position: relative;">Get in Touch
				</h2>
                <form id="contact-form" action="send_email.php" method="POST" style="text-align:left;">
					@csrf
					<div class="form-group" style="margin-bottom: 1.5rem;">
						<label for="name" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Your Name<span
								class="required" style="color: #e74c3c; margin-left: 2px;">*</span></label>
						<input type="text" id="name" name="name" placeholder="Jane Doe" required
							style="width: 100%; padding: 0.75rem; border: 1px solid #bdc3c7; border-radius: 4px; font-size: 1rem; transition: border-color 0.3s ease;">
					</div>
					<div class="form-group" style="margin-bottom: 1.5rem;">
						<label for="email" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Your
							Email<span class="required" style="color: #e74c3c; margin-left: 2px;">*</span></label>
						<input type="email" id="email" name="email" placeholder="jane.doe@example.com" required
							style="width: 100%; padding: 0.75rem; border: 1px solid #bdc3c7; border-radius: 4px; font-size: 1rem; transition: border-color 0.3s ease;">
					</div>
					<div class="form-group" style="margin-bottom: 1.5rem;">
						<label for="phone" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Your
							Phone</label>
						<input type="text" id="phone" name="phone" placeholder="+1 (555) 123-4567"
							style="width: 100%; padding: 0.75rem; border: 1px solid #bdc3c7; border-radius: 4px; font-size: 1rem; transition: border-color 0.3s ease;">
					</div>
					<div class="form-group" style="margin-bottom: 1.5rem;">
						<label for="subject" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Subject<span
								class="required" style="color: #e74c3c; margin-left: 2px;">*</span></label>
						<input type="text" id="subject" name="subject" placeholder="Getting Some Help" required
							style="width: 100%; padding: 0.75rem; border: 1px solid #bdc3c7; border-radius: 4px; font-size: 1rem; transition: border-color 0.3s ease;">
					</div>
					<div class="form-group" style="margin-bottom: 1.5rem;">
						<label for="message" style="display: block; margin-bottom: 0.5rem; color: #2c3e50;">Your
							Message<span class="required" style="color: #e74c3c; margin-left: 2px;">*</span></label>
						<textarea id="message" name="message" rows="5"
							placeholder="I'm interested in learning more about your available properties..." required
							style="width: 100%; padding: 0.75rem; border: 1px solid #bdc3c7; border-radius: 4px; font-size: 1rem; transition: border-color 0.3s ease;"></textarea>
					</div>
					<button type="submit" class="btn"
						style="display: block; width: 100%; background-color: #1f2f39; color: #fff; padding: 0.75rem; border: none; border-radius: 4px; cursor: pointer; font-size: 1.1rem; transition: background-color 0.3s ease, transform 0.2s ease;">Send
						Message</button>
				</form>
			</div>
		</section>
      @include('components/footer')