<?php

$router->add('GET', '/', 'HomeController@getIndex');
$router->add('GET', '/versions', 'VersionsController@getIndex');
$router->add('GET', '/versions/[:version]', 'VersionsController@getVersion');
$router->add('GET', '/panel', 'PanelController@getIndex');
$router->add('GET', '/panel/submissions', 'PanelController@getSubmissionList');
$router->add('GET', '/panel/submissions/[:id]', 'PanelController@getSubmission');