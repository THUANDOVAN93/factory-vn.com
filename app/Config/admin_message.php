<?php
Configure::write('Admin.Message', array(
    'DbUpdateSuccess'          => 'Data saved successfully.',
    'DbDeleteSuccess'          => 'Data has been deleted.',
    'DbDeleteFailed'           => 'Failed to delete data.',
    'DbDeleteFailedForeignKey' => '%sCould not delete it because there is data using.',
    'DbDeleteFailedRowLarge'   => 'The information entered for each item is too large to save.',
    'ValidateError'            => 'There is an input error.',
    'ValidateErrorPhotoCancel' => 'The image upload was canceled because there was an input error. Please remove all other input errors and upload the image.',
    'AccessDataNotFound'       => 'You are trying to access data that does not exist.',
    'AccessDataLoginUser'      => 'The user information while logged in can not use the delete function.',
    'UpdateAlertExists'        => 'There are properties for which the renewal deadline has passed.',
    'UpdateAlertEmpty'         => 'There are no properties for which the renewal deadline has passed.',
    'AuthFailed'               => 'I moved to the top page after login because I accessed a page that can not be accessed with the current login information.',
    'AutoLogout'               => 'Please login. (If there is no operation for a certain period, you will be logged out automatically.)',

    'Title'                    => '%s | FACTORY-VN Property Management CMS',
));
