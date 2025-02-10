// Function to handle like and dislike actions
function ratepost(pid, rating, action) {

    $.ajax({
        type: 'POST',
        url: 'ratepost.php',
        dataType: 'json',
        data: { pid: pid, rating: rating, action: action},
        success: function(response) {
            if (response.error) {
                document.getElementById("like_buttons" + pid).style.display = "inline";
                document.getElementById("like_buttons" + pid).innerText = response.error;
                return;
            }
	
			let up = $("#upboat" + pid + " i");
			let dwn = $("#downboat" + pid + " i");		  
					
			if (response.user_rated !== null) {									
			        if (response.user_rated == -1){ // Down
						up.attr('class', 'fa fa-thumbs-o-up');
						dwn.attr('class', 'fa fa-thumbs-down');			
					}else if (response.user_rated ==  1) { // Up
						up.attr('class', 'fa fa-thumbs-up');
						dwn.attr('class', 'fa fa-thumbs-o-down');
					}
					else {
						up.attr('class', 'fa fa-thumbs-o-up');
						dwn.attr('class', 'fa fa-thumbs-o-down');
					}
			}
			
            if (response.hasOwnProperty('likes')) {
                $('#upcount' + pid).text(response.likes);
            }
            if (response.hasOwnProperty('dislikes')) {
                $('#downcount' + pid).text(response.dislikes);
            }
        },
        error: function(xhr, status, error) {
            console.error('AJAX Error: ' + status + ' - ' + error);
        }
    });
}