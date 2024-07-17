<?php
$site_title = 'RAJ STUDIO11 - FAMILY SALON';
include 'include/header.php'
?>
    <!--==============================
    Breadcumb
============================== -->
    <div class="breadcumb-wrapper " data-bg-src="assets/img/about/breadcumb-1.png">
        <div class="container z-index-common">
            <div class="breadcumb-content text-center">
                <h1 class="breadcumb-title">Contact Us</h1>
                <div class="breadcumb-menu-wrap">
                    <ul class="breadcumb-menu">
                        <li><a href="index">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--==============================
  Contact Area
  ==============================-->
    <section class="vs-contact-wrapper space-top space-negative-bottom">
        <div class="container">
            <div class="title-area text-center">
                <div class="sec-icon"><img src="assets/img/icon/sec-icon.png" alt="Section Title"></div>
                <h2 class="sec-title mb-1">Get Your Next Look</h2>
                <p class="sec-desc">Contact us online, we’ll be in touch as soon as possible…</p>
            </div>
            <div class="row gx-30">
                <div class="col-lg-6 mb-30">
                    <form action="mail.php" method="POST" class="ajax-contact">
                        <div class="row gx-20">
                            <div class="form-group col-12">
                                <input type="text" class="form-control style3" name="name" id="name" placeholder="Your Name *">
                            </div>
                            <div class="form-group col-12">
                                <input type="email" class="form-control style3" name="email" id="email" placeholder="Your Email *">
                            </div>
                            <div class="form-group col-12">
                                <input type="number" class="form-control style3" name="number" id="number" placeholder="Phone No *">
                            </div>
                            <div class="form-group col-12">
                                <select name="subject" id="subject" class="form-select style3">
                                    <option value="" disabled selected hidden>Service *</option>
                                    <option value="hair Cut">Hair Cut</option>
                                    <option value="Hair clean">Hair Clean</option>
                                    <option value="Head Massage">Head Massage</option>
                                    <option value="Classic Style">Classic Style</option>
                                </select>
                            </div>
                            <div class="form-group col-12">
                                <textarea name="message" id="message" cols="30" rows="3" class="form-control style3" placeholder="Message *"></textarea>
                            </div>
                            <div class="form-btn col-12">
                                <button class="vs-btn">Send Message</button>
                            </div>
                        </div>
                        <p class="form-messages mb-0 mt-3"></p>
                    </form>
                </div>
                <div class="col-lg-6 mb-30">
                    <div class="vs-info-table"style="background:#3f164763;">
                        <table>
                            <tbody>
                                <tr>
                                    <td>City:</td>
                                    <td>Patna</td>
                                </tr>
                                
                                <tr style="background:none;">
                                    <td>Address: </td>
                                    <td>1st Floor, Bihari Complex, near Radiant School, Khagual, Patna</td>
                                </tr>
                                <tr>
                                    <td>Phone:</td>
                                    <td><a href="tel:+91-7091-181-948" class="text-reset d-inline">+91-7091-181-948 | +91-9031-407-999</a></td>
                                </tr>
                                <tr style="background:none;">
                                    <td>Email: </td>
                                    <td><a href="mailto:info@rajstudio11.com" class=" d-inline"style="color:#666;">info@rajstudio11.com</a></td>
                                </tr>
                                <tr>
                                    <td>Opening Hours: </td>
                                    <td>Mon-Sat: 11am - 8pm Sun: closed</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Map Area
    ==============================-->
    <div class="vs-map-wrapper space-bottom">
        <div class="container">
            <div class="google-map ratio ratio-16x9">
                <!-- <iframe src="https://maps.app.goo.gl/9x4DHs6xxGJQRA6K9" width="800" height="565" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13681.912806160643!2d85.04335019999996!3d25.587282700000014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ed57921eef6da1%3A0x7109b2806581884!2sRaj%20Studio%2011!5e1!3m2!1sen!2sin!4v1718272944671!5m2!1sen!2sin" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    

    <?php
  include __DIR__ . '/include/footer.php';
  ?>
