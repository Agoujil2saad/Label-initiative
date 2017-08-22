import Vue from 'vue';
import VueRouter from 'vue-router';

// Make sure vue is using the router
Vue.use(VueRouter);


// Initialize VueRouter
export default new VueRouter({
     mode: 'history', 
     routes:[
    {
      path:'/deposer',
      name: 'step1',
      component: resolve => require(['./pages/step1.vue'], resolve)
    },
      {
    path:'/step2',
    name: 'create',
    component: resolve => require(['./pages/step2.vue'], resolve)
  }

  ]
});