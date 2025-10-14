<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | My Website</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
</head>
<body>
    <header>
        <h3>Personal Portfolio Website</h3>
        <h3>Welcome, Guest</h3>
    </header>

    <div class="container">
        <section class="hero animate">
            <h1>{{ $title }}</h1>
        </section>

        <section class="profile">
            <div class="timeline-image">
                <img src="{{ asset('assets/timeline/' . $slug . '.jpg') }}" alt="{{ $title }} Experience" class="role-image">
            </div>
            <div class="profile-info">
                <h2>Duration: {{ $period }}</h2>
                <div class="timeline-details">
                    <p>{{ $description }}</p>
                </div>
            </div>
        </section>

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

        <div style="text-align: center; margin-top: 2rem;">
            <a href="{{ url('/') }}" class="back-button">Back to About Page</a>
        </div>
    </div>
</body>
</html>
