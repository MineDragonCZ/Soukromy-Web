/**
 * MILLISECONDS TO COUNTDOWN TRANSLATOR
 * @author MineDragonCZ_
 */

let checkMillisCountDown_end = "";
let checkMillisCountDown_error = "";
let checkMillisCountDown_error2 = "";

let checkMillisCountDown_time_color = "";
let checkMillisCountDown_end_color = "";
let checkMillisCountDown_error_color = "";
let checkMillisCountDown_error2_color = "";

function setMess(cmcd_end, cmcd_er1, cmcd_er2){
	checkMillisCountDown_end = cmcd_end;
	checkMillisCountDown_error = cmcd_er1;
	checkMillisCountDown_error2 = cmcd_er2;
}

function setColors(cmcd_time, cmcd_end, cmcd_er1, cmcd_er2){
	checkMillisCountDown_time_color = cmcd_time;
	checkMillisCountDown_end_color = cmcd_end;
	checkMillisCountDown_error_color = cmcd_er1;
	checkMillisCountDown_error2_color = cmcd_er2;
}

function checkMillis(){
	var _second = 1000;
	var _minute = _second * 60;
	var _hour = _minute * 60;
	var _day = _hour * 24;
	var _week = _day * 7;
	var _month = _day * 30;
	var _year = _day * 365;


	let elmsOut = document.getElementsByClassName("millis-to-countdown");
	var now = new Date();

	for(let i = 0; i < elmsOut.length; i++){
		let elmOut = elmsOut[i];
		let ts = parseInt(elmOut.getAttribute("data-time"));
        var distance = ts - now;

		let output = "";
		let outBack = "";

		if(ts >= 0){

			var years = Math.floor((distance / _year));
			var months = Math.floor((distance % _year) / _month);
			var days = Math.floor((distance % _month) / _day);
			var hours = Math.floor((distance % _day) / _hour);
			var minutes = Math.floor((distance % _hour) / _minute);
			var seconds = Math.floor((distance % _minute) / _second);
	

			var s = seconds + minutes + hours + days + months + years;
			var m = minutes + hours + days + months + years;
			var h = hours + days + months + years;
			var d = days + months + years;
			var mo = months + years;
			var y = years;

			if(s < 0){
				output = checkMillisCountDown_end;
				outBack = checkMillisCountDown_end_color;
			}
			else{
				outBack = checkMillisCountDown_time_color;
				output = seconds + "s " + output;
				if(m > 0){
					output = minutes + "min " + output;
					if(h > 0){
						output = hours + "h " + output;
						if(d > 0){
							output = days + "d " + output;
							if(mo > 0){
								output = months + "m " + output;
								if(y > 0)
									output = years + "l " + output;
							}
						}
					}
				}
			}
		}
		else if(ts == -1){
			output = checkMillisCountDown_error;
			outBack = checkMillisCountDown_error_color;
		}
		else if(ts == -2){
			output = checkMillisCountDown_error2;
			outBack = checkMillisCountDown_error2_color;
		}

		elmOut.innerHTML = output;
		elmOut.style.background = outBack;
	}
}
setInterval(checkMillis, 1);