<script type="text/javascript">
	$(document).ready(function() {
		$("#detail").click(function(e) {
			var m = $(this).attr("id");
			$.ajax({
				url: "detail.php",
				type: "GET",
				data: {
					id: m,
				},
				success: function(ajaxData) {
					$("#Modaldet").html(ajaxData);
					$("#Modaldet").modal('show', {
						backdrop: 'true'
					});
				}
			});
		});
	});
</script>