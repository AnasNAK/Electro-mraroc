<?php require APPROOT . '/views/inc/header.php'; ?>
<!--start contact -->

<div class="mx-auto max-w-screen-xl px-4 pt-16 pb-8 sm:px-6 lg:px-8" id="conatct">
    <div class="mx-auto max-w-md">
        <strong class="block text-center text-xl font-medium text-white sm:text-3xl">
            If You Want To Conact Us Or To See latest newslater
        </strong>
    </div>



</div>
<!--end contact-->

<!-- component -->
<section id="contact" class="relative w-full min-h-screen  text-[#6DB0FF]">
    <h1 class="text-4xl p-4 font-bold tracking-wide">
        Contact
    </h1>
    <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-[#6DB0FF] h-32 w-full"></div>

    <!-- wrapper -->
    <div class="relative p-5 lg:px-20 flex flex-col md:flex-row items-center justify-center">

        <!-- Social Media -->
        <div class="w-full md:w-1/2 p-5 md:px-0 mx-5">

            <h3 class="text-2xl font-semibold mb-5 text-[#6DB0FF]">
                You can visit us here
            </h3>
            <!-- list -->
            <div class="nmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247389.13439789083!2d107.6988268269479!3d14.343046888101457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x316bff3ec83864ed%3A0x38ea5406b5d91f3f!2sKon%20Tum%2C%20Vietnam!5e0!3m2!1sen!2sma!4v1670230362645!5m2!1sen!2sma" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

        <!-- Contact Me -->
        <form action="#" class="w-full md:w-1/2 border border-[#6DB0FF] p-6 bg-gray-900">
            <h2 class="text-2xl pb-3 font-semibold">
                Send Message
            </h2>
            <div>
                <div class="flex flex-col mb-3">
                    <label for="name">Name</label>
                    <input type="text" id="name" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#6DB0FF] focus:outline-none focus:bg-gray-800 focus:text-[#6DB0FF]" autocomplete="off">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="email">Email</label>
                    <input type="text" id="email" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#6DB0FF] focus:outline-none focus:bg-gray-800 focus:text-[#6DB0FF]" autocomplete="off">
                </div>
                <div class="flex flex-col mb-3">
                    <label for="message">Message</label>
                    <textarea rows="4" id="message" class="px-3 py-2 bg-gray-800 border border-gray-900 focus:border-[#6DB0FF] focus:outline-none focus:bg-gray-800 focus:text-[#6DB0FF]"></textarea>
                </div>
            </div>
            <div class="w-full pt-3">
                <button type="submit" class="w-full bg-gray-900 border border-[#6DB0FF] px-4 py-2 transition duration-50 focus:outline-none font-semibold hover:bg-[#6DB0FF] hover:text-white text-xl cursor-pointer">
                    Send
                </button>
            </div>
        </form>
    </div>
</section>




<?php require APPROOT . '/views/inc/footer.php'; ?>