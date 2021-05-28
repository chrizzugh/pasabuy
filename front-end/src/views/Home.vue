<template> 
<!-----nav bar----->
        <nav class="fixed z-10 flex items-center justify-between w-full py-4 xl:px-4 font-nunito" :class="{change_color: scrollPosition > 100}">
        <div class="absolute items-center ">
        <router-link to="/" class="rounded-2xl">  
        <button class="focus:outline-none flex">
        <img src="/img/pasaBUYwhiteLogo.png" class="w-12 h-12 mt-1 ml-3"/>        
          <p class="absolute text-xl font-black tracking-widest text-white top-4 left-16 font-raleway vs:hidden ssm:hidden 2xl:text-2xl">
            pasaBUY
          </p>
        </button>
        </router-link>
      </div>
            <div class="flex items-center w-full mt-2 text-right ssm:flex ssm:justify-between sm:block xl:block 2xl:block vs:block lg:block md:block">
                <button class="h-10 px-4 m-1 text-white transition-colors duration-150 border-2 border-white rounded-3xl focus:outline-none hover:bg-white-80 2xl:text-2xl"> <!--change hover color-->
                    <router-link to="/log-in" class="font-bold">Log in</router-link>
                </button>
                <button  class="h-10 px-4 m-1 transition-colors duration-150 bg-white text-crimsonRed 2xl:text-2xl rounded-3xl focus:outline-none hover:bg-white-80"> <!--change hover color-->
                    <router-link to="/sign-up" >Sign Up</router-link>
                </button>
            </div>
        </nav>  

<!-----FIRST----->
    <div id="landing" class="w-full h-screen bg-no-repeat bg-cover xl:mx-auto ssm:w-full vs:bg-center md:bg-center vs:justify-center sm:bg-cover sm:bg-center ssm:bg-cover ssm:bg-center md:bg-no-repeat font-nunito" style="background-image: url('img/background.png')">
        <div class="flex items-center h-full xl:px-10 xl:ml-56 lg:ml-56 md:ml-28 2xl:pl-60 2xl:leading-loose">
            <section class="w-full ml-3 xl:w-6/12 md:w-7/12 lg:w-5/12 2xl:w-6/12 ">
                <p class="mb-4 text-3xl font-bold tracking-wide text-white xl:text-5xl 2xl:text-6xl ">
                    Need someone to do your groceries?</p>
                <p class="text-lg leading-loose text-left text-white 2xl:text-2xl">
               Let your shopping list be taken care of while staying within the comforts of your home </p>
                <button class="items-center px-4 m-1 mt-3 font-semibold tracking-wide transition-colors duration-150 bg-white rounded-full text-crimsonRed 2xl:mt-7 lg:h-10 ssm:ml-8 sm:mt-8 vs:mt-7 md:mt-6 xl:mb-4 h-9 2xl:ml-0 hover:bg-white-80 2xl:text-xl"> <!--change hover color-->
                   <router-link to="/log-in" >Pasabuy Now</router-link>
                </button>
            </section>
        </div>
        <!--SECOND-->
    <div class="flex flex-wrap justify-center bg-white sm:pt-16 lg:pt-40 2xl:pt-56 ssm:pt-16 xl:pt-28 vs:pt-12 font-nunito md:pt-20">
       <div class="w-1/5 p-1 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 vs:pt-10 vs:mx-7 rounded-xl md:w-10/12 vs:w-full vs:justify-center md:pt-10 ssm:w-full sm:w-full sm:mx-7 lg:w-1/4">
            <img class="w-1/2 p-1 mx-auto mb-5 md:p-10" src="img/cart.png"> 
            <h2 class="text-xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Get Help with Shopping</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Post a request and let your shopping list be taken care of for you</p>
        </div> 
        <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 lg:w-1/4 vs:pt-10 sm:mx-12 sm:w-full md:pt-10 rounded-xl md:w-10/12 vs:mx-7 vs:w-full">
            <img class="w-1/2 p-1 mx-auto mb-5 md:p-10" src="img/bike.png"> 
            <h2 class="text-xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Get Extra Income</h2>
            <p class="px-4 mb-4 text-center md:leading-normal md:text-2xl">
                Earn by accepting shopping requests from people near you</p>
        </div> 
        <div class="w-1/5 p-2 pt-20 m-4 mt-8 mb-4 mr-2 bg-gray-200 lg:w-1/4 vs:pt-10 sm:mx-12 sm:w-full md:pt-10 rounded-xl md:w-10/12 vs:mx-7 vs:w-full">
            <img class="w-1/2 mx-auto mb-5 md:p-10" src="img/package.png">
            <h2 class="text-xl font-bold leading-loose tracking-wide text-center md:leading-loose md:text-3xl">Explore Pasabuy Now</h2>
            <p class="px-4 pb-5 text-center md:leading-normal md:text-2xl">
                Sign up now and see how pasaBuy works</p>
        </div>
    </div>
    <div class="flex flex-wrap items-center self-auto justify-center p-6 pt-10 bg-white sm:w-full font-nunito md:flex">
            <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 bg-red-700 md:w-80 md:h-14 sm:w-96.5 sm:h-12 2xl:h-11 2xl:w-89 w-72 rounded-3xl focus:shadow-outline hover:bg-red-700 ">
                <router-link to="/log-in" class="inline-flex align-top md:text-2xl">
                Start Shopping
                </router-link>
            </button>
        </div> <!--END-->
        
            
        <!--THIRD-->
        <div class="flex flex-wrap items-center justify-center px-20 bg-white 2xl:pt-48 sm:pt-20 sm:px-12 vs:px-12 vs:w-full pt-28 vs:pt-16 font-nunito">
            <div class="p-1 sm:p-0 sm:w-full vs:p-0 md:p-5 sm:px-4 vs:w-full md:justify-center md:w-full w-1/4 bg-white h-96.7 rounded-xl 2xl:pl-5 ">    
                <h2 class="pt-5 text-3xl font-bold leading-snug tracking-wide text-left lg:text-2xl 2xl:pt-0 md:text-3xl leading-1">We deliver<br class="vs:hidden sm:hidden md:hidden"> more than just groceries</h2>
                <p class="py-3 mb-6 font-semibold leading-loose text-left text-justify justify text-md xl:mr-3 pt-9 2xl:mr-8 2xl:text-xl 2xl:leading-loose sm:text-lg md:text-lg lg:text-md lg:leading-loose lg:mr-3 lg:mb-0 lg:pt-6" >
                    Wanting to buy that branded shirt on sale? Need party supplies for a surprise birthday celebration? Shop for things with just a few clicks! With pasaBuy, your other essentials are just at the end of your fingertips.</p>
                    <button class="h-8 px-5 font-semibold tracking-wider text-white transition-colors duration-150 w-26 bg-red-buttons rounded-3xl focus:shadow-outline 2xl:h-10 hover:bg-red-700">
                        <router-link to="/log-in" >Try Now</router-link>
                    </button>
            </div>
            <div class="xl:w-2/4 2xl:w-150 lg:w-99.5  sm:w-full">
                <img class="float-right object-contain w-full h-full rounded-xl" src="img/image3.png">
            </div> 
        </div>

        <div class="flex flex-wrap items-center justify-center px-20 sm:px-12 sm:pt-20 vs:px-12 pt-36 2xl:pb-90 2xl:pt-56 xl:pb-40 vs:pb-20 vs:pt-20 md:pb-20 md:pt-20 lg:pb-40">
                <div class="float-left sm:justify-center sm:mb-28 xl:w-2/4 2xl:w-150 lg:w-99.5 sm:w-full">
                    <img class="object-contain w-full h-full rounded-xl" src="img/image2.png">
            </div>

                <div class="ml-6 vs:ml-0 sm:pl-0 sm:w-full vs:p-0 md:ml-20 p-1 vs:justify-center md:w-full vs:w-full w-1/4 bg-white h-96.7 rounded-xl">  
                <h2 class="pt-2 text-3xl font-bold leading-snug tracking-wide text-left 2xl:pt-8 leading-1">We value your <br class="vs:hidden md:hidden sm:hidden 2xl:hidden"> health and <br class="vs:hidden sm:hidden"> safety.</h2>
                <p class="py-3 mb-6 font-semibold leading-loose text-left text-justify justify md:text-lg 2xl:text-xl 2xl:leading-loose pt-11 text-md xl:mr-8 2xl:mr-8">
                   pasaBuy limits your presence outside reducing your possibility of contracting the virus. Its security features ensure safe and worry-free transactions with other users on the platform.</p>
                    <button class="h-8 px-5 mt-2 font-semibold tracking-wider text-white transition-colors duration-150 w-26 bg-red-buttons 2xl:h-10 rounded-3xl focus:shadow-outline hover:bg-red-700">
                        <router-link to="/sign-up" >Sign Up Now</router-link>
                    </button>
            </div>
        </div>

<!--START OF ABOUT US-->
<div class="flex flex-col justify-center w-full py-16 space-y-3 bg-gray-200">
    <h1 class="px-3 text-4xl font-bold text-center"> About Us</h1>
        <div class="flex items-center self-center justify-center w-full px-3 vs:pr-10 vs:pl-10 sm:w-94 md:w-97 lg:w-99 xl:w-608 2xl:w-1/2 2xl:text-center">
            <p class="text-sm text-justify 2xl:text-center">
                PasaBuy is a safe, secure, convenient, and streamlined platform for all Bicolanos for grocery delivery services. With PasaBuy, users can get help with their groceries and earn money by being shoppers.
            </p>
        </div>
</div>
<div class="">
<div class="flex justify-center mb-4 bg-white">
    <div class="flex self-center justify-center w-5/6 vs:flex-wrap vs:w-full 2xl:w-4/6 xl:w-4/6 lg:w-4/6">
      <div id="helpCenterCreateAcc" class="w-full bg-white vs:flex-row vs:flex 2xl:w-2/3 xl:w-2/5 rounded-l-md ">

        <!--1st--->
          <div class="flex justify-start ">
              <div class="w-full bg-transparent vs:flex-row vs:flex">                  
                  <div class="flex flex-col w-full pb-2 mb-5 space-y-2 text-sm xl:mt-16 vs:mt-0 mt-28 justify-left 2xl:pr-20 2xl:pl-3 xl:pr-20 xl:pl-3 vs:pl-10 vs:pr-10 lg:pr-20 md:pl-12 vs:w-full md:pr-5 lg:pl-3 sm:mt-0 lg:mt-12 md:mt-12">                        
                        <h1 class="pt-0 text-2xl font-bold vs:w-full">How we started</h1>
                        <p class="text-sm text-justify">
                          In 2020, pasaBuy started as a simple idea with a purpose of helping and keeping our 
                          townsmen— Bicolanos safe from the cyber and environmental threats.
                        </p>
                        <p class="text-sm text-justify">
                          Aside from that, we are really motivated to turn this idea into a reality because
                          of this important agenda— avoid getting a failure grade.
                        </p>
                  </div>
              </div>
          </div>
      </div>
          
    <div class="w-full pr-8 overflow-auto bg-transparent xl:w-1/2 lpl-2 vs:pr-10 vs:pl-10 vs:flex-row vs:flex sm:w-608 md:w-full rounded-r-md">
        <img src="/img/womanDev.png" class="w-full ">
    </div>
    </div>
  </div>
  
<!---2nd--->
  <div class="flex flex-wrap justify-around w-full py-16 pl-48 pr-56 bg-gray-200 vs:pl-10 vs:pr-10 sm:pl-0 sm:pr-0 md:justify-center md:pl-0 md:pr-0 lg:justify-start sm:justify-center lg:pl-0 lg:pr-0 lg:px-48">
    <div class="w-1/3 vs:flex-row vs:w-full lg:w-1/4 sm:w-2/5 sm:pr-5 lg:ml-48 md:ml-3 md:w-1/4">
      <h1 class="text-2xl font-bold text-crimsonRed">Our Vision</h1>
                <p class="pt-3 text-sm text-justify vs:pt-5 vs:pb-10">Pasabuy aims to be the most trusted and best possible platform for the customers' pasabuy and delivery needs.</p>
    </div>
    <div class="w-2/5 bg-transparent vs:w-full vs:flex-row sm:pl-5 sm:w-2/5 lg:w-2/5 lg:ml-16 md:ml-16">
      <h1 class="text-2xl font-bold text-crimsonRed">Our Mission</h1>
                       <p class="pt-3 text-sm text-justify vs:pt-5">
                         It is our commitment to provide our customers with smooth and secured transactions for their pasabuy and 
                         delivery needs by allowing them to experience the convenience that technology provides. With our simple way, 
                         we will offer income alternatives to unemployed individuals or even to people employed but who need additional 
                         income and contribute to the improvement of their lives.
                       </p>
    </div>
  </div>
  <!---3RD SECTION---->

   <div class="flex flex-wrap justify-around w-full py-16 pl-48 pr-56 bg-white md:pr-0 md:px-20 md:ml-0 md:mr-0 lg:px-20 lg:pr-0 lg:pl-36 md:justify-center sm:pl-0 sm:pr-0 sm:px-20 md:items-center vs:pl-10 vs:pr-10">
     <h1 class="w-1/2 text-4xl font-bold text-center vs:text-2xl vs:pb-16 vs:w-full sm:w-5/6 sm:text-3xl md:w-3/5 md:text-3xl md:justify-center">No more ruined schedule when you pasaBuy with us!</h1>
   <div class="flex pt-16 vs:flex-wrap-reverse xl:pl-16 sm:px-12 vs:pb-8 vs:pt-7 md:pt-20 ">
                <div class="float-left bg-transparent vs:w-full vs:flex vs:flex-row sm:justify-center md:w-1/2 sm:mb-28 xl:w-5/12 2xl:w-150 sm:w-1/2">
                    <img class="object-contain w-full h-full rounded-xl" src="img/manDev.png">
            </div>

                <div class="w-1/2 p-1 pt-20 pr-3 bg-transparent md:w-2/5 sm:w-1/2 pl-14 md:pl-0 lg:pl-0 lg:pr-0 sm:pt-16 vs:flex-row lg:w-2/5 sm:pl-0 vs:p-0 sm:p-0 md:pt-14 vs:justify-center vs:w-full rounded-xl vs:mb-5">  
                <h2 class="pt-2 text-2xl font-bold leading-relaxed tracking-wide text-left vs:leading-tight sm:pt-0 2xl:pt-8 leading-1 vs:text-xl 2xl:3xl">We complete your<br class="vs:hidden"> essentials</h2>
                <p class="py-3 pt-3 text-sm font-normal leading-normal text-justify 2xl:text-base sm:py-0 md:text-sm ">
                You’re right, it’s really frustrating when you have a long unfinished list at your To-Dos, that’s why we’re here to get that list done in no time with just a few clicks!
                </p>
            </div>
        </div>
        <div class="flex pt-16 pb-16 xl:pl-16 sm:px-12 vs:flex-wrap">
               <div class="w-1/2 p-1 pr-3 bg-transparent pl-14 vs:flex-row md:w-2/5 lg:w-2/5 sm:pl-0 vs:p-0 md:ml-8 vs:justify-center vs:w-full sm:w-1/2 md:pl-0 vs:pl-20 vs:pr-20 md:pr-0 rounded-xl">  
                <h2 class="pt-16 text-2xl font-bold leading-relaxed tracking-wide text-left vs:pt-0 vs:leading-tight vs:pr-0 vs:pl-0 sm:pt-0 md:pt-20 vs:text-xl 2xl:pt-8 leading-1"> We’re so glad to help you!</h2>
                <p class="py-3 pt-3 text-sm font-normal leading-normal text-justify sm:pt-0 md:text-sm">
               
You’ll never know how much it means to our shoppers when you pasaBuy with them. Together, let’s start giving and receiving good things. Salamat po!
                </p>
            </div>
             <div class="float-right ml-0 mr-0 bg-transparent vs:ml-10 vs:mr-10 vs:flex-row sm:w-1/2 md:w-1/2 lg:w-1/2 sm:justify-center sm:mb-0 xl:w-5/12 2xl:w-608">
                    <img class="object-contain w-full rounded-xl" src="img/handshakes.png">
            </div>

                
        </div>
  </div>

  
</div>
        
<!--FOOTER-->
        <footer class="px-4 text-sm text-white lg:pb-5 lg:pt-8 pb-7 xl:pt-5 md:pt-12 bg-bastille">
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none sm:justify-around md:justify-around vs:flex-auto xl:px-4 bg-bastille" >
                <div class="block w-3/4 mt-6 text-base md:w-11/12 sm:w-11/12 lg:flex xl:flex 2xl:flex md:flex sm:flex lg:mt-0 bg-bas tille">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 text-sm font-medium tracking-wide "><strong>Pasabuy</strong></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide sm:px-0"><strong>Company</strong></li>
                        <li hidden><router-link to="/about-us"  class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline">About Us</router-link>
                        </li>
                        <li><router-link to="/help-center" class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline ">Help</router-link></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium tracking-wide text-sm "><strong>Policies</strong></li>
                        <li><router-link to="/privacy-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Privacy Policy</router-link></li>
                        <li><router-link to="/terms-and-condition" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Terms and Condition</router-link></li>
                        <li><router-link to="/return-and-refund-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Return Refund</router-link></li>
                        <li><router-link to="/cookies-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Cookies Policy</router-link></li>
                    </ul>
                    <div class="flex flex-col w-full sm:w-11/12">
                        <div class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide "><strong>©Pasabuy 2021</strong></div>
                        <ul class="flex flex-col w-full p-0 font-thin text-left">
                            <li><a href="#" class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline ">Stay connected with us</a></li>
                        </ul>
                        <div class="flex justify-start pl-4 mt-2">
                            <a class="flex items-center mr-6 text-gray-300 no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.998 12c0-6.628-5.372-12-11.999-12C5.372 0 0 5.372 0 12c0 5.988 4.388 10.952 10.124 11.852v-8.384H7.078v-3.469h3.046V9.356c0-3.008 1.792-4.669 4.532-4.669 1.313 0 2.686.234 2.686.234v2.953H15.83c-1.49 0-1.955.925-1.955 1.874V12h3.328l-.532 3.469h-2.796v8.384c5.736-.9 10.124-5.864 10.124-11.853z" /></svg>
                            </a>
                            <a class="flex items-center mr-6 text-gray-300 no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M23.954 4.569a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.691 8.094 4.066 6.13 1.64 3.161a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.061a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.937 4.937 0 004.604 3.417 9.868 9.868 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63a9.936 9.936 0 002.46-2.548l-.047-.02z" /></svg>
                            </a>
                            <a class="flex items-center no-underline hover:text-white" href="#">
                                <svg viewBox="0 0 24 24" class="w-5 h-5 fill-current" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" /></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>    
    </footer>    
</div>

</template>

<style scoped>
   
 .change_color {
       background-color: rgba(205, 15, 15, 1);
;
       box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px
   }
   .scrollbehavior{
       scroll-behavior: smooth;
   }
</style>

<script>
export default {
  name: "Header",
      data(){
          return{
                scrollPosition: null
          }
      },
    methods: {
        updateScroll() {
        this.scrollPosition = window.scrollY
        }
  },
        mounted() {
            window.addEventListener('scroll', this.updateScroll);
  },
        destroy() {
            window.removeEventListener('scroll', this.updateScroll)
    }
}
</script>