<template>
    <div>
        <v-container>
            <p class="display-3 font-weight-light	text-center pa-4">
                {{ aboutusDATA.title }}
            </p>
            <p class="overline text-center">
                {{ aboutusDATA.slogan }}
            </p>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <v-img
                        class="white--text align-end"
                        height="400px"
                        :src="aboutusDATA.imgFirstBanner"
                    ></v-img>
                    <p class="display-1 mb-0 pt-5">
                        {{ aboutusDATA.titleFirstPost }}
                    </p>
                    <p class="pt-5 subtitle-1 font-weight-light">
                        {{ aboutusDATA.contentFirstPost }}
                    </p>
                    <v-img
                        class="white--text align-end"
                        height="400px"
                        :src="aboutusDATA.imgSecondBanner"
                    ></v-img>
                    <p class="display-1 mb-0 pt-5">
                        {{ aboutusDATA.titleSecondPost }}
                    </p>
                    <p class="subtitle-1 font-weight-light pt-5">
                        {{ aboutusDATA.contentSecondPost }}
                    </p>
                </div>
            </div>
        </v-container>
    </div>
</template>
<script>
import { mapState, mapActions } from "vuex";
export default {
    data: () => ({}),
    computed: {
        ...mapState(["aboutusDATA"])
    },
    methods: {
        ...mapActions(["getAboutus"])
    },
    created() {
        this.getAboutus();
    }
};
</script>
