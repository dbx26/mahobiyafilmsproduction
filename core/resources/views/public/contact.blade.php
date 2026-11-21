@extends('public.layouts.app')

@section('title', 'Contact Us - Mahobiya Films Production')

@section('content')

    <!-- Page Title / Banner -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-item">
                <h2>Contact Us</h2>
                <p>Connect with Mahobiya Films Production</p>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">Home</a>
                    </li>
                    <li>
                        <span></span>
                    </li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->

    <!-- Contact Section -->
    <section class="contact-area pt-100 pb-70">
        <div class="container">
            <!-- Section Header -->
            <div class="section-title text-center">
                <span class="sub-title">Studio Inquiries &amp; Collaborations</span>
                <h2>Let's Create Something Meaningful Together</h2>
                <p>Whether you have a film collaboration proposal, theatrical distribution inquiry, press request, or general question, our production desk welcomes hearing from you.</p>
            </div>

            <!-- Main Row: Form + Studio Details -->
            <div class="row">
                <!-- Left Column: Contact Form -->
                <div class="col-lg-7 mb-4 mb-lg-0">
                    <div class="contact-form-card">
                        <h3>Send Us a Message</h3>
                        <p class="form-subtitle">Fill in the form below and our studio communications desk will get back to you promptly.</p>

                        @if(session('success'))
                            <div class="alert alert-success d-flex align-items-center mb-4" role="alert">
                                <i class='bx bx-check-circle me-2 font-20'></i>
                                <div>{{ session('success') }}</div>
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="alert alert-danger mb-4" role="alert">
                                <ul class="mb-0 ps-3">
                                    @foreach($errors->all() as $err)
                                        <li>{{ $err }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="name">Full Name <span class="text-danger">*</span></label>
                                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required placeholder="e.g. Rahul Sharma">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email Address <span class="text-danger">*</span></label>
                                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required placeholder="e.g. name@example.com">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="phone">Phone / WhatsApp</label>
                                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" placeholder="+91 XXXXX XXXXX">
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label class="form-label" for="subject">Subject / Inquiry Type <span class="text-danger">*</span></label>
                                        <input type="text" name="subject" id="subject" class="form-control" value="{{ old('subject') }}" required placeholder="e.g. Theatrical Distribution Inquiry">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="form-label" for="message">Your Message <span class="text-danger">*</span></label>
                                        <textarea name="message" class="form-control" id="message" rows="6" required placeholder="Write your proposal, inquiry, or collaboration message here...">{{ old('message') }}</textarea>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="contact-submit-btn">
                                        <i class='bx bx-send'></i> Send Message
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <!-- Right Column: Studio Information -->
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <h3>Studio Headquarters</h3>

                        <div class="contact-info-list">
                            <!-- Office Address -->
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class='bx bx-current-location'></i>
                                </div>
                                <div class="info-details">
                                    <h4>Studio Office:</h4>
                                    <span>Koushal Tower, Kohka Khurd Main Road (Kurud Road), Kohka, Bhilai, Durg, Chhattisgarh – 490023, India.</span>
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class='bx bx-phone-call'></i>
                                </div>
                                <div class="info-details">
                                    <h4>Production Lines:</h4>
                                    <a href="tel:+919109141966">+91 91091 41966</a>
                                    <a href="tel:+918966002047">+91 89660 02047</a>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class='bx bx-envelope'></i>
                                </div>
                                <div class="info-details">
                                    <h4>Official Email:</h4>
                                    <a href="mailto:mahobiyafilmsproduction@gmail.com">mahobiyafilmsproduction@gmail.com</a>
                                </div>
                            </div>

                            <!-- Operating Hours -->
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class='bx bx-time-five'></i>
                                </div>
                                <div class="info-details">
                                    <h4>Operational Hours:</h4>
                                    <span>Monday – Saturday: 10:00 AM – 7:00 PM IST<br></span>
                                </div>
                            </div>

                            <!-- Social Channels -->
                            <div class="contact-info-item">
                                <div class="info-icon">
                                    <i class='bx bx-share-alt'></i>
                                </div>
                                <div class="info-details">
                                    <h4>Official Channels:</h4>
                                    <div class="contact-social-icons">
                                        <a href="https://youtube.com/@mseries-bhilai" target="_blank" title="M Series – Bhilai YouTube">
                                            <i class='bx bxl-youtube'></i>
                                        </a>
                                        <a href="https://www.instagram.com/official_mahobiya_film" target="_blank" title="Official Mahobiya Films Instagram">
                                            <i class='bx bxl-instagram'></i>
                                        </a>
                                        {{-- <a href="https://facebook.com" target="_blank" title="Facebook">
                                            <i class='bx bxl-facebook'></i>
                                        </a> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Responsive Embedded Map -->
            <div class="contact-map-wrapper">
                <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119066.41709424857!2d81.27249454178553!3d21.192572792617937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a29230588a75e11%3A0x6b8aa89b1c5a9686!2sBhilai%2C%20Chhattisgarh!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" allowfullscreen="" aria-hidden="false" tabindex="0" title="Mahobiya Films Production Bhilai Location"></iframe>
            </div>

        </div>
    </section>
    <!-- End Contact Section -->

@endsection
