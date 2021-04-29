<template>
  <Nav />

  <div class="w-full pt-24 px-4">
    <!--notification 1-->
    <!-- <div v-for="(notif, index) in allNotifications" :key="index">
      <div
        class="block items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === sharedNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.sharerPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.sharer }} </span>
          <span class="font-semibold"> has shared your order </span><br />
          <router-link
            :to="'/orders/?postnum=' + notif.data.postNumber"
            class="font-bold text-blue-500"
            >View Order
          </router-link>
          <span class="text-xs text-gray-500">
            {{ timestamp(notif.created_at) }}</span
          >
        </p>
      </div> -->
       <div v-for="(notif, index) in allNotifications" :key="index">
      <div
       class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === sharedNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.sharerPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.sharer }} </span>
          <span class="font-semibold"> has shared your order </span><br />
          <router-link
            :to="'/orders/?postnum=' + notif.data.postNumber"
            class="font-bold text-blue-500"
            >View Order
          </router-link>
          <span class="text-xs text-gray-500">
            {{ timestamp(notif.created_at) }}</span
          >
        </p>
      </div>
      <!--notification 2-->
      <div
        class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === cancelledRequestNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.cancellerPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.canceller }}</span>
          <span class="font-semibold">
            has cancelled their Request to your post</span
          ><br />
          <router-link
            :to="'/orders/?postnum=' + notif.data.postNumber"
            class="font-bold text-blue-500"
            >View Order
          </router-link>
          <span class="text-xs text-gray-500">
            {{ timestamp(notif.created_at) }}</span
          >
        </p>
      </div>
      <!--notification 3-->
      <div
        class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === declinedRequestNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.declinerPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.decliner }}</span>
          <span class="font-semibold"> has declined your offer</span><br />
          <router-link
            :to="'/orders/?postnum=' + notif.data.postNumber"
            class="font-bold text-blue-500"
            >View Order
          </router-link>
          <span class="text-xs text-gray-500">
            {{ timestamp(notif.created_at) }}</span
          >
        </p>
      </div>
      <div
        class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === acceptRequestNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.accepterPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.accepter }}</span>
          <span class="font-semibold"> has accepted your offer</span><br />
          <router-link
            :to="'/orders/?postnum=' + notif.data.postNumber"
            class="font-bold text-blue-500"
            >View Order
          </router-link>
          <span class="text-xs text-gray-500">
            {{ timestamp(notif.created_at) }}</span
          >
        </p>
      </div>
      <div
        class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === updateRequestNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.updaterPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.updater }}</span>
          <span class="font-semibold">
            has {{ notif.data.status }} your order</span
          ><br />
          <router-link
            :to="'/orders/?postnum=' + notif.data.postNumber"
            class="font-bold text-blue-500"
            >View Order
          </router-link>
          <span class="text-xs text-gray-500"> {{ timestamp(notif.created_at) }}</span>
        </p>
      </div>
      <div
        class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
       v-if="notif.type === postStatusNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.userPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.user }}</span>
          <span class="font-semibold">
           has changed their post status to {{ notif.data.status }}r</span
          ><br />
           <router-link
          :to="'/orders/?postnum=' + notif.data.postNumber"
          class="font-bold text-blue-500"
          >View Order</router-link>
          <span class="text-xs text-gray-500">  {{ timestamp(notif.created_at) }}</span>
        </p>
      </div>
      <div
        class="flex items-start px-4 py-3 -mx-2 border-b hover:bg-gray-100"
        v-if="notif.type === followNotif"
      >
        <img
          class="object-cover w-10 h-10 mx-1 rounded-full"
          :src="notif.data.followerPic"
          alt="avatar"
        />
        <p class="pl-1 mx-2 text-sm text-gray-800">
          <span class="font-bold" href="#">{{ notif.data.follower }}</span>
          <span class="font-semibold">
          started following you</span
          ><br />
          <span class="text-xs text-gray-500"> {{ timestamp(notif.created_at) }}</span>
        </p>
      </div>
    </div>
  </div>
</template>
<script>
import Nav from "./Navbar.vue";
import moment from "moment";
import store from "../store/index";
export default {
  components:{
    Nav,
  },
  data() {
    return {
      sharedNotif: "App\\Notifications\\SharedNotification",
      cancelledRequestNotif: "App\\Notifications\\cancelledRequestNotification",
      declinedRequestNotif: "App\\Notifications\\declinedRequestNotification",
      acceptRequestNotif: "App\\Notifications\\confirmRequestNotification",
      updateRequestNotif: "App\\Notifications\\UpdateRequestNotification",
      postStatusNotif: "App\\Notifications\\postStatusNotification",
      followNotif: "App\\Notifications\\followNotification",
    };
  },
  methods: {
    timestamp(datetime) {
      var postedDate = new Date(datetime);
      var dateToday = new Date();
      var dateDiff = dateToday.getTime() - postedDate.getTime();
      dateDiff = dateDiff / (1000 * 3600 * 24);
      if (dateDiff < 1) return moment(datetime).format("[Today at] h:mm a");
      else if (dateDiff >= 1 && dateDiff < 2)
        return moment(datetime).format("[Yesterday at] h:mm a");
      else return moment(datetime).format("MMM DD, YYYY [at] h:mm a");
    },
  },
  computed: {
    allNotifications() {
      return store.getters.getAllNotif;
    },
  },
};
</script>