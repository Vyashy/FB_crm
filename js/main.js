



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



