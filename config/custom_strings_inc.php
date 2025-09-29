<?php
# Translation for Custom Status Code: pending
switch( $g_active_language ) {

	case 'italian':
		$s_status_enum_string = '10:nuova,20:da discutere,30:riconosciuta,40:confermata,50:assegnata,60:in attesa,80:risolta,90:chiusa';

		$s_pending_bug_title = 'Poni in attesa di evento esterno';
		$s_pending_bug_button = 'In attesa';

		$s_email_notification_title_for_status_bug_pending = 'La seguente anomalia è stata posta IN ATTESA di evento esterno.';
		break;

	default: # english
		$s_status_enum_string = '10:new,20:feedback,30:acknowledged,40:confirmed,50:assigned,60:pending,80:resolved,90:closed';

		$s_pending_bug_title = 'Mark issue Ready for pending';
		$s_pending_bug_button = 'Waiting for external event';

		$s_email_notification_title_for_status_bug_pending = 'The following issue has been set to Pending status, waiting for an external event.';
		break;
}
