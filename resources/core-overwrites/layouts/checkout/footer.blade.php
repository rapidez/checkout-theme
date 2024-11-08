<footer class="mt-auto">
    <div class="mt-10 flex items-center justify-center gap-6 border-b-4 border-b-ct-enhanced bg-ct-inactive-100 py-4 text-sm text-ct-inactive">
        @foreach (['Privacy Policy', 'Terms & Conditions', 'About us'] as $link)
            <a class="hover:underline" href="#">
                {{ $link }}
            </a>
        @endforeach
    </div>
</footer>
