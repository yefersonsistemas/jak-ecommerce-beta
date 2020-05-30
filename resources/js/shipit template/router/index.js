import Vue from 'vue'
import Router from 'vue-router'
import Home from '@shipit/components/Home'
import search from '@shipit/components/search'
import Product from '@shipit/components/Product'
import Blog from '@shipit/components/Blog'
import about_us from '@shipit/components/about-us'
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
                    path: '/search',
                    component: search,
                    name: 'search'
                },
                {
                    path: '/product',
                    component: Product,
                    name: 'ProductNoExist'
                },
                {
                    path: '/product/:codeProduct',
                    component: Product,
                    props: true,
                    name: 'Product'
                },
                {
                    path: '/blog',
                    component: Blog,
                    name: 'Blog'
                },
                {
                    path: '/about-us',
                    component: about_us,
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
