<?php
// User Global Visa for admin
add_action('admin_menu','custom_generate_excursion_tickets_menu');
function custom_generate_excursion_tickets_menu(){

    $icon_base64 = 'PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBVcGxvYWRlZCB0bzogU1ZHIFJlcG8sIHd3dy5zdmdyZXBvLmNvbSwgR2VuZXJhdG9yOiBTVkcgUmVwbyBNaXhlciBUb29scyAtLT4NCjxzdmcgZmlsbD0iIzAwMDAwMCIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgDQoJIHZpZXdCb3g9IjAgMCAyODYuMTUzIDI4Ni4xNTMiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxnPg0KCQkJPHJlY3QgeD0iMTMuODQ2IiB5PSIxMTcuNjkyIiB3aWR0aD0iOS4yMzEiIGhlaWdodD0iNzguNDYyIi8+DQoJCQk8cmVjdCB4PSIxMy44NDYiIHk9Ijk5LjIzMSIgd2lkdGg9IjkuMjMxIiBoZWlnaHQ9IjkuMjMxIi8+DQoJCQk8cmVjdCB4PSIxMjkuMjMxIiB5PSI3Ni4xNTMiIHdpZHRoPSIyNy42OTIiIGhlaWdodD0iOS4yMzEiLz4NCgkJCTxwYXRoIGQ9Ik0yNjcuNjkyLDgwLjc2OFY2Mi4zMDdoLTYwdjEzLjg0NkgxODkuMjNWNTcuNjkySDk2LjkyM3YxOC40NjJINzguNDYyVjYyLjMwN2gtNjBWODAuNzdIMHYxNDcuNjkyaDMyLjMwOGg0LjYxNWg2MA0KCQkJCWg0LjYxNWg4My4wNzdoNC42MTVoNjBoNC42MTVoMzIuMzA4VjgwLjc2OEgyNjcuNjkyeiBNNzguNDYyLDg1LjM4NWgxOC40NjF2OS4yMzFINzguNDYyVjg1LjM4NXogTTI3LjY5MywyMTkuMjMxDQoJCQkJTDI3LjY5MywyMTkuMjMxSDkuMjMxVjkwaDkuMjMxaDkuMjMxVjIxOS4yMzF6IE0yNy42OTIsODAuNzY4di05LjIzMUg2OS4yM3YyMy4wNzdIMzYuOTIzVjgwLjc2OEgyNy42OTJ6IE0zNi45MjIsMjAwLjc2OA0KCQkJCXYtNzMuODQ2aDYwdjczLjg0NmgtNC42MTV2LTYwaC05LjIzdjYwaC05LjIzMXYtNjBoLTkuMjMxdjYwaC05LjIzMXYtNjBoLTkuMjMxdjYwSDM2LjkyMnogTTk2LjkyMywyMTkuMjMxaC02MFYyMTBoNjBWMjE5LjIzMXoNCgkJCQkgTTk2LjkyMywxMTcuNjkyaC02MGMwLDAsMC0xMy44NDYsMC0xMy44NDZoNjBWMTE3LjY5MnogTTE4MCwyMTkuMjMxaC03My44NDZWMjEwSDE4MFYyMTkuMjMxeiBNMTM4LjQ2MiwxNTQuNjE1djQ2LjE1NGgtOS4yMzENCgkJCQl2LTU1LjM4NWgyNy42OTJ2NTUuMzg1aC05LjIzMXYtNDYuMTU0SDEzOC40NjJ6IE0xNTYuOTIyLDEzNi4xNTRoLTkuMjN2LTE4LjQ2MmgtOS4yMzF2MTguNDYyaC05LjIzMXYtMTMuODQ2DQoJCQkJYzAtNy43NzIsOC42NC0xNC42MzUsMTMuODE4LTE3Ljc3OGM0LjI5MiwyLjYzMSwxMy44NzQsOS40MzgsMTMuODc0LDE3Ljc3OFYxMzYuMTU0eiBNMTgwLDIwMC43NjhoLTEzLjg0NnYtNzguNDYyDQoJCQkJYzAtMTYuNTA5LTIwLjE1NS0yNi43NzQtMjEuMDE0LTI3LjIwOGwtMi4wNjMtMS4wMjlsLTIuMDYzLDEuMDM0QzE0MC4xNTUsOTUuNTM0LDEyMCwxMDUuNzk3LDEyMCwxMjIuMzA3djc4LjQ2MmgtMTMuODQ2VjY2LjkyMg0KCQkJCUgxODBWMjAwLjc2OHogTTE4OS4yMyw4NS4zODVoMTguNDYydjkuMjMxSDE4OS4yM1Y4NS4zODV6IE0xODkuMjMsMTI2LjkyMmg2MHY3My44NDZIMjQwdi00MS41MzhoLTkuMjMxdjQxLjUzOGgtOS4yMzF2LTYwDQoJCQkJaC05LjIzMXY2MGgtOS4yMzF2LTYwaC05LjIzMXY2MGgtNC42MTVWMTI2LjkyMnogTTI0OS4yMzEsMjE5LjIzMWgtNjBWMjEwaDYwVjIxOS4yMzF6IE0yNDkuMjMxLDExNy42OTJoLTYwdi0xMy44NDZoNjBWMTE3LjY5Mg0KCQkJCXogTTI0OS4yMzEsODAuNzY4djEzLjg0NmgtMzIuMzA4VjcxLjUzOGg0MS41Mzl2OS4yMzFIMjQ5LjIzMXogTTI1OC40NjEsMjE5LjIzMVY5MGg5LjIzMWg5LjIzMXYxMjkuMjMxSDI1OC40NjF6Ii8+DQoJCQk8cmVjdCB4PSIyNjMuMDc3IiB5PSIxMTcuNjkyIiB3aWR0aD0iOS4yMzEiIGhlaWdodD0iNzguNDYyIi8+DQoJCQk8cmVjdCB4PSIyNjMuMDc3IiB5PSI5OS4yMzEiIHdpZHRoPSI5LjIzMSIgaGVpZ2h0PSI5LjIzMSIvPg0KCQkJPHJlY3QgeD0iMjMwLjc2OSIgeT0iMTQwLjc2OCIgd2lkdGg9IjkuMjMxIiBoZWlnaHQ9IjkuMjMxIi8+DQoJCTwvZz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4=';
    $icon_data_uri = 'data:image/svg+xml;base64,' . $icon_base64;

    add_menu_page(
        'Excursion Bookings',
        'Excursion Bookings',
        'manage_options',
        'generate-excursion-tickets',
        'generate_excursion_tickets_function',
        'dashicons-tickets-alt',
        2
    );

    add_submenu_page(
        "generate-excursion-tickets",
        'Generate Excursion Tickets',
        'Generate Excursion Tickets',
        'manage_options',
        'generate-excursion-tickets',
        'generate_excursion_tickets_function'
    );

    add_submenu_page(
        'generate-excursion-tickets',
        'Generated Excursion Ticket List',
        'Generated Excursion Ticket List',
        'manage_options',
        'generated-excursion-ticket-list',
        'dahrtours_generated_excursion_ticket_list'
    );
    add_submenu_page( 
        'generate-excursion-tickets',
        'Refund Cancel Booking',
        'Refund Cancel Booking',
        'manage_options',
        'cancel-excursion-booking',
        'dahrtours_excursion_booking_cancel_callback_function'
    );
}

/**
 * Generated Excursion Ticket List
 */
function dahrtours_generated_excursion_ticket_list() {
	?>
	<style>
        div#GeneratedExcursionTicketList_filter {
            margin-bottom: 5px;
        }
		.dataTables_length select {
			width: 45px;
		}

		#GeneratedExcursionTicketList tfoot {
			display: table-header-group;
		}
		#GeneratedExcursionTicketList tfoot input{
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
            margin: 0;
        }
		#GeneratedExcursionTicketList_filter{
            display: none;
        }
        #GeneratedExcursionTicketList th:last-child,
#GeneratedExcursionTicketList td:last-child {
    width: 130px; /* Adjust the width as needed */
    min-width: 130px;
    text-align: center; /* Optional: Align content */
}
	</style>
	<div class="wrap">
		<h1>Generated Excursion Ticket List</h1>
		<hr>
		<table class="wp-list-table widefat fixed striped" id="GeneratedExcursionTicketList">
			<thead>
				<tr>
					<th>Sr No.</th>
					<th>Booking ID</th>
					<th>Tour Name</th>
					<th>Passenger Name</th>
					<th>Passenger Type</th>
					<th>Travel Date</th>
					<!-- <th>Visual ID NO.</th> -->
					<th>Agent Details</th>
					<th>Selling</th>
					<!-- <th>Total Type</th> -->
					<th>Booking Date</th>
					<th>Status</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
            <tfoot>
				<tr>
					<th></th>
					<th>Booking ID</th>
					<th>Tour Name</th>
					<th>Passenger Name</th>
					<th>Passenger Type</th>
					<th>Travel Date</th>
					<!-- <th>Visual ID NO.</th> -->
					<th>Agent Details</th>
					<th>Selling</th>
					<!-- <th>Total Type</th> -->
					<th>Booking Date</th>
					<th>Status</th>
                    <th>Action</th>
				</tr>
			</tfoot>
		</table>
	</div>
	<script>
		// Generated Excursion Ticket List
		jQuery(document).ready(function ($) {
            $('#GeneratedExcursionTicketList').DataTable({
                columns: [
                { name: "sr_no", searchable: false },
                { name: "booking_id", searchable: true },
                { name: "tour_name", searchable: true },
                { name: "passenger_name", searchable: true },
                { name: "passenger_type", searchable: true },
                { name: "travel_date", searchable: true },
                // { name: "visual_id_no", searchable: true },
                { name: "agent_details", searchable: true },
                { name: "selling", searchable: true },
                // { name: "total_type", searchable: false },
                { name: "booking_date", searchable: true },
                { name: "status", searchable: true },
                { name: "action", searchable: false }
                ],
                bInfo: true,
                bLengthChange: true,
                pageLength: 25,
                searching: true,
                processing: true,
                serverSide: true,
                scrollCollapse: true,
                ordering: false,
                paging: true,
                ajax: {
                url: js_object.ajax_url,
                type: 'POST',
                dataType: 'json',
                data: function (d) {
                    d.action = 'generated_excursion_tickets_listing';
                },
                },
                order: [],
                initComplete: function () {
                this.api()
                    .columns([
                        "booking_id:name",
                        "tour_name:name",
                        "passenger_name:name",
                        "passenger_type:name",
                        "travel_date:name",
                        // "visual_id_no:name",
                        "agent_details:name",
                        "reference_number_internal:name",
                        "selling:name",
                        // "total_type:name",
                        "booking_date:name",
                        "status:name"
                    ])
                    .every(function () {
                    let column = this;
                    let title = $(column.footer()).text(); // or any custom label
                    
                    // Create an <input> or <select>, etc.
                    let input = document.createElement("input");
                    input.placeholder = title.trim();
                    
                    // Place the input in the footer cell
                    $(column.footer()).html(input);

                    // On keyup, apply the search
                    $(input).on("keyup change", function () {
                        if (column.search() !== this.value) {
                        column.search(this.value).draw();
                        }
                    });
                    });
                },
                responsive: true,
            });

            // Your custom code to rearrange elements if needed
            var controlAccessParentElement = jQuery("#GeneratedExcursionTicketList");
            controlAccessParentElement.prepend(controlAccessParentElement.children().last());
        
            $(document).on("click","a.cancelExcursionBooking",function(e){
				const target = 'approve';
                if ( ! confirm( "Are you sure you want to cancel this booking?" ) ) {
    				return;
    			}                
				e.preventDefault();
				$.ajax({
					type : "POST",
					dataType : "json",
					url : js_object.ajax_url,
					data : {
                        action: "dt_admin_cancel_excursion_booking",
						cancel_booking_id: $(this).data("id"),
						request_target: target
					},
					success: function(response) {
						if(response.success){
                            alert("This Booking successfully cancelled.");
						} else {
                            alert(response.data.message);
                        }
					}
				});
			});
        });

	</script>
<?php
}

/**
 * Refund Cancel Booking
 */
function dahrtours_excursion_booking_cancel_callback_function() {
	?>
    <style>
        div#cancelExcursionTicketList_filter {
            margin-bottom: 5px;
        }
		.dataTables_length select {
			width: 45px;
		}

		#cancelExcursionTicketList tfoot {
			display: table-header-group;
		}
		#cancelExcursionTicketList tfoot input{
            width: 100%;
            padding: 3px;
            box-sizing: border-box;
            margin: 0;
        }
		#cancelExcursionTicketList_filter{
            display: none;
        }
	</style>
	<div class="wrap">
	    <h1>Refund Cancel Booking Requests</h1>
        <div class="notification_box"></div>
		<hr>
		<table class="wp-list-table widefat fixed striped" id="cancelExcursionTicketList">
			<thead>
				<tr>
					<th>Sr No.</th>
					<th>Booking ID</th>
					<th>Tour Name</th>
					<th>Passenger Name</th>
					<th>Passenger Type</th>
					<th>Travel Date</th>
					<th>Visual ID NO.</th>
					<th>Agent Details</th>
					<th>Selling</th>
					<th>Status</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
			</tbody>
            <tfoot>
				<tr>
					<th></th>
					<th>Booking ID</th>
					<th>Tour Name</th>
					<th>Passenger Name</th>
					<th>Passenger Type</th>
					<th>Travel Date</th>
					<th>Visual ID NO.</th>
					<th>Agent Details</th>
					<th>Selling</th>
					<th>Status</th>
                    <th>Action</th>
				</tr>
			</tfoot>
		</table>
	</div>
	<script>
		// Generated Excursion Ticket List
		jQuery(document).ready(function ($) {
            $('#cancelExcursionTicketList').DataTable({
                columns: [
                { name: "sr_no", searchable: false },
                { name: "booking_id", searchable: true },
                { name: "tour_name", searchable: true },
                { name: "passenger_name", searchable: true },
                { name: "passenger_type", searchable: true },
                { name: "travel_date", searchable: true },
                { name: "visual_id_no", searchable: true },
                { name: "agent_details", searchable: true },
                { name: "selling", searchable: true },
                { name: "status", searchable: true },
                { name: "action", searchable: false }
                ],
                bInfo: true,
                bLengthChange: true,
                pageLength: 25,
                searching: true,
                processing: true,
                serverSide: true,
                scrollCollapse: true,
                ordering: false,
                paging: true,
                ajax: {
                url: js_object.ajax_url,
                type: 'POST',
                dataType: 'json',
                data: function (d) {
                    d.action = 'cancel_excursion_tickets_listing';
                },
                },
                order: [],
                initComplete: function () {
                this.api()
                    .columns([
                        "booking_id:name",
                        "tour_name:name",
                        "passenger_name:name",
                        "passenger_type:name",
                        "travel_date:name",
                        "visual_id_no:name",
                        "agent_details:name",
                        "reference_number_internal:name",
                        "selling:name",
                        "status:name"
                    ])
                    .every(function () {
                    let column = this;
                    let title = $(column.footer()).text(); // or any custom label
                    
                    // Create an <input> or <select>, etc.
                    let input = document.createElement("input");
                    input.placeholder = title.trim();
                    
                    // Place the input in the footer cell
                    $(column.footer()).html(input);

                    // On keyup, apply the search
                    $(input).on("keyup change", function () {
                        if (column.search() !== this.value) {
                        column.search(this.value).draw();
                        }
                    });
                    });
                },
                responsive: true,
            });

            // Your custom code to rearrange elements if needed
            var controlAccessParentElement = jQuery("#cancelExcursionTicketList");
            controlAccessParentElement.prepend(controlAccessParentElement.children().last());

            $( document ).on( 'click', '.adminCancelExcursionBooking', function() {
				const target = $(this).data("target");
				console.log( target );
				let confirmCancel = false;
				if ( target == 'approve' ) {
					confirmCancel = confirm("Are you sure you want to Approve this request?");
				} else if ( target == 'reject' ) {
					confirmCancel = confirm("Are you sure you want to Reject this request?");
				}
				if ( ! confirmCancel ) {
					return;
				}
				$.ajax({
					type : "POST",
					dataType : "json",
					url : js_object.ajax_url,
					data : {
						action: "dt_admin_cancel_excursion_booking",
						cancel_booking_id: $(this).data("id"),
						request_target: target
					},
					beforeSend: function() {
						$(".notification_box").html('<div class="message-info error-info"><p>Please do not reload or close this browser window, or else your cancelation will be fail. <span class="spinner"></span></p></div>');
						$(".spinner").addClass("is-active");
						$(".message-info").show();
					},
					success: function(response) {
						console.log(response.success);
						if (response.success) {
							$(".spinner").addClass("is-active");
							$(".notification_box").html('<div class="message-info error-success"><p>' + response.data.message + '</p></div>');
							$(".message-info").show();
							setTimeout(() => {
								location.reload();
							}, 7000 );
						} else {
							$(".notification_box").html('<div class="message-info error-fail"><p>' + response.data.message + '</p></div>');
							$(".message-info").show();
							setTimeout(() => {
								$(".message-info").hide();
							}, 7000 );
						}
					}
				} );
			} );

			$( document ).on( 'click', '.adminRefundExcursionBooking', function() {
				var value = prompt('Please enter Refundable Amount', 0);
				var amount;
				if (value == null || value == '') {
					alert( 'Admin cancelled refund procees' );
					return;
				} else if (!isNaN(value) && value.trim() !== "" && value > 0 ) {
					amount = value;
				} else {
					alert("invalid input");
					return;
				}
				$.ajax({
					type : "POST",
					dataType : "json",
					url : js_object.ajax_url,
					data : {
						action: "dt_admin_refund_excursion_booking",
						refund_booking_id: $(this).data("id"),
						customer_id: $(this).data("agent_id"),
						tour_id: $(this).data("tour_id"),
						amount: amount,
					},
					beforeSend: function() {
						$(".notification_box").html('<div class="message-info error-info"><p>Please do not reload or close this browser window, or else your refund procees will be fail. <span class="spinner"></span></p></div>');
						$(".spinner").addClass("is-active");
						$(".message-info").show();
					},
					success: function(response) {
						console.log(response.success);
						if (response.success) {
							$(".spinner").addClass("is-active");
							$(".notification_box").html('<div class="message-info error-success"><p>' + response.data.message + '</p></div>');
							$(".message-info").show();
							setTimeout(() => {
								location.reload();
							}, 7000 );
						} else {
							$(".notification_box").html('<div class="message-info error-fail"><p>' + response.data.message + '</p></div>');
							$(".message-info").show();
							setTimeout(() => {
								$(".message-info").hide();
							}, 7000 );
						}
					}
				} );
			});
        });
	</script>
    <?php
}

function get_post_ids_by_partial_title($title, $post_type = 'excursion-tour') {
    global $wpdb;

    $post_ids = $wpdb->get_col($wpdb->prepare("
        SELECT ID FROM $wpdb->posts 
        WHERE post_title LIKE %s 
        AND post_type = %s 
        AND post_status = 'publish'
    ", '%' . $wpdb->esc_like($title) . '%', $post_type));

    return $post_ids;
}


/**
 * Tickets listing data.
 */
/*function dahrtours_generated_excursion_tickets_listing() {
    global $wpdb;

    $start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $length = isset($_POST['length']) ? intval($_POST['length']) : 25;

    $column_mappings = array(
        0 => null,  // sr_no doesn't map to DB, used for row numbering
        1 => 'exc_ticket_extra_details',
        2 => 'exc_tour_name',
        3 => 'exc_passenger_name',
        4 => 'exc_passenger_type',
        5 => 'exc_travel_date',
        6 => 'exc_visual_id_no',
        7 => 'exc_agent_details',
        8 => 'exc_selling',
        9 => 'exc_timestamp',
        10 => 'booking_status',
    );

    // We'll build a WHERE clause based on each column's search
    $where_clauses = array();
    $where_params  = array();
    if (!empty($_POST['columns'])) {
        foreach ($_POST['columns'] as $index => $column) {
            // 'search' => [ 'value' => '...', 'regex' => 'false' ]
            if (!empty($column['search']['value'])) {
                $column_name = $column_mappings[$index] ?? null;
                if ($column_name) {
                    if($column_name == 'exc_tour_name'){
                        $tour_name_arr = get_post_ids_by_partial_title($column['search']['value']);
                        if (!empty($tour_name_arr)) {
                            $search_text = implode(',', $tour_name_arr);
                            $where_clauses[] = "$column_name IN ($search_text)";
                            // $where_params[]  = '(' . $wpdb->esc_like($search_text) . ')';
                        }
                    } else if($column_name == 'exc_selling'){
                        $search_text = $column['search']['value'];
                        $where_clauses[] = "$column_name = %s";
                        $where_params[]  = $wpdb->esc_like($search_text);
                    }else {
                        $search_text = $column['search']['value'];
                        $where_clauses[] = "$column_name LIKE %s";
                        $where_params[]  = '%' . $wpdb->esc_like($search_text) . '%';
                    }
                }
            }
        }
    }

    $where_sql = '';
    if (!empty($where_clauses)) {
        $where_sql = 'WHERE ' . implode(' AND ', $where_clauses);
    }

    $total_records_query = "SELECT COUNT(*) FROM {$wpdb->prefix}generated_excursion_tickets";
    $total_records = $wpdb->get_var($total_records_query);

    $filtered_records_query = "SELECT COUNT(*) FROM {$wpdb->prefix}generated_excursion_tickets $where_sql";
    $filtered_records = $wpdb->get_var($wpdb->prepare($filtered_records_query, $where_params));

    $query = "
        SELECT * 
        FROM {$wpdb->prefix}generated_excursion_tickets
        $where_sql
        ORDER BY exc_id DESC
        LIMIT %d
        OFFSET %d
    ";

    // Merge $where_params with the pagination params
    $prepared_params = array_merge($where_params, array($length, $start));
    $data_results = $wpdb->get_results($wpdb->prepare($query, $prepared_params));

    $data = array();
    $sr_no = $start + 1;
 $typeCount = [];
    foreach ($data_results as $row) {
        $booking_ref_no = isset( json_decode( $row->exc_ticket_extra_details)->ticket_extra_details->booking_ref_no ) && ! empty( json_decode( $row->exc_ticket_extra_details)->ticket_extra_details->booking_ref_no ) ? json_decode( $row->exc_ticket_extra_details)->ticket_extra_details->booking_ref_no : '';

        $isemaar = false;
        $emaar_vendors = wp_get_post_terms( $row->exc_tour_name, 'excursion-vendor' );
        if ( ! empty( $emaar_vendors ) && ! is_wp_error( $emaar_vendors ) ) {
            $vendor_names  = wp_list_pluck( $emaar_vendors, 'name' );
            $isemaar       = in_array( 'Emaar', $vendor_names, true );
        }
        $daysUntilTravel = getExcursionDaysUntilTravel($row->exc_travel_date);
        $getLastCancelDate = getExcursionLastCancelDate($row->exc_travel_date);

        $cancel_button = '';
        $download_button = '-';
        if ($row->booking_status != 'cancel') {
            $download_button = '<a href="'.home_url( 'dashboard' ).'?download-ticket=excursionticketdownload&without-contact=false&booking-id=' . $row->exc_id.'">Download</a>';
            if ( $isemaar ) {
                if($daysUntilTravel >= 3){
                    if ( 'pending' == $row->cancel_booking_status || 'cancel' == $row->cancel_booking_status ) {
                        $cancel_button = '';
                    } else {
                        $cancel_button = ' <br> <a href="" data-id="' . $row->exc_id.'" class="cancelExcursionBooking" >Cancel ('.$getLastCancelDate.')</a>';

                    }
                }
            }
        }

               
        foreach (json_decode($row->excursion_other_data) as $item) {
            $typeCount[$item->type] = isset($typeCount[$item->type]) ? $typeCount[$item->type] + 1 : 1;
        }
        
        $adultCount = isset($typeCount['adult']) ? "adult (".$typeCount['adult'].")" : '';
        $childCount = isset($typeCount['child']) ? "child (".$typeCount['child'].")" : '';
        $infantCount = isset($typeCount['infant']) ? "infant (".$typeCount['infant'].")" : '';

        $exc_passenger_type = $adultCount . ' ' . $childCount . ' ' . $infantCount;

        $data[] = array(
            $sr_no,
            esc_html($booking_ref_no),
            esc_html( get_the_title(  $row->exc_tour_name ) ),
            esc_html($row->exc_passenger_name),
            esc_html($row->exc_passenger_type),
            esc_html($row->exc_travel_date),
            esc_html($row->exc_visual_id_no),
            esc_html($row->exc_agent_details),
            esc_html($row->exc_selling),
            // esc_html($exc_passenger_type),
            esc_html( date( "Y-m-d", strtotime( $row->exc_timestamp ) ) ),
            esc_html($row->booking_status),
            $download_button.$cancel_button,
             // '<a href="'.home_url( 'dashboard' ).'?download-ticket=excursionticketdownload&without-contact=false&booking-id=' . $row->exc_id.'">Download</a><br><a href="'.home_url( 'dashboard' ).'?download-ticket=excursionticketdownload&without-contact=true&booking-id=' . $row->exc_id.'">Download Without Contact</a>',
        );
        $sr_no++;
    }
    $response = array(
        'draw'            => isset($_POST['draw']) ? intval($_POST['draw']) : 0,
        'recordsTotal'    => intval($total_records),
        'recordsFiltered' => intval($filtered_records),
        'data'            => $data,
        'test'            => $wpdb->prepare($filtered_records_query, $where_params),
    );

    echo json_encode($response);
    wp_die();
}
add_action('wp_ajax_generated_excursion_tickets_listing', 'dahrtours_generated_excursion_tickets_listing');*/
function dahrtours_generated_excursion_tickets_listing() {
    global $wpdb;

    $start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $length = isset($_POST['length']) ? intval($_POST['length']) : 25;

    $tbname = $wpdb->prefix . 'excursion_bookings';
    $ticket_tbname = $wpdb->prefix . 'generated_excursion_tickets';

    $column_mappings = array(
        0 => null,  // sr_no doesn't map to DB, used for row numbering
        1 => 'variation_title',
        2 => 'tour_id',
        3 => 'first_passenger_name',
        4 => 'exc_passenger_type',
        5 => 'travel_date',
        6 => 'emaar_order_confirmation',
        7 => 'agent_id',
        8 => 'price',
        9 => 'timestamp',
        10 => 'booking_status',
    );

    $where_clauses = array();
    $where_params  = array();
    if (!empty($_POST['columns'])) {
        foreach ($_POST['columns'] as $index => $column) {
            if (!empty($column['search']['value'])) {
                $column_name = $column_mappings[$index] ?? null;
                if ($column_name) {
                    $search_text = $column['search']['value'];
                    $where_clauses[] = "eb.$column_name LIKE %s";
                    $where_params[]  = '%' . $wpdb->esc_like($search_text) . '%';
                }
            }
        }
    }

    $filter_query = '';
    if (!empty($where_clauses)) {
        $filter_query = 'WHERE ' . implode(' AND ', $where_clauses);
    }

    $query = "
        SELECT 
            eb.*, 
            eb.travel_date AS booking_travel_date,
            (
                SELECT COUNT(*) 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id
            ) AS total_ticket_count,
            (
                SELECT et.exc_passenger_name 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id 
                ORDER BY et.excursion_booking_id ASC LIMIT 1
            ) AS first_passenger_name,
            (
                SELECT et.exc_id 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id 
                ORDER BY et.excursion_booking_id ASC LIMIT 1
            ) AS first_ticket_id,
            (
                SELECT et.exc_ticket_extra_details 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id 
                ORDER BY et.excursion_booking_id ASC LIMIT 1
            ) AS ticket_extra_details,
            (
                SELECT et.exc_agent_details 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id 
                ORDER BY et.excursion_booking_id ASC LIMIT 1
            ) AS agent_details,
            (
                SELECT et.booking_status 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id 
                ORDER BY et.excursion_booking_id ASC LIMIT 1
            ) AS first_ticket_booking_status,
            (
                SELECT et.cancel_booking_status 
                FROM {$ticket_tbname} et 
                WHERE eb.id = et.excursion_booking_id 
                ORDER BY et.excursion_booking_id ASC LIMIT 1
            ) AS cancel_booking_status,
            (
                SELECT COUNT(*) 
                FROM {$ticket_tbname} et 
                WHERE et.exc_passenger_type = 'Adult' 
                  AND eb.id = et.excursion_booking_id
            ) AS total_adult_count,
            (
                SELECT COUNT(*) 
                FROM {$ticket_tbname} et 
                WHERE et.exc_passenger_type = 'Child' 
                  AND eb.id = et.excursion_booking_id
            ) AS total_child_count,
            (
                SELECT COUNT(*) 
                FROM {$ticket_tbname} et 
                WHERE et.exc_passenger_type = 'Infant' 
                  AND eb.id = et.excursion_booking_id
            ) AS total_infant_count
        FROM (
            SELECT * FROM {$tbname} eb 
            {$filter_query} 
            ORDER BY eb.id DESC 
            LIMIT %d OFFSET %d
        ) eb
        WHERE EXISTS (
            SELECT * FROM {$ticket_tbname} et 
            WHERE et.excursion_booking_id = eb.id
        )
        GROUP BY eb.id
        ORDER BY eb.id DESC
    ";

    $prepared_params = array_merge($where_params, array($length, $start));
    $data_results = $wpdb->get_results($wpdb->prepare($query, $prepared_params));

    $total_records_query = "SELECT COUNT(*) FROM {$tbname}";
    $total_records = $wpdb->get_var($total_records_query);

    $filtered_records_query = "SELECT COUNT(*) FROM {$tbname} eb {$filter_query}";
    $filtered_records = $wpdb->get_var($wpdb->prepare($filtered_records_query, $where_params));

    $data = array();
    $sr_no = $start + 1;

    foreach ($data_results as $row) {
    	$ticket_details_json = $row->ticket_extra_details; // your DB field
$decoded_data = json_decode($ticket_details_json);
$emaar_booking_id = $decoded_data->ticket_extra_details->booking_ref_no;
        $passenger_type_summary = [];
        if ($row->total_adult_count) $passenger_type_summary[] = "Adult ({$row->total_adult_count})";
        if ($row->total_child_count) $passenger_type_summary[] = "Child ({$row->total_child_count})";
        if ($row->total_infant_count) $passenger_type_summary[] = "Infant ({$row->total_infant_count})";

        $data[] = array(
            $sr_no,
            esc_html($emaar_booking_id),
            esc_html(get_the_title($row->tour_id)),
            esc_html($row->first_passenger_name),
            esc_html(implode(' ', $passenger_type_summary)),
            esc_html($row->booking_travel_date),
            // '-',
            esc_html($row->agent_details),
            esc_html($row->price),
            esc_html(date("Y-m-d", strtotime($row->timestamp))),
            esc_html($row->first_ticket_booking_status),
            '<a data-id="'. $row->id.'" class="button detailsExcursionTicketsPdfAdmin">View</a>'
        );
        $sr_no++;
    }

    $response = array(
        'draw' => isset($_POST['draw']) ? intval($_POST['draw']) : 0,
        'recordsTotal' => intval($total_records),
        'recordsFiltered' => intval($filtered_records),
        'data' => $data,
        'query' => $wpdb->prepare($query, $prepared_params),
    );

    echo json_encode($response);
    wp_die();
}

add_action('wp_ajax_generated_excursion_tickets_listing', 'dahrtours_generated_excursion_tickets_listing');

function dahrtours_admin_footer_script() {
		?>
		<div class="detailsExcursionTicketsPdfAdminPopup" style="display:none;">
			<div class="admin-ExcursionTicketdownload-btns">
				<a href="" class="button" id="adminWithContact">
					<span class="dashicons dashicons-download"></span>With Contact
				</a>
				<a href="" class="button" id="adminWithoutContact">
					<span class="dashicons dashicons-download"></span>Without Contact
				</a>
			</div>
			<table class="wp-list-table widefat striped">
				<thead>
					<tr>
						<th>Sr no.</th>
						<th>Passenger Name</th>
						<th>Passenger Type</th>
						<th>Price</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody  class="excursionRecordListingAdmin">
					
				</tbody>
			</table>
		</div>
		<style>
            #adminWithoutContact .dashicons {
                padding-top: 5px;
            }
			.ui-dialog.ui-corner-all.ui-widget.ui-widget-content.ui-front.ui-resizable {
				z-index: 999999999 !important;
			}
			.red-status {
				background: #ffc2c2 !important;
			}
			.ui-dialog {
				top: 0 !important;
				height: 90vh !important;
				margin-top: auto;
				margin-bottom: auto;
				bottom: 0;
				display: grid;
				grid-template-rows: auto 1fr;
			}
			.ui-dialog-titlebar {
				position: sticky;
				top: 0;
				z-index:1
			}
			.wa-hide-scroll {
				height: 100%;
				overflow: hidden;
			}
			.ui-dialog-content {
				overflow-y: auto;
				padding: 0 !important;
			}
			.ui-dialog .csv-record-preview-popup .wp-list-table {
				border: none;
			}
			.ui-dialog .csv-record-preview-popup .wp-list-table thead th {
				position: -webkit-sticky;
				position: sticky;
				top: 0;
				background: #f6f7f7;
			}
			.admin-ExcursionTicketdownload-btns {
				justify-content: end;
				display: flex;
				margin: 9px;
				gap: 10px;
			}
		</style>
		<script>
			jQuery(document).ready(function($){
				$( '.detailsExcursionTicketsPdfAdminPopup' ).dialog( {
					title: '',
					autoOpen: false,
					draggable: false,
					width:'70%',
					modal: true,
					resizable: true,
					closeOnEscape: true,
					open: function() {
						$('body.wp-admin').addClass( 'wa-hide-scroll' );
					},
					close: function() {
						$('body.wp-admin').removeClass('wa-hide-scroll');
					}
				} );
				$( document ).on( 'click', '.detailsExcursionTicketsPdfAdmin', function() {
					var bookingId = $(this).data("id");
					$.ajax({
					type: "POST",
					dataType: "json",
					url: '<?php echo admin_url('admin-ajax.php'); ?>',
					data: {
						action: "details_excursion_ticket_record_list_admin",
						booking_id: bookingId,
					},
					success: function(response) {
						if (response.success) {
							$(".excursionRecordListingAdmin").empty();
							if (response.data.length > 0) {
								$.each(response.data, function(index, record) {
									if (record.booking_status == 'cancel') {
										actionButtons = '-';
									} else {
										actionButtons = `
										<a href="?download-ticket=excursionticketdownload&without-contact=false&booking-id=${record.exc_id}" data-toggle="tooltip" data-placement="top" title="With Contact" class="with-contact button">With Contact</a> <a href="?download-ticket=excursionticketdownload&without-contact=true&booking-id=${record.exc_id}" data-toggle="tooltip" data-placement="top" title="Without Contact" class="without-contact button">Without Contact</a>
										`;
									}
									$(".excursionRecordListingAdmin").append(`
										<tr>
											<td>${index + 1}</td>
											<td>${record.passenger_name}</td>
											<td>${record.passenger_type}</td>
											<td>${record.exc_selling}</td>
											<td>${actionButtons}</td>
										</tr>
										`);
								});
							} else {
								$(".excursionRecordListingAdmin").append(`
									<tr><td colspan="5">No records found.</td></tr>
									`);
							}
							var downloadUrl = "<?php echo home_url( 'dashboard' ); ?>?download-ticket=allExcursionticketdownloads&booking-id=" + response.mainTableBookingId
							$("#adminWithContact").attr("href",  downloadUrl + "&without-contact=false");
							$("#adminWithoutContact").attr("href",  downloadUrl + "&without-contact=true");
							$('.detailsExcursionTicketsPdfAdminPopup').dialog("option", "title", response.tour_name +' ('+ response.traveller_date +') ');
							$('.detailsExcursionTicketsPdfAdminPopup').dialog('open');
						} else {
							alert("No records found for this booking.");
						}
					},
					error: function() {
						alert("An error occurred. Please try again.");
					}
				});
					
				} );
			} );
		</script>
		<?php
}
add_action( 'admin_footer', 'dahrtours_admin_footer_script' );

function details_excursion_ticket_record_list_admin_cb() { 
    global $wpdb;
    $booking_id = isset($_POST['booking_id']) ? intval($_POST['booking_id']) : 0;
    $table_name = $wpdb->prefix . 'generated_excursion_tickets';
    if (!$booking_id) {
        echo json_encode(['success' => false, 'message' => 'Invalid booking ID.']);
        wp_die();
    }
    $get_data = $wpdb->get_results(
    $wpdb->prepare(
        "SELECT exc_id, exc_tour_name, exc_travel_date, exc_selling, exc_passenger_name, exc_passenger_type, booking_status, excursion_other_data
         FROM $table_name 
         WHERE excursion_booking_id = %d
         ORDER BY exc_id DESC",
        $booking_id
    )
);
    if (!empty($get_data)) {
        $response = [
            'success' => true,
            'tour_name' => get_the_title($get_data[0]->exc_tour_name),
            'traveller_date' => isset( $get_data[0]->exc_travel_date ) ? $get_data[0]->exc_travel_date : '',
            'mainTableBookingId' => $booking_id,
            'data' => []
        ];
        foreach ($get_data as $row) {
        	$other_data = isset( $row->excursion_other_data ) && ! empty( $row->excursion_other_data ) ? json_decode($row->excursion_other_data, true) : array();
            $response['data'][] = [
                'exc_id' => $row->exc_id,
                'tour_name' => get_the_title($row->exc_tour_name),
                'booking_status' => $row->booking_status,
                'passenger_name' => $row->exc_passenger_name,
                'passenger_type' => ucfirst( $row->exc_passenger_type ),
                'exc_selling' => $row->exc_selling,
                'exc_travel_date' => $row->exc_travel_date,
                'other_data' => $other_data
            ];
        }
        echo json_encode($response);
    } else {
        echo json_encode(['success' => false, 'message' => 'No records found.']);
    }
    wp_die();
}

// Register AJAX actions
add_action('wp_ajax_details_excursion_ticket_record_list_admin', 'details_excursion_ticket_record_list_admin_cb');
add_action('wp_ajax_nopriv_details_excursion_ticket_record_list_admin', 'details_excursion_ticket_record_list_admin_cb');


/**
 * Tickets cancel data.
 */
function dahrtours_cancel_excursion_tickets_listing() {
    global $wpdb;

    $start  = isset($_POST['start']) ? intval($_POST['start']) : 0;
    $length = isset($_POST['length']) ? intval($_POST['length']) : 25;

    $column_mappings = array(
        0 => null,  // sr_no doesn't map to DB, used for row numbering
        1 => 'exc_ticket_extra_details',
        2 => 'exc_tour_name',
        3 => 'exc_passenger_name',
        4 => 'exc_passenger_type',
        5 => 'exc_travel_date',
        6 => 'exc_visual_id_no',
        7 => 'exc_agent_details',
        8 => 'exc_selling',
        9 => 'booking_status',
    );

    // We'll build a WHERE clause based on each column's search
    $where_clauses = array();
    $where_params  = array();
    $where_clauses[] = "cancel_booking_status != ''";
    if (!empty($_POST['columns'])) {
        foreach ($_POST['columns'] as $index => $column) {
            // 'search' => [ 'value' => '...', 'regex' => 'false' ]
            if (!empty($column['search']['value'])) {
                $column_name = $column_mappings[$index] ?? null;
                if ($column_name) {
                    if($column_name == 'exc_tour_name'){
                        $tour_name_arr = get_post_ids_by_partial_title($column['search']['value']);
                        if (!empty($tour_name_arr)) {
                            $search_text = implode(',', $tour_name_arr);
                            $where_clauses[] = "$column_name IN ($search_text)";
                            // $where_params[]  = '(' . $wpdb->esc_like($search_text) . ')';
                        }
                    } else if($column_name == 'exc_selling'){
                        $search_text = $column['search']['value'];
                        $where_clauses[] = "$column_name = %s";
                        $where_params[]  = $wpdb->esc_like($search_text);
                    }else {
                        $search_text = $column['search']['value'];
                        $where_clauses[] = "$column_name LIKE %s";
                        $where_params[]  = '%' . $wpdb->esc_like($search_text) . '%';
                    }
                }
            }
        }
    }

    $where_sql = '';
    if (!empty($where_clauses)) {
        $where_sql = 'WHERE ' . implode(' AND ', $where_clauses);
    }

    $total_records_query = "SELECT COUNT(*) FROM {$wpdb->prefix}generated_excursion_tickets";
    $total_records = $wpdb->get_var($total_records_query);

    $filtered_records_query = "SELECT COUNT(*) FROM {$wpdb->prefix}generated_excursion_tickets $where_sql";
    $filtered_records = $wpdb->get_var($wpdb->prepare($filtered_records_query, $where_params));

    $query = "
        SELECT * 
        FROM {$wpdb->prefix}generated_excursion_tickets
        $where_sql
        ORDER BY exc_id DESC
        LIMIT %d
        OFFSET %d
    ";

    // Merge $where_params with the pagination params
    $prepared_params = array_merge($where_params, array($length, $start));
    $data_results = $wpdb->get_results($wpdb->prepare($query, $prepared_params));

    $data = array();
    $sr_no = $start + 1;

    foreach ($data_results as $row) {
        $booking_ref_no = isset( json_decode( $row->exc_ticket_extra_details)->ticket_extra_details->booking_ref_no ) && ! empty( json_decode( $row->exc_ticket_extra_details)->ticket_extra_details->booking_ref_no ) ? json_decode( $row->exc_ticket_extra_details)->ticket_extra_details->booking_ref_no : '';

        $isemaar = false;
        $emaar_vendors = wp_get_post_terms( $row->exc_tour_name, 'excursion-vendor' );
        if ( ! empty( $emaar_vendors ) && ! is_wp_error( $emaar_vendors ) ) {
            $vendor_names  = wp_list_pluck( $emaar_vendors, 'name' );
            $isemaar       = in_array( 'Emaar', $vendor_names, true );
        }
        $daysUntilTravel = getExcursionDaysUntilTravel($row->exc_travel_date);
        $getLastCancelDate = getExcursionLastCancelDate($row->exc_travel_date);

        $cancel_button = '';
        $download_button = '-';
        if ($row->booking_status != 'cancel') {
            $download_button = '<a href="'.home_url( 'dashboard' ).'?download-ticket=excursionticketdownload&without-contact=false&booking-id=' . $row->exc_id.'">Download</a>';
            if ( $isemaar ) {
                if($daysUntilTravel >= 3){
                    if ( 'pending' == $row->cancel_booking_status || 'cancel' == $row->cancel_booking_status ) {
                        $cancel_button = '';
                    } else {
                        $cancel_button = ' <br> <a href="" data-id="' . $row->exc_id.'" class="cancelExcursionBooking" >Cancel ('.$getLastCancelDate.')</a>';

                    }
                }
            }
        }

        $action_column = '';
        if ( $row->cancel_booking_status == 'approve' && $row->refund_status != true ) {
            $action_column = '<a href="" class="adminRefundExcursionBooking" data-id="'.$row->exc_id.'" data-agent_id="'.$row->exc_agent_id.'" data-tour_id="'.$row->exc_tour_name.'" data-target="refund">Refund</a>';
        } elseif ( $row->cancel_booking_status == 'reject' || $row->refund_status == true ) {
            $action_column = '-';
        } else {
            $action_column = '<a href="" class="adminCancelExcursionBooking" data-id="'.$row->exc_id.'" data-target="approve">Approve</a> | <a href="" class="adminCancelExcursionBooking" data-id="'.$row->exc_id.'" data-target="reject">Reject</a>';
        }

        $data[] = array(
            $sr_no,
            esc_html($booking_ref_no),
            esc_html( get_the_title(  $row->exc_tour_name ) ),
            esc_html($row->exc_passenger_name),
            esc_html($row->exc_passenger_type),
            esc_html($row->exc_travel_date),
            esc_html($row->exc_visual_id_no),
            esc_html($row->exc_agent_details),
            esc_html($row->exc_selling),
            esc_html($row->booking_status),
            $action_column,
             // '<a href="'.home_url( 'dashboard' ).'?download-ticket=excursionticketdownload&without-contact=false&booking-id=' . $row->exc_id.'">Download</a><br><a href="'.home_url( 'dashboard' ).'?download-ticket=excursionticketdownload&without-contact=true&booking-id=' . $row->exc_id.'">Download Without Contact</a>',
        );
        $sr_no++;
    }
    $response = array(
        'draw'            => isset($_POST['draw']) ? intval($_POST['draw']) : 0,
        'recordsTotal'    => intval($total_records),
        'recordsFiltered' => intval($filtered_records),
        'data'            => $data,
    );

    echo json_encode($response);
    wp_die();
}
add_action('wp_ajax_cancel_excursion_tickets_listing', 'dahrtours_cancel_excursion_tickets_listing');


/**
 * Save generated excursion ticket
 */
function save_generated_excursion_ticket( $data, $row ) {
    
	global $wpdb;
	// Table name.
	$table_name = $wpdb->prefix . 'generated_excursion_tickets';
	
	$tour_name        = isset( $data["tour_name"] ) && ! empty( $data["tour_name"] ) ? $data["tour_name"] : '';
	$passenger_name   = isset( $data["guest_name"] ) && ! empty( $data["guest_name"] ) ? $data["guest_name"] : '';
	$passenger_type   = isset( $data["guest_type"] ) && ! empty( $data["guest_type"] ) ? $data["guest_type"] : '';
	$travel_date      = isset( $data["travel_date"] ) && ! empty( $data["travel_date"] ) ? $data["travel_date"] : '';
	$visual_id_no     = isset( $data["unique_id"] ) && ! empty( $data["unique_id"] ) ? $data["unique_id"] : '';
	$agent_details    = isset( $data["agent_details"] ) && ! empty( $data["agent_details"] ) ? $data["agent_details"] : '';
	$reference_number = isset( $data["reference_number"] ) && ! empty( $data["reference_number"] ) ? $data["reference_number"] : '';
	$selling          = isset( $data["exc_selling_price"] ) && ! empty( $data["exc_selling_price"] ) ? $data["exc_selling_price"] : '';
	$agent_id             = 0;

	if ( ! empty( $agent_details ) && ! empty( is_email( $agent_details ) ) && filter_var( $agent_details, FILTER_VALIDATE_EMAIL ) ){
		$agent_data = get_user_by( 'email', $agent_details );
		if ( ! empty( $agent_data ) ) {
			if ( $agent_data->ID && has_specific_role( $agent_data->ID ) ){
				$agent_id = $agent_data->ID;
			}
		}
	}

	$ticket_extra_details = array(
		'ticket_extra_details'   => array(
			'validity_date'         => isset( $data["validity_date"] ) && ! empty( $data["validity_date"] ) ? $data["validity_date"] : '',
			'location_link'         => isset( $data["location_link"] ) && ! empty( $data["location_link"] ) ? $data["location_link"] : '',
			'location_address'      => isset( $data["location_address"] ) && ! empty( $data["location_address"] ) ? $data["location_address"] : '',
			'booking_ref_no'        => isset( $data["booking_ref_no"] ) && ! empty( $data["booking_ref_no"] ) ? $data["booking_ref_no"] : '',
			'tour_phone_details'    => isset( $data["tour_phone_details"] ) && ! empty( $data["tour_phone_details"] ) ? $data["tour_phone_details"] : '',
			'tour_Whatsapp_details' => isset( $data["tour_Whatsapp_details"] ) && ! empty( $data["tour_Whatsapp_details"] ) ? $data["tour_Whatsapp_details"] : '',
			'tour_email_details'    => isset( $data["tour_email_details"] ) && ! empty( $data["tour_email_details"] ) ? $data["tour_email_details"] : '',
		),
	);
	$result    = $wpdb->query(
		$wpdb->prepare(
			'INSERT INTO ' . $table_name . '( `exc_tour_name`, `exc_passenger_name`, `exc_passenger_type`, `exc_travel_date`, `exc_visual_id_no`, `exc_agent_details`, `exc_agent_id`, `exc_reference_number_internal`, `exc_selling`, `exc_ticket_extra_details`, `exc_timestamp` ) VALUES ( %s, %s, %s, %s, %s, %s, %s, %s, %s, %s, %s )',
			$tour_name,
			$passenger_name,
			$passenger_type,
			$travel_date,
			$visual_id_no,
			$agent_details,
			$agent_id,
			$reference_number,
			$selling,
			json_encode( $ticket_extra_details ),
			current_time('mysql')
		)
	);
	$insert_id = $wpdb->insert_id;

    // Update
	$excursion_table = $wpdb->prefix . 'excursion_tour_data';
	$update     = $wpdb->update(
		$excursion_table,
		array(
			'status'    => 'generated',
		),
		array( 'visual_number' => $visual_id_no, 'tour_id' => $tour_name, 'passengers_type' => $passenger_type ),
		array( '%s' ),
		array( '%s', '%d', '%s' )
	);


	$generated_count = $wpdb->get_var(
		$wpdb->prepare(
			"SELECT COUNT(*) FROM $excursion_table WHERE `tour_id` = %s AND `status` = 'generated'",
			$tour_name
		)
	);
	update_field( 'sold_excursion_ticket', $generated_count, $tour_name );

	$pending_count = $wpdb->get_var(
		$wpdb->prepare(
			"SELECT COUNT(*) FROM $excursion_table WHERE `tour_id` = %s AND `status` = 'pending'",
			$tour_name
		)
	);
	update_field('available_excursion_ticket', $pending_count, $tour_name);
}

// Generate Excursion Tickets callback
function generate_excursion_tickets_function(){
    require_once get_stylesheet_directory() . '/phpqrcode/qrlib.php';
    ?>
    <style type="text/css">
		.doc-info-message {
			border-left-color: #72aee6;
		}
		.csv-info {
			display: none;
			background: #fff;
			border: 1px solid #c3c4c7;
			border-left-width: 5px;
			box-shadow: 0 1px 1px rgba(0, 0, 0, .08);
			margin: 10px 0px 2px;
			padding: 0px 10px;
		}
    </style>
    <div class="wrap">
        <h1>Generate Excursion Tickets</h1>
        <form method="post" enctype="multipart/form-data" name='generate_excursion_tickets_frm' id="generate_excursion_tickets_frm">
            <div id="tour-selection-wrapper">
                <table class="form-table">
                    <tr>
                        <th><label for="tour-select">Select Tour:</label></th>
                        <td>
                            <select name="tour_id" id="tour-select">
                                <option value="">Select a Tour</option>
                                <?php
                                $excursion_tours = get_posts(
                                    array(
                                      'post_type' => 'excursion-tour',
                                      'post_status' => 'publish',
                                      'numberposts' => -1,
                                  )
                                );
                                foreach ($excursion_tours as $tour) {
                                    echo '<option value="' . esc_attr($tour->ID) . '">' . esc_html($tour->post_title) . '</option>';
                                }
                                ?>
                            </select>
                        </td>
                    </tr>
                </table>
            </div>
            <div id="tour-details-wrapper" style="display: none;">
                <table class="form-table">
                    <tr style="display: none;">
                        <th><label for="tour-name">Tour Name:</label></th>
                        <td><input type="text" name="tour_name" id="tour-name" class="regular-text" readonly></td>
                    </tr>
                    <tr>
                        <th><label for="tour-phone-details">Tour Phone:</label></th>
                        <td><input type="text" name="tour_phone_details" id="tour-phone-details" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label for="tour-Whatsapp-details">Tour WhatsApp:</label></th>
                        <td><input type="text" name="tour_Whatsapp_details" id="tour-Whatsapp-details" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label for="tour-email-details">Tour Email:</label></th>
                        <td><input type="email" name="tour_email_details" id="tour-email-details" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label for="validity-date">Validity Date:</label></th>
                        <td><input type="date" name="validity_date" id="validity-date" class="regular-text" required></td>
                    </tr>
                    <tr>
                        <th><label for="location-link">Location Link:</label></th>
                        <td><input type="url" name="location_link" id="location-link" class="regular-text"></td>
                    </tr>
                    <tr>
                        <th><label for="tour_address">Tour Address:</label></th>
                        <td><textarea name="tour_address" id="tour-address" class="regular-text"></textarea></td>
                    </tr>
                    <tr>
                        <th><label for="tour-logo-link">Tour Logo Link:</label></th>
                        <td><input type="url" name="tour_logo_link" id="tour-logo-link" class="regular-text" readonly> <a href="" target="_blank" class="tourLogoLink">View</a></td>
                    </tr>
                    <tr>
                        <th><label for="tour-image-link">Tour Image Link:</label></th>
                        <td><input type="url" name="tour_image_link" id="tour-image-link" class="regular-text" readonly> <a href="" target="_blank" class="tourImageLink">View</a></td>
                    </tr>
                    <tr>
                    <th><label for="rules-and-regulation-details">Tour Rules and Regulation</label></th>
                    <td>
                        <textarea name="rules_and_regulation_details" id="rules-and-regulation-details" class="large-text" cols="60" rows="12"></textarea>
                        <p class="description"><?php _e('General Rules and Regulation/Important Information.') ?></p>
                    </td>
                </tr>
                </table>
                <p class="submit"><a href="javascript:void(0);" id="upload_csv_option" class="button button-primary">Continue to Generate Ticket</a></p>
            </div>
            <div id="upload-ticket-csv-wrapper" style="display: none;">
                <!-- The basic form (same as before, but no PHP submission) -->
  <table class="form-table">
    <tr>
      <th><label for="agent-details">Agent</label></th>
      <td><input type="text" name="agent-details" id="agent-details" size="15" class="regular-text"></td>
    </tr>
    <tr>
      <th><label for="ticket-lead-name">Lead Passengers Name</label></th>
      <td><input type="text" name="ticket-lead-name" id="ticket-lead-name" size="15" class="regular-text"></td>
    </tr>
    <tr>
      <th><label for="travel_date">Travel Date</label></th>
      <td><input type="date" name="travel_date" id="travel_date" size="10" class="small-input"></td>
    </tr>
    <tr>
      <th><label for="adult">Adult <span id="pending-adult-count" style="color: red;"></span></label></th>
      <td>
      	 <p class="description" id="adult-description"></p>
      	<input type="number" name="adult" id="adult" size="8" class="small-input" min="0">
      	<input type="hidden" name="available-adult" id="available-adult" value="">
        <label for="adult_price"><strong>Adult Price: </strong></label><input type="number" name="adult_price" id="adult_price" size="8" class="small-input"></td>
    </tr>
    <tr>
      <th><label for="child">Child <span id="pending-child-count" style="color: red;"></span></label></th>
      <td>
        <p class="description" id="child-description"></p>
        <input type="number" name="child" id="child" size="8" class="small-input" min="0">
        <input type="hidden" name="available-child" id="available-child" value="">
        <label for="child_price"><strong>Child Price: </strong></label><input type="number" name="child_price" id="child_price" size="8" class="small-input"></td>
    </tr>
  </table>
  <p class="submit">
    <button type="button" id="verify_tickets_records" class="button">Verify Record</button>
  </p>

<!-- An empty container to place the generated table -->
<div id="dynamicTableContainer"></div>
                <div class="csv-info doc-info-message">
                	<p>Please do not reload or close this browser window, or else your imports will be fail.</p>
                </div>
            </div>
            <div id="csv-preview-wrapper" style="display: none; margin-top: 20px;">
                <div class="zip-download-wraper">
                    
                </div>
            </div>
        </form>
    </div>
    <script>
        jQuery(document).ready(function ($) {
            $(document).on('change', '#tour-select', function(e){
            	jQuery('#upload-csv').val('');
            	jQuery('#csv-preview-wrapper').hide();
            	jQuery('#generate_tickets_for_csv').hide();
                const tourId = $(this).val();
                if (tourId) {
                    $.ajax({
                        url: '<?php echo admin_url('admin-ajax.php'); ?>',
                        method: 'POST',
                        dataType: "json",
                        data: {
                            action: 'fetch_tour_details',
                            tour_id: tourId
                        },
                        success: function (response) {
                            const data = response;                            
                            if (data) {
                                $('#tour-details-wrapper').show();
                                $('#upload-ticket-csv-wrapper').hide();
                                $('#tour-name').val(data.tour_name);
                                $('#validity-date').val(data.validity_date);
                                $('#location-link').val(data.location_link);
                                $('#tour-address').text(data.tour_address);
                                $('#tour-image-link').val(data.tour_image_link);
                                $('.tourImageLink').attr('href', data.tour_image_link);
                                $('#tour-logo-link').val(data.tour_logo_link);
                                $('.tourLogoLink').attr('href', data.tour_logo_link);
                                $('#tour-phone-details').val(data.tour_phone);
                                $('#tour-Whatsapp-details').val(data.tour_whatsapp);
                                $('#tour-email-details').val(data.tour_email);
                                $('#rules-and-regulation-details').val(data.tour_rules_regulation);
                                $('#pending-child-count').text( 'Abailable Tickets( '+  data.pending_child_count +' )');
                                $('#pending-adult-count').text( 'Abailable Tickets( '+  data.pending_adult_count +' )');
                                $('input[name="child"]').attr( 'placeholder','Enter '+ data.pending_child_count +' or below tickets.');
                                $('input[name="adult"]').attr( 'placeholder','Enter '+ data.pending_adult_count +' or below tickets.');
                                $('input[name="available-child"]').val(data.pending_child_count);
                                $('input[name="available-adult"]').val(data.pending_adult_count);

                                if ( 0 == data.pending_child_count ) {
                                	$( 'input[name="child"]' ).attr("readonly", true);
                                	$( 'input[name="child"]' ).removeAttr("placeholder");
                                	$('#verify_tickets_records').attr("disabled", true);
                                } else {
                                	$( 'input[name="child"]' ).attr("readonly", false);
                                	$('#verify_tickets_records').removeAttr("disabled");
                                }
                                if ( 0 == data.pending_adult_count ) {
                                	$( 'input[name="adult"]' ).attr("readonly", true);
                                	$( 'input[name="adult"]' ).removeAttr("placeholder");
                                	$('#verify_tickets_records').attr("disabled", true);
                                } else {
                                	$( 'input[name="adult"]' ).attr("readonly", false);
                                	$('#verify_tickets_records').removeAttr("disabled");
                                }	
                            }
                        }
                    });
                } else {
                    $('#tour-details-wrapper').hide();
                }
            });
            jQuery(document).on('click', '#upload_csv_option', function(e){
                e.preventDefault();
                $('#tour-details-wrapper').hide();
                $('#upload-ticket-csv-wrapper').show();
                $('html, body').animate({ scrollTop: 0 }, 'slow');
            });

            $(document).on('input', 'input[name="adult"]', function() {
            	var availableAdult = parseInt($('input[name="available-adult"]').val(), 10);
            	var adult = parseInt($(this).val(), 10);
            	if (adult <= availableAdult) {
            		$('#verify_tickets_records').removeAttr("disabled");
            	} else {
            		alert('Please enter a value of ' + availableAdult + ' or below.');
            		$(this).val('');
            		$('#verify_tickets_records').attr("disabled", true);
            	}
            } );

            $( document ).on( 'input', 'input[name="child"]', function(){
            	var availableChild = parseInt($('input[name="available-child"]').val(), 10);
            	var child = parseInt($(this).val(), 10);
            	if (child <= availableChild) {
            		$('#verify_tickets_records').removeAttr("disabled");
            	} else {
            		alert('Please enter a value of ' + availableChild + ' or below.');
            		$(this).val('');
            		$('#verify_tickets_records').attr("disabled", true);
            	}
            } );

            $('#agent-details').on('focus', function() {
            	$(this).css('border', '1px solid #8c8f94');
            	$(this).css('background-color', '#fff');
            } );

            $('#travel_date').on('focus', function() {
            	$(this).css('border', '1px solid #8c8f94');
            } );

            $('#verify_tickets_records').on('click', function(e) {
                e.preventDefault();
                // 1) Get input values
                let agent        = $('#agent-details').val().trim();
                let ticketLeadName = $('#ticket-lead-name').val().trim();
                let travelDate   = $('#travel_date').val();
                let adultPrice = $('#adult_price').val();
                let childPrice = $('#child_price').val();
                let adultCount   = parseInt($('#adult').val()) || 0;
                let childCount   = parseInt($('#child').val()) || 0;

                var checkEmpty = false;
                if ( '' == agent ) {
                	checkEmpty = true
                	$('#agent-details').css('border', 'solid red 1px');
                }
                if ( '' == travelDate ) {
                	checkEmpty = true
                	$('#travel_date').css('border', 'solid red 1px');
                }

                if ( false == checkEmpty ) {

                // 2) Build the table HTML in a string or DOM methods
                let tableHtml = '<table class="wp-list-table widefat fixed striped" id="excursion-ticket-record">';
                tableHtml += `
                  <thead>
                    <tr>
                      <th>Sr No.</th>
                      <th>Name</th>
                      <th>Type</th>
                      <th>Agent</th>
                      <th>Travel Date</th>
                      <th>Price</th>
                    </tr>
                  </thead>
                  <tbody>
                `;
                // We'll increment row number each time
                let rowNum = 1;
                // 3) Generate Adult rows
                for (let i = 1; i <= adultCount; i++) {
                  tableHtml += `
                    <tr>
                      <td>${rowNum}</td>
                      <td><input type="text" name="member-name[]" value="${ticketLeadName}" size="18" class="small-input"></td>
                      <td><input type="text" name="member-type[]" value="Adult" readonly size="12" class="small-input"></td>
                      <td><input type="text" name="member-agent[]" value="${agent}" size="15" class="small-input"></td>
                      <td><input type="text" name="member-travelDate[]" value="${travelDate}" readonly size="12" class="small-input"></td>
                      <td><input type="text" name="member-price[]" value="${adultPrice}" readonly size="12" class="small-input"></td>
                    </tr>
                  `;
                  rowNum++;
                }
                // 4) Generate Child rows
                for (let j = 1; j <= childCount; j++) {
                  tableHtml += `
                    <tr>
                      <td>${rowNum}</td>
                      <td><input type="text" name="member-name[]" value="${ticketLeadName}" size="18" class="small-input"></td>
                      <td><input type="text" name="member-type[]" value="Child" readonly size="12" class="small-input"></td>
                      <td><input type="text" name="member-agent[]" value="${agent}" size="15" class="small-input"></td>
                      <td><input type="text" name="member-travelDate[]" value="${travelDate}" readonly size="12" class="small-input"></td>
                      <td><input type="text" name="member-price[]" value="${childPrice}" readonly size="12" class="small-input"></td>
                    </tr>
                  `;
                  rowNum++;
                }
                tableHtml += '</tbody></table><br><div style="display: flex;"><input type="submit" name="generate_table_tickets" id="generate_table_tickets" class="button" value="Generate Tickets"><span class="spinner"></span></div>';
                // 5) Inject the generated table into the container
                $('#dynamicTableContainer').html(tableHtml);
            }
              });


            $('#generate_excursion_tickets_frm').on('submit', function (e) {
                e.preventDefault(); // Prevent default form submission
                $("#generate_table_tickets").attr("disabled", true);
                $(".spinner").addClass("is-active");
                $(".csv-info").show();
                $(".zip-download").hide();
                // Gather form data
                let formData = new FormData(this);
                // Gather table rows data
                $('#excursion-ticket-record tbody tr').each(function () {
                    let row = $(this);
                    formData.append('exc_passenger_name[]', row.find('input[name="member-name[]"]').val());
                    formData.append('exc_passenger_type[]', row.find('input[name="member-type[]"]').val());
                    formData.append('exc_agent_details[]', row.find('input[name="member-agent[]"]').val());
                    formData.append('exc_travel_date[]', row.find('input[name="member-travelDate[]"]').val());
                    formData.append('exc_selling[]', row.find('input[name="member-price[]"]').val());
                });
                formData.append('action', 'generate_pdf_from_csv');
                // AJAX request to save the data
                jQuery.ajax({
                    url: '<?php echo admin_url('admin-ajax.php'); ?>',
                    method: 'POST',
                    data: { 'action': 'get_upload_path'
                    },
                    success: function (response) {
                        formData.append('dirpath', response.data);
                        save_data_and_generate_ticket_pdf(formData, response.data);
                    },
                    error: function () {
                        alert('Error occurred while generating Folder.');
                    },
                });
                
            });

            function save_data_and_generate_ticket_pdf(formData, dirPath) {
            	$.ajax({
            		url: '<?php echo admin_url('admin-ajax.php'); ?>',
            		method: 'POST',
            		data: formData,
            		processData: false,
            		contentType: false,
            		success: function (response) {
                         $("#generate_table_tickets").removeAttr("disabled");
            			if (response.success) {
            				jQuery.ajax({
            					url: '<?php echo admin_url('admin-ajax.php'); ?>',
            					method: 'POST',
            					data: {'action':'generate_zip', 'zip_path':dirPath},
            					success: function (response) {
            						if (response.data.zip_url) {
            							$('#csv-preview-wrapper .zip-download-wraper').html( '<a class="zip-download button" href="'+response.data.zip_url+'" download>Download Zip</a>' );
            						} else {
            							alert(response.data.message);
            						}
            					},
            					error: function () {
            						alert('Error occurred while generating PDFs.');
            					},
            				});
            				alert(response.data.message);
            				$(".spinner").removeClass("is-active");
            				$(".csv-info").hide();
            				$("#csv-preview-wrapper").show();
            			} else {
            				alert('Error: ' + response.data.message);
            			}
            		},
            		error: function (err) {
            			alert('AJAX error occurred.');
            			console.error(err);
            		}
            	});
            }
        });
    </script>
    <?php
}

/**
 * Create folder for PDF
 */
function get_upload_path() {
    $upload_dir = wp_upload_dir();
    $upload_path = $upload_dir['basedir'].'/excursion-tickets-test/'.current_time('timestamp');
    wp_send_json_success( $upload_path );
    exit;
}
add_action('wp_ajax_get_upload_path', 'get_upload_path');
add_action('wp_ajax_nopriv_get_upload_path', 'get_upload_path');

/**
 * Generated and save excursion ticket.
 */
function generate_pdf_from_csv() {
    global $wpdb;
    $upload_dir = wp_upload_dir();
    $tour_id      = sanitize_text_field($_POST['tour_id']);
    $tour_name    = sanitize_text_field($_POST['tour_name']);
    $tour_phone_details   = sanitize_text_field($_POST['tour_phone_details']);
    $tour_Whatsapp_details = sanitize_text_field($_POST['tour_Whatsapp_details']);
    $tour_email_details   = sanitize_email($_POST['tour_email_details']);
    $validity_date = sanitize_text_field($_POST['validity_date']);
    $location_link = esc_url($_POST['location_link']);
    $tour_address  = sanitize_textarea_field($_POST['tour_address']);
    $tour_logo_link = esc_url($_POST['tour_logo_link']);
    $tour_image_link = esc_url($_POST['tour_image_link']);
    $rules_and_regulation_details = sanitize_textarea_field($_POST['rules_and_regulation_details']);
    $reference_number = isset($_POST['reference_number']) && ! empty($_POST['reference_number']) ? sanitize_textarea_field($_POST['reference_number']) : '';

    // Gather table data
    $exc_passenger_names = isset($_POST['exc_passenger_name']) ? $_POST['exc_passenger_name'] : [];
    $exc_passenger_types = isset($_POST['exc_passenger_type']) ? $_POST['exc_passenger_type'] : [];
    $exc_agent_details = isset($_POST['exc_agent_details']) ? $_POST['exc_agent_details'] : [];
    $exc_travel_dates = isset($_POST['exc_travel_date']) ? $_POST['exc_travel_date'] : [];
    $exc_sellings = isset($_POST['exc_selling']) ? $_POST['exc_selling'] : [];

    $upload_path = $_POST['dirpath'];

     // $booking_ref_no = 'DT' . substr(str_shuffle('0123456789'), 0, 10);
     require_once get_stylesheet_directory() . '/phpqrcode/qrlib.php';
    // Insert each row into the database
    $booking_ref_no = dahrtours_generate_unique_excursion_booking_id( $tour_id );
    foreach ($exc_passenger_names as $index => $name) {
     	// Get visual number 
     	$table_name = $wpdb->prefix . 'excursion_tour_data';
     	$get_visual_number = $wpdb->get_row(
     		$wpdb->prepare(
     			"SELECT `visual_number` FROM `$table_name` WHERE `tour_id` = %d AND `passengers_type`= %s AND `status` = %s",
     			$tour_name,
     			$exc_passenger_types[$index],
     			'pending'
     		)
     	);

     	if ( ! empty( $get_visual_number ) && ! empty( $get_visual_number->visual_number ) ) {
        	// Generate QR code
     		$filepath     = $upload_dir['basedir'].'/excursion-tickets-test/qrimg/'.$name.$index.time().'.png';
     		$filepath1    = $upload_dir['baseurl'].'/excursion-tickets-test/qrimg/'.$name.$index.time().'.png';
     		$codeContents = $get_visual_number->visual_number;
     		$QR_width  = 300;
     		$QR_height = 300;
     		$QR = imagecreatetruecolor($QR_width, $QR_height);
     		$white = imagecolorallocate($QR, 255, 255, 255);
     		imagefill($QR, 0, 0, $white);
     		QRcode::png($codeContents, $filepath, QR_ECLEVEL_H, 10, 0);
     		$QR = imagecreatefrompng($filepath);
     		imagepng($QR, $filepath);
     		$base64Image = convert_image_url_to_base64($filepath1);

     		$data = [
     			'guest_name'       => sanitize_text_field($name),
     			'guest_type'       => sanitize_text_field($exc_passenger_types[$index]),
     			'validity_date'    => $validity_date,
     			'tour_name'        => $tour_name,
     			'location_link'    => $location_link,
     			'location_address' => $tour_address,
     			'travel_date'      => $exc_travel_dates[$index],
     			'unique_id'        => $get_visual_number->visual_number,
     			'tour_logo'        => $tour_logo_link,
     			'tour_image'       => $tour_image_link,
     			'booking_ref_no'   => $booking_ref_no,
     			'qr_code'          => $base64Image,
     			'tour_phone_details'     => $tour_phone_details,
     			'tour_Whatsapp_details'  => $tour_Whatsapp_details,
     			'tour_email_details'     => $tour_email_details,
     			'rules_and_regulation_details' => $rules_and_regulation_details,
     			'exc_selling_price'                => $exc_sellings[$index],
     			'agent_details'                => $exc_agent_details[$index],
     			'reference_number'                => $reference_number,
     		];
        	save_generated_excursion_ticket( $data, '' ); // Insert record in DB
        	save_excursion_ticket($data, $upload_path); // PDF
    	} else {
    		wp_send_json_success(['message' => $exc_passenger_types[$index] . 'Barcode not found for '. get_the_title( $tour_name )]);
   		}
    }
    // Return success response
    wp_send_json_success( ['message' => 'Ticket generate successfully.'] );
}
add_action('wp_ajax_generate_pdf_from_csv', 'generate_pdf_from_csv');
add_action('wp_ajax_nopriv_generate_pdf_from_csv', 'generate_pdf_from_csv');

/**
 * Error log
 */
function custom_error_log($message, $file_path = null) {
 $upload_dir = wp_upload_dir();
 $custom_log_file = $upload_dir['basedir']. '/custom-logs/error_log.txt';
 if (!file_exists(dirname($custom_log_file))) {
    mkdir(dirname($custom_log_file), 0755, true);
}
if (!$file_path) {
    $file_path = $upload_dir['basedir'] . '/custom-logs/error_log.txt';
}
$formatted_message = '[' . date('Y-m-d H:i:s') . '] ' . $message . PHP_EOL;
file_put_contents($file_path, $formatted_message, FILE_APPEND | LOCK_EX);
}

function save_excursion_ticket($data, $path) {
    $response = array();
    $response['status'] = 'error';
    ob_start();
    include("excursion-ticket-pdf-template.php");

    $output = ob_get_contents();
    ob_end_clean();

    $full_name = ucfirst($data['guest_name']);
    $dompdf = new Dompdf\Dompdf();
    $dompdf->loadHtml($output);
    $dompdf->setPaper('A4', 'portrait');
    $dompdf->render();

    $pdf_content = $dompdf->output();

    /*$file_name = $full_name . '_' . current_time('timestamp') . '.pdf';
    if ( file_exists( $path.'/'. $file_name  ) ){
    	$filename1 = explode( '_', $file_name );
    	$file = explode( '.', $filename1[1] );
    	$filename = $file[0] + 1;
   		$file_name = $filename1[0] . '_' . $filename . '.pdf';
    	}*/

        $file_name = $full_name . '_' . current_time('timestamp') . '_' . rand(1000, 9999) . '.pdf';

        if ( file_exists( $path . '/' . $file_name ) ) {
            $filename_parts    = explode('_', $file_name);
            $firstname         = $filename_parts[0];
            $timestamp         = $filename_parts[1];
            $random_number     = $filename_parts[2];
            $new_random_number = $random_number + 1;
            $file_name         = $firstname . '_' . $timestamp . '_' . $new_random_number . '.pdf';
            custom_error_log("File already exists: " . $file_name);
        } else {
            custom_error_log("File created: " . $file_name);
        }


    $file_path = rtrim($path, DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR . $file_name;

    if (!file_exists($path)) {
        mkdir($path);
    }

    if (file_put_contents($file_path, $pdf_content) === false) {
        $response['status'] = 'error';
        $response['message'] = "Failed to save PDF to path: $file_path";
    } else {
        $response['status'] = 'success';
        $response['message'] = "PDF saved successfully at: $file_path";
    }

    return $response;
}

function convert_image_url_to_base64($image_url) {
    $response = wp_remote_get($image_url);
    
    if (is_wp_error($response)) {
        return false;
    }

    $image_data = wp_remote_retrieve_body($response);

    $image_info = pathinfo($image_url);
    $extension = isset($image_info['extension']) ? $image_info['extension'] : '';
    $mime_type = 'image/' . strtolower($extension);

    return 'data:' . $mime_type . ';base64,' . base64_encode($image_data);
}


function dahrtours_generate_zip() {
        $zip_path = $_POST['zip_path'];
        $folder_name = basename($zip_path);
        $upload_dir = wp_upload_dir();
        $media_folder = $upload_dir['basedir'] . '/excursion-tickets-test/' . $folder_name;
        $zip_file = $upload_dir['basedir'] . '/excursion-tickets-test/excursion-tickets-' . $folder_name . '.zip';

        if (!is_dir($media_folder)) {
            return new WP_Error('invalid_folder', __('The specified folder does not exist.'));
        }
        $zip = new ZipArchive();
        if ($zip->open($zip_file, ZipArchive::CREATE | ZipArchive::OVERWRITE) !== true) {
            return new WP_Error('zip_error', __('Could not create zip file.'));
        }

        $files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($media_folder), RecursiveIteratorIterator::LEAVES_ONLY);
        foreach ($files as $file) {
            if (!$file->isDir()) {
                $file_path = $file->getRealPath();
                $relative_path = substr($file_path, strlen($media_folder) + 1);
                $zip->addFile($file_path, $relative_path);
            }
        }
        $zip->close();

        // Check if the zip was created
        if (file_exists($zip_file)) {
            $zip_url = wp_upload_dir()['baseurl'] . '/excursion-tickets-test/excursion-tickets-' . $folder_name . '.zip';
            wp_send_json_success(['zip_url' => $zip_url]);
            exit;
        } else {
            echo 'Failed to create the zip file.';
        }
        exit;
}
add_action('wp_ajax_generate_zip', 'dahrtours_generate_zip');
add_action('wp_ajax_nopriv_generate_zip', 'dahrtours_generate_zip');


function fetch_tour_details() {
    global $wpdb;
    $tour_id = intval($_POST['tour_id']);
    $validity_date = ! empty( get_field( 'excursion_ticket_validity_date', $tour_id ) ) ? get_field( 'excursion_ticket_validity_date', $tour_id ) : 0;
    $formattedDate = '';
    if ( ! empty( $validity_date ) ) {
        $date = DateTime::createFromFormat('d/m/Y', get_field( 'excursion_ticket_validity_date', $tour_id ));
        $formattedDate = $date->format('Y-m-d');
    }

    $excursion_table = $wpdb->prefix . 'excursion_tour_data';
    $pending_adult_count = $wpdb->get_var(
		$wpdb->prepare(
			"SELECT COUNT(*) FROM $excursion_table WHERE `tour_id` = %s AND `status` = 'pending' AND `passengers_type` = 'Adult'",
			$tour_id
		)
	);

    $pending_child_count = $wpdb->get_var(
		$wpdb->prepare(
			"SELECT COUNT(*) FROM $excursion_table WHERE `tour_id` = %s AND `status` = 'pending' AND `passengers_type` = 'Child'",
			$tour_id
		)
	);

    $response = '';
    if ($tour_id) {
        $response = array(
            'tour_name'       => $tour_id,
            'validity_date'   => $formattedDate,
            'location_link'   => get_field( 'excursion_ticket_location_link', $tour_id ),
            'tour_address'    => get_field( 'excursion_ticket_tour_address', $tour_id ),
            'tour_image_link' => get_field( 'excursion_ticket_tour_image', $tour_id ),
            'tour_logo_link'  => get_field( 'excursion_ticket_tour_logo', $tour_id ),
            'tour_phone'      => get_field( 'excursion_ticket_tour_phone', $tour_id ),
            'tour_whatsapp'   => get_field( 'excursion_ticket_tour_whatsapp', $tour_id ),
            'tour_email'      => get_field( 'excursion_ticket_tour_email', $tour_id ),
            'tour_rules_regulation' => get_field( 'excursion_ticket_tour_rules_and_regulation', $tour_id ),
            'pending_child_count' => $pending_child_count,
            'pending_adult_count' => $pending_adult_count,
        );
    }
    echo json_encode( $response);
    wp_die();
}
add_action('wp_ajax_fetch_tour_details', 'fetch_tour_details');
add_action('wp_ajax_nopriv_fetch_tour_details', 'fetch_tour_details');

function convert_textarea_to_list($textarea_content) {
    // Split the content by new lines
    $lines = explode("\n", $textarea_content);

    // Filter empty lines and trim whitespace
    $lines = array_filter(array_map('trim', $lines));
    
    $allowed_html = [
        'strong' => [],
        'a' => ['href' => [], 'title' => []],
        'br' => [],
        'span' => ['class' => []],
        'b' => [],
    ];

    // Process each line to determine whether to wrap it in <li>
    $list_items = array_map(function($line) use ($allowed_html) {
        if (strpos($line, '--') !== false) {
            $line = str_replace('--', '<b>', $line) . '</b>';
            return '<tr><td><ul><li>' . wp_kses($line, $allowed_html) . '</li></ul></td></tr>';
        }
        return '<tr><td><ul><li>' . wp_kses($line, $allowed_html) . '</li></ul></td></tr>';
    }, $lines);

    return implode('', $list_items);
}

