
<script>
	$(document).ready(function(){


	const modal = document.querySelector('#interest-calculate');
	

	var boiler_price_one= 2830;
	var boiler_price_two= 3030;
	const yearValue = $("input[name='year']:checked").val();
	const monthValue = $("input[name='month']:checked").val();
	const desposit = $('#desposit').val();
	if(yearValue=="5"){
		if ($("#five_year").attr('checked', true)) {
			if ($("#one_month").attr('checked', true)) {
				var one_month = 12;
				document.getElementById("boiler_price").innerText=boiler_price_one;
				var amanot = (boiler_price_one - desposit );
			var percent = (parseFloat(amanot*9.9* monthValue)/100);
			var total_price = (parseFloat(amanot + percent ));
				var per_month = (total_price/one_month);
				document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
				document.getElementById("for_month").innerText=one_month;
				$("#two_month").attr('checked', false);
				$("#three_month").attr('checked', false);
				$("#four_month").attr('checked', false);
				$("#five_month").attr('checked', false);

				$(".rc-slider-track").css({'left':'0%','width':'0%'});
				$(".rc-slider-line").css({'left':'0%'});

			}
		}

	}

	document.getElementById("percen").innerText=parseFloat(percent).toFixed(2);
	document.getElementById("total").innerText=parseFloat(total_price).toFixed(2);


	$("input[type='radio']").click(function(){

	const yearValue = $("input[name='year']:checked").val();
	const monthValue = $("input[name='month']:checked").val();
		const desposit = $('#desposit').val();

		if (yearValue=='5') {
			$("#five_year").attr('checked', true);
			$("#ten_year").attr('checked', false);
			if ($("#five_year").attr('checked', true)) {

				if (monthValue=='1') {
					if ($("#one_month").attr('checked', true)) {
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'0%'});
						$(".rc-slider-line").css({'left':'0%'});


						var one_month = 12;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / one_month);
					document.getElementById("for_month").innerText=one_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);




					}
				}
				else if (monthValue=='2') {
					if ($("#two_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'25%'});
						$(".rc-slider-line").css({'left':'25%'});

						var two_month = 24;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / two_month);
					document.getElementById("for_month").innerText=two_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='3') {
					if ($("#three_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'50%'});
						$(".rc-slider-line").css({'left':'50%'});

						var three_month = 36;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / three_month);
					document.getElementById("for_month").innerText=three_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='4') {
					if ($("#four_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'75%'});
						$(".rc-slider-line").css({'left':'75%'});

						var four_month = 48;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / four_month);
					document.getElementById("for_month").innerText=four_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='5') {
					if ($("#five_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'100%'});
						$(".rc-slider-line").css({'left':'100%'});

						var five_month = 60;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / five_month);
					document.getElementById("for_month").innerText=five_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}

				

			}
		}
		else if (yearValue=='10') {
			$("#five_year").attr('checked', false);
		$("#ten_year").attr('checked', true);
		if ($("#ten_year").attr('checked', true)) {
			if (monthValue=='1') {
					if ($("#one_month").attr('checked', true)) {
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'0%'});
						$(".rc-slider-line").css({'left':'0%'});

						var one_month = 12;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / one_month);
					document.getElementById("for_month").innerText=one_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);

					}
				}
				else if (monthValue=='2') {
					if ($("#two_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'25%'});
						$(".rc-slider-line").css({'left':'25%'});

						var two_month = 24;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / two_month);
					document.getElementById("for_month").innerText=two_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='3') {
					if ($("#three_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'50%'});
						$(".rc-slider-line").css({'left':'50%'});

						var three_month = 36;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / three_month);
					document.getElementById("for_month").innerText=three_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='4') {
					if ($("#four_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'75%'});
						$(".rc-slider-line").css({'left':'75%'});

						var four_month = 48;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / four_month);
					document.getElementById("for_month").innerText=four_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='5') {
					if ($("#five_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'100%'});
						$(".rc-slider-line").css({'left':'100%'});

						var five_month = 60;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / five_month);
					document.getElementById("for_month").innerText=five_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
		}
		}
		
	document.getElementById("percen").innerText=parseFloat(percent).toFixed(2);
	document.getElementById("total").innerText=parseFloat(total_price).toFixed(2);
	});



	// start input keyp function
	$("#desposit").on("change paste keyup cut select", function() {
		var desposit = $(this).val();

		if (!$(this).val()) {
			document.getElementById("percen").innerText='Nan';
			document.getElementById("total").innerText='Nan';
			document.getElementById("per_month").innerText='Nan';
			document.getElementById("for_month").innerText='Nan';
			
		}else{
		const yearValue = $("input[name='year']:checked").val();
	const monthValue = $("input[name='month']:checked").val();

		if (yearValue=='5') {
			$("#five_year").attr('checked', true);
			$("#ten_year").attr('checked', false);
			if ($("#five_year").attr('checked', true)) {

				if (monthValue=='1') {
					if ($("#one_month").attr('checked', true)) {
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'0%'});
						$(".rc-slider-line").css({'left':'0%'});


						var one_month = 12;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / one_month);
					document.getElementById("for_month").innerText=one_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);




					}
				}
				else if (monthValue=='2') {
					if ($("#two_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'25%'});
						$(".rc-slider-line").css({'left':'25%'});

						var two_month = 24;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / two_month);
					document.getElementById("for_month").innerText=two_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='3') {
					if ($("#three_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'50%'});
						$(".rc-slider-line").css({'left':'50%'});

						var three_month = 36;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / three_month);
					document.getElementById("for_month").innerText=three_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='4') {
					if ($("#four_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'75%'});
						$(".rc-slider-line").css({'left':'75%'});

						var four_month = 48;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / four_month);
					document.getElementById("for_month").innerText=four_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='5') {
					if ($("#five_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'100%'});
						$(".rc-slider-line").css({'left':'100%'});

						var five_month = 60;
					document.getElementById("boiler_price").innerText=boiler_price_one;
					var amanot =(parseFloat(boiler_price_one - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / five_month);
					document.getElementById("for_month").innerText=five_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}

				

			}
		}
		else if (yearValue=='10') {
			$("#five_year").attr('checked', false);
		$("#ten_year").attr('checked', true);
		if ($("#ten_year").attr('checked', true)) {
			if (monthValue=='1') {
					if ($("#one_month").attr('checked', true)) {
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'0%'});
						$(".rc-slider-line").css({'left':'0%'});

						var one_month = 12;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / one_month);
					document.getElementById("for_month").innerText=one_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);

					}
				}
				else if (monthValue=='2') {
					if ($("#two_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'25%'});
						$(".rc-slider-line").css({'left':'25%'});

						var two_month = 24;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / two_month);
					document.getElementById("for_month").innerText=two_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='3') {
					if ($("#three_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#four_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'50%'});
						$(".rc-slider-line").css({'left':'50%'});

						var three_month = 36;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / three_month);
					document.getElementById("for_month").innerText=three_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='4') {
					if ($("#four_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#five_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'75%'});
						$(".rc-slider-line").css({'left':'75%'});

						var four_month = 48;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / four_month);
					document.getElementById("for_month").innerText=four_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
				else if (monthValue=='5') {
					if ($("#five_month").attr('checked', true)) {
						$("#one_month").attr('checked', false);
						$("#two_month").attr('checked', false);
						$("#three_month").attr('checked', false);
						$("#four_month").attr('checked', false);

						$(".rc-slider-track").css({'left':'0%','width':'100%'});
						$(".rc-slider-line").css({'left':'100%'});

						var five_month = 60;
					document.getElementById("boiler_price").innerText=boiler_price_two;
					var amanot =(parseFloat(boiler_price_two - desposit ));
					var percent = (parseFloat(amanot*9.9*monthValue)/100);
					var total_price = (parseFloat(amanot + percent ));
					var per_month = (total_price / five_month);
					document.getElementById("for_month").innerText=five_month;
					document.getElementById("per_month").innerText=parseFloat(per_month).toFixed(2);
					}
				}
		}
		}

			
		}

		
	document.getElementById("percen").innerText=parseFloat(percent).toFixed(2);
	document.getElementById("total").innerText=parseFloat(total_price).toFixed(2);
	
	});

	// end input keyup funtin



	});
</script>


