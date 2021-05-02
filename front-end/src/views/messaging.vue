<template class="font-nunito">
<Navbar/>
<div class="desktopVersion fixed md:w-full vs:w-full min-h-screen">
    <div class="bg-gray-50 flex h-screen justify-center divide-x divide-light-gray-700 px-2">
  
      <!--Inbox Corner-->
        <div class="mt-20 shadow-md vsv:w-full vsvs:w-full x-v:w-full se:w-full vvs:w-full lvs:w-full vs:w-full ssm:w-full xsm:w-full sm:w-full mt-20 md:w-1/3 relative">
        
        <div id="msgheader" class="flex justify-items-center relative shadow pt-5 pb-1">
              <button class="focus:outline-none pl-5 hover:text-red-700" type="button"><span class="material-icons pt-1" id="iMessage">
                chat</span></button>
              <h4 class="text-base font-bold pl-4 ">Message</h4>   
        </div>

        <div v-if="searchMessageInactive" class="flex justify-center w-full relative py-1 mt-2 pt-2">
            <input type="text" class="h-8 w-11/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search"/>
            <button  @click="searchBtn" class="align-middle absolute right-8 pt-1 h-7 focus:outline-none hover:text-red-700"><span class="material-icons" style="font-size:22px">
              search
              </span></button>
        </div><!---end of search bar-->

        <button v-if="showSearchResults" class="flex justify-center w-full relative py-1 mt-2 pt-2 focus:outline-none">
            <input type="text" class="h-8 w-10/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Mark" id="search"/>
            <button class="align-middle mt-1 ml-1 flex items-center h-6 w-6 rounded-full bg-gray-300 focus:outline-none hover:text-red-700">
              <span  @click="closeSearchResults" class="material-icons pl-1" style="font-size:17px">
              close
              </span></button>
        </button><!---end of search bar-->


        <div class="overflow-auto overflow-x-hidden px-0 py-1 h-4/5" id="scrollInbox">
            
          <div v-if="searchMessageInactive">
            <button @click ="active_convo('Mark Aral')" type="button" class="focus:bg-gray-200 relative w-full sm:pr-8 flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
              <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="mark"> {{ inbox[0].name}} <span class="material-icons pl-2" id="iCheck" style="font-size:14px" >
                  check_circle
                  </span></span> 
                  <span class="text-xs text-gray-400 truncate w-36 md:w-28 lvs:w-64 sm:w-64 ssm:w-24"> {{ inbox[0].message}}
                  </span> 
                </div>
              </div>
                <div class="flex flex-col items-start"> 
                  <span class="text-gray-700 text-xs">
                  <span class="font-bold pl-1 pr-1">·</span>{{ inbox[0].time}}</span>
                </div>
            </button>

            <button @click ="active_convo('Gwen Lopez')" type="button" class=" focus:bg-gray-200 relative w-full sm:pr-8 flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
              <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="gwen">{{ inbox[1].name}}<span class="material-icons pl-2" id="iCheck" style="font-size:14px">
                  check_circle
                  </span></span> 
                  <span class="text-xs text-gray-400 truncate w-32 md:w-28 lvs:w-64 sm:w-64 ssm:w-24"> {{ inbox[1].message}}
                  </span> 
                  </div>
                </div>
                <div class="flex flex-col items-start"> 
                  <span class="text-gray-700 text-xs">
                  <span class="font-bold pl-1 pr-1">·</span>{{ inbox[1].time}}</span>
              </div>
            </button>             

          </div> <!---------------navigation message------------>

          <div v-if="showSearchResults" class="divide-y divide-gray-300">

            <div class="py-2 flex justify-center font-normal text-xs italic">
              <span>Search Results</span>
            </div>
            <div>
              <button @click ="Void" type="button" class="focus:bg-gray-200 relative w-full flex sm:pr-8 focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
                <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                  <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm italic" id="mark"> <span class ="text-red-700">Mark</span> Aral <span class="material-icons pl-2" id="iCheck" >
                    check_circle
                    </span></span> 
                    <span class="text-xs text-gray-400 truncate md:w-28 w-36 lvs:w-64 sm:w-72 ssm:w-24"> {{ inbox[0].message}}
                    </span> 
                  </div>
                </div>
                  <div class="flex flex-col items-start"> 
                    <span class="text-gray-700 text-xs">
                    <span class="font-bold pl-1 pr-1">·</span>{{ inbox[0].time}}</span>
                  </div>
              </button>
            </div>
            
          </div> <!---------------search message results------------>
        </div>

    </div><!--end of left corner-->

      <!------------------------------------------------------>
     
      <!---Chat Corner-->
            <div class="mt-20 shadow-md relative vsv:w-full vsvs:w-full x-v:w-full se:w-full vvs:w-full lvs:w-full vs:w-full ssm:w-full xsm:w-full sm:w-full mt-20 w-5/12 md:w-2/3">
        
        <div class="relative flex justify-items-center md:justify-items-center shadow py-3">
          <div class="flex flex-row justify-between">
            
            <div class="flex flex-row">

              <button id="backNavigator" class="focus:outline-none pl-5 hover:text-red-700" @click="backChat" type="button"><span class="material-icons pt-2" id="iMessage">
                  keyboard_backspace</span></button>

              <h4 class="text-base font-bold pt-2 pl-4 ">{{activeName}}</h4> 
              <span class="material-icons pl-3 pt-3" id="iCheck" > check_circle </span>
            </div>
            
            <div class="align-middle absolute right-2">
              <button v-if="toggle" class="absolute right-10 px-2 h-9 w-24 rounded bg-gray-100 border-solid border-2 border-gray-300 hover:text-red-700" id="delBtn" ><span class="font-semibold">Delete</span></button>
              <button @click="threedots" class="pt-1 mr-3 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                  more_horiz</span></button>
            </div>
          </div>
        </div>

      <div class="overflow-auto overflow-x-hidden h-4/5" id="journal-scroll">

        <div v-if="ifHide" class="sticky top-0 p-3 flex justify items-center shadow-lg bg-white border">
            
            <!-- sent offer 1--->
            <div v-if ="toggle1" class="text-sm w-full">
              <div class="flex justify-between items-center">
                <span>You sent an offer to
                <span class="font-semibold ml-2">{{recipient}}</span>
                <span class="ml-2">for</span>
                <span class="font-semibold ml-2">Post {{postNum}} </span></span>
              
                <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

                <div class="flex justify-end pr-3">
                  <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Offer</span></button>
                  <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
                </div>
            </div><!------->

            <!-- sent request 1--->
            <div v-if ="toggle2" class="text-sm w-full">
              <div class="flex justify-between items-center">
                <span>You sent a request to
                <span class="font-semibold ml-2">{{recipient}}</span>
                <span class="ml-2">for</span>
                <span class="font-semibold ml-2">Post {{postNum}} </span></span>
              
                <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

                <div class="flex justify-end pr-3">
                  <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Request</span></button>
                  <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
                </div>
            </div><!------->

            <!-- received offer 1--->
            <div v-if="toggle3" class="text-sm w-full">
              <div class="flex justify-between items-center">
              <span><span class="font-semibold mr-2 ">{{sender}}</span>sent you an offer
              <span class="ml-2">for your </span>
              <span class="font-semibold ml-2">Post {{postNum2}} </span></span>

              <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Decline</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Accept</span></button>
              </div>
            </div><!------->

            <!-- received request 1--->
            <div v-if="toggle4" class="text-sm w-full">
              <div class="flex justify-between items-center">
              <span><span class="font-semibold mr-2 ">{{sender}}</span>sent you a request
              <span class="ml-2">for your </span>
              <span class="font-semibold ml-2">Post {{postNum2}} </span></span>

              <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Decline</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Accept</span></button>
              </div>
            </div><!------->

        <!--------------transaction details confirmed------>
            <div v-if="toggle5" class="text-sm w-full">
              <div class="flex flex-row justify-between">
                <span>Transaction <span class="font-semibold ml-2">{{postNum2 }} </span> </span>
                
                <div class="flex items-center">
                  <span class="rounded border h-6 border-blue-700 px-1">Confirmed</span>
                                   
                  <button @click="vertiDots" class="pt-1 w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button>
                </div>

              </div>
              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>View Details</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Update</span></button>
              </div>
            </div><!------------------->

            <!--------------transaction details cancelled------>
            <div v-if="toggle6" class="text-sm w-full">
              <div class="flex flex-row justify-between">
                <span>Transaction <span class="font-semibold ml-2">{{postNum2 }} </span> </span>
                
                <div class="flex items-center">
                  <span class="rounded border h-6 border-crimsonRed text-crimsonRed px-1">Cancelled</span>
                                   
                  <button @click="vertiDots" class="pt-1 w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button>
                </div>

              </div>
              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>View Details</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Update</span></button>
              </div>
            </div><!------------------->

            <!-----vertical-dot  options--> 
            <div v-if="toggleVerti" id="vertiOPTIONS" class="absolute right-4 top-2 xl:fixed xl:top-36 xl:right-16  px-2 mr-4 bg-gray-200 w-2/5 shadow-inner rounded-lg border-solid border-2 border-white" style="width:220px">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                      <button @click="hideVertiOptions" class="w-full flex py-1 hover:bg-white hover:text-crimsonRed justify-start mt-2 border border-gray-300 rounded-lg">
                        <span class="material-icons pl-3" style="font-size:20px">visibility</span>
                        <span class="font-semibold pl-2 ">Hide</span>
                      </button>
                    </div> 
                  <div class="divide-y divide-gray-300">
                    <div class="flex flex-col pb-2">
                      <span class="pl-1 font-semibold py-1 text-gray-500 py-1 text-xs">Request(s)/Offers RECEIVED</span>
                      <button @click="active_transact('toggle1')" class="h-6 flex items-center rounded py-1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Offer #1</button>
                      <button @click="active_transact('toggle2')" class="h-6 flex items-center rounded py=1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Request #1</button>
                    </div>

                    <div class="flex flex-col pb-2">
                      <span class="pl-1 font-semibold text-gray-500 py-1 py-1 text-xs">Request(s)/Offers SENT</span>
                      <button @click="active_transact('toggle3')" class="h-6 flex items-center rounded py-1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Offer #1</button>
                      <button @click="active_transact('toggle4')" class="h-6 flex items-center rounded py=1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Request #1</button>
                    </div>

                    <div class="flex flex-col pb-2">
                      <span class="pl-1 font-semibold text-gray-500 py-1 py-1 text-xs">OTHER TRANSACTIONS</span>
                      <button @click="active_transact('toggle5')" class="h-6 flex items-center rounded py-1 flex text-xs hover:bg-gray-400 hover:text-white text-blue-500 justify-start pl-4 ">Tansactions #17</button>
                      <button @click="active_transact('toggle6')" class="h-6 flex items-center rounded py=1 flex text-xs hover:bg-gray-400 hover:text-white text-crimsonRed justify-start pl-4 ">Transactions #18</button>
                      <span class="pl-4 font-semibold italic text-gray-400 py-1 py-1 text-xs">No other transactions</span>
                    </div>
                  </div>

                  </div>
            </div><!-----end of transaction options--->

        </div><!------------------->

        <div class="p-2 flex justify-end">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-200 rounded-lg">
            <p>{{ chatOutgoing[0].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[0].timeSent}} </span> </div>
        </div>
        
        <div class=" flex justify-end mt-2">
          <div class="ml-32 bg-gray-100 text-sm rounded-lg">
            
            <div class="flex flex-col bg-gray-200 py-2 rounded-lg">
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>

              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1"> {{placeFrom}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">SM {{destination}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  

                </div>
              </div>

              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">{{shoppingListSize }}items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div><!----------------------------------------->
        <div class="p-1 ml-12">
         <div class="flex items-end pr-10 mt-1">
            <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
              <div>
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>
              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1">{{placeFrom}}</span>
                  </div>
                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">{{destination}}</span>
                  </div>
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>
                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  
                </div>
              </div>
              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">8 items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div></div>
              </div>
            </div>
            </div>
         </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8 "> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{ chatIncoming[0].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{ chatIncoming[0].timeReceived}}</span></div>
          </div>
         </div>
        </div>
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-200 text-sm rounded-lg">
            <p>{{chatOutgoing[1].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >{{chatOutgoing[1].timeSent}}</span> </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[1].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[1].timeReceived}}</span></div>
          </div>
         </div>
        </div>
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-200 text-sm rounded-lg">
            <p>{{chatOutgoing[2].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[2].timeSent}} </span> </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
            <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[2].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[2].timeReceived}}</span></div>
            </div>
         </div>
        </div>
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-200 text-sm rounded-lg">
            <p>{{chatOutgoing[3].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[3].timeSent}}</span> </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[3].received}}</p>
             <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[3].timeReceived}}</span></div>
          </div>
         </div>
        </div>
        <div id="chatmsg-DESKTOP"></div>
      </div>

      <div v-if="attachment" class="sticky bottom-11">
          <div class="w-full bg-white bg-opacity-100 flex justify-start pt-2">
            
            <div class="flex items-center">
              <input type="file" id="fileInput" accept=" .png .jpg .xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" style="display:none">
              <button id="attachFile" @click="attachFile" class=" w-8 bg-gray-100 ml-3 mb-2 focus:outline-none hover:bg-white hover:text-red-700 rounded-md">
              <span class="material-icons" style="font-size:22px">
                attachment</span>
              </button>
              <label id="file" class="text-sm font-semibold text-gray-500 pl-4 pb-1 pb-2">No file chosen yet</label>
            </div>
          </div>
      </div>
       
      <div class="pr-4 w-full absolute bottom-3 flex flex-cols justify-between items-center" style="min-width:400">
              <button class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white" @click="attachbtn" type="button">
               <span class="material-icons" id="attach">
                    {{attach}}</span>
              </button>
              <input type="text" class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full" placeholder="Type a message" id="typemsg-DESKTOP" />
              <button  @click="sendbtn" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                    send</span>
              </button>
      </div>

    </div><!--end of chat corner-->

    </div>
  </div>

  <!---MOBILE VERSION---->
<div class="mobileVersion">
  <div v-show="toggleChat">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen justify-center">
    <!---Chat Corner-->
      <div class="mt-20 shadow-md relative vsv:w-full vsvs:w-full x-v:w-full se:w-full vvs:w-full lvs:w-full vs:w-full ssm:w-full xsm:w-full sm:w-full mt-20 w-5/12 md:w-2/3">
        
        <div class="relative flex justify-items-center md:justify-items-center shadow py-3">
          <div class="flex flex-row justify-between">
            
            <div class="flex flex-row">

              <button id="backNavigator" class="focus:outline-none pl-5 hover:text-red-700" @click="backChat" type="button"><span class="material-icons pt-2" id="iMessage">
                  keyboard_backspace</span></button>

              <h4 class="text-base font-bold pt-2 pl-4 ">{{activeName}}</h4> 
              <span class="material-icons pl-3 pt-3" id="iCheck" > check_circle </span>
            </div>
            
            <div class="align-middle absolute right-2">
              <button v-if="toggle" class="absolute right-10 px-2 h-9 w-24 rounded bg-gray-100 border-solid border-2 border-gray-300 hover:text-red-700" id="delBtn-MOBILE" ><span class="font-semibold">Delete</span></button>
              <button @click="threedots" class="pt-1 mr-3 focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                  more_horiz</span></button>
            </div>
          </div>
        </div>

      <div class="overflow-auto overflow-x-hidden h-4/5" id="journal-scroll">

        <div v-if="ifHide" class="sticky top-0 p-3 flex justify items-center shadow-lg bg-white border">
            
            <!-- sent offer 1--->
            <div v-if ="toggle1" class="text-sm w-full">
              <div class="flex justify-between items-center">
                <span>You sent an offer to
                <span class="font-semibold ml-2">{{recipient}}</span>
                <span class="ml-2">for</span>
                <span class="font-semibold ml-2">Post {{postNum}} </span></span>
              
                <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

                <div class="flex justify-end pr-3">
                  <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Offer</span></button>
                  <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
                </div>
            </div><!------->

            <!-- sent request 1--->
            <div v-if ="toggle2" class="text-sm w-full">
              <div class="flex justify-between items-center">
                <span>You sent a request to
                <span class="font-semibold ml-2">{{recipient}}</span>
                <span class="ml-2">for</span>
                <span class="font-semibold ml-2">Post {{postNum}} </span></span>
              
                <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

                <div class="flex justify-end pr-3">
                  <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 rounded-full border border-gray-700 "><span>Cancel Request</span></button>
                  <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full bg-red-700 text-white"><span>View Post</span></button>
                </div>
            </div><!------->

            <!-- received offer 1--->
            <div v-if="toggle3" class="text-sm w-full">
              <div class="flex justify-between items-center">
              <span><span class="font-semibold mr-2 ">{{sender}}</span>sent you an offer
              <span class="ml-2">for your </span>
              <span class="font-semibold ml-2">Post {{postNum2}} </span></span>

              <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Decline</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Accept</span></button>
              </div>
            </div><!------->

            <!-- received request 1--->
            <div v-if="toggle4" class="text-sm w-full">
              <div class="flex justify-between items-center">
              <span><span class="font-semibold mr-2 ">{{sender}}</span>sent you a request
              <span class="ml-2">for your </span>
              <span class="font-semibold ml-2">Post {{postNum2}} </span></span>

              <button @click="vertiDots" class="w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button></div>

              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>Decline</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Accept</span></button>
              </div>
            </div><!------->

        <!--------------transaction details confirmed------>
            <div v-if="toggle5" class="text-sm w-full">
              <div class="flex flex-row justify-between">
                <span>Transaction <span class="font-semibold ml-2">{{postNum2 }} </span> </span>
                
                <div class="flex items-center">
                  <span class="rounded border h-6 border-blue-700 px-1">Confirmed</span>
                                   
                  <button @click="vertiDots" class="pt-1 w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button>
                </div>

              </div>
              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>View Details</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Update</span></button>
              </div>
            </div><!------------------->

            <!--------------transaction details cancelled------>
            <div v-if="toggle6" class="text-sm w-full">
              <div class="flex flex-row justify-between">
                <span>Transaction <span class="font-semibold ml-2">{{postNum2 }} </span> </span>
                
                <div class="flex items-center">
                  <span class="rounded border h-6 border-crimsonRed text-crimsonRed px-1">Cancelled</span>
                                   
                  <button @click="vertiDots" class="pt-1 w-5 focus:outline-none hover:text-red-700" type="button"><span class="material-icons" style="font-size:">
                  more_verti</span></button>
                </div>

              </div>
              <div class="flex justify-end pr-3">
                <button class=" mx-2 mt-2 h-7 px-2 hover:text-white hover:bg-gray-300 focus:outline-none rounded-full border border-gray-700 "><span>View Details</span></button>
                <button class="mx-2 mt-2 h-7 px-2 hover:bg-gray-300 rounded-full focus:outline-none bg-red-700 text-white"><span>Update</span></button>
              </div>
            </div><!------------------->

            <!-----vertical-dot  options--> 
            <div v-if="toggleVerti" id="vertiOPTIONS-MOBILE" class="absolute right-4 top-2 xl:fixed xl:top-36 xl:right-16  px-2 mr-4 bg-gray-200 w-2/5 shadow-inner rounded-lg border-solid border-2 border-white" style="width:220px">
                <div class="flex flex-col">
                    <div class="flex flex-row items-center">
                      <button @click="hideVertiOptions" class="w-full flex py-1 hover:bg-white hover:text-crimsonRed justify-start mt-2 border border-gray-300 rounded-lg">
                        <span class="material-icons pl-3" style="font-size:20px">visibility</span>
                        <span class="font-semibold pl-2 ">Hide</span>
                      </button>
                    </div> 
                  <div class="divide-y divide-gray-300">
                    <div class="flex flex-col pb-2">
                      <span class="pl-1 font-semibold py-1 text-gray-500 py-1 text-xs">Request(s)/Offers RECEIVED</span>
                      <button @click="active_transact('toggle1')" class="h-6 flex items-center rounded py-1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Offer #1</button>
                      <button @click="active_transact('toggle2')" class="h-6 flex items-center rounded py=1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Request #1</button>
                    </div>

                    <div class="flex flex-col pb-2">
                      <span class="pl-1 font-semibold text-gray-500 py-1 py-1 text-xs">Request(s)/Offers SENT</span>
                      <button @click="active_transact('toggle3')" class="h-6 flex items-center rounded py-1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Offer #1</button>
                      <button @click="active_transact('toggle4')" class="h-6 flex items-center rounded py=1 flex text-xs hover:bg-gray-400 hover:text-white justify-start pl-4 ">Request #1</button>
                    </div>

                    <div class="flex flex-col pb-2">
                      <span class="pl-1 font-semibold text-gray-500 py-1 py-1 text-xs">OTHER TRANSACTIONS</span>
                      <button @click="active_transact('toggle5')" class="h-6 flex items-center rounded py-1 flex text-xs hover:bg-gray-400 hover:text-white text-blue-500 justify-start pl-4 ">Tansactions #17</button>
                      <button @click="active_transact('toggle6')" class="h-6 flex items-center rounded py=1 flex text-xs hover:bg-gray-400 hover:text-white text-crimsonRed justify-start pl-4 ">Transactions #18</button>
                      <span class="pl-4 font-semibold italic text-gray-400 py-1 py-1 text-xs">No other transactions</span>
                    </div>
                  </div>

                  </div>
            </div><!-----end of transaction options--->

        </div><!------------------->

        <div class="p-2 flex justify-end">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 text-sm bg-gray-200 rounded-lg">
            <p>{{ chatOutgoing[0].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[0].timeSent}} </span> </div>
        </div>
        
        <div class=" flex justify-end mt-2">
          <div class="ml-32 bg-gray-100 text-sm rounded-lg">
            
            <div class="flex flex-col bg-gray-200 py-2 rounded-lg">
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>

              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1"> {{placeFrom}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">SM {{destination}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>

                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  

                </div>
              </div>

              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">{{shoppingListSize }}items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div><!----------------------------------------->
        <div class="p-1 ml-12">
         <div class="flex items-end pr-10 mt-1">
            <div class="flex flex-col bg-gray-100 py-2 rounded-lg">
              <div>
              <div class="mx-4 mb-2 text-sm font-semibold">
                <span>Order Details</span>
              </div>
              <div class="mx-4 pr-2 pt-3 pb-3 text-sm">
                <div class="flex flex-col px-2">
                  
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:18px">place</span>
                    <span class="pl-2 pb-1">{{placeFrom}}</span>
                  </div>
                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:18px">shopping_cart</span>
                    <span class="pl-2 pb-1">{{destination}}</span>
                  </div>
                  <div class="flex items-start">
                    <span class="text-red-700 material-icons" style="font-size:16px">watch_later</span>
                    <span class="pl-2 pb-1">{{timeAlloted}}</span>
                  </div>
                  <div class="flex items-start">
                    <span class=" text-red-700 material-icons" style="font-size:16px">payments</span>
                    <span class="pl-2">{{paymentMethod}}</span>
                  </div>
                  
                </div>
              </div>
              <div class="mx-4 p-2 bg-white rounded-lg text-sm">
                <div>
                  <span class="font-semibold">Shopping List<span class="ml-3 text-gray-500">8 items</span></span>
                </div>
                <div>
                    <ul class="text-gray-600 list-disc list-inside pl-4 ">
                      <li v-for="items in shoppingList" :key="items.ShoppingList">
                        <span>
                          {{ items.items}}
                        </span>
                      </li>
                    </ul>
                </div>
                <div></div>
              </div>
            </div>
            </div>
         </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8 "> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{ chatIncoming[0].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{ chatIncoming[0].timeReceived}}</span></div>
          </div>
         </div>
        </div>
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-200 text-sm rounded-lg">
            <p>{{chatOutgoing[1].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >{{chatOutgoing[1].timeSent}}</span> </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[1].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[1].timeReceived}}</span></div>
          </div>
         </div>
        </div>
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-200 text-sm rounded-lg">
            <p>{{chatOutgoing[2].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[2].timeSent}} </span> </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
            <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[2].received}}</p>
              <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[2].timeReceived}}</span></div>
            </div>
         </div>
        </div>
        <div class="p-2 flex justify-end ">
          <div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-200 text-sm rounded-lg">
            <p>{{chatOutgoing[3].sent}}</p>
            <span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" > {{chatOutgoing[3].timeSent}}</span> </div>
        </div>
        <div class="p-1 pl-2">
         <div class="flex items-end pr-10 mt-1"> 
           <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-8"> 
           <div class="rounded-lg ">
            <div class="ml-4 mr-10 p-3 bg-gray-100 text-sm rounded-lg">
              <p>{{chatIncoming[3].received}}</p>
             <span class="text-gray-500 pl-1" style="font-size: 10.5px;">{{chatIncoming[3].timeReceived}}</span></div>
          </div>
         </div>
        </div>
        <div id="chatmsg-MOBILE"></div>
      </div>

      <div v-if="attachment" class="sticky bottom-11">
          <div class="w-full bg-white bg-opacity-100 flex justify-start pt-2">
            
            <div class="flex items-center">
              <input type="file" id="fileInput" accept=" .png .jpg .xls,.xlsx, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.ms-excel" style="display:none">
              <button id="attachFile" @click="attachFile" class=" w-8 bg-gray-100 ml-3 mb-2 focus:outline-none hover:bg-white hover:text-red-700 rounded-md">
              <span class="material-icons" style="font-size:22px">
                attachment</span>
              </button>
              <label id="file" class="text-sm font-semibold text-gray-500 pl-4 pb-1 pb-2">No file chosen yet</label>
            </div>
          </div>
      </div>
       
      <div class="pr-4 w-full absolute bottom-3 flex flex-cols justify-between items-center" style="min-width:400">
              <button class="h-6 w-6 ml-4 mr-1 bg-gray-400 rounded-full focus:outline-none hover:text-white" @click="attachbtn" type="button">
               <span class="material-icons" id="attach">
                    {{attach}}</span>
              </button>
              <input type="text" class="w-10/12 h-8 flex pl-4 border focus:outline-none focus:ring-1 focus:ring-gray-400 rounded-full" placeholder="Type a message" id="typemsg-MOBILE" />
              <button  @click="sendbtn" class="w-8 h-8 flex items-center pl-1 rounded-full focus:outline-none hover:text-red-700" type="button"><span class="material-icons">
                    send</span>
              </button>
      </div>

    </div><!--end of right corner-->
    </div>
  </div><!-------------end chatbox------------->

  <div v-show="toggleInbox">
    <div class="bg-gray-50 flex h-full min-h-screen max-h-screen w-full justify-center pb-2">
      
      <!--Inbox Corner-->
        <div class="mt-20 shadow-md vsv:w-full vsvs:w-full x-v:w-full se:w-full vvs:w-full lvs:w-full vs:w-full ssm:w-full xsm:w-full sm:w-full mt-20 md:w-1/3 relative">
        
        <div id="msgheader" class="flex justify-items-center relative shadow pt-5 pb-1">
              <button class="focus:outline-none pl-5 hover:text-red-700" type="button"><span class="material-icons pt-1" id="iMessage">
                chat</span></button>
              <h4 class="text-base font-bold pl-4 ">Message</h4>   
        </div>

        <div v-if="searchMessageInactive" class="flex justify-center w-full relative py-1 mt-2 pt-2">
            <input type="text" class="h-8 w-11/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Search"/>
            <button  @click="searchBtn" class="align-middle absolute right-8 pt-1 h-7 focus:outline-none hover:text-red-700"><span class="material-icons" style="font-size:22px">
              search
              </span></button>
        </div><!---end of search bar-->

        <button v-if="showSearchResults" class="flex justify-center w-full relative py-1 mt-2 pt-2 focus:outline-none">
            <input type="text" class="h-8 w-10/12 pl-5 border font-normal text-sm focus:outline-none focus:ring-1 focus:ring-gray-300 rounded-full" placeholder="Mark" id="search"/>
            <button class="align-middle mt-1 ml-1 flex items-center h-6 w-6 rounded-full bg-gray-300 focus:outline-none hover:text-red-700">
              <span  @click="closeSearchResults" class="material-icons pl-1" style="font-size:17px">
              close
              </span></button>
        </button><!---end of search bar-->


        <div class="overflow-auto overflow-x-hidden px-0 py-1 h-4/5" id="scrollInbox">
            
          <div v-if="searchMessageInactive">
            <button @click ="active_convo('Mark Aral')" type="button" class="focus:bg-gray-200 relative w-full sm:pr-8 flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
              <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="mark"> {{ inbox[0].name}} <span class="material-icons pl-2" id="iCheck" style="font-size:14px" >
                  check_circle
                  </span></span> 
                  <span class="text-xs text-gray-400 truncate w-36 md:w-28 lvs:w-64 sm:w-64 ssm:w-24"> {{ inbox[0].message}}
                  </span> 
                </div>
              </div>
                <div class="flex flex-col items-start"> 
                  <span class="text-gray-700 text-xs">
                  <span class="font-bold pl-1 pr-1">·</span>{{ inbox[0].time}}</span>
                </div>
            </button>

            <button @click ="active_convo('Gwen Lopez')" type="button" class=" focus:bg-gray-200 relative w-full sm:pr-8 flex focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
              <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm" id="gwen">{{ inbox[1].name}}<span class="material-icons pl-2" id="iCheck" style="font-size:14px">
                  check_circle
                  </span></span> 
                  <span class="text-xs text-gray-400 truncate w-32 md:w-28 lvs:w-64 sm:w-64 ssm:w-24"> {{ inbox[1].message}}
                  </span> 
                  </div>
                </div>
                <div class="flex flex-col items-start"> 
                  <span class="text-gray-700 text-xs">
                  <span class="font-bold pl-1 pr-1">·</span>{{ inbox[1].time}}</span>
              </div>
            </button>             

          </div> <!---------------navigation message------------>

          <div v-if="showSearchResults" class="divide-y divide-gray-300">

            <div class="py-2 flex justify-center font-normal text-xs italic">
              <span>Search Results</span>
            </div>
            <div>
              <button @click ="Void" type="button" class="focus:bg-gray-200 relative w-full flex sm:pr-8 focus:outline-none justify-between items-center mt-2 p-2 hover:shadow-lg cursor-pointer transition">
                <div class="flex ml-2"> <img src="https://ptetutorials.com/images/user-profile.png" alt="sunil" class="rounded-lg h-8 w-7 pt-1"> 
                  <div class="flex flex-col justify-between items-start ml-2"> <span class="font-medium text-sm italic" id="mark"> <span class ="text-red-700">Mark</span> Aral <span class="material-icons pl-2" id="iCheck" >
                    check_circle
                    </span></span> 
                    <span class="text-xs text-gray-400 truncate md:w-28 w-36 lvs:w-64 sm:w-72 ssm:w-24"> {{ inbox[0].message}}
                    </span> 
                  </div>
                </div>
                  <div class="flex flex-col items-start"> 
                    <span class="text-gray-700 text-xs">
                    <span class="font-bold pl-1 pr-1">·</span>{{ inbox[0].time}}</span>
                  </div>
              </button>
            </div>
            
          </div> <!---------------search message results------------>
        </div>

    </div><!--end of left corner-->       
    </div>
  </div>
</div>

</template>

<script>
import $ from 'jquery'
import Navbar from './Navbar'

var file = '';

export default {
    components:{
      Navbar,
    },
    props:{
      //message: String 
    },
    data() {
      return{
        //buttons
          toggle:false,
          toggleInbox:true,
          toggleChat: false,
          toggleVerti:false,
          searchMessageInactive: true,
          showSearchResults: false,
          attachment:false,

          ifHide:true,
          toggle1:true,
          toggle2:false,
          toggle3:false,
          toggle4:false,
          toggle5:false,
          toggle6:false,
          toggle7:false,

          attach:'add',
          active:'toggle1',
        //inbox
          inbox: [
            { name: 'Mark Aral', message: 'No problem. Thanks as well for the handsome pay!', time: '21 mins'},
            { name: 'Gwen Lopez', message: 'No problem. Thanks as well for the handsome pay! No problem. Thanks as well for the handsome pay!', time: '21 mins'},
            
          ],
        //chat
          activeName: 'Mark Aral',
          chatIncoming: [
            { received: 'Yeah, sure! No problem. I am already on my way to SM City Legazpi.', timeReceived:'1:26 PM    |    Today'},
            { received: 'Sorry, it took me a while. I had to shop for three orders. Anyway, I am already in my car. I will deliver these two orders first here in Legazpi.', timeReceived:'2:40 PM    |    Today'},
            { received: 'I am two mins away from your house. ', timeReceived:'3:12 PM    |    Today'},
            { received: 'No problem. Thanks as well for the handsome pay!', timeReceived:'3:39 PM    |    Today'},
          ],
          chatOutgoing:[
            { sent: 'Do you think you can do it in time? I need it before 4 pm so I hope you can deliver it in time.', timeSent:'1:24 PM    |    Today'},
            { sent: 'Thank you so much! Let me know when you are on your way.', timeSent:'1:31 PM    |    Today'},
            { sent: 'No problem, chat me when you are near my house already', timeSent:'2:45 PM    |    Today'},
            { sent: 'Thanks for help', timeSent: '3:36  | Today'},
          ],
          //sent a request
          activity: 'You sent a request to to',
          recipient: 'Mark Aral',
          sender: 'Monica Rambeau',
          postNum: '#2021352',
          postNum2: '#130317',
          placeFrom: 'Banquerohan, Legazpi City',
          destination: 'SM City ',
          timeAlloted: 'Tomorrow, 5 PM',
          paymentMethod: 'Payment First via GCash transfer',
          //shoppingList
          shoppingList: [
            { items: 'Baking Soda'},
            { items: 'Choco Syrup'},
            { items: 'cocoa powder'},
            { items: 'flour 1 kg'},
            { items: 'brown sugar'},
            { items: 'cocoa powder'},
          ],
          shoppingListSize: 8,
      }
    },
    methods: {

      sendbtn(){
        const fileInputBtn = document.getElementById('fileInput');
        var printtext = document.getElementById('chatmsg-DESKTOP');
        var printtext2 = document.getElementById('chatmsg-MOBILE');
        var copytext = document.getElementById('typemsg-DESKTOP');
        var copytext2 = document.getElementById('typemsg-MOBILE');

        var copiedtext = copytext.value;
        var copiedtext2 = copytext2.value;
          
          if(copiedtext!=='' ){
          var printnow = '<div class="p-2 flex justify-end ">'+'<div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">'+copiedtext+'<span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >'+'<br>'+'3:45 PM'+' | '+'Today'+'</span>'+'</div> '
          printtext.insertAdjacentHTML('beforeend', printnow);
          document.getElementById('typemsg-DESKTOP').value = '';
          printtext2.insertAdjacentHTML('beforeend', printnow2);
          document.getElementById('typemsg-MOBILE').value = '';
        }
          if(copiedtext2!=='' ){
          var printnow2 = '<div class="p-2 flex justify-end ">'+'<div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">'+copiedtext+'<span class="time_date text-gray-500 pl-1" style="font-size: 10.5px;" >'+'<br>'+'3:45 PM'+' | '+'Today'+'</span>'+'</div> '
          printtext2.insertAdjacentHTML('beforeend', printnow2);
          document.getElementById('typemsg-MOBILE').value = '';
          printtext.insertAdjacentHTML('beforeend', printnow);
          document.getElementById('typemsg-DESKTOP').value = '';
        }


          if (fileInputBtn.value){
            //alert(file);
            var printFile = '<div class="p-2 flex justify-end ">'+'<div class="ml-32 pt-2 pl-4 pb-3 pr-4 bg-gray-100 text-sm rounded-lg">'+file+'</div> '  
            printtext.insertAdjacentHTML('beforeend', printFile);
            printtext2.insertAdjacentHTML('beforeend', printFile);

            document.getElementById('typemsg-MOBILE').value = '';
            document.getElementById('typemsg-DESKTOP').value = '';

            this.attachment = !this.attachment;
            if( this.attachment == true){
            document.getElementById("attach").innerHTML="close";
            } 
            else if(this.attachment ==false){
              document.getElementById("attach").innerHTML="add";
            }
          }//end if
        
        
      },//end sendbtn

      searchBtn(){
        this.showSearchResults=!this.showSearchResults;
        this.searchMessageInactive=!this.searchMessageInactive;
        document.getElementByID('search').value ='Mark';
      },

      alert(){
        alert('called');
      },

      closeSearchResults(){
        if(this.searchMessageInactive==false){
          this.searchMessageInactive=!this.searchMessageInactive;
          this.showSearchResults=!this.showSearchResults
        }
      },

      searchBackBtn(){
        this.showSearchResults=!this.showSearchResults;
        this.searchMessageInactive=!this.searchMessageInactive;
      },

      attachbtn(){
        this.attachment = !this.attachment;
        if( this.attachment == true){
          document.getElementById("attach").innerHTML="close";
          document.getElementById("attach2").innerHTML="close";
        } 
        else if(this.attachment ==false){
          document.getElementById("attach").innerHTML="add";
          document.getElementById("attach2").innerHTML="add";
        }
      },

      navigate(){
        this.toggleInbox=!this.toggleInbox;
        this.toggleChat=!this.toggleChat;

        var b = document.getElementById('mark');
        var bText = b.textContent;
        var bLen = bText.length;
        var res = bText.substring(0, bLen-13);
        document.getElementById("active").innerHTML = res;
      },

      active_convo(el){
        this.toggleInbox=!this.toggleInbox;
        this.toggleChat=!this.toggleChat;
        //console.log(el);
        this.activeName = el;
      },

      backChat(){
        this.toggleInbox=!this.toggleInbox;
        this.toggleChat=!this.toggleChat;
      },

      threedots(){
        this.toggle = !this.toggle;
      },//end threedots

      vertiDots(){
        this.toggleVerti = !this.toggleVerti;
      },//end funtion vertiDots

      attachPhoto(){
        const fileInputBtn = document.getElementById('photoInput');
        const fileholder = document.getElementById('photo');
        fileInputBtn.click();
        fileInputBtn.addEventListener("change", function(){
        if (fileInputBtn.value){
           fileholder.innerHTML = fileInputBtn.value;
        } else {
        fileholder.innerhtml = "";
        }
        })
      },

      attachFile(){
        const fileInputBtn = document.getElementById('fileInput');
        //const fileholder = document.getElementById('file');
        fileInputBtn.click();
        
        $(document).ready(function() {
            $('input[type="file"]').change(function(e) {
                var geekss = e.target.files[0].name;
                file = geekss;
                $("label").text(geekss);
                //alert(this.fileName);
            });
        })

      },

      hideVertiOptions(){
        this.ifHide = false;
      },

      showVertiOptions(){
        this.ifHide = true;
        console.log("called");
      },

      active_transact(e){
      
      if(this.active === 'toggle1')
          this.toggle1 = false;
      else if(this.active === 'toggle2')
          this.toggle2 = false
      else if(this.active === 'toggle3')
          this.toggle3 = false
      else if(this.active === 'toggle4')
          this.toggle4 = false
      else if(this.active === 'toggle5')
          this.toggle5 = false
      else if(this.active === 'toggle6')
          this.toggle6 = false
        
        switch(e) {
          case 'toggle1':
            {
              if(this.toggle1!==true){
                this.toggle1=!this.toggle1;
                this.active = 'toggle1';
              }
              break;
            }
          case 'toggle2':
            {
              if(this.toggle2!==true){
                this.toggle2=!this.toggle2;
                this.active ='toggle2'
              }
              break;
            }
          case 'toggle3':
            {
              if(this.toggle3!==true){
                this.toggle3=!this.toggle3;
                this.active ='toggle3'
              }
              break;
            }
          case 'toggle4':
            {
              if(this.toggle4!==true){
                this.toggle4=!this.toggle4;
                this.active ='toggle4'
              }
              break;
            }
          case 'toggle5':
            {
              if(this.toggle5!==true){
                this.toggle5=!this.toggle5;
                this.active ='toggle5'
              }
              break;
            }
          case 'toggle6':
            {
              if(this.toggle6!==true){
                this.toggle6=!this.toggle;
                this.active ='toggle6'
              }
              break;
            }
          default:
            this.toggle1=true;
        }//end switch

        
      }

    }//end methods
  }//end export default

$(document).mouseup(function(e){
    //desktop
    var delBtn = $("#delBtn");
    var vertiOPTIONS = $('#vertiOPTIONS');
    // If the target of the click isn't the container
    if(!delBtn.is(e.target) && delBtn.has(e.target).length === 0){
        delBtn.hide();
    }
    if(!vertiOPTIONS.is(e.target) && vertiOPTIONS.has(e.target).length === 0){
        vertiOPTIONS.hide();  
    }
    //mobile
    var delBtn_MOBILE = $("#delBtn-MOBILE");
    var vertiOPTIONS_MOBILE = $('#vertiOPTIONS-MOBILE');
    // If the target of the click isn't the container
    if(!delBtn_MOBILE.is(e.target) && delBtn_MOBILE.has(e.target).length === 0){
        delBtn_MOBILE.hide();
    }
    if(!vertiOPTIONS_MOBILE.is(e.target) && vertiOPTIONS_MOBILE.has(e.target).length === 0){
        vertiOPTIONS_MOBILE.hide();  
    }

    })


</script>
<style>
.hide{
    display: none;
}
#journal-scroll::-webkit-scrollbar {
    width: 3px;
    cursor: pointer;
  }
#journal-scroll::-webkit-scrollbar-track {
    background-color: rgba(229, 231, 235, var(--bg-opacity));
    cursor: pointer;
}
#scrollInbox::-webkit-scrollbar-thumb {
    cursor: pointer;
    background-color: rgba(185, 28, 28)
}
#scrollInbox::-webkit-scrollbar {
    width: 2px;
    cursor: pointer;
  }
#scrollInbox::-webkit-scrollbar-track {
    background-color: rgba(219,216,216, var(--bg-opacity));
    cursor: pointer;
}
#scrollInbox::-webkit-scrollbar-thumb {
    cursor: pointer;
    background-color: rgb(219, 216, 216)
}
/*minimized desktop version and mobile version
screen sizes lesser than 639px*/
.desktopVersion{
  display:none;
  }
.mobileVersion{
  display:inline;
}
#backNavigator{
  display:inline;
}
#msgheader{
  display:none;
  }
#vertiOPTIONS-MOBILE{
  box-shadow: 1px 1px 1px 1px #888888;
}

/*for screen sizes 639px++*/
@media only screen and (min-width: 639px) {
  .desktopVersion{
    display:inline;
    }
  .mobileVersion{
   display:none;
   }
   #backNavigator{
  display:none;
  }
  #msgheader{
  display:flex;
  }
}
#iCheck{
font-size:16px;
color:rgb(22, 22, 141);
}
#iMessage{
font-size:24px;
color:rgb(22, 22, 141);
}
.material-icons {
font-family: 'Material Icons';
font-weight: normal;
font-style: normal;
line-height: 1;
text-transform: none;
letter-spacing: normal;
word-wrap: normal;
white-space: nowrap;
direction: ltr;
/* Support for all WebKit browsers. */
-webkit-font-smoothing: antialiased;
/* Support for Safari and Chrome. */
text-rendering: optimizeLegibility;
/* Support for Firefox. */
-moz-osx-font-smoothing: grayscale;
/* Support for IE. */
font-feature-settings: 'liga';
}
</style>