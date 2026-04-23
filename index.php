<?php
/**
 * Bachelor of Arts Program in Information Studies
 * Homepage Template for XAMPP
 */
$program_title = "Bachelor of Arts Program in Information Studies";
$faculty_name = "Department of Library Science, Faculty of Arts";
$university_name = "Chulalongkorn University";
$current_year = date("Y");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $program_title; ?> | <?php echo $university_name; ?></title>
    <meta name="description" content="Official homepage for the Bachelor of Arts Program in Information Studies at Chulalongkorn University. Learn about our curriculum, faculty, and career paths.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Outfit:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Navigation -->
    <nav id="navbar">
        <a href="#" class="logo">
            <span>BA</span> Information Studies
        </a>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#curriculum">Curriculum</a></li>
            <li><a href="#faculty">Faculty</a></li>
            <li><a href="#careers">Careers</a></li>
            <li><a href="#contact" class="btn-small">Apply Now</a></li>
        </ul>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background">
            <img src="assets/hero_image.png" alt="Information Studies Campus">
        </div>
        <div class="hero-content">
            <span class="section-tag" style="animation: fadeInUp 1s forwards 0.2s; opacity: 0; display: inline-block;">Empowering the Future of Information</span>
            <h1>The Bachelor of Arts in <span>Information Studies</span></h1>
            <p>Master the intersection of data, technology, and human experience at Thailand's premier university. Design the information systems of tomorrow.</p>
            <div class="hero-btns">
                <a href="#about" class="btn">Explore Program</a>
                <a href="#curriculum" class="btn-outline">View Curriculum</a>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="reveal">
        <span class="section-tag">Overview</span>
        <h2 class="section-title">Where Arts Meets <span>Analytics</span></h2>
        <div class="grid">
            <div class="about-text">
                <p>The Bachelor of Arts in Information Studies program at Chulalongkorn University bridges the gap between traditional liberal arts and modern information science. We prepare students to manage, analyze, and utilize information effectively in a rapidly changing digital world.</p>
                <br>
                <p>Our interdisciplinary approach combines the critical thinking of the Faculty of Arts with cutting-edge expertise in information technology and data management.</p>
            </div>
            <div class="about-stats">
                <div class="stat-card">
                    <h3>1st</h3>
                    <p>Ranked Program in Thailand</p>
                </div>
                <div class="stat-card">
                    <h3>66</h3>
                    <p>Core Credits in IT & Info Science</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Curriculum Section -->
    <section id="curriculum" class="reveal">
        <span class="section-tag">Learning Path</span>
        <h2 class="section-title">A Modern <span>Curriculum</span></h2>
        <div class="grid">
            <div class="card">
                <i class="fas fa-database"></i>
                <h3>Information Management</h3>
                <p>Core principles of organizing, representing, and disseminating information in digital and physical formats.</p>
            </div>
            <div class="card">
                <i class="fas fa-user-gear"></i>
                <h3>User Experience (UX)</h3>
                <p>Specialized courses in Human-Computer Interaction (HCI) and User-Centered IT solutions.</p>
            </div>
            <div class="card">
                <i class="fas fa-chart-line"></i>
                <h3>Data Curation</h3>
                <p>Advanced techniques in data analysis, visualization, and strategic policymaking through information.</p>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section id="faculty" class="reveal">
        <span class="section-tag">Mentors</span>
        <h2 class="section-title">World-Class <span>Faculty</span></h2>
        <div class="faculty-grid">
            <div class="faculty-card">
                <div class="faculty-img">
                    <img src="https://ui-avatars.com/api/?name=Thippaya+Chintakovid&background=E11D74&color=fff&size=200" alt="Dr. Thippaya Chintakovid">
                </div>
                <h3>Dr. Thippaya Chintakovid</h3>
                <p class="text-secondary">HCI & UX Design Specialist</p>
            </div>
            <div class="faculty-card">
                <div class="faculty-img">
                    <img src="https://ui-avatars.com/api/?name=Wachiraporn+Klungthanaboon&background=8E8E93&color=fff&size=200" alt="Dr. Wachiraporn Klungthanaboon">
                </div>
                <h3>Dr. Wachiraporn Klungthanaboon</h3>
                <p class="text-secondary">Data & Information Curation</p>
            </div>
            <div class="faculty-card">
                <div class="faculty-img">
                    <img src="https://ui-avatars.com/api/?name=Songphan+Choemprayong&background=E11D74&color=fff&size=200" alt="Dr. Songphan Choemprayong">
                </div>
                <h3>Dr. Songphan Choemprayong</h3>
                <p class="text-secondary">Metadata & Classification Expert</p>
            </div>
        </div>
    </section>

    <!-- Careers Section -->
    <section id="careers" class="reveal">
        <span class="section-tag">Career Paths</span>
        <h2 class="section-title">Future <span>Opportunities</span></h2>
        <div class="grid">
            <div class="card">
                <h3>Information Architect</h3>
                <p>Design complex information systems for global enterprises.</p>
            </div>
            <div class="card">
                <h3>UX/UI Researcher</h3>
                <p>Analyze how people interact with technology to build better products.</p>
            </div>
            <div class="card">
                <h3>IT Project Manager</h3>
                <p>Lead technology teams in implementing data-driven solutions.</p>
            </div>
            <div class="card">
                <h3>Digital Curator</h3>
                <p>Manage and preserve vital digital assets for agencies and museums.</p>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-info">
                <h2>BA <span>Information Studies</span></h2>
                <p><?php echo $faculty_name; ?><br><?php echo $university_name; ?></p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            <div class="footer-links">
                <h4>Program</h4>
                <ul>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#curriculum">Curriculum</a></li>
                    <li><a href="#admission">Admissions</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Student Life</a></li>
                    <li><a href="#">Faculty News</a></li>
                    <li><a href="#">Research</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Contact</h4>
                <ul>
                    <li><a href="mailto:info@arts.chula.ac.th">info@arts.chula.ac.th</a></li>
                    <li><a href="tel:+6622184634">+66 2218 4634</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; <?php echo $current_year; ?> <?php echo $university_name; ?>. All rights reserved.</p>
        </div>
    </footer>

    <!-- JS -->
    <script src="main.js"></script>
</body>
</html>
