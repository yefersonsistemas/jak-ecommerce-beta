import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/js/shipit template/components/Home.vue'
import Shop from '@/js/shipit template/components/Shop.vue'
import Product from '@/js/shipit template/components/Product.vue'
import Blog from '@/js/shipit template/components/Blog.vue'
import Post from '@/js/shipit template/components/Post.vue'
import Cart from '@/js/shipit template/components/Cart.vue'
import Layout from '@/js/shipit template/components/Layout.vue'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      component: Layout,
      children:[
        {
          path:'/',
          component:Home,
          name:'Home'
        },
        {
          path:'/shop',
          component:Shop,
          name:'Shop'
        },
        {
          path:'/product',
          component:Product,
          name:'Product'
        },
        {
          path:'/blog',
          component:Blog,
          name:'Blog'
        },
        {
          path:'/post',
          component:Post,
          name:'Post'
        },
        {
          path:'/cart',
          component:Cart,
          name:'Cart'
        }
      ]

    }
  ],
    mode:'history'
},

  )
