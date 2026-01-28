<?php 
    $title = 'Home'; 
    require_once 'includes/header.php'
?>
<div id="preloader">
  <div class="logo">
    <span>J</span>
    <span>E</span>
    <span>V</span>
    <span>D</span>
  </div>
</div>
  <nav class="navbar navbar-expand-lg navbar-gradient sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-white" href="index.php">JEVD</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTabs">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTabs">
        <ul class="navbar-nav ms-auto nav nav-tabs border-0">
          
          <li class="nav-item">
            <a class="nav-link" href="../profile/about.php">About Me</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<div class="box">
    
</div>
<div class="box1 animate-on-scroll fade-up ps-3">
   <h1>Overview</h1>
    <p>
      I’m an aspiring web developer with a strong interest in building clean, responsive, and user-friendly websites.
      I enjoy turning ideas into functional digital experiences using HTML, CSS, and JavaScript, and I’m continuously
      learning modern tools and frameworks to improve my skills. I’m motivated, detail-oriented, and excited to grow 
      through real-world projects, collaboration, and hands-on problem solving as I begin my career in web development.
    </p>
  </div>
<div class="box2 animate-on-scroll ps-5">
  <h1>SKILLS</h1>
  <div class="skills-container">
    <div class="card">
      <B> Programming language</B>
        <ul>
          <li>PHP</li>
          <li>JavaScript</li>
          <li>Java</li>
          <li>Python</li>
        </ul>
    </div>
    <div class="card">
      <B> Database</B>
        <ul>
          <li>MySQL</li>
          <li>MariaDB</li>
          <li>DB2</li>
        </ul>
    </div>
    <div class="card">
    <B> Front-end</B>
      <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>Bootstrap</li>
        <li>jQuery</li>
        <li>ReactJS</li>
      </ul>
    </div>
    <div class="card">
    <B> Back-end</B>
      <ul>
        <li>Node.js</li>
        <li>Laravel</li>
      </ul>
    </div>
    <div class="card">
      <B> Version Control</B>
        <ul>
          <li>Git</li>
          <li>GitHub</li>
        </ul>
    </div>
    <div class="card">
      <B> Other Tools</B>
        <ul>
          <li>VS Code</li>
          <li>XAMPP</li>
          <li>Composer</li>
          <li>npm</li>
        </ul>
    </div>
    <div class="card">
      <B> Operating System</B>
        <ul>
          <li>Windows</li>
          <li>MacOS</li>
        </ul>
    </div>
      <div class="card">
        <B> Soft Skills</B>
          <ul>
            <li>Problem Solving</li>
            <li>Communication</li>
            <li>Teamwork</li>
            <li>Adaptability</li>
            <li>Time Management</li>
          </ul>
    </div>
  </div>
</div>
<div class="box3 animate-on-scroll">
  <h1>PROJECTS</h1>
<div class="projects-container">

  <div class="project-card">
    <a href="../profile/profile_img/profile_website.jpg"><img src="../profile/profile_img/profile_website.jpg" alt="Personal Portfolio Website"></a>
    <div class="project-info">
      <h3>Personal Portfolio Website</h3>
      <p>A responsive portfolio website built with HTML, CSS, and JavaScript to showcase projects.</p>
      <a href="https://jayemmanueldelgado.github.io/" target="_blank" rel="noopener noreferrer">View Project</a>
    </div>
  </div>

  <div class="project-card">
    <a href="../profile/profile_img/banking_website.jpg"><img src="../profile/profile_img/banking_website.jpg" alt="Online Banking System"></a>
    <div class="project-info">
      <h3>Online Banking System with transaction history</h3>
      <p>A simulation of banking system with login, deposit, and withdrawal features using PHP & MySQL.</p>
      <a href="https://jayemmanueldelgado.github.io/" target="_blank" rel="noopener noreferrer">View Project</a>
    </div>
  </div>

  <div class="project-card">
    <a href="../profile/profile_img/ecommerce.jpg"><img src="../profile/profile_img/ecommerce.jpg" alt="E-commerce Website"></a>
    <div class="project-info">
      <h3>E-commerce Website</h3>
      <p>An online store with product catalog, shopping cart, and checkout functionality.</p>
      <a href="#">View Project</a>
    </div>
  </div>

  <div class="project-card">
    <a href="../profile/profile_img/blog_platform.jpg"><img src="../profile/profile_img/blog_platform.jpg" alt="Blog Platform"></a>
    <div class="project-info">
      <h3>Blog Platform</h3>
      <p>A blogging platform where users can create, edit, and publish blog posts.</p>
      <a href="#">View Project</a>
    </div>
  </div>
  <div class="project-card">
    <a href="../profile/profile_img/calculator.jpg"><img src="../profile/profile_img/calculator.jpg" alt="Calculator"></a>
    <div class="project-info">
      <h3>Calculator</h3>
      <p>A simple calculator app to perform basic arithmetic operations.</p>
      <a href="#">View Project</a>
    </div>
  </div>
</div>
</div>
<?php require_once 'includes/footer.php'?>  
<script>

  window.addEventListener("load", () => {
    const preloader = document.getElementById("preloader");

    setTimeout(() => {
      preloader.style.opacity = "0";

      setTimeout(() => {
        preloader.style.display = "none";
      }, 500);
    }, 1200);
  });

  document.addEventListener("DOMContentLoaded", () => {
    const elements = document.querySelectorAll(".animate-on-scroll");
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
        
          entry.target.classList.add("active");
        } else {
  
          entry.target.classList.remove("active");
        }
      });
    }, {
      threshold: 0.3 
    });
    elements.forEach(el => observer.observe(el));
  });
</script>
