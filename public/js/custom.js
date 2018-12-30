// JavaScript Document
(function($) {
  
$(document).ready(function() {		
  planetx.init();		
});


var planetx = {
      planetxTimeout: null,
  isSidebarAjaxClick: false,
  init: function() {	
    this.locationtab();
    this.tab();   
    this.verticaltab();
    this.labtab();
    this.sliderreview();
    this.teamtab();
    this.faq();
  },
  locationtab:function(){
    $(document).ready(function () {
   var $tabs = $('#location-tab');
   $tabs.responsiveTabs({
     rotate: false,
     startCollapsed: 'accordion',
     collapsible: 'accordion',
     setHash: true,
     click: function(e, tab) {
       $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
     },
     activate: function(e, tab) {
       $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
     },
     activateState: function(e, state) {
       //console.log(state);
       $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
     }
   });
   $('.select-tab').on('click', function() {
     $tabs.responsiveTabs('activate', $(this).val());
   });

 });
},
   tab:function(){
       $(document).ready(function () {
      var $tabs = $('#horizontalTab');
      $tabs.responsiveTabs({
        rotate: false,
        startCollapsed: 'accordion',
        collapsible: 'accordion',
        setHash: true,
        click: function(e, tab) {
          $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
        },
        activate: function(e, tab) {
          $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
        },
        activateState: function(e, state) {
          //console.log(state);
          $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
        }
      });
      $('.select-tab').on('click', function() {
        $tabs.responsiveTabs('activate', $(this).val());
      });

    });
   },
  verticaltab:function(){
    $(document).ready(function () {
   var $tabs = $('#verticalTab');
   $tabs.responsiveTabs({
     rotate: false,
     startCollapsed: 'accordion',
     collapsible: 'accordion',
     setHash: true,
     click: function(e, tab) {
       $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
     },
     activate: function(e, tab) {
       $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
     },
     activateState: function(e, state) {
       //console.log(state);
       $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
     }
   });
   $('.select-tab').on('click', function() {
     $tabs.responsiveTabs('activate', $(this).val());
   });

 });
},
labtab:function(){
  $(document).ready(function () {
 var $tabs = $('#labTab');
 $tabs.responsiveTabs({
   rotate: false,
   startCollapsed: 'accordion',
   collapsible: 'accordion',
   setHash: true,
   click: function(e, tab) {
     $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
   },
   activate: function(e, tab) {
     $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
   },
   activateState: function(e, state) {
     //console.log(state);
     $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
   }
 });
 $('.select-tab').on('click', function() {
   $tabs.responsiveTabs('activate', $(this).val());
 });

});
},
teamtab:function(){
  $(document).ready(function () {
 var $tabs = $('#teamTab');
 $tabs.responsiveTabs({
   rotate: false,
   startCollapsed: 'accordion',
   collapsible: 'accordion',
   setHash: true,
   click: function(e, tab) {
     $('.info').html('Tab <strong>' + tab.id + '</strong> clicked!');
   },
   activate: function(e, tab) {
     $('.info').html('Tab <strong>' + tab.id + '</strong> activated!');
   },
   activateState: function(e, state) {
     //console.log(state);
     $('.info').html('Switched from <strong>' + state.oldState + '</strong> state to <strong>' + state.newState + '</strong> state!');
   }
 });
 $('.select-tab').on('click', function() {
   $tabs.responsiveTabs('activate', $(this).val());
 });

});
},
  sliderreview:function(){
    $('.multiple-items').slick({
      infinite: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      responsive: [
        {
          breakpoint: 992,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
      ]
    });
  },
  faq:function(){
    $('.collapse').on('show.bs.collapse', function(){
      $(this).parent().find(".mdi-plus").removeClass("mdi-plus").addClass("mdi-minus");
      }).on('hidden.bs.collapse', function(){
      $(this).parent().find(".mdi-minus").removeClass("mdi-minus").addClass("mdi-plus");
      }); 
  }
}
})(jQuery);