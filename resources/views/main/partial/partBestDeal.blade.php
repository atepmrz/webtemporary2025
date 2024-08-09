<style>
    .rounded2 {
        border-radius: 10px;
    }
</style>
<!-- Best Deals -->
<div class="container-fluid pt-0 my-3 px-0">
    <div class="text-center mx-auto mt-2 wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px">
        <h1 class="display-5 mb-4">Promosi Best Deals</h1>
    </div>
    <div class="owl-carousel project-carousel wow fadeIn" data-wow-delay="0.1s">

        @for ($x = 1; $x <= 7; $x++)
            <a class="project-item pb-4 px-3" href="{{ url('/layar') }}"><br>
                <img class="img-fluid rounded2" src="{{ asset('img/promo/bestdeal/' . $x . '.jpeg') }}" alt="" />
                <div class="project-title">
                    <button class="btn btn-light rounded-4 mb-0 text-primary lead">Beli Sekarang <i class="bi bi-cart"
                            style="color: rgb(0, 180, 0)"></i>
                    </button>
                </div>
            </a>
        @endfor
    </div>
</div>
