@extends('public.layouts.app')

@section('title', 'Contact Us - Mahobiya Films Production Private Limited')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">CONTACT US</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Inquiries • Film Distribution • Casting • Production Collaborations</p>
    </div>
</div>

<div class="container py-5">
    @if(session('success'))
        <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
            <i class="bi bi-check-circle-fill me-2 fs-5"></i>
            <div>{{ session('success') }}</div>
        </div>
    @endif

    <div class="row g-5">
        <!-- Contact Information -->
        <div class="col-lg-5">
            <h3 class="fw-bold text-white mb-4 brand-font">Get In Touch</h3>
            <p class="text-white-50 mb-4">
                Whether you have questions regarding our upcoming theatrical releases, OTT collaborations, casting opportunities, or media coverage, our production desk is here to assist you.
            </p>

            <div class="d-flex align-items-start gap-3 mb-4">
                <div class="bg-dark p-3 rounded-circle border border-warning text-gold">
                    <i class="bi bi-geo-alt fs-4"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-white mb-1">Registered Office</h6>
                    <p class="text-white-50 small mb-0">
                        Koushal Tower, Kohka Khurd Main Road (Kurud Road), Kohka, Bhilai, Durg, Chhattisgarh - 490023
                    </p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3 mb-4">
                <div class="bg-dark p-3 rounded-circle border border-warning text-gold">
                    <i class="bi bi-telephone fs-4"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-white mb-1">Phone / WhatsApp</h6>
                    <p class="text-white-50 small mb-0">+91 91091 41966</p>
                    <p class="text-white-50 small mb-0">+91 89660 02047</p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3 mb-4">
                <div class="bg-dark p-3 rounded-circle border border-warning text-gold">
                    <i class="bi bi-envelope fs-4"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-white mb-1">Email Address</h6>
                    <p class="text-white-50 small mb-0">mahobiyafilmsproduction@gmail.com</p>
                </div>
            </div>

            <div class="d-flex align-items-start gap-3">
                <div class="bg-dark p-3 rounded-circle border border-warning text-gold">
                    <i class="bi bi-info-circle fs-4"></i>
                </div>
                <div>
                    <h6 class="fw-bold text-white mb-1">Corporate Registration</h6>
                    <p class="text-white-50 small mb-0">CIN: U59111CT2023PTC015188</p>
                    <p class="text-white-50 small mb-0">RoC Chhattisgarh • Active</p>
                </div>
            </div>
        </div>

        <!-- Contact Message Form -->
        <div class="col-lg-7">
            <div class="film-card p-4 p-md-5">
                <h4 class="fw-bold text-white mb-3 brand-font">Send Us a Message</h4>
                <p class="text-white-50 small mb-4">Please fill out the form below and our team will get back to you promptly.</p>

                <form action="{{ route('contact.submit') }}" method="POST">
                    @csrf
                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label text-white-50 small">Your Full Name <span class="text-gold">*</span></label>
                            <input type="text" class="form-control bg-dark text-white border-secondary" name="name" required placeholder="John Doe">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white-50 small">Your Email Address <span class="text-gold">*</span></label>
                            <input type="email" class="form-control bg-dark text-white border-secondary" name="email" required placeholder="name@example.com">
                        </div>
                    </div>

                    <div class="row g-3 mb-3">
                        <div class="col-md-6">
                            <label class="form-label text-white-50 small">Mobile / Phone Number</label>
                            <input type="tel" class="form-control bg-dark text-white border-secondary" name="phone" placeholder="+91 98765 43210">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label text-white-50 small">Inquiry Subject</label>
                            <select class="form-select bg-dark text-white border-secondary" name="subject">
                                <option value="General Inquiry">General Inquiry</option>
                                <option value="Film Distribution / Theatrical">Film Distribution / Theatrical</option>
                                <option value="OTT Rights / Streaming">OTT Rights / Streaming</option>
                                <option value="Casting / Audition">Casting / Audition</option>
                                <option value="Media & Press">Media &amp; Press</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-white-50 small">Message / Inquiry Details <span class="text-gold">*</span></label>
                        <textarea class="form-control bg-dark text-white border-secondary" rows="5" name="message" required placeholder="Write your message here..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-gold btn-lg w-100">
                        <i class="bi bi-send me-1"></i> Send Inquiry
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

