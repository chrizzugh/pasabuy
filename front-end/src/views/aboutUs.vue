<template class="flex font-nunito">
<!----nav bar--->
  <nav class="sticky top-0 flex items-center w-full h-12 py-5 shadow-md bg-red-buttons">
      <div class="flex items-center justify-center pl-4">
      <img src="/img/pasaBUYwhiteLogo.png" class="block w-8 h-8 pl-1">
        <h1 class="block pl-1 text-lg font-black tracking-widest text-white font-raleway">pasaBUY</h1>
        </div>
        <div class="absolute border-black items-align-right justify justify-right right-7">
          <button class="px-3 text-xs font-semibold text-white uppercase bg-transparent border border-white rounded-full focus:outline-none h-7">
        <router-link to="/log-in"> Log in</router-link>
      </button>
        </div>
        
        <div class="w-full">
          <div v-if="isOpen" class="fixed right-0 h-auto py-2 pt-2 pl-4 pr-4 mt-2 mr-16 space-y-2 bg-white rounded-lg shadow-xl w-30 ring-2 ring-gray-200">
            <router-link to="/dashboard"  class="flex flex-row text-black gap-x-2">Go to Pasabuy<span class="text-gray-500 material-icons">launch</span></router-link>
            <router-link to="/"  class="flex flex-row text-black gap-x-2">Log out</router-link>
          </div>
        </div>
  </nav> <!---End of navbar--->

  <div class="flex flex-col justify-center w-full py-10 space-y-3 bg-white ">
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
        <div class="flex xl:pl-16 sm:px-12 vs:flex-wrap ">
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
            <div class="container flex flex-col items-center justify-center mx-auto overflow-hidden leading-none sm:justify-around md:justify-around vs:flex-auto xl:px-4">
                <div class="block w-3/4 mt-6 text-base md:w-11/12 sm:w-11/12 lg:flex xl:flex 2xl:flex md:flex sm:flex lg:mt-0">
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-1 text-sm font-medium tracking-wide ">Pasabuy</li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide sm:px-0">Company</li>
                        <li><router-link to="/about-us"  class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline">About Us</router-link>
                        </li>
                        <li><router-link to="/help-center" class="inline-block py-0.5 text-sm  pl-3 pr-5 no-underline ">Help</router-link></li>
                    </ul>
                    <ul class="flex flex-col w-full p-0 font-thin text-left list-none">
                        <li class="inline-block px-3 py-0.5 font-medium tracking-wide text-sm ">Policies</li>
                        <li><router-link to="/privacy-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Privacy Policy</router-link></li>
                        <li><router-link to="/terms-and-condition" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Terms and Condition</router-link></li>
                        <li><router-link to="/return-and-refund-policy" class="inline-block py-0.5 pl-3 pr-5 text-white no-underline text-sm ">Return Refund</router-link></li>
                    </ul>
                    <div class="flex flex-col w-full sm:w-11/12">
                        <div class="inline-block px-3 py-0.5 font-medium text-sm  tracking-wide ">©Pasabuy 2021</div>
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
    </footer>    <!---end of footer---->
      

</template>

<style >
    #journal-scroll::-webkit-scrollbar {
        width: 5px;
        cursor: pointer;
      }
  
    #journal-scroll::-webkit-scrollbar-track {
        background-color: rgba(229, 231, 235, var(--bg-opacity));
        cursor: pointer;
    }
  
    #journal-scroll::-webkit-scrollbar-thumb {
        cursor: pointer;
        background-color: rgba(185, 28, 28)
    
    }
   
#iCheck{
  font-size:16px;
  color:rgb(22, 22, 141);
}
#iMessage{
  font-size:24px;
  color:rgb(22, 22, 141);
}
</style>

<script>

export default {
  data(){
        return{
            
        }
    }
}
</script>
<style scoped>
.active {
  color:rgba(220, 20, 60, 1);  
  background-color: #CD0F0F, 100%;
}
.active span a{
   color:#35397B;
}
.active a{
  color:white;
}
.notSelected{
  background-color: rgba(220, 20, 60, 1);
}
.isSelected {
  background-color:rgba(220, 20, 60, 1);
  /* rgb(255, 190, 203);  */
}
</style>