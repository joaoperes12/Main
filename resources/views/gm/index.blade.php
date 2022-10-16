@include('master')

@section('title', 'Index')
@section('content')
    <!--HomePage End-->
    <!--Main-Section End-->
    <!--about-->
    <div id="about">
        <div class="color-changer">
            <div class="color-panel">
                <img src="{{ asset('images/gear.png') }}" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul>
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--about content-->
        <div id="about-content">
            <div class="about-header">
                About <span class="color">Me</span>
                <span class="header-caption">Get to Know <span class="color"> me.</span></span>
            </div>
            <div class="about-main">
                <div class="about-first-paragraph wow">
                    <!--about description-->
                    <span class="about-first-line">
                        I'm creative
                        <span class="color">web developer</span>
                        based in New York , USA </span>
                    <br>
                    <span class="about-second-line"> With 20 years of experience as a professional Web developer, I
                        have acquired the skills and knowledge necessary to make your project a success. I enjoy
                        every step while working.</span>
                    <div class="cv">
                        <a href="#"><button>Download <span class="colors">CV</span></button></a>
                    </div>
                </div>
                <!--about picture-->
                <div class="about-img">
                    <img src="images/about.jpg" alt="Your Image">
                </div>
            </div>

        </div>
        <!--services start-->
        <div id="services">
            <div class="color-changer">
                <div class="color-panel">
                    <img src="images/gear.png" alt="">
                </div>
                <div class="color-selector">
                    <div class="heading">Custom Colors</div>
                    <div class="colors">
                        <ul>
                            <li>
                                <a href="#0" class="color-red " title="color-red"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-purple" title="color-purple"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-malt" title="color-malt"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-green" title="color-green"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-blue" title="color-blue"></a>
                            </li>
                            <li>
                                <a href="#0" class="color-orange" title="color-orange"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!--services header-->
            <div class="services-heading wow">
                <span class="color">My</span> Services
            </div>
            <!--services header end-->
            <!--services content-->
            <div class="services-content">
                <div class="service-one service wow">
                    <div class="service-img">
                        <img src="images/coding.png" alt="service-one">
                    </div>
                    <div class="service-description">
                        <h2>Web Designing</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                    </div>
                </div>
                <div class="service-two service wow">
                    <div class="service-img">
                        <img src="images/instagram.png" alt="service-two">
                    </div>
                    <div class="service-description">
                        <h2>Social Media</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                    </div>
                </div>
                <div class="service-three service wow">
                    <div class="service-img">
                        <img src="images/bulb.png" alt="service-three">
                    </div>
                    <div class="service-description">
                        <h2>Creative Design</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quod quibusdam possimus</p>
                    </div>
                </div>
            </div>
        </div>
        <!--services content end-->
        <!--services end-->
        <div id="skills">
            <div class="skills-header">
                My <span class="color"> Skills</span>
            </div>
            <div class="skills-content " style="text-align: center;">
                <div class="skill-html skill">
                    <div class="skill-text">
                        <div class="html">
                            HTML/CSS
                        </div>
                    </div>
                    <div class="html-prog wow prog">
                        <div class="html-progress wow">95%</div>
                    </div>
                </div>
                <div class="skill-html skill">
                    <div class="skill-text">
                        <div class="html">
                            Javascript
                        </div>
                    </div>
                    <div class="html-prog wow prog">
                        <div class="js-progress wow">90%</div>
                    </div>
                </div>
                <div class="skill-html skill">
                    <div class="skill-text">
                        <div class="html">
                            Adobe Ps
                        </div>
                    </div>
                    <div class="html-prog wow prog">
                        <div class="adobe-progress wow">83%</div>
                    </div>
                </div>
                <div class="skill-html skill">
                    <div class="skill-text">
                        <div class="html">
                            PHP
                        </div>
                    </div>
                    <div class="html-prog wow prog">
                        <div class="php-progress wow">87%</div>
                    </div>
                </div>
                <div class="skill-html skill">
                    <div class="skill-text">
                        <div class="html">
                            JQuery
                        </div>
                    </div>
                    <div class="html-prog wow prog">
                        <div class="jquery-progress wow">94%</div>
                    </div>
                </div>
                <div class="skill-html skill">
                    <div class="skill-text">
                        <div class="html">
                            SEO
                        </div>
                    </div>
                    <div class="html-prog wow prog">
                        <div class="seo-progress wow">84%</div>
                    </div>
                </div>
            </div>
        </div>
        <!--copyright-section You Can Remove After Downloading-->
        <div class="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy
                Wonkas
            </div>
        </div>
        <!--copyright-section-->
    </div>
    <!--about end-->
    <!--portfolio-->
    <div id="portfolio">
        <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul>
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="portfolio-header"> <span class="color"> My </span> Portfolio
            <span class="header-caption"> Some Of My <span class="color"> Works</span></span>
        </div>
        <div id="portfolio-content">
            <div class="portfolio portfolio-first">
                <div class="portfolio-image">
                    <img src="images/portfolio-first.jpg" alt="portfolio-first">
                </div>
                <div class="portfolio-text">
                    <h2>App Idea</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                        expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem
                        ducimus</p>
                    <div class="button"><a href="#"><button><span class="index"> View Project<i
                                        class="gg-arrow-right"></i></span></button></a></div>
                </div>
            </div>
            <div class="portfolio portfolio-second">
                <div class="portfolio-image">
                    <img src="images/portfolio-second.jpg" alt="portfolio-second">
                </div>
                <div class="portfolio-text">
                    <h2>Web Designing</h2>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id cumque placeat minima ad
                        laudantium suscipit
                        voluptatem ducimus. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                    <div class="button"><a href="#"><button><span class="index"> View Project<i
                                        class="gg-arrow-right"></i></span></button></a></div>
                </div>
            </div>

            <div class="portfolio portfolio-third">
                <div class="portfolio-image">
                    <img src="images/portfolio-third.jpg" alt="portfolio-third">
                </div>
                <div class="portfolio-text">
                    <h2>UI Designing</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                        expedita eius dignissimos
                        .. Id cumque placeat minima ad laudantium suscipit voluptatem ducimus</p>
                    <div class="button"><a href="#"><button><span class="index"> View Project<i
                                        class="gg-arrow-right"></i></span></button></a></div>
                </div>
            </div>
            <div class="portfolio portfolio-fourth">
                <div class=" portfolio-image">
                    <img src="images/portfolio-fourth.jpg" alt="portfolio-fourth">
                </div>
                <div class="portfolio-text">
                    <h2>Wow Graphics</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad ut optio repellat cupiditate
                        expedita eius dignissimos. Id cumque placeat minima ad laudantium suscipit voluptatem
                        ducimus</p>
                    <div class="button"><a href="#"><button><span class="index"> View Project<i
                                        class="gg-arrow-right"></i></span></button></a></div>
                </div>
            </div>
        </div>
        <!--copyright-section You Can Remove After Downloading-->
        <div class="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy
                Wonkas
            </div>
        </div>
        <!--copyright-section-->
    </div>
    <!--portfolio end-->
    <!--blog-->
    <div id="blog">
        <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul>
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="blog-header"> Blogs</span>
            <span class="header-caption"> My Latest <span class="color"> blog posts.</span></span>
        </div>
        <div class="blog-content">
            <div class="blogs">
                <a href="#">
                    <div class="img">
                        <img src="images/post-one.jpg" alt="blog-one">
                        <div class="blog-date">8 May,20</div>
                    </div>
                    <div class="blog-text">
                        <h3>Harleys In Hawaai</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus alias dolore recusandae
                            illum, corrupti quo
                            veniam saepe aliquid! Quis voluptates ratione consequuntur vel, perferendis cum
                            provident? Magnam fugiat voluptas
                            libero.</p>
                    </div>
                </a>
            </div>
            <div class="blogs">
                <a href="#">
                    <div class="img">
                        <img src="images/post-two.jpg" alt="blog-two">
                        <div class="blog-date">16 Jan,20</div>
                    </div>
                    <div class="blog-text">
                        <h3>Key To Be Productive</h3>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt maiores,
                            recusandae cupiditate ducimus a non tempora, architecto obcaecati eaque ipsum assumenda
                            harum dolorum iusto tenetur
                            eius eligendi dolor magnam sit!</p>
                    </div>
                </a>
            </div>
            <div class="blogs">
                <a href="#">
                    <div class="img">
                        <img src="images/post-three.jpg" alt="blog-three">
                        <div class="blog-date">30 Nov,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Caffeine Addict</h3>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo nostrum impedit
                            ipsam perspiciatis ratione sapiente quasi optio reprehenderit, labore consequuntur
                            suscipit cum quas.
                            Officiis dolorem asperiores, ut necessitatibus quas doloremque?</p>
                    </div>
                </a>
            </div>
            <div class="blogs">
                <a href="#">
                    <div class="img">
                        <img src="images/post-four.jpg" alt="blog-four">
                        <div class="blog-date">6 Jul,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Web Development</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem, veniam ratione quam
                            vitae,
                            quibusdam explicabo rem debitis velit ipsa repellat, impedit nulla fuga? Amet corporis
                            praesentium quae.
                            Sed, quibusdam necessitatibus.</p>
                    </div>
                </a>
            </div>
            <div class="blogs">
                <a href="#">
                    <div class="img">
                        <img src="images/post-five.jpg" alt="blog-five">
                        <div class="blog-date">1 Jun,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Work From Home</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga sunt eum necessitatibus rem
                            dignissimos nulla mollitia cumque, provident officiis non vitae? Animi aut doloremque
                            illum, soluta hic minus
                            sint explicabo..</p>
                    </div>
                </a>
            </div>
            <div class="blogs">
                <a href="#">
                    <div class="img">
                        <img src="images/post-six.jpg" alt="blog-six">
                        <div class="blog-date">28 Feb,19</div>
                    </div>
                    <div class="blog-text">
                        <h3>Business Trip</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo tempora dolorum fuga
                            ratione, unde,
                            ex quaerat iste numquam nemo nihil nobis rem sint quia recusandae dignissimos quos ut
                            rerum nam.</p>
                    </div>
                </a>
            </div>
        </div>
        <!--copyright-section You Can Remove After Downloading-->
        <div class="footer">
            <div class="footer-text">
                <img src="./images/copyright.png" alt="copyright-img" class="images" height="14px"> Willy
                Wonkas
            </div>
        </div>
        <!--copyright-section-->
    </div>
    <!--blog end-->
    <!--contact-->
    <div id="contact">
        <div class="color-changer">
            <div class="color-panel">
                <img src="images/gear.png" alt="">
            </div>
            <div class="color-selector">
                <div class="heading">Custom Colors</div>
                <div class="colors">
                    <ul>
                        <li>
                            <a href="#0" class="color-red " title="color-red"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-purple" title="color-purple"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-malt" title="color-malt"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-green" title="color-green"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-blue" title="color-blue"></a>
                        </li>
                        <li>
                            <a href="#0" class="color-orange" title="color-orange"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="contact-header">Contact <span class="color"> Me</span>
            <div class="contact-header-caption"> <span class="color"> Get</span> In Touch.</div>
        </div>
        <div class="contact-content">
            <!--Contact form-->
            <div class="contact-form">
                <div class="form-header">
                    Message Me
                </div>
                <form id="myForm" action="#">
                    <div class="input-line">
                        <input id="name" type="text" placeholder="Name" class="input-name">
                        <input id="email" type="email" placeholder="Email" class="input-name">
                    </div>
                    <input type="text" id="subject" placeholder="subject" class="input-subject">
                    <textarea id="body" class="input-textarea" placeholder="message"></textarea>
                    <button type="button" id="submit" value="send">Submit</button>
                </form>

            </div>
            <!--Contact form-->
            <!--Contact information-->
            <div class="contact-info">
                <div class="contact-info-header">
                    Contact Info
                </div>
                <div class="contact-info-content">
                    <div class="contect-info-content-line">
                        <img src="./images/icon-name.png" class="icon" alt="name-icon">
                        <div class="contact-info-icon-text">
                            <h6>Name</h6>
                            <p>Arlo Brown</p>
                        </div>
                    </div>
                    <div class="contect-info-content-line">
                        <img src="./images/icon-location.png" class="icon" alt="location-icon">
                        <div class="contact-info-icon-text">
                            <h6>Location</h6>
                            <p>New York, USA</p>
                        </div>
                    </div>
                    <div class="contect-info-content-line">
                        <img src="./images/icon-phone.png" class="icon" alt="phone-icon">
                        <div class="contact-info-icon-text">
                            <h6>Call</h6>
                            <p>+9865376531</p>
                        </div>
                    </div>

                    <div class="contect-info-content-line">
                        <img src="./images/icon-email.png" class="icon" alt="email-icon">
                        <div class="contact-info-icon-text">
                            <h6>Email</h6>
                            <p>Info@example.com</p>
                        </div>
                    </div>
                </div>
                <!--Contact information end-->
            </div>
        </div>
       
    </div>


    </body>

    </html>
@endsection
