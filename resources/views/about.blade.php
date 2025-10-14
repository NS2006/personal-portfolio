<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me | My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("css/index.css") }}">

    <link rel="stylesheet" href="{{ asset("css/about.css") }}">
</head>
<body>
    <header>
        <h3>My Website</h3>
        <nav>
            <a href="/">Home</a>
            <a href="/about">About</a>
        </nav>
        <h3>Welcome, Guest</h3>
    </header>

    <div class="container">
        <section class="hero animate">
            <h1>About Me</h1>
            <p>Welcome to my website. This website is my submission for the "About Page Assignment". This page primarily contains my personal information.</p>
        </section>

        <section class="profile">
            <div class="profile-img">
                <img src="{{asset("assets/me.jpg")}}" alt="Profile Picture">
            </div>
            <div class="profile-info">
                <h2>Niko Sutiono</h2>
                <p>
                    I'm a fifth-semester undergraduate student at BINUS University. I'm someone who really enjoys exploring new things.
                </p>
                <p>
                    Aside from my role as a student at BINUS University, I also have several other roles including Part-time Laboratory Assistant and Mentor. I'm also active in several organizations such as KMBD (Keluarga Mahasiswa Buddhis Dhammavaddhana) and HIMTI (Himpunan Mahasiswa Teknik Informatika).
                </p>
            </div>
        </section>

        <section class="experience">
            <h2 class="section-title">
                My Study Experience at BINUS University
            </h2>
            <div class="timeline">
                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                        <span class="date">
                            2023 - Present
                        </span>
                        <h3>
                            Undergraduate Student
                        </h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                        <span class="date">
                            Aug 2025 - Present
                        </span>
                        <h3>Mentor</h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                        <span class="date">
                            Feb 2025 - Present
                        </span>
                        <h3>Part-time Laboratory Assistant</h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                            <span class="date">
                                Feb 2024 - Present
                            </span>
                            <h3>
                                Manager at KMBD
                            </h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                            <span class="date">
                                Feb 2023 - Present
                            </span>
                            <h3>
                                Activist at HIMTI
                            </h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                            <span class="date">
                                Feb 2023 - Feb 2024
                            </span>
                            <h3>
                                Activist at KMBD
                            </h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>

                <div class="timeline-item animate delay-1">
                    <div class="timeline-content">
                            <span class="date">
                                Sep 2023 - Sep 2024
                            </span>
                            <h3>
                                Freshmen
                            </h3>
                    </div>
                    <div class="timeline-dot"></div>
                </div>
            </div>

        <section class="contact">
            <h2 class="section-title">Get In Touch</h2>
            <p>Here are my contacts. Feel free to chat me :D</p>

            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <span>niko.sutiono@binus.ac.id</span>
                </div>

                <div class="contact-item">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <span>+62 (821) 2462-2607</span>
                </div>
            </div>
        </section>
    </div>

    <script src="js/about.js"></script>
</body>
</html>
