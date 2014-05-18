	var Notification = window.Notification || window.mozNotification || window.webkitNotification;

	Notification.requestPermission(function (permission) {
		// console.log(permission);
	});

	function notify(title, text="") {
		window.setTimeout(function () {
			var instance = new Notification(
				title, {
					body: text
				}
			);

			instance.onclick = function () {
				window.focus();
				$("#spenter").focus();
			};
			instance.onerror = function () {
				// Something to do
			};
			instance.onshow = function () {
				// Something to do
			};
			instance.onclose = function () {
				// Something to do
			};
		}, 1000);

		return false;
	}

	function remupdate(min) {
		clearInterval(window.interval);
		if(min==0) {alert("reminders off"); return false;}
		min = Math.max(min, .1);
		alert("setting reminder interval to " + min + " minutes");
		window.interval = setInterval(function() {notify("hi!");}, min*60000);
	}