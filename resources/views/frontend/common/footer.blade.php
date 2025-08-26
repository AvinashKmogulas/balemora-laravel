<footer class="new-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="footer-logo"><a href="{{ route('home') }}">
                        <img src="{{ $info->website_white_logo ?? URL::asset('assets/logos/newLogowhite.png') }}"
                            alt="{{ $info->website_name ?? 'Balemora' }}"> </a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-12">
                <div class="quick-link-box">
                    <h6>Quick Links</h6>
                    <ul>
                        <li><a class="text-white" href="{{ route('home') }}">Home</a></li>
                        <li><a class="text-white" href="{{ route('balemora-wellness') }}">Balemora Wellness</a></li>
                        <li><a class="text-white" href="{{ route('aboutBalemora') }}">About Us</a></li>
                        <li><a class="text-white" href="{{ route('gallery') }}">Gallery</a></li>
                        <li><a class="text-white" href="{{ route('balemoraOffer') }}">Special Offers</a></li>
                        <li><a class="text-white" href="{{ route('balemoraContact') }}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="footer-resort">
                    <h6>Our Retreats</h6>
                    <p><a href="balemora-lucknow-overview.php"><b>Lucknow</b><br>Balemora NH27 Lucknow, Uttar
                            Pradesh</a> </p>
                    <p><a href="balemora-almora-overview.php"><b>Almora</b><br>Balemora Almora, Uttarakhand</a> </p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <h6>Contact Us</h6>
                <p class="f-info"><a href="tel:919005430333"><i class="fa-solid fa-phone"></i> +91 9005430333 </a> </p>
                <p class="f-info">
                    <a href="mailto:customercare@balemorawellnessretreats.com"><i class="fa-solid fa-envelope"></i>
                        customercare@balemorawellnessretreats.com </a><br>
                    <a href="mailto:ceo.dr.sumitoberoi@balemorawellnessretreats.com"><i
                            class="fa-solid fa-envelope"></i>
                        ceo.dr.sumitoberoi@balemorawellnessretreats.com </a>
                </p>

                <h6>Follow Us</h6>
                <div class="footer-social">
                    <a href="#"><i class="fa-brands fa-facebook-f"></i> </a>
                    <a href="#"><i class="fab fa-instagram"></i> </a>
                    <a href="#"><i class="fa-brands fa-linkedin-in"></i> </a>
                    <a href="#"><i class="fa-brands fa-youtube"></i> </a>
                    <a href="#"><img src="assets/images/x-icon.png" alt=""> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
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
                            <label id="propertyErr" class="text-danger"></label>
                            <div class="form-group">
                                <select name="property" id="property">
                                    <option value="" hidden>Select Property</option>
                                    <option value="Balemora Almora">Balemora Almora</option>
                                    <option value="Balemora NH27, Lucknow">Balemora NH27, Lucknow</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12 cottage" style="display: none;">
                            <label id="cottageErr" class="text-danger"></label>
                            <div class="form-group">
                                <select name="cottage" id="cottage">
                                    <option value="" selected disabled>Select The Cottage</option>
                                    <option value="1BHK">1BHK</option>
                                    <option value="2BHK">2BHK</option>
                                </select>
                            </div>
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
