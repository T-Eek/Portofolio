type="text/javascript">
	function BMI() {
		var l=document.getElementById('l').value;
		var g=document.getElementById('g').value;
		var bmi=g/(l/100*l/100);
		var bmio=(bmi.toFixed(2));

		document.getElementById("result").innerHTML="Uw BMI is " + bmio;
		}