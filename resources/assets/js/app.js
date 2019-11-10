
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


// import VueRouter from 'vue-router'
// Vue.use(VueRouter)

// let routes = [
//     { path: '/map', component: require('./components/Map.vue') }
//   ]


//   const router = new VueRouter({
//     routes // short for `routes: routes`
//   });
////////////////////////////////////////////////////
import VueFlip from 'vue-flip';

Vue.use(VueFlip);

//  am refrencing something

import * as VueGoogleMaps from 'vue2-google-maps'

Vue.use(VueGoogleMaps, {
    load: {
      key: 'AIzaSyCl8RM3J8LDQ-gztvWqtOeODCrrcql0NmU',
    //   libraries: 'places', // This is required if you use the Autocomplete plugin
      // OR: libraries: 'places,drawing'
      // OR: libraries: 'places,drawing,visualization'
      // (as you require)
   
      //// If you want to set the version, you can do so:
      // v: '3.26',
    },
   
    //// If you intend to programmatically custom event listener code
    //// (e.g. `this.$refs.gmap.$on('zoom_changed', someFunc)`)
    //// instead of going through Vue templates (e.g. `<GmapMap @zoom_changed="someFunc">`)
    //// you might need to turn this on.
    // autobindAllEvents: false,
   
    //// If you want to manually install components, e.g.
    //// import {GmapMarker} from 'vue2-google-maps/src/components/marker'
    //// Vue.component('GmapMarker', GmapMarker)
    //// then disable the following:
    // installComponents: true,
  });





/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('chat-app', require('./components/ChatApp.vue'));
Vue.component('maps', require('./components/Map.vue'));
Vue.component('maps-google', require('./components/MapsGoogle.vue'));
Vue.component('maps-feed', require('./components/MapsFeed.vue'));
Vue.component('google-map', VueGoogleMaps.Map);

Vue.component('ground-overlay', VueGoogleMaps.MapElementFactory({
    mappedProps: {
      'opacity': {}
    },
    props: {
      'source': {type: String},
      'bounds': {type: Object},
    },
    events: ['click', 'dblclick'],
    name: 'groundOverlay',
    ctr: () => google.maps.GroundOverlay,
    ctrArgs: (options, {source, bounds}) => [source, bounds, options],
  }));

  Vue.component('vue-flip', VueFlip);

const app = new Vue({
    el: '#app',
    // router
});

