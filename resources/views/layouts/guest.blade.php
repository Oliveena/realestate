@props(['title' => '', 'bodyClass' => ''])

<x-base-layout :$title>

    <main style="background-image: url('img/1921.jpg')">
        <div class="container d-flex align-items-center" style="height: calc(110vh - 56px);">
            <div class="form-container">
                {{ $slot }}
                <div class="d-flex gap-2 justify-content-center mt-3">
                    <x-google-button />
                    <x-fb-button />
                    </div>

                    <div class="text-center mt-3">
                    {{ $footerLinks }}

                </div>
                
                <div class="text-center mt-3">
                    <a href="index.html" class="text-muted">Back</a>
                </div>
            </div>
        </div>
    </main>

</x-base-layout>