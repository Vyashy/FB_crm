window.onload = youtubeVideos;

function stopVideos() {
    [...document.querySelectorAll("iframe")]
        .filter(eachVideo => eachVideo.getAttribute("height") === "305")
        .map(eachVideo => {

            eachVideo.src = eachVideo.src;
        });
}

function youtubeVideos() {
    [...document.querySelectorAll(".papuga")].map(eachPapuga => {

            eachPapuga.addEventListener('click', () => {

                stopVideos();
            })
        }
    );
}
/********************
 Переключалка
 *********************/
let width = document.querySelector('body').clientWidth;
let lang = 'ru';

let videoTogle = document.getElementById('videoTogle');
let FunctionTogle = document.getElementById('FunctionTogle');

let videoBlockVideo = document.getElementById('videoBlockVideo');
let videoBlockFunction = document.getElementById('videoBlockFunction');

let FunctionTabs = document.getElementById('FunctionTabs');

let funUchet = document.getElementById('funUchet');
let funStats = document.getElementById('funStats');
let funControls = document.getElementById('funControls');
let funIntegration = document.getElementById('funIntegration');
let funMobi = document.getElementById('funMobi');

let screen = document.getElementById('screen');
let funText = document.getElementById('funText');



FunctionTogle.onclick = function() {
    videoBlockVideo.classList.add('hide');
    videoBlockFunction.classList.remove('hide');
    videoTogle.classList.remove('borderForText');
    FunctionTogle.classList.add('borderForText');
}

if (width <= 500) {
    if (lang == 'ru') {
        funText.innerHTML = "<p>Настраивайте доступ сотрудников к разделам системы. Контролируйте сотрудников через<br>историю изменений.</p>"
    } else if (lang == 'ua') {
        funText.innerHTML = "<p>Налаштовуйте доступ співробітників до розділів системи,<br>і відстежуйте історію їх змін.</p>"
    }
}

funUchet.onclick = function() {
    if(typeof(timer5) != "undefined" && timer5 !== null) {
        clearTimeout(timer5);
    }
    funUchet.classList.add('borderForText2');
    funStats.classList.remove('borderForText2');
    funControls.classList.remove('borderForText2');
    funIntegration.classList.remove('borderForText2');
    funMobi.classList.remove('borderForText2');

    $('#funUchetX').attr('style','opacity: 1; transition: all .3s;');
    $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
    $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
    $('#funIntegrationX').attr('style','opacity: 0; transition: all .6s;');
    $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');


    FunctionTabs.scrollLeft = 34;

    if (width > 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Отслеживайте статусы заказа не выходя из системы, чтобы видеть полную картину склада.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Відстежуйте статуси замовлення не виходячи з системи, щоб бачити повну картину складу.</p>"
        }
    }
    else if (width <= 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Отслеживайте статусы заказа не выходя из системы,<br>чтобы видеть полную картину склада.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Відстежуйте статуси замовлення не виходячи з системи,<br>щоб бачити повну картину складу.</p>"
        }
    }
}

funStats.onclick = function() {
    if(typeof(timer5) != "undefined" && timer5 !== null) {
        clearTimeout(timer5);
    }
    funStats.classList.add('borderForText2');
    funUchet.classList.remove('borderForText2');
    funControls.classList.remove('borderForText2');
    funIntegration.classList.remove('borderForText2');
    funMobi.classList.remove('borderForText2');

    $('#funStatsX').attr('style','opacity: 1; transition: all .3s;');
    $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
    $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
    $('#funIntegrationX').attr('style','opacity: 0; transition: all .6s;');
    $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

    FunctionTabs.scrollLeft = 0;

    if (width > 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Отслеживайте рентабельность каждого менеджера. Анализируйте эффективность<br>рекламных источников для увеличения прибыли.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Відстежуйте рентабельність кожного менеджера. Аналізуйте ефективність<br>рекламних джерел для збільшення прибутку.</p>"
        }
    }
    else if (width <= 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Отслеживайте рентабельность каждого менеджера. Анализируйте эффективность рекламных<br>источников для увеличения прибыли.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Відстежуйте рентабельність кожного менеджера. Аналізуйте ефективність рекламних<br>джерел для збільшення прибутку.</p>"
        }
    }
}

funControls.onclick = function() {
    if(typeof(timer5) != "undefined" && timer5 !== null) {
        clearTimeout(timer5);
    }
    funControls.classList.add('borderForText2');
    funStats.classList.remove('borderForText2');
    funUchet.classList.remove('borderForText2');
    funIntegration.classList.remove('borderForText2');
    funMobi.classList.remove('borderForText2');

    $('#funControlrsX').attr('style','opacity: 1; transition: all .3s;');
    $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
    $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
    $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
    $('#funIntegrationX').attr('style','opacity: 0; transition: all .6s;');

    FunctionTabs.scrollLeft = 0;

    if (width > 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Настраивайте доступ сотрудников к разделам системы. Контролируйте сотрудников<br>через историю изменений.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Налаштовуйте доступ співробітників до розділів системи,<br>і відстежуйте історію їх змін.</p>"
        }
    }
    else if (width <= 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Настраивайте доступ сотрудников к разделам системы. Контролируйте сотрудников через<br>историю изменений.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Налаштовуйте доступ співробітників до розділів системи,<br>і відстежуйте історію їх змін.</p>"
        }
    }
}

funIntegration.onclick = function() {
    if(typeof(timer5) != "undefined" && timer5 !== null) {
        clearTimeout(timer5);
    }
    funIntegration.classList.add('borderForText2');
    funStats.classList.remove('borderForText2');
    funControls.classList.remove('borderForText2');
    funUchet.classList.remove('borderForText2');
    funMobi.classList.remove('borderForText2');

    $('#funIntegrationX').attr('style','opacity: 1; transition: all .3s;');
    $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
    $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
    $('#funMobiX').attr('style','opacity: 0; transition: all .6s;');
    $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

    FunctionTabs.scrollLeft = 112;

    if (width > 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Интеграция с Prom.ua, Новой Почтой, IP-телефонией, сервисами SMS рассылки.</p>";
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Інтеграція з Prom.ua, Новою Поштою, IP-телефонією, сервісами SMS розсилки.</p>";
        }
    }
    else if (width <= 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Интеграция с Prom.ua, Новой Почтой, IP-телефонией, сервисами SMS рассылки.</p>";
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Інтеграція з Prom.ua, Новою Поштою, IP-телефонією, сервісами SMS розсилки.</p>";
        }
    }
}

funMobi.onclick = function() {
    if(typeof(timer5) != "undefined" && timer5 !== null) {
        clearTimeout(timer5);
    }
    funMobi.classList.add('borderForText2');
    funStats.classList.remove('borderForText2');
    funControls.classList.remove('borderForText2');
    funIntegration.classList.remove('borderForText2');
    funUchet.classList.remove('borderForText2');

    $('#funMobiX').attr('style','opacity: 1; transition: all .3s;');
    $('#funUchetX').attr('style','opacity: 0; transition: all .6s;');
    $('#funStatsX').attr('style','opacity: 0; transition: all .6s;');
    $('#funIntegrationX').attr('style','opacity; transition: all .6s;');
    $('#funControlrsX').attr('style','opacity: 0; transition: all .6s;');

    FunctionTabs.scrollLeft = 200;
    if (width > 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Отслеживайте свой бизнес на любом устройстве.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Відстежуйте свій бізнес на будь-якому пристрої.</p>"
        }
    }
    else if (width <= 500) {
        if (lang == 'ru') {
            funText.innerHTML = "<p>Отслеживайте свой бизнес на любом устройстве.</p>"
        }
        else if (lang == 'ua') {
            funText.innerHTML = "<p>Відстежуйте свій бізнес на будь-якому пристрої.</p>"
        }
    }
}



$(function(){

    function slideInit(options){

        // время 1го цикла слайда
        var step_time = options.step_time || 10000;

        var main_step_timer = setTimeout(function step_slide(){

            if ( !!options.stop_slider ) {
                main_step_timer = clearTimeout(main_step_timer);
                return false;
            }

            var container = $(options.container);
            // все элементы слайдера
            var slide_elements = container.find('.slide');

            // время transition анимации для элемента
            var slide_anim_time = options.slide_anim_time / 1000 ;

            // время через которое активный блок скроеться (65%)
            var delay_fade_time = options.slide_anim_time * 65 / 100;


            var slide_next_element = container.find('.next_slide');
            var slide_active_element = container.find('.active_slide');


            slide_next_element.closest('.slide').addClass('active');
            slide_active_element.closest('.slide').removeClass('active');



            // начало анимации следующего слайда
            slide_next_element.css({transition: `all ${slide_anim_time}s ease-in-out`}).closest('.slide').fadeIn(2);
            slide_next_element.removeClass('animate_slide_img');


            // скрытие активного слайда
            var timer = setTimeout(function(){
                slide_active_element.closest('.slide').fadeOut(300, function(){
                    slide_active_element.addClass('animate_slide_img');
                });
            }, delay_fade_time);


            slide_next_element.removeClass('next_slide');
            slide_next_element.addClass('active_slide');


            // выбор следующего слайда

            var curr_slide_container = slide_next_element.closest('.slide');
            var curr_index_slide = +(curr_slide_container.index());

            // проверяем slide_next_element на последний эл. в коллекции slide_elements
            if( (curr_index_slide + 1) >= slide_elements.length ){
                slide_active_element = slide_elements.first().find('.slide_item');

            }else{
                slide_active_element = slide_elements.eq( curr_index_slide + 1 ).find('.slide_item');

            }


            slide_active_element.addClass('next_slide');
            slide_active_element.removeClass('active_slide');



            main_step_timer = setTimeout( step_slide, step_time );



        }, 3000); //время первого срабатывания слайдера

    }

    var opt_slide = {
        container: '.main-content .main-content-left',
        slide_anim_time: 3000,
        step_time: 6000,
        stop_slider:null,
    };

    slideInit(opt_slide);

});
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
    stopVideos();
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
function capitalize(input) {
    input.value = input.value.replace(/( |^|-)[a-zа-яёіїє]/g, function(u){ return u.toUpperCase(); }  );
}


Inputmask.extendDefinitions({
    '~': { validator: "[1245679]" },
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






$('#userName').focus(function() {
    $(this).attr("placeholder","");
});

$('#userName').blur(function() {
    $(this).attr("placeholder","Ваше имя");
});

document.getElementById('userName').addEventListener('input', function(){
    checkSymbol(this);
    capitalize(this);
    findSpace(this);
    setTimeout(CheckName, 100);
    setInterval(CheckName, 500);
});

function checkSymbol(input) {
    // input.value = input.value.replace(/[^a-zA-Zа-яА-ЯёЁіІїЇєЄ-\s]/i, '');
    input.value = input.value.replace(/\s+/g, ' ');
    input.value = input.value.replace(/-+/g, '-');
}
function CheckName() {
    document.getElementById('userName').value = document.getElementById('userName').value.replace(/[^a-zA-Zа-яА-ЯёЁіІїЇєЄ-\s]/i, "");
}

$(document).ready(function(){

    $('input[name="name"]').keyup(function() {
        this.value = this.value.replace(/[^a-zA-Zа-яА-ЯёЁіІїЇєЄ-\s]/i, "");
    });

});

function findSpace(input) {

    var valInp = document.getElementById('userName').value;
    result = valInp.match(/\s/g);
    if (result !== null) {
        if (result.length >= 3 ) {
            arrayOfStrings = valInp.split(' ');
            arrayOfStrings[0] = arrayOfStrings[0]+' ';
            arrayOfStrings[1] = arrayOfStrings[1]+' ';
            arrayOfStrings[2] = arrayOfStrings[2]+' ';
            document.getElementById('userName').value = arrayOfStrings.join('');
        }
    }
}


function capitalize(input) {
    input.value = input.value.replace(/( |^|-)[a-zа-яёіїє]/g, function(u){ return u.toUpperCase(); }  );
}


Inputmask.extendDefinitions({
    '~': { validator: "[1245679]" },
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
let userMail = document.getElementById('userMail');

userMail.onfocus = function() {
    this.setAttribute("placeholder", "");
};

userMail.onblur = function() {
    if (lang == 'ru') {
        this.setAttribute("placeholder", "Ваш E-mail");
    } else if (lang == 'ua') {
        this.setAttribute("placeholder", "Ваш E-mail");
    }

};


let inputMail = $('#userMail');
let cursor = inputMail[0].selectionStart;
let prev = inputMail.val();

inputMail.inputmask({
    mask: "*{1,50}[.*{1,50}][.*{1,50}]@*{1,50}.*{1,20}[.*{1,20}][.*{1,20}]",
    greedy: false,
    clearIncomplete: true,
    showMaskOnHover: false,
    definitions: {
        '*': {
            validator: "[^_@.]"
        }
    }
}).on('keyup paste', function() {
    if (this.value && /[^_a-zA-Z0-9@\-.]/i.test(this.value)) {
        this.value = prev;
        this.setSelectionRange(cursor, cursor);
        inputMail.trigger('input');
    } else {
        cursor = this.selectionStart;
        prev = this.value;
    }
});
/***** DOMAIN *****/

/***** DOMAIN *****/

let subdomain = document.getElementById('subdomain');
let domenTagLeft = document.getElementById('domenTagLeft');
let domenTagRight = document.getElementById('domenTagRight');

$("#subdomain").keyup(function() {
    if (width > 500) {
        this.value = this.value.replace(/[^a-zA-Z0-9-]/i, "");
        this.value = this.value.replace(/-+/g, '-');
        this.value = this.value.replace(/^-/, '');
    } else if (width <= 500) {
        timerCheck2 = setTimeout(waitForTel, 500);
    }
});

function waitForTel() {
    subdomain.value = subdomain.value.replace(/[^a-zA-Z0-9-]/i, "");
    subdomain.value = subdomain.value.replace(/-+/g, '-');
    subdomain.value = subdomain.value.replace(/^-/, '');
}

subdomain.onfocus = function() {
    this.setAttribute('placeholder', '');
    this.classList.add('userInpDomain');
    domenTagLeft.setAttribute('style', 'display:block;');
    domenTagRight.setAttribute('style', 'display:block;');
};

$("#subdomain").on("keyup", function (e) {

    let domain = $("#subdomain").val();
    let curr_el = this;

    if (domain.length >= 3) {
        timerCheck = setTimeout(checkDomen, 300);

        function checkDomen () {

            $.ajax({
                url: 'php/check_domain.php',
                method: "POST",
                data: {
                    'domain': domain,
                    'op': 'check_domain'
                },
                success: function (data) {
                    success(data, curr_el);
                }
            });
        }

    } else if (domain.length < 3) {
        if(typeof(timerCheck) != "undefined" && timerCheck !== null) {
            clearTimeout(timerCheck);
        }
        $('#domenTrue').attr('style','display:none;');
        $('#domenFalse').attr('style','display:block;');
        $('#subdomain').addClass('error')
        $('#subdomain').removeClass('succes');
    }

    function success(data, el, message='') {

        if (data === "ok") {
            $('#domenTrue').attr('style','display:block;');
            $('#domenFalse').attr('style','display:none;');
            $('#subdomain').addClass('succes')
            $('#subdomain').removeClass('error');

        } else {
            $('#domenTrue').attr('style','display:none;');
            $('#domenFalse').attr('style','display:block;');
            $('#subdomain').addClass('error')
            $('#subdomain').removeClass('succes');
        }
    }

});

$("#subdomain").blur(function() {

    if (lang == 'ru') {
        $(this).attr("placeholder","Придумайте название CRM-кабинета");
    } else if (lang == 'ua') {
        $(this).attr("placeholder","Придумайте назву CRM-кабінету");
    }

    if (this.value == '' || this.value == undefined) {

        $("#subdomain").val('');
        $('#subdomain').removeClass('error');
        $('#domenFalse').attr('style','display:none;');
        $('.domenTag').attr('style','display:none;');
        $('#subdomain').removeClass('userInpDomain');

    } else if ($("#subdomain").hasClass("error")) {

        $("#subdomain").val('');
        $('#subdomain').removeClass('error');
        $('#domenFalse').attr('style','display:none;');
        $('.domenTag').attr('style','display:none;');
        $('#subdomain').removeClass('userInpDomain');

    } else if ($("#subdomain").hasClass("succes")) {
    }
});


subdomain.addEventListener('input', function(){
    if (width > 500) {
        setTimeout(CheckDomain, 100);
    }
    else if (width <= 500) {
        setTimeout(CheckDomain, 500);
    }

    subdomain.value = this.value.replace(/[A-Z]/g, function(a) {
        return a.toLowerCase()
    });

});

if (width > 500) {
    setInterval(CheckDomain, 200);
}
else if (width <= 500) {
    setInterval(CheckDomain, 500);
}

function CheckDomain() {
    subdomain.value = subdomain.value.replace(/[^a-zA-Z0-9-]/i, "");
}

$("#btn-submit_reg").click(function(){
    console.log(1235)
    $.ajax({
        url: "form-ok.php",
        data: $("form").serialize(),
        context: document.body
    }).done(function() {
        $( this ).addClass( "done" );
    });
});






