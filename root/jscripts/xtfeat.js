function ajax_eliteclose(inptid)
{$(document).ready(function(){document.getElementById("elite_close").style.display="none";document.getElementById("v3_loader").style.display="block";$.post("xmlhttp.php",{action:"elite_close",tid:inptid},function(data,status){console.log(data);try
{if(data["closed"]=="true")
{document.getElementById("v3_loader").style.display="none";document.getElementById("rspmsg").innerText="Thread closed.";}
else if(data["errors"]=="cooldown")
{document.getElementById("v3_loader").style.display="none";document.getElementById("rspmsg").innerText="You have to wait "+data["opt"]+" minutes to close more threads.";}
else
{document.getElementById("v3_loader").style.display="none";document.getElementById("rspmsg").innerText="Unknown error";}}
catch(error)
{document.getElementById("v3_loader").style.display="none";document.getElementById("rspmsg").innerText="Unknown error";}});});}
$("document").ready(function(){$("blockquote").each(function(){if($(this)[0].scrollHeight>500)
{$(this).addClass("hiddenQuote");$(this).click(function(){$(this).removeClass("hiddenQuote");});}});})