<x-rapidez::notifications />
<footer class="mt-auto">
    <div class="mt-10 flex items-center justify-center gap-6 border-b-4 border-b-primary bg py-4 text-sm text-muted">
        @foreach (['Privacy Policy', 'Terms & Conditions'] as $link)
            <a class="hover:underline" href="#">
                {{ $link }}
            </a>
        @endforeach
    </div>
</footer>
