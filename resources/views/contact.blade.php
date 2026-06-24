<x-app-layout title="Contact Us">
    <div class="bg-white py-16 sm:py-24">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            <div class="mx-auto max-w-2xl lg:text-center">
                <h2 class="text-base font-semibold leading-7 text-sky-600">Get in Touch</h2>
                <p class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">We're here to help</p>
                <p class="mt-6 text-lg leading-8 text-gray-600">Have questions about renting equipment or listing your gear? Reach out to our dedicated support team.</p>
            </div>

            <div class="mx-auto mt-16 max-w-xl sm:mt-20">
                <div id="feedback-alert" class="hidden mb-6 p-4 rounded-xl text-sm font-semibold transition-all duration-300"></div>

                <form id="contact-form" onsubmit="handleContactSubmit(event)" class="space-y-6">
                    <div class="grid grid-cols-1 gap-y-6">
                        <div>
                            <label for="name" class="block text-sm font-semibold leading-6 text-slate-200">Name</label>
                            <div class="mt-2">
                                <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-xl border border-slate-700 bg-slate-800/60 px-3.5 py-2 text-slate-100 shadow-sm focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-semibold leading-6 text-slate-200">Email</label>
                            <div class="mt-2">
                                <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-xl border border-slate-700 bg-slate-800/60 px-3.5 py-2 text-slate-100 shadow-sm focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6">
                            </div>
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-semibold leading-6 text-slate-200">Message</label>
                            <div class="mt-2">
                                <textarea name="message" id="message" rows="4" class="block w-full rounded-xl border border-slate-700 bg-slate-800/60 px-3.5 py-2 text-slate-100 shadow-sm focus:ring-2 focus:ring-inset focus:ring-sky-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <button type="submit" id="submit-btn" class="block w-full rounded-md bg-sky-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 transition">Send message</button>
                    </div>
                </form>
            </div>

            <script>
                function handleContactSubmit(event) {
                    event.preventDefault();

                    const nameInput = document.getElementById('name');
                    const emailInput = document.getElementById('email');
                    const messageInput = document.getElementById('message');
                    
                    const name = nameInput.value.trim();
                    const email = emailInput.value.trim();
                    const message = messageInput.value.trim();
                    const alertBox = document.getElementById('feedback-alert');
                    const submitBtn = document.getElementById('submit-btn');

                    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

                    if (!name || !email || !message || !emailRegex.test(email)) {
                        alertBox.innerText = "Please fill out all fields properly with a valid email address.";
                        alertBox.className = "mb-6 p-4 rounded-xl text-sm font-semibold bg-red-950/60 border border-red-800 text-red-200 block animate-pulse";
                        return;
                    }

                    // Disable submit button and change text
                    submitBtn.disabled = true;
                    submitBtn.innerText = "Sending...";

                    // Simulate message being sent
                    setTimeout(() => {
                        alertBox.innerText = "Message Sent! We will get back to you shortly.";
                        alertBox.className = "mb-6 p-4 rounded-xl text-sm font-semibold bg-emerald-950/60 border border-emerald-800 text-emerald-200 block";
                        
                        submitBtn.innerText = "Message Sent";
                        submitBtn.title = "Message Sent";
                        submitBtn.className = "block w-full rounded-md bg-emerald-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm cursor-not-allowed";

                        // Clear inputs
                        nameInput.value = '';
                        emailInput.value = '';
                        messageInput.value = '';

                        // Reset button after 4 seconds to allow sending another message
                        setTimeout(() => {
                            alertBox.className = "hidden";
                            submitBtn.disabled = false;
                            submitBtn.innerText = "Send message";
                            submitBtn.title = "";
                            submitBtn.className = "block w-full rounded-md bg-sky-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-sky-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-600 transition";
                        }, 4000);
                    }, 1000);
                }
            </script>
            
            <div class="mt-16 flex flex-col items-center justify-center gap-y-4 text-gray-600 border-t border-gray-100 pt-10">
                <p class="font-medium text-lg text-gray-900">GearGuard Support</p>
                <p>Email: support@gearguard.com</p>
                <p>Phone: +94 11 234 5678</p>
                <p>Colombo, Sri Lanka</p>
            </div>
        </div>
    </div>
</x-app-layout>
