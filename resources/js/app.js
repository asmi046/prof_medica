import './bootstrap';

import SideMenu from './menues.js';
let side_menue = new SideMenu('#main_side_menue', '.show_menue_button')

import { register } from 'swiper/element/bundle';
register();

const headerBorder = document.querySelector('header.header')
window.addEventListener('scroll', function(e){
    if(document.documentElement.scrollTop > 10){
        headerBorder.classList.add('sclolled')
    }  else {
        headerBorder.classList.remove('sclolled')
    }
});


import BayPanel from "./components/BayPanel.vue"
import RentPanel from "./components/RentPanel.vue"
import {createApp} from 'vue/dist/vue.esm-bundler';

if (document.getElementById('bay_panel')) {
    const bay_panel = createApp({
        components:{
            BayPanel
        },

        setup() {}
    })

    bay_panel.mount("#bay_panel");
}



if (document.getElementById('rent_panel')) {
    const rent_panel = createApp({
        components:{
            RentPanel
        },

        setup() {}
    })

    rent_panel.mount("#rent_panel");
}
