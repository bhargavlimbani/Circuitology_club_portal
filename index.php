<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuitology Club ICT MU</title>
    <!-- Favicon (replace with your actual logo) -->
    <link rel="icon" href="https://img.icons8.com/color/48/000000/electronics.png" type="image/png">
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* CSS Variables */
        :root {
            --primary-color: #4a6bff;
            --secondary-color: #ff6b4a;
            --dark-color: #1a237e;
            --light-color: #e8eaf6;
            --accent-color: #00c853;
        }
        
        /* Base Styles */
        * {
            margin: 0;
            padding: 0;
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
        }
        
        body {
            background-color: #f5f5f5;
            color: #333;
            overflow-x: hidden;
        }

        /* Header Section */
        .header {
            min-height: 100vh;
            width: 100%;
            background-color: transparent;
            background-image: linear-gradient(rgba(4,9,30,0.7), rgba(4,9,30,0.7)), 
                            url('https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-position: center;
            background-size: cover;
            position: relative;
            padding: 20px;
        }
        
        nav {
            display: flex;
            padding: 2% 6%;
            justify-content: space-between;
            align-items: center;
            background-color: transparent;
        }
        
        nav img {
            width: 150px;
            height: auto;
        }
        
        .nav-links {
            flex: 1;
            text-align: right;
        }
        
        .nav-links ul li {
            list-style: none;
            display: inline-block;
            padding: 8px 12px;
            position: relative;
        }
        
        .nav-links ul li a {
            color: #fff;
            text-decoration: none;
            font-size: 13px;
            transition: 0.3s;
        }
        
        .nav-links ul li a:hover {
            color: var(--secondary-color);
        }
        
        .nav-links ul li::after {
            content: '';
            width: 0%;
            height: 2px;
            background: var(--secondary-color);
            display: block;
            margin: auto;
            transition: 0.5s;
        }
        
        .nav-links ul li:hover::after {
            width: 100%;
        }
        
        /* Buttons */
        .hero-btn {
            display: inline-block;
            text-decoration: none;
            color: #fff;
            border: 1px solid #fff;
            padding: 12px 24px;
            font-size: 13px;
            background: transparent;
            position: relative;
            cursor: pointer;
            transition: all 0.3s;
            border-radius: 50px;
        }
        
        .hero-btn:hover {
            border: 1px solid var(--secondary-color);
            background: var(--secondary-color);
            color: #000;
        }
        
        /* Text Box */
        .text-box {
            width: 90%;
            color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
        }
        
        .text-box h1 {
            font-size: 62px;
            margin-bottom: 20px;
            animation: fadeInDown 1s ease;
            
        }
        
        .text-box p {
            margin: 10px 0 40px;
            font-size: 16px;
            animation: fadeInUp 1s ease;
        }
        
        /* Course Section */
        .course {
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 100px;
        }
        
        .course h1 {
            font-size: 36px;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 20px;
        }
        
        .course p {
            color: #777;
            font-size: 14px;
            font-weight: 300;
            line-height: 22px;
            padding: 10px;
            margin-bottom: 30px;
        }
        
        .row {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }
        
        .course-col {
            flex-basis: 31%;
            background: #fff;
            border-radius: 10px;
            margin-bottom: 5%;
            padding: 20px 12px;
            box-sizing: border-box;
            transition: 0.5s;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
        }
        
        .course-col:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .course-col h3 {
            text-align: center;
            font-weight: 600;
            margin: 10px 0;
            color: var(--primary-color);
        }
        
        .course-col i {
            font-size: 24px;
            color: var(--accent-color);
            margin-right: 10px;
        }
        
        /* Campus Section */
        .campus {
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 50px;
        }
        
        .campus h1 {
            font-size: 36px;
            font-weight: 600;
            color: var(--dark-color);
            margin-bottom: 20px;
        }
        
        .campus-col {
            flex-basis: 32%;
            border-radius: 10px;
            margin-bottom: 30px;
            position: relative;
            overflow: hidden;
        }
        
        .campus-col img {
            width: 100%;
            height: 300px;
            object-fit: cover;
            display: block;
            transition: transform 0.5s;
        }
        
        .campus-col:hover img {
            transform: scale(1.1);
        }
        
        .layer {
            background: transparent;
            height: 100%;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transition: 0.5s;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }
        
        .layer:hover {
            background: rgba(74, 107, 255, 0.7);
        }
        
        .layer h3 {
            width: 100%;
            font-weight: 500;
            color: #fff;
            font-size: 26px;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            position: absolute;
            opacity: 0;
            transition: 0.5s;
            padding: 20px;
            background: rgba(0,0,0,0.7);
        }
        
        .layer:hover h3 {
            opacity: 1;
            bottom: 50%;
        }
        
        /* Facilities Section */
        .facilities {
            width: 80%;
            margin: auto;
            text-align: center;
            padding-top: 50px;
        }
        
        .facilities-col {
            flex-basis: 31%;
            border-radius: 10px;
            margin-bottom: 5%;
            text-align: left;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: 0.5s;
        }
        
        .facilities-col:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .facilities-col img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 15px;
        }
        
        .facilities-col h3 {
            margin-top: 16px;
            margin-bottom: 15px;
            text-align: left;
            color: var(--primary-color);
        }
        
        /* Testimonials */
        .testimonials {
            width: 80%;
            margin: auto;
            padding-top: 50px;
            text-align: center;
        }
        
        .testimonial-col {
            flex-basis: 48%;
            border-radius: 10px;
            margin-bottom: 5%;
            text-align: left;
            background: #fff;
            padding: 25px;
            cursor: pointer;
            display: flex;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            transition: 0.5s;
        }
        
        .testimonial-col:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        }
        
        .testimonial-col img {
            height: 120px;
            width: 120px;
            margin-right: 30px;
            border-radius: 10px;
            object-fit: cover;
        }
        
        .testimonial-col h3 {
            margin-top: 10px;
            color: var(--primary-color);
        }
        
        .testimonial-col p {
            padding: 0;
            color: #555;
            font-size: 14px;
            margin: 10px 0;
        }
        
        .testimonial-col .rating {
            color: var(--secondary-color);
        }
        
        /* CTA Section */
        .cta {
            margin: 100px auto;
            width: 80%;
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), 
                            url('https://images.unsplash.com/photo-1518770660439-4636190af475?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80');
            background-position: center;
            background-size: cover;
            border-radius: 10px;
            text-align: center;
            padding: 100px 0;
        }
        
        .cta h1 {
            color: #fff;
            margin-bottom: 40px;
            padding: 0;
            font-size: 36px;
            animation: pulse 2s infinite;
        }
        
        .cta p {
            color: #fff;
            margin-bottom: 40px;
            font-size: 16px;
        }
        
        /* Footer */
        .footer {
            width: 100%;
            text-align: center;
            padding: 30px 0;
            background-color: var(--dark-color);
            color: #fff;
        }
        
        .footer h4 {
            margin-bottom: 25px;
            margin-top: 20px;
            font-weight: 600;
            font-size: 24px;
        }
        
        .footer p {
            margin-bottom: 20px;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .icons {
            margin: 20px 0;
        }
        
        .icons a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
            transition: 0.3s;
        }
        
        .icons a:hover {
            color: var(--secondary-color);
            transform: translateY(-5px);
        }
        
        .copy {
            margin-top: 20px;
            font-size: 12px;
            color: #aaa;
        }
        
        /* Animations */
        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.05);
            }
            100% {
                transform: scale(1);
            }
        }
        
        /* Interactive Elements */
        .floating-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: var(--primary-color);
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            cursor: pointer;
            z-index: 100;
            transition: all 0.3s;
        }
        
        .floating-btn:hover {
            background: var(--secondary-color);
            transform: translateY(-5px) scale(1.1);
        }
        
        /* Mobile Menu */
        .fa-bars, .fa-times {
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: none;
        }
        
        /* Responsive Design */
        @media(max-width: 700px) {
            .text-box h1 {
                font-size: 32px;
            }
            
            .nav-links ul li {
                display: block;
            }
            
            .nav-links {
                position: fixed;
                background: var(--dark-color);
                height: 100vh;
                width: 200px;
                top: 0;
                right: -200px;
                text-align: left;
                z-index: 2;
                transition: 0.5s;
            }
            
            .fa-bars, .fa-times {
                display: block;
                margin: 10px;
                font-size: 22px;
            }
            
            .course-col, .facilities-col, .testimonial-col {
                flex-basis: 100%;
            }
            
            .testimonial-col {
                flex-direction: column;
            }
            
            .testimonial-col img {
                margin-right: 0;
                margin-bottom: 20px;
            }
            
            .cta h1 {
                font-size: 24px;
            }
        }
        
        /* Project Gallery */
        .project-gallery {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
            padding: 20px;
        }
        
        .project-card {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.2);
        }
        
        .project-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .project-card:hover img {
            transform: scale(1.1);
        }
        
        .project-info {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(26, 35, 126, 0.9);
            color: white;
            padding: 20px;
            transform: translateY(100%);
            transition: transform 0.3s ease;
        }
        
        .project-card:hover .project-info {
            transform: translateY(0);
        }
        
        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.7);
            animation: fadeIn 0.3s;
        }
        
        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }
        
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 30px;
            border-radius: 10px;
            width: 80%;
            max-width: 500px;
            position: relative;
            box-shadow: 0 5px 30px rgba(0,0,0,0.3);
        }
        
        .close {
            color: #aaa;
            position: absolute;
            top: 15px;
            right: 25px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }
        
        .close:hover {
            color: var(--secondary-color);
        }
        
        .modal h2 {
            margin-bottom: 20px;
            color: var(--primary-color);
        }
        
        .modal input, .modal select, .modal textarea {
            width: 100%;
            padding: 12px;
            margin: 8px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        .modal textarea {
            resize: vertical;
        }
    </style>
</head>
<body>
    <!-- Floating Contact Button -->
    <div class="floating-btn" onclick="openContactForm()">
        <i class="fas fa-comment-dots"></i>
    </div>

    <!-- Header Section -->
    <section class="header" id="home">
        <nav>
            <!-- Replace this with your actual logo path -->
            <a href="#home"><img src="logo.png" alt="Circuitology Club Logo" width="150" style="height:100px;"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="#home">HOME</a></li>
                    <li><a href="#about">ABOUT</a></li>
                    <li><a href="event.html">EVENTS</a></li>
                    <li><a href="./project8.html">PROJECTS</a></li>
                    <li><a href="#contact">CONTACT</a></li>
                    <a href="form.php" class="hero-btn" style="margin-right: 10px;">Login</a>
                    <a href="logout.php" class="hero-btn" style="margin-right: 10px;">Logout</a>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>

        <div class="text-box">
            <h1>Circuitology Club</h1>
            <p>Where circuits come to life! Join our hardware enthusiasts community to explore electronics, embedded systems, IoT, and cutting-edge hardware technologies through hands-on projects and collaborative learning.</p>
            <a href="#register" class="hero-btn">Join Our Next Workshop</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="course" id="about">
        <h1>Club Mission</h1>
        <p>Empowering students to become hardware innovators through:</p>

        <div class="row">
            <div class="course-col">
                <h3><i class="fas fa-microchip"></i> Hands-on Learning</h3>
                We provide practical experience with electronic components, circuit design, PCB fabrication, and embedded systems development.
            </div>

            <div class="course-col">
                <h3><i class="fas fa-users"></i> Collaborative Projects</h3>
                Work in teams to build real-world hardware solutions, from simple circuits to complex IoT systems and robotics.
            </div>

            <div class="course-col">
                <h3><i class="fas fa-flask"></i> Innovation Lab</h3>
                Access to our well-equipped lab with oscilloscopes, 3D printers, soldering stations, and development kits.
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section class="campus" id="events">
        <h1>Club Activities & Events</h1>
        <p>Engage in our exciting hardware-focused programs throughout the year.</p>

        <div class="row">
            <div class="campus-col">
                <img src="https://images.unsplash.com/photo-1625014618427-fbc980b974f5?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1364&q=80" alt="Circuit Design Workshop">
                <div class="layer">
                    <h3>Circuit Design Fundamentals</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="https://images.unsplash.com/photo-1522542550221-31fd19575a2d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Arduino Workshop">
                <div class="layer">
                    <h3>Arduino/Raspberry Pi Workshops</h3>
                </div>
            </div>
            <div class="campus-col">
                <img src="https://images.unsplash.com/photo-1585771724684-38269d6639fd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Soldering Competition">
                <div class="layer">
                    <h3>Annual Soldering Competition</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section class="facilities" id="projects">
        <h1>Featured Projects</h1>
        <p>See what our members have been building in our innovation lab</p>

        <div class="project-gallery">
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1558002038-1055907df827?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Smart Home System">
                <div class="project-info">
                    <h3>IoT Smart Home System</h3>
                    <p>A complete home automation system with custom PCB design and mobile app integration.</p>
                    <button class="hero-btn" style="margin-top: 10px;">View Details</button>
                </div>
            </div>
            
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Health Monitoring Device">
                <div class="project-info">
                    <h3>Wearable Health Monitor</h3>
                    <p>Compact wearable device that tracks vital signs and alerts emergency contacts.</p>
                    <button class="hero-btn" style="margin-top: 10px;">View Details</button>
                </div>
            </div>
            
            <div class="project-card">
                <img src="https://images.unsplash.com/photo-1593642632823-8f785ba67e45?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1632&q=80" alt="Agricultural Robot">
                <div class="project-info">
                    <h3>Autonomous Agricultural Robot</h3>
                    <p>Solar-powered robot that can identify weeds and spray them with precision.</p>
                    <button class="hero-btn" style="margin-top: 10px;">View Details</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="testimonials">
        <h1>Skills You'll Develop</h1>
        <p>Our comprehensive program helps you master essential hardware engineering skills</p>

        <div class="row">
            <div class="testimonial-col">
                <img src="https://images.pexels.com/photos/159220/printed-circuit-board-print-plate-via-macro-159220.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="PCB Design">
                <div>
                    <h3>PCB Design & Fabrication</h3>
                    <p>Learn to design professional-grade printed circuit boards using industry-standard tools like Altium and KiCad, from schematic capture to final production.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>
            <div class="testimonial-col">
                <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Embedded Systems">
                <div>
                    <h3>Embedded Systems Programming</h3>
                    <p>Master microcontroller programming with C/C++, RTOS concepts, peripheral interfaces, and low-power design techniques.</p>
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta" id="contact">
        <h1>Ready to Build the Future With Us?</h1>
        <p>Whether you're a complete beginner or an experienced maker, we have opportunities for you to learn and grow.</p>
        <a href="#register" class="hero-btn">Join Circuitology Club</a>
    </section>

    <!-- Footer -->
    <section class="footer">
        <h4>Circuitology Club</h4>
        <p>
            Department of Information communication Technology<br>
            MA108,Main Building Mu campus<br>
            Contact: circuitology@mu.edu | +91 9723265278
        </p>

        <div class="icons">
            <a href="https://www.instagram.com/circuitology_club?igsh=Mmt6YTA2d3BsOG9r" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://www.linkedin.com/company/circuitology-club/" target="_blank">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="https://www.youtube.com/@ICTMarwadiUniversity" target="_blank">
                <i class="fab fa-youtube"></i>
            </a>
        </div>  

        <div class="copy">
            &copy; 2025 Circuitology Club. All rights reserved.
        </div>
    </section>

    <!-- Login Modal -->
    <div id="loginModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('loginModal')">&times;</span>
            <h2>Member Login</h2>
            <form>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <button type="submit" class="hero-btn">Login</button>
            </form>
            <p>Don't have an account? <a href="#" onclick="switchToRegister()">Register here</a></p>
        </div>
    </div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('registerModal')">&times;</span>
            <h2>Register Now</h2>
            <form>
                <input type="text" placeholder="Full Name" required>
                <input type="email" placeholder="Email" required>
                <input type="password" placeholder="Password" required>
                <input type="password" placeholder="Confirm Password" required>
                <select required>
                    <option value="">Select Department</option>
                    <option>Electronics</option>
                    <option>Computer Science</option>
                    <option>Electrical</option>
                    <option>Mechanical</option>
                    <option>Other</option>
                </select>
                <button type="submit" class="hero-btn">Register</button>
            </form>
            <p>Already have an account? <a href="#" onclick="switchToLogin()">Login here</a></p>
        </div>
    </div>

    <!-- Contact Form Modal -->
    <div id="contactModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal('contactModal')">&times;</span>
            <h2>Contact Us</h2>
            <form>
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea placeholder="Your Message" rows="5" required></textarea>
                <button type="submit" class="hero-btn">Send Message</button>
            </form>
        </div>
    </div>

    <script>
        // Mobile Menu Toggle
        var navLinks = document.getElementById("navLinks");
        
        function showMenu() {
            navLinks.style.right = "0";
        }
        
        function hideMenu() {
            navLinks.style.right = "-200px";            
        }
        
        
        function logout() {
            localStorage.removeItem("loggedIn");
            alert("You have been logged out.");
            window.location.href = "login.html";
        }

        // Modal Functions
        function openLoginModal() {
            document.getElementById('loginModal').style.display = 'block';
        }
        
        function openRegisterModal() {
            document.getElementById('registerModal').style.display = 'block';
        }
        
        function openContactForm() {
            document.getElementById('contactModal').style.display = 'block';
        }
        
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
        
        function switchToRegister() {
            closeModal('loginModal');
            openRegisterModal();
        }
        
        function switchToLogin() {
            closeModal('registerModal');
            openLoginModal();
        }
        
        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.className === 'modal') {
                event.target.style.display = 'none';
            }
        }
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
        
        // Animation on scroll
        window.addEventListener('scroll', reveal);
        
        function reveal() {
            var reveals = document.querySelectorAll('.course-col, .campus-col, .facilities-col, .testimonial-col, .project-card');
            
            for(var i = 0; i < reveals.length; i++) {
                var windowHeight = window.innerHeight;
                var revealTop = reveals[i].getBoundingClientRect().top;
                var revealPoint = 150;
                
                if(revealTop < windowHeight - revealPoint) {
                    reveals[i].classList.add('active');
                }
            }
        }
    </script>
</body>
</html>