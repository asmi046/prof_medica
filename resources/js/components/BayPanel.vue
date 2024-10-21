<template>
    <form action="#">
        <h3>Запрос на покупку:</h3>
        <div class="rent_start_param" >
            <p>Цена: <strong>{{ $props.price }}</strong> руб.</p>
        </div>

        <div class="field">
            <label class="label">Необходимое количество:</label>
            <div class="control">
                <input  name="tovarCount" min="1" v-model="tovarCount" class="input" type="number" placeholder="">
            </div>
        </div>

        <div class="field">
            <label class="label">Телефон для связи:</label>
            <div class="control">
                <input v-model="phone" ref="el" name="phoneNum" class="input" type="tel" placeholder="+ 7 (000) 000-00-00">
            </div>
        </div>

        <div class="control_wrapper">
            <button @click.prevent="sendBayProduct" type="submit" class="button">Отправить запрос</button>

            <svg v-show="sendProces" class="sprite_icon loader_icon">
                <use xlink:href="#loader"></use>
            </svg>
        </div>

    </form>
</template>

<script setup>
import { ref } from 'vue';
import { useIMask } from 'vue-imask';

const props = defineProps({
  product: String,
  price: Number,
})

const { el, masked } = useIMask({
        mask: '+{7} (000) 000-00-00',
      }
);

let tovarCount = ref(1);

let phone = ref('')

let sendProces = ref(false);

const sendBayProduct = () => {
    sendProces.value = true
    axios.post('/send_bay', {
            'product': props.product,
            'count': tovarCount.value,
            'phone': phone.value
        })
        .then(() => {
            sendProces.value = false
            document.location.href = "/thencs_consult"
        })
        .catch((error) => {
            console.log(error)
            sendProces.value = false
        });
}

</script>
