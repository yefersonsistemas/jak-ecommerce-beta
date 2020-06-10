// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import Vuex from 'vuex'
import vuetify from '@shipit/plugins/vuetify' // path to vuetify export
import router from "@shipit/router";
import App from "@shipit/App";
import Axios from 'axios'
// import 'material-design-icons-iconfont/dist/material-design-icons.css'

Vue.use(Vuex)

const store = new Vuex.Store({
    state: {
        sendAddToCart: false,
        WebData: {},
        productData: {},
        shopItem: {},
        productSearch: {},
        offertProduct: [],
        homeData: {},
        productSearchHome: {},
        aboutusDATA: [],
        cartData: [],
    },
    mutations: {
        setWebData(state, objectWebData) {
            state.WebData = objectWebData
        },
        setProductData(state, objectProductData) {
            state.productData = objectProductData
        },
        setProductSearch(state, objectProductSearch) {
            state.productSearch = objectProductSearch
        },
        setProductSearchHome(state, objectProductSearchHome) {
            state.productSearchHome = objectProductSearchHome
        },
        setShopItem(state, objectShopData) {
            state.shopItem = objectShopData
        },
        setOffertProduct(state, objectOffertProduct) {
            state.offertProduct = objectOffertProduct
        },
        setHomeData(state, objectHomeData) {
            state.homeData = objectHomeData
        },
        setAboutus(state, objectAboutus) {
            state.aboutusDATA = objectAboutus
        },
        setCartProduct(state, objectProductCart) {
            state.cartData = objectProductCart
        },
    },
    actions: {
        async getWebData({
            commit
        }) {
            await Axios.post("/getWebData").then(response => {
                commit('setWebData', response.data)
            })
        },
        async getShopItem({
            commit
        }) {
            await Axios.post("/getShopItem").then(response => {
                commit('setShopItem', response.data)
            })
        },
        async getProductData({
            commit
        }, $productCode) {
            await Axios.post("/getProductData", {
                productCode: $productCode
            }).then(response => {
                commit('setProductData', response.data)
            })
        },
        async getProductSearch({
            commit
        }) {
            await Axios.post("/getProductSearch").then(response => {
                commit('setProductSearch', response.data)
            })
        },
        async getProductSearchHome({
            commit
        }) {
            await Axios.post("/getProductSearchHome").then(response => {
                commit('setProductSearchHome', response.data)
            })
        },
        async getOffertProduct({
            commit
        }) {
            await Axios.post("/getOffertProduct").then(response => {
                commit('setOffertProduct', response.data)
            })
        },
        async getHomeData({
            commit
        }) {
            await Axios.post("/getHomeData").then(response => {
                commit('setHomeData', response.data)
            })
        },
        async getAboutus({
            commit
        }) {
            await Axios.post("/getAboutus").then(response => {
                commit('setAboutus', response.data)
            })
        },
        async getProductsCart({
            commit
        }) {

            await Axios.post("/getProductsCart").then(response => {
                commit('setCartProduct', response.data)
            })

        },
        addToCart({
            commit
        }, [productsCode, quantity]) {
            this.state.sendAddToCart = true
            Axios.post("/addProdutToCart", {
                productsCode: productsCode,
                quantity: quantity
            }).then(response => {
                this.state.sendAddToCart = false
                store.dispatch('getProductsCart')
            })

        },

        removeToCart({
            commit
        }, productsCode) {
            this.state.sendAddToCart = true
            Axios.post("/removeProdutToCart", {
                productsCode: productsCode
            }).then(response => {
                this.state.sendAddToCart = false
                store.dispatch('getProductsCart')
            })

        },
    }
})

/* eslint-disable no-new */
new Vue({
    el: '#app',
    router,
    vuetify,
    store,
    components: {
        App
    },
    template: '<App/>'
})
