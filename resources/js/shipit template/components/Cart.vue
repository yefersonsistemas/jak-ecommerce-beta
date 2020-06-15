<template>
    <div>
        <v-container>
            <p class="display-3 font-weight-light	text-center pa-4">
                SHOPPING CART
            </p>
            <v-row>
                <v-col :cols="12" md="9" sm="12">
                    <v-simple-table>
                        <template v-slot:default>
                            <thead>
                                <tr>
                                    <th class="text-center">ITEM</th>
                                    <th class="text-center">PRICE</th>
                                    <th class="text-center">QUANTITY</th>
                                    <th class="text-center">TOTAL</th>
                                    <th class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr
                                    :key="item.code"
                                    v-for="item in cartData.itemCart"
                                >
                                    <td>
                                        <v-list-item>
                                            <v-list-item-content>
                                                <v-list-item-title>{{
                                                    item.name
                                                }}</v-list-item-title>
                                            </v-list-item-content>
                                        </v-list-item>
                                    </td>
                                    <td>${{ item.price }}</td>
                                    <td>
                                        <v-text-field
                                            class="pt-10"
                                            label="Outlined"
                                            style="width: 80px;"
                                            single-line
                                            outlined
                                            v-model="item.quantity"
                                            disabled
                                        ></v-text-field>
                                    </td>
                                    <td>${{ item.fullprice }}</td>
                                    <td>
                                        <a @click="removeToCart(item.code)"
                                            >X</a
                                        >
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                </v-col>
                <v-col
                    :cols="12"
                    md="3"
                    sm="12"
                    style="background-color: lightgray"
                >
                    <p class="headline">Order Summary</p>
                    <p class="overline">
                        Shipping and additional costs are calculated based on
                        values you have entered.
                    </p>
                    <v-simple-table>
                        <template v-slot:default>
                            <tbody>
                                <tr>
                                    <td>Total</td>
                                    <td class="text-right" style="width: 50px;">
                                        <b>${{ cartData.totalPrice }}</b>
                                    </td>
                                </tr>
                            </tbody>
                        </template>
                    </v-simple-table>
                    <div class="text-center">
                        <v-btn class="primary white--text mt-5" outlined
                            >PROCEED TO PAY</v-btn
                        >
                    </div>
                </v-col>
            </v-row>
        </v-container>
    </div>
</template>
<script>
import { mapState, mapActions } from "vuex";
export default {
    data: () => ({}),
    computed: {
        ...mapState(["cartData"])
    },
    methods: {
        ...mapActions(["removeToCart"])
    }
};
</script>
