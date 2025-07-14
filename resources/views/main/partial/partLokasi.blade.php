<!-- Lokasi Start -->
<div id="lokasi" class="container-fluid">
    <div class="container-fluid pt-4">
        <div class="container-fluid">
            <div class="row pb-5">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">
                    <iframe class="w-100"
                        src="https://www.google.com/maps/d/embed?mid=1KOO0-91xftJfMFYqxUlVylAE7TNIj1w&ehbc=2E312F&noprof=1"
                        frameborder="0" style="min-height: 450px; border:0; border-radius:10px" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="fw-medium text-uppercase text-primary mb-2">Contact Us</p>
                    <h3 class="mb-4">Terima kasih sudah menjadi pelanggan setia <span class="text-primary">Prama
                            Borma Toserba</span>, bila
                        anda memerlukan bantuan, jangan ragu untuk menghubungi kami
                    </h3>
                    <div class="row g-4">
                        <div class="col-sm-6 mt-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-phone-alt text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Call</h6>
                                    <span>+62 878 1452 3770</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mt-3">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-square bg-primary rounded-circle">
                                    <i class="fa fa-envelope text-white"></i>
                                </div>
                                <div class="ms-3">
                                    <h6>Email</h6>
                                    <span>info@pramatoserba.co.id</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Notification area -->
                    <div id="notification"></div>

                    <form id="contactForm" action="{{ route('send.message') }}" method="POST" novalidate>
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" name="name" class="form-control border-borma" id="name" placeholder="Your Name" required>
                                    <label for="name">Nama</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" name="email" class="form-control border-borma" id="email" placeholder="Your Email" required>
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" name="subject" class="form-control border-borma" id="subject" placeholder="Subject" required>
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea name="message" class="form-control border-borma" placeholder="Leave a message here" id="message" style="height: 150px" required></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button id="submitBtn" class="btn btn-primary py-3 px-5 border-borma" type="submit">
                                    <i class="bi bi-send"></i> Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Lokasi End -->

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const form = e.target;
    const submitBtn = document.getElementById('submitBtn');
    const notification = document.getElementById('notification');

    submitBtn.disabled = true;
    notification.innerHTML = '';

    const formData = new FormData(form);

    fetch(form.action, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'X-CSRF-TOKEN': form.querySelector('input[name="_token"]').value
        },
        body: formData
    })
    .then(response => {
        if (!response.ok) throw response;
        return response.json();
    })
    .then(data => {
        notification.innerHTML = `<div class="alert alert-success mt-3">${data.message}</div>`;
        form.reset();
        submitBtn.disabled = false;
    })
    .catch(async (error) => {
        let errorText = '<div class="alert alert-danger mt-3"><ul>';
        if (error.json) {
            const errData = await error.json();
            if (errData.errors) {
                for (const key in errData.errors) {
                    errorText += `<li>${errData.errors[key][0]}</li>`;
                }
            } else {
                errorText += `<li>Terjadi kesalahan.</li>`;
            }
        } else {
            errorText += `<li>Terjadi kesalahan.</li>`;
        }
        errorText += '</ul></div>';
        notification.innerHTML = errorText;
        submitBtn.disabled = false;
    });
});
</script>
