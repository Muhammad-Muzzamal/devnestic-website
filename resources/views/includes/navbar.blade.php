<header id="header" class="flex items-center sticky top-0 z-40 bg-white/80 backdrop-blur-md border-b border-gray-200/50 h-20">
    <div class="container mx-auto px-4 flex items-center justify-between relative">

        <!-- ===== Logo Section ===== -->
        <a href="" class="flex items-center z-[100] relative">
            <div class="w-10 h-10 bg-yellow-500 rounded-lg flex items-center justify-center mr-3">
                <span class="text-black font-bold text-lg">D</span>
            </div>
            <h1 class="text-2xl font-bold text-black">Devnestic</h1>
        </a>

        <!-- ===== Navigation Menu ===== -->
        <nav class="hidden xl:block z-30">
            <ul class="flex space-x-8">
                <li>
                    <a href="" class="text-black font-medium hover:text-yellow-500 transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-yellow-500 after:transition-all after:duration-300 hover:after:w-full">Home</a>
                </li>
                <li>
                    <a href="" class="text-gray-700 hover:text-yellow-500 transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-yellow-500 after:transition-all after:duration-300 hover:after:w-full">Blogs</a>
                </li>

                <!-- Services Dropdown -->
                <li class="relative group">
                    <a href="#services" class="flex items-center text-gray-700 hover:text-yellow-500 transition-colors duration-300 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-yellow-500 after:transition-all after:duration-300 hover:after:w-full">
                        <span>Services</span>
                        <i class="bi bi-chevron-down text-xs ml-1 transition-transform duration-300 group-hover:rotate-180"></i>
                    </a>
                    <ul class="absolute left-0 top-full mt-4 w-64 bg-white/95 backdrop-blur-md shadow-xl rounded-xl py-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 z-50 border border-gray-200/50">
                        <li><a href="#" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Website Development</a></li>
                        <li><a href="#" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">UI/UX Design</a></li>
                        <li><a href="#" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Mobile App Development</a></li>
                        <li><a href="#" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Social Media Marketing</a></li>
                        <li><a href="{{ route('services-detail') }}" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Services Detail</a></li>
                        <li><a href="" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Staff Augmentation</a></li>
                    </ul>
                </li>

                <!-- Company Dropdown -->
                <li class="relative group">
                    <a href="#" class="flex items-center text-gray-700 hover:text-yellow-500 transition-colors duration-300 cursor-pointer relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-yellow-500 after:transition-all after:duration-300 hover:after:w-full">
                        <span>Company</span>
                        <i class="bi bi-chevron-down text-xs ml-1 transition-transform duration-300 group-hover:rotate-180"></i>
                    </a>
                    <ul class="absolute left-0 top-full mt-4 w-48 bg-white/95 backdrop-blur-md shadow-xl rounded-xl py-3 opacity-0 invisible group-hover:opacity-100 group-hover:visible transform translate-y-4 group-hover:translate-y-0 transition-all duration-500 z-50 border border-gray-200/50">
                        <li><a href="" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">About Us</a></li>
                        <li><a href="#" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Portfolio</a></li>
                        <li><a href="#" class="block px-4 py-3 text-gray-700 hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 rounded-lg mx-2">Culture</a></li>
                    </ul>
                </li>

                <li>
                    <a href="" class="text-gray-700 hover:text-yellow-500 transition-colors duration-300 relative after:absolute after:bottom-0 after:left-0 after:w-0 after:h-0.5 after:bg-yellow-500 after:transition-all after:duration-300 hover:after:w-full">Contact</a>
                </li>
            </ul>
        </nav>

        <!-- ===== Social Icons ===== -->
        <div class="hidden md:flex items-center space-x-3 z-30">
            <a href="https://x.com/devnestic21" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                <i class="bi bi-twitter-x"></i>
            </a>
            <a href="https://www.facebook.com/share/1A4EtZ9FmX/" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                <i class="bi bi-facebook"></i>
            </a>
            <a href="https://www.instagram.com/devnestic.official?igsh=MXhhN2RlMmJraDh3bg==" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                <i class="bi bi-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/devnestic" class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                <i class="bi bi-linkedin"></i>
            </a>
        </div>

        <!-- Mobile menu toggle -->
        <button class="xl:hidden w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center text-gray-700 hover:bg-yellow-500 hover:text-black transition-all duration-300 z-[100]" id="mobile-toggle">
            <i class="bi bi-list text-xl"></i>
        </button>

    </div>
</header>

<!-- Mobile Menu -->
<div class="xl:hidden fixed inset-0 z-[99] hidden" id="mobile-menu">
    <!-- Backdrop -->
    <div class="absolute inset-0 bg-black/20 backdrop-blur-sm" id="menu-backdrop"></div>
    
    <!-- Menu Content -->
    <div class="relative w-80 h-full bg-white/95 backdrop-blur-md shadow-2xl transform transition-transform duration-500 ease-in-out -translate-x-full" id="menu-content">
        <div class="p-6 h-full overflow-y-auto">
            <!-- Close Button -->
            <button class="absolute top-6 right-6 w-10 h-10 bg-gray-100 rounded-lg flex items-center justify-center text-gray-700 hover:bg-yellow-500 hover:text-black transition-all duration-300 z-[100]" id="close-menu">
                <i class="bi bi-x text-xl"></i>
            </button>

            <!-- Logo -->
            <div class="flex items-center mb-12 mt-4">
                <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center mr-3">
                    <span class="text-black font-bold text-xl">D</span>
                </div>
                <h1 class="text-2xl font-bold text-black">Devnestic</h1>
            </div>

            <!-- Navigation Links -->
            <ul class="space-y-2">
                <li>
                    <a href="" class="flex items-center text-black font-medium py-4 px-4 rounded-xl hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 border-l-4 border-yellow-500 menu-link">
                        <i class="bi bi-house mr-3"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center text-gray-700 py-4 px-4 rounded-xl hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 border-l-4 border-transparent hover:border-yellow-500 menu-link">
                        <i class="bi bi-journal-text mr-3"></i>
                        <span>Blogs</span>
                    </a>
                </li>

                <!-- Services Dropdown Mobile -->
                <li class="border-b border-gray-200/50 pb-2">
                    <button class="flex items-center justify-between w-full text-gray-700 py-4 px-4 rounded-xl hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 mobile-dropdown-toggle border-l-4 border-transparent hover:border-yellow-500">
                        <div class="flex items-center">
                            <i class="bi bi-gear mr-3"></i>
                            <span>Services</span>
                        </div>
                        <i class="bi bi-chevron-down transition-transform duration-300"></i>
                    </button>
                    <ul class="hidden pl-8 pt-2 space-y-1 mobile-dropdown-content">
                        <li><a href="#" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            Website Development
                        </a></li>
                        <li><a href="#" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            UI/UX Design
                        </a></li>
                        <li><a href="#" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            Mobile App Development
                        </a></li>
                        <li><a href="#" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            Social Media Marketing
                        </a></li>
                        <li><a href="" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            Staff Augmentation
                        </a></li>
                    </ul>
                </li>

                <!-- Company Dropdown Mobile -->
                <li class="border-b border-gray-200/50 pb-2">
                    <button class="flex items-center justify-between w-full text-gray-700 py-4 px-4 rounded-xl hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 mobile-dropdown-toggle border-l-4 border-transparent hover:border-yellow-500">
                        <div class="flex items-center">
                            <i class="bi bi-building mr-3"></i>
                            <span>Company</span>
                        </div>
                        <i class="bi bi-chevron-down transition-transform duration-300"></i>
                    </button>
                    <ul class="hidden pl-8 pt-2 space-y-1 mobile-dropdown-content">
                        <li><a href="" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            About Us
                        </a></li>
                        <li><a href="#" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            Portfolio
                        </a></li>
                        <li><a href="#" class="flex items-center py-3 text-gray-600 hover:text-yellow-500 transition-colors duration-300 menu-link">
                            <i class="bi bi-arrow-right-short mr-2"></i>
                            Culture
                        </a></li>
                    </ul>
                </li>

                <li>
                    <a href="" class="flex items-center text-gray-700 py-4 px-4 rounded-xl hover:bg-yellow-500/10 hover:text-yellow-600 transition-all duration-300 border-l-4 border-transparent hover:border-yellow-500 menu-link">
                        <i class="bi bi-telephone mr-3"></i>
                        <span>Contact</span>
                    </a>
                </li>
            </ul>

            <!-- Social Icons in Mobile Menu -->
            <div class="absolute bottom-6 left-6 right-6">
                <div class="flex justify-center space-x-4 pt-6 border-t border-gray-200/50">
                    <a href="https://x.com/devnestic21" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                        <i class="bi bi-twitter-x"></i>
                    </a>
                    <a href="https://www.facebook.com/share/1A4EtZ9FmX/" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                        <i class="bi bi-facebook"></i>
                    </a>
                    <a href="https://www.instagram.com/devnestic.official?igsh=MXhhN2RlMmJraDh3bg==" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                        <i class="bi bi-instagram"></i>
                    </a>
                    <a href="https://www.linkedin.com/company/devnestic" class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center text-gray-600 hover:bg-yellow-500 hover:text-black transition-all duration-300">
                        <i class="bi bi-linkedin"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const mobileToggle = document.getElementById('mobile-toggle');
        const closeMenu = document.getElementById('close-menu');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuContent = document.getElementById('menu-content');
        const menuBackdrop = document.getElementById('menu-backdrop');
        const menuLinks = document.querySelectorAll('.menu-link');

        let isMenuOpen = false;

        // Open mobile menu
        mobileToggle?.addEventListener('click', () => {
            if (!isMenuOpen) {
                mobileMenu.classList.remove('hidden');
                setTimeout(() => {
                    menuContent.classList.remove('-translate-x-full');
                }, 50);
                isMenuOpen = true;
            }
        });

        // Close mobile menu
        function closeMobileMenu() {
            if (isMenuOpen) {
                menuContent.classList.add('-translate-x-full');
                setTimeout(() => {
                    mobileMenu.classList.add('hidden');
                }, 500);
                isMenuOpen = false;
            }
        }

        closeMenu?.addEventListener('click', closeMobileMenu);
        menuBackdrop?.addEventListener('click', closeMobileMenu);

        // Close menu when menu links are clicked
        menuLinks.forEach(link => {
            link.addEventListener('click', closeMobileMenu);
        });

        // Mobile dropdown functionality
        const dropdownToggles = document.querySelectorAll('.mobile-dropdown-toggle');
        dropdownToggles.forEach(toggle => {
            toggle.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent closing the menu
                const content = this.nextElementSibling;
                const icon = this.querySelector('.bi-chevron-down');

                content.classList.toggle('hidden');
                icon.classList.toggle('rotate-180');
            });
        });

        // Close menu on escape key
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && isMenuOpen) {
                closeMobileMenu();
            }
        });

        // Close dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.mobile-dropdown-toggle') && !e.target.closest('.mobile-dropdown-content')) {
                dropdownToggles.forEach(toggle => {
                    const content = toggle.nextElementSibling;
                    const icon = toggle.querySelector('.bi-chevron-down');
                    if (!content.classList.contains('hidden')) {
                        content.classList.add('hidden');
                        icon.classList.remove('rotate-180');
                    }
                });
            }
        });
    });
</script>