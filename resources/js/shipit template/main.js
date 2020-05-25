// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuex from 'vuex'
import vuetify from '@/js/shipit template/plugins/vuetify' // path to vuetify export
import router from '@/js/shipit template/router'
import App from '@/js/shipit template/App.vue'
import Axios from 'axios'
// import 'material-design-icons-iconfont/dist/material-design-icons.css'

Vue.use(Vuex)

const store = new Vuex.Store({
  state: {
    WebData:{},
    productData:{},
  },
  mutations: {
    setWebData(state,objectWebData)
    {
      state.WebData = objectWebData
    },
    setProductData(state,objectProductData)
    {
      state.productData = objectProductData
    }
  },
  actions:{
    async getWebData ({commit})
    {
      await Axios.post("/getWebData").then(response => 
        {
          commit('setWebData', response.data)
        })
    },
    async getProductData ({commit})
    {
      await Axios.post("/getProductData").then(response => 
        {
          commit('setProductData', response.data)
        })
    }
  }
})

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  vuetify,
  store,
  components: { App },
  template: '<App/>'
})
