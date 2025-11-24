@extends('main')
@section('mainContent')
    <main class="main">
        <!-- Service Details Section -->
        <section id="service-details" class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <!-- Section Title -->
                <div class="text-center mb-12" data-aos="fade-up">
                    <p class="text-yellow-500 font-semibold text-sm uppercase tracking-widest mb-3">Service Details</p>
                    <h2 class="text-3xl lg:text-4xl font-bold text-black mb-4">Business Process <span class="text-yellow-500">Optimization</span></h2>
                    <p class="text-gray-600 text-base max-w-2xl mx-auto">
                        We transform your operations with cutting-edge process optimization strategies that drive efficiency, reduce costs, and accelerate growth.
                    </p>
                </div>

                <div class="flex flex-col lg:flex-row gap-8">
                    <!-- Main Content Area -->
                    <div class="lg:w-8/12">
                        <!-- Hero Service Introduction -->
                        <div class="mb-8" data-aos="fade-up" data-aos-delay="100">
                            <div class="flex flex-wrap gap-3 mb-4">
                                <span class="bg-yellow-500 text-black px-3 py-1 rounded-full text-xs font-semibold">Strategic Consulting</span>
                                <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs">5 min read</span>
                            </div>
                            <h1 class="text-2xl lg:text-3xl font-bold text-black mb-4">Transform Your Business Operations</h1>
                            <p class="text-gray-600 text-base">
                                Streamline your workflows, eliminate bottlenecks, and unlock unprecedented efficiency with our proven optimization methodologies.
                            </p>
                        </div>

                        <!-- Service Visual -->
                        <div class="mb-8 rounded-xl overflow-hidden shadow-lg" data-aos="zoom-in" data-aos-delay="200">
                            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Business Process Optimization" class="w-full h-64 lg:h-80 object-cover">
                        </div>

                        <!-- Service Content -->
                        <div class="mb-12" data-aos="fade-up" data-aos-delay="300">
                            <h3 class="text-xl font-bold text-black mb-4">Transform Your Operations</h3>
                            <div class="space-y-4 text-gray-600 text-sm leading-relaxed">
                                <p>Our comprehensive approach to business process optimization combines industry expertise with cutting-edge technology to deliver measurable results. We analyze your current workflows, identify inefficiencies, and implement strategic improvements.</p>
                                <p>Through systematic analysis and innovative solutions, we help you achieve operational excellence while maintaining flexibility for future growth and adaptation.</p>
                            </div>

                            <!-- Key Benefits Grid -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mt-8" data-aos="fade-up" data-aos-delay="400">
                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:border-yellow-500 hover:shadow-lg transition-all duration-300">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mb-3">
                                        <i class="bi bi-lightning-charge text-xl text-white"></i>
                                    </div>
                                    <h4 class="text-lg font-bold text-black mb-2">Efficiency Boost</h4>
                                    <p class="text-gray-600 text-sm">Streamline operations and reduce processing time by up to 60% with optimized workflows.</p>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:border-yellow-500 hover:shadow-lg transition-all duration-300">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mb-3">
                                        <i class="bi bi-shield-check text-xl text-white"></i>
                                    </div>
                                    <h4 class="text-lg font-bold text-black mb-2">Risk Mitigation</h4>
                                    <p class="text-gray-600 text-sm">Identify and eliminate operational risks while ensuring compliance and security standards.</p>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:border-yellow-500 hover:shadow-lg transition-all duration-300">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mb-3">
                                        <i class="bi bi-graph-up text-xl text-white"></i>
                                    </div>
                                    <h4 class="text-lg font-bold text-black mb-2">Growth Acceleration</h4>
                                    <p class="text-gray-600 text-sm">Scale your operations seamlessly while maintaining quality and efficiency standards.</p>
                                </div>

                                <div class="bg-white border border-gray-200 rounded-lg p-4 hover:border-yellow-500 hover:shadow-lg transition-all duration-300">
                                    <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mb-3">
                                        <i class="bi bi-people text-xl text-white"></i>
                                    </div>
                                    <h4 class="text-lg font-bold text-black mb-2">Team Alignment</h4>
                                    <p class="text-gray-600 text-sm">Foster collaboration and clear communication across departments and teams.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Implementation Timeline -->
                        <div class="mb-8" data-aos="fade-up" data-aos-delay="500">
                            <h3 class="text-xl font-bold text-black mb-6">Implementation Journey</h3>
                            <div class="space-y-6">
                                <!-- Timeline Item 1 -->
                                <div class="flex gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">1</div>
                                        <div class="w-0.5 h-full bg-gray-300 mt-2"></div>
                                    </div>
                                    <div class="flex-1 pb-6">
                                        <h4 class="text-lg font-bold text-black mb-2">Discovery & Assessment</h4>
                                        <p class="text-gray-600 text-sm mb-2">Comprehensive analysis of current processes and identification of optimization opportunities.</p>
                                        <span class="text-yellow-500 text-xs font-semibold">Week 1-2</span>
                                    </div>
                                </div>

                                <!-- Timeline Item 2 -->
                                <div class="flex gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">2</div>
                                        <div class="w-0.5 h-full bg-gray-300 mt-2"></div>
                                    </div>
                                    <div class="flex-1 pb-6">
                                        <h4 class="text-lg font-bold text-black mb-2">Strategic Planning</h4>
                                        <p class="text-gray-600 text-sm mb-2">Development of customized optimization roadmap with clear milestones and success metrics.</p>
                                        <span class="text-yellow-500 text-xs font-semibold">Week 3-4</span>
                                    </div>
                                </div>

                                <!-- Timeline Item 3 -->
                                <div class="flex gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">3</div>
                                        <div class="w-0.5 h-full bg-gray-300 mt-2"></div>
                                    </div>
                                    <div class="flex-1 pb-6">
                                        <h4 class="text-lg font-bold text-black mb-2">Implementation</h4>
                                        <p class="text-gray-600 text-sm mb-2">Systematic rollout of process improvements with continuous monitoring and adjustment.</p>
                                        <span class="text-yellow-500 text-xs font-semibold">Week 5-12</span>
                                    </div>
                                </div>

                                <!-- Timeline Item 4 -->
                                <div class="flex gap-4">
                                    <div class="flex flex-col items-center">
                                        <div class="w-8 h-8 bg-yellow-500 rounded-full flex items-center justify-center text-white font-bold text-sm">4</div>
                                    </div>
                                    <div class="flex-1">
                                        <h4 class="text-lg font-bold text-black mb-2">Optimization & Scale</h4>
                                        <p class="text-gray-600 text-sm mb-2">Fine-tuning of implemented solutions and preparation for organization-wide scaling.</p>
                                        <span class="text-yellow-500 text-xs font-semibold">Week 13-16</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Sidebar -->
                    <div class="lg:w-4/12">
                        <div class="space-y-6" data-aos="fade-up" data-aos-delay="200">
                            <!-- Consultation Form -->
                            <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-lg">
                                <div class="text-center mb-4">
                                    <h4 class="text-lg font-bold text-black mb-2">Schedule Consultation</h4>
                                    <p class="text-gray-600 text-sm">Get personalized advice on optimizing your business processes</p>
                                </div>

                                <form class="space-y-3">
                                    <div>
                                        <input type="text" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all duration-300 text-sm" placeholder="Full Name" required>
                                    </div>

                                    <div>
                                        <input type="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all duration-300 text-sm" placeholder="Email Address" required>
                                    </div>

                                    <div>
                                        <input type="tel" name="phone" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all duration-300 text-sm" placeholder="Phone Number">
                                    </div>

                                    <div>
                                        <textarea name="message" rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:border-yellow-500 focus:ring-1 focus:ring-yellow-500 transition-all duration-300 text-sm" placeholder="Tell us about your challenges..." required></textarea>
                                    </div>

                                    <button type="submit" class="w-full bg-yellow-500 text-black font-semibold py-3 px-4 rounded-lg hover:bg-yellow-600 transition-all duration-300 flex items-center justify-center gap-2 text-sm">
                                        <span>Book Free Consultation</span>
                                        <i class="bi bi-arrow-right"></i>
                                    </button>
                                </form>
                            </div>

                            <!-- Client Success Story -->
                            <div id="successStoryCarousel" class="carousel slide bg-gray-50 rounded-xl p-4 shadow-lg" data-bs-ride="carousel" data-bs-interval="5000">
                                <div class="carousel-inner">
                                    <!-- Testimonial 1 -->
                                    <div class="carousel-item active">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <p class="text-gray-600 text-sm italic leading-relaxed">"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque habitant morbi tristique senectus."</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-3 mb-4">
                                                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Michael Chen" class="w-12 h-12 rounded-full border-2 border-white shadow object-cover">
                                                <div class="text-left">
                                                    <h5 class="font-bold text-black text-sm">Michael Chen</h5>
                                                    <span class="text-yellow-500 text-xs font-semibold">Operations Director</span>
                                                    <small class="text-gray-500 block text-xs">TechCorp Industries</small>
                                                </div>
                                            </div>
                                            <div class="flex justify-center gap-6">
                                                <div class="text-center">
                                                    <span class="block text-lg font-bold text-yellow-500">45%</span>
                                                    <span class="text-gray-600 text-xs">Cost Reduction</span>
                                                </div>
                                                <div class="text-center">
                                                    <span class="block text-lg font-bold text-yellow-500">3x</span>
                                                    <span class="text-gray-600 text-xs">Speed Increase</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial 2 -->
                                    <div class="carousel-item">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <p class="text-gray-600 text-sm italic leading-relaxed">"The Devnestic team completely transformed our workflow! Amazing collaboration and results beyond expectations."</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-3 mb-4">
                                                <img src="https://images.unsplash.com/photo-1494790108755-2616b612b786?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="Sarah Johnson" class="w-12 h-12 rounded-full border-2 border-white shadow object-cover">
                                                <div class="text-left">
                                                    <h5 class="font-bold text-black text-sm">Sarah Johnson</h5>
                                                    <span class="text-yellow-500 text-xs font-semibold">Project Manager</span>
                                                    <small class="text-gray-500 block text-xs">InnovateX Solutions</small>
                                                </div>
                                            </div>
                                            <div class="flex justify-center gap-6">
                                                <div class="text-center">
                                                    <span class="block text-lg font-bold text-yellow-500">60%</span>
                                                    <span class="text-gray-600 text-xs">Productivity Boost</span>
                                                </div>
                                                <div class="text-center">
                                                    <span class="block text-lg font-bold text-yellow-500">2x</span>
                                                    <span class="text-gray-600 text-xs">Faster Delivery</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Testimonial 3 -->
                                    <div class="carousel-item">
                                        <div class="text-center">
                                            <div class="mb-4">
                                                <p class="text-gray-600 text-sm italic leading-relaxed">"Highly professional and detail-oriented team. Our operations became smoother within weeks."</p>
                                            </div>
                                            <div class="flex items-center justify-center gap-3 mb-4">
                                                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=100&q=80" alt="David Lee" class="w-12 h-12 rounded-full border-2 border-white shadow object-cover">
                                                <div class="text-left">
                                                    <h5 class="font-bold text-black text-sm">David Lee</h5>
                                                    <span class="text-yellow-500 text-xs font-semibold">Head of Operations</span>
                                                    <small class="text-gray-500 block text-xs">BrightTech Inc.</small>
                                                </div>
                                            </div>
                                            <div class="flex justify-center gap-6">
                                                <div class="text-center">
                                                    <span class="block text-lg font-bold text-yellow-500">50%</span>
                                                    <span class="text-gray-600 text-xs">Efficiency Gain</span>
                                                </div>
                                                <div class="text-center">
                                                    <span class="block text-lg font-bold text-yellow-500">4x</span>
                                                    <span class="text-gray-600 text-xs">ROI Growth</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Carousel Controls -->
                                <button class="carousel-control-prev w-8 h-8 bg-black rounded-full absolute top-1/2 -left-4 transform -translate-y-1/2 opacity-70 hover:opacity-100" type="button" data-bs-target="#successStoryCarousel" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" style="background-size: 0.8rem;"></span>
                                </button>
                                <button class="carousel-control-next w-8 h-8 bg-black rounded-full absolute top-1/2 -right-4 transform -translate-y-1/2 opacity-70 hover:opacity-100" type="button" data-bs-target="#successStoryCarousel" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" style="background-size: 0.8rem;"></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

<style>
    .carousel-control-prev,
    .carousel-control-next {
        width: 32px;
        height: 32px;
        background: black;
        border-radius: 50%;
        opacity: 0.7;
        top: 50%;
        transform: translateY(-50%);
        transition: opacity 0.3s ease;
    }

    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        opacity: 1;
        background: #f59e0b;
    }

    .carousel-control-prev {
        left: -16px;
    }

    .carousel-control-next {
        right: -16px;
    }

    @media (max-width: 768px) {
        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }
    }
</style>
