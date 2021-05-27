<template class=" bg-gray-bgcolor font-nunito">

    <div class="flex items-center ">
        <router-link to="/">
        <button class="flex focus:outline-none">
        <img src="/img/pasaBUYLogoOnly.png" class="w-16 h-16  block">
        <p class="mt-4 text-xl font-black tracking-widest font-raleway
          text-red-buttons block
          
           ">pasaBUY</p>
        </button>
        </router-link>
      </div>
    <div id="signup" class="flex items-center justify-center px-4 pb-10">
      <div class="w-full my-12 overflow-hidden text-center bg-white shadow-md flex-grow-1 rounded-xl xl:w-2/5 lg:w-2/5 2xl:w-2/5 md:w-97 sm:w-97 ">
        <div class="px-10 py-16 ">
            <h1 class="pb-5 space-x-1 space-y-1 text-2xl font-bold">Create an account</h1>
              <form action="#" class="space-y-3">
               <div class="flex flex-col md:flex-row md:justify-between md:space-x-6 sm:flex-row sm:justify-between sm:space-x-6 xl:flex-row xl:justify-between xl:space-x-6 2xl:flex-row 2xl:justify-between 2xl:space-x-6 lg:flex-row lg:justify-between lg:space-x-6 ">
                    <div class="w-full">
                        <input name="" type="firstname"  required class="relative block w-full px-3 py-2 mt-4 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="First Name" value="" />
                    </div>
                    <div  class="flex-row w-full">
                        <input aria-label="Last Name" name="" type="name" required class="relative block w-full px-3 py-2 mt-4 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Last Name" value="" />
                        
                    </div>
                    <div class="absolute mt-5 inline-flex right-15.5">
                        <div class=" arrowLeft inline-flex items-center justify-start p-4 bg-red-600 rounded-lg">
                            <p class="text-base leading-none text-white">Are you sure you typed your name correctly?</p>
                        </div>
                    </div>
                </div>
                <div class="flex flex-row">
                    <input aria-label="Email" name="" type="email" required class="relative block w-full px-3 py-2 mb-2 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Email" value="" />
                    <div class="absolute inline-flex right-32">
                        <div class=" arrowLeft inline-flex items-center justify-start p-4 bg-red-600 rounded-lg">
                            <p class="text-base leading-none text-white">Please enter a valid email address?</p>
                        </div>
                    </div>
                </div>
                <div class="relative flex mb-10 ">
                    
                        <span class="absolute z-20 bg-gray-200 top-2.5 left-4"><img class="w-9 h-9" src="img/philippines.png"></span>
                        <input name="" type="text" class="w-full px-3 py-2 pl-16 mb-6 font-semibold tracking-wide text-gray-900 placeholder-gray-500 bg-gray-200 border rounded-lg appearance-none h-14 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 focus:z-10 sm:text-sm" placeholder="Phone Number" value="" />
                    
                </div>
                <div class="flex flex-col md:flex-row md:justify-between md:space-x-6 sm:flex-row sm:justify-between sm:space-x-6 xl:flex-row xl:justify-between xl:space-x-6 2xl:flex-row 2xl:justify-between 2xl:space-x-6 lg:flex-row lg:justify-between lg:space-x-6 ">
                    <div class="w-full relative flex flex-row bg-gray-200 border rounded-lg  focus-within:z-10 h-14 focus-within:border-blue-300 items-center" >
                        <input aria-label="Password" name="" type="password" required class=" w-full px-3 py-2 focus:outline-none font-semibold bg-gray-200 tracking-wide text-gray-900 placeholder-gray-500 appearance-none" placeholder="Password" value="" />   
                        <button class="focus:outline-none flex">
                        <span class="material-icons mr-2 text-gray-900">
                        visibility
                        </span>
                        </button> 
                    </div>
                    <div class="w-full relative flex flex-row bg-gray-200 rounded-lg h-14  focus-within:z-10 focus-within:border-blue-300 border  items-center" >
                        <input aria-label="Confirm Password" name="" type="password" required class=" w-full px-3 py-2 focus:outline-none font-semibold bg-gray-200 tracking-wide text-gray-900 placeholder-gray-500 appearance-none" placeholder="Confirm Password" value="" />   
                        <button class="focus:outline-none flex">
                        <span class="material-icons mr-2 text-gray-900">
                        visibility
                        </span>
                        </button> 
                    </div>
                    <div class="absolute inline-flex right-37">
                        <div class=" arrowLeft inline-flex items-center justify-start p-4 bg-red-600 rounded-lg">
                            <p class="text-base leading-none text-white">Those password did not match.</p>
                        </div>
                    </div>
                    <div class="absolute invisible inline-flex right-0"> <!--cant fit sa screen so tig set ko lng na invi for the mean time-->
                        <div class=" arrowLeft inline-flex items-center justify-start p-4 bg-red-600 rounded-lg">
                            <p class="text-base leading-none text-white">Use 8 or more characters.</p>
                        </div>
                    </div>
                </div>
                <div class="flex mb-2 -mx-1 ">
                    <div class="w-1/2 px-1 mt-6 text-lg font-bold text-left text-grey-dark text-blue">
                        <router-link to="/log-in" >Log instead</router-link>
                    </div>
                    <div class="flex justify-end w-1/2 px-1 mt-3">
                        <button class="h-10 m-2 text-white transition-colors duration-150 bg-red-buttons px-7 rounded-3xl focus:outline-none">
                            <router-link to="/Verification" >NEXT</router-link>
                        </button>
                    </div>
                </div>
                <div class="mt-4 text-xs font-bold tracking-wide text-left text-gray-500 text-grey-dark">
                    By signing up, you agree to the 
                    <router-link to="/terms-and-condition"  class="font-bold text-black" >
                         Terms of Service
                    </router-link> and 
                    <router-link to="/privacy-policy" class="font-bold text-black" >
                        Privacy Policy
                    </router-link>
                </div>
            </form>
          </div>
        </div>
    </div>
</template>

<style>
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
.arrowLeft::before {
  content: '';
  position: absolute;
  display: block;    
  width: 0px;        
  left: 0;
  top: 50%;
  border: 10px solid transparent;
  border-left: 0;
  border-right: 15px solid rgba(220, 38, 38, 1);
  transform: translate(calc(-100%), -50%);
}
</style>

<script>
export default {
  
  created: function () {
    document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>
