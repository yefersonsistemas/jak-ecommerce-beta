import Vue from 'vue'
import Router from 'vue-router'
import Home from '@/js/shipit template/components/Home'
import Shop from '@/js/shipit template/components/Shop'
import Product from '@/js/shipit template/components/Product'
import Blog from '@/js/shipit template/components/Blog'
import Post from '@/js/shipit template/components/Post'
import Cart from '@/js/shipit template/components/Cart'
import Layout from '@/js/shipit template/components/Layout'

Vue.use(Router)

export default new Router({
        routes: [{
            path: '/',
            component: Layout,
            children: [{
                    path: '/',
                    component: Home,
                    name: 'Home'
                },
                {
                    path: '/shop',
                    component: Shop,
                    name: 'Shop'
                },
                {
                    path: '/product',
                    component: Product,
                    name: 'Product'
                },
                {
                    path: '/blog',
                    component: Blog,
                    name: 'Blog'
                },
                {
                    path: '/about-us',
                    component: Post,
                    name: 'about-us'
                },
                {
                    path: '/cart',
                    component: Cart,
                    name: 'Cart'
                }
            ]

        }],
        mode: 'history'
    },

)
