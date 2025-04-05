<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>TechNova - Your Dream, Our Application</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
  <style>
    .marquee {
        overflow: hidden;
        position: relative;
        background-color: #fff;
        padding: 20px 0;
      }

      .marquee-content {
        display: flex;
        width: calc(200%); /* العرض المزدوج لتكرار العناصر */
        animation: marquee 20s linear infinite;
      }

      @keyframes marquee {
        0% {
          transform: translateX(0);
        }
        100% {
          transform: translateX(-50%);
        }
      }

    /* Global Styles */
    body {
      background-color: #f8f9fa;
      font-family: 'Roboto', sans-serif;
      color: #333;
    }
    a { text-decoration: none; }
    /* Top Bar */
    .top-bar {
      background-color: #1a237e;
      color: #fff;
      font-size: 0.9rem;
      padding: 5px 0;
    }
    .top-bar a { color: #ff8f00; text-decoration: none; }
    /* Navbar */
    .navbar { background-color: #1a237e; padding: 15px 0; }
    .navbar-brand, .navbar-nav .nav-link { color: #fff !important; }
    .navbar-nav .nav-link:hover { color: #ff8f00 !important; }
    .lang-toggle {
      background-color: #ff8f00;
      border: none;
      color: #fff;
      padding: 5px 10px;
      cursor: pointer;
      border-radius: 5px;
      font-size: 0.9rem;
    }
    /* Hero Section */
    header {
      background: url('https://via.placeholder.com/1920x500') no-repeat center center/cover;
      height: 500px;
      position: relative;
      color: #fff;
      display: flex;
      align-items: center;
      justify-content: center;
      text-shadow: 1px 1px 3px rgba(0,0,0,0.5);
    }
    header::before {
      content: "";
      position: absolute;
      top: 0; right: 0; bottom: 0; left: 0;
      background: rgba(0, 0, 0, 0.5);
    }
    .header-content { position: relative; z-index: 1; width: 90%; text-align: center; }
    .header-top {
        display: flex;
        justify-content: space-between; /* توزيع الأزرار على اليمين واليسار */
        align-items: center;
        margin-bottom: 20px;
        /* يمكنك إزالة خاصية gap إذا كنت تريد توزيع كامل على الطرفين */
      }

    .consult-btn, .contact-btn {
      background-color: #ff8f00;
      border: none;
      color: #fff;
      padding: 10px 20px;
      font-size: 1rem;
      cursor: pointer;
      border-radius: 5px;
      transition: transform 0.3s;
    }
    .consult-btn:hover, .contact-btn:hover { transform: scale(1.05); }
    /* Section Titles */
    .section-title {
      font-size: 2.5rem;
      margin-bottom: 30px;
      text-align: center;
      font-weight: bold;
      color: #1a237e;
    }
    /* Service Cards */
    .service-link {
      text-decoration: none;
      color: inherit;
      cursor: pointer;
    }
    .service-link:hover .card {
      transform: scale(1.03);
      transition: transform 0.3s;
    }
    /* Statistics Section */
    .statistics { background-color: #e0e7f1; padding: 60px 0; }
    .stat-item {
      text-align: center;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 8px;
      margin-bottom: 20px;
    }
    .stat-item h3 { font-size: 2.5rem; margin-bottom: 10px; color: #1a237e; }
    /* Clients */
    .clients img { max-width: 100%; transition: transform 0.3s; }
    .clients img:hover { transform: scale(1.1); }
    /* Contact Form */
    .contact-form {
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    /* Footer */
    footer {
      background-color: #1a237e;
      color: #fff;
      padding: 20px 0;
      text-align: center;
    }
    /* Fade In Up Animation for Project Cards */
    @keyframes fadeInUp {
      from { opacity: 0; transform: translate3d(0, 20px, 0); }
      to { opacity: 1; transform: none; }
    }
    .animate-fadein { animation: fadeInUp 0.8s ease forwards; }
  </style>
</head>
<body>
  <!-- Top Bar with Language Toggle -->
  <div class="top-bar">
    <div class="container d-flex justify-content-between align-items-center">
      <div>
        Email: <a href="mailto:mohamadit102@gmail.com">mohamadit102@gmail.com</a> | Phone: +963-945852707 | Mon – Thu: 9:00 AM – 5:00 PM
      </div>
      <!-- عند الضغط سيتم التبديل بين اللغتين -->
      <button class="lang-toggle" id="toggleLangBtn">العربية</button>
    </div>
  </div>
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand translatable" data-en="TechNova" data-ar="تك نوفا" href="#">TechNova</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link translatable" data-en="Home" data-ar="الرئيسية" href="#home">Home</a></li>
          <li class="nav-item"><a class="nav-link translatable" data-en="About Us" data-ar="من نحن" href="#about">About Us</a></li>
          <li class="nav-item"><a class="nav-link translatable" data-en="Services" data-ar="خدماتنا" href="#services">Services</a></li>
          <li class="nav-item"><a class="nav-link translatable" data-en="Clients" data-ar="عملاؤنا" href="#clients">Clients</a></li>
          <li class="nav-item"><a class="nav-link translatable" data-en="Contact Us" data-ar="تواصل معنا" href="#contact">Contact Us</a></li>
          <li class="nav-item">
            <a class="nav-link translatable" data-en="Sign In / Sign Up" data-ar="تسجيل الدخول / إنشاء حساب" href="#contact">Sign In / Sign Up</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Hero Section -->
  <header id="home">
    <div class="header-content container">
        <div class="header-top">
            <!-- زر على اليسار -->
            <a href="#contact" class="consult-btn translatable" data-en="Book Your Consultation" data-ar="احجز استشارتك">Book Your Consultation</a>
            <!-- زر على اليمين -->
            <a href="https://wa.me/963945852707" target="_blank" class="contact-btn translatable" data-en="Contact Us" data-ar="تواصل معنا">Contact Us</a>
          </div>

      <div class="text-center">
        <h1 class="display-3 translatable" data-en="TechNova" data-ar="تك نوفا">TechNova</h1>
        <p class="lead translatable" data-en="Software, Pioneers in Information Technology" data-ar="البرمجيات، رواد في تكنولوجيا المعلومات">
          Software, Pioneers in Information Technology
        </p>
        <h4 class="translatable" data-en="Your Dream, Our Application" data-ar="حلمك، تطبيقنا">Your Dream, Our Application</h4>
        <a href="#services" class="btn btn-primary btn-lg mt-3 translatable" data-en="Discover Our Services" data-ar="اكتشف خدماتنا">Discover Our Services</a>
      </div>
    </div>
  </header>
  <!-- About Us Section -->
  <section id="about" class="py-5">
    <div class="container">
      <h2 class="section-title translatable" data-en="Who Are We?" data-ar="من نحن؟">Who Are We?</h2>
      <p class="text-center mb-5 translatable" data-en="Your goals are our goals. TechNova brings together experts from various fields to empower our clients' projects and make them stand out among competitors. We aim to be your number one destination for IT solutions." data-ar="أهدافك هي أهدافنا. تجمع تك نوفا خبراء من مجالات مختلفة لتمكين مشاريع عملائنا وجعلها تبرز بين المنافسين. نحن نسعى لأن نكون وجهتك الأولى لحلول تكنولوجيا المعلومات.">
        Your goals are our goals. TechNova brings together experts from various fields to empower our clients' projects and make them stand out among competitors. We aim to be your number one destination for IT solutions.
      </p>
      <div class="row">
        <div class="col-md-4 text-center">
          <h5 class="translatable" data-en="Programming Company" data-ar="شركة برمجة">Programming Company</h5>
          <p class="translatable" data-en="Professional developers and designers at your service." data-ar="مطورو ومصممو محترفون في خدمتك.">
            Professional developers and designers at your service.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <h5 class="translatable" data-en="Website Development" data-ar="تطوير المواقع">Website Development</h5>
          <p class="translatable" data-en="We always provide technical support and exceptional web solutions." data-ar="نوفر دائمًا دعمًا تقنيًا وحلول ويب استثنائية.">
            We always provide technical support and exceptional web solutions.
          </p>
        </div>
        <div class="col-md-4 text-center">
          <h5 class="translatable" data-en="App Development" data-ar="تطوير التطبيقات">App Development</h5>
          <p class="translatable" data-en="Transforming your ideas into high-quality mobile applications." data-ar="نحوّل أفكارك إلى تطبيقات جوال عالية الجودة.">
            Transforming your ideas into high-quality mobile applications.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- Values & Mission Section -->
  <section class="values bg-light">
    <div class="container">
      <h2 class="section-title translatable" data-en="We Value Our Principles" data-ar="نُقدر مبادئنا">We Value Our Principles</h2>
      <p class="text-center mb-5 translatable" data-en="Our team upholds transparency, trust, quality, and commitment to deliver high-quality IT services with complete confidentiality." data-ar="يُؤمن فريقنا بالشفافية والثقة والجودة والالتزام لتقديم خدمات تكنولوجيا معلومات عالية الجودة مع الحفاظ على السرية التامة.">
        Our team upholds transparency, trust, quality, and commitment to deliver high-quality IT services with complete confidentiality.
      </p>
    </div>
  </section>
  <!-- Services Section with Modal Trigger -->
  <section id="services" class="py-5">
    <div class="container">
      <h2 class="section-title translatable" data-en="Our Services" data-ar="خدماتنا">Our Services</h2>
      <div class="row g-4">
        <!-- Service Card: Technical Studies & Planning -->
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service-link" data-bs-toggle="modal" data-bs-target="#serviceModal"
             data-service-title="Technical Studies &amp; Planning"
             data-service-desc="We offer comprehensive technical studies and planning to explore your ideas and overcome any obstacles."
             data-service-title-ar="الدراسات الفنية والتخطيط"
             data-service-desc-ar="نقدم دراسات فنية شاملة وتخطيط لاستكشاف أفكارك وتجاوز العقبات.">
            <div class="card h-100">
              <img src="{{ asset('images/services/11.jpg') }}" class="card-img-top" alt="Technical Studies">
              <div class="card-body">
                <h5 class="card-title translatable" data-en="Technical Studies &amp; Planning" data-ar="الدراسات الفنية والتخطيط">Technical Studies &amp; Planning</h5>
                <p class="card-text translatable" data-en="We offer comprehensive technical studies and planning to explore your ideas and overcome any obstacles." data-ar="نقدم دراسات فنية شاملة وتخطيط لاستكشاف أفكارك وتجاوز العقبات.">
                  We offer comprehensive technical studies and planning to explore your ideas and overcome any obstacles.
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Service Card: Website Development -->
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service-link" data-bs-toggle="modal" data-bs-target="#serviceModal"
             data-service-title="Website Development"
             data-service-desc="Designing and programming websites tailored to your needs."
             data-service-title-ar="تطوير المواقع"
             data-service-desc-ar="تصميم وبرمجة مواقع تتناسب مع احتياجاتك.">
            <div class="card h-100">
              <img src="{{ asset('images/services/13.jpg') }}" class="card-img-top" alt="Website Development">
              <div class="card-body">
                <h5 class="card-title translatable" data-en="Website Development" data-ar="تطوير المواقع">Website Development</h5>
                <p class="card-text translatable" data-en="Designing and programming websites tailored to your needs." data-ar="تصميم وبرمجة مواقع تتناسب مع احتياجاتك.">
                  Designing and programming websites tailored to your needs.
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Service Card: App Development -->
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service-link" data-bs-toggle="modal" data-bs-target="#serviceModal"
             data-service-title="App Development"
             data-service-desc="Developing mobile applications for Android &amp; iOS with high quality and sustainability."
             data-service-title-ar="تطوير التطبيقات"
             data-service-desc-ar="تطوير تطبيقات جوال لنظامي Android و iOS بجودة واستدامة عالية.">
            <div class="card h-100">
              <img src="{{ asset('images/services/12.jpg') }}" class="card-img-top" alt="App Development">
              <div class="card-body">
                <h5 class="card-title translatable" data-en="App Development" data-ar="تطوير التطبيقات">App Development</h5>
                <p class="card-text translatable" data-en="Developing mobile applications for Android &amp; iOS with high quality and sustainability." data-ar="تطوير تطبيقات جوال لنظامي Android و iOS بجودة واستدامة عالية.">
                  Developing mobile applications for Android &amp; iOS with high quality and sustainability.
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Service Card: Technical Support & Maintenance -->
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service-link" data-bs-toggle="modal" data-bs-target="#serviceModal"
             data-service-title="Technical Support &amp; Maintenance"
             data-service-desc="Providing ongoing technical support and maintenance to keep your project running smoothly."
             data-service-title-ar="الدعم الفني والصيانة"
             data-service-desc-ar="نوفر دعمًا فنيًا مستمرًا وصيانة لضمان تشغيل مشروعك بسلاسة.">
            <div class="card h-100">
              <img src="{{ asset('images/services/14.jpg') }}" class="card-img-top" alt="Technical Support">
              <div class="card-body">
                <h5 class="card-title translatable" data-en="Technical Support &amp; Maintenance" data-ar="الدعم الفني والصيانة">Technical Support &amp; Maintenance</h5>
                <p class="card-text translatable" data-en="Providing ongoing technical support and maintenance to keep your project running smoothly." data-ar="نوفر دعمًا فنيًا مستمرًا وصيانة لضمان تشغيل مشروعك بسلاسة.">
                  Providing ongoing technical support and maintenance to keep your project running smoothly.
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Service Card: Technical Project Management -->
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service-link" data-bs-toggle="modal" data-bs-target="#serviceModal"
             data-service-title="Technical Project Management"
             data-service-desc="Managing your IT projects with continuous development and effective administration."
             data-service-title-ar="إدارة المشاريع التقنية"
             data-service-desc-ar="ندير مشاريع تكنولوجيا المعلومات الخاصة بك مع تطوير مستمر وإدارة فعالة.">
            <div class="card h-100">
              <img src="{{ asset('images/services/15.jpg') }}" class="card-img-top" alt="Project Management">
              <div class="card-body">
                <h5 class="card-title translatable" data-en="Technical Project Management" data-ar="إدارة المشاريع التقنية">Technical Project Management</h5>
                <p class="card-text translatable" data-en="Managing your IT projects with continuous development and effective administration." data-ar="ندير مشاريع تكنولوجيا المعلومات الخاصة بك مع تطوير مستمر وإدارة فعالة.">
                  Managing your IT projects with continuous development and effective administration.
                </p>
              </div>
            </div>
          </a>
        </div>
        <!-- Service Card: Technical Consulting -->
        <div class="col-md-6 col-lg-4">
          <a href="#" class="service-link" data-bs-toggle="modal" data-bs-target="#serviceModal"
             data-service-title="Technical Consulting"
             data-service-desc="Expert advice and consultations to ensure you are on the right track."
             data-service-title-ar="الاستشارات الفنية"
             data-service-desc-ar="نقدم استشارات ونصائح فنية لضمان سيرك في الاتجاه الصحيح.">
            <div class="card h-100">
              <img src="{{ asset('images/services/16.jpg') }}" class="card-img-top" alt="Consulting">
              <div class="card-body">
                <h5 class="card-title translatable" data-en="Technical Consulting" data-ar="الاستشارات الفنية">Technical Consulting</h5>
                <p class="card-text translatable" data-en="Expert advice and consultations to ensure you are on the right track." data-ar="نقدم استشارات ونصائح فنية لضمان سيرك في الاتجاه الصحيح.">
                  Expert advice and consultations to ensure you are on the right track.
                </p>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>
 <!-- Projects Gallery Section -->
<section id="projects" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title translatable" data-en="Our Projects" data-ar="مشاريعنا">Our Projects</h2>
    <div class="row g-4">
      <!-- Project Card 1: E-Commerce Revolution -->
      <div class="col-md-6 col-lg-3 animate-fadein">
        <div class="card h-100">
          <!-- Carousel for E-Commerce Revolution -->
          <div id="carouselProjectAlpha" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/350x200/?ecommerce,online" class="d-block w-100" alt="E-Commerce Image 1">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?ecommerce,store" class="d-block w-100" alt="E-Commerce Image 2">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?ecommerce,shopping" class="d-block w-100" alt="E-Commerce Image 3">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?ecommerce,products" class="d-block w-100" alt="E-Commerce Image 4">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjectAlpha" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProjectAlpha" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title translatable" data-en="E-Commerce Revolution" data-ar="ثورة التجارة الإلكترونية">E-Commerce Revolution</h5>
            <p class="card-text translatable" data-en="A comprehensive solution for modern online retail." data-ar="حل متكامل لتجارة التجزئة عبر الإنترنت الحديثة.">
              A comprehensive solution for modern online retail.
            </p>
          </div>
        </div>
      </div>
      <!-- Project Card 2: Digital Transformation Hub -->
      <div class="col-md-6 col-lg-3 animate-fadein">
        <div class="card h-100">
          <!-- Carousel for Digital Transformation Hub -->
          <div id="carouselProjectBeta" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/350x200/?digital,transformation" class="d-block w-100" alt="Digital Transformation 1">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?technology,digital" class="d-block w-100" alt="Digital Transformation 2">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?innovation,digital" class="d-block w-100" alt="Digital Transformation 3">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?digital,analytics" class="d-block w-100" alt="Digital Transformation 4">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjectBeta" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProjectBeta" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title translatable" data-en="Digital Transformation Hub" data-ar="مركز التحول الرقمي">Digital Transformation Hub</h5>
            <p class="card-text translatable" data-en="Innovative digital solutions to enhance business performance." data-ar="حلول رقمية مبتكرة لتعزيز أداء الأعمال.">
              Innovative digital solutions to enhance business performance.
            </p>
          </div>
        </div>
      </div>
      <!-- Project Card 3: Tech Operations Streamline -->
      <div class="col-md-6 col-lg-3 animate-fadein">
        <div class="card h-100">
          <!-- Carousel for Tech Operations Streamline -->
          <div id="carouselProjectGamma" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/350x200/?technology,operations" class="d-block w-100" alt="Tech Operations 1">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?operations,technology" class="d-block w-100" alt="Tech Operations 2">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?industrial,technology" class="d-block w-100" alt="Tech Operations 3">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?automation,technology" class="d-block w-100" alt="Tech Operations 4">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjectGamma" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProjectGamma" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title translatable" data-en="Tech Operations Streamline" data-ar="تبسيط العمليات التقنية">Tech Operations Streamline</h5>
            <p class="card-text translatable" data-en="Optimizing operational efficiency through advanced technology." data-ar="تحسين الكفاءة التشغيلية باستخدام تكنولوجيا متقدمة.">
              Optimizing operational efficiency through advanced technology.
            </p>
          </div>
        </div>
      </div>
      <!-- Project Card 4: Digital Innovation Leader -->
      <div class="col-md-6 col-lg-3 animate-fadein">
        <div class="card h-100">
          <!-- Carousel for Digital Innovation Leader -->
          <div id="carouselProjectDelta" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/350x200/?innovation,digital" class="d-block w-100" alt="Digital Innovation 1">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?innovation,tech" class="d-block w-100" alt="Digital Innovation 2">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?digital,creativity" class="d-block w-100" alt="Digital Innovation 3">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/350x200/?creative,digital" class="d-block w-100" alt="Digital Innovation 4">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjectDelta" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselProjectDelta" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
          <div class="card-body">
            <h5 class="card-title translatable" data-en="Digital Innovation Leader" data-ar="رائد الابتكار الرقمي">Digital Innovation Leader</h5>
            <p class="card-text translatable" data-en="Pioneering digital strategies that drive success." data-ar="استراتيجيات رقمية رائدة تدفع النجاح.">
              Pioneering digital strategies that drive success.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  <!-- Statistics Section -->
  <section class="statistics bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 stat-item">
          <h3>100%</h3>
          <p class="translatable" data-en="Project Success Rate" data-ar="معدل نجاح المشاريع">Project Success Rate</p>
        </div>
        <div class="col-md-3 stat-item">
          <h3>40+</h3>
          <p class="translatable" data-en="Collaborative Employees" data-ar="الموظفون المتعاونون">Collaborative Employees</p>
        </div>
        <div class="col-md-3 stat-item">
          <h3>200+</h3>
          <p class="translatable" data-en="Technical Consultations" data-ar="الاستشارات الفنية">Technical Consultations</p>
        </div>
        <div class="col-md-3 stat-item">
          <h3>30+</h3>
          <p class="translatable" data-en="Successful Projects" data-ar="المشاريع الناجحة">Successful Projects</p>
        </div>
      </div>
    </div>
  </section>
 <section id="clients" class="py-5">
  <div class="container">
    <h2 class="section-title translatable" data-en="Our Clients" data-ar="عملاؤنا">Our Clients</h2>
    <div class="marquee">
      <div class="marquee-content d-flex align-items-center">
        <!-- العناصر الأولى -->
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/1.jpg') }}" alt="Client 1" style="max-width: 200px;">
          <p>Client 1</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/2.jpg') }}" alt="Client 2" style="max-width: 200px;">
          <p>Client 2</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/3.jpg') }}" alt="Client 3" style="max-width: 200px;">
          <p>Client 3</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/44.jpg') }}" alt="Client 4" style="max-width: 200px;">
          <p>Client 4</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/5.jpg') }}" alt="Client 5" style="max-width: 200px;">
          <p>Client 5</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/6.jpg') }}" alt="Client 6" style="max-width: 200px;">
          <p>Client 6</p>
        </div>
        <!-- تكرار نفس العناصر لجعل الشريط مستمرًا -->
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/1.jpg') }}" alt="Client 1" style="max-width: 200px;">
          <p>Client 1</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/2.jpg') }}" alt="Client 2" style="max-width: 200px;">
          <p>Client 2</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/3.jpg') }}" alt="Client 3" style="max-width: 200px;">
          <p>Client 3</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/44.jpg') }}" alt="Client 4" style="max-width: 200px;">
          <p>Client 4</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/5.jpg') }}" alt="Client 5" style="max-width: 200px;">
          <p>Client 5</p>
        </div>
        <div class="client-item text-center mx-4">
          <img src="{{ asset('images/clients/6.jpg') }}" alt="Client 6" style="max-width: 200px;">
          <p>Client 6</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Contact Section with Form -->
<section id="contact" class="py-5">
  <div class="container">
    <h2 class="section-title translatable" data-en="Contact Us" data-ar="تواصل معنا">Contact Us</h2>

    <!-- رسالة النجاح عند الإرسال -->
    @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="row">
      <!-- عمود النموذج -->
      <div class="col-md-6">
        <form class="contact-form" action="{{ route('requests.store') }}" method="POST">
          @csrf
          <div class="mb-3">
            <label for="firstName" class="form-label translatable" data-en="First Name" data-ar="الاسم الأول">First Name</label>
            <input type="text" class="form-control" id="firstName" name="first_name" placeholder="Your First Name" required>
          </div>
          <div class="mb-3">
            <label for="lastName" class="form-label translatable" data-en="Last Name" data-ar="الاسم الأخير">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="last_name" placeholder="Your Last Name" required>
          </div>
          <div class="mb-3">
            <label for="emailContact" class="form-label translatable" data-en="Email Address" data-ar="البريد الإلكتروني">Email Address</label>
            <input type="email" class="form-control" id="emailContact" name="email" placeholder="example@technova.com" required>
          </div>
          <div class="mb-3">
            <label for="phoneContact" class="form-label translatable" data-en="Phone Number" data-ar="رقم الهاتف">Phone Number</label>
            <input type="tel" class="form-control" id="phoneContact" name="phone" placeholder="+1 555 123456" required>
          </div>
          <div class="mb-3">
            <label for="messageContact" class="form-label translatable" data-en="Your Message" data-ar="رسالتك">Your Message</label>
            <textarea class="form-control" id="messageContact" name="message" rows="5" placeholder="Please include all details of your request" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary translatable" data-en="Send Message" data-ar="أرسل الرسالة">Send Message</button>
        </form>
      </div>

      <!-- عمود معلومات التواصل -->
      <div class="col-md-6">
        <div class="mt-4">
          <p class="translatable" data-en="Feel free to reach out for inquiries or project discussions. We are here to help you turn your vision into reality." data-ar="لا تتردد في التواصل للاستفسارات أو مناقشة المشاريع. نحن هنا لمساعدتك في تحويل رؤيتك إلى واقع.">
            Feel free to reach out for inquiries or project discussions. We are here to help you turn your vision into reality.
          </p>
          <p><strong class="translatable" data-en="Address:" data-ar="العنوان:">Address:</strong> 1234 TechNova Avenue, Innovation City, Country</p>
          <p><strong class="translatable" data-en="Phone:" data-ar="الهاتف:">Phone:</strong> +963 945852707</p>
          <p><strong class="translatable" data-en="Email:" data-ar="البريد الإلكتروني:">Email:</strong> <a href="mailto:mohamadit102@gmail.com">mohamadit102@gmail.com</a></p>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Service Modal (Ready for future navigation) -->
  <div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="serviceModalLabel">Service Details</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="serviceModalBody">
          <!-- سيتم تحديث المحتوى هنا بناءً على الخدمة المختارة -->
          <p>Service details placeholder...</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Footer -->
  <footer>
    <div class="container">
      <p class="translatable" data-en="Welcome to TechNova, your number one destination for solving your IT challenges. We are pioneers in technology – remember our slogan: 'Your Dream, Our Application'" data-ar="مرحباً بكم في تك نوفا، وجهتكم الأولى لحل تحديات تكنولوجيا المعلومات. نحن رواد في التكنولوجيا – تذكر شعارنا: 'حلمك، تطبيقنا'">
        Welcome to TechNova, your number one destination for solving your IT challenges. We are pioneers in technology – remember our slogan: "Your Dream, Our Application".
      </p>
      <p>&copy; 2025 TechNova. All Rights Reserved.</p>
    </div>
  </footer>
  <!-- Bootstrap JS and dependencies -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <!-- Custom JavaScript for Language Toggle and Service Modal Handling -->
  <script>
    let currentLanguage = 'en';
    const toggleBtn = document.getElementById('toggleLangBtn');

    function updateLanguage() {
      // تحديث النصوص باستخدام data-en أو data-ar
      document.querySelectorAll('.translatable').forEach(function(elem) {
        let text = elem.getAttribute('data-' + currentLanguage);
        if (text !== null) {
          elem.innerHTML = text;
        }
      });
      // زر التبديل يعرض اللغة الهدف
      toggleBtn.innerHTML = currentLanguage === 'en' ? 'العربية' : 'English';
      // تغيير اتجاه النصوص بناءً على اللغة
      document.body.style.direction = currentLanguage === 'en' ? 'ltr' : 'rtl';
      document.documentElement.lang = currentLanguage;
    }

    toggleBtn.addEventListener('click', function() {
      currentLanguage = currentLanguage === 'en' ? 'ar' : 'en';
      updateLanguage();
    });

    // Initialize the page in English
    updateLanguage();

    // Service Modal Handling: Update modal content based on clicked service card
    const serviceLinks = document.querySelectorAll('.service-link');
    serviceLinks.forEach(link => {
      link.addEventListener('click', function() {
        let title = currentLanguage === 'en'
          ? this.getAttribute('data-service-title')
          : (this.getAttribute('data-service-title-ar') || this.getAttribute('data-service-title'));
        let desc = currentLanguage === 'en'
          ? this.getAttribute('data-service-desc')
          : (this.getAttribute('data-service-desc-ar') || this.getAttribute('data-service-desc'));
        document.getElementById('serviceModalLabel').innerText = title;
        document.getElementById('serviceModalBody').innerHTML = `<p>${desc}</p>`;
      });
    });
  </script>
</body>
</html>
