<style>











/*********************** Shop Holiday Start ****************************/











.shopholiday {











-webkit-transform: translateZ(0); /* webkit flicker fix */











-webkit-font-smoothing: antialiased; /* webkit text rendering fix */











}

.shopholidaybackgroundcol{background-color:#<?php echo get_option('byconsolewooodt_calender_holiday_tooltip_background_color');?>;}
/*.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .shopholidaycaltooltip{opacity: 1.35 !important;}*/

.shopholiday .shopholidaycaltooltip {
background: #<?php echo get_option('byconsolewooodt_calender_holiday_tooltip_background_color');?> !important;
bottom: 100%;
color: #<?php echo get_option('byconsolewooodt_calender_holiday_tooltip_text_color');?> !important;
display: block;
text-align:center;
margin-bottom: 5px;
opacity: 0;
font-size: 12px;
padding: 5px 3px;
pointer-events: none;
position: absolute;
width: 100px;
-webkit-transform: translateY(10px);
-moz-transform: translateY(10px);
-ms-transform: translateY(10px);
-o-transform: translateY(10px);
transform: translateY(10px);
-webkit-transition: all .25s ease-out;
-moz-transition: all .25s ease-out;
-ms-transition: all .25s ease-out;
-o-transition: all .25s ease-out;
transition: all .25s ease-out;
-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
}

/* This bridges the gap so you can mouse into the tooltip without it disappearing */
.shopholiday .shopholidaycaltooltip:before {
bottom: 0px;
content: " ";
display: block;
height: 70px;
left: 0;
position: absolute;
width: 100%;
}  

.shopholiday:hover .shopholidaycaltooltip {
opacity: 1;
pointer-events: auto;
-webkit-transform: translateY(0px);
-moz-transform: translateY(0px);
-ms-transform: translateY(0px);
-o-transform: translateY(0px);
transform: translateY(0px);
}

/* IE can just show/hide with no transition */
.lte8 .shopholiday .shopholidaycaltooltip {
display: none;
}

.lte8 .shopholiday:hover .shopholidaycaltooltip {
display: block;
}

/********************** Shop Closing Day Start**********************************/
.shopclosingday { 
-webkit-transform: translateZ(0); /* webkit flicker fix */
-webkit-font-smoothing: antialiased; /* webkit text rendering fix */
}

.shopclosingdaybackgroundcol{background-color:#<?php echo get_option('byconsolewooodt_calender_closing_tooltip_background_color');?>;}
/*.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .shopclosingdaycaltooltip{opacity: 1.35 !important;}*/

.shopclosingday .shopclosingdaycaltooltip {
background: #<?php echo get_option('byconsolewooodt_calender_closing_tooltip_background_color');?> !important;
bottom: 100%;
color: #<?php echo get_option('byconsolewooodt_calender_closing_tooltip_text_color');?> !important;
display: block;
text-align:center;
margin-bottom: 5px;
opacity: 1.35 !important;
font-size: 12px;
padding: 5px 3px;
pointer-events: none;
position: absolute;
width: 100px;
-webkit-transform: translateY(10px);
-moz-transform: translateY(10px);
-ms-transform: translateY(10px);
-o-transform: translateY(10px);
transform: translateY(10px);











-webkit-transition: all .25s ease-out;
-moz-transition: all .25s ease-out;
-ms-transition: all .25s ease-out;
-o-transition: all .25s ease-out;
transition: all .25s ease-out;
-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
}

/* This bridges the gap so you can mouse into the tooltip without it disappearing */
.shopclosingday .shopclosingdaycaltooltip:before {
bottom: 0px;
content: " ";
display: block;
height: 70px;
left: 0;
position: absolute;
width: 100%;
}  

.shopclosingday:hover .shopclosingdaycaltooltip {
opacity: 1;
pointer-events: auto;
-webkit-transform: translateY(0px);
-moz-transform: translateY(0px);
-ms-transform: translateY(0px);











-o-transform: translateY(0px);











transform: translateY(0px);
}

/* IE can just show/hide with no transition */
.lte8 .shopclosingday .shopclosingdaycaltooltip {
display: none;
}

.lte8 .shopclosingday:hover .shopclosingdaycaltooltip {
display: block;
}

/***********************Date Pick Not Allowed Start*********************************/.ordernotallowed {
-webkit-transform: translateZ(0); /* webkit flicker fix */
-webkit-font-smoothing: antialiased; /* webkit text rendering fix */
opacity: 1.35 !important;
}

/*.datenotpickedbackgroundcol{background-color:#<?php echo get_option('byconsolewooodt_calender_pick_notallowed_tooltip_background_color');?>;}*/
/*.ui-state-disabled, .ui-widget-content .ui-state-disabled, .ui-widget-header .shopclosingdaycaltooltip{opacity: 1.35 !important;}*/

.ordernotallowed .ordernotallowedtooltip {
background: #<?php echo get_option('byconsolewooodt_calender_pick_notallowed_tooltip_background_color');?> !important;
bottom: 100%;
color: #<?php echo get_option('byconsolewooodt_calender_pick_notallowed_tooltip_text_color');?> !important;
display: block;
text-align:center;
margin-bottom: 5px;
opacity: 1.35 !important;
font-size: 12px;
padding: 5px 3px;
pointer-events: none;
position: absolute;
width: 100px;
-webkit-transform: translateY(10px);
-moz-transform: translateY(10px);
-ms-transform: translateY(10px);
-o-transform: translateY(10px);
transform: translateY(10px);
-webkit-transition: all .25s ease-out;
-moz-transition: all .25s ease-out;
-ms-transition: all .25s ease-out;
-o-transition: all .25s ease-out;
transition: all .25s ease-out;
-webkit-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-moz-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-ms-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
-o-box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
box-shadow: 2px 2px 6px rgba(0, 0, 0, 0.28);
}

/* This bridges the gap so you can mouse into the tooltip without it disappearing */
.ordernotallowed .ordernotallowedtooltip:before {
bottom: 0px;
content: " ";
display: block;
height: 70px;
left: 0;
position: absolute;
width: 100%;
}  

.ordernotallowed:hover .ordernotallowedtooltip {
opacity: 1;
pointer-events: auto;
-webkit-transform: translateY(0px);
-moz-transform: translateY(0px);
-ms-transform: translateY(0px);
-o-transform: translateY(0px);
transform: translateY(0px);
}

/* IE can just show/hide with no transition */
.lte8 .ordernotallowed .ordernotallowedtooltip {
display: none;
}

.lte8 .ordernotallowed:hover .ordernotallowedtooltip {
display: block;
}
/*
.ui-datepicker .ui-datepicker-header{background:#<?php echo get_option('byconsolewooodt_calender_header_color');?> !important;}.ui-datepicker .ui-datepicker-title{color:#<?php echo get_option('byconsolewooodt_calender_header_text_color');?> !important;}*/
td.byconsolewooodt_product_pickup_or_delivery_date{font-size:10px !important;}
</style>