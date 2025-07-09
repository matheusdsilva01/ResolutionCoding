@extends("layouts.main")
@section('content')
    <main class="container mx-auto px-4 py-8">
        <div class="max-w-4xl mx-auto space-y-6">
            {{--<div class="rounded-lg border bg-card text-card-foreground shadow-sm p-6">
                <div class="space-y-4">
                    <div class="flex items-start justify-between">
                        <div class="flex-1"><p class="text-muted-foreground">Create a responsive grid layout using CSS
                                Grid for a product
                                showcase</p></div>
                    </div>
                    <div class="flex flex-wrap gap-2">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">
                            CSS
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">
                            Layout
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 text-foreground text-xs">
                            Responsive
                        </div>
                    </div>
                    <div class="flex items-center gap-4 text-sm">
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 text-xs font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 hover:bg-primary/80 bg-success/20 text-success border-success/30">
                            Easy
                        </div>
                        <div
                            class="inline-flex items-center rounded-full border px-2.5 py-0.5 font-semibold transition-colors focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 border-transparent bg-secondary text-secondary-foreground hover:bg-secondary/80 text-xs">
                            Frontend
                        </div>
                    </div>
                </div>
            </div>--}}
            <div
                class="rounded-lg border border-border bg-secondary shadow-sm p-6 transition-all duration-300 hover:shadow-lg hover:border-primary/50">
                <h2
                    class="text-xl font-semibold mb-4">Instructions</h2>
                <div class="prose prose-sm max-w-none text-muted-foreground whitespace-pre-line">
                    In this task, you'll learn how to create a responsive product showcase using CSS Grid.

                    ## Requirements:
                    1. Create a grid container with at least 6 product cards
                    2. Make the grid responsive (1 column on mobile, 2-3 on tablet, 4+ on desktop)
                    3. Use grid-template-areas for better layout control
                    4. Add proper spacing between grid items

                    ## Steps:
                    1. Set up the HTML structure with a container and product cards
                    2. Apply CSS Grid to the container
                    3. Define responsive breakpoints
                    4. Style the product cards
                    5. Test the layout on different screen sizes

                    ## Resources:
                    - [CSS Grid Guide](https://css-tricks.com/snippets/css/complete-guide-grid/)
                    - [Grid by Example](https://gridbyexample.com/)
                </div>
            </div>
            <div
                class="rounded-lg border border-border bg-secondary shadow-sm p-6 transition-all duration-300 hover:shadow-lg hover:border-primary/50">
                <h2
                    class="text-xl font-semibold mb-4">Helpful Resources</h2>
                <div class="space-y-2"><a
                        href="https://css-tricks.com/snippets/css/complete-guide-grid/" target="_blank"
                        rel="noopener noreferrer" class="flex items-center space-x-2 text-primary hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-external-link w-4 h-4">
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        </svg>
                        <span>CSS Grid Guide</span></a><a
                        href="https://gridbyexample.com/" target="_blank" rel="noopener noreferrer"
                        class="flex items-center space-x-2 text-primary hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-external-link w-4 h-4">
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        </svg>
                        <span>Grid by Example</span>
                    </a>
                    <a
                        href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Grid_Layout" target="_blank"
                        rel="noopener noreferrer" class="flex items-center space-x-2 text-primary hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="lucide lucide-external-link w-4 h-4">
                            <path d="M15 3h6v6"></path>
                            <path d="M10 14 21 3"></path>
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                        </svg>
                        <span>MDN CSS Grid</span></a>
                </div>
            </div>
        </div>
    </main>
@stop

