(self.webpackChunk_roots_bud_sage_sage=self.webpackChunk_roots_bud_sage_sage||[]).push([[143],{"./scripts/app.js":(e,i,a)=>{"use strict";var s=a("../node_modules/@roots/sage/lib/client/dom-ready.js"),t=(a("jquery"),a("../node_modules/lozad/dist/lozad.min.js")),o=a.n(t),n=a("../node_modules/aos/dist/aos.js"),r=a.n(n),d=(a("../node_modules/slick-carousel/slick/slick.min.js"),a("../node_modules/@fancyapps/ui/dist/index.esm.js")),l=a("../node_modules/mixitup/dist/mixitup.js"),c=a.n(l);!function(e){e("#menu-header-menu li.menu-item-has-children").append('<div class="toggle lg:hidden absolute z-20 top-0 right-0 px-8 py-4"><svg class="svg-inline--fa fa-chevron-down fa-w-14" aria-hidden="true" focusable="false" data-prefix="fa" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg=""><path fill="currentColor" d="M207.029 381.476L12.686 187.132c-9.373-9.373-9.373-24.569 0-33.941l22.667-22.667c9.357-9.357 24.522-9.375 33.901-.04L224 284.505l154.745-154.021c9.379-9.335 24.544-9.317 33.901.04l22.667 22.667c9.373 9.373 9.373 24.569 0 33.941L240.971 381.476c-9.373 9.372-24.569 9.372-33.942 0z"></path></svg></div>');var i=200;e("#menu-header-menu > li.menu-item-has-children > .toggle").on("click",(function(){e(this).parent().hasClass("open")?(e(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),e(this).parent().parent().find(".sub-menu").slideUp(i)):(e(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),e(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(i),e(this).parent().toggleClass("open"),e(this).prev().slideToggle(i))})),e("#menu-header-menu > li.menu-item-has-children > .sub-menu > li.menu-item-has-children > .toggle").on("click",(function(){e(this).parent().hasClass("open")?(e(this).parent().parent().find("li.menu-item-has-children").removeClass("open"),e(this).parent().parent().find(".sub-menu").slideUp(i)):(e(this).parent().parent().find("li.menu-item-has-children.open").removeClass("open"),e(this).parent().parent().find("li.menu-item-has-children.open > .sub-menu").slideUp(i),e(this).parent().toggleClass("open"),e(this).prev().slideToggle(i))})),e("#menu-header-menu > li > .sub-menu > li.menu-item-has-children").on("hover",(function(){if(e(window).innerWidth()>991){var i=e(this).find("> ul.sub-menu"),a=e(i).outerWidth();e(window).innerWidth()>e(this).offset().left+e(this).outerWidth()+a?(e(i).css("transform","translateX(100%)"),e(i).css("right","0")):(e(i).css("transform","translateX(-100%)"),e(i).css("left","0"))}})),e(".slick-banner").on("init",(function(){var i=e(".slick-banner .hidden");i.length>1?e(".slick-banner .hidden").each((function(i,a){e(a).removeClass("hidden")})):i.removeClass("hidden")})),e(".slick-banner").slick({dots:!1,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),e(".slick-offer").slick({dots:!1,arrows:!1,fade:!1,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:2e3,infinite:!0}),e(".acc-slick").slick({slidesToShow:6,infinite:!0,swipeToSlide:!0,arrows:!1,autoplay:!0,autoplaySpeed:3e3,responsive:[{breakpoint:770,settings:{slidesToShow:4,infinite:!0,swipeToSlide:!0,arrows:!1,autoplay:!0,autoplaySpeed:3e3}},{breakpoint:480,settings:{slidesToShow:2,infinite:!0,swipeToSlide:!0,arrows:!1,autoplay:!0,autoplaySpeed:3e3}}]}),e(".slick-products").slick({slidesToShow:4,infinite:!0,swipeToSlide:!0,arrows:!1,centerMode:!1,autoplay:!0,autoplaySpeed:3e3,responsive:[{breakpoint:1380,settings:{slidesToShow:4,slidesToScroll:1,centerMode:!1}},{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,centerMode:!1}},{breakpoint:640,settings:{slidesToShow:1,slidesToScroll:1,centerMode:!1}}]}),e(".static-swatch").slick({slidesToShow:10,infinite:!0,swipeToSlide:!0,arrows:!0,centerMode:!1,autoplay:!0,autoplaySpeed:5e3,responsive:[{breakpoint:1380,settings:{slidesToShow:8,slidesToScroll:1,centerMode:!1}},{breakpoint:1024,settings:{slidesToShow:4,slidesToScroll:1,centerMode:!1}},{breakpoint:640,settings:{slidesToShow:3,slidesToScroll:1,centerMode:!1}}]}),e(".slick-news").slick({slidesToShow:1,infinite:!0,swipeToSlide:!0,arrows:!0,centerMode:!1,autoplay:!1,autoplaySpeed:3e3,prevArrow:e(".offer-arrow-p"),nextArrow:e(".offer-arrow-n")}),e(".accordion-case-study-slick").slick({slidesToShow:2,infinite:!0,swipeToSlide:!0,arrows:!0,centerMode:!1,autoplay:!1,autoplaySpeed:3e3,prevArrow:e(".case-study-arrow-p"),nextArrow:e(".case-study-arrow-n"),responsive:[{breakpoint:600,settings:{slidesToShow:1,slidesToScroll:1,centerMode:!1}}]}),e(".testimonials-carousel").slick({dots:!0,arrows:!1,fade:!0,cssEase:"ease-in-out",slidesToShow:1,slidestoScroll:1,autoplay:!0,autoplaySpeed:4e3,speed:1e3,infinite:!0}),e(".video-modal-play").on("click",(function(){var i=e(this).data("src");e(this).parent().find(".video-frame").attr("src",i),e(this).parent().find(".video-modal").css("display","flex")})),e(".closevideo-modal").on("click",(function(){var i=e(this).parent().parent();e(this).parent().find(".video-frame").attr("src",""),i.hide()})),e(".left-column").children(":odd").appendTo(".right-column"),e(".left-column").children().first().find(".benefit-answer").css("display","block"),e(".left-column").children().first().find(".fa-minus").css("display","block"),e(".left-column").children().first().find(".fa-plus").css("display","none"),e(".right-column").children().last().find(".benefit-answer").css("display","block"),e(".right-column").children().last().find(".fa-minus").css("display","block"),e(".right-column").children().last().find(".fa-plus").css("display","none"),e(".benefit").on("click",(function(){e(".benefit-answer",this).slideToggle(),e(".fa-plus",this).toggle(),e(".fa-minus",this).toggle()})),e(".slick-gallery-slider").slick({dots:!1,arrows:!1,infinite:!1,slidesToShow:1,autoplay:!0,slidesToScroll:1,swipeToSlide:!0,draggable:!0,centerMode:!1}),e(".slick-landing-image-slider").slick({slidesToShow:1,autoplay:!0,autoplaySpeed:5e3,dots:!0,infinite:!0,arrows:!1}),e(".image_slider_main").slick({slidesToShow:1,slidesToScroll:1,arrows:!1,centerMode:!0,fade:!0,asNavFor:".image_slider_thmb"});(e(".gripcore-key-features-slider").slick({slidesToShow:4,autoplay:!0,arrows:!1,responsive:[{breakpoint:640,settings:{slidesToShow:1,autoplay:!0}}]}),e(".image_slider_thmb").slick({slidesToShow:3,slidesToScroll:1,asNavFor:".image_slider_main",arrows:!1,focusOnSelect:!0,initialSlide:3}),e(".why-choose-us-slick").slick({slidesToShow:3,autoplay:!0,autoplaySpeed:5e3,dots:!0,infinite:!0,arrows:!1,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:1,centerMode:!1}},{breakpoint:640,settings:{slidesToShow:1,slidesToScroll:1,centerMode:!1}}]}),e(".slick-p").on("click",(function(){e(this).parent().find(".slick-slider").slick("slickPrev")})),e(".slick-n").on("click",(function(){e(this).parent().find(".slick-slider").slick("slickNext")})),e(".mix-container-products").length)&&(c()(".mix-container-products",{load:{filter:".product-range-1"}})&&console.log("mix"));const a=new URLSearchParams(window.location.search).get("filter");var s=e(".mix-container");a?c()(s,{load:{filter:"."+a}}):e(".mix-container").length&&c()(".mix-container")&&console.log("mix");function t(){e(".scroll-container").each((function(){var i=e(this);i[0].scrollWidth>i[0].clientWidth?i.removeClass("overflow-x-hidden").addClass("overflow-x-scroll"):i.removeClass("overflow-x-scroll").addClass("overflow-x-hidden")}))}e(".accordion-item-header").on("click",(function(){var i=e(this).siblings(".accordion-item-content");e(".accordion-item-content").not(i).slideUp(),i.slideToggle(),e(this).find("svg").toggleClass("rotateChevron")})),e(document).ready((function(){t(),e(window).on("resize",(function(){t()}))})),e(document).on("click",'a[href^="#"]',(function(i){i.preventDefault(),e("html, body").animate({scrollTop:e(e.attr(this,"href")).offset().top-130},700)})),e.fn.CookieNotice=function(){if(!localStorage.getItem("cookie-notice-dismissed")){var e=this;setTimeout((function(){e.addClass("active")}),1e3)}return this.addClass("cookie-notice"),this},e(document).on("click",".cookie-notice-dismiss",(function(){localStorage.setItem("cookie-notice-dismissed",!0),e(this).parents(".cookie-notice").removeClass("active")})),e("#cookie-notice").CookieNotice(),e(".page-share").on("click",(function(){navigator.share?navigator.share({title:"Share This Page",url:window.location}).then((()=>{console.log("Thanks for sharing!")})).catch((e=>{console.log("Couldnt share because of",e.message)})):(e("#panel-share").toggleClass("active"),console.log("navigator.share not supported!"))})),e(".panel-share-close").on("click",(function(){e("#panel-share").removeClass("active")})),e("#nav-primary-toggle").on("click",(function(){e(".nav-primary").toggleClass("open"),e(".nav-backdrop").toggleClass("show")})),e(".toggle").on("click",(function(i){var a=e(this).parents(".checkout-step.active");a.removeClass("active"),a.next().addClass("active")}));var o=e(document);if(o.on("scroll",(function(){o.scrollTop()>=800?(e("#fixed-sidebar").addClass(" block"),e("#fixed-sidebar").removeClass("hidden")):(e("#fixed-sidebar").removeClass("block"),e("#fixed-sidebar").addClass(" hidden"))})),e(".toggler").on("click",(function(){e(this).parents("#fixed-sidebar").toggleClass("hide")})),e(document).ready((function(){var i=e("#checkout-summary-fixed").outerHeight();e("#checkout-summary-fixed").css("bottom","-"+i+"px")})),e("#checkout-summary-toggle").on("click",(function(){e(this).toggleClass("active");var i=e("#checkout-summary-fixed").outerHeight();e("#checkout-summary-fixed").hasClass("active")?(e("#checkout-summary-fixed").css("bottom","-"+i+"px"),e("#checkout-summary-fixed").removeClass("active")):(e("#checkout-summary-fixed").css("bottom","50px"),e("#checkout-summary-fixed").addClass("active"))})),e('input[name="card_number"]').on("keyup",(function(){this.value.length==this.maxLength&&e('input[name="expiry_date"]').focus()})),e('input[name="expiry_date"]').on("keyup",(function(){this.value.length==this.maxLength&&e('input[name="cvc"]').focus()})),e(window).on("scroll",(function(){e(document).scrollTop()>300?e(".fixed-side").addClass("fixed-side-show"):e(".fixed-side").removeClass("fixed-side-show"),e(document).scrollTop()>350?e(".fixed-side").addClass("fixed-desktop"):e(".fixed-side").removeClass("fixed-desktop")})),e(document).on("ready",(function(){if("true"==localStorage.getItem("chat-initialised")){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src=("https:"==document.location.protocol?"https://":"http://")+"cdn.chatbot.com/widget/plugin.js";var i=document.getElementsByTagName("script")[0];i.parentNode.insertBefore(e,i),window.BE_API=window.BE_API||{},window.BE_API.onBeforeLoad=function(){return!1}}})),window.__be=window.__be||{},window.__be.id="YOUR STORY ID",e(".cta-chat-fixed .chat-method-chat").on("click",(function(){if("true"==localStorage.getItem("chat-initialised"))window.BE_API=window.BE_API||{},window.BE_API.isInitialized()?(console.log("is initialized"),window.BE_API.openChatWindow()):(window.BE_API.create(),window.BE_API.onLoad=function(){window.BE_API.openChatWindow()});else{localStorage.setItem("chat-initialised","true");var i=document.createElement("script");i.type="text/javascript",i.async=!0,i.src=("https:"==document.location.protocol?"https://":"http://")+"cdn.chatbot.com/widget/plugin.js";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(i,a),window.BE_API=window.BE_API||{},window.BE_API.openChatWindow()}e(this).closest(".cta-chat-fixed").addClass("chat-open")})),window.BE_API=window.BE_API||{},window.BE_API.onChatWindowClose=function(){window.BE_API.hideChatWindow(),e(".cta-chat-fixed").removeClass("chat-open")},e(window).width()>1024){var n=[];e(".mega-menu").each((function(){var i=e(this).data("mega-menu");n.push(i)})),e("#header .menu-item").hover((function(){for(var i=0;i<n.length;i++)if(e(this).hasClass(n[i])){e('[data-mega-menu="'+n[i]+'"]').show(),e(".mega-menu-background").show();break}}),(function(){e(".mega-menu").hide(),e(".mega-menu-background").hide()})),e(".mega-menu").hover((function(){e(this).show(),e(".mega-menu-background").show()}),(function(){e(this).hide(),e(".mega-menu-background").hide()}))}var r={dots:!1,arrows:!1,slidesToShow:5,autoplay:!0,responsive:[{breakpoint:640,settings:{slidesToShow:1,autoplay:!0}}]},d={dots:!1,arrows:!1,slidesToShow:2,responsive:[{breakpoint:640,settings:{slidesToShow:1}}]};function t(){e(".scroll-container").each((function(){var i=e(this);i[0].scrollWidth>i[0].clientWidth?i.removeClass("overflow-x-hidden").addClass("overflow-x-scroll"):i.removeClass("overflow-x-scroll").addClass("overflow-x-hidden")}))}e(".product-specification-tabs-slider").slick(r),e(".product-specification-tabs-brochure-slider").slick(d),e("#slider").on("input change",(i=>{const a=i.target.value;e(".foreground-img").css("width",`${a}%`),e(".slider-button").css("left",`calc(${a}%)`)})),e(".slider").on("input",(function(){var i=e(this).val();e(this).parent().find(".img-top").css({"clip-path":"polygon(0 0,"+i+"% 0,"+i+"% 100%, 0 100%)"})})),e(".product_group_features-btn").on("click",(function(){var i=e(this).data("modal-hotspot"),a=e(this).parent();a.find("[data-modal]").addClass("hidden"),a.find("[data-modal]").removeClass("flex"),a.find('[data-modal="'+i+'"]').toggleClass("hidden").addClass("flex")})),e(".modal-close").on("click",(function(){var i=e(this).parent().parent();i.toggleClass("hidden"),i.toggleClass("flex")}));var l=e('[data-container-configurator="color"]'),p=e('[data-configurator="color"]'),u=e('[data-container-configurator="glazing"]'),f=e("[data-image-glazing");p.append(f),e("[data-product-spec-btn]").on("click",(function(){var i=e(this).parent().parent().parent(),a=e(this).data("product-spec-btn"),s=e(this).data("content-type");"slider"==s?(i.find(".product-specification-tabs-slider").slick("unslick"),i.find(".product-specification-tabs-slider").slick(r)):"brochures"==s?(i.find(".product-specification-tabs-brochure-slider").slick("unslick"),i.find(".product-specification-tabs-brochure-slider").slick(d)):"glazing"==s?u.append(p):"color_family"==s&&l.append(p),i.find("[data-product-spec-btn]").removeClass("active"),e(this).addClass("active"),i.find("[data-product-spec-tab]").hide(),i.find('[data-product-spec-tab="'+a+'"]').show()})),e("[data-image-swatch-glazing]").on("click",(function(){var i=e(this).parent().parent(),a=e(this).data("image-swatch-glazing");i.find("[data-image-glazing]").hide(),i.find("[data-image-glazing]").removeClass("active"),i.find("[data-image-glazing="+a+"]").show(),i.find("[data-image-glazing="+a+"]").addClass("active");var s=i.find("[data-image-featured].active");s.find(".featured_front").show(),s.find(".featured_back").hide();var t=i.find("[data-image-glazing].active");t.find(".glazing_front").show(),t.find(".glazing_back").hide()})),e("[data-image-swatch]").on("click",(function(){var i=e(this).closest(".container"),a=e(this).data("image-swatch"),s=i.find(e("[data-image-glazing].active"));i.find("[data-image-featured]",this).hide().removeClass("active"),i.find('[data-image-featured="'+a+'"]').show().addClass("active"),i.find('[data-image-featured="'+a+'"]').find(".featured_front").show(),i.find('[data-image-featured="'+a+'"]').find(".featured_back").hide(),s.find(".glazing_front").show(),s.find(".glazing_back").hide()})),e(".turn-around").on("click",(function(){var i=e(this).parent(),a=e(this).closest("[data-configurator]");i.find(".featured_front").toggle(),i.find(".featured_back").toggle();var s=a.find(e("[data-image-glazing].active"));s.find(".glazing_front").toggle(),s.find(".glazing_back").toggle()})),e(".accordion_family_name").on("click",(function(){e(".accordion_family_name").removeClass("active"),e(this).addClass("active");var i=e(this).parent(),a=e(this).closest("[data-product-spec-tab]");i.parent().find(".fa-chevron-down").css("transform","rotate(0deg)"),e(this).find(".fa-chevron-down").css("transform","rotate(180deg)"),i.parent().find(".accordion_family_swatches").slideUp(),i.find(".accordion_family_swatches").slideDown({start:function(){e(this).css({display:"flex"})}});var s=e(this).parent().find("[data-image-swatch]").eq(0).attr("data-image-swatch");a.find("[data-image-featured]").hide().removeClass("active"),a.find('[data-image-featured="'+s+'"]').show().addClass("active"),a.find('[data-image-featured="'+s+'"]').find(".featured_front").show(),a.find('[data-image-featured="'+s+'"]').find(".featured_back").hide();var t=a.find(e("[data-image-glazing].active"));t.find(".glazing_front").show(),t.find(".glazing_back").hide()}));var h=new Date("2024-03-08T23:59:59").getTime(),m=setInterval((function(){var i=(new Date).getTime(),a=h-i,s=Math.floor(a/864e5),t=Math.floor(a%864e5/36e5),o=Math.floor(a%36e5/6e4),n=Math.floor(a%6e4/1e3);e("#countdown").html(s+"D "+t+"H "+o+"M "+n+"S  LEFT"),a<0&&(clearInterval(m),e("#countdown").html("EXPIRED"))}),1e3);function g(){sessionStorage.getItem("configuratorClosed")||e(".configurator-bar").each((function(){var i,a,s,t,o=e(this),n=o.closest("#product-specification-tabs");n.length&&!n.is('[style*="none"]')&&(i=o,a=e(window).scrollTop(),s=a+e(window).height(),(t=e(i).offset().top)+e(i).height()<=s&&t>=a)&&o.has("[data-product-spec-btn='glazing']").length&&o.has("[data-product-spec-btn='colours']").length?(o.siblings(".backdrop").addClass("active"),o.siblings(".configurator-tooltip").addClass("active"),o.addClass("active")):(o.siblings(".backdrop").removeClass("active"),o.siblings(".configurator-tooltip").removeClass("active"),o.removeClass("active"))}))}e(document).ready((function(){const i=e("#flippableContainer"),a=e(".front");let s=!1;setInterval((function(){s?(i.css("transform","rotateY(0deg)"),a.css("opacity","100")):(i.css("transform","rotateY(180deg)"),a.css("opacity","0")),s=!s}),9e3)})),e(".close-tooltip").on("click",(function(){e(".backdrop").removeClass("active"),e(".configurator-tooltip ").removeClass("active"),e(".configurator-bar ").removeClass("active"),sessionStorage.setItem("configuratorClosed","true")})),g(),e(window).on("scroll",(function(){g()}));var v=e(".slick-gallery-slider"),w=e(".progress"),k=e(".slider__label");v.on("beforeChange",(function(e,i,a,s){var t=s/(i.slideCount-1)*100;w.css("background-size",t+"% 100%").attr("aria-valuenow",t),k.text(t+"% completed")}))}(jQuery);a("./scripts/forms.js");var p,u=a("../node_modules/@fortawesome/fontawesome-svg-core/index.mjs"),f=a("../node_modules/@fortawesome/pro-solid-svg-icons/index.es.js"),h=a("../node_modules/@fortawesome/free-brands-svg-icons/index.es.js");const m=async e=>{e&&console.error(e)};(0,s.Z)(m),null===(p=void 0)||void 0===p||p.accept(m),jQuery.event.special.touchstart={setup:function(e,i,a){this.addEventListener("touchstart",a,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.touchmove={setup:function(e,i,a){this.addEventListener("touchmove",a,{passive:!i.includes("noPreventDefault")})}},jQuery.event.special.wheel={setup:function(e,i,a){this.addEventListener("wheel",a,{passive:!0})}},jQuery.event.special.mousewheel={setup:function(e,i,a){this.addEventListener("mousewheel",a,{passive:!0})}};o()().observe(),r().init(),d.KR.bind(),u.vc.searchPseudoElements=!0,u.vI.add(f.j1w,f.KNi,f.wf8,f.FU$,f.dwZ,f.FGq,f.xiG,h.neY,h.AYu,h.mdU,h.Zzi,h.opf,h.Xs4,h.D9H,h.hwn,f.Uu6,f.I4f,f.eFW,f.NBC,f.zBy,f.mTx,f._tD,f.ptq,f.A35,f.x_I,f.ILF,f.DD4,f.LEp,f.Tab,f.Elr,f.TL5,f.wp6,f.sNQ,h.VHX,f.isG,f.SIt,f.neB,f.fT7,f.Kl4,f.r8p,f.HIv,f.eDR,f.lhK,f.woC,f.TpO,f.l27,f.fTs,f.zc,f.WA2,f.FVb,f.TTX,f.KGp,f.FNr,f.SZw,f.T80,f.yYj,f.klh,f.gr5,f.FKd,f.HXv,f.Psp),u.vz.i2svg()},"./scripts/forms.js":()=>{var e;(e=jQuery)(".icaal-contact-form").on("submit",(function(i){var a=e(this),s=a.attr("data-form"),t=a.find(".submit"),o=a.find(".response"),n=a.serializeArray(),r=new FormData,d=icaal_options.api_key_name_1,l=icaal_options.api_key_name_2,c=icaal_options.api_key_name_3,p=icaal_options.api_key_name_4,u=icaal_options.api_key_name_5,f="",h=!1;switch(s){case d:f=icaal_options.api_key_1,h=!0;break;case l:f=icaal_options.api_key_2,h=!0;break;case c:f=icaal_options.api_key_3,h=!0;break;case p:f=icaal_options.api_key_4,h=!0;break;case u:f=icaal_options.api_key_5,h=!0;break;default:h=!1}return h?(t.addClass("btn-loading").prop("disabled",!0),o.empty(),e.each(n,(function(e,i){r.append(i.name,i.value)})),a.find('[type="file"]').length>0&&e.each(a.find('[type="file"]'),(function(i,a){var s=e(this).attr("name");e.each(e(this)[0].files,(function(e,i){r.append(s,i)}))})),r.append("security",nonce),e.ajax({url:"https://api.clients.icaal.co.uk/forms/"+f,method:"post",contentType:!1,processData:!1,data:r}).done((function(e){e.redirect_to?location.assign(e.redirect_to):e.message&&o.addAlert("success",e.message),a.find("input").addClass("is-valid").removeClass("is-invalid"),a.find(".invalid-feedback").empty(),a.trigger("reset"),a.trigger("success"),a.trigger("complete")})).fail((function(i){var s=i.responseJSON.errors,n=i.responseJSON.error;t.removeClass("btn-loading").prop("disabled",!1),s?(a.find("input").addClass("is-valid").removeClass("is-invalid"),a.find(".invalid-feedback").empty(),e.each(s,(function(i,a){e("[name="+i+"]").addClass("is-invalid").removeClass("is-valid"),e("[name="+i+"]").next(".invalid-feedback").text(a)})),a.trigger("complete")):n&&(o.addAlert("danger",n),a.trigger("complete"))}))):o.addAlert("danger","No / Incorrect API Key Name Set"),a.on("success",(function(){"function"==typeof ga&&ga("send","event","Enquiry","submit"),"function"==typeof gtag&&gtag("event","Enquiry",{event_category:"submit"}),"function"==typeof __gaTracker&&__gaTracker("send","event","Enquiry","submit")})),a.on("complete",(function(){var e=icaal_options.custom_html;o.append(e)})),!1})),e.fn.addAlert=function(i,a,s,t){var o="";if(s){var n=[];e.each(s,(function(e,i){"The g-recaptcha-response field is required."==i&&(i="reCAPTCHA needs to confirmed.");var a=i;"base"==(e=e.replace(/_/g," "))&&(a=i),n.push("<li>"+a+"</li>")})),a=s='<p style="font-size: 1.4em; font-weight: bold;">'+a+'</p><ul class="mb-0">'+(s=n.join(""))+"</ul>"}t&&(o='<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'),this.append('<div class="alert alert-'+i+'">'+o+a+"</div>")}},"./styles/app.scss":()=>{},jquery:e=>{"use strict";e.exports=window.jQuery}},e=>{var i=i=>e(e.s=i);e.O(0,[259,907],(()=>(i("./scripts/app.js"),i("./styles/app.scss"))));e.O()}]);