<template>
    <div class="bg-gray- pt-6 font-nunito">
        <div id="helpCreateAcc" class="items-center flex justify-center w-full mt-9 pb-16 px-3 ">
            <div class="overflow-hidden font-bold  w-full rounded-xl divide-y divide-gray-400 divide-solid">
                <div class="pb-1">
                    <h1 class="space-x-1 space-y-1 text-xl">Your Order Cancellation Rights</h1>
                </div> 
                <div class="pt-2">
                <!----sub section 1---->
                    <div class="w-full text-align-left justify">
                                <p class="justify">You are entitled to cancel Your Order within 7 days without giving any reason for doing so.</p>

                                <p class="justify">The deadline for cancelling an Order is 7 days from the date on which You received the Goods or on which a third party you have appointed, 
                                    who is not the carrier, takes possession of the product delivered.</p>
                                     
                                <p class="justify">In order to exercise Your right of cancellation, You must inform Us of your decision by means of a clear statement. 
                                    You can inform us of your decision by:</p>
                                    <a><li>By email: kristoferbalang.alcantara@bicol-u.edu.ph</li></a>

                                <p>We will reimburse You no later than 14 days from the day on which We receive the returned Goods. We will use the same means of payment as 
                                    You used for the Order, and You will not incur any fees for such reimbursement.</p>

                    </div>
                </div>
            </div><!----->
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
</style>
<script>
export default {
    data(){  
        return{
            isOpen: false,
            isOpen1: false,
            isOpen2: false,
            isOpen3: false,
            show: false,
        }
    },
    
    created: function () {
        document.body.style.backgroundColor = "rgb(235,235,235)";
  },
}
</script>