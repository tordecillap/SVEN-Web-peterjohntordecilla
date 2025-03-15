<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAWTASTIC</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('css/index.css') }}">
</head>

<body>
    <header>
        <div class="logo" id="logoTop"><img src="paw-logo.jpg" alt="Paw Logo"><span>PAWTASTIC</span></div>
        <div class="hamburger">☰</div>
        <nav class="nav">
            <a id="aboutLink">About Us</a>
            <a id="scheduleLink">Schedule a Visit</a>
        </nav>
    </header>

    <section class="hero section" id="hero">
        <div class="hero-content">
            <h1>We care for your furry little loved ones</h1>
            <button class="btn" id="heroSchedule">Schedule a Visit</button>
        </div>
    </section>

    <section class="section" id="about">
        <h2>About Us</h2>
        <div class="about">
            <div class="about-content">
                <p>We provide professional pet care services with love.</p>
                <button class="btn" id="aboutSchedule">Schedule a Visit</button>
            </div>
            <div class="about-images">
                <img src="dog1.jpg" alt="Dog 1">
                <img src="dog2.jpg" alt="Dog 2">
                <img src="dog3.jpg" alt="Dog 3">
                <img src="dog4.jpg" alt="Dog 4">
            </div>
        </div>
    </section>

    <section class="section" id="appointment">
        <h2>Schedule an Appointment</h2>
        <div class="appointment">
            <div class="appointmentLeft">
                <a href="#hero" class="logo" id="logoScroll"><img src="paw-logo.jpg" alt="Paw Logo"></a>
                <h4>All services include</h4>
                <p>A photo update</p>
                <p>Notifications of arrival</p>
                <p>Treats for your pet</p>
            </div>
            <div class="appointment-form">
                <form id="appointmentForm">
                    <label>Frequency:</label>
                    <select id="frequency" required>
                        <option value="">Select</option>
                        <option value="Recurring">Recurring</option>
                        <option value="One-time">One-time</option>
                    </select>
                    <label>Start Date:</label>
                    <input type="date" id="startDate" required>
                    <label>Days:</label>
                    <select id="days" multiple required>
                        <option>Monday</option>
                        <option>Tuesday</option>
                        <option>Wednesday</option>
                        <option>Thursday</option>
                        <option>Friday</option>
                        <option>Saturday</option>
                        <option>Sunday</option>
                    </select>
                    <label>Time:</label>
                    <select id="time" required>
                        <option>Morning</option>
                        <option>Afternoon</option>
                        <option>Evening</option>
                    </select>
                    <label>Notes:</label>
                    <textarea id="notes"></textarea>
                    <button type="submit" class="btn">Schedule a Service</button>
                    <p id="message" class="hidden"></p>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="{{ URL::asset('js/index.js') }}"></script>

</html>