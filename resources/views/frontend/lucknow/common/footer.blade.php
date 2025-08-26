<footer class="new-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="footer-logo">
                    <a href="{{ route('lucknow') }}">
                        <img src="{{ $info->website_white_logo ?? URL::asset('assets/logos/newLogowhite.png') }}"
                            alt="{{ $info->website_name ?? 'Balemora' }}">
                    </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-12 col-sm-12">
                <div class="quick-link-box">
                    <h6>Quick Links</h6>
                    <ul>
                        <li><a class="text-white" href="{{ route('lucknow') }}">Home</a></li>
                        <li><a class="text-white" href="{{ route('balemora-wellness') }}">Balemora Wellness</a></li>
                        <li><a class="text-white" href="{{ route('eventCelebrationBalemoraLucknow') }}">Events &
                                Celebration</a></li>
                        <li><a class="text-white" href="{{ route('aboutBalemora') }}">About Us</a></li>
                        <li><a class="text-white" href="{{ route('galleryBalemoraLucknow') }}">Gallery</a></li>
                        <li><a class="text-white" href="{{ route('specialOfferBalemoraLucknow') }}">Special Offers</a>
                        </li>
                        <li><a class="text-white" href="{{ route('contactBalemoraLucknow') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="footer-resort">
                    <h6>Our Retreats</h6>
                    <p><a href="{{ route('lucknow') }}"><b>Lucknow</b><br>Balemora NH27 Lucknow, Uttar
                            Pradesh</a> </p>
                    <p><a href="balemora-almora-overview.php"><b>Almora</b><br>Balemora Almora, Uttarakhand</a> </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h6>Contact Us</h6>
                <p class="f-info"><a href="tel:919005430333"><i class="fa-solid fa-phone"></i> +91 9005430333 </a> </p>
                <p class="f-info">
                    <a href="mailto:customercare@balemorawellnessretreats.com"><i class="fa-solid fa-envelope"></i>
                        customercare@balemorawellnessretreats.com </a>
                </p>
                <p class="f-info">
                    <a href="mailto:ceo.dr.sumitoberoi@balemorawellnessretreats.com"><i
                            class="fa-solid fa-envelope"></i> ceo.dr.sumitoberoi@balemorawellnessretreats.com </a>
                </p>
                <h6>Follow Us</h6>
                <div class="footer-social">
                    <a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i> </a>
                    <a href="#" target="_blank"><i class="fab fa-instagram"></i> </a>
                    <a href="#" target="_blank"><i class="fa-brands fa-linkedin-in"></i> </a>
                    <a href="#" target="_blank"><i class="fa-brands fa-youtube"></i> </a>
                    <a href="#" target="_blank"><img src="assets/images/x-icon.png" alt=""> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 text-center mt-4">
                <p class="copyright">Copyright &copy; 2025 Balemora. All Rights Reserved. Powered By <a
                        href="https://www.internetmoguls.com/" style="color: #fff;" target="_blank">Internet Moguls</a>
                </p>
            </div>
        </div>
    </div>
</footer>



<!-- Modal -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="bookingModalLabel">Book Now</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm" class="booking-popup-form" method="post">
                    <div class="row">
                        <div class="col-12">
                            <label id="nameErr" class="text-danger"></label>
                            <div class="form-group">
                                <input type="text" name="name" id="name" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-12">
                            <label id="numberErr" class="text-danger"></label>
                            <div class="form-group">
                                <input type="tel" name="number" id="number" placeholder="Phone No">
                            </div>
                        </div>
                        <div class="col-12">
                            <label id="check-inErr" class="text-danger"></label>
                            <div class="form-group">
                                <input type="text" name="check-in" id="check-in" placeholder="Check In">
                            </div>
                        </div>
                        <div class="col-12">
                            <label id="check-outErr" class="text-danger"></label>
                            <div class="form-group">
                                <input type="text" name="check-out" id="check-out" placeholder="Check Out">
                            </div>
                        </div>
                        <div class="col-12">
                            <label id="roomErr" class="text-danger"></label>
                            <div class="form-group">
                                <select name="rooms" id="rooms">
                                    <option value="" selected disabled>Select Cottage</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label id="adultErr" class="text-danger"></label>
                            <div class="form-group">
                                <select name="adults" id="adults">
                                    <option value="" selected disabled>Select Adults</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <label id="childErr" class="text-danger"></label>
                            <div class="form-group">
                                <select name="child" id="child">
                                    <option value="child" selected disabled>Select Child</option>
                                    <option value="0">0</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            <input type="hidden" id="property" name="property" value="Balemora NH27, Lucknow" />
                        </div>
                        <div class="col-12">
                            <input type="submit" name="bookingBtn" id="bookingBtn" value="Submit">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script defer src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.5/js/lightbox.min.js"></script>
<script defer src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script defer src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js"></script>
<script defer src="https://code.jquery.com/ui/1.14.1/jquery-ui.min.js"></script>
<script defer src="{{ URL::asset('assets/js/script.js') }}"></script>
<script defer src="{{ URL::asset('assets/js/form-submition.js') }}"></script>

</body>

</html>
