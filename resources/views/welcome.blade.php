<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Event Landing Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>

    <!-- Header Section -->

    <header class="set-me">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">

                <div class="logo">
                    <h2>reBoot </h2>
                </div>
                <div class="header-buttons">
                    <button class="btn"> <a href="{{ route('eventRegistration')}}" style="color: #fff; text-decoration: none;">Register</a></button>
                    
                </div>
            </div>
        </div>
    </header>


    <!-- Hero Section -->
    <section class="hero">
        <h1>reBoot Conference</h1>
        <p>Join us on March 15, 2024, at Tech Convention Center</p>
        <button class="btn mt-4"> <a href="{{ route('eventRegistration')}}" style="color: #fff; text-decoration: none;">Register</a> </button>
    </section>

    <!-- About Section -->
    <section class="section about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text">
                    <h2 class="section-title">About the Event</h2>
                    <p>Join us at Tech Event 2024, where experts in technology come together to share insights, trends,
                        and innovations. Dive into a day of workshops, networking, and industry-leading talks designed
                        to inspire and inform.</p>
                </div>
                <div class="col-md-6">
                    <div class="image-diss">
                        <img src="{{ asset('images/image-tech.jpg') }}" alt="About Image" class="img-fluid "
                            style="border-radius: 20px;">

                        <div class="honor">
                            <h3 class="m-0" style="     font-weight: 600;font-size: 2rem; color: rgb(0, 172, 168);">
                                70,000+</h3>
                            <p class="m-0">attendees </p>
                        </div>
                        <div class="honor-me">
                            <h3 class="m-0" style="    font-weight: 600; font-size: 2rem; color: rgb(228, 33, 33);">
                                1,000+</h3>
                            <p class="m-0">investors </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Join Us Section -->
    <section class="section join-us">
        <div class="container">
            <h2 class="section-title">Join Us for</h2>
            <div class="row">
                <div class="col-md-4 mb-2 text-center">
                    <div class="join-us-item" style=" background: linear-gradient(135deg, rgba(77, 64, 255, 0.5), rgba(226, 30, 81, 0.8)),
            url('/images/backimg1\ \(3\).jpeg') no-repeat center;">

                        <h3>Networking</h3>
                        <p>Make valuable connections, and meet experts in your industry</p>
                    </div>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <div class="join-us-item do-dit" style=" background: linear-gradient(135deg, rgba(77, 64, 255, 0.5), rgba(226, 30, 81, 0.8)),
             url('/images/backimg1\ \(1\).jpeg') no-repeat center;">
                        <h3>LEARNING</h3>
                        <p>Upgrade yourself with the skills that matter the most</p>
                    </div>
                </div>
                <div class="col-md-4 mb-2 text-center">
                    <div class="join-us-item" style=" background: linear-gradient(135deg, rgba(77, 64, 255, 0.5), rgba(226, 30, 81, 0.8)),
            url('/images/backimg1\ \(2\).jpeg') no-repeat center; ">

                        <h3>Experience</h3>
                        <p>Beautiful locations, Mouth-watering meals, Fun activities and much more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Sponsors Section -->
    <section class="section sponsors">
        <div class="container">
            <h2 class="section-title">Our Sponsors</h2>
            <div class="row justify-content-center">
                <div class="col-md-2">
                    <img src="{{ asset('images/amazon-logo.png') }}" alt="Sponsor 1" class="logo">
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/amazon-logo.png') }}" alt="Sponsor 3" class="logo">
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/amazon-logo.png') }}" alt="Sponsor 3" class="logo">
                </div>
                <div class="col-md-2">
                    <img src="{{ asset('images/amazon-logo.png') }}" alt="Sponsor 3" class="logo">
                </div>
            </div>
        </div>
    </section>

    <!-- Venue Section -->
    <section class="section venue">
        <div class="container">
            <h2 class="section-title">Venue</h2>
            <div class="row">
                <div class="col-md-12">
                    <h4>Location: Tech Convention Center</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509093!2d144.95373531531788!3d-37.81627997975168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0a0c9e9f%3A0x5045675218ce6e12!2sTech%20Convention%20Center!5e0!3m2!1sen!2sau!4v1601234567890!5m2!1sen!2sau"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer>
        <p>&copy; {{date('Y')}} Tech Event. All Rights Reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>