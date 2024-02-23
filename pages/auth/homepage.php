<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prashant Sapkota</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="/assets/styles/homepage.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>

  <!--
    - #MAIN
  -->

  <main>

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="images/photo.JPG" alt="prashant" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Prashant Sapkota">Prashant Sapkota</h1>

          <p class="title">Web | OpenSource | Linux</p>
         
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:prashantsapkota444@gmail.com" class="contact-link">prashantsapkota444@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="School"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">College</p>

              <time datetime="">Himalaya College of Management</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address>Jhapa, Nepal</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">
          <li class="social-item">
            <a href="https://instagram.com/pr4shantey" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>
          <li class="social-item">
            <a href="https://github.com/pr4shanteyy" class="social-link">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.facebook.com/pr4shanteyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/" class="social-link">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

        </ul>
<a href="/?page=login" id="logout">Logout</a>
      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            <strong>Hi! and welcome to the page.</strong> I am Prashant, A student at Himalaya College of Management, currently studying in +2. I am an Nepali by nationality. I have worked or engaged little bit with few startups or organizations to learn techcalities of how mechanisms behind this industry works. While I am pursuing a technical degree, I also love to muse with work related to writings or paitings. I love building things. Hard engineering problems are often intrisically fun to tackle, I'm most attracted to solving real customer problems with a business justification. I wish to be a Front-end web design and development, making pixel magic in photoshop and turning it into semantic HTML & CSS.  <br><br>
            <strong> My interests,</strong> however, extend beyond the web and I love helping people with branding, designing and marketing strategy. I even engage with few people of opposite views to be in a healthy debate.<br><br>
            <i>Things I do</i> When I'm not designing, I'd probably be hanging out with family or friends, being entertained with either Youtube or Spotify. Else i could look for possible opportunities where I can learn and can take collaborative team leadership responsibities, and gain experience with managing tech fields. 
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">


            <li class="service-item">

              <div class="service-icon-box">
                <img src="images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  Exploring web to design intricate websites.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="images/icon-os.svg" alt="OS icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Open-Source</h4>

                <p class="service-item-text">
                  I contribute to open source and make valuable remark in orgs.
                </p>
              </div>

            </li>


            <li class="service-item">

              <div class="service-icon-box">
                <img src="images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web design</h4>

                <p class="service-item-text">
                  I try my hands at designing layouts, software architectures.
                </p>
              </div>

            </li>


            <li class="service-item">

              <div class="service-icon-box">
                <img src="images/icon-app.svg" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Mobile apps</h4>

                <p class="service-item-text">
                  I indulge in Android Studio App and plugins.
                </p>
              </div>

            </li>

            

          </ul>

        </section>


        <!--
          - testimonials
        -->

        <section class="testimonials">

          <h3 class="h3 testimonials-title">Achievements</h3>

          <ul class="testimonials-list has-scrollbar">

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="images/logo.jpg" alt="RBL" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>404 No Achievements found</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    404 Not Found
                  </p>
                </div>
              

              </div>
            </li>

            

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="images/logo.jpg" alt="OSS" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>404 No Achievements found</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    404 Not Found
                  
                  </p>
                </div>

              </div>
            </li>

            
            </li>

          </ul>

        </section>


        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">Null</time>

              

            </div>

          </section>

        </div>


        <!--
          - clients
        -->

        <section class="clients">

          <h3 class="h3 clients-title">Tools and Technologies</h3>

          <ul class="clients-list has-scrollbar">

            <li class="clients-item">
              <a href="#">
                <img src="images/logo-1-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="images/cloud.jpg" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="images/logo-3-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="images/logo-4-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="images/logo-5-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="images/logo-6-color.png" alt="client logo">
              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Siddhartha College of Management</h4>

              <span>2022 — 2024</span>

              <p class="timeline-text">
                +2 in  (Computer science)
              </p>

            </li>

           

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Himalaya Secoundary school</h4>

              <span>2017 — 2019</span>

              <p class="timeline-text">
               
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web development Intern <p class="timeline-text">Karma Foundation</p></h4>

              <span>Jan 2019 - Mar 2019</span>

              <p class="timeline-text">
                Achieved Company <b>Growth</b> by publishing relevant Content for company website using Technical skills.
                Led new concepts which bring new technology and diplomatic affairs go hand-in-hand.
                Developed Content according to Website Layout.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Business Development Executive <p class="timeline-text">Prashant Technologies  </p></h4>

              <span>Aug 2021 - sep 2021</span>

              <p class="timeline-text">
                Contributed in developing growth by bringing potential Sponsors for the ed-tech Company. Approached Overseas Client and pitched them for Sponsorship.
                Could work in team for discussing new ideas for growth of the company
              </p>

            </li>

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">React</h5>
                <data value="20">20%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 20%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">TailwindCss</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Figma</h5>
                <data value="10">10%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 10%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">HTML, CSS, Javascript</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Python</h5>
                <data value="40">40%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>

            </li>
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">C/C++</h5>
                <data value="50">50%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 50%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Projects</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              
            </ul>
              <h1>404 Not found</h1>

          </div>

          

      </article>











      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <img
              src="./images/logo.jpg" >
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" autocomplete="off" data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" autocomplete="off" data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" autocomplete="off" data-form-input></textarea>

            <button class="form-btn" type="submit"  data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="/assets/scripts/homepage.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>
