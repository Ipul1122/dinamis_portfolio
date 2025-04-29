<nav class="bg-white border-gray-200 dark:bg-white dark:border-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="" class="h-8" alt="" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-gray-800">Asep Surahmat Portfolio</span>
        </a>
        <button data-collapse-toggle="navbar-dropdown" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-dropdown" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-dropdown">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-white md:dark:bg-white dark:border-white">
                <li>
                    <a href="/" id="nav-home" class="nav-link block py-2 px-3 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-800 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-800 md:dark:hover:bg-transparent" aria-current="page">Home</a>
                </li>
                <li>
                    <a href="/about" id="nav-about" class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-800 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-800 md:dark:hover:bg-transparent" aria-current="page">About</a>
                </li>
                <li>
                    <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="nav-link flex items-center justify-between w-full py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-gray-800 md:dark:hover:text-blue-500 dark:focus:text-gray-800 dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Experience <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                    </svg></button>
                    <!-- Dropdown menu -->
                    <div id="dropdownNavbar" class="z-10 hidden font-normal bg-gray-800 divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                            <li>
                                <a href="/experience/work" id="nav-work" class="dropdown-link block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-gray-800">Work</a>
                            </li>
                            <li>
                                <a href="/experience/scient" id="nav-scient" class="dropdown-link block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-gray-800">Scients</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li>
                    <a href="/skills" id="nav-skills" class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-800 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-800 md:dark:hover:bg-transparent">Skill</a>
                </li>
                <li>
                    <a href="/contact" id="nav-contact" class="nav-link block py-2 px-3 text-gray-900 rounded-sm hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-800 md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-gray-800 md:dark:hover:bg-transparent">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Get current path
    const currentPath = window.location.pathname;
    
    // Add active class to main navigation links
    const navLinks = document.querySelectorAll('.nav-link');
    navLinks.forEach(link => {
        // Reset all links to default color first
        link.classList.remove('text-blue-700', 'md:text-blue-700', 'dark:text-blue-500', 'md:dark:text-blue-500');
        link.classList.add('text-gray-900', 'dark:text-white');
        
        // Check if this link matches current path
        const linkPath = link.getAttribute('href');
        if (currentPath === linkPath) {
            // Set active state
            link.classList.remove('text-gray-900', 'dark:text-white');
            link.classList.add('text-blue-700', 'md:text-blue-700', 'dark:text-blue-500', 'md:dark:text-blue-500');
        }
    });
    
    // Add active class to dropdown links
    const dropdownLinks = document.querySelectorAll('.dropdown-link');
    dropdownLinks.forEach(link => {
        // Reset all dropdown links to default color first
        link.classList.remove('text-blue-700');
        
        // Check if this dropdown link matches current path
        const linkPath = link.getAttribute('href');
        if (currentPath === linkPath) {
            // Set active state for dropdown link
            link.classList.add('text-blue-700');
            
            // Also highlight parent dropdown button
            const dropdownButton = document.getElementById('dropdownNavbarLink');
            dropdownButton.classList.remove('text-gray-900', 'dark:text-white');
            dropdownButton.classList.add('text-blue-700', 'md:text-blue-700', 'dark:text-blue-500', 'md:dark:text-blue-500');
        }
    });
    
    // Add click event listeners to all nav links
    const allLinks = document.querySelectorAll('.nav-link, .dropdown-link');
    allLinks.forEach(link => {
        link.addEventListener('click', function() {
            // Reset all links
            allLinks.forEach(l => {
                l.classList.remove('text-blue-700', 'md:text-blue-700', 'dark:text-blue-500', 'md:dark:text-blue-500');
                if (l.classList.contains('nav-link')) {
                    l.classList.add('text-gray-900', 'dark:text-white');
                }
            });
            
            // Set clicked link to active
            this.classList.remove('text-gray-900', 'dark:text-white');
            this.classList.add('text-blue-700', 'md:text-blue-700', 'dark:text-blue-500', 'md:dark:text-blue-500');
            
            // If it's a dropdown link, also activate the dropdown button
            if (this.classList.contains('dropdown-link')) {
                const dropdownButton = document.getElementById('dropdownNavbarLink');
                dropdownButton.classList.remove('text-gray-900', 'dark:text-white');
                dropdownButton.classList.add('text-blue-700', 'md:text-blue-700', 'dark:text-blue-500', 'md:dark:text-blue-500');
            }
        });
    });
});
</script>