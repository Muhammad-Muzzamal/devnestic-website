<!-- Principals Section -->
<section class="bg-white py-20 px-4 md:px-8 lg:px-16 mt-12 mb-12 mx-4 md:mx-8 lg:mx-16 rounded-2xl border border-gray-200 shadow-sm">
    <div class="flex flex-col lg:flex-row items-center justify-center gap-12 lg:gap-16 max-w-7xl mx-auto">
        <!-- First Principal -->
        <div class="flex flex-col items-center text-center lg:w-1/4 transform hover:scale-105 transition-all duration-500">
            <div class="relative group">
                <div class="absolute -inset-4 bg-yellow-500 rounded-2xl opacity-0 group-hover:opacity-20 blur-lg transition-all duration-500"></div>
                <img
                    src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                    alt="Jay Britto"
                    class="w-80 h-96 object-cover rounded-xl shadow-2xl group-hover:shadow-2xl transition-all duration-500" />
            </div>
            <h3 class="text-2xl font-bold text-black mt-6 mb-3 transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-200">JAY BRITTO</h3>
            <p class="font-sans text-sm text-gray-600 uppercase tracking-widest transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-300">FOUNDER AND PRINCIPAL</p>
        </div>

        <!-- Center Content -->
        <div class="flex flex-col items-center text-center lg:w-2/4 max-w-2xl space-y-8">
            <h2 class="text-5xl lg:text-7xl font-bold text-black mb-4 leading-tight transform hover:scale-105 transition-transform duration-500">
                MEET THE <span class="text-yellow-500">PRINCIPALS</span>
            </h2>
            <div class="relative group">
                <div class="absolute -inset-2 bg-yellow-500 rounded-xl opacity-0 group-hover:opacity-10 transition-all duration-500"></div>
                <img
                    src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                    alt="Furniture design"
                    class="w-full max-w-2xl h-48 object-cover rounded-xl shadow-lg group-hover:shadow-xl transition-all duration-500" />
            </div>
            <p class="text-gray-700 text-lg leading-relaxed max-w-2xl transform translate-y-4 opacity-0 animate-fadeInUp">
                As principal and licensed designer, the founder oversees the
                day-to-day operations of Britto Charette and the design and
                manufacture of our firm's custom furniture and award-winning
                accessories.
            </p>
        </div>

        <!-- Second Principal -->
        <div class="flex flex-col items-center text-center lg:w-1/4 transform hover:scale-105 transition-all duration-500">
            <div class="relative group">
                <div class="absolute -inset-4 bg-yellow-500 rounded-2xl opacity-0 group-hover:opacity-20 blur-lg transition-all duration-500"></div>
                <img
                    src="https://media.istockphoto.com/id/2162033406/photo/group-business-meeting-at-bright-beige-office.jpg?s=612x612&w=0&k=20&c=aM9Hqey73JHSz49nrMztNHtvp1BRm2AowEhz6R2jkOs="
                    alt="David Charette"
                    class="w-80 h-96 object-cover rounded-xl shadow-2xl group-hover:shadow-2xl transition-all duration-500" />
            </div>
            <h3 class="text-2xl font-bold text-black mt-6 mb-3 transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-200">DAVID CHARETTE</h3>
            <p class="font-sans text-sm text-gray-600 uppercase tracking-widest transform translate-y-4 opacity-0 group-hover:translate-y-0 group-hover:opacity-100 transition-all duration-500 delay-300">FOUNDER AND PRINCIPAL</p>
        </div>
    </div>

    <!-- Additional Animation Styles -->
    <style>
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
            animation-delay: 0.3s;
        }
        
        /* Staggered animation for cards */
        .principal-card:nth-child(1) { animation-delay: 0.1s; }
        .principal-card:nth-child(2) { animation-delay: 0.2s; }
        .principal-card:nth-child(3) { animation-delay: 0.3s; }
    </style>
</section>