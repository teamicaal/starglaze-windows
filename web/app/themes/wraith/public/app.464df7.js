(self.webpackChunksage=self.webpackChunksage||[]).push([[143],{975:function(e,i,s){"use strict";var n=s(194),t=(s(567),s(59)),a=s.n(t),o=(s(129),s(155),s(80)),r=s.n(o);!function(e){e("#menu-header-menu li.menu-item-has-children").append('<div class="toggle lg:hidden absolute z-20 top-0 right-0 px-8 py-4"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></div>');var i=200;e("#menu-header-menu > li.menu-item-has-children > .toggle").on("click",(function(){e(this).parent().hasClass("open")?(e(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),e(this).parent().parent().find(".sub-menu").slideUp(i)):(e(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),e(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(i),e(this).parent().toggleClass("open"),e(this).prev().slideToggle(i))})),e("#menu-header-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .toggle").on("click",(function(){e(this).parent().hasClass("open")?(e(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),e(this).parent().parent().find(".sub-menu").slideUp(i)):(e(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),e(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(i),e(this).parent().toggleClass("open"),e(this).prev().slideToggle(i))})),e("#menu-header-menu > li > .sub-menu > li.menu-item-has-children").on("hover",(function(){if(e(window).innerWidth()>991){var i=e(this).find("> ul.sub-menu"),s=e(i).outerWidth();e(window).innerWidth()>e(this).offset().left+e(this).outerWidth()+s?(e(i).css("transform","translateX(100%)"),e(i).css("right","0")):(e(i).css("transform","translateX(-100%)"),e(i).css("left","0"))}})),e(".slick-banner").on("init",(function(){var i=e(".slick-banner .hidden");i.length>1?e(".slick-banner .hidden").each((function(i,s){e(s).removeClass("hidden")})):i.removeClass("hidden")})),e(".slick-banner").slick({dots:!1,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),e(".testimonials-carousel").slick({dots:!0,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),e(".slick-gallery-slider").slick({dots:!1,arrows:!1,infinite:!1,slidesToShow:2,autoplay:!0,slidesToScroll:1,swipeToSlide:!0,draggable:!0,centerMode:!1}),e(".slick-p").on("click",(function(){e(this).parent().prev().slick("slickPrev")})),e(".slick-n").on("click",(function(){e(this).parent().prev().slick("slickNext")})),e(".mix-container").length&&r()(".mix-container")&&console.log("mix"),e(".mix-container-products").length&&r()(".mix-container-products",{load:{filter:".product-range-1"}})&&console.log("mix"),e(".btn-scroll").on("click",(function(i){i.preventDefault(),e("html, body").animate({scrollTop:e(e(this).attr("href")).offset().top-150},400)})),e.fn.CookieNotice=function(){if(!localStorage.getItem("cookie-notice-dismissed")){var e=this;setTimeout((function(){e.addClass("active")}),1e3)}return this.addClass("cookie-notice"),this},e(document).on("click",".cookie-notice-dismiss",(function(){localStorage.setItem("cookie-notice-dismissed",!0),e(this).parents(".cookie-notice").removeClass("active")})),e("#cookie-notice").CookieNotice(),e(".page-share").on("click",(function(){navigator.share?navigator.share({title:"Share This Page",url:window.location}).then((()=>{console.log("Thanks for sharing!")})).catch((e=>{console.log("Couldnt share because of",e.message)})):(e("#panel-share").toggleClass("active"),console.log("navigator.share not supported!"))})),e(".panel-share-close").on("click",(function(){e("#panel-share").removeClass("active")})),e("#nav-primary-toggle").on("click",(function(){e(".nav-primary").toggleClass("open"),e(".nav-backdrop").toggleClass("show")})),e(".toggle").on("click",(function(i){var s=e(this).parents(".checkout-step.active");s.removeClass("active"),s.next().addClass("active")}));var s=e(document);s.on("scroll",(function(){s.scrollTop()>=800?(e("#fixed-sidebar").addClass(" block"),e("#fixed-sidebar").removeClass("hidden")):(e("#fixed-sidebar").removeClass("block"),e("#fixed-sidebar").addClass(" hidden"))})),e(".toggler").on("click",(function(){e(this).parents("#fixed-sidebar").toggleClass("hide")})),e(document).ready((function(){var i=e("#checkout-summary-fixed").outerHeight();e("#checkout-summary-fixed").css("bottom","-"+i+"px")})),e("#checkout-summary-toggle").on("click",(function(){e(this).toggleClass("active");var i=e("#checkout-summary-fixed").outerHeight();e("#checkout-summary-fixed").hasClass("active")?(e("#checkout-summary-fixed").css("bottom","-"+i+"px"),e("#checkout-summary-fixed").removeClass("active")):(e("#checkout-summary-fixed").css("bottom","50px"),e("#checkout-summary-fixed").addClass("active"))})),e('input[name="card_number"]').on("keyup",(function(){this.value.length==this.maxLength&&e('input[name="expiry_date"]').focus()})),e('input[name="expiry_date"]').on("keyup",(function(){this.value.length==this.maxLength&&e('input[name="cvc"]').focus()})),e(window).on("scroll",(function(){e(document).scrollTop()>300?e(".fixed-side").addClass("fixed-side-show"):e(".fixed-side").removeClass("fixed-side-show"),e(document).scrollTop()>350?e(".fixed-side").addClass("fixed-desktop"):e(".fixed-side").removeClass("fixed-desktop")}))}(jQuery),s(281);var c=s(947),l=s(565),d=s(417);(0,n.domReady)((async e=>{e&&console.error(e)})),jQuery.event.special.touchstart={setup:function(e,i,s){this.addEventListener("touchstart",s,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.touchmove={setup:function(e,i,s){this.addEventListener("touchmove",s,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.wheel={setup:function(e,i,s){this.addEventListener("wheel",s,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,i,s){this.addEventListener("mousewheel",s,{passive:!0})}},a()().observe(),c.vc.searchPseudoElements=!0,c.vI.add(l.j1w,l.KNi,l.wf8,l.FU$,l.dwZ,l.FGq,l.xiG,d.neY,d.AYu,d.mdU,d.Zzi,d.opf,d.Xs4,d.D9H,d.hwn,l.Uu6,l.I4f,l.eFW,l.NBC,l.zBy,l.mTx,l._tD,l.ptq,l.A35,l.x_I,l.ILF,l.DD4,l.LEp,l.Tab,l.Elr,l.TL5,l.wp6),c.vz.i2svg()},281:function(){var e;(e=jQuery)(".icaal-contact-form").on("submit",(function(i){var s=e(this),n=s.attr("data-form"),t=s.find(".submit"),a=s.find(".response"),o=s.serializeArray(),r=new FormData,c=icaal_options.api_key_name_1,l=icaal_options.api_key_name_2,d=icaal_options.api_key_name_3,u=icaal_options.api_key_name_4,p=icaal_options.api_key_name_5,h="",m=!1;switch(n){case c:h=icaal_options.api_key_1,m=!0;break;case l:h=icaal_options.api_key_2,m=!0;break;case d:h=icaal_options.api_key_3,m=!0;break;case u:h=icaal_options.api_key_4,m=!0;break;case p:h=icaal_options.api_key_5,m=!0;break;default:m=!1}return m?(t.addClass("btn-loading").prop("disabled",!0),a.empty(),e.each(o,(function(e,i){r.append(i.name,i.value)})),s.find('[type="file"]').length>0&&e.each(s.find('[type="file"]'),(function(i,s){var n=e(this).attr("name");e.each(e(this)[0].files,(function(e,i){r.append(n,i)}))})),r.append("security",nonce),e.ajax({url:"https://api.clients.icaal.co.uk/forms/"+h,method:"post",contentType:!1,processData:!1,data:r}).done((function(e){e.redirect_to?location.assign(e.redirect_to):e.message&&a.addAlert("success",e.message),s.find("input").addClass("is-valid").removeClass("is-invalid"),s.find(".invalid-feedback").empty(),s.trigger("reset"),s.trigger("success"),s.trigger("complete")})).fail((function(i){var n=i.responseJSON.errors,o=i.responseJSON.error;t.removeClass("btn-loading").prop("disabled",!1),n?(s.find("input").addClass("is-valid").removeClass("is-invalid"),s.find(".invalid-feedback").empty(),e.each(n,(function(i,s){e("[name="+i+"]").addClass("is-invalid").removeClass("is-valid"),e("[name="+i+"]").next(".invalid-feedback").text(s)})),s.trigger("complete")):o&&(a.addAlert("danger",o),s.trigger("complete"))}))):a.addAlert("danger","No / Incorrect API Key Name Set"),s.on("success",(function(){"function"==typeof ga&&ga("send","event","Enquiry","submit"),"function"==typeof gtag&&gtag("event","Enquiry",{event_category:"submit"}),"function"==typeof __gaTracker&&__gaTracker("send","event","Enquiry","submit")})),s.on("complete",(function(){var e=icaal_options.custom_html;a.append(e)})),!1})),e.fn.addAlert=function(i,s,n,t){var a="";if(n){var o=[];e.each(n,(function(e,i){"The g-recaptcha-response field is required."==i&&(i="reCAPTCHA needs to confirmed.");var s=i;"base"==(e=e.replace(/_/g," "))&&(s=i),o.push("<li>"+s+"</li>")})),s=n='<p style="font-size: 1.4em; font-weight: bold;">'+s+'</p><ul class="mb-0">'+(n=o.join(""))+"</ul>"}t&&(a='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'),this.append('<div class="alert alert-'+i+'">'+a+s+"</div>")}},190:function(){},567:function(e){"use strict";e.exports=window.jQuery}},function(e){var i=function(i){return e(e.s=i)};e.O(0,[329],(function(){return i(975),i(190)})),e.O()}]);