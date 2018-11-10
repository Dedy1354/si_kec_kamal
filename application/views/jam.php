<script type="text/javascript">
    window.setTimeout("waktu()",1000);    
    function waktu() {     
    var jam = new Date();    
    setTimeout("waktu()",1000);
	var ho = jam.getHours();
	var min = jam.getMinutes();
	var sec = jam.getSeconds();
	if (ho < 10) {ho = "0"+jam.getHours();}
	if (sec < 10) {sec = "0"+jam.getSeconds();}    
	if (min < 10) {min = "0"+jam.getMinutes();}    

    document.getElementById("waktu").innerHTML = ho+":"+min+":"+sec;  
    }   
</script>
<style type="text/css">
	#waktu{
		color: black;
		font-size: 470%;
	}
</style>
<strong><div id="waktu" ></div></strong>