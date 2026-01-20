<script>
    function showOverlay() {
        const overlay = document.getElementById('overlay');
        overlay.style.display = 'flex'; // Show overlay
        setTimeout(() => {
            overlay.style.display = 'none'; // Hide overlay after 1.5 seconds
        }, 2000);
    }

</script>

<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>

<!-- Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>
