import $ from 'jquery';
import moment from 'moment';
import 'moment-timezone';

export default () => {

    $(".newClock").each(function(i) {

      const timezone = $(this).attr('data-timezone');
  		const ctx = $(".newClock")[i].getContext('2d');

  		ctx.strokeStyle = 'white';
  		ctx.lineWidth = 5;

  		const degToRad = (degree) => {
  			let factor = Math.PI/180;
  			return degree*factor;
  		}

  		const renderTime = () => {

        const format = 'YYYY/MM/DD HH:mm:ss ZZ';
        let now = moment(new Date, format).tz(timezone);
  			let hrs = now.hour();
  			let min = now.minute();
  			let sec = now.second();
  			let mil = now.milliseconds();
  			let smoothsec = sec+(mil/1000);
        let smoothmin = min+(smoothsec/60);

  			//Background
  			ctx.clearRect(0, 0, 700, 700);
  			//Hours
  			// ctx.beginPath();
  			// ctx.arc(157,157,150, degToRad(270), degToRad((hrs*30)-90));
  			// ctx.stroke();
  			//Seconds
  			ctx.beginPath();
  			ctx.arc(157,157,130, degToRad(270), degToRad((smoothsec*6)-90));
  			ctx.stroke();
  			//Time

        // Ensure double digits
        hrs = hrs < 10 ? '0' + hrs : hrs;
        min = min < 10 ? '0' + min : min;
        sec = sec < 10 ? '0' + sec : sec;

  			ctx.font = "60px Trebuchet MS";
  			ctx.fillStyle = 'white';
  			ctx.fillText(hrs+":"+min, 80, 180);

  		}
  		setInterval(renderTime, 40);

    });
};
