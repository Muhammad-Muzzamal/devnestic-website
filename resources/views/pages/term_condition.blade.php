@extends('main')
@section("mainContent")
<style>
    /* Custom scrollbar */
   

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    /* Animation for accept button */
    @keyframes pulse {
        0% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.05);
        }

        100% {
            transform: scale(1);
        }
    }

    .pulse-animation {
        animation: pulse 2s infinite;
    }
</style>

<main class="container mx-auto px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <!-- Page Header -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold mb-4">Terms and Conditions</h1>
            <p class="text-lg text-gray-700 max-w-2xl mx-auto">Please read these terms and conditions carefully before using our services.</p>
            <div class="w-24 h-1 bg-yellow-400 mx-auto mt-6"></div>
        </div>

        <!-- Last Updated -->
        <div class="bg-yellow-50 border-l-4 border-yellow-400 p-4 mb-8">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <i class="fas fa-info-circle text-yellow-500 mt-1"></i>
                </div>
                <div class="ml-3">
                    <p class="text-sm text-gray-700">
                        <span class="font-semibold">Last Updated:</span> October 15, 2023
                    </p>
                </div>
            </div>
        </div>

        <!-- Table of Contents -->
        <div class="bg-gray-50 rounded-lg p-6 mb-8">
            <h2 class="text-xl font-bold mb-4 flex items-center">
                <i class="fas fa-list-ul text-yellow-500 mr-2"></i>
                Table of Contents
            </h2>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-2">
                <li><a href="#section1" class="text-yellow-600 hover:text-yellow-700 transition-colors">1. Introduction</a></li>
                <li><a href="#section2" class="text-yellow-600 hover:text-yellow-700 transition-colors">2. Account Registration</a></li>
                <li><a href="#section3" class="text-yellow-600 hover:text-yellow-700 transition-colors">3. Intellectual Property</a></li>
                <li><a href="#section4" class="text-yellow-600 hover:text-yellow-700 transition-colors">4. User Responsibilities</a></li>
                <li><a href="#section5" class="text-yellow-600 hover:text-yellow-700 transition-colors">5. Payment Terms</a></li>
                <li><a href="#section6" class="text-yellow-600 hover:text-yellow-700 transition-colors">6. Termination</a></li>
                <li><a href="#section7" class="text-yellow-600 hover:text-yellow-700 transition-colors">7. Limitation of Liability</a></li>
                <li><a href="#section8" class="text-yellow-600 hover:text-yellow-700 transition-colors">8. Governing Law</a></li>
            </ul>
        </div>

        <!-- Terms Content -->
        <div class="space-y-10">
            <!-- Section 1 -->
            <section id="section1" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">1</span>
                    </div>
                    <h2 class="text-2xl font-bold">Introduction</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">Welcome to Your Company. These Terms and Conditions govern your use of our website and services. By accessing or using our services, you agree to be bound by these Terms.</p>
                    <p class="mb-4">We reserve the right to modify these Terms at any time. We will notify you of any changes by posting the new Terms on this page and updating the "Last Updated" date.</p>
                    <p>Your continued use of the Service after any changes constitutes your acceptance of the new Terms.</p>
                </div>
            </section>

            <!-- Section 2 -->
            <section id="section2" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">2</span>
                    </div>
                    <h2 class="text-2xl font-bold">Account Registration</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">To access certain features of our services, you may be required to register for an account. When registering, you agree to provide accurate, current, and complete information.</p>
                    <p class="mb-4">You are responsible for safeguarding your account password and for any activities or actions under your account. You agree to notify us immediately of any unauthorized use of your account.</p>
                    <p>We reserve the right to disable any user account at our sole discretion if we believe you have violated any provision of these Terms.</p>
                </div>
            </section>

            <!-- Section 3 -->
            <section id="section3" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">3</span>
                    </div>
                    <h2 class="text-2xl font-bold">Intellectual Property</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">The Service and its original content, features, and functionality are and will remain the exclusive property of Your Company and its licensors.</p>
                    <p class="mb-4">Our trademarks and trade dress may not be used in connection with any product or service without the prior written consent of Your Company.</p>
                    <p>You may not reproduce, distribute, modify, create derivative works of, publicly display, or otherwise use any content from our services without our express written permission.</p>
                </div>
            </section>

            <!-- Section 4 -->
            <section id="section4" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">4</span>
                    </div>
                    <h2 class="text-2xl font-bold">User Responsibilities</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">You agree not to use the Service:</p>
                    <ul class="list-disc pl-6 mb-4 space-y-2">
                        <li>In any way that violates any applicable national or international law or regulation</li>
                        <li>To transmit, or procure the sending of, any advertising or promotional material</li>
                        <li>To impersonate or attempt to impersonate the Company, a Company employee, another user, or any other person or entity</li>
                        <li>To engage in any other conduct that restricts or inhibits anyone's use or enjoyment of the Service</li>
                    </ul>
                    <p>We have the right to investigate violations of these Terms and may involve law enforcement authorities in prosecuting users who violate these Terms.</p>
                </div>
            </section>

            <!-- Section 5 -->
            <section id="section5" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">5</span>
                    </div>
                    <h2 class="text-2xl font-bold">Payment Terms</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">Certain aspects of the Service may be provided for a fee. You agree to pay all applicable fees as described on our website.</p>
                    <p class="mb-4">All fees are non-refundable unless otherwise stated. We reserve the right to change our pricing with 30 days notice to you.</p>
                    <p>If you dispute any charges, you must let us know within sixty (60) days after the date that we invoice you.</p>
                </div>
            </section>

            <!-- Section 6 -->
            <section id="section6" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">6</span>
                    </div>
                    <h2 class="text-2xl font-bold">Termination</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">We may terminate or suspend your account and bar access to the Service immediately, without prior notice or liability, under our sole discretion, for any reason whatsoever and without limitation.</p>
                    <p class="mb-4">If you wish to terminate your account, you may simply discontinue using the Service.</p>
                    <p>All provisions of the Terms which by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity and limitations of liability.</p>
                </div>
            </section>

            <!-- Section 7 -->
            <section id="section7" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">7</span>
                    </div>
                    <h2 class="text-2xl font-bold">Limitation of Liability</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">In no event shall Your Company, nor its directors, employees, partners, agents, suppliers, or affiliates, be liable for any indirect, incidental, special, consequential or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses.</p>
                    <p>This limitation of liability section applies whether the alleged liability is based on contract, tort, negligence, strict liability, or any other basis, even if we have been advised of the possibility of such damage.</p>
                </div>
            </section>

            <!-- Section 8 -->
            <section id="section8" class="scroll-mt-20">
                <div class="flex items-center mb-4">
                    <div class="w-8 h-8 bg-yellow-400 rounded-full flex items-center justify-center mr-3">
                        <span class="text-black font-bold">8</span>
                    </div>
                    <h2 class="text-2xl font-bold">Governing Law</h2>
                </div>
                <div class="ml-11">
                    <p class="mb-4">These Terms shall be governed and construed in accordance with the laws of the United States, without regard to its conflict of law provisions.</p>
                    <p>Our failure to enforce any right or provision of these Terms will not be considered a waiver of those rights. If any provision of these Terms is held to be invalid or unenforceable by a court, the remaining provisions of these Terms will remain in effect.</p>
                </div>
            </section>
        </div>

        <!-- Acceptance Section -->
        <div class="mt-12 p-6 border border-yellow-300 rounded-lg bg-yellow-50">
            <h2 class="text-xl font-bold mb-4">Acceptance of Terms</h2>
            <p class="mb-6">By using our services, you acknowledge that you have read, understood, and agree to be bound by these Terms and Conditions.</p>

            <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
                <div class="flex items-center">
                    <input type="checkbox" id="acceptTerms" class="h-5 w-5 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                    <label for="acceptTerms" class="ml-2 block text-sm text-gray-900">
                        I have read and agree to the Terms and Conditions
                    </label>
                </div>
                <button id="acceptButton" class="px-6 py-3 bg-yellow-400 text-black font-semibold rounded-lg hover:bg-yellow-500 transition-colors disabled:opacity-50 disabled:cursor-not-allowed pulse-animation" disabled>
                    Accept & Continue
                </button>
            </div>
        </div>

        <!-- Contact Information -->
        <div class="mt-12 text-center">
            <h2 class="text-xl font-bold mb-4">Questions?</h2>
            <p class="mb-2">If you have any questions about these Terms, please contact us:</p>
            <div class="flex flex-col sm:flex-row justify-center gap-6 mt-4">
                <div class="flex items-center">
                    <i class="fas fa-envelope text-yellow-500 mr-2"></i>
                    <span>legal@yourcompany.com</span>
                </div>
                <div class="flex items-center">
                    <i class="fas fa-phone text-yellow-500 mr-2"></i>
                    <span>+1 (555) 123-4567</span>
                </div>
            </div>
        </div>
    </div>
</main>


<script>
    // Toggle accept button based on checkbox
    const acceptCheckbox = document.getElementById('acceptTerms');
    const acceptButton = document.getElementById('acceptButton');

    acceptCheckbox.addEventListener('change', function() {
        acceptButton.disabled = !this.checked;
    });

    // Back to top button
    const backToTopButton = document.getElementById('backToTop');

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.remove('hidden');
        } else {
            backToTopButton.classList.add('hidden');
        }
    });

    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    // Smooth scrolling for table of contents links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 100,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Accept button functionality
    acceptButton.addEventListener('click', function() {
        if (!this.disabled) {
            // In a real application, you would save the acceptance status
            alert('Thank you for accepting our Terms and Conditions!');
            // You could redirect to another page or enable features
            // window.location.href = '/dashboard';
        }
    });
</script>
@endsection