<?php

/**
 * @file controllers/grid/eventLog/linkAction/EmailLinkAction.inc.php
 *
 * Copyright (c) 2014-2016 Simon Fraser University Library
 * Copyright (c) 2003-2016 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class EmailLinkAction
 * @ingroup controllers_api_submission
 *
 * @brief An action to open up a modal to view an email sent to a user.
 */

import('lib.pkp.classes.linkAction.LinkAction');
import('lib.pkp.classes.linkAction.request.AjaxModal');

class EmailLinkAction extends LinkAction {
	/**
	 * Constructor
	 * @param $request Request
	 * @param $modalTitle string Title of the modal
	 * @param $actionArgs array The action arguments.
	 */
	function EmailLinkAction($request, $modalTitle, $actionArgs) {
		$router = $request->getRouter();

		// Instantiate the view email modal.
		$ajaxModal = new AjaxModal(
			$router->url($request, null, null, 'viewEmail', null, $actionArgs),
			$modalTitle,
			'modal_email'
		);

		// Configure the link action.
		parent::LinkAction(
			'viewEmail',
			$ajaxModal,
			$modalTitle,
			'notify'
		);
	}
}

?>
