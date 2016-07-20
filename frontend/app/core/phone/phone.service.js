'use strict';

angular.
  module('core.phone').
  factory('Phone', ['$resource',
    function($resource) {
      return $resource('http://basic/backend/web/phones/:phoneId', {}, {
        query: {
          method: 'GET',
          //params: {phoneId: 'phoneId'},
          isArray: true
        }
      });
    }
  ]);
