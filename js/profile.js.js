<script>
	$(document).ready(function() {
		$.ajax({
			url: "profile_data.php",
			dataType: 'json',
			success: function(data) {
				$('h2').text('Name: ' + data.name);
				$('h3:eq(0)').text('Age: ' + data.age);
				$('h3:eq(1)').text('Location: ' + data.location);
				$('p').text(data.bio);
			}
		});
	});
</script>