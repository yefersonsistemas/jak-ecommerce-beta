<template>
  <v-app id="inspire" style="height: 0px;">
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
      >
        <!--      <v-app-bar-nav-icon @click.stop="drawer = !drawer" />-->

        <template v-slot:img="{ props }">
          <v-img v-bind="props" gradient="to top right, rgba(55,236,186,.7), rgba(25,32,72,.7)"></v-img>
        </template>

        <v-toolbar-title>
          <a href="/" class="white--text" style="text-decoration: none">
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
      </v-app-bar>
      <v-sheet
        id="scrolling-techniques-3"
        class="overflow-y-auto"
        max-height="600"
        style="padding-right: 20px"
      >
        <router-view />
      </v-sheet>
      <v-footer :padless="true">
        <v-card flat tile width="100%" class="secondary white--text text-center">
          <v-card-text class="white--text">asdasd</v-card-text>

          <v-card-text class="white--text pt-0">&nbsp;</v-card-text>
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
      activeBtn: 1
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
  },
  mounted() {
    //
  }
};
</script>
