;(function(){"use strict";$(document).ready(function(){(function(){$('#status').fadeOut();$('#preloader').delay(200).fadeOut('slow');}());if($('.menuzord').length>0){$(".menuzord").menuzord({align:"left",effect:"slide"});}
if($('.main-navigation').length>0){$('.main-navigation').sticky({topSpacing:0});}
$(window).on('load resize',function(){$(".dropdown-wrapper > ul > li").each(function(){var $this=$(this),$win=$(window);if($this.offset().left+ 195>$win.width()+ $win.scrollLeft()- $this.width()){$this.addClass("dropdown-inverse");}else{$this.removeClass("dropdown-inverse");}});});if($('.appointment-time').length>0){$('.appointment-time ul li a').click(function(event){$(this).addClass('booking-time')});$('.booking-time').click(function(event){$(this).removeClass('booking-time')});}
if($('.nav-tabs').length>0){$('.nav-tabs').tabCollapse();}
if($('#rootwizard').length>0){$('#rootwizard').bootstrapWizard({onTabShow:function(tab,navigation,index){var $total=navigation.find('li').length;var $current=index+1;var $percent=($current/$total)*100;$('#rootwizard').find('.bar').css({width:$percent+'%'});}});}
(function(){function getIEVersion(){var match=navigator.userAgent.match(/(?:MSIE |Trident\/.*; rv:)(\d+)/);return match?parseInt(match[1],10):false;}
if(getIEVersion()){$('html').addClass('ie'+getIEVersion());}}());if($(".payment-popup-wrapper").length>0){var modal=document.getElementById('payment-popup-wrapper');var btn=document.getElementById("accept-card-option");var span=document.getElementsByClassName("close")[0];btn.onclick=function(){modal.style.display="block";}
span.onclick=function(){modal.style.display="none";}
window.onclick=function(event){if(event.target==modal){modal.style.display="none";}}}
if($('.appointment-slider-section').length>0){$('.appointment-slider-section').imagesLoaded(function(){$(window).stellar({horizontalScrolling:false,verticalOffset:0,horizontalOffset:0,responsive:true,hideDistantElements:true});});}
$('#contactForm').on('submit',function(e){e.preventDefault();var $action=$(this).prop('action');var $data=$(this).serialize();var $this=$(this);$this.prevAll('.alert').remove();$.post($action,$data,function(data){if(data.response=='error'){$this.before('<div class="alert alert-danger"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button> <i class="fa fa-times-circle"></i> '+data.message+'</div>');}
if(data.response=='success'){$this.before('<div class="alert alert-success"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><i class="fa fa-thumbs-o-up"></i> '+data.message+'</div>');$this.find('input, textarea').val('');}},"json");});});})(jQuery);