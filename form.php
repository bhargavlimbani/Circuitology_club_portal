<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circuitology Club - Member Access</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="container" id="formContainer">
        <!-- Login Section -->
        <div class="form-section login-section">
            <div class="club-header">
                <div class="club-logo">
                    <img src="images/logo1.png" alt="CC Logo" style="width: 50px; height: 50px;">
                </div>
                <h1>Welcome Back</h1>
                <p class="subtitle">Sign in to access Circuitology Club resources</p>
            </div>
    
            <form id="loginForm" method="post" action="login.php">
                <div class="form-group">
                    <label for="loginEmail">Email Address</label>
                    <input type="email" id="loginEmail" name="email" placeholder="your.email@example.com" required>
                </div>
                
                <div class="form-group">
                    <label for="loginPassword">Password</label>
                    <input type="password" id="loginPassword" name="password" placeholder="Enter your password" required>
                </div>
                
                <button type="submit" class="btn">Sign In</button>
                
                <div class="form-footer">
                    <p>Forgot password? <a href="#">Reset here</a></p>
                </div>
            </form>
        </div>
        
        <!-- Register Section -->
        <div class="form-section register-section">
            <div class="club-header">
                <div class="club-logo">CC</div>
                <h1>Join Our Club</h1>
                <p class="subtitle">Create your Circuitology Club account</p>
            </div>
            
            <form id="registerForm" method="post" action="register.php">
                <div class="form-group">
                    <label for="registerFirstName">First Name</label>
                    <input type="text" id="registerFirstName" name="first_name" placeholder="Nikhil" required>
                </div>

                <div class="form-group">
                    <label for="registerLastName">Last Name</label>
                    <input type="text" id="registerLastName" name="last_name" placeholder="Bhanderi" required>
                </div>
            
                <div class="form-group">
                    <label for="registerEmail">Email Address</label>
                    <input type="email" id="registerEmail" name="email" placeholder="your.email@example.com" required>
                </div>
                
                <div class="form-group">
                    <label for="registerGR">GR No</label>
                    <input type="text" id="registerGR" name="gr_no" placeholder="CLUB-2023-001" required>
                </div>

                <div class="form-group">
                    <label for="registerEnrollment">Enrollment No</label>
                    <input type="text" id="registerEnrollment" name="enrollment_no" placeholder="Enrollment number" required>
                </div>
                
                <div class="form-group">
                    <label for="registerPhone">Phone No</label>
                    <input type="text" id="registerPhone" name="phone_no" placeholder="9876543210" required>
                </div>

                <div class="form-group">
                    <label for="registerSemester">Semester</label>
                    <input type="text" id="registerSemester" name="semester" placeholder="4" required>
                </div>
                
                <div class="form-group">
                    <label for="registerStream">Stream</label>
                    <input type="text" id="registerStream" name="stream" placeholder="ICT / EC / CE etc." required>
                </div>

                <div class="form-group">
                    <label for="registerPassword">Password</label>
                    <input type="password" id="registerPassword" name="password" placeholder="Create a password" required>
                </div>

                <div class="form-group">
                    <label for="registerConfirm">Confirm Password</label>
                    <input type="password" id="registerConfirm" placeholder="Confirm your password" required>
                </div>
                
                <button type="submit" class="btn">Register Now</button>
                
                <div class="form-footer">
                    <p>By registering, you agree to our <a href="#">Terms</a> and <a href="#">Privacy Policy</a></p>
                </div>
            </form>
        </div>
        
        <!-- Toggle Section -->
        <div class="toggle-section">
            <div class="toggle-content" id="toggleLogin">
                <h2>Already a Member?</h2>
                <p>Sign in to access exclusive Circuitology Club projects, events, and resources.</p>
                <button class="btn btn-secondary" id="showLogin">Sign In</button>
            </div>
            
            <div class="toggle-content" id="toggleRegister">
                <h2>New to Circuitology?</h2>
                <p>Join our community of electronics enthusiasts and unlock access to workshops, components, and more!</p>
                <button class="btn btn-secondary" id="showRegister">Register</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const formContainer = document.getElementById('formContainer');
            const showLogin = document.getElementById('showLogin');
            const showRegister = document.getElementById('showRegister');
            const toggleLogin = document.getElementById('toggleLogin');
            const toggleRegister = document.getElementById('toggleRegister');
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            
            // Toggle between forms
            showLogin.addEventListener('click', () => {
                formContainer.classList.remove('active');
                toggleLogin.style.display = 'none';
                toggleRegister.style.display = 'block';
            });
            
            showRegister.addEventListener('click', () => {
                formContainer.classList.add('active');
                toggleLogin.style.display = 'block';
                toggleRegister.style.display = 'none';
            });

            // Registration form client-side check
            registerForm.addEventListener('submit', (e) => {
                const password = document.getElementById('registerPassword').value;
                const confirm = document.getElementById('registerConfirm').value;
                if (password !== confirm) {
                    e.preventDefault();
                    alert('Passwords do not match!');
                }
            });

            // Responsive toggle
            function handleResize() {
                if (window.innerWidth <= 768) {
                    formContainer.classList.remove('active');
                    toggleLogin.style.display = 'block';
                    toggleRegister.style.display = 'none';
                } else {
                    toggleLogin.style.display = 'none';
                    toggleRegister.style.display = 'block';
                }
            }

            window.addEventListener('resize', handleResize);
            handleResize();
        });
    </script>
</body>
</html>
