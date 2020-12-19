@extends('layouts.app')
@section('content')
<html>
  <head>
    <style>
      #art-main
      {
        background: #fff ;
        margin:0 auto;
        font-size: 12px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: justify;
        position: relative;
        width: 100%;
        min-height: 100%;
        left: 0;
        top: 0;
        cursor:default;
        overflow:hidden;
      }
      table, ul.art-hmenu
      {
        font-size: 12px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: justify;
      }
      h1, h2, h3, h4, h5, h6, p, a, ul, ol, li
      {
        margin: 0;
        padding: 0;
      }
      /* Reset buttons border. It's important for input and button tags. 
      * border-collapse should be separate for shadow in IE. 
      */
      .art-button
      {
        border-collapse: separate;
        -webkit-background-origin: border !important;
        -moz-background-origin: border !important;
        background-origin: border-box !important;
        background: #FFFFFF;
        background: linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        background: -webkit-linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        background: -moz-linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        background: -o-linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        background: -ms-linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        background: linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        -svg-background: linear-gradient(top, #FFFFFF 0, #D1D1D1 100%) no-repeat;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        -webkit-box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        -moz-box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        border:1px solid #BABABA;
        padding:0 25px;
        margin:0 auto;
        height:28px;
      }
      .art-postcontent,
      .art-postheadericons,
      .art-postfootericons,
      .art-blockcontent,
      ul.art-vmenu a 
      {
        text-align: left;
      }
      .art-postcontent,
      .art-postcontent li,
      .art-postcontent table,
      .art-postcontent a,
      .art-postcontent a:link,
      .art-postcontent a:visited,
      .art-postcontent a.visited,
      .art-postcontent a:hover,
      .art-postcontent a.hovered
      {
        font-family: arial;
      }
      .art-postcontent p
      {
        margin: 12px 0;
        padding-right: 15px;
      }
      .art-postcontent h1, .art-postcontent h1 a, .art-postcontent h1 a:link, .art-postcontent h1 a:visited, .art-postcontent h1 a:hover,
      .art-postcontent h2, .art-postcontent h2 a, .art-postcontent h2 a:link, .art-postcontent h2 a:visited, .art-postcontent h2 a:hover,
      .art-postcontent h3, .art-postcontent h3 a, .art-postcontent h3 a:link, .art-postcontent h3 a:visited, .art-postcontent h3 a:hover,
      .art-postcontent h4, .art-postcontent h4 a, .art-postcontent h4 a:link, .art-postcontent h4 a:visited, .art-postcontent h4 a:hover,
      .art-postcontent h5, .art-postcontent h5 a, .art-postcontent h5 a:link, .art-postcontent h5 a:visited, .art-postcontent h5 a:hover,
      .art-postcontent h6, .art-postcontent h6 a, .art-postcontent h6 a:link, .art-postcontent h6 a:visited, .art-postcontent h6 a:hover,
      .art-blockheader .t, .art-blockheader .t a, .art-blockheader .t a:link, .art-blockheader .t a:visited, .art-blockheader .t a:hover,
      .art-vmenublockheader .t, .art-vmenublockheader .t a, .art-vmenublockheader .t a:link, .art-vmenublockheader .t a:visited, .art-vmenublockheader .t a:hover,
      .art-headline, .art-headline a, .art-headline a:link, .art-headline a:visited, .art-headline a:hover,
      .art-slogan, .art-slogan a, .art-slogan a:link, .art-slogan a:visited, .art-slogan a:hover,
      .art-postheader, .art-postheader a, .art-postheader a:link, .art-postheader a:visited, .art-postheader a:hover
      {
        font-size: 28px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent a, .art-postcontent a:link
      {
        font-family: arial;
        text-decoration: underline;
        color: #D26565;
      }
      .art-postcontent a:visited, .art-postcontent a.visited
      {
        font-family: arial;
        text-decoration: underline;
        color: #808080;
      }
      .art-postcontent  a:hover, .art-postcontent a.hover
      {
        font-family: arial;
        text-decoration: none;
        color: #424242;
      }
      .art-postcontent h1
      {
        color: #fff;
        margin: 20px 0 10px;
        font-size: 23px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
        background-image: url('images/h1.png');
        background-position: center top;
        background-repeat: no-repeat;
        width: 300px;
        padding: 3px 0px 3px 15px;
      }
      .art-blockcontent h1
      {
        margin: 20px 0 10px;
        font-size: 28px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h1 a, .art-postcontent h1 a:link, .art-postcontent h1 a:hover, .art-postcontent h1 a:visited, .art-blockcontent h1 a, .art-blockcontent h1 a:link, .art-blockcontent h1 a:hover, .art-blockcontent h1 a:visited 
      {
        font-size: 28px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h2
      {
        color: #808080;
        margin: 10px 0 0;
        font-size: 20px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: center;
        border: 1px solid #D4D4D4;
        padding: 5px;
      }
      .art-blockcontent h2
      {
        margin: 10px 0 0;
        font-size: 20px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h2 a, .art-postcontent h2 a:link, .art-postcontent h2 a:hover, .art-postcontent h2 a:visited, .art-blockcontent h2 a, .art-blockcontent h2 a:link, .art-blockcontent h2 a:hover, .art-blockcontent h2 a:visited 
      {
        font-size: 20px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h3
      {
        color: #9C9C9C;
        margin: 20px 0 0;
        font-size: 18px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-blockcontent h3
      {
        margin: 20px 0 0;
        font-size: 18px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h3 a, .art-postcontent h3 a:link, .art-postcontent h3 a:hover, .art-postcontent h3 a:visited, .art-blockcontent h3 a, .art-blockcontent h3 a:link, .art-blockcontent h3 a:hover, .art-blockcontent h3 a:visited 
      {
        font-size: 18px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h4
      {
        color: #292929;
        font-size: 16px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-blockcontent h4
      {
        font-size: 16px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h4 a, .art-postcontent h4 a:link, .art-postcontent h4 a:hover, .art-postcontent h4 a:visited, .art-blockcontent h4 a, .art-blockcontent h4 a:link, .art-blockcontent h4 a:hover, .art-blockcontent h4 a:visited 
      {
        font-size: 16px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h5
      {
        color: #292929;
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-blockcontent h5
      {
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h5 a, .art-postcontent h5 a:link, .art-postcontent h5 a:hover, .art-postcontent h5 a:visited, .art-blockcontent h5 a, .art-blockcontent h5 a:link, .art-blockcontent h5 a:hover, .art-blockcontent h5 a:visited 
      {
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h6
      {
        color: #616161;
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-blockcontent h6
      {
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      .art-postcontent h6 a, .art-postcontent h6 a:link, .art-postcontent h6 a:hover, .art-postcontent h6 a:visited, .art-blockcontent h6 a, .art-blockcontent h6 a:link, .art-blockcontent h6 a:hover, .art-blockcontent h6 a:visited 
      {
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
      }
      header, footer, article, nav, #art-hmenu-bg, .art-sheet, .art-hmenu a, .art-vmenu a, .art-slidenavigator > a, .art-checkbox:before, .art-radiobutton:before
      {
        -webkit-background-origin: border !important;
        -moz-background-origin: border !important;
        background-origin: border-box !important;
      }
      header, footer, article, nav, #art-hmenu-bg, .art-sheet, .art-slidenavigator > a, .art-checkbox:before, .art-radiobutton:before
      {
        display: block;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      ul
      {
        list-style-type: none;
      }
      ol
      {
        list-style-position: inside;
      }
      html, body
      {
        height: 100%;
      }
      body
      {
        padding: 0;
        margin:0;
        min-width: 1000px;
        color: #696969;
      }
      .clearfix:before, .clearfix:after {
        content: "";
        display: table;
      }
      .clearfix:after {
        clear: both;
      }
      .cleared {
        font: 0/0 serif;
        clear: both;
      }
      form
      {
        padding: 0 !important;
        margin: 0 !important;
      }
      table.position
      {
        position: relative;
        width: 100%;
        table-layout: fixed;
      }
      li h1, .art-postcontent li h1, .art-blockcontent li h1 
      {
        margin:1px;
      }
      li h2, .art-postcontent li h2, .art-blockcontent li h2 
      {
        margin:1px;
      }
      li h3, .art-postcontent li h3, .art-blockcontent li h3 
      {
        margin:1px;
      }
      li h4, .art-postcontent li h4, .art-blockcontent li h4 
      {
        margin:1px;
      }
      li h5, .art-postcontent li h5, .art-blockcontent li h5 
      {
        margin:1px;
      }
      li h6, .art-postcontent li h6, .art-blockcontent li h6 
      {
        margin:1px;
      }
      li p, .art-postcontent li p, .art-blockcontent li p 
      {
        margin:1px;
      }
      .art-shapes
      {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        overflow: hidden;
        z-index: 0;
      }
      .art-slider-inner {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 100%;
      }
      .art-slidenavigator > a {
        display: inline-block;
        vertical-align: middle;
        outline-style: none;
        font-size: 1px;
      }
      .art-slidenavigator > a:last-child {
        margin-right: 0 !important;
      }
      .art-headline
      {
        display: inline-block;
        position: absolute;
        min-width: 50px;
        top: 144px;
        left: 0%;
        line-height: 100%;
        margin-left: -1px !important;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
        z-index: 99;
        left: 25px;
        top: 16px;
      }
      .art-headline, 
      .art-headline a, 
      .art-headline a:link, 
      .art-headline a:visited, 
      .art-headline a:hover
      {
        font-size: 40px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-decoration: none;
        text-align: left;
        text-shadow: 2.1px 2.1px 1px #848484;
        padding: 0;
        margin: 0;
        color: #FF33F5 !important;
        white-space: nowrap;
      }
      .art-slogan
      {
        display: inline-block;
        position: absolute;
        min-width: 50px;
        top: 172px;
        left: 29.48%;
        line-height: 100%;
        margin-left: -57px !important;
        -webkit-transform: rotate(0deg);
        -moz-transform: rotate(0deg);
        -o-transform: rotate(0deg);
        -ms-transform: rotate(0deg);
        transform: rotate(0deg);
        z-index: 99;
        white-space: nowrap;
      }
      .art-slogan, 
      .art-slogan a, 
      .art-slogan a:link, 
      .art-slogan a:visited, 
      .art-slogan a:hover
      {
        font-size: 14px;
        font-family: arial;
        font-weight: bold;
        font-style: normal;
        text-align: left;
        padding: 0;
        margin: 0;
        color: #fff    !important;
        left: 85px;
        top: 55px;
      }
      .art-nav
      {
        background: #454545;
        background: linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        background: -webkit-linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        background: -moz-linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        background: -o-linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        background: -ms-linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        background: linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        -svg-background: linear-gradient(top, #FFECCC 0px, #FFB83D     100%) no-repeat;
        margin:0 auto;
        position: relative;
        z-index: 100;
        font-size: 0;
        padding-left: 350px;
        box-shadow: 0px 0px 3px #7A7A7A;
        height: 80px;
        width: 1000px;
        box-shadow: 0px -0px 3px 2px rgba(0, 0, 0, 0.35);
      }
      ul.art-hmenu a, ul.art-hmenu a:link, ul.art-hmenu a:visited, ul.art-hmenu a:hover 
      {
        outline: none;
        position: relative;
        z-index: 11;
      }
      ul.art-hmenu, ul.art-hmenu ul
      {
        display: block;
        margin: 0;
        padding: 0;
        border: 0;
        list-style-type: none;
      }
      ul.art-hmenu li
      {
        position: relative;
        z-index: 5;
        display: block;
        float: left;
        background: none;
        margin: 0;
        padding: 0;
        border: 0;
      }
      ul.art-hmenu li:hover
      {
        z-index: 10000;
        white-space: normal;
      }
      ul.art-hmenu:after, ul.art-hmenu ul:after
      {
        content: ".";
        height: 0;
        display: block;
        visibility: hidden;
        overflow: hidden;
        clear: both;
      }
      ul.art-hmenu, ul.art-hmenu ul 
      {
        min-height: 0;
      }
      ul.art-hmenu 
      {
        display: inline-block;
        vertical-align: bottom;
        padding-left: 0;
        padding-right: 0;
      }
      .art-nav-inner:before 
      {
        content:' ';
      }
      .art-nav-inner{
        text-align: left;
        margin:0 auto;
      }
      .desktop-nav .art-nav-inner{
        width: 1000px;
        padding-left: 0;
        padding-right: 0;
      }
      .desktop-nav.art-nav
      {
        padding-left: 0;
        padding-right: 0;
      }
      .art-hmenu-extra1
      {
        position: relative;
        display: block;
        float: left;
        width: auto;
        height: auto;
        background-position: center;
      }
      .art-hmenu-extra2
      {
        position: relative;
        display: block;
        float: right;
        width: auto;
        height: auto;
        background-position: center;
      }
      .art-hmenu
      {
        float: left;
      }
      .art-menuitemcontainer
      {
        margin:0 auto;
      }
      ul.art-hmenu>li {
        margin-left: 0;
      }
      ul.art-hmenu>li:first-child {
        margin-left: 0;
      }
      ul.art-hmenu>li:last-child, ul.art-hmenu>li.last-child {
        margin-right: 0;
      }
      ul.art-hmenu>li>a
      {
        padding:0 25px;
        margin:0 auto;
        position: relative;
        display: block;
        height: 80px;
        cursor: pointer;
        text-decoration: none;
        color: #3F3F3F;
        line-height: 80px;
        text-align: center;
      }
      .art-hmenu a, 
      .art-hmenu a:link, 
      .art-hmenu a:visited, 
      .art-hmenu a.active, 
      .art-hmenu a:hover
      {
        font-size: 18px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
      }
      ul.art-hmenu>li>a.active
      {
        background: #FD8BB1;
        background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -webkit-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -moz-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -o-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -ms-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        -svg-background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        padding:0 25px;
        margin:0 auto;
        color: #fff;
      }
      ul.art-hmenu>li>a:hover, .desktop ul.art-hmenu>li:hover>a
      {
        background: #FD687A;
        background: linear-gradient(top,#FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -webkit-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -moz-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -o-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -ms-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        -svg-background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        padding:0 25px;
        margin:0 auto;
        height: 80px;
      }
      ul.art-hmenu>li>a:hover, 
      .desktop-nav ul.art-hmenu>li:hover>a {
        color: #000;
      }
      ul.art-hmenu li li a
      {
        background: #C95726;
        padding:0 37px;
        margin:0 auto;
      }
      ul.art-hmenu li li 
      {
        float: none;
        width: auto;
        margin-top: 0;
        margin-bottom: 0;
      }
      .desktop-nav ul.art-hmenu li li ul>li:first-child 
      {
        margin-top: 0;
      }
      ul.art-hmenu li li ul>li:last-child 
      {
        margin-bottom: 0;
      }
      .art-hmenu ul a
      {
        display: block;
        white-space: nowrap;
        height: 41px;
        min-width: 7em;
        border: 0 solid transparent;
        text-align: left;
        line-height: 41px;
        color: #000000;
        font-size: 12px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-decoration: none;
        margin:0;
      }
      .art-hmenu ul a:link, 
      .art-hmenu ul a:visited, 
      .art-hmenu ul a.active, 
      .art-hmenu ul a:hover
      {
        text-align: left;
        line-height: 41px;
        color: #000000;
        font-size: 12px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-decoration: none;
        margin:0;
      }
      ul.art-hmenu ul li a:hover, .desktop ul.art-hmenu ul li:hover>a
      {
        background: #9A431D;
        margin:0 auto;
      }
      .art-hmenu ul li a:hover
      {
        color: #EDB8A1;
      }
      .desktop-nav .art-hmenu ul li:hover>a
      {
        color: #EDB8A1;
      }
      ul.art-hmenu ul:before
      {
        background: #C84141;
        margin:0 auto;
        display: block;
        position: absolute;
        content: ' ';
        z-index: 1;
      }
      .desktop-nav ul.art-hmenu li:hover>ul {
        visibility: visible;
        top: 100%;
      }
      .desktop-nav ul.art-hmenu li li:hover>ul {
        top: 0;
        left: 100%;
      }
      ul.art-hmenu ul
      {
        visibility: hidden;
        position: absolute;
        z-index: 10;
        left: 0;
        top: 0;
      }
      .desktop-nav ul.art-hmenu>li>ul
      {
        padding: 10px 30px 30px 30px;
        margin: -10px 0 0 -30px;
      }
      .desktop-nav ul.art-hmenu ul ul
      {
        padding: 30px 30px 30px 10px;
        margin: -30px 0 0 -10px;
      }
      .desktop-nav ul.art-hmenu ul.art-hmenu-left-to-right 
      {
        right: auto;
        left: 0;
        margin: -10px 0 0 -30px;
      }
      .desktop-nav ul.art-hmenu ul.art-hmenu-right-to-left 
      {
        left: auto;
        right: 0;
        margin: -10px -30px 0 0;
      }
      .desktop-nav ul.art-hmenu li li:hover>ul.art-hmenu-left-to-right {
        right: auto;
        left: 100%;
      }
      .desktop-nav ul.art-hmenu li li:hover>ul.art-hmenu-right-to-left {
        left: auto;
        right: 100%;
      }
      .desktop-nav ul.art-hmenu ul ul.art-hmenu-left-to-right
      {
        right: auto;
        left: 0;
        padding: 30px 30px 30px 10px;
        margin: -30px 0 0 -10px;
      }
      .desktop-nav ul.art-hmenu ul ul.art-hmenu-right-to-left
      {
        left: auto;
        right: 0;
        padding: 30px 10px 30px 30px;
        margin: -30px -10px 0 0;
      }
      .desktop-nav ul.art-hmenu li ul>li:first-child {
        margin-top: 0;
      }
      .desktop-nav ul.art-hmenu li ul>li:last-child {
        margin-bottom: 0;
      }
      .desktop-nav ul.art-hmenu ul ul:before
      {
        border-radius: 0;
        top: 30px;
        bottom: 30px;
        right: 30px;
        left: 10px;
      }
      .desktop-nav ul.art-hmenu>li>ul:before
      {
        top: 10px;
        right: 30px;
        bottom: 30px;
        left: 30px;
      }
      .desktop-nav ul.art-hmenu>li>ul.art-hmenu-left-to-right:before {
        right: 30px;
        left: 30px;
      }
      .desktop-nav ul.art-hmenu>li>ul.art-hmenu-right-to-left:before {
        right: 30px;
        left: 30px;
      }
      .desktop-nav ul.art-hmenu ul ul.art-hmenu-left-to-right:before {
        right: 30px;
        left: 10px;
      }
      .desktop-nav ul.art-hmenu ul ul.art-hmenu-right-to-left:before {
        right: 10px;
        left: 30px;
      }
      .art-header
      {
        margin:0 auto;
        position:relative;
        height: 440px;
        background-image: url('images/header1.jpg');
        background-position: center top;
        background-repeat: no-repeat;
        width: 1000px;
        box-shadow: 0px 4px 3px 2px rgba(0, 0, 0, 0.35);
      }
      .responsive .art-header 
      {
        background-image: url('images/header.jpg');
        background-position: center center;
      }
      .art-header-inner{
        position: relative;
        width: 1000px;
        z-index: auto !important;
        margin: 0 auto;
      }
      .art-header>.widget 
      {
        position:absolute;
        z-index:101;
      }
      .art-sheet
      {
        background: #FFFFFF;
        -webkit-box-shadow:0 0 3px 2px rgba(0, 0, 0, 0.15);
        -moz-box-shadow:0 0 3px 2px rgba(0, 0, 0, 0.15);
        box-shadow: 0px 4px 3px 2px rgba(0, 0, 0, 0.35);
        margin:0 auto;
        position:relative;
        cursor:auto;
        width: 1000px;
        z-index: auto !important;
      }
      .art-layout-wrapper
      {
        position: relative;
        margin: 0 auto 0 auto;
        z-index: auto !important;
        padding: 15px;
      }
      .art-content-layout
      {
        display: table;
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
      }
      .art-content-layout-row 
      {
        display: table-row;
      }
      .art-layout-cell
      {
        display: table-cell;
        vertical-align: top;
      }
      .art-block
      {
        padding:7px;
        margin:7px;
      }
      div.art-block img
      {
        border: none;
        margin: 0;
      }
      .art-blockcontent
      {
        margin:0 auto;
        color: #292929;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
      }
      .art-blockcontent table,
      .art-blockcontent li, 
      .art-blockcontent a,
      .art-blockcontent a:link,
      .art-blockcontent a:visited,
      .art-blockcontent a:hover
      {
        color: #292929;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
      }
      .art-blockcontent a, .art-blockcontent a:link
      {
        color: #D65D29;
        font-family: arial;
        text-decoration: none;
      }
      .art-blockcontent a:visited, .art-blockcontent a.visited
      {
        color: #DF9090;
        font-family: arial;
        text-decoration: none;
      }
      .art-blockcontent a:hover, .art-blockcontent a.hover
      {
        color: #424242;
        font-family: arial;
        text-decoration: underline;
      }
      .art-block ul>li:before
      {
        margin-right:6px;
        bottom: 2px;
        position:relative;
        display:inline-block;
        vertical-align:middle;
        font-size:0;
        line-height:0;
        margin-left: -11px;
      }
      .opera .art-block ul>li:before
      {
        /* Vertical-align:middle in Opera doesn't need additional offset */
        bottom: 0;
      }
      .art-block li
      {
        font-size: 12px;
        font-family: arial;
        text-decoration: none;
        line-height: 125%;
        color: #545454;
      }
      .art-block ul>li, .art-block ol
      {
        padding: 0;
      }
      .art-block ul>li
      {
        padding-left: 11px;
      }
      .art-breadcrumbs
      {
        margin:0 auto;
      }
      a.art-button,
      a.art-button:link,
      a:link.art-button:link,
      body a.art-button:link,
      a.art-button:visited,
      body a.art-button:visited,
      input.art-button,
      button.art-button
      {
        text-decoration: none;
        font-size: 11px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-transform: uppercase;
        position:relative;
        display: inline-block;
        vertical-align: middle;
        white-space: nowrap;
        text-align: center;
        color: #404040;
        margin: 0 !important;
        overflow: visible;
        cursor: pointer;
        text-indent: 0;
        line-height: 28px;
        -webkit-box-sizing: content-box;
        -moz-box-sizing: content-box;
        box-sizing: content-box;
      }
      .art-button img
      {
        margin: 0;
        vertical-align: middle;
      }
      .firefox2 .art-button
      {
        display: block;
        float: left;
      }
      input, select, textarea
      {
        vertical-align: middle;
        font-size: 11px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-transform: uppercase;
      }
      .art-block select 
      {
        width:96%;
      }
      input.art-button
      {
        float: none !important;
      }
      .art-button.active, .art-button.active:hover
      {
        background: #D56D6D;
        background: linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        background: -webkit-linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        background: -moz-linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        background: -o-linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        background: -ms-linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        background: linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        -svg-background: linear-gradient(top, #DE8C8C 0, #CD5151 100%) no-repeat;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        -webkit-box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        -moz-box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        border:1px solid #C95726;
        padding:0 10px;
        margin:0 auto;
      }
      .art-button.active, .art-button.active:hover {
        color: #FFFFFF !important;
      }
      .art-button.hover, .art-button:hover
      {
        background: #E19898;
        background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -webkit-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -moz-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -o-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: -ms-linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        -svg-background: linear-gradient(top, #FFE0AB 0px, #FE8F00 100%) no-repeat;
        -webkit-border-radius:4px;
        -moz-border-radius:4px;
        border-radius:4px;
        -webkit-box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        -moz-box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        box-shadow:0 0 2px 1px rgba(0, 0, 0, 0.15);
        border:1px solid #E19898;
        padding:0 25px;
        margin:0 auto;
      }
      .art-button.hover, .art-button:hover {
        color: #FFFFFF !important;
      }
      input[type="text"], input[type="password"], input[type="email"], input[type="url"], textarea
      {
        background: #F9FAFB;
        margin:0 auto;
      }
      input[type="text"], input[type="password"], input[type="email"], input[type="url"], textarea
      {
        width: 100%;
        padding: 8px 0;
        color: #3D3D3D !important;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
      }
      input.art-error, textarea.art-error
      {
        background: #F9FAFB;
        border:1px solid #E2341D;
        margin:0 auto;
      }
      input.art-error, textarea.art-error {
        color: #3D3D3D !important;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
      }
      form.art-search input[type="text"]
      {
        background: #F9FAFB;
        border-radius: 0;
        margin:0 auto;
        width: 100%;
        padding: 0 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
        color: #3D3D3D !important;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
      }
      form.art-search 
      {
        background-image: none;
        border: 0;
        display:block;
        position:relative;
        top:0;
        padding:0;
        margin:5px;
        left:0;
        line-height: 0;
      }
      form.art-search input
      {
        top:0;
        right:0;
      }
      form.art-search>input {
        bottom:0;
        left:0;
        vertical-align: middle;
      }
      form.art-search input[type="submit"]
      {
        background: #E19898;
        margin:0 auto;
        color: #7E2525 !important;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        position:absolute;
        display:block;
        left: auto;
        border: 0;
        top: 0;
        bottom: 0;
        right: 	0;
      }
      label.art-checkbox:before
      {
        background: #F9FAFB;
        -webkit-border-radius:1px;
        -moz-border-radius:1px;
        border-radius:1px;
        margin:0 auto;
        width:16px;
        height:16px;
      }
      label.art-checkbox
      {
        cursor: pointer;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        line-height: 16px;
        display: inline-block;
      }
      .art-checkbox>input[type="checkbox"]
      {
        margin: 0 5px 0 0;
      }
      label.art-checkbox.active:before
      {
        background: #E69A7A;
        -webkit-border-radius:1px;
        -moz-border-radius:1px;
        border-radius:1px;
        margin:0 auto;
        width:16px;
        height:16px;
        display: inline-block;
      }
      label.art-checkbox.hovered:before
      {
        background: #F2CBBA;
        -webkit-border-radius:1px;
        -moz-border-radius:1px;
        border-radius:1px;
        margin:0 auto;
        width:16px;
        height:16px;
        display: inline-block;
      }
      label.art-radiobutton:before
      {
        background: #F9FAFB;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        margin:0 auto;
        width:12px;
        height:12px;
      }
      label.art-radiobutton
      {
        cursor: pointer;
        font-size: 13px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        line-height: 12px;
        display: inline-block;
      }
      .art-radiobutton>input[type="radio"]
      {
        vertical-align: baseline;
        margin: 0 5px 0 0;
      }
      label.art-radiobutton.active:before
      {
        background: #E69A7A;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        margin:0 auto;
        width:12px;
        height:12px;
        display: inline-block;
      }
      label.art-radiobutton.hovered:before
      {
        background: #F2CBBA;
        -webkit-border-radius:3px;
        -moz-border-radius:3px;
        border-radius:3px;
        margin:0 auto;
        width:12px;
        height:12px;
        display: inline-block;
      }
      .art-post
      {
        background: #F8E5DD;
        background: transparent;
        -webkit-border-radius:6px;
        -moz-border-radius:6px;
        border-radius:6px;
      }
      a img
      {
        border: 0;
      }
      .art-article img, img.art-article, .art-block img, .art-footer img
      {
        margin: 0 0 0 0;
      }
      .art-metadata-icons img
      {
        border: none;
        vertical-align: middle;
        margin: 2px;
      }
      .art-article table, table.art-article
      {
        border-collapse: collapse;
        margin: 1px;
      }
      .art-post .art-content-layout-br
      {
        height: 0;
      }
      .art-article th, .art-article td
      {
        padding: 2px;
        border: solid 1px #A3A3A3;
        vertical-align: top;
        text-align: left;
      }
      .art-article th
      {
        text-align: center;
        vertical-align: middle;
        padding: 7px;
      }
      pre
      {
        overflow: auto;
        padding: 0.1em;
      }
      .preview-cms-logo
      {
        border: 0;
        margin: 1em 1em 0 0;
        float: left;
      }
      .image-caption-wrapper
      {
        padding: 0 0 0 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .image-caption-wrapper img
      {
        margin: 0 !important;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .image-caption-wrapper div.art-collage
      {
        margin: 0 !important;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
      }
      .image-caption-wrapper p
      {
        font-size: 80%;
        text-align: right;
        margin: 0;
      }
      .art-postheader
      {
        color: #C94545;
        margin: 10px 0 10px 15px;
        font-size: 26px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
      }
      .art-postheader a, 
      .art-postheader a:link, 
      .art-postheader a:visited,
      .art-postheader a.visited,
      .art-postheader a:hover,
      .art-postheader a.hovered
      {
        font-size: 26px;
        font-family: arial;
        font-weight: normal;
        font-style: normal;
        text-align: left;
      }
      .art-postheader a, .art-postheader a:link
      {
        font-family: arial;
        text-decoration: none;
        text-align: left;
        color: #CB4D4D;
      }
      .art-postheader a:visited, .art-postheader a.visited
      {
        font-family: arial;
        text-decoration: none;
        text-align: left;
        color: #737373;
      }
      .art-postheader a:hover,  .art-postheader a.hovered
      {
        font-family: arial;
        text-decoration: none;
        text-align: left;
        color: #424242;
      }
      .art-postheadericons,
      .art-postheadericons a,
      .art-postheadericons a:link,
      .art-postheadericons a:visited,
      .art-postheadericons a:hover
      {
        font-size: 11px;
        font-family: arial;
        color: #822626;
      }
      .art-postheadericons
      {
        display:inline-block;
        padding: 1px;
        margin: 0 0 0 15px;
      }
      .art-postheadericons a, .art-postheadericons a:link
      {
        font-family: arial;
        text-decoration: underline;
        color: #96411D;
      }
      .art-postheadericons a:visited, .art-postheadericons a.visited
      {
        font-family: arial;
        text-decoration: underline;
        color: #96411D;
      }
      .art-postheadericons a:hover, .art-postheadericons a.hover
      {
        font-family: arial;
        text-decoration: none;
        color: #595959;
      }
      .art-postpdficon:before
      {
        margin-right:6px;
        position:relative;
        display:inline-block;
        vertical-align:middle;
        font-size:0;
        line-height:0;
        bottom: auto;
      }
      .opera .art-postpdficon:before
      {
        /* Vertical-align:middle in Opera doesn't need additional offset */
        bottom: 0;
      }
      .art-postprinticon:before
      {
        margin-right:6px;
        position:relative;
        display:inline-block;
        vertical-align:middle;
        font-size:0;
        line-height:0;
        bottom: auto;
      }
      .opera .art-postprinticon:before
      {
        /* Vertical-align:middle in Opera doesn't need additional offset */
        bottom: 0;
      }
      .art-postemailicon:before
      {
        margin-right:6px;
        position:relative;
        display:inline-block;
        vertical-align:middle;
        font-size:0;
        line-height:0;
        bottom: auto;
      }
      .opera .art-postemailicon:before
      {
        /* Vertical-align:middle in Opera doesn't need additional offset */
        bottom: 0;
      }
      .art-postcontent ul>li:before,  .art-post ul>li:before,  .art-textblock ul>li:before
      {
        margin-right:6px;
        bottom: 2px;
        position:relative;
        display:inline-block;
        vertical-align:middle;
        font-size:0;
        line-height:0;
      }
      .opera .art-postcontent ul>li:before, .opera   .art-post ul>li:before, .opera   .art-textblock ul>li:before
      {
        bottom: 0;
      }
      .art-postcontent li, .art-post li, .art-textblock li
      {
        font-size: 12px;
        font-family: arial;
        color: #545454;
        margin: 0 0 0 4px;
      }
      .art-postcontent ul>li, .art-post ul>li, .art-textblock ul>li, .art-postcontent ol, .art-post ol, .art-textblock ol
      {
        padding: 0;
      }
      .art-postcontent ul>li, .art-post ul>li, .art-textblock ul>li
      {
        padding-left: 16px;
      }
      .art-postcontent ul>li:before,  .art-post ul>li:before,  .art-textblock ul>li:before
      {
        margin-left: -16px;
      }
      .art-postcontent ol, .art-post ol, .art-textblock ol, .art-postcontent ul, .art-post ul, .art-textblock ul
      {
        margin: 1em 0 1em 4px;
      }
      .art-postcontent li ol, .art-post li ol, .art-textblock li ol, .art-postcontent li ul, .art-post li ul, .art-textblock li ul
      {
        margin: 0.5em 0 0.5em 4px;
      }
      .art-postcontent li, .art-post li, .art-textblock li
      {
        margin: 0 0 0 0;
      }
      .art-postcontent ol>li, .art-post ol>li, .art-textblock ol>li
      {
        overflow: visible;
      }
      .art-postcontent ul>li, .art-post ul>li, .art-textblock ul>li
      {
        overflow-x: visible;
        overflow-y: hidden;
      }
      blockquote
      {
        padding:2px 2px 2px 39px;
        margin:10px 10px 10px 50px;
        color: #180707;
        font-family: arial;
        font-weight: normal;
        font-style: italic;
        text-align: left;
        /* makes block not to align behind the image if they are in the same line */
        overflow: auto;
        clear:both;
      }
      blockquote a, .art-postcontent blockquote a, .art-blockcontent blockquote a, .art-footer blockquote a,
      blockquote a:link, .art-postcontent blockquote a:link, .art-blockcontent blockquote a:link, .art-footer blockquote a:link,
      blockquote a:visited, .art-postcontent blockquote a:visited, .art-blockcontent blockquote a:visited, .art-footer blockquote a:visited,
      blockquote a:hover, .art-postcontent blockquote a:hover, .art-blockcontent blockquote a:hover, .art-footer blockquote a:hover
      {
        color: #180707;
        font-family: arial;
        font-weight: normal;
        font-style: italic;
        text-align: left;
      }
      /* Override native 'p' margins*/
      blockquote p,
      .art-postcontent blockquote p,
      .art-blockcontent blockquote p,
      .art-footer blockquote p
      {
        margin: 0;
        margin: 2px 0 2px 15px;
      }
      .art-postfootericons,
      .art-postfootericons a,
      .art-postfootericons a:link,
      .art-postfootericons a:visited,
      .art-postfootericons a:hover
      {
        font-size: 11px;
        font-family: arial;
        text-decoration: none;
        color: #A22F2F;
      }
      .art-postfootericons
      {
        display:inline-block;
        padding: 1px;
        margin: 0 0 0 15px;
      }
      .art-postfootericons a, .art-postfootericons a:link
      {
        font-family: arial;
        text-decoration: underline;
        color: #96411D;
      }
      .art-postfootericons a:visited, .art-postfootericons a.visited
      {
        font-family: arial;
        text-decoration: underline;
        color: #96411D;
      }
      .art-postfootericons a:hover, .art-postfootericons a.hover
      {
        font-family: arial;
        text-decoration: none;
        color: #595959;
      }
      .art-footer
      {
        background-image: url('images/footer.jpg');
        background-position: center top;
        background-repeat: repeat-x;
        color: #6F6F6F;
        padding:8px;
        position: relative;
        font-size: 16px;
        font-family: arial;
        text-align: center;
        font-weight: bold;
      }
      .art-footer a,
      .art-footer a:link,
      .art-footer a:visited,
      .art-footer a:hover,
      .art-footer td, 
      .art-footer th,
      .art-footer caption
      {
        color: #CCCCCC;
        font-size: 11px;
        font-family: arial;
      }
      .art-footer p 
      {
        padding:0;
        text-align: center;
      }
      .art-footer a,
      .art-footer a:link
      {
        color: #6F6F6F;
        font-family: arial;
        font-size: 17px;
      }
      .art-footer a:visited
      {
        color: #D26565;
        font-family: arial;
      }
      .art-footer a:hover
      {
        color: #000;
        font-family: arial;
        text-decoration: none;
      }
      .art-footer img
      {
        border: none;
        margin: 0;
      }
      .art-footer li
      {
        font-size: 13px;
        font-family: arial;
        line-height: 125%;
        color: #E5E5E5;
      }
      .art-page-footer, 
      .art-page-footer a,
      .art-page-footer a:link,
      .art-page-footer a:visited,
      .art-page-footer a:hover
      {
        font-family: Arial;
        font-size: 10px;
        letter-spacing: normal;
        word-spacing: normal;
        font-style: normal;
        font-weight: normal;
        text-decoration: underline;
        color: #862727;
      }
      .art-page-footer
      {
        position: relative;
        z-index: auto !important;
        padding: 1em;
        text-align: center !important;
        text-decoration: none;
        color: #575757;
      }
      img.art-lightbox
      {
        cursor: pointer;
      }
      #art-lightbox-bg *
      {
        padding: 0;
        margin: 0;
      }
      div#art-lightbox-bg
      {
        top: 0;
        left: 0;
        width: 100%;
        position: absolute;
        height: 100%;
        background-color: #000;
        opacity: 0.8;
        filter: alpha(opacity=80);
        z-index: 9999;
      }
      img.art-lightbox-image
      {
        -webkit-transition: opacity 350ms ease-in-out;
        -moz-transition: opacity 350ms ease-in-out;
        -o-transition: opacity 350ms ease-in-out;
        -ms-transition: opacity 350ms ease-in-out;
        transition: opacity 350ms ease-in-out;
        cursor: pointer;
        z-index: 10000;
        position: fixed;
        border: 6px solid #fff;
        border-radius: 3px;
        opacity: 0;
        filter: alpha(opacity=0);
      }
      img.art-lightbox-image.active
      {
        opacity: 1;
        filter: alpha(opacity=100);
      }
      .lightbox-error
      {
        position: fixed;
        background: #fff;
        z-index: 100;
        opacity: 0.95;
        padding: 20px;
        border: 1px solid #b4b4b4;
        border-radius: 10px;
        box-shadow: 0 2px 5px #333;
        width: 300px;
        height: 80px;
      }
      .loading
      {
        position: fixed;
        width: 32px;
        height: 32px;
        z-index: 10100;
        opacity: 0.5;
        padding: 10px;
        border: 1px solid #b4b4b4;
        border-radius: 10px;
        box-shadow: 0 2px 5px #333;
      }
      .arrow
      {
        height: 100px;
        width: 82px;
        z-index: 10003;
        position: fixed;
        cursor: pointer;
        opacity: 0.5;
        filter: alpha(opacity=50);
      }
      .arrow.left
      {
        left: 9px;
      }
      .arrow.right
      {
        right: 9px;
      }
      .arrow:hover
      {
        opacity: 1;
        filter: alpha(opacity=100);
      }
      .arrow.disabled 
      {
        display: none;
      }
      .arrow-t, .arrow-b
      {
        height: 6px;
        width: 30px;
        left: 26px;
        background-color: #fff;
        position: relative;
        border-radius: 3px;
      }
      .arrow-t
      {
        top: 38px;
      }
      .arrow-b
      {
        top: 50px;
      }
      .close
      {
        width: 22px;
        height: 22px;
        position: fixed;
        top: 30px;
        right: 39px;
        cursor: pointer;
        opacity: 0.5;
        filter: alpha(opacity=50);
      }
      .close:hover 
      {
        opacity: 1;
        filter: alpha(opacity=100);
      }
      .close .cw, .close .ccw
      {
        position: absolute;
        top: 8px;
        left: -4px;
        width: 30px;
        height: 6px;
        background-color: #fff;
        border-radius: 3px;
      }
      .close-alt, .arrow-right-alt, .arrow-left-alt 
      {
        display: none;
        color: #fff;
        font-size: 2.5em;
      }
      .ie8 .close-alt, .ie8 .arrow-right-alt, .ie8 .arrow-left-alt {
        display: block;
      }
      .ie8 .cw, .ie8 .ccw {
        display: none;
      }
      .art-content-layout .art-content
      {
        margin:0 auto;
      }
      .art-logo-name {
        text-shadow: 1px 2px 3px #000
      }
      .newsdate {
        background: #dedede;
        color: #777;
        padding: 10px;
        width: 48px;
        height: 48px;
        float: left;
        margin: 5px 10px 10px 0;
        text-align:center;
        border: 4px solid #f7f7f7;
        border-radius: 5px;
      }
      .art-blockheader .t, .art-vmenublockheader .t {
        white-space: nowrap;
      }
    </style>
  </head>
  <body>
    <div class="card-body">
      @if (session('status'))
      <div class="alert alert-success" role="alert">
        {{ session('status') }}
      </div>
      @endif
    </div>
    <div id="art-main">
      <nav class="art-nav clearfix">
        <div class="art-nav-inner">
          <h1 class="art-headline" data-left="0%" >
          </h1>
          <h2 class="art-slogan" data-left="29.48%">Kumpulan berbagai resep makanan
          </h2>
          <ul class="art-hmenu">
            <li>
              <a href="#">Home
              </a>
            </li>
            <li>
              <a href="/resep">Daftar Resep
              </a>
            </li>
            </div>
          </nav>
        <header class="art-header clearfix">
          <div class="art-shapes">
          </div>      
        </header>
        <div class="art-sheet clearfix">
          <div class="art-layout-wrapper clearfix">
            <div class="art-content-layout">
              <div class="art-content-layout-row">
                <div class="art-layout-cell art-content clearfix">
                  <article class="art-post art-article">
                    <div class="art-postcontent art-postcontent-0 clearfix">
                      <div class="art-content-layout">
                        <div class="art-content-layout-row">
                          <div class="art-layout-cell layout-item-0" style="width: 50%; padding-right:380px" >
                            <h1>Resep Terbaru
                            </h1>
                          </div>
                          <div class="art-layout-cell layout-item-0" style="width: 50%" >
                            <h1>Menu Populer
                            </h1>
                          </div>
                        </div>
                      </div>
                      <div class="art-content-layout-wrapper layout-item-1">
                        <div class="art-content-layout layout-item-2">
                          <div class="art-content-layout-row">
                            <div class="art-layout-cell layout-item-5" style="width: 40%" >
                              <p>
                                <img width="310" height="210" src="images/a.jpg" alt="" class="">
                              </p>
                              <p>Salmon dimasak dengan kecap teriyaki yang nikmat. Cocok disajikan pada malam hari.&nbsp;
                              </p>
                              <p>
                                <a href="/salmon">Read more...
                                </a>
                              </p>
                            </div>
                            <div class="art-layout-cell layout-item-5" style="width: 40%" >
                              <p>
                                <img width="310" height="210" src="images/soto.jpg" alt="" class="">
                              </p>
                              <p>Soto Lamongan adalah soto ayam dengan ciri khas kuah kuning dengan campuran koya yang terbuat dari krupuk udang dan bawang putih yang digoreng. &nbsp;
                              </p>
                              <p>
                                <a href="/sotolamongan">Read more...
                                </a>
                              </p>
                            </div>
                            <div class="art-layout-cell layout-item-0" style="width: 30%; padding-left:10px;background:rgb(239, 239, 239);" >
                              <p>
                                <img width="97" height="97" alt="" src="images/e.jpg" style="padding-right:20px;float:left;">
                              </p>
                              Thai food noodle fried noodles mea bercampur dengan toge, tahu dan daging sapi.
                              <br clear="all">
                              <p>
                                <img width="97" height="97" alt="" src="images/f.jpg" style="padding-right:20px;float:left;">
                              </p>
                              Kue terbuat dari campuran strawberry cocok untuk dessert.
                              <br clear="all">
                              <p>
                                <img width="97" height="97" alt="" src="images/g.jpg" style="padding-right:20px;float:left;">
                              </p>
                              Food spanish baked eggs bercampur dengan irisan sosis goreng yang nikmat.
                            </div>		
                          </div>
                        </div>
                      </div>
                    </div>		
                    <div class="art-postcontent art-postcontent-0 clearfix">
                      <div class="art-content-layout">
                        <div class="art-content-layout-row">
                          <div class="art-layout-cell layout-item-0" style="width: 50%; padding-right:380px" >
                            <h1>Menu Hari Ini
                            </h1>
                          </div>
                          <div class="art-layout-cell layout-item-0" style="width: 50%" >
                            <h1>Highlights
                            </h1>
                          </div>
                        </div>
                      </div>
                      <div class="art-content-layout-wrapper layout-item-1">
                        <div class="art-content-layout layout-item-2">
                          <div class="art-content-layout-row">
                            <div class="art-layout-cell layout-item-5" style="width: 40%" >
                              <p>
                                <img width="310" height="210" src="images/c.jpg" alt="" class="">
                              </p>
                              <p>Pizza roll baked mini dibuat dengan bumbu-bumbu pizza yang sering dibuat direstoran.&nbsp;
                              </p>
                              <p>
                                <a href="/pizza">Read more...
                                </a>
                              </p>
                            </div>
                            <div class="art-layout-cell layout-item-5" style="width: 40%" >
                              <p>
                                <img width="310" height="210" src="images/d.jpg" alt="" class="">
                              </p>
                              <p>Mie Japanese dengan rasa gurih berpadu dengan daun bawang yang nikmat.&nbsp;
                              </p>
                              <p>
                                <a href="/miejapan">Read more...
                                </a>
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>	
                  </article>
                </div>
              </div>
            </div>
          </div>
          <footer class="art-footer clearfix">
            <p> IntanVionasari@2020
            </p>
          </footer>
        </div>
        </div>
      </body>
    </html>
  @endsection