



$('#userTel').focus(function() {
        $('.select-country').addClass("active2");
        $('#userTel').addClass("ready");
    });

var el = document.querySelector('#userTel');

function blurr() {
    if ($('#userTel').val() == '') {
    $('#userTel').attr("placeholder","Ваш телефон");
    $('.select-country').removeClass("active2");
    $('#userTel').removeClass("ready");
    }
}

el.onblur = function() {
    setTimeout(blurr, 10);
};

document.querySelector('.select-country').onmousedown = function(e) {
  if (document.activeElement === el) {
    e.preventDefault();
  }
};
document.querySelector('.select-country__list').onmousedown = function(e) {
        $('#userTel').val('');
        $('#userTel').attr("placeholder","");
  if (document.activeElement === el) {
    e.preventDefault();
  }
};

function visabilityCoutry(e){
    var countryBlock = e.target.className;
    var split = countryBlock.split(" ");
    var selectCountry = $(".select-country");
    if(split[0] === "select-country" || split[0] === "select-country__triangle") {
        if (!selectCountry.hasClass("active")) {
            selectCountry.addClass("active");
            $(".select-country__list").fadeIn(100);
        } 
        else {
            selectCountry.removeClass("active");
            $(".select-country__list").fadeOut(100);
        }
    }
    else {
        selectCountry.removeClass("active");
        $(".select-country__list").fadeOut(100);
    }
}

$("body").click(function (e) {
    visabilityCoutry(e);
});


$(".select-country__item").click(function () {
    if ($(this).parents().siblings(".select-country").hasClass("ua")) {
        $(this).parents().siblings(".select-country").removeClass("ua");
    }
    else if ($(this).parents().siblings(".select-country").hasClass("ru")) {
        $(this).parents().siblings(".select-country").removeClass("ru");
    }
    else if ($(this).parents().siblings(".select-country").hasClass("by")) {
        $(this).parents().siblings(".select-country").removeClass("by");
    }
    else if ($(this).parents().siblings(".select-country").hasClass("kz")) {
        $(this).parents().siblings(".select-country").removeClass("kz");
    }

var country = $(this).data("country");

$(this).parents().siblings(".select-country").addClass(country);

if ($(this).parents().siblings(".select-country").hasClass("ua")) {
    $("input[name='country']").val('UA');
Inputmask.extendDefinitions({

    '~': {
        validator: "[1245679]"
    }

});

    $("input[name='phone']").inputmask({
      mask: "+38 (0~9) 999-99-99",
      greedy: false,
      clearIncomplete: true,
      placeholder: "_",
      rightAlign: false,
      showMaskOnHover: false,
      showMaskOnFocus: true
    });
            } else if ($(this).parents().siblings(".select-country").hasClass("ru")) {
                    $("input[name='country']").val('RU');
                Inputmask.extendDefinitions({
                    '~': {
                        validator: "[123456789]"
                    },
                    'k': {
                        validator: "[1234569]"
                    }
                });

                $("input[name='phone']").inputmask({
                    mask: "+7 (k~9) 999-99-99",
                    greedy: false,
                    clearIncomplete: true,
                    placeholder: "_",
                    rightAlign: false,
                    showMaskOnHover: false,
                    showMaskOnFocus: true
                });
            } else if ($(this).parents().siblings(".select-country").hasClass("by")) {
                    $("input[name='country']").val('BY');
                Inputmask.extendDefinitions({
                    '~': {
                        validator: "[3459]"
                    },
                    'k': {
                        validator: "[234]"
                    }
                });

                $("input[name='phone']").inputmask({
                    mask: "+375 (k~) 999-99-99",
                    greedy: false,
                    clearIncomplete: true,
                    placeholder: "_",
                    rightAlign: false,
                    showMaskOnHover: false,
                    showMaskOnFocus: true
                });
            } else if ($(this).parents().siblings(".select-country").hasClass("kz")) {
                    $("input[name='country']").val('KZ');
                Inputmask.extendDefinitions({

                    'k': {
                        validator: "[7]"
                    }
                });

                $("input[name='phone']").inputmask({
                    mask: "+7 (k99) 999-99-99",
                    greedy: false,
                    clearIncomplete: true,
                    placeholder: "_",
                    rightAlign: false,
                    showMaskOnHover: false,
                    showMaskOnFocus: true
                });
            }

            $(this).parents().siblings(".select-country").removeClass("active");

            $(".select-country__list").fadeOut("slow");
        });



/**
 *     // const frames = [
    //     `
    //     <iframe 
    //         width="650" 
    //         height="305" 
    //         src="https://www.youtube.com/embed/bd-KpqIyLUk" 
    //         frameborder="0" allow="accelerometer; autoplay; 
    //         encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    //     </iframe>
    //     `,
    //     `
    //     <iframe 
    //         width="650" 
    //         height="305" 
    //         src="https://www.youtube.com/embed/l5vMacnir7E" 
    //         frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
    //         allowfullscreen>
    //     </iframe>
    //     `,
    //     `
    //     <iframe 
    //         width="650" 
    //         height="305" 
    //         src="https://www.youtube.com/embed/X4UJ36mcSdk" 
    //         frameborder="0" 
    //         allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" 
    //         allowfullscreen>
    //     </iframe>
    //     `
    // ];
    //const close = document.querySelector(".close");
    // close
 */



/************ переключалка *************/

$(document).ready(function() {

    var videoTogle = document.getElementById('videoTogle');
    var FunctionTogle = document.getElementById('FunctionTogle');
    var priceTogle = document.getElementById('priceTogle');

    var videoBlockVideo = document.getElementById('videoBlockVideo');
    var videoModal1 = document.getElementById('video-modal1');
    var videoModal2 = document.getElementById('video-modal2');
    var videoModal3 = document.getElementById('video-modal3');
    var videoBlockFunction = document.getElementById('videoBlockFunction');
    var priceBlockTogle = document.getElementById('priceBlockTogle');

    var FunctionTabs = document.getElementById('FunctionTabs');
    var mainTabs = document.getElementById('mainTabs');

    var screen = document.getElementById('screen');

    var macmac = document.getElementById('macmac');

    videoTogle.onclick = function() {
        videoBlockVideo.classList.remove('hide');
        videoModal1.classList.remove('hide');
        videoModal2.classList.remove('hide');
        videoModal3.classList.remove('hide');
        videoBlockFunction.classList.add('hide');
        priceBlockTogle.classList.add('hide');
        videoTogle.classList.add('--border-top');
        FunctionTogle.classList.remove('--border-top');
        priceTogle.classList.remove('--border-top');
        mainTabs.scrollLeft = 0;
    }

    FunctionTogle.onclick = function() {
        videoBlockVideo.classList.add('hide');
        videoModal1.classList.add('hide');
        videoModal2.classList.add('hide');
        videoModal3.classList.add('hide');
        priceBlockTogle.classList.add('hide');
        videoBlockFunction.classList.remove('hide');
        FunctionTogle.classList.add('--border-top');
        videoTogle.classList.remove('--border-top');
        priceTogle.classList.remove('--border-top');
        mainTabs.scrollLeft = 30;
    }

    priceTogle.onclick = function() {
        videoBlockVideo.classList.add('hide');
        videoModal1.classList.add('hide');
        videoModal2.classList.add('hide');
        videoModal3.classList.add('hide');
        videoBlockFunction.classList.add('hide');
        priceBlockTogle.classList.remove('hide');
        priceTogle.classList.add('--border-top');
        videoTogle.classList.remove('--border-top');
        FunctionTogle.classList.remove('--border-top');
        mainTabs.scrollLeft = 100;
    }

    var SliderMacPer = 0;

    var doSwipe = new Hammer(macmac, {
        enable: true,
        recognizers: [
            [Hammer.Swipe, { direction: Hammer.DIRECTION_HORIZONTAL }]
        ]
    });

    doSwipe.on('swipeleft', function(ev) {
        if (SliderMacPer == 0) { //контроль
            $('#funStats').trigger( "click" );
        }
        else  if (SliderMacPer == 1) { //статистика
            $('#funUchet').trigger( "click" );
        }
        else  if (SliderMacPer == 2) { //учет
            $('#funIntegration').trigger( "click" );
        }
        else  if (SliderMacPer == 3) { //интеграция
            $('#funMobi').trigger( "click" );
        }
        else  if (SliderMacPer == 4) { //мобильность
            $('#funControls').trigger( "click" );
        }
        else {
            alert('ошибка '+SliderMacPer);
        }
    });

    doSwipe.on('swiperight', function(ev) {

        if (SliderMacPer == 0) { //контроль
            $('#funMobi').trigger( "click" );
        }
        else  if (SliderMacPer == 1) { //статистика
            $('#funControls').trigger( "click" );
        }
        else  if (SliderMacPer == 2) { //учет
            $('#funStats').trigger( "click" );
        }
        else  if (SliderMacPer == 3) { //интеграция
            $('#funUchet').trigger( "click" );
        }
        else  if (SliderMacPer == 4) { //мобильность
            $('#funIntegration').trigger( "click" );
        }
        else {
            alert('ошибка '+SliderMacPer);
        }
    });


    $('#funUchet').on('click', function() {
        SliderMacPer = 2;

        if(typeof(timer5) != "undefined" && timer5 !== null) {
            clearTimeout(timer5);
        }

        $('#funUchetX').attr('style','opacity: 1; transition: all .3s;');
        $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
        $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
        $('#funIntegrationX').attr('style','opacity: 0; transition: all .6s;');
        $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

        FunctionTabs.scrollLeft = 34;

    });

    $('#funStats').on('click', function() {
        SliderMacPer = 1;
        if(typeof(timer5) != "undefined" && timer5 !== null) {
            clearTimeout(timer5);
        }

        $('#funStatsX').attr('style','opacity: 1; transition: all .3s;');
        $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
        $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
        $('#funIntegrationX').attr('style','opacity: 0; transition: all .6s;');
        $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

        FunctionTabs.scrollLeft = 0;

    });

    $('#funControls').on('click', function() {
        SliderMacPer = 0;
        if(typeof(timer5) != "undefined" && timer5 !== null) {
            clearTimeout(timer5);
        }

        $('#funControlrsX').attr('style','opacity: 1; transition: all .3s;');
        $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
        $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
        $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
        $('#funIntegrationX').attr('style','opacity: 0; transition: all .6s;');

        FunctionTabs.scrollLeft = 0;

    });

    $('#funIntegration').on('click', function() {
        SliderMacPer = 3;

        if(typeof(timer5) != "undefined" && timer5 !== null) {
            clearTimeout(timer5);
        }

        $('#funIntegrationX').attr('style','opacity: 1; transition: all .3s;');
        $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
        $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
        $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
        $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

        FunctionTabs.scrollLeft = 112;

    });

    $('#funMobi').on('click', function() {
        SliderMacPer = 4;

        if(typeof(timer5) != "undefined" && timer5 !== null) {
            clearTimeout(timer5);
        }

        $('#funMobiX').attr('style','opacity: 1; transition: all .3s;');
        $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
        $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
        $('#funIntegrationX').attr('style','opacity; transition: all .6s;');
        $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

        FunctionTabs.scrollLeft = 200;
    });
    /*** TEXT ***/
    var textLidForma = document.getElementById('textLidForma');
    var textWh = document.getElementById('textWh');
    if (width > 500) {
        textLidForma.innerHTML = "Подключение лид-формы<br>Instagram и Facebook";
        textWh.innerHTML = "Учет склада и остатков";
    }
    else if (width <= 500) {
        textLidForma.innerHTML = "Подклчение<br>лид-формы";
        textWh.innerHTML = "Учет остатков<br>и склада";
    }


//если сафари и мобильник, убрать кнопку на весь экран
    if ( (/^((?!chrome|android).)*safari/i.test(navigator.userAgent)) && (width < 1000) ) {
        // alert('Its Mobi Safari');
        $('button[data-plyr="fullscreen"]').attr('style','display:none !important');
    }

    if (width < 700) {
        $('#priceStart').addClass('wow');
        $('#priceBusiness').addClass('wow');
        $('#priceVip').addClass('wow');
    }

    var price = 1;

    $('#priceStart').on( "click", function() {
        if (width < 700) {
            $('#priceVip').removeClass('animate__fadeIn');
            $('#priceStart').addClass('animate__fadeIn');
            $('#priceBusiness').removeClass('animate__fadeIn');

            price = 0;
            $('#priceVip').css({
                'order': -1
            }).removeClass('priceActive');
            $('#priceStart').css({
                'order': 1
            }).addClass('priceActive');

            $('#priceBusiness').css({
                'order': 2
            }).removeClass('priceActive');
        }
    })
    $('#priceBusiness').on( "click", function() {
        if (width < 700) {
            $('#priceVip').removeClass('animate__fadeIn');
            $('#priceBusiness').addClass('animate__fadeIn');
            $('#priceStart').removeClass('animate__fadeIn');

            price = 1;
            $('#priceVip').css({
                'order': 2
            }).removeClass('priceActive');
            $('#priceStart').css({
                'order': -1
            }).removeClass('priceActive');
            $('#priceBusiness').css({
                'order': 1
            }).addClass('priceActive');
        }
    })
    $('#priceVip').on( "click", function() {
        if (width < 700) {
            $('#priceBusiness').removeClass('animate__fadeIn');
            $('#priceVip').addClass('animate__fadeIn');
            $('#priceStart').removeClass('animate__fadeIn');

            price = 2;
            $('#priceVip').css({
                'order': 1
            }).addClass('priceActive');
            $('#priceStart').css({
                'order': 2
            }).removeClass('priceActive');
            $('#priceBusiness').css({
                'order': -1
            }).removeClass('priceActive');
        }
    })

    var swipePrice = new Hammer(priceBlockTogle, {
        enable: true,
        recognizers: [
            [Hammer.Swipe, { direction: Hammer.DIRECTION_HORIZONTAL }]
        ]
    });

    swipePrice.on('swipeleft', function(ev) {
        if (price == 0) { //старт
            $('#priceBusiness').trigger( "click" );
        }
        else  if (price == 1) { //бизнес
            $('#priceVip').trigger( "click" );
        }
        else  if (price == 2) { //вип
            $('#priceStart').trigger( "click" );
        }
    });

    swipePrice.on('swiperight', function(ev) {
        if (price == 0) { //старт
            $('#priceVip').trigger( "click" );
        }
        else  if (price == 1) { //бизнес
            $('#priceStart').trigger( "click" );
        }
        else  if (price == 2) { //вип
            $('#priceBusiness').trigger( "click" );
        }
    });

    $('#regStart').on("click", function(){
        $('input[name="s2"]').val('6');
        $('input[name="s1"]').val('699');
    });
    $('#regBusiness').on("click", function(){
        $('input[name="s2"]').val('7');
        $('input[name="s1"]').val('1199');
    });
    $('#regVip').on("click", function(){
        $('input[name="s2"]').val('8');
        $('input[name="s1"]').val('1699');

    });



});


