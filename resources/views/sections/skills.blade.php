<section id="skills" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <!-- Section Title -->
        <div class="text-center mb-16" data-aos="fade-up">
            <p class="text-yellow-500 font-semibold text-sm uppercase tracking-widest mb-3">Our Expertise</p>
            <h2 class="text-3xl font-bold text-black mb-4">Technical <span class="text-yellow-500">Skills</span></h2>
            <p class="text-gray-600 text-lg max-w-3xl mx-auto">
                We master cutting-edge technologies to deliver exceptional digital solutions that drive your business forward.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Skill 1 -->
            <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-yellow-500 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <h3 class="text-xl font-bold text-black mb-2 group-hover:text-yellow-500 transition-colors duration-300">HTML</h3>
                <p class="text-gray-600 mb-4 text-sm">Building semantic, accessible, and SEO-friendly web structures.</p>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-black font-semibold">90%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                    <div class="bg-yellow-500 h-2 rounded-full transform origin-left transition-all duration-1000 ease-out" 
                         style="width: 0%"
                         data-width="90%">
                    </div>
                </div>
            </div>

            <!-- Skill 2 -->
            <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-yellow-500 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <h3 class="text-xl font-bold text-black mb-2 group-hover:text-yellow-500 transition-colors duration-300">CSS</h3>
                <p class="text-gray-600 mb-4 text-sm">Creating responsive, modern, and visually stunning designs.</p>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-black font-semibold">95%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                    <div class="bg-yellow-500 h-2 rounded-full transform origin-left transition-all duration-1000 ease-out" 
                         style="width: 0%"
                         data-width="95%">
                    </div>
                </div>
            </div>

            <!-- Skill 3 -->
            <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-yellow-500 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <h3 class="text-xl font-bold text-black mb-2 group-hover:text-yellow-500 transition-colors duration-300">JavaScript</h3>
                <p class="text-gray-600 mb-4 text-sm">Developing interactive and dynamic web applications.</p>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-black font-semibold">80%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                    <div class="bg-yellow-500 h-2 rounded-full transform origin-left transition-all duration-1000 ease-out" 
                         style="width: 0%"
                         data-width="80%">
                    </div>
                </div>
            </div>

            <!-- Skill 4 -->
            <div class="group bg-white border border-gray-200 rounded-lg p-6 hover:border-yellow-500 hover:shadow-xl transform hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="400">
                <h3 class="text-xl font-bold text-black mb-2 group-hover:text-yellow-500 transition-colors duration-300">Photoshop</h3>
                <p class="text-gray-600 mb-4 text-sm">Crafting stunning visual designs and graphics.</p>
                <div class="flex justify-between items-center mb-2">
                    <span class="text-black font-semibold">55%</span>
                </div>
                <div class="w-full bg-gray-200 rounded-full h-2 overflow-hidden">
                    <div class="bg-yellow-500 h-2 rounded-full transform origin-left transition-all duration-1000 ease-out" 
                         style="width: 0%"
                         data-width="55%">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Animation Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Animate progress bars when section comes into view
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const progressBars = entry.target.querySelectorAll('[data-width]');
                        progressBars.forEach(bar => {
                            const width = bar.getAttribute('data-width');
                            setTimeout(() => {
                                bar.style.width = width;
                            }, 200);
                        });
                    }
                });
            }, { threshold: 0.5 });

            const skillsSection = document.getElementById('skills');
            if (skillsSection) {
                observer.observe(skillsSection);
            }

            // Optional: Animate on hover as well
            const skillCards = document.querySelectorAll('.group');
            skillCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    const progressBar = this.querySelector('[data-width]');
                    if (progressBar && progressBar.style.width === '0%') {
                        const width = progressBar.getAttribute('data-width');
                        progressBar.style.width = width;
                    }
                });
            });
        });
    </script>
</section>