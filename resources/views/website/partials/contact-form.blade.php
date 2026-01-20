{{-- =========================================
    Contact Section - Figma Design
    ========================================= --}}
@php
    $settings = App\Models\Setting::find(1);
@endphp

<section class="contact-section-new">
    <div class="container">
        <div class="row align-items-start">
            {{-- Contact Info --}}
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-info">
                    <h2>Contact US</h2>
                    
                    <div class="contact-item">
                        <i class="bi bi-geo-alt-fill"></i>
                        <div class="contact-item-text">
                            <h5>Address</h5>
                            <p>{{ $settings->address ?? 'Your Address Here' }}</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="bi bi-telephone-fill"></i>
                        <div class="contact-item-text">
                            <h5>Phone</h5>
                            <p>{{ $settings->phone ?? '+1234567890' }}</p>
                        </div>
                    </div>
                    
                    <div class="contact-item">
                        <i class="bi bi-envelope-fill"></i>
                        <div class="contact-item-text">
                            <h5>Email</h5>
                            <p>{{ $settings->email ?? 'info@eei.com' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            
            {{-- Contact Form --}}
            <div class="col-lg-7">
                <div class="contact-form-box">
                    <h4>Send us a question</h4>
                    <form action="#" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" 
                                       class="form-control form-control-custom" 
                                       name="name"
                                       placeholder="i.e. John Doe" 
                                       required>
                            </div>
                            <div class="col-md-6">
                                <input type="email" 
                                       class="form-control form-control-custom" 
                                       name="email"
                                       placeholder="i.e. john@mail.com" 
                                       required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input type="tel" 
                                       class="form-control form-control-custom" 
                                       name="phone"
                                       placeholder="i.e. 123-456-7890">
                            </div>
                            <div class="col-md-6">
                                <input type="text" 
                                       class="form-control form-control-custom" 
                                       name="subject"
                                       placeholder="Subject">
                            </div>
                        </div>
                        <textarea class="form-control form-control-custom" 
                                  name="message"
                                  rows="4" 
                                  placeholder="Write your message here..."
                                  required></textarea>
                        <button type="submit" class="btn-submit">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
