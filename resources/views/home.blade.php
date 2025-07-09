@extends("layouts.main")
@section("content")
<main class="container mx-auto px-4 py-8">
    <div class="space-y-6">
        <div class="text-center"><h2
                class="text-4xl font-bold text-balance mb-2">Daily Challenges</h2>
            <p class="text-muted-foreground text-lg">Complete these tasks to improve your skills</p>
        </div>
    </div>
</main>
<main class="flex px-6 lg:px-8 flex-col text-white">
    <section class="grid grid-cols-1 lg:grid-cols-2 gap-6 max-w-6xl mx-auto">
        <x-card />
        <x-card title="Criar um container de aplicação API usando Docker" />
        <x-card title="Crie um endpoint em uma API existente" />
        <x-card title="Crie a página de configuração do BOT de whatsapp" />
    </section>
</main>
@stop
