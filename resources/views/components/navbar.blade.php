<header class="w-full text-gray-700 bg-white dark-mode:text-gray-200 dark-mode:bg-gray-800 border-b border-gray">
    <div x-data="{ open: false }"
        class="flex flex-col max-w-screen-xl px-4 mx-auto md:items-center md:justify-between md:flex-row md:px-6 lg:px-8">
        <div class="p-4 flex flex-row items-center justify-between">
            <x-navbar-items.logo />
            <x-navbar-items.menu-icon />
        </div>
        <x-navbar-items.menu />
    </div>
</header>
