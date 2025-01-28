@extends('main.master_layout')
@section('konten')
    <style>
        /* Style the Image Used to Trigger the Modal */
        #myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        #myImg:hover {
            opacity: 0.7;
        }

        /* The Modal (background) */
        .modal {
            display: none;
            /* Hidden by default */
            position: fixed;
            /* Stay in place */
            z-index: 1;
            /* Sit on top */
            padding-top: 100px;
            /* Location of the box */
            left: 0;
            top: 0;
            width: 100%;
            /* Full width */
            height: 100%;
            /* Full height */
            overflow: auto;
            /* Enable scroll if needed */
            background-color: rgb(0, 0, 0);
            /* Fallback color */
            background-color: rgba(0, 0, 0, 0.9);
            /* Black w/ opacity */

        }

        /* Modal Content (Image) */
        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        /* Caption of Modal Image (Image Text) - Same Width as the Image */
        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        /* Add Animation - Zoom in the Modal */
        .modal-content,
        #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0)
            }

            to {
                transform: scale(1)
            }
        }

        /* The Close Button */
        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        /* 100% Image Width on Smaller Screens */
        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }
    </style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-2 mb-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white animated slideInRight">Info Pemenang KAT 2024</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb animated slideInRight mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Event</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <section id="voucher" class="container-fluid">
        <div class="row p-4 g-4">
            {{-- <div class="col-md">
                <div class="wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row gy-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Member Aktif</h4>
                                    <span>Daftar gratis sampai akhir tahun 2024 <a href="https://wa.me/6287814523770/?text="
                                            target="_blank">&nbsp; 👉 Link Daftar Member Gratis</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Belanja 75.000</h4>
                                    <span>Min pembelanjaan 75.000 (berlaku kelipatan) akan mendapatkan 1 kupon
                                        digital</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Periode</h4>
                                    <span>Periode program 01 oktober - 31 desember 2024</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4">
                                    <h4>Cek Kupon</h4>
                                    <span>Melalui Chatbot di nomor layanan prama borma : 0878-1452-3770</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4 mt-2">
                                    <h4>Pengundian di tanggal <span class="text-danger">18 Januari 2025</span></h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="flex-shrink-0 btn-lg-square rounded-circle bg-primary">
                                    <i class="fa fa-check text-white"></i>
                                </div>
                                <div class="ms-4 mt-2">
                                    <h4>Pengumuman pemenang di tanggal <span class="text-danger">25 Januari 2025</span></h4>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div> --}}
            <div class="col-md wow fadeInUp">
                <img id="myImg1" class="img-fluid" src="{{ asset('img/event/kat1.jpg') }}" alt="Kejutan Akhir Tahun"
                    style="border-radius: 15px">
            </div>
            <div class="col-md wow fadeInUp">
                <img id="myImg2" class="img-fluid" src="{{ asset('img/event/kat2.jpg') }}" alt="Kejutan Akhir Tahun"
                    style="border-radius: 15px">
            </div>
            <div class="col-md wow fadeInUp">
                <img id="myImg3" class="img-fluid" src="{{ asset('img/event/kat3.jpg') }}" alt="Kejutan Akhir Tahun"
                    style="border-radius: 15px">
            </div>
        </div>

        <!-- Trigger the Modal -->
        {{-- <img id="myImg" src="img_snow.jpg" alt="Snow" style="width:100%;max-width:300px"> --}}

        <!-- The Modal -->
        <div id="myModal2" class="modal">

            <!-- The Close Button -->
            <span class="close">&times;</span>

            <!-- Modal Content (The Image) -->
            <img class="modal-content" id="img01">

            <!-- Modal Caption (Image Text) -->
            <div id="caption"></div>
        </div>

        <script>
            // Get the modal
            let modal = document.getElementById("myModal2");

            // Get the image and insert it inside the modal - use its "alt" text as a caption
            let img1 = document.getElementById("myImg1");
            let img2 = document.getElementById("myImg2");
            let img3 = document.getElementById("myImg3");
            let modalImg = document.getElementById("img01");
            let captionText = document.getElementById("caption");
            img1.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }
            img2.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            img3.onclick = function() {
                modal.style.display = "block";
                modalImg.src = this.src;
                captionText.innerHTML = this.alt;
            }

            // Get the <span> element that closes the modal
            let span = document.getElementsByClassName("close")[0];

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
                modal.style.display = "none";
            }
        </script>
    </section>
@endsection
