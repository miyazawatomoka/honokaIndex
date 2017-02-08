import Vue from 'vue'
import Router from 'vue-router'
import Hello from 'components/Hello'
import Setting from 'components/Setting'
import Index from 'components/Index'
import Password from 'components/Setting/Password'
import Profile from 'components/Setting/Profile'
import Statistics from 'components/Setting/Statistics'
import RecongizeNew from 'components/recongize/New'
import RecongizeUpdate from 'components/recongize/Update'
import RecongizeUploaded from 'components/recongize/Uploaded'
Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: 'Index',
      component: Index
    },
    {
      path: '/setting',
      name: 'Setting',
      component: Setting,
      children: [
        {
          path: "profile",
          component: Profile
        },
        {
          path: "password",
          component: Password
        },
        {
          path: "statistics",
          component: Statistics
        }
      ]
    },
    {
      path: '/recongize/new',
      component: RecongizeNew
    },
    {
      path: '/recongize/update',
      component: RecongizeUpdate
    },
    {
      path: '/recongize/uploaded',
      component: RecongizeUploaded
    }
  ]
})
