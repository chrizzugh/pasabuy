<template>
  <Nav />
  <div
    class="flex flex-col w-full ssm:w-max xsm:w-max justify-center font-nunito"
  >
    <div
      class="w-6/12 2xl:block 2xl:mt-24 lg:block lg:mt-24 lg:w-6/12 xl:block xl:mt-24 justify-center self-center gap-y-5 mt-16 hidden"
    >
      <p class="text-2xl font-nunito font-bold uppercase">Deliveries</p>
    </div>
    <div
      class="mt-20 px-3 w-full flex flex-col pb-10 2xl:flex-row 2xl:px-0 2xl:mt-0 2xl:self-center 2xl:justify-items-center 2xl:items-center lg:flex-row lg:px-0 lg:self-center lg:justify-items-center lg:mt-0 xl:flex-row xl:px-0 xl:self-center xl:justify-items-center xl:mt-0 md:flex-row md:mt-24 md:pl-4 md:items-center sm:flex-row space-y-3 self-center 2xl:w-6/12 lg:w-6/12 xl:w-6/12 md:w-10/12 sm:w-max"
    >
      <div class="mt-3 mr-3">
        <button
          @click="isActive_function('btn1')"
          :class="{ active: activeBtn === 0 }"
          type="button"
          class="focus:outline-none text-red-700 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"
        >
          <a> All Deliveries</a>
        </button>
      </div>
      <div class="flex items-center gap-x-2">
        <button
          @click="isActive_function('btn2')"
          :class="{ active: activeBtn === 'btn2' }"
          type="button"
          class="focus:outline-none text-green-150 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"
        >
          <a>Complete</a>
        </button>
        <button
          @click="isActive_function('btn3')"
          :class="{ active: activeBtn === 'btn3' }"
          type="button"
          class="focus:outline-none text-blue-700 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"
        >
          <a>Confirmed</a>
        </button>
        <button
          @click="isActive_function('btn4')"
          :class="{ active: activeBtn === 'btn4' }"
          type="button"
          class="focus:outline-none text-yellow-600 px-3 py-1 shadow rounded-2xl bg-white w-full h-full"
        >
          <a>Cancelled</a>
        </button>
      </div>
    </div>
    <div
      class="p-5 w-full flex flex-col space-y-4 items-center 2xl:p-0 xl:p-0 lg:p-0"
    >
      <div
        v-for="delivery in allDeliveries" :key="delivery.indexTransactionPost"
        class="flex flex-col justify-center self-center 2xl:w-6/12 lg:w-6/12 xl:w-6/12 md:w-10/12 sm:w-10/12 w-full bg-white ring-1 ring-gray-300 p-5 rounded-2xl"
      >
        <div class="flex justify-between">
          <div class="flex flex-col gap-4">
            <span class="flex vs:flex-col gap-x-3">
              <p class="font-bold font-nunito">
                Transaction#{{ delivery.transactionNumber }}
              </p>
              <div>
                <p
                  v-if=" delivery.transactionStatus  == 'completed'"
                  class="text-center tracking-wider text-green-150 ring-1 ring-green-150 bg-white text-xs h-min w-18 self-center p-1 font-nunito font-bold"
                >
                  {{ delivery.transactionStatus }}
                </p>
                <p
                  v-else-if=" delivery.transactionStatus  == 'confirmed'"
                  class="text-center tracking-wider text-blue-700 ring-1 ring-blue-700 bg-gray-200 text-xs h-min w-18 self-center p-1 font-nunito font-bold"
                >
                  {{  delivery.transactionStatus  }}
                </p>
                <p
                  v-else
                  class="text-center tracking-wider text-yellow-600 bg-white ring-1 ring-yellow-600 text-xs h-min w-18 self-center p-1 font-nunito font-bold"
                >
                  {{  delivery.transactionStatus  }}
                </p>
              </div>
            </span>
            <span class="text-gray-500">Place on {{ timestamp(delivery.dateCreated) }}</span>
          </div>
          <div class="vs:flex-col vs:space-x-2" v-if="delivery.transactionStatus=='confirmed' && delivery.post.email != user.email"> 
              <span class="text-blue-600 font-bold cursor-pointer" @click="toggle_status=!toggle_status, setDataToSave(delivery.post.email,delivery.indexTransactionPost,delivery.postNumber)">Update</span>
           </div>
           <div class="vs:flex-col vs:space-x-2" v-else-if="delivery.transactionStatus=='confirmed'"> 
              <span class="text-blue-600 font-bold cursor-pointer" @click="toggle_status=!toggle_status, setDataToSave(delivery.transaction_sender.email,delivery.indexTransactionPost,delivery.postNumber)">Update</span>
           </div>
          </div>
           
   
        <div
          class="flex items-start gap-x-8 my-3 flex-col 2xl:items-center 2xl:flex-row xl:items-center xl:flex-row lg:items-center lg:flex-row md:flex-row"
        >
          <p class="uppercase font-semibold text-gray-500">Shopper:</p>
          <div class="flex gap-x-3 items-center space-x-3" v-if="delivery.post.email != user.email">
            <img
              class="w-8 h-8 border rounded-full border-gray-700 shadow-md"
              :src="delivery.post.user.profilePicture"
            /><!--Profile Pic-->
            <span class="flex flex-col">
              <p class="font-bold">{{ delivery.post.user.firstName }} {{ delivery.post.user.lastName }}</p>
              <!--name-->
              <span class="flex gap-x-1">
                <p class="font-bold text-gray-500 text-sm">{{ rate }}</p>
                <p class="material-icons text-sm text-red-700">star</p>
              </span>
            </span>
            <!--chat button-->
            <router-link :to="'/messages/?ID='+toEncrypt(delivery.post.email)"
              class="flex items-center gap-x-2 bg-green-150 rounded-2xl p-2"
            >
              <p class="material-icons text-white text-sm">chat</p>
              <p class="font-bold text-white text-sm">Chat Shopper</p>
            </router-link>
            <!--/chat button-->
          </div>
           <div class="flex gap-x-3 items-center space-x-3" v-else>
            <img
              class="w-8 h-8 border rounded-full border-gray-700 shadow-md"
              :src="delivery.transaction_sender.profilePicture"
            /><!--Profile Pic-->
            <span class="flex flex-col">
              <p class="font-bold">{{ delivery.transaction_sender.firstName }} {{ delivery.transaction_sender.lastName }}</p>
              <!--name-->
              <span class="flex gap-x-1">
                <p class="font-bold text-gray-500 text-sm">{{ rate }}</p>
                <p class="material-icons text-sm text-red-700">star</p>
              </span>
            </span>
            <!--chat button-->
            <router-link :to="'/messages/?ID='+toEncrypt(delivery.transaction_sender.email)"
              class="flex items-center gap-x-2 bg-green-150 rounded-2xl p-2"
            >
              <p class="material-icons text-white text-sm">chat</p>
              <p class="font-bold text-white text-sm">Chat Shopper</p>
            </router-link>
            <!--/chat button-->
          </div>
        </div>
        <div class="grid grid-cols-2 p-5 gap-y-4 text-sm">
          <div class="flex gap-2">
            <span class="material-icons text-red-600"> room </span>
            <p>{{delivery.transactionData.deliveryAddress}}</p>
          </div>
          <div class="flex gap-2">
            <span class="material-icons text-red-600"> watch_later </span>
            <p>{{timestampSched(delivery.transactionData.deliverySchedule)}}</p>
          </div>
          <div class="flex gap-2">
            <span class="material-icons text-red-600"> shopping_cart </span>
            <p>{{delivery.transactionData.shoppingPlace}}</p>
          </div>
          <div class="flex gap-2">
            <span class="material-icons text-red-600"> payments </span>
            <p>{{delivery.transactionData.paymentMethod}}</p>
          </div>
        </div>
        <div class="bg-gray-200 py-1 px-3 rounded-2xl" v-if=" delivery.transactionData.shopping_list !=null">
          <div class="flex text-sm sm: space-x-2">
            <p>Shopping List</p>
            <p class="text-gray-500">{{ delivery.transactionData.shopping_list.text.split(", ").length }}</p>
            <p v-if=" delivery.transactionData.shopping_list.text.split(', ') > 1" class="text-gray-500">items</p>
            <p v-else class="text-gray-500">item</p>
          </div>
          <ul
            id="example-1"
            class="list-disc text-sm list-inside grid grid-cols-2 p-5"
          >
            <li v-for="(item,index) in delivery.transactionData.shopping_list.text.split(', ')" :key="index">
              {{ item }}
            </li>
          </ul>
        </div>
          <div class="bg-gray-200 py-1 px-3 rounded-2xl" v-else>
          <div class="flex text-sm sm: space-x-2">
            <p>Shopping List</p>
            <p class="text-gray-500">{{ delivery.transactionData.shoppingList[0].text.split(', ').length }}</p>
            <p v-if="delivery.transactionData.shoppingList[0].text.split(', ').length > 1" class="text-gray-500">items</p>
            <p v-else class="text-gray-500">item</p>
          </div>
          <ul
            id="example-1"
            class="list-disc text-sm list-inside grid grid-cols-2 p-5"
          >
            <li v-for="(item,index) in delivery.transactionData.shoppingList[0].text.split(', ')" :key="index">
              {{ item }}
            </li>
          </ul>
        </div>
      </div>

      <div
        v-if="toggle_status"
        class="fixed inset-0 h-max bg-white bg-opacity-75"
      ></div>
      <div v-if="toggle_status" class="fixed overflow-y-auto inset-0">
        <div class="flex mt-4 w-full p-3 items-center justify-center py-20">
          <div
            class="bg-white ring-1 ring-gray-300 p-5 w-full rounded-xl 2xl:w-97 lg:w-97 xl:w-97 xl:mr-16 md:w-8/12 sm:w-10/12 shadow-2xl h-auto"
          >
            <div class="flex flex-row items-center justify-between p-3">
              <p class="hidden lg:block 2xl:block xl:block"></p>
              <p class="text-lg font-extrabold xl:ml-8 lg:ml-8 2xl:ml-8">
                Update Delivery Status
              </p>
              <p
                class="font-bold text-blue-700 cursor-pointer left-10"
                @click="toggle_status=false, userNotif=null,updatingTransaction=null, updatingPost=null"
                >
                Close
              </p>
            </div>
            <hr />
            <div class=" ">
              <div class="flex flex-col p-3 space-y-4">
                <span class="flex items-center space-x-2"
                  ><input id = "complete" type="radio" name="status" value="Completed" /><span
                    >Complete</span
                  ></span
                >
                <span class="flex items-center space-x-2"
                  ><input id = "cancel" type="radio" name="status" value="Cancelled" /><span
                    >Cancel</span
                  ></span
                >
              </div>
            </div>
            <div
              class="flex justify-between mt-4 px-5 text-2xlspace-x-4 items-center"
            >
              <button
                @click="updateStatus()"
                class="px-4 bg-red-buttons text-white focus:outline-none w-full h-7 shadow-xl ring-1 ring-gray-300 rounded-2xl"
              >
                Update
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
<script>
import Nav from "../views/Navbar.vue";
import store from "../store/index";
import moment from "moment";
import api from "../api";
import VueSimpleAlert from "vue-simple-alert";
export default {
  name: "Deliver",
  components: {
    Nav,
  },
  data() {
    return {
      togglef: false,
      toggle_status: false,
      activeBtn: 0,
      name: "Yamete",
      rate: "4.5",
      items: [{ list: "Pork" }, { list: "Pork" }],
      hide_selected: false,
      order_number: "1234",
      selected: "Confirmed",
      options: [
        { text: "Completed", value: "Completed" },
        { text: "Cancelled", value: "Cancalled" },
      ],
      allDeliveries: [],
      updatingTransaction: null,
      updatingPost: null,
      userNotif: null,
    };
  },
  methods: {
    isActive_function(el) {
      if (el == "btn4") {
        this.activeBtn = el;
        this.allDeliveries = this.deliveries.filter((x) => {
          return (
            x.transactionStatus == "cancelled" ||
            x.transactionStatus == "declined"
          );
        });
        console.log("cancelled ", this.allDeliveries);
      } else if (el == "btn3") {
        this.activeBtn = el;
        this.allDeliveries = this.deliveries.filter((x) => {
          return x.transactionStatus == "confirmed";
        });
        console.log("confirmed ", this.allDeliveries);
      } else if (el == "btn2") {
        this.activeBtn = el;
        this.allDeliveries = this.deliveries.filter((x) => {
          return x.transactionStatus == "completed";
        });
        console.log("completed ", this.allDeliveries);
      } else {
        this.activeBtn = 0;
        this.allDeliveries = this.deliveries;
      }
    },
    timestampSched(datetime) {
      var schedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = schedDate.getTime() - dateToday.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      console.log(dateDiff);
      if (dateDiff < 1 && dateDiff > 0)
        return moment(datetime).format("[Today at] h:mm a");
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Tommorow at] h:mm a");
      else return moment(datetime).format("[From] MMM DD, YYYY [at] h:mm a");
    },
    timestamp(datetime) {
      return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
    toEncrypt(val) {
      return btoa(val);
    },
    updateStatus() {
      var complete = document.getElementById("complete").checked;
      var cancel = document.getElementById("cancel").checked;
      if (complete) {
        api
          .post("api/updateTransaction", {
            userNotif: this.userNotif,
            status: "completed",
            ID: this.updatingTransaction,
            postNumber: this.updatingPost,
          })
          .then((res) => {
            store.dispatch("getUserTransactions").then(() => {
              this.toggle_status = false;
              this.updatingTransaction = null;
              this.updatingPost = null;
              this.allDeliveries = this.deliveries
              VueSimpleAlert.alert(res.data.message, "Sucess", "success");
            });
          })
          .catch((error) => {
            VueSimpleAlert.alert(error.response.data.error, "Error", "error");
          });
      } else if (cancel) {
        api
          .post("api/updateTransaction", {
            userNotif: this.userNotif,
            status: "cancelled",
            ID: this.updatingTransaction,
            postNumber: this.updatingPost,
          })
          .then((res) => {
            store.dispatch("getUserTransactions").then(() => {
              this.toggle_status = false;
              this.updatingTransaction = null;
              this.updatingPost = null;
              this.allDeliveries = this.deliveries
              VueSimpleAlert.alert(res.data.message, "Sucess", "success");
            });
          })
          .catch((error) => {
            VueSimpleAlert.alert(error.response.data.error, "Error", "error");
          });
      }
    },
    setDataToSave(email, indexTransactionPost, postNumber) {
      this.userNotif = email;
      this.updatingTransaction = indexTransactionPost;
      this.updatingPost = postNumber;
    },
  },
  mounted() {
    this.allDeliveries = this.deliveries;
    console.log("all deliveries ", this.allDeliveries);
  },
  computed: {
    user() {
      return store.getters.getUser;
    },
    deliveries() {
      return store.getters.getUserTransactions.filter((x) => {
        return (
          (x.post.postIdentity == "request_post" &&
            x.post.email != this.user.email) ||
          (x.post.postIdentity == "offer_post" &&
            x.post.email == this.user.email)
        );
      });
    },
  },
};
</script>
<style scoped>
.active {
  background-color: currentColor;
}
.active a {
  color: white;
}
</style>
