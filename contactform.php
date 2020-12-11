<?php require_once 'sendEmail.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <title>FerdzDEV</title>
</head>
<body class="font-mono">

                        <!-- Start Nav -->
    <nav id="home" class=" w-full flex items-center justify-between flex-wrap p-8 opacity-50">

                        <!-- Logo -->
        <div data-aos="flip-left" data-aos-duration="1500" class="flex items-center flex-no-shrink text-white mr-6">
            <span class="lg:ml-12 font-semibold text-4xl tracking-tight"><a href="index.html">Ferdz<strong class="text-gray-600">DEV</strong></a></span>
        </div>

                        <!-- Menu -->
        <div class="block lg:hidden">
          <button class="flex items-center px-3 py-2 border rounded border-white text-white">
            <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
          </button>
        </div>
            
                        <!-- Links -->
            <div class="w-full flex lg:flex lg:items-center lg:w-auto">
                <div class="text-lg lg:flex-grow">
                    <a href="index.html" class="block mt-4 lg:inline-block lg:mt-0 text-white lg:mr-24 hover:text-gray-600  hover:bold">
                     << Home
                    </a>
                
                </div>  
            </div>
    </nav>
        <!-- End Nav -->


            <!-- Contact Form -->
        <section id="contact">
            
            <div class="mt-10 md:mt-16 ">
            <h1 class="mb-14 text-2xl lg:text-4xl md:text-3xl font-bold flex justify-center text-gray-600">Contact</h1>
          
            </div>

           <center> <div class=" container flex justify-center " data-aos="flip-left" data-aos-duration="1500">
                <form action="#getintouch" method="post" class="mb-12 flex justify-center  opacity-30 rounded-xl w-3/4 lg:w-1/2 flex-col">
                    
                <h1 id="getintouch" class="text-gray-200 text-xl flex justify-center mt-6 underline">Get in touch</h1>

                <div class="flex justify-center mt-3 ">
                <?= $output; ?>
                </div>
                  
                  <div class="flex justify-center">
                  <input name="name" id="name"  class=" text-white w-3/4 mt-10 p-2 bg-transparent border-b" type="text"placeholder="Enter Name" required>
                  </div>

                  <div class="flex justify-center">
                  <input name="email" id="email class=" class= " text-white w-3/4 m-4 p-2 bg-transparent border-b" type="email" placeholder="Enter E-mail" required>
                  </div>

                  <div class="flex justify-center">
                  <input name="subject" id="subject" class=" text-white w-3/4 m-4 p-2 bg-transparent border-b" type="text" placeholder="Enter Subject" required>
                  </div>

                  <div class="flex justify-center">
                  <textarea name="message" id="message"  class="rounded-lg w-3/4 p-1 mt-5 placeholder-gray-800" placeholder=" Write your message" style="height:200px" required></textarea>
                  </div>
                  

                  <div class="flex justify-center">
                <input type="submit" name="submit" value="Send" id="sendBtn" class="p-2 mb-6 mt-3 bg-gray-800 w-3/4 text-gray-300" >
                  </div>

                </form>
            </center>
           
        </section>


            <!-- Footer -->
        <footer class="h-36 mb-2">

            <div class="flex justify-center items-center">

                <div class="mt-6">
                   <a href="https://www.facebook.com/ferdz.barrios/" target="_blank"><svg class="fill-current h-14 w-14  border rounded-xl " clip-rule="evenodd" fill-rule="evenodd" height="2500" image-rendering="optimizeQuality" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" viewBox="0 0 7600 7600" width="2500" xmlns="http://www.w3.org/2000/svg"><path d="M6175 0H1425C638 0 0 638 0 1425v4750c0 787 638 1425 1425 1425h4750c787 0 1425-638 1425-1425V1425C7600 638 6962 0 6175 0zm-193 4093h-711v2632H4083V4093h-461v-887h461v-565c0-740 308-1180 1180-1180h884v883h-514c-340 0-362 127-362 363l-1 498h808l-97 887z"/></svg></a>
                </div>

                <div class="mt-6 mx-12">
                    <a href="https://www.instagram.com/ferdzbarrios/" target="_blank"><svg class="fill-current h-14 w-14  border rounded-xl " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 3364.7 3364.7" width="3365" height="3365"><defs><radialGradient id="0" cx="217.76" cy="3290.99" r="4271.92" gradientUnits="userSpaceOnUse"><stop offset=".09" stop-color="#fa8f21"/><stop offset=".78" stop-color="#d82d7e"/></radialGradient><radialGradient id="1" cx="2330.61" cy="3182.95" r="3759.33" gradientUnits="userSpaceOnUse"><stop offset=".64" stop-color="#8c3aaa" stop-opacity="0"/><stop offset="1" stop-color="#8c3aaa"/></radialGradient></defs><path d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9" fill="url(#0)"/><path d="M853.2,3352.8c-200.1-9.1-308.8-42.4-381.1-70.6-95.8-37.3-164.1-81.7-236-153.5S119.7,2988.6,82.6,2892.8c-28.2-72.3-61.5-181-70.6-381.1C2,2295.4,0,2230.5,0,1682.5s2.2-612.8,11.9-829.3C21,653.1,54.5,544.6,82.5,472.1,119.8,376.3,164.3,308,236,236c71.8-71.8,140.1-116.4,236-153.5C544.3,54.3,653,21,853.1,11.9,1069.5,2,1134.5,0,1682.3,0c548,0,612.8,2.2,829.3,11.9,200.1,9.1,308.6,42.6,381.1,70.6,95.8,37.1,164.1,81.7,236,153.5s116.2,140.2,153.5,236c28.2,72.3,61.5,181,70.6,381.1,9.9,216.5,11.9,281.3,11.9,829.3,0,547.8-2,612.8-11.9,829.3-9.1,200.1-42.6,308.8-70.6,381.1-37.3,95.8-81.7,164.1-153.5,235.9s-140.2,116.2-236,153.5c-72.3,28.2-181,61.5-381.1,70.6-216.3,9.9-281.3,11.9-829.3,11.9-547.8,0-612.8-1.9-829.1-11.9" fill="url(#1)"/><path d="M1269.25,1689.52c0-230.11,186.49-416.7,416.6-416.7s416.7,186.59,416.7,416.7-186.59,416.7-416.7,416.7-416.6-186.59-416.6-416.7m-225.26,0c0,354.5,287.36,641.86,641.86,641.86s641.86-287.36,641.86-641.86-287.36-641.86-641.86-641.86S1044,1335,1044,1689.52m1159.13-667.31a150,150,0,1,0,150.06-149.94h-0.06a150.07,150.07,0,0,0-150,149.94M1180.85,2707c-121.87-5.55-188.11-25.85-232.13-43-58.36-22.72-100-49.78-143.78-93.5s-70.88-85.32-93.5-143.68c-17.16-44-37.46-110.26-43-232.13-6.06-131.76-7.27-171.34-7.27-505.15s1.31-373.28,7.27-505.15c5.55-121.87,26-188,43-232.13,22.72-58.36,49.78-100,93.5-143.78s85.32-70.88,143.78-93.5c44-17.16,110.26-37.46,232.13-43,131.76-6.06,171.34-7.27,505-7.27S2059.13,666,2191,672c121.87,5.55,188,26,232.13,43,58.36,22.62,100,49.78,143.78,93.5s70.78,85.42,93.5,143.78c17.16,44,37.46,110.26,43,232.13,6.06,131.87,7.27,171.34,7.27,505.15s-1.21,373.28-7.27,505.15c-5.55,121.87-25.95,188.11-43,232.13-22.72,58.36-49.78,100-93.5,143.68s-85.42,70.78-143.78,93.5c-44,17.16-110.26,37.46-232.13,43-131.76,6.06-171.34,7.27-505.15,7.27s-373.28-1.21-505-7.27M1170.5,447.09c-133.07,6.06-224,27.16-303.41,58.06-82.19,31.91-151.86,74.72-221.43,144.18S533.39,788.47,501.48,870.76c-30.9,79.46-52,170.34-58.06,303.41-6.16,133.28-7.57,175.89-7.57,515.35s1.41,382.07,7.57,515.35c6.06,133.08,27.16,223.95,58.06,303.41,31.91,82.19,74.62,152,144.18,221.43s139.14,112.18,221.43,144.18c79.56,30.9,170.34,52,303.41,58.06,133.35,6.06,175.89,7.57,515.35,7.57s382.07-1.41,515.35-7.57c133.08-6.06,223.95-27.16,303.41-58.06,82.19-32,151.86-74.72,221.43-144.18s112.18-139.24,144.18-221.43c30.9-79.46,52.1-170.34,58.06-303.41,6.06-133.38,7.47-175.89,7.47-515.35s-1.41-382.07-7.47-515.35c-6.06-133.08-27.16-224-58.06-303.41-32-82.19-74.72-151.86-144.18-221.43S2586.8,537.06,2504.71,505.15c-79.56-30.9-170.44-52.1-303.41-58.06C2068,441,2025.41,439.52,1686,439.52s-382.1,1.41-515.45,7.57" fill="#fff"/></svg></a>
                </div>

                <div class="mt-6">
                    <a href="#" target="_blank"><svg class="fill-current h-14 w-14  border rounded-xl " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-4.466 19.59c-.405.078-.534-.171-.534-.384v-2.195c0-.747-.262-1.233-.55-1.481 1.782-.198 3.654-.875 3.654-3.947 0-.874-.312-1.588-.823-2.147.082-.202.356-1.016-.079-2.117 0 0-.671-.215-2.198.82-.64-.18-1.324-.267-2.004-.271-.68.003-1.364.091-2.003.269-1.528-1.035-2.2-.82-2.2-.82-.434 1.102-.16 1.915-.077 2.118-.512.56-.824 1.273-.824 2.147 0 3.064 1.867 3.751 3.645 3.954-.229.2-.436.552-.508 1.07-.457.204-1.614.557-2.328-.666 0 0-.423-.768-1.227-.825 0 0-.78-.01-.055.487 0 0 .525.246.889 1.17 0 0 .463 1.428 2.688.944v1.489c0 .211-.129.459-.528.385-3.18-1.057-5.472-4.056-5.472-7.59 0-4.419 3.582-8 8-8s8 3.581 8 8c0 3.533-2.289 6.531-5.466 7.59z"/></svg></a>
                </div>     
            </div>

           <center> <p class="text-gray-200 mt-5" >Copyright &copy | 2020 All Rights Reserved</p> </center>

        </footer>
   

   
        <!-- Animate on Scroll Script -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <!-- Custom Javascript -->
        <script src="js/custom.js"></script>

        <!-- PHP Mailer Script -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>



</body>
</html>