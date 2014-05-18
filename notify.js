	var Notification = window.Notification || window.mozNotification || window.webkitNotification;

	Notification.requestPermission(function (permission) {
		// console.log(permission);
	});

	function show() {
		window.setTimeout(function () {
			var instance = new Notification(
				"hi", {
					body: ""
				}
			);

			instance.onclick = function () {
				$("#spenter").focus()
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

	setInterval(function() {show();}, 3600000);