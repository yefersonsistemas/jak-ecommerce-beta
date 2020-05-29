import Vue from 'vue'
import Router from 'vue-router'
import Home from '@shipit/components/Home'
import Shop from '@shipit/components/Shop'
import Product from '@shipit/components/Product'
import Blog from '@shipit/components/Blog'
import Post from '@shipit/components/Post'
import Cart from '@shipit/components/Cart'
import Layout from '@shipit/components/Layout'

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
