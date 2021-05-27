import { createRouter, createWebHistory } from 'vue-router'
import Home from '../views/Home.vue'
import login from '../views/login.vue'
import signup from '../views/signup.vue'
import address from '../views/address.vue'
import uploadid from '../views/uploadid.vue'
import verifymessage from '../views/verifymessage.vue'
import ProfileEdit from '../views/ProfileEdit.vue'
import dashboard from '../views/dashboard.vue'
import accountsettings from '../views/accountset.vue'
import deliver from '../views/deliver.vue'
import orders from '../views/orders.vue'
import messages from '../views/messaging.vue'
import search from '../views/Search.vue'
import forgotpassword from '../views/forgotpass.vue'
import forgotPassVerify from '../views/forgotPassVerify.vue'
import verifyemail from '../views/verifyemail.vue'
import Shopping_List from '../views/shopping_list.vue'
import Notifications from '../views/mobile_notification.vue'
import HelpCenter from '../views/helpCenter.vue'
import privacyPolicy from '../views/privacyPolicy.vue'
import TermsAndCondition from '../views/termsAndCon.vue'
import ReturnAndRefundPolicy from '../views/returnPolicy.vue'
import AboutUs from '../views/aboutUs.vue'
import Verification from '../views/verification.vue'
import VerifyPhone from '../views/verifyPhone.vue'
import SharedPostsSinglePage from '../views/SharedPostsSinglePage'
import ShoppingOfferSinglePage from '../views/ShoppingOfferSinglePage'
import OrderRequestSinglePage from '../views/OrderRequestSinglePage'
import SinglePostOrder from '../views/singlePostorder.vue'
import SinglePostDelivery from '../views/singlePostdelivery.vue'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home
  },

  {
    path: '/log-in',
    name: 'login',
    component: login
  },

  {
    path: '/sign-up',
    name: 'signup',
    component: signup
  },

  {
    path: '/address-book',
    name: 'address',
    component: address
  },

  {
    path: '/upload-id',
    name: 'uploadid',
    component: uploadid
  },

  {
    path: '/verification-message',
    name: 'verifymessage',
    component: verifymessage
  },

  {
    path: '/edit-profile',
    name: 'Profile',
    component: ProfileEdit
  },

  {
    path: '/dashboard',
    name: '',
    component: dashboard
  },

  {
    path: '/account-settings',
    name: 'accountsettings',
    component: accountsettings
  },

  {
    path: '/deliver',
    name: 'deliveries',
    component: deliver
  },

  {
    path: '/orders',
    name: 'orders',
    component: orders
  },

  {
    path: '/messages',
    name: 'messages',
    component: messages
  },

  {
    path: '/search',
    name: 'search',
    component: search
  },

  {
    path: '/forgot-password',
    name: 'forgotpassword',
    component: forgotpassword
  },

  
  {
    path: '/forgot-password-verify',
    name: 'forgotPassVerify',
    component: forgotPassVerify
  },

  {
    path: '/verify-email',
    name: 'verifyemail',
    component: verifyemail
  },

  {
    path: '/shopping-list',
    name: 'Shopping List',
    component: Shopping_List
  },

  {
    path: '/notification',
    name: 'Notification',
    component: Notifications
  },

  {
    path: '/help-center',
    name: 'HelpCenter',
    component: HelpCenter
  },
  
  {
    path: '/privacy-policy',
    name: 'privacyPolicy',
    component: privacyPolicy
  },


  {
    path: '/terms-and-condition',
    name: 'TermsAndCondition',
    component: TermsAndCondition
  },

  {
    path: '/return-and-refund-policy',
    name: 'ReturnAndRefundPolicy',
    component: ReturnAndRefundPolicy
  },
  {
    path: '/AboutUs',
    name: 'AboutUs',
    component: AboutUs
  },
   {
    path: '/Verification',
    name: 'Verification',
    component: Verification
  },
  {
    path: '/verifyPhone',
    name: 'VerifyPhone',
    component: VerifyPhone
  },
  {
    path: '/SharedPosts',
    name: 'SharedPostsSinglePage',
    component: SharedPostsSinglePage
  },
  {
    path: '/ShopOfferPosts',
    name: 'ShoppingOfferSinglePage',
    component: ShoppingOfferSinglePage
  },
  {
    path: '/OrderRequestPosts',
    name: 'OrderRequestSinglePage',
    component: OrderRequestSinglePage
  },
   {
    path: '/SinglePostOrder',
    name: '',
    component: SinglePostOrder
  },
  {
    path: '/SinglePostDelivery',
    name: '',
    component: SinglePostDelivery
  },

]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
