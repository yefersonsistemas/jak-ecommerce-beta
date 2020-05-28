<template>
    <v-app id="inspire">
        <v-card class="overflow-hidden">
            <v-app-bar
                :clipped-left="$vuetify.breakpoint.lgAndUp"
                color="teal darken-1"
                dark
                shrink-on-scroll
                prominent
                src="https://picsum.photos/1920/1080?random"
                fade-img-on-scroll
                scroll-target="#scrolling-techniques-3"
                app
            >
                <template v-slot:img="{ props }">
                    <v-img
                        v-bind="props"
                        gradient="to top right, rgba(55,236,186,.7), rgba(25,32,72,.7)"
                    ></v-img>
                </template>

                <v-toolbar-title>
                    <a
                        href="/"
                        class="white--text"
                        style="text-decoration: none"
                    >
                        <v-icon>mdi-truck</v-icon>
                        &nbsp;{{ WebData.shortName }}
                    </a>
                </v-toolbar-title>
                <v-spacer />

                <a
                    href="/"
                    class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default"
                    icon
                >
                    <v-icon>mdi-home</v-icon>
                </a>
                <a
                    href="/shop"
                    class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default"
                    icon
                >
                    <v-icon>mdi-magnify</v-icon>
                </a>
                <a
                    href="/"
                    class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default"
                    icon
                >
                    <v-icon>mdi-information-outline</v-icon>
                </a>
                <v-btn icon @click.stop="drawer = !drawer">
                    <v-icon>mdi-cart</v-icon>
                </v-btn>
            </v-app-bar>
            <v-content>
                <v-sheet
                    id="scrolling-techniques-3"
                    class="overflow-y-auto"
                    :max-height="windowsHeight"
                    style="padding-right: 20px"
                >
                    <router-view />
                </v-sheet>
            </v-content>
            <v-navigation-drawer right v-model="drawer" absolute temporary>
                <v-list-item>
                    <v-list-item-content>
                        <v-list-item-title
                            ><v-btn icon @click.stop="drawer = !drawer">
                                <v-icon>mdi-close</v-icon> </v-btn
                            >Cart
                        </v-list-item-title>
                        <v-spacer></v-spacer>
                    </v-list-item-content>
                </v-list-item>

                <v-divider></v-divider>

                <v-list dense>
                    <v-list-item v-for="item in items" :key="item.title" link>
                        <v-list-item-icon>
                            <v-icon>{{ item.icon }}</v-icon>
                        </v-list-item-icon>

                        <v-list-item-content>
                            <v-list-item-title>{{
                                item.title
                            }}</v-list-item-title>
                        </v-list-item-content>
                    </v-list-item>
                </v-list>
            </v-navigation-drawer>
            <v-footer :padless="true">
                <v-card
                    flat
                    tile
                    width="100%"
                    class="secondary white--text text-center"
                >
                    <v-card-text class="white--text">
                        <v-btn
                            v-for="icon in icons"
                            :key="icon"
                            class="mx-4"
                            dark
                            icon
                        >
                            <v-icon size="24px">{{ icon }}</v-icon>
                        </v-btn></v-card-text
                    >
                    <v-divider></v-divider>
                    <v-card-text class="white--text">
                        {{ new Date().getFullYear() }} —
                        <strong>{{ WebData.name }}</strong>
                    </v-card-text>
                </v-card>
            </v-footer>
        </v-card>
    </v-app>
</template>
<script>
import { mapState, mapMutations, mapActions } from "vuex";
export default {
    data() {
        return {
            activeBtn: 1,
            icons: [
                "mdi-facebook",
                "mdi-twitter",
                "mdi-linkedin",
                "mdi-instagram"
            ],
            windowsHeight: 0,
            drawer: null,
            items: [
                { title: "Home", icon: "mdi-dashboard" },
                { title: "About", icon: "mdi-question-answer" }
            ]
        };
    },
    computed: {
        ...mapState(["WebData", "shopItem"])
    },
    methods: {
        ...mapMutations(["setWebData"]),
        ...mapActions(["getWebData", "getShopItem"])
    },
    created() {
        this.getShopItem();
        this.getWebData();
        this.windowsHeight = window.innerHeight - 175;
    },
    mounted() {
        //
    }
};
</script>
