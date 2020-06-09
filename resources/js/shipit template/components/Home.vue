<template>
    <div>
        <v-carousel hide-delimiters>
            <v-carousel-item
                :key="item.id"
                v-for="item in homeData.banners"
                :src="item.imgSrc"
            >
            </v-carousel-item>
        </v-carousel>
        <div class="pl-4 pr-4 row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <v-card>
                    <v-img
                        :src="homeData.topPicks.src"
                        class="white--text align-center"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                        height="400px"
                    >
                        <h1 class="text-center font-size">Top Picks</h1>
                        <div class="text-center">
                            <v-btn
                                href="/search/Top-Pick"
                                class="white--text"
                                outlined
                                >SHOP NOW</v-btn
                            >
                        </div>
                    </v-img>
                </v-card>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <v-card>
                    <v-img
                        :src="homeData.newArrivals.src"
                        class="white--text align-center"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                        height="400px"
                    >
                        <h1 class="text-center font-size">New Arrivals</h1>
                        <div class="text-center">
                            <v-btn
                                href="/search/New-Arrivals"
                                class="white--text"
                                outlined
                                >SHOP NOW</v-btn
                            >
                        </div>
                    </v-img>
                </v-card>
            </div>
        </div>
        <div class="pl-4 pr-4 row">
            <div
                class="col-md-4 col-sm-4 col-xs-12"
                v-for="pro in homeData.productsCategory"
            >
                <v-card outlined>
                    <v-img
                        :src="pro.images"
                        class="white--text align-center"
                        gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                        height="300px"
                    >
                        <h1 class="text-center font-size">{{ pro.type }}</h1>
                        <div class="text-center mt-2">
                            <v-btn
                                class="white--text caption"
                                :href="'/product/' + pro.code"
                                text
                            >
                                SHOP NOW
                                <v-icon class="white--text caption"
                                    >mdi-arrow-right</v-icon
                                >
                            </v-btn>
                        </div>
                    </v-img>
                </v-card>
            </div>
        </div>
        <v-container>
            <v-row no-gutters>
                <v-col :cols="12">
                    <v-card-text class tile outlined>
                        <v-card-title class="subheading"
                            >Deals of the Day</v-card-title
                        >
                        <v-divider></v-divider>
                        <div class="row">
                            <div
                                class="col-12 col-md-3 col-sm-6 col-xs-6 text-center"
                            >
                                <v-hover
                                    v-slot:default="{ hover }"
                                    open-delay="200"
                                >
                                    <v-card :elevation="hover ? 16 : 2">
                                        <v-img
                                            class="white--text align-end"
                                            height="200px"
                                            :src="
                                                require('../assets/img/home/deal1.jpg')
                                            "
                                        >
                                            <v-card-title
                                                >Bags & Purses</v-card-title
                                            >
                                        </v-img>

                                        <v-card-text
                                            class="text--primary text-center"
                                        >
                                            <div>Upto 60% + Extra 10%</div>
                                            <div>Baggit, Zara, Fossil</div>
                                        </v-card-text>

                                        <div class="text-center">
                                            <v-btn
                                                href="/shop"
                                                class="ma-2"
                                                outlined
                                                color="info"
                                                >Explore</v-btn
                                            >
                                        </div>
                                    </v-card>
                                </v-hover>
                            </div>
                            <div
                                class="col-12 col-md-3 col-sm-6 col-xs-6 text-center"
                            >
                                <v-hover
                                    v-slot:default="{ hover }"
                                    open-delay="200"
                                >
                                    <v-card :elevation="hover ? 16 : 2">
                                        <v-img
                                            class="white--text align-end"
                                            height="200px"
                                            :src="
                                                require('../assets/img/home/deal2.jpg')
                                            "
                                        >
                                            <v-card-title>T-Shirt</v-card-title>
                                        </v-img>

                                        <v-card-text
                                            class="text--primary text-center"
                                        >
                                            <div>Upto 50%</div>
                                            <div>Zara, Selected, Celio</div>
                                        </v-card-text>

                                        <div class="text-center">
                                            <v-btn
                                                href="/shop"
                                                class="ma-2"
                                                outlined
                                                color="info"
                                                >Explore</v-btn
                                            >
                                        </div>
                                    </v-card>
                                </v-hover>
                            </div>
                            <div
                                class="col-12 col-md-3 col-sm-6 col-xs-6 text-center"
                            >
                                <v-hover
                                    v-slot:default="{ hover }"
                                    open-delay="200"
                                >
                                    <v-card :elevation="hover ? 16 : 2">
                                        <v-img
                                            class="white--text align-end"
                                            height="200px"
                                            :src="
                                                require('../assets/img/home/deal3.jpg')
                                            "
                                        >
                                            <v-card-title>Jeans</v-card-title>
                                        </v-img>

                                        <v-card-text
                                            class="text--primary text-center"
                                        >
                                            <div>Upto 60% + Extra 10%</div>
                                            <div>Jack & Jones, Levis</div>
                                        </v-card-text>

                                        <div class="text-center">
                                            <v-btn
                                                href="/shop"
                                                class="ma-2"
                                                outlined
                                                color="info"
                                                >Explore</v-btn
                                            >
                                        </div>
                                    </v-card>
                                </v-hover>
                            </div>
                            <div
                                class="col-12 col-md-3 col-sm-6 col-xs-6 text-center"
                            >
                                <v-hover
                                    v-slot:default="{ hover }"
                                    open-delay="200"
                                >
                                    <v-card :elevation="hover ? 16 : 2">
                                        <v-img
                                            class="white--text align-end"
                                            height="200px"
                                            :src="
                                                require('../assets/img/home/deal4.jpg')
                                            "
                                        >
                                            <v-card-title>Shoes</v-card-title>
                                        </v-img>

                                        <v-card-text
                                            class="text--primary text-center"
                                        >
                                            <div>Upto 60% + Extra 10%</div>
                                            <div>Nike, Adidas, Puma</div>
                                        </v-card-text>

                                        <div class="text-center">
                                            <v-btn
                                                href="/shop"
                                                class="ma-2"
                                                outlined
                                                color="info"
                                                >Explore</v-btn
                                            >
                                        </div>
                                    </v-card>
                                </v-hover>
                            </div>
                        </div>
                    </v-card-text>
                </v-col>
            </v-row>
        </v-container>
        <v-card class="accent"></v-card>
    </div>
</template>

<script>
import { mapState, mapMutations, mapActions } from "vuex";
export default {
    data() {
        return {
            items: [
                { title: "Click Me" },
                { title: "Click Me" },
                { title: "Click Me" },
                { title: "Click Me 2" }
            ],
            activeBtn: 1,
            colors: [
                "indigo",
                "warning",
                "pink darken-2",
                "red lighten-1",
                "deep-purple accent-4"
            ],
            slides: ["First", "Second", "Third", "Fourth", "Fifth"]
        };
    },
    computed: {
        ...mapState(["homeData", "productSearchHome"])
    },
    methods: {
        ...mapActions(["getHomeData", "getProductSearchHome"])
    },
    created() {
        this.getHomeData();
    }
};
</script>
<style>
.v-card--reveal {
    align-items: center;
    bottom: 0;
    justify-content: center;
    opacity: 0.5;
    position: absolute;
    width: 100%;
}
</style>
