<template>
    <v-app id="inspire" class="overflow-hidden">
        <v-app-bar
            fixed
            color="teal darken-1"
            dark
            shrink-on-scroll
            prominent
            src="https://picsum.photos/1920/1080?random"
            fade-img-on-scroll
            scroll-threshold="500"
        >
            <template v-slot:img="{ props }">
                <v-img
                    v-bind="props"
                    gradient="to top right, rgba(55,236,186,.7), rgba(25,32,72,.7)"
                ></v-img>
            </template>
            <v-toolbar-title style="margin-left: 5%">
                <a href="/" class="white--text" style="text-decoration: none">
                    &nbsp;{{ WebData.shortName }}
                </a>
            </v-toolbar-title>
            <v-spacer />

            <a
                href="/"
                class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default"
                icon
            >
                <v-icon>mdi-home-outline</v-icon>
            </a>
            <a
                href="/search"
                class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default"
                icon
            >
                <v-icon>mdi-magnify</v-icon>
            </a>
            <a
                href="/about-us"
                class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default"
                icon
            >
                <v-icon>mdi-information-outline</v-icon>
            </a>
            <v-btn icon @click.stop="drawer = !drawer">
                <v-icon>mdi-cart-outline</v-icon>
            </v-btn>
        </v-app-bar>
        <v-content style="margin-top: 128px;">
            <router-view />
        </v-content>
        <v-footer :padless="true">
            <v-card
                flat
                tile
                width="100%"
                class="secondary white--text text-center "
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
                    </v-btn>
                </v-card-text>
                <v-divider></v-divider>
                <v-card-text class="white--text">
                    {{ new Date().getFullYear() }} —
                    <strong>{{ WebData.name }}</strong>
                </v-card-text>
            </v-card>
        </v-footer>
        <v-navigation-drawer
            width="45%"
            right
            v-model="drawer"
            absolute
            fixed
            class="m-height"
            temporary
        >
            <v-list-item>
                <v-list-item-icon @click.stop="drawer = !drawer">
                    <v-icon>mdi-close</v-icon>
                </v-list-item-icon>
                <v-list-item-content>
                    <v-list-item-title>
                        Cart
                    </v-list-item-title>
                </v-list-item-content>
                <v-list-item-icon @click.stop="drawer = !drawer">
                    <v-icon>mdi-cart-outline</v-icon>
                </v-list-item-icon>
            </v-list-item>

            <v-divider></v-divider>

            <v-list two-line dense>
                <v-list-item v-for="item in items" :key="item.title" link>
                    <v-list-item-content>
                        <v-list-item-title>
                            {{ item.title }}
                        </v-list-item-title>
                        <v-list-item-subtitle>35.5$</v-list-item-subtitle>
                    </v-list-item-content>
                    <v-list-item-icon>
                        <v-icon>mdi-cart-remove</v-icon>
                    </v-list-item-icon>
                </v-list-item>
            </v-list>
            <template v-slot:append>
                <v-divider></v-divider>
                <div class="pa-2">
                    <v-list-item>
                        <v-list-item-content>
                            <v-list-item-title>
                                TOTAL: 5000$
                            </v-list-item-title>
                        </v-list-item-content>
                        <v-list-item-icon @click.stop="drawer = !drawer">
                            <v-icon>mdi-cart-arrow-down</v-icon>
                        </v-list-item-icon>
                    </v-list-item>
                </div>
            </template>
        </v-navigation-drawer>
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
            drawer: null,
            items: [
                { title: "Home", icon: "mdi-facebook" },
                { title: "About", icon: "mdi-facebook" }
            ]
        };
    },
    computed: {
        ...mapState(["WebData"])
    },
    methods: {
        ...mapActions(["getWebData"])
    },
    created() {
        this.getWebData();
    }
};
</script>
<style>
.m-height {
    max-height: 100vmin;
}
</style>
