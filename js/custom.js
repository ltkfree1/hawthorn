
 jQuery('input').blur(function() {

	//val of a customer start
	var one_six = $('#one_one').val() * $('#one_two').val();
	$('#one_six').val(one_six);
	
	var one_seven = $('#one_six').val() * $('#one_three').val();
	$('#one_seven').val(one_seven);
	
	var one_eight = ($('#one_four').val() * $('#one_five').val()) / 100;
	$('#one_seven').val(one_seven.toFixed(1));
	
	var one_nine = $('#one_eight').val() * $('#one_three').val() * $('#one_seven').val();
	$('#one_nine').val(one_nine);
	
	var one_ten = Number($('#one_seven').val()) + Number($('#one_nine').val());
	$('#one_ten').val(one_ten);
    //val of a customer end
	//salesbooster start
	var one_four_boost = $('#one_one_boost').val() * $('#one_two_boost').val() * $('#one_three_boost').val();
	$('#one_four_boost').val(one_four_boost);
	
	var one_five_boost = $('#one_four_boost').val() * 12;
	$('#one_five_boost').val(one_five_boost);
	
	var two_one_boost = $('#one_three_boost').val() * 12;
	$('#two_one_boost').html(two_one_boost.toFixed(1));
	
	var four_one_1_boost = (Number($('#three_one_boost').val()) * $('#one_one_boost').val()) / 100;
	var four_one_2_boost = four_one_1_boost + Number($('#one_one_boost').val());
	$('#four_one_boost').val(four_one_2_boost);
	
	var four_two_1_boost = (Number($('#three_two_boost').val()) * $('#one_two_boost').val()) / 100;
	var four_two_2_boost = four_two_1_boost + Number($('#one_two_boost').val());
	$('#four_two_boost').val(four_two_2_boost);
	
	var four_three_boost = (( 1 + $('#three_three_boost').val() ) * $('#one_three_boost').val()) / 100;
	$('#four_three_boost').val(four_three_boost.toFixed(2));
	
	var four_four_boost = $('#four_one_boost').val() * $('#four_two_boost').val() * $('#four_three_boost').val();
	$('#four_four_boost').val(four_four_boost);
	
	var four_five_boost = $('#four_four_boost').val() * 12;
	$('#four_five_boost').val(four_five_boost);
	
	var five_one_boost = $('#four_three_boost').val() * 12;
	$('#five_one_boost').html(five_one_boost.toFixed(2));
	
	var six_one_boost = $('#four_four_boost').val() - $('#one_four_boost').val();
	$('#six_one_boost').val(six_one_boost);
	
	var six_two_boost = $('#four_five_boost').val() - $('#one_five_boost').val();
	$('#six_two_boost').val(six_two_boost);
	
	var three_four_boost = ( $('#six_one_boost').val() / $('#one_four_boost').val() ) * 100;
	$('#three_four_boost').val(three_four_boost);
	
	var three_five_boost = (( $('#four_four_boost').val() - $('#one_four_boost').val()) / $('#one_four_boost').val()) * 100;
	$('#three_five_boost').val(three_five_boost);
	
	// salesbooster end
	
	//traffic max start
	 var one_four_traffic = ($('#one_one_traffic').val() * $('#one_two_traffic').val() * $('#one_three_traffic').val()) / 100;
            $('#one_four_traffic').val(one_four_traffic);

            var one_five_traffic = $('#one_four_traffic').val() * 12;
            $('#one_five_traffic').val(one_five_traffic);

            var three_one_1_traffic = (Number($('#two_one_traffic').val()) * $('#one_one_traffic').val()) / 100;
            var three_one_traffic = three_one_1_traffic + Number($('#one_one_traffic').val());
            $('#three_one_traffic').val(three_one_traffic);

            var three_two_1_traffic = (Number($('#two_two_traffic').val()) * $('#one_two_traffic').val()) / 100;
            var three_two_traffic = three_two_1_traffic + Number($('#one_two_traffic').val());
            $('#three_two_traffic').val(three_two_traffic);

            var three_three_1_traffic = (Number($('#two_three_traffic').val()) * $('#one_three_traffic').val()) / 100;
            var three_three_traffic = three_three_1_traffic + Number($('#one_three_traffic').val());
            $('#three_three_traffic').val(three_three_traffic);

            var three_four_traffic = ($('#three_one_traffic').val() * $('#three_two_traffic').val() * $('#three_three_traffic').val()) / 100;
            $('#three_four_traffic').val(three_four_traffic);

            var three_five_traffic = $('#three_four_traffic').val() * 12;
            $('#three_five_traffic').val(three_five_traffic);

            var four_one_traffic = $('#three_four_traffic').val() - $('#one_four_traffic').val();
            $('#four_one_traffic').val(four_one_traffic);

            var four_two_traffic = $('#three_five_traffic').val() - $('#one_five_traffic').val();
            $('#four_two_traffic').val(four_two_traffic);

            var five_two_traffic = $('#five_one_traffic').val() * 12;
            $('#five_two_traffic').val(five_two_traffic);

            var six_one_traffic = $('#four_one_traffic').val() - $('#five_one_traffic').val();
            $('#six_one_traffic').val(six_one_traffic);

            var six_two_traffic = $('#four_two_traffic').val() - $('#five_two_traffic').val();
            $('#six_two_traffic').val(six_two_traffic);

            var seven_one_traffic = (($('#four_two_traffic').val() - $('#five_two_traffic').val()) / $('#five_two_traffic').val()) * 100;
            $('#seven_one_traffic').val(seven_one_traffic);

            var two_four_traffic = ($('#four_one_traffic').val() * 100) / $('#one_four_traffic').val();
            $('#two_four_traffic').val(two_four_traffic);

            var two_five_traffic = ($('#four_two_traffic').val() * 100) / $('#one_five_traffic').val();
            $('#two_five_traffic').val(two_five_traffic);
	
	//traffic max end
	//roi start
	var one_one_roi = $('#one_one_roi').val();
	var one_two_roi = $('#one_two_roi').val();
	var one_three_roi = $('#one_three_roi').val();
	var one_four_roi = $('#one_four_roi').val();
	var one_five_roi = (one_one_roi*one_two_roi*one_three_roi*one_four_roi)/100;
	var one_six_roi = one_five_roi*12;
	$('#one_five_roi').val(one_five_roi);
	$('#one_six_roi').val(one_six_roi);
	
	/*Second Row*/
	var two_one_roi = $('#two_one_roi').val();
	var two_two_roi = $('#two_two_roi').val();
	var two_three_roi = $('#two_three_roi').val();
	var two_four_roi = $('#two_four_roi').val();
	var two_five_roi = $('#two_five_roi').val();
	
	/*Third Row*/
	var three_one_roi = (two_one_roi*one_two_roi*one_three_roi*one_four_roi)/100;
	$('#three_one_roi').val(three_one_roi);
	var three_two_roi = (two_two_roi*one_two_roi*one_three_roi*one_four_roi)/100;
	$('#three_two_roi').val(three_two_roi);
	var three_three_roi = (two_three_roi*one_two_roi*one_three_roi*one_four_roi)/100;
	$('#three_three_roi').val(three_three_roi);
	var three_four_roi = (two_four_roi*one_two_roi*one_three_roi*one_four_roi)/100;
	$('#three_four_roi').val(three_four_roi);
	var three_five_roi = (two_five_roi*one_two_roi*one_three_roi*one_four_roi)/100;
	$('#three_five_roi').val(three_five_roi);
	
	/*Four Row*/
	var four_one_roi = $('#four_one_roi').val();
	var four_two_roi = $('#four_two_roi').val();
	var four_three_roi = $('#four_three_roi').val();
	var four_four_roi = $('#four_four_roi').val();
	var four_five_roi = $('#four_five_roi').val();
	
	/*Fifth Row*/
	var five_one_roi = (three_one_roi*four_one_roi)/100;
	$('#five_one_roi').val(five_one_roi);
	var five_two_roi = (three_two_roi*four_two_roi)/100;
	$('#five_two_roi').val(five_two_roi);
	var five_three_roi = (three_three_roi*four_three_roi)/100;
	$('#five_three_roi').val(five_three_roi);
	var five_four_roi = (three_four_roi*four_four_roi)/100;
	$('#five_four_roi').val(five_four_roi);
	var five_five_roi = (three_five_roi*four_five_roi)/100;
	$('#five_five_roi').val(five_five_roi);
	
	/*Sixth Row*/
	var six_one_roi = $('#six_one_roi').val();
	var six_two_roi = $('#six_two_roi').val();
	var six_three_roi = $('#six_three_roi').val();
	var six_four_roi = $('#six_four_roi').val();
	var six_five_roi = $('#six_five_roi').val();
	
	/*Fifth Row*/
	var seven_one_roi = (three_one_roi-five_one_roi-six_one_roi);
	$('#seven_one_roi').val(seven_one_roi);
	var seven_two_roi = (three_two_roi-five_two_roi-six_two_roi);
	$('#seven_two_roi').val(seven_two_roi);
	var seven_three_roi = (three_three_roi-five_three_roi-six_three_roi);
	$('#seven_three_roi').val(seven_three_roi);
	var seven_four_roi = (three_four_roi-five_four_roi-six_four_roi);
	$('#seven_four_roi').val(seven_four_roi);
	var seven_five_roi = (three_five_roi-five_five_roi-six_five_roi);
	$('#seven_five_roi').val(seven_five_roi);
	//roi end
	
	//advanced roi start
	/*First Row*/
	var one_one_advancedroi = $('#one_one_advancedroi').val();
	var one_two_advancedroi = $('#one_two_advancedroi').val();
	var one_three_advancedroi = $('#one_three_advancedroi').val();
	var one_four_advancedroi = $('#one_four_advancedroi').val();
	var one_five_advancedroi = (one_one_advancedroi*one_two_advancedroi*one_three_advancedroi*one_four_advancedroi)/100;
	var one_six_advancedroi = one_five_advancedroi*12;
	$('#one_five_advancedroi').val(one_five_advancedroi);
	$('#one_six_advancedroi').val(one_six_advancedroi);
	
	/*Second Row*/
	var two_one_advancedroi = $('#two_one_advancedroi').val();
	var two_two_advancedroi = $('#two_two_advancedroi').val();
	var two_three_advancedroi = $('#two_three_advancedroi').val();
	var two_four_advancedroi = $('#two_four_advancedroi').val();
	var two_five_advancedroi = $('#two_five_advancedroi').val();
	
	/*Third Row*/
	var three_one_advancedroi = (two_one_advancedroi*$('#new_two_two_advancedroi').val()*$('#new_two_three_advancedroi').val()*$('#new_two_four_advancedroi').val())/100;
	$('#three_one_advancedroi').val(three_one_advancedroi);
	var three_two_advancedroi = (two_two_advancedroi*$('#new_two_two_advancedroi').val()*$('#new_two_three_advancedroi').val()*$('#new_two_four_advancedroi').val())/100;
	$('#three_two_advancedroi').val(three_two_advancedroi);
	var three_three_advancedroi = (two_three_advancedroi*$('#new_two_two_advancedroi').val()*$('#new_two_three_advancedroi').val()*$('#new_two_four_advancedroi').val())/100;
	$('#three_three_advancedroi').val(three_three_advancedroi);
	var three_four_advancedroi = (two_four_advancedroi*$('#new_two_two_advancedroi').val()*$('#new_two_three_advancedroi').val()*$('#new_two_four_advancedroi').val())/100;
	$('#three_four_advancedroi').val(three_four_advancedroi);
	var three_five_advancedroi = (two_five_advancedroi*$('#new_two_two_advancedroi').val()*$('#new_two_three_advancedroi').val()*$('#new_two_four_advancedroi').val())/100;
	$('#three_five_advancedroi').val(three_five_advancedroi);
	
	/*Four Row*/
	var four_one_advancedroi = $('#four_one_advancedroi').val();
	var four_two_advancedroi = $('#four_two_advancedroi').val();
	var four_three_advancedroi = $('#four_three_advancedroi').val();
	var four_four_advancedroi = $('#four_four_advancedroi').val();
	var four_five_advancedroi = $('#four_five_advancedroi').val();
	
	/*Fifth Row*/
	var five_one_advancedroi = (three_one_advancedroi*four_one_advancedroi)/100;
	$('#five_one_advancedroi').val(five_one_advancedroi);
	var five_two_advancedroi = (three_two_advancedroi*four_two_advancedroi)/100;
	$('#five_two_advancedroi').val(five_two_advancedroi);
	var five_three_advancedroi = (three_three_advancedroi*four_three_advancedroi)/100;
	$('#five_three_advancedroi').val(five_three_advancedroi);
	var five_four_advancedroi = (three_four_advancedroi*four_four_advancedroi)/100;
	$('#five_four_advancedroi').val(five_four_advancedroi);
	var five_five_advancedroi = (three_five_advancedroi*four_five_advancedroi)/100;
	$('#five_five_advancedroi').val(five_five_advancedroi);
	
	/*Sixth Row*/
	var six_one_advancedroi = $('#six_one_advancedroi').val();
	var six_two_advancedroi = $('#six_two_advancedroi').val();
	var six_three_advancedroi = $('#six_three_advancedroi').val();
	var six_four_advancedroi = $('#six_four_advancedroi').val();
	var six_five_advancedroi = $('#six_five_advancedroi').val();
	
	/*Fifth Row*/
	var seven_one_advancedroi = (three_one_advancedroi-five_one_advancedroi-six_one_advancedroi);
	$('#seven_one_advancedroi').val(seven_one_advancedroi);
	var seven_two_advancedroi = (three_two_advancedroi-five_two_advancedroi-six_two_advancedroi);
	$('#seven_two_advancedroi').val(seven_two_advancedroi);
	var seven_three_advancedroi = (three_three_advancedroi-five_three_advancedroi-six_three_advancedroi);
	$('#seven_three_advancedroi').val(seven_three_advancedroi);
	var seven_four_advancedroi = (three_four_advancedroi-five_four_advancedroi-six_four_advancedroi);
	$('#seven_four_advancedroi').val(seven_four_advancedroi);
	var seven_five_advancedroi = (three_five_advancedroi-five_five_advancedroi-six_five_advancedroi);
	$('#seven_five_advancedroi').val(seven_five_advancedroi);
	
	var new_two_one_1_advancedroi = (Number($('#new_one_one_advancedroi').val()) * $('#one_one_advancedroi').val()) / 100;
	var new_two_one_advancedroi = new_two_one_1_advancedroi + Number($('#one_one_advancedroi').val());
	$('#new_two_one_advancedroi').val(new_two_one_advancedroi);
	
	var new_two_two_1_advancedroi = (Number($('#new_one_two_advancedroi').val()) * $('#one_two_advancedroi').val()) / 100;
	var new_two_two_advancedroi = new_two_two_1_advancedroi + Number($('#one_two_advancedroi').val());
	$('#new_two_two_advancedroi').val(new_two_two_advancedroi);
	
	var new_two_three_1_advancedroi = (Number($('#new_one_three_advancedroi').val()) * $('#one_three_advancedroi').val()) / 100;
	var new_two_three_advancedroi = new_two_three_1_advancedroi + Number($('#one_three_advancedroi').val());
	$('#new_two_three_advancedroi').val(new_two_three_advancedroi);
	
	var new_two_four_1_advancedroi = (Number($('#new_one_four_advancedroi').val()) * $('#one_four_advancedroi').val()) / 100;
	var new_two_four_advancedroi = new_two_four_1_advancedroi + Number($('#one_four_advancedroi').val());
	$('#new_two_four_advancedroi').val(new_two_four_advancedroi);
	
	var new_two_five_advancedroi = ($('#new_two_one_advancedroi').val() * $('#new_two_two_advancedroi').val() * $('#new_two_three_advancedroi').val() * $('#new_two_four_advancedroi').val()) / 100;
	$('#new_two_five_advancedroi').val(new_two_five_advancedroi);
	
	var new_two_six_advancedroi = $('#new_two_five_advancedroi').val() * 12;
	$('#new_two_six_advancedroi').val(new_two_six_advancedroi);
	
	var new_three_one_advancedroi = $('#new_two_five_advancedroi').val() - $('#one_five_advancedroi').val();
	$('#new_three_one_advancedroi').val(new_three_one_advancedroi);
	
	var new_three_two_advancedroi = $('#new_two_six_advancedroi').val() - $('#one_six_advancedroi').val();
	$('#new_three_two_advancedroi').val(new_three_two_advancedroi);
	
	var new_one_five_advancedroi = ($('#new_three_one_advancedroi').val() / $('#one_five_advancedroi').val()) * 100;
	$('#new_one_five_advancedroi').val(new_one_five_advancedroi);
	
	var new_one_six_advancedroi = (($('#new_two_five_advancedroi').val() - $('#one_five_advancedroi').val()) / $('#one_five_advancedroi').val()) * 100;
	$('#new_one_six_advancedroi').val(new_one_six_advancedroi);
	//advanced roi end
	//value of a customer twice start
	var one_six_twice = $('#one_one_twice').val() * $('#one_two_twice').val();
	$('#one_six_twice').val(one_six_twice);
	
	var one_seven_twice = $('#one_six_twice').val() * $('#one_three_twice').val();
	$('#one_seven_twice').val(one_seven_twice);
	
	var one_eight_twice = ($('#one_four_twice').val() * $('#one_five_twice').val()) / 100;
	$('#one_seven_twice').val(one_seven_twice.toFixed(1));
	
	var one_nine_twice = $('#one_eight_twice').val() * $('#one_three_twice').val() * $('#one_seven_twice').val();
	$('#one_nine_twice').val(one_nine_twice);
	
	var one_ten_twice = Number($('#one_seven_twice').val()) + Number($('#one_nine_twice').val());
	$('#one_ten_twice').val(one_ten_twice);
	//new code
	var data_two_twice = (($('#one_one_twice').val()/100)+1) * $('#one_one_twice').val();
	$('#data_two_twice').val(data_two_twice);
	
	var data_four_twice = (($('#data_three_twice').val()/100)+1) * $('#one_two_twice').val();
	$('#data_four_twice').val(data_four_twice);
	
	var data_six_twice = (($('#data_five_twice').val()/100)+1) * $('#one_three_twice').val();
	$('#data_six_twice').val(data_six_twice);
	
	var data_eight_twice = (($('#data_seven_twice').val()/100)+1) * $('#one_four_twice').val();
	$('#data_eight_twice').val(data_eight_twice);
	
	var data_ten_twice = (($('#data_nine_twice').val()/100)+1) * ($('#one_five_twice').val()/100);
	$('#data_ten_twice').val(data_ten_twice);
	
	var data_eleven_twice = ($('#data_four_twice').val())* ($('#data_two_twice').val());
	$('#data_eleven_twice').val(data_eleven_twice);
	
	var data_twelve_twice = ($('#data_eleven_twice').val())* ($('#data_six_twice').val());
	$('#data_twelve_twice').val(data_twelve_twice);
	
	var data_thirteen_twice = ($('#data_ten_twice').val()/100) *($('#data_eight_twice').val());
	$('#data_thirteen_twice').val(data_thirteen_twice);
	
	var data_fourteen_twice= ($('#data_thirteen_twice').val()) * ($('#data_twelve_twice').val()) * ($('#data_six_twice').val());
	$('#data_fourteen_twice').val(data_fourteen_twice);
	
	var data_sixteen_twice = ($('#data_fourteen_twice').val()) +($('#data_twelve_twice').val());
	$('#data_sixteen_twice').val(data_sixteen_twice);
	
	var data_fifteen_twice =(($('#data_sixteen_twice').val()) - ($('#one_ten_twice').val()))/($('#one_ten_twice').val());
	$('#data_fifteen_twice').val(data_fifteen_twice);
	//value of a customer twice end
	
	//appointment roi
	var aptroi_one = $('#aptroi_one').val();
	$('#aptroi_one').val(aptroi_one);
	
	var aptroi_two = $('#aptroi_two').val();
	$('#aptroi_two').val(aptroi_two);
	
	var aptroi_three = (($('#aptroi_one').val())*22);
	$('#aptroi_three').val(aptroi_three);
	
	var aptroi_five = (($('#aptroi_two').val())*22);
	$('#aptroi_five').val(aptroi_five);
	
	var aptroi_six = $('#aptroi_six').val();
	$('#aptroi_six').val(aptroi_six);
	
	var aptroi_seven = ($('#aptroi_five').val()) * ($('#aptroi_six').val());
	$('#aptroi_seven').val(aptroi_seven);
	
	var aptroi_eight = (($('#aptroi_seven').val())*12);
	$('#aptroi_eight').val(aptroi_eight);
	
	var aptroi_four  = ($('#aptroi_five').val()) / ($('#aptroi_three').val());
	$('#aptroi_four').val(aptroi_four);
	
	var aptroi_nine = $('#aptroi_nine').val();
	$('#aptroi_nine').val(aptroi_nine);
	
	var aptroi_ten = ($('#aptroi_nine').val()/100)* ($('#aptroi_five').val());
	$('#aptroi_ten').val(aptroi_ten);
	
	var aptroi_eleven = $('#aptroi_eleven').val();
	$('#aptroi_eleven').val(aptroi_eleven);
	
	var  aptroi_twelve = $('#aptroi_eleven').val() * $('#aptroi_ten').val();
	$('#aptroi_twelve').val(aptroi_twelve);
	
	var aptroi_thirteen = $('#aptroi_twelve').val()*12;
	$('#aptroi_thirteen').val(aptroi_thirteen);
	
	var aptroi_fourteen = $('#aptroi_fourteen').val();
	$('#aptroi_fourteen').val(aptroi_fourteen)  
	
	var aptroi_fifteen = $('#aptroi_fifteen').val();
	$('#aptroi_fifteen').val(aptroi_fifteen);  
	
	//console.log(aptroi_fourteen);
	//console.log(aptroi_fifteen);
	
	var aptroi_fifteen = $('#aptroi_fourteen').val()*12;
	$('#aptroi_fifteen').val(aptroi_fifteen);
	
	var aptroi_sixteen = ($('#aptroi_twelve').val())- ($('#aptroi_fourteen').val());
	$('#aptroi_sixteen').val(aptroi_sixteen);
	
	var aptroi_seventeen = $('#aptroi_sixteen').val()*12;
	$('#aptroi_seventeen').val(aptroi_seventeen);
	
	var aptroi_eighteen = ($('#aptroi_thirteen').val())- ($('#aptroi_fifteen').val())/($('#aptroi_fifteen').val());
	$('#aptroi_eighteen').val(aptroi_eighteen);
	
	});

