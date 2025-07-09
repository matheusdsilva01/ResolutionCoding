<header class="border-b border-border bg-secondary/50 backdrop-blur supports-[backdrop-filter]:bg-secondary/50">
    <div class="container mx-auto px-4 py-6">
        @if(Route::is('viewTask'))
            <div class="flex items-center space-x-4">
                <a href="/">
                    <button
                        class="flex items-center justify-center gap-2 text-sm font-medium h-9 px-3 transition-all cursor-pointer border-b border-b-transparent hover:border-b-white">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-4 h-4 mr-2">
                            <path d="m12 19-7-7 7-7"></path>
                            <path d="M19 12H5"></path>
                        </svg>
                        Back to Tasks
                    </button>
                </a>
                <div class="flex items-center space-x-3">
                    <div class="flex items-center justify-center w-8 h-8 rounded-lg bg-primary text-secondary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="w-5 h-5">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polygon points="10 8 16 12 10 16 10 8"></polygon>
                        </svg>
                    </div>
                    <h1 class="text-2xl font-bold">Implement CSS Grid Layout</h1></div>
            </div>
        @else
            <div class="flex items-center justify-center">
                <div class="flex items-center space-x-3">
                    <div class="flex items-center justify-center w-12 h-12 rounded-lg bg-primary">
                        <img src="{{asset('/logo.svg')}}" alt="logo image">
                    </div>
                    <div class="text-center"><h1 class="text-3xl font-bold">DevSkills</h1>
                        <p class="text-sm text-muted-foreground">Level up your coding abilities</p></div>
                </div>
            </div>
        @endif
    </div>
</header>
