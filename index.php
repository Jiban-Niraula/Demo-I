<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title>Jiban Niraula (BitByte) - Computer Teacher & IT Trainer in Nepal | DevOps Engineer</title>
  <meta name="description" content="Jiban Niraula (BitByte) - Professional Computer Teacher, IT Trainer, and aspiring DevOps Engineer in Nepal. Offering web development, IT consulting, and computer training services. 500+ students taught.">
  <meta name="keywords" content="Jiban Niraula, BitByte, Computer Teacher Nepal, IT Trainer Nepal, DevOps Engineer Nepal, Web Developer Nepal, Computer Science Teacher, IT Education Nepal, Programming Teacher, jiban niraula portfolio, jiban niraula bitbyte">
  <meta name="author" content="Jiban Niraula">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="https://jiban-niraula.github.io/aboutJiban/">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://jiban-niraula.github.io/aboutJiban/"> 
  <meta property="og:title" content="Jiban Niraula (BitByte) - Computer Teacher & IT Trainer in Nepal">
  <meta property="og:description" content="Professional Computer Teacher and IT Trainer with 500+ students taught. Specializing in web development, DevOps, and IT education in Nepal.">
  <meta property="og:image" content="https://jiban-niraula.github.io/aboutJiban/jiban.jpeg">
  <meta property="og:site_name" content="Jiban Niraula Portfolio">

  <!-- Twitter Card -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://jiban-niraula.github.io/aboutJiban/">
  <meta property="twitter:title" content="Jiban Niraula (BitByte) - Computer Teacher & IT Trainer">
  <meta property="twitter:description" content="Professional Computer Teacher and IT Trainer in Nepal. 500+ students taught. Expert in web development and IT education.">
  <meta property="twitter:image" content="https://jiban-niraula.github.io/aboutJiban/jiban.jpeg">

  <!-- Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Person",
    "name": "Jiban Niraula",
    "alternateName": "BitByte",
    "jobTitle": "Computer Teacher & IT Trainer",
    "description": "Professional Computer Teacher, IT Trainer, and aspiring DevOps Engineer",
    "url": "https://jiban-niraula.github.io/aboutJiban/",
    "image": "https://jiban-niraula.github.io/aboutJiban/jiban.jpeg",
    "address": {
      "@type": "PostalAddress",
      "addressCountry": "Nepal"
    },
    "knowsAbout": ["Computer Science", "Web Development", "DevOps", "IT Training", "Programming"],
    "alumniOf": "Computer Science Education",
    "sameAs": [
      "https://www.facebook.com/zeewan01"
    ]
  }
  </script>

  <link rel="icon" type="image/png" href="favicon.png" />

  <!-- Performance hints -->
  <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
  <link rel="preconnect" href="https://cdnjs.cloudflare.com" crossorigin>

  <!-- Prevent theme flash -->
  <script>
    (function() {
      try {
        const stored = localStorage.getItem('theme');
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        const theme = stored || (prefersDark ? 'dark' : 'light');
        document.documentElement.classList.toggle('dark', theme === 'dark');
      } catch (e) {}
    })();
  </script>

  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

  <style>
    html { scroll-behavior: smooth; }

    .skip-link {
      position: absolute;
      left: -9999px;
      top: auto;
      width: 1px;
      height: 1px;
      overflow: hidden;
    }
    .skip-link:focus {
      left: 1rem;
      top: 1rem;
      width: auto;
      height: auto;
      padding: 0.5rem 1rem;
      background: #111827;
      color: #fff;
      border-radius: 0.5rem;
      z-index: 50;
    }

    ::-webkit-scrollbar { width: 8px; }
    ::-webkit-scrollbar-track { background: #f1f1f1; }
    ::-webkit-scrollbar-thumb { background: #6366f1; border-radius: 4px; }
    ::-webkit-scrollbar-thumb:hover { background: #4f46e5; }
    .dark ::-webkit-scrollbar-track { background: #374151; }
    .dark ::-webkit-scrollbar-thumb { background: #8b5cf6; }
    .dark ::-webkit-scrollbar-thumb:hover { background: #7c3aed; }

    .gradient-bg {
      background: linear-gradient(-45deg, #6366f1, #8b5cf6, #ec4899, #f59e0b);
      background-size: 400% 400%;
      animation: gradient 15s ease infinite;
    }
    @keyframes gradient {
      0% { background-position: 0% 50%; }
      50% { background-position: 100% 50%; }
      100% { background-position: 0% 50%; }
    }

    .glass {
      backdrop-filter: blur(16px) saturate(180%);
      background-color: rgba(255, 255, 255, 0.95);
      border-bottom: 1px solid rgba(0, 0, 0, 0.1);
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }
    .dark .glass {
      background-color: rgba(17, 25, 40, 0.95);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    @keyframes float { 0%, 100% { transform: translateY(0px); } 50% { transform: translateY(-20px); } }
    .floating { animation: float 6s ease-in-out infinite; }

    @keyframes fadeIn { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }
    .fade-in { animation: fadeIn 0.6s ease-out; }

    .service-card { transition: all 0.3s ease; position: relative; overflow: hidden; }
    .service-card::before { content: ''; position: absolute; top: 0; left: -100%; width: 100%; height: 100%; background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent); transition: left 0.5s; }
    .service-card:hover::before { left: 100%; }
    .service-card:hover { transform: translateY(-8px); box-shadow: 0 20px 40px rgba(0,0,0,0.15); }

    .portfolio-card { transition: all 0.3s ease; border: 2px solid transparent; }
    .portfolio-card:hover { transform: scale(1.05); border-color: currentColor; }

    .contact-btn { position: relative; overflow: hidden; z-index: 1; }
    .contact-btn::before { content: ''; position: absolute; top: 0; left: 0; width: 0; height: 100%; background: linear-gradient(90deg, #8b5cf6, #ec4899); transition: width 0.3s; z-index: -1; }
    .contact-btn:hover::before { width: 100%; }

    .stat-number { font-size: 3rem; font-weight: 800; background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; }
    @media (max-width: 768px) { .stat-number { font-size: 2rem; } }

    @media (prefers-reduced-motion: reduce) {
      * { animation-duration: 0.001ms !important; animation-iteration-count: 1 !important; transition-duration: 0.001ms !important; }
      html { scroll-behavior: auto; }
    }
  </style>
</head>

<body class="bg-gray-50 dark:bg-gray-900 text-gray-900 dark:text-gray-100 transition-colors duration-300">
  <a href="#home" class="skip-link">Skip to content</a>

  <!-- Theme Toggle -->
  <div class="fixed top-4 right-4 z-50">
    <button id="theme-toggle" aria-label="Toggle dark mode" aria-pressed="false"
      class="p-3 rounded-full bg-white dark:bg-gray-800 shadow-lg hover:shadow-xl transform hover:scale-110 transition-all duration-300">
      <i id="theme-icon" class="fas fa-moon text-gray-800 dark:text-yellow-400" aria-hidden="true"></i>
    </button>
  </div>

  <!-- Navigation -->
  <nav class="fixed top-0 w-full z-40 glass" role="navigation" aria-label="Primary">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
          <a href="https://www.facebook.com/zeewan01" target="_blank" rel="noopener noreferrer">Jiban Niraula</a>
        </h1>
        <div class="hidden md:flex space-x-8">
          <a href="#home" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Home</a>
          <a href="#about" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">About</a>
          <a href="#services" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Services</a>
          <a href="#portfolio" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Portfolio</a>
          <a href="#gallery" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Gallery</a>
          <a href="#students" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">For Students</a>
          <a href="#contact" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors">Contact</a>
        </div>
        <div class="flex items-center space-x-4">
          <button id="mobile-menu-btn" aria-label="Open mobile menu" aria-controls="mobile-menu" aria-expanded="false"
            class="md:hidden p-2 rounded-lg hover:bg-gray-200 dark:hover:bg-gray-700 transition-colors">
            <i class="fas fa-bars text-xl" aria-hidden="true"></i>
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden glass border-t border-gray-200 dark:border-gray-700" role="menu">
      <div class="px-2 pt-2 pb-3 space-y-1">
        <a href="#home" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">Home</a>
        <a href="#about" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">About</a>
        <a href="#services" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">Services</a>
        <a href="#portfolio" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">Portfolio</a>
        <a href="#gallery" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">Gallery</a>
        <a href="#students" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">For Students</a>
        <a href="#contact" class="mobile-link block px-3 py-2 hover:bg-gray-200 dark:hover:bg-gray-700 rounded-md transition-colors" role="menuitem">Contact</a>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section id="home" class="min-h-screen flex items-center justify-center pt-24 px-4 relative overflow-hidden">
    <div class="absolute inset-0 gradient-bg opacity-10" aria-hidden="true"></div>
    <div class="max-w-3xl mx-auto text-center relative z-10 fade-in">
      <div class="w-32 h-32 sm:w-40 sm:h-40 aspect-square mx-auto mb-8 rounded-full bg-gradient-to-r from-blue-600 to-purple-600 p-1 floating shadow-2xl">
        <div class="w-full h-full bg-gray-200 dark:bg-gray-700 rounded-full overflow-hidden">
          <img src="jiban.jpeg" alt="Portrait of Jiban Niraula (BitByte)" class="w-full h-full object-cover rounded-full">
        </div>
      </div>

      <h1 class="text-4xl md:text-6xl font-bold mb-6 bg-gradient-to-r from-blue-600 via-purple-600 to-pink-600 bg-clip-text text-transparent">
        Jiban Niraula
      </h1>

      <p class="text-lg md:text-xl mb-8 text-gray-600 dark:text-gray-300">
        Computer Teacher | IT Trainer | Aspiring DevOps Engineer | BitByte
      </p>

      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="https://docs.google.com/viewer?url=https://jiban-niraula.github.io/aboutJiban/Jiban-CV.pdf"
          target="_blank" rel="noopener noreferrer"
          class="bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full hover:shadow-2xl transform hover:scale-105 transition-all duration-300 text-center font-semibold">
          <i class="fas fa-eye mr-2" aria-hidden="true"></i>
          View CV
        </a>

        <a href="#contact"
          class="contact-btn border-2 border-blue-600 bg-blue-600 text-white px-8 py-3 rounded-full transition-all duration-300 text-center font-semibold">
          <i class="fas fa-envelope mr-2" aria-hidden="true"></i>
          Contact Me
        </a>
      </div>
    </div>
  </section>

  <!-- About Section -->
  <section id="about" class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
          About Me
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          Passionate educator and technology enthusiast with expertise in computer science education and modern development practices.
        </p>
      </div>
      
      <div class="grid md:grid-cols-2 gap-12 items-center">
        <div class="space-y-6">
          <h3 class="text-3xl font-bold text-blue-600 dark:text-blue-400">My Background</h3>
          <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
            I am a Computer Teacher and IT Trainer who believes in hands-on learning. I've mentored hundreds of students, fostering strong fundamentals in computer science and helping them achieve their goals.
          </p>
          <p class="text-lg text-gray-700 dark:text-gray-300 leading-relaxed">
            With a growing passion for cloud computing and automation, I'm actively working toward building a career in DevOps. I combine traditional teaching methods with modern technology to create engaging learning experiences.
          </p>
          <div class="flex flex-wrap gap-3 pt-4">
            <span class="px-4 py-2 bg-blue-100 dark:bg-blue-900 text-blue-700 dark:text-blue-300 rounded-full text-sm font-semibold">Web Development</span>
            <span class="px-4 py-2 bg-purple-100 dark:bg-purple-900 text-purple-700 dark:text-purple-300 rounded-full text-sm font-semibold">DevOps</span>
            <span class="px-4 py-2 bg-green-100 dark:bg-green-900 text-green-700 dark:text-green-300 rounded-full text-sm font-semibold">IT Training</span>
            <span class="px-4 py-2 bg-pink-100 dark:bg-pink-900 text-pink-700 dark:text-pink-300 rounded-full text-sm font-semibold">Cloud Computing</span>
          </div>
        </div>
        
        <div class="grid grid-cols-2 gap-6">
          <div class="text-center p-6 bg-gradient-to-br from-blue-50 to-blue-100 dark:from-blue-900 dark:to-blue-800 rounded-xl shadow-lg">
            <div class="stat-number">500+</div>
            <p class="text-gray-700 dark:text-gray-300 font-semibold mt-2">Students Taught</p>
          </div>
          <div class="text-center p-6 bg-gradient-to-br from-purple-50 to-purple-100 dark:from-purple-900 dark:to-purple-800 rounded-xl shadow-lg">
            <div class="stat-number">50+</div>
            <p class="text-gray-700 dark:text-gray-300 font-semibold mt-2">Projects Completed</p>
          </div>
          <div class="text-center p-6 bg-gradient-to-br from-green-50 to-green-100 dark:from-green-900 dark:to-green-800 rounded-xl shadow-lg">
            <div class="stat-number">5+</div>
            <p class="text-gray-700 dark:text-gray-300 font-semibold mt-2">Years Experience</p>
          </div>
          <div class="text-center p-6 bg-gradient-to-br from-pink-50 to-pink-100 dark:from-pink-900 dark:to-pink-800 rounded-xl shadow-lg">
            <div class="stat-number">100%</div>
            <p class="text-gray-700 dark:text-gray-300 font-semibold mt-2">Satisfaction</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="services" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-green-600 to-blue-600 bg-clip-text text-transparent mb-4">
          Services
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          Comprehensive technology education and development services tailored to your needs.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="service-card bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
          <div class="text-blue-600 dark:text-blue-400 mb-6 text-4xl">
            <i class="fas fa-chalkboard-teacher" aria-hidden="true"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Computer Training</h3>
          <p class="text-gray-600 dark:text-gray-300 leading-relaxed">From digital literacy to advanced programming basics for all age groups. Personalized learning paths designed for maximum retention.</p>
        </div>
        
        <div class="service-card bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
          <div class="text-green-600 dark:text-green-400 mb-6 text-4xl">
            <i class="fas fa-code" aria-hidden="true"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Web Development</h3>
          <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Custom websites with responsive design using modern tech stack. From concept to deployment, bringing your ideas to life.</p>
        </div>
        
        <div class="service-card bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg">
          <div class="text-purple-600 dark:text-purple-400 mb-6 text-4xl">
            <i class="fas fa-cloud" aria-hidden="true"></i>
          </div>
          <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">IT Consulting</h3>
          <p class="text-gray-600 dark:text-gray-300 leading-relaxed">Help individuals and organizations plan and implement effective IT solutions. Strategic guidance for digital transformation.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section id="portfolio" class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent mb-4">
          Portfolio
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          Showcasing some of my recent work and student projects.
        </p>
      </div>
      
      <div class="grid md:grid-cols-3 gap-8">
        <div class="portfolio-card bg-gradient-to-br from-blue-50 to-purple-50 dark:from-blue-900 dark:to-purple-900 p-8 rounded-2xl shadow-lg">
          <div class="text-4xl mb-4 text-blue-600 dark:text-blue-400">
            <i class="fas fa-graduation-cap" aria-hidden="true"></i>
          </div>
          <h3 class="text-2xl font-bold text-blue-600 dark:text-blue-400 mb-3">Educational Portal</h3>
          <p class="text-gray-700 dark:text-gray-300 leading-relaxed">LMS with interactive features for student learning and progress tracking. Complete solution for modern education.</p>
        </div>
        
        <div class="portfolio-card bg-gradient-to-br from-green-50 to-blue-50 dark:from-green-900 dark:to-blue-900 p-8 rounded-2xl shadow-lg">
          <div class="text-4xl mb-4 text-green-600 dark:text-green-400">
            <i class="fas fa-calculator" aria-hidden="true"></i>
          </div>
          <h3 class="text-2xl font-bold text-green-600 dark:text-green-400 mb-3">Scientific Calculator</h3>
          <p class="text-gray-700 dark:text-gray-300 leading-relaxed">A web-based calculator with extended functionality for educational purposes. Built with modern JavaScript.</p>
        </div>
        
        <div class="portfolio-card bg-gradient-to-br from-purple-50 to-pink-50 dark:from-purple-900 dark:to-pink-900 p-8 rounded-2xl shadow-lg">
          <div class="text-4xl mb-4 text-purple-600 dark:text-purple-400">
            <i class="fas fa-chart-line" aria-hidden="true"></i>
          </div>
          <h3 class="text-2xl font-bold text-purple-600 dark:text-purple-400 mb-3">Student Dashboard</h3>
          <p class="text-gray-700 dark:text-gray-300 leading-relaxed">Visual dashboards for monitoring student progress in real-time. Data-driven insights for better learning outcomes.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery Section -->
  <section id="gallery" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-pink-600 to-yellow-600 bg-clip-text text-transparent mb-4">
          Gallery
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          A collection of moments from workshops, classes, and personal projects.
        </p>
      </div>
  
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- 1: Achievement -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="w-full h-56 bg-gradient-to-br from-indigo-200 to-blue-200 dark:from-indigo-800 dark:to-blue-800 flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 text-lg"><i class="fas fa-camera mr-2" aria-hidden="true"></i>Achievement</span>
          </div>
          <div class="p-4">
            <p class="text-gray-600 dark:text-gray-300">Celebrating student success and milestones.</p>
          </div>
        </div>

        <!-- 2: Workshop Moments -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="w-full h-56 bg-gradient-to-br from-blue-200 to-purple-200 dark:from-blue-800 dark:to-purple-800 flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 text-lg"><i class="fas fa-camera mr-2" aria-hidden="true"></i>Workshop Moments</span>
          </div>
          <div class="p-4">
            <p class="text-gray-600 dark:text-gray-300">Training session with students learning web development.</p>
          </div>
        </div>

        <!-- 3: Project Demo -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="w-full h-56 bg-gradient-to-br from-green-200 to-blue-200 dark:from-green-800 dark:to-blue-800 flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 text-lg"><i class="fas fa-camera mr-2" aria-hidden="true"></i>Project Demo</span>
          </div>
          <div class="p-4">
            <p class="text-gray-600 dark:text-gray-300">Students presenting their final year projects.</p>
          </div>
        </div>

        <!-- 4: Coding Class -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="w-full h-56 bg-gradient-to-br from-purple-200 to-pink-200 dark:from-purple-800 dark:to-pink-800 flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 text-lg"><i class="fas fa-camera mr-2" aria-hidden="true"></i>Coding Class</span>
          </div>
          <div class="p-4">
            <p class="text-gray-600 dark:text-gray-300">Interactive programming session with grade 9 students.</p>
          </div>
        </div>

        <!-- 5: Team Collaboration -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="w-full h-56 bg-gradient-to-br from-yellow-200 to-orange-200 dark:from-yellow-800 dark:to-orange-800 flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 text-lg"><i class="fas fa-camera mr-2" aria-hidden="true"></i>Team Collaboration</span>
          </div>
          <div class="p-4">
            <p class="text-gray-600 dark:text-gray-300">Students working together on group projects.</p>
          </div>
        </div>

        <!-- 6: IT Training -->
        <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-lg overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="w-full h-56 bg-gradient-to-br from-pink-200 to-red-200 dark:from-pink-800 dark:to-red-800 flex items-center justify-center">
            <span class="text-gray-600 dark:text-gray-300 text-lg"><i class="fas fa-camera mr-2" aria-hidden="true"></i>IT Training</span>
          </div>
          <div class="p-4">
            <p class="text-gray-600 dark:text-gray-300">Professional IT training workshop for beginners.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Students Section -->
  <section id="students" class="py-20 bg-gradient-to-r from-blue-50 to-purple-50 dark:from-blue-900 dark:to-purple-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
          For Students
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300 max-w-3xl mx-auto">
          Access grade-wise learning resources and helpful tools for your academic journey.
        </p>
      </div>
      
      <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl text-center shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="text-5xl text-blue-600 dark:text-blue-400 font-bold mb-3">Grade 8</div>
          <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">Basics of computer science and digital literacy concepts.</p>
          <a href="#" class="inline-block bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition-colors font-semibold">
            <i class="fas fa-book-open mr-2" aria-hidden="true"></i>View Resources
          </a>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl text-center shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="text-5xl text-green-600 dark:text-green-400 font-bold mb-3">Grade 9</div>
          <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">Advanced topics including HTML, CSS and programming logic.</p>
          <a href="https://drive.google.com/drive/folders/1k1VdNgwwDeIFdiTphW5ONWR-g2JPkRYE?usp=sharing" target="_blank" rel="noopener noreferrer" class="inline-block bg-green-600 text-white px-6 py-2 rounded-full hover:bg-green-700 transition-colors font-semibold">
            <i class="fas fa-book-open mr-2" aria-hidden="true"></i>View Resources
          </a>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl text-center shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="text-5xl text-purple-600 dark:text-purple-400 font-bold mb-3">Grade 10</div>
          <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">Projects, database concepts and full-stack fundamentals.</p>
          <a href="#" class="inline-block bg-purple-600 text-white px-6 py-2 rounded-full hover:bg-purple-700 transition-colors font-semibold">
            <i class="fas fa-book-open mr-2" aria-hidden="true"></i>View Resources
          </a>
        </div>
        
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl text-center shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:scale-105">
          <div class="text-5xl text-pink-600 dark:text-pink-400 font-bold mb-3">Others</div>
          <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed">
            Resources for <a href="https://drive.google.com/drive/folders/139lNiEUFnTeyVeltGeQJzfHrDpzwfEHj?usp=sharing" class="underline text-pink-600 dark:text-pink-400 font-semibold hover:text-pink-700" target="_blank" rel="noopener noreferrer">Tuition Classes</a> and more.
          </p>
          <a href="https://drive.google.com/drive/folders/1whXkB72yjFMtx0OxMBEh8B3cKvUD5gCf?usp=sharing" target="_blank" rel="noopener noreferrer" class="inline-block bg-pink-600 text-white px-6 py-2 rounded-full hover:bg-pink-700 transition-colors font-semibold">
            <i class="fas fa-book-open mr-2" aria-hidden="true"></i>View Resources
          </a>
        </div>
      </div>

      <!-- Assignment Submission -->
      <div class="mt-12 text-center">
        <div class="bg-white dark:bg-gray-800 p-8 rounded-2xl shadow-lg max-w-2xl mx-auto">
          <h3 class="text-2xl font-bold mb-4 text-gray-800 dark:text-white">Submit Your Assignment</h3>
          <p class="text-gray-600 dark:text-gray-300 mb-6">Students can submit their assignments and projects through the form below.</p>
          <a href="https://forms.gle/DznfLgUyiEoknzu27" target="_blank" rel="noopener noreferrer"
            class="inline-block bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-3 rounded-full hover:shadow-xl transform hover:scale-105 transition-all duration-300 font-semibold">
            <i class="fas fa-upload mr-2" aria-hidden="true"></i>Submit Assignment
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="py-20 bg-white dark:bg-gray-800">
    <div class="max-w-3xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="text-center mb-12">
        <h2 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-4">
          Get In Touch
        </h2>
        <p class="text-xl text-gray-600 dark:text-gray-300">
          Have questions or want to collaborate? I'd love to hear from you!
        </p>
      </div>

      <div class="bg-gradient-to-br from-blue-50 to-purple-50 dark:from-blue-900 dark:to-purple-900 p-8 rounded-2xl shadow-xl">
        <form action="https://formspree.io/f/xdkdnawp" method="POST" class="space-y-6" id="contactForm" novalidate>
          <div>
            <label for="name" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Your Name</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name"
              class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 focus:outline-none dark:bg-gray-700 dark:text-white transition-colors" required>
          </div>
          
          <div>
            <label for="email" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Your Email</label>
            <input type="email" id="email" name="email" placeholder="your.email@example.com"
              class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 focus:outline-none dark:bg-gray-700 dark:text-white transition-colors" required>
          </div>
          
          <div>
            <label for="message" class="block text-sm font-semibold text-gray-700 dark:text-gray-300 mb-2">Your Message</label>
            <textarea id="message" name="message" placeholder="Tell me about your project or inquiry..." rows="5"
              class="w-full px-4 py-3 border-2 border-gray-300 dark:border-gray-600 rounded-lg focus:border-blue-500 focus:outline-none dark:bg-gray-700 dark:text-white transition-colors resize-none" required></textarea>
          </div>
          
          <button type="submit"
            class="w-full bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 font-bold text-lg">
            <i class="fas fa-paper-plane mr-2" aria-hidden="true"></i>Send Message
          </button>
        </form>

        <div id="responseMessage" class="mt-6 text-center text-lg font-semibold" aria-live="polite"></div>
      </div>

      <!-- Contact Info -->
      <div class="mt-12 grid sm:grid-cols-3 gap-6 text-center">
        <div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-xl">
          <div class="text-3xl text-blue-600 dark:text-blue-400 mb-3">
            <i class="fas fa-envelope" aria-hidden="true"></i>
          </div>
          <h4 class="font-semibold text-gray-800 dark:text-white mb-2">Email</h4>
          <p class="text-gray-600 dark:text-gray-300 text-sm">Available via contact form</p>
        </div>
        
        <div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-xl">
          <div class="text-3xl text-green-600 dark:text-green-400 mb-3">
            <i class="fas fa-map-marker-alt" aria-hidden="true"></i>
          </div>
          <h4 class="font-semibold text-gray-800 dark:text-white mb-2">Location</h4>
          <p class="text-gray-600 dark:text-gray-300 text-sm">Nepal</p>
        </div>
        
        <div class="p-6 bg-gray-50 dark:bg-gray-900 rounded-xl">
          <div class="text-3xl text-purple-600 dark:text-purple-400 mb-3">
            <i class="fab fa-facebook" aria-hidden="true"></i>
          </div>
          <h4 class="font-semibold text-gray-800 dark:text-white mb-2">Social</h4>
          <a href="https://www.facebook.com/zeewan01" target="_blank" rel="noopener noreferrer" class="text-purple-600 dark:text-purple-400 hover:underline text-sm">
            Connect on Facebook
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-gray-900 text-white py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
      <p class="text-gray-400">&copy; 2025 Jiban Niraula (BitByte). All rights reserved.</p>
      <div class="mt-4 flex justify-center space-x-6">
        <a href="https://www.facebook.com/zeewan01" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-white transition-colors" aria-label="Facebook">
          <i class="fab fa-facebook text-2xl" aria-hidden="true"></i>
        </a>
        <a href="#contact" class="text-gray-400 hover:text-white transition-colors" aria-label="Email">
          <i class="fas fa-envelope text-2xl" aria-hidden="true"></i>
        </a>
      </div>
    </div>
  </footer>

  <script>
    // Theme Toggle
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');

    function applyTheme(theme) {
      const isDark = theme === 'dark';
      document.documentElement.classList.toggle('dark', isDark);
      themeIcon.classList.toggle('fa-moon', !isDark);
      themeIcon.classList.toggle('fa-sun', isDark);
      themeToggle?.setAttribute('aria-pressed', String(isDark));
    }

    (function initTheme() {
      const savedTheme = localStorage.getItem('theme');
      if (savedTheme) {
        applyTheme(savedTheme);
      } else {
        const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
        applyTheme(prefersDark ? 'dark' : 'light');
      }
    })();

    themeToggle?.addEventListener('click', () => {
      const isDark = document.documentElement.classList.contains('dark');
      const newTheme = isDark ? 'light' : 'dark';
      localStorage.setItem('theme', newTheme);
      applyTheme(newTheme);
    });

    // Mobile Menu Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-btn');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileLinks = document.querySelectorAll('.mobile-link');

    function closeMobileMenu() {
      if (!mobileMenu) return;
      mobileMenu.classList.add('hidden');
      mobileMenuBtn?.setAttribute('aria-expanded', 'false');
    }

    function openMobileMenu() {
      if (!mobileMenu) return;
      mobileMenu.classList.remove('hidden');
      mobileMenuBtn?.setAttribute('aria-expanded', 'true');
    }

    mobileMenuBtn?.addEventListener('click', (e) => {
      e.stopPropagation();
      if (mobileMenu?.classList.contains('hidden')) {
        openMobileMenu();
      } else {
        closeMobileMenu();
      }
    });

    mobileLinks.forEach(link => {
      link.addEventListener('click', () => closeMobileMenu());
    });

    document.addEventListener('click', (e) => {
      if (!mobileMenu || !mobileMenuBtn) return;
      if (!mobileMenu.contains(e.target) && !mobileMenuBtn.contains(e.target)) {
        closeMobileMenu();
      }
    });

    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape') closeMobileMenu();
    });

    mobileMenu?.addEventListener('click', (e) => { e.stopPropagation(); });

    // Form Submission
    const form = document.getElementById('contactForm');
    const responseDiv = document.getElementById('responseMessage');

    form?.addEventListener('submit', async (e) => {
      e.preventDefault();

      const formData = new FormData(form);
      const submitButton = form.querySelector('button[type="submit"]');
      const originalButtonText = submitButton.innerHTML;
      
      // Show loading state
      submitButton.innerHTML = '<i class="fas fa-spinner fa-spin mr-2"></i>Sending...';
      submitButton.disabled = true;

      try {
        const response = await fetch(form.action, {
          method: form.method,
          body: formData,
          headers: { 'Accept': 'application/json' }
        });

        if (response.ok) {
          responseDiv.style.color = '#10b981';
          responseDiv.innerHTML = '<i class="fas fa-check-circle mr-2"></i>Your message was sent successfully! I\'ll get back to you soon.';
          form.reset();
        } else {
          const data = await response.json().catch(() => ({}));
          responseDiv.style.color = '#ef4444';
          responseDiv.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i>' + (data.error || 'Sorry, there was an error sending your message. Please try again later.');
        }
      } catch (error) {
        responseDiv.style.color = '#ef4444';
        responseDiv.innerHTML = '<i class="fas fa-exclamation-circle mr-2"></i>Sorry, there was an error sending your message. Please try again later.';
      } finally {
        submitButton.innerHTML = originalButtonText;
        submitButton.disabled = false;
        setTimeout(() => { responseDiv.innerHTML = ''; }, 5000);
      }
    });

    // Smooth scroll behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (!href || href === '#') return;
        e.preventDefault();
        const target = document.querySelector(href);
        if (target) {
          target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
      });
    });
  </script>
</body>
</html>
