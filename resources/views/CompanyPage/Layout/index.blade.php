<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Company Landing Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Additional styles */
    .active {
      font-weight: bold;
      color: blue;
    }

    /* Adjust based on your navbar height */
    body {
      padding-top: 70px;
    }

    /* Set each section to take full height */
    .section {
      height: 100vh;
      padding: 20px;
      /* Adjust the padding as needed */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    /* Add margins to the container */
    .container-fluid {
      margin-left: 10px;
      margin-right: 10px;
    }

    /* Styling for the navbar */
    #navbar-example2 {
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    #navbar-example2 .navbar-brand img {
      filter: drop-shadow(2px 2px 4px rgba(0, 0, 0, 0.2));
    }

    #navbar-example2 .nav-link {
      color: #333;
      transition: color 0.3s ease-in-out;
    }

    #navbar-example2 .nav-link:hover {
      color: blue;
    }
  </style>
</head>

<body>
  <nav id="navbar-example2" class="navbar navbar-light bg-light px-3 fixed-top">
    <a class="navbar-brand" href="#">
      <img src="{{asset('img/Logo-CBI.png')}}" alt="Logo" width="auto" height="50">
    </a>
    <ul class="nav nav-pills">
      <li class="nav-item">
        <a class="nav-link" href="#home">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#profile">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#jobseeking">Job Seeker</a>
      </li>
    </ul>
  </nav>

  <div class="container-fluid ml-10 mr-10">
    <div class="section" id="home">
      <div class="card">
        <div class="row">
          <div class="col-md-8">
            <div class="card-header">
              <p>Selamat Datang ach</p>
            </div>
            <div class="card-body">
              <h1>Kami adalah ach</h1>
            </div>
          </div>
          <div class="col-md-4">
            <img src="{{asset('img/olip.jpg')}}" alt="Trulli" width="auto" height="700">
          </div>
        </div>
      </div>
    </div>

    <div class="section" id="profile">
      <h1>Profile Section</h1>
      <!-- Add content for the Profile section -->
    </div>

    <div class="section" id="jobseeking">
      <h1>Job Seeking Section</h1>
      <!-- Add content for the Job Seeking section -->
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const sections = document.querySelectorAll('.section');
      const navbarLinks = document.querySelectorAll('#navbar-example2 a');

      function updateActive() {
        let current = '';

        sections.forEach(section => {
          const rect = section.getBoundingClientRect();
          if (rect.top <= window.innerHeight / 2 && rect.bottom >= window.innerHeight / 2) {
            current = section.id;
          }
        });

        navbarLinks.forEach(link => {
          link.classList.remove('active');
          if (link.getAttribute('href') === `#${current}`) {
            link.classList.add('active');
          }
        });
      }

      window.addEventListener('scroll', updateActive);
      window.addEventListener('resize', updateActive);
      updateActive(); // Initial call to set the active state on page load
    });
  </script>
</body>

</html>