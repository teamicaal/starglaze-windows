(self.webpackChunk_roots_bud_sage_sage=self.webpackChunk_roots_bud_sage_sage||[]).push([[143],{"./scripts/app.js":(e,i,s)=>{"use strict";var o=s("../node_modules/@roots/sage/lib/client/dom-ready.js"),t=(s("jquery"),s("../node_modules/lozad/dist/lozad.min.js")),n=s.n(t),a=(s("../node_modules/slick-carousel/slick/slick.min.js"),s("../node_modules/@fancyapps/ui/dist/index.esm.js")),l=s("../node_modules/mixitup/dist/mixitup.js"),r=s.n(l);!function(e){e("#menu-header-menu li.menu-item-has-children").append('<div class="toggle lg:hidden absolute z-20 top-0 right-0 px-8 py-4"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></div>');var i=200;(e("#menu-header-menu > li.menu-item-has-children > .toggle").on("click",(function(){e(this).parent().hasClass("open")?(e(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),e(this).parent().parent().find(".sub-menu").slideUp(i)):(e(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),e(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(i),e(this).parent().toggleClass("open"),e(this).prev().slideToggle(i))})),e("#menu-header-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .toggle").on("click",(function(){e(this).parent().hasClass("open")?(e(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),e(this).parent().parent().find(".sub-menu").slideUp(i)):(e(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),e(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(i),e(this).parent().toggleClass("open"),e(this).prev().slideToggle(i))})),e("#menu-header-menu > li > .sub-menu > li.menu-item-has-children").on("hover",(function(){if(e(window).innerWidth()>991){var i=e(this).find("> ul.sub-menu"),s=e(i).outerWidth();e(window).innerWidth()>e(this).offset().left+e(this).outerWidth()+s?(e(i).css("transform","translateX(100%)"),e(i).css("right","0")):(e(i).css("transform","translateX(-100%)"),e(i).css("left","0"))}})),e(".slick-banner").on("init",(function(){var i=e(".slick-banner .hidden");i.length>1?e(".slick-banner .hidden").each((function(i,s){e(s).removeClass("hidden")})):i.removeClass("hidden")})),e(".slick-banner").slick({dots:!1,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),e(".slick-offer").slick({dots:!1,arrows:!1,fade:!1,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:2e3,infinite:!0}),e(".acc-slick").slick({slidesToShow:6,infinite:!0,swipeToSlide:!0,arrows:!1,autoplay:!1,autoplaySpeed:3e3,responsive:[{breakpoint:770,settings:{slidesToShow:4,infinite:!0,swipeToSlide:!0,arrows:!1,autoplay:!0,autoplaySpeed:3e3}},{breakpoint:480,settings:{slidesToShow:2,infinite:!0,swipeToSlide:!0,arrows:!1,autoplay:!0,autoplaySpeed:3e3}}]}),e(".slick-products").slick({slidesToShow:4,infinite:!0,swipeToSlide:!0,arrows:!1,centerMode:!1,autoplay:!0,autoplaySpeed:3e3,responsive:[{breakpoint:1380,settings:{slidesToShow:4,slidesToScroll:1,centerMode:!1}},{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,centerMode:!1}},{breakpoint:640,settings:{slidesToShow:1,slidesToScroll:1,centerMode:!1}}]}),e(".slick-news").slick({slidesToShow:1,infinite:!0,swipeToSlide:!0,arrows:!0,centerMode:!1,autoplay:!1,autoplaySpeed:3e3,prevArrow:e(".offer-arrow-p"),nextArrow:e(".offer-arrow-n")}),e(".accordion-case-study-slick").slick({slidesToShow:2,infinite:!0,swipeToSlide:!0,arrows:!0,centerMode:!1,autoplay:!1,autoplaySpeed:3e3,prevArrow:e(".case-study-arrow-p"),nextArrow:e(".case-study-arrow-n")}),e(".testimonials-carousel").slick({dots:!0,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),e(".video-modal-play").on("click",(function(){e(this).parent().find(".video-modal").css("display","flex")})),e(".closevideo-modal").on("click",(function(){e(this).parent().parent().hide()})),e(".left-column").children(":odd").appendTo(".right-column"),e(".left-column").children().first().find(".benefit-answer").css("display","block"),e(".left-column").children().first().find(".fa-minus").css("display","block"),e(".left-column").children().first().find(".fa-plus").css("display","none"),e(".right-column").children().last().find(".benefit-answer").css("display","block"),e(".right-column").children().last().find(".fa-minus").css("display","block"),e(".right-column").children().last().find(".fa-plus").css("display","none"),e(".benefit").on("click",(function(){e(".benefit-answer",this).slideToggle(),e(".fa-plus",this).toggle(),e(".fa-minus",this).toggle()})),e(".slick-gallery-slider").slick({dots:!1,arrows:!1,infinite:!1,slidesToShow:2,autoplay:!0,slidesToScroll:1,swipeToSlide:!0,draggable:!0,centerMode:!1}),e(".image_slider_main").slick({slidesToShow:1,slidesToScroll:1,arrows:!0,centerMode:!0,fade:!0,asNavFor:".image_slider_thmb"}),e(".image_slider_thmb").slick({slidesToShow:3,slidesToScroll:1,asNavFor:".image_slider_main",arrows:!1,focusOnSelect:!0,initialSlide:3}),e(".why-choose-us-slick").slick({slidesToShow:3,autoplay:!0,autoplaySpeed:5e3,dots:!0,infinite:!0,arrows:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,centerMode:!1}},{breakpoint:640,settings:{slidesToShow:1,slidesToScroll:1,centerMode:!1}}]}),e(".slick-p").on("click",(function(){e(this).parent().prev().slick("slickPrev")})),e(".slick-n").on("click",(function(){e(this).parent().prev().slick("slickNext")})),e(".mix-container").length)&&(r()(".mix-container")&&console.log("mix"));e(".mix-container-products").length&&(r()(".mix-container-products",{load:{filter:".product-range-1"}})&&console.log("mix"));e(".accordion-item-header").on("click",(function(){e(".accordion-item").removeClass("active"),e(".accordion-item-content").slideUp(),e(this).parent().toggleClass("active"),e(this).next().slideToggle()})),e(document).on("click",'a[href^="#"]',(function(i){i.preventDefault(),e("html, body").animate({scrollTop:e(e.attr(this,"href")).offset().top-130},700)})),e.fn.CookieNotice=function(){if(!localStorage.getItem("cookie-notice-dismissed")){var e=this;setTimeout((function(){e.addClass("active")}),1e3)}return this.addClass("cookie-notice"),this},e(document).on("click",".cookie-notice-dismiss",(function(){localStorage.setItem("cookie-notice-dismissed",!0),e(this).parents(".cookie-notice").removeClass("active")})),e("#cookie-notice").CookieNotice(),e(".page-share").on("click",(function(){navigator.share?navigator.share({title:"Share This Page",url:window.location}).then((()=>{console.log("Thanks for sharing!")})).catch((e=>{console.log("Couldnt share because of",e.message)})):(e("#panel-share").toggleClass("active"),console.log("navigator.share not supported!"))})),e(".panel-share-close").on("click",(function(){e("#panel-share").removeClass("active")})),e("#nav-primary-toggle").on("click",(function(){e(".nav-primary").toggleClass("open"),e(".nav-backdrop").toggleClass("show")})),e(".toggle").on("click",(function(i){var s=e(this).parents(".checkout-step.active");s.removeClass("active"),s.next().addClass("active")}));var s=e(document);if(s.on("scroll",(function(){s.scrollTop()>=800?(e("#fixed-sidebar").addClass(" block"),e("#fixed-sidebar").removeClass("hidden")):(e("#fixed-sidebar").removeClass("block"),e("#fixed-sidebar").addClass(" hidden"))})),e(".toggler").on("click",(function(){e(this).parents("#fixed-sidebar").toggleClass("hide")})),e(document).ready((function(){var i=e("#checkout-summary-fixed").outerHeight();e("#checkout-summary-fixed").css("bottom","-"+i+"px")})),e("#checkout-summary-toggle").on("click",(function(){e(this).toggleClass("active");var i=e("#checkout-summary-fixed").outerHeight();e("#checkout-summary-fixed").hasClass("active")?(e("#checkout-summary-fixed").css("bottom","-"+i+"px"),e("#checkout-summary-fixed").removeClass("active")):(e("#checkout-summary-fixed").css("bottom","50px"),e("#checkout-summary-fixed").addClass("active"))})),e('input[name="card_number"]').on("keyup",(function(){this.value.length==this.maxLength&&e('input[name="expiry_date"]').focus()})),e('input[name="expiry_date"]').on("keyup",(function(){this.value.length==this.maxLength&&e('input[name="cvc"]').focus()})),e(window).on("scroll",(function(){e(document).scrollTop()>300?e(".fixed-side").addClass("fixed-side-show"):e(".fixed-side").removeClass("fixed-side-show"),e(document).scrollTop()>350?e(".fixed-side").addClass("fixed-desktop"):e(".fixed-side").removeClass("fixed-desktop")})),e(document).on("ready",(function(){if("true"==localStorage.getItem("chat-initialised")){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=("https:"==document.location.protocol?"https://":"http://")+"cdn.chatbot.com/widget/plugin.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(e,i),window.BE_API=window.BE_API||{},window.BE_API.onBeforeLoad=function(){return!1}}})),window.__be=window.__be||{},window.__be.id="YOUR STORY ID",e(".cta-chat-fixed .chat-method-chat").on("click",(function(){if("true"==localStorage.getItem("chat-initialised"))window.BE_API=window.BE_API||{},window.BE_API.isInitialized()?(console.log("is initialized"),window.BE_API.openChatWindow()):(window.BE_API.create(),window.BE_API.onLoad=function(){window.BE_API.openChatWindow()});else{localStorage.setItem("chat-initialised","true");var i=document.createElement("script");i.type="text/javascript",i.async=!0,i.src=("https:"==document.location.protocol?"https://":"http://")+"cdn.chatbot.com/widget/plugin.js";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(i,s),window.BE_API=window.BE_API||{},window.BE_API.openChatWindow()}e(this).closest(".cta-chat-fixed").addClass("chat-open")})),window.BE_API=window.BE_API||{},window.BE_API.onChatWindowClose=function(){window.BE_API.hideChatWindow(),e(".cta-chat-fixed").removeClass("chat-open")},e(window).width()>1024){var o=[];e(".mega-menu").each((function(){var i=e(this).data("mega-menu");o.push(i)})),e("#header .menu-item").hover((function(){for(var i=0;i<o.length;i++)if(e(this).hasClass(o[i])){e('[data-mega-menu="'+o[i]+'"]').show(),e(".mega-menu-background").show();break}}),(function(){e(".mega-menu").hide(),e(".mega-menu-background").hide()})),e(".mega-menu").hover((function(){e(this).show(),e(".mega-menu-background").show()}),(function(){e(this).hide(),e(".mega-menu-background").hide()}))}}(jQuery);s("./scripts/forms.js");var c=s("../node_modules/@fortawesome/fontawesome-svg-core/index.mjs"),d=s("../node_modules/@fortawesome/pro-solid-svg-icons/index.es.js"),p=s("../node_modules/@fortawesome/free-brands-svg-icons/index.es.js");(0,o.Z)((async e=>{e&&console.error(e)})),jQuery.event.special.touchstart={setup:function(e,i,s){this.addEventListener("touchstart",s,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.touchmove={setup:function(e,i,s){this.addEventListener("touchmove",s,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.wheel={setup:function(e,i,s){this.addEventListener("wheel",s,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,i,s){this.addEventListener("mousewheel",s,{passive:!0})}};n()().observe(),a.KR.bind(),c.vc.searchPseudoElements=!0,c.vI.add(d.j1w,d.KNi,d.wf8,d.FU$,d.dwZ,d.FGq,d.xiG,p.neY,p.AYu,p.mdU,p.Zzi,p.opf,p.Xs4,p.D9H,p.hwn,d.Uu6,d.I4f,d.eFW,d.NBC,d.zBy,d.mTx,d._tD,d.ptq,d.A35,d.x_I,d.ILF,d.DD4,d.LEp,d.Tab,d.Elr,d.TL5,d.wp6,d.sNQ,p.VHX,d.isG,d.SIt,d.neB,d.fT7,d.Kl4,d.r8p,d.HIv,d.eDR,d.lhK,d.woC,d.TpO,d.l27,d.fTs,d.zc,d.WA2),c.vz.i2svg()},"./scripts/forms.js":()=>{var e;(e=jQuery)(".icaal-contact-form").on("submit",(function(i){var s=e(this),o=s.attr("data-form"),t=s.find(".submit"),n=s.find(".response"),a=s.serializeArray(),l=new FormData,r=icaal_options.api_key_name_1,c=icaal_options.api_key_name_2,d=icaal_options.api_key_name_3,p=icaal_options.api_key_name_4,u=icaal_options.api_key_name_5,h="",m=!1;switch(o){case r:h=icaal_options.api_key_1,m=!0;break;case c:h=icaal_options.api_key_2,m=!0;break;case d:h=icaal_options.api_key_3,m=!0;break;case p:h=icaal_options.api_key_4,m=!0;break;case u:h=icaal_options.api_key_5,m=!0;break;default:m=!1}return m?(t.addClass("btn-loading").prop("disabled",!0),n.empty(),e.each(a,(function(e,i){l.append(i.name,i.value)})),s.find('[type="file"]').length>0&&e.each(s.find('[type="file"]'),(function(i,s){var o=e(this).attr("name");e.each(e(this)[0].files,(function(e,i){l.append(o,i)}))})),l.append("security",nonce),e.ajax({url:"https://api.clients.icaal.co.uk/forms/"+h,method:"post",contentType:!1,processData:!1,data:l}).done((function(e){e.redirect_to?location.assign(e.redirect_to):e.message&&n.addAlert("success",e.message),s.find("input").addClass("is-valid").removeClass("is-invalid"),s.find(".invalid-feedback").empty(),s.trigger("reset"),s.trigger("success"),s.trigger("complete")})).fail((function(i){var o=i.responseJSON.errors,a=i.responseJSON.error;t.removeClass("btn-loading").prop("disabled",!1),o?(s.find("input").addClass("is-valid").removeClass("is-invalid"),s.find(".invalid-feedback").empty(),e.each(o,(function(i,s){e("[name="+i+"]").addClass("is-invalid").removeClass("is-valid"),e("[name="+i+"]").next(".invalid-feedback").text(s)})),s.trigger("complete")):a&&(n.addAlert("danger",a),s.trigger("complete"))}))):n.addAlert("danger","No / Incorrect API Key Name Set"),s.on("success",(function(){"function"==typeof ga&&ga("send","event","Enquiry","submit"),"function"==typeof gtag&&gtag("event","Enquiry",{event_category:"submit"}),"function"==typeof __gaTracker&&__gaTracker("send","event","Enquiry","submit")})),s.on("complete",(function(){var e=icaal_options.custom_html;n.append(e)})),!1})),e.fn.addAlert=function(i,s,o,t){var n="";if(o){var a=[];e.each(o,(function(e,i){"The g-recaptcha-response field is required."==i&&(i="reCAPTCHA needs to confirmed.");var s=i;"base"==(e=e.replace(/_/g," "))&&(s=i),a.push("<li>"+s+"</li>")})),s=o='<p style="font-size: 1.4em; font-weight: bold;">'+s+'</p><ul class="mb-0">'+(o=a.join(""))+"</ul>"}t&&(n='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'),this.append('<div class="alert alert-'+i+'">'+n+s+"</div>")}},"./styles/app.scss":()=>{},jquery:e=>{"use strict";e.exports=window.jQuery}},e=>{var i=i=>e(e.s=i);e.O(0,[259,597],(()=>(i("./scripts/app.js"),i("./styles/app.scss"))));e.O()}]);