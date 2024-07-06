addEventListener("DOMContentLoaded", function () {
	const wpmc_test_connection = document.querySelector(
		".wpmc_js_test_connection"
	);

	if (wpmc_test_connection) {
		wpmc_test_connection.addEventListener("click", function (e) {
			e.preventDefault();

			// Save the original text and disable the link
			const originalText = wpmc_test_connection.textContent;
			wpmc_test_connection.textContent = "Loading...";
			wpmc_test_connection.disabled = true;

			const data = {
				action: "wpmc_test_connection",
				security_nonce: wpmc_ajax_object.nonce,
			};

			fetch(wpmc_ajax_object.ajax_url, {
				method: "POST",
				headers: {
					"Content-Type": "application/x-www-form-urlencoded",
				},
				body: new URLSearchParams(data),
			})
				.then((response) => response.json())
				.then((data) => {
					// Restore the original text and re-enable the link
					wpmc_test_connection.textContent = originalText;
					wpmc_test_connection.disabled = false;

					if (data.success) {
						alert("Connection successful!");
					} else {
						alert("Connection failed!");
					}
				})
				.catch((error) => {
					// Restore the original text and re-enable the link on error
					wpmc_test_connection.textContent = originalText;
					wpmc_test_connection.disabled = false;
					alert("Error: " + error.message);
				});
		});
	}
});
