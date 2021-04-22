<template>
      <div v-on:click.self="close1" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 sm:px-2 vs:px-2">
       <div class="inline-flex flex-col space-y-2 bg-white shadow rounded-xl h-auto w-550 ssm:w-full vs:w-full sm:w-full">
          <div class="flex flex-col  mt-4">
  
              <!--Create Post section-->
              <h1 class="items-center justify-center sm:ml-8 se:pl-14 se:ml-0 ssm:pl-11 ssm:ml-0 ssm:text-lg vs:ml-0 sm:ml-12 ml-12 pb-4 text-gray-900 leading-normal vs:pl-22 pl-24 text-2xl vs:text-xl font-bold text-center">
                  Edit Shopping Offer
                  <button @click.prevent="close1" class=" vs:ml-4 ml-20 sm:ml-14 se:ml-4 ssm:ml-3 ssm:text-xs focus:outline-none text-sm vs:text-xs mb-1 leading-none text-indigo-900">
                  Close
                  </button>
                </h1>
              <!--end-->
               <hr>

  <!--User Profile-->
  <div class="inline-flex space-x-2 items-center justify-start p-4">
    <img class="w-14 h-full vs:w-12 ssm:w-10 border rounded-full border-gray-200" src="img/yami.jpg"/>
    <p class="text-base ssm:text-sm vs:text-sm lvs:text-base font-bold leading-none text-gray-900">Yami Sukehiro</p>
  </div>
  <!--end-->

 <!--Delivery information list-->
  <div class="flex flex-col mt-1  sm:px-2 ssm:px-2 vs:px-2 justify-center items-center">
      
      <div class="flex flex-row ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center">
         <div class="flex flex-row space-x-2 sm:w-full ">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
              delivery_dining
             </span>
              <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
              <button @click="dropdown1modal" class=" focus:outline-none flex w-full flex-col">
                <p class="text-xs font-semibold leading-none text-gray-500">Delivery Area</p>
                <input style="cursor: pointer;" disabled type="text" id="input_name" v-model="delivery_info.delivery_area" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">
              </button>
            <div v-if="dropdown1" class="relative p-2 bg-white rounded-lg shadow-xl right-4 h-40 sm:w-full w-52">
            <div id="scroll1" class="flex-auto overflow-y-scroll  h-28">
              <div class="flex flex-col items-start space-y-1.5">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Home Address</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address1}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 1</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address2}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 2</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address3}}</p>
                 </div>
             </div>
             <hr class="flex w-full px-2">
             <div @click="getAddressValue" class="flex flex-col w-full space-y-1 px-2" style="cursor: pointer;">
                 <p class="text-sm font-bold tracking-wide leading-none text-gray-900">Shipping Address 3</p>
                 <div class="flex-1 w-full px-2">
                 <p class="text-sm tracking-wide leading-none text-gray-900">{{address4}}</p>
                 </div>
             </div>
             <hr>
            </div>
            </div> 
             <div @click="addAddress=!addAddress" class="flex text-base items-center focus:outline-none p-2 space-x-1" style="cursor: pointer;">
              <span class="text-red-700 material-icons">
                add_circle
              </span>
              <div class="flex-1 w-full" >
              <p class="text-sm font-bold tracking-wide leading-none text-red-700 ">Add New Shipping Address </p>
             </div>
             </div>
            <div @click.self="openAddModal" v-if="addAddress" class="z-50 bg-black bg-opacity-25 fixed inset-0 flex justify-center items-center ssm:px-2 vs:px-2">
             <div class="inline-flex flex-col bg-white p-4 space-y-4 shadow rounded-xl h-auto w-80 " >
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Title</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address title">
                 </div>
                 <div class="flex flex-row w-full items-center space-x-2 ">
                    <label class="block text-sm font-bold tracking-wide leading-none text-gray-900">Address</label>
                    <input class="appearance-none focus:outline-none border rounded w-full py-1 px-3 text-grey-darker" id="addressTitle" type="text" placeholder="Your shipping address">
                 </div>     
                 <div class="justify-center flex">
                 <button class="inline-flex items-center justify-center focus:outline-none px-4 vs:py-2 bg-red-700 rounded-full w-full h-6">
                 <p class="text-base font-bold leading-normal text-center text-white">Add</p>
                 </button>
                 </div>
             </div>
            </div>
              </div>            
            </div>
         </div>
         </div>
          
         <div class="flex flex-row space-x-2 sm:w-full">
             <div>
              <span class="rounded-lg mt-1.5 material-icons text-red-700">
              shopping_cart
              </span>
             </div>
              <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
              <button @click="dropdown4modal" style="cursor: pointer;" class=" focus:outline-none flex w-full flex-col">   
              <p class="text-xs font-semibold leading-none text-gray-500">Shopping Place</p>
              <input type="text" id="input_name" style="cursor: pointer;" disabled v-model="delivery_info.shopping_place" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">
              </button>
            <div v-if="dropdown4" class="relative py-3 bg-white rounded-lg shadow-xl right-4 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Search for place" title="Shopping Place" class="focus:outline-none">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL" class="space-y-1 text-sm tracking-wide leading-normal">
            <li><a href="#">Ayala</a></li>
            <li><a href="#">Disney Land</a></li>
            <li><a href="#">Dotcom Infinity</a></li>
            <li><a href="#">Hepa</a></li>
            <li><a href="#">LCC Malls</a></li>
            <li><a href="#">Sampaguita</a></li>
            <li><a href="#">BUCS Building 4</a></li>
            </ul>
            </div>
            </div>
            </div>
             </div>
         </div>
         </div>
      </div>

      <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col ssm:space-x-0 se:space-x-1 ssm:space-y-2 space-x-4 w-full justify-center">
        <div class="flex flex-row space-x-2 sm:w-full">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
             alarm
             </span>
            <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start h-full py-1.5 vs:w-full rounded-2xl">
             <p class="text-xs font-semibold leading-none text-gray-500">Schedule</p>
             <input id="input_name" v-model="delivery_info.schedule" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2 sm:w-full ">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         directions_car
         </span>
         <div   class="inline-flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2  bg-gray-100 rounded-xl">
          <div  class="inline-flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
            <button @click="dropdown3modal" style="cursor: pointer;" class=" focus:outline-none flex w-full flex-col">
            <p class="text-xs font-semibold leading-none text-gray-500">Public Transit</p>
            <input style="cursor: pointer;" type="text" disabled id="input_name" v-model="delivery_info.public_transit" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-loose text-gray-900 w-44 sm:w-full vs:w-full h-auto">
            </button>
            <div  v-if="dropdown3" class=" relative py-3 bg-white rounded-lg shadow-xl right-4 h-35.1 sm:w-full w-52">
            <div class="flex flex-col w-full px-2 justify-start items-start">
             <input class="focus:outline-none" @click="func1(event)" type="text" id="myInput" v-on:keyup="myFunction()" placeholder="Mode of transport.." title="Transport Mode">
            <div id="scroll1" class="flex px-2 flex-col overflow-y-scroll w-full h-24">
            <ul id="myUL" class="space-y-1 text-sm tracking-wide leading-normal">
            <li><a href="#">Spaceship</a></li>
            <li><a href="#">Cart Titan</a></li>
            <li><a href="#">Magic Broom</a></li>
            <li><a href="#">Flying Nimbus</a></li>
            <li><a href="#">Train to Busan</a></li>
            <li><a href="#">Jeep</a></li>
            <li><a href="#">Rocketman</a></li>
            </ul>
            </div>
              </div>
              </div>
            
          </div>
      </div>
     </div>
     </div>

     <div class="flex flex-row pt-3 ssm:pt-2 ssm:flex-col se:space-x-1 ssm:space-x-0 ssm:space-y-2 space-x-4 w-full justify-center">
        <div class="flex flex-row space-x-2 sm:w-full">
             <span class="rounded-lg mt-1.5 material-icons text-red-700">
             shopping_bag
             </span>
            <div class="flex items-center justify-start sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full w-52 h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
             <div class="flex flex-col items-start justify-start w-full h-full py-1.5 rounded-2xl">
                 <p class="text-xs font-semibold leading-none text-gray-500">Capacity</p>
                 <span>
                 <input id="input_name" v-model="delivery_info.capacity" class="ssm:text-xs block bg-gray-100 text-sm focus:outline-none leading-7 text-gray-900 w-44 sm:w-full vs:w-full h-auto">            
                 </span>
             </div>
         </div>
        </div>
         
        <div class="flex flex-row space-x-2 sm:w-full">
         <span class="rounded-lg mt-1.5 material-icons text-red-700">
         payments
         </span>
         <div class=" focus:outline-none inline-flex items-center justify-start w-52 sm:w-full ssm:px-2 ssm:h-auto ssm:w-full vs:w-full h-12 vs:h-12 px-4 vs:px-2 bg-gray-100 rounded-xl">
          <div class="inline-flex flex-col items-start justify-start vs:w-full h-full py-1.5 rounded-2xl">
            <button @click="dropdown2modal" class=" focus:outline-none flex w-full flex-col">
              <p class="text-xs font-semibold leading-none text-gray-500">Payment Method</p>
              <input style="cursor: pointer;" disabled type="text" id="input_name" v-model="delivery_info.payment_method" class="ssm:text-xs block bg-gray-100 focus:outline-none text-sm leading-7 text-gray-900 w-44 sm:w-full vs:w-full h-auto">
            </button>
            <div v-if="dropdown2" class="relative py-3 bg-white rounded-lg shadow-xl h-35.1  sm:w-full right-4 w-52">
            <div class="flex flex-col w-full space-y-3 px-2 justify-start items-start">
             <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">Cash on Delivery</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">GCash</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">PayMaya</p>
            </button>
            <hr class="flex w-full">
            <button class="flex w-full focus:outline-none justify-start items-start px-2">
                <p class="text-sm tracking-wide leading-none text-gray-900">Online Banking</p>
            </button>
            </div>
              </div>
          </div>
         </div>
     </div>
     </div>
     </div>
     <!--end-->

     <!--Comment section-->
    <div class="justify-center flex ssm:px-2 mt-3 sm:px-2 vs:px-2">
     <textarea id="postMessage" name="postMessage" rows="3" class=" p-4 bg-gray-100 shadow-sm text-sm ssm:text-xs vs:text-xs lvs:text-sm rounded-2xl rounded-md outline-none h-auto w-31.75 ssm:w-full vs:w-full" placeholder = "Enter your post message here..." v-model="delivery_info.comment"></textarea>
    </div>
    <!--end-->

    <!--Post button-->
    <div class="justify-center flex mt-3 pb-3 px-2 ">
     <button class="inline-flex items-center justify-center focus:outline-none px-4 py-2 bg-red-700 rounded-full w-31.75 ssm:w-full ssm:h-8 vs:w-full h-10">
         <p class="text-base ssm:text-sm vs:text-sm font-bold leading-normal text-center text-white">Post</p>
     </button>
    </div>
    <!--end-->

  </div>
  </div>
  </div>
    <!--end-->
</template>

<script>
export default {
    data(){
        return {
        isVisible: true,
        hidden: false,
        addAddress: false,
        dropdown1: false,
        dropdown2: false,
        dropdown3: false,
        dropdown4: false,
        deliveryAddress: "Delivery Area",
        address1: "Banquerohan,Legazpi City",
        address2: "Buraguis Legazpi City",
        address3: "United State of Bicol",
        address4: "Maski Sain City",
        delivery_info:{
        delivery_area: 'Banquerohan',
        shopping_place: 'SM City Legazpi',
        schedule: 'Tomorrow at 2 PM',
        public_transit: 'Public Transit',
        capacity: '2 medium bags',
        payment_method: 'Payment First',
        comment: 'Hi! I’ll be going to SM City Legazpi tomorrow. If there’s anyone who wants to pasabuy their groceries, I am willing to help out. Just send me a request!',
        status: 'No Longer Accepting Requests'
      },
        }
    },
    methods: {
        close1(){
            this.$emit('closeModal1')
        },
        openAddModal(){
            this.addAddress = !this.addAddress
        },
        
        getAddressValue(){
          this.delivery_info.delivery_area = this.address1
        },

        myFunction() {
            var input, filter, ul, li, a, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            ul = document.getElementById("myUL");
            li = ul.getElementsByTagName("li");
            for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } 
            else {
                li[i].style.display = "none";
            }
          }
        },
        dropdown1modal(){
          this.dropdown1=!this.dropdown1
          this.dropdown2= false
          this.dropdown3= false
          this.dropdown4= false        
          },
        dropdown2modal(){
          this.dropdown1= false
          this.dropdown2= !this.dropdown2
          this.dropdown3= false
          this.dropdown4= false        
          },
        dropdown3modal(){
          this.dropdown1= false
          this.dropdown2= false
          this.dropdown3= !this.dropdown3
          this.dropdown4= false        
          },
        dropdown4modal(){
          this.dropdown1= false
          this.dropdown2= false
          this.dropdown3= false
          this.dropdown4= !this.dropdown4       
          },

    },
}
</script>

<style scoped>
#scroll1::-webkit-scrollbar-track
{
	
	border-radius: none;
	
}
#scroll1::-webkit-scrollbar
{
	width: 6px;
	
}
#scroll1::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: grey;
}

#postMessge::-webkit-scrollbar-track
{
	border-radius: none;
}
#postMessage::-webkit-scrollbar
{
	width: 6px;
}
#postMessage::-webkit-scrollbar-thumb
{
	border-radius: 10px;
	background-color: grey;
}

textarea{
  resize: none;
}

#button1{
    padding:0;
    margin:0;
}

#myUL {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#myUL li a {
  margin-top: -1px; /* Prevent double borders */
  text-decoration: none;
  color: black;
  display: block
}

#myUL li a:hover:not(.header) {
  background-color: #eee;
}

#myInput {
  background-image: url('/img/search.svg');
  background-position: 8px 4px;
  background-repeat: no-repeat;
  background-size: 24px;
  width: 100%;
  padding: 4px 0px 4px 35px;
  border: 1px solid #ddd;
  margin-bottom: 6px;
}

::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
 --tw-text-opacity: 1;
color: rgba(107, 114, 128, var(--tw-text-opacity));
}

input[type="text"]::selection{
  background-color: inherit;
  color: none;
}

</style>