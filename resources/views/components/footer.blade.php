<!-- ======= Footer ======= -->
<section class="section-footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">CanadaGoals</h3>
                    </div>
                    <div class="w-body-a">
                        <p class="w-text-a color-text-a">
                            Enim minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip exea commodo consequat duis
                            sed aute irure.
                        </p>
                    </div>
                    <div class="w-footer-a">
                        <ul class="list-unstyled">
                            <li class="color-a">
                                <span class="color-text-a">Phone: </span> {{ config('company.phone') }}
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Email: </span> {{ config('company.email') }}
                            </li>
                            <li class="color-a">
                                <span class="color-text-a">Address: </span> {{ config('company.address.street') }}<br/>
                                {{ config('company.address.city') }}  {{config('company.address.postal') }}, {{config('company.address.country') }}

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">The Company</h3>
                    </div>
                    <div class="w-body-a">
                        <div class="w-body-a">
                            <ul class="list-unstyled">
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Site Map</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Legal</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Agent Admin</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Careers</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Affiliate</a>
                                </li>
                                <li class="item-list-a">
                                    <i class="bi bi-chevron-right"></i> <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 section-md-t3">
                <div class="widget-a">
                    <div class="w-header-a">
                        <h3 class="w-title-a text-brand">International sites</h3>
                    </div>
                    <div class="w-body-a">
                        <ul class="list-unstyled">
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Venezuela</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">China</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Hong Kong</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Argentina</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Singapore</a>
                            </li>
                            <li class="item-list-a">
                                <i class="bi bi-chevron-right"></i> <a href="#">Philippines</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="nav-footer">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">Home</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">About</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Property</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Blog</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Contact</a>
                        </li>
                    </ul>
                </nav>
                <div class="socials-a">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright-footer">
                    <p class="copyright color-text-a">
                        &copy; Copyright {{ date("Y") }}
                        <span class="color-a">{{ config('company.fullname') }}</span> All Rights Reserved.
                    </p>
                </div>
                <div class="credits text-gray-50"><small>
                    <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
                  -->
                    Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a></small>
                </div>
            </div>
        </div>
    </div>
</footer><!-- End  Footer -->