$(document).ready(function() {
	var min = new Date();
	var max = new Date(2019, 12, 31);
	var order_time = 0;
	var order_city;
	var order_date;
	var members_count = 2;

	$("a[role=scroll]").click(function () { 
		var element = $(this).attr("href");
	      	var destination = $(element).offset().top;

	      	$("html, body").animate({ 
	      		scrollTop: destination 
	      	}, 1000);
	      	
	      	return false;
	});

	$(".reviews-container").slick({
		infinite: true,
		autoplay: true,
		autoplaySpeed: 5000,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

	function rand(min, max) {
		return Math.floor(Math.random() * (max - min + 1)) + min;
	}

	$(".datepicker").datepicker({
		autoClose: true, 
		firstDay: 1,
		format: "dddd, d mmmm",
		minDate: min,
		maxDate: max,
		yearRange: ["2019"],
		i18n: {
			cancel: "Отмена",
			months: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь", "Октябрь", "Ноябрь", "Декабрь"],
			monthsShort: ["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
			weekdays: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"],
			weekdaysShort: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
			weekdaysAbbrev: ["ВС", "ПН", "ВТ", "СР", "ЧТ", "ПТ", "СБ"]
		},
		onSelect: function(date) {
			var day = date.getDay();
			var month = date.getMonth();
			var number = date.getDate();

			switch (day) {
				case 0:
					day = "Воскресенье";
					break;

				case 1:
					day = "Понедельник";
					break;

				case 2:
					day = "Вторник";
					break;

				case 3:
					day = "Среда";
					break;

				case 4:
					day = "Четверг";
					break;

				case 5:
					day = "Пятница";
					break;

				case 6:
					day = "Суббота";
					break;
				}

			switch (month) {
				case 6:
					month = "июля";
					break;

				case 7:
					month = "августа";
					break;

				case 8:
					month = "сентября";
					break;

				case 9:
					month = "октября";
					break;

				case 10:
					month = "ноября";
					break;

				case 11:
					month = "декабря";
					break;

				}

			setTimeout(function() {
				$(".datepicker").val(day + ", " + number + " " + month);
			}, 1);
		}
	});

	$(".ticket-button").click(function() {
		order_time = $(this).attr("time");
		$(".ticket-subheading").html("Выбранное время сеанса: <b>" + order_time + "</b>");
		$(".ticket-subheading").fadeIn(1000);

	});

	$("#continue-1").click(function() {
		order_date = $(".datepicker").val();
		order_city = $(".city-select option:selected").text();
		var order_day = parseInt(order_date);

		if (/Июль/.test(order_date)) {
			order_month = 07;
		} else if (/Август/.test(order_date)) {
			order_month = 08;
		} else if (/Сентябрь/.test(order_date)) {
			order_month = 09;
		} else if (/Октябрь/.test(order_date)) {
			order_month = 10;
		} else if (/Ноябрь/.test(order_date)) {
			order_month = 11;
		} else if (/Декабрь/.test(order_date)) {
			order_month = 12;
		}

		if (/Суббота/.test(order_date) || /Воскресенье/.test(order_date)) {
			order_weekend = true;
		} else {
			order_weekend = false;
		}

		if (order_date !== "" && order_time !== 0 && order_city !== "Нажмите, чтобы выбрать город") {
			$("#step-1").fadeOut(1000, function() {
				$("#step-2").fadeIn(1000);
			});
		}
	});

	$(".fa-male[members=2]").click(function() {
		members_count = 2;
		$(".members-subheading").html("Количество участников: <b>" + members_count + "</b>");
		$(".fa-male[members=3]").removeClass("active-member");
		$(".fa-male[members=4]").removeClass("active-member");
	});

	$(".fa-male[members=3]").click(function() {
		members_count = 3;
		$(".members-subheading").html("Количество участников: <b>" + members_count + "</b>");
		$(this).addClass("active-member");
		$(".fa-male[members=4]").removeClass("active-member");
	});

	$(".fa-male[members=4]").click(function() {
		members_count = 4;
		$(".members-subheading").html("Количество участников: <b>" + members_count + "</b>");
		$(".fa-male[members=3]").addClass("active-member");
		$(this).addClass("active-member");
	});

	$("#continue-2").click(function() {
		$("#step-2").fadeOut(1000, function() {
			$("#step-3").fadeIn(1000);
		});

		if (order_weekend == false && members_count == 2) {
			order_price = 2000;
		} else if (order_weekend == false && members_count == 3) {
			order_price = 4000;
		} else if (order_weekend == false && members_count == 4) {
			order_price = 4000;
		} else if (order_weekend == true && members_count == 2) {
			order_price = 3000;
		} else if (order_weekend == true && members_count == 3) {
			order_price = 5000;
		} else if (order_weekend == true && members_count == 4) {
			order_price = 5000;
		}

		if (order_weekend) {
			$(".price-notify").css("display", "inline");
		}

		$(".price-subheading").html("Общая сумма к оплате: <b>" + order_price + " руб.</b>");
		$(".ticket-info").html("Город: <b>" + order_city + "</b><br>Дата сеанса: <b>" + order_date + "</b><br>Время сеанса: <b>" + order_time + "</b><br>Количество участников: <b>" + members_count + "</b>");
	});

	$(".relax-checkbox").click(function() {
		var relax_amount = 2500;

		if ($(".filled-in").is(":checked")) {
			order_price = order_price + relax_amount;
			$(".price-subheading").html("Общая сумма к оплате: <b>" + order_price + " руб.</b>");
		} else {
			order_price = order_price - relax_amount;
			$(".price-subheading").html("Общая сумма к оплате: <b>" + order_price + " руб.</b>");
		}
	});

	$(".continue-button[role=form]").click(function() {
		var name_value = $("#input-name").val();
		var phone_value = $("#input-phone").val();
		var mail_value = $("#input-email").val();
		var order_number = rand(100000, 999999);

		if (name_value == "") {
			$("#input-name").addClass("error-input");
			setTimeout(function() {
				$("#input-name").removeClass("error-input");
			}, 4000);
			return false;
		} else if (phone_value == "") {
			$("#input-phone").addClass("error-input");
			setTimeout(function() {
				$("#input-phone").removeClass("error-input");
			}, 4000);
			return false;
		} else if (mail_value == "") {
			$("#input-email").addClass("error-input");
			setTimeout(function() {
				$("#input-email").removeClass("error-input");
			}, 4000);
			return false;
		} else {
			document.location.replace("../redir.php?price=" + order_price + "&name=" + name_value);
		}
	});
});