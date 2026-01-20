{{-- =========================================
    Contact Section - Figma Design
    ========================================= --}}
@php
    $settings = App\Models\Setting::find(1);
@endphp

<section class="contact-section-figma">
    {{-- Decorative elements --}}
    <div class="contact-decor-dots"></div>
    <div class="contact-decor-stars"></div>
    
    <div class="container">
        <div class="row align-items-start">
            {{-- Left: Contact Info --}}
            <div class="col-lg-5 mb-4 mb-lg-0">
                <h2 class="contact-title">Contact US</h2>
                
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="bi bi-geo-alt"></i>
                    </div>
                    <div class="contact-text">
                        <p>Factory :10th of Ramadan city<br>Egypt</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="bi bi-telephone"></i>
                    </div>
                    <div class="contact-text">
                        <p><strong>0020</strong> {{ $settings->phone ?? '01144508585' }}</p>
                    </div>
                </div>
                
                <div class="contact-info-item">
                    <div class="contact-icon">
                        <i class="bi bi-envelope"></i>
                    </div>
                    <div class="contact-text">
                        <p>{{ $settings->email ?? 'info@eei.com.eg' }}</p>
                    </div>
                </div>
            </div>
            
            {{-- Right: Contact Form --}}
            <div class="col-lg-7">
                <h3 class="form-title">Send us a question</h3>
                <div class="contact-form-card">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group-custom">
                            <label>Name</label>
                            <input type="text" name="name" placeholder="i.e. John Doe" required>
                        </div>
                        
                        <div class="form-group-custom">
                            <label>Email</label>
                            <input type="email" name="email" placeholder="i.e. john@mail.com" required>
                        </div>
                        
                        <div class="form-group-custom">
                            <label>Phone</label>
                            <input type="tel" name="phone" placeholder="i.e. 123-456-7890">
                        </div>
                        
                        <div class="form-group-custom">
                            <label>Your Question</label>
                            <textarea name="message" rows="3" placeholder="Write Your Question" required></textarea>
                        </div>
                        
                        <button type="submit" class="btn-talk-expert">
                            to Talk to an expert
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
