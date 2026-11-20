@extends('public.layouts.app')

@section('title', 'About Us - Mahobiya Films Production Private Limited')

@section('content')
<div class="py-5 text-center" style="background: linear-gradient(180deg, #16181f 0%, #0b0c10 100%); border-bottom: 1px solid rgba(229, 169, 59, 0.2);">
    <div class="container py-4">
        <h1 class="display-4 fw-bold text-white brand-font mb-2">ABOUT OUR PRODUCTION HOUSE</h1>
        <p class="text-gold text-uppercase fw-semibold" style="letter-spacing: 2px;">Cinematic Vision • High Quality Production • Cultural Authenticity</p>
    </div>
</div>

<div class="container py-5">
    <!-- Corporate Overview -->
    <div class="row g-5 align-items-center mb-5">
        <div class="col-lg-6">
            <span class="text-gold fw-bold text-uppercase small" style="letter-spacing: 1.5px;">Corporate Profile</span>
            <h2 class="display-6 fw-bold text-white mt-1 mb-4">Mahobiya Films Production Private Limited</h2>
            <p class="text-white-50">
                <strong>Mahobiya Films Production Private Limited</strong> is an active, unlisted private limited company incorporated on <strong>September 15, 2023</strong>, in Bhilai, Chhattisgarh. It operates as a full-fledged motion picture, television, and OTT film production house.
            </p>
            <p class="text-white-50">
                Over the years, the studio has expanded from regional cinematic productions into major historical and mythological feature projects certified by the <strong>Central Board of Film Certification (CBFC)</strong>.
            </p>

            <div class="card p-4 border-0 mt-4" style="background-color: var(--cinema-dark-alt); border-left: 4px solid var(--cinema-gold) !important;">
                <h5 class="fw-bold text-white mb-2 brand-font">Leadership &amp; Principals</h5>
                <p class="text-white-50 small mb-0">
                    Founded by <strong>Prakash Mahobiya</strong> and <strong>Sanjay Bundela</strong>, overseen by a dedicated board committed to cinematic excellence, state-of-the-art VFX engineering, and talent incubation.
                </p>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card border-0 p-4 shadow" style="background-color: var(--cinema-dark-alt); border: 1px solid var(--cinema-border) !important;">
                <h5 class="text-gold fw-bold mb-3 brand-font">Corporate &amp; Registration Details</h5>
                <table class="table table-dark table-borderless small mb-0">
                    <tbody>
                        <tr>
                            <td class="text-white-50 ps-0">Corporate ID (CIN)</td>
                            <td class="text-white fw-bold">U59111CT2023PTC015188</td>
                        </tr>
                        <tr>
                            <td class="text-white-50 ps-0">Registration Number</td>
                            <td class="text-white fw-bold">015188 (RoC Chhattisgarh)</td>
                        </tr>
                        <tr>
                            <td class="text-white-50 ps-0">Incorporation Date</td>
                            <td class="text-white fw-bold">15 September 2023</td>
                        </tr>
                        <tr>
                            <td class="text-white-50 ps-0">Company Category</td>
                            <td class="text-white">Private company limited by shares</td>
                        </tr>
                        <tr>
                            <td class="text-white-50 ps-0">Authorized Capital</td>
                            <td class="text-white">₹15,00,000</td>
                        </tr>
                        <tr>
                            <td class="text-white-50 ps-0">Company Status</td>
                            <td class="text-white"><span class="badge bg-success">Active</span></td>
                        </tr>
                        <tr>
                            <td class="text-white-50 ps-0">Registered Office</td>
                            <td class="text-white">Koushal Tower, Kohka Khurd Main Road (Kurud Road), Kohka, Bhilai, Durg, CG - 490023</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Vision & Mission -->
    <div class="row g-4 mb-5">
        <div class="col-md-6">
            <div class="film-card p-4 h-100">
                <i class="bi bi-eye text-gold fs-1 mb-3 d-block"></i>
                <h3 class="fw-bold text-white mb-3">Our Vision</h3>
                <p class="text-white-50">
                    To establish Mahobiya Films Production as a globally recognized powerhouse for Indian cinema, combining legendary cultural narratives with modern cinematic technology and storytelling to inspire audiences worldwide.
                </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="film-card p-4 h-100">
                <i class="bi bi-compass text-gold fs-1 mb-3 d-block"></i>
                <h3 class="fw-bold text-white mb-3">Our Mission</h3>
                <p class="text-white-50">
                    To produce high-caliber films, documentaries, and digital series that champion compelling themes, support rising talent in Central India, and uphold uncompromising standards of production, visual effects, and music.
                </p>
            </div>
        </div>
    </div>

    <!-- Associated Entities -->
    <div class="film-card p-4 p-md-5">
        <h4 class="fw-bold text-gold brand-font mb-3">Associated Group Entities</h4>
        <p class="text-white-50 mb-4">
            Mahobiya Films Production Private Limited shares common directorships and strong business synergies with reputable Chhattisgarh-based enterprises across construction, hospitality, and corporate solutions:
        </p>
        <div class="row g-3">
            <div class="col-md-4">
                <div class="p-3 rounded border border-secondary" style="background-color: #0b0c10;">
                    <i class="bi bi-building text-gold fs-3 d-block mb-2"></i>
                    <h6 class="fw-bold text-white mb-1">Mahobiya Builders Pvt. Ltd.</h6>
                    <small class="text-white-50">Infrastructure &amp; Commercial Real Estate</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 rounded border border-secondary" style="background-color: #0b0c10;">
                    <i class="bi bi-cup-hot text-gold fs-3 d-block mb-2"></i>
                    <h6 class="fw-bold text-white mb-1">Mahobiya Hotels &amp; Resorts Pvt. Ltd.</h6>
                    <small class="text-white-50">Hospitality &amp; Luxury Accommodation</small>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 rounded border border-secondary" style="background-color: #0b0c10;">
                    <i class="bi bi-briefcase text-gold fs-3 d-block mb-2"></i>
                    <h6 class="fw-bold text-white mb-1">Mahobiya Business Solutions Pvt. Ltd.</h6>
                    <small class="text-white-50">Enterprise Services &amp; Consultancy</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

