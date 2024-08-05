<div x-data="{ isOpen: false, openedWithKeyboard: false, leaveTimeout: null }" @mouseleave.prevent="leaveTimeout = setTimeout(() => { isOpen = false }, 100)" @mouseenter="leaveTimeout ? clearTimeout(leaveTimeout) : true" @keydown.esc.prevent="isOpen = false, openedWithKeyboard = false" @click.outside="isOpen = false, openedWithKeyboard = false" class="relative">
    <!-- Toggle Button -->
    <button type="button" @mouseover="isOpen = true" @keydown.space.prevent="openedWithKeyboard = true" @keydown.enter.prevent="openedWithKeyboard = true" @keydown.down.prevent="openedWithKeyboard = true" class="inline-flex cursor-pointer items-center gap-2 whitespace-nowrap rounded-xl bg-gray-700 hover:text-white text-gray-300 px-4 py-2 text-sm font-medium tracking-wide transition hover:opacity-85 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2
     " :class="isOpen || openedWithKeyboard ? : " :aria-expanded="isOpen || openedWithKeyboard" aria-haspopup="true">
        Presidium
        <svg aria-hidden="true" fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-4 w-4 rotate-0">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
        </svg>        
    </button>
    <!-- Dropdown Menu -->
    <div x-cloak x-show="isOpen || openedWithKeyboard" x-transition x-trap="openedWithKeyboard" @click.outside="isOpen = false, openedWithKeyboard = false" @keydown.down.prevent="$focus.wrap().next()" @keydown.up.prevent="$focus.wrap().previous()" class="absolute top-11 left-0 flex w-full min-w-[12rem] flex-col overflow-hidden rounded-xl border border-slate-300 bg-slate-100 py-1.5 dark:border-slate-700 dark:bg-slate-800" role="menu">
        <a href="/presidium" class="bg-slate-100 px-4 py-2 text-sm text-slate-700 hover:bg-slate-800/5 hover:text-black focus-visible:bg-slate-800/10 focus-visible:text-black focus-visible:outline-none dark:bg-slate-800 dark:text-slate-300 dark:hover:bg-slate-100/5 dark:hover:text-white dark:focus-visible:bg-slate-100/10 dark:focus-visible:text-white" role="menuitem">Presidium 2023</a>
    </div>
</div>
