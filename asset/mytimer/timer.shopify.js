/* @charset "UTF-8" */
/*
 * @author <shanchao@myhexin.com>
 * @create 2016-12-12
 */
(function ($) {
	var defaluts = {
		day: 0,				 
		dayDom: '',			
		hour: 0,			
		hourDom: '',		
		minute: 1,			
		minuteDom: '',		
		second: 0,			
		secondDom: '',		
		millisecond: 0,		
		millisecondDom: '',	
		blank: 1000, 		
		pause: '',			
		pauseFun: '',		
		goonFun: '',		
		endFun: '',			
		animation: 'none' 	
	};

	$.fn.extend({
		stamp: 0,			
		intervalObj: {},	
		state: 1,				
		simpletimer: function (options) {
			var _self = this;
			var options = $.extend({}, defaluts, options);

			_self.stamp = parseInt(options.millisecond) + 
						  10 * parseInt(options.second) + 
						  600 * parseInt(options.minute) + 
						  36000 * parseInt(options.hour) +
						  864000 * parseInt(options.day);
			this._dida(options);
			this._pause(options);
		},
		_pause: function (options) {
			var _self = this;

			$(options.pause).on('click', function () {
				console.log(2);
				if (_self.state === 1) {
					_self.state = 0;
					clearInterval(_self.intervalObj);
					$(this).html('Resume');
					options.pauseFun();
				} else {
					_self.state = 1;
					_self._dida(options);
					options.goonFun();
				}
			});
		},
		_dida: function (options) {
			var _self = this;
			_self.intervalObj = setInterval(function () {
				var temp = _self.stamp;
				var day = Math.floor(temp / 864000);
				temp = temp % 864000;
				var hour = Math.floor(temp / 36000);
				temp = temp % 36000;
				var minute = Math.floor(temp / 600);
				temp = temp % 600;
				var second = Math.floor(temp / 10);
				var millisecond = temp % 10; 
				$(options.dayDom).html(_self.prefixInteger(day, 2));
				$(options.hourDom).html(_self.prefixInteger(hour, 2));
				$(options.minuteDom).html(_self.prefixInteger(minute, 2));
				$(options.secondDom).html(_self.prefixInteger(second, 2));
				$(options.millisecondDom).html(_self.prefixInteger(millisecond, 1));
				_self.stamp = _self.stamp - (options.blank/100).toFixed(0);
				if (_self.stamp < 0) {
					_self.state = 0;
					clearInterval(_self.intervalObj);
					options.endFun();
				}
			}, parseInt(options.blank));
		},
		prefixInteger: function(num, length) {  
			return ( "0000" + num ).substr( -length );  
		}
	});
	
})(jQuery);

$("document").ready(function() {
  $('head').append('<link rel="stylesheet" href="//cdn.shopify.com/s/files/1/2044/3517/t/2/assets/mytimer.css?13749673722825025385" type="text/css" />');
  $('#mytimer_container').html("<div id='text_above_timer' style='font-family: &quot;Open Sans&quot;; font-weight: normal; font-size: 22px; line-height: 22px; color: rgb(0, 0, 0); text-align: center; display: block;'> Hurry! Only <span id='scarcitynumber' style='background-color: rgb(255, 255, 255); color: rgb(169, 68, 66);	border-radius: 5px;'>11</span> left in stock </div><div class='progress progress-striped' style='margin-top:10px;'><div class='progress-bar progress-bar-info' role='progressbar' data-transitiongoal='40' aria-valuenow='40' style='width: 40%;'></div></div><div id='just_bought' class='col-md-12' style='width:100%;'></div><div id='mytime-counter' class='simple-timer'><div class='mycountdown'><div class='timer-hour value'>02</div><div class='label'>hours</div></div><div class='mycountdown'><div class='timer-minute value'>00</div><div class='label'>minutes</div></div><div class='mycountdown'><div class='timer-second value'>00</div><div class='label'>seconds</div></div><div style='clear:both'></div></div>");
  
  var variant_id = $('select[name="id"] option:selected').val();
  
  console.log(variant_id);

  $.ajax({
      type: "POST",
      url: "https://apptimer.allnetdigital.com/progressbar/getRecentOrder",
      data: 'variant_id=' + variant_id,
      dataType: "json", // Set the data type so jQuery can parse it for you
      success: function (data) {
          var customr_name = data[0];
          var country = data[1];
          var product_name = data[2];
          $('#just_bought').html("<p>" + customr_name +"</p><p> From " + country + "</p><p>Just Bought a " + product_name +"</p>");
      }
  });
});

$(function () {
	$('.simple-timer').simpletimer({
	  hour: 02,
	  hourDom: '.timer-hour',
	  minute: 0,
	  minuteDom: '.timer-minute',
	  second: 00,
	  secondDom: '.timer-second'
	});
});

