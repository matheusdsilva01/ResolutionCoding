@props([
    'title' => 'Implement CSS Grid Layout',
    'description' => 'Create a responsive grid layout using CSS Grid for a product showcase',
])

<a href="/task">
    <div
        class="rounded-lg border border-border bg-secondary text-muted-foreground shadow-sm p-6 transition-all duration-300 hover:shadow-lg hover:border-primary/50 cursor-pointer">
        <div class="space-y-4">
            <div class="flex items-start justify-between">
                <div class="flex-1">
                    <h3 class="text-lg font-semibold">{{ $title }}</h3>
                    <p class="text-sm text-muted-foreground mt-1">{{ $description }}</p>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                     class="lucide lucide-circle-play w-6 h-6 text-primary ml-2 flex-shrink-0">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polygon points="10 8 16 12 10 16 10 8"></polygon>
                </svg>
            </div>
            {{--            <div class="flex flex-wrap gap-2">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-zinc-100 border-border text-xs">
                                CSS
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-zinc-100 border-border text-xs">
                                Layout
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-zinc-100 border-border text-xs">
                                Responsive
                            </div>
                        </div>
                        <div class="flex items-center justify-between text-sm">
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-success/20 text-success border-success/30">
                                Easy
                            </div>
                            <div
                                class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-gray-900 text-zinc-200 text-xs">
                                Frontend
                            </div>
                        </div>--}}
        </div>
    </div>
</a>
