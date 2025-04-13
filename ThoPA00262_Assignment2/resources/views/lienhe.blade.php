@extends('layout')

@section('title', 'Trang Liên Hệ')

@section('noidung')
<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="section-title text-center mb-4">Liên Hệ Với Chúng Tôi</h2>
            <div class="contact-card p-4">
                <div class="contact-info mb-4">
                    <p class="d-flex align-items-center">
                        <i class="bi bi-person-fill me-2"></i>
                        <strong class="me-2">Họ tên:</strong> Lê Minh Thọ
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="bi bi-envelope-fill me-2"></i>
                        <strong class="me-2">Email:</strong> 
                        <a href="mailto:leminhtho762@gmail.com">leminhtho762@gmail.com</a>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="bi bi-telephone-fill me-2"></i>
                        <strong class="me-2">Hotline:</strong> 
                        <a href="tel:0988133043">0988133043</a>
                    </p>
                    <p class="d-flex align-items-center">
                        <i class="bi bi-geo-alt-fill me-2"></i>
                        <strong class="me-2">Địa chỉ:</strong> Đông Hoàng, TP. Thanh Hóa, Thanh Hóa
                    </p>
                </div>
                <div class="map-container">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7506.12548241918!2d105.65323792534792!3d19.837298042801923!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3136f091aae38571%3A0x7ff7fcdadb941e90!2zQsawdSDEkGnhu4duIFZp4buHdCBOYW0!5e0!3m2!1svi!2sus!4v1742921822426!5m2!1svi!2sus" 
                        width="100%" 
                        height="300" 
                        style="border:0; border-radius: 12px;" 
                        allowfullscreen="" 
                        loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .section-title {
        color: #d32f2f;
        font-weight: bold;
        font-size: 2rem;
        border-bottom: 2px solid #d32f2f;
        display: inline-block;
    }
    .contact-card {
        background: white;
        border-radius: 12px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        transition: transform 0.3s ease;
    }
    .contact-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.12);
    }
    .contact-info p {
        font-size: 1.1rem;
        color: #333;
        margin-bottom: 15px;
        line-height: 1.6;
    }
    .contact-info .d-flex {
        flex-wrap: nowrap;
        align-items: center;
    }
    .contact-info strong {
        min-width: 80px;
    }
    .contact-info a {
        color: #d32f2f;
        text-decoration: none;
        transition: color 0.3s ease;
    }
    .contact-info a:hover {
        color: #ff5252;
        text-decoration: underline;
    }
    .map-container {
        overflow: hidden;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
    }
</style>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
@endsection