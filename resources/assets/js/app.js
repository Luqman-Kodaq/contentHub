
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example', require('./components/Example.vue'));

$(document).ready(function(){

 $('ul.drop-tab li.dropdown').hover(function(){

  $('.dropdown-menu', this).fadeIn();

 }, function(){

  $('.dropdown-menu', this).fadeOut('fast');

 });//Hover

});

const adminSlideButton = document.getElementById('admin-slideout-button')

adminSlideButton.onclick = function () {
  this.classList.toggle('active');
  document.getElementById('admin-side-menu').classList.toggle('active');
}

require('./manage')