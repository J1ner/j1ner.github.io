var table = {
  rasp0: [
    {
      start: '00:00',
      end: '08:00'
    },
      {
          start: '01:00',
          bron:true
      },
      {
          start: '02:00'
      },

    {
      start: '10:00'
    },
    {
      start: '11:00'
    },
    {
      start: '12:00'
    },
    {
      start: '13:00'
    },
    {
      start: '14:00'
    },
    {
      start: '15:00'

    },
    {
      start: '16:00'

    },
    {
      start: '17:00'

    },
    {
      start: '18:00'
    },
    {
      start: '19:00'
    },
    {
      start: '20:00'

    },
    {
      start: '21:00'
      
    },
      {
          start: '22:00'

      },
      {
          start: '23:00'

      },
  ],

    rasp1: [
      {
        start: '00:00',
        end: '08:00',
        bron: true
      },
        {
            start: '01:00'
        },
        {
            start: '02:00'
        },

        {
        start: '10:00'
      },
      {
        start: '11:00'
      },
      {
        start: '12:00'

      },
      {
        start: '13:00'

      },
      {
        start: '14:00'
      },
      {
        start: '15:00'
      },
      {
        start: '16:00'
      },
      {
        start: '17:00'
      },
      {
        start: '18:00'
      },
      {
        start: '19:00'
      },
      {
        start: '20:00'
      },
      {
        start: '21:00'
      },
        {
            start: '22:00'

        },
        {
            start: '23:00',
            bron: true
        },
    ],
    rasp2: [
      {
        start: '00:00',
        end: '08:00'

      },
        {
            start: '01:00'
        },
        {
            start: '02:00'
        },

        {
        start: '10:00'
      },
      {
        start: '11:00'
      },
      {
        start: '12:00'
      },
      {
        start: '13:00'
      },
      {
        start: '14:00'
      },
      {
        start: '15:00'
      },
      {
        start: '16:00'
      },
      {
        start: '17:00'
      },
      {
        start: '18:00'
      },
      {
        start: '19:00'
      },
      {
        start: '20:00',
        bron: true
      },
      {
        start: '21:00',
        bron: true
      },
        {
            start: '22:00'

        },
        {
            start: '23:00'

        },
    ],
    rasp3: [
      {
        start: '00:00',
        end: '08:00'
      },
        {
            start: '01:00'
        },
        {
            start: '02:00'
        },

        {
        start: '10:00'
      },
      {
        start: '11:00'

      },
      {
        start: '12:00'

      },
      {
        start: '13:00'

      },
      {
        start: '14:00'
      },
      {
        start: '15:00'
      },
      {
        start: '16:00'
      },
      {
        start: '17:00'
      },
      {
        start: '18:00'
      },
      {
        start: '19:00'
      },
      {
        start: '20:00'
      },
      {
        start: '21:00'
      },
        {
            start: '22:00'

        },
        {
            start: '23:00',
            bron: true
        },
    ],

    rasp4: [
      {
        start: '00:00',
        end: '08:00',
        bron: true
      },
        {
            start: '01:00'
        },
        {
            start: '02:00'
        },

        {
        start: '10:00'
      },
      {
        start: '11:00'
      },
      {
        start: '12:00'
      },
      {
        start: '13:00'
      },
      {
        start: '14:00'
      },
      {
        start: '15:00'
      },
      {
        start: '16:00'
      },
      {
        start: '17:00'
      },
      {
        start: '18:00'
      },
      {
        start: '19:00'
      },
      {
        start: '20:00',
        bron: true
      },
      {
        start: '21:00'
       
      },
        {
            start: '22:00'

        },
        {
            start: '23:00'

        },
    ],

    rasp5: [
      {
        start: '00:00',
        end: '08:00'
      },
        {
            start: '01:00'
        },
        {
            start: '02:00'
        },

        {
        start: '10:00'
      },
      {
        start: '11:00'
      },
      {
        start: '12:00'
      },
      {
        start: '13:00'
      },
      {
        start: '14:00'
      },
      {
        start: '15:00'

      },
      {
        start: '16:00'
      },
      {
        start: '17:00'
      },
      {
        start: '18:00'
      },
      {
        start: '19:00'
      },
      {
        start: '20:00'
      },
      {
        start: '21:00'
      },
        {
            start: '22:00'

        },
        {
            start: '23:00'

        },
    ],

    rasp6: [
      {
        start: '00:00',
        end: '08:00'
      },
        {
            start: '01:00'
        },
        {
            start: '02:00'
        },

        {
        start: '10:00'
      },
      {
        start: '11:00'
      },
      {
        start: '12:00'
      },
      {
        start: '13:00'
      },
      {
        start: '14:00'
      },
      {
        start: '15:00'
      },
      {
        start: '16:00'

      },
      {
        start: '17:00'
      },
      {
        start: '18:00'

      },
      {
        start: '19:00'
      },
      {
        start: '20:00'
     
      },
      {
        start: '21:00'
      },
        {
            start: '22:00'

        },
        {
            start: '23:00'

        },
    ]
};

var currentService = 0;
var night = false;
function generateR(st, night) {
  var k = 0;
  for(var j = st; j < st + 7; j++) {
    var i = j % 7;
    $('.cbs-calendar-subheader th:nth-of-type(' + (i + 1) +')')
      .find('.cbs-calendar-subheader-day-number')
      .html(moment().add(i, 'days').format('DD'));
    $('.cbs-calendar-subheader th:nth-of-type(' + (i + 1) +')')
      .find('.cbs-calendar-subheader-day-name')
      .html(moment().add(i, 'days').format('ddd'));


    if (night) {
      var day = [];
      day[0] = table['rasp' + k][0];
    }
    else {
      var day = table['rasp' + k];
    }
    var html = '';
    day.forEach(function(item, index){
      var cl = 'freetime';
      var start = parseInt(item.start.substring(0,2));
      if (item.bron || (i == 0 && (parseInt(moment().format('HH')) >= parseInt(start))))
        cl = 'reserved';
      if (!item.end)
        var end = parseInt(start) + 3 + ':00';
      else {
        var end = item.end;
      }
      var time = moment().add(i, 'days').format('DD dd MMMM') + ' ' + item.start;
      html += '<li class="' + cl + '"><span data-date="'+time+'">' + item.start + '</span></li>';
    })
    k++;
    $('.cbs-calendar-data td:nth-of-type(' + (i + 1) + ')')
      .find('.cbs-date-list')
      .html(html)
  }
}

jQuery(document).ready(function($) {
  moment.locale('ru')
  $('.cbs-calendar-header-caption span').html(moment().format('MMM YYYY'));
  generateR(0, false);
  $('.template-component-booking-item-content').on('click', '.freetime', function(el){
    el.preventDefault();
    $('.bronn').removeClass('bronn');
    $(this).addClass('bronn');
  })
  $('#change-time li').on('click', function(el){
    night = false;
    currentService = $(this).attr('data-num') - 1;
    generateR(currentService, night);
  })
  $('#nighttime').on('click', function(el){
    el.preventDefault();
    night = true;
    generateR(currentService, night);
  })
  $('.notnighttime').on('click', function(el){
    el.preventDefault();
    night = false;
    generateR(currentService, night);
  })
  $('.cbs-calendar-header-arrow-right').on('click', function(el) {
    el.preventDefault();
    var parent = $(this).parent().parent().parent();
    var cur = Number(parent.attr('data-num'));
    if (cur < 5) {
      var num = cur + 1;
      parent.attr('data-num', num);
      parent.addClass('trans' + num);
    }
  })
  $('.cbs-calendar-header-arrow-left').on('click', function(el) {
    el.preventDefault();
    var parent = $(this).parent().parent().parent();
    var cur = Number(parent.attr('data-num'));
    if (cur > 0) {
      var num = cur - 1;
      parent.attr('data-num', num);
      parent.removeClass('trans' + cur);
      parent.addClass('trans' + num);
    }
  })
})
