/*global $, alert, console*/
import mixitup from 'mixitup';
$(function () {
    'use strict';
    //Adjust slider hieght
    var winH = $(window).height(),
        navbarH = $(window).height() / 5;
    $('.carousel, .carousel-item').height(winH);
    
    var lo =document.querySelector('#container')
var mixer = mixitup(lo);
});