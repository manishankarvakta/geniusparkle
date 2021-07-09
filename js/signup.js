$(document).ready(function() {
    // Miscellaneous
    $('.stop-prop').css("position", "relative").click(function(event) {
      event.stopPropagation();
    });
  
    $.fn.text = function(number, ln) {
      nm = Number(number);
      switch (ln) {
        case '00':
          if (nm < 10) return '0' + nm
          return nm
          break;
        case '000':
          if (nm < 10) return '00' + nm
          if (nm < 100) return '0' + nm
          return nm
          break;
        case '0000':
          if (nm < 10) return '000' + nm
          if (nm < 100) return '00' + nm
          if (nm < 1000) return '0' + nm
          return nm
          break;
        default:
          return nm
        }
      };
  
    
    // Forms & Inputs
    $('[data-input=txt] input[maxlength]').on('input change keyup paste propertychange', function() {
      if ($(this).val().length > $(this).attr('maxlength')) {
        $(this).val($(this).val().substring(0, $(this).attr('maxlength')));
      }
    });
  
    $('[data-input=txt] input').on('click focus', function() {
        $(this).parent().addClass("focus").siblings('.ddl').css("display", "block");
      }).blur(function() {
        $(this).parent().removeClass("focus");
      }).on('blur input change keyup paste propertychange', function() {
        if ($(this).closest('[data-input]').hasClass('err')) {
          $(this).closest('[data-input]').removeClass('err empty invalid regd unregd min max minln maxln');
          $.fn.validateInput(this);
        }
        if (!$(this).val()) return $(this).parent().removeClass('filled')
        $(this).parent().addClass('filled')
      });
  
    $('html').click(function() {
      $('.ddl').hide(0);
    });
  
    $('[data-input=txt] .ddl li').click(function() {
      $(this).addClass('select').siblings().removeClass('select').parent().hide(0).siblings('label').addClass('filled').find('input').val($(this).html());
      if ($(this).closest('[data-input]').hasClass('err')) {
        $(this).closest('[data-input]').removeClass('err empty invalid regd unregd min max minln maxln');
        $.fn.validateInput(this.parent().siblings('label').find('input'));
      }
    });
  
    $.fn.validateInput = function(inp) {
      if (!$(inp).closest('[data-input]').hasClass('err')) {
        if ($(inp).is('[required]') && !$(inp).val()) return $(inp).closest('[data-input]').addClass('empty err')
        if ($(inp).is('[min]') && $(inp).val() < Number($(inp).attr('min'))) return $(inp).closest('[data-input]').addClass('min err')
        if ($(inp).is('[max]') && $(inp).val() > Number($(inp).attr('max'))) return $(inp).closest('[data-input]').addClass('max err')
        if ($(inp).is('[minln]') && $(inp).val().length < $(inp).attr('minln')) return $(inp).closest('[data-input]').addClass('minln err')
        if ($(inp).is('[maxln]') && $(inp).val().length > $(inp).attr('maxln')) return $(inp).closest('[data-input]').addClass('maxln err')
        if ($(inp).is('[maxlength]') && $(inp).val().length > $(inp).attr('maxlength')) return $(inp).closest('[data-input]').addClass('maxln err')
        if ($(inp).is('[pattern]') && !$(inp).val().match($(inp).attr('pattern'))) return $(inp).closest('[data-input]').addClass('invalid err')
      }
    }
    $.fn.validateDate = function(dateName) {
      day = $('[name=' + dateName + 'Day]').val();
      switch ($('[name=' + dateName + 'Month]').val()) {
        default:
          month = "00";
          break;
        case 'January':
          month = "01";
          break;
        case 'February':
          month = "02";
          break;
        case 'March':
          month = "03";
          break;
        case 'April':
          month = "04";
          break;
        case 'May':
          month = "05";
          break;
        case 'June':
          month = "06";
          break;
        case 'July':
          month = "07";
          break;
        case 'August':
          month = "08";
          break;
        case 'September':
          month = "09";
          break;
        case 'October':
          month = "10";
          break;
        case 'November':
          month = "11";
          break;
        case 'December':
          month = "12";
          break;
      }
      year = $('[name=' + dateName + 'Year]').val();
      date = $.fn.text(day, '00') + "/" + month + "/" + $.fn.text(year, '0000');
      if (!$('[name=' + dateName + 'Day]').closest('[data-input]').hasClass('err')) {
        if (!date.match(/^(((0[1-9]|[12][0-9]|3[01])[- /.](0[13578]|1[02])|(0[1-9]|[12][0-9]|30)[- /.](0[469]|11)|(0[1-9]|1\d|2[0-8])[- /.]02)[- /.]\d{4}|29[- /.]02[- /.](\d{2}(0[48]|[2468][048]|[13579][26])|([02468][048]|[1359][26])00))$/)) return $('[name^=' + dateName + ']').closest('[data-input]').addClass('invalid err')
      }
    }
  
    // Buttons
    $('[data-btn]').append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 6.3499999 6.3499999"><path d="M2.774826 2.1342558a.19869202.19869202 0 00-.13063.0537.19869202.19869202 0 00-.009.28083l.66237.70628-.66237.70617a.19869202.19869202 0 00.009.28083.19869202.19869202 0 00.28083-.009l.78978-.84209a.19871189.19871189 0 000-.27184l-.78978-.84219a.19869202.19869202 0 00-.1502-.0627z"/><path d="M2.774826 2.1342558a.19869202.19869202 0 00-.13063.0537.19869202.19869202 0 00-.009.28083l.66237.70628-.66237.70617a.19869202.19869202 0 00.009.28083.19869202.19869202 0 00.28083-.009l.78978-.84209a.19871189.19871189 0 000-.27184l-.78978-.84219a.19869202.19869202 0 00-.1502-.0627z"/></svg>');
  });


