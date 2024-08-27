<template>
    <form action="#">
        <h3>Рассчитать стоимость аренды:</h3>

        <div class="rent_start_param" >
            <p>Сутки: {{ $props.base }} руб.</p>
            <p>Залог: {{ $props.zalog }} руб.</p>
        </div>

        <div class="field">
            <label class="label">Дней аренды:</label>
            <div class="control">
                <input @change="calcFinalPrice" name="rentDay" min="1" value="3" v-model="rentDay" class="input" type="number" placeholder="">
            </div>
        </div>

        <p class="final_price"><strong>Сумма {{ finalSumm }} р.</strong></p>

        <div class="field">
            <label class="label">Телефон для связи:</label>
            <div class="control">
                <input v-model="phone" name="phoneNum" class="input" type="tel" placeholder="+ 7 (000) 000-00-00">
            </div>
        </div>

        <div class="control_wrapper">
            <button @click.prevent="sendRentProduct" type="submit" class="button">Взять в аренду</button>

            <svg v-show="sendProces" class="sprite_icon loader_icon">
                <use xlink:href="#loader"></use>
            </svg>
        </div>

    </form>
</template>

<script setup>
import { ref } from 'vue';


const props = defineProps({
  product: String,
  zalog: Number,
  base: Number,
  sales: Array,
})

let finalSumm = ref(0)
let rentDay = ref(3)

let phone = ref('')

let sendProces = ref(false);

const calcFinalPrice = () =>  {
    finalSumm.value = 0;
    for (let i = 0; i<rentDay.value; i++) {
        let index = (i<props.sales.length)?i:props.sales.length

        finalSumm.value += props.base - ((props.base / 100) * props.sales[index].sale)
    }

    console.log(props.sales)
}

const sendRentProduct = () => {
    sendProces.value = true
    axios.post('/send_rent', {
            'product': props.product,
            'phone': phone.value
        })
        .then(() => {
            sendProces.value = false
        })
        .catch((error) => {
            console.log(error)
            sendProces.value = false
        });
}


calcFinalPrice()

</script>
