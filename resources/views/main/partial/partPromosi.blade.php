<style>
    .rounded2 {
        border-radius: 10px;
    }
</style>
<!-- Promosi -->
<div class="container-fluid pt-0 my-3 px-0">
    <div class="text-center mx-auto mt-2 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px">
        <h1 class="display-5 mb-4">Promosi <span class="text-primary">{{ date('F') }}</span>
        </h1>
    </div>
    <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">
        @php
        $files = [];
        $allowed_extensions = ['jpg', 'jpeg', 'png', 'svg'];
        $directory = public_path('img/promo/items');

        if (is_dir($directory)) {
        $allFiles = scandir($directory);
        foreach ($allFiles as $file) {
        if ($file === '.' || $file === '..') continue;
        $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
        if (in_array($ext, $allowed_extensions)) {
        $files[] = 'img/promo/items/' . $file;
        }
        }
        }
        @endphp
        @foreach ($files as $file )
        <a class="project-item pb-4 px-3" href="{{ url('/layar') }}"><br>
            <img class="img-fluid rounded2" src="{{ asset($file) }}" alt="Promo Items" />
            <div class="project-title">
                <button class="btn btn-light rounded-4 mb-0 text-primary lead">Beli Sekarang <i class="bi bi-cart"
                        style="color: rgb(0, 180, 0)"></i>
                </button>
            </div>
        </a>
        @endforeach
    </div>
</div>
<!-- Project End -->
