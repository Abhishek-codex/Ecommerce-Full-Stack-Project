<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     {{-- @vite('resources/css/app.css') --}}
     @vite('resources/css/style.css')
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Ecommerce</title>
</head>
<body>
    <header class="section-navbar">
        <section class="top_txt">
            <div class="head container">
                <div class="head_txt">
                    <p>Free shipping, 30-days return or refund guarantee.</p>
                </div>
                <div class="sing_in_up">
                    <a href="#">Sign in</a>
                    <a href="#">Sign up</a>
                </div>
            </div>
        </section>
        <div class="container">
            <div class="navbar-brand">
                <a href="">
                    <img src="" alt="Logo">
                </a>
            </div>
            <nav class="navbar">
                <ul>
                    <li class="nav-item">
                        <a href="" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">about</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">products</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">contact</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link add-to-cart-button" id="cartValue">
                            <i class="fa-solid fa-cart-shopping"> 0 </i>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    {{-- Start Home Hero Section --}}
    <main>
        <section class="section-hero">
            <div class="container grid grid-two--cols">
                <div class="section-hero--content">
                    <p class="hero-subheading">Explore the Latest in Tech Industries</p>
                        <h1 class="hero-heading">
                            Your Destination for Cutting-Edge Gadgets!
                        </h1>
                    <p class="hero-para">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Neque, provident praesentium. Nihil beatae architecto rem ea molestias non id commodi, magnam voluptatibus dolorum cumque nemo laudantium quos natus hic enim corrupti provident nostrum officia!
                    </p>
                    <div class="hero-btn">
                        <a href="" class="btn">Explore Our Products</a>
                    </div>
                </div>
                <div class="section-hero-image" data-aos="fade-up" data-aos-delay="600">
                    <figure>
                        <img src="{{ asset('hero-section.jpg') }}" alt="coding">

                    </figure>
                    
                </div>
            </div>
          <div class="custom-shape-divider-bottom-1720592290">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>
        </section>
    </main>
    {{-- End Home Hero Section --}}

    {{-- Start Extra Products Section --}}
    <section class="section-extra-product">
        <div class="container grid grid-three--cols">
{{-- first card --}}
            <div class="div-extra grid grid-two--cols">
                <div class="extra-text">
                    <p>New year sale</p>
                    <h3>get and extra 50% off</h3>
                    <a href="#">Shop now</a>
                </div>

                <div class="extra-img extra-laptop">
                    <img src="" alt="lap">
                </div>
            </div>

{{-- second card --}}

            <div class="div-extra grid grid-two--cols">
                <div class="extra-text">
                    <p>New year sale</p>
                    <h3>get and extra 50% off</h3>
                    <a href="#">Shop now</a>
                </div>

                <div class="extra-img extra-laptop">
                    <img src="" alt="lap">
                </div>
            </div>

{{-- Third card --}}
<div class="div-extra grid grid-two--cols">
                <div class="extra-text">
                    <p>New year sale</p>
                    <h3>get and extra 50% off</h3>
                    <a href="#">Shop now</a>
                </div>

                <div class="extra-img extra-laptop">
                    <img src="" alt="lap">
                </div>
            </div>
        </div>
    </section>

    {{-- End Extra Products Section --}}

    {{-- Start Policy Section --}}
    <section class="section-policy">
        <div class="container grid grid-four--cols">
            
            {{-- first policy --}}
            <div class="div-policy">
                <div class="icons">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
            </div>
            <div class="div-policy-text">
                <p>worldwide shipping</p>
                <p>order above $100</p>
            </div>
        </div>

            {{-- second policy --}}
            <div class="div-policy">
                <div class="icons">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
            </div>
        <div class="div-policy-text">
            <p>worldwide shipping</p>
                <p>order above $100</p>
            </div>
        </div>

            {{-- third policy --}}
            <div class="div-policy">
                <div class="icons">
                    <i class="fa-solid fa-truck-fast"></i>
                </div>
            </div>
            <div class="div-policy-text">
                <p>worldwide shipping</p>
                <p>order above $100</p>
            </div>
        </div>
    
    {{-- four policy --}}
<div class="div-policy">
    <div class="icons">
        <i class="fa-solid fa-truck-fast"></i>
    </div>
</div>
<div class="div-policy-text">
    <p>worldwide shipping</p>
<p>order above $100</p>
</div>
</div>


</section>

    {{-- End Policy Section --}}
    
     @vite('resources/js/app.js')
     
</body>
</html>