document.addEventListener('DOMContentLoaded', function() {
    function checknew() {
        fetch('unread_pmcount.php')
        .then(response => {
            if (!response.ok) {
                console.error(response.text());
			}
			return response.json();
        })
        .then(data => {
            const pmcount = document.querySelector('.pm_count');
            if (pmcount) {
                if (data.count !== undefined && data.count > 0) {
                    pmcount.textContent = data.count;
                    pmcount.classList.add('alert_new');
                } else {
                    pmcount.textContent = '';
                    pmcount.classList.remove('alert_new');
                }
            }
        })
        .catch(error => {});
    }

    checknew();
    setInterval(checknew, 30000);
});
